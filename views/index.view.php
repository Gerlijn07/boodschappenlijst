<?php require('partials/head.php'); ?>

    <table id="table1">
      <tr>
        <th scope="col">Product</th>
        <th scope="col">Prijs</th>
        <th scope="col">Aantal</th>
        <th scope="col">Subtotaal</th>  
      </tr>

      <?php foreach($groceries1 as $grocery){ ?>
      <tr>
        <td><?= $grocery['name'] ?></td>
        <td><?= $grocery['price'] ?></td>
        <td><?= $grocery['number'] ?></td>
        <td><?= $grocery['price'] * $grocery['number'] ?></td>
      </tr>
      <?php } ?>

      <?php $arr_toadd = [];
      foreach($groceries1 as $grocery){
      array_push($arr_toadd, $grocery['price'] * $grocery['number']);
      } ?>

      <tfoot>
        <td>Totaal</td>
        <td></td>
        <td></td>
        <td><?= array_sum($arr_toadd) ?></td>
      </tfoot>

    </table>
    
<?php require('partials/footer.php'); ?>
