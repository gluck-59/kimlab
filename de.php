<!DOCTYPE html>
<html lang="de">
<head>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="icon" href="favicon.ico">
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
                        <li><a href="#">Erfolgreich gesendet!</a></li>
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
                            <span class="header__logo-text">Automatisierung Ihres Unternehmens</span>
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
                                <button class="main-btn js-popup-btn">Jetzt anmelden</button>
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
                                <a href="#solutions">Typische Lösungen</a>
                            </li>
                            <li>
                                <a href="#projects">Realisierte Projekte</a>
                            </li>
                            <li>
                                <a href="#about-us" class="menu-bot-nav__font">Über KIMLAB</a>
                            </li>
                            <li>
                                <a href="#steps">Phasen der Umsetzung</a>
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
                                    <a href="#solutions">Typische Lösungen</a>
                                </li>
                                <li>
                                    <a href="#projects">Realisierte Projekte</a>
                                </li>
                                <li>
                                    <a href="#about-us" class="menu-bot-nav__font">Über KIMLAB</a>
                                </li>
                                <li>
                                    <a href="#steps">Phasen der Umsetzung</a>
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
                                <button class="main-btn js-popup-btn">Jetzt anmelden</button>
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
                                    <span class="second-font">KIMLAB — </span>Cloud-basiertes CMMS
                                </div>
                                <div class="header__main-subtitle title-h2">
                                    Ein neues Maß an Managementeffizienz
                                </div>
                                <ul class="header__main-list checked-icon">
                                    <li>Automatisierung von Managementprozessen</li>
                                    <li>Kostenoptimierung</li>
                                    <li>Online Echtzeitsteuerung , Buchführung und Analyse</li>
                                    <li>Einheitliche Informationsbasis</li>
                                </ul>
                                <div class="header__main-btn">
                                    <button class="main-btn js-popup-button">Demotermin vereinbaren</button>
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
				<div class="solutions__title title-h2">Typische Lösungen für das <span class="second-font">KIMLAB</span> System</div>
				<div class="solutions__items-wrap">
					<div class="solutions-item">
						<div class="solutions-item__inner">
							<div class="solutions-item__title main-text">Verwaltung von regulatorischen Arbeiten</div>
							<ul class="solutions-item__list checked-icon show-elem">
								<li>Wartung und Reparatur</li>
								<li>Beschaffungs-management</li>
								<li>Zertifizierung</li>
								<li>Besonderheiten für Kunden</li>
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
							<div class="solutions-item__title main-text">Automatisierung der Auftragnehmerverwaltung</div>
							<ul class="solutions-item__list checked-icon show-elem">
								<li>Lieferungs- und Serviceverwaltung (vom Antrag bis zur Abnahme)</li>
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
							<div class="solutions-item__title main-text">Finanzkontrolle und Kostenoptimierung</div>
							<ul class="solutions-item__list checked-icon show-elem">
								<li>Budgetierung</li>
								<li>Kostenmanagement</li>
								<li>Verwalten von Zahlungen</li>
								<li>Verwalten von Bußgeldern</li>
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
				<div class="projects__title title-h2">Realisierte Projekte im <span class="second-font">KIMLAB</span>-system</div>
				<div class="projects__items-wrap main-text">
					<div class="project-item show-elem">
						<div class="project-item__img">
							<img src="images/project1.jpg" alt="">
						</div>
						<div class="project-item__text">
							<div class="project-item__title">Automatisierte Flottenwartung</div>
							<div class="project-item__ssubtitle">Hauptvorteile</div>
							<ul class="project-item__list checked-icon">
								<li>Reduzierte Ausfallzeiten der Flotte</li>
								<li>Reduzierte Wartungskosten</li>
								<li>Verbesserte Lagerumschlagsrate</li>								
							</ul>
							<div class="project-item__hidden-list">
								<ul class="project-item__list checked-icon hidden-list">
									<li>Automatisierung aller Instandhaltungsprozesse</li>
									<li>Budget-Kostenkontrolle</li>
									<li>Verwalten von Zahlungen</li>
									<li>Verwalten von Bußgeldern</li>
									<li>Jede Form der Analyse und Berichterstattung</li>							
								</ul>
								<div class="project-item__button js-popup-button">
									<a href="javascript:void(0);" class="main-btn">Demotermin vereinbaren</a>
								</div>
							</div>
							<div class="project-item__button">
								<button class="main-btn js-more-btn">Mehr erfahren</button>
							</div>
						</div>
					</div>
					<div class="project-item show-elem">
						<div class="project-item__img">
							<img src="images/project2.jpg" alt="">
						</div>
						<div class="project-item__text">
							<div class="project-item__title">Verwaltung der Wartung von Gaskolben-Kraftwerken</div>
							<div class="project-item__ssubtitle">Hauptvorteile</div>
							<ul class="project-item__list checked-icon">
								<li>Erhöhte Verfügbarkeitsrate</li>
								<li>Reduzierte Ausfallzeiten der Flotte</li>
								<li>Senkung der Reparaturkosten</li>
								<li>Reduzierung des Ersatzteilbudgets</li>
								<li>Erhöhung der Lebenszyklusdauer</li>							
							</ul>
							<div class="project-item__hidden-list">
								<ul class="project-item__list checked-icon hidden-list">
									<li>Überwachung des Stationsstatus über Telemetriesensoren</li>
									<li>Erfassung der Betriebsindikatoren</li>
									<li>Erkennung von Anomalien in den Messwerten von Sensoren an Geräten</li>
									<li>Registrierung von Mängeln, kontrollierten Indikatoren und Betriebszeiten der Ausrüstung</li>
									<li>Ferner Empfang von Reparatur- und Wartungsaufträgen</li>							
								</ul>
								
								<div class="project-item__button js-popup-button">
									<a href="javascript:void(0);" class="main-btn">Demotermin vereinbaren</a>
								</div>
							</div>
							<div class="project-item__button">
								<button class="main-btn js-more-btn">Mehr erfahren</button>
							</div>
						</div>
					</div>
					<div class="project-item show-elem">
						<div class="project-item__img">
							<img src="images/project3.jpg" alt="">
						</div>
						<div class="project-item__text">
							<div class="project-item__title">Automatisierte Beschaffung für Bauprojekte</div>
							<div class="project-item__ssubtitle">Hauptvorteile</div>
							<ul class="project-item__list checked-icon">
								<li>Schnellere Bearbeitung von Anträgen</li>
								<li>Reduzierung der Zeit von Inaktivität</li>
								<li>Reduzierung des Ersatzteilbudgets</li>							
							</ul>
							<div class="project-item__hidden-list">
								<ul class="project-item__list checked-icon hidden-list">
									<li>Erstellen von automatischen Anträgen gemäß dem Bebauungsplan</li>
									<li>Durchführung von Mini-Ausschreibungen zwischen Hauptunternehmern und Lieferanten</li>					
								</ul>
								<div class="project-item__button js-popup-button">
									<a href="javascript:void(0);" class="main-btn">Demotermin vereinbaren</a>
								</div>
							</div>
							<div class="project-item__button">
								<button class="main-btn js-more-btn">Mehr erfahren</button>
							</div>
						</div>
					</div>
					<div class="project-item show-elem">
						<div class="project-item__img">
							<img src="images/project4.jpg" alt="">
						</div>
						<div class="project-item__text">
							<div class="project-item__title">Automatisierte Vermietung von Spezialgeräten</div>
							<div class="project-item__ssubtitle">Hauptvorteile</div>
							<ul class="project-item__list checked-icon">
								<li>Schnellere Bearbeitung von Anträgen</li>
								<li>Budget sparen</li>
								<li>Verbesserte Lagerumschlagsrate</li>
								<li>Alle Buchhaltungsunterlagen sind korrekt</li>
								<li>Eine einzige Rechnung für alle Auftragnehmer</li>					
							</ul>
							<div class="project-item__hidden-list">
								<ul class="project-item__list checked-icon hidden-list">
									<li>Erstellen von automatischen Anforderungen</li>
								</ul>
								<div class="project-item__button js-popup-button">
									<a href="javascript:void(0);" class="main-btn">Demotermin vereinbaren</a>
								</div>
							</div>
							<div class="project-item__button">
								<button class="main-btn js-more-btn">Mehr erfahren</button>
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
				<div class="feedback__title title-h2">Möchten Sie das Ressourcen-management effizienter gestalten?</div>
				<div class="feedback__form-wrap show-elem">
                    <form action="/" method="post"  class="feedback-form">
						<div class="feedback-form__title main-text">Hinterlassen Sie eine Anfrage für weitere Informationen über Möglichkeiten zur Geschäftsprozessoptimierung Ihres Unternehmens</div>
						<div class="feedback-form__main">
                            <input type="text" name="lastname" placeholder="Last Name*">
							<input type="text" name="name" placeholder="Name*" required>
							<input type="text" name="company" placeholder="Unternehmen">
							<input type="tel" name="phone" placeholder="Telefonnummer*" required>
							<input type="email" name="email" placeholder="E-mail*" required>
							<button class="main-btn">Senden</button>
							<div class="feedback-form__privacy">
                                Ich akzeptiere die <a class="form-link popup-confid-btn" href="javascript:void(0);">Datenschutzerklärung</a>
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
                    Das modulare System von <span class="second-font">KIMLAB</span> ist ein moderner Standard für die Digitalisierung des Ressourcen-managements
				</div>
				<div class="present__subtitle title-h2">Mechanismus für die Integration von <span class="second-font">KIMLAB</span> mit Buchhaltungssystemen</div>
				<div class="present__pic">
					<img src="images/present-pic-de.svg" alt="">
				</div>
				<div class="present__pic-hidden">
					<img src="images/present-adapt-de.svg" alt="">
				</div>
			</div>
		</div>
	</section>
	<section class="plus">
		<div class="container">
			<div class="plus__inner">
				<div class="plus__title title-h2">Vorteile der Cloud-Plattform</div>
				<div class="plus-wrap">
					<div class="plus__top">
						<div class="plus-item show-elem">
							<div class="plus-item__img">
								<img src="images/icons/plus-wifi.svg" alt="">
							</div>
							<div class="plus-item__desc">Für den Zugriff ist nur das Internet erforderlich</div>
						</div>
					</div>
					<div class="plus__main">
						<div class="plus-item show-elem">
							<div class="plus-item__img">
								<img src="images/icons/plus-lock.svg" alt="">
							</div>
							<div class="plus-item__desc">Keine Installation erforderlich</div>
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
								<div class="span">Benutzerfreundliche und einfache Schnittstelle</div>
							</div>
						</div>
						<div class="plus-item show-elem">
							<div class="plus-item__img">
								<img src="images/icons/plus-cloud.svg" alt="">
							</div>
							<div class="plus-item__desc">Online-Datenaktualisierung</div>
						</div>
					</div>
					<div class="plus__bot">
						<div class="plus-item show-elem">
							<div class="plus-item__img">
								<img src="images/icons/plus-file.svg" alt="">
							</div>
							<div class="plus-item__desc">Beliebige Berichte einfacher Export nach Excel</div>
						</div>
					</div>
				</div>
			</div>
		</div>
	</section>
	<section class="steps">
		<div class="container">
			<div class="steps__inner" id="steps">
				<div class="steps__title title-h2">Die wichtigsten Phasen der Implementierung des Systems auf der <span class="second-font">KIMLAB</span>-Plattform</div>
				<div class="step-items-wrap">
					<div class="step-item show-elem">
						<div class="step-item__top">
							<div class="step-item__number">1</div>
							<div class="step-item__desc">Prüfung des eingesetzten ERP</div>
							<div class="step-item__text">3 werktage</div>
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
							<div class="step-item__desc">Auswahl und Konfiguration von Modulen auf der <span class="second-font">KIMLAB</span>-Plattform</div>
							<div class="step-item__text">10-15 Werktage</div>
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
							<div class="step-item__desc">Integration in vorhandene Buchhaltungs- und Überwachungssysteme</div>
							<div class="step-item__text">5 Werktage</div>
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
							<div class="step-item__desc">Vorbereitung des Personals für die Arbeit mit dem System</div>
							<div class="step-item__text">Ein halber Werktag</div>
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
							<div class="step-item__desc">Einführung des Managementsystems auf der KIMLAB-Plattform</div>
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
					<div class="footer__title">Haben Sie noch Fragen?</div>
					<div class="footer__form-wrap show-elem">
                        <form action="/" method="post" class="footer__form">
							<div class="footer__form-title">Teilen Sie uns hier Ihre Fragen mit um die Antwort des Experten zu erhalten</div>
							<div class="footer__form-main">
                                <input type="text" name="lastname" placeholder="Last Name*">
								<input type="text" name="name" placeholder="Name*" required>
								<input type="text" name="company" placeholder="Unternehmen">
								<input type="text" name="industry" placeholder="Branche">
								<input type="text" name="workpost" placeholder="Berufsbezeichnung">
								<input type="tel" name="phone" placeholder="Telefonnummer*" required>
								<input type="email" name="email" placeholder="E-mail*" required>
								<textarea name="message" id="" cols="30" rows="10" class="footer__form-area" placeholder="Frage*" required></textarea>
								<button class="main-btn">Senden</button>
							</div>
							<div class="footer__form-privacy">
                                Ich akzeptiere die <a class="form-link popup-confid-btn" href="javascript:void(0);">Datenschutzerklärung</a>
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
						<div class="footer__text-top">Alle Rechte vorbehalten</div>
						<div class="footer__text-bot">Kopieren ist verboten</div>					 
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
        <div class="popup-form__title">Jetzt anmelden</div>
        <div class="popup-form__input-wrap">
            <input type="text" name="lastname" placeholder="Last Name*">
            <input type="text" name="name" placeholder="Name*" required>
            <input type="text" name="company" placeholder="Unternehmen">
            <input type="tel" name="phone" placeholder="Telefonnummer*" required>
            <input type="email" name="email" placeholder="E-mail*" required>
        </div>
        <div class="popup-form__privacy">
            Ich akzeptiere die <a class="form-link popup-confid-btn" href="javascript:void(0);">Datenschutzerklärung</a>
        </div>
        <div class="popup-form__btn">
            <button class="main-btn">Jetzt anmelden</button>
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
						Typische Lösungen
					</a>
				</li>
				<li class="js-close">
					<a href="#projects">
						Realisierte Projekte
					</a>
				</li>
				<li class="js-close">
					<a href="#about-us">
						<span class="second-font">Über KIMLAB</span>
					</a>
				</li>
				<li class="js-close">
					<a href="#steps">
						Phasen der Umsetzung
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
					<div class="popup-form__title">Demotermin vereinbaren</div>
					<div class="popup-form__input-wrap">
                        <input type="text" name="lastname" placeholder="Last Name*">
						<input type="text" name="name" placeholder="Name*" required>
						<input type="text" name="company" placeholder="Unternehmen">
						<input type="tel" name="phone" placeholder="Telefonnummer*" required>
						<input type="email" name="email" placeholder="E-mail*" required>
					</div>
					<div class="popup-form__privacy">
                        Ich akzeptiere die <a class="form-link popup-confid-btn" href="javascript:void(0);">Datenschutzerklärung</a>
					</div>
					<div class="popup-form__btn">
						<button class="main-btn">Jetzt anmelden</button>
					</div>
				</div>
			</form>
		</div>
	</div>

	<div class="popup-confid-wrap popup-confident js-close-more">		
		<div class="popup-confid">	
			<button class="popup-confid-close js-close-more">
				<img src="images/icons/privacy-close.svg" alt="">
			</button>	
			<div class="popup-confid-text">
				<p><strong>Политика конфиденциальности</strong></p>

