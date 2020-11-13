<?php 
    if (($_GET[id] == "john") && ($_GET[pwd]=="john1234"))  //if式  如果id是john 且 pwd是john1234 時
        echo "Welcome";                                     //顯示Welcome
    else						    //不是的話
        echo "fail login";				    //顯示fail login
?>