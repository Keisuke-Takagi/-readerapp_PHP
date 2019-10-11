<?php
  $url = explode("/", $_SERVER["REQUEST_URI"]);
  var_dump($url);
  $baseurl = "";
  foreach ($url as $num => $val) {
    if($num === 0){
      continue;
    }elseif($num == count($url) - 1){
      $baseurl .= ucfirst($val);
    }else{
      $baseurl .= $val . "\\";
    }
  }
  echo $baseurl;
  // クラスを呼ぶときに使用
  $controller =  $baseurl . "controller";
  $view = $baseurl."view";
  echo "<br> これview".$view;
  echo '<br>これcontroller     [' . $controller . "]   ⇒事前に作ったファイルのパスを生成した <br>";
  $template = strtolower($baseurl) . "_template.html";
  
  require_once("controllers/" .strtolower($baseurl) ."_controller.php");
  require_once("views/" .strtolower($baseurl) ."_view.php");

  $a = new $controller();
  $dispData = $a->exec();
  $v = new Mainpageview();

  $template = __DIR__."\\template\\".$template;

  $v->prerender($template, $dispData);
?>