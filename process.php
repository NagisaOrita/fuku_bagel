<?php
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    // フォームからのデータを受け取る
    $name = $_POST["name"];
    $furigana = $_POST["furigana"];
    $birthdate = $_POST["birthdate"];
    $email = $_POST["email"];
    $phone = $_POST["phone"];

    // 送信先のメールアドレス
    $to = "tuallysret@gmail.com";

    // メールの件名
    $subject = "新しい応募がありました";

    // メールの本文
    $message = "以下の内容で応募がありました:\n\n";
    $message .= "氏名: " . $name . "\n";
    $message .= "ふりがな: " . $furigana . "\n";
    $message .= "生年月日: " . $birthdate . "\n";
    $message .= "メールアドレス: " . $email . "\n";
    $message .= "電話番号: " . $phone . "\n";

    // 送信元のメールアドレス
    $from = "contact-form@example.com";

    // メールヘッダー
    $headers = "From:" . $from;

    // メールを送信
    if (mail($to, $subject, $message, $headers)) {
        echo "応募が送信されました。ありがとうございます！";
    } else {
        echo "メールの送信に失敗しました。もう一度お試しください。";
    }
    // メール送信設定
ini_set("SMTP", "smtp.example.com"); // SMTPサーバーのホスト名
ini_set("smtp_port", "587"); // SMTPポート番号
ini_set("sendmail_from", "your-email@example.com"); // 送信元のメールアドレス
}
?>
