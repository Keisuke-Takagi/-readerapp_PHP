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
  <title>ユーザー追加ページ</title>
</head>
<body>
  <?php
    $count = 0;
    $dbh = new PDO("mysql:host=127.0.0.1; dbname=record_book; charset=utf8", 'root', 'password');
    $email = $_POST['email'];
    $password = $_POST['password'];
    echo $email;
    echo $password;
    if(isset($email)){
      if(isset($password)){
        $db_emails = "SELECT email FROM users";
        // query()で初めてDB検索が実行
        foreach ($dbh->query($db_emails, PDO::FETCH_BOTH) as $value) {
          var_dump($value);
          if($value["email"] == $email){
            $count = 1;
          }
        }
        if($count == 0){$sql = "INSERT INTO users (
          email, password) VALUES (:email,:password
        )";

        $stmt = $dbh->prepare($sql);
        $params = array(':email' => $email, ':password' => $password);
        $stmt->execute($params);
        }
      }
    }
  ?>
  <a href="registration.php">もどる</a>
</body>
</html>