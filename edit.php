<?php
include dirname(__FILE__) . "/head.php"
?>
  <title>登録情報編集</title>
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
              <a href="registration.php">ログアウト</a>
              <a href="mainpage.php">メインページへ</a>
            </div>
          </div>
        </div>
      </nav>
    </div>
  </header>
  <div class="main">
    <h1>本登録情報編集</h1>
      <form action="update.php" method="post" class=edit-book-form>
      <td>
        <div class="book-edit-box__title">
            <label>本のタイトル</label>
            <input type="text" name="title"" class="form-input">
        </div>
        <div class="book-edit-box__description">
            <label>感想・要約</label>
            <textarea name="description" cols="20" rows="10" class="form_book_description"></textarea>
        </div>
      </td>
      <button type="submit" class="btn btn-success btn-lg">編集を反映する</button>
    </form>
  </div>
  <?php
include dirname(__FILE__) . "/footer.php"
?>