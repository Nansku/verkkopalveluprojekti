<h3><?= $title ?></h3>
<form action="registration">
    <div class="col-12">
    <?= \Config\Services::validation()->listErrors(); ?>
    </div>
    <div class="form-group">
        <label>Nimi</label>
        <input class="form-control" name="name" placeholder="Etunimi ja sukunimi" maxlength="100">
    </div>
    <div class="form-group">
        <label>Sähköposti</label>
        <input class="form-control" name="email" placeholder="esim. kauno.kahvi@gmail.com" maxlength="255">
    </div>
    <div class="form-group">
        <label>Osoite</label>
        <input class="form-control" name="address" placeholder="Aseta osoite" maxlength="100">
    </div>
    <div class="form-group">
        <label>Postinumero</label>
        <input class="form-control" name="postalnumber" placeholder="Aseta postinumero" maxlength="5">
    </div>
    <div class="form-group">
        <label>Kaupunki</label>
        <input class="form-control" name="city" placeholder="Aseta kaupunki" maxlength="50">
    </div>
    <div class="form-group">
        <label>Puhelin</label>
        <input class="form-control" name="phonenumber" placeholder="Aseta puhelinnumero" maxlength="10">
    </div>
    <div class="form-group">
        <label>Salasana</label>
        <input class="form-control" name="password" placeholder="Aseta salasana" maxlength="255">
    </div>
    <div class="form-group">
        <label>Salasana uudelleen</label>
        <input class="form-control" name="confirmpassword" placeholder="Aseta salasana uudelleen" maxlength="255">
    </div>
    <button class="btn btn-warning">Lähetä</button>
</form>