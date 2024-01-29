<?php
// 1週間の有効期限を設定する場合
setcookie("user_id",$_POST["id"],time()+60*60*24*7);

// cookieを削除したい場合
time()-1
?>