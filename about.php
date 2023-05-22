<!DOCTYPE html>
<html lang="uk">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" type="text/css" href="./style.css">
    <title>WebStudio</title>
    <script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>

<script src="script.js"></script>
</head>
<body>
    <header>
        <nav>
<a href="./index.html" class="logo-text"><span class="initial">Web</span>Studio</a>
<ul class="menu">
    <li><a href="./index.html">Головна</a></li>
    <li><a href="./about.php">Про нас</a></li>
    <li><a href="./views/login.php?">Вхід</a></li>
</ul>

<ul class="mail">
    <li><a href="">info@devstudio.com</a></li>
    <li><a href="tel:+380961111111">+38 096 111 11 11</a></li>
</ul>
</nav>
<div class="mobile">
    <div>
        <span></span>
        <span></span>
        <span></span>
    </div>
    <nav>
        <ul class="menu">
            <li><a href="./index.html">Головна</a></li>
            <li><a href="./about.php">Про нас</a></li>
            <li><a href="./views/login.php?">Вхід</a></li>
        </ul>
    </nav>
</div>
    </header>
    <main>
      
<section class="s4">
            <h1>Про нас</h1>
<h2>Наша команда</h2>
<ul class="u3">
<li>
<img src="./images/5.jpg" alt="Учасник команди"  width="270" >  <h3>Ігор Дем'яненко</h3><p>Product Designer</p>
</li>
<li>
<img src="./images/6.jpg" alt="Учасник команди"  width="270"> 
<h3>Ольга Рєпіна</h3>
<p>Frontend Developer</p>

</li>
<li>
<img src="./images/7.jpg" alt="Учасник команди"  width="270"> 
<h3>Микола Тарасов</h3>
<p>Marketing</p>

</li>
<li>
<img src="./images/8.jpg" alt="Учасник команди"  width="270"> 
<h3>Михайло Єрмаков</h3>
<p>UI Designer</p>
</li>
</ul>



</section>

<section class="s2">
    <h2>Наші переваги</h2>
<ul class="my-list">
<li><h3>УВАГА ДО ДЕТАЛЕЙ</h3>
<p>Ідейні міркування, і навіть початок повсякденної роботи з формування позиції.</p>
</li>
<li>
    <h3>ПУНКТУАЛЬНІСТЬ </h3>
    <p>Завдання організації, особливо рамки і місце навчання кадрів тягне у себе. </p>
</li>
<li>
    <h3>ПЛАНУВАННЯ</h3>
    <p>Так само консультація з широким активом значною мірою зумовлює. </p>
</li>
<li>
    <h3>СУЧАСНІ ТЕХНОЛОГІЇ </h3>
    <p>Значимість цих проблем настільки очевидна, що реалізація планових завдань.</p>
</li>
</ul>

</section>

<section class="s3">
    <h2>Галерея</h2>
    <div class="wrapper">
        <input type="radio" name="point" id="slide1" checked>
        <input type="radio" name="point" id="slide2">
        <input type="radio" name="point" id="slide3">
    
        <div class="slider">
            <div class="slides slide1"></div>
            <div class="slides slide2"></div>
            <div class="slides slide3"></div>
        </div>
        <div class="controls">
            <label for="slide1"></label>
            <label for="slide2"></label>
            <label for="slide3"></label>
    
        </div>
    </div>
</section>


<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>
<script src="./main.js"></script>
</body>

</html>
</main>
<footer>
    <address>   
        <li><a href="./index.html" class="footer-logo"><span class="initial">Web</span>Studio</a></li>
        <ul> 
    <li><a href='https://goo.gl/maps/CPtrU1FHBa2aNyZL9' target='_blank' rel='noopener noreferrer nofollow'>м. Київ, пр-т Лесі
        Украінки, 26</a></li>
    <li><a href="mailto:info@devstudio.com" class="footer-mail">info@devstudio.com</a></li>
    <li><a href="tel:+380961111111" class="footer-num">+38 096 111 11 11</a></li>
    </ul>
    </address>
</footer>
</body>
</html>