
<?$APPLICATION->IncludeComponent("bitrix:news.list", "slider", Array(
    "IBLOCK_ID" => "slider",	// Код информационного блока
),
    false
);?>
<div class="slider">
    <div class="camera_wrap">
        <div data-src="<?=SITE_TEMPLATE_PATH?>/images/slider/burger.jpg"></div>
        <div data-src="<?=SITE_TEMPLATE_PATH?>/images/slider/cupcake.jpg"></div>
        <div data-src="<?=SITE_TEMPLATE_PATH?>/images/slider/tofu.jpg"></div>
    </div>
</div>
