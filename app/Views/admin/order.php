<?php
use App\Libraries\Util;
?>
<table class="table">
  <tr>
    <th>Id</th>
    <th>Päiväys</th>
    <th>Nimi</th>
    <th>Kaupunki</th>
    <th>Osoite</th>
    <th>Postinro</th>
    <th>puhelin</th>
    <th>Tuote_id</th>

    <th>Tuotenimi</th>
    <th>Määrä</th>
    <!--<th></th>-->
    <th></th>        
  </tr>
<?php
$order_id = 0;
?>
<?php foreach($orders as $order): ?>
<tr>
  <?php if ($order_id != $order['ordernum']) {?>
  <td><?=$order['ordernum']?></td> 
  <td><?=$order['date']?></td>
  <td><?=$order['customername']?></td>
  <td><?=$order['city']?></td>
  <td><?=$order['address']?></td>
  <td><?=$order['postalnum']?></td>
  <td><?=$order['phonenumber']?></td>
  <td><?=$order['product_id']?></td>
  <td><?=$order['productname']?></td>
  <td><?=$order['amount']?></td>
  <?php } else { ?>
    <td></td><td></td><td></td><td></td>
  <?php } ?>  

</tr>
<?php endforeach;?>
</table>