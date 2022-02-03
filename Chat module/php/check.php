<?php 

    if(in_array("mysql",pdo::getAvailableDrivers())){
        echo "iruku";
    }else{
        echo "illa";
    }


?>