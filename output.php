<table class= "table">
        <tr>

        <th>nama</th>
        <th>email</th>
        <th>password</th>
    </tr>
    <?php

    include "koneksi.php";
    $output =$con->query("select*from kel3");
    foreach($output as $data){
    ?>
      <tr>
          <td><?=$data ['nama'] ?></td>
          <td><?=$data ['email'] ?></td>
          <td><?=$data ['password'] ?></td>
          <td><a href="delete.php?id=<?=$data['no'] ?>" class="btn btn-danger"><i class="bi bi-trash3-fill"></i></a></td>
      <tr>
     <?php
     }
     ?>
  </table>

<?php

?>
</table>