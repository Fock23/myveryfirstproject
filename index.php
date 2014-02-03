<?php
error_reporting(E_ERROR | E_WARNING | E_PARSE);
include_once './private/Resource/Config/common.php';
include_once './app/DB/DB.class.php';
include_once './private/DAO/ContactDAO.php';
include_once './private/Service/ContactService.php';

$database = new db('root', '', 'localhost', 'designpattern', array(PDO::MYSQL_ATTR_INIT_COMMAND => 'SET NAMES utf8'));

$contactDAO = new ContactDAO($database);
$contactService = new ContactService($contactDAO);

//config menu
$menu = array(
    array($lang['MENU_HOME'], 'home.php', 'home', 'home'),
    array($lang['MENU_SERVICE'], 'service.php', '', 'service'),
    array($lang['MENU_ABOUT'], 'about.php', '', 'about'),
    array($lang['MENU_PORTFOLIO'], 'portfolio.php', '', 'portfolio'),
    array($lang['MENU_MULTIMEDIA'], 'gallery.php', '', 'gallery'),
    array($lang['MENU_CONTACTS'], 'contacts.php', '', 'contacts')
);

if (isset($_POST['controller'])) {
    include_once 'private/Controller/' . $_POST['controller'] . '.php';
}


include './public/template/head.php';
include './public/template/header.php';


foreach ($menu as $k => $i) {
    if(!$_GET[$i[3]]){
        include_once './public/page/home.php';
    }elseif(isset($_GET[$i[3]])){
        include './public/page/'.$i[1];
    } 
}



include './public/template/widget.php';
include './public/template/footer.php';
?>

