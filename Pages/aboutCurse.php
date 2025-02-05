<!DOCTYPE html>
<html lang="ru">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>О компании</title>
    <link rel="stylesheet" href="/Styles/aboutCurse.css">
    <link rel="php" href="./validation-form/check.php">
    <link rel="php" href="./validation-form/auth.php">
</head>
<body>
    <nav>
        <div class="container">
            <img class="logo" src="/Images/Logo.png" alt="">
            <ul class="PageList">
                <li><a href="/index.php">Главная</a></li>
                <li><a href="/Pages/Catalog.php">Каталог</a></li>
            </ul>
            <button class="login" onclick="showContainer()"><p>Войти</p></button>
        </div>
    </nav>
    <article>
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
                        <button type="button>" class="btn-sec" onclick="showContainer()"><p>Войти</p></button>
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
                    <button type="button>" class="btn-sec" onclick="showContainer_reg()"><p>Зарегистрироваться</p></button>
                </div>
            </div>
        </div>
    </article>
    <main>
        <div class="Container">
            <div class="main_img">
                <div class="main_txt">
                    <h2>Курс</h2>
                    <h2>«Инженер по тестированию»</h2>
                </div>
            </div>
            <div class="container_main">
                <div class="about_curse">
                    <div class="buttons">
                        <button class="btn_join" type="button>">
                        <a href="">Записаться</a>
                        <br>
                        <p>1400Р</p>
                        </button>
                        <button class="btn_more" type="button>">
                        <a href="">Задать вопрос</a> 
                        </button>
                    </div>
                    <div class="info">
                        <div class="info_head"><h3>О курсе</h3><div class="diff"><p>сложность:</p><p class="difficult">Для начинающих</p></div></span></div>
                        <div class="info_main">
                        <p>Узнаете, как составлять отчёты о результатах тестирования, искать ошибки в сервисах и понимать их структуру, проводить ручное тестирование продукта 
                        <br><br> 
                        Закрепите знания на практике: протестируете веб-приложение Yandex Metro по готовым чек-листам и тест-кейсам</p>
                        </div>
                    </div>
                </div>
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