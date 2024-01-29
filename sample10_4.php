<?php
/* secure属性の設定
引数部分に「true」をセットすると、安全な接続時（https通信)
のみクッキーを送るようになる。*/

setcookie("user_id",$_POST["id"],time()+60*60*24*7,"/","manabiya-sakura.com",true);
?>