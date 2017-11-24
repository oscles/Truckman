<?php
require_once 'inc/header.php';
if (isset($_GET['url']))
        include_once 'inc/'.$_GET['url'].'.php';
else
    include_once 'inc/inicio.php';
require_once 'inc/footer.php';
