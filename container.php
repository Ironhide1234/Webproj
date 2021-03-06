<?php 
  session_start(); 

  if (!isset($_SESSION['username'])) {
  	$_SESSION['msg'] = "You must log in first";
  	header('location: login.php');
  }
  if (isset($_GET['logout'])) {
  	session_destroy();
  	unset($_SESSION['username']);
  	header("location: login.php");
  }
?>
<!DOCTYPE html PUBLIC "-//W3C//DTD HTML 4.01//EN" "http://www.w3.org/TR/html4/strict.dtd">
<html>
  <head>
    <meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
    <meta http-equiv="Content-Style-Type" content="text/css" />
    <meta name="viewport" content="width=device-width, initial-scale=1" />
    <title>Container</title>
    <link rel="stylesheet" href="Container/css/reset.css" />
    <link rel="preconnect" href="https://fonts.googleapis.com" />
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin />
    <link href="https://fonts.googleapis.com/css2?family=Roboto&display=swap" rel="stylesheet" />
    <link rel="stylesheet" href="Container/css/style.css" />
    <link rel="stylesheet" href="Container/css/media.css" />
    <script type="text/javascript" src="https://code.jquery.com/jquery-latest.min.js"></script>
  </head>
  <body>
    <header class="header">
      <div class="header-logo">
        <img src="Container/img/logo.png" alt="Repair logo" />
      </div>
      <nav class="navbar">
        <ul class="navbar__inner">
        <li>
            <a href="?page=index">О компании</a>
          </li>
          <li>
            <a href="?page=information">Примеры работ</a>
          </li>
          <li>
            <a href="?page=container">Услуги</a>
          </li>
          <li>
            <a href="?page=login">Регистрация</a>
          </li>
          <?php
              switch ($_GET['page']) {
              case 'index':
                header('location: index.php');
              break;
              case 'information':
                header('location: information.php');
              break;
              case 'container':
                header('location: container.php');
              break;
              case 'login':
                header('location: login.php');
              break;
              }
 		      ?>
            <?php  if (isset($_SESSION['username'])) : ?>
    	<p>Welcome <strong><?php echo $_SESSION['username']; ?></strong></p>
    	<p> <a href="index.php?logout='1'" style="color: black;">logout</a> </p>
    <?php endif ?>
        </ul>
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
                <img src="Container/img/services_img/567179a63c74b 8.png" alt="" />
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
                <img src="Container/img/services_img/9dd16b69eec50df3ca2d337eb09aaa19 1.png" alt="" />
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
                <img src="Container/img/services_img/kombinatsiya-raznyh-tipov-oboev 1.png" alt="" />
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
                <img src="Container/img/services_img/2_8rp8kdy6 1.png" alt="" />
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
                <img src="Container/img/services_img/interior.png" alt="" />
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
                <img src="Container/img/services_img/12 1.png" alt="" />
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
            <a href="https://web.telegram.org/k/" class="cont_link">
              <img src="Container/img/footer_img/telegram-brands 1.png" alt="" />
            </a>
            <a href="https://www.viber.com/ru/" class="cont_link">
              <img src="Container/img/footer_img/viber-brands 1.png" alt="" />
            </a>
            <a href="https://www.instagram.com/" class="cont_link"
              ><img src="Container/img/footer_img/instagram-brands 1.png" alt="" />
            </a>
            <a href="https://www.whatsapp.com/" class="cont_link"
              ><img src="Container/img/footer_img/whatsapp-brands 1.png" alt="" />
            </a>
          </div>
        </div>
      </div>
    </footer>
    <script type="text/javascript" src="Container/js/scripts.js"></script>
  </body>
</html>
