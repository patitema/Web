<!DOCTYPE html>
<html lang="ru">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Каталог</title>
    <link rel="stylesheet" href="/Styles/Catalog.css">
    <link rel="php" href="./validation-form/check.php">
    <link rel="php" href="./validation-form/auth.php">
</head>
<body>
    <nav>
        <div class="container">
            <img class="logo" src="/Images/Logo.png" alt="">
            <ul class="PageList">
                <li><a href="/index.php">Главная</a></li>
                <li><a href="#">Каталог</a></li>
            </ul>
            <button class="login" onclick="showContainer()"><p>Войти</p></button>
        </div>
    </nav>
    <header>
    <div class="auth-window">
        <div class="container-auth-register">
            <div class="row">
                <div class="col">
                    <button class="exit" onclick="closeWindow()"><img src="" alt=""><span></span></button>
                    <h1>Регистрация</h1>
                    <form class="reg_form" action="/validation-form/check.php" method="post">
                    <input type="text" class="form-control" name="login" id="login" placeholder="Login">
                    <input type="password" class="form-control" name="password" id="password" placeholder="Password">
                    <input type="password" class="form-control" id="confirmPassword" name="confirmPassword" placeholder="Confirm password">
                    <button class="btn" type="submit"><p>Зарегистрироваться</p></button>
                    </form>
                    <button class="btn-sec" onclick="showContainer()"><p>Войти</p></button>
                </div>   
            </div>
        </div>
        <div class="container-auth-login">
            <div class="col">
                <button class="exit" onclick="closeWindow()"><img src="" alt=""><span></span></button>
                <h1>Вход</h1>
                <form class="auth_form" action="/validation-form/auth.php" method="post">
                    <input type="text" class="form-control" name="login" id="login" placeholder="Login">
                    <br>
                    <input type="password" class="form-control" name="password" id="password"   placeholder="Password">
                    <button class="btn" type="submit"><p>Войти</p></button>
                </form>
                <button class="btn-sec" onclick="showContainer_reg()"><p>Зарегистрироваться</p></button>
            </div>
        </div>
    </div>
      <div class="container">
        <div class="filter">
          <p class="filter-txt">Фильтры:</p>
          <p class="Complexity-txt">Сложность:</p>
          <div>
            <button onclick="toggleDropdown()">Любая</button>
            <ul class="Complexity-list" id="ComplexityList">
            <li onclick="selectOption(this)"><p>Любая</p></li>
            <li onclick="selectOption(this)"><p>Для начинающих</p></li>
            <li onclick="selectOption(this)"><p>Средний уровень</p></li>
            <li onclick="selectOption(this)"><p>Для профессионалов</p></li>
          </ul>
          </div>
        </div>
        <script src="/scripts/ShowComplexityList.js"></script>
    </header>
    <main>
      <div class="container">
        <ul class="menu"> 
          <li>
            <div class="li-head"><h2><a href="./aboutCurse.php">Курс  </a><a href="./aboutCurse.php">«Инженер по тестированию»</a></h2></div>
            <div class="li-main">
              <img src="/Images/Engener.png" alt="">
              <div class="description">
                <p>Узнаете, как составлять отчёты о результатах тестирования, искать ошибки в сервисах и понимать их структуру, проводить ручное тестирование продукта<br><br>Закрепите знания на практике: протестируете веб-приложение Yandex Metro по готовым чек-листам и тест-кейсам
                </p>
              </div>
            </div>
            <div class="li-foot">
              <button type="button" class="button_act"><a href="./aboutCurse.php">Запистаться</a></button>
              <a class="about_curse" href="./aboutCurse.php"><span>Узнать подробности</span></a>
              <p>Сложность:</p>
              <p class="li-Complexity-txt">для начинающих</p>
            </div>
          </li>
        </ul>
      </div> 
      </div>
      
    </main>
    <footer>
        <div class="container">
            <span></span>
            <ul class="foot-menu">
                <li><a href="">Задать вопрос</a></li>
                <li><a href="">Пользовательское соглашение</a></li>
                <li><a href="">Создать курс</a></li>
                <li><a href="">Контакты</a></li>
                <li><a href="./aboutCompany.php">О нас</a></li>
            </ul>
            <span></span>
            <p>© Simply-learn 2022–2024. Все права защищены.</p>
        </div>
    </footer>
    <script src="/scripts/authwindow.js"></script>
</body>
</html>