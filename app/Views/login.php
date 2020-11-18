<h3><?= $title ?></h3>
<form action="/login/check">
    <div class="col-12">
    <?= \Config\Services::validation()->listErrors(); ?>
    </div>
    <div class="form-group">
        <label>Sähköposti</label>
        <input class="form-control" name="email" placeholder="Anna sähköpostiosoite" maxlength="100">
    </div>
    <div class="form-group">
        <label>Salasana</label>
        <input class="form-control" name="password" type="password" placeholder="Anna salasana" maxlength="255">
    </div>
    <button class="btn btn-warning">Kirjaudu</button>
    <p>Uusi asiakas? Rekisteröidy
    <?= anchor('login/register','Tästä') ?> </p>
</form>