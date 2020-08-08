<header id="head" class="secondary"></header>

    <!-- container -->
    <div class="container">

        <ol class="breadcrumb">
            <li><a href="index.html">Home</a></li>
            <li class="active">User access</li>
        </ol>

        <div class="row">

            <!-- Article main content -->
            <article class="col-xs-12 maincontent">
                <header class="page-header">
                    <h1 class="page-title">Sign in</h1>
                </header>

                


                            <form method="post" action="<?php echo site_url('Login/authenticate');?>">
                                <?php if(isset($error)){?>
                                <div class="top-margin">
                                    <p><?php echo $error;?></p>
                                </div>
                                <?php } ?>
                                <div class="top-margin">
                                    <label>Email <span class="text-danger">*</span></label>
                                    <input type="text" name="email" class="form-control" required>
                                </div>
                                <div class="top-margin">
                                    <label>Password <span class="text-danger">*</span></label>
                                    <input type="password" name="password" class="form-control" required>
                                </div>

                                <hr>

                                <p class="text-left text-muted">Don't have an account? <a href="<?php echo site_url('Login/sign_up');?>">Sign Up</a> </p>
                                <hr>

                                <div class="row">
                                    <div class="col-lg-8">
                                        <b><a href="">Forgot password?</a></b>
                                    </div>
                                    <div class="col-lg-4 text-right">
                                        <button class="btn btn-action" type="submit">Sign in</button>
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