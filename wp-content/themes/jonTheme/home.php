<?php
/*
Template Name: Home
*/
?>

<!DOCTYPE html>
<html>

<head>
    <meta charset="<?php bloginfo('charset'); ?>">
    <title><?php wp_title('|', true, 'right'); ?></title>
    <?php wp_head(); ?>
</head>

<body>
  <section class="header" style="background-image: url(<?php bloginfo('template_url'); ?>/assets/images/header-bg.jpg)">
    <div class="container">
      <div class="header__top">
        <?php the_custom_logo(); ?>
        <a class="phone" href="tel:+<?php the_field('phone_number'); ?>"><?php the_field('phone'); ?></a>
      </div>
      <div class="header__content">
        <h1 data-wow-delay=".5s" class="header__title wow animate__fadeInLeft">
           <?php the_field('title'); ?>
        </h1>
        <h2 data-wow-delay="1s" class="header__subtitle wow animate__fadeInLeft">
            <?php the_field('subtitle'); ?>
        </h2>
        <p data-wow-delay="1.5s" class="header__text wow animate__fadeInLeft">
          <?php the_field('bottom_text'); ?>
        </p>
        <a class="button" href="#">КОНСУЛЬТАЦИЯ ЭКСПЕРТА</a>
        <div class="social header__social">
          <a class="social__link" href="#">
            <svg class="test" width="26" height="26">
              <use xlink:href="<?php bloginfo('template_url'); ?>/assets/images/icon/sprite.svg#instagram" ></use>
            </svg>
          </a>
          <a class="social__link" href="#">
            <svg width="25" height="19">
              <use xlink:href="<?php bloginfo('template_url'); ?>/assets/images/icon/sprite.svg#telegram"></use>
            </svg>
          </a>
          <a class="social__link" href="#">
            <svg width="26" height="26">
              <use xlink:href="<?php bloginfo('template_url'); ?>/assets/images/icon/sprite.svg#whatsapp"></use>
            </svg>
          </a>
          <a class="social__link" href="#">
            <svg width="14" height="25">
              <use xlink:href="<?php bloginfo('template_url'); ?>/assets/images/icon/sprite.svg#facebook"></use>
            </svg>
          </a>
        </div>
        <img data-wow-delay="2s" class="header__images wow animate__fadeInUpBig" src="<?php the_field('main_image') ?>"
          alt="ford mustang">
      </div>
    </div>
  </section>

  <section class="services">
    <div class="container">
      <h2 class="title">НАШИ УСЛУГИ</h2>
      <div class="services__inner">
        <div class="services__content">
          <?php the_field("service_desc") ?>
          <a class="button button--decor" href="#">КОНСУЛЬТАЦИЯ ЭКСПЕРТА</a>
        </div>
        <?php the_field("service_list") ?>
      </div>
    </div>
  </section>


  <section class="benefits">
    <div class="container">
      <div class="benefits__inner">
        <img data-wow-delay="2s" class="benefits__images wow animate__fadeInUp" src="<?php bloginfo('template_url'); ?>/assets/images/car.png" alt="car">
        <div class="benefits__content">
          <h2 class="title benefits__title">ПОЧЕМУ МЫ?</h2>
          <ul class="benefits__list">
            <li class="benefits__item">
              <p class="benefits__item-num">650</p>
              <p class="benefits__item-title">успешно доставленных авто</p>
              <p class="benefits__item-text">
                большой опыт пригона автомобилей из США под ключ, все клиенты остались довольны на 100%
              </p>
            </li>
            <li class="benefits__item">
              <p class="benefits__item-num">5</p>
              <p class="benefits__item-title">лет на рынке</p>
              <p class="benefits__item-text">
                Работаем по всей территории страны, работаем по договору с клиентами
              </p>
            </li>
            <li class="benefits__item">
              <p class="benefits__item-num">100%</p>
              <p class="benefits__item-title">доверия клиентов</p>
              <p class="benefits__item-text">
                Онлайн отчетность. Вы всегда в курсе статуса подбора вашего авто. Фото и видео отчет
              </p>
            </li>
          </ul>
        </div>
      </div>
    </div>
  </section>


  <section class="carousel">
    <div class="container">
      <h2 class="title">
        ПРИГНАННЫЕ НАМИ АВТО
      </h2>
      <div class="carousel__inner">

      <?php
       global $post;
        $myposts = get_posts([
            'numberposts' => -1,
            'post_type'  => "cars"
        ]);

        if( $myposts ){
            foreach($myposts as $post ){
                ?>
                    <div class="carousel__item">
                        <div class="carousel__item-box">
                            <img class="carousel__item-img" src="<?php the_post_thumbnail_url() ?>" alt="">
                            <h4 class="carousel__item-title"><?php the_title(); ?></h4>
                            <p class="carousel__item-text"><?php the_content(); ?></p>
                        </div>
                    </div>
                <?php
            }
        }

        wp_reset_postdata();
        ?>
      </div>
    </div>
  </section>

  <section class="contacts">
    <div class="container">
      <div class="contacts__inner">
        <div class="contacts__info">
          <h2 class="title">
            КОНТАКТЫ
          </h2>
          <ul class="contacts__list">
            <li class="contacts__item">
              <p class="contacts__item-title">Адрес</p>
              <p class="contacts__item-text">
                <?php the_field('work_time') ?>
              </p>
            </li>
            <li class="contacts__item">
              <p class="contacts__item-title">Время работы</p>
              <p class="contacts__item-text">
                <?php the_field('work_time') ?>
              </p>
            </li>
            <li class="contacts__item">
              <p class="contacts__item-title">Телефон</p>
              <p class="contacts__item-text">
                <?php the_field('phone'); ?>
              </p>
            </li>
          </ul>
        </div>
        <div class="contacts__form">
          <h2 class="title contacts__title">Оставить заявку</h2>
          <?php echo do_shortcode('[contact-form-7 id="b7f9f09" title="Contact form 1"]') ?>
        </div>
      </div>
    </div>
  </section>

  <footer class="footer">
    <div class="container">
      <div class="footer__inner">
      <?php the_custom_logo(); ?>

        <div class="social footer__social">
          <a class="social__link" href="#">
            <img class="social__img" src="<?php bloginfo('template_url'); ?>/assets/images/icon/instagram.svg" alt="instagram icon">
          </a>
          <a class="social__link" href="#">
            <img class="social__img" src="<?php bloginfo('template_url'); ?>/assets/images/icon/telegram.svg" alt="telegram icon">
          </a>
          <a class="social__link" href="#">
            <img class="social__img" src="<?php bloginfo('template_url'); ?>/assets/images/icon/whatsapp.svg" alt="whatsapp icon">
          </a>
          <a class="social__link" href="#">
            <img class="social__img" src="<?php bloginfo('template_url'); ?>/assets/images/icon/facebook.svg" alt="facebook icon">
          </a>
        </div>

        <a class="footer__copy" href="#">
          Политика конфиденциальности
        </a>
      </div>
    </div>
  </footer>

  <?php wp_footer() ?>

</body>