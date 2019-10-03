<?php
include dirname(__FILE__) . "/head.php"
?>
  <title>新規登録ページ</title>
</head>
<body>
  <header id="header">
    <div class="app-icons">
      <nav class="navbar navbar-default">
        <div class="container-fluid">
          <div class="navbar-header">
            <a class="navbar-brand" href="registration.php">READ-BOOK-RECORDER</a>
            <div class="login-icon">
              <i class="fa fa-user" id="user-login-icon"  aria-hidden="true"></i>
              <a href="registration.php">新規登録</a>
            </div>
          </div>
        </div>
      </nav>
    </div>
  </header>
  
  <div class="main">
    <?php
    session_start();
//POSTのvalidate
if(!filter_var($_POST['email'], FILTER_VALIDATE_EMAIL)) {
  echo '入力されたアドレス値が不正です。';
  return false;
}
//DB内でPOSTされたメールアドレスを検索
try {
  $pdo = new PDO("mysql:host=127.0.0.1; dbname=record_book; charset=utf8", 'root', 'password');
  // prepareしたPDOstatmentを実行する
  $stmt = $pdo->prepare('select * from users where email = ?');
  $stmt->execute([$_POST['email']]);
  // selectされたpdostatmentをfetchを使ってレコードとして取得する
  $row = $stmt->fetch(PDO::FETCH_ASSOC);
  var_dump($row);
  var_dump($_POST['password']);
} catch (\Exception $e) {
  echo $e->getMessage() . PHP_EOL;
} catch (\Exception $e) {
  echo $e->getMessage() . PHP_EOL;
}
if (!isset($row['email'])) {
  echo 'メールアドレス又はパスワードが間違っています。!!';
  return false;
}
//パスワード確認後sessionにメールアドレスを渡す
if (password_verify($_POST['password'], $row['password'])) {
  session_regenerate_id(true); //session_idを新しく生成し、置き換える
  $_SESSION['EMAIL'] = $row['email'];
  echo 'ログインしました';

} else {
  echo 'メールアドレス又はパスワードが間違っています。';
  return false;
}
    ?>
  <a href="mainpage.php">次へ</a>