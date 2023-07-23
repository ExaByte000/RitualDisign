<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Ритуал Дизайн</title>
    <link rel="stylesheet" href="assets/css/main.css">
    <script src="assets/js/jquery-3.4.1.min.js"></script>
    <script src="assets/js/script.js"></script>
</head>

<body>
<header>
    <nav style="margin-left: 26%">
        <ul class="one">
            <div>
                <li><a href="#">Главная</a></li>
                <li class="dropdown">
                    <a href="#">Товары</a>
                    <ul class="dropdown-menu">
                        <li><a href="#" class="menu-item2">Гробы</a></li>
                        <li><a href="#" class="menu-item2">Венки</a></li>
                        <li><a href="#" class="menu-item2">Кресты</a></li>
                        <li><a href="#" class="menu-item2">Ковчеги</a></li>
                    </ul>
                </li>
                <li><a href="#services" class="menu-item">Венки</a></li>
            </div>
            <div>
                <li><a href="#services" class="menu-item">Кресты и гробы</a></li>
                <li><a href="#services" class="menu-item">Швейные изделия</a></li>
                <li><a href="#">Контакты</a></li>
            </div>
        </ul>
    </nav>
    <section class="card">
        <img src="assets/images/card.png" alt="">
        <p class="count"></p>
    </section>
    <section class="items">
        <section class="tovar">

        </section>
        <section class="item">
            <input class="phone" type="text" placeholder="Тел." name="phone" required>
            <p class="create">Оформить заказ</p>
        </section>
    </section>
</header>
<div class="content">
    <div class="hero">
        <a href="index.php" style="text-decoration: none; color: black; height: 101px">
            <div>
                <img src="assets/images/logo_black.png" style="width: 100px; height: 50px" alt="">
                <h2>Ритуал Дизайн</h2>
            </div>
        </a>
        <h2 class="inf">Изготовление и доставка ритуальных венков и корзин из искусственных цветов в Екатеринбурге</h2>
        <div>
            <div class="info">
                <h3>Телефон</h3>
                <p><a style="color: #383838" href="tel:+7 (908) 904-52-62">+7 (908) 904-52-62</a></p>
            </div>
            <div class="info">
                <h3>Адрес</h3>
                <p><a style="color: #383838" href="#">г. Екатеринбург ул. Маневровая, 31</a></p>
            </div>
        </div>
    </div>
    <div class="company-description">
        <h2>О Ритуал Дизайн</h2>
        <p> Мы являемся авторитетной компанией, специализирующейся на предоставлении исключительных услуг и продуктов, созданных для того, чтобы чтить и увековечивать самые важные моменты жизни. Делая акцент на вечной элегантности и тщательном внимании к деталям, мы специализируемся на оптовых и розничных продажах ритуальных венков, искусственных цветов, швейных изделий и многого другого.</p>
        <p class="text">Почему стоит выбрать Ритуал Дизайн:</p>
        <div class="ul">
            <ul>
                <div><img src="assets/images/boxes.png" alt=""><li>Широкий выбор высококачественных ритуальных товаров</li></div>
                <div><img src="assets/images/master.png" alt=""><li>Искусное мастерство и внимание к деталям</li></div>
                <div><img src="assets/images/parameters.png" alt=""><li>Настраиваемые параметры для удовлетворения ваших потребностей</li></div>
            </ul>
            <ul>
                <div><img src="assets/images/pc.png" alt=""><li>Удобный онлайн-заказ и безопасная оплата</li></div>
                <div><img src="assets/images/delivery.png" alt=""><li>Своевременная доставка и профессиональные ритуальные услуги</li></div>
                <div><img src="assets/images/user.png" alt=""><li>Сострадательный и знающий персонал</li></div>
            </ul>
        </div>
        <p>Откройте для себя идеальные продукты и услуги, чтобы создать значимую и достойную дань уважения.</p>
    </div>
    <div class="featured-products">
        <h2>Рекомендуемые товары</h2>
        <div class="products">
            <? include ("featured products.php"); ?>
            </div>
        </div>
    <div class="services">
        <h2 id="services">Наши услуги</h2>
        <p style="text-align: center" >Для заказа и обсуждения деталей услуги звоните на номер <a style="color: black" href="tel:+7 (908) 904-52-62">+7 (908) 904-52-62</a></p>
            <div class="service">
                <div>
                    <h3>Оптовая и розничная продажа ритуальных венков и аксессуаров</h3>
                    <img src="assets/images/venok.jpg" alt="">
                    <p>Мы предлагаем широкий выбор изысканно украшенных ритуальных венков и аксессуаров для оптовых и розничных покупателей, идеально подходящих для религиозных церемоний или поминовения близких. Наши элегантные венки воплощают торжественность и уважение, сопровождаемые лентами, украшениями и персонализированными надписями в честь усопшего.</p>
                </div>
                <div>
                    <h3>Кресты и лакированные гробы</h3>
                    <img src="assets/images/coffin%20service.jpg" alt="">
                    <p>Мы предлагаем кресты и лакированные гробы в честь усопших, обеспечивая комфорт и умиротворение во время их последнего прощания. наши кресты олицетворяют веру и надежду, в то время как наши прочные гробы служат достойным местом упокоения, отражая эстетическую привлекательность и сострадание.</p>
                </div>
                <div>
                    <h3>Швейные изделия для ритуальных целей</h3>
                    <img src="assets/images/shveinie.jpg" alt="">
                    <p>Наши квалифицированные мастера создают целенаправленную ритуальную одежду, соответствующую различным религиозным и культурным обычаям. С вниманием к деталям мы предлагаем искусно изготовленные саванны и вышитую одежду, которые отвечают уникальным требованиям. Стремясь к качеству и аутентичности, наши индивидуальные решения дополняют значимые ритуалы и отдают дань уважения ушедшим.</p>
                </div>
            </div>
    </div>
    <div style="background-color: #333">
        <nav>
            <ul class="one">
                <div>
                    <li><a href="#">Главная</a></li>
                    <li class="dropdown">
                        <a href="#">Товары</a>
                        <ul class="dropdown-menu">
                            <li><a href="#" class="menu-item2">Гробы</a></li>
                            <li><a href="#" class="menu-item2">Венки</a></li>
                            <li><a href="#" class="menu-item2">Кресты</a></li>
                            <li><a href="#" class="menu-item2">Ковчеги</a></li>
                        </ul>
                    </li>
                    <li><a href="#services" class="menu-item">Венки</a></li>
                </div>
                <div>
                    <li><a href="#services" class="menu-item">Кресты и гробы</a></li>
                    <li><a href="#services" class="menu-item">Швейные изделия</a></li>
                    <li><a href="#">Контакты</a></li>
                </div>
            </ul>
        </nav>
    </div>
    <div class="contact">
        <div style="margin-left: 23%">
            <h2>Связь с нами</h2>
            <p>Нужна помощь? Свяжитесь с нашей специализированной командой.</p>
            <a class="btn">Связаться</a>
        </div>
        <img src="assets/images/arrow.png" alt="" id="arrow-btn" class="button">
    </div>
</div>

<footer>
    <p class="push2"><a style="color: white" href="tel:+7 (908) 904-52-62">тел. +7 (908) 904-52-62</a> г. Екатеринбург ул. Маневровая, 31</p>
    <p>&copy; 2023 ООО "Ритуал Дизайн". All rights reserved.</p>
</footer>


</body>

</html>
