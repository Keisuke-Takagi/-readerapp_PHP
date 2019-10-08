<?php
include dirname(__FILE__) . "/head.php"
?>
<title>登録本一覧</title>
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
              <a href="logout.php">ログアウト</a>
            </div>
          </div>
        </div>
      </nav>
    </div>
  </header>
<?php
    session_start();
//   if(isset($_SESSION['EMAIL'])){
//     echo "This is main page";
// }else{header('Location: http://localhost/registration.php');
// }
?>
<body>
  <div class="contents_main">
    <h1 class="my-3 ml-3">読んだ本リスト</h1>
    <a type="button" class="btn btn-success" style="margin: 10px 0 10px 0; height:50px;   line-height: 33px;" href="book_registration.php">読んだ本を登録する</a>
    <div class="col-5 ml-3">
        <div class="card">
            <div class="table-responsive">
            <table class="table table-responsive-sm table-bordered table-striped table-hover table-responsive">
                <thead>
                    <tr>
                        <th id="table_title＿id" style="width: 13%;">本のID</th>
                        <th id ="table_title__name" style="width: 24%">本のタイトル</th>
                        <th id="table_title__description" style~"">本の説明</th>
                        <th id="table_title__menu" style="width: 13%;">編集・削除</th>
                    </tr>
                </thead>
                <tbody>
                    
                        
                        <?php
                          error_reporting(E_ALL);
                          ini_set('display_errors', '1');
                          $a = 1;
                          if($a == 1){
                            if (!isset($_SESSION)) {
                              session_start();
                              }
                              $dbh = new PDO("mysql:host=127.0.0.1; dbname=test; charset=utf8", 'root','');
                              $stmt = $dbh->prepare('select * from users where email = ? ');
                              $stmt->execute([$_SESSION['EMAIL']]);
                              $row = $stmt->fetch(PDO::FETCH_ASSOC);
                              $user_id = $row['id'];
                              $_SESSION['USER_ID'] = $user_id;
                              $sql = 'select * from books where user_id = ? limit 100';
                              $stmt2 = $dbh->prepare($sql);
                              $stmt2->execute(array($user_id));
                              $results = $stmt2->fetchAll(PDO::FETCH_ASSOC);
                              var_dump($results);
                              $count = count($results);
                              $_SESSION['COUNT'] = $count;
                              echo $count;
                              $num = 0;
                              // if($num  < $count){
                                // echo '<tr>';
                                // echo '<br />';
                                // echo '$resultこれ';
                                // var_dump($result)
                                // 本のタイトルが横続きになっている
                                // echo $result["title"];

                                // echo'<td style="width:8%;">
                                //       <p>';
                                //     echo $results[$num]["id"];
                                //   echo'</p>
                                //         <a href="delete,php" class="btn-danger">
                                //           <input type="hidden" method="post" value=""> 
                                //           削除する
                                //         </a>
                                //       </td>';
                                // echo '</tr>';
                                // $num += 1;
                              // }
                              while($num  < $count){
                              echo  '<tr>
                                      <td><p>';
                              echo  $num + 1;
                              echo  ' </p></td>
                                      <td><p>';
                              echo  $results[$num]["title"];
                              echo  '  </p></td>
                                      <td><p>';
                              echo  $results[$num]["description"];
                              echo  '</p></td>
                                      <td><p>
                                      <form action="delete.php" method="post" class="new-user-form">
                                      <input type="hidden"name="';
                                      echo $_SESSION['COUNT'];
                                      echo '" class="btn btn-danger"value="';
                                      echo  $results[$num]["id"];
                                      echo'">
                                      <input type="submit" class="btn btn-danger" value="削除">
                                      </form></p>
                                      <form action="edit.php" method="post" class="edit-book-form">
                                      <input type="hidden"name="';
                                      echo $_SESSION['COUNT'];
                                      echo '" class="btn btn-danger"value="';
                                      echo $results[$num]["id"];
                                      echo '">
                                      <input type="submit" class="btn btn-danger" value="編集">
                                      </form></p></td>';
                                      ;
                              echo    '</tr>';
                              $num += 1;
                              }
                            }
                          ?>
                    <tr>
                        <td><?php
                        echo $_SESSION['USER_ID'];
                        echo $_SESSION['EMAIL'];
                        ?>
                        </td>
                        <td>エンジニア2</td>
                        <td>Ruby</td>
                    </tr>
                </tbody>
            </table>
          </div>

        </div>
    </div>
  </div>
 
    <!-- Optional JavaScript -->
    <!-- jQuery first, then Popper.js, then Bootstrap JS -->
    <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.3/umd/popper.min.js" integrity="sha384-ZMP7rVo3mIykV+2+9J3UJ46jBk0WLaUAdn689aCwoqbBJiSnjAK/l8WvCWPIPm49" crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/js/bootstrap.min.js" integrity="sha384-ChfqqxuZUCnJSK3+MXmPNIyE6ZbWh2IMqE241rYiqJxyMiZ6OW/JmZQ5stwEULTy" crossorigin="anonymous"></script>
</body>
<?php
include dirname(__FILE__) . "/footer.php"
?>