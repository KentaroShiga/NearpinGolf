// 年度切り替え機能
document.addEventListener('DOMContentLoaded', function() {
    const yearButtons = document.querySelectorAll('.year-btn');
    const eventContents = document.querySelectorAll('.event-content');

    yearButtons.forEach(button => {
        button.addEventListener('click', function() {
            // ボタンのアクティブ状態を更新
            yearButtons.forEach(btn => btn.classList.remove('active'));
            this.classList.add('active');

            // コンテンツの表示を更新
            const year = this.getAttribute('data-year');
            eventContents.forEach(content => {
                content.classList.remove('active');
                if (content.id === year) {
                    content.classList.add('active');
                }
            });
        });
    });
});

// スムーズスクロール
document.querySelectorAll('a[href^="#"]').forEach(anchor => {
    anchor.addEventListener('click', function (e) {
        e.preventDefault();
        const target = document.querySelector(this.getAttribute('href'));
        if (target) {
            target.scrollIntoView({
                behavior: 'smooth',
                block: 'start'
            });
        }
    });
}); 

document.addEventListener('DOMContentLoaded', function() {
    const menuToggle = document.querySelector('.menu-toggle');
    const mobileMenu = document.querySelector('.mobile-menu');
    const body = document.body;

    menuToggle.addEventListener('click', function() {
        this.classList.toggle('active');
        mobileMenu.classList.toggle('active');
        body.style.overflow = mobileMenu.classList.contains('active') ? 'hidden' : '';
    });

    // メニューリンクをクリックしたらメニューを閉じる
    const menuLinks = document.querySelectorAll('.mobile-menu a');
    menuLinks.forEach(link => {
        link.addEventListener('click', function() {
            menuToggle.classList.remove('active');
            mobileMenu.classList.remove('active');
            body.style.overflow = '';
        });
    });
});
