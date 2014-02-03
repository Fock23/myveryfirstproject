
<div id="header-wrap">
    <header class="group">
        <h2><a href="index.php" title="<?php echo $lang['SITE_TITLE']; ?>"><img src="public/images/logo/logo.png" width="255"/></a></h2>
        <div id="call">
            <h3>(012) 345 6789</h3>
            <h4 class="green">Call us <strong>now</strong></h4>
        </div><!-- end call -->
        <nav class="group">
            <ul>
                <?php
                
                foreach ($menu as $k => $i) {
                    echo '<li class="' . $i[2] . '"><a href="?' . $i[3] . '" title="' . $i[0] . '" id="anchor">' . $i[0] . '</a></li>';
                }
                
                if (!isset($_GET['lang'])) {
                    $_GET['lang'] = 'it';
                }
                if ($_GET['lang'] == 'it') {
                    ?>
                    <li class="last">
                        <div>
                            <a href="?lang=en"><img src="public/images/languages/en-icon.png" width="16" alt="en" /></a>
                        </div>
                    </li>
                <?php } elseif ($_GET['lang'] == 'en') {
                    ?>
                    <li class="last">
                        <div>
                            <a href="?lang=it"><img src="public/images/languages/it-icon.png" width="16" alt="en" /></a>
                        </div>
                    </li>
                    <?php
                }
                ?>


            </ul>
        </nav>
    </header>
</div><!-- end header wrap -->
