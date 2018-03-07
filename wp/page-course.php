<?php
/*
    Template Name: Course Page
*/
?>
<!DOCTYPE html>
<html lang="ru">
  <head>
    <meta charset="UTF-8"/>
    <meta name="viewport" content="width=device-width, initial-scale=1.0"/>
    <meta http-equiv="X-UA-Compatible" content="ie=edge"/><link href="https://fonts.googleapis.com/css?family=Lora:400,700&amp;subset=cyrillic,cyrillic-ext" rel="stylesheet">
<link href="https://fonts.googleapis.com/css?family=PT+Sans:400,400i,500,700&amp;subset=cyrillic,cyrillic-ext" rel="stylesheet">
    <link rel="stylesheet" href="<?php bloginfo('stylesheet_directory'); ?>/style.css"/>
    <title>Oldboy Academy</title>
  </head>
  <body>
    <header class="page-header">
      <div class="page-header__logo"><img src="<?php bloginfo('stylesheet_directory'); ?>/img/logo.svg" alt="Академия Олдбой логотип"/></div>
      <nav class="main-nav main-nav--side-menu">
        <div class="main-nav__logo"><img src="<?php bloginfo('stylesheet_directory'); ?>/img/logo-bw.svg" alt="Академия Олдбой логотип монохром"/></div>
        <ul class="main-nav__list">
          <li class="main-nav__item"><a class="main-nav__link" href="#about">Об Академии</a></li>
          <li class="main-nav__item"><a class="main-nav__link" href="#features">Преимущества</a></li>
          <li class="main-nav__item"><a class="main-nav__link" href="#courses">Наши Курсы</a></li>
          <li class="main-nav__item"><a class="main-nav__link" href="#team">Команда</a></li>
          <li class="main-nav__item"><a class="main-nav__link" href="#contacts">Контакты</a></li>
        </ul>
        <div class="main-nav__social">
          <div class="masson">
            <div class="masson__logo"><img src="<?php bloginfo('stylesheet_directory'); ?>/img/masson.png" alt=""/></div>
            <div class="masson__social"><a class="icon-vkontakte" href="#"></a><a class="icon-instagram" href="#"></a></div><a class="masson__tag" href="#">#<em>OldboyAcademy</em></a>
          </div>
        </div>
      </nav>
      <div class="page-header__phone page-header__phone--inner"><a href="tel:+79114567890">+7 911 456-78-90</a></div>
      <div class="menu-icon menu-icon--inner">
        <div class="menu-icon__middle"></div>
      </div>
    </header>
    <section class="hero hero--course">
      <div class="hero__content">
        <article class="hero-course">
          <div class="hero-course__main">
            <header class="hero-course__header">
              <h3 class="hero-course__title">Традиционное бритьё опасной бритвой и&nbsp;моделирование бороды</h3>
              <div class="hero-course__image"><img src="<?php bloginfo('stylesheet_directory'); ?>/img/courses/course1.jpg" alt="Академия Олдбой курс по барберингу"/></div>
              <div class="hero-course__ribbons">
                <p class="hero-course__ribbon hero-course__ribbon--blue">новый<br>курс</p>
                <p class="hero-course__ribbon hero-course__ribbon--red">специальная<br>цена</p>
              </div>
            </header>
            <div class="hero-course__short-info">
              <div class="hero-course__info-column">
                <div class="hero-course__info-block">
                  <div class="hero-course__info-icon"><img src="<?php bloginfo('stylesheet_directory'); ?>/img/icons/calendar.svg" alt=""/></div>
                  <div class="hero-course__info-text"><strong>Старт:</strong> 1 ноября 2018.<br>Занятия проходят в будние дни</div>
                </div>
                <div class="hero-course__info-block">
                  <div class="hero-course__info-icon"><img src="<?php bloginfo('stylsheet_directory'); ?>/img/icons/time-biggest.svg" alt=""/></div>
                  <div class="hero-course__info-text"><strong>Длительность:</strong> 2&nbsp;месяца.<br>Январь–март 2018.</div>
                </div>
              </div>
              <div class="hero-course__info-column">
                <div class="hero-course__info-block">
                  <div class="hero-course__info-icon"><img src="<?php bloginfo('stylesheet_directory'); ?>/img/icons/level-noob.svg" alt=""/></div>
                  <div class="hero-course__info-text"><strong>Уровень навыков:</strong> <br>новичкам и опытным барберам.</div>
                </div>
                <div class="hero-course__info-block">
                  <div class="hero-course__info-icon"><img src="<?php bloginfo('stylesheet_directory'); ?>/img/icons/group.svg" alt=""/></div>
                  <div class="hero-course__info-text"><strong>Формат:</strong> <br>обучение в группе</div>
                </div>
              </div>
              <div class="hero-course__price">
                <p class="hero-course__price-title">Стоимость обучения:</p>
                <p class="hero-course__price-value">32&nbsp;000&nbsp;₽</p>
              </div>
            </div>
          </div>
        </article>
      </div>
      <aside class="hero__aside">
        <div class="course-form">
          <form class="course-form__form" action="">
            <input class="course-form__input" type="text" name="name" placeholder="Имя"/>
            <input class="course-form__input" type="text" name="phone" placeholder="Телефон"/>
            <input class="course-form__input" type="email" name="email" placeholder="Электронная почта"/>
            <input class="course-form__button" type="submit" value="Записаться на курс"/>
            <div class="course-form__warning">Заполняя данную форму<br> вы&nbsp;принимаете условия<br> <a href="#">политики конфиденциальности</a></div>
          </form>
        </div>
      </aside>
    </section>
    <section class="about">
      <div class="about__row">
        <div class="about__content about__content--left">
          <h2 class="about__title">В основу семинара положен симбиоз между двумя фундаментальными школами мужского грумминга:</h2>
          <div class="about__image"><img src="<?php bloginfo('stylesheet_directory'); ?>/img/photos/cigar.jpg" alt=""/></div>
        </div>
        <div class="about__content about__content--right">
          <ul>
            <li>Английская: работа ножницами в технике точного среза.</li>
            <li>Американская: классическая работа машинками в техниках фейдинга и тейперинга.</li>
          </ul>
          <p>Главный акцент моего семинара: «Я не учу стрижкам, я учу техникам».</p>
          <p>Модные стрижки приходят и уходят, мой курс структурирует и систематизирует знания, что помогает вам, в первую очередь, повысить свой уровень и больше зарабатывать.</p>
          <p>Чтобы создать хорошую мужскую стрижку, надо понимать её структуру, создавать баланс и быть точным в её исполнении. Именно этому я обучу вас на ворк–шопе, объясню и покажу, как выполнять утончённые мужские стрижки, учитывая индивидуальные особенности клиента и костной структуры.</p>
        </div>
      </div>
    </section>
    <section class="about about--yellow about--white-border-before about--white-border-after">
      <div class="about__deco-logo"></div>
      <div class="about__row">
        <div class="about__content about__content--left">
          <h2 class="about__title">Что будет на данном курсе:</h2>
          <ul>
            <li>История стрижек (лекция)</li>
            <li>Необходимый барберский инструмент (лекция)</li>
            <li>Основы работы ножницами и машинками: как правильно держать инструмент, техника движения руками</li>
            <li>Фейдинг vs тейперинг. Разница и виды</li>
            <li>Работа с клиентом. Как не задавая прямых вопросов, понять клиента и подобрать стрижку</li>
            <li>Сбалансированное и рациональное использование своего тела во время стрижки: за что отвечают верхняя и нижняя часть тела (лекция)</li>
            <li>Две демонстрационные модели</li>
            <li>Отработка на двух моделях, у каждого студента курса. Во время практической части мы будем отрабатывать технику, вам поставят руки и тело, разберем волнующие вопросы</li>
          </ul>
        </div>
        <div class="about__content about__content--right">
          <div class="about__features">
            <article class="selling-feature">
              <h3 class="selling-feature__title">Сбалансированный<br>учебный курс</h3>
              <p class="selling-feature__text">Теоретический и практический материал курса оптимально дополняют друг друга</p>
            </article>
            <article class="selling-feature">
              <h3 class="selling-feature__title">Комфортные условия<br>и оснащение</h3>
              <p class="selling-feature__text">Предоставляем нашим студентам лучшее профессинальное оборудование</p>
            </article>
            <article class="selling-feature">
              <h3 class="selling-feature__title">Помощь<br>в трудоустройстве</h3>
              <p class="selling-feature__text">Лучших выпускников мы трудоустроим в барбершопах наших партнёров</p>
            </article>
          </div>
        </div>
      </div>
    </section>
    <section class="about">
      <div class="about__row">
        <div class="about__content about__content--right">
          <h2 class="about__title">Чему вы научитесь на курсе:</h2>
          <ul>
            <li>Построению квадратной формы в мужских стрижках</li>
            <li>Технике точного среза для создания точных стрижек при помощи ножниц</li>
            <li>Работе машинкой с помощью насадок и машинкой на расчёске</li>
            <li>Правильному использованию 3–х основных техник, 3–х основных форм и 3–х основных типов разделения на проборы. А главное, как использовать эти знания для достижения желаемого результата</li>
            <li>Выполнению мужских стрижек без использования филировочных ножниц (как убрать массу и сделать текстуру при помощи прямых ножниц и опасной бритвы)</li>
            <li>Технике выполнения тушевки, как одной из ключевых техник в исполнении мужской стрижки</li>
            <li>Разберем особенности и техническую сторону выполнения фейда</li>
            <li>Подбору стрижки, исходя из индивидуальных особенностей клиента, текстуры волос, костной структуры головы</li>
            <li>Сбалансированному использованию своего тела. Вы поймете, за что отвечает каждая часть тела во время стрижки</li>
            <li>Созданию культовых барберских стрижек при помощи прямых ножниц</li>
            <li>Персонализации мужской стрижки с помощью прямых ножниц и опасной бритвы</li>
          </ul>
        </div>
      </div>
    </section>
    <section class="about about--yellow about--white-border-before about--white-border-after">
      <div class="about__deco"></div>
      <div class="about__row">
        <div class="about__content about__content--left">
          <h2 class="about__title">Кому подойдёт курс:</h2>
          <ul>
            <li>Барберам — новичкам и мастерам, которые мечтают освоить технику бритья опасной бритвой и то как выполняется оформление бороды.</li>
            <li>Опытным барберам — вы увидите другой подход к бритью, основанный на возрождении традиций бритья опасной бритвой. Разберем волнующие вопросы, с которыми вы сталкиваетесь в своей практике. Так же вы сможете систематизировать подход к моделированию бороды.</li>
          </ul>
        </div>
      </div>
    </section>
    <section class="about">
      <div class="fking-wrapper">
        <article class="member">
          <header class="member__header">
            <div class="member__photo"><img src="<?php bloginfo('stylesheet_directory'); ?>/img/members/barber1.png" alt=""/></div>
            <h3 class="member__name">Юрий<br>Артюх</h3>
          </header>
          <div class="member__content">
            <p class="member__about">О мастере:</p>
            <p class="member__text">Ведущий мастер сети Олдбой. Сертифицированный технолог бренда American Crew.</p>
            <p class="member__text">Стрижет с 16 лет, последние три года мы даже не припомним, что бы у него были выходные. Обучаля у именитыхбарберов и готов делиться заниями.</p>
            <p class="member__text">Большой любитель английской школы, сложных разделений и текстуры</p>
          </div>
        </article>
      </div>
    </section>
    <section class="about about--yellow about--white-border-before">
      <div class="about__row">
        <div class="about__content about__content--left">
          <article class="text-promo">
            <h3 class="text-promo__title">Узнай о преимуществах<br>обучения в Академии</h3>
            <p class="text-promo__text">Вся информация о наших текущих курсах представлена в разделе «Курсы», там ты найдёшь информацию по всем интересующим тебя направлениям.</p>
            <div class="text-promo__more"><a class="button" href="#">Курсы</a></div>
          </article>
          <article class="text-promo">
            <h3 class="text-promo__title">Есть вопросы?<br>Напиши нам</h3>
            <p class="text-promo__text">Всё еще остались вопросы о том, как попасть в нашу Академию? Никаких проблем, мы готовы ответить на все твои вопросы, просто напиши нам или позвони.</p>
            <div class="text-promo__more"><a class="button" href="#">Контакты</a></div>
          </article>
        </div>
      </div>
    </section>
    <section class="contacts contacts--inner">
      <article class="contacts-box contacts-box--inner">
        <header class="contacts-box__header">
          <h2 class="contacts-box__title">Контакты</h2>
          <p class="contacts-box__text">По всем интересующим вас вопросам просим вас связаться с нашим менеджером.</p>
        </header>
        <div class="contacts-box__body">
          <div class="contact">
            <div class="contact__icon icon-phone"></div>
            <div class="contact__name">Телефон</div>
            <div class="contact__value"><a href="tel:+79114567890">+7 911 456-78-90</a></div>
          </div>
          <div class="contact">
            <div class="contact__icon icon-mail-alt"></div>
            <div class="contact__name">e-mail</div>
            <div class="contact__value"><a href="mailto: academy@oldboy.com">academy@oldboy.com</a></div>
          </div>
        </div>
        <footer class="contacts-box__footer">
          <div class="contacts-box__logo"><img src="<?php bloginfo('stylesheet_directory'); ?>/img/logo-bw.svg" alt="Академия Олдбой логотип"/></div>
        </footer>
      </article>
    </section>
    <?php get_footer(); ?>
  </body>
</html>
