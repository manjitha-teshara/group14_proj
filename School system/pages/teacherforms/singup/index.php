<head>
    <meta charset="UTF-8">
    <title>Student SingUp</title>
    <meta content='width=device-width, initial-scale=1, maximum-scale=1, user-scalable=no' name='viewport'>
    <!-- Bootstrap 3.3.2 -->
    <link href="../../../bootstrap/css/bootstrap.min.css" rel="stylesheet" type="text/css" />
    <!-- Font Awesome Icons -->
    <link href="https://maxcdn.bootstrapcdn.com/font-awesome/4.3.0/css/font-awesome.min.css" rel="stylesheet" type="text/css" />
    <!-- Theme style -->
    <link href="../../../dist/css/AdminLTE.min.css" rel="stylesheet" type="text/css" />
    <!-- iCheck -->
    <link href="plugins/iCheck/square/blue.css" rel="stylesheet" type="text/css" />
</head>

<body class="login-page">
    <div class="login-box">
        <div class="login-logo">
            <a href="../../index.php"><b>S</b>ing Up</a>
        </div><!-- /.login-logo -->
        <div class="login-box-body">
            <p class="login-box-msg">Request for a teacher account</p>
            <div class="form-group has-feedback">
                <input id="uname" type="text" class="form-control" name="uname" placeholder="Nic "/>
                <span class="glyphicon glyphicon-envelope form-control-feedback"></span>
            </div>
            <div class="form-group has-feedback">
                <input id="uname" type="text" class="form-control" name="uname" placeholder="Name"/>
                <span class="glyphicon glyphicon-envelope form-control-feedback"></span>
            </div>
            <div class="form-group has-feedback">
                <input id="uname" type="text" class="form-control" name="uname" placeholder="Email"/>
                <span class="glyphicon glyphicon-envelope form-control-feedback"></span>
            </div>
            
            <div class="row">
                <div class="col-xs-8">  
                </div><!-- /.col -->
                <div class="col-xs-4">
                    <button id="test" onclick="addstudent1()"  class="btn btn-primary btn-block btn-flat">Sign Up</button>
                </div><!-- /.col -->
            </div>
        </div>
    </div>
</body>

<!-- jQuery 2.1.3 -->
<script src="../../../plugins/jQuery/jQuery-2.1.3.min.js"></script>
<!-- Bootstrap 3.3.2 JS -->
<script src="../../../bootstrap/js/bootstrap.min.js" type="text/javascript"></script>
<!-- iCheck -->
<script src="../../../plugins/iCheck/icheck.min.js" type="text/javascript"></script>
<script>
    $(function () {
        $('input').iCheck({
            checkboxClass: 'icheckbox_square-blue',
            radioClass: 'iradio_square-blue',
            increaseArea: '20%' // optional
        });
    }); 
</script>