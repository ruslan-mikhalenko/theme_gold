<section itemprop="articleBody" id="ori-cart" class="ori-cart-section position-relative">
    <div class="container">

        <div class="ori-service-page-service-content">

            <div class="text_start">
                <?php the_content(); ?>
            </div>




            <div class="main-timeline">
                <a href="#" class="timeline">
                    <div class="timeline-icon"><i class="fa fa-toggle-on"></i></div>
                    <div class="timeline-content">
                        <h3 class="title">Выбор номенклатуры</h3>
                        <p class="description">Выберите в разделе <strong>Продать золото</strong> соответствующую номенклатуру к которому относится ваше изделие - укарашение, монеты, лом, слитки и т.п.</p>
                    </div>
                </a>
                <a href="#" class="timeline">
                    <div class="timeline-icon"><i class="fab fa-wpforms"></i></div>
                    <div class="timeline-content">
                        <h3 class="title">Отправка формы</h3>
                        <p class="description">
                            Нажмите кнопку <strong>Подать заявку</strong>. Заполните соответствующие поля появившейся формы и добавьте фото вашего изделия. Отправьте форму заявки.
                        </p>
                    </div>
                </a>
                <a href="#" class="timeline">
                    <div class="timeline-icon"><i class="fas fa-search"></i></div>
                    <div class="timeline-content">
                        <h3 class="title">Предварительная оценка</h3>
                        <p class="description">
                            Дождитесь предварительной оценки вашего золотого изделия. Мы свяжемся с Вами по указанному в форме заявки номеру телефона. &nbsp; &nbsp; &nbsp; &nbsp;
                        </p>
                    </div>
                </a>
                <a href="#" class="timeline">
                    <div class="timeline-icon"><i class="fas fa-handshake"></i></div>
                    <div class="timeline-content">
                        <h3 class="title">Сделка по купле-продаже золота</h3>
                        <p class="description">
                            Если Вас заинтересует наше предложение, посетите наш офис для точной оценки стоимости изделия и возможной купле-продаж его на договорной основе. &nbsp;
                            <!-- Lorem ipsum dolor sit amet, consectetur adipisicing elit. Cupiditate ducimus officiis quod! Aperiam eveniet nam nostrum odit quasi ullam voluptatum. -->
                        </p>
                    </div>
                </a>
            </div>

            <p style="text-align: center;margin-top:50px">Или же свяжитесь с нами по номеру телефона <span>+7 (964) 781-90-96</span> и посетите наш <a href="/kontakty" title="адрес ломбарда по скупке золота" target="_blank" style="color:#DE760D">офис</a>.</p>


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


<?php get_template_part('tp-prev-gold'); ?>



