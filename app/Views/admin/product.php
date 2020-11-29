<h3><?= $title?></h3>
<div>
<!- Pudotuslista on lomakkeen sisässä, jolloin tuoteryhmän vaihtaminen aiheutta post-kutsun,
    ja sivu ladataan uudestaan valitun tuoteryhmän tuotteilla.
-->
<form action="/product/changeCategory/" method="post">
<label>Tuoteryhmä</label>
<select name="categorynum" onChange="this.form.submit()">
<?php foreach($categories as $category): ?>
  <option value="<?=$category['categorynum']?>"
  <?php
  // Asetetaan tuoteryhmä valituksi pudotuslistassa kirjoittamalla selected html:n sekaan oikeaan kohtaan.
  if ($category['categorynum'] === $categorynum) {
    print " selected";
  }
  ?>
  >
    <?= $category['categoryname']?>
  </option>
<?php endforeach;?>
</select>
</form>
</div>
<div>
<?= anchor('product/save/' . $categorynum,'Lisää uusi')?>
</div>
<table class="table">
<?php foreach($products as $product): ?>
  <tr>
    <td><?= $product['productname']?></td>
    <td><?= $product['price']?> €</td>
    <td><?= anchor('product/save/' . $categorynum . '/' . $product['productID'],'Muokkaa')?></td>
    <td><a href="<?= site_url('product/deleteProduct/'. $product['productID'])?>" onclick="return confirm('Haluatko varmasti poistaa tuotteen?')">Poista</a></td>
  </tr>
<?php endforeach;?>
</table>