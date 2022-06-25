<!DOCTYPE html>
<html>
  <head>
    <meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
    <meta http-equiv="Content-Style-Type" content="text/css" />
    <meta name="viewport" content="width=device-width, initial-scale=1" />
    <title>Container</title>
    <link rel="stylesheet" href="css/cont_reset.css" />
    <link rel="preconnect" href="https://fonts.googleapis.com" />
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin />
    <link href="https://fonts.googleapis.com/css2?family=Roboto&display=swap" rel="stylesheet" />
    <link rel="stylesheet" href="css/cont_style.css" />
    <link rel="stylesheet" href="css/cont_media.css" />
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
                {{--<li>
                    <a href="../login.php">Регистрация</a>
                </li>--}}
            </ul>
        </nav>
      </nav>
    </header>
    <section>
      <div class="container">
        <div class="content__inner">
          <div class="cont_title">
            <h2>Наша компания предлагает обширный спектр услуг:</h2>
          </div>
          <div class="cont_services">
            <div class="cont_block">
              <div class="cont_img">
                <img src="img/services_img/567179a63c74b 8.png" alt="" />
              </div>
              <div class="cont_info">
                <p>Отделка стен</p>
                <button>
                  <a href="">228$/м<sup>2</sup></a>
                </button>
                <a href="#" class="cont_more">Узнать больше</a>
              </div>
            </div>
            <div class="cont_block">
              <div class="cont_img">
                <img src="img/services_img/9dd16b69eec50df3ca2d337eb09aaa19 1.png" alt="" />
              </div>
              <div class="cont_info">
                <p>Монтаж окон</p>
                <button>
                  <a href="">500$/шт</a>
                </button>
                <a href="#" class="cont_more">Узнать больше</a>
              </div>
            </div>
            <div class="cont_block">
              <div class="cont_img">
                <img src="img/services_img/kombinatsiya-raznyh-tipov-oboev 1.png" alt="" />
              </div>
              <div class="cont_info">
                <p>Поклейка обоев</p>
                <button>
                  <a href="">1337$/м<sup>2</sup></a>
                </button>
                <a href="#" class="cont_more">Узнать больше</a>
              </div>
            </div>
            <div class="cont_block">
              <div class="cont_img">
                <img src="img/services_img/2_8rp8kdy6 1.png" alt="" />
              </div>
              <div class="cont_info">
                <p>Демонтаж стен</p>
                <button>
                  <a href="">10$/м<sup>2</sup></a>
                </button>
                <a href="#" class="cont_more">Узнать больше</a>
              </div>
            </div>
            <div class="cont_block">
              <div class="cont_img">
                <img src="img/services_img/interior.png" alt="" />
              </div>
              <div class="cont_info">
                <p>Создание дизайна</p>
                <button>
                  <a href="">1$</a>
                </button>
                <a href="#" class="cont_more">Узнать больше</a>
              </div>
            </div>
            <div class="cont_block">
              <div class="cont_img">
                <img src="img/services_img/12 1.png" alt="" />
              </div>
              <div class="cont_info">
                <p>Отделка стен</p>
                <button>
                  <a href="">Бесплатно</a>
                </button>
                <a href="#" class="cont_more">Узнать больше</a>
              </div>
            </div>
          </div>
        </div>
      </div>
    </section>
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
    <script type="text/javascript" src="js/cont_scripts.js"></script>
  </body>
</html>
