<?php
class main{
  function __construct(){
    include('template/header.php');
    include('template/menu.php');
    /*
    construct terpanggil duluan sebelum yang lain dipanggil.
    kaya init gitu.
    */
  } 

  function __destruct(){
    include('template/footer.php');
    /*
    destruct terpanggil paling belakangan setelah proses semua dipanggil
    */
  }

  public function getPage($page) #variabel page disiapkan disini, namanya bebas gk harus page
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
    
    //Ini contoh fungsi menampilkan halaman
    
  }
}
#page mengambil parameter pada header get request
$page = isset($_GET['page']) ? $_GET['page'] : 'main';

#memanggil class main
$main = new Main();

#menginput $page ke parameter
$main->getPage($page);
?>