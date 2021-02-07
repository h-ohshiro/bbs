<?php
$name=$_POST['name'];
$pass=$_POST['pass'];
$login=$_POST['login'];

try {
  if(isset($login)==true){
    if ($name=='' || $pass=='') {
      print '名前またはパスワードが入力されていません。';
      print '<a href="top_page.html">戻る</a>';
    }

  }





} catch (\Throwable $th) {
  //throw $th;
}

?>