<p>Настоящий документ &laquo;Политика конфиденциальности&raquo; (далее в тексте &mdash; &laquo;Политика&raquo;) представляет собой правила использования на сайте <a href="https://k.link/" target="_blank">https://k.link/&nbsp;</a>(далее &mdash; &laquo;Сайт&raquo;) персональной информации Пользователя.&nbsp;</p>

<p>Политика действует в отношении всей информации, которую Unternehmen и лица, входящие в Компанию, могут получить о Пользователе, во время использования им любого из сайтов, сервисов, служб, программ, продуктов или услуг, а также в ходе исполнения Компанией любых соглашений и договоров с Пользователем.</p>

<p>Использование сайта означает безоговорочное согласие Пользователя с настоящей Политикой и указанными в ней условиями обработки его персональной информации. В случае несогласия с этими условиями, пользователю следует воздержаться от использования сайта.</p>

<p><strong>1. Терминология</strong></p>

<p>1.1. В настоящей Политике используются следующие термины:<br />
Unternehmen (далее &ndash; &laquo;Unternehmen&raquo;) &mdash; администрация сайта и уполномоченные сотрудники, действующие от лица&nbsp;<a href="https://k.link/" target="_blank">k.link</a>&nbsp;и организовывающие или осуществляющие обработку персональных данных, определяющие цели обработки персональных данных, состав персональных данных, подлежащих обработке, и операции, совершаемые с персональными данными.</p>

