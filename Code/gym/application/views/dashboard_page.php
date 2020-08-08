<!doctype html>
<html lang="en">

<head>
    <meta charset="utf-8" />
    <link rel="icon" type="image/png" href="assets/img/gt_favicon.png">
    <meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1" />

    <title>GMS | Dashboard</title>

    <meta content='width=device-width, initial-scale=1.0, maximum-scale=1.0, user-scalable=0' name='viewport' />
    <meta name="viewport" content="width=device-width" />


    <!-- Bootstrap core CSS     -->
    <link href="<?php echo base_url();?>assets/css/bootstrap.min.css" rel="stylesheet" />

    <!-- Animation library for notifications   -->
    <link href="<?php echo base_url();?>assets/css/animate.min.css" rel="stylesheet" />

    <!--  Light Bootstrap Table core CSS    -->
    <link href="<?php echo base_url();?>assets/css/light-bootstrap-dashboard.css" rel="stylesheet" />


    <!--  CSS for Demo Purpose, don't include it in your project     -->
    <link href="<?php echo base_url();?>assets/css/demo.css" rel="stylesheet" />


    <!--     Fonts and icons     -->
    <link href="http://maxcdn.bootstrapcdn.com/font-awesome/4.2.0/css/font-awesome.min.css" rel="stylesheet">
    <link href='http://fonts.googleapis.com/css?family=Roboto:400,700,300' rel='stylesheet' type='text/css'>
    <link href="<?php echo base_url();?>assets/css/pe-icon-7-stroke.css" rel="stylesheet" />

</head>

<body>

    <img src="<?php echo base_url('images/slide.jpg');?>" height="300px" width="1535px">
    <h1 style="text-align: center;">GYM Managemnent System</h1>
    <div class="container-fluid">
        <div class="col-md-4">
          <h1>Instrumnt and you</h1>
            <div class="contaiuner">
                <table class="table table-hover table-striped">
               <thead>
                  <th>Name</th>       
                  <th>Improvement</th>    
               </thead>
               <tbody>
                   <td>Running Machine</td>
                   <td>strength and endurance</td>
               </tbody>
            </table>
            </div>   
        </div>
        <div class="col-md-4">
            <h1>Trainer</h1>
        </div>
        <div class="col-md-4">
            <h1>Facilities</h1>
        </div>
    </div>

</body>

<!--   Core JS Files   -->
<script src="<?php echo base_url();?>assets/js/jquery-1.10.2.js" type="text/javascript"></script>
<script src="<?php echo base_url();?>assets/js/bootstrap.min.js" type="text/javascript"></script>

<!--  Checkbox, Radio & Switch Plugins -->
<script src="<?php echo base_url();?>assets/js/bootstrap-checkbox-radio-switch.js"></script>

<!--  Charts Plugin -->
<script src="<?php echo base_url();?>assets/js/chartist.min.js"></script>

<!--  Notifications Plugin    -->
<script src="<?php echo base_url();?>assets/js/bootstrap-notify.js"></script>

<!--  Google Maps Plugin    -->
<script type="text/javascript" src="https://maps.googleapis.com/maps/api/js?sensor=false"></script>

<!-- Light Bootstrap Table Core javascript and methods for Demo purpose -->
<script src="assets/js/light-bootstrap-dashboard.js"></script>

<!-- Light Bootstrap Table DEMO methods, don't include it in your project! -->
<script src="<?php echo base_url();?>assets/js/demo.js"></script>

<script type="text/javascript">
    $(document).ready(function() {

        demo.initChartist();

        $.notify({
            // icon: 'pe-7s-lea',
            message: "Welcome GMS."

        }, {
            type: 'info',
            timer: 4000
        });

    });
</script>

</html>