<?php
/**
 * Created by PhpStorm.
 * User: IEUser
 * Date: 10/24/2016
 * Time: 7:55 AM
 */
?>
<?if(!defined("B_PROLOG_INCLUDED")||B_PROLOG_INCLUDED!==true)die();
?>
<?use Bitrix\Main\Localization\Loc;
use Bitrix\Main\Page\Asset;
Loc::loadMessages(__FILE__);?>
<!doctype html>
<html class="no-js" lang="<?=LANGUAGE_ID?>">
<head>

    <title><?$APPLICATION->ShowTitle();?></title>
    <?$APPLICATION->ShowHead();?>

    <!-- favicon
    ============================================ -->
    <link rel="shortcut icon" type="image/x-icon" href="<?=SITE_TEMPLATE_PATH;?>/images/favicon.ico">

    <!-- Google Fonts
    ============================================ -->
    <?Asset::getInstance()-> addCss('https://fonts.googleapis.com/css?family=Raleway:400,600');?>
    <?Asset::getInstance()-> addCss('https://fonts.googleapis.com/css?family=Roboto:400,700');?>


    <!-- Bootstrap CSS
    ============================================ -->
    <?Asset::getInstance()-> addCss(SITE_TEMPLATE_PATH."/css/bootstrap.min.css");?>

    <!-- Font awesome CSS
    ============================================ -->
    <?Asset::getInstance()-> addCss(SITE_TEMPLATE_PATH."/css/font-awesome.min.css");?>
    <!-- owl.carousel CSS
    ============================================ -->
    <?Asset::getInstance()-> addCss(SITE_TEMPLATE_PATH."/css/owl.carousel.css");?>
    <?Asset::getInstance()-> addCss(SITE_TEMPLATE_PATH."/css/owl.theme.css");?>
    <?Asset::getInstance()-> addCss(SITE_TEMPLATE_PATH."/css/owl.transitions.css");?>
    <!-- nivo slider CSS
    ============================================ -->
    <?Asset::getInstance()-> addCss(SITE_TEMPLATE_PATH."/css/nivo-slider.css");?>
    <!-- meanmenu CSS
    ============================================ -->
    <?Asset::getInstance()-> addCss(SITE_TEMPLATE_PATH."/css/meanmenu.min.css");?>
    <!-- jquery-ui CSS
    ============================================ -->
    <?Asset::getInstance()-> addCss(SITE_TEMPLATE_PATH."/css/jquery-ui.css");?>

    <!-- animate CSS
    ============================================ -->
    <?Asset::getInstance()-> addCss(SITE_TEMPLATE_PATH."/css/animate.css");?>
    <!-- main CSS
    ============================================ -->
    <?Asset::getInstance()-> addCss(SITE_TEMPLATE_PATH."/css/main.css");?>
    <!-- style CSS
    ============================================ -->
    <?Asset::getInstance()-> addCss(SITE_TEMPLATE_PATH."/css/style.css");?>
    <!-- responsive CSS
    ============================================ -->
    <?Asset::getInstance()-> addCss(SITE_TEMPLATE_PATH."/css/responsive.css");?>
