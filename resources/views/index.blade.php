<!DOCTYPE html>
<html lang="ru">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>KOMEK BY TICKET - Кинотеатр</title>
    <link rel="stylesheet" href="{{ asset('assets/css/style.css') }}">
</head>

<body>
    <div class="hero-banner"></div>

    <header class="header">
        <div class="header-container">
            <div class="logo">
                <div>
                    <a href="#"><img src="{{ asset('assets/images/Слой_x0020_1.png') }}" alt="Vector"></a>
                </div>
            </div>

            <div class="header-info">
                <div class="location">
                    <strong>Казахстан</strong>
                    <span>улица Тлепова 1</span>
                </div>

                <div class="phone">
                    <strong>+7 (775) 000 00 01</strong>
                    <span>Касса</span>
                </div>

                <div class="social-icons">
                    <a href="#" class="social-icon"><img src="{{ asset('assets/images/Vector.png') }}"></a>
                    <a href="#" class="social-icon"><img src="{{ asset('assets/images/Vector (1).png') }}"></a>
                    <a href="#" class="social-icon"><img src="{{ asset('assets/images/Vector (3).png') }}"></a>
                    <a href="#" class="social-icon"><img src="{{ asset('assets/images/Vector (2).png') }}"></a>
                </div>

                <a href="#" class="btn-ticket">Мне пришел билет</a>
            </div>
        </div>
    </header>

    <nav class="nav">
        <div class="nav-container">
            <ul class="nav-menu">
                <li class="nav-item active"><a href="#" class="nav-link">Афиша</a></li>
                <li class="nav-item"><a href="#" class="nav-link">Сеансы</a></li>
                <li class="nav-item"><a href="#" class="nav-link">Кинотеатр</a></li>
                <li class="nav-item"><a href="#" class="nav-link">Контакты</a></li>
            </ul>

            <div class="nav-buttons">
                <a href="#" class="btn-login">Войти</a>
                <a href="#" class="btn-review">Написать отзыв</a>
            </div>
        </div>
    </nav>

    <div class="filter-tabs">
        <div class="tabs-container">
            <button class="tab active">Сегодня</button>
            <button class="tab">Завтра</button>
            <button class="tab">Воскресенье, 10 сент.</button>
            <button class="tab">Понедельник, 11 сент.</button>
            <button class="tab">Вторник, 12 сент.</button>
            <button class="tab">Среда, 13 сент.</button>
        </div>
    </div>

    <main class="main-content">
        <div class="movies-grid">
            <div class="movie-card">
                <div class="movie-poster">
                    <img src="{{ asset('assets/images/image 4.png') }}" alt="Праздники" class="poster-image">
                    <div class="age-rating">12+</div>
                    <div class="movie-badge">ПРЕМЬЕРА</div>
                </div>
                <div class="movie-info">
                    <h3 class="movie-title">Праздники</h3>
                    <div class="movie-genre">комедия</div>
                    <div class="movie-showtimes">
                        <div class="showtime-container">
                            <button class="showtime-btn">
                                <span class="showtime-time">15:35</span>
                                <span class="showtime-meta">2D 1233 T</span>
                            </button>
                            <div class="showtime-hall">Зал 3</div>
                        </div>
                        <div class="showtime-container">
                            <button class="showtime-btn">
                                <span class="showtime-time">17:40</span>
                                <span class="showtime-meta">2D 3080 T</span>
                            </button>
                            <div class="showtime-hall">Зал 6 VIP</div>
                        </div>
                        <div class="showtime-container">
                            <button class="showtime-btn">
                                <span class="showtime-time">19:15</span>
                                <span class="showtime-meta">2D 1700 T</span>
                            </button>
                            <div class="showtime-hall">Зал 4</div>
                        </div>
                        <div class="showtime-container">
                            <button class="showtime-btn">
                                <span class="showtime-time">21:05</span>
                                <span class="showtime-meta">2D 1700 T</span>
                            </button>
                            <div class="showtime-hall">Зал 3</div>
                        </div>
                        <div class="showtime-container">
                            <button class="showtime-btn">
                                <span class="showtime-time">21:40</span>
                                <span class="showtime-meta">2D 4030 T</span>
                            </button>
                            <div class="showtime-hall">Зал 6 VIP</div>
                        </div>
                        <div class="showtime-container">
                            <button class="showtime-btn">
                                <span class="showtime-time">22:45</span>
                                <span class="showtime-meta">2D 1700 T</span>
                            </button>
                            <div class="showtime-hall">Зал 3</div>
                        </div>
                    </div>
                </div>
            </div>

            <div class="movie-card">
                <div class="movie-poster">
                    <img src="{{ asset('assets/images/Group 862.png') }}" alt="Мег 2: Бездна" class="poster-image">
                    <div class="age-rating">16+</div>
                </div>
                <div class="movie-info">
                    <h3 class="movie-title">Мег 2: Бездна</h3>
                    <div>
                        <span class="movie-genre">экшен</span>
                        <span class="movie-genre">триллер</span>
                    </div>
                    <div class="movie-showtimes">
                        <div class="showtime-container">
                            <button class="showtime-btn">
                                <span class="showtime-time">15:35</span>
                                <span class="showtime-meta">2D 4030 T</span>
                            </button>
                            <div class="showtime-hall">Зал 6 VIP</div>
                        </div>
                        <div class="showtime-container">
                            <button class="showtime-btn">
                                <span class="showtime-time">17:40</span>
                                <span class="showtime-meta">2D 3080 T</span>
                            </button>
                            <div class="showtime-hall">Зал 2 Auto</div>
                        </div>
                        <div class="showtime-container">
                            <button class="showtime-btn">
                                <span class="showtime-time">19:15</span>
                                <span class="showtime-meta">2D 1700 T</span>
                            </button>
                            <div class="showtime-hall">Зал 4</div>
                        </div>
                    </div>
                </div>
            </div>

            <div class="movie-card">
                <div class="movie-poster">
                    <img src="{{ asset('assets/images/Group 862 (1).png') }}" alt="Заложники" class="poster-image">
                    <div class="age-rating">16+</div>
                </div>
                <div class="movie-info">
                    <h3 class="movie-title">Заложники</h3>
                    <div>
                        <span class="movie-genre">экшен</span>
                        <span class="movie-genre">триллер</span>
                    </div>
                    <div class="movie-showtimes">
                        <div class="showtime-container">
                            <button class="showtime-btn">
                                <span class="showtime-time">16:10</span>
                                <span class="showtime-meta">2D 4030 T</span>
                            </button>
                            <div class="showtime-hall">Зал 1</div>
                        </div>
                        <div class="showtime-container">
                            <button class="showtime-btn">
                                <span class="showtime-time">21:30</span>
                                <span class="showtime-meta">2D 3080 T</span>
                            </button>
                            <div class="showtime-hall">Зал 1</div>
                        </div>
                    </div>
                </div>
            </div>

            <div class="movie-card">
                <div class="movie-poster">
                    <img src="{{ asset('assets/images/Group 862 (2).png') }}" alt="Леди Баг и Супер-Кот" class="poster-image">
                    <div class="age-rating">6+</div>
                </div>
                <div class="movie-info">
                    <h3 class="movie-title">Леди Баг и Супер-Кот: Пробуждение силы</h3>
                    <div>
                        <span class="movie-genre">фэнтези</span>
                        <span class="movie-genre">боевик</span>
                        <span class="movie-genre">мелодрама</span>
                    </div>
                    <div class="movie-showtimes">
                        <div class="showtime-container">
                            <button class="showtime-btn">
                                <span class="showtime-time">16:10</span>
                                <span class="showtime-meta">2D 4030 T</span>
                            </button>
                            <div class="showtime-hall">Зал 1</div>
                        </div>
                        <div class="showtime-container">
                            <button class="showtime-btn">
                                <span class="showtime-time">21:30</span>
                                <span class="showtime-meta">2D 3080 T</span>
                            </button>
                            <div class="showtime-hall">Зал 1</div>
                        </div>
                    </div>
                </div>
            </div>

            <div class="movie-card">
                <div class="movie-poster">
                    <img src="{{ asset('assets/images/Group 862 (3).png') }}" alt="Когда не загрузилась афиша" class="poster-image">
                    <div class="movie-badge">ПРЕМЬЕРА</div>
                </div>
                <div class="movie-info">
                    <h3 class="movie-title">Когда не загрузилась афиша</h3>
                    <div class="movie-genre">комедия</div>
                    <div class="movie-showtimes">
                        <div class="showtime-container">
                            <button class="showtime-btn">
                                <span class="showtime-time">15:35</span>
                                <span class="showtime-meta">2D 1233 T</span>
                            </button>
                            <div class="showtime-hall">Зал 3</div>
                        </div>
                        <div class="showtime-container">
                            <button class="showtime-btn">
                                <span class="showtime-time">17:40</span>
                                <span class="showtime-meta">2D 3080 T</span>
                            </button>
                            <div class="showtime-hall">Зал 6 VIP</div>
                        </div>
                    </div>
                </div>
            </div>

            <div class="movie-card">
                <div class="movie-poster">
                    <img src="{{ asset('assets/images/Group 862 (4).png') }}" alt="Руслан и Людмила" class="poster-image">
                    <div class="age-rating">6+</div>
                    <div class="movie-badge">ПРЕМЬЕРА</div>
                </div>
                <div class="movie-info">
                    <h3 class="movie-title">Руслан и Людмила. Больше, чем сказка</h3>
                    <div class="movie-genre">анимационое приключение</div>
                    <div class="movie-showtimes">
                        <div class="showtime-container">
                            <button class="showtime-btn" style="background: #ef4444; border:none;">
                                <span class="showtime-time" style="background:transparent; padding: 10px;">Сеансы на
                                    Завтра</span>
                            </button>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </main>

    <footer class="footer">
        <div class="footer-container">
            <div class="footer-top">
                <div class="footer-logo">
                    <a href="#"><img src="{{ asset('assets/images/Слой_x0020_1.png') }}" alt="KOMEK"></a>
                </div>
                <div class="footer-contact-info">
                    <div class="contact-item">
                        <p>admin@example.com</p>
                        <p>ticket@example.com</p>
                        <p class="sub-text">улица Тестовая 1</p>
                    </div>
                    <div class="contact-item">
                        <p class="highlight">+7 (775) 000 00 01 <span class="arrow">⌄</span></p>
                        <p class="sub-text">Касса</p>
                    </div>
                    <div class="contact-item">
                        <p>08:00 - 22:00 с пн.-пт.</p>
                        <p class="sub-text">График работы</p>
                    </div>
                </div>
            </div>

            <div class="footer-middle">
                <div class="footer-menu-col">
                    <h3>Меню</h3>
                    <ul class="footer-links">
                        <li><a href="#">Афиша</a></li>
                        <li><a href="#">Сеансы</a></li>
                        <li><a href="#">Пушкинская карта</a></li>
                        <li><a href="#">Кинотеатр</a></li>
                        <li><a href="#">Контакты</a></li>
                    </ul>
                </div>
                <div class="footer-payment-col">
                    <h3>Способы оплаты:</h3>
                    <div class="payment-methods">
                        <div class="mc-logo">
                            <img src="{{ asset('assets/images/Group 8.png') }}">
                        </div>
                        <div class="visa-logo"><img src="{{ asset('assets/images/Visa.png') }}"></div>
                    </div>
                    <p class="disclaimer">
                        Все сеансы начинаются с рекламно-информационного блока.<br>
                        Точную продолжительность сеансов можно уточнить в кинотеатре.
                    </p>
                </div>
            </div>

            <div class="footer-bottom">
                <div class="footer-socials">
                    <a href="#" class="social-btn"><img src="{{ asset('assets/images/Vector.png') }}" alt="FB"></a>
                    <a href="#" class="social-btn"><img src="{{ asset('assets/images/Vector (1).png') }}" alt="IG"></a>
                    <a href="#" class="social-btn"><img src="{{ asset('assets/images/Vector (2).png') }}" alt="YT"></a>
                    <a href="#" class="social-btn"><img src="{{ asset('assets/images/Vector (3).png') }}" alt="VK"></a>
                </div>
                <div class="copyright">
                    © 2025 Все права защищены
                </div>
            </div>
        </div>
    </footer>

    <script>
        const tabs = document.querySelectorAll('.tab');
        tabs.forEach(tab => {
            tab.addEventListener('click', function () {
                tabs.forEach(t => t.classList.remove('active'));
                this.classList.add('active');
            });
        });

        const favoriteIcons = document.querySelectorAll('.favorite-icon');
        favoriteIcons.forEach(icon => {
            icon.addEventListener('click', function () {
                this.textContent = this.textContent === '♡' ? '♥' : '♡';
                this.style.color = this.textContent === '♥' ? '#ef4444' : '#000';
            });
        });
    </script>
</body>

</html>