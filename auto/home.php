<?php

/*
Template Name: home
*/
?>

<?php get_header();?>


  <section class="services">
    <div class="container">
      <h2 class="title">НАШИ УСЛУГИ</h2>
      <div class="services__inner">
        <div class="services__content">

            <?php the_field('name-servise')?>

            <a class="button button--decor" href="#">КОНСУЛЬТАЦИЯ ЭКСПЕРТА</a>
          </div> 

            <?php the_field('number-text-servise')?>
      </div>
    </div>
  </section>


  <section class="benefits">
    <div class="container">
      <div class="benefits__inner">
      <img data-wow-delay="2s" class="benefits__images wow animate__fadeInUp" src="<?php the_field('car-img')?>">
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
              <p class="benefits__item-title">лет на рынке Украины</p>
              <p class="benefits__item-text">
                Работаем по всей территории Украины, работаем по договору с клиентами
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
                 
                'category' => 3
            ]);
            if( $myposts ){
                foreach( $myposts as $post ){
                    setup_postdata( $post );
        ?>

            <div class="carousel__item">
                <div class="carousel__item-box">
                <?php the_post_thumbnail(
                    array(380,250),
                    array(
                        'class'=>'carousel__item-img'
                    )
                )?>
                <h4 class="carousel__item-title"><?php the_title() ?></h4>
                <!-- для того чтобы выводить контент -->
                <p class="carousel__item-text"><?php the_content()?></p>
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
                <?php the_field('address')?>
              </p>
            </li>
            <li class="contacts__item">
              <p class="contacts__item-title">Время работы</p>
              <p class="contacts__item-text">
              <?php the_field('work-time')?>
              </p>
            </li>
            <li class="contacts__item">
              <p class="contacts__item-title">Телефон</p>
              <p class="contacts__item-text">
                <a href="tel:+380505556677" ><?php the_field('phone')?></a>
              </p>
            </li>
          </ul>
        </div>
        <form class="contacts__form">
          <h2 class="title contacts__title">Оставить заявку</h2>
           
            <?php echo do_shortcode('[contact-form-7 id="39" title="Контактная форма"]')?>
        </form>
      </div>
    </div>
  </section>

<?php get_footer();?>

