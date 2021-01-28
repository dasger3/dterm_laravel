<!DOCTYPE html>
<html>

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>D-term</title>
    <link rel="stylesheet" href="{{URL::asset('css/style_index1.css')}}">
    <link rel="shortcut icon" href="{{URL::asset('img/logot.png')}}" type="image/png">
    <link href="https://fonts.googleapis.com/css2?family=Rubik&display=swap" rel="stylesheet">
    <script type="text/javascript" src="https://ajax.googleapis.com/ajax/libs/jquery/1.10.1/jquery.min.js"></script>
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.3/jquery.min.js"></script>
    <script type="text/javascript" src="{{URL::asset('js/scriptviewport.js')}}"></script>

    <script type="text/javascript">
        jQuery(document).ready(function () {
            jQuery('.elementanm').addClass("hidden").viewportChecker({
                classToAdd: 'visible animated slideTop',
                offset: 1
            });
        });
    </script>
    <script type="text/javascript">
        jQuery(document).ready(function () {
            jQuery('.numbers').viewportChecker({
                callbackFunction: function (elem, action) {
                    var time = 2;
                    $('.count_container').each(function () {
                        var i = 1,
                            num = $(this).data('num'),
                            step = 1000 * time / num,
                            that = $(this),
                            int = setInterval(function () {
                                if (i <= num) {
                                    that.html(i);
                                }
                                else {
                                    clearInterval(int);
                                }
                                i++;
                            }, step);
                    });
                }
            });
        });
    </script>

</head>
<!-- Header -->