<p>Пользователь Сайта (далее &mdash; &laquo;Пользователь&raquo;) &mdash; лицо, имеющее доступ к Сайту, посредством сети Интернет, и использующее его.</p>

<p>Персональные данные &mdash; любая информация, относящаяся к прямо или косвенно определенному (или определяемому) физическому лицу.&nbsp;</p>

<p>Обработка персональных данных &mdash; любая операция или совокупность действий, совершаемых с персональными данными при помощи автоматизированных средств или без них. Включает в себя: сбор, запись, систематизацию, накопление, хранение, обновление, изменение, уточнение, извлечение, использование, передачу, распространение, предоставление, обезличивание, блокирование, удаление и уничтожение персональных данных.</p>

<p>Конфиденциальность персональных данных &mdash; обязательное для соблюдения Компанией или лицом, получившим доступ к персональным данным, требование &mdash; не допускать их распространения без согласия Пользователя или его законного представителя.</p>

<p>Cookies &mdash; малый пакет данных, отправленный веб-сервером и хранящийся на устройстве Пользователя. Каждый раз при попытке открыть страницу соответствующего сайта пересылается веб-клиентом или веб-браузером в HTTP-запросе веб-серверу.</p>

<p>IP-адрес &mdash; уникальный сетевой адрес узла в компьютерной сети, построенной по протоколу IP.</p>

