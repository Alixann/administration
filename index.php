<?php require_once './functions/connect.php';?>
<?php

$sql = $pdo ->prepare("SELECT * FROM header ");
$sql ->execute();
$res=$sql->fetch(PDO::FETCH_ASSOC);

$mainpage = $pdo ->prepare("SELECT * FROM mainpage ");
$mainpage ->execute();
$result=$mainpage->fetch(PDO::FETCH_ASSOC);

$generalinfo = $pdo ->prepare("SELECT * FROM general_info");
$generalinfo ->execute();
$infores=$generalinfo->fetch(PDO::FETCH_ASSOC);

$news = $pdo ->prepare("SELECT * FROM news");
$news ->execute();
$newsres=$news->fetch(PDO::FETCH_ASSOC);

$footer = $pdo ->prepare("SELECT * FROM footer");
$footer ->execute();
$footerres=$footer->fetch(PDO::FETCH_ASSOC);
?>


<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <meta name ="description" content = "Описание страницы" <?php echo $res["description"]?>>

    <title><?php echo $res["title"]?></title>
    <link
      rel="stylesheet"
      type="text/css"
      href="https://necolas.github.io/normalize.css/8.0.1/normalize.css"
    />
    <link rel="stylesheet" href="./css/main.css" />
    <link rel="stylesheet" href="./css/adaptiv.css" />
    <link rel="stylesheet" href="./admin/admin.php" />
    <script defer src="./modal.js"></script>
    <script defer src="./js/search.js"></script>
  </head>
  <body>
    <header>
      <div class="header-logo">
        <img src="./img/gerb.png" />
      </div>
      <div class="container-header">
        <ul class="header-nav">
          <li class="header-nav-item">
            <svg
              width="16"
              height="17"
              viewBox="0 0 16 17"
              fill="none"
              xmlns="http://www.w3.org/2000/svg"
            >
              <path
                d="M5.77977 8.30096C6.29842 9.36129 7.15792 10.2169 8.2206 10.7307C8.29835 10.7675 8.38436 10.7835 8.47015 10.777C8.55595 10.7705 8.63857 10.7418 8.7099 10.6937L10.2746 9.65028C10.3438 9.60414 10.4235 9.57599 10.5063 9.56838C10.5891 9.56077 10.6725 9.57394 10.749 9.60671L13.6763 10.8613C13.7757 10.9035 13.8588 10.9769 13.9128 11.0705C13.9669 11.164 13.9892 11.2726 13.9762 11.3798C13.8837 12.1038 13.5304 12.7693 12.9826 13.2516C12.4347 13.7339 11.7299 14 11 14C8.74566 14 6.58365 13.1045 4.98959 11.5104C3.39553 9.91635 2.5 7.75434 2.5 5.5C2.50004 4.77011 2.76612 4.06526 3.24843 3.51742C3.73073 2.96959 4.39618 2.61634 5.12019 2.52381C5.22745 2.51083 5.33602 2.53306 5.42955 2.58715C5.52307 2.64124 5.59649 2.72426 5.63873 2.8237L6.89439 5.75357C6.92687 5.82935 6.9401 5.91199 6.93291 5.99413C6.92572 6.07626 6.89833 6.15535 6.85318 6.22434L5.81341 7.81307C5.76608 7.88454 5.7381 7.96706 5.73221 8.05257C5.72631 8.13809 5.7427 8.22367 5.77977 8.30096V8.30096Z"
                fill="#0000DE"
              />
            </svg>
            <?php echo $res["phone"]?>
          </li>
          <li class="header-nav-item">
            <div class="search">
              <div class="icon"></div>
              <div class="input">
                <input type="text" placeholder="Поиск" id="mySearch" />
              </div>
            </div>
          </li>
          <li>
            <span class="menu-btn"></span>
          </li>
        </ul>
        <button class="button" id="open-modal-btn">Войти</button>
      </div>
      <div class="modal" id="my-modal">
        <div class="modal__box">
          <button class="close-btn" id="close-my-modal-btn">
            <svg
              width="25"
              height="25"
              viewBox="0 0 32 30"
              fill="none"
              xmlns="http://www.w3.org/2000/svg"
            >
              <line
                x1="1.29305"
                y1="29.2926"
                x2="29.2929"
                y2="1.29279"
                stroke="black"
                stroke-width="2"
              />
              <line
                y1="-1"
                x2="39.5978"
                y2="-1"
                transform="matrix(-0.707107 -0.707107 -0.707107 0.707107 29.9998 29.9998)"
                stroke="black"
                stroke-width="2"
              />
            </svg>
          </button>
          <h2>Вход</h2>
          <form action="./admin/admin.php" method="post">
          <input type="text" name="login" placeholder="Введите ваш логин" />
          <input type="password" name="password" placeholder="Введите ваш пароль" />
          <a href="">Забыли пароль?</a>
          <button class="button" type="submit">Войти</button>
          </form>
        </div>
      </div>
    </header>
    <nav class="dropdownmenu">
      <ul>
        <li><a href="./index.php">Главная</a></li>
        <li class="subMenuItem">
          <a>Поселение </a>
          <ul id="submenu">
            <li><a href="">Общая информация</a></li>
            <li><a href="">История</a></li>
            <li><a href="./photogallery.html">Фотогалерея</a></li>
            <li><a href="">Социальная сфера</a></li>
          </ul>
        </li>
        <li class="subMenuItem">
          <a>Администрация</a>
          <ul id="submenu">
            <li><a href="./glava.html">Глава администрации</a></li>
            <li><a href="./document.html">Полномочия, задачи и функции</a></li>
            <li><a href="./document.html">Подведомственные организации</a></li>
            <li><a href="">Вакансии</a></li>
            <li><a href="./document.html">Отчеты</a></li>
            <li><a href="./contacts.html">Контакты</a></li>
          </ul>
        </li>
        <li class="subMenuItem">
          <a>Услуги</a>
          <ul id="submenu">
            <li><a href="./document.html">Утверждённые регламенты</a></li>
            <li><a href="./document.html">Проекты регламентов</a></li>
            <li><a href="">Реестр муниципальных услуг</a></li>
          </ul>
        </li>
        <li class="subMenuItem">
          <a>Обращения</a>
          <ul id="submenu">
            <li><a href="./document.html">Порядок и время приема</a></li>
            <li><a href="./document.html">Обзоры обращений лиц</a></li>
            <li><a href="./appeal-form.html">Создать обращение</a></li>
          </ul>
        </li>
      </ul>
    </nav>
    <main>
      <div class="bg"></div>
      <div class="main-page">
        <img src="./img/fon.png" class="background-image" alt="" />
        <h1><?php echo $result["name"]?></h1>
        <p>
        <?php echo $result["description"]?>
        </p>
        <a href="./appeal-form.html">
          <button class="button">Создать обращение</button></a
        >
      </div>
      <div class="general-info">
        <h2>Общие сведения</h2>
        <div class="general-info-container">
          <div class="main-info">
            <h3>Административный центр</h3>
            <p><?php echo $infores["name"]?></p>
            <h3>Население</h3>
            <p><?php echo $infores["people"]?></p>
            <h3>Географическое положение</h3>
            <p>
            <?php echo $infores["geography"]?>
            </p>
          </div>
          <div class="links">
            <h3>Полезные ссылки</h3>
            <ul>
              <li>
                <a href="https://sretensk.75.ru/" target="_blank">
                  <svg
                    width="25"
                    height="25"
                    viewBox="0 0 26 25"
                    fill="none"
                    xmlns="http://www.w3.org/2000/svg"
                  >
                    <path
                      fill-rule="evenodd"
                      clip-rule="evenodd"
                      d="M14.9383 6.25343H3.95289C3.09352 6.25343 2.39612 6.95181 2.39612 7.81239V21.3543C2.39612 22.2148 3.09352 22.9132 3.95289 22.9132H17.5071C18.3664 22.9132 19.0638 22.2148 19.0638 21.3543V10.4259H21.1466V21.8732C21.1466 23.5985 19.7477 24.9995 18.0242 25H3.4357C1.71227 25 0.313309 23.5985 0.313309 21.8732V7.29343C0.313309 5.56758 1.71227 4.16666 3.4357 4.16666H14.9383V6.25343Z"
                      fill="#A2A2A2"
                    />
                    <path
                      fill-rule="evenodd"
                      clip-rule="evenodd"
                      d="M25.3133 9.14239H23.1992V3.60998L8.47488 18.3333L6.97997 16.8385L21.7048 2.11404H16.1707V0H25.3122L25.3133 0.000528065V9.14239Z"
                      fill="#A2A2A2"
                    />
                  </svg>
                  <?php echo $infores["link"]?>
                </a>
              </li>
              <li>
                <a
                  href="https://m.rp5.ru/%D0%9F%D0%BE%D0%B3%D0%BE%D0%B4%D0%B0_%D0%B2_%D0%A8%D0%B8%D0%BB%D0%BA%D0%B8%D0%BD%D1%81%D0%BA%D0%BE%D0%BC_%D0%97%D0%B0%D0%B2%D0%BE%D0%B4%D0%B5"
                  target="_blank"
                >
                  <svg
                    width="25"
                    height="25"
                    viewBox="0 0 26 25"
                    fill="none"
                    xmlns="http://www.w3.org/2000/svg"
                  >
                    <path
                      fill-rule="evenodd"
                      clip-rule="evenodd"
                      d="M14.9383 6.25343H3.95289C3.09352 6.25343 2.39612 6.95181 2.39612 7.81239V21.3543C2.39612 22.2148 3.09352 22.9132 3.95289 22.9132H17.5071C18.3664 22.9132 19.0638 22.2148 19.0638 21.3543V10.4259H21.1466V21.8732C21.1466 23.5985 19.7477 24.9995 18.0242 25H3.4357C1.71227 25 0.313309 23.5985 0.313309 21.8732V7.29343C0.313309 5.56758 1.71227 4.16666 3.4357 4.16666H14.9383V6.25343Z"
                      fill="#A2A2A2"
                    />
                    <path
                      fill-rule="evenodd"
                      clip-rule="evenodd"
                      d="M25.3133 9.14239H23.1992V3.60998L8.47488 18.3333L6.97997 16.8385L21.7048 2.11404H16.1707V0H25.3122L25.3133 0.000528065V9.14239Z"
                      fill="#A2A2A2"
                    />
                  </svg>
                  <?php echo $infores["link2"]?>
                </a>
              </li>
              <li>
                <a href="">
                  <svg
                    width="25"
                    height="25"
                    viewBox="0 0 26 25"
                    fill="none"
                    xmlns="http://www.w3.org/2000/svg"
                  >
                    <path
                      fill-rule="evenodd"
                      clip-rule="evenodd"
                      d="M14.9383 6.25343H3.95289C3.09352 6.25343 2.39612 6.95181 2.39612 7.81239V21.3543C2.39612 22.2148 3.09352 22.9132 3.95289 22.9132H17.5071C18.3664 22.9132 19.0638 22.2148 19.0638 21.3543V10.4259H21.1466V21.8732C21.1466 23.5985 19.7477 24.9995 18.0242 25H3.4357C1.71227 25 0.313309 23.5985 0.313309 21.8732V7.29343C0.313309 5.56758 1.71227 4.16666 3.4357 4.16666H14.9383V6.25343Z"
                      fill="#A2A2A2"
                    />
                    <path
                      fill-rule="evenodd"
                      clip-rule="evenodd"
                      d="M25.3133 9.14239H23.1992V3.60998L8.47488 18.3333L6.97997 16.8385L21.7048 2.11404H16.1707V0H25.3122L25.3133 0.000528065V9.14239Z"
                      fill="#A2A2A2"
                    />
                  </svg>
                  <?php echo $infores["link3"]?>
                </a>
              </li>
            </ul>
          </div>
        </div>
      </div>
      <div class="public-info">
        <h2>Публичная информация</h2>
        <div class="public-info-container-1">
          <div class="block1">
            <div class="block1-container">
              <h3 class="title-block">Документы</h3>
              <h3>Документы сельского поселения «Шилко-Заводское»</h3>
              <p>
                Законодательные акты, информационные документы, постановления и
                распоряжения, иные документы
              </p>
              <a href="./document.html"
                ><button class="button">Подробнее</button></a
              >
            </div>
            <div class="img-container">
              <img src="./img/doc.png" />
            </div>
          </div>
          <div class="block2">
            <h3 class="title-block">Закупки</h3>
            <h3>Информация о закупках</h3>
            <p>
              План закупок, план-график закупок, извещения о проведении закупок,
              протоколы закупочных комиссий и др.
            </p>
            <button class="button">Подробнее</button>
          </div>
        </div>
        <div class="public-info-container-2">
          <div class="block3">
            <h3 class="title-block">Депутаты</h3>
            <h3>Условия регистрации кандидатов</h3>
            <p>
              Участие в организации и проведении публичных слушаний, опросов
              граждан и других мероприятиях и др.
            </p>
            <a href="./deputate.html"
              ><button class="button">Подробнее</button></a
            >
          </div>
          <div class="block4">
            <div class="block4-container">
              <h3 class="title-block">Противодействие коррупции</h3>
              <h3>
                Антикоррупционная политика сельского поселения «Шилко-Заводское»
              </h3>
              <p>
                Сведения о доходах, расходах, об имуществе и обязательствах
                муниципальных служащих
              </p>
              <button class="button">Подробнее</button>
            </div>
            <div class="img-container">
              <img src="./img/deputate.png" />
            </div>
          </div>
        </div>
      </div>
      <div class="new">
        <h2>Новости</h2>
        <a><p><u>Все новости</u></p></a>
        <div class="grid-container">
          <div class="large-block">
            <p class="date"> <?php echo $newsres["date"]?></p>
            <h3><?php echo $newsres["title"]?></h3>
            <p class="new-text">
            <?php echo $newsres["description"]?>
            </p>
          </div>
          <div class="small-block">
            <p class="date">15 мая 2024</p>
            <p class="new-text">
              Подпрограмма «Развитие малого и среднего предпринимательства»
            </p>
          </div>
          <div class="small-block">
            <p class="date">19 апреля 2024</p>
            <p class="new-text">
              ПАМЯТКА № 1 Об ответственности за преступления экстремистской и
              террористической направленности
            </p>
          </div>
          <div class="small-block">
            <p class="date">11 апреля 2024</p>
            <p class="new-text">
              Весенний лёд особенно опасен и играть категорически запрещено!!!
            </p>
          </div>
        </div>
      </div>
      <div class="other">
        <h2>Стронние ресурсы</h2>
        <ul>
          <li>
            <img src="./img/other1.png" /><a href="http://duma.gov.ru/" target="_blank" >Государственная дума</a>
          </li>
          <li>
            <img src="./img/other2.png" /> <a href="http://www.kremlin.ru/" target="_blank">Президент России</a>
          </li>
          <li>
            <img src="./img/other3.png" /> <a href="http://government.ru/" target="_blank">Правительство россии</a>
          </li>
          <li>
            <img src="./img/other4.png" /> <a href="https://www.gosuslugi.ru/" target="_blank">Портал гос. услуг</a>
          </li>
        </ul>
      </div>
    </main>
    <footer>
      <div class="footer-container">
        <div class="contacts">
          <img src="./img/gerb.png" />
          <p class="number"><?php echo $footerres["number"]?></p>
          <p><?php echo $footerres["email"]?></p>
          <p class="adress">
          <?php echo $footerres["adress"]?>
          </p>
          <p><?php echo $footerres["timework"]?></p>
          <ul>
            <li>
              <a href="./vk">
                <svg
                  width="43"
                  height="43"
                  viewBox="0 0 43 43"
                  fill="none"
                  xmlns="http://www.w3.org/2000/svg"
                >
                  <rect
                    width="43"
                    height="43"
                    rx="6"
                    transform="matrix(1 0 0 -1 0 43)"
                    fill="white"
                  />
                  <path
                    d="M14.0815 25.9023C13.0099 24.0958 12.6346 21.9603 13.0261 19.8967C13.4176 17.8332 14.549 15.9835 16.2077 14.695C17.8665 13.4066 19.9386 12.768 22.0349 12.8992C24.1311 13.0303 26.1074 13.9223 27.5926 15.4075C29.0778 16.8927 29.9698 18.8689 30.101 20.9652C30.2321 23.0615 29.5936 25.1336 28.3051 26.7924C27.0167 28.4511 25.167 29.5825 23.1034 29.974C21.0399 30.3655 18.9043 29.9902 17.0979 28.9187L17.0979 28.9186L14.119 29.7697C13.9957 29.8049 13.8653 29.8065 13.7412 29.7744C13.6172 29.7422 13.5039 29.6775 13.4133 29.5868C13.3227 29.4962 13.2579 29.383 13.2258 29.2589C13.1936 29.1348 13.1952 29.0044 13.2304 28.8811L14.0816 25.9022L14.0815 25.9023Z"
                    stroke="black"
                    stroke-linecap="round"
                    stroke-linejoin="round"
                  />
                  <path
                    d="M23.6665 26.5312C22.7209 26.5326 21.7843 26.3473 20.9104 25.9861C20.0366 25.6248 19.2426 25.0947 18.5739 24.4261C17.9053 23.7574 17.3752 22.9634 17.0139 22.0896C16.6527 21.2157 16.4674 20.2791 16.4688 19.3335C16.4709 18.6679 16.7369 18.0304 17.2085 17.5607C17.6801 17.091 18.3188 16.8276 18.9844 16.8281V16.8281C19.0935 16.8281 19.2008 16.857 19.2952 16.9118C19.3896 16.9666 19.4679 17.0454 19.522 17.1401L20.5724 18.9783C20.6358 19.0891 20.6684 19.2149 20.6671 19.3425C20.6657 19.4702 20.6304 19.5952 20.5647 19.7047L19.7211 21.1106C20.1551 22.0737 20.9263 22.8449 21.8894 23.2789V23.2789L23.2953 22.4353C23.4048 22.3696 23.5298 22.3343 23.6575 22.3329C23.7851 22.3316 23.9109 22.3642 24.0217 22.4276L25.8599 23.478C25.9546 23.5321 26.0334 23.6104 26.0882 23.7048C26.143 23.7992 26.1719 23.9065 26.1719 24.0156V24.0156C26.17 24.6805 25.9057 25.3177 25.4366 25.7887C24.9674 26.2598 24.3313 26.5266 23.6665 26.5312V26.5312Z"
                    stroke="black"
                    stroke-linecap="round"
                    stroke-linejoin="round"
                  />
                </svg>
              </a>
            </li>
            <li>
              <a href="">
                <svg
                  width="43"
                  height="43"
                  viewBox="0 0 43 43"
                  fill="none"
                  xmlns="http://www.w3.org/2000/svg"
                >
                  <rect
                    width="43"
                    height="43"
                    rx="6"
                    transform="matrix(1 0 0 -1 0 43)"
                    fill="white"
                  />
                  <path
                    d="M17.9063 22.1174L25.9848 29.2265C26.0783 29.3088 26.1915 29.3653 26.3134 29.3907C26.4353 29.416 26.5617 29.4092 26.6802 29.371C26.7987 29.3328 26.9052 29.2645 26.9894 29.1727C27.0735 29.0809 27.1324 28.9689 27.1602 28.8475L30.5396 14.1012C30.5688 13.9737 30.5626 13.8407 30.5218 13.7164C30.481 13.5921 30.4071 13.4814 30.3079 13.396C30.2088 13.3107 30.0883 13.254 29.9593 13.2321C29.8304 13.2102 29.6979 13.2239 29.5762 13.2717L12.9949 19.7858C12.8504 19.8425 12.7281 19.9446 12.6464 20.0766C12.5648 20.2087 12.528 20.3636 12.5418 20.5183C12.5555 20.6729 12.6189 20.819 12.7225 20.9346C12.8262 21.0502 12.9645 21.1291 13.1167 21.1595L17.9063 22.1174Z"
                    stroke="black"
                    stroke-linecap="round"
                    stroke-linejoin="round"
                  />
                  <path
                    d="M17.9062 22.1173L30.1351 13.2854"
                    stroke="black"
                    stroke-linecap="round"
                    stroke-linejoin="round"
                  />
                  <path
                    d="M21.9409 25.6679L19.1332 28.4755C19.0327 28.5761 18.9046 28.6445 18.7652 28.6722C18.6258 28.7 18.4813 28.6857 18.3499 28.6313C18.2186 28.5769 18.1064 28.4848 18.0274 28.3666C17.9484 28.2484 17.9063 28.1095 17.9062 27.9673V22.1174"
                    stroke="black"
                    stroke-linecap="round"
                    stroke-linejoin="round"
                  />
                </svg>
              </a>
            </li>
            <li>
              <a href="">
                <svg
                  width="43"
                  height="43"
                  viewBox="0 0 43 43"
                  fill="none"
                  xmlns="http://www.w3.org/2000/svg"
                >
                  <rect
                    width="43"
                    height="43"
                    rx="6"
                    transform="matrix(1 0 0 -1 0 43)"
                    fill="white"
                  />
                  <path
                    d="M21.5 13C19.0314 13 17.0172 15.0224 17.0172 17.501C17.0172 19.9796 19.0314 22.002 21.5 22.002C23.9686 22.002 25.9829 19.9796 25.9829 17.501C25.9829 15.0224 23.9686 13 21.5 13ZM21.5 14.2275C23.3079 14.2275 24.7603 15.6859 24.7603 17.501C24.7603 19.3161 23.3079 20.7745 21.5 20.7745C19.6922 20.7745 18.2398 19.3161 18.2398 17.501C18.2398 15.6859 19.6922 14.2275 21.5 14.2275ZM21.5 15.4551C20.8718 15.4551 20.3231 15.7137 19.9734 16.1088C19.6236 16.5039 19.4624 17.0066 19.4624 17.501C19.4624 17.9954 19.6236 18.4981 19.9734 18.8932C20.3231 19.2883 20.8718 19.5469 21.5 19.5469C22.1283 19.5469 22.6769 19.2883 23.0267 18.8932C23.3765 18.4981 23.5377 17.9954 23.5377 17.501C23.5377 17.0066 23.3765 16.5039 23.0267 16.1088C22.6769 15.7137 22.1283 15.4551 21.5 15.4551ZM21.5 16.6826C21.8227 16.6826 21.9872 16.782 22.1129 16.924C22.2386 17.066 22.3151 17.2794 22.3151 17.501C22.3151 17.7226 22.2386 17.936 22.1129 18.078C21.9872 18.22 21.8227 18.3194 21.5 18.3194C21.1774 18.3194 21.0128 18.22 20.8871 18.078C20.7614 17.936 20.685 17.7226 20.685 17.501C20.685 17.2794 20.7614 17.066 20.8871 16.924C21.0128 16.782 21.1774 16.6826 21.5 16.6826ZM17.8274 21.8182C17.2072 21.822 16.6007 22.139 16.2602 22.7061C15.7411 23.571 16.0237 24.7128 16.885 25.2339C17.4086 25.5506 17.967 25.7873 18.5382 25.9875L16.6836 27.9168C16.6779 27.9228 16.6724 27.9289 16.6669 27.9351C15.9985 28.6898 16.0672 29.8643 16.819 30.5349C17.5704 31.2053 18.7392 31.1367 19.4074 30.3822L19.3907 30.4006L21.5 28.2077L23.6101 30.4006L23.5934 30.3822C23.9532 30.7885 24.4595 31 24.9641 31C25.3967 31 25.8352 30.8448 26.1819 30.5357C26.9332 29.8649 27.0023 28.6905 26.3339 27.9359C26.3285 27.9294 26.3229 27.923 26.3172 27.9168L24.461 25.9883C25.0324 25.7881 25.5914 25.5506 26.1151 25.2339C26.976 24.7124 27.259 23.571 26.7399 22.7061C26.2214 21.8417 25.0842 21.558 24.2222 22.0787C22.5956 23.0624 20.4041 23.0625 18.777 22.0787C18.5616 21.9485 18.3291 21.8689 18.0933 21.8358C18.0049 21.8233 17.9161 21.8176 17.8274 21.8182ZM17.798 23.0401C17.9151 23.0346 18.0358 23.0634 18.1466 23.1304C20.1806 24.3602 22.8189 24.36 24.8526 23.1304C25.1489 22.9515 25.5148 23.0438 25.6924 23.3398C25.8701 23.6359 25.779 24.003 25.4838 24.1822C24.7752 24.6108 24.0027 24.918 23.1978 25.0996C23.0919 25.1235 22.9943 25.1753 22.9149 25.2496C22.8356 25.3239 22.7773 25.4181 22.7462 25.5225C22.7151 25.6269 22.7122 25.7377 22.7379 25.8436C22.7635 25.9495 22.8168 26.0466 22.8922 26.125L25.4218 28.7543C25.6483 29.0128 25.6269 29.388 25.37 29.6174C25.2505 29.724 25.1093 29.7725 24.9641 29.7725C24.7946 29.7725 24.6308 29.7066 24.5072 29.5671C24.5015 29.5605 24.4957 29.5542 24.4897 29.5479L21.9394 26.8978C21.8824 26.8386 21.8141 26.7916 21.7386 26.7595C21.6632 26.7273 21.582 26.7108 21.5 26.7108C21.4181 26.7108 21.3369 26.7273 21.2614 26.7595C21.1859 26.7916 21.1177 26.8386 21.0607 26.8978L18.5112 29.5479C18.5055 29.5539 18.4999 29.56 18.4945 29.5663C18.2653 29.825 17.8884 29.8472 17.6308 29.6174C17.3735 29.3878 17.3518 29.0096 17.5807 28.7511L20.1071 26.1242C20.1825 26.0458 20.2358 25.9487 20.2614 25.8428C20.2871 25.7369 20.2842 25.6261 20.2531 25.5217C20.2219 25.4173 20.1637 25.3231 20.0843 25.2488C20.005 25.1745 19.9073 25.1227 19.8014 25.0988C18.9969 24.9172 18.2241 24.6108 17.5154 24.1822C17.2201 24.0035 17.1291 23.6361 17.3069 23.3398C17.3959 23.1916 17.5319 23.0945 17.6826 23.0569C17.7202 23.0475 17.759 23.042 17.798 23.0401Z"
                    fill="black"
                  />
                </svg>
              </a>
            </li>
            <li>
              <a href="">
                <svg
                  width="43"
                  height="43"
                  viewBox="0 0 43 43"
                  fill="none"
                  xmlns="http://www.w3.org/2000/svg"
                >
                  <rect
                    width="43"
                    height="43"
                    rx="6"
                    transform="matrix(1 0 0 -1 0 43)"
                    fill="white"
                  />
                  <path
                    d="M23.4115 27.9182V24.4057C25.8131 24.7654 26.5723 26.6222 28.1015 27.9182H32C31.0253 25.7805 29.5711 23.8871 27.7462 22.3796C29.1462 20.4859 30.6323 18.7031 31.3592 16H27.8162C26.4269 18.0684 25.6946 20.4911 23.4115 22.0887V16H18.2692L19.4969 17.4918V22.8081C17.5046 22.5807 16.1585 18.9994 14.6992 16H11C12.3462 20.0521 15.1785 28.9444 23.4115 27.9182Z"
                    stroke="black"
                    stroke-linecap="round"
                    stroke-linejoin="round"
                  />
                </svg>
              </a>
            </li>
          </ul>
        </div>
        <div class="search-nav-footer">
          <div class="search-container">
            <svg
              width="24"
              height="24"
              viewBox="0 0 24 24"
              fill="none"
              xmlns="http://www.w3.org/2000/svg"
            >
              <path
                d="M10.8749 18.75C15.2242 18.75 18.7499 15.2242 18.7499 10.875C18.7499 6.52576 15.2242 3 10.8749 3C6.52567 3 2.99991 6.52576 2.99991 10.875C2.99991 15.2242 6.52567 18.75 10.8749 18.75Z"
                stroke="#6E9BB8"
                stroke-linecap="round"
                stroke-linejoin="round"
              />
              <path
                d="M16.4431 16.4438L20.9994 21.0001"
                stroke="#6E9BB8"
                stroke-linecap="round"
                stroke-linejoin="round"
              />
            </svg>
            <input type="text" placeholder="Поиск по услугам" />
          </div>
          <div class="nav-footer">
            <ul>
              <li class="title-li">Поселение</li>
              <li><a href="">Общая информация</a></li>
              <li><a href="">История</a></li>
              <li><a href="">Социальная сфера</a></li>
              <li><a href="">Фотогалерея</a></li>
              <li><a href="">Новости</a></li>
            </ul>
            <ul>
              <li class="title-li">Администрация</li>
              <li><a href="">Глава администрации</a></li>
              <li><a href="">Полномочия, задачи и функции</a></li>
              <li><a href="">Структура администрации</a></li>
              <li><a href="">Подведомственные организации</a></li>
              <li><a href="">Вакансии</a></li>
              <li><a href="">Контакты</a></li>
              <li><a href="">Отчеты</a></li>
            </ul>
            <ul>
              <li class="title-li">Услуги</li>
              <li><a href="">Утверждённые регламенты</a></li>
              <li><a href="">Проекты регламентов</a></li>
              <li><a href="">Реестр муниципальных услуг</a></li>
            </ul>
            <ul>
              <li class="title-li">Обращения</li>
              <li><a href="">Создать обращение</a></li>
              <li><a href="">Порядок и время приема</a></li>
              <li><a href="">Обзоры обращений лиц</a></li>
            </ul>
          </div>
        </div>
      </div>
    </footer>
  </body>
</html>
