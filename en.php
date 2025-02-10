<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Kimlab</title>
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Fira+Sans:ital,wght@0,100;0,200;0,300;0,400;0,500;0,600;0,700;0,800;0,900;1,100;1,200;1,300;1,400;1,500;1,600;1,700;1,800;1,900&family=Inter:wght@100;200;300;400;500;600;700;800;900&display=swap" rel="stylesheet">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.6.4/jquery.min.js"></script>
    <link rel="stylesheet" href="css/normalize.css">
    <link rel="stylesheet" href="css/main.css">
</head>
<body>
<?php if ($isEmailSent) { ?>
    <div id="email-sent" class="1header__menu-bot">
        <div class="container">
            <div class="header__menu-bot-nav">
                <ul>
                    <li><a href="#">Successfully sent!</a></li>
                </ul>
            </div>
        </div>
    </div>
<?php } ?>
<header class="header">
    <div class="header__menu">
        <div class="header__menu-top">
            <div class="container">
                <div class="header__menu-top-inner">
                    <div class="header__menu-top-left">
                        <a href="#" class="header__logo">
                            <img src="images/logo.svg" alt="">
                        </a>
                        <span class="header__logo-text">Automation<br>of your business</span>
                    </div>
                    <div class="header__menu-top-right">
                        <div class="header__lang-wrap">
                            <a href="javascript:void(0);" class="header__lang">
                                <img src="images/icons/header-lang.svg" alt="">
                            </a>
                            <ul class="header__lang-hidden">
                                <li>
                                    <a href="/?lang=en">
                                        <img src="images/icons/header-lang-gb.svg" alt="">
                                    </a>
                                </li>
                                <li>
                                    <a href="/?lang=es">
                                        <img src="images/icons/header-lang-es.svg" alt="">
                                    </a>
                                </li>
                                <li>
                                    <a href="/?lang=de">
                                        <img src="images/icons/header-lang-de.svg" alt="">
                                    </a>
                                </li>
                            </ul>
                        </div>
                        <a href="https://wa.me/<?=$phone[0]?>" target="_blank" class="header__whatsapp-wrap">
                            <span class="header__whatsapp-icon">
                                <img src="images/whatsapp_logo.svg" alt="">
                            </span>
                        </a>
                        <a href="tel:<?=$phone[0]?>" class="header__phone-wrap">
								<span class="header__phone-icon">
									<img src="images/icons/header-phone.svg" alt="">
								</span>
                            <span class="header__phone"><?=$phone[1]?></span>
                        </a>
                        <div class="header__menu-btn">
                            <button class="main-btn js-popup-btn">Send a Request</button>
                        </div>
                    </div>
                    <div class="burger"></div>
                </div>
            </div>
        </div>
        <div class="header__menu-bot">
            <div class="container">
                <nav class="header__menu-bot-nav">
                    <ul>
                        <li>
                            <a href="#solutions">Ready-made solutions</a>
                        </li>
                        <li>
                            <a href="#projects">Ongoing projects</a>
                        </li>
                        <li>
                            <a href="#about-us" class="menu-bot-nav__font">About KIMLAB</a>
                        </li>
                        <li>
                            <a href="#steps">Stages of implementation</a>
                        </li>
                    </ul>
                </nav>
            </div>
        </div>
    </div>
    <div class="header__menu-hidden">
        <div class="header__menu-top">
            <div class="container">
                <div class="header__menu-top-inner">
                    <div class="header__menu-top-left">
                        <a href="#" class="header__logo">
                            <img src="images/logo.svg" alt="">
                        </a>
                    </div>
                    <nav class="header__menu-bot-nav">
                        <ul>
                            <li>
                                <a href="#solutions">Ready-made solutions</a>
                            </li>
                            <li>
                                <a href="#projects">Ongoing projects</a>
                            </li>
                            <li>
                                <a href="#about-us" class="menu-bot-nav__font">About KIMLAB</a>
                            </li>
                            <li>
                                <a href="#steps">Stages of implementation</a>
                            </li>
                        </ul>
                    </nav>
                    <div class="header__menu-top-right">
                        <div class="header__lang-wrap">
                            <a href="javascript:void(0);" class="header__lang">
                                <img src="images/icons/header-lang.svg" alt="">
                            </a>
                            <ul class="header__lang-hidden">
                                <li>
                                    <a href="/?lang=en">
                                        <img src="images/icons/header-lang-gb.svg" alt="">
                                    </a>
                                </li>
                                <li>
                                    <a href="/?lang=es">
                                        <img src="images/icons/header-lang-es.svg" alt="">
                                    </a>
                                </li>
                                <li>
                                    <a href="/?lang=de">
                                        <img src="images/icons/header-lang-de.svg" alt="">
                                    </a>
                                </li>
                            </ul>
                        </div>
                        <a href="https://wa.me/<?=$phone[0]?>" target="_blank" class="header__whatsapp-wrap">
                            <span class="header__whatsapp-icon">
                                <img src="images/whatsapp_logo.svg" alt="">
                            </span>
                        </a>
                        <a href="tel:<?=$phone[0]?>" class="header__phone-wrap">
								<span class="header__phone-icon">
									<img src="images/icons/header-phone.svg" alt="">
								</span>
                            <span class="header__phone"><?=$phone[1]?></span>
                        </a>
                        <div class="header__menu-btn">
                            <button class="main-btn js-popup-btn">Send a Request</button>
                        </div>
                    </div>
                    <div class="burger"></div>
                </div>
            </div>
        </div>
    </div>

    <div class="header__hidden-line"></div>
    <div class="header__main-wrap">
        <div class="header__main">
            <div class="container">
                <div class="header__main-inner">
                    <div class="header__main-left">
                        <div class="header__main-left-in">
                            <div class="header__main-title">
                                <span class="second-font">KIMLAB — </span>Cloud-based CMMS
                            </div>
                            <div class="header__main-subtitle title-h2">
                                A new level of managerial efficiency
                            </div>
                            <ul class="header__main-list checked-icon">
                                <li>Business process automation</li>
                                <li>Cost optimization</li>
                                <li>Real-time control, accounting and analysis</li>
                                <li>Unified knowledge base</li>
                            </ul>
                            <div class="header__main-btn">
                                <button class="main-btn js-popup-button">Free Demo</button>
                            </div>
                        </div>
                    </div>
                    <div class="header__main-right">
                        <div class="header__main-right-inner">
                            <img src="images/interface-en.png" alt="Онлайн-платформа">
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</header>
<section class="solutions">
    <div class="container">
        <div class="solutions__inner" id="solutions">
            <div class="solutions__title title-h2"><span class="second-font">KIMLAB's</span> automation solutions</div>
            <div class="solutions__items-wrap">
                <div class="solutions-item">
                    <div class="solutions-item__inner">
                        <div class="solutions-item__title main-text">Computerized Maintenance management system</div>
                        <ul class="solutions-item__list checked-icon show-elem">
                            <li>Maintenance</li>
                            <li>Procurement management</li>
                            <li>Certification</li>
                            <li>Special features for Customers</li>
                        </ul>
                        <div class="solutions-item__check">
                            <svg xmlns="http://www.w3.org/2000/svg" width="88" height="88" viewBox="0 0 88 88" fill="none">
                                <path d="M44 0.25C19.875 0.25 0.25 19.875 0.25 44C0.25 68.125 19.875 87.75 44 87.75C68.125 87.75 87.75 68.125 87.75 44C87.75 19.875 68.125 0.25 44 0.25ZM65.0875 30.4531L40.0875 58.5781C39.8076 58.9008 39.4629 59.1608 39.0757 59.3412C38.6885 59.5216 38.2677 59.6183 37.8406 59.625H37.75C37.3396 59.6251 36.9333 59.5443 36.5542 59.3871C36.1751 59.23 35.8306 58.9997 35.5406 58.7094L23.0406 46.2094C22.7422 45.9211 22.5041 45.5763 22.3403 45.195C22.1765 44.8138 22.0903 44.4037 22.0867 43.9888C22.0831 43.5738 22.1622 43.1623 22.3193 42.7783C22.4764 42.3942 22.7085 42.0453 23.0019 41.7519C23.2953 41.4585 23.6442 41.2264 24.0283 41.0693C24.4123 40.9122 24.8238 40.8331 25.2388 40.8367C25.6537 40.8403 26.0638 40.9265 26.445 41.0903C26.8263 41.2541 27.1711 41.4922 27.4594 41.7906L37.6156 51.9469L60.4125 26.2969C60.6854 25.9899 61.0161 25.7397 61.3857 25.5605C61.7553 25.3814 62.1566 25.2768 62.5666 25.2527C62.9766 25.2286 63.3874 25.2855 63.7754 25.4202C64.1634 25.5548 64.5212 25.7646 64.8281 26.0375C65.1351 26.3104 65.3853 26.6411 65.5645 27.0107C65.7436 27.3803 65.8482 27.7816 65.8723 28.1916C65.8964 28.6016 65.8395 29.0124 65.7048 29.4004C65.5702 29.7884 65.3604 30.1462 65.0875 30.4531Z" fill="#9E9E9E"/>
                            </svg>
                        </div>
                    </div>
                </div>
                <div class="solutions-item">
                    <div class="solutions-item__inner">
                        <div class="solutions-item__title main-text">Contractor Management Automation</div>
                        <ul class="solutions-item__list checked-icon show-elem">
                            <li>Digital Workflow</li>
                        </ul>
                        <div class="solutions-item__check">
                            <svg xmlns="http://www.w3.org/2000/svg" width="88" height="88" viewBox="0 0 88 88" fill="none">
                                <path d="M44 0.25C19.875 0.25 0.25 19.875 0.25 44C0.25 68.125 19.875 87.75 44 87.75C68.125 87.75 87.75 68.125 87.75 44C87.75 19.875 68.125 0.25 44 0.25ZM65.0875 30.4531L40.0875 58.5781C39.8076 58.9008 39.4629 59.1608 39.0757 59.3412C38.6885 59.5216 38.2677 59.6183 37.8406 59.625H37.75C37.3396 59.6251 36.9333 59.5443 36.5542 59.3871C36.1751 59.23 35.8306 58.9997 35.5406 58.7094L23.0406 46.2094C22.7422 45.9211 22.5041 45.5763 22.3403 45.195C22.1765 44.8138 22.0903 44.4037 22.0867 43.9888C22.0831 43.5738 22.1622 43.1623 22.3193 42.7783C22.4764 42.3942 22.7085 42.0453 23.0019 41.7519C23.2953 41.4585 23.6442 41.2264 24.0283 41.0693C24.4123 40.9122 24.8238 40.8331 25.2388 40.8367C25.6537 40.8403 26.0638 40.9265 26.445 41.0903C26.8263 41.2541 27.1711 41.4922 27.4594 41.7906L37.6156 51.9469L60.4125 26.2969C60.6854 25.9899 61.0161 25.7397 61.3857 25.5605C61.7553 25.3814 62.1566 25.2768 62.5666 25.2527C62.9766 25.2286 63.3874 25.2855 63.7754 25.4202C64.1634 25.5548 64.5212 25.7646 64.8281 26.0375C65.1351 26.3104 65.3853 26.6411 65.5645 27.0107C65.7436 27.3803 65.8482 27.7816 65.8723 28.1916C65.8964 28.6016 65.8395 29.0124 65.7048 29.4004C65.5702 29.7884 65.3604 30.1462 65.0875 30.4531Z" fill="#9E9E9E"/>
                            </svg>
                        </div>
                    </div>
                </div>
                <div class="solutions-item">
                    <div class="solutions-item__inner">
                        <div class="solutions-item__title main-text">Financial management and cost optimization</div>
                        <ul class="solutions-item__list checked-icon show-elem">
                            <li>Budgeting</li>
                            <li>Cost management</li>
                            <li>Cashflow management</li>
                            <li>Fines management</li>
                        </ul>
                        <div class="solutions-item__check">
                            <svg xmlns="http://www.w3.org/2000/svg" width="88" height="88" viewBox="0 0 88 88" fill="none">
                                <path d="M44 0.25C19.875 0.25 0.25 19.875 0.25 44C0.25 68.125 19.875 87.75 44 87.75C68.125 87.75 87.75 68.125 87.75 44C87.75 19.875 68.125 0.25 44 0.25ZM65.0875 30.4531L40.0875 58.5781C39.8076 58.9008 39.4629 59.1608 39.0757 59.3412C38.6885 59.5216 38.2677 59.6183 37.8406 59.625H37.75C37.3396 59.6251 36.9333 59.5443 36.5542 59.3871C36.1751 59.23 35.8306 58.9997 35.5406 58.7094L23.0406 46.2094C22.7422 45.9211 22.5041 45.5763 22.3403 45.195C22.1765 44.8138 22.0903 44.4037 22.0867 43.9888C22.0831 43.5738 22.1622 43.1623 22.3193 42.7783C22.4764 42.3942 22.7085 42.0453 23.0019 41.7519C23.2953 41.4585 23.6442 41.2264 24.0283 41.0693C24.4123 40.9122 24.8238 40.8331 25.2388 40.8367C25.6537 40.8403 26.0638 40.9265 26.445 41.0903C26.8263 41.2541 27.1711 41.4922 27.4594 41.7906L37.6156 51.9469L60.4125 26.2969C60.6854 25.9899 61.0161 25.7397 61.3857 25.5605C61.7553 25.3814 62.1566 25.2768 62.5666 25.2527C62.9766 25.2286 63.3874 25.2855 63.7754 25.4202C64.1634 25.5548 64.5212 25.7646 64.8281 26.0375C65.1351 26.3104 65.3853 26.6411 65.5645 27.0107C65.7436 27.3803 65.8482 27.7816 65.8723 28.1916C65.8964 28.6016 65.8395 29.0124 65.7048 29.4004C65.5702 29.7884 65.3604 30.1462 65.0875 30.4531Z" fill="#9E9E9E"/>
                            </svg>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>
