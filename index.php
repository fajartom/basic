<?php
class main{
  function __construct(){
    include('template/header.php');
    include('template/menu.php');
  } 

  function __destruct(){
    include('template/footer.php');
  }

  public function getPage($page)
  {
    if($page=='main') {
      include('content/main.php');
    }
    else if($page=='assets') {
      include('content/assets.php');
    }
    else if($page=='phpintro') {
      include('content/php_tricks.php');
    }else{
      include('content/main.php');
    }   
  }
}
$page = isset($_GET['page']) ? $_GET['page'] : 'main';
$main = new Main();
$main->getPage($page);
return $main;
?>