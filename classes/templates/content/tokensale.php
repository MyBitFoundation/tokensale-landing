<div id="tokensale" class="section section__tokensale section__inverse wow animated fadeInUp"  data-wow-offset="50">
    <div class="container">
        <h2 class="h3 center section__title"><?php echo t::message('global','Overview of Tokensale'); ?></h2>
        <p><?php echo t::message('global','The MyBit tokensale will commence on Monday July 17th, 2017 and run for 30 days or until funding limits are achieved, whichever comes first. The goal of the crowdsale is to secure funding to finalize the development of the MyBit Platform, conduct pilot studies, and bring the product to Market.'); ?></p>
        <p><?php echo t::message('global','Full Details on the terms can be found in the'); ?> <a href="#" class="link yellow"><?php echo t::message('global','Official Deal Sheet'); ?></a></p>
        <p><?php echo t::message('global','Entities involved include'); ?>:</p>
        <div class="row tokensale__wrap">
            <div class="slick_desktop">
                <div class="col-sm-3">
                    <div class="tokensale__item">
                        <span class="tokensale__img"><img src="images/logo_full.png"></span>
                        <span class="tokensale__name"><?php echo t::message('global','MyBit Foundation'); ?></span>
                        <p class="tokensale__desc"><?php echo t::message('global','Swiss non-profit in charge of network oversight'); ?></p>
                    </div>
                </div>
                <div class="col-sm-3">
                    <div class="tokensale__item">
                        <span class="tokensale__img"><img src=""></span>
                        <span class="tokensale__name">MyBit.io</span>
                        <p class="tokensale__desc"><?php echo t::message('global','Operating Company'); ?></p>
                    </div>
                </div>
                <div class="col-sm-3">
                    <div class="tokensale__item">
                        <span class="tokensale__img"><img src="images/media/bnc_white.png"></span>
                        <span class="tokensale__name"><?php echo t::message('global','Brave New Coin'); ?></span>
                        <p class="tokensale__desc"><?php echo t::message('global','Escrow and Fund Management Oversight'); ?></p>
                    </div>
                </div>
                <div class="col-sm-3">
                    <div class="tokensale__item">
                        <span class="tokensale__img"><img src="images/media/third_parties.png"></span>
                        <span class="tokensale__name"><?php echo t::message('global','Third Parties'); ?></span>
                        <p class="tokensale__desc"><?php echo t::message('global','Manage overflow Development and integrations'); ?></p>
                    </div>
                </div>
            </div>
        </div>
        <p><?php echo t::message('global','More information can be found in the'); ?> <a href="<?php echo $path_whitepaper; ?>" target="_blank" class="link yellow"><?php echo t::message('global','Whitepaper'); ?></a> <?php echo t::message('global','Section 7.1, “Legal Structure”'); ?></p>
    </div>
</div>

