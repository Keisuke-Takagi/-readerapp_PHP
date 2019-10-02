<?php
include dirname(__FILE__) . "/head.php"
?>
<body>
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