<p><strong>2. Общие положения Политики</strong></p>

<p>2.1. Настоящая Политика является неотъемлемой частью Публичной оферты (Далее &mdash; Оферта), размещенной по адресу:&nbsp;<a href="https://k.link/">k.link</a>, а также других договоров, заключенных между Сайтом и Пользователем, если это предусмотрено их условиями.</p>

<p>2.2. Настоящая Политика составлена в соответствии с Федеральным законом &laquo;О персональных данных&raquo; №152-ФЗ от 27 июля 2006 года и прочими нормативными актами РФ в области защиты и обработки персональных данных.</p>

<p>2.3. Настоящая Политика действует в отношении всех персональных данных, которые Сайт может получить от Пользователя.</p>

<p>2.4. К настоящей Политике применяется законодательство Российской Федерации, включая ее толкование, изменение, прекращение и порядок исполнения.</p>

<p><strong>3. Персональная информация Пользователей, которую обрабатывает Сайт.</strong></p>

<p>3.1. Под персональной информацией в настоящей Политике понимается:</p>

<p>3.1.1. Информация, предоставленная самим Пользователем при создании учетной записи (регистрации) или в процессе использования Сайта. Обязательная для предоставления информация отмечена специальным образом, любые другие данные предоставляются Пользователем на его усмотрение.</p>

