<?php 
    if (($_GET[id] == "john") && ($_GET[pwd]=="john1234"))  //ifʽ  ���id��john �� pwd��john1234 �r
        echo "Welcome";                                     //�@ʾWelcome
    else						    //���ǵ�Ԓ
        echo "fail login";				    //�@ʾfail login
?>