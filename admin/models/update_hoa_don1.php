<?php
    if(isset($_POST['update_id'])){
        $id = $_POST['update_id'];
        include("database.php");
        $db = new database();
        $sql = "UPDATE hoa_don set  trang_thai = 'Hoàn Thành' WHERE ma_hoa_don = $id";
        return $db->execute($sql);
    }
?>