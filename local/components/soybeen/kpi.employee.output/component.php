<?php
if(!defined("B_PROLOG_INCLUDED") || B_PROLOG_INCLUDED!==true) die();
###Инициализация глобальных переменных Битрикс###
global $DB;
/** @global CUser $USER */
global $USER;
###
\Bitrix\Main\Loader::includeModule('soybeen.kpi');
use SOYBEEN\KPI;
###Проверка входных параметров на корректность и приведение их к нужномувиду###
$arParams["USER_ID"] = intval($arParams["USER_ID"]);
if(!$arParams["USER_ID"]) {
    ShowError(GetMessage("EMPTY_USER"));
    @define("ERROR_404", "Y");
    if($arParams["SET_STATUS_404"]==="Y") {
        CHTTP::SetStatus("404 Not Found");
    }
    return array();
}
if(!$_REQUEST['UF_PERIOD']) {
    $_REQUEST['UF_PERIOD'] = '01.' . date('m') . '.' . date('Y');
}
$arParams["DATE_FORMAT"] = trim($arParams["DATE_FORMAT"]);
if(strlen($arParams["DATE_FORMAT"]) <= 0) {
    $arParams["DATE_FORMAT"] = $DB->DateFormatToPHP(CSite::GetDateFormat("SHORT"));
}
###
###Получение данных из БД###
if($this->StartResultCache(false, array(($arParams["CACHE_GROUPS"] === "N"
    ? false: $USER->GetGroups()), $bUSER_HAVE_ACCESS))) {
    ###Формирование списка отчетных периодов (месяц, год)###
    //Получение текущего месяца и года
    for($i = 1; $i <= 12; $i++) {
        if(strlen($i) == 1) {
            $i = '0' . $i;
        }
        $arResult['PERIOD_ITEMS'][] = array(
            'SELECTED' => ($_REQUEST['UF_PERIOD'] == '01.' . $i . '.' .
                date('Y')) ? 'selected' : '', //Выбираем ранее выбранный, либо текущиймесяц
 'VALUE' => '01.' . $i . '.' . date('Y')
 );
 }
    ###
    ###Получение списка показателей KPI для сотрудника###
    $arResult['ITEMS'] =
        KPI\KPIManager::GetKPIEmployee($arParams["USER_ID"]);

    foreach($arResult['ITEMS'] as &$arItem) {
        $arItem["KPI_VALUE"] = KPI\KPIManager::GetKPIEmployeeValue($arItem["ID"], $arParams["USER_ID"], $_REQUEST['UF_PERIOD'])[0];
    }

    ###Кэширование значения элементов массива $arResult###
    $this->SetResultCacheKeys(array(
        "ITEMS",
        "FIO_USER",
        "PROGRAM_DETAIL_PAGE_URL",
        "FORM_ACTION",
        "NAME"
    ));
    ###
    ###Подключение шаблона компонента###
    $this->IncludeComponentTemplate();
    ###
}
###Вывод элементов из кэша###
if(isset($arResult["ITEM"])) {
    $this->SetTemplateCachedData();
    return $arResult["ITEM"];
}
###