<?
    function mysqlConnect()
    {
        $mysqlDB = new mysqli('localhost', 'root', 'clzls123', 'test_board');
        if ($mysqli->connect_errno)
        {
            return false;
        }

        return $mysqlDB;
    }

    function selectSQL($mysqlDB, string $TABLE) {  // 테이블 출력
        if($mysqlDB) {
            $sql = "select * FROM $TABLE";
            return $sql;
        }
        else return false;
    }

    function selectSQL_option($mysqlDB, string $TABLE,string $COL,string $OPTION,int $var) {
        if($mysqlDB && $var==1) {
            $sql = "select * FROM $TABLE where $COL LIKE '%$OPTION%'  ORDER BY number DESC limit 0,10 ;";
            return $sql;
        }
        else if($mysqlDB && $var==2) {
            $sql = "select COUNT(*) FROM $TABLE where $COL LIKE '%$OPTION%'  ORDER BY number DESC limit 0,10 ;";
            $result = mysqli_query($mysqlDB,$sql);
            $row=mysqli_fetch_assoc($result);
            $NUMBER = $row['COUNT(*)'];
             return $NUMBER;
            
        }
        else return false;
    }

    function selectSQL_reverse($mysqlDB, string $TABLE,string $COL) {  //테이블 역순 출력  
        if($mysqlDB) {
            $sql = "select * FROM $TABLE ORDER BY $COL DESC limit 0,10";
            return $sql;
        }   
        else return false;
    }

    function selectSQL_reverse_test($mysqlDB, string $TABLE,string $COL,int $start, int $limit) {  //테이블 역순 출력  
        if($mysqlDB) {
            $sql = "select * FROM $TABLE ORDER BY $COL DESC limit $start,$limit";
            return $sql;
        }
        else return false;
    }


    
    function getCount_table($mysqlDB, string $TABLE) {  // 테이블 크기 조회 
        $sql = "SELECT COUNT(*) FROM $TABLE";
        $result = mysqli_query($mysqlDB,$sql);
        $row=mysqli_fetch_assoc($result);
        $NUMBER = $row['COUNT(*)'];
        return $NUMBER;
    }


    function FindSQL($mysqlDB, string $TABLE) {  
        if($mysqlDB) {
            $sql = "select * FROM $TABLE";
            return $sql;
        }
        else return false;
    }


    //자바스크립트 함수

    function alerting(string $input) {
        echo "
             <script>
                alert('$input');
            </script>   
        ";
        
    }
    
    function location(string $href){
        echo 
        "<script>
            location.href = '$href';
        </script>";
    }
    