<div id="icoDetails" class="section section__details wow animated fadeInUp" data-wow-offset="50">
    <div class="container">
        <div class="row">
            <div class="col-md-10 col-md-offset-1 col-lg-8 col-lg-offset-2">
                <h2 class="h3 section__title"><?php echo t::message('global','Pricing structure and general ICO details'); ?></h2>
                <div class="details__wrap">
                    <div class="details__row">
                        <div class="details__title">
                            <span class="details__heading"><?php echo t::message('global','TOKEN NAME'); ?>:</span>
                        </div>
                        <div class="details__content">
                            <p class="details__text"><?php echo t::message('global','MyBit ($MyB)'); ?></p>
                        </div>
                    </div>
                    <div class="details__row">
                        <div class="details__title">
                            <span class="details__heading"><?php echo t::message('global','WHAT DOES THIS TOKEN REPRESENT?'); ?></span>
                        </div>
                        <div class="details__content">
                            <p class="details__text"><?php echo t::message('global','MyBit tokens are used to access certain functionalities of the platform including registering a new asset, transferring an asset, and a variety of financing features. Holders of MyBit tokens will also receive real-time revenue distributions proportionate to their stake percentage.'); ?></p>
                        </div>
                    </div>
                    <div class="details__row">
                        <div class="details__title">
                            <span class="details__heading"><?php echo t::message('global','Use of Token'); ?></span>
                        </div>
                        <div class="details__content">
                            <p class="details__text"><?php echo t::message('global','MyB can be used actively for: <br/>
                                Investing in Energy and AI revenue generating assets : Funding & Revenue Sharing <br/>
                                Peer to Peer trading (buying and selling) of decentralized energy <br/>
                                Machine to machine payments <br/>
                                Trading on Open Exchanges'); ?>
                            </p>
                        </div>
                    </div>
                    <div class="details__row">
                        <div class="details__title">
                            <span class="details__heading"><?php echo t::message('global','PAYOUT STRUCTURE'); ?></span>
                        </div>
                        <div class="details__content">
                            <p class="details__text"><?php echo t::message('global','A smart contract governs revenue distributions as a percentage based on individual stake divided by total MyB supply. Any incoming MyBit network fees (minus ethereum network fees) are automatically distributed to tokenholders in the next mined block.'); ?></p>
                        </div>
                    </div>
                    <div class="details__row">
                        <div class="details__title">
                            <span class="details__heading"><?php echo t::message('global','TOTAL SUPPLY'); ?>:</span>
                        </div>
                        <div class="details__content">
                            <p class="details__text"><?php echo t::message('global','Maximum of'); ?> 5,000,000 <?php echo t::message('global','tokens'); ?></p>
                        </div>
                    </div>
                    <div class="details__row">
                        <div class="details__title">
                            <span class="details__heading">Fundraising cap:</span>
                        </div>
                        <div class="details__content">
                            <p class="details__text">26,875 ETH</p>
                        </div>
                    </div>
                    <div class="details__row">
                        <div class="details__title">
                            <span class="details__heading"><?php echo t::message('global','PRICE PER TOKEN'); ?>:</span>
                        </div>
                        <div class="details__content">
                            <p class="details__text"><?php echo t::message('global','Variable, see pricing structure below'); ?></p>
                        </div>
                    </div>
                    <div class="details__row">
                        <div class="details__title">
                            <span class="details__heading"><?php echo t::message('global','Crowdfunding Milestones'); ?>:</span>
                        </div>
                        <div class="details__content">
                            <a href="javascript:;" class="btn btn-default crowdfunding__milestones__link"><span><?php echo t::message('global','Click to view'); ?></span></a>
                        </div>
                    </div>
                    <h2 class="h3 section__title center"><?php echo t::message('global','Pricing'); ?></h2>
                    <div class="chart__box">
                        <div class="chart__title chart__title_1">
                            <span class="value">1 ETH = 133 MyB</span>
                            <span class="line"></span>
                            <span class="name"><?php echo t::message('global','Tranche'); ?> 1</span>
                            <span class="remark">25% <?php echo t::message('global','discount'); ?></span>
                            <span class="price">9,375 ETH</span>
                        </div>
                        <div class="chart__title chart__title_2">
                            <span class="value">1 ETH = 100 MyB</span>
                            <span class="line"></span>
                            <span class="name"><?php echo t::message('global','Tranche'); ?> 2</span>
                            <span class="remark"><?php echo t::message('global','Full Price'); ?></span>
                            <span class="price">17,500 ETH</span>
                        </div>
                        <div class="circle__box">
                            <svg width="290" height="290" class="circle__wrap">
                                <circle fill="none" cx="145" cy="145" r="125" class="circle circle_1"/>
                                <circle fill="none" cx="145" cy="145" r="106" class="circle circle_2"/>
                            </svg>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>

<div id="whyBlockchain" class="section section__whyBlockchain section__inverse wow animated fadeInUp" data-wow-offset="50">
    <div class="container">
        <div class="row">
            <div class="col-md-10 col-md-offset-1">
                <h2 class="h3 section__title"><?php echo t::message('global','Why Blockchain?'); ?></h2>
                <p><?php echo t::message('global','Blockchain-based smart contracts let us create a seamless system where every part is efficient, auditable, and scalable. If we were to build this with traditional technologies, it would create unnecessary friction (expenses) and involve piecing together many applications which creates attack vectors resulting in immense security vulnerabilities. Ethereum enables a solution that has payments, auditing, ownership, and business logic designed in its core functionality. This makes rolling out the product with Blockchain the most economical solution.'); ?></p>
            </div>
        </div>
    </div>
</div>

<div id="crowdfund" class="section section__crowdfund wow animated fadeInUp" data-wow-offset="50">
    <div class="container">
        <h2 class="h3 section__title"><?php echo t::message('global','Why Raise via Crowdfunding?'); ?></h2>
        <p><?php echo t::message('global','We evaluated raising capital between a Blockchain crowdfunding campaign and traditional venture capital and concluded that utilizing an Ethereum ERC20 token would be the optimal fundraising method to achieve our vision with this platform.'); ?></p>
        <p><?php echo t::message('global','Blockchain crowdfunding (in this situation) is better for our investors, end users, and the overall community. Liquidity is a critical component missing in traditional financing methods, that we wanted to enable for investors. We also wanted the overall structure of our organization to be democratic, and did not want to give a centralized group of investors the power to change the fee structure or pricing model in a way that was not in the best interest of the users'); ?></p>
        <p><strong><?php echo t::message('global','How it Works'); ?></strong></p>
        <p>1)	<?php echo t::message('global','Participants send funds to an Ethereum Smart Contract from an easy to use Dashboard on the MyBit website.'); ?> </p>
        <p>2)	<?php echo t::message('global','The Smart Contract mints tokens instantly and sends to user’s online account. These are available for withdrawal upon the close of the crowdsale.'); ?> </p>
        <p>3)	<?php echo t::message('global','Once completed (total duration or maximum tokens issued) the Ethereum funds are then transferred to a mult-sig escrow wallet with signing keys (Ian Worrall (MyBit), Thomas Pollan (MyBit), Fran Strajnar (BNC), and Collin Lahay (BitRated, #2 most Trusted in the World).'); ?></p>
    </div>
