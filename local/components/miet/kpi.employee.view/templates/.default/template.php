<?php
if (!defined("B_PROLOG_INCLUDED") || B_PROLOG_INCLUDED !== true) die();
$APPLICATION->SetAdditionalCSS("/bitrix/css/main/bootstrap.css");
?>
<? if ($arResult['OK']): ?>
    <? ShowMessage(array('TYPE' => 'OK', 'MESSAGE' =>
        $arResult['OK'])); ?>
<? endif; ?>
<? if ($arResult['ERROR']): ?>
    <div>аллах-акбар!!!!!</div>
    <? ShowMessage(array('TYPE' => 'ERROR', 'MESSAGE' => $arResult['ERROR'])); ?>
    <? ShowMessage(array('TYPE' => 'ERROR', 'MESSAGE' => $arResult['ERROR'])); ?>
<? endif; ?>
<form action="<?= POST_FORM_ACTION_URI ?>" method="POST">
    <h3>Какай-то табличка</h3>
    <table class="table table-bordered">
        <thead>
        <tr>
            <th>Название факора</th>
            <th>Тип фактора</th>
            <th>Значение</th>
            <th>Документы</th>
        </tr>
        </thead>
        <tbody>
        <? foreach ($arResult["ITEMS"] as $arItem): ?>
            <tr>
                <td><?= $arItem['NAME']; ?></td>
                <td><?= $arItem['PROPERTY_INDICATOR_TYPE_VALUE']; ?></td>
                <td><?= $arItem['ID']; ?></td>
                <td>
                    <? foreach ($arItem['PROPERTY_REGULATIONS_VALUE']
                                as $fileRegulation): ?>
                        <a href="<?= $fileRegulation['SRC']; ?>"
                           target="_blank"><?= $fileRegulation['ORIGINAL_NAME']; ?></a><br>
                    <? endforeach; ?>
                </td>
            </tr>
        <? endforeach; ?>
        </tbody>
    </table>
</form>