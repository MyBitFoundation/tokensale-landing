<?php

use DrewM\MailChimp\MailChimp;

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

        mail($to, $subject, $message, $headers);

        return array(
            'result' => true
        );

    }
}