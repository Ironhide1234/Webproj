
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

<!DOCTYPE html>
<html>
  <head>
    <meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
    <meta http-equiv="Content-Style-Type" content="text/css" />
    <meta name="viewport" content="width=device-width, initial-scale=1" />
    <title>Repair site</title>
    <link rel="stylesheet" href="Landing/css/reset.css" />
    <link rel="preconnect" href="https://fonts.googleapis.com" />
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin />
    <link href="https://fonts.googleapis.com/css2?family=Roboto&display=swap" rel="stylesheet" />
    <link rel="stylesheet" href="Landing/css/style.css" />
    <link rel="stylesheet" href="Landing/css/media.css" />
    <script type="text/javascript" src="https://code.jquery.com/jquery-latest.min.js"></script>
  </head>
  <body>
    <header class="header">
      <div class="header-logo">
        <img src="Landing/img/logo.png" alt="Repair logo" />
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
    	<p> <a href="index.php?logout='1'" style="color: black;">Logout</a> </p>
    <?php endif ?>

        </ul>
      </nav>
    </header>
    <section>
      <div class="container">
        <div class="services">
          <div class="info__inner">
            <div class="info_text">
              <div class="info_titles">
                <h2>Качество - залог хорошей репутации.</h2>
                <h4>Наша компания предлагает:</h4>
              </div>
              <div class="serv_list">
                <div class="serv_wrap">
                  <img class="serv_wrap_img" src="Landing/img/logos/Component 2.png" alt="Clock icon" />
                  <p class="serv_wrap_text">Точное соблюдение сроков</p>
                </div>
                <div class="serv_wrap">
                  <img class="serv_wrap_img" src="Landing/img/logos/Component 1 2.png" alt="Clock icon" />
                  <p class="serv_wrap_text">
                    Рассчитаем стоимость работ и затраты на материалы в день обращения
                  </p>
                </div>
                <div class="serv_wrap">
                  <img class="serv_wrap_img" src="Landing/img/logos/Component 1.png" alt="Clock icon" />
                  <p class="serv_wrap_text">Предложим множество вариантов дизайна Вашего жилья</p>
                </div>
              </div>
            </div>
            <div class="serv_img">
              <img src="Landing/img/info.png" alt="Room photo" />
            </div>
          </div>
        </div>
      </div>
      <div class="container">
        <div class="forms_section">
          <div class="forms_wrap">
            <div class="form_titles">
              <h2>Мы бесплатно разработаем дизайн-проект Вашего жилья и реализуем его!</h2>
              <h4>Оставьте заявку на разработку бесплатного дизайн-проекта!</h4>
            </div>
            <div class="form__inner">
				<form class="form" method="post" name="myemailform" action="form-to-email.php">
                <input type="text" class="form_def" id="form_name" name="name_form"  placeholder="Имя" required />
                <input
                  type="tel"
                  class="form_def"
                  id="form_tel"
				          name="phone_form"
                  placeholder="Ваш телефон"
                  required
                />
                <input type="submit" value="Получить бесплатный дизайн-проект!" class="form_def form_button">
                <p class="form_but_descr">Мы перезвоним вам в течении лишь 1 минуты!</p>
              </form>
            </div>
          </div>
          <div class="form_img">
            <img src="Landing/img/forms/707_kuhna_48bea9_7432 2.png" alt="Kitchen photo" />
          </div>
        </div>
      </div>
      <div class="container">
        <div class="portfolio_info">
          <div class="portfolio_title">
            <h2>Работая с 2222 года, мы сделали более 100 ремонтов в квартирах и домах</h2>
          </div>
          <div class="slider_main">
            <div class="slider_line">
              <div class="slider_img"><img src="Landing/img/slider_img/slider-1 1.png" alt="" /></div>
              <div class="slider_img"><img src="Landing/img/slider_img/slider-2 1.png" alt="" /></div>
              <div class="slider_img"><img src="Landing/img/slider_img/slider-3 1.png" alt="" /></div>
              <div class="slider_img"><img src="Landing/img/slider_img/slider-1 1.png" alt="" /></div>
              <div class="slider_img"><img src="Landing/img/slider_img/slider-2 1.png" alt="" /></div>
            </div>
          </div>
          <div class="slider_buttons">
            <button class="slider_arrows slider_prev">
              <img src="Landing/img/slider_img/arr_left.png" alt="" />
            </button>
            <button class="slider_arrows slider_next">
              <img src="Landing/img/slider_img/arr_right.png" alt="" />
            </button>
          </div>
          <img class="portfolio_bg" src="Landing/img/work/portfolio-pattern 1.png" alt="" />
        </div>
      </div>
      <div class="container">
        <div class="price__inner">
          <div class="price_titles">
            <h2>У нас очень большой спектр услуг!</h2>
            <h4>Прайсы на наши услуги</h4>
          </div>
          <div class="price_wrap">
            <div class="price_block">
              <div class="price_img">
                <img src="Landing/img/pr/13335 1.png" alt="" />
              </div>
              <div class="price_info">
                <p>Ремонт ванной</p>
                <button>
                  <a href="">Узнать больше</a>
                </button>
              </div>
            </div>
            <div class="price_block">
              <div class="price_img">
                <img src="Landing/img/pr/dizhain_mansardi_24 1.png" alt="" />
              </div>
              <div class="price_info">
                <p>Ремонт ванной</p>
                <button>
                  <a href="">Узнать больше</a>
                </button>
              </div>
            </div>
            <div class="price_block">
              <div class="price_img">
                <img src="Landing/img/pr/living-60200-xxl 1.png" alt="" />
              </div>
              <div class="price_info">
                <p>Ремонт ванной</p>
                <button>
                  <a href="">Узнать больше</a>
                </button>
              </div>
            </div>
          </div>
        </div>
      </div>
      <div class="container">
        <div class="algo_inner">
          <div class="algo_title">
            <h2>Наши специалисты готовы выехать на замер в любое удобное для Вас время</h2>
          </div>
          <div class="algo_wrap">
            <div class="algo_block">
              <div class="algo_img">
                <img src="Landing/img/spec/Component 3.png" alt="" />
              </div>
              <div class="algo_text">
                <p>Свяжемся с вами</p>
              </div>
            </div>
            <div class="algo_arr">
              <img src="Landing/img/icons/arrow-right-solid (1).svg" alt="" />
            </div>
            <div class="algo_block">
              <div class="algo_img">
                <img src="Landing/img/spec/Component 4.png" alt="" />
              </div>
              <div class="algo_text">
                <p>Рассчитаем время</p>
              </div>
            </div>
            <div class="algo_arr">
              <img src="Landing/img/icons/arrow-right-solid (1).svg" alt="" />
            </div>
            <div class="algo_block">
              <div class="algo_img">
                <img src="Landing/img/spec/Component 5.png" alt="" />
              </div>
              <div class="algo_text">
                <p>Высчитаем смету</p>
              </div>
            </div>
            <div class="algo_arr">
              <img src="Landing/img/icons/arrow-right-solid (1).svg" alt="" />
            </div>
            <div class="algo_block">
              <div class="algo_img">
                <img src="Landing/img/spec/Component 6.png" alt="" />
              </div>
              <div class="algo_text">
                <p>Подпишем договор</p>
              </div>
            </div>
            <div class="algo_arr">
              <img src="Landing/img/icons/arrow-right-solid (1).svg" alt="" />
            </div>
            <div class="algo_block">
              <div class="algo_img">
                <img src="Landing/img/spec/Component 7.png" alt="" />
              </div>
              <div class="algo_text">
                <p>Сделаем все быстро</p>
              </div>
            </div>
          </div>
        </div>
      </div>
      <div class="maps_inner">
        <div class="map_info__title">
          <h2>Озвучим примерную стомиость по телеофну</h2>
          <div class="map_info_list">
            <div class="map_info_wrap">
              <img src="Landing/img/inf_icon/Rectangle 15.png" alt="" />
              <p>Какова площадь помещения?</p>
            </div>
            <div class="map_info_wrap">
              <img src="Landing/img/inf_icon/Rectangle 15.png" alt="" />
              <p>Новострой или старое здание?</p>
            </div>
            <div class="map_info_wrap">
              <img src="Landing/img/inf_icon/Rectangle 15.png" alt="" />
              <p>Каков ценовой предел?</p>
            </div>
            <div class="map_info_wrap">
              <img src="Landing/img/inf_icon/Rectangle 15.png" alt="" />
              <p>Назначение помещения?</p>
            </div>
          </div>
        </div>
        <div class="map_block">
          <iframe
            src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d89729.74861037846!2d14.356774136183937!3d45.347709194487315!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x4764a12517aabe2d%3A0x373c6f383dcbb670!2z0KDRltGU0LrQsCwg0KXQvtGA0LLQsNGC0ZbRjw!5e0!3m2!1suk!2scz!4v1651512408413!5m2!1suk!2scz"
            width="100%"
            height="100%"
            style="border: 0"
            allowfullscreen=""
            loading="lazy"
            referrerpolicy="no-referrer-when-downgrade"
          ></iframe>
        </div>
      </div>
    </section>
    <footer>
      <div class="container">
        <div class="cont__inner">
          <h1 class="contact_title">Вы можете так же связться с нами через</h1>
          <div class="cont_wrap">
            <a href="https://web.telegram.org/k/" class="cont_link">
              <img src="Landing/img/footer_img/telegram-brands 1.png" alt="" />
            </a>
            <a href="https://www.viber.com/ru/" class="cont_link">
              <img src="Landing/img/footer_img/viber-brands 1.png" alt="" />
            </a>
            <a href="https://www.instagram.com/" class="cont_link"
              ><img src="Landing/img/footer_img/instagram-brands 1.png" alt="" />
            </a>
            <a href="https://web.whatsapp.com/" class="cont_link"
              ><img src="Landing/img/footer_img/whatsapp-brands 1.png" alt="" />
            </a>
          </div>
        </div>
      </div>
    </footer>
	    <!-- logged in user information -->
		
    <script type="text/javascript" src="Landing/js/scripts.js"></script>
  </body>
</html>





