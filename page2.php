<?php

    $conn = new PDO('mysql:host=localhost;dbname=makemates', 'root', '');
        $conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);

        print_r($_POST);

        echo $newCount;
        $query = 'SELECT * FROM textpost LIMIT ' . $newCount;
        
        $stmt = $conn->query($query);

        while($data = $stmt->fetch(PDO::FETCH_LAZY)){
            $fData[ ] = $data;
        }

        echo "<pre>";
        print_r($fData);
        echo "</pre>";






?>