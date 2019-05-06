<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="description" content="">
    <meta name="author" content="">
    <link rel="icon" type="image/png" sizes="16x16" href="assets/images/favicon.png">
    <title>TumPark</title>
    <link href="assets/plugins/bootstrap/css/bootstrap.min.css" rel="stylesheet">
    <link href="assets/css/style.css" rel="stylesheet">
    <link href="assets/css/colors/blue.css" id="theme" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css?family=Righteous" rel="stylesheet">
</head>

<style> 
        h1{
            margin-top: 100px;
            font-family: 'Righteous', cursive;
            font-size: 90px;
            margin-bottom: 35px;
        }
</style>

<body>
    <div class="preloader">
        <svg class="circular" viewBox="25 25 50 50">
            <circle class="path" cx="50" cy="50" r="20" fill="none" stroke-width="2" stroke-miterlimit="10" /> </svg>
    </div>
        
    <section id="wrapper" class="login-register login-sidebar"  
    style="background-image:url(assets/images/background/4331.jpg_wh1200.jpg); background-color: rgba(0,0,0,.8); background-blend-mode: overlay;">

    
    <div class="container">
        <br>
        <br>
        <div class="row">
            <div class="col-sm-6 offset-3">
                <h1 class="text-white text-center">TumPark</h1>
                <p class="text-muted text-center">Sistem parkir otomatis</p>
                <form action="{{ route('login') }}" method="post">
                    @csrf
                    <div class="form-group">
                        <label for="">Email</label>
                        <input type="text" class="form-control" autofocus placeholder="Email" value="{{ old('email') }}" name="email" autocomplete="off" required>
                    </div>
                    <div class="form-group">
                        <label for="">Password</label>
                        <input type="password" class="form-control" name="password" placeholder="Password" required>
                    </div>
                    <div class="form-group">
                        <button class="btn btn-info" type="submit">Login</button>
                        <a href="register" class="btn btn-info" type="submit">Register</a>
                    </div>
                </form>
                @if($errors->any())
                <div class="alert alert-danger"><b>Username atau password salah!!</b></div>
                @endif


            </div>
        </div>
    </div>

        
    </section>
    <script src="assets/plugins/jquery/jquery.min.js"></script>
    <script src="assets/plugins/popper/popper.min.js"></script>
    <script src="assets/plugins/bootstrap/js/bootstrap.min.js"></script>
    <script src="assets/js/jquery.slimscroll.js"></script>
    <script src="assets/js/waves.js"></script>
    <script src="assets/js/sidebarmenu.js"></script>
    <script src="assets/plugins/sticky-kit-master/dist/sticky-kit.min.js"></script>
    <script src="assets/plugins/sparkline/jquery.sparkline.min.js"></script>
    <script src="assets/js/custom.min.js"></script>
    <script src="assets/plugins/styleswitcher/jQuery.style.switcher.js"></script>
</body>
</html>