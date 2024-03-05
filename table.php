<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="style.css" type="text/css" rel="stylesheet" />
    <title>Boodschappenlijst</title>
</head>
<body>
    <table id="table">
        <tr>
          <th scope="col">Product</th>
          <th scope="col">Prijs</th>
          <th scope="col">Aantal</th>
          <th scope="col">Subtotaal</th>  
        </tr>
        <?php foreach($groceries as $grocery){ ?>
        <tr>
          <td><?= $grocery['productName'] ?></td>
          <td><?= $grocery['price'] ?></td>
          <td><?= $grocery['number'] ?></td>
          <td><?= $grocery['price'] * $grocery['number'] ?></td>
        </tr>
       <?php } ?>

       <?php $arr_toadd = [];
       foreach($groceries as $grocery){
        array_push($arr_toadd, $grocery['price'] * $grocery['number']);
       } ?>

        <tfoot>
          <td>Totaal</td>
          <td></td>
          <td></td>
          <td><?= array_sum($arr_toadd) ?></td>
        </tfoot>
      
      </table>
    
</body>
