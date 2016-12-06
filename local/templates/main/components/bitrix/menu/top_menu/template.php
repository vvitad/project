<? if (!defined("B_PROLOG_INCLUDED") || B_PROLOG_INCLUDED !== true) die(); ?>
<!-- START MAINMENU-AREA -->
<div class="mainmenu-area">
    <div class="container">
        <div class="row">
            <div class="col-md-12">
                <div class="mainmenu hidden-sm hidden-xs">
                    <? if (!empty($arResult)): ?>
                        <nav>
                            <? foreach ($arResult as $key => $arItem): ?>
                                <? if ($arItem['DEPTH_LEVEL'] != 1) {
                                    continue;
                                }
                                ?>
                                <ul>


                                    <? if ($arItem['DEPTH_LEVEL'] == 1): ?>
                                        <li><a href="<?= $arItem["LINK"]; ?>"><?= $arItem["TEXT"]; ?></a></li>
                                    <? endif; ?>
                                    <? foreach ($arResult as $keyInner => $arItemInner): ?>
                                        <? if ($keyInner <= $key) {
                                            continue;
                                        }
                                        ?>
                                        <? if ($arItemInner['DEPTH_LEVEL'] == 2): ?>
                                            <li><a href="<?= $arItemInner["LINK"]; ?>"><?= $arItemInner["TEXT"]; ?></a>
                                            </li>
                                        <? endif; ?>
                                        <? if ($arItemInner['DEPTH_LEVEL'] != 2) {
                                            break;
                                        }
                                        ?>
                                    <? endforeach; ?>

                                </ul>
                            <? endforeach; ?>
                        </nav>
                    <? endif; ?>
                </div>
            </div>
        </div>
    </div>
</div>
<!-- END MAIN-MENU-AREA -->
