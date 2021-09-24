<?php
    // 各種項目設定
    $dbn ='mysql:dbname=gsacs_d03_01;charset=utf8;port=3306;host=localhost';
    $user = 'root';
    $pwd = '';

    // DB接続
    try {
        $pdo = new PDO($dbn, $user, $pwd);
        // SQL作成&実行
        $sql = 'SELECT * FROM stu_table';
        $stmt = $pdo->prepare($sql);
        $statusDB = $stmt->execute();
        if ($statusDB == false) {
            $error = $stmt->errorInfo();
            exit('sqlError:'.$error[2]);
        } else {
            $result_stu = $stmt->fetchAll(PDO::FETCH_ASSOC);
            $output = "";
                foreach ($result_stu as $record) {
                    $output .= "
                        <tr>
                            <td>{$record["stuID"]}</td>
                            <td>{$record["stuName"]}</td>
                            <td>{$record["stuRuby"]}</td>
                            <td>{$record["stuBirth"]}</td>
                            <td class='classID'></td>
                        </tr>
                    ";
                }
            
        }

    } catch (PDOException $e) {
        echo json_encode(["db error" => "{$e->getMessage()}"]);
        exit();
    }
?>