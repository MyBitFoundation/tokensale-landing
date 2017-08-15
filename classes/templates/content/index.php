<?php

    $currentTime = time();
    $roadMapDays = array(
        strtotime('01-11-2016 12:00:00'),
        strtotime('01-02-2017 12:00:00'),
        strtotime('01-05-2017 12:00:00'),
        strtotime('01-06-2017 12:00:00'),
        strtotime('01-07-2017 12:00:00'),
        strtotime('01-01-2018 12:00:00'),
        strtotime('15-02-2018 00:00:00')
    );

?>
<div id="large-header" class="section large-header section__inverse">
    <canvas id="demo-canvas" class="canvas__bg"></canvas>
    <div class="section__intro">
        <div class="container">
            <img src="images/logo_full.png" alt="" class="logo wow animated fadeInUp"/>
            <h1 class="h1 wow animated fadeInUp" data-wow-delay="0.1s" ><?php echo t::message('global','UNLOCKING BILLIONS IN IOT REVENUE'); ?></h1>
            <div class="date__box wow animated fadeInUp" data-wow-delay="0.2s">
                <span class="date"><?php echo t::message('global','Crowdsale over'); ?></span>
            </div>
            <div class="offer-box wow animated fadeInUp sign-in-block" data-wow-delay="0.3s">
                <span class="title"><?php echo t::message('global','Pre-Register Today'); ?></span>

                <form class="form form__offer pre_offer">
                    <div class="form__row"> <!--add class error-->
                        <div class="input__wrap">
                            <input type="email" name="email" placeholder="Enter email" class="input">
                            <a href="javascript:;" class="btn__inInput btn_pre_sign_up submit_event"><?php echo t::message('global','sign Up'); ?></a>
                        </div>
                        <span class="form__hint"><?php echo t::message('global','You’re almost done! Please check your email to confirm your subscription.'); ?></span>
                        <span class="form__errorTxt"></span>
                    </div>
                </form>
                <span class="title small"><?php echo t::message('global','Already have an account?'); ?> <a href="#" class="link yellow" data-toggle="modal" data-target="#modal-signIn"> <?php echo t::message('global','Sign in'); ?></a></span>
            </div>
            <div class="offer-box wow animated fadeInUp go-to-dashboard-block" data-wow-delay="0.3s" style="display: none;">
                <a href="" class="btn btn-shadow yellow"><?php echo t::message('global','Go to dashboard'); ?></a>
            </div>

            <div class="counter__box wow animated fadeInUp" data-wow-delay="0.5s">
                <div class="counter__item">
                    <div class="counter__ic">
                        <img src="images/counter_1.svg" alt=""/>
                    </div>
                    <span class="counter__value crowdsale_amount_eth">0</span>
                    <span class="counter__desc">Amount Raised in ETH</span>
                </div>
                <div class="counter__item">
                    <div class="counter__ic">
                        <img src="images/counter_2.svg" alt=""/>
                    </div>
                    <span class="counter__value crowdsale_amount_usd">$0</span>
                    <span class="counter__desc">Amount Raised in USD</span>
                </div>
                <div class="counter__item">
                    <div class="counter__ic">
                        <img src="images/counter_3.svg" alt=""/>
                    </div>
                    <span class="counter__value crowdsale_count_investors">0</span>
                    <span class="counter__desc">Number of Backers</span>
                </div>
            </div>

        </div>
    </div>
</div>

