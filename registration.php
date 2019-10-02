<!DOCTYPE html>
<html lang="ja">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <meta http-equiv="X-UA-Compatible" content="ie=edge">
  <link rel='stylesheet' href='https://unpkg.com/ress/dist/ress.min.css'>
  <link rel="stylesheet" type="text/css" href="./style.css"/>
  <link href="https://use.fontawesome.com/releases/v5.6.1/css/all.css" rel="stylesheet">
  <!-- bootstrapの導入 -->
  <link rel="stylesheet" href="//maxcdn.bootstrapcdn.com/bootstrap/3.2.0/css/bootstrap.min.css">
  <script src="//ajax.googleapis.com/ajax/libs/jquery/1.11.1/jquery.min.js"></script>
  <script src="//maxcdn.bootstrapcdn.com/bootstrap/3.2.0/js/bootstrap.min.js"></script>
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
              <p class="login-text">ログイン</p>
            </div>
          </div>
        </div>
      </nav>
    </div>
  </header>
  
  <div class="main">
    <h1> 新規登録</h1>
    <form action="insert.php" method="post" class="new-user-form">
      <td>
        <tr>
          <p>メールアドレス</p>
          <input type="text" name="email" class="form-input">
        </tr>
        <tr>
          <p>パスワード</p>
          <input type="text" name="password"class="form-input">
        </tr>
      </td>
      <input type="submit" value="新規登録" class="form-input" >
    </form>
  </div>
  
  <footer>
    <div id="footermenu" class="inner">
      <ul>
        <li class="title">ホーム</li>
        <li><a href="contact.html" class="footer-link">お問い合わせ</a></li>
        <li><a href="company.html" class="footer-link">会社概要</a></li>
      </ul>
      <ul>
        <li class="title">メニュータイトル01</li>
        <li><a href="#" class="footer-link">メニューサンプル</a></li>
        <li><a href="#" class="footer-link">メニューサンプル</a></li>
        <li><a href="#" class="footer-link">メニューサンプル</a></li>
        <li><a href="#" class="footer-link">メニューサンプル</a></li>
        <li><a href="#" class="footer-link">メニューサンプル</a></li>
      </ul>
      <ul>
        <li class="title">メニュータイトル02</li>
        <li><a href="#" class="footer-link">メニューサンプル</a></li>
        <li><a href="#" class="footer-link">メニューサンプル</a></li>
        <li><a href="#" class="footer-link">メニューサンプル</a></li>
        <li><a href="#" class="footer-link">メニューサンプル</a></li>
        <li><a href="#" class="footer-link">メニューサンプル</a></li>
      </ul>
      <ul>
        <li class="title">メニュータイトル03</li>
        <li><a href="#" class="footer-link">メニューサンプル</a></li>
        <li><a href="#" class="footer-link">メニューサンプル</a></li>
        <li><a href="#" class="footer-link">メニューサンプル</a></li>
        <li><a href="#" class="footer-link">メニューサンプル</a></li>
        <li><a href="#" class="footer-link">メニューサンプル</a></li>
      </ul>
      <ul>
        <li class="title">メニュータイトル04</li>
        <li><a href="#" class="footer-link">メニューサンプル</a></li>
        <li><a href="#" class="footer-link">メニューサンプル</a></li>
        <li><a href="#" class="footer-link">メニューサンプル</a></li>
        <li><a href="#" class="footer-link">メニューサンプル</a></li>
        <li><a href="#" class="footer-link">メニューサンプル</a></li>
      </ul>
    </div>
  </footer>
</body>
</html>