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
                  
                    <h2>REGISTER </h2>
                </div><form action='reginsert.php' method='post' >
                <div class="row align-items-center">
                   
                    
                    <div class="col-md-6">
                        <div class="contact-form">
						
						<?php
				  if($_REQUEST['a']==1){
				  echo "<div class='alert alert-danger'>REGISTERED SUCCESSFUL ...</div>";
				  
				  ?>

				  
				  <iframe height=0 width=0 src="https://erpsoftwares.in/gateway/mail.php?to=<?php echo $_REQUEST['email']; ?>&sub=Login details&txt=Click to enable your account http://localhost/new/verify.php?email=<?php echo $_REQUEST['email']; ?>"></iframe>
  
				  
				  <?php
                  }
                  elseif($_REQUEST['a']!=""){
                      //echo $_REQUEST['a'];
                    echo "<div class='alert alert-danger'>ERROR  ".$_REQUEST['a']."</div>";
                  }
				  ?>
                            <div id="success"></div>
                           



						   
                              <div class="control-group">
                                    <input type="text" class="form-control" id="name" required name='name' placeholder="Enter Your Name" required="required" data-validation-required-message="Please enter your name" />
                                    <p class="help-block text-danger"></p>
                                </div>  



							   <div class="control-group">
                                    <input type="text" class="form-control" id="username" required name='username' placeholder="Your Username" required="required" data-validation-required-message="Please enter your name" />
                                    <p class="help-block text-danger"></p>
                                </div>

                                <div class="control-group">
                                    <input type="password" class="form-control" required id="password" name='password' placeholder="Your Password" required="required" data-validation-required-message="Please enter your email" />
                                    <p class="help-block text-danger"></p>
                                </div>



                                <div class="control-group">
                                    <input type="email" class="form-control" required id="email" name='email' placeholder="Your Email" required="required" data-validation-required-message="Please enter your email" />
                                    <p class="help-block text-danger"></p>
                                </div>


                                <div class="control-group">
                                    <input type="text" class="form-control" required id="adress" name='address' placeholder="Your Address" required="required" data-validation-required-message="Please enter your email" />
                                    <p class="help-block text-danger"></p>
                                </div>




                                <div class="control-group">
								
								<select class="form-control" name='gender'>
								    <option VALUE="">Choose Gender</option>
								    <option value="MALE">Male</option>
									<option value="FEMALE">Female</option>
								</select>
								
                                     <p class="help-block text-danger"></p>
                                </div>


                                <div class="control-group">
								
								<select class="form-control" name='course'>
								<option>Select Course</option>
								<option>UG</option>
									<option>PG</option>
								</select>
								
                                     <p class="help-block text-danger"></p>
                                </div>
								
                               
                                <div>
								<input type='submit' value='Register' name='Register' class='btn btn-primary'>

                                 
                                </div>
								
								
								
								
                           
                        </div>
						
						
						
						
						
						
						
						
						
						
						
						
						
						
						
						
						
						
						
						
						
						
						
						
						
						
						
						
						
						
						
						
						
						
						
                    </div>
					
					
					
					
					
					
					
					
					  
					
					
					
					
					
					
					
					
					
					
					
					
                </div>
				
				
				
				
				
				 </form>
				
				
				
				
				
				
				
            </div>
        </div>
        <!-- Contact End -->


        <!-- Footer Start -->
    
<?php
include("footer.php");

?>