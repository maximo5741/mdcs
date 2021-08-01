<?php
/**
 * Created by PhpStorm.
 * User: max
 * Date: 6/1/18
 * Time: 9:16 PM
 */


$connect = new mysqli('','','','mdcs');
if($connect->connect_errno){
    echo "Field to connect to MySQL database:". $connect->connect_errno ."" . $connect->error ;
}
