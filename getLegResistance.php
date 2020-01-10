<?php
    // 文字コード設定
    header('Content-Type: application/json');

    if(isset($_GET["legname"]) && isset($_GET["strength"]) && !preg_match('/[^0-9]/', $_GET["strength"])) {
        $param_legName = htmlspecialchars($_GET["legname"]);
        $param_strength = htmlspecialchars($_GET["strength"]);

        // メイン処理
        $arr["status"] = "yes";
        
        $host = 'localhost';
        $username = 'user';
        $password = 'user';
        $dbname = 'bbps4';

        $link = mysqli_connect($host, $username, $password, $dbname);
        if (mysqli_connect_errno()) {
            die("データベースに接続できません:" . mysqli_connect_error() . "\n");
        }

        if ($param_strength < 3){
            $table = 'parts_leg_unstrangth';
        }else {
            $table = 'parts_leg_strangth';
        }

        $query = 'select weight_resistance from ' .$table .' where name = \'' .$param_legName .'\';';
        $reslt = $link->query($query);
        $array = $reslt->fetch_row();

        echo json_encode($array, JSON_PRETTY_PRINT);
    } else {
        echo $_GET["legname"];
        // paramの値が不適ならstatusをnoにしてプログラム終了
        $arr["status"] = "no";
    }
?>