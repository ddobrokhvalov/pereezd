<?if(!defined("B_PROLOG_INCLUDED") || B_PROLOG_INCLUDED!==true)die();?>
<?
if(count($arResult["ITEMS"])){
    $arResult["ITEM0"] = $arResult["ITEMS"][0];
    unset($arResult["ITEMS"][0]);
}
?>