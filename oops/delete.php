<?php 
include "db.php";

$deletedata = new DB_con;

$id = $_GET['id'];
echo $id;

if(isset($_GET['id'])){
    echo "success";
    $sql = $deletedata -> delete($id);
    
    if($sql){
        echo "<script>alert('Record Deleted Successfully');</script>";
        echo "<script>window.location.href='view.php'</script>";
    }
    
}
?>