<div id="aboutMybit" class="section section__aboutMybit wow animated fadeInUp" data-wow-offset="50">
    <div class="container">
        <div class="row">
            <div class="col-xs-12 col-md-11 col-md-offset-1 col-lg-offset-0">
                <div class="desc">
                    <p><strong><?php echo t::message('global','Introduction'); ?></strong></p>
                    <p><?php echo t::message('global','What MyBit does is enable ownership of a specific IoT asset to be easily distributed among several owners (investors). With the rise of the upcoming machine economy, our vision is to have machines owned by people all over the world, rather than centralized parties maintaining ownership and the resulting revenue streams.'); ?></p>
                    <p><?php echo t::message('global','MyBit enables the crowdfunding of revenue generating machines (IoT Assets). So anyone can buy a percentage stake in a device that generates revenue and in return receive a portion of revenue the machine produces. This inverts the financing model and revenue flow to create a more scalable and democratic model which unlocks hundreds of billions of dollars in investment opportunities previously reserved for large centralized institutions to the average person.'); ?></p>
                </div>
            </div>
        </div>
        <div class="video__wrap">
            <div class="video__box">
                <iframe src="<?php echo t::message('global','video_url'); ?>" frameborder="0" allowfullscreen class="video"></iframe>
            </div>
        </div>
        <div class="row">
            <div class="col-xs-12 col-md-11 col-md-offset-1 col-lg-offset-0">
                <div class="desc">
                    <p><strong><?php echo t::message('global','First Market'); ?></strong></p>
                    <p><?php echo t::message('global','We are starting with solar panels to accelerate the decentralized energy grid. Since the current energy structure is not sustainable (scalable at speed), it will require decentralized energy solutions. Traditional financing models would only enable a small fraction of the population to own / participate in the decentralized solutions.'); ?></p>
                    <p><?php echo t::message('global','In 2008, the world relied on renewable sources for around 16% of its total primary energy supply. In 2013, renewables accounted for almost 22% of global electricity generation, and the IEA Medium-Term Renewable Energy Report of 2015 foresees that share reaching a minimum 26% increase in 2020. facilities, will be a critical component of the solution to the increased energy demand.'); ?></p>
                    <p><?php echo t::message('global','Solar energy is the fastest growing component within renewables. Today, most solar power is produced by large scale solar farms consisting of thousands of PV solar panels. These farms are primarily owned and operated by municipalities and or large utility companies. Soon (3-5 years), the clear majority of new solar power will come from micro or nanogrids, small solar power systems sitting atop residential and commercial rooftops, owned by active "prosumers" (producers and consumers) who monetize their space to gain progressive independence from the grid and create revenue streams.'); ?></p>
                </div>
            </div>
        </div>
        <div class="btn__row">
            <a href="<?php echo $path_whitepaper; ?>" target="_blank" class="btn btn-progress btn-download_js">
                <span class="progress" style="transition-duration: 4s"></span>
                <span class="download-icon__wrap">
				        <span class="download-icon__top">
				            <i class="icon-download-top"></i>
				        </span>
				        <span class="line"></span>
				        <span class="download-icon__btm">
				            <i class="icon-download-btm"></i>
				        </span>
				    </span>
                <span class="download-icon__check"><i class="icon-check"></i></span>
                <span class="title title_calm"><?php echo t::message('global','Download whitepaper'); ?></span>
                <span class="title title_during"><?php echo t::message('global','Downloading'); ?> <span class="value">38</span>%</span>
                <span class="title title_ready"><?php echo t::message('global','Downloaded'); ?></span>
            </a>
        </div>

        <div class="section__use">
            <h2 class="h2 section__title">Use Cases</h2>
            <div class="use__box">
                <div class="use__item smart" data-name="smart">
                    <div class="use__basic">
                        <div class="use__iconWrap">
                            <span class="use__circles"></span>
                            <img src="images/use_case/smart_property.svg" alt="Smart Property" class="use__icon"/>
                        </div>
                        <span class="use__title">Smart Property</span>
                    </div>
                    <div class="use__more">
                        <a href="" class="use__close"><i class="icon-close"></i></a>
                        <div class="use__moreIn">
                            <p>Smart Locks can be installed on existing brick and mortar properties or be integrated into the design of new properties so govern rent/lease payment. If payment is not made, then the space is locked and only the owners who control the other keys can open it until payment is made. This enables property both commercial and residential to be crowdfunded and revenue to automatically be distributed to investors without a third-party payment processing/management company involved.</p>
                        </div>
                    </div>
                </div>
                <div class="use__item machinery" data-name="machinery">
                    <div class="use__basic">
                        <div class="use__iconWrap">
                            <span class="use__circles"></span>
                            <img src="images/use_case/automated_machinery.svg" alt="Automated Machinery" class="use__icon"/>
                        </div>
                        <span class="use__title">Automated Machinery <span class="use__subtitle">(Commercial)</span> </span>
                    </div>
                    <div class="use__more">
                        <a href="" class="use__close"><i class="icon-close"></i></a>
                        <div class="use__moreIn">
                            <p>Farming machinery, construction, delivery, etc. can all leverage MyBit. It is beneficial to companies that want to upgrade machinery and infrastructure to utilize MyBit to reduce costs to enter into this market. Simultaneously, it unlocks billions of dollars in stable investment opportunities to investors.</p>
                        </div>
                    </div>
                </div>
                <div class="use__item drones" data-name="drones">
                    <div class="use__basic">
                        <div class="use__iconWrap">
                            <span class="use__circles"></span>
                            <img src="images/use_case/dron.svg" alt="Drones" class="use__icon"/>
                        </div>
                        <span class="use__title">Drones</span>
                    </div>
                    <div class="use__more">
                        <a href="" class="use__close"><i class="icon-close"></i></a>
                        <div class="use__moreIn">
                            <p>Drones will have a major role in many commercial use cases, but we believe delivery and transport of goods will be one of the core areas that will come to market first. People will be able to purchase stakes in these delivery drones and upon completion of each delivery they will receive revenue sharing. As different models for monetizing drones take shape, MyBit will be flexible to integrate into any that are economical for the network.</p>
                        </div>
                    </div>
                </div>
                <div class="use__item selfDriving" data-name="selfDriving">
                    <div class="use__basic">
                        <div class="use__iconWrap">
                            <span class="use__circles"></span>
                            <img src="images/use_case/self_driving.svg" alt="Self-Driving Vehicles" class="use__icon"/>
                        </div>
                        <span class="use__title">Self-Driving Vehicles <span class="use__subtitle">(Consumer) </span> </span>
                    </div>
                    <div class="use__more">
                        <a href="" class="use__close"><i class="icon-close"></i></a>
                        <div class="use__moreIn">
                            <p> Self-driving cars are going to displace a lot of jobs. We find it vital that the average person has the option to partake in the ownership and revenue sharing of these vehicles instead of centralized financing institutions controlling every aspect.</p>
                        </div>
                    </div>
                </div>
                <div class="use__item atms" data-name="atms">
                    <div class="use__basic">
                        <div class="use__iconWrap">
                            <span class="use__circles"></span>
                            <img src="images/use_case/cryptocurrency_atms.svg" alt="Cryptocurrency ATMs" class="use__icon"/>
                        </div>
                        <span class="use__title">Cryptocurrency ATMs</span>
                    </div>
                    <div class="use__more">
                        <a href="" class="use__close"><i class="icon-close"></i></a>
                        <div class="use__moreIn">
                            <p>To stimulate the widespread adoption of cryptocurrencies, ease of access is a core component. By crowdfunding ATM ownership it enables exponentially more units to be installed and operational across the globe. Investors will make money off of the spread and usage fees for transacting.</p>
                        </div>
                    </div>
                </div>
                <div class="use__item printers" data-name="printers">
                    <div class="use__basic">
                        <div class="use__iconWrap">
                            <span class="use__circles"></span>
                            <img src="images/use_case/3d_printers.svg" alt="3d Printers" class="use__icon"/>
                        </div>
                        <span class="use__title">3d Printers</span>
                    </div>
                    <div class="use__more">
                        <a href="" class="use__close"><i class="icon-close"></i></a>
                        <div class="use__moreIn">
                            <p>We envision 3d printers to become widespread over the next decade throughout malls, shops, and other venues. Under the 3d-printing as a service model, investors can crowdfund these assets and be paid on a per usage basis.</p>
                        </div>
                    </div>
                </div>
                <div class="use__item smartHomes" data-name="smartHomes">
                    <div class="use__basic">
                        <div class="use__iconWrap">
                            <span class="use__circles"></span>
                            <img src="images/use_case/smart_home.svg" alt="Smart Homes IoT Devices" class="use__icon"/>
                        </div>
                        <span class="use__title">Smart Homes IoT Devices <span class="use__subtitle">Machine as a Service (Business Model)</span> </span>
                    </div>
                    <div class="use__more">
                        <a href="" class="use__close"><i class="icon-close"></i></a>
                        <div class="use__moreIn">
                            <p>This will definitely take time to implement, but we at MyBit predict a disruptive transformation into micro-economies and vast adoption of micro-payments. In this scenario, the financing model is turned upside down. Instead of purchasing a device to use limitlessly (traditional — how it is now for the most part) , devices will be free to the consumer (crowdfunded by investors), and they will pay per usage. A major barrier to entry with this is insurance and accountability for assets.</p>
                        </div>
                    </div>
                </div>
                <div class="use__item energy" data-name="energy">
                    <div class="use__basic">
                        <div class="use__iconWrap">
                            <span class="use__circles"></span>
                            <img src="images/use_case/renewable.svg" alt="Renewable Energy " class="use__icon"/>
                        </div>
                        <span class="use__title">Renewable Energy </span>
                    </div>
                    <div class="use__more">
                        <a href="" class="use__close"><i class="icon-close"></i></a>
                        <div class="use__moreIn">
                            <p>To accelerate adoption of the decentralized energy grid, land and homeowners can crowdfund ownership of the solar panels. Investors in return receive profit sharing from feed-in tariffs and excess energy production sold back to the grid (or p2p in the future).</p>
                        </div>
                    </div>
                </div>
            </div>
        </div>

        <h2 class="h2 section__title"><?php echo t::message('global','Roadmap'); ?></h2>
        <ul class="roadmap__list">
            <li class="roadmap__progressBase">
                <!--<div class="roadmap__progressBar"></div>-->
            </li>
            <li class="roadmap__progressPart first"><div class="roadmap__progressBar" style="width: 100%;"></div></li>

            <li class="roadmap__item active">
                <?php $percent = Common::getInstance()->getPercentBetweenDate($currentTime,$roadMapDays[0],$roadMapDays[1]);  ?>
                <div class="roadmap__progressPart"><div class="roadmap__progressBar" style="width: <?php echo $percent?>%; height: <?php echo $percent?>%;"></div></div>
                <div class="roadmap__date">
                    <span class="roadmap__year">2016</span>
                    <span class="roadmap__month"><?php echo t::message('global','November'); ?></span>
                </div>
                <span class="roadmap__dot"></span>
                <span class="roadmap__descr"><?php echo t::message('global','Idea Conceived'); ?></span>
            </li>
            <li class="roadmap__item <?php echo Common::getInstance()->getPercentBetweenDate($currentTime,$roadMapDays[0],$roadMapDays[1]) == 100 ? 'active' : ''; ?>">
                <?php $percent = Common::getInstance()->getPercentBetweenDate($currentTime,$roadMapDays[1],$roadMapDays[2]);  ?>
                <div class="roadmap__progressPart"><div class="roadmap__progressBar" style="width: <?php echo $percent?>%; height: <?php echo $percent?>%;"></div></div>
                <div class="roadmap__date">
                    <span class="roadmap__year">2017</span>
                    <span class="roadmap__month"><?php echo t::message('global','February'); ?></span>
                </div>
                <span class="roadmap__dot"></span>
                <span class="roadmap__descr"><?php echo t::message('global','Whitepaper Published'); ?></span>
            </li>
            <li class="roadmap__item <?php echo Common::getInstance()->getPercentBetweenDate($currentTime,$roadMapDays[1],$roadMapDays[2]) == 100 ? 'active' : ''; ?>">
                <?php $percent = Common::getInstance()->getPercentBetweenDate($currentTime,$roadMapDays[2],$roadMapDays[3]);  ?>
                <div class="roadmap__progressPart"><div class="roadmap__progressBar" style="width: <?php echo $percent?>%; height: <?php echo $percent?>%;"></div></div>
                <div class="roadmap__date">
                    <span class="roadmap__year">2017</span>
                    <span class="roadmap__month"><?php echo t::message('global','May'); ?></span>
                </div>
                <span class="roadmap__dot"></span>
                <span class="roadmap__descr"><?php echo t::message('global','Architecture Designed'); ?></span>
            </li>
            <li class="roadmap__item <?php echo Common::getInstance()->getPercentBetweenDate($currentTime,$roadMapDays[2],$roadMapDays[3]) == 100 ? 'active' : ''; ?>">
                <?php $percent = Common::getInstance()->getPercentBetweenDate($currentTime,$roadMapDays[3],$roadMapDays[4]);  ?>
                <div class="roadmap__progressPart"><div class="roadmap__progressBar" style="width: <?php echo $percent?>%; height: <?php echo $percent?>%;"></div></div>
                <div class="roadmap__date">
                    <span class="roadmap__year">2017</span>
                    <span class="roadmap__month"><?php echo t::message('global','June'); ?></span>
                </div>
                <span class="roadmap__dot"></span>
                <span class="roadmap__descr"><?php echo t::message('global','Ethereum TestNet Demo'); ?></span>
            </li>
            <li class="roadmap__item <?php echo Common::getInstance()->getPercentBetweenDate($currentTime,$roadMapDays[3],$roadMapDays[4]) == 100 ? 'active' : ''; ?>">
                <?php $percent = Common::getInstance()->getPercentBetweenDate($currentTime,$roadMapDays[4],$roadMapDays[5]);  ?>
                <div class="roadmap__progressPart"><div class="roadmap__progressBar" style="width: <?php echo $percent?>%; height: <?php echo $percent?>%;"></div></div>
                <div class="roadmap__date">
                    <span class="roadmap__year">2017</span>
                    <span class="roadmap__month"><?php echo t::message('global','July'); ?></span>
                </div>
                <span class="roadmap__dot"></span>
                <span class="roadmap__descr"><?php echo t::message('global','Crowdfund'); ?></span>
            </li>
            <li class="roadmap__item <?php echo Common::getInstance()->getPercentBetweenDate($currentTime,$roadMapDays[4],$roadMapDays[5]) == 100 ? 'active' : ''; ?>">
                <?php $percent = Common::getInstance()->getPercentBetweenDate($currentTime,$roadMapDays[5],$roadMapDays[6]);  ?>
                <div class="roadmap__progressPart last"><div class="roadmap__progressBar" style="width: <?php echo $percent?>%; height: <?php echo $percent?>%;"></div></div>
                <div class="roadmap__date">
                    <span class="roadmap__year">2018</span>
                    <span class="roadmap__month"><?php echo t::message('global','January'); ?></span>
                </div>
                <span class="roadmap__dot"></span>
                <span class="roadmap__descr"><?php echo t::message('global','Beta Release and Pilot'); ?></span>
            </li>
        </ul>
    </div>
