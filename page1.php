<html>
<head>
    <title></title>    
    <style>
    #ulp{
        border: 1px solid black;
        width: 50%;
        height: 500px;
        margin: 4% auto;
        overflow: auto;
    }   
    </style>
</head>
<body>
    

    <div id="ulp">
<?php

        $conn = new PDO('mysql:host=localhost;dbname=makemates', 'root', '');
        $conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);


        $stmt = $conn->query('SELECT * FROM textpost LIMIT 5');

        while($data = $stmt->fetch(PDO::FETCH_ASSOC)){
            $fData[ ] = $data;
        }

        echo "<pre>";
        print_r($fData);
        echo "</pre>";
        
?>
    </div>


    <script src="jquery.min.js"></script>
    <script>

        $(document).ready(() => {
            iStart = 4;
            
            $('#ulp').scroll(()=>{
                reqHeight = $('#ulp')[0].scrollHeight - 550;
                scrollHeight = $('#ulp').scrollTop();
                iStart = iStart + 2;

                if(scrollHeight > reqHeight){
                    $(this).load('page2.php', { newCount : itart});
                }
            });
        });
        
    
    </script>
</body>
</html>