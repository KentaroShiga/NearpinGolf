<!DOCTYPE html>
<html lang="ja">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="Keywords" content="サイトマップ,日本ニアピンゴルフ協会,jnga,JNGA">
    <meta name="Description" content="日本ニアピンゴルフ協会のサイトマップです。">
    <title>サイトマップ - 日本ニアピンゴルフ協会</title>
    <link rel="stylesheet" href="assets/css/style.css">
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
</head>
<body>
   <header>
    <nav>
        <div class="logo">
            <a href="index.php" style="text-decoration: none; color: inherit; display: flex; align-items: center; gap: 0.5rem;">
                <img src="assets/images/common/JNGA_LOGO.JPG" alt="JNGA">
                <div class="logo-text">
                    <h1 class="organization-name">日本ニアピンゴルフ協会</h1>
                    <p class="organization-motto">～全てのニアピニスト(NEARPINIST)の為に～</p>
                </div>
            </a>
        </div>
        <div class="social">
            <a href="https://www.facebook.com/jnga.golf/" target="_blank" class="facebook-icon">
                <img src="assets/images/common/facebook_icon.png" alt="Facebook">
            </a>
        </div>
        <ul class="nav-links">
            <li><a href="index.php">トップページ</a></li>
            <li><a href="championship.php">ニアピン選手権</a></li>
            <li><a href="nearpin.php">ニアピン検定</a></li>
            <li><a href="jnga.php">JNGAについて</a></li>
        </ul>
        <div class="menu-toggle" id="menuToggle">
            <span></span>
            <span></span>
            <span></span>
        </div>
    </nav>
    <div class="mobile-menu" id="mobileMenu">
        <ul>
            <li><a href="index.php">トップページ</a></li>
            <li><a href="championship.php">ニアピン選手権</a></li>
            <li><a href="nearpin.php">ニアピン検定</a></li>
            <li><a href="jnga.php">JNGAについて</a></li>
            <li><a href="sitemap.php">サイトマップ</a></li>
            <li><a href="privacy.php">プライバシーポリシー</a></li>
            <li><a href="mailto:info@jnga.jp">お問い合わせ</a></li>
        </ul>
    </div>
    <script>
        document.addEventListener('DOMContentLoaded', function() {
            const menuToggle = document.querySelector('.menu-toggle');
            const mobileMenu = document.querySelector('.mobile-menu');
            
            menuToggle.addEventListener('click', function() {
                this.classList.toggle('active');
                mobileMenu.classList.toggle('active');
                document.body.style.overflow = mobileMenu.classList.contains('active') ? 'hidden' : '';
            });

            // メニューリンクをクリックしたらメニューを閉じる
            const menuLinks = mobileMenu.querySelectorAll('a');
            menuLinks.forEach(link => {
                link.addEventListener('click', () => {
                    menuToggle.classList.remove('active');
                    mobileMenu.classList.remove('active');
                    document.body.style.overflow = '';
                });
            });

            // メニュー外をクリックしたらメニューを閉じる
            document.addEventListener('click', function(event) {
                if (!menuToggle.contains(event.target) && !mobileMenu.contains(event.target)) {
                    menuToggle.classList.remove('active');
                    mobileMenu.classList.remove('active');
                    document.body.style.overflow = '';
                }
            });
        });
    </script>
</header> 
<main>
    <section class="hero">
        <div class="hero-content">
            <h1>サイトマップ</h1>
        </div>
    </section>

    <section class="sitemap-section">
        <div class="container">
            <div class="sitemap-group">
                <h3>協会について</h3>
                <ul class="sitemap-list">
                    <li><a href="jnga.php">JNGAとは</a></li>
                       </ul>
            </div>

            <div class="sitemap-group">
                <h3>活動内容</h3>
                <ul class="sitemap-list">
                    <li><a href="nearpin.php">ニアピン検定</a>
                        <ul>
                            <li><a href="nearpin.php#nearpin-intro">検定の概要</a></li>
                            <li><a href="nearpin.php#test-venues">検定会場</a></li>
                            <li><a href="nearpin.php#kentei-standards">検定基準詳細</a></li>
                            <li><a href="nearpin.php#rank-board">段位ボード</a></li>
                        </ul>
                    </li>
                    <li><a href="championship.php">選手権大会</a>
                        <ul>
                            <li><a href="championship.php#championship-intro">大会概要</a></li>
                            <li><a href="championship.php#schedule">スケジュール</a></li>
                        </ul>
                    </li>
                </ul>
            </div>

            <div class="sitemap-group">
                <h3>その他</h3>
                <ul class="sitemap-list">
                    <li><a href="privacy.php">プライバシーポリシー</a></li>
                    <li><a href="mailto:info@jnga.jp">お問い合わせ</a></li>
                </ul>
            </div>
        </div>
    </section>
</main>

<?php include 'includes/footer.html'; ?> 
</body>
</html> 
