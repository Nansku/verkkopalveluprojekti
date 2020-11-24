<div class=" d-flex justify-content-center footer_margin mt-2">
    <div class="col-5">
    <h3>Register as user</h3>
    <form action="registration">
        <div class="col-12">
        <?= \Config\Services::validation()->listErrors(); ?>
        </div>
        <div class="form-group">
            <label>Name</label>
            <input class="form-control" name="name" placeholder="First and last name" maxlength="100">
        </div>
        <div class="form-group">
            <label>Email</label>
            <input class="form-control" name="email" placeholder="Enter email address" maxlength="255">
        </div>
        <div class="form-group">
            <label>Address</label>
            <input class="form-control" name="address" placeholder="Enter address" maxlength="100">
        </div>
        <div class="form-group">
            <label>Postal code</label>
            <input class="form-control" name="postalnumber" placeholder="Enter postal number" maxlength="5">
        </div>
        <div class="form-group">
            <label>City</label>
            <input class="form-control" name="city" placeholder="Enter city" maxlength="50">
        </div>
        <div class="form-group">
            <label>Phone</label>
            <input class="form-control" name="phonenumber" placeholder="Enter phonenumber" maxlength="10">
        </div>
        <div class="form-group">
            <label>Password</label>
            <input class="form-control" name="password" type="password" placeholder="Set password" maxlength="255">
        </div>
        <div class="form-group">
            <label>Confirm password</label>
            <input class="form-control" name="confirmpassword" type="password" placeholder="Enter password again" maxlength="255">
        </div>
        <button class="btn btn-coffee">Submit</button>
    </form>
</div>
</div>