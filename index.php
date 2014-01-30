<?php
include_once './app/DB/DB.class.php';
include_once './private/DAO/ContactDAO.php';
include_once './private/Service/ContactService.php';
$database = new db('root', '', 'localhost', 'designpattern', array(PDO::MYSQL_ATTR_INIT_COMMAND => 'SET NAMES utf8'));


$contactDAO = new ContactDAO($database);
$contactService = new ContactService($contactDAO);


if (isset($_POST['controller'])) {
    include_once 'private/Controller/' . $_POST['controller'] . '.php';
}

//TOP
include './public/template/head.php';
include './public/template/aside.php';
//PAGE
include './public/page/top.php';
include './public/page/portfolio.php';
include './public/page/about.php';
include './public/page/contacts.php';
//FOOTER
include './public/template/footer.php';
?>