</div>

<div id="escrow" class="section section__escrow section__inverse wow animated fadeInUp" data-wow-offset="50">
    <div class="container">
        <div class="row">
            <div class="col-md-10 col-md-offset-1 col-lg-8 col-lg-offset-2">
                <h2 class="h3 section__title"><?php echo t::message('global','Escrow Details'); ?> </h2>
                <p><?php echo t::message('global','All funds contributed during the tokensale period will be held in escrow (a multi-signature Ethereum wallet contract). The MyBit team has worked with Brave New Coin to devise a release schedule that enables rapid development of the platform as well as protect investor funds.'); ?></p>
            </div>
        </div>
    </div>
</div>

<div id="funds" class="section section__funds wow animated fadeInUp" data-wow-offset="50">
    <div class="container">
        <div class="row">
            <div class="col-md-10 col-md-offset-1">
                <h2 class="h3 section__title"><?php echo t::message('global','Use of Funds'); ?></h2>
                <p><?php echo t::message('global','Funds raised during the tokensale will be used for Legal, Marketing, Development, and ongoing operational expenses. The funds will initially aid in the hiring of full-time React, Solidity, and Full Stack engineers to speed up time to market. Then they will facilitate in-depth pilot testing and marketing.'); ?></p>
                <p><?php echo t::message('global','A full analysis of Use of Funds and Milestones can be found iin Section 9.3 of the'); ?> <a href="<?php echo $path_whitepaper; ?>" target="_blank" class="link yellow"><?php echo t::message('global','whitepaper'); ?></a>.</p>
            </div>
        </div>
    </div>
</div>

<div id="regulatory" class="section section__regulatory section__inverse wow animated fadeInUp" data-wow-offset="50">
    <div class="container">
        <div class="row">
            <div class="col-md-10 col-md-offset-1">
                <h2 class="h3 center section__title"><?php echo t::message('global','Regulatory'); ?></h2>
                <p><?php echo t::message('global','We are unaware of any more heavily regulated industries than Energy and Financial Services and there are few areas more visible on regulators’ radar than Bitcoin and Blockchain crowdfunding campaigns. We believe we have addressed all known regulatory issues but undoubtedly new regulations will arise. We will continue to proactively work with regulators to help drive regulations that facilitate our vision of low cost, efficient financial transactions as well as those regulations that support and address the creation of local area decentralized energy grids.'); ?></p>
            </div>
        </div>
    </div>
</div>

