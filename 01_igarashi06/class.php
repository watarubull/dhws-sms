<?php 
    $page = "class";
    include 'select-class.php';
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
                    <li><a href="student.php">受講生一覧</a></li>
                    <li><a href="./class.php">クラス一覧</a></li>
                </ul>
            </div>
            <div class="content">
                <h2 class="heading">クラス一覧</h2>
                <div class="list-wrap">
                    <table class="class-list">
                        <tbody>
                            <tr>
                                <th>クラス名</th>
                                <th>受講期間（ヶ月）</th>
                            </tr>
                            <?= $output ?>
                        </tbody>
                    </table>
                </div>
                <div class="form-wrap">
                    <form action="./add-class.php" method="POST">
                        <div class="input-wrap flex">
                            <label>
                                クラス名
                                <input type="text" name="className" />
                            </label>
                            <label>
                                受講期間（ヶ月）
                                <input type="text" name="courseTerm" />
                            </label>
                            <input type="submit" value="追加">
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div></main>

    <footer id="footer" class="flex single center">
        <p class="copy">&copy; dhws-sms</p>
    </footer>


</body>

</html>
