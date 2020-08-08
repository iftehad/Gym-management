<!DOCTYPE html>
<html>

<body>
            <div class="content">
                <div class="container-fluid">
                    <div class="row">
                        <div class="col-md-8">
                            <div class="card">
                                <div class="header">
                                    <h4 class="title">Edit Profile</h4>
                                </div>
                                <div class="content">
                                    <form method="post" action="<?php echo site_url('Dashboard/update_profile/$data[id]');?>">
                                        <div class="row">
                                            <div class="col-md-6">
                                                <div class="form-group">
                                                    <label>STUDENT NAME</label>
                                                    <input type="text" class="form-control" name="STUDENT_NAME" placeholder="Company" value="<?php echo $info['STUDENT_NAME'];?>">
                                                </div>
                                            </div>
                                        </div>
                                        <div class="row">
 
                                            <div class="col-md-7">
                                                <div class="form-group">
                                                    <label for="exampleInputEmail1">Email address</label>
                                                    <input type="email" name="email" class="form-control" placeholder="Email" value="<?php echo $info['email'];?>">
                                                </div>
                                            </div>
                                        </div>

                                        <div class="row">
                                            <div class="col-md-5">
                                                <div class="form-group">
                                                    <label>Gender</label>
                                                    <select class="form-control" name="gender">
                                                          <option value="Male" <?php echo $info['gender']=='Male'?'selected':'';?>>Male</option>
                                                          <option value="Female" <?php echo $info['gender']=='Female'?'selected':'';?>>Female</option>
                                                    </select>
                                                </div>
                                            </div>

                                        </div>

                                        <div class="row">
                                             <div class="col-md-7">
                                                <div class="form-group">
                                                    <label for="exampleInputEmail1">address</label>
                                                    <input type="text" name="ADDRESS" class="form-control" placeholder="ADDRESS" value="<?php echo $info['ADDRESS'];?>">
                                                </div>
                                            </div>
                                        </div>

                                        <button type="submit" class="btn btn-info btn-fill pull-right">Update Profile</button>
                                        <div class="clearfix"></div>
                                    </form>
                                </div>
                            </div>
                        </div>
                        <div class="col-md-4">
                            <div class="card card-user">
                                <div class="image">
                                    <img src="" alt="..." />
                                </div>
                                <div class="content">
                                    <div class="author">
                                        <a href="#">
                                            <img class="avatar border-gray" src="assets/img/faces/face-0.png" alt="..." />

                                            <h4 class="title"><?php echo $info['first_name'].' '.$info['last_name'];?><br />
                                                <small></small>
                                            </h4>
                                        </a>
                                    </div>
                                    <p class="description text-center"> <?php echo $info['email'];?>
                                    </p>
                                </div>
                                <hr>
                                <div class="text-center">
                                    <h4 class="title">
                                        <small>My Profile</small>
                                    </h4>
                                </div>
                            </div>
                        </div>

                    </div>
                </div>
            </div> 
</body>
</html>