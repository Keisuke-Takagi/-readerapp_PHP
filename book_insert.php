<?php
include dirname(__FILE__) . "/head.php"
?>
  <title>本の登録情報エラー</title>
</head>
<body>
<body>
  <header id="header">
    <div class="app-icons">
      <nav class="navbar navbar-default">
        <div class="container-fluid">
          <div class="navbar-header">
            <a class="navbar-brand" href="registration.php">READ-BOOK-RECORDER</a>
            <div class="login-icon">
              <i class="fa fa-user" id="user-login-icon"  aria-hidden="true"></i>
              <a href="logout.php">ログアウト</a>
              <a href="mainpage.php">メインページ</a>
            </div>
          </div>
        </div>
      </nav>
    </div>
  </header>
  <div class="main">
      <h1> 登録機能ページ</h1>
      <?php
      $dbh = new PDO("mysql:host=127.0.0.1; dbname=test; charset=utf8", 'root', '');
      if(isset($_POST['title']) && $_POST['title'] != ""){
        // header('Location: http://localhost/mainpage.php');
        session_start();
        $title = $_POST['title'];
        $description = $_POST['description'];
        $stmt = $dbh->prepare('select * from users where email = ?');
        $stmt->execute([$_SESSION['EMAIL']]);
        $row = $stmt->fetch(PDO::FETCH_ASSOC);
        var_dump($row);
        $user_id = $row['id'];
        $_SESSION['USER_ID'] = $user_id;
        $_SESSION['EMAIL'] = $_SESSION['EMAIL'];
        echo '<br />';
        echo $_SESSION['USER_ID'];
        echo '<br />';
        echo $_SESSION['EMAIL'];

        // ここから登録
        $stmt = $dbh->prepare('INSERT INTO `books`(`title`, `description`, `user_id`) 
        VALUES (:title, :description, :user_id)');
        $array = array(':title' => $title, 'description' => $description, 'user_id' => $user_id);
        $stmt->execute($array);
      }else{
        echo "本のタイトルを入力してください";
      }
      ?>
  </div>