<section class="projects">
    <div class="container">
        <div class="projects__inner" id="projects">
            <div class="projects__title title-h2">Successful projects on <span class="second-font">KIMLAB</span> platform</div>
            <div class="projects__items-wrap main-text">
                <div class="project-item show-elem">
                    <div class="project-item__img">
                        <img src="images/project1.jpg" alt="">
                    </div>
                    <div class="project-item__text">
                        <div class="project-item__title">Automated Fleet maintenance </div>
                        <div class="project-item__ssubtitle">Main benefits</div>
                        <ul class="project-item__list checked-icon">
                            <li>Reduced fleet downtime</li>
                            <li>Reduced maintenance costs</li>
                            <li>Improved inventory turnover rate</li>
                        </ul>
                        <div class="project-item__hidden-list">
                            <ul class="project-item__list checked-icon hidden-list">
                                <li>Automation of all maintenance processes</li>
                                <li>Budgeting</li>
                                <li>Cashflow management</li>
                                <li>Fines management</li>
                                <li>Fleet management Analytics</li>
                            </ul>
                            <div class="project-item__button js-popup-button">
                                <a href="javascript:void(0);" class="main-btn">Free Demo</a>
                            </div>
                        </div>
                        <div class="project-item__button">
                            <button class="main-btn js-more-btn">Learn more</button>
                        </div>
                    </div>
                </div>
                <div class="project-item show-elem">
                    <div class="project-item__img">
                        <img src="images/project2.jpg" alt="">
                    </div>
                    <div class="project-item__text">
                        <div class="project-item__title">Gas-piston power plant maintenance management</div>
                        <div class="project-item__ssubtitle">Main benefits</div>
                        <ul class="project-item__list checked-icon">
                            <li>Increased availability rate</li>
                            <li>Reduced fleet downtime</li>
                            <li>Reduction in repair costs</li>
                            <li>Spare parts budget reduction</li>
                            <li>Extending life cycle of power plant</li>
                        </ul>
                        <div class="project-item__hidden-list">
                            <ul class="project-item__list checked-icon hidden-list">
                                <li>Controlling the state of the station by telemetry sensors</li>
                                <li>Accounting for operational indicators</li>
                                <li>Detection of anomalies in the readings of sensors on equipment</li>
                                <li>Registration of defects, controlled indicators and equipment operating time</li>
                                <li>Remote receipt of tasks for repairs and maintenance</li>
                            </ul>

                            <div class="project-item__button js-popup-button">
                                <a href="javascript:void(0);" class="main-btn">Free Demo</a>
                            </div>
                        </div>
                        <div class="project-item__button">
                            <button class="main-btn js-more-btn">Learn more</button>
                        </div>
                    </div>
                </div>
                <div class="project-item show-elem">
                    <div class="project-item__img">
                        <img src="images/project3.jpg" alt="">
                    </div>
                    <div class="project-item__text">
                        <div class="project-item__title">Construction procurement process automation</div>
                        <div class="project-item__ssubtitle">Main benefits</div>
                        <ul class="project-item__list checked-icon">
                            <li>Reduced processing time</li>
                            <li>Reduced fleet downtime</li>
                            <li>Spare parts budget reduction</li>
                        </ul>
                        <div class="project-item__hidden-list">
                            <ul class="project-item__list checked-icon hidden-list">
                                <li>Automatic creation of orders in accordance with the construction plan</li>
                                <li>Holding mini tenders between the contractors and suppliers</li>
                            </ul>
                            <div class="project-item__button js-popup-button">
                                <a href="javascript:void(0);" class="main-btn">Free Demo</a>
                            </div>
                        </div>
                        <div class="project-item__button">
                            <button class="main-btn js-more-btn">Learn more</button>
                        </div>
                    </div>
                </div>
                <div class="project-item show-elem">
                    <div class="project-item__img">
                        <img src="images/project4.jpg" alt="">
                    </div>
                    <div class="project-item__text">
                        <div class="project-item__title">Construction equipment rent automation</div>
                        <div class="project-item__ssubtitle">Main benefits</div>
                        <ul class="project-item__list checked-icon">
                            <li>Acceleration of orders processing</li>
                            <li>Budget Savings</li>
                            <li>Reduced fleet downtime</li>
                            <li>All accounting documents are correct</li>
                            <li>A unified account for payment to all contractors</li>
                        </ul>
                        <div class="project-item__hidden-list">
                            <ul class="project-item__list checked-icon hidden-list">
                                <li>Automatic creation of orders</li>
                            </ul>
                            <div class="project-item__button js-popup-button">
                                <a href="javascript:void(0);" class="main-btn">Free Demo</a>
                            </div>
                        </div>
                        <div class="project-item__button">
                            <button class="main-btn js-more-btn">Learn more</button>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>
