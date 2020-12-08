<h3><?= $title?></h3>
<div>
  <?= \Config\Services::validation()->listErrors();?>
</div>
<form action="/product/save/<?= $category_id?>" method="post" enctype="multipart/form-data">
  <input type="hidden" name="id" value="<?= $id?>">
  <div class="form-group">
    <label>Name</label>
    <input name="productname" class="form-control" maxlength="50" value="<?= $productname?>"/>
  </div>
  <div class="form-group">
    <label>Description</label>
    <textarea name="description" class="form-control"><?= $description?></textarea>
  </div>
  <div class="form-group">
    <label>Price</label>
    <input name="price" class="form-control"  class="form-control" type="number" step="0.01" value="<?= $price?>"/>
  </div>
  <div class="form-group">
    <label>Cost</label>
    <input name="cost" class="form-control" type="number" step="0.01" value=" <?= $cost?>"/>
  </div>
  <div class="form-group">
    <label>Picture</label>
    <input name="picture" class="form-control" type="file">
    <?php 
    if ($picture !== '') {
      $path = base_url('img/' . $picture);
      print "<img src='" .$path  . "'/>";
    }
    ?>
  </div>

  <div class="form-group">
    <label>Large picture</label>
    <span><br>Tähän sama kuva vaan uudestaan</span>
    <input name="large_picture" class="form-control" type="file">
    <?php 
    if ($picture !== '') {
      $path = base_url('img/large/' . $picture);
      print "<img src='" .$path  . "'/>";
    }
    ?>
  </div>


  <button>Tallenna</button>
</form>