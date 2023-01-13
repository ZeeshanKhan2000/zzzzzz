<?php include './components/header.php'; ?>

<section class="sign-up-form-section">
    <div class="container">
        <div class="row align-items-center">
            <div class="col-md-6">
                <div class="sign-in-banner">
                    <img src="./assets/images/sign-in/1.png" class="img-fluid" alt="">
                </div>
            </div>
            <div class="col-md-6 ">
                <div class="sign-up-form">
                    <h5>sign up</h5>
                    <form action="">
                        <div class="sign-up-possition">
                            <input type="text" placeholder="username">
                            <i class="fa-solid fa-user-plus"></i>
                        </div>

                        <div class="sign-up-possition">
                            <input type="email" placeholder="email address">
                            <i class="fa-solid fa-envelope"></i>
                        </div>
                        <div class="sign-up-possition">
                            <input type="password" placeholder="password">
                            <i class="fa-solid fa-lock"></i>
                        </div>

                        <div class="sign-up-possition">
                            <input type="password" placeholder="confirm password">
                            <i class="fa-solid fa-lock"></i>
                        </div>

                        <button>sign up</button>
                    </form>
                </div>
                <div class="creat-an-account">
                    <a href="">Don't have an account ?</a>
                    <a href="">Create account</a>
                </div>
            </div>
        </div>
    </div>
</section>


<?php include './components/footer.php'; ?>