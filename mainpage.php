<?php
include dirname(__FILE__) . "/head.php"
?>
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
}
?>
</body>
<?php
include dirname(__FILE__) . "/footer.php"
?>