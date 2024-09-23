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


<script>
    function calculateValue() {
        const weight = parseFloat(document.getElementById('weight').value);
        const marketPrice = parseFloat(document.getElementById('marketPrice').value);
        let purity, karat;

        purity = parseFloat(document.getElementById('purity').value);
        karat = parseFloat(document.getElementById('karatValue').value);



        if (document.getElementById('probability').checked) {
            // Если выбрана проба

            if (isNaN(weight) || isNaN(purity) || isNaN(marketPrice) || weight <= 0 || purity <= 0) {
                Swal.fire({
                    title: "<span style='color:#FF7425;font-size:23px'>Введите корректные значения!</span>",
                    confirmButtonColor: "#101010",
                });
                return;
            }

            // Рассчитываем чистое золото
            const pureGold = weight * (purity / 1000);
            // Рассчитываем стоимость
            const totalValue = Math.round(pureGold * marketPrice * 0.80);
            document.getElementById('result').innerText = `Стоимость: ${formatNumber(totalValue)} рублей`;
        } else if (document.getElementById('karat').checked) {
            // Если выбрана каратность

            if (isNaN(weight) || isNaN(karat) || isNaN(marketPrice) || weight <= 0 || karat <= 0) {
                Swal.fire({
                    title: "<span style='color:#FF7425;font-size:23px'>Введите корректные значения!</span>",
                    confirmButtonColor: "#101010",
                });
                return;
            }


            // Преобразуем каратность в пробу
            purity = (karat / 24) * 1000;
            // Рассчитываем чистое золото
            const pureGold = weight * (purity / 1000);
            // Рассчитываем стоимость
            const totalValue = Math.round(pureGold * marketPrice * 0.80);
            document.getElementById('result').innerText = `Стоимость: ${formatNumber(totalValue)} рублей`;
        } else {
            document.getElementById('result').innerText = 'Пожалуйста, выберите один из параметров.';
        }
    }


    function formatNumber(num) {
        // Преобразуем число в строку с запятой для десятичной части
        const parts = num.toFixed(0).split(".");
        // Форматируем целую часть с пробелами по разрядам
        parts[0] = parts[0].replace(/\B(?=(\d{3})+(?!\d))/g, " ");
        return parts.join(","); // Объединяем целую и десятичную части
    }
</script>




<section itemprop="articleBody" id="ori-cart" class="ori-cart-section position-relative">
    <div class="container">
        <div class="ori-single-comment-form pera-content form-kalkulyator">


            <div class="prev_text">

                <p>Онлайн калькулятор оценки золотых изделий является полезным инструментом, предоставляя удобный, быстрый и информативный способ узнать цену ваших драгоценностей.</p>

                <p>Калькулятор позволяет увидеть, как рассчитывается стоимость, основываясь на весе, пробе, текущей рыночной цене золота и курсе рубля, что способствует лучшему пониманию оценки нашим лобмардом.</p>

                <p>Расчёт основан на вводе в соответствующие поля формы 2-х основных показателей:</p>
                <ul>
                    <li>количество грамм изделия</li>
                    <li>проба или каратность (одно из двух - в зависимости от того какой информацией по нему вы обладаете).</li>
                </ul>

            </div>


            <div>
                <p>Калькулятор делает оценку по стандартной номенклатуре золотого изделия. Если вы хотите учесть факторы уникальности, которые могут быть присущи вашему изделию, воспользуйтесь другим калькулятором на одной из страниц соответствующей номенклатурной группы - <a href=" /skupka-zolota/ukrasheniya-iz-zolota/" title="расчёт стоимости золотого украшения с учётом факторов уникальности" target="_blank">украшения</a>, <a href=" /skupka-zolota/zolotye-monety/" title="расчёт стоимости золотых монет с учётом факторов уникальности" target="_blank">монеты </a>, <a href="/skupka-zolota/lom-iz-zolota/" title="расчёт стоимости золотого лома с учётом факторов уникальности" target="_blank">лом</a>, <a href="/skupka-zolota/zolotye-slitki/" title="расчёт стоимости золотого слитка с учётом факторов уникальности" target="_blank">слитки</a>, <a href=" /skupka-zolota/antikvariat-iz-zolota/" title="расчёт стоимости антиквариата из золота с учётом факторов уникальности" target="_blank">антиквариат</a>, <a href="/skupka-zolota/stomatologiya/" title="расчёт стоимости зубного золота с учётом факторов уникальности" target="_blank">стамотология</a>, продаваемого изделия или отправьте заявку на экспертную оценку через туже страницу.</p>
            </div>





            <form>
                <label for="weight">Вес изделия (г):</label>
                <input style="margin-bottom: 15px;" type="number" id="weight" value="1" required>

                <!-- <label for="marketPrice">Рыночная цена золота (рублей за грамм):</label> -->
                <input type="number" id="marketPrice" value="<? echo $goldPrice ?>" hidden>

                <h3>Критерий оценки золотого изделия:</h3>
                <span style="margin-bottom: 30px;  display: block;">* выберете один из критериев качества золота вашего изделия и введите его значение в нижеуказанное поле</span>
                <label>
                    <input type="radio" id="probability" name="inputType" checked> Проба
                </label>
                <label>
                    <input type="radio" id="karat" name="inputType"> Караты
                </label>

                <div id="purityInput" style="display: block;">
                    <label for="purity">Проба (например, 585):</label>
                    <input type="number" id="purity">
                </div>
                <div id="karatInput" style="display: none;">
                    <label for="karatValue">Караты (например, 18):</label>
                    <input type="number" id="karatValue">
                </div>

                <button type="button" onclick="calculateValue()">Рассчитать</button>
            </form>

            <h2 id="result" style="color: #fff;"></h2>




        </div>



    </div>
</section>


<script>
    const probabilityRadio = document.getElementById('probability');
    const karatRadio = document.getElementById('karat');

    probabilityRadio.addEventListener('change', () => {
        document.getElementById('purityInput').style.display = 'block';
        document.getElementById('karatInput').style.display = 'none';
    });

    karatRadio.addEventListener('change', () => {
        document.getElementById('purityInput').style.display = 'none';
        document.getElementById('karatInput').style.display = 'block';
    });
</script>




<?php get_template_part('tp-prev-gold'); ?>