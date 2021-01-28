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
    <script type="text/javascript" src="js/scriptviewport.js"></script>

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
                <a href ="{{url('')}}"><img class="header_logo" src="img/logo.png"></a>
                <div class="change_c">
                    <a href=""><img src="img/ukr.png" alt="" class="change_l"></a>
                    <a href="{{url('index.php/ru')}}"><img src="img/ru.png" alt="" class="change_l">
                </div>
            </div>
                <div class="header_container_b">
                    <div><a href="#footer_container" class="header_button">
                        <img src="img/icons8-map-50.png" alt="" class="header_button_icon">
                        Контакти
                    </a></div>
                    <div><a href="{{url('index.php/form1')}}" class="header_button">
                        <img src="img/icons8-korzina-64.png" alt="" class="header_button_icon">
                        Замовити
                    </a></div>
                </div>
            </div>
        </div>
        <div class="slider_container">
            <div class="sim-slider">
                <ul class="sim-slider-list">
                    <li><img src="http://pvbk.spb.ru/inc/slider/imgs/no-image.gif" alt="screen"></li> <!-- это экран -->
                    <li class="sim-slider-element"><img src="img/sliderImage1.jpg" alt="1">
                        <div class="slider_overlay"></div>
                        <div class="heading_10">Компанія «Д-Терм» пропонує зручну та доступну, місцеву термообробку
                            металів. Завдяки новітньому пересувному електрообладнанню, ми можемо виконувати роботи у
                            найвіддаленіших куточках України.</div>
                    </li>
                    <li class="sim-slider-element"><img src="img/sliderImage2.jpg" alt="1">
                        <div class="slider_overlay"></div>
                        <div class="heading_10">Наше енергоефективне обладнання дозволяє виконувати термічну обробку
                            одночасно на 12 зварних з’єднаннях, на відстані до 40 метрів від місця розташування
                            пристрою. Завдяки комп’ютеризованій системі, ми надаємо детальний звіт перебігу процесу
                            термічної обробки.</div>
                    </li>
                    <li class="sim-slider-element"><img src="img/sliderImage3.jpg" alt="1">
                        <div class="slider_overlay"></div>
                        <div class="heading_10">«Д-Терм» має десятирічний стаж роботи в різних регіонах України. Наші
                            працівники мають великий досвід термообробки в різних галузях промисловості.</div>
                    </li>
                </ul>
                <div class="sim-slider-arrow-left"></div>
                <div class="sim-slider-arrow-right"></div>
                <div class="sim-slider-dots"></div>
            </div>
        </div>
        <div class="adress_container">
            <div class="adress_text">Д-Терм має робочу базу у місті Дніпро. Завдяки наявності мобільної бригади, ми
                можемо оперативно виконувати роботи в різних областях України.</div>
        </div>
        <div class="first_block">
            <div class="first_block_overlay"></div>
            <img src="img/block_2.jpg" class="first_block_img" alt="">
            <section class="heading_1 elementanm">Чому варто обрати нас?</section>
            <section class="heading_2 elementanm">Наші комбіновані електронагрівачі дозволяють виконувати термообробку
                складних конструкцій та деталей з мінімальними енерговитратами. Завдяки автоматичними самописцям на
                нашому обладнанні, замовник може контролювати правильність виконання та якість термообробки. Команда
                «Д-Терм» може працювати в різних умовах, швидко та дешево виконуючи складні задачі.</section>
            <a href="#second_block_container" class="header_button">Дізнатися більше</a>
            <div class="advantages_container">
                <div class="advantage_container">
                    <div class="a_container_photo">
                        <img src="img/a1.png" alt="">
                    </div>
                    <div class="heading_3 elementanm">Якісні матеріли</div>
                </div>
                <div class="advantage_container">
                    <div class="a_container_photo">
                        <img src="img/a2.png" alt="">
                    </div>
                    <div class="heading_3 elementanm">Працюємо 24/7</div>
                </div>
                <div class="advantage_container">
                    <div class="a_container_photo">
                        <img src="img/a3.png" alt="">
                    </div>
                    <div class="heading_3 elementanm">Конкурертні ціни</div>
                </div>
                <div class="advantage_container">
                    <div class="a_container_photo">
                        <img src="img/a4.png" alt="">
                    </div>
                    <div class="heading_3 elementanm">Швидке виробництво</div>
                </div>
            </div>
            <a class="arrow_container" href="#second_block_container">
                <img src="img/arrow.png" alt="">
            </a>
        </div>
        <div id="second_block_container">
            <div class="heading_4">Чим ми займаємось</div>
            <div class="second_block">
                <div class="actions">
                    <div class="action_container">
                        <div class="count_container numbers" data-num="1">1</div>
                        <div class="info_container">
                            <div class="heading_5">Стабілізуючий відпуск</div>
                        </div>
                    </div>

                    <div class="action_container">
                        <div class="count_container" data-num="2">1</div>
                        <div class="info_container">
                            <div class="heading_5">Високий відпуск</div>
                        </div>
                    </div>

                    <div class="action_container">
                        <div class="count_container" data-num="3">1</div>
                        <div class="info_container">
                            <div class="heading_5">Нормалізація</div>
                        </div>
                    </div>

                    <div class="action_container">
                        <div class="count_container" data-num="4">1</div>
                        <div class="info_container">
                            <div class="heading_5">Випалення</div>
                        </div>
                    </div>
                </div>
                <div class="actions">
                    <img src="img/actions1.jpg" alt="">
                </div>
            </div>
        </div>
        <div id="second_block_container">
            <div class="heading_4">А також</div>
            <div class="second_block">
                <div class="actions">
                    <img src="img/actions2.jpg" alt="">
                </div>
                <div class="actions">
                    <div class="action_container">
                        <div class="count_container numbers" data-num="5">1</div>
                        <div class="info_container">
                            <div class="heading_5">Термічний відпочинок</div>
                        </div>
                    </div>

                    <div class="action_container">
                        <div class="count_container" data-num="6">1</div>
                        <div class="info_container">
                            <div class="heading_5">Загартування</div>
                        </div>
                    </div>

                    <div class="action_container">
                        <div class="count_container" data-num="7">1</div>
                        <div class="info_container">
                            <div class="heading_5">Загартування СВЧ</div>
                        </div>
                    </div>

                    <div class="action_container">
                        <div class="count_container" data-num="8">1</div>
                        <div class="info_container">
                            <div class="heading_5">Попередній нагрів перед зварюванням</div>
                        </div>
                    </div>

                    <div class="action_container">
                        <div class="count_container" data-num="9">1</div>
                        <div class="info_container">
                            <div class="heading_5">Аустенізація</div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="adress_container">
            <div class="adress_text">ВАРТІСТЬ
            </div>
            <div class="adress_text">Ціна термообробки залежить від низки параметрів Вашого виробу. Для отримання точної
                вартості виконання робіт, ми просимо Вас звертатись за консультацією до наших працівників.
                Середня вартість термообробки 1 погонного метру зварюваного шву – 1000 грн.
            </div>
        </div>
        <div id="footer_container">
            <div class="footer_overlay"></div>
            <div class="footer_container_1">
                <div class="footer_container_2 footer_container_5">
                    <div class="footer_container_2">
                        <div class="heading_7">Адреса</div>
                        <div class="heading_8">м. Дніпро, вул. Воскресенська 38</div>

                    </div>
                    <div class="footer_container_2">
                        <div class="heading_7">Час роботи</div>
                        <div class="heading_8">Mи працюємо цілодобово, 7 днів на тиждень</div>
                    </div>
                    <div class="footer_container_2">
                        <div class="heading_7">Контакти</div>
                        <div class="heading_8">Email: dterm.weld@gmail.com
                            Телефон:
                        </div>
                    </div>
                    <div class="footer_container_2">
                        <div class="heading_7">Обратная связь
                        </div>
                        <div class="heading_8">Будь ласка, надсилайте нам свої ідеї, повідомлення про помилки і пропозиції!
                            Будь-який зворотній зв'язок буде оцінений.
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
                    <div class="heading_8 heading_9">© Усі права на сайт, а також на продукцію представленну на ньому
                        належать компанії "D-TERM"</div>
                </div>
            </div>
        </div>
    </div>
    <script src="js/slider-slim.js"></script>
    <script src="js/scroll.js"></script>
    <script src="js/scrollToBlock.js"></script>

    <!-- вызов слайдера -->
    <script>new Sim()</script>
</body>

</html>