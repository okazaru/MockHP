<?php
 mb_language("Japanese");
 mb_internal_encoding("UTF-8");
 $to = '';
 $title='テスト';
 $nameL=$_POST['LastName'];
 $nameF=$_POST['FirstName'];
 $stars = $_POST['star'];
 $content = $_POST['Comment'];
 
$message = '[姓]'."\n".$nameL."\n";
$message .= '[名]'."\n".$nameF."\n";
$message .= '[レビュー]'."\n".$stars."\n";
$message .= '[コメント]'."\n".$content."\n\n\n";
 if(mb_send_mail($to, $title, $message)){
 $uri = $_SERVER['HTTP_REFERER'];
  header("Location: ".$uri, true, 303);
 } else {
 echo "メールの送信に失敗しました";
 }
 ?>
 
