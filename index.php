<!DOCTYPE html>
<html lang="ru">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Главная</title>
    <link rel="stylesheet" href="./Styles/index.css">
    <link rel="php" href="./validation-form/check.php">
    <link rel="php" href="./validation-form/auth.php">
</head>
<body>
    <nav>
        <div class="container">
            <img class="logo" src="./Images/Logo.png" alt="">
            <ul class="PageList">
                <li><a href="#">Главная</a></li>
                <li><a href="./Pages/Catalog.php">Каталог</a></li>
            </ul>
            <button class="login" onclick="showContainer()"><p>Войти</p></button>
        </div>
    </nav>
    <header>
        <div class="container">
            <div class="background-blur"></div>
            <div class="shadow">
                <h1>Добро пожаловать!</h1>
                <h2>Simply-learn - IT компания занимающаяся продажей и продвижением IT курсов<br>
                    Работаем уже более 2-х лет и имеем больше 200 тысяч клиентов</h2>
            </div>
        </div>   
    </header>
    <div class="auth-window">
        <div class="container-auth-register">
            <div class="row">
                <div class="col">
                    <button class="exit" onclick="closeWindow()"><img src="" alt=""><span></span></button>
                    <h1>Регистрация</h1>
                    <form class="reg_form" action="./validation-form/check.php" method="post">
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
                <form class="auth_form" action="./validation-form/auth.php" method="post">
                    <input type="text" class="form-control" name="login" id="login" placeholder="Login">
                    <br>
                    <input type="password" class="form-control" name="password" id="password"   placeholder="Password">
                    <button class="btn" type="submit"><p>Войти</p></button>
                </form>
                <button class="btn-sec" onclick="showContainer_reg()"><p>Зарегистрироваться</p></button>
            </div>
        </div>
    </div>
    <main>
        <div class="container">
            <h2>Популярные направления</h2>
            <div class="container-menu">
                <ul class="menu">
                    <li class="menu-№1"><a href="#">Frontend</a></li>
                    <li class="menu-№2"><a href="#">Java</a></li>
                    <li class="menu-№3"><a href="#">Python</a></li>
                    <li class="menu-№4"><a href="#">PHP</a></li>
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
                <li><a href="./Pages/aboutCompany.php">О нас</a></li>
            </ul>
            <span></span>
            <p>© Simply-learn 2022–2024. Все права защищены.</p>
        </div>
    </footer>
    <script src="./scripts/authwindow.js"></script>
</body>
</html>