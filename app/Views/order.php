<div class="d-flex justify-content-center mt-3 footer_margin">
    <div class="col-lg-6 col-md-9 col-sm-12">
        
        <h4 class="mb-4">Order Information</h4>

        <form action="<?= site_url('cart/order'); ?>" method="post">
            <div class="form-group">
                <label class="form-label">First and last name *</label>
                <input name="customername" type="text" class="form-control order_inp" maxlength="100">
                
            </div>
            <div class="form-group">
                <label>Address *</label>
                <input name="address" type="text" class="form-control order_inp" maxlength="100">
                
            </div>
            <div class="form-group">
                <label>Postal number *</label>
                <input name="postalnum" type="text" class="form-control order_inp" maxlength="5">
                
            </div>
            <div class="form-group">
                <label>City *</label>
                <input name="city" type="text" class="form-control order_inp" maxlength="50">
                
            </div>
            <div class="form-group">
                <label class="form-label">Email *</label>
                <input name="email" type="email" class="form-control order_inp" maxlength="250">
                
            </div>
            <div class="form-group">
                <label>Phone number</label>
                <input name="phonenumber" type="text" class="form-control order_inp" maxlength="13">
            </div>

            <p style="font-size: large;">Fields marked with * are mandatory.</p>



            <h4 class="mt-5 mb-4">Delivery options</h4>

            <div class="col-12 mb-3" align="center">

                <label class="form-check-label" for="postiCheck">
                    <input type="radio" class="form-check-input card-input-element" id="postiCheck" name="deliveryOption" value="posti">
                    <div class="card mb-3 card-input" style="width: 700px;">
                        <div class="row no-gutters">
                            <div class="col-3" style="padding-left: 2em;">
                                <img src="<?= base_url('img/delivery/posti2.png') ?>" class="card-img" alt="posti" style="max-width: 100%;">
                            </div>
                            <div class="col-9">
                                <div class="card-body">
                                    <h5 class="card-title">Posti</h5>
                                    <p class="card-text"><small class="text-muted">Shipping inside Finland</small></p>
                                    <p class="card-text">Small package: 4,90 € - 5,90 €
                                        , Large package: 7,90 € - 10,90 €</p>
                                    <div class="form-check">
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </label>

                <label class="form-check-label" for="matkahuoltoCheck">
                    <input type="radio" class="form-check-input card-input-element" id="matkahuoltoCheck" name="deliveryOption" value="MH">
                    <div class="card mb-3 card-input" style="width: 700px;">
                        <div class="row no-gutters" style="padding-left: 2em;">
                            <div class="col-md-3">
                                <img src="<?= base_url('img/delivery/MH2.png') ?>" class="card-img" alt="matkahuolto" style="max-width: 90%;">
                            </div>
                            <div class="col-md-9">
                                <div class="card-body">
                                    <h5 class="card-title">Matkahuolto</h5>
                                    <p class="card-text"><small class="text-muted">Shipping inside Finland</small></p>
                                    <p class="card-text">Small package: 4,90 € - 5,90 €,
                                        Large package: 7,90 € - 10,90 €</p>
                                    <div class="form-check">
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </label>

                <label class="form-check-label" for="dhlCheck">
                    <input type="radio" class="form-check-input card-input-element" id="dhlCheck" name="deliveryOption" value="DHL">
                    <div class="card mb-3 card-input" style="width: 700px;">
                        <div class="row no-gutters" style="padding-left: 2em;">
                            <div class="col-md-3">
                                <img src="<?= base_url('img/delivery/DHL2.png') ?>" class="card-img mx-auto" alt="DHL" style="max-width: 90%;">
                            </div>
                            <div class="col-md-9">
                                <div class="card-body">
                                    <h5 class="card-title">DHL</h5>
                                    <p class="card-text"><small class="text-muted">Shipping inside EU</small></p>
                                    <p class="card-text">Small package: 4,89 €,
                                        Large package: 8,89 €</p>
                                    <div class="form-check">
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </label>

                <div class="row">
                    <input class="btn btn-warning mt-4" type="submit" value="Place order">
                </div>
        </form>

    </div>
</div>