<section class="feedback">
    <div class="container">
        <div class="feedback__inner">
            <div class="feedback__title title-h2">Do you want to improve the efficiency of asset management?</div>
            <div class="feedback__form-wrap show-elem">
                <form action="/" method="post"  class="feedback-form">
                    <div class="feedback-form__title main-text">Leave a request for more information about ways to business process optimization of your company</div>
                    <div class="feedback-form__main">
                        <input type="text" name="name" placeholder="Name*" required>
                        <input type="text" name="company" placeholder="Company">
                        <input type="tel" name="phone" placeholder="Phone number*" required>
                        <input type="email" name="email" placeholder="E-mail*" required>
                        <button class="main-btn">Send</button>
                        <div class="feedback-form__privacy">
                            I accept the <a class="form-link popup-confid-btn" href="javascript:void(0);">Privacy Policy</a>
                        </div>
                    </div>
                </form>
            </div>
        </div>
    </div>
</section>
<section class="present">
    <div class="container">
        <div class="present__inner" id="about-us">
            <div class="present__title">
                Modular architecture  <span class="second-font">KIMLAB</span> is a modern standard for digitalization
            </div>
            <div class="present__subtitle title-h2"><span class="second-font">KIMLAB</span> integration with your automated systems</div>
            <div class="present__pic">
                <img src="images/present-pic-en.svg" alt="Модульная система">
            </div>
            <div class="present__pic-hidden">
                <img src="images/present-adapt-en.svg" alt="Модульная система">
            </div>
        </div>
    </div>
