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
  if(isset($_SESSION['EMAIL'])){
    echo "This is main page";
}else{header('Location: http://localhost/registration.php');
}
?>
<body>
  <div class="contents_main">
    <h1 class="my-3 ml-3">読んだ本リスト</h1>
    <a type="button" class="btn btn-success" style="margin: 10px 0 10px 0; height:50px;   line-height: 33px;" href="book_registration.php">読んだ本を登録する</a>
    <div class="col-5 ml-3">
        <div class="card">
            <div class="card-header"></div>
            <table class="table table-bordered table-striped table-hover">
                <thead>
                    <tr>
                        <th id="table_title＿id">番号</th>
                        <th id ="table_title__name">本のタイトル</th>
                        <th id="table_title__description">本の説明</th>
                    </tr>
                </thead>
                <tbody>
                    <tr>
                    <?php
                      ?>
                        <td style="width:8%;">1</td>
                        <td style="width:35%; font-weight: bold;">エンジニア1</td>
                        <td>PHP</td>
                    </tr>
                    <tr>
                        <td>2</td>
                        <td>エンジニア2</td>
                        <td>Ruby</td>
                    </tr>
                    <tr>
                        <td>3</td>
                        <td>エンジニア3</td>
                        <td>VBA</td>
                    </tr>
                    <tr>
                        <td>4</td>
                        <td>エンジニア4</td>
                        <td>JAVA</td>
                    </tr>
                    <tr>
                        <td>5</td>
                        <td>エンジニア5</td>
                        <td>Python</td>
                    </tr>
                </tbody>
            </table>
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