<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Any Project</title>
    <!-- Favicon -->
    <link rel="icon" href="assets/images">
    <!-- Fontawesome icon -->
    <link rel="stylesheet" href="assets/css/fontawesome.min.css">

    <!-- Google Font -->

    <!-- Slick CSS -->
    <link rel="stylesheet" href="assets/css/slick.css">

    <!-- Animate CSS -->
    <link rel="stylesheet" href="assets/css/animate.css">

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="assets/css/bootstrap.min.css">

    <!-- Main Style CSS -->
    <link rel="stylesheet" href="assets/css/admin-panel.css">

    <!-- Responsive CSS -->
    <link rel="stylesheet" href="assets/css/responsive.css">
</head>

<body>
    <section id="enteringpage">
        <div class="card text-center logincard">
            <div class="card-body">
                <img src="assets/images/gif/loginimg.gif" width="50px" height="50px" alt="">
                <h5 class="card-title textred">Please enter your Account</h5>
               <form action="signin1.php" method="post">
               <div class="input-group mb-3">
                    <span class="input-group-text bgorange" id="basic-addon1">
                        <i class="fas fa-at"></i>
                    </span>
                    <input type="text" name="name" class="form-control outline-none" placeholder="UserName">
                </div>
                <div class="input-group mb-3">
                    <span class="input-group-text bgorange" id="basic-addon1">
                        <i class="fas fa-key"></i>
                    </span>
                    <input type="password" name="password" class="form-control" placeholder="Password">
                </div>
                <input type="submit" class="btn btn-primary my-4" value="Login" >
               </form>
                <p class="d-block mt-2 mb-4">Create a new account <a href="#" class="switchsignup">SignUp Here</a></p>
            </div>
        </div>
        <div class="card text-center signupcard d-none">
            <div class="card-body">
                <img src="assets/images/gif/loginimg.gif" width="50px" height="50px"alt="">
                <h5 class="card-title textred">Create a new account</h5>
               <form action="signup1.php" method="post">
               <div class="row mb-3">
                    <div class="col">
                        <div class="input-group">
                            <span class="input-group-text bgorange" id="basic-addon1">
                                <i class="fas fa-user"></i>
                            </span>
                            <input type="text" name="name" class="form-control" placeholder="First name">
                        </div>
                    </div>
                    <div class="col">
                        <div class="input-group">
                            <span class="input-group-text bgorange" id="basic-addon1">
                                <i class="fas fa-user"></i>
                            </span>
                            <input type="text" class="form-control" placeholder="Last name">
                        </div>
                    </div>
                </div>
                <div class="input-group mb-3">
                    <span class="input-group-text bgorange" id="basic-addon1">
                        <i class="fas fa-at"></i>
                    </span>
                    <input type="text" name="email" class="form-control outline-none" placeholder="Email">
                </div>
                <div class="input-group mb-3">
                    <span class="input-group-text bgorange" id="basic-addon1">
                        <i class="fas fa-lock"></i>
                    </span>
                    <input type="password" name="password" class="form-control" placeholder="Password">
                </div>
                <div class="input-group mb-3">
                    <span class="input-group-text bgorange" id="basic-addon1">
                        <i class="fas fa-lock"></i>
                    </span>
                    <input type="password" name="c_password" class="form-control" placeholder="Confirm Password">
                </div>
                <input type="submit" class="btn btn-primary my-4" value="SignUp" >
               </form>
                <p class="d-block mt-2 mb-4">Already have an account? <a href="#" class="switchlogin">Login Here</a></p>
            </div>
        </div>
    </section>



    <!-- if javascript doesn't work -->
    <noscript>You have to enable javascript to view this site</noscript>
    <!-- Jquery Js -->
    <script src="assets/js/jquery-3.6.0.min.js"></script>
    <!-- Bootstrap Js -->
    <script src="assets/js/bootstrap.min.js"></script>
    <!-- slick Js -->
    <script src="assets/js/slick.min.js"></script>
    <!-- Wow Js -->
    <script src="assets/js/wow.min.js"></script>
    <!-- Chart CDN Js -->
    <script src="https://cdn.jsdelivr.net/npm/chart.js@3.6.0/dist/chart.min.js"></script>
    <!-- View Chart Js -->
    <script src="assets/js/vchart.js"></script>
    <!-- Subscriber Chart Js -->
    <script src="assets/js/schart.js"></script>
    <!-- Earning Chart Js -->
    <script src="assets/js/echart.js"></script>
    <!-- Main Js -->
    <script src="assets/admin-panel-js/admin.js"></script>

    <script>
        // sidebarToggle
        let toggle = document.querySelector('.toggle');
        let navigation = document.querySelector('.navigation');
        let main = document.querySelector('#main');

        toggle.onclick = function () {
            navigation.classList.toggle('active');
            main.classList.toggle('active');
        }

        // Sidebar li hover active
        let list = document.querySelectorAll('.navigation li');
        function activeLink() {
            list.forEach((item) =>
                item.classList.remove('hovered'));
            this.classList.add('hovered');
        }
        list.forEach((item) =>
            item.addEventListener('mouseover', activeLink));

        new WOW().init();
    </script>
</body>

</html>