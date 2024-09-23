<?php



include($_SERVER['DOCUMENT_ROOT'] . '/scripts_r/connect_bd.php');


// Проверка подключения
if ($mysqli === false) {
    die("ОШИБКА: не удалось подключиться. " . mysqli_connect_error());
}



$sql = "SELECT price FROM wp_mod_gold_price_kalkulyator";


// Выполнение запроса
$result = mysqli_query($mysqli, $sql);

if ($result) {

    while ($row = $result->fetch_assoc()) {
        $prices[] = $row['price'];
    }

    // Извлечение значения
    $goldPrice = $prices[0] * $prices[1] / 28.3495;
} else {
    echo "Error: " . mysqli_error($mysqli);
}

// Закрытие соединения
mysqli_close($mysqli);




// Получаем текущую цену золота из API
function getGoldPrice($current_price)
{

    return $current_price;
}

$goldPrice = getGoldPrice($goldPrice);
?>


<section itemprop="articleBody" id="ori-cart" class="ori-cart-section position-relative">
    <div class="container">
        <div class="ori-service-page-service-content">
            <div class="row">

                <div class="col-lg-12 col-md-12 description_category">


                    <h2 itemprop="name" style="display: none;">
                        <?php $title = wp_title('', false, '');
                        echo $title ?>
                    </h2>

                    <?php echo category_description(); ?>

                </div>


                <?php
                if (have_posts()) :
                    while (have_posts()) : the_post();

                ?>

                        <div class="col-lg-4 col-md-6">
                            <div class="ori-service-page-service-inner-item">
                                <div class="service-icon">

                                    <a href="<?php the_permalink(); ?>"><?php the_post_thumbnail(); ?></a>

                                </div>
                                <div class="service-text pera-content">

                                    <!-- Вывод каждой записи -->

                                    <h3><a href="<?php the_permalink(); ?>"> <?php the_title(); ?></a></h3>

                                </div>
                            </div>
                        </div>

                <?php

                    endwhile;
                else :
                    echo 'Записей не найдено';
                endif;

                ?>

            </div>


            <i class="fa fa-angle-down" aria-hidden="true" style="color: white; text-align: center; font-size: 40px; display:block;margin: 30px 0 50px;"></i>


            <div class="ori-team-personal-info pera-content" style="max-width: 800px;margin: 0 auto;">
                <h2>Предварительная онлайн-оценка стоимости золотого изделия</h2>



                <div class="ori-service-page-service-content">

                    <p>Вы можете сделать предварительную оценку стоимости своего золотого изделия с учётом факторов его уникальности.</p>

                    <div class="row" style="margin:40px 5px 0 5px">
                        <div class="col-lg-12 col-md-12 ori-single-comment-form form-kalkulyator-type">
                            <form id="goldCalculator">
                                <!-- <label for="goldPrice">Биржевая цена золота ($/унция): </label> -->
                                <input type="number" id="goldPrice" value="<? echo $goldPrice ?>" hidden />

                                <label for="goldWeight">Вес золотого изделия (граммы): </label>
                                <input type="number" id="goldWeight" step="0.01" required value="1" />

                                <label for="goldPurity">Проба: </label>
                                <select id="goldPurity">
                                    <option value="375">375</option>
                                    <option value="417">417</option>
                                    <option value="500">500</option>
                                    <option value="585">585</option>
                                    <option value="750">750</option>
                                    <option value="848">848</option>
                                    <option value="958">958</option>
                                    <option value="999">999</option>


                                    <!-- Добавьте другие варианты пробы по необходимости -->
                                </select>

                                <p>Факторы уникальности:</p>
                                <div>
                                    <input type="checkbox" id="artisticValue" value="artisticValue" />
                                    <label for="artisticValue">Художественная ценность</label>
                                </div>
                                <div>
                                    <input type="checkbox" id="gemstones" value="gemstones" />
                                    <label for="gemstones">Драгоценные камни и другие материалы</label>
                                </div>
                                <div>
                                    <input type="checkbox" id="masterWork" value="masterWork" />
                                    <label for="masterWork">Работа мастера</label>
                                </div>
                                <div>
                                    <input type="checkbox" id="historicalOrigin" value="historicalOrigin" />
                                    <label for="historicalOrigin">Историческое происхождение</label>
                                </div>
                                <button type="button" onclick="calculateValue()">Рассчитать</button>


                            </form>

                            <p id="result"></p>

                            <script>
                                function calculateValue() {
                                    const goldPricePerOunce = parseFloat(document.getElementById("goldPrice").value);
                                    const goldPricePerGram = goldPricePerOunce;
                                    const goldWeight = parseFloat(document.getElementById("goldWeight").value);
                                    const goldPurity = parseInt(document.getElementById("goldPurity").value);

                                    // Факторы уникальности
                                    const artisticValue = document.getElementById("artisticValue").checked;
                                    const gemstones = document.getElementById("gemstones").checked;
                                    const masterWork = document.getElementById("masterWork").checked;
                                    const historicalOrigin = document.getElementById("historicalOrigin").checked;

                                    let finalValue = goldPricePerGram * goldWeight * (goldPurity / 1000) * 0.8;

                                    if (artisticValue) {
                                        finalValue *= 1.15; // Пример увеличения стоимости на 20% за художественную ценность
                                    }

                                    if (gemstones) {
                                        finalValue *= 1.07; // Пример добавления стоимости за наличие драгоценных камней
                                    }

                                    if (masterWork) {
                                        finalValue *= 1.1; // Пример увеличения стоимости на 10% за работу мастера
                                    }

                                    if (historicalOrigin) {
                                        finalValue *= 1.2; // Пример увеличения стоимости на 50% за историческое происхождение
                                    }

                                    document.getElementById("result").innerHTML = `Оценочная стоимость золотого изделия: <span>${formatNumber(finalValue)} рублей</span>`;
                                }

                                function formatNumber(num) {
                                    // Преобразуем число в строку с запятой для десятичной части
                                    const parts = num.toFixed(0).split(".");
                                    // Форматируем целую часть с пробелами по разрядам
                                    parts[0] = parts[0].replace(/\B(?=(\d{3})+(?!\d))/g, " ");
                                    return parts.join(","); // Объединяем целую и десятичную части
                                }
                            </script>


                        </div>


                    </div>


                </div>

            </div>









            <div class="ori-team-personal-info pera-content questions_page" style="margin-top: 50px;padding-top: 70px;border-top: 3px solid;">
                <h2>Есть сомнения или вопросы по продаже вашего золота?</h2>

                <div class="ori-service-page-service-content">

                    <div class="row">


                        <div class="col-lg-12 col-md-12">

                            <p>Не стесняйтесь звонить или <a href="/kontakty" target="_blank" title="написать эксперту по золоту Gold-RF - форма обратной связи">писать</a> нам!

                            </p>

                            <p class="singl-gold-kontakt"><i class="fas fa-phone-alt"></i>&nbsp; +7 (964) 781-90-96</p>


                            <div class="parent_messages">
                                <div><a href="whatsapp://send?phone=+79647819096" title="telegram"><img src="/wp-content/themes/gold/assets/img/contacts/whatsapp_1.png" alt="whatsapp" title="whatsapp" /></a></div>
                                <div><a href="https://t.me/+79647819096" titile="whatsapp"><img src="/wp-content/themes/gold/assets/img/contacts/telegram_1.png" alt="telegram" title="telegram" /></a></div>
                            </div>


                            <p>или оставьте свою заявку на оценку и продажу ваших активов, и мы перезвоним Вам сами </p>

                            <i class="fa fa-arrow-down" style="color: white; text-align: center; font-size: 30px; display:block;margin-top:30px"></i>


                            <button type="button" class="btn btn-application " data-bs-toggle="modal" data-bs-target="#exampleModal" style="margin-top: 30px;">Подать заявку</button>

                        </div>

                    </div>


                </div>

            </div>



            <!-- Модальное окно -->
            <div class=" modal fade" id="exampleModal" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
                <div class="modal-dialog">
                    <div class="modal-content">
                        <div class="modal-header">

                            <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Закрыть"></button>
                        </div>
                        <div class="modal-header-down">
                            <h5 class="modal-title title-form-gold" id="exampleModalLabel">Номенклатура: <span>Золото</span><br>форма заявки на предварительную экспертную оценку и продажу </h5>
                        </div>

                        <div class="modal-body">
                            <div class="ori-single-comment-form pera-content">
                                <form action="#" name="submit_to_google_sheet">
                                    <div class="row">

                                        <input type="text" id="date_order" name="date_order" value="<?php date_default_timezone_set('Europe/Moscow');
                                                                                                    echo date('Y-m-d H:i:s'); ?>" hidden>

                                        <div class="col-lg-6">
                                            <label>Имя</label>
                                            <input type="text" name="name" placeholder="">
                                        </div>
                                        <div class="col-lg-6">
                                            <label>Email</label>
                                            <input type="text" name="email" placeholder="">
                                        </div>
                                        <div class="col-lg-12">
                                            <label>Номер телефона</label>
                                            <input type="tel" name="phone" id="phone" placeholder="">
                                        </div>


                                        <input type="text" name="nomenclature" placeholder="" value="Без номенклатуры" hidden>


                                        <div class="col-lg-12 photo_upload">
                                            <label for="file-upload" class="custom-file-upload">
                                                Фото изделия
                                            </label>
                                            <!-- <input id="file-upload" type="file" name="photo" /> -->

                                            <input type="file" id="fileInput">
                                            <!-- <button onclick="uploadFile()">Отправить файл</button> -->
                                            <!-- <p id="fileUrl">Ссылка на файл: </p> -->


                                            <input type="text" id="nameUrlPhoto" name="photo" value="" hidden>

                                        </div>

                                        <div class="col-lg-12">
                                            <label>Кол-во грамм</label>
                                            <input type="text" name="gram" placeholder="" class="input_gram_gold">
                                            <!-- <span>* если нет точного значения, укажите приблизительное</span> -->
                                        </div>


                                        <div class="col-lg-12">
                                            <label>Сообщение</label>
                                            <textarea name="massege" placeholder=""></textarea>
                                        </div>
                                        <div class="col-lg-12">
                                            <div class="ori-submit-btn text-center">
                                                <button type="submit">Отправить</button>
                                            </div>
                                        </div>
                                    </div>
                                </form>

                                <div id="message_succese">Ожидайте, отправляем ...</div>


                            </div>
                        </div>






                        <!--
                        <div class="modal-footer">
                            <button type="button" class="btn btn-secondary btn-gold-send">Отправить</button>
                            <button type="button" class="btn btn-primary">Сохранить изменения</button>
                        </div>
-->
                    </div>
                </div>
            </div>




        </div>


        <div class="line_animation">
            <div class="line_area"></div>
            <div class="line_area"></div>
            <div class="line_area"></div>
            <div class="line_area"></div>
            <div class="line_area"></div>
            <div class="line_area"></div>
            <div class="line_area"></div>
            <div class="line_area"></div>
        </div>
    </div>
</section>