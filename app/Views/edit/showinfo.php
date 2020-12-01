<?php
//$sql = "SELECT * FROM customer WHERE email='{$_SESSION['email']}'";
//$result = $conn->query($sql);?>

<div class=" d-flex justify-content-center footer_margin mt-2">
    <div class="col-5">
    <h3>User info</h3>
    <form action="showsingleuser" method="POST">
        <div class="col-12">
        <?= \Config\Services::validation()->listErrors(); ?>
        </div>
        <div class="form-group">
            <?php echo $_POST[$email]; ?>
        </div>
    </form>
</div>
</div>