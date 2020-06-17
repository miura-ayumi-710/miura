<?php
    $pdo = new PDO('sqlite:test1.sqlite3');
    $pdo->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
    $pdo->setAttribute(PDO::ATTR_DEFAULT_FETCH_MODE, PDO::FETCH_ASSOC);
    $stmt = $pdo->prepare("SELECT * FROM TestTable");
    $stmt->execute();
    $result = $stmt->fetchAll();
    echo json_encode($result , JSON_PRETTY_PRINT|JSON_UNESCAPED_UNICODE|JSON_UNESCAPED_SLASHES);
?>