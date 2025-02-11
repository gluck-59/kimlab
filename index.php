<?php
error_reporting(E_ERROR);

//    $clientInfo = file_get_contents('https://api.hackertarget.com/ipgeo/?q='.$_SERVER['REMOTE_ADDR']);
    $isEmailSent = false;
    $phone = ['+34657150497', '+34 657 150 497'];
    if ($_POST['email'] OR $_POST['phone']) {
        try {
            // ТП рекомендует это: https://www.namecheap.com/support/knowledgebase/article.aspx/10038/31/how-to-configure-a-contact-form-with-us/#smtp
            // это запасной вариант, отправляет через системного юзера kimloltb, нужно для подгрузки DKIM-SPF
            // попробуем если понадобится

            /*require_once "Mail.php";
            $from = "kimloltb@kimlab.link";
            $to = "gluck59@gmail.com";
            $subject = "Kimlab — контактная форма";

            $message = '<p>Сообщение из формы "Оставить заявку" от ' . $_POST['workpost'] . ' ' . $_POST['name'] . '</p>';
            $message .= '<p>Email: ' . $_POST['email'] . '</p>';
            $message .= '<p>Телефон: ' . $_POST['phone'] . '</p>';
            if (!empty($_POST['company'])) $message .= '<p>Компания: ' . $_POST['company'] . '</p>';
            if (!empty($_POST['indusrty'])) $message .= '<p>Индустрия: ' . $_POST['indusrty'] . '</p>';
            if (!empty($_POST['message'])) $message .= '<p>Сообщение: ' . $_POST['message'] . '</p>';

            $host = "kimlab.link";
            $username = "kimloltb";
            $password = "zkJ17SpbaNCw";

            $headers = array('From' => $from, 'To' => $to, 'Subject' => $subject, 'MIME-Version' => 'MIME-Version: 1.0', 'Content-type' => 'text/html; charset=UTF-8');

            $smtp = Mail::factory('smtp',
                array('host' => $host,
                    'auth' => true,
                    'username' => $username,
                    'password' => $password));
            $mail = $smtp->send($to, $headers, $message);
            if (PEAR::isError($mail)) {
                echo($mail->getMessage());
            } else {
                $isEmailSent = true;
            } */


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

              if ($userIP = getUserIP()) {
                  $message .= '<hr><pre style="word-wrap: break-word; white-space: pre-wrap; font-size: small;">'.file_get_contents('https://api.hackertarget.com/ipgeo/?q='.$userIP).'</pre>';
              }

              if (!$_POST['lastname']) {
                  // mm@kimlab.link
                  mail('gluck59@gmail.com, mm@kimlab.link', 'Kimlab — контактная форма', $message, $headers);
                  $isEmailSent = true;
              }

        } catch (Exception $e) {
            throw new Exception('Send Email Error: ',  $e->getMessage(), 400);
        };
    } // if POST


    // установка языка стр
    if (isset($_GET['lang']) AND $_GET['lang'] != '') $sLang = $_GET['lang'];
    else $sLang = substr($_SERVER['HTTP_ACCEPT_LANGUAGE'], 0, 2);
    //echo '$sLang='.$sLang;//.' — $isEmailSent='.$isEmailSent;
    if (!include strtolower($sLang).'.php') include 'en.php';





/**
 * выводит print_r / var_dump по-человечьи
 *
 * @param $data
 * @param $die
 * @param $showStack
 * @return void
 */
function prettyDump($data = null, $die = false, $showStack = false) {
//	if (in_array($_SERVER['SERVER_ADDR'], ['127.0.0.1', '::1', '0.0.0.0', 'localhost']))
    {
        $stack = debug_backtrace(DEBUG_BACKTRACE_IGNORE_ARGS);
        echo "<pre style='text-align: left;font-size: 14px;font-family: Courier, monospace; background-color: #f4f4f4; width: fit-content; opacity: .9; z-index: 999;position: relative;margin: 0 0 0 300px;'>";
        if ($showStack) print_r($stack);
        if ($stack[0]['function'] == 'prettyDump') {
            echo __FUNCTION__.'() из '.$stack[0]['file'].' line '.$stack[0]['line'].'<br>';
        } else {
//			print_r($stack);
            echo __FUNCTION__.'() из '.($stack[1]['args'][0] ? $stack[1]['args'][0] : $stack[2]['file']).' строка '.$stack[0]['line'].':<br>';
        }
        if (is_bool($data) || is_null($data) || empty($data)) var_dump($data);
        else print_r($data);
        echo "</pre>";
        if ($die) die;
    }
}


/**
 * пробует получить реальный IP юзера когда спамер заходит через прокси
 *
 * @return mixed
 */
function getUserIP() {
    $userIP = false;
    if(!empty($_SERVER['HTTP_CLIENT_IP'])) {
        $userIP = $_SERVER['HTTP_CLIENT_IP'];
    } elseif(!empty($_SERVER['HTTP_X_FORWARDED_FOR'])) {
        $userIP = $_SERVER['HTTP_X_FORWARDED_FOR'];
    } else {
        $userIP = $_SERVER['REMOTE_ADDR'];
    }
    return $userIP;
}