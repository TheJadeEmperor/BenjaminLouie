<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
    <head>
        <meta http-equiv="Content-Type" content="text/html; charset=UTF-8" />
        <title><?= $metaTitle ?></title>
        <meta name="description" content="<?= $sys_item_desc ?>" />
        <meta name="keywords" content="<?= $sys_item_kw ?>" />
        <link href="main.css" rel="stylesheet" type="text/css" />
        <script type="text/javascript" src="js/jquery-1.3.2.min.js"></script>
        <!-- Cufon -->
        <script type="text/javascript" src="js/cufon-yui.js"></script>
        <script type="text/javascript" src="js/myradpro.font.js"></script>
        <script type="text/javascript">
            Cufon.replace('h1')('h2')('h3')('h4');
        </script>
        <!-- flash script -->
        <script type="text/javascript" src="js/flash_detect.v1.7.js"></script>
    </head>
    <body>
        <?php
        $menu = array(
            'home' => array(
                'menuTitle' => 'Home',
                'pageTitle' => 'BL Web Solutions Home'),
            'solutions' => array(
                'menuTitle' => 'Solutions',
                'pageTitle' => 'Web Solutions'),
            'code' => array(
                'menuTitle' => 'Code',
                'pageTitle' => 'Prospective Employers Section'),
            'portfolio' => array(
                'menuTitle' => 'Portfolio',
                'pageTitle' => 'BL Web Solutions Portfolio'),
            'contact' => array(
                'menuTitle' => 'Contact Us',
                'pageTitle' => 'Contact BL Web Solutions'),
        );

        foreach ($menu as $url => $val) {
            if ($url == $_GET['action']) {
                $class = ' class="active"';
                $pageTitle = $val['pageTitle'];
            } else
                $class = '';

            if ($val['menuTitle'])
                $mainMenu .= '<li><a href="?action=' . $url . '"' . $class . '><span>' . $val['menuTitle'] . '</span></a></li>';
        }


        $mainMenu = '<ul>' . $mainMenu . '</ul>';

        if ($_GET['action'] == '' || $_GET['action'] == 'home') {
            echo '<div class="main">
	<div class="header">
    <div class="logo"><a href="./"><img src="images/logo1.jpg" width="420px" border="0" alt="BL Web Solutions" 
    title="BL Web Solutions"/></a></div>
    <div class="menu">' . $mainMenu;

            include('subheader.html');
        } 
        else {
            echo '<div class="main2">
	<div class="header">
    <div class="logo"><a href="./"><img src="images/logo1.jpg" width="420px" border="0" alt="BL Web Solutions" 
    title="BL Web Solutions"/></a></div>
    <div class="menu">
        ' . $mainMenu . '
        <div class="clr"></div>
    </div>
    <div class="clr"></div>
    </div>
	<div class="slide_blog_resize">
            <div class="slide_blog_resize_b">
		<h4>' . $pageTitle . '</h4>
		<div class="search">
                    <a href="./?action=contact"><img src="images/fb.png" alt="BL Web Solutions Facebook" title="BL Web Solutions Facebook"></a>
		</div>
            <div class="clr"></div>
            </div>
	</div>';
        }
        ?>