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
<div class="payment">
	<ul>
		<?foreach($arResult["ITEMS"] as $key => $arItem):?>
			<li><a href="<?=$arItem["PROPERTIES"]["URL"]["VALUE"]?>"><img src="<?=$arItem["PREVIEW_PICTURE"]["SRC"]?>" width="26" height="27" alt="<?=$arItem["NAME"]?>" class="vm"/><?=$arItem["NAME"]?></a></li>
		<?endforeach;?>
	</ul>

</div>
