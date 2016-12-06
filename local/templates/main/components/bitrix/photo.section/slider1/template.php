<?if(!defined("B_PROLOG_INCLUDED") || B_PROLOG_INCLUDED!==true)die();
/** @var array $arParams */
/** @var array $arResult */
/** @global CMain $APPLICATION */
/** @global CUser $USER */
/** @global CDatabase $DB */
/** @var CBitrixComponentTemplate $this */
/** @var string $templateName */
/** @var string $templateFile */
/** @var string $templateFolder */
/** @var string $componentPath */
/** @var CBitrixComponent $component */
$this->setFrameMode(true);
?>

<div class="slider-area">
    <div class="bend niceties preview-1">
        <div id="ensign-nivoslider" class="slides">
            <?foreach($arResult["ROWS"] as $arItems):?>
                <?foreach($arItems as $arItem):?>
                    <?if(is_array($arItem)):?>
                        <a href="<?=$arItem["PROPERTIES"]["URL"]["VALUE"]?>"><img src="<?=$arItem["PICTURE"]["SRC"];?>" alt="Malias" title="#slider-direction-1"/></a>
                    <?endif;?>
                <?endforeach?>
            <?endforeach?>
        </div>
        <?foreach($arResult["ROWS"] as $arItems):?>
        <?foreach($arItems as $arItem):?>
        <?if(is_array($arItem)):?>
        <div id="slider-direction-<?=$arItem[SORT];?>" class="slider-direction">
            <div class="slider-progress"></div>
            <div class="layer-<?=$arItem[SORT];?>-3">
                <a href="<?=$arItem[PROPERTY_56];?>" class="title3">Купить</a>
            </div>
        </div>
            <?endif;?>
        <?endforeach?>
        <?endforeach?>

    </div>
</div>
<!-- slider end-->