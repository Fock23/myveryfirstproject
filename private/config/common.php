<?php

session_start();
header('Cache-control: private'); // fix per Internet Explorer 6

if (isSet($_GET['lang'])) {
    $lang = $_GET['lang'];

// registra la sessione ed effettua il setting dei cookie
    $_SESSION['lang'] = $lang;

    setcookie('lang', $lang, time() + (3600 * 24 * 30));
} else if (isSet($_SESSION['lang'])) {
    $lang = $_SESSION['lang'];
} else if (isSet($_COOKIE['lang'])) {
    $lang = $_COOKIE['lang'];
} else {
    $lang = 'it';
}

switch ($lang) {
    case 'it':
        $lang_file = 'it.php';
        break;

    case 'de':
        $lang_file = 'de.php';
        break;

    default:
        $browser = $_SERVER['HTTP_ACCEPT_LANGUAGE'];
        $lang_browser = substr($browser, 0, 2);
        if($lang_browser == 'it' || $lang_browser == 'de'){
            $lang_file = $lang_browser.'.php';
        }else{
            $lang_file = 'it.php';
        }
}

include_once 'languages/' . $lang_file;
?>