<div class="row">
   <div class="col">
      <ul class="nav nav-pills mb-3  d-flex justify-content-center" id="pills-tab" role="tablist">
         <li class="nav-item" role="presentation">
            <a class="nav-link active" id="customerInformation-tab" data-toggle="pill" href="#customerInformation"
               role="tab" aria-controls="customerInformation" aria-selected="true">Customer Information</a>
         </li>
         <li class="nav-item" role="presentation">
            <a class="nav-link" id="loginInformation-tab" data-toggle="pill" href="#loginInformation" role="tab"
               aria-controls="loginInformation" aria-selected="false">Login Information</a>
         </li>
         <li class="nav-item" role="presentation">
            <a class="nav-link" id="orderHistory-tab" data-toggle="pill" href="#orderHistory" role="tab"
               aria-controls="orderHistory" aria-selected="false">Order History</a>
         </li>
         <li class="nav-item" role="presentation">
            <a class="nav-link" id="favorites-tab" data-toggle="pill" href="#favorites" role="tab"
               aria-controls="favorites" aria-selected="false">Favorites</a>
         </li>
         <li class="nav-item font-weight-bold" role="presentation">
            <?= anchor('login/logout','Logout',array('class' => 'nav-link')) ?>
         </li>
      </ul>
   </div>
</div>
<div class="row d-flex justify-content-center">
   <div class="col-6">
      <div class="tab-content" id="pills-tabContent">
         <div class="tab-pane fade show active" id="customerInformation" role="tabpanel"
            aria-labelledby="customerInformation-tab">
            <div class="d-flex justify-content-center footer_margin mt-2">
               <div class="col">
                  <form action="#">
                     <div>
                        <?= \Config\Services::validation()->listErrors(); ?>
                     </div>
                     <div class="form-group">
                        <label>Name</label>
                        <input class="form-control" name="name" placeholder="Empty" maxlength="100">
                     </div>
                     <div class="form-group">
                        <label>Email</label>
                        <input class="form-control" name="email" placeholder="Empty" maxlength="255">
                     </div>
                     <div class="form-group">
                        <label>Address</label>
                        <input class="form-control" name="address" placeholder="Empty" maxlength="100">
                     </div>
                     <div class="form-group">
                        <label>Postal code</label>
                        <input class="form-control" name="postalnumber" placeholder="Empty" maxlength="5">
                     </div>
                     <div class="form-group">
                        <label>City</label>
                        <input class="form-control" name="city" placeholder="Empty" maxlength="50">
                     </div>
                     <div class="form-group">
                        <label>Phone</label>
                        <input class="form-control" name="phonenumber" placeholder="Empty" maxlength="10">
                     </div>
                     <button class="btn btn-coffee">Update</button>
                  </form>
               </div>
            </div>
         </div>
         <div class="tab-pane fade" id="loginInformation" role="tabpanel" aria-labelledby="loginInformation-tab">
            <div class="d-flex justify-content-center footer_margin mt-2">
               <div class="col">
                  <form action="#">
                     <div>
                        <?= \Config\Services::validation()->listErrors(); ?>
                     </div>
                     <div class="form-group">
                        <label>Email</label>
                        <input class="form-control" name="email" maxlength="100">
                     </div>
                     <div class="form-group">
                        <label>Old Password</label>
                        <input class="form-control" name="password_old" type="password" maxlength="255">
                     </div>
                     <div class="form-group">
                        <label>New Password</label>
                        <input class="form-control" name="password_new" type="password" maxlength="255">
                     </div>
                     <div class="form-group">
                        <label>New Password Again</label>
                        <input class="form-control" name="password_confirm" type="password" maxlength="255">
                     </div>
                     <button class="btn btn-coffee">Update</button>
                  </form>
               </div>
            </div>
         </div>
         <div class="tab-pane fade" id="orderHistory" role="tabpanel" aria-labelledby="orderHistory-tab">
            Order History
         </div>
         <div class="tab-pane fade" id="favorites" role="tabpanel" aria-labelledby="favorites-tab">
            Favorites
         </div>
      </div>
   </div>
</div>