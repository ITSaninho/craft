<?php

/* @var $this yii\web\View */

use yii\widgets\ActiveForm;
use yii\helpers\Html;
use yii\helpers\Url;
use app\assets\AppAsset;
use app\assets\FooterAsset;


$this->title = 'My Yii Application';
?>

<?php
AppAsset::register($this);
?>
<header class="inner-header">
    <div class="main-header__top">
        <div class="container">
            <div class="main-header__top-inner">
                <a class="main-header__logo-link" href="index.html">
                    <div class="main-header__logo">
                        <svg id="craft-logo" data-name="CraftDevelopment" xmlns="http://www.w3.org/2000/svg" viewBox="45 130 130 75">
                            <defs>
                                <style>
                                    .main-header__logo .development{fill:#fff;}
                                    .main-header__logo .craft{fill:#fff;}
                                </style>
                            </defs>
                            <title>CraftDevelopment</title>
                            <g class="development">
                                <path d="M54.78,180.28v8.08h-.55V187.1a2.68,2.68,0,0,1-2.38,1.35,2.94,2.94,0,0,1,0-5.89,2.52,2.52,0,0,1,2.37,1.34v-3.62Zm-5.23,5.23a2.21,2.21,0,0,0,2.33,2.39,2.4,2.4,0,0,0,0-4.79A2.21,2.21,0,0,0,49.55,185.51Z"/>
                                <path d="M61.36,185.51a2.87,2.87,0,0,1,2.9-2.94,2.66,2.66,0,0,1,2.82,3.21H61.94a2.24,2.24,0,0,0,2.32,2.11,2.68,2.68,0,0,0,2.05-.87l.4.32a3.13,3.13,0,0,1-2.46,1.1A2.8,2.8,0,0,1,61.36,185.51Zm5.21-.23a2.09,2.09,0,0,0-2.31-2.19,2.28,2.28,0,0,0-2.32,2.19Z"/>
                                <path d="M73,182.66h.62l2.08,5,2.08-5h.62L76,188.36h-.62Z"/>
                                <path d="M84.18,185.51a2.87,2.87,0,0,1,2.9-2.94,2.66,2.66,0,0,1,2.82,3.21H84.76a2.24,2.24,0,0,0,2.32,2.11,2.68,2.68,0,0,0,2.05-.87l.4.32a3.13,3.13,0,0,1-2.46,1.1A2.8,2.8,0,0,1,84.18,185.51Zm5.21-.23a2.09,2.09,0,0,0-2.31-2.19,2.28,2.28,0,0,0-2.32,2.19Z"/>
                                <path d="M97.07,180.28v8.08h-.57v-8.08Z"/>
                                <path d="M103.53,185.52a2.9,2.9,0,1,1,5.79,0,2.9,2.9,0,1,1-5.79,0Zm5.24,0a2.34,2.34,0,1,0-4.69,0,2.34,2.34,0,1,0,4.69,0Z"/>
                                <path d="M115.78,190.73v-8.08h.55V184a2.72,2.72,0,0,1,2.47-1.43,2.95,2.95,0,0,1-.13,5.89,2.57,2.57,0,0,1-2.35-1.42v3.69Zm5.23-5.23a2.2,2.2,0,0,0-2.33-2.39,2.4,2.4,0,0,0,0,4.8A2.21,2.21,0,0,0,121,185.51Z"/>
                                <path d="M136.56,188.36v-3.42a1.76,1.76,0,0,0-1.82-1.87,1.8,1.8,0,0,0-1.83,1.9v3.38h-.57V185a1.83,1.83,0,1,0-3.66,0v3.38h-.57v-5.7h.53v.95a2,2,0,0,1,1.86-1.06,2.1,2.1,0,0,1,2.11,1.41,2.2,2.2,0,0,1,2.11-1.41,2.29,2.29,0,0,1,2.39,2.4v3.42Z"/>
                                <path d="M143.54,185.51a2.87,2.87,0,0,1,2.9-2.94,2.66,2.66,0,0,1,2.82,3.21h-5.14a2.24,2.24,0,0,0,2.32,2.11,2.68,2.68,0,0,0,2.05-.87l.4.32a3.13,3.13,0,0,1-2.46,1.1A2.8,2.8,0,0,1,143.54,185.51Zm5.21-.23a2.09,2.09,0,0,0-2.31-2.19,2.28,2.28,0,0,0-2.32,2.19Z"/>
                                <path d="M156.42,182.66v1a2.27,2.27,0,0,1,2-1.12,2.38,2.38,0,0,1,2.57,2.52v3.29h-.57v-3.28a1.83,1.83,0,0,0-2-2,2,2,0,0,0-2,2.08v3.17h-.57v-5.7Z"/>
                                <path d="M168.71,180.94v1.72h1.94v.47h-1.94v3.47c0,.77.16,1.32,1.05,1.32a2.12,2.12,0,0,0,.88-.23l.2.46a2.49,2.49,0,0,1-1.07.29c-1.21,0-1.6-.72-1.6-1.83v-3.47h-1.21v-.47h1.21V181Z"/>
                            </g>

                            <g class="craft">
                                <path d="M72.67,167.39a13.65,13.65,0,0,1-9.84,3.85c-9.62,0-13.69-6.62-13.72-13.35s4.37-13.65,13.72-13.65a13.36,13.36,0,0,1,9.51,4l-3.26,3.14a8.9,8.9,0,0,0-6.25-2.44c-6.25,0-9,4.66-8.92,9s2.52,8.77,8.92,8.77A9.53,9.53,0,0,0,69.34,164Z"/>
                                <path d="M98.38,170.65H92.57L85,162h-4.7v8.66H75.45V144.71c4.11,0,8.21,0,12.32,0,6.1,0,9.32,4.11,9.32,8.58,0,3.55-1.63,7.14-6.55,8.14l7.84,8.84ZM80.33,149.3v8.29h7.44c3.11,0,4.44-2.07,4.44-4.14a4.06,4.06,0,0,0-4.44-4.14Z"/>
                                <path d="M118.77,165.76H105.23L103,170.65H97.72l11.62-25.89h5.33l11.62,25.89h-5.33ZM112,150.19l-4.81,11h9.62Z"/>
                                <path d="M128.09,170.65V144.79H146.7v4.7H133v7.07h13v4.51H133v9.58Z"/>
                                <path d="M157.9,149.19h-8.21v-4.44H171v4.44h-8.21v21.46H157.9Z"/>
                            </g>

                        </svg>
                    </div></a>
                <nav class="main-nav" id="nav">
                    <ul class="main-nav__list">
                        <li class="main-nav__list-item"><a class="nav-active" href="<?= Url::to(['site/index']) ?>">главная</a></li>

                        <li class="main-nav__dropdown-menu">
                            <button type="button" class="btn--nav-dropdown" id="btn-nav-drop">Услуги <i class="carret"> </i></button>
                            <div class="main-nav__dropdown-content dropdown-content" id="nav-dropdown">
                                <a  href="#">Landing page</a>
                                <a class="nav-active" href="#">Корпоративный сайт</a>
                                <a href="#">Интернет-магазин</a>
                                <a href="#">Интерактивний сервис</a>
                                <a href="#">Дизайн</a>
                                <a href="#">Индивидуальное решение</a>
                            </div>
                        </li>

                        <li class="main-nav__list-item"><a href="<?= Url::to(['site/portfolio_inner']) ?>">портфолио</a></li>
                        <li class="main-nav__list-item"><a href="<?= Url::to(['site/blog']) ?>">блог</a></li>
                        <li class="main-nav__list-item"><a href="<?= Url::to(['site/contacts']) ?>">контакты</a></li>
                    </ul>

                    <div class="lang-mobile">
                        <a class="active-lang" href="#">RU</a>
                        <a href="#">UA</a>
                    </div>
                    <div class="phone-mobile">
                        <strong>+38 (097) 838-35-35</strong>
                    </div>

                </nav>
                <div class="select-wrap">
                    <button type="button" class="btn--lang-dropdown" id="btn--lang">RU <i class="carret"> </i></button>
                    <div class="select-content lang" id="lang-dropdown">
                        <a class="active-lang" href="#">RU</a>
                        <a href="#">UA</a>
                    </div>
                </div>
                <strong class="main-header__phone">+38 (097) 838-35-35</strong>
                <div class="main-nav__toogle" id="toogle-btn">
                    <span class="main-nav__toogle-item"></span>
                </div>
            </div>
        </div>
    </div>

</header>


<section class="contacts">
    <h3 class="section-title contacts-title">звязь с нами</h3>
    <div class="container">
        <div class="contacts__data">

            <div class="contacts-item">
                <b class="contacts-item__title">
                    Адрес:
                </b>
                <span class="contacts-item__text">Украина<br> г. Ровно, ул.Соборна 2а</span>
            </div>

            <div class="contacts-item">
                <b class="contacts-item__title">
                    Контакты
                </b>
                <div class="contacts__item-content">
                    <div class="contacts__item-wrap">
                        <span class="contacts__item-title">Skype:</span>
                        <strong>craftdevelop</strong>
                    </div>
                    <div class="contacts__item-wrap">
                        <span class="contacts__item-title">Viber/WhatsApp:</span>
                        <strong>+38 (097) 838-35-35</strong>
                    </div>
                    <div class="contacts__item-wrap">
                        <span class="contacts__item-title">E-mail:</span>
                        <strong>team@craftdevelop.com</strong>
                    </div>
                </div>

            </div>

            <div class="contacts-item">
                <b class="contacts-item__title">
                    Ми в соц. сетях
                </b>

                <div class="contacts__item-content">
                    <div class="contacts__item-wrap">
                        <a href="#" class="btn btn--link footer-top__social-link">Facebook</a>
                    </div>
                    <div class="contacts__item-wrap">
                        <a href="#" class="btn btn--link footer-top__social-link">Twitter</a>
                    </div>
                    <div class="contacts__item-wrap">
                        <a href="#" class="btn btn--link footer-top__social-link">Instagram</a>
                    </div>
                </div>

            </div>
        </div>

        <div class="contacts__ask-form">
            <b class="contacts__ask-form-title">Хотите задать вопрос?</b>
            <form action="#" method="post">
                <input type="text" placeholder="Имя">
                <input type="email" placeholder="E-mail">
                <textarea name="" id="" cols="30" rows="10" placeholder="Текст сообщения"></textarea>
                <button type="submit" class="btn btn--contacts"><span>Узнать больше</span></button>
            </form>
        </div>

    </div>
</section>


<div id="map">

</div>


<section class="team">
    <h3 class="section-title team-title">Команда craft</h3>
    <div class="container">
        <div class="team__item">
            <div class="team__img">
                <img width="255" height="255" src="img/ch.jpg" alt="">
            </div>
            <b class="team__title">Честер<br> Беннингтон</b>
            <span class="team__subtitle">ui/ux designer</span>
        </div>
        <div class="team__item">
            <div class="team__img">
                <img width="255" height="255" src="img/br.jpg" alt="">
            </div>
            <b class="team__title">Брэд<br> Делсон</b>
            <span class="team__subtitle">Full Stack C# Developer</span>
        </div>
        <div class="team__item">
            <div class="team__img">
                <img width="255" height="255" src="img/mik.jpg" alt="">
            </div>
            <b class="team__title">Майк<br> Шинода</b>
            <span class="team__subtitle">Front-end Developer</span>
        </div>
        <div class="team__item">
            <div class="team__img">
                <img width="255" height="255" src="img/blog_item.jpg" alt="">
            </div>
            <b class="team__title">Брэд<br> Питт</b>
            <span class="team__subtitle">Chief Technology Officer</span>
        </div>
        <div class="team__item">
            <div class="team__img">
                <img width="255" height="255" src="img/ch.jpg" alt="">
            </div>
            <b class="team__title">Честер<br> Беннингтон</b>
            <span class="team__subtitle">ui/ux designer</span>
        </div>
        <div class="team__item">
            <div class="team__img">
                <img width="255" height="255" src="img/br.jpg" alt="">
            </div>
            <b class="team__title">Брэд<br> Делсон</b>
            <span class="team__subtitle">Full Stack C# Developer</span>
        </div>
        <div class="team__item">
            <div class="team__img">
                <img width="255" height="255" src="img/mik.jpg" alt="">
            </div>
            <b class="team__title">Майк<br> Шинода</b>
            <span class="team__subtitle">Front-end Developer</span>
        </div>
        <div class="team__item">
            <div class="team__img">
                <img width="255" height="255" src="img/brad.jpg" alt="">
            </div>
            <b class="team__title">Брэд<br> Питт</b>
            <span class="team__subtitle">Chief Technology Officer</span>
        </div>
    </div>

</section>















<footer class="main-footer">

    <div class="container">

        <div class="column">
            <div class="footer-top">
                <div class="footer-top__contacts">

                    <b class="footer-top__contacts-title">
                        Контакты
                    </b>

                    <div class="footer-top__item-wrap">
                        <div class="footer-top__contacts-item">
                            <span class="footer-top__contacts-item-title">Skype:</span>
                            <strong>craftdevelop</strong>
                        </div>
                        <div class="footer-top__contacts-item">
                            <span class="footer-top__contacts-item-title">Viber/WhatsApp:</span>
                            <strong>+38 (097) 838-35-35</strong>
                        </div>
                        <div class="footer-top__contacts-item">
                            <span class="footer-top__contacts-item-title">E-mail:</span>
                            <strong>team@craftdevelop.com</strong>
                        </div>
                    </div>

                </div>

                <div class="footer-top__social">

                    <b class="footer-top__social-title">
                        Ми в соц. сетях
                    </b>

                    <div class="footer-top__social-wrap">
                        <div class="footer-top__social-item"><a href="#" class="btn btn--link footer-top__social-link">Facebook</a></div>
                        <div class="footer-top__social-item"><a href="#" class="btn btn--link footer-top__social-link">Twitter</a></div>
                        <div class="footer-top__social-item"><a href="#" class="btn btn--link footer-top__social-link">Instagram</a></div>
                    </div>

                </div>
            </div>

            <div class="footer-bot">
				<span class="footer-bot__law">
					Craft Development Все права защищены.
				</span>

                <a href="#" class="footer-bot__link">Политика конфиденциальности</a>
                <a href="#" class="footer-bot__link">Согласие с рассылкой</a>
                <a href="#" class="footer-bot__link">Отказ от ответственности</a>

            </div>
        </div>


        <div class="footer-logo">
            <object data="img/craft-logo-footer.svg" type="image/svg+xml"></object>
        </div>
    </div>

</footer>



<script>
    var map;
    function initMap() {
        var myLatlng = {lat: 50.617329, lng: 26.269077}
        map = new google.maps.Map(document.getElementById('map'), {
            center: myLatlng,
            zoom: 18,
            disableDefaultUI: true,
            zoomControl: true,
            fullscreenControl: true,
            scrollwheel: false

        });

        var marker = new google.maps.Marker({
            position: myLatlng,

        });

        marker.setMap(map);
    }
</script>



<script src="https://maps.googleapis.com/maps/api/js?key=AIzaSyCcnjMTNpQwQtyngvt1Ltw93rHucW_bQ_Q&callback=initMap" async defer></script>

<?php
FooterAsset::register($this);
?>
