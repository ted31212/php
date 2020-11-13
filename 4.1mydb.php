<?php
    $conn = mysqli_connect("localhost", "root", "", "mydb");	//與伺服器連結("主機名或IP位子","用戶名","密碼","使用的數據庫")
    
    $result=mysqli_query($conn, "select * from user");		//數據庫查詢

    $row=mysqli_fetch_array($result);				//取得數據庫的值

    echo $row[id] + " " + $row[pwd]; 				//顯示id pwd
?>