<?php 
    $page = "index";
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

    <main id=""><div class="full-h-box">
    <div class="layout inner flex">
            <div class="side">
                <ul class="side-list">
                    <li><a href="./index.php">受講生登録</a></li>
                    <li><a href="student.php">受講生一覧</a></li>
                    <li><a href="./class.php">クラス一覧</a></li>
                </ul>
            </div>
            <div class="content">
                <h2 class="heading">受講生登録</h2>
                <div class="form-wrap">
                    <form action="./add-student.php" method="POST">
                        <dl>
                            <div>
                                <dt>受講生ID</dt>
                                <dd><input type="text" name="stuID" /></dd>
                            </div>
                            <div>
                                <dt>受講生氏名</dt>
                                <dd><input type="text" name="stuName" /></dd>
                            </div>
                            <div>
                                <dt>ふりがな</dt>
                                <dd><input type="text" name="stuRuby" /></dd>
                            </div>
                            <div>
                                <dt>生年月日</dt>
                                <dd><input type="date" name="stuBirth"></input></dd>
                            </div>
                            <div>
                                <dt>コース名</dt>
                                <dd>
                                    <select name="classID">
                                        <?= $output ?>
                                    </select>
                                </dd>
                            </div>
                        </dl>
                        <input type="submit" value="登録" />
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
