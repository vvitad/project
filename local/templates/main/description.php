<? if (!defined("B_PROLOG_INCLUDED") || B_PROLOG_INCLUDED !== true)
    die(); ?>
<?use Bitrix\Main\Localization\Loc;
Loc::loadMessages(__FILE__);
$arTemplate = Array(
    "NAME" => Loc::getMessage("TEMPLATE_DESCRIPTION_NAME"),
    "DESCRIPTION" => Loc::getMessage("TEMPLATE_DESCRIPTION_DESC")
);
?>
