<?php
//XSS対応（ echoする場所で使用！それ以外はNG ）
function h($str){
    return htmlspecialchars($str, ENT_QUOTES);
}

//DB接続関数：db_conn()
function db_conn(){
    try {
        $db_name = "poly-tope_gs_bm";    //データベース名
        $db_id   = "poly-tope";      //アカウント名
        $db_pw   = "abcd1234";      //パスワード：XAMPPはパスワード無しに修正してください。
        $db_host = "mysql2011.db.sakura.ne.jp"; //DBホスト
        $pdo = new PDO('mysql:dbname='.$db_name.';charset=utf8;host='.$db_host, $db_id, $db_pw);
        return $pdo;
    } catch (PDOException $e) {
        exit('DB Connection Error:'.$e->getMessage());
    }
}

// function db_conn(){
//     try {
//         // $db_name = "poly-tope_gs_bm";    //データベース名
//         // $db_id   = "poly-tope";      //アカウント名
//         // $db_pw   = "aaaaaaaa123";      //パスワード：XAMPPはパスワード無しに修正してください。
//         // $db_host = "mysql57.poly-tope.sakura.ne.jp"; //DBホスト
//         $pdo = new PDO('mysql:dbname=poly-tope_gs_bm;charset=utf8;host=mysql57.poly-tope.sakura.ne.jp', 'poly-tope', 'aaaaaaaa123');
//         return $pdo;
//     } catch (PDOException $e) {
//         exit('DB Connection Error:'.$e->getMessage());
//     }
// }




//SQLエラー関数：sql_error($stmt)
function sql_error($stmt){
    $error = $stmt->errorInfo();
    exit("SQLError:".$error[2]);
}



//リダイレクト関数: redirect($file_name)
function redirect($file_name){
    header("Location: ".$file_name);
    exit();
}





