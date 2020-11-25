<h3><?= $title?></h3>
<div>
<?= anchor('admin/save','Lisää uusi')?>
</div>
<table class="table">
<?php foreach($category as $category): ?>
  <tr>
    <td><?= $category['categoryname']?></td>
    <td><?= anchor('admin/save/' . $category['categorynum'],'Muokkaa')?></td>
    <!- Kysytään varmistus, tehdäänkö poisto. -->
    <td><a href="<?= site_url('admin/deleteCategory/'. $category['categorynum'])?>" onclick="return confirm('Haluatko varmasti poistaa tuoteryhmän? Myös kaikki tuoteryhmän tuotteet poistetaan.')">Poista</a></td>
  </tr>
<?php endforeach;?>
</table>