<div id="modelRevenue" class="section section__modelRevenue wow animated fadeInUp" data-wow-offset="50">
    <div class="container">
        <h2 class="h3 section__title"><?php echo t::message('global','Monetization & Revenue Model'); ?></h2>
        <p><?php echo t::message('global','Monetization occurs in the form of micro-fees for every action conducted on the MyBit network including'); ?>:</p>
        <div class="modelRevenue__wrap">
            <div class="row">
                <div class="slick_modelRevenue">
                    <div class="col-sm-4">
                        <div class="modelRevenue__item">
                            <span class="modelRevenue__img"><img src="images/modelRevenue/1.png"></span>
                            <span class="modelRevenue__name"><?php echo t::message('global','Registration of an Asset'); ?></span>
                        </div>
                    </div>
                    <div class="col-sm-4">
                        <div class="modelRevenue__item">
                            <span class="modelRevenue__img"><img src="images/modelRevenue/2.png"></span>
                            <span class="modelRevenue__name"><?php echo t::message('global','Transfer of Ownership <br/> of an Asset'); ?></span>
                        </div>
                    </div>
                    <div class="col-sm-4">
                        <div class="modelRevenue__item">
                            <span class="modelRevenue__img"><img src="images/modelRevenue/3.png"></span>
                            <span class="modelRevenue__name"><?php echo t::message('global','Creation of Trust <br/> or Will Smart Contract'); ?></span>
                        </div>
                    </div>
                    <div class="col-sm-4">
                        <div class="modelRevenue__item">
                            <span class="modelRevenue__img"><img src="images/modelRevenue/4.png"></span>
                            <span class="modelRevenue__name"><?php echo t::message('global','Tokenization of an Asset'); ?> </span>
                        </div>
                    </div>
                    <div class="col-sm-4">
                        <div class="modelRevenue__item">
                            <span class="modelRevenue__img"><img src="images/modelRevenue/5.png"></span>
                            <span class="modelRevenue__name"><?php echo t::message('global','Funding of an Asset'); ?></span>
                        </div>
                    </div>
                    <div class="col-sm-4">
                        <div class="modelRevenue__item">
                            <span class="modelRevenue__img"><img src="images/modelRevenue/6.png"></span>
                            <span class="modelRevenue__name"><?php echo t::message('global','Transferring/Trading <br/> Related Network Fees (minimal)'); ?></span>
                        </div>
                    </div>
                    <div class="col-sm-4">
                        <div class="modelRevenue__item">
                            <span class="modelRevenue__img"><img src="images/modelRevenue/7.png"></span>
                            <span class="modelRevenue__name"><?php echo t::message('global','All Revenue Distributions Processed by the MyBit Platform'); ?></span>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <p><?php echo t::message('global','These fees will then be distributed to tokenholders based on ownership percentage once validated (typically within a few blocks of occurring). To minimize Ethereum network fees so our tokenholders can maximize profits, we may adjust the distribution model to combine fees in a “pool” and then distribute in set block intervals.'); ?></p>
        <div class="row">
            <div class="col-md-4">
                <div class="list__box">
                    <span class="list__title"><?php echo t::message('global','Revenue Streams'); ?>:</span>
                    <p>1) <?php echo t::message('global','Passive (just holding tokens) MyBit Token holders receive 1% fee for all transactions on the network which is then distributed based on % ownership.'); ?></p>
                    <p>2) <?php echo t::message('global','Investing: Revenue share based on revenue generated from asset'); ?></p>
                </div>
            </div>
            <div class="col-md-4">
                <div class="list__box">
                    <span class="list__title"><?php echo t::message('global','Other Forms of Profit'); ?>:</span>
                    <p>1)	<?php echo t::message('global','Price appreciation of token. Based on theory of supply and demand (due to fixed supply) as demand increases, price should follow.'); ?></p>
                </div>
            </div>
            <div class="col-md-4">
                <div class="list__box">
                    <span class="list__title"><?php echo t::message('global','How Asset Generates Revenue'); ?>:</span>
                    <p>1) <?php echo t::message('global','Excess production sold back to grid'); ?></p>
                    <p>2) <?php echo t::message('global','Excess production sold peer to peer (or machine to machine)'); ?></p>
                    <p>3) <?php echo t::message('global','Usage from consumer of Asset'); ?></p>
                </div>
            </div>
        </div>


    </div>
</div>

<div id="postCrowdfund" class="section section__postCrowdfund wow animated fadeInUp" data-wow-offset="50">
    <div class="container">
        <div class="row">
            <div class="col-md-10 col-md-offset-1">
                <h2 class="h3 center section__title"><?php echo t::message('global','Post-Crowdfund Trading'); ?></h2>
                <p><?php echo t::message('global','We will ensure that MyBit is tradable on a minimum of 1 major exchange (although our goal is 3-5 leading cryptocurrency exchanges). While we cannot guarantee substantial liquidity levels of the MyBit Token until the platform is fully deployed, we will make every effort to enable the growth of the liquidity market from the start.'); ?></p>
                <p><strong><?php echo t::message('global','Liquidity'); ?></strong></p>
                <p><?php echo t::message('global','Our goal is high levels of liquidity on the MyBit Token (MyB) market. This is achieved through the laws of supply & demand, P2P energy trading, and machine to machine payments.'); ?></p>
                <p><?php echo t::message('global','Through the laws of supply and demand, as we gain more market share, the demand for MyB increases thus creating buy-side liquidity. P2P energy trading creates steady liquidity on both sides of the market. Machine to Machine payments create constant buy and sell-side liquidity.'); ?></p>
                <div class="text_c sign-in-block">
                    <form class="form form__offer pre_offer">
                        <div class="form__row">
                            <div class="input__wrap">
                                <input type="email" name="email" placeholder="Enter email" class="input dark">
                                <a href="javascript:;" class="btn__inInput btn_pre_sign_up submit_event"><?php echo t::message('global','sign Up'); ?></a>
                            </div>
                            <span class="form__hint"><?php echo t::message('global','You’re almost done! Please check your email to confirm your subscription.'); ?></span>
                            <span class="form__errorTxt"></span>
                        </div>
                    </form>
                    <span class="title small"><?php echo t::message('global','Already have an account?'); ?> <a href="#" class="link yellow" data-toggle="modal" data-target="#modal-signIn"> <?php echo t::message('global','Sign in'); ?></a></span>
                </div>
                <div class="btn__row go-to-dashboard-block" style="display: none;">
                    <a href="" class="btn btn-shadow yellow"><?php echo t::message('global','Go to Dashboard'); ?></a>
                </div>
            </div>
        </div>
    </div>
</div>