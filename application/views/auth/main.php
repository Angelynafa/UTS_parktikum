
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <!-- The above 3 meta tags *must* come first in the head; any other head content must come *after* these tags -->

    <title>Booking Form HTML Template</title>

    <!-- Google font -->
    <link href="<?= base_url('assets/as/');?>https://fonts.googleapis.com/css?family=Montserrat:400,700" rel="stylesheet">

    <!-- Bootstrap -->
    <link type="text/css" rel="stylesheet" href="<?= base_url('assets/as/');?>css/bootstrap.min.css" />

    <!-- Custom stlylesheet -->
    <link type="text/css" rel="stylesheet" href="<?= base_url('assets/as/');?>css/style.css" />

    <!-- HTML5 shim and Respond.js for IE8 support of HTML5 elements and media queries -->
    <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
    <!--[if lt IE 9]>
          <script src="https://oss.maxcdn.com/html5shiv/3.7.3/html5shiv.min.js"></script>
          <script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>
        <![endif]-->

</head>

<body>
    <div id="booking" class="section">
        <div class="section-center">
            <div class="container">
                <div class="row">
                    <div class="booking-form">
                        <div class="form-header">
                            <h1>sewa lapang</h1>
                        </div>
                        <form action="<?= base_url('auth/booking')?>" method="post">
                            <div class="row">
                                <div class="col-sm-6">
                                    <div class="form-group">
                                        <span class="form-label">Name</span>
                                        <input class="form-control" type="text" placeholder="Enter your name">
                                    </div>
                                </div>
                                <div class="col-sm-6">
                                    <div class="form-group">
                                        <span class="form-label">Email</span>
                                        <input class="form-control" type="email" placeholder="Enter your email">
                                    </div>
                                </div>
                            </div>
                            <div class="form-group">
                                <span class="form-label">Phone</span>
                                <input class="form-control" type="tel" placeholder="Enter your phone number">
                            </div>
                            
                            <div class="row">
                                <div class="col-sm-5">
                                    <div class="form-group">
                                        <span class="form-label">Pickup Date</span>
                                        <input class="form-control" type="date" required>
                                    </div>
                                </div>
                                <div class="col-sm-7">
                                    <div class="row">
                                        <div class="col-sm-4">
                                            <div class="form-group">
                                                <span class="form-label">Hour</span>
                                                <select class="form-control">
                                                    <option value="1">1</option>
                                                    <option value="2">2</option>
                                                    <option value="3">3</option>
                                                </select>
                                                <span class="select-arrow"></span>
                                            </div>
                                        </div>
                                        
                                    </div>
                                </div>
                            </div>
                            <div class="form-btn">
                                <button class="submit-btn">Book Now</button>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
</body><!-- This templates was made by Colorlib (https://colorlib.com) -->

</html>