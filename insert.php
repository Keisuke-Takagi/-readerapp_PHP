<?php
include dirname(__FILE__) . "/head.php"
?>
<title> 新規登録情報エラー</title>
<body>
  <?php
    $count = 0;
    $dbh = new PDO("mysql:host=127.0.0.1; dbname=test; charset=utf8", 'root', '');
    if (!$email = filter_var($_POST['email'], FILTER_VALIDATE_EMAIL)) {
      echo '入力された値が不正です。';
      return false;
    }
    if (preg_match('/\A(?=.*?[a-z])(?=.*?\d)[a-z\d]{5,20}+\z/i', $_POST['password'])) {
      $password = password_hash($_POST['password'], PASSWORD_DEFAULT);
    } else {
      echo 'パスワードは半角英数字をそれぞれ1文字以上含んだ5文字以上で設定してください。';
      return false;
    }
    ?>
    <p>
    <?php
    if(isset($email)){
      if(isset($password)){
        $db_emails = "SELECT email FROM users";
        // query()で初めてDB検索が実行
        foreach ($dbh->query($db_emails, PDO::FETCH_BOTH) as $value) {
          var_dump($value);
          if($value["email"] == $email){
            $count = 1;
            echo 'そのメールアドレスは既に登録されています';
          }
        }
        if($count == 0){header('Location: http://localhost/mainpage.php');
          $insert = "INSERT INTO users (
          email, password) VALUES (:email,:password
        )";
        $stmt = $dbh->prepare($insert);
        $params = array(':email' => $email, ':password' => $password);
        $stmt->execute($params);
        // ログインの処理
        session_start();
        session_regenerate_id(true);
        $_SESSION['EMAIL'] = $value["email"];
        exit;
        }
      }
    }
  ?>
  </p>
  <a href="registration.php">もどる</a>
  <?php
include dirname(__FILE__) . "/footer.php"
?>