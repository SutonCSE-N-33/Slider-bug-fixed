<?php
        session_start();
        if($_SESSION['login'] == false){
            header("location:login.php");
        }
?>
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
<?php

if(isset($_GET['logid'])){
    session_start();
    $_SESSION['login']=false;
    session_destroy();
    header("location:login.php");
}

?>
<body>
    <!-- sidemenu Part Start -->
    <section id="sidemenu">
        <div class="container-fluid">
            <div class="navigation">
                <ul>
                    <li>
                        <a class="brand" href="#">
                            <img class="logo" src="assets/images/logo1.png" alt="">
                            <span class="title name">Project Name</span>
                        </a>
                    </li>
                    <li class="dashboard">
                        <a href="#">
                            <img class="icon" src="assets/images/iconpng/007-dashboard.png" alt="">
                            <span class="title">Dashboard</span>
                        </a>
                    </li>
                    <li class="channel">
                        <a href="#">
                            <img class="icon" src="assets/images/iconpng/004-channel.png" alt="">
                            <span class="title">Channel</span>
                        </a>
                    </li>
                    <li>
                        <a href="#">
                            <img class="icon" src="assets/images/iconpng/003-message.png" alt="">
                            <span class="title message">Message</span>
                        </a>
                    </li>
                    <li>
                        <a href="user-profile.php">
                            <img class="icon" src="assets/images/iconpng/005-resume.png" alt="">
                            <span class="title profile">Profile</span>
                        </a>
                    </li>
                    <li>
                        <a href="#">
                            <img class="icon" src="assets/images/iconpng/002-settings.png" alt="">
                            <span class="title settings">settings</span>
                        </a>
                    </li>
                    <li>
                        <a href="#">
                            <img class="icon" src="assets/images/iconpng/006-hiking.png" alt="">
                            <span class="title">Help</span>
                        </a>
                    </li>
                    <li>
                        <a href="?logid=1">
                            <img class="icon" src="assets/images/iconpng/001-log-out.png" alt="">
                            <span class="title signout">Sign Out</span>
                        </a>
                    </li>
                </ul>
            </div>
        </div>
    </section>
    <!-- //sidemenu Part End -->

    <!-- main section Part Start -->
    <section id="main">
        <!-- topbar Part Start -->
        <div class="topbar">
            <!-- menubar -->
            <div class="toggle">
                <img src="assets/images/iconpng/009-menu.png" alt="">
            </div>
            <!-- search -->
            <div class="search">
                <label>
                    <input type="text" placeholder="Search here">
                    <img src="assets/images/iconpng/008-search.png" alt="">
                </label>
            </div>
            <!-- userImg -->
            <div class="user">
                <img src="assets/images/user-1.jpg" alt="">
            </div>
        </div>
        <!-- //topbar Part End -->

        <!-- Dashboard Part Start -->
        <section id="dashboard">
            <!-- cards Part Start -->
            <div class="cards">
                <div class="row">
                    <div class="col-md-3">
                        <a class="viewcard" href="#">
                            <div class="card_item">
                                <div class="card text-dark bg-light mb-3" style="max-width: 18rem;">
                                    <div class="card-header h5">
                                        <span class="cardheader">Views</span>
                                    </div>
                                    <div class="card-body cardbody">
                                        <h5 class="card-title cardcount">1,500</h5>
                                        <p class="card-text cardtitle">Daily Views</p>
                                        <div class="card_icon">
                                            <img src="assets/images/views.png" alt="">
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </a>
                    </div>
                    <div class="col-md-3">
                        <a class="subscribercard" href="#">
                            <div class="card_item">
                                <div class="card text-dark bg-light mb-3" style="max-width: 18rem;">
                                    <div class="card-header h5">
                                        <span class="cardheader">Subscribers</span>
                                    </div>
                                    <div class="card-body">
                                        <h5 class="card-title cardcount">20k</h5>
                                        <p class="card-text cardtitle">Daily Subscribers</p>
                                        <div class="card_icon">
                                            <img src="assets/images/subscribers.png" alt="">
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </a>
                    </div>
                    <div class="col-md-3">
                        <a class="commentcard" href="#">
                            <div class="card_item">
                                <div class="card text-dark bg-light mb-3" style="max-width: 18rem;">
                                    <div class="card-header h5">
                                        <span class="cardheader">Comments</span>
                                    </div>
                                    <div class="card-body">
                                        <h5 class="card-title cardcount">300</h5>
                                        <p class="card-text cardtitle">Comments</p>
                                        <div class="card_icon">
                                            <img src="assets/images/comments.png" alt="">
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </a>
                    </div>
                    <div class="col-md-3">
                        <a class="earningcard" href="#">
                            <div class="card_item">
                                <div class="card text-dark bg-light mb-3" style="max-width: 18rem;">
                                    <div class="card-header h5">
                                        <span class="cardheader">Earnings</span>
                                    </div>
                                    <div class="card-body">
                                        <h5 class="card-title cardcount">$200</h5>
                                        <p class="card-text cardtitle">Total Earnings</p>
                                        <div class="card_icon">
                                            <img src="assets/images/earnings.png" alt="">
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </a>
                    </div>
                </div>
            </div>
            <!-- //cards Part End -->

            <!-- Allitems Part Start -->
            <div class="allItems">
                <!-- Details llist Part Start -->
                <div class="details">
                    <div class="viewBox">
                        <div class="row">
                            <div class="col-md-6">
                                <div class="vchart bg-light">
                                    <canvas id="viewChart"></canvas>
                                </div>
                            </div>
                            <div class="col-md-6 ps-4 ms-auto">
                                <div class="card text-dark bg-light mb-3" style="max-width: 100%;">
                                    <div class="card-header rvtitle">
                                        <h4 class="textgreen">Recent Viewers</h4>
                                    </div>
                                    <div class="card-body tablebody">
                                        <table class="table">
                                            <thead>
                                                <tr>
                                                    <th scope="col">Image</th>
                                                    <th scope="col">Name</th>
                                                    <th scope="col">Handle</th>
                                                </tr>
                                            </thead>
                                            <tbody>
                                                <tr>
                                                    <th scope="row">
                                                        <img class="rvimg" src="assets/images/user-1.jpg" alt="">
                                                    </th>
                                                    <td>Joe Biden</td>
                                                    <td><a class="text-info" href="#">@thin</a></td>
                                                </tr>
                                                <tr>
                                                    <th scope="row">
                                                        <img class="rvimg" src="assets/images/user-1.jpg" alt="">
                                                    </th>
                                                    <td>Donald Trump</td>
                                                    <td><a class="text-info" href="#">@medium</a></td>
                                                </tr>
                                                <tr>
                                                    <th scope="row">
                                                        <img class="rvimg" src="assets/images/user-1.jpg" alt="">
                                                    </th>
                                                    <td>Hillary Clinton</td>
                                                    <td><a class="text-info" href="#">@fat</a></td>
                                                </tr>
                                            </tbody>
                                        </table>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="subBox">
                        <div class="row">
                            <div class="col-md-6">
                                <div class="vchart bg-light">
                                    <canvas id="subChart"></canvas>
                                </div>
                            </div>
                            <div class="col-md-6 ps-4 ms-auto">
                                <div class="card text-dark bg-light mb-3" style="max-width: 100%;">
                                    <div class="card-header rvtitle">
                                        <h4 class="textgreen">Recent Subscribers</h4>
                                    </div>
                                    <div class="card-body tablebody">
                                        <table class="table">
                                            <thead>
                                                <tr>
                                                    <th scope="col">Image</th>
                                                    <th scope="col">Name</th>
                                                    <th scope="col">Handle</th>
                                                </tr>
                                            </thead>
                                            <tbody>
                                                <tr>
                                                    <th scope="row">
                                                        <img class="rvimg" src="assets/images/user-1.jpg" alt="">
                                                    </th>
                                                    <td>Joe Biden</td>
                                                    <td><a class="text-info" href="#">@thin</a></td>
                                                </tr>
                                                <tr>
                                                    <th scope="row">
                                                        <img class="rvimg" src="assets/images/user-1.jpg" alt="">
                                                    </th>
                                                    <td>Donald Trump</td>
                                                    <td><a class="text-info" href="#">@medium</a></td>
                                                </tr>
                                                <tr>
                                                    <th scope="row">
                                                        <img class="rvimg" src="assets/images/user-1.jpg" alt="">
                                                    </th>
                                                    <td>Hillary Clinton</td>
                                                    <td><a class="text-info" href="#">@fat</a></td>
                                                </tr>
                                            </tbody>
                                        </table>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="earnBox">
                        <div class="row">
                            <div class="col-md-12">
                                <div class="echart bg-light">
                                    <canvas id="earnChart"></canvas>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <!-- //Details llist Part End -->
            </div>
            <!-- //Allitems Part End -->
        </section>
        <!-- //Dashboard Part End -->

        <!-- channel Part Start -->
        <div class="mychannel d-none">
            <div class="channelbox">
                <div class="card" style="width: 100%;">
                    <div class="card-header cardheader">
                        <span>
                            <img src="assets/images/iconpng/004-channel.png" alt="">
                            <h4>Your Channel</h4>
                        </span>
                        <button class="btn bgorange text-light componentbtn" type="button" data-bs-toggle="collapse"
                            data-bs-target="#collapseExample">
                            Components
                        </button>
                    </div>
                    <div class="collapse" id="collapseExample">
                        <div class="card-body cardbody">
                            <ul>
                                <li><span class="badge bgblue home">Home</span></li>
                                <li><span class="badge bgblue videos">Videos</span></li>
                                <li><span class="badge bgblue playlists">Playlist</span></li>
                                <li><span class="badge bgblue channels">Channels</span></li>
                                <li><span class="badge bgblue studio">Studio</span></li>
                                <li><span class="badge bgblue customize">Customize</span></li>
                                <li>
                                    <div class="input-group mb-3 vsearch">
                                        <input type="text" class="form-control" placeholder="Search">
                                        <span class="input-group-text" id="basic-addon2">
                                            <i class="fas fa-search"></i>
                                        </span>
                                    </div>
                                </li>
                            </ul>
                        </div>
                    </div>
                </div>
            </div>
            <div class="homebox d-none">
                <div class="upload">
                    <div class="card mx-auto" style="width: 500px">
                        <img src="assets/images/gif/upload.gif" class="card-img-top" alt="...">
                        <div class="card-body text-center">
                            <h4>Upload your video and Show your skills</h4>
                            <p class="card-text">You can upload you videos from here</p>
                            <input type="file" id="uploadfile" accept="assets/videos/*">
                            <label for="uploadfile" class="btn bggreen text-light mt-3">Upload</label>
                        </div>
                    </div>
                </div>
            </div>
            <div class="videobox d-none">
                <div class="row">
                    <div class="col-md-3">
                        <div class="vitem">
                            <div class="card" style="width: 100%;">
                                <video src="assets/videos/v1.mp4" class="card-img-top" autoplay muted loop></video>
                                <div class="card-body">
                                    <h4>A funny story for kids</h4>
                                    <p class="card-text">Lorem ipsum dolor sit amet consectetur adipisicing elit.</p>
                                    <span class="badge bgblue edit">Edit</span>
                                    <span class="badge bgred delete">Delete</span>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-md-3">
                        <div class="vitem">
                            <div class="card" style="width: 100%;">
                                <video src="assets/videos/v1.mp4" class="card-img-top" autoplay muted loop></video>
                                <div class="card-body">
                                    <h4>A funny story for kids</h4>
                                    <p class="card-text">Lorem ipsum dolor sit amet consectetur adipisicing elit.</p>
                                    <span class="badge bgblue edit">Edit</span>
                                    <span class="badge bgred delete">Delete</span>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-md-3">
                        <div class="vitem">
                            <div class="card" style="width: 100%;">
                                <video src="assets/videos/v1.mp4" class="card-img-top" autoplay muted loop></video>
                                <div class="card-body">
                                    <h4>A funny story for kids</h4>
                                    <p class="card-text">Lorem ipsum dolor sit amet consectetur adipisicing elit.</p>
                                    <span class="badge bgblue edit">Edit</span>
                                    <span class="badge bgred delete">Delete</span>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-md-3">
                        <div class="vitem">
                            <div class="card" style="width: 100%;">
                                <video src="assets/videos/v1.mp4" class="card-img-top" autoplay muted loop></video>
                                <div class="card-body">
                                    <h4>A funny story for kids</h4>
                                    <p class="card-text">Lorem ipsum dolor sit amet consectetur adipisicing elit.</p>
                                    <span class="badge bgblue edit">Edit</span>
                                    <span class="badge bgred delete">Delete</span>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="row">
                    <div class="col-md-3">
                        <div class="vitem">
                            <div class="card" style="width: 100%;">
                                <video src="assets/videos/v1.mp4" class="card-img-top" autoplay muted loop></video>
                                <div class="card-body">
                                    <h4>A funny story for kids</h4>
                                    <p class="card-text">Lorem ipsum dolor sit amet consectetur adipisicing elit.</p>
                                    <span class="badge bgblue edit">Edit</span>
                                    <span class="badge bgred delete">Delete</span>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-md-3">
                        <div class="vitem">
                            <div class="card" style="width: 100%;">
                                <video src="assets/videos/v1.mp4" class="card-img-top" autoplay muted loop></video>
                                <div class="card-body">
                                    <h4>A funny story for kids</h4>
                                    <p class="card-text">Lorem ipsum dolor sit amet consectetur adipisicing elit.</p>
                                    <span class="badge bgblue edit">Edit</span>
                                    <span class="badge bgred delete">Delete</span>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-md-3">
                        <div class="vitem">
                            <div class="card" style="width: 100%;">
                                <video src="assets/videos/v1.mp4" class="card-img-top" autoplay muted loop></video>
                                <div class="card-body">
                                    <h4>A funny story for kids</h4>
                                    <p class="card-text">Lorem ipsum dolor sit amet consectetur adipisicing elit.</p>
                                    <span class="badge bgblue edit">Edit</span>
                                    <span class="badge bgred delete">Delete</span>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-md-3">
                        <div class="vitem">
                            <div class="card" style="width: 100%;">
                                <video src="assets/videos/v1.mp4" class="card-img-top" autoplay muted loop></video>
                                <div class="card-body">
                                    <h4>A funny story for kids</h4>
                                    <p class="card-text">Lorem ipsum dolor sit amet consectetur adipisicing elit.</p>
                                    <span class="badge bgblue edit">Edit</span>
                                    <span class="badge bgred delete">Delete</span>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!-- //channel Part End -->

    </section>
    <!-- //main section Part End -->



    <!-- if javascript doesn't work -->
    <noscript>You have to enable javascript to view this site</noscript>
    <!-- Jquery Js -->
    <script src="assets/admin-panel-js/jquery-3.6.0.min.js"></script>
    <!-- Bootstrap Js -->
    <script src="assets/admin-panel-js/bootstrap.min.js"></script>
    <!-- slick Js -->
    <script src="assets/admin-panel-js/slick.min.js"></script>
    <!-- Wow Js -->
    <script src="assets/admin-panel-js/wow.min.js"></script>
    <!-- Chart CDN Js -->
    <script src="https://cdn.jsdelivr.net/npm/chart.js@3.6.0/dist/chart.min.js"></script>
    <!-- View Chart Js -->
    <script src="assets/admin-panel-js/vchart.js"></script>
    <!-- Subscriber Chart Js -->
    <script src="assets/admin-panel-js/schart.js"></script>
    <!-- Earning Chart Js -->
    <script src="assets/admin-panel-js/echart.js"></script>
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