<?php

//1. POSTデータ取得
$first = $_POST['first'];
$second = $_POST['second'];
$third = $_POST['third'];
$memo = $_POST['memo'];

//2. DB接続します
$db_name = 'indigofrog33_php02';               // データベース名
$db_host = 'mysql3104.db.sakura.ne.jp';        // DBホスト
$db_id   = 'indigofrog33_php02';               // ユーザー名
$db_pw   = 'rine0128';                         // パスワード

try {
    $server_info = 'mysql:dbname=' . $db_name . ';charset=utf8;host=' . $db_host;
    $pdo = new PDO($server_info, $db_id, $db_pw);
} catch (PDOException $e) {
    exit('DB Connection Error:' . $e->getMessage());
}

// 1. SQL文を用意
$stmt = $pdo->prepare("INSERT INTO gs_bm_table(id, first, second, third, memo, date)
                        VALUES(NULL, :first, :second, :third, :memo, now())");

//  2. バインド変数を用意
$stmt->bindValue(':first', $first, PDO::PARAM_STR);
$stmt->bindValue(':second', $second, PDO::PARAM_STR);
$stmt->bindValue(':third', $third, PDO::PARAM_STR);
$stmt->bindValue(':memo', $memo, PDO::PARAM_STR);

//  3. 実行
$status = $stmt->execute();

//４．データ登録処理後
if($status === false){
  $error = $stmt->errorInfo();
  exit('ErrorMessage:'.$error[2]);
}else{
  header('Location: select.php');
  exit();
}
?>