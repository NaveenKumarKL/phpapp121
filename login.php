<?php include "header.php" ?>

<section class="login_form lazy">
    <div class="error_box">
        <span class="error_text"></span>
    </div>
    <div class="container logins">
        <div class="card mx-auto">
            <div class="row mt-3 mb-3">
                <div class="col icon d-flex justify-content-center">
                    <div class="d-flex flex-column justify-content-center">
                        <i class="bi bi-person-circle mx-auto"></i>
                        <h4>Login User</h4>
                    </div>
                </div>
            </div>
            <form class="px-4 pb-3  mt-0" method="post" id="login_form">
                <input type="hidden" class="form-control" name="login" value="login">
                <div class="mb-3">
                    <input type="email" class="form-control" name="email" placeholder=" Enter Your Email">
                    <div id="emailHelp" class="form-text">We'll never share your email with anyone else.</div>
                </div>
                <div class="mb-3">
                    <input type="password" class="form-control" name="password" placeholder=" Enter Your Password">
                </div>
                <button type="submit" class="btn btn-primary w-100">Log In</button>
            </form>

            <div class="row container pb-3">
                <div class="col d-flex justify-content-between">
                    <a href="#">ForgetPassword?</a>
                    <a href="Register.php">Register</a>
                </div>

            </div>
        </div>
    </div>
</section>

<script src="./css/jquery.js"></script>
<script type="text/javascript">
    $(document).ready(function(e) {
        $('#login_form').on('submit', function(e) {

            e.preventDefault();
            $.ajax({
                type: 'POST',
                url: './backend/registers.php',
                data: new FormData(this),
                dataType: 'json',
                contentType: false,
                cache: false,
                processData: false,
                // beforeSend: function() {
                // $('#image1').show();
                // $("#image1").delay(1500).fadeOut();
                // },
                success: function(result) {
                    console.log(result);

                    if (result.statusCode == "400") {
                        console.log("im in");
                        $(".error_text").html("Please check the Email id").css('display', 'block').delay(2000).fadeOut();
                    } else if (result.statusCode == "200") {
                        $("#login_form")[0].reset();
                        window.location = 'dashboard.php';

                    }

                }
            });
        });
    });
    // $(document).on("click", "#delete", function() {
    // var del = $(this);
    // var id = $(this).attr("data-id");
    // $.ajax({
    // url: "delete.php",
    // type: 'post',
    // data: {
    // id: id
    // },
    // success: function(d) {}
    // });
    // });
</script>