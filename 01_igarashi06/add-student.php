<?php
    //変数の設定
    $message = "";
    $status = 1;
    //エラー回避して変数に代入
    $stuID = isset($_POST['stuID']) ? $_POST['stuID'] : "";
    $stuName = isset($_POST['stuName']) ? $_POST['stuName'] : "";
    $stuRuby = isset($_POST['stuRuby']) ? $_POST['stuRuby'] : "";
    $stuBirth = isset($_POST['stuBirth']) ? $_POST['stuBirth'] : "";
    $classID = isset($_POST['classID']) ? $_POST['classID'] : "";

    //ポストがある時
    if(!empty($_POST)){
        //入力有無のチェック
        if($stuID==""||$stuName==""||$stuRuby==""||$stuBirth==""||$classID==""){
            $message = "入力されていない項目があります。";
            $status = 2;
        }else{
            $message = "";
            $status = 1;

            // 各種項目設定
            $dbn ='mysql:dbname=gsacs_d03_01;charset=utf8;port=3306;host=localhost';
            $user = 'root';
            $pwd = '';

            // DB接続
            try {
                $pdo = new PDO($dbn, $user, $pwd);
                // SQL作成&実行
                $sql = 'INSERT INTO stu_table (stuID,stuName,stuRuby,stuBirth,classID) VALUES (:stuID, :stuName, :stuRuby,:stuBirth,:classID)';

                $stmt = $pdo->prepare($sql);

                // バインド変数を設定
                $stmt->bindValue(':stuID', $stuID, PDO::PARAM_STR);
                $stmt->bindValue(':stuName', $stuName, PDO::PARAM_STR);
                $stmt->bindValue(':stuRuby', $stuRuby, PDO::PARAM_STR);
                $stmt->bindValue(':stuBirth', $stuBirth, PDO::PARAM_STR);
                $stmt->bindValue(':classID', $classID, PDO::PARAM_STR);

                // SQL実行（実行に失敗すると$statusにfalseが返ってくる）
                $statusDB = $stmt->execute();

                if ($statusDB == false) {
                    $error = $stmt->errorInfo();
                    exit('sqlError:'.$error[2]);
                } else {
                    header('Location:index.php');
                }

            } catch (PDOException $e) {
                echo json_encode(["db error" => "{$e->getMessage()}"]);
                exit();
            }
        }
    }

?>