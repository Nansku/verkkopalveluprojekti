<div class="d-flex justify-content-center mt-3 footer_margin">
    <div class="col-lg-6 col-md-9 col-sm-12">

        <h4 class="mb-4">Order Information</h4>

        <form action="<?= site_url('cart/order'); ?>" method="post">
            <div class="form-group">
                <label>Name</label>
                <input name="customername" type="text" class="form-control order_inp" maxlength="100">
            </div>
            <div class="form-group">
                <label>Address</label>
                <input name="address" type="text" class="form-control order_inp" maxlength="100">
            </div>
            <div class="form-group">
                <label>Postal number</label>
                <input name="postalnum" type="text" class="form-control order_inp" maxlength="5">
            </div>
            <div class="form-group">
                <label>Postal district</label>
                <input name="city" type="text" class="form-control order_inp" maxlength="50">
            </div>
            <div class="form-group">
                <label>Email</label>
                <input name="email" type="email" class="form-control order_inp" maxlength="250">
            </div>
            <div class="form-group">
                <label>Phone number</label>
                <input name="phonenumber" type="text" class="form-control order_inp" maxlength="13">
            </div>

            <h4>Delivery options</h4>

            <div class="col-12 mb-3" align="center"><!--
                <div class="accordion col-12 float-center" id="postiAccordion" style="padding-bottom:none; margin-bottom:none;">
                    <div class="card">
                        <div class="card-header" id="postiHeading">
                            <h3 class="mb-0">
                                <button class="btn btn-block text-left" type="button" data-toggle="collapse" data-target="#collapseOne" aria-expanded="true" aria-controls="collapseOne">
                                    <p class="float-right" style="font-size:x-large">POSTI</p>
                                    <div class="form-check float-left">
                                        <input type="radio" class="form-check-input" id="postiCheck" name="deliveryOption" value="option1" checked>
                                        <label class="form-check-label" for="postiCheck">Check me out</label>
                                    </div>
                                </button>
                            </h3>
                        </div>
                        <div id="collapseOne" class="collapse" aria-labelledby="headingOne" data-parent="#postiAccordion">
                            <div class="card-body">
                                <p>Shipping inside Finland</p>
                                <p>Small package: 4,90 € - 5,90 €</p>
                                <p>Large package: 7,90 € - 10,90 €</p>
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
                                        <input type="radio" class="form-check-input" id="matkahuoltoCheck" name="deliveryOption" value="MH">
                                        <label class="form-check-label" for="matkahuoltoCheck">Check me out</label>
                                    </div>
                                </button>
                            </h3>
                        </div>
                        <div id="collapseTwo" class="collapse" aria-labelledby="headingTwo" data-parent="#matkahuoltoAccordion">
                            <div class="card-body">
                                <p>Shipping inside Finland</p>
                                <p>Small package: 4,90 € - 5,90 €</p>
                                <p>Large package: 7,90 € - 10,90 €</p>
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
                                        <input type="radio" class="form-check-input" id="dhlCheck" name="deliveryOption" value="DHL">
                                        <label class="form-check-label" for="dhlCheck">Check me out</label>
                                    </div>
                                </button>
                            </h3>
                        </div>
                        <div id="collapseThree" class="collapse" aria-labelledby="headingThree" data-parent="#dhlAccordion">
                            <div class="card-body">
                                <p>Shipping inside EU</p>
                                <p>Small package: 4,89 €</p>
                                <p>Large package: 8,89 €</p>
                                
                                
                            </div>
                        </div>
                    </div>
                </div>
-->
                <div class="card mb-3">
                    <div class="row no-gutters">
                        <div class="col-4">
                            <img src="<?= base_url('img/delivery/posti.png')?>" class="card-img" alt="posti" style="max-width: 100%;">
                        </div>
                        <div class="col-7">
                            <div class="card-body">
                                <h5 class="card-title">Posti</h5>
                                <p class="card-text"><small class="text-muted">Shipping inside Finland</small></p>
                                <p class="card-text">Small package: 4,90 € - 5,90 €</p>
                                <p class="card-text">Large package: 7,90 € - 10,90 €</p>
                                <div class="form-check">
                                    <input type="radio" class="form-check-input" id="postiCheck" name="deliveryOption" value="posti" checked>
                                    <label class="form-check-label card-text" for="postiCheck">Choose Posti</label>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>

                <div class="card mb-3">
                    <div class="row no-gutters">
                        <div class="col-md-3">
                            <img src="<?= base_url('img/delivery/MH.png')?>" class="card-img" alt="matkahuolto" style="max-width: 50%;">
                        </div>
                        <div class="col-md-9">
                            <div class="card-body">
                                <h5 class="card-title">Matkahuolto</h5>
                                <p class="card-text"><small class="text-muted">Shipping inside Finland</small></p>
                                <p class="card-text">Small package: 4,90 € - 5,90 €</p>
                                <p class="card-text">Large package: 7,90 € - 10,90 €</p>
                                <div class="form-check">
                                <input type="radio" class="form-check-input" id="matkahuoltoCheck" name="deliveryOption" value="MH">
                                        <label class="form-check-label card-text" for="matkahuoltoCheck">Choose Matkahuolto</label>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>

                <div class="card mb-3">
                    <div class="row no-gutters">
                        <div class="col-md-4">
                            <img src="<?= base_url('img/delivery/DHL.png')?>" class="card-img mx-auto" alt="DHL" style="max-width: 70%;">
                        </div>
                        <div class="col-md-8">
                            <div class="card-body">
                                <h5 class="card-title">DHL</h5>
                                <p class="card-text"><small class="text-muted">Shipping inside EU</small></p>
                                <p class="card-text">Small package: 4,89 €</p>
                                <p class="card-text">Large package: 8,89 €</p>
                                <div class="form-check">
                                    <input type="radio" class="form-check-input" id="dhlCheck" name="deliveryOption" value="DHL">
                                    <label class="form-check-label" for="dhlCheck">Choose DHL</label>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <button class="btn btn-warning mt-4">Place order</button>
        </form>
    </div>
</div>