<body>
    <div class="main">
        <div id="header">
            <div class="header_container">
                <div class="b_c">
                    <a href ="{{url('http://dterm.com.ua/')}}"><img class="header_logo" src="{{URL::asset('img/logo.png')}}"></a>
                    <div class="change_c">
                        <a href="http://dterm.com.ua/"><img src="{{URL::asset('img/ukr.png')}}" alt="" class="change_l"></a>
                        <a href=""><img src="{{URL::asset('img/ru.png')}}" alt="" class="change_l">
                    </div>
                </div>
                    <div class="header_container_b">
                    
                    <div><a href="#footer_container" class="header_button">
                        <img src="{{URL::asset('img/icons8-map-50.png')}}" alt="" class="header_button_icon">
                        Контакты
                    </a></div>
                    <div><a href="{{url('form1_ru')}}" class="header_button">
                        <img src="{{URL::asset('img/icons8-korzina-64.png')}}" alt="" class="header_button_icon">
                        Заказать
                    </a></div>
                </div>
            </div>
        </div>
        <div class="slider_container">
            <div class="sim-slider">
                <ul class="sim-slider-list">
                    <li><img src="http://pvbk.spb.ru/inc/slider/imgs/no-image.gif" alt="screen"></li> <!-- это экран -->
                    <li class="sim-slider-element"><img src="{{URL::asset('img/sliderImage1.jpg')}}" alt="1">
                        <div class="slider_overlay"></div>
                        <div class="heading_10">Компания «Д-Терм» предлагает удобную и доступную, местную термообработку
                             металлов. Благодаря новейшему передвижном электрооборудованию, мы можем выполнять работы в
                             самых отдаленных уголках Украины.</div>
                    </li>
                    <li class="sim-slider-element"><img src="{{URL::asset('img/sliderImage2.jpg')}}" alt="1">
                        <div class="slider_overlay"></div>
                        <div class="heading_10">Наше энергоэффективное оборудование позволяет выполнять термическую обработку
                             одновременно на 12 сварных соединениях, на расстоянии до 40 метров от места расположения
                             устройства. Благодаря компьютеризированной системе, мы предоставляем подробный отчет течения процесса
                             термической обработки.</div>
                    </li>
                    <li class="sim-slider-element"><img src="{{URL::asset('img/sliderImage3.jpg')}}" alt="1">
                        <div class="slider_overlay"></div>
                        <div class="heading_10">«Д-Терм» имеет десятилетний стаж работы в разных регионах Украины. Наши
                             работники имеют большой опыт термообработки в различных отраслях промышленности.</div>
                    </li>
                </ul>
                <div class="sim-slider-arrow-left"></div>
                <div class="sim-slider-arrow-right"></div>
                <div class="sim-slider-dots"></div>
            </div>
        </div>
        <div class="adress_container">
            <div class="adress_text">Д-Терм имеет рабочую базу в городе Днепр. Благодаря наличию мобильной бригады, мы
                 можем оперативно выполнять работы в разных областях Украины.</div>
        </div>
        <div class="first_block">
            <div class="first_block_overlay"></div>
            <img src="{{URL::asset('img/block_2.jpg')}}" class="first_block_img" alt="">
            <section class="heading_1 elementanm">Почему стоит выбрать нас?</section>
            <section class="heading_2 elementanm">Наши комбинированные электронагреватели позволяют выполнять термообработку
                 сложных конструкций и деталей с минимальными энергозатратами. Благодаря автоматическими самописцам на
                 нашем оборудовании, заказчик может контролировать правильность выполнения и качество термообработки. команда
                 «Д-Терм» может работать в различных условиях, быстро и дешево выполняя сложные задачи.</section>
            <a href="#second_block_container" class="header_button">Узнать больше</a>
            <div class="advantages_container">
                <div class="advantage_container">
                    <div class="a_container_photo">
                        <img src="{{URL::asset('img/a1.png')}}" alt="">
                    </div>
                    <div class="heading_3 elementanm">Качественные материалы</div>
                </div>
                <div class="advantage_container">
                    <div class="a_container_photo">
                        <img src="{{URL::asset('img/a2.png')}}" alt="">
                    </div>
                    <div class="heading_3 elementanm">Работаем 24/7</div>
                </div>
                <div class="advantage_container">
                    <div class="a_container_photo">
                        <img src="{{URL::asset('img/a3.png')}}" alt="">
                    </div>
                    <div class="heading_3 elementanm">Конкурентные цены</div>
                </div>
                <div class="advantage_container">
                    <div class="a_container_photo">
                        <img src="{{URL::asset('img/a4.png')}}" alt="">
                    </div>
                    <div class="heading_3 elementanm">Быстрое производство</div>
                </div>
            </div>
            <a class="arrow_container" href="#second_block_container">
                <img src="{{URL::asset('img/arrow.png')}}" alt="">
            </a>
        </div>
        <div id="second_block_container">
            <div class="heading_4">Чем мы занимаемся</div>
            <div class="second_block">
                <div class="actions">
                    <div class="action_container">
                        <div class="count_container numbers" data-num="1">1</div>
                        <div class="info_container">
                            <div class="heading_5">Cтабилизирующий отпуск</div>
                        </div>
                    </div>

                    <div class="action_container">
                        <div class="count_container" data-num="2">1</div>
                        <div class="info_container">
                            <div class="heading_5">Высокий отпуск</div>
                        </div>
                    </div>

                    <div class="action_container">
                        <div class="count_container" data-num="3">1</div>
                        <div class="info_container">
                            <div class="heading_5">Нормализация</div>
                        </div>
                    </div>

                    <div class="action_container">
                        <div class="count_container" data-num="4">1</div>
                        <div class="info_container">
                            <div class="heading_5">Обжиг</div>
                        </div>
                    </div>
                </div>
                <div class="actions">
                    <img src="{{URL::asset('img/actions1.jpg')}}" alt="">
                </div>
            </div>
        </div>
        <div id="second_block_container">
            <div class="heading_4">А также</div>
            <div class="second_block">
                <div class="actions">
                    <img src="{{URL::asset('img/actions2.jpg')}}" alt="">
                </div>
                <div class="actions">
                    <div class="action_container">
                        <div class="count_container numbers" data-num="5">1</div>
                        <div class="info_container">
                            <div class="heading_5">Термический отдых</div>
                        </div>
                    </div>

                    <div class="action_container">
                        <div class="count_container" data-num="6">1</div>
                        <div class="info_container">
                            <div class="heading_5">Закалка</div>
                        </div>
                    </div>

                    <div class="action_container">
                        <div class="count_container" data-num="7">1</div>
                        <div class="info_container">
                            <div class="heading_5">Закалка СВЧ</div>
                        </div>
                    </div>

                    <div class="action_container">
                        <div class="count_container" data-num="8">1</div>
                        <div class="info_container">
                            <div class="heading_5">Предварительный нагрев перед сваркой</div>
                        </div>
                    </div>

                    <div class="action_container">
                        <div class="count_container" data-num="9">1</div>
                        <div class="info_container">
                            <div class="heading_5">Аустенизация</div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="adress_container">
            <div class="adress_text">Стоимость
            </div>
            <div class="adress_text">Цена термообработки зависит от ряда параметров Вашего изделия. Для получения точной
                 стоимости выполнения работ, мы просим Вас обращаться за консультацией к нашим работникам.
                 Средняя стоимость термообработки 1 погонного метра сварного шва - 1000 грн.
            </div>
        </div>
        <div id="footer_container">
            <div class="footer_overlay"></div>
            <div class="footer_container_1">
                <div class="footer_container_2 footer_container_5">
                    <div class="footer_container_2">
                        <div class="heading_7">Адрес</div>
                        <div class="heading_8">м. Днепр, ул. Воскресенская 38</div>

                    </div>
                    <div class="footer_container_2">
                        <div class="heading_7">Время работы</div>
                        <div class="heading_8">Mи работаем круглосуточно, 7 дней в неделю</div>
                    </div>
                    <div class="footer_container_2">
                        <div class="heading_7">Контакты</div>
                        <div class="heading_8">Email: dterm.weld@gmail.com
                            Телефон:
                        </div>
                    </div>
                    <div class="footer_container_2">
                        <div class="heading_7">Обратная связь
                        </div>
                        <div class="heading_8">Пожалуйста, присылайте нам свои идеи, сообщения об ошибках и предложения!
                             Любая обратная связь будет оценена.
                        </div>
                    </div>
                </div>
                <div class="footer_container_2 footer_container_5">
                    <iframe
                        src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d2645.65763473393!2d35.034691215070985!3d48.46309813641246!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x40dbe2e16a9b51db%3A0x2e7cef779a4bad50!2z0YPQuy4g0JLQvtGB0LrRgNC10YHQtdC90YHQutCw0Y8sIDM4LCDQlNC90LjQv9GA0L4sINCU0L3QtdC_0YDQvtC_0LXRgtGA0L7QstGB0LrQsNGPINC-0LHQu9Cw0YHRgtGMLCA0OTAwMA!5e0!3m2!1sru!2sua!4v1602174241112!5m2!1sru!2sua"
                        width="100%" height="400" frameborder="0" style="border:0;" allowfullscreen=""
                        aria-hidden="false" tabindex="0"></iframe>
                </div>
                <div class="footer_container_3">
                    <div class="heading_8 heading_9">© Все права на сайт, а также на продукцию представленных на нем
                         принадлежат компании "D-TERM"</div>
                </div>
            </div>
        </div>
    </div>
    <script src="{{URL::asset('js/slider-slim.js')}}"></script>
    <script src="{{URL::asset('js/scroll.js')}}"></script>
    <script src="{{URL::asset('js/scrollToBlock.js')}}"></script>

    <!-- вызов слайдера -->
    <script>new Sim()</script>
</body>

</html>