<style>
    a {
        text-decoration: none
    }

    h4 {
        text-align: center;
        margin: 30px 0;
        color: #444
    }

    .main-timeline {
        position: relative
    }

    .main-timeline:before {
        content: "";
        width: 5px;
        height: 100%;
        border-radius: 20px;
        margin: 0 auto;
        background: #242922;
        position: absolute;
        top: 0;
        left: 0;
        right: 0
    }

    .main-timeline .timeline {
        display: inline-block;
        margin-bottom: 50px;
        position: relative
    }

    .main-timeline .timeline:before {
        content: "";
        width: 20px;
        height: 20px;
        border-radius: 50%;
        border: 4px solid #fff;
        background: #DDBB75;
        position: absolute;
        top: 50%;
        left: 50%;
        z-index: 1;
        transform: translate(-50%, -50%)
    }

    .main-timeline .timeline-icon {
        display: inline-block;
        width: 130px;
        height: 130px;
        border-radius: 50%;
        border: 3px solid #DDBB75;
        padding: 13px;
        text-align: center;
        position: absolute;
        top: 50%;
        left: 30%;
        transform: translateY(-50%)
    }

    .main-timeline .timeline-icon i {
        display: block;
        border-radius: 50%;
        background: #DDBB75;
        font-size: 64px;
        color: #fff;
        line-height: 100px;
        z-index: 1;
        position: relative
    }

    .main-timeline .timeline-icon:after,
    .main-timeline .timeline-icon:before {
        content: "";
        width: 100px;
        height: 3px;
        background: #DDBB75;
        position: absolute;
        top: 50%;
        right: -130px;
        transform: translateY(-50%);
        display: none;
    }

    /*  .main-timeline .timeline-icon:after {
        width: 70px;
        height: 50px;
        background: #fff;
        top: 89px;
        right: -30px
    } */

    .main-timeline .timeline-content {
        width: 50%;
        padding: 0 50px;
        margin: 62px 0 0;
        float: right;
        position: relative
    }

    .main-timeline .timeline-content:before {
        content: "";
        width: 70%;
        height: 100%;
        border: 3px solid #DDBB75;
        border-top: none;
        border-right: none;
        position: absolute;
        bottom: -13px;
        left: 35px
    }

    .main-timeline .timeline-content:after {
        content: "";
        width: 37px;
        height: 3px;
        background: #DDBB75;
        position: absolute;
        top: 13px;
        left: 0;

    }

    .main-timeline .title {
        font-size: 20px;
        font-weight: 600;
        color: #DDBB75;
        text-transform: uppercase;
        margin: 0 0 5px
    }

    .main-timeline .description {
        display: inline-block;
        font-size: 16px;
        color: white;
        line-height: 20px;
        letter-spacing: 1px;
        margin: 0
    }

    .main-timeline .timeline:nth-child(even) .timeline-icon {
        left: auto;
        right: 30%
    }

    .main-timeline .timeline:nth-child(even) .timeline-icon:before {
        right: auto;
        left: -130px
    }

    .main-timeline .timeline:nth-child(even) .timeline-icon:after {
        right: auto;
        left: -30px;

    }

    .main-timeline .timeline:nth-child(even) .timeline-content {
        float: left
    }

    .main-timeline .timeline:nth-child(even) .timeline-content:before {
        left: auto;
        right: 35px;
        transform: rotateY(180deg)
    }

    .main-timeline .timeline:nth-child(even) .timeline-content:after {
        left: auto;
        right: 0
    }

    .main-timeline .timeline:nth-child(2n) .timeline-content:after,
    .main-timeline .timeline:nth-child(2n) .timeline-icon i,
    .main-timeline .timeline:nth-child(2n) .timeline-icon:before,
    .main-timeline .timeline:nth-child(2n):before {
        background: #f9850f
    }

    .main-timeline .timeline:nth-child(2n) .timeline-icon {
        border-color: #f9850f
    }

    .main-timeline .timeline:nth-child(2n) .title {
        color: #f9850f
    }

    .main-timeline .timeline:nth-child(2n) .timeline-content:before {
        border-left-color: #f9850f;
        border-bottom-color: #f9850f
    }

    .main-timeline .timeline:nth-child(3n) .timeline-content:after,
    .main-timeline .timeline:nth-child(3n) .timeline-icon i,
    .main-timeline .timeline:nth-child(3n) .timeline-icon:before,
    .main-timeline .timeline:nth-child(3n):before {
        background: #DDBB75
    }

    .main-timeline .timeline:nth-child(3n) .timeline-icon {
        border-color: #DDBB75
    }

    .main-timeline .timeline:nth-child(3n) .title {
        color: #DDBB75
    }

    .main-timeline .timeline:nth-child(3n) .timeline-content:before {
        border-left-color: #DDBB75;
        border-bottom-color: #DDBB75
    }

    .main-timeline .timeline:nth-child(4n) .timeline-content:after,
    .main-timeline .timeline:nth-child(4n) .timeline-icon i,
    .main-timeline .timeline:nth-child(4n) .timeline-icon:before,
    .main-timeline .timeline:nth-child(4n):before {
        background: #F9850F
    }

    .main-timeline .timeline:nth-child(4n) .timeline-icon {
        border-color: #F9850F
    }

    .main-timeline .timeline:nth-child(4n) .title {
        color: #F9850F
    }

    .main-timeline .timeline:nth-child(4n) .timeline-content:before {
        border-left-color: #F9850F;
        border-bottom-color: #F9850F
    }

    @media only screen and (max-width:1260px) {

        .main-timeline .timeline-content::after {
            display: none;
        }

        .main-timeline .timeline:nth-child(2n) .timeline-content::after {
            display: none;
        }
    }




    @media only screen and (max-width:1200px) {
        .main-timeline .timeline-icon:before {
            width: 50px;
            right: -50px;
            display: none;
        }

        .main-timeline .timeline:nth-child(even) .timeline-icon:before {
            right: auto;
            left: -50px
        }

        .main-timeline .timeline-content {
            margin-top: 63px
        }
    }

    @media only screen and (max-width:1100px) {

        .main-timeline .timeline-content {
            margin-top: 83px
        }
    }




    @media only screen and (max-width:990px) {
        .main-timeline .timeline {
            margin: 0 0 10px
        }

        .main-timeline .timeline-icon {
            left: 25%
        }

        .main-timeline .timeline:nth-child(even) .timeline-icon {
            right: 25%
        }

        .main-timeline .timeline-content {
            margin-top: 83px
        }
    }

    @media only screen and (max-width:904px) {


        .main-timeline .timeline-content {
            margin-top: 103px
        }
    }



    @media only screen and (max-width:767px) {
        .main-timeline {
            padding-top: 50px
        }

        .main-timeline:before {
            left: 80px;
            right: 0;
            margin: 0
        }

        .main-timeline .timeline {
            margin-bottom: 70px
        }

        .main-timeline .timeline:before {
            top: 0;
            left: 83px;
            right: 0;
            margin: 0
        }

        .main-timeline .timeline-icon {
            width: 60px;
            height: 60px;
            line-height: 40px;
            padding: 5px;
            top: 0;
            left: 0
        }

        .main-timeline .timeline:nth-child(even) .timeline-icon {
            left: 0;
            right: auto
        }

        .main-timeline .timeline-icon:before,
        .main-timeline .timeline:nth-child(even) .timeline-icon:before {
            width: 25px;
            left: auto;
            right: -25px;
            display: none;
        }

        .main-timeline .timeline-icon:after,
        .main-timeline .timeline:nth-child(even) .timeline-icon:after {
            width: 25px;
            height: 30px;
            top: 44px;
            left: auto;
            right: -5px;
            display: none;
        }

        .main-timeline .timeline-icon i {
            font-size: 30px;
            line-height: 45px
        }

        .main-timeline .timeline-content,
        .main-timeline .timeline:nth-child(even) .timeline-content {
            width: 100%;
            margin-top: -15px;
            padding-left: 130px;
            padding-right: 5px
        }

        .main-timeline .timeline:nth-child(even) .timeline-content {
            float: right
        }

        .main-timeline .timeline-content:before,
        .main-timeline .timeline:nth-child(even) .timeline-content:before {
            width: 50%;
            left: 120px
        }

        .main-timeline .timeline:nth-child(even) .timeline-content:before {
            right: auto;
            transform: rotateY(0)
        }

        .main-timeline .timeline-content:after,
        .main-timeline .timeline:nth-child(even) .timeline-content:after {
            left: 85px
        }

        .main-timeline .timeline-content::after {
            display: block;
        }

        .main-timeline .timeline:nth-child(2n) .timeline-content::after {
            display: block;
        }


    }

    @media only screen and (max-width:479px) {

        .main-timeline .timeline-content,
        .main-timeline .timeline:nth-child(2n) .timeline-content {
            padding-left: 110px
        }

        .main-timeline .timeline-content:before,
        .main-timeline .timeline:nth-child(2n) .timeline-content:before {
            left: 99px
        }

        .main-timeline .timeline-content:after,
        .main-timeline .timeline:nth-child(2n) .timeline-content:after {
            left: 65px
        }
    }

    .main-timeline .timeline:nth-child(2n) .timeline-icon::after {
        right: auto;
        left: -30px;
        display: none;

    }
</style>