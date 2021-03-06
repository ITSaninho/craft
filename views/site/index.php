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
<header class="main-header">
    <div class="main-header__top">
        <div class="container">
            <div class="main-header__top-inner">
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
                </div>
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


    <div class="main-header__start-home">
        <div class="container">
            <h1 class="hidden">Веб студия CraftDevelopment</h1>
            <div class="main-header__start-inner">
                <a href="#" class="main-header__main-logo">
                    <svg id="craft-logo" data-name="CraftDevelopment" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 220 220">
                        <defs><style>.cls-1{fill:#faac09;}</style></defs>
                        <title>CraftDevelopment</title>
                        <g class="bg">
                            <rect class="cls-1" width="220" height="220"/>
                        </g>
                        <g>
                            <path d="M205,205H15V15H205Zm-189.19-.73H204.23V15.77H15.77Z"/>
                        </g>

                        <g class="triangle">
                            <path d="M110,100.61a3.14,3.14,0,1,0-3.14-3.14A3.15,3.15,0,0,0,110,100.61Zm0-5.48a2.33,2.33,0,1,1-2.33,2.33A2.34,2.34,0,0,1,110,95.13Z"/>
                            <path d="M110,104.86a7.39,7.39,0,1,0-7.39-7.39A7.4,7.4,0,0,0,110,104.86Zm0-14a6.58,6.58,0,1,1-6.58,6.58A6.59,6.59,0,0,1,110,90.88Z"/>
                            <path d="M110,109.11A11.64,11.64,0,1,0,98.36,97.47,11.66,11.66,0,0,0,110,109.11Zm0-22.48A10.83,10.83,0,1,1,99.17,97.47,10.85,10.85,0,0,1,110,86.63Z"/>
                            <path d="M110,113.36A15.89,15.89,0,1,0,94.11,97.47,15.91,15.91,0,0,0,110,113.36Zm0-31A15.08,15.08,0,1,1,94.92,97.47,15.1,15.1,0,0,1,110,82.38Z"/>
                            <path d="M110,117.61A20.14,20.14,0,1,0,89.86,97.47,20.17,20.17,0,0,0,110,117.61Zm0-39.48A19.33,19.33,0,1,1,90.67,97.47,19.36,19.36,0,0,1,110,78.13Z"/>
                            <path d="M110,121.86A24.39,24.39,0,1,0,85.61,97.47,24.42,24.42,0,0,0,110,121.86Zm0-48A23.58,23.58,0,1,1,86.42,97.47,23.61,23.61,0,0,1,110,73.88Z"/>
                            <path d="M110,126.11A28.64,28.64,0,1,0,81.36,97.47,28.68,28.68,0,0,0,110,126.11Zm0-56.48A27.83,27.83,0,1,1,82.17,97.47,27.87,27.87,0,0,1,110,69.63Z"/>
                            <path d="M110,130.36A32.89,32.89,0,1,0,77.11,97.47,32.93,32.93,0,0,0,110,130.36Zm0-65A32.08,32.08,0,1,1,77.92,97.47,32.12,32.12,0,0,1,110,65.38Z"/>
                            <path d="M73.67,97.47a36.38,36.38,0,0,1,.54-6.2l-1.09,1.89a37,37,0,0,0,22.17,38.41h2.16A36.4,36.4,0,0,1,73.67,97.47Z"/>
                            <path d="M87.81,67.69l-1.1,1.91a36.25,36.25,0,0,1,46.58,0l-1.1-1.91a37.07,37.07,0,0,0-44.37,0Z"/>
                            <path d="M146.34,97.47a36.4,36.4,0,0,1-23.79,34.1h2.16a37,37,0,0,0,22.17-38.41l-1.09-1.89A36.38,36.38,0,0,1,146.34,97.47Z"/>
                            <path d="M151.25,100.72l-.72-1.25A40.59,40.59,0,0,1,132,131.56h1.46A41.4,41.4,0,0,0,151.25,100.72Z"/>
                            <path d="M69.47,99.47l-.72,1.25a41.4,41.4,0,0,0,17.82,30.84H88A40.59,40.59,0,0,1,69.47,99.47Z"/>
                            <path d="M110,56.88a40.32,40.32,0,0,1,18.54,4.5l-.74-1.28a41.33,41.33,0,0,0-35.61,0l-.74,1.28A40.32,40.32,0,0,1,110,56.88Z"/>
                            <path d="M79.7,131.56h1.23a44.83,44.83,0,0,1-15-26l-.63,1.08A45.65,45.65,0,0,0,79.7,131.56Z"/>
                            <path d="M110,52.63a44.62,44.62,0,0,1,15,2.58l-.61-1.06a45.46,45.46,0,0,0-28.73,0L95,55.21A44.62,44.62,0,0,1,110,52.63Z"/>
                            <path d="M139.06,131.56h1.23a45.65,45.65,0,0,0,14.41-24.87l-.63-1.08A44.83,44.83,0,0,1,139.06,131.56Z"/>
                            <path d="M98.67,48.88l-.55,1a49,49,0,0,1,23.76,0l-.55-1a49.53,49.53,0,0,0-22.65,0Z"/>
                            <path d="M145.26,131.56h1.12A49.9,49.9,0,0,0,157.74,112l-.56-1A49.09,49.09,0,0,1,145.26,131.56Z"/>
                            <path d="M62.82,111l-.56,1a49.9,49.9,0,0,0,11.37,19.61h1.12A49.09,49.09,0,0,1,62.82,111Z"/>
                            <path d="M60,115.93l-.52.89A54.16,54.16,0,0,0,68,131.56h1A53.36,53.36,0,0,1,60,115.93Z"/>
                            <path d="M160,115.93A53.35,53.35,0,0,1,151,131.56h1a54.16,54.16,0,0,0,8.53-14.74Z"/>
                            <path d="M110,44.13a53.41,53.41,0,0,1,9,.78L118.5,44a54,54,0,0,0-17,0l-.53.92A53.41,53.41,0,0,1,110,44.13Z"/>
                            <path d="M110,39.88a57.91,57.91,0,0,1,6.33.36l-.5-.87c-1.92-.19-3.86-.29-5.83-.29s-3.91.1-5.83.29l-.5.87A57.9,57.9,0,0,1,110,39.88Z"/>
                            <path d="M63.63,131.56a57.61,57.61,0,0,1-6.36-11l-.5.86a58.4,58.4,0,0,0,5.86,10.12Z"/>
                            <path d="M156.37,131.56h1a58.41,58.41,0,0,0,5.86-10.12l-.5-.86A57.61,57.61,0,0,1,156.37,131.56Z"/>
                            <path d="M106.74,34.9l-.49.85c1.24-.07,2.49-.12,3.75-.12s2.51,0,3.75.12l-.49-.85q-1.62-.08-3.26-.08T106.74,34.9Z"/>
                            <path d="M54.69,125.07l-.48.83a62.65,62.65,0,0,0,3.28,5.67h1A61.86,61.86,0,0,1,54.69,125.07Z"/>
                            <path d="M161.55,131.56h1a62.67,62.67,0,0,0,3.28-5.66l-.48-.83A61.86,61.86,0,0,1,161.55,131.56Z"/>
                            <path d="M167.82,129.42c-.4.72-.81,1.44-1.24,2.15h.93c.26-.44.52-.89.77-1.34Z"/>
                            <path d="M52.18,129.42l-.47.81c.25.45.51.9.77,1.34h.93C53,130.86,52.58,130.14,52.18,129.42Z"/>
                            <path d="M110,31.38c.42,0,.82,0,1.24,0l-.47-.82-.76,0-.76,0-.47.82C109.18,31.4,109.58,31.38,110,31.38Z"/>
                            <circle cx="110" cy="97.45" r="0.74"/>
                            <polygon points="50.94 131.56 51.82 130.03 52.71 131.56 50.94 131.56"/>
                            <polygon points="169.06 131.56 168.18 130.03 167.29 131.56 169.06 131.56"/>
                            <polygon points="110 29.27 109.12 30.78 110.88 30.78 110 29.27"/>
                        </g>

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
                </a>
                <b class="main-header__logo-slogan">lets <span class="orange-text">craft future</span> together</b>
                <h2 class="main-header__main-slogan">мы создаем качественные сайты которые конвертируют Ваши идеи в деньги</h2>

                <button type="button" class="btn btn--order main-header__order-btn btn--open-modal"><span>заказать</span></button>

            </div>
        </div>
    </div>



</header>


<section class="services">
    <h3 class="section-title services-title">услуги craft</h3>

    <div class="container">

        <div id="slider">
            <carousel-3d :perspective="0" :space="300" :display="3" :width="700" :height="375" :controls-visible="true">
                <slide :index="0">
                    <h2 class="slider__item-title">РАЗРАБОТКА ЛЕНДИНГ СТРАНИЦ С КОНВЕРСИЕЙ ДО 10%</h2>
                    <p class="slider__item-text">
                        Лендинг (от англ. Landing page), также называемый «посадочная страница» или «страница захвата лидов», — это одностраничный сайт, который идеально подходит, чтобы донести четко обозначенную мысль до аудитории.
                    </p>

                    <div class="slider-btn__inner">
                        <button type="button" class="btn btn--slider btn--open-modal"><span>заказать</span></button>
                        <a href="#" class="btn btn--slider"><span>узнать больше</span></a>
                    </div>
                </slide>
                <slide :index="1">
                    <h2 class="slider__item-title">РАЗРАБОТКА ЛЕНДИНГ СТРАНИЦ С КОНВЕРСИЕЙ ДО 20%</h2>
                    <p class="slider__item-text">
                        Лендинг (от англ. Landing page), также называемый «посадочная страница» или «страница захвата лидов», — это одностраничный сайт, который идеально подходит, чтобы донести четко обозначенную мысль до аудитории.
                    </p>

                    <div class="slider-btn__inner">
                        <button type="button" class="btn btn--slider btn--open-modal"><span>заказать</span></button>
                        <a href="#" class="btn btn--slider"><span>узнать больше</span></a>
                    </div>
                </slide>
                <slide :index="2">
                    <h2 class="slider__item-title">РАЗРАБОТКА ЛЕНДИНГ СТРАНИЦ С КОНВЕРСИЕЙ ДО 30%</h2>
                    <p class="slider__item-text">
                        Лендинг (от англ. Landing page), также называемый «посадочная страница» или «страница захвата лидов», — это одностраничный сайт, который идеально подходит, чтобы донести четко обозначенную мысль до аудитории.
                    </p>

                    <div class="slider-btn__inner">
                        <button type="button" class="btn btn--slider btn--open-modal"><span>заказать</span></button>
                        <a href="#" class="btn btn--slider"><span>узнать больше</span></a>
                    </div>
                </slide>
                <slide :index="3">
                    <h2 class="slider__item-title">РАЗРАБОТКА ЛЕНДИНГ СТРАНИЦ С КОНВЕРСИЕЙ ДО 40%</h2>
                    <p class="slider__item-text">
                        Лендинг (от англ. Landing page), также называемый «посадочная страница» или «страница захвата лидов», — это одностраничный сайт, который идеально подходит, чтобы донести четко обозначенную мысль до аудитории.
                    </p>

                    <div class="slider-btn__inner">
                        <button type="button" class="btn btn--slider btn--open-modal"><span>заказать</span></button>
                        <a href="#" class="btn btn--slider"><span>узнать больше</span></a>
                    </div>
                </slide>
                <slide :index="4">
                    <h2 class="slider__item-title">РАЗРАБОТКА ЛЕНДИНГ СТРАНИЦ С КОНВЕРСИЕЙ ДО 50%</h2>
                    <p class="slider__item-text">
                        Лендинг (от англ. Landing page), также называемый «посадочная страница» или «страница захвата лидов», — это одностраничный сайт, который идеально подходит, чтобы донести четко обозначенную мысль до аудитории.
                    </p>

                    <div class="slider-btn__inner">
                        <button type="button" class="btn btn--slider btn--open-modal"><span>заказать</span></button>
                        <a href="#" class="btn btn--slider"><span>узнать больше</span></a>
                    </div>
                </slide>
                <slide :index="5">
                    <h2 class="slider__item-title">РАЗРАБОТКА ЛЕНДИНГ СТРАНИЦ С КОНВЕРСИЕЙ ДО 60%</h2>
                    <p class="slider__item-text">
                        Лендинг (от англ. Landing page), также называемый «посадочная страница» или «страница захвата лидов», — это одностраничный сайт, который идеально подходит, чтобы донести четко обозначенную мысль до аудитории.
                    </p>

                    <div class="slider-btn__inner">
                        <button type="button" class="btn btn--slider btn--open-modal"><span>заказать</span></button>
                        <a href="#" class="btn btn--slider"><span>узнать больше</span></a>
                    </div>
                </slide>
            </carousel-3d>

            <ul class="slider-indicator">
                <li class="active">01</li>
                <li>02</li>
                <li>03</li>
                <li>04</li>
                <li>05</li>
                <li>06</li>
            </ul>


        </div>

        <div class="services__mobile">

            <div class="work__item services__item">
                <div class="work__item-wrap services__item-wrap">
                    <strong class="work__item-title services__item-title">Разработка лендинг страниц c конверсией до 30%</strong>
                </div>
                <div class="work__item-text">
                    <div class="slider-btn__inner">
                        <button type="button" class="btn btn--slider"><span>заказать</span></button>
                        <a href="#" class="btn btn--slider"><span>узнать больше</span></a>
                    </div>
                </div>
            </div>
            <div class="work__item services__item">
                <div class="work__item-wrap services__item-wrap">
                    <strong class="work__item-title services__item-title">Разработка лендинг страниц c конверсией до 30%</strong>
                </div>
                <div class="work__item-text">
                    <div class="slider-btn__inner">
                        <button type="button" class="btn btn--slider"><span>заказать</span></button>
                        <a href="#" class="btn btn--slider"><span>узнать больше</span></a>
                    </div>
                </div>
            </div>
            <div class="work__item services__item">
                <div class="work__item-wrap services__item-wrap">
                    <strong class="work__item-title services__item-title">Разработка лендинг страниц c конверсией до 30%</strong>
                </div>
                <div class="work__item-text">
                    <div class="slider-btn__inner">
                        <button type="button" class="btn btn--slider"><span>заказать</span></button>
                        <a href="#" class="btn btn--slider"><span>узнать больше</span></a>
                    </div>
                </div>
            </div>
            <div class="work__item services__item">
                <div class="work__item-wrap services__item-wrap">
                    <strong class="work__item-title services__item-title">Разработка лендинг страниц c конверсией до 30%</strong>
                </div>
                <div class="work__item-text">
                    <div class="slider-btn__inner">
                        <button type="button" class="btn btn--slider"><span>заказать</span></button>
                        <a href="#" class="btn btn--slider"><span>узнать больше</span></a>
                    </div>
                </div>
            </div>
            <div class="work__item services__item">
                <div class="work__item-wrap services__item-wrap">
                    <strong class="work__item-title services__item-title">Разработка лендинг страниц c конверсией до 30%</strong>
                </div>
                <div class="work__item-text">
                    <div class="slider-btn__inner">
                        <button type="button" class="btn btn--slider"><span>заказать</span></button>
                        <a href="#" class="btn btn--slider"><span>узнать больше</span></a>
                    </div>
                </div>
            </div>
            <div class="work__item services__item">
                <div class="work__item-wrap services__item-wrap">
                    <strong class="work__item-title services__item-title">Разработка лендинг страниц c конверсией до 30%</strong>
                </div>
                <div class="work__item-text">
                    <div class="slider-btn__inner">
                        <button type="button" class="btn btn--slider"><span>заказать</span></button>
                        <a href="#" class="btn btn--slider"><span>узнать больше</span></a>
                    </div>
                </div>
            </div>
            <div class="work__item services__item">
                <div class="work__item-wrap services__item-wrap">
                    <strong class="work__item-title  services__item-title">Разработка лендинг страниц c конверсией до 30%</strong>
                </div>
                <div class="work__item-text">
                    <div class="slider-btn__inner">
                        <button type="button" class="btn btn--slider"><span>заказать</span></button>
                        <a href="#" class="btn btn--slider"><span>узнать больше</span></a>
                    </div>
                </div>
            </div>


        </div>


    </div>
</section>

<section class="portfolio">
    <div class="container-fluid">
        <h3 class="section-title portfolio-title">наши работы</h3>
        <div class="portfolio__inner">
            <ul class="portfolio__list">
                <li class="portfolio__item">
                    <a href="#" target="_blank">
                        <img src="img/1.png" alt="">
                        <div class="portfolio__item-background"></div>
                        <div class="portfolio__item-descr">
                            <h4 class="portfolio__item-title">azurite</h4>
                            <p class="portfolio__item-text">Полиграфия</p>
                        </div>
                    </a>
                </li>
                <li class="portfolio__item">
                    <a href="#" target="_blank">
                        <?php //echo Html::img('/web/img/1.png') ?>
                        <img src="img/2.png" alt="">
                        <div class="portfolio__item-background"></div>
                        <div class="portfolio__item-descr">
                            <h4 class="portfolio__item-title">azurite</h4>
                            <p class="portfolio__item-text">Полиграфия</p>
                        </div>
                    </a>
                </li>
                <li class="portfolio__item">
                    <a href="#" target="_blank">
                        <img src="img/3.png" alt="">
                        <div class="portfolio__item-background"></div>
                        <div class="portfolio__item-descr">
                            <h4 class="portfolio__item-title">azurite</h4>
                            <p class="portfolio__item-text">Полиграфия</p>
                        </div>
                    </a>
                </li>
                <li class="portfolio__item">
                    <a href="#" target="_blank">
                        <img src="img/4.png" alt="">
                        <div class="portfolio__item-background"></div>
                        <div class="portfolio__item-descr">
                            <h4 class="portfolio__item-title">azurite</h4>
                            <p class="portfolio__item-text">Полиграфия</p>
                        </div>
                    </a>
                </li>
                <li class="portfolio__item">
                    <a href="#" target="_blank">
                        <img src="img/5.png" alt="">
                        <div class="portfolio__item-background"></div>
                        <div class="portfolio__item-descr">
                            <h4 class="portfolio__item-title">azurite</h4>
                            <p class="portfolio__item-text">Полиграфия</p>
                        </div>
                    </a>
                </li>
                <li class="portfolio__item">
                    <a href="#" target="_blank">
                        <img src="img/6.png" alt="">
                        <div class="portfolio__item-background"></div>
                        <div class="portfolio__item-descr">
                            <h4 class="portfolio__item-title">azurite</h4>
                            <p class="portfolio__item-text">Полиграфия</p>
                        </div>
                    </a>
                </li>
                <li class="portfolio__item">
                    <a href="#" target="_blank">
                        <img src="img/1.png" alt="">
                        <div class="portfolio__item-background"></div>
                        <div class="portfolio__item-descr">
                            <h4 class="portfolio__item-title">azurite</h4>
                            <p class="portfolio__item-text">Полиграфия</p>
                        </div>
                    </a>
                </li>
                <li class="portfolio__link">
                    <a class="btn btn--link btn--portfolio" href="portfolio_inner.html">
                        перейти в портфолио
                    </a>
                </li>
            </ul>
        </div>
    </div>
</section>

<section class="blog">
    <h3 class="section-title blog-title">craft блог</h3>
    <div class="container">


        <article class="blog__article">
            <div class="blog__article-img">
                <a href="blog_item.html">
                    <img src="img/img.jpg" width="270" height="288" alt="">
                </a>
            </div>
            <div class="blog__article-content">
                <strong class="blog__article-tag">design</strong>
                <h5 class="blog__article-title">вначале было лого</h5>
                <p class="blog__article-text">Создание логотипа – только небольшая часть брэндинга, который на сегодняшний день охватывает огромный массив разнообразных пунктов от дизайна интерьера главного офиса фирмы до «голоса». Иначе говоря, посыла, который активнее всего звучит в соцсетях.</p>
                <div class="blog__item-inner">
                    <a href="blog_item.html" class="btn btn--article"><span>читать далее</span></a>
                    <div class="blog__article-info">
                           <span class="blog__article-date">
                              <object data="img/date.svg" type="image/svg+xml"></object>
                              24.05.2017
                          </span>
                          <span class="blog__article-veis">
                           <object data="img/veiws.svg" type="image/svg+xml"></object>
                           35
                       </span>
                       <span class="blog__article-commnet">
                           <object data="img/comment.svg" type="image/svg+xml"></object>
                           1
                       </span>
                    </div>
                </div>
            </div>
        </article>
        <article class="blog__article">
            <div class="blog__article-img">
                <a href="blog_item.html">
                    <img src="img/img.jpg" width="270" height="288" alt="">
                </a>
            </div>
            <div class="blog__article-content">
                <strong class="blog__article-tag">design</strong>
                <h5 class="blog__article-title">вначале было лого</h5>
                <p class="blog__article-text">Создание логотипа – только небольшая часть брэндинга, который на сегодняшний день охватывает огромный массив разнообразных пунктов от дизайна интерьера главного офиса фирмы до «голоса». Иначе говоря, посыла, который активнее всего звучит в соцсетях.</p>
                <div class="blog__item-inner">
                    <a href="blog_item.html" class="btn btn--article"><span>читать далее</span></a>
                    <div class="blog__article-info">
                           <span class="blog__article-date">
                              <object data="img/date.svg" type="image/svg+xml"></object>
                              24.05.2017
                          </span>
                          <span class="blog__article-veis">
                           <object data="img/veiws.svg" type="image/svg+xml"></object>
                           35
                       </span>
                       <span class="blog__article-commnet">
                           <object data="img/comment.svg" type="image/svg+xml"></object>
                           1
                       </span>
                    </div>
                </div>
            </div>
        </article>
        <article class="blog__article">
            <div class="blog__article-img">
                <a href="blog_item.html">
                    <img src="img/img.jpg" width="270" height="288" alt="">
                </a>
            </div>
            <div class="blog__article-content">
                <strong class="blog__article-tag">design</strong>
                <h5 class="blog__article-title">вначале было лого</h5>
                <p class="blog__article-text">Создание логотипа – только небольшая часть брэндинга, который на сегодняшний день охватывает огромный массив разнообразных пунктов от дизайна интерьера главного офиса фирмы до «голоса». Иначе говоря, посыла, который активнее всего звучит в соцсетях.</p>
                <div class="blog__item-inner">
                    <a href="blog_item.html" class="btn btn--article"><span>читать далее</span></a>
                    <div class="blog__article-info">
                           <span class="blog__article-date">
                              <object data="img/date.svg" type="image/svg+xml"></object>
                              24.05.2017
                          </span>
                          <span class="blog__article-veis">
                           <object data="img/veiws.svg" type="image/svg+xml"></object>
                           35
                       </span>
                       <span class="blog__article-commnet">
                           <object data="img/comment.svg" type="image/svg+xml"></object>
                           1
                       </span>
                    </div>
                </div>
            </div>
        </article>

        <a class="btn btn--link btn--blog" href="#">показать больше</a>
    </div>

</section>

<section class="choose-us">
    <h3 class="section-title choose-title">почему мы?</h3>
    <div class="container">
        <p class="choose-us__text">
            Наша основная цель - построить мост через пропасть, что существует между качеством и совершенством проектов больших компаний и шаблонными, порой нелепыми, проектами малого бизнеса.<br>
            <br>
            Уникальный, влиятельный дизайн и его реализация в интернете от настоящих профессионалов, который способен с ювелирной точностью донести Ваше послание к потребителю и подтолкнуть его к необходимому именно Вам действию, обязательно станет залогом успешности Вашего проекта в интернете.
        </p>
        <div class="choose-us__img">
            <object data="img/craft-logo.svg" type="image/svg+xml"></object>
        </div>
    </div>
</section>


<section class="work">
    <h3 class="section-title work-title">как мы работаем?</h3>
    <div class="container">
        <div class="work__item">
            <div class="work__item-wrap">
                <b class="work__item-number">01</b>
                <strong class="work__item-title">Первый контакт</strong>
            </div>
            <p class="work__item-text">Мы онлайн или вживую обсуждаем Ваш проект и что вы хотите получить в результате нашего сотрудничества.</p>
        </div>
        <div class="work__item">
            <div class="work__item-wrap">
                <b class="work__item-number">02</b>
                <strong class="work__item-title">Коммерческое предложение</strong>
            </div>
            <p class="work__item-text">Мы сформируем для Вас полный пакет услуг, который готовы предоставить для успешной реализазии Вашего проекта, с указанием конкретных этапов работ и их таймлайны.</p>
        </div>
        <div class="work__item">
            <div class="work__item-wrap">
                <b class="work__item-number">03</b>
                <strong class="work__item-title">Доступ к команде</strong>
            </div>
            <p class="work__item-text">После акцептирования Договора, Вы получаете доступ к нашему уникальному сервису Craft Client Console, где будет проходить дальнейшее общение с исполнителями проекта.</p>
        </div>
        <div class="work__item">
            <div class="work__item-wrap">
                <b class="work__item-number">04</b>
                <strong class="work__item-title">Время волшебства</strong>
            </div>
            <p class="work__item-text">Мы начинаем работу и делаем все, чтобы Вы получили идеальный продукт вовремя и Ваши клиенты были в восторге от нашей работы</p>
        </div>
        <div class="work__item">
            <div class="work__item-wrap">
                <b class="work__item-number">05</b>
                <strong class="work__item-title">Согласования и правки</strong>
            </div>
            <p class="work__item-text">Онлайн согласования и актуальные корректировки всех деталей проекта будут проходить легко и удобно для Вас с помощью нашего сервиса Craft Client Console.</p>
        </div>
        <div class="work__item">
            <div class="work__item-wrap">
                <b class="work__item-number">06</b>
                <strong class="work__item-title">Почти финал</strong>
            </div>
            <p class="work__item-text">Мы сверяем выполненные работы и сроки их исполнения согласно полному пакету услуг, утверждаем окончательную смету и Ваш проект готов к старту.</p>
        </div>
        <div class="work__item">
            <div class="work__item-wrap">
                <b class="work__item-number">07</b>
                <strong class="work__item-title">Вперед к успеху</strong>
            </div>
            <p class="work__item-text">Торжественный и волнующий запуск проекта! Ваше путешествие к успеху уверенно двигается в правильном направлении с твердым убеждением идеально сделанной вместе работой!</p>
        </div>
    </div>

</section>


<div class="ask">
    <div class="container">
        <strong class="ask__title">ПОЛУЧИТЕ БЕСПЛАТНУЮ КОНСУЛЬТАЦИЮ НАШЕГО СПЕЦИАЛИСТА</strong>
        <p class="ask__text">Имеете крутую идею или же ищете новые пути для развития своего бизнеса в интернете?</p>
        <button type="button" class="btn btn--ask btn--open-modal"><span>задать вопрос</span></button>
    </div>
</div>


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

<div class="modal" id="modal-order">
    <div class="modal__inner">
        <b class="modal__title">Есть вопрос?</b>
        <p class="modal__text">напишите нам и мы свяжемся с Вами в течении 30 минут</p>
        <form action="#" method="post" class="modal__form">
            <input type="text" name="user-name" placeholder="Как Вас зовут?">
            <input type="mail" name="user-mail" placeholder="Ваш e-mail">
            <textarea name="user-message"  rows="5" placeholder="Текст сообщения"></textarea>
            <button type="submit" class="btn btn--modal"><span>Написать</span></button>
        </form>
        <button type="button" class="btn--modal-close">Закрыть</button>
        <p class="modal__license">Отправляя заявку вы даете соглашение на <br>
            обработку ваших персональных данных.<br>
            ПОЛИТИКА КОНФИДЕНЦИАЛЬНОСТИ
        </p>
    </div>
</div>
<div class="modal-overlay"></div>

<?php
FooterAsset::register($this);
?>
