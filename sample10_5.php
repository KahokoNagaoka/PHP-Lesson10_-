<?php
/* httponly属性の設定
引数に「true」を設定すると、HTTP専用のクッキーであることを設定できる。
JavaScript等でクッキーにアクセスすることができなくなり、XSS等をある程度予防できるようになる*/

setcookie("user_id",$_POST["id"],time()+60*60*24*7,"/","manabiya-sakura.com",true,true);
?>