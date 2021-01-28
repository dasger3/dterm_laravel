<!DOCTYPE html>
<html>

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="{{URL::asset('css/style_index1.css')}}">
    <link rel="shortcut icon" href="{{URL::asset('img/logot.png')}}" type="image/png">
    <link href="https://fonts.googleapis.com/css2?family=Rubik&display=swap" rel="stylesheet">
    <title>Контакти</title>
</head>
<!-- Header -->

<body id=body>
    <div class="main">
        <div id="header">
            <div class="header_container">
                <div class="b_c">
                    <a href ="{{url('http://dterm.com.ua/')}}"><img class="header_logo" src="{{URL::asset('img/logo.png')}}"></a>
                    <div class="change_c">
                        <a href=""><img src="{{URL::asset('img/ukr.png')}}" alt="" class="change_l"></a>
                        <a href="{{url('form1_ru')}}"><img src="{{URL::asset('img/ru.png')}}" alt="" class="change_l"></a>
                    </div>   
                </div>
            </div>
        </div>
        <div class="form_container">
            <img src="{{URL::asset('img/form.jpg')}}" alt="">
            <div class="div form_container_overlay"></div>
            <div class="form_container_1">
                <div class="form_container_2">
                    <div class="heading_11">Напишіть нам</div>
                    <div class="heading_12">ЗАЛИШИТИ ЗАМОВЛЕННЯ АБО Ж ВІДГУК ВИ МОЖЕТЕ СКОРИСТАВШИСЬ ФОРМОЮ обратоного
                        ЗВ'ЯЗКУ.
                        НАПИШІТЬ В ЛИСТІ, ЩО Бажаєте ЩОБ З ВАМИ зв'язатися по телефону І МИ ОБОВ'ЯЗКОВО Вам
                        зателефонуємо.
                        ДЯКУЄМО ВАМ ЗА БУДЬ-ЯКУ ЗВОРОТНИЙ ЗВ'ЯЗОК.</div>
                </div>
                <div class="form_container_3">
                    <form style="display: flex; flex-direction: column; align-items: flex-end;" method="GET" action="">
                        <input name="text" type="text" class = "s_input" placeholder="Ім'я"/>
                        <input name="phone" type="text" class = "s_input" placeholder="Телефон"/>
                        <input name="email" type="text" class = "s_input" placeholder="Е-mail"/>
                        <textarea name="message" type="text" class = "s_input s_mes" placeholder="Ваше повідомлення"></textarea>
                        <input type="submit" class = "subcribe_button" value="Написати" />
                        <?php
                        
                        if(isset($_GET['email'])){
                            mysqli_report(MYSQLI_REPORT_ERROR | MYSQLI_REPORT_STRICT);
                            $email = $_GET['email'];
                            $phone = $_GET['phone']; 
                            $msg = $_GET['message'];
                            $name = $_GET['text'];      
                            $result = mysqli_query($connect, "INSERT INTO contact (name,phone,email,msg) VALUES ('$name','$phone','$email','$msg')");
                            
                        }
                        ?> 
                    </form>
                </div>
            </div>
        </div>
    </div>


</body>

</html>

