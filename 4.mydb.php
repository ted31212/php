<?php
    error_reporting(0);						//不顯示錯誤
    
    $conn = mysqli_connect("localhost","root","", "mydb");	//與伺服器連結("主機名或IP位子","用戶名","密碼","使用的數據庫")
    if (mysqli_connect_error($conn))				//如果檢查連接錯誤
        die("資料庫連線錯誤");					//顯示資料庫連線錯誤並退出

    mysqli_set_charset($conn, "utf8");				//設置文字編碼
    $result=mysqli_query($conn, "select * from user");		//數據庫查詢
    while ($row=mysqli_fetch_array($result)) {			//重複 取得數據庫的值並
        echo $row[id];						//顯示出id
        echo " ";						//空格
        echo $row[pwd];						//顯示出pwd
        echo "<br>";						//換行
    }
?>