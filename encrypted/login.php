<?php
include("header.php");
?>
        <!-- Top Bar End -->

        <!-- Nav Bar Start -->
        
        <!-- Nav Bar End -->
        
        
        <!-- Contact Start -->
        <div class="contact mt-125">
            <div class="container">
                <div class="section-header">
                  
                    <h2>LOGIN DETAILS </h2>
                </div>
                <div class="row align-items-center">
                   
                    
                    <div class="col-md-7">
                        <div class="contact-form">
							<?php
				  if($_REQUEST['a']==1)
				  echo "<div class='alert alert-danger'>INVALID USERNAME AND PASSWORD</div>";
				  ?>
                            <div id="success"></div>
                            <form name="sentMessage" action='redirect.php' method='post' novalidate="novalidate">
                                <div class="control-group">
                                    <input type="text" class="form-control" id="name" name='UserName' placeholder="Your Username" required="required" data-validation-required-message="Please enter your name" />
                                    <p class="help-block text-danger"></p>
                                </div>
                                <div class="control-group">
                                    <input type="password" class="form-control" id="email" name='Password'  placeholder="Your Password" required="required" data-validation-required-message="Please enter your email" />
                                    <p class="help-block text-danger"></p>
                                </div>
                                
                                <div>
                                    <input class="btn" type="submit" id="sendMessageButton" value='login' name='login'>
                                </div>
                            </form>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!-- Contact End -->


        <!-- Footer Start -->
    
<?php
include("footer.php");

?>