</section>
<section class="plus">
    <div class="container">
        <div class="plus__inner">
            <div class="plus__title title-h2">Benefits of working with a cloud-based platform</div>
            <div class="plus-wrap">
                <div class="plus__top">
                    <div class="plus-item show-elem">
                        <div class="plus-item__img">
                            <img src="images/icons/plus-wifi.svg" alt="">
                        </div>
                        <div class="plus-item__desc">Easy access through internet</div>
                    </div>
                </div>
                <div class="plus__main">
                    <div class="plus-item show-elem">
                        <div class="plus-item__img">
                            <img src="images/icons/plus-lock.svg" alt="">
                        </div>
                        <div class="plus-item__desc">No installation required</div>
                    </div>
                    <div class="plus-item show-elem">

                        <div class="plus-item__img">
                            <img src="images/icons/plus-pc.svg" alt="">
                        </div>
                        <div class="plus-item__desc">
                            <div class="plus-item__line line-top"></div>
                            <div class="plus-item__line line-right"></div>
                            <div class="plus-item__line line-bot"></div>
                            <div class="plus-item__line line-left"></div>
                            <div class="span">Intuitive interface</div>
                        </div>
                    </div>
                    <div class="plus-item show-elem">
                        <div class="plus-item__img">
                            <img src="images/icons/plus-cloud.svg" alt="">
                        </div>
                        <div class="plus-item__desc">All data is online</div>
                    </div>
                </div>
                <div class="plus__bot">
                    <div class="plus-item show-elem">
                        <div class="plus-item__img">
                            <img src="images/icons/plus-file.svg" alt="">
                        </div>
                        <div class="plus-item__desc">Any reports easy export to Excel</div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>
