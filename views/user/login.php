<?php

?>
<!DOCTYPE html>
<html lang="en">

<head>



    <title>login to door to door YellowPages</title>

    <!-- Bootstrap Core CSS -->

    <link href="cdn/css/bootstrap/css/bootstrap.min.css" rel="stylesheet">

    <!-- MetisMenu CSS -->
    <link href="cdn/css/metisMenu/metisMenu.min.css" rel="stylesheet">
    <!-- Custom CSS -->
    <link href="cdn/css/sb-admin-2.css" rel="stylesheet">
    <!-- Custom Fonts -->
    <link href="cdn/css/fontawesome/css/font-awesome.min.css" rel="stylesheet" type="text/css">

    <!-- HTML5 Shim and Respond.js IE8 support of HTML5 elements and media queries -->
    <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
    <!--[if lt IE 9]>
        <script src="https://oss.maxcdn.com/libs/html5shiv/3.7.0/html5shiv.js"></script>
        <script src="https://oss.maxcdn.com/libs/respond.js/1.4.2/respond.min.js"></script>
    <![endif]-->

</head>

<body>

    <div class="container">
        <div class="row">
            <div class="col-md-4 col-md-offset-4">
                <div class="login-panel panel panel-default">
                    <div class="panel-heading">
                        <h3 class="panel-title">Please Sign In</h3>
                    </div>
                    <div class="panel-body">
                        <form role="form" method="post" action="?r=UserController/loginAction">
                            <fieldset>
                                <div class="form-group">
                                    <input class="form-control" placeholder="User Name" name="User_Name" type="text" >
                                </div>
                                <div class="form-group">
                                    <input class="form-control" placeholder="Password" name="User_Pass" type="password" >
                                </div>
                                <div class="checkbox">
                                    <label>
                                        <input name="remember" type="checkbox" value="Remember Me">Remember Me
                                    </label>
                                </div>
                                <!-- Change this to a button or input when using this as a form -->
                                <button  class="btn btn-lg btn-success btn-block">Login</button>
<!--                                <a href="index.html" class="btn btn-lg btn-success btn-block">Login</a>-->
                            </fieldset>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <!-- jQuery -->
    <script src="cdn/js/jquery.min.js"></script>

    <!-- Bootstrap Core JavaScript -->
    <script src="cdn/css/bootstrap/js/bootstrap.min.js"></script>

    <!-- Metis Menu Plugin JavaScript -->
    <script src="cdn/js/metisMenu.min.js"></script>

    <!-- Custom Theme JavaScript -->
    <script src="cdn/js/sb-admin-2.js"></script>

</body>

</html>
