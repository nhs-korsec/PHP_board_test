<?
    include_once "../include/dbConnection.php";
    $mysqlDB = mysqlConnect();
    if(!$mysqlDB) {
        echo "<script>alert('DB연결 실패');</script>";
        exit;
    }

    $subject = $_POST['subject']; // 게시글 제목
    $body = $_POST['body']; // 게시글 내용
    $writer = $_POST['writer'];
    $password = $_POST['password'];
   
    $select = $_POST['selected'];
    if($select == 'new_write') {  

        $sql = "INSERT INTO board SET
                number = NULL,
                subject = '$subject',
                writer = '$writer',
                body = '$body',
                date = NOW(),
                password = '$password',
                visited = 0;
                ";

        $result = mysqli_query($mysqlDB,$sql);    
        alerting("게시글 작성 완료");        
        location("../main/list.php");

        mysqli_close($mysqlDB);
    }
    else if($select == 'modify') {
        $number = $_POST['number'];
        $findSQL =FindSQL($mysqlDB,'board','number',$number);
        $result = mysqli_query($mysqlDB,$findSQL);

        $row = mysqli_fetch_assoc($result);

        
        $sql = "UPDATE board SET
                number = $number,
                subject = '$subject',
                writer = '$writer',
                body = '$body',
                date = NOW(),
                password = '$password',
                visited = ".$row['visited']."
                WHERE number = $number
                ";
        
        $result = mysqli_query($mysqlDB,$sql);   
        alerting("게시글 수정 완료");         
        echo "
            <script>
                location.href= '../content/content.php?number=$number';
            </script>
        ";
        mysqli_close($mysqlDB);
        }

          
?>


