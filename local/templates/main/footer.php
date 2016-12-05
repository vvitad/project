<?php
/**
 * Created by PhpStorm.
 * User: IEUser
 * Date: 10/24/2016
 * Time: 7:55 AM
 */
?>
<!-- FOOTER-AREA START -->
<footer class="footer-area">
    <!-- Footer Start -->
    <div class="footer">
        <div class="container">
            <div class="row">

                <div class="col-xs-12 col-sm-4 col-md-3">
                    <div class="footer-title">
                        <h5>Контакты</h5>
                    </div>
                    <nav>
                        <ul class="footer-content box-information">
                            <li>
                                <i class="fa fa-home"></i>
                                <span>
                                     <? $APPLICATION->IncludeComponent("bitrix:main.include",
                                         "",
                                         Array(
                                             "COMPONENT_TEMPLATE" => ".default",
                                             "AREA_FILE_SHOW" => "file",
                                             "AREA_FILE_SUFFIX" => "inc",
                                             "EDIT_TEMPLATE" => "",
                                             "PATH" => SITE_TEMPLATE_PATH . "/include_areas/adress.php"
                                         )); ?>
                                  </span>
                            </li>
                            <li>
                                <i class="fa fa-envelope-o"></i>
                                <p>
                                    <? $APPLICATION->IncludeComponent("bitrix:main.include",
                                        "",
                                        Array(
                                            "COMPONENT_TEMPLATE" => ".default",
                                            "AREA_FILE_SHOW" => "file",
                                            "AREA_FILE_SUFFIX" => "inc",
                                            "EDIT_TEMPLATE" => "",
                                            "PATH" => SITE_TEMPLATE_PATH . "/include_areas/e-mail.php"
                                        )); ?>
                                </p>
                            </li>
                            <li>
                                <i class="fa fa-phone"></i>
                                <span>
                                          <? $APPLICATION->IncludeComponent("bitrix:main.include",
                                              "",
                                              Array(
                                                  "COMPONENT_TEMPLATE" => ".default",
                                                  "AREA_FILE_SHOW" => "file",
                                                  "AREA_FILE_SUFFIX" => "inc",
                                                  "EDIT_TEMPLATE" => "",
                                                  "PATH" => SITE_TEMPLATE_PATH . "/include_areas/phone1.php"
                                              )); ?>
                                </span>
                            </li>
                        </ul>
                    </nav>
                </div>

                    <div class="col-xs-12 col-sm-4 col-md-3">
                        <div class="footer-title">
                            <h5>Мы в социальных сетях</h5>
                        </div>
                        <nav>
                            <ul class="footer-content">
                    <? $APPLICATION->IncludeComponent("bitrix:news.list", "social",
                        Array(
                            "ACTIVE_DATE_FORMAT" => "d.m.Y",
                            "ADD_SECTIONS_CHAIN" => "N",
                            "AJAX_MODE" => "N",
                            "AJAX_OPTION_ADDITIONAL" => "",
                            "AJAX_OPTION_HISTORY" => "N",
                            "AJAX_OPTION_JUMP" => "N",
                            "AJAX_OPTION_STYLE" => "Y",
                            "CACHE_FILTER" => "N",
                            "CACHE_GROUPS" => "Y",
                            "CACHE_TIME" => "36000000",
                            "CACHE_TYPE" => "A",
                            "CHECK_DATES" => "Y",
                            "COMPOSITE_FRAME_MODE" => "A",
                            "COMPOSITE_FRAME_TYPE" => "AUTO",
                            "DETAIL_URL" => "",
                            "DISPLAY_BOTTOM_PAGER" => "N",
                            "DISPLAY_DATE" => "Y",
                            "DISPLAY_NAME" => "Y",
                            "DISPLAY_PICTURE" => "Y",
                            "DISPLAY_PREVIEW_TEXT" => "Y",
                            "DISPLAY_TOP_PAGER" => "N",
                            "FIELD_CODE" => array("ID", "NAME", "SORT", "PREVIEW_PICTURE", ""),
                            "FILTER_NAME" => "",
                            "HIDE_LINK_WHEN_NO_DETAIL" => "N",
                            "IBLOCK_ID" => "11",
                            "IBLOCK_TYPE" => "content",
                            "INCLUDE_IBLOCK_INTO_CHAIN" => "N",
                            "INCLUDE_SUBSECTIONS" => "Y",
                            "MESSAGE_404" => "",
                            "NEWS_COUNT" => "20",
                            "PAGER_BASE_LINK_ENABLE" => "N",
                            "PAGER_DESC_NUMBERING" => "N",
                            "PAGER_DESC_NUMBERING_CACHE_TIME" => "36000",
                            "PAGER_SHOW_ALL" => "N",
                            "PAGER_SHOW_ALWAYS" => "N",
                            "PAGER_TEMPLATE" => ".default",
                            "PAGER_TITLE" => "Социальные сети",
                            "PARENT_SECTION" => "",
                            "PARENT_SECTION_CODE" => "",
                            "PREVIEW_TRUNCATE_LEN" => "",
                            "PROPERTY_CODE" => array("URL", ""),
                            "SET_BROWSER_TITLE" => "N",
                            "SET_LAST_MODIFIED" => "N",
                            "SET_META_DESCRIPTION" => "Y",
                            "SET_META_KEYWORDS" => "Y",
                            "SET_STATUS_404" => "N",
                            "SET_TITLE" => "N",
                            "SHOW_404" => "N",
                            "SORT_BY1" => "SORT",
                            "SORT_BY2" => "SORT",
                            "SORT_ORDER1" => "ASC",
                            "SORT_ORDER2" => "ASC"
                        ),
                        false
                    ); ?><br>
                            </ul>
                        </nav>
                    </div>

            </div>
        </div>
    </div>
    <!-- Footer End -->
    <!-- Copyright-area Start -->
    <div class="copyright-area">
        <div class="container">
            <div class="row">
                <div class="col-md-12">
                    <div class="copyright">
                        <p>Copyright &copy; Soybeen All rights reserved.</p>


                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- Copyright-area End -->

</footer>
<!-- FOOTER-AREA END -->