<section class="steps">
    <div class="container">
        <div class="steps__inner" id="steps">
            <div class="steps__title title-h2">Basic stages of automation using <span class="second-font">KIMLAB</span></div>
            <div class="step-items-wrap">
                <div class="step-item show-elem">
                    <div class="step-item__top">
                        <div class="step-item__number">1</div>
                        <div class="step-item__desc">Audit of the ERP in use</div>
                        <div class="step-item__text">3 days</div>
                    </div>
                    <div class="step-item__bot">
                        <div class="step-item__arrow">
                            <svg width="70" height="70" viewBox="0 0 70 70" fill="none" xmlns="http://www.w3.org/2000/svg">
                                <g clip-path="url(#clip0_34_132)">
                                    <path d="M34.9998 1.12147e-06C15.6699 5.02101e-07 -5.02101e-07 15.6699 -1.12147e-06 34.9998C-1.74085e-06 54.3296 15.6699 70.0002 34.9998 70.0002C54.3296 70.0002 70.0002 54.3296 70.0002 34.9998C69.9783 15.6788 54.3214 0.021658 34.9998 1.12147e-06ZM34.9998 66.4997C17.6027 66.4997 3.49978 52.3969 3.49978 34.9998C3.49978 17.6027 17.6027 3.49978 34.9998 3.49978C52.3969 3.49978 66.4997 17.6027 66.4997 34.9998C66.4799 52.3884 52.3884 66.4799 34.9998 66.4997Z" fill="#3D32CF"/>
                                    <path d="M30.9018 21.4326C30.1739 20.7961 29.0684 20.8706 28.4321 21.598C27.7963 22.326 27.8706 23.4314 28.5981 24.0678L41.0924 34.9998L28.5974 45.9324C27.8693 46.5688 27.7957 47.6743 28.4314 48.4016C29.0678 49.1297 30.1732 49.204 30.9014 48.5676L44.9011 36.3174C45.089 36.1531 45.2395 35.9505 45.3427 35.7232C45.4458 35.496 45.4992 35.2493 45.4992 34.9997C45.4992 34.7501 45.4458 34.5034 45.3427 34.2762C45.2395 34.0489 45.089 33.8463 44.9011 33.682L30.9018 21.4326Z" fill="#3D32CF"/>
                                </g>
                                <defs>
                                    <clipPath id="clip0_34_132">
                                        <rect width="70" height="70" fill="white"/>
                                    </clipPath>
                                </defs>
                            </svg>
                        </div>
                    </div>
                </div>
                <div class="step-item show-elem">
                    <div class="step-item__top">
                        <div class="step-item__number">2</div>
                        <div class="step-item__desc">Select and configuring Kimlab modules</div>
                        <div class="step-item__text">10-15 days</div>
                    </div>
                    <div class="step-item__bot">
                        <div class="step-item__arrow">
                            <svg width="70" height="70" viewBox="0 0 70 70" fill="none" xmlns="http://www.w3.org/2000/svg">
                                <g clip-path="url(#clip0_34_132)">
                                    <path d="M34.9998 1.12147e-06C15.6699 5.02101e-07 -5.02101e-07 15.6699 -1.12147e-06 34.9998C-1.74085e-06 54.3296 15.6699 70.0002 34.9998 70.0002C54.3296 70.0002 70.0002 54.3296 70.0002 34.9998C69.9783 15.6788 54.3214 0.021658 34.9998 1.12147e-06ZM34.9998 66.4997C17.6027 66.4997 3.49978 52.3969 3.49978 34.9998C3.49978 17.6027 17.6027 3.49978 34.9998 3.49978C52.3969 3.49978 66.4997 17.6027 66.4997 34.9998C66.4799 52.3884 52.3884 66.4799 34.9998 66.4997Z" fill="#3D32CF"/>
                                    <path d="M30.9018 21.4326C30.1739 20.7961 29.0684 20.8706 28.4321 21.598C27.7963 22.326 27.8706 23.4314 28.5981 24.0678L41.0924 34.9998L28.5974 45.9324C27.8693 46.5688 27.7957 47.6743 28.4314 48.4016C29.0678 49.1297 30.1732 49.204 30.9014 48.5676L44.9011 36.3174C45.089 36.1531 45.2395 35.9505 45.3427 35.7232C45.4458 35.496 45.4992 35.2493 45.4992 34.9997C45.4992 34.7501 45.4458 34.5034 45.3427 34.2762C45.2395 34.0489 45.089 33.8463 44.9011 33.682L30.9018 21.4326Z" fill="#3D32CF"/>
                                </g>
                                <defs>
                                    <clipPath id="clip0_34_132">
                                        <rect width="70" height="70" fill="white"/>
                                    </clipPath>
                                </defs>
                            </svg>
                        </div>
                    </div>
                </div>
                <div class="step-item show-elem">
                    <div class="step-item__top">
                        <div class="step-item__number">3</div>
                        <div class="step-item__desc">Integration with your automated systems</div>
                        <div class="step-item__text">5 days</div>
                    </div>
                    <div class="step-item__bot">
                        <div class="step-item__arrow">
                            <svg width="70" height="70" viewBox="0 0 70 70" fill="none" xmlns="http://www.w3.org/2000/svg">
                                <g clip-path="url(#clip0_34_132)">
                                    <path d="M34.9998 1.12147e-06C15.6699 5.02101e-07 -5.02101e-07 15.6699 -1.12147e-06 34.9998C-1.74085e-06 54.3296 15.6699 70.0002 34.9998 70.0002C54.3296 70.0002 70.0002 54.3296 70.0002 34.9998C69.9783 15.6788 54.3214 0.021658 34.9998 1.12147e-06ZM34.9998 66.4997C17.6027 66.4997 3.49978 52.3969 3.49978 34.9998C3.49978 17.6027 17.6027 3.49978 34.9998 3.49978C52.3969 3.49978 66.4997 17.6027 66.4997 34.9998C66.4799 52.3884 52.3884 66.4799 34.9998 66.4997Z" fill="#3D32CF"/>
                                    <path d="M30.9018 21.4326C30.1739 20.7961 29.0684 20.8706 28.4321 21.598C27.7963 22.326 27.8706 23.4314 28.5981 24.0678L41.0924 34.9998L28.5974 45.9324C27.8693 46.5688 27.7957 47.6743 28.4314 48.4016C29.0678 49.1297 30.1732 49.204 30.9014 48.5676L44.9011 36.3174C45.089 36.1531 45.2395 35.9505 45.3427 35.7232C45.4458 35.496 45.4992 35.2493 45.4992 34.9997C45.4992 34.7501 45.4458 34.5034 45.3427 34.2762C45.2395 34.0489 45.089 33.8463 44.9011 33.682L30.9018 21.4326Z" fill="#3D32CF"/>
                                </g>
                                <defs>
                                    <clipPath id="clip0_34_132">
                                        <rect width="70" height="70" fill="white"/>
                                    </clipPath>
                                </defs>
                            </svg>
                        </div>
                    </div>
                </div>
                <div class="step-item show-elem">
                    <div class="step-item__top">
                        <div class="step-item__number">4</div>
                        <div class="step-item__desc">Training personnel to work with our system</div>
                        <div class="step-item__text">0,5 days</div>
                    </div>
                    <div class="step-item__bot">
                        <div class="step-item__arrow">
                            <svg width="70" height="70" viewBox="0 0 70 70" fill="none" xmlns="http://www.w3.org/2000/svg">
                                <g clip-path="url(#clip0_34_132)">
                                    <path d="M34.9998 1.12147e-06C15.6699 5.02101e-07 -5.02101e-07 15.6699 -1.12147e-06 34.9998C-1.74085e-06 54.3296 15.6699 70.0002 34.9998 70.0002C54.3296 70.0002 70.0002 54.3296 70.0002 34.9998C69.9783 15.6788 54.3214 0.021658 34.9998 1.12147e-06ZM34.9998 66.4997C17.6027 66.4997 3.49978 52.3969 3.49978 34.9998C3.49978 17.6027 17.6027 3.49978 34.9998 3.49978C52.3969 3.49978 66.4997 17.6027 66.4997 34.9998C66.4799 52.3884 52.3884 66.4799 34.9998 66.4997Z" fill="#3D32CF"/>
                                    <path d="M30.9018 21.4326C30.1739 20.7961 29.0684 20.8706 28.4321 21.598C27.7963 22.326 27.8706 23.4314 28.5981 24.0678L41.0924 34.9998L28.5974 45.9324C27.8693 46.5688 27.7957 47.6743 28.4314 48.4016C29.0678 49.1297 30.1732 49.204 30.9014 48.5676L44.9011 36.3174C45.089 36.1531 45.2395 35.9505 45.3427 35.7232C45.4458 35.496 45.4992 35.2493 45.4992 34.9997C45.4992 34.7501 45.4458 34.5034 45.3427 34.2762C45.2395 34.0489 45.089 33.8463 44.9011 33.682L30.9018 21.4326Z" fill="#3D32CF"/>
                                </g>
                                <defs>
                                    <clipPath id="clip0_34_132">
                                        <rect width="70" height="70" fill="white"/>
                                    </clipPath>
                                </defs>
                            </svg>
                        </div>
                    </div>
                </div>
                <div class="step-item show-elem">
                    <div class="step-item__top">
                        <div class="step-item__number">5</div>
                        <div class="step-item__desc">Running automated system on KIMLAB platform</div>
                        <div class="step-item__text"></div>
                    </div>
                    <div class="step-item__bot">
                        <div class="step-item__arrow">
                            <img src="images/icons/steps-done.svg" alt="">
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>
<footer class="footer">
    <div class="footer__main">
        <div class="container">
            <div class="footer__inner">
                <div class="footer__title">Any questions?</div>
                <div class="footer__form-wrap show-elem">
                    <form action="/" method="post" class="footer__form">
                        <div class="footer__form-title">Ask a question to get our expert opinion</div>
                        <div class="footer__form-main">
                            <input type="text" name="name" placeholder="Name*" required>
                            <input type="text" name="company" placeholder="Company">
                            <input type="text" name="industry" placeholder="Industry">
                            <input type="text" name="workpost" placeholder="Title">
                            <input type="tel" name="phone" placeholder="Phone number*" required>
                            <input type="email" name="email" placeholder="E-mail*" required>
                            <textarea name="message" id="" cols="30" rows="10" class="footer__form-area" placeholder="Question*" required></textarea>
                            <button class="main-btn">Send</button>
                        </div>
                        <div class="footer__form-privacy">
                            I accept the <a class="form-link popup-confid-btn" href="javascript:void(0);">Privacy Policy</a>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
    <div class="footer__bot">
        <div class="container">
            <div class="footer__bot-inner">
                <div class="footer__copyright">© KIMLAB 2023</div>
                <div class="scroll-to-top">
                    <button class="scroll-to-top-btn">
                        <img src="images/icons/scroll-to-top.svg" alt="">
                    </button>
                </div>
                <div class="footer__text">
                    <div class="footer__text-top">All rights reserved</div>
                    <div class="footer__text-bot">Copying prohibited</div>
                </div>
            </div>
        </div>
    </div>
