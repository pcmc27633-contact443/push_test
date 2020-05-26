<!DOCTYPE html>
<html>
<head>
<meta charset="utf-8">
<title>フォームデータの取得</title>
</head>

<body>
<?php
 print('お名前：'.htmlspecialchars($_POST['myname'],ENT_QUOTES). '<br>');
 print('性別：'.htmlspecialchars($_POST['gender'],ENT_QUOTES). '<br>');
 print('年齢：'.htmlspecialchars($_POST['age'],ENT_QUOTES). '<br>');
?>

</body>
</html>