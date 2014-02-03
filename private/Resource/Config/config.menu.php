<?php
function buildMenu(){
    $menu = array(
        array($lang['MENU_HOME'], 'home.php', 'home'),
        array($lang['MENU_SERVICE'], 'service.php', ''),
        array($lang['MENU_ABOUT'], 'about.php', ''),
        array($lang['MENU_PORTFOLIO'], 'porfolio.php', ''),
        array($lang['MENU_MULTIMEDIA'], 'gallery.php', '')
    );
    
    return $menu;
}

