<!DOCTYPE html>
<html lang="ja">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="Keywords" content="ニアピン,ニアピン王決定戦,日本ニアピンゴルフ協会,jnga,JNGA,ゴルフイベント">
    <meta name="Description" content="ニアピン王決定戦の開催情報を掲載しています。">
    <title>選手権情報 - 日本ニアピンゴルフ協会</title>
    <link rel="stylesheet" href="assets/css/style.css">
    <link rel="stylesheet" href="assets/css/index.css">
</head>
<body>
    <?php include 'includes/header.html'; ?>

    <main>
        <section class="hero">
            <div class="hero-content">
                <h1>ニアピン選手権</h1>
            </div>
        </section>

        <section class="championship-content">
            <div class="content-section" id="championship-intro">
                <h2>競技方法</h2>
                <div class="method-box">
                    <h3>マッチプレートーナメント</h3>
                    <p>ニアピン王決定戦は、全国のゴルフコースにて主にオープンコンペの競技として行われています。ショートホールにてワンオンされた選手のピンからボールまでの距離を計測し、順位をつけて競います。年間通して開催しているゴルフ場もあり、ニアピン王年間ポイントランキングを集計して年間最優秀選手を決定しております。</p>
                </div>
            </div>

            <div class="content-section" id="schedule">
                <h2>距離クラス</h2>
                <div class="distance-classes">
                    <div class="class-grid">
                        <div class="class-item">
                            <span class="class-name">Aクラス</span>
                            <span class="class-distance">200ヤード以上</span>
                        </div>
                        <div class="class-item">
                            <span class="class-name">Bクラス</span>
                            <span class="class-distance">180-199ヤード</span>
                        </div>
                        <div class="class-item">
                            <span class="class-name">Cクラス</span>
                            <span class="class-distance">160-179ヤード</span>
                        </div>
                        <div class="class-item">
                            <span class="class-name">Dクラス</span>
                            <span class="class-distance">140-159ヤード</span>
                        </div>
                        <div class="class-item">
                            <span class="class-name">Eクラス</span>
                            <span class="class-distance">140ヤード未満</span>
                        </div>
                    </div>
                </div>
            </div>

            <div class="content-section" id="results">
                <h2>特徴</h2>
                <div class="features">
                    <ul>
                        <li>ゴルフコースでの開催が可能</li>
                        <li>リモート開催も可能（計測器を使用）</li>
                        <li>年間を通じて開催可能</li>
                        <li>各クラスでの競技が可能</li>
                    </ul>
                </div>
            </div>

            <div class="content-section" id="venues">
                <h2>開催コース一覧</h2>
                <div class="year-selector">
                    <button class="year-btn active" data-year="2023">2023年度</button>
                    <button class="year-btn" data-year="2025">2025年度</button>
                </div>
                <div id="2023" class="event-content active">
                    <div class="event-table">
                        <table>
                            <thead>
                                <tr>
                                    <th>開催日</th>
                                    <th>都道府県</th>
                                    <th>コース名</th>
                                    <th>電話番号</th>
                                </tr>
                            </thead>
                            <tbody>
                                <?php
                                $json = file_get_contents('data/events_2023.json');
                                $data = json_decode($json, true);
                                
                                // 日付でソート（新しい順）
                                usort($data['events'], function($a, $b) {
                                    // 日付文字列から月と日を抽出
                                    preg_match('/(\d+)月(\d+)日/', $a['date'], $matchesA);
                                    preg_match('/(\d+)月(\d+)日/', $b['date'], $matchesB);
                                    
                                    // 月と日を数値に変換
                                    $monthA = intval($matchesA[1]);
                                    $dayA = intval($matchesA[2]);
                                    $monthB = intval($matchesB[1]);
                                    $dayB = intval($matchesB[2]);
                                    
                                    // 月を比較
                                    if ($monthA !== $monthB) {
                                        return $monthB - $monthA;
                                    }
                                    // 月が同じ場合は日を比較
                                    return $dayB - $dayA;
                                });
                                
                                foreach ($data['events'] as $event) {
                                    echo '<tr>';
                                    echo '<td>' . htmlspecialchars($event['date']) . '</td>';
                                    echo '<td>' . htmlspecialchars($event['prefecture']) . '</td>';
                                    echo '<td>' . htmlspecialchars($event['course']) . '</td>';
                                    echo '<td>' . htmlspecialchars($event['tel']) . '</td>';
                                    echo '</tr>';
                                }
                                ?>
                            </tbody>
                        </table>
                    </div>
                </div>
                <div id="2025" class="event-content">
                    <div class="coming-soon">
                        <p>2025年度の開催コース情報は現在準備中です。</p>
                        <p>決まり次第、このページでお知らせいたします。</p>
                    </div>
                </div>
            </div>
        </section>

        <!-- サイドバー -->
        <nav class="sidebar">
            <ul>
                <li><a href="#championship-intro">競技方法</a></li>
                <li><a href="#schedule">距離クラス</a></li>
                <li><a href="#results">大会の特徴</a></li>
                <li><a href="#venues">開催コース</a></li>
            </ul>
        </nav>

        <!-- 大会概要 -->
        <section id="about" class="section">
            <!-- ... existing code ... -->
        </section>
    </main>

    <?php include 'includes/footer.html'; ?>

    <script src="assets/js/main.js"></script>
    <script>
    document.addEventListener('DOMContentLoaded', function() {
        // サイドバーのリンクを取得
        const sidebarLinks = document.querySelectorAll('.sidebar a');
        
        // 各リンクにクリックイベントを追加
        sidebarLinks.forEach(link => {
            link.addEventListener('click', function(e) {
                e.preventDefault();
                
                // リンクのhrefから対象の要素のIDを取得
                const targetId = this.getAttribute('href');
                const targetElement = document.querySelector(targetId);
                
                if (targetElement) {
                    // ヘッダーの高さを考慮してスクロール位置を調整
                    const headerHeight = 70; // ヘッダーの高さ
                    const targetPosition = targetElement.getBoundingClientRect().top + window.pageYOffset - headerHeight;
                    
                    // スムーズスクロール
                    window.scrollTo({
                        top: targetPosition,
                        behavior: 'smooth'
                    });
                }
            });
        });
    });
    </script>
</body>
</html> 