</footer>

<!-- popup -->
<div class="popup-main-wrap js-popup-form">
    <div class="popup-bg js-close"></div>
    <div class="popup-form-wrap">
        <form action="/" method="post" class="popup-form">
            <button class="popup-form__close js-close">
                <svg xmlns="http://www.w3.org/2000/svg" width="25" height="25" viewBox="0 0 25 25" fill="none">
                    <g clip-path="url(#clip0_36_899)">
                        <path d="M14.711 12.5003L24.5419 2.66935C25.1527 2.05908 25.1527 1.0689 24.5419 0.458639C23.9311 -0.152147 22.942 -0.152147 22.3312 0.458639L12.5003 10.2896L2.6688 0.458639C2.05801 -0.152147 1.06888 -0.152147 0.458089 0.458639C-0.152696 1.0689 -0.152696 2.05908 0.458089 2.66935L10.2895 12.5003L0.458089 22.3312C-0.152696 22.9415 -0.152696 23.9317 0.458089 24.5419C0.763482 24.8468 1.16372 24.9995 1.56344 24.9995C1.96317 24.9995 2.36341 24.8468 2.6688 24.5414L12.5003 14.7105L22.3312 24.5414C22.6366 24.8468 23.0368 24.9995 23.4366 24.9995C23.8363 24.9995 24.2365 24.8468 24.5419 24.5414C25.1527 23.9312 25.1527 22.941 24.5419 22.3307L14.711 12.5003Z" fill="black"/>
                    </g>
                    <defs>
                        <clipPath id="clip0_36_899">
                            <rect width="25" height="25" fill="white"/>
                        </clipPath>
                    </defs>
                </svg>
            </button>
            <div class="popup-form__main">
                <div class="popup-form__title">Send a Request</div>
                <div class="popup-form__input-wrap">
                    <input type="text" name="name" placeholder="Name*" required>
                    <input type="text" name="company" placeholder="Company">
                    <input type="tel" name="phone" placeholder="Phone number*" required>
                    <input type="email" name="email" placeholder="E-mail*" required>
                </div>
                <div class="popup-form__privacy">
                    I accept the <a class="form-link popup-confid-btn" href="javascript:void(0);">Privacy Policy</a>
                </div>
                <div class="popup-form__btn">
                    <button class="main-btn">Send a Request</button>
                </div>
            </div>
        </form>
    </div>
