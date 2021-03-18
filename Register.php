<?php include "header.php" ?>

<section class="login_form ">
    <div class="error_box">
        <span class="error_text"></span>
    </div>

    <div class="container logins">
        <div class="card mx-auto">
            <div class="row mt-3 mb-3">
                <div class="col icon d-flex justify-content-center">
                    <div class="d-flex flex-column justify-content-center">
                        <i class="bi bi-person-circle mx-auto"></i>
                        <h4>Register User</h4>
                    </div>
                </div>
            </div>
            <form class="px-4 pb-3  mt-0" method="post" id="register_form">
                <div class="mb-3">
                    <input type="text" class="form-control" name="name" placeholder=" User Name">

                </div>
                <div class="mb-3">
                    <input type="email" class="form-control" name="email" placeholder=" Enter Your Email">

                </div>
                <div class="mb-3">
                    <input type="password" class="form-control" name="password" placeholder=" Enter Your Password">
                </div>
                <button type="submit" class="btn btn-primary w-100">Submit</button>
            </form>

            <div class="row container pb-3">

                <div class="col d-flex justify-content-end">
                    <a href="login.php">Login</a>
                </div>

            </div>
        </div>
    </div>
</section>

<script src="./css/jquery.js"></script>
<script type="text/javascript">
    $(document).ready(function(e) {
        $('#register_form').on('submit', function(e) {

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

                    if (result.statusCode == "400") {
                        console.log("im in");
                        $(".error_text").html("The Email already exist").css('display', 'block').delay(2000).fadeOut();
                    } else if (result.statusCode == "200") {
                        $("#register_form")[0].reset();
                        window.location = 'login.php'
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