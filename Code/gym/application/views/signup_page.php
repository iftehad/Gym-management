<header id="head" class="secondary"></header>

    <!-- container -->
    <div class="container">

        <ol class="breadcrumb">
            <li><a href="index.html">Home</a></li>
            <li class="active">Registration</li>
        </ol>

        <div class="row">

            <!-- Article main content -->
            <article class="col-xs-12 maincontent">
                <header class="page-header">
                    <h1 class="page-title">Registration</h1>
                </header>

                <div class="col-md-6 col-md-offset-3 col-sm-8 col-sm-offset-2">
                    <div class="panel panel-default">
                        <div class="panel-body">
                            <h3 class="thin text-center">Register a new account</h3>

                            <?php echo validation_errors();?>

                            <form method="post" action="<?php echo site_url('Login/save_member');?>">
                                <p class="text-left text-muted">Account Details</p>
                                <div class="top-margin">
                                    <label>Email Address <span class="text-danger">*</span></label>
                                    <input type="email" class="form-control" name="email" required>
                                </div>

                                <div class="row top-margin">
                                    
                                        <label>Password <span class="text-danger">*</span></label>
                                        <input type="password" class="form-control" name="password" required>
                                    
                                </div>
                                
                                <div class="top-margin">
                                    <label>STUDENT NAME<span class="text-danger">*</span></label>
                                    <input type="text" class="form-control" name="STUDENT_NAME" required>
                                </div>
                                <div class="top-margin">
                                    <label>INSTRUCTOR NAME<span class="text-danger">*</span></label>
                                    <input type="text" class="form-control" name="instructor_name" required>
                                </div>

                                <div class="top-margin">
                                    <label>Your Address<span class="text-danger">*</span></label>
                                    <input type="text" class="form-control" name="ADDRESS" required>
                                </div>
                                <div class="top-margin">
                                    <label><span class="text-danger">sex*</span></label><br/>
                                    <input type="radio" name="gender" value="Male" checked="checked"> Male 
                                    <input type="radio" name="gender" value="Male"> Female
                                </div>
                                <div class="top-margin">
                                    <label>Admission Date</label>
                                    <input type="date" class="form-control" name="ADMISSION_DATE" required>
                                </div>
                                


                                <p class="text-left text-muted">Already have an account? <a href="<?php echo site_url('Login');?>">Sign In</a></p>
                                <hr>

                                <div class="row">
                                    <div class="col-lg-8">
                                        <label class="checkbox">
											<input type="checkbox">I've read the <a href="page_terms.html">Terms and Conditions</a>
										</label>
                                    </div>
                                    <div class="col-lg-4 text-right">
                                        <button class="btn btn-action" type="submit">Register</button>
                                    </div>
                                </div>
                            </form>
                        </div>
                    </div>

                </div>

            </article>
            <!-- /Article -->

        </div>
    </div>
    <!-- /container -->