<p>3.1.2. Данные, передающиеся Сайту в автоматическом режиме, с помощью установленного на устройстве Пользователя программного обеспечения (в том числе: IP-адреса, данные файлов Cookies, информация о браузере Пользователя (или любой другой программе, с помощью которой осуществляется доступ к сайту), дата и время доступа к сайту, адреса запрашиваемых страниц и прочая подобная информация).</p>

<p>3.1.3. Иная информация о Пользователе, обработка которой предусмотрена использованием Сайта.</p>

<p>3.2. Настоящая Политика применяется только к информации, обрабатываемой на основании использования Сайта. Сайт не несет ответственности и не контролирует обработку информации третьими лицами, на сайты которых пользователь перешел по ссылкам, доступным на Сайте.</p>

<p>3.3. Сайт не осуществляет проверки подлинности персональной информации, предоставленной Пользователем, а также не имеет возможность оценивать его дееспособность.</p>

<p><strong>4. Цели обработки персональной информации Пользователя.</strong></p>

<p>4.1. Сайт осуществляет сбор и хранение только тех персональных данных, которые необходимы для исполнения соглашений и договоров с Пользователем. Исключения составляют случаи, когда законодательством предусмотрено обязательное хранение персональных данных в течение определенного законом срока.</p>

<p>4.2. Персональную информацию Пользователя Сайт обрабатывает в следующих целях:</p>

<p>4.2.1. Идентификация стороны в рамках договоров и соглашений с Сайтом.</p>

<p>4.2.2. Предоставление Пользователю персонализированных услуг и сервисов, а также исполнение договоров и соглашений.</p>

<p>4.2.3. Обработка заявок и запросов от Пользователя.</p>

<p>4.2.4. Направление запросов, уведомлений, информации, касающихся исполнения соглашений и договоров.</p>

<p>4.2.5. Улучшения качества работы Сайта, разработка новых сервисов, повышение удобства его использования.</p>

