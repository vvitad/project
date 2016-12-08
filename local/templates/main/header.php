<?php
/**
 * Created by PhpStorm.
 * User: IEUser
 * Date: 10/24/2016
 * Time: 7:55 AM
 */
?>
<? if (!defined("B_PROLOG_INCLUDED") || B_PROLOG_INCLUDED !== true) die();
?>
<? use Bitrix\Main\Localization\Loc;
use Bitrix\Main\Page\Asset;

Loc::loadMessages(__FILE__); ?>
<!doctype html>
<html class="no-js" lang="<?= LANGUAGE_ID ?>">
<head>

    <title><? $APPLICATION->ShowTitle(); ?></title>
    <? $APPLICATION->ShowHead(); ?>

    <!-- favicon
    ============================================ -->
    <link rel="shortcut icon" type="image/x-icon" href="<?= SITE_TEMPLATE_PATH; ?>/images/favicon.ico">

    <!-- Google Fonts
    ============================================ -->
    <? Asset::getInstance()->addCss('https://fonts.googleapis.com/css?family=Raleway:400,600'); ?>
    <? Asset::getInstance()->addCss('https://fonts.googleapis.com/css?family=Roboto:400,700'); ?>


    <!-- Bootstrap CSS
    ============================================ -->
    <? Asset::getInstance()->addCss(SITE_TEMPLATE_PATH . "/css/bootstrap.min.css"); ?>

    <!-- Font awesome CSS
    ============================================ -->
    <? Asset::getInstance()->addCss(SITE_TEMPLATE_PATH . "/css/font-awesome.min.css"); ?>
    <!-- owl.carousel CSS
    ============================================ -->
    <? Asset::getInstance()->addCss(SITE_TEMPLATE_PATH . "/css/owl.carousel.css"); ?>
    <? Asset::getInstance()->addCss(SITE_TEMPLATE_PATH . "/css/owl.theme.css"); ?>
    <? Asset::getInstance()->addCss(SITE_TEMPLATE_PATH . "/css/owl.transitions.css"); ?>
    <!-- nivo slider CSS
    ============================================ -->
    <? Asset::getInstance()->addCss(SITE_TEMPLATE_PATH . "/css/nivo-slider.css"); ?>
    <!-- meanmenu CSS
    ============================================ -->
    <? Asset::getInstance()->addCss(SITE_TEMPLATE_PATH . "/css/meanmenu.min.css"); ?>
    <!-- jquery-ui CSS
    ============================================ -->
    <? Asset::getInstance()->addCss(SITE_TEMPLATE_PATH . "/css/jquery-ui.css"); ?>

    <!-- animate CSS
    ============================================ -->
    <? Asset::getInstance()->addCss(SITE_TEMPLATE_PATH . "/css/animate.css"); ?>
    <!-- main CSS
    ============================================ -->
    <? Asset::getInstance()->addCss(SITE_TEMPLATE_PATH . "/css/main.css"); ?>
    <!-- style CSS
    ============================================ -->
    <? Asset::getInstance()->addCss(SITE_TEMPLATE_PATH . "/css/style.css"); ?>
    <!-- responsive CSS
    ============================================ -->
    <? Asset::getInstance()->addCss(SITE_TEMPLATE_PATH . "/css/responsive.css"); ?>



