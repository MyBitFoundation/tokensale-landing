<?php

use DrewM\MailChimp\MailChimp;

require_once 'logfile.php';
require_once 'translate.php';
require_once 'constants.php';

class Common {

    CONST MAIL_CHIMP_API_KEY                    = 'a16eef292e1d5834ea7a06aeb7176cb4-us15';
    const MAIL_CHIMP_LIST_ID_SUBSCRIPTIONS      = 'dbcac41639';
    const MAIL_CHIMP_LIST_ID_STAY_IN_TOUCH      = '882814ab87';

    public static function getInstance() {
        static $instance = null;
        if (null === $instance) {
            $instance = new self();
        }
        return $instance;
    }

    private $version = [
        'css' => 2,
        'js' => 1,
        'js_lib' => 1,
        'images' => 1
    ];

    public function getVersion($type) {
        if(isset($this->version[$type]))
            return $this->version[$type];
        return 1;
    }

    public function http($slash = true){
        return sprintf(
            "%s://%s".($slash ? '/' : ''),
            isset($_SERVER['HTTPS']) && $_SERVER['HTTPS'] != 'off' ? 'https' : 'http',
            $_SERVER['SERVER_NAME']
        );
    }

    public function getCountryByIp($ip) {
        $details = json_decode(file_get_contents("http://ipinfo.io/{$ip}"));
        return $details->country;
    }

    public function getWrapperClass($uri) {
        if(isset($uri['wrapper_class']))
            return $uri['wrapper_class'];
    }

    public function subscribeMailChimp($email) {
        require_once 'lib/mailchimp-api/MailChimp.php';

        $MailChimp = new MailChimp(self::MAIL_CHIMP_API_KEY);

        $result = $MailChimp->post("lists/".self::MAIL_CHIMP_LIST_ID_SUBSCRIPTIONS."/members", [
            'email_address' => $email,
            'status'        => 'subscribed',
        ]);

        if($result['status'] == 'subscribed') {
            $response = array(
                'result' => true
            );
        } else {
            $response = array(
                'result' => false,
                'error'  => $result['detail']
            );
        }

        return $response;
    }

    public function sayInTouchMail($email,$name,$reference,$message) {
        if($name) {
            $name = '<p>Name: '.$name.'</p>';
        }

        if($message) {
            $message = '<p>Message: '.$message.'</p>';
        }

        if($reference) {
            $reference = '<p>Reference: '.$reference.'</p>';
        }

        $to  = EMAIL_CONTACT_FORM;
        $from = "contact@mybit.io";
        $subject = "Contact form";

        $message = '
                <html>
                    <head>
                        <title>Contact form</title>
                    </head>
                    <body>
                        <h2>Contact form</h2>
                        '.$name.'
                        <p>Email: '.$email.'</p>
                        '.$reference.'
                        '.$message.'
                    </body>
                </html>';


        $headers  = "Content-type: text/html; charset=utf-8 \r\n";
        $headers .= "From: Mybit <".$from.">\r\n";
        $headers .= "Bcc: ".$from."\r\n";

        $result = mail($to, $subject, $message, $headers);

        return array(
            'result' => true,
            'r' => $result
        );

    }

    public function getPercentBetweenDate($current,$start,$end) {
        if($current > $end)
            return 100;

        if($current < $start)
            return false;

        return round(($current-$start) / (($end-$start)/100));
    }

}
