<!DOCTYPE html>
<html>

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>問い合わせフォーム</title>
    <link rel="icon" href="./images/favicon.ico">
    <link rel="stylesheet" href="./css/reset.css">
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Zen+Kaku+Gothic+New:wght@400;500;700&display=swap"
        rel="stylesheet">
    <link rel="stylesheet" type="text/css" href="./css/common.css">
    <link rel="stylesheet" type="text/css" href="./css/contact.css">
    <link rel="stylesheet" type="text/css" href="./css/sp.css">
</head>

<body>
    <!-- <div id="splash">
        <div id="splash_logo">
            <img src="images/top-logo.png" alt="" class="fadeUp">
        </div>
    </div> -->
    <?php
    $ua = $_SERVER['HTTP_USER_AGENT'];
    if ((strpos($ua, 'Android') !== false) && (strpos($ua, 'Mobile') !== false) || (strpos($ua, 'iPhone') !== false) || (strpos($ua, 'Windows Phone') !== false)) {
        ?>


    <?php } elseif ((strpos($ua, 'Android') !== false) || (strpos($ua, 'iPad') !== false)) { ?>


    <?php } else { ?>
        <div class="l-container-bg">
            <nav class="l-container-navi itemC">
                <ul class="l-container-navi-list">
                    <li class="l-container-navi-item">
                        <a href="./index.html">トップ</a>
                    </li>
                    <li class="l-container-navi-item">
                        <a href="#message">メッセージ</a>
                    </li>
                    <li class="l-container-navi-item">
                        <a href="#news">ニュース</a>
                    </li>
                    <li class="l-container-navi-item">
                        <a href="#merit">グッドポイント</a>
                    </li>
                    <li class="l-container-navi-item">
                        <a href="#group">グループ企業</a>
                    </li>
                    <li class="l-container-navi-item">
                        <a href="./interview.html">インタビュー</a>
                    </li>
                    <li class="l-container-navi-item">
                        <a href="https://employment.en-japan.com/desc_1234948/?arearoute=1" target="_blank">募集要項</a>
                    </li>
                </ul>
            </nav>
            <div class="l-container-image-r itemA">
                <figure class="l-container-image-r-inner container">
                    <img class="image" src="./images/top-r1.jpg" alt="">
                    <img class="image" src="./images/top-r2.jpg" alt="">
                    <img class="image" src="./images/top-r3.jpg" alt="">
                </figure>
                <div class="fix-menu">
                    <div class="fix-menu-inner">
                        <button class="fukidashi">
                            <a href="./interview.html">
                                <img src="./images/interview-btn.png" alt="">
                            </a>
                        </button>
                    </div>
                </div>
            </div>
            <div class="l-container-image-d itemB">
                <div class="top-logo">
                    <div class="top-logo-inner">
                        <a href="https://fukubagel.jp/" target="_blank">
                            <figure class="top-logo-each">
                                <img src="./images/top-logo-fukubagel.png" alt="">
                            </figure>
                        </a>
                        <a href="http://arigatocompany.co.jp/" target="_blank">
                            <figure class="top-logo-each">
                                <img src="./images/top-logo-arigato.png" alt="">
                            </figure>
                        </a>
                        <a href="">
                            <figure class="top-logo-each">
                                <img src="./images/top-logo-tomorrow.png" alt="">
                            </figure>
                        </a>
                    </div>
                </div>
                <figure class="l-container-image-d-inner container">
                    <img class="image" src="./images/top-d1.jpg" alt="">
                    <img class="image" src="./images/top-d2.jpg" alt="">
                    <img class="image" src="./images/top-d3.jpg" alt="">
                </figure>
            </div>
        </div>
    <?php } ?>



    <div class="contact-wrapper">
        <header id="header" class="l-header">
            <div class="l-header-inner">
                <div class="header-logo-wrapper">
                    <a href="./index.html">
                        <p class="header-txt is-mini is-no-height">福ベーグル採用ページ</p>
                        <figure class="header-logo">
                            <img src="./images/header-logo.png" alt="">
                        </figure>
                    </a>
                </div>
                <!-- BURGER MENU -->
                <div class="hamburger-menu">
                    <input type="checkbox" id="menu-btn-check">
                    <label for="menu-btn-check" class="menu-btn"><span></span></label>
                    <nav class="menu-content">
                        <ul>
                            <li>
                                <a href="./index.html">トップ</a>
                            </li>
                            <li>
                                <a href="./index.html#message">メッセージ</a>
                            </li>
                            <li>
                                <a href="./index.html#philosophy">ビジョン･ミッション</a>
                            </li>
                            <li>
                                <a href="./index.html#news">ニュース</a>
                            </li>
                            <li>
                                <a href="./index.html#merit">グッドポイント</a>
                            </li>
                            <li>
                                <a href="./index.html#group">グループ企業</a>
                            </li>
                            <li>
                                <a href="./interview.html">インタビュー</a>
                            </li>
                            <li>
                                <a href="https://employment.en-japan.com/desc_1234948/?arearoute=1"
                                    target="_blank">募集要項</a>
                            </li>
                        </ul>
                        <button class="l-recruit-btn btn bgleft">
                            <a href="https://employment.en-japan.com/apply/form/?WorkID=1234948&aroute=0&arearoute=1"
                                target="_blank"><span>応募する</span></a>
                        </button>
                    </nav>
                </div>
            </div>
        </header>
        <div class="contact-container">
            <h2 class="contact-title">ご応募ページ</h2>
            <?php
            if ($_SERVER["REQUEST_METHOD"] == "POST") {
                // フォームからのデータを受け取る
                $_SESSION['inquiry'] = filter_input(INPUT_POST, 'inquiry', FILTER_SANITIZE_STRING);
                $_SESSION['name'] = filter_input(INPUT_POST, 'name', FILTER_SANITIZE_STRING);
                $_SESSION['furigana'] = filter_input(INPUT_POST, 'furigana', FILTER_SANITIZE_STRING);
                $_SESSION['birthdate'] = filter_input(INPUT_POST, 'birthdate', FILTER_SANITIZE_STRING);
                $_SESSION['email'] = filter_input(INPUT_POST, 'email', FILTER_VALIDATE_EMAIL);
                $_SESSION['phone'] = filter_input(INPUT_POST, 'phone', FILTER_SANITIZE_STRING);
                $_SESSION['gender'] = isset($_POST["gender"]) ? $_POST["gender"] : '';
                // 送信先のメールアドレス
                $to = "info@hrtm.jp";
                // メールの件名
                $subject = "福ベーグルに新しい応募がありました";
                // メールの本文
                $message = "以下の内容で応募がありました:\n\n";
                $message .= "お問い合わせ内容: " . $_SESSION['inquiry'] . "\n";
                $message .= "氏名: " . $_SESSION['name'] . "\n";
                $message .= "ふりがな: " . $_SESSION['furigana'] . "\n";
                $message .= "年齢: " . $_SESSION['age'] . "歳\n";
                $message .= "メールアドレス: " . $_SESSION['email'] . "\n";
                $message .= "電話番号: " . $_SESSION['phone'] . "\n";
                $message .= "性別: " . $_SESSION['gender'] . "\n";
                // 送信元のメールアドレス
                $from = "fukubagel-contact-form@example.com";
                // メールヘッダー
                $headers = "From:" . $from;
                // メールを送信
                if ($_SESSION['email'] && mail($to, $subject, $message, $headers)) {
                    // メール送信に成功した場合は、セッション変数をクリア
                    session_unset();
                    echo '<div class="success-message">応募が送信されました。担当から折り返しご連絡させていただきます。</div>';
                } else {
                    echo '<div class="error-message">メールの送信に失敗しました。入力内容をご確認いただき、再度お試しください。</div>';
                }
            }
            ?>
            <form action="" method="POST">
                <label for="inquiry">お問い合わせ内容</label>
                <select id="inquiry" name="inquiry" required>
                    <option value="" disabled selected>選択してください</option>
                    <option value="とりあえず話を聞いてみたい">とりあえず話を聞いてみたい</option>
                    <option value="話を聞いてみて働くか決めたい">話を聞いてみて働くか決めたい</option>
                    <option value="実際に働いてみたい">実際に働いてみたい</option>
                </select>
                <input type="text" name="name"
                    value="<?php echo isset($_SESSION['name']) ? htmlspecialchars($_SESSION['name']) : ''; ?>"
                    placeholder="氏名" required>
                <input type="text" name="furigana"
                    value="<?php echo isset($_SESSION['furigana']) ? htmlspecialchars($_SESSION['furigana']) : ''; ?>"
                    placeholder="ふりがな" required>
                <input type="number" name="age"
                    value="<?php echo isset($_SESSION['age']) ? htmlspecialchars($_SESSION['age']) : ''; ?>"
                    placeholder="年齢" required>
                <input type="email" name="email"
                    value="<?php echo isset($_SESSION['email']) ? htmlspecialchars($_SESSION['email']) : ''; ?>"
                    placeholder="メールアドレス" required>
                <input type="tel" name="phone"
                    value="<?php echo isset($_SESSION['phone']) ? htmlspecialchars($_SESSION['phone']) : ''; ?>"
                    placeholder="電話番号" required>
                <p>性別</p>
                <div class="form-gender">
                    <label>
                        <input type="radio" name="gender" value="女性" required> 女性
                    </label>
                    <label>
                        <input type="radio" name="gender" value="男性" required> 男性
                    </label>
                    <label>
                        <input type="radio" name="gender" value="その他" required> その他
                    </label>
                </div>
                <label>
                    <input type="checkbox" name="privacy_policy" required>
                    <a class="is-underline" href="https://ucdgmsxi.jbplt.jp/policy" target="_blank">プライバシーポリシー</a>に同意する
                </label>
                <button class="submit-btn btn bgleft" type="submit"><span>応募</span></button>
            </form>
            <footer class="l-footer">
                <figure class="l-footer-logo">
                    <div class="footer-logo-inner">
                        <a href="https://fukubagel.jp/" target="_blank">
                            <figure class="footer-logo-each">
                                <img src="./images/footer-logo-fukubagel.png" alt="">
                            </figure>
                        </a>
                        <a href="http://arigatocompany.co.jp/" target="_blank">
                            <figure class="footer-logo-each">
                                <img src="./images/footer-logo-arigato.png" alt="">
                            </figure>
                        </a>
                        <a href="">
                            <figure class="footer-logo-each">
                                <img src="./images/footer-logo-tomorrow.png" alt="">
                            </figure>
                        </a>
                    </div>
                </figure>
                <p class="copyright is-mini">
                    &copy; Fuku Bagel Group All rights reserved.
                </p>
            </footer>
        </div>

    </div>
    <script src="./js/common.js"></script>
</body>

</html>