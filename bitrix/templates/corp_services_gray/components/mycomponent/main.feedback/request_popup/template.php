<?
if(!defined("B_PROLOG_INCLUDED")||B_PROLOG_INCLUDED!==true)die();
/**
 * Bitrix vars
 *
 * @var array $arParams
 * @var array $arResult
 * @var CBitrixComponentTemplate $this
 * @global CMain $APPLICATION
 * @global CUser $USER
 */
?>
<div id="request-popup" class="popup">
        <div class="qwe">
        <?if(!empty($arResult["ERROR_MESSAGE"]))
        {
                foreach($arResult["ERROR_MESSAGE"] as $v)
                        ShowError($v);
        }
        if(strlen($arResult["OK_MESSAGE"]) > 0)
        {
                ?><div class="mf-ok-text"><?=$arResult["OK_MESSAGE"]?></div><?
        }
        ?>
        </div>
        <div class="popup-header">Оставить заявку</div>
        <div class="popup-close popup-close-text" data-id-form="request-popup">Закрыть<i class="icon"></i></div>
        <form>
            <?=bitrix_sessid_post()?>
            <label for="user_name">Ваше имя</label>
            <input type="text" id="user_name" name="user_name" <?if(empty($arParams["REQUIRED_FIELDS"]) || in_array("NAME", $arParams["REQUIRED_FIELDS"])):?>required<?endif;?>>

            <label for="user_phone">Телефон</label>
            <input type="tel" id="user_phone" name="user_phone" <?if(empty($arParams["REQUIRED_FIELDS"]) || in_array("PHONE", $arParams["REQUIRED_FIELDS"])):?>required<?endif;?>>

            <label for="MESSAGE">Краткая информация</label>
            <textarea id="MESSAGE" name="MESSAGE" required></textarea>

            <div class="clearfix">
                <input type="checkbox" checked="checked" name="disclaimer" id="disclaimer" class="checkbox-c" required>
                <label for="disclaimer" class="error"><a href="#">Согласен на обработку персональных данных</a></label>
            </div>

            <input type="submit" name="submit" class="btn btn-submit" value="Отправить">
            <input type="hidden" name="PARAMS_HASH" value="<?=$arResult["PARAMS_HASH"]?>">
        </form>
</div>