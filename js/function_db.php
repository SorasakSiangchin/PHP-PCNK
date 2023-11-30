<?php
    function connect () {
        $servername = 'localhost';
        $username = 'root';
        $password = '';
        $dbname = 'db_pcnk01';

        try {
            $conn = new PDO("mysql:host=$servername;dbname=$dbname;charset=utf8", $username, $password);
            $conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
            return $conn;
        } catch(PDOException $e) {
            echo "Error : " . $e->getMessage();
        }
    };

    // แสดงข้อมูล
    function selectSql($sql){
        $conn = connect();
        $sth = $conn->prepare($sql);
        $sth->execute();
        $rows = $sth->fetchAll(PDO::FETCH_ASSOC);
        $conn = null;
        return $rows;
    }

    function in_up_delSql($sql){
        $conn = connect();
        $sth = $conn->prepare($sql);
        $sth->execute();
        $conn = null;
        return false;
    }
 ?>