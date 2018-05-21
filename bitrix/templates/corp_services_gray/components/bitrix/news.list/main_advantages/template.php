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

<section class="home-our-advantages">
    <div class="wrapper clearfix">
        <div class="triangle--white-left-min"></div>
        <div class="col-xs-12">
            <h2><?=$arResult["NAME"]?></h2>
            <div class="row">
                <?foreach($arResult["ITEMS"] as $arItem):?>
                    <?
                    $this->AddEditAction($arItem['ID'], $arItem['EDIT_LINK'], CIBlock::GetArrayByID($arItem["IBLOCK_ID"], "ELEMENT_EDIT"));
                    $this->AddDeleteAction($arItem['ID'], $arItem['DELETE_LINK'], CIBlock::GetArrayByID($arItem["IBLOCK_ID"], "ELEMENT_DELETE"), array("CONFIRM" => GetMessage('CT_BNL_ELEMENT_DELETE_CONFIRM')));
                    ?>
                    <div class="col-xs-3" id="<?=$this->GetEditAreaId($arItem['ID']);?>">
                        <div class="icons-sprite <?=$arItem["CODE"]?>"></div>
                        <div class="h4"><?=$arItem["NAME"]?></div>
                        <?=$arItem["PREVIEW_TEXT"]?>
                    </div>
                <?endforeach;?>
            </div>
        </div>
        <div class="triangle--brown-left-min"></div>
    </div>
</section>
