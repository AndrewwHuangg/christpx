<?php
require "function.php";

$id = $_GET["id"];

if(obatdelete($id) > 0){
    echo "<script>
            alert('data berhasil dihapus');
            document.location.href='tbobat.php';
        </script>";
}
else{
    echo "<script>
            alert('data gagal dihapus');
            document.location.href='tbobat.php';
        </script>";
}

?>