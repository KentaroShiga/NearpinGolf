<?php
// JSONファイルから検定基準データを読み込む
$kenteiData = json_decode(file_get_contents('data/kentei_standards.json'), true);
$beginnersData = json_decode(file_get_contents('data/beginners_standards.json'), true);
$kenteiStandards = $kenteiData['kentei']['standards'];
$beginnersStandards = $beginnersData['beginners']['standards'];

$rankHoldersJson = file_get_contents('data/rank_holders.json');
$rankHolders = json_decode($rankHoldersJson, true);

// 段位の順序を定義
$rankOrder = ['二段', '初段', '一級', '二級', '三級', '四級'];
?>

<!DOCTYPE html>
<html lang="ja">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="Keywords" content="ニアピン,ニアピン検定,日本ニアピンゴルフ協会,jnga,JNGA,ゴルフ検定">
    <meta name="Description" content="ニアピン検定の日本ニアピンゴルフ協会です。">
    <title>ニアピン検定 - 日本ニアピンゴルフ協会</title>
    <link rel="stylesheet" href="assets/css/style.css">
    <link rel="stylesheet" href="assets/css/index.css">
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
</head>
<body>
    <?php include 'includes/header.html'; ?>

    <main>
    <section class="hero">
    <div class="hero-content">
                <h1>ニアピン検定</h1>
                    </div>
        </section>

        <section class="championship-content">
        <div class="main-content">
                <div class="container">
                    <div class="content">
                        <!-- ニアピン検定の説明セクション -->
                        <section class="nearpin-intro" id="nearpin-intro" style="margin-top: 1rem;">
                            <h2>ニアピン検定</h2>
                            <div class="intro-content">
                                <div class="intro-section">
                                    <h3>ニアピン検定とは</h3>
                                    <p>９番アイアンを使用し各自の持ち飛距離の地点を目標に１０球をショットし、その精度を数値化（上達の見える化）したものです。</p>
                                </div>
                                
                                <div class="intro-section">
                                    <h3>ニアピン検定の効果</h3>
                                    <ul>
                                        <li>検定ランクの向上（上達の見える化）によるスコア伸び悩み時にもモチベーションが維持できます</li>
                                        <li>飛距離よりも方向性や距離感を意識した練習がスコアアップに繋がります</li>
                                        <li>初心者のコースデビューの指針になります（6級の取得）</li>
                                        <li>検定受験で緊張感のある練習が実現できます（停滞していたハンディキャップの向上）</li>
                                    </ul>
                                </div>
                            </div>
                        </section>

                        <!-- 検定会場セクション -->
                        <section class="test-venues" id="test-venues">
                            <h2>検定会場</h2>
                            <div class="venues-content">
                                <table class="venues-table">
                                    <thead>
                                        <tr>
                                            <th>都道府県</th>
                                            <th>道場名</th>
                                            <th>師範（インストラクター）</th>
                                            <th>施設名</th>
                                            <th>住所</th>
                                            <th>電話</th>
                                            <th>メール</th>
                                        </tr>
                                    </thead>
                                    <tbody>
                                        <tr>
                                            <td>京都府</td>
                                            <td>○○道場</td>
                                            <td>○○ ○○</td>
                                            <td>○○ゴルフ練習場</td>
                                            <td>京都市中京区西ノ京原町２１</td>
                                            <td></td>
                                            <td></td>
                                        </tr>
                                        <tr>
                                            <td>大阪府</td>
                                            <td></td>
                                            <td></td>
                                            <td></td>
                                            <td></td>
                                            <td></td>
                                            <td></td>
                                        </tr>
                                        <tr>
                                            <td>東京都</td>
                                            <td></td>
                                            <td></td>
                                            <td></td>
                                            <td></td>
                                            <td></td>
                                            <td></td>
                                        </tr>
                                    </tbody>
                                </table>
                            </div>
                        </section>

                        <div class="qualification-section" id="qualification-section">
                            <h2>検定基準詳細</h2>
                            <div class="heading-decoration-line"></div>
                            <div class="qualification-content">

                                <div class="standards-table">
                                    <h3>ニアピン検定</h3>
                                    <table>
                                        <thead>
                                            <tr>
                                                <th>段位</th>
                                                <th>距離</th>
                                                <th>基準</th>
                                                <th>条件</th>
                                                <th>コメント</th>
                                            </tr>
                                        </thead>
                                        <tbody>
                                            <?php foreach ($kenteiStandards as $standard): ?>
                                            <tr>
                                                <td class="rank"><?php echo htmlspecialchars($standard['rank']); ?></td>
                                                <td class="distance"><?php echo htmlspecialchars($standard['distance']); ?></td>
                                                <td class="score"><?php echo htmlspecialchars($standard['score']); ?></td>
                                                <td class="condition"><?php echo htmlspecialchars($standard['condition']); ?></td>
                                                <td class="reference"><?php echo htmlspecialchars($standard['reference']); ?></td>
                                            </tr>
                                            <?php endforeach; ?>
                                        </tbody>
                                    </table>

                                    <h3>ニアピンビギナーズ</h3>
                                    <table>
                                        <thead>
                                            <tr>
                                                <th>段位</th>
                                                <th>距離</th>
                                                <th>基準</th>
                                                <th>条件</th>
                                                <th>コメント</th>
                                            </tr>
                                        </thead>
                                        <tbody>
                                            <?php foreach ($beginnersStandards as $standard): ?>
                                            <tr>
                                                <td class="rank"><?php echo htmlspecialchars($standard['rank']); ?></td>
                                                <td class="distance"><?php echo htmlspecialchars($standard['distance']); ?></td>
                                                <td class="score"><?php echo htmlspecialchars($standard['score']); ?></td>
                                                <td class="condition"><?php echo htmlspecialchars($standard['condition']); ?></td>
                                                <td class="description"><?php echo htmlspecialchars($standard['description']); ?></td>
                                            </tr>
                                            <?php endforeach; ?>
                                        </tbody>
                                    </table>
                                </div>
                            </div>
                        </div>

                        <div class="rank-board" id="rank-board">
                            <h3>段位取得者一覧</h3>
                            <div class="rank-list">
                                <?php foreach ($rankOrder as $rank): ?>
                                    <div class="rank-category">
                                        <div class="rank-header" onclick="toggleRank('<?php echo $rank; ?>')">
                                            <h4><?php echo htmlspecialchars($rank); ?> 取得者</h4>
                                            <span class="holder-count"><?php echo count($rankHolders[$rank]); ?>名</span>
                                            <span class="toggle-icon">▼</span>
                                        </div>
                                        <div class="rank-members" id="<?php echo $rank; ?>-members">
                                            <?php if (!empty($rankHolders[$rank])): ?>
                                                <table class="holders-table">
                                                    <thead>
                                                        <tr>
                                                            <th>氏名</th>
                                                            <th>所属</th>
                                                            <th>年齢</th>
                                                        </tr>
                                                    </thead>
                                                    <tbody>
                                                        <?php foreach ($rankHolders[$rank] as $holder): ?>
                                                            <tr>
                                                                <td><?php echo htmlspecialchars($holder['name']); ?></td>
                                                                <td><?php echo $holder['course'] ? htmlspecialchars($holder['course']) : '-'; ?></td>
                                                                <td><?php echo $holder['age'] ? htmlspecialchars($holder['age']) : '-'; ?></td>
                                                            </tr>
                                                        <?php endforeach; ?>
                                                    </tbody>
                                                </table>
                                            <?php else: ?>
                                                <p class="no-holders">現在取得者はいません</p>
                                            <?php endif; ?>
                                        </div>
                                    </div>
                                <?php endforeach; ?>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>

        <aside class="sidebar">
            <ul>
                <li><a href="#nearpin-intro">検定の概要</a></li>
                <li><a href="#test-venues">検定会場</a></li>
                <li><a href="#qualification-section">検定基準詳細</a></li>
                <li><a href="#rank-board">段位ボード</a></li>
            </ul>
        </aside>
    </main>

    <?php include 'includes/footer.html'; ?>

    <script src="assets/js/main.js"></script>
    <script>
    function toggleRank(rankId) {
        const members = document.getElementById(rankId + '-members');
        const header = members.previousElementSibling;
        const icon = header.querySelector('.toggle-icon');
        
        if (members.style.display === 'none' || !members.style.display) {
            members.style.display = 'block';
            icon.textContent = '▼';
        } else {
            members.style.display = 'none';
            icon.textContent = '▶';
        }
    }

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
