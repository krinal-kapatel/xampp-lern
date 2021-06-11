<?php

$page_title = "Registration Form";
include "include/header.php";

?>
<?php include "include/navbar.php"; ?>

<div class="py-5">
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-md-6">
                <div class="card shadow">
                    <div class="card-header">
                        <h5>Registration Form</h5>
                    </div>
                    <div class="card-body">

                        <form action="register_code.php" method="POST">
                            <div class="form-group mb-3">
                                <label for="">Name : </label>
                                <input type="text" name="name" class= "form-control">
                            </div>
                            <div class="form-group mb-3">
                                <label for="">Phone Number : </label>
                                <input type="text" name="phone" class= "form-control">
                            </div>
                            <div class="form-group mb-3">
                                <label for="">Email Adderess : </label>
                                <input type="email" name="email" class= "form-control">
                            </div>
                            <div class="form-group mb-3">
                                <label for="">Password : </label>
                                <input type="password" name="password" class= "form-control">
                            </div>
                    
                            <div class="form-group">
                            <button type="submit" name="register_btn" class = "btn btn-primary"> Register Now </button>
                            </div>

                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>


<?php include "include/footer.php"; ?>