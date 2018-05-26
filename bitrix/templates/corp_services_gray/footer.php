<?if(!defined("B_PROLOG_INCLUDED") || B_PROLOG_INCLUDED!==true)
    die();?>
<?if($APPLICATION->GetCurPage(false)!=SITE_DIR):?>
</div> <!-- .clearfix -->
<div class="btn btn-green popup-open" data-id-form="request-popup">Оставить заявку</div>
</div> <!-- .col-xs-12 -->
</section> <!-- .wrapper .content .clearfix -->
<?endif;?>
</div><!-- .table-row -->
<footer class="footer">
    <div class="wrapper clearfix">
        <div class="col-xs-12">
            <div class="wrapper-address-contact-btn">
                <div class="row">
                    <div class="col-xs-5">
                        <div class="f-address">
                            <?$APPLICATION->IncludeComponent(
                            "bitrix:main.include",
                            "",
                            Array(
                            "AREA_FILE_SHOW" => "file",
                            "AREA_FILE_SUFFIX" => "inc",
                            "EDIT_TEMPLATE" => "",
                            "PATH" => "/footer_addr_grafik.php"
                            )
                            );?>
                        </div>
                    </div>
                    <div class="col-xs-4">
                        <div class="f-contact">
                            <?$APPLICATION->IncludeComponent(
                            "bitrix:main.include",
                            "",
                            Array(
                            "AREA_FILE_SHOW" => "file",
                            "AREA_FILE_SUFFIX" => "inc",
                            "EDIT_TEMPLATE" => "",
                            "PATH" => "/footer_phone.php"
                            )
                            );?>
                            <!--Тел: 8 (950) 566-46-66, 8 (963) 557-35-77 -->
                            <br>
                            <?$APPLICATION->IncludeComponent(
                            "bitrix:main.include",
                            "",
                            Array(
                            "AREA_FILE_SHOW" => "file",
                            "AREA_FILE_SUFFIX" => "inc",
                            "EDIT_TEMPLATE" => "",
                            "PATH" => "/footer_email.php"
                            )
                            );?>
                            <!--E-mail: gruz11reg@yandex.ru-->
                        </div>
                    </div>
                    <div class="col-xs-3">
                        <div class="btn btn-white popup-open" data-id-form="feedback-popup">Обратная связь</div>
                    </div>
                </div>
            </div>

            <div class="wrapper-copyright-developer">
                <div class="row">
                    <div class="col-xs-6">
                        <div class="copyright">
                            <?$APPLICATION->IncludeComponent(
                            "bitrix:main.include",
                            "",
                            Array(
                            "AREA_FILE_SHOW" => "file",
                            "AREA_FILE_SUFFIX" => "inc",
                            "EDIT_TEMPLATE" => "",
                            "PATH" => "/footer_copyright.php"
                            )
                            );?>
                        </div>
                    </div>
                    <div class="col-xs-6">
                        <div class="developer">
                            <?$APPLICATION->IncludeComponent(
                            "bitrix:main.include",
                            "",
                            Array(
                            "AREA_FILE_SHOW" => "file",
                            "AREA_FILE_SUFFIX" => "inc",
                            "EDIT_TEMPLATE" => "",
                            "PATH" => "/footer_developer.php"
                            )
                            );?>
                            <!--Разработка <a href="https://it-rkomi.ru/" target="_blank">«Информационные технологии»</a>-->
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</footer>
</div> <!-- #wrapper -->
<!--<div id="request-popup" class="popup">
    <div class="popup-header">Оставить заявку</div>
    <div class="popup-close popup-close-text" data-id-form="request-popup">Закрыть<i class="icon"></i></div>

    <form>
        <label for="i1">Ваше имя</label>
        <input type="text" id="i1" name="i1" required class="error">

        <label for="i2">Телефон</label>
        <input type="tel" id="i2" name="i2" required>

        <label for="i3">Краткая информация</label>
        <textarea id="i3" name="i3" required></textarea>

        <div class="clearfix">
            <input type="checkbox" name="i4" id="i4" class="checkbox-c" required><label for="i4" class="error"><a
                href="#">Согласен на обработку
            персональных данных</a></label>
        </div>

        <input type="submit" class="btn btn-submit" value="Отправить">
    </form>

</div>-->
<?$APPLICATION->IncludeComponent(
"mycomponent:main.feedback", 
"request_popup", 
array(
"EMAIL_TO" => "ddobrokhvalov@gmail.com",
"EVENT_MESSAGE_ID" => array(
0 => "7",
),
"OK_TEXT" => "Спасибо, ваше сообщение принято.",
"REQUIRED_FIELDS" => array(
0 => "NAME",
1 => "PHONE",
2 => "MESSAGE",
),
"USE_CAPTCHA" => "N",
"COMPONENT_TEMPLATE" => "request_popup"
),
false
);?>

<!--<div id="feedback-popup" class="popup">
    <div class="popup-header">Форма обратной связи</div>
    <div class="popup-close popup-close-text" data-id-form="feedback-popup">Закрыть<i class="icon"></i></div>

    <form>
        <label for="i5">Ваше имя</label>
        <input type="text" id="i5" name="i5" required>

        <label for="i6">Телефон</label>
        <input type="tel" id="i6" name="i6" required>

        <div class="clearfix">
            <input type="checkbox" name="id7" id="id7" class="checkbox-c" required checked><label for="id7"><a
                href="#">Согласен на обработку
            персональных данных</a></label>
        </div>

        <input type="submit" class="btn btn-submit" value="Отправить">
    </form>

</div>-->
<?                       $APPLICATION->IncludeComponent("mycomponent:main.feedback", "feedback_popup", Array(
"EMAIL_TO" => "ddobrokhvalov@gmail.com",	// E-mail, на который будет отправлено письмо
"EVENT_MESSAGE_ID" => array(	// Почтовые шаблоны для отправки письма
0 => "7",
),
"OK_TEXT" => "Спасибо, ваше сообщение принято.",	// Сообщение, выводимое пользователю после отправки
"REQUIRED_FIELDS" => array(	// Обязательные поля для заполнения
0 => "NAME",
1 => "PHONE",
),
"USE_CAPTCHA" => "N",	// Использовать защиту от автоматических сообщений (CAPTCHA) для неавторизованных пользователей
"COMPONENT_TEMPLATE" => "request_popup"
),
false
);?>

<div id="overlay" class="popup-close"></div>
</body>
</html>