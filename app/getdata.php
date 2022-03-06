<?php
    //  sqlsrv_get_field() - Gets field data from the currently selected row
    $severName = "DESKTOP-LH0LVCT\ZEROTWO";
    $connectionInfo = array("Database"=>"data-garbage","UID"=>"sa","PWD"=>"zerotwo002");
    $conn = sqlsrv_connect($severName,$connectionInfo);
    if($conn){
        $queryLoadData = "SELECT latitude,longitude,kind FROM latlng";
        $dataAll = sqlsrv_query($conn,$queryLoadData);
        while($column = sqlsrv_fetch_array($dataAll)){
            echo $column['latitude'];
            echo " ";
            echo $column['longitude'];
            echo " ";
            echo $column['kind'];
            echo "\n";
        }
    }
    else if($conn ===false){
        die( print_r( sqlsrv_errors(), true));
    }
?>