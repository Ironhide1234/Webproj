<!DOCTYPE html>
<html>
<head>
    <meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
    <meta http-equiv="Content-Style-Type" content="text/css" />
    <meta name="viewport" content="width=device-width, initial-scale=1" />
    <title>@yield('title')</title>
    <link rel="stylesheet" href="css/land_reset.css" />
    <link rel="preconnect" href="https://fonts.googleapis.com" />
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin />
    <link href="https://fonts.googleapis.com/css2?family=Roboto&display=swap" rel="stylesheet" />
    <link rel="stylesheet" href="css/land_style.css" />
    <link rel="stylesheet" href="css/land_media.css" />
    <script type="text/javascript" src="https://code.jquery.com/jquery-latest.min.js"></script>
</head>
<body>
<header class="header">
    <div class="header-logo">
        <img src="img/logo.png" alt="Repair logo" />
    </div>
    <nav class="navbar">
        <ul class="navbar__inner">
            <li>
                <a href="{{ route('home') }}">О компании</a>
            </li>
            <li>
                <a href="{{ route('information') }}">Примеры работ</a>
            </li>
            <li>
                <a href="{{ route('orders') }}">Услуги</a>
            </li>
{{--            <li>
                <a href="../login.php">Регистрация</a>
            </li>--}}
        </ul>
    </nav>
</header>
@yield('content')
<footer>
    <div class="container">
        <div class="cont__inner">
            <h1 class="contact_title">Вы можете так же связться с нами через</h1>
            <div class="cont_wrap">
                <a href="#" class="cont_link">
                    <img src="img/footer_img/telegram-brands 1.png" alt="" />
                </a>
                <a href="#" class="cont_link">
                    <img src="img/footer_img/viber-brands 1.png" alt="" />
                </a>
                <a href="#" class="cont_link"
                ><img src="img/footer_img/instagram-brands 1.png" alt="" />
                </a>
                <a href="#" class="cont_link"
                ><img src="img/footer_img/whatsapp-brands 1.png" alt="" />
                </a>
            </div>
        </div>
    </div>
</footer>
<script type="text/javascript" src="js/scripts.js"></script>
</body>
</html>
