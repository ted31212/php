<?php
    $conn = mysqli_connect("localhost", "root", "", "mydb");	//�c�ŷ����B�Y("���C����IPλ��","�Ñ���","�ܴa","ʹ�õĔ�����")
    
    $result=mysqli_query($conn, "select * from user");		//�������ԃ

    $row=mysqli_fetch_array($result);				//ȡ�Ô������ֵ

    echo $row[id] + " " + $row[pwd]; 				//�@ʾid pwd
?>