<p>4.2.6. Таргетирование рекламных материалов.</p>

<p>4.2.7. Проведение исследований на основе статистических показателей обезличенных данных.</p>

<p><strong>5. Условия обработки персональной информации и передачи ее третьим лицам.</strong></p>

<p>5.1. Конфиденциальность в отношении личной информации Пользователя сохраняется, кроме случаев добровольного предоставления Пользователем персональной информации о себе для общего доступа широкому кругу лиц.</p>

<p>5.2. Сайт оставляет за собой право передачи персональной информации Пользователя третьим лицам в следующих случаях:</p>

<p>5.2.1. Пользователь выразил свое согласие.</p>

<p>5.2.2. Передача необходима для исполнения определенных пунктов договора или соглашения с Пользователем, либо для использования Пользователем определенного сервиса.</p>

<p>5.2.3. Передача необходима для работоспособности и функционирования Сайта.</p>

<p>5.2.4. Передача предусмотрена российским или иным применимым законодательством и производится в рамках установленной законом процедуры.</p>

<p>5.2.5. Передача происходит в рамках продажи или передачи бизнеса (или его части), при этом к приобретателю переходят обязательства по соблюдению условий настоящей Политики.</p>

<p>5.2.6. В целях обеспечения возможности защиты законных прав и интересов Сайта или третьих лиц, в случае нарушения Покупателем Пользовательского соглашения Сайта, настоящей Политики или документов, содержащих условия использования сервисов и услуг Сайта.</p>

<p>5.2.7. В результате обработки персональной информации Пользователя путем ее обезличивания &mdash; полученные обезличенные статистические данные передаются третьему лицу для проведения исследования, выполнения работ или оказания услуг по поручению Сайта.</p>

<p><strong>6. Изменение и удаление персональной информации пользователя. Обязательное хранение данных.</strong></p>

<p>6.1. Пользователь имеет право в любой момент изменить (обновить, дополнить) предоставленную им информацию (полностью или частично), обратившись к Сайту.</p>

<p>6.2. Права, предусмотренные пунктом 6.1. настоящей политики могут быть ограничены, в соответствии с требованиями законодательства. Например, законом может быть установлен обязательный срок хранения удаленных или измененных данных и их передача государственному органу, в соответствии с законодательно установленной процедурой.</p>

<p><strong>7. Обработка персональных данных при помощи счетчиков и файлов Cookie.</strong></p>

<p>7.1. Файлы Cookies, передающиеся оборудованием Сайта оборудованию Пользователя и наоборот, могут использоваться Сайтом для предоставления Пользователю персонализированных сервисов, таргетирования рекламы, в статистических и исследовательских целях, а также для улучшения Сайта.</p>

<p>7.2. Пользователь осознает, что программное обеспечение и оборудование, которые он использует для посещения сайтов в сети Интернет, могут запрещать операции с файлами Cookies как для определенных сайтов, так и для любых, а также удалять ранее полученные.</p>

<p>7.3. Сайт вправе предоставлять определенные сервисы и услуги только при условии разрешенного файлообмена Cookies.</p>

<p>7.4. Структура файла Cookies, его содержание и технические параметры определяются Сайтом и могут подвергаться изменениям без предварительной договоренности с Пользователем.</p>

<p>7.5. Счетчики, используемые Сайтом, могут анализировать файлы Cookies Пользователя для сбора и обработки статистической информации об использовании самого Сайта, а также для обеспечения его работоспособности в целом, либо &mdash; его отдельных сервисов в частности. Параметры работы счетчиков определяются Сайтом и могут изменяться без предварительного оповещения пользователя.</p>

<p><strong>8. Защита персональной информации Пользователя.</strong></p>

<p>8.1. Сайт предпринимает все необходимые и достаточные организационные и технические меры для сохранения и защиты персональных данных Пользователя от неправомерного доступа, уничтожения, блокирования, копирования, изменения и прочих неправомерных действий со стороны третьих лиц.</p>

<p>9. Изменение Политики конфиденциальности.</p>

<p>9.1. Сайт оставляет за собой полное право вносить изменения в настоящую Политику конфиденциальности. При их внесении в актуальной редакции указывается дата последнего обновления. Новая версия Политики конфиденциальности вступает в силу сразу же после размещения на Сайте, если иное не предусмотрено.</p>

<p>9.2. Действующая редакция постоянно доступна на странице Сайта по адресу&nbsp;<a href="https://k.link/" target="_blank">k.link</a></p>

