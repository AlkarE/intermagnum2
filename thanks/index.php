<?php
    // header("refresh: 3; url = ".$_COOKIE['cabinet']);
?>
<!DOCTYPE html>
<html lang="en">

<head>
<!-- Keitaro tracking script -->
<script type='application/javascript'>
if (!window.KTracking){window.KTracking={collectNonUniqueClicks: true, multiDomain: false, R_PATH: 'https://crecetusahorros.com/HK4sR6Hd', P_PATH:'https://crecetusahorros.com/6874d8b/postback', listeners: [], reportConversion: function(){this.queued = arguments;}, getSubId: function(fn) {this.listeners.push(fn);}, ready: function(fn) {this.listeners.push(fn);} };}(function(){var a=document.createElement('script');a.type='application/javascript';a.async=true;a.src='https://crecetusahorros.com/js/k.min.js';var s=document.getElementsByTagName('script')[0];s.parentNode.insertBefore(a,s)})();
</script><noscript><img height='0' width='0' alt='' src='https://crecetusahorros.com/HK4sR6Hd'/></noscript>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="icon" href="images/favicon-32x32.png" type="image/x-icon">
    <title>Gracias</title>
    <link rel="stylesheet" href="css/normalize.min.css" crossorigin="anonymous" referrerpolicy="no-referrer">
    <link rel="stylesheet" href="css/bootstrap.min.css">
<!-- Google tag (gtag.js) -->
<script async src="https://www.googletagmanager.com/gtag/js?id=AW-16647707562"></script>
<script>
  window.dataLayer = window.dataLayer || [];
  function gtag(){dataLayer.push(arguments);}
  gtag('js', new Date());

  gtag('config', 'AW-16647707562');
</script>

</head>

<body>
<!-- Event snippet for LEAD conversion page -->
<script>
  gtag('event', 'conversion', {'send_to': 'AW-16647707562/ybOrCP3Xl8UZEKq3n4I-'});
</script>

    <div class="main">
        <div class="container">
            <div class="order-info">

                <h2>Gracias</h2>
                <p>
                    ¡Su solicitud ha sido aceptada exitosamente!
                </p>
                


            </div>
        </div>
    </div>
    <style>
        body {
            background-image: url('images/photo-1560264280-88b68371db39.jpg');
            background-size: cover;
            background-repeat: no-repeat;
        }

        .main {
            width: 100%;
            height: 100vh;
            background-color: rgba(195, 195, 195, 0.7);
            padding: 10%;
        }


        .order-info {
            padding: 20px;
            background-color: whitesmoke;
            display: flex;
            flex-direction: column;
            align-items: center;
            justify-content: center;
            text-align: center;
            /* background: linear-gradient(to left, #015EFF 0%, #003CA3 100%); */
        }

        .order-info h2 {
            font-weight: 700;
            margin-bottom: 30px;
            color: #0d6efd;
            font-size: 44px;
        }

        .order-info a {
            margin-top: 40px;

        }

        .order-info p {
            color: #0d6efd;
            font-size: 28px;

        }

        .sale_text {
            font-weight: 700;
            margin: 30px 0px 10px;
            color: white;
        }

        .sale_link {
            text-decoration: none;
            text-transform: uppercase;
            font-weight: 900;
            font-size: 20px;
            color: #0d6efd;
        }
    </style>

    <script src="js/jquery.min.js"></script>
<script>
    // Функция для установки cookie
    function setCookie(name, value, days) {
        const date = new Date();
        date.setTime(date.getTime() + (days * 24 * 60 * 60 * 1000));
        document.cookie = `${name}=${value};expires=${date.toUTCString()};path=/`;
    }

    // Функция для получения значения cookie
    function getCookie(name) {
        const cookies = document.cookie.split('; ');
        for (let cookie of cookies) {
            const [key, value] = cookie.split('=');
            if (key === name) {
                return value;
            }
        }
        return null;
    }



    var cabinetCookie = getCookie("cabinet");
    if (cabinetCookie) {
        setTimeout(function() {
            // Проверяем, была ли отправлена конверсия
            if (!getCookie('conversionSent')) {
                const revenue = 0;
                const status = 'lead';
                const tid = Math.floor(Math.random() * 1000000000);

                // Отправляем конверсию
                KTracking.reportConversion(revenue, status, { tid });

                // Устанавливаем cookie, чтобы отметить отправку конверсии
                setCookie('conversionSent', 'true', 1); // Cookie действует 1 день

                console.log('Conversion sent');
            } else {
                console.log('Conversion already sent, skipping...');
            }
            setCookie('cabinet', 'true', -1); // Cookie действует 1 день
            if(decodeURIComponent(cabinetCookie) !== '/'){
                window.location.href = decodeURIComponent(cabinetCookie);
            }else{
                window.location.href = "https://google.com";
            }

        }, 5000); // 5000 milliseconds = 5 seconds
    }
</script>

</body>

</html>