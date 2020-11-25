<div class="d-flex justify-content-center mt-3 footer_margin">
    <div class="col-6">
        <form>

        <h4 class="mb-4">Order Information</h4>

        <form action="<?= site_url('order/order'); ?>" method="post">
            <div>
                <label>Name</label>
                <input name="name" type="text" class="form-control order_inp" maxlength="100">
            </div>
            <div>
                <label>Address</label>
                <input name="address" type="text" class="form-control order_inp" maxlength="100">
            </div>
            <div>
                <label>Postal number</label>
                <input name="postalnumber" type="text" class="form-control order_inp" maxlength="5">
            </div>
            <div>
                <label>Postal district</label>
                <input name="city" type="text" class="form-control order_inp" maxlength="50">
            </div>
            <div>
                <label>Email</label>
                <input name="email" type="email" class="form-control order_inp" maxlength="250">
            </div>
            <div>
                <label>Phone number</label>
                <input name="phonenumber" type="text" class="form-control order_inp" maxlength="13">
            </div>
            <button class="btn btn-warning mt-4">Place order</button>
        </form>
    </div>
</div>