</div>

<div id="team" class="section section__team section__inverse wow animated fadeInUp" data-wow-offset="50">
    <div class="container">
        <h2 class="h3 section__title center"><?php echo t::message('global','Meet Our Team'); ?></h2>
        <div class="team__wrap team__block"></div>
    </div>
</div>

<div id="advisor" class="section section__advisor wow  fadeInUp animated" data-wow-offset="50">
    <div class="container">
        <h2 class="h3 section__title center"><?php echo t::message('global','Advisors'); ?></h2>
        <div class="team__wrap">
            <div class="team__list slick_mob">
                <!--
                <div class="team__item">
                    <div class="team__photoWrap">
                        <img src="images/advisor/peter.png" alt="" class="team__photo">
                    </div>
                    <span class="team__name"><?php echo t::message('global','Peter Kleissner'); ?></span>
                    <div class="team__professionWrap">
                        <span class="team__profession"><?php echo t::message('global','Hacker, Founder of AV Tracker Stoned Bootkit'); ?></span>
                    </div>
                </div>
                -->
                <div class="team__item">
                    <div class="team__photoWrap">
                        <img src="images/advisor/nick.jpg" alt="" class="team__photo">
                    </div>
                    <span class="team__name"><?php echo t::message('global','Nick Ayton'); ?></span>
                    <div class="team__professionWrap">
                        <span class="team__profession"><?php echo t::message('global','Public Relations, Co-founder of The 21Million Project'); ?></span>
                    </div>
                </div>
                <!--
                <div class="team__item">
                    <div class="team__photoWrap">
                        <img src="images/advisor/mitchell.png" alt="" class="team__photo">
                    </div>
                    <span class="team__name"><?php echo t::message('global','Mitchell Loureiro'); ?></span>
                    <div class="team__professionWrap">
                        <span class="team__profession"><?php echo t::message('global','Marketing Strategy, VP of Marketing at Steemit'); ?></span>
                    </div>
                </div>
                -->
                <div class="team__item">
                    <div class="team__photoWrap">
                        <img src="images/advisor/mihaela.jpg" alt="" class="team__photo">
                    </div>
                    <span class="team__name"><?php echo t::message('global','Dr. Mihaela Ulieru'); ?></span>
                    <div class="team__professionWrap">
                        <span class="team__profession"><?php echo t::message('global','Technology, Global Advisor for World Economic Forum'); ?></span>
                    </div>
                </div>
                <div class="team__item">
                    <div class="team__photoWrap">
                        <img src="images/advisor/alvaro_portellano.jpeg" alt="" class="team__photo">
                    </div>
                    <span class="team__name"><?php echo t::message('global','Alvaro Portellano'); ?></span>
                    <div class="team__professionWrap">
                        <span class="team__profession"><?php echo t::message('global','Energy, Renewables and Regulatory Affairs Manager'); ?></span>
                    </div>
                </div>
                <div class="team__item">
                    <div class="team__photoWrap">
                        <img src="images/advisor/lion_wang.jpg" alt="" class="team__photo">
                    </div>
                    <span class="team__name"><?php echo t::message('global','Lion Wang'); ?></span>
                    <div class="team__professionWrap">
                        <span class="team__profession"><?php echo t::message('global','Marketing'); ?></span>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>

