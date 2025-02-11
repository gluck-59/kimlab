<?php
//    phpinfo(); die;
error_reporting(E_ERROR);

//    $clientInfo = file_get_contents('https://api.hackertarget.com/ipgeo/?q='.$_SERVER['REMOTE_ADDR']);
    $isEmailSent = false;
    $phone = ['+34657150497', '+34 657 150 497'];
    if ($_POST['email'] OR $_POST['phone']) {
        try {
            // ТП рекомендует это: https://www.namecheap.com/support/knowledgebase/article.aspx/10038/31/how-to-configure-a-contact-form-with-us/#smtp
            // попробуем если понадобится

            // запасной вариант
            // отправляет через системного юзера kimloltb, нужно для подгрузки DKIM-SPF
//            require_once "Mail.php";
//
//            $from = "kimloltb@kimlab.link";
//            $to = "gluck59@gmail.com";
//            $subject = "Kimlab — контактная форма";
//
//            $message = '<p>Сообщение из формы "Оставить заявку" от ' . $_POST['workpost'] . ' ' . $_POST['name'] . '</p>';
//            $message .= '<p>Email: ' . $_POST['email'] . '</p>';
//            $message .= '<p>Телефон: ' . $_POST['phone'] . '</p>';
//            if (!empty($_POST['company'])) $message .= '<p>Компания: ' . $_POST['company'] . '</p>';
//            if (!empty($_POST['indusrty'])) $message .= '<p>Индустрия: ' . $_POST['indusrty'] . '</p>';
//            if (!empty($_POST['message'])) $message .= '<p>Сообщение: ' . $_POST['message'] . '</p>';
//
//            $host = "kimlab.link";
//            $username = "kimloltb";
//            $password = "zkJ17SpbaNCw";
//
//            $headers = array('From' => $from, 'To' => $to, 'Subject' => $subject, 'MIME-Version' => 'MIME-Version: 1.0', 'Content-type' => 'text/html; charset=UTF-8');
//
//            $smtp = Mail::factory('smtp',
//                array('host' => $host,
//                    'auth' => true,
//                    'username' => $username,
//                    'password' => $password));
//            $mail = $smtp->send($to, $headers, $message);
//            if (PEAR::isError($mail)) {
//                echo($mail->getMessage());
//            } else {
//                $isEmailSent = true;
//            }
//


            $headers = 'From: Kimlab' . "\r\n" .
                'Reply-To: ' . $_POST['email'] . "\r\n" .
                'X-Mailer: Mail Exchanger at kimlab.link ' . phpversion();

              $headers  .= 'MIME-Version: 1.0' . "\r\n";
              $headers .= 'Content-type: text/html; charset=UTF-8' . "\r\n";

              $message = '<p>Сообщение из формы "Оставить заявку" от '.$_POST['workpost'].' '.$_POST['name'].'</p>';
              $message .= '<p>Email: '.$_POST['email'].'</p>';
              $message .= '<p>Телефон: '.$_POST['phone'].'</p>';
              if (!empty($_POST['company'])) $message .= '<p>Компания: '.$_POST['company'].'</p>';
              if (!empty($_POST['industry'])) $message .= '<p>Отрасль: '.$_POST['industry'].'</p>';
              if (!empty($_POST['message'])) $message .= '<p>Сообщение: '.$_POST['message'].'</p>';
              $message .= '<hr><pre style="word-wrap: break-word; white-space: pre-wrap; font-size: small;">'.file_get_contents('https://api.hackertarget.com/ipgeo/?q='.$_SERVER['REMOTE_ADDR']).'</pre>';

              mail('gluck59@gmail.com', 'Kimlab — контактная форма', $message, $headers);
              //$isEmailSent = true; // mm@kimlab.link

        } catch (Exception $e) {
            throw new Exception('Send Email Error: ',  $e->getMessage(), 400);
        };
    }

if (isset($_GET['lang']) AND $_GET['lang'] != '') $sLang = $_GET['lang'];
else $sLang = substr($_SERVER['HTTP_ACCEPT_LANGUAGE'], 0, 2);
//echo '$sLang='.$sLang;//.' — $isEmailSent='.$isEmailSent;
if (!include strtolower($sLang).'.php') include 'en.php';


//////////////////////////////////////////////////////
    function printr($input = null, $die = false) {
    $html = '<pre>';
    $html .= print_r($input, 1);
    $html .= '</pre>';

    echo $html;
    if ($die) die;
}


