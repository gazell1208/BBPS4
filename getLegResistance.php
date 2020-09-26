<?php
    // 文字コード設定
    header('Content-Type: application/json; charset=UTF-8');

    if(isset($_GET["legid"]) && isset($_GET["strength"]) && !preg_match('/[^0-9]/', $_GET["strength"])) {
        $param_legid = htmlspecialchars($_GET["legid"]);
        $param_strength = htmlspecialchars($_GET["strength"]);

        // メイン処理
        $arr["status"] = "yes";
        
        // $host = '157.112.187.131';
        // $username = 'bbps4assem_user';
        // $password = 'ZAQ12wsx';
        // $dbname = 'bbps4assem_bbps4';

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

        $query = 'select weight_resistance from ' .$table .' where id = \'' .$param_legid .'\';';
        $reslt = $link->query($query);
        $array = $reslt->fetch_row();

        echo json_encode($array, JSON_PRETTY_PRINT);
    } else {
        echo $_GET["legid"];
        // paramの値が不適ならstatusをnoにしてプログラム終了
        $arr["status"] = "no";
    }
?>