<div id="community" class="section section__community section__inverse wow animated fadeInUp" data-wow-offset="50">
    <div class="container">
        <div class="row">
            <div class="col-md-10 col-md-offset-1 col-lg-8 col-lg-offset-2">
                <h2 class="h3 section__title center"><?php echo t::message('global','Community'); ?></h2>
                <div class="soc__wrap in_bl">
                    <ul class="soc__list">
                        <li class="soc__item">
                            <a href="https://www.facebook.com/MyBitDApp/" class="soc__link colored fb" target="_blank"><i class="icon-fb"></i></a>
                        </li>
                        <li class="soc__item">
                            <a href="https://twitter.com/MyBit_DApp" class="soc__link colored twitter" target="_blank"><i class="icon-twitter"></i></a>
                        </li>
                        <li class="soc__item">
                            <a href="https://t.me/mybitio" class="soc__link colored telegram" target="_blank"><i class="icon-telegram"></i></a>
                        </li>
                        <li class="soc__item">
                            <a href="https://www.reddit.com/user/MyBit_DApp/" class="soc__link colored redit" target="_blank"><i class="icon-redit"></i></a>
                        </li>
                        <li class="soc__item">
                            <a href="https://slack.mybit.io/ " class="soc__link colored slack" target="_blank"><i class="icon-slack"></i></a>
                        </li>
                        <li class="soc__item">
                            <a href="https://www.youtube.com/channel/UCtLn7Vi-3VbsY5F9uF1RJYg" class="soc__link colored youtube" target="_blank"><i class="icon-youtube"></i></a>
                        </li>
                        <li class="soc__item">
                            <a href="https://bitcointalk.org/index.php?topic=1797720.0" class="soc__link colored bitcointalk" target="_blank"><i class="icon-bitcointalk"></i></a>
                        </li>
                        <li class="soc__item">
                            <a href="https://medium.com/@MyBit_Blog" class="soc__link colored medium" target="_blank"><i class="icon-medium"></i></a>
                        </li>
                        <li class="soc__item">
                            <a href="http://weixin.qq.com/r/ystywajet1xiruyj95hy" class="soc__link colored wechat" data-toggle="modal" data-target="#modal-wechat-qr"><i class="icon-wechat"></i></a>
                        </li>
                    </ul>
                </div>
            </div>
        </div>
    </div>
