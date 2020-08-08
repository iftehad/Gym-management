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

                            <form method="post" action="<?php echo site_url('Login/save_memberTwo');?>">
                                <p class="text-left text-muted">Account Details</p>
                                <div class="top-margin">
                                    <label>Postal Code <span class="text-danger">*</span></label>
                                    <input type="text" class="form-control" name="postal_code" required>
                                </div>

                                <div class="row top-margin">
                                    <div class="col-sm-6">
                                        <label>Village <span class="text-danger">*</span></label>
                                        <input type="text" class="form-control" name="village" required>
                                    </div>
                                </div>
                                <div class="top-margin">
                                    <label>Thana<span class="text-danger">*</span></label>
                                    <input type="text" class="form-control" name="thana" required>
                                </div>
                                <div class="top-margin">
                                    <label>District<span class="text-danger">*</span></label>
                                    <input type="text" class="form-control" name="district" required>
                                </div>
                                
                                <hr>

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