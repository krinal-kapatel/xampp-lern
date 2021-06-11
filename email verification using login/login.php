<?php

$page_title = "Login Form";
include "include/header.php";

?>
<?php include "include/navbar.php"; ?>

<div class="py-5">
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-md-6">
                <div class="card shadow">
                    <div class="card-header">
                        <h5>Login Form</h5>
                    </div>
                    <div class="card-body">

                        <form action="">
                            
                            <div class="form-group mb-3">
                                <label for="">Email Adderess : </label>
                                <input type="email" name="email" class= "form-control">
                            </div>
                            <div class="form-group mb-3">
                                <label for="">Password : </label>
                                <input type="password" name="password" class= "form-control">
                            </div>
                           
                            <div class="form-group">
                            <button type="submit" class = "btn btn-primary"> Login Now </button>
                            </div>

                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>


<?php include "include/footer.php"; ?>