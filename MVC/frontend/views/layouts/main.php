<!DOCTYPE html>
<html lang="zxx">
<head>
    <base href="<?php echo $_SERVER['SCRIPT_NAME'] ?>"
    <meta charset="UTF-8">
    <title>Trang chủ</title>

    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="keywords" content="Toys Shop Responsive web template, Bootstrap Web Templates, Flat Web Templates, Android Compatible web template,
         Smartphone Compatible web template, free webdesigns for Nokia, Samsung, LG, SonyEricsson, Motorola web design" />
    <script>
        addEventListener("load", function () {
            setTimeout(hideURLbar, 0);
        }, false);

        function hideURLbar() {
            window.scrollTo(0, 1);
        }
    </script>
    <!--//meta tags ends here-->
    <!--booststrap-->
    <link href="assets/css/bootstrap.min.css" rel="stylesheet" type="text/css" media="all">
    <!--//booststrap end-->
    <link href="assets/css/checkout.css" rel="stylesheet" type="text/css" media="all">
    <link href="assets/css/creditly.css" rel="stylesheet" type="text/css" media="all">
    <link href="assets/css/easy-responsive-tabs.css" rel='stylesheet' type='text/css' media="all">
    <!-- font-awesome icons -->
    <link href="assets/css/fontawesome-all.min.css" rel="stylesheet" type="text/css" media="all">
    <!-- //font-awesome icons -->
    <!-- For Clients slider -->
    <link rel="stylesheet" href="assets/css/flexslider.css" type="text/css" media="all" />
    <!--flexs slider-->
    <link href="assets/css/JiSlider.css" rel="stylesheet">
    <link href="assets/css/jquery-ui1.css" rel="stylesheet">
    <!--Shoping cart-->
    <link rel="stylesheet" href="assets/css/shop.css" type="text/css" />
    <!--//Shoping cart-->
    <!--stylesheets-->
    <link href="assets/css/style.css" rel='stylesheet' type='text/css' media="all">
    <link href="assets/css/style1.css" rel='stylesheet' type='text/css' media="all">
    <!--//stylesheets-->
    <link href="//fonts.googleapis.com/css?family=Sunflower:500,700" rel="stylesheet">
    <link href="//fonts.googleapis.com/css?family=Open+Sans:400,600,700" rel="stylesheet">
</head>
<body>
<div>
    <div class="set-width">
        <!--header-->
        <?php require_once 'header.php';?>
        <!--header-->
        <div class="main-content">
            <div class="container">
                <?php if (isset($_SESSION['error'])): ?>
                    <div class="alert alert-danger">
                        <?php
                        echo $_SESSION['error'];
                        unset($_SESSION['error']);
                        ?>
                    </div>
                <?php endif; ?>

                <?php if (!empty($this->error)): ?>
                    <div class="alert alert-danger">
                        <?php
                        echo $this->error;
                        ?>
                    </div>
                <?php endif; ?>

                <?php if (isset($_SESSION['success'])): ?>
                    <div class="alert alert-success">
                        <?php
                        echo $_SESSION['success'];
                        unset($_SESSION['success']);
                        ?>
                    </div>
                <?php endif; ?>
            </div>
            <!--    hiển thị nội dung động -->
        </div>
        <?php echo $this->content; ?>
        <!--footer-->
        <?php require_once 'footer.php';?>
        <!-- //footer -->
        <!-- Modal 1-->
        <div class="modal fade" id="exampleModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
            <div class="modal-dialog" role="document">
                <div class="modal-content">
                    <div class="modal-header">
                        <h5 class="modal-title" id="exampleModalLabel">Login</h5>
                        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                            <span aria-hidden="true">&times;</span>
                        </button>
                    </div>
                    <div class="modal-body">
                        <div class="register-form">
                            <form action="#" method="post">
                                <div class="fields-grid">
                                    <div class="styled-input">
                                        <input type="text" placeholder="Your Name" name="Your Name" required="">
                                    </div>
                                    <div class="styled-input">
                                        <input type="email" placeholder="Your Email" name="Your Email" required="">
                                    </div>
                                    <div class="styled-input">
                                        <input type="password" placeholder="password" name="password" required="">
                                    </div>
                                    <button type="submit" class="btn subscrib-btnn">Login</button>
                                </div>
                            </form>
                        </div>
                    </div>
                    <div class="modal-footer">
                        <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
                    </div>
                </div>
            </div>
        </div>
        <!-- //Modal 1-->

    </div>
</div>

</body>
</html>