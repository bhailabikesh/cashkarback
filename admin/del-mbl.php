<?php 
ob_start();
include "connection.inc.php";
if(isset($_GET['mid'])){
    $id = $_GET['mid'];
    $del_sql = "DELETE from model where id ='$id'";
    $queryDel = mysqli_query($connect,$del_sql);
    if($queryDel){
        header("location:models.php?action=delete&success=true");
    }else{
        header("location:models.php?action=delete&success=false");
    }
}
?>