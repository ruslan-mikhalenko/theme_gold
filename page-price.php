<section itemprop="articleBody" id="ori-cart" class="ori-cart-section position-relative section_price">
    <div class="container">
        <div>





            <div class="row">
                <div class="col-lg-6 col-md-12">
                    <div>
                        <p>Золото представляет собой один из наиболее ценных металлов, используемых в ювелирных изделиях, инвестициях и других областях. Проба золота указывает на содержание чистого золота в сплаве. Чем выше проба, тем чистее золото и, соответственно, выше его стоимость.</p>

                        <h2>Спотовая биржевая цена на золото в реальном времени </h2>

                        <iframe src="https://goldbroker.com/widget/live/XAU?currency=USD&height=320" scrolling="no" frameborder="0" width="100%" height="320" style="border: 0; overflow: hidden;"></iframe><!-- <br>Gold price by <a href="https://goldbroker.com/" style="text-transform: uppercase">GoldBroker.com --></a>
                        <h2>Текущее изменение цены</h2>

                        <iframe src="https://goldbroker.com/widget/live-price/XAU?currency=USD" width="100%" height="130" style="border: 0; overflow: hidden;"></iframe>



                    </div>

                </div>




                <div class="col-lg-6 col-md-12">
                    <div>

                        <h2>Цены на золото разных проб стандартной номенклатурной группы:</h2>

                        <div class="table_price">


                            <?php

                            include($_SERVER['DOCUMENT_ROOT'] . '/scripts_r/connect_bd.php');


                            // Проверка подключения
                            if ($mysqli === false) {
                                die("ОШИБКА: не удалось подключиться. " . mysqli_connect_error());
                            }


                            ?>


                            <table>
                                <thead>
                                    <tr>
                                        <th>Проба</th>
                                        <th>Цена в RUB, за 1 гр.</th>

                                    </tr>
                                </thead>
                                <tbody>





                                    <?php


                                    $sql = "SELECT * FROM wp_mod_gold_price";
                                    if ($result = mysqli_query($mysqli, $sql)) {


                                        $i = 0;
                                        while ($row = mysqli_fetch_array($result)) {

                                            echo "<tr><td>" . $row["content"] . "</td><td>" . $row["price"] . "</td></tr>";
                                        }
                                    }





                                    ?>

                                </tbody>
                            </table>

                        </div>

                        <p>Примечание: Цены могут изменяться в зависимости от текущего рыночного курса и условий ломбарда.</p>
                        <p>Мы предлагаем услуги оценки и выкупа золотых изделий по выгодным ценам. Обращайтесь в наш ломбард для получения более подробной информации.</p>

                        <div>
                            <p>Если вы хотите учесть факторы уникальности золотого изделия, которые могут быть присущи ему, воспользуйтесь онлайн-калькулятором на одной из страниц соответствующей номенклатурной группы - <a href=" /skupka-zolota/ukrasheniya-iz-zolota/" title="расчёт стоимости золотого украшения с учётом факторов уникальности" target="_blank">украшения</a>, <a href=" /skupka-zolota/zolotye-monety/" title="расчёт стоимости золотых монет с учётом факторов уникальности" target="_blank">монеты </a>, <a href="/skupka-zolota/lom-iz-zolota/" title="расчёт стоимости золотого лома с учётом факторов уникальности" target="_blank">лом</a>, <a href="/skupka-zolota/zolotye-slitki/" title="расчёт стоимости золотого слитка с учётом факторов уникальности" target="_blank">слитки</a>, <a href=" /skupka-zolota/antikvariat-iz-zolota/" title="расчёт стоимости антиквариата из золота с учётом факторов уникальности" target="_blank">антиквариат</a>, <a href="/skupka-zolota/stomatologiya/" title="расчёт стоимости зубного золота с учётом факторов уникальности" target="_blank">стамотология</a>, продаваемого изделия или отправьте заявку на экспертную оценку через туже страницу.</p>
                        </div>



                    </div>

                </div>
            </div>











        </div>
    </div>
</section>





<?php get_template_part('tp-prev-gold'); ?>