<?php 
    include 'select-student.php';
?>

<!DOCTYPE html>
<html lang="ja">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>dhws-sms</title>
    <link rel="stylesheet" href="./style.css">
</head>

<body class="bg-black">
    <header id="page-header" class="fixed-nav">
        <div class="inner flex align-item-c">
            <h1 class="logo">dhws-sms</h1>
        </div>
    </header>

    <main id="class"><div class="full-h-box">
        <div class="layout inner flex">
            <div class="side">
                <ul class="side-list">
                    <li><a href="./index.php">受講生登録</a></li>
                    <li><a href="./student.php">受講生一覧</a></li>
                    <li><a href="./class.php">クラス一覧</a></li>
                </ul>
            </div>
            <div class="content">
                <h2 class="heading">受講生一覧</h2>
                <div class="list-wrap">
                    <table class="class-list">
                        <tbody>
                            <tr>
                                <th>受講ID</th>
                                <th>受講生氏名</th>
                                <th>ふりがな</th>
                                <th>生年月日</th>
                                <th>クラス名</th>
                            </tr>
                            <?= $output ?>
                        </tbody>
                    </table>
                </div>
            </div>
        </div>
    </div></main>

    <footer id="footer" class="flex single center">
        <p class="copy">&copy; dhws-sms</p>
    </footer>

    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>

    <?php
        $page = "student";
        include 'select-class.php';
    ?>
    <script>
        // PHPのデータをJSに渡す
        const resultArray = <?=json_encode($result) ?>;
        const resultStuArray = <?=json_encode($result_stu) ?>;
        console.log(resultArray);
        console.log(resultStuArray);

        const listNm = $(".class-list tr").length;
        for(let i = 1;i<listNm;i++){
            let classID = resultStuArray[i-1].classID;
            $(".class-list tr").eq(i).find("td:last-child").html(resultArray[classID-1].className);
        }
    </script>

</body>

</html>