</head>
<body>
<?$APPLICATION->ShowPanel();?>
<!-- HEADER-AREA START -->
<header class="header-area">
    <!-- HEADER-TOP START -->
    <div class="header-top hidden-xs">
        <div class="container">
            <div class="row">
                <div class="col-xs-12 col-sm-12 col-md-12 col-lg-12">
                    <div class="top-menu">

                        <p class="welcome-msg">
                            <? $APPLICATION->IncludeComponent("bitrix:main.include",
                                "",
                                Array(
                                    "COMPONENT_TEMPLATE" => ".default",
                                    "AREA_FILE_SHOW" => "file",
                                    "AREA_FILE_SUFFIX" => "inc",
                                    "EDIT_TEMPLATE" => "",
                                    "PATH" => SITE_TEMPLATE_PATH . "/include_areas/welcome_msg.php"
                                )); ?>
                            </p>
                    </div>
                    <!-- Start Top-Link -->
                    <div class="top-link">
                        <ul class="link">
                            <li><a href="#"><i class="fa fa-user"></i> Мой аккаунт</a></li>
                            <li><a href="#"><i class="fa fa-share"></i> Корзина</a></li>
                            <li><a href="#"><i class="fa fa-unlock-alt"></i> Войти</a></li>
                        </ul>
                    </div>
                    <!-- End Top-Link -->
                </div>
            </div>
        </div>
    </div>
    <!-- HEADER-TOP END -->
    <!-- HEADER-MIDDLE START -->
    <div class="header-middle">
        <div class="container">
            <!-- Start Support-Client -->
            <div class="support-client hidden-xs">
                <div class="row">
                    <!-- Start Single-Support -->
                    <div class="col-md-3 hidden-sm">
                        <div class="single-support">
                            <div class="support-content">
                                <i class="fa fa-clock-o"></i>
                                <div class="support-text">
                                    <h1 class="zero gfont-1"><?=Loc::getMessage("WORKING_TIME");?></h1>
                                    <p>
                                        <? $APPLICATION->IncludeComponent("bitrix:main.include",
                                            "",
                                            Array(
                                                "COMPONENT_TEMPLATE" => ".default",
                                                "AREA_FILE_SHOW" => "file",
                                                "AREA_FILE_SUFFIX" => "inc",
                                                "EDIT_TEMPLATE" => "",
                                                "PATH" => SITE_TEMPLATE_PATH . "/include_areas/working_time.php"
                                            )); ?>
                                    </p>
                                </div>
                            </div>
                        </div>
                    </div>
                    <!-- End Single-Support -->
                    <!-- Start Single-Support -->
                    <div class="col-md-3 col-sm-4">
                        <div class="single-support">
                            <i class="fa fa-truck"></i>
                            <div class="support-text">
                                <h1 class="zero gfont-1"><?=Loc::getMessage("FREE_SHIPPING");?></h1>
                                <p>
                                    <? $APPLICATION->IncludeComponent("bitrix:main.include",
                                        "",
                                        Array(
                                            "COMPONENT_TEMPLATE" => ".default",
                                            "AREA_FILE_SHOW" => "file",
                                            "AREA_FILE_SUFFIX" => "inc",
                                            "EDIT_TEMPLATE" => "",
                                            "PATH" => SITE_TEMPLATE_PATH . "/include_areas/free_shipping.php"
                                        )); ?>
                                </p>
                            </div>
                        </div>
                    </div>
                    <!-- End Single-Support -->
                    <!-- Start Single-Support -->
                    <div class="col-md-3 col-sm-4">
                        <div class="single-support">
                            <i class="fa fa-phone-square"></i>
                            <div class="support-text">
                                <h1 class="zero gfont-1"><?=Loc::getMessage("CALL_NOW");?></h1>
                                <p>
                                    <? $APPLICATION->IncludeComponent("bitrix:main.include",
                                        "",
                                        Array(
                                            "COMPONENT_TEMPLATE" => ".default",
                                            "AREA_FILE_SHOW" => "file",
                                            "AREA_FILE_SUFFIX" => "inc",
                                            "EDIT_TEMPLATE" => "",
                                            "PATH" => SITE_TEMPLATE_PATH . "/include_areas/call_now.php"
                                        )); ?>
                                </p>
                            </div>
                        </div>
                    </div>
                    <!-- End Single-Support -->
                </div>
            </div>
            <!-- End Support-Client -->
            <!-- Start logo & Search Box -->
            <div class="row">
                <div class="col-md-3 col-sm-12">
                    <div class="logo">
                        <a href="/" title="Malias">
                            <? $APPLICATION->IncludeComponent("bitrix:main.include",
                                "",
                                Array(
                                    "COMPONENT_TEMPLATE" => ".default",
                                    "AREA_FILE_SHOW" => "file",
                                    "AREA_FILE_SUFFIX" => "inc",
                                    "EDIT_TEMPLATE" => "",
                                    "PATH" => SITE_TEMPLATE_PATH . "/include_areas/logo.php"
                                )); ?>
                        </a>
                    </div>
                </div>
                <div class="col-md-9 col-sm-12">
                    <div class="quick-access">
                        <div class="search-by-category">
                            <div class="search-container">
                                <select>
                                    <option class="all-cate">Все категории</option>
                                    <optgroup  class="cate-item-head" label="Бакалея">
                                        <option class="cate-item-title">Колбасы</option>
                                        <option class="c-item">Сыры</option>
                                        <option class="c-item">Тофу</option>
                                    </optgroup>
                                    <optgroup  class="cate-item-head" label="Растительные молочные продукты">
                                        <option class="cate-item-title">Молоко</option>
                                        <option class="c-item">Йогурты</option>
                                        <option class="c-item">Соусы</option>
                                        <option class="c-item">Десерты</option>
                                    </optgroup>
                                    <optgroup  class="cate-item-head" label="Замороженные продукты">
                                        <option class="c-item">Котлеты</option>
                                        <option class="c-item">Вареники</option>
                                    </optgroup>
                                </select>
                            </div>
                            <div class="header-search">
                                <form action="#">
                                    <input type="text" placeholder="Поиск">
                                    <button type="submit"><i class="fa fa-search"></i></button>
                                </form>
                            </div>
                        </div>
                        <div class="top-cart">
                            <ul>
                                <li>
                                    <a href="#">
                                        <span class="cart-icon"><i class="fa fa-shopping-cart"></i></span>
                                        <span class="cart-total">
			                    					<span class="cart-title">Корзина</span>
				                    				<span class="cart-item">2 товара- </span>
				                    				<span class="top-cart-price">400 руб.</span>
			                    				</span>
                                    </a>
                                    <div class="mini-cart-content">
                                        <div class="cart-img-details">
                                            <div class="cart-img-photo">
                                                <a href="#"><img src="<?=SITE_TEMPLATE_PATH;?>/images/product/total-cart.jpg" alt="#"></a>
                                            </div>
                                            <div class="cart-img-content">
                                                <a href="#"><h4>Ванильный йогурт</h4></a>
                                                <span>
															<strong class="text-right">4 x</strong>
															<strong class="cart-price text-right">50 руб.</strong>
														</span>
                                            </div>
                                            <div class="pro-del">
                                                <a href="#"><i class="fa fa-times"></i></a>
                                            </div>
                                        </div>
                                        <div class="clear"></div>
                                        <div class="cart-img-details">
                                            <div class="cart-img-photo">
                                                <a href="#"><img src="<?=SITE_TEMPLATE_PATH;?>/images/product/total-cart2.jpg" alt="#"></a>
                                            </div>
                                            <div class="cart-img-content">
                                                <a href="#"><h4>Вареники</h4></a>
                                                <span>
															<strong class="text-right">1 x</strong>
															<strong class="cart-price text-right">200 руб.</strong>
														</span>
                                            </div>
                                            <div class="pro-del">
                                                <a href="#"><i class="fa fa-times"></i></a>
                                            </div>
                                        </div>
                                        <div class="cart-inner-bottom">
													<span class="total">
														Total:
														<span class="amount">400 руб.</span>
													</span>
                                            <span class="cart-button-top">
														<a href="cart.html">Просмотр корзины</a>
														<a href="checkout.html">Купить</a>
													</span>
                                        </div>
                                    </div>
                                </li>
                            </ul>
                        </div>
                    </div>
                </div>
            </div>
            <!-- End logo & Search Box -->
        </div>
    </div>
    <!-- HEADER-MIDDLE END -->
    <!-- START MAINMENU-AREA -->
    <div class="mainmenu-area">
        <div class="container">
            <div class="row">
                <div class="col-md-12">
                    <div class="mainmenu hidden-sm hidden-xs">
                        <nav>
                            <ul>
                                <li><a href="http://192.168.1.38">Главная</a></li>
                                <li><a href="http://192.168.1.38/catalog/">Категории товаров</a></li>
                                <li><a href="#">Доставка и оплата</a></li>
                                <li><a href="#">Контакты</a></li>
                            </ul>
                        </nav>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- END MAIN-MENU-AREA -->
    <!-- Start Mobile-menu -->
    <div class="mobile-menu-area hidden-md hidden-lg">
        <div class="container">
            <div class="row">
                <div class="col-xs-12">
                    <nav id="mobile-menu">
                        <ul>
                            <li><a href="#">Главная</a></li>
                            <li><a href="#">Товары</a></li>
                            <li><a href="#">Доставка и оплата</a></li>
                            <li><a href="#">Контакты</a></li>
                        </ul>
                    </nav>
                </div>
            </div>
        </div>
    </div>
    <!-- End Mobile-menu -->
</header>
<!-- HEADER AREA END -->
