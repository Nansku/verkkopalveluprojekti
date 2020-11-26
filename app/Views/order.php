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


<h4>Delivery options</h4>
<div class="col-12 mb-3" align="center">
    

    <div class="accordion col-12 float-center" id="postiAccordion" style="padding-bottom:none; margin-bottom:none;">
        <div class="card">
            <div class="card-header" id="postiHeading">
                <h3 class="mb-0">
                    <button class="btn btn-block text-left" type="button" data-toggle="collapse" data-target="#collapseOne" aria-expanded="true" aria-controls="collapseOne">
                        <p class="float-right" style="font-size:x-large">Posti</p>
                        <div class="form-check float-left">
                            <input type="radio" class="form-check-input" id="postiCheck" name="deliveryOption" value="option1" checked>
                            <label class="form-check-label" for="exampleCheck1">Check me out</label>
                        </div>
                    </button>
                </h3>
            </div>
            <div id="collapseOne" class="collapse" aria-labelledby="headingOne" data-parent="#postiAccordion">
                <div class="card-body">
                    <p></p>

                </div>
            </div>
        </div>
    </div>

    <div class="accordion col-12 float-center" id="matkahuoltoAccordion" style="padding-bottom:none; margin-bottom:none;">
        <div class="card">
            <div class="card-header" id="matkahuoltoHeading">
                <h3 class="mb-0">
                    <button class="btn btn-block text-left" type="button" data-toggle="collapse" data-target="#collapseTwo" aria-expanded="true" aria-controls="collapseTwo">
                        <p class="float-right" style="font-size:x-large">Matkahuolto</p>
                        <div class="form-check float-left">
                            <input type="radio" class="form-check-input" id="matkahuoltoCheck" name="deliveryOption" value="option2">
                            <label class="form-check-label" for="exampleCheck1">Check me out</label>
                        </div>
                    </button>
                </h3>
            </div>
            <div id="collapseTwo" class="collapse" aria-labelledby="headingTwo" data-parent="#matkahuoltoAccordion">
                <div class="card-body">
                    <p></p>

                </div>
            </div>
        </div>
    </div>


<div class="accordion col-12 float-center" id="dhlAccordion" style="padding-bottom:none; margin-bottom:none;">
    <div class="card">
        <div class="card-header" id="dhlHeading">
            <h3 class="mb-0">
                <button class="btn btn-block text-left" type="button" data-toggle="collapse" data-target="#collapseThree" aria-expanded="true" aria-controls="collapseThree">
                    <p class="float-right" style="font-size:x-large">DHL</p>
                    <div class="form-check float-left">
                        <input type="radio" class="form-check-input" id="dhlCheck" name="deliveryOption" value="option3">
                        <label class="form-check-label" for="exampleCheck1">Check me out</label>
                    </div>
                </button>
            </h3>
        </div>
        <div id="collapseThree" class="collapse" aria-labelledby="headingThree" data-parent="#dhlAccordion">
            <div class="card-body">
                <p></p>

            </div>
        </div>
    </div>
</div>

</div>
<button class="btn btn-warning mt-4">Place order</button>
            </form>
    </div>
</div>