<p>10. Контакты и Frageы по персональным данным.</p>

<p>10.1. Все Frageы, предложения, замечания и иные обращения по поводу настоящей Политики и использования своих персональных данных Пользователь вправе направить Сайту.</p>


			</div>
		</div>
	</div>

	<div class="popup-confid-wrap popup-privacy-wrap js-close-more">
		<div class="popup-confid popup-privacy">
			<button class="popup-confid-close js-close-more">
				<img src="images/icons/privacy-close.svg" alt="">
			</button>
			<div class="popup-confid-text">
			<p>СОГЛАСИЕ НА ОБРАБОТКУ ПЕРСОНАЛЬНЫХ ДАННЫХ КЛИЕНТОВ - ФИЗИЧЕСКИХ ЛИЦ&nbsp;</p>

<p>Пользователь, оставляя заявку на интернет-сайте <a href="https://k.link/" target="_blank">https://k.link/</a>, принимает настоящее Согласие на обработку персональных данных (далее &ndash; Согласие). Действуя свободно, своей волей и в своем интересе, а также подтверждая свою дееспособность, Пользователь дает свое согласие на обработку своих персональных данных со следующими условиями:&nbsp;</p>

<p>1. Данное Согласие дается на обработку персональных данных, как без использования средств автоматизации, так и с их использованием.&nbsp;</p>

<p>2. Согласие дается на обработку следующих персональных данных: персональные данные, не являющиеся специальными или биометрическими: номера контактных Telefonnummerов; адреса электронной почты; место работы и занимаемая Berufsbezeichnung; пользовательские данные (сведения о местоположении; IP-адрес; , данные файлов Cookies; тип и версия ОС; тип и версия Браузера (или любой другой программе, с помощью которой осуществляется доступ к сайту); тип устройства и разрешение его экрана; источник откуда пришел на сайт пользователь; с какого сайта или по какой рекламе; язык ОС и Браузера; когда и какие страницы открывает и на какие кнопки нажимает пользователь и прочая подобная информация.</p>

<p>3. Персональные данные не являются общедоступными.&nbsp;</p>

<p>4. Цель обработки персональных данных: обработка входящих запросов физических лиц с целью оказания консультирования; аналитики действий физического лица на веб-сайте и функционирования веб-сайта; проведение рекламных и новостных рассылок.&nbsp;</p>

<p>5. Основанием для обработки персональных данных является: ст. 24 Конституции Российской Федерации; ст.6 Федерального закона №152-ФЗ &laquo;О персональных данных&raquo;; настоящее согласие на обработку персональных данных&nbsp;</p>

<p>6. В ходе обработки с персональными данными будут совершены следующие действия: сбор; запись; систематизация; накопление; хранение; уточнение (обновление, изменение); извлечение; использование; передача (распространение, предоставление, доступ); блокирование; удаление; уничтожение.&nbsp;</p>

<p>7. Персональные данные обрабатываются до отписки физического лица от рекламных и новостных рассылок. Также обработка персональных данных может быть прекращена по запросу субъекта персональных данных. Согласие на обработку персональных данных может быть в любое время отозвано путем уведомления компании &laquo;КИМЛАБ&raquo;. Хранение персональных данных, зафиксированных на бумажных носителях осуществляется согласно Федеральному закону №125- ФЗ &laquo;Об архивном деле в Российской Федерации&raquo; и иным нормативно правовым актам в области архивного дела и архивного хранения.&nbsp;</p>

<p>8. Согласие может быть отозвано субъектом персональных данных или его представителем путем направления письменного заявления компании &laquo;КИМЛАБ&raquo; или его представителю</p>

<p>9. В случае отзыва субъектом персональных данных или его представителем согласия на обработку персональных данных Unternehmen &laquo;КИМЛАБ&raquo; вправе продолжить обработку персональных данных без согласия субъекта при наличии оснований, указанных в пунктах 2 &ndash; 11 части 1 статьи 6, части 2 статьи 10 и части 2 статьи 11 Федерального закона №152-ФЗ &laquo;О персональных данных&raquo; от 27.07.2006 г.&nbsp;</p>

<p>10. Настоящее согласие действует все время до момента прекращения обработки персональных данных, указанных в п.7 и п.8 данного Согласия</p>

			</div>
		</div>
	</div>

	<script src="js/main.js"></script>

	
	
</body>
</html>