<?php 
header("Content-type: text/css; charset: UTF-8");

//Global variables
$baseColor = get_field('base_color', 'options');
$lightGray = get_field('light_gray', 'options');
$darkGray = get_field('dark_gray', 'options');

$primary = get_field('primary', 'options');
$secondary = get_field('secondary', 'options');
$tetriary = get_field('tetriary', 'options');

$topbarBG = get_field("topbar_background_color", "option");
$topbarColor = get_field("topbar_color", "options"); 

$footerBG = get_field ("footer_background_color", "options");
$footerColor = get_field ("footer_color", "options");
?>

body {
    color:  <? echo $baseColor ?>;
}
h1,
h2,
h3,
h4,
h5,
h6 {
    color: <? echo $primary ?>;
}
a {
    color: <? echo $baseColor ?>;
}
.subheading {
    color: <? echo $secondary ?>;
}
.btn--primary {	
	background-color: <? echo $primary ?>;
}
.btn--secondary {
    background-color: <? echo $secondary ?>;
}


.nav .topbar__wrapper {
    background-color: <?php echo $topbarBG ?>;
    color: <? echo $topbarColor ?>;
}
.nav .topbar__wrapper .topbar .phone a,
.nav .topbar__wrapper .topbar .nav__drawer .top-nav li a {
    color: <? echo $topbarColor ?>;
}
.hamburger-button__bar--top,
.hamburger-button__bar--middle,
.hamburger-button__bar--bottom {
    color: <? echo $primary ?>;
    background-color: <? echo $primary ?>;
}
.nav__drawer .primary-nav > li a {
    color: <? echo $baseColor ?>;
}
.nav__drawer .primary-nav > li.current-menu-item > a,
.nav__drawer .primary-nav > li.current-menu-ancestor > a {
    color: <? echo $primary ?>;
    border-bottom: 2px solid <? echo $primary ?>;
}
@media only screen and (min-width: 768px) {
    .nav__drawer .primary-nav .sub-menu {
        background-color: <? echo $secondary ?>;
    }
    .nav__drawer .primary-nav .sub-menu .current-menu-item > a {
        color: <? echo $primary ?>;
    }
}


.footer {
    background-color: <? echo $footerBG ?>;
    color: <? echo $footerColor ?>;
}
.footer a {
    color: <? echo $footerColor ?>;
}
.footer .nav__drawer .footer-nav li.btn {
    background-color: <? echo $tetriary ?>;
}


.slick-slider .slick-dots li button:before {
    color: <? echo $secondary ?>;
}
.slick-slider .slick-dots li.slick-active button:before {
    color: <? echo $primary ?>;
}


.main--archive .category li a,
.main--single .category li a,
.main--single .btn-back {
    color: <? echo $primary ?>;
}

