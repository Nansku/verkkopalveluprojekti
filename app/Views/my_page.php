<div class="row">
   <div class="col-12">
      <ul class="nav nav-pills mb-3  d-flex justify-content-center" id="pills-tab" role="tablist">
         <li class="nav-item" role="presentation">
            <a class="nav-link active" id="customerInformation-tab" data-toggle="pill" href="#customerInformation"
               role="tab" aria-controls="customerInformation" aria-selected="true">Customer Information</a>
         </li>
         <li class="nav-item" role="presentation">
            <a class="nav-link" id="loginInformation-tab" data-toggle="pill" href="#loginInformation" role="tab"
               aria-controls="loginInformation" aria-selected="false">Login Information</a>
         </li>
         <li class="nav-item font-weight-bold" role="presentation">
            <?= anchor('login/logout','Logout',array('class' => 'nav-link')) ?>
         </li>
      </ul>
   </div>
</div>
<div class="row d-flex justify-content-center">
   <div class="col-12 col-lg-6">
      <div class="tab-content" id="pills-tabContent">
         <div class="tab-pane fade show active" id="customerInformation" role="tabpanel"
            aria-labelledby="customerInformation-tab">
            <div class="d-flex justify-content-center footer_margin mt-2">
               <div class="col">
                  <form action="/login/updateinfo">
                     <div>
                        <?= \Config\Services::validation()->listErrors(); ?>
                     </div>
                     <div class="form-group">
                        <label>Name</label>
                        <input class="form-control" name="name" placeholder="Empty" maxlength="100">
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
                  <form action="/login/updatelogin">
                     <div>
                        <?= \Config\Services::validation()->listErrors(); ?>
                     </div>
                     <div class="form-group">
                        <label>Email</label>
                        <input class="form-control" name="email" maxlength="100">
                     </div>
                     <div class="form-group">
                        <label>Old Password*</label>
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
                     <p>*Old password required to update login information.</p>
                     <p>You will be redirected to login again after updating your login information.</p>
                  </form>
               </div>
            </div>
         </div>
      </div>
   </div>
</div>