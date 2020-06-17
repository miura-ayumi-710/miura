<?php
    $pdo = new PDO('sqlite:test1.sqlite3');
    $pdo -> setAttribute(PDO::ATTR_DEFAULT_FETCH_MODE,PDO::FETCH_ASSOC);
    $sql='INSERT INTO TestTable(Name) VALUES(:aaa)';
    $data = array('aaa'=>$_GET['kuma']);
    $stmt = $pdo->prepare($sql);
    if($stmt->execute($data)){
        print '成功';
    }else{
        print '失敗';
    }