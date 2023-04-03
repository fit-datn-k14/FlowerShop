<?php
require_once("database.php");
class M_logo extends database
{
    function doc_logo(){
        $sql = "select logo from contact";
        return $this->loadRow($sql);
    }
    function update_logo($hinh){
        $sql = "UPDATE contact SET logo='$hinh' WHERE id = 1";
        return $this->execute($sql);
    }
}
?>
