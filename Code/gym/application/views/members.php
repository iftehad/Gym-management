  

<div class="container">
	<div class="row">
		  <h1 style="text-align: center;">Name of the Instructor and their Details</h1>
		  <hr>

				<div>
				    <table class="table table-hover table-striped">
                                        <thead>
                                            
                                            <th>Name</th>
                                            <th>Sex</th>
                                            <th>Hourse</th>
                                        </thead>
                                       <?php 
		                                	foreach ($instructor as $row) {
			                                 ?>
                                        <tbody>
                                            <tr>
                                              
                                                <td><?php echo $row['NAME'];?></td>
                                                <td><?php echo $row['SEX'];?></td>
                                                <td><?php echo $row['HOUR'];?></td>
                                       <!-- <td><a href="<?php echo site_url('Home/index')?>"><button class="btn btn-success">Edit</button></a></td> -->
                                       <td><a href="<?php echo site_url('Home/delete/$data[id]')?>"><button class="btn btn-success">Delete</button></a></td> 
                                        
                                       <td><a href="<?php echo site_url('Dashboard/instructor_list')?>"><button class="btn btn-success">More</button></a></td>
                                            </tr>
                                        </tbody>
                                       <?php } ?>
                    </table>	
				</div>
           <hr>
                 <button ><a style="text-decoration: none;" href="<?php echo site_url('Home')?>">HOME</a></button>
     </div>
</div>
       