</div>

<div id="media" class="section section__media wow animated fadeInUp" data-wow-offset="50">
    <div class="container">
        <h2 class="h3 section__title center"><?php echo t::message('global','Media'); ?></h2>
        <div class="row">
            <div class="slick_desktop">
                <div class="col-sm-3">
                    <div class="media__img">
                        <a href="https://bravenewcoin.com/news/mybit-tackles-data-manipulation-an-emerging-art-of-war-in-cyberspace/">
                            <img src="images/media/bnc.jpeg">
                        </a>
                    </div>
                </div>
                <div class="col-sm-3">
                    <div class="media__img">
                        <a href="http://www.digitaljournal.com/pr/3295444">
                            <img src="images/media/digital.png">
                        </a>
                    </div>
                </div>
                <div class="col-sm-3">
                    <div class="media__img">
                        <a href="http://www.futureofeverything.io/2017/04/12/future-smart-home-technology/">
                            <img src="images/media/final_future.png">
                        </a>
                    </div>
                </div>
                <div class="col-sm-3">
                    <div class="media__img">
                        <a href="https://cointelegraph.com/news/the-unbreachable-data-made-possible-with-bitcoin-ethereum-blockchain-heres-how&#10;">
                            <img src="images/media/press-cointelegraph.jpg">
                        </a>
                    </div>
                </div>
                <div class="col-sm-3">
                    <div class="media__img">
                        <a href="https://blockgeeks.com/ama/ian-worrall-tokenizing-ai-smart-energy-and-ownership/">
                            <img src="images/media/block.png">
                        </a>
                    </div>
                </div>
                <div class="col-sm-3">
                    <div class="media__img">
                        <a href="https://www.facebook.com/vejdiven/videos/1344609518964148/">
                            <img src="images/media/paral.png">
                        </a>
                    </div>
                </div>
                <div class="col-sm-3">
                    <div class="media__img">
                        <a href="https://www.globalbankingandfinance.com/blockchain-bitcoin-conference-prague-participants-discussed-future-of-blockchain-and-cryptocurrencies/">
                            <img src="images/media/finance_review.jpg" alt="Global banking and finance review">
                        </a>
                    </div>
                </div>
                <div class="col-sm-3">
                    <div class="media__img">
                        <a href="http://www.banklesstimes.com/2017/05/25/blockchain-bitcoin-conference-prague-a-hit/">
                            <img src="images/media/bankless_times.png" alt="Bankless times">
                        </a>
                    </div>
                </div>
                <div class="col-sm-3">
                    <div class="media__img">
                        <a href="http://www.newsbtc.com/2017/05/29/blockchain-bitcoin-conference-prague-participants-discussed-future-blockchain-cryptocurrencies/">
                            <img src="images/media/bitcoingarden.png" alt="Bitcoin Garden">
                        </a>
                    </div>
                </div>
                <div class="col-sm-3">
                    <div class="media__img">
                        <a href="http://www.newsbtc.com/2017/05/29/blockchain-bitcoin-conference-prague-participants-discussed-future-blockchain-cryptocurrencies/">
                            <img src="images/media/newsbtc.png" alt="NewsBTC">
                        </a>
                    </div>
                </div>
                <div class="col-sm-3">
                    <div class="media__img">
                        <a href="https://hacked.com/ico-analysis-mybit/ ">
                            <img src="images/media/hacked.png" alt="NewsBTC">
                        </a>
                    </div>
                </div>
                <div class="col-sm-3">
                    <div class="media__img">
                        <a href="https://crushcrypto.com/analysis-of-mybit-ico/">
                            <img src="images/media/crush-crypto.jpg" alt="NewsBTC">
                        </a>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>

