<h3><?= $title?></h3>
<div>
  <?= \Config\Services::validation()->listErrors();?>
</div>
<form action="/admin/save" method="post">
  <input type="hidden" name="categorynum" value="<?= $categorynum?>">
  <div>
    <label>Nimi</label>
    <input name="categoryname" maxlength="50" value="<?= $categoryname?>"/>
  </div>
  <button>Tallenna</button>
</form>