</head>
<body>
<? $APPLICATION->ShowPanel(); ?>
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
                            <li><a href="http://127.0.0.1:50080/personal/"><i class="fa fa-user"></i> Мой аккаунт</a></li>
                            <li><a href="http://127.0.0.1:50080/cart.php"><i class="fa fa-share"></i> Корзина</a></li>
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
                                    <h1 class="zero gfont-1"><?= Loc::getMessage("WORKING_TIME"); ?></h1>
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
                                <h1 class="zero gfont-1"><?= Loc::getMessage("FREE_SHIPPING"); ?></h1>
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
                                <h1 class="zero gfont-1"><?= Loc::getMessage("CALL_NOW"); ?></h1>
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



            <?  if ($GLOBALS["APPLICATION"]->GetCurPage() == "/index.php") { ?>
                <div class="col-md-9" style="width:1025px; margin: auto; clear: both; float: none;">

                    <? $APPLICATION->IncludeComponent("bitrix:photo.section", "slider1", Array(
                        "ADD_SECTIONS_CHAIN" => "N",    // Включать раздел в цепочку навигации
                        "AJAX_MODE" => "N",    // Включить режим AJAX
                        "AJAX_OPTION_ADDITIONAL" => "",    // Дополнительный идентификатор
                        "AJAX_OPTION_HISTORY" => "N",    // Включить эмуляцию навигации браузера
                        "AJAX_OPTION_JUMP" => "N",    // Включить прокрутку к началу компонента
                        "AJAX_OPTION_STYLE" => "Y",    // Включить подгрузку стилей
                        "BROWSER_TITLE" => "-",    // Установить заголовок окна браузера из свойства
                        "CACHE_FILTER" => "N",    // Кешировать при установленном фильтре
                        "CACHE_GROUPS" => "Y",    // Учитывать права доступа
                        "CACHE_TIME" => "36000000",    // Время кеширования (сек.)
                        "CACHE_TYPE" => "A",    // Тип кеширования
                        "DETAIL_URL" => "",    // URL, ведущий на страницу с содержимым элемента раздела
                        "DISPLAY_BOTTOM_PAGER" => "N",    // Выводить под списком
                        "DISPLAY_TOP_PAGER" => "N",    // Выводить над списком
                        "ELEMENT_SORT_FIELD" => "sort",    // По какому полю сортируем фотографии
                        "ELEMENT_SORT_ORDER" => "asc",    // Порядок сортировки фотографий в разделе
                        "FIELD_CODE" => array(    // Поля
                            0 => "ID",
                            1 => "NAME",
                            2 => "SORT",
                            3 => "PREVIEW_PICTURE",
                            4 => "",
                        ),
                        "FILTER_NAME" => "arrFilter",    // Имя массива со значениями фильтра для фильтрации элементов
                        "IBLOCK_ID" => "10",    // Инфоблок
                        "IBLOCK_TYPE" => "content",    // Тип инфоблока
                        "LINE_ELEMENT_COUNT" => "3",    // Количество фотографий, выводимых в одной строке таблицы
                        "MESSAGE_404" => "",    // Сообщение для показа (по умолчанию из компонента)
                        "META_DESCRIPTION" => "-",    // Установить описание страницы из свойства
                        "META_KEYWORDS" => "-",    // Установить ключевые слова страницы из свойства
                        "PAGER_BASE_LINK_ENABLE" => "N",    // Включить обработку ссылок
                        "PAGER_DESC_NUMBERING" => "N",    // Использовать обратную навигацию
                        "PAGER_DESC_NUMBERING_CACHE_TIME" => "36000",    // Время кеширования страниц для обратной навигации
                        "PAGER_SHOW_ALL" => "N",    // Показывать ссылку "Все"
                        "PAGER_SHOW_ALWAYS" => "N",    // Выводить всегда
                        "PAGER_TEMPLATE" => ".default",    // Шаблон постраничной навигации
                        "PAGER_TITLE" => "Фотографии",    // Название категорий
                        "PAGE_ELEMENT_COUNT" => "20",    // Количество элементов на странице
                        "PROPERTY_CODE" => array(    // Свойства
                            0 => "DESC",
                            1 => "URL",
                            2 => "",
                        ),
                        "SECTION_CODE" => "",    // Код раздела
                        "SECTION_ID" => $_REQUEST["SECTION_ID"],    // ID раздела
                        "SECTION_URL" => "",    // URL, ведущий на страницу с содержимым раздела
                        "SECTION_USER_FIELDS" => array(    // Свойства раздела
                            0 => "",
                            1 => "",
                        ),
                        "SET_LAST_MODIFIED" => "N",    // Устанавливать в заголовках ответа время модификации страницы
                        "SET_STATUS_404" => "N",    // Устанавливать статус 404
                        "SET_TITLE" => "N",    // Устанавливать заголовок страницы
                        "SHOW_404" => "N",    // Показ специальной страницы
                    ),
                        false
                    ); ?> <br>
                </div>
            <?}?>



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
                                    <optgroup class="cate-item-head" label="Бакалея">
                                        <option class="cate-item-title">Колбасы</option>
                                        <option class="c-item">Сыры</option>
                                        <option class="c-item">Тофу</option>
                                    </optgroup>
                                    <optgroup class="cate-item-head" label="Растительные молочные продукты">
                                        <option class="cate-item-title">Молоко</option>
                                        <option class="c-item">Йогурты</option>
                                        <option class="c-item">Соусы</option>
                                        <option class="c-item">Десерты</option>
                                    </optgroup>
                                    <optgroup class="cate-item-head" label="Замороженные продукты">
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
                                                <a href="#"><img
                                                        src="<?= SITE_TEMPLATE_PATH; ?>/images/product/total-cart.jpg"
                                                        alt="#"></a>
                                            </div>
                                            <div class="cart-img-content">
                                                <a href="#"><h4>Арахисовое молоко</h4></a>
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
                                                <a href="#"><img
                                                        src="<?= SITE_TEMPLATE_PATH; ?>/images/product/total-cart2.jpg"
                                                        alt="#"></a>
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
    <? $APPLICATION->IncludeComponent("bitrix:menu", "top_menu", Array(
        "ALLOW_MULTI_SELECT" => "N",
        "CHILD_MENU_TYPE" => "left",
        "COMPOSITE_FRAME_MODE" => "A",
        "COMPOSITE_FRAME_TYPE" => "AUTO",
        "DELAY" => "N",
        "MAX_LEVEL" => "2",
        "MENU_CACHE_GET_VARS" => array(
            0 => "",
        ),
        "MENU_CACHE_TIME" => "3600",
        "MENU_CACHE_TYPE" => "A",
        "MENU_CACHE_USE_GROUPS" => "Y",
        "ROOT_MENU_TYPE" => "left",
        "USE_EXT" => "Y"
    ),
        false
    ); ?>


</header>
<!-- HEADER AREA END -->

<div style="width: 1100px; margin: auto">