<div id="partnerships" class="section section__partners wow animated fadeInUp" data-wow-offset="50">
    <div class="container">
        <div class="row">
            <div class="col-md-10 col-md-offset-1 col-lg-8 col-lg-offset-2">
                <h2 class="h3 section__title"><?php echo t::message('global','Partnerships'); ?></h2>
                <div class="partners__wrap">
                    <div class="partners__list slick_desktop">
                        <div class="partners__item">
                            <a href="https://bravenewcoin.com/news/mybit-tackles-data-manipulation-an-emerging-art-of-war-in-cyberspace/" target="_blank" class="partners__logo">
                                <img src="images/media/bnc.jpeg" alt="" class="partners__pic"/>
                            </a>
                            <span class="partners__profession"><?php echo t::message('global','Escrow'); ?></span>
                        </div>
                        <div class="partners__item">
                            <a href="http://btc.pacatum.com" target="_blank" class="partners__logo">
                                <img src="images/media/pacatum.png" alt="" class="partners__pic"/>
                            </a>
                            <span class="partners__profession"><?php echo t::message('global','Technology'); ?></span>
                        </div>
                        <div class="partners__item">
                            <a href="https://www.dahonghuo.com/" target="_blank" class="partners__logo">
                                <img src="images/media/dahonghuo_logo.png" alt="" class="partners__pic"/>
                            </a>
                            <span class="partners__profession"><?php echo t::message('global','Exchange'); ?></span>
                        </div>
                        <div class="partners__item">
                            <a href="http://emerginginsider.com/" target="_blank" class="partners__logo">
                                <img src="images/media/emerging_insider.png" alt="" class="partners__pic"/>
                            </a>
                            <span class="partners__profession"><?php echo t::message('global','Public Relations'); ?></span>
                        </div>
                        <div class="partners__item">
                            <a href="http://www.mll-legal.com/home/" target="_blank" class="partners__logo">
                                <img src="images/media/meyerlus.png" alt="" class="partners__pic"/>
                            </a>
                            <span class="partners__profession"><?php echo t::message('global','Legal'); ?></span>
                        </div>
                        <div class="partners__item">
                            <a href="https://www.tokenlot.com/" target="_blank" class="partners__logo">
                                <img src="images/media/tokenlot.png" alt="" class="partners__pic"/>
                            </a>
                            <span class="partners__profession"><?php echo t::message('global','Payments'); ?></span>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>

