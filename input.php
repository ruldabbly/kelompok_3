<?php
include "koneksi.php";

$input=$con->query("insert into kel3(nama,email,password)values('$_POST[nama]','$_POST[email]','$_POST[password]')"); 
?>
<script>
    document.location.href='index.php';
</script>