</div>

<!-- popup hidden thanks display:flex-->
<div class="popup-thanks-wrap">
    <div class="popup-thanks">
        <button class="popup-form__close js-close">
            <svg xmlns="http://www.w3.org/2000/svg" width="25" height="25" viewBox="0 0 25 25" fill="none">
                <g clip-path="url(#clip0_36_899)">
                    <path d="M14.711 12.5003L24.5419 2.66935C25.1527 2.05908 25.1527 1.0689 24.5419 0.458639C23.9311 -0.152147 22.942 -0.152147 22.3312 0.458639L12.5003 10.2896L2.6688 0.458639C2.05801 -0.152147 1.06888 -0.152147 0.458089 0.458639C-0.152696 1.0689 -0.152696 2.05908 0.458089 2.66935L10.2895 12.5003L0.458089 22.3312C-0.152696 22.9415 -0.152696 23.9317 0.458089 24.5419C0.763482 24.8468 1.16372 24.9995 1.56344 24.9995C1.96317 24.9995 2.36341 24.8468 2.6688 24.5414L12.5003 14.7105L22.3312 24.5414C22.6366 24.8468 23.0368 24.9995 23.4366 24.9995C23.8363 24.9995 24.2365 24.8468 24.5419 24.5414C25.1527 23.9312 25.1527 22.941 24.5419 22.3307L14.711 12.5003Z" fill="black"></path>
                </g>
                <defs>
                    <clipPath id="clip0_36_899">
                        <rect width="25" height="25" fill="white"></rect>
                    </clipPath>
                </defs>
            </svg>
        </button>
        <div class="popup-thanks-text">
            Ваша заявка отправлена!<br><br><br>
            Мы свяжемся с вами в ближайшее время.
        </div>
    </div>