<div class="team__template">
    <div class="team__list slick_laptop">

        <div class="team__item">
            <div>
                <div>
                    <div class="team__photoWrap">
                        <img src="images/team/garrett.jpg" alt="" class="team__photo"/>
                    </div>
                    <span class="team__name"><?php echo t::message('global','Garrett McDonald'); ?></span>
                    <div class="team__professionWrap">
                        <span class="team__profession"><?php echo t::message('global','Blockchain Design & Marketing Strategy'); ?></span>
                    </div>
                </div>
            </div>

        </div>
        <div class="team__item">
            <div>
                <div>
                    <div class="team__photoWrap">
                        <img src="images/team/thomas.jpg" alt="" class="team__photo"/>
                    </div>
                    <span class="team__name"><?php echo t::message('global','Thomas Pollan'); ?></span>
                    <div class="team__professionWrap">
                        <span class="team__profession"><?php echo t::message('global','Business Development & Partnerships'); ?></span>
                    </div>
                </div>
            </div>

        </div>
        <div class="team__item">
            <div>
                <div>
                    <div class="team__photoWrap">
                        <img src="images/team/ian.jpg" alt="" class="team__photo"/>
                    </div>
                    <span class="team__name"><?php echo t::message('global','Ian Worrall'); ?></span>
                    <div class="team__professionWrap">
                        <span class="team__profession"><?php echo t::message('global','Founder'); ?></span>
                    </div>
                </div>
            </div>
        </div>
        <div class="team__item">
            <div>
                <div>
                    <div class="team__photoWrap">
                        <img src="images/team/pedro.jpg" alt="" class="team__photo"/>
                    </div>
                    <span class="team__name"><?php echo t::message('global','Pedro Barros'); ?></span>
                    <div class="team__professionWrap">
                        <span class="team__profession"><?php echo t::message('global','Engineer'); ?></span>
                    </div>
                </div>
            </div>

        </div>
        <div class="team__item">
            <div>
                <div>
                    <div class="team__photoWrap">
                        <img src="images/team/jacob.jpg" alt="" class="team__photo"/>
                    </div>
                    <span class="team__name"><?php echo t::message('global','Jacob DeBenedetto'); ?></span>
                    <div class="team__professionWrap">
                        <span class="team__profession"><?php echo t::message('global','UI/UX'); ?></span>
                    </div>
                </div>
            </div>

        </div>
        <div class="team__item">
            <div>
                <div>
                    <div class="team__photoWrap">
                        <img src="images/team/bogdan.jpg" alt="" class="team__photo">
                    </div>
                    <span class="team__name"><?php echo t::message('global','Bogdan Fiedur'); ?></span>
                    <div class="team__professionWrap">
                        <span class="team__profession"><?php echo t::message('global','Solidity Dev'); ?></span>
                    </div>
                </div>
            </div>
        </div>
        <div class="team__item">
            <div>
                <div>
                    <div class="team__photoWrap">
                        <img src="images/team/ching_pong_su(Kenji).jpg" alt="" class="team__photo">
                    </div>
                    <span class="team__name"><?php echo t::message('global','Ching Pong Siu (Kenji)'); ?></span>
                    <div class="team__professionWrap">
                        <span class="team__profession"><?php echo t::message('global','Chief Technology Officer'); ?></span>
                    </div>
                </div>
            </div>
        </div>
        <div class="team__item">
            <div>
                <div>
                    <div class="team__photoWrap">
                        <img src="images/team/maclin.jpg" alt="" class="team__photo">
                    </div>
                    <span class="team__name"><?php echo t::message('global','Maclin Macalindong'); ?></span>
                    <div class="team__professionWrap">
                        <span class="team__profession"><?php echo t::message('global','Graphic Design'); ?></span>
                    </div>
                </div>
            </div>
        </div>
        <div class="team__item">
            <div>
                <div>
                    <div class="team__photoWrap">
                        <img src="images/team/hua_Li.jpg" alt="" class="team__photo">
                    </div>
                    <span class="team__name"><?php echo t::message('global','Hua Li'); ?></span>
                    <div class="team__professionWrap">
                        <span class="team__profession"><?php echo t::message('global','Chinese Community Manager'); ?></span>
                    </div>
                </div>
            </div>
        </div>
        <div class="team__item">
            <div>
                <div>
                    <div class="team__photoWrap">
                        <img src="images/team/jake_vartanian.jpg" alt="" class="team__photo">
                    </div>
                    <span class="team__name"><?php echo t::message('global','Jake Vartanian'); ?></span>
                    <div class="team__professionWrap">
                        <span class="team__profession"><?php echo t::message('global','Community Strategy'); ?></span>
                    </div>
                </div>
            </div>
        </div>
        <div class="team__item">
            <div>
                <div>
                    <div class="team__photoWrap">
                        <img src="images/team/fran_stajnar.jpg" alt="" class="team__photo">
                    </div>
                    <span class="team__name"><?php echo t::message('global','Fran Strajnar'); ?></span>
                    <div class="team__professionWrap">
                        <span class="team__profession"><?php echo t::message('global','Escrow Manager'); ?></span>
                    </div>
                </div>
            </div>
        </div>

        <div class="team__item">
            <div>
                <div>
                    <div class="team__photoWrap">
                        <img src="images/team/kyle_dewhurst.jpg" alt="" class="team__photo">
                    </div>
                    <span class="team__name"><?php echo t::message('global','Kyle Dewhurst'); ?></span>
                    <div class="team__professionWrap">
                        <span class="team__profession"><?php echo t::message('global','Solidity Dev'); ?></span>
                    </div>
                </div>
            </div>
        </div>
        <!--
        <div class="team__item">
            <div>
                <div>
                    <div class="team__photoWrap">
                        <img src="images/team/adina_pascall.jpeg" alt="" class="team__photo">
                    </div>
                    <span class="team__name"><?php echo t::message('global','Adina Pascall'); ?></span>
                    <div class="team__professionWrap">
                        <span class="team__profession"><?php echo t::message('global','Public Relations'); ?></span>
                    </div>
                </div>
            </div>
        </div>
        <div class="team__item">
            <div>
                <div>
                    <div class="team__photoWrap">
                        <img src="images/team/jesse_duris.png" alt="" class="team__photo">
                    </div>
                    <span class="team__name"><?php echo t::message('global','Jesse Duris'); ?></span>
                    <div class="team__professionWrap">
                        <span class="team__profession"><?php echo t::message('global','React Dev'); ?></span>
                    </div>
                </div>
            </div>
        </div>
        -->
    </div>
</div>

<script src="<?php echo Common::getInstance()->http(); ?>js/easePack.min.js"></script>
<script src="<?php echo Common::getInstance()->http(); ?>js/rAF.js"></script>
<script src="<?php echo Common::getInstance()->http(); ?>js/tweenLite.min.js"></script>
<script src="<?php echo Common::getInstance()->http(); ?>js/animatedBg.js"></script>
<script src="<?php echo Common::getInstance()->http(); ?>js/page/index.js"></script>