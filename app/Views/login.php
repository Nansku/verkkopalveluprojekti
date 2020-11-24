<div class=" d-flex justify-content-center mt-3 footer_margin">
    <div class="col-5">
    <h3>Login</h3>
    <form action="/login/check">
        <div class="col-12">
        <?= \Config\Services::validation()->listErrors(); ?>
        </div>
        <div class="form-group">
            <label>Email</label>
            <input class="form-control" name="email" placeholder="Enter email address" maxlength="100">
        </div>
        <div class="form-group">
            <label>Password</label>
            <input class="form-control" name="password" type="password" placeholder="Enter Password" maxlength="255">
        </div>
        <button class="btn btn-warning">Login</button>
        <p>New customer?
        <?= anchor('login/register','Register here') ?> </p>
    </form>
    </div>
</div>