</div>
<!-- popup hidden thanks display:flex-->



<div class="popup popup-menu">
    <div class="popup-bg js-close"></div>
    <div class="popup-in">
        <div class="popup-close js-close"></div>
        <ul class="navigation__list">
            <li>
                <div class="header__lang-wrap">
                    <a href="javascript:void(0);" class="header__lang">
                        <img src="images/icons/header-lang.svg" alt="">
                    </a>
                    <ul class="header__lang-hidden">
                        <li>
                            <a href="/?lang=en">
                                <img src="images/icons/header-lang-gb.svg" alt="">
                            </a>
                        </li>
                        <li>
                            <a href="/?lang=es">
                                <img src="images/icons/header-lang-es.svg" alt="">
                            </a>
                        </li>
                        <li>
                            <a href="/?lang=de">
                                <img src="images/icons/header-lang-de.svg" alt="">
                            </a>
                        </li>
                    </ul>
                </div>
            </li>
            <li class="js-close">
                <a href="https://wa.me/<?=$phone[0]?>" target="_blank" class="header__whatsapp-wrap">
                    <span class="header__whatsapp-icon">
                        <img src="images/whatsapp_logo.svg" alt="">
                    </span>
                </a>
                <a href="tel:<?=$phone[0]?>" class="header__phone-wrap">
						<span class="header__phone-icon">
							<img src="images/icons/header-phone.svg" alt="">
						</span>
                    <span class="header__phone"><?=$phone[1]?></span>
                </a>
            </li>
            <li class="js-close">
                <a href="#solutions">
                    Ready-made solutions
                </a>
            </li>
            <li class="js-close">
                <a href="#projects">
                    Ongoing projects
                </a>
            </li>
            <li class="js-close">
                <a href="#about-us">
                    <span class="second-font">About KIMLAB</span>
                </a>
            </li>
            <li class="js-close">
                <a href="#steps">
                    Stages of implementation
                </a>
            </li>
        </ul>
    </div>
</div>
<div class="popup-main-wrap js-popup-form-more">
    <div class="popup-bg js-close"></div>
    <div class="popup-form-wrap">
        <form action="/" method="post" class="popup-form">
            <button class="popup-form__close js-close">
                <svg xmlns="http://www.w3.org/2000/svg" width="25" height="25" viewBox="0 0 25 25" fill="none">
                    <g clip-path="url(#clip0_36_899)">
                        <path d="M14.711 12.5003L24.5419 2.66935C25.1527 2.05908 25.1527 1.0689 24.5419 0.458639C23.9311 -0.152147 22.942 -0.152147 22.3312 0.458639L12.5003 10.2896L2.6688 0.458639C2.05801 -0.152147 1.06888 -0.152147 0.458089 0.458639C-0.152696 1.0689 -0.152696 2.05908 0.458089 2.66935L10.2895 12.5003L0.458089 22.3312C-0.152696 22.9415 -0.152696 23.9317 0.458089 24.5419C0.763482 24.8468 1.16372 24.9995 1.56344 24.9995C1.96317 24.9995 2.36341 24.8468 2.6688 24.5414L12.5003 14.7105L22.3312 24.5414C22.6366 24.8468 23.0368 24.9995 23.4366 24.9995C23.8363 24.9995 24.2365 24.8468 24.5419 24.5414C25.1527 23.9312 25.1527 22.941 24.5419 22.3307L14.711 12.5003Z" fill="black"/>
                    </g>
                    <defs>
                        <clipPath id="clip0_36_899">
                            <rect width="25" height="25" fill="white"/>
                        </clipPath>
                    </defs>
                </svg>
            </button>
            <div class="popup-form__main">
                <div class="popup-form__title">Free Demo</div>
                <div class="popup-form__input-wrap">
                    <input type="text" name="name" placeholder="Name*" required>
                    <input type="text" name="company" placeholder="Company">
                    <input type="tel" name="phone" placeholder="Phone number*" required>
                    <input type="email" name="email" placeholder="E-mail*" required>
                </div>
                <div class="popup-form__privacy">
                    I accept the <a class="form-link popup-confid-btn" href="javascript:void(0);">Privacy Policy</a>
                </div>
                <div class="popup-form__btn">
                    <button class="main-btn">Send a Request</button>
                </div>
            </div>
        </form>
    </div>
</div>

<div class="popup-confid-wrap popup-confident js-close-more">
    <div class="popup-bg js-close"></div>
    <iframe class="popup-confid-wrap popup-confident" src="policy_en.pdf"></iframe>
</div>

<script src="js/main.js"></script>



</body>
</html>