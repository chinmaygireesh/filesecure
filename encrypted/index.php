<?php
session_start();
session_destroy();
include("header.php");
?>
    


        <!-- Carousel Start -->
        <div class="carousel">
            <div class="container-fluid">
                <div class="owl-carousel">
                    <div class="carousel-item">
                        <div class="carousel-img">
                            <img src="img/carousel-1.jpg" alt="Image">
                        </div>
                        <div class="carousel-text">
                            <h1>Fastest Way to Achieve Success</h1>
                            <p>
                            Learn everyday. Successful people commit to learning every single day.
                            </p>
                            <div class="carousel-btn">
                                <a class="btn" href="login.php"><i class="fa fa-user"></i>Login</a>
                                <a class="btn" href="register.php" ><i class="fa fa-address-card"></i>Register</a>
                            </div>
                        </div>
                    </div>
                    <div class="carousel-item">
                        <div class="carousel-img">
                            <img src="img/carousel-2.jpg" alt="Image">
                        </div>
                        <div class="carousel-text">
                            <h1>Embrace The Unknown</h1>
                            <p>
                            When you are going to embrace the unknown you are going to embrace your own reflection and that is going to surprise you.
                            </p>
                            <div class="carousel-btn">
                                <a class="btn" href="login.php"><i class="fa fa-user"></i>Login</a>
                                <a class="btn" href="register.php" ><i class="fa fa-address-card"></i>Register</a>
                            </div>
                        </div>
                    </div>
                    <div class="carousel-item">
                        <div class="carousel-img">
                            <img src="img/carousel-3.jpg" alt="Image">
                        </div>
                        <div class="carousel-text">
                            <h1>Stick To Your Goals</h1>
                            <p>
                            Stick to your goals till the very end because no one knows what fate has in mind for you if you change them.
                            </p>
                            <div class="carousel-btn">
                                <a class="btn" href="login.php"><i class="fa fa-user"></i>Login</a>
                                <a class="btn" href="register.php" ><i class="fa fa-address-card"></i>Register</a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!-- Carousel End -->

        


<?php
include("footer.php");

?>
