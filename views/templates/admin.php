<?php
use App\App;
?>
<!doctype html>
<html lang="fr">
<head>
    <meta charset="utf-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1" />

    <title>Admin panel - <?= App::getTitle(); ?></title>

    <meta content='width=device-width, initial-scale=1.0, maximum-scale=1.0, user-scalable=0' name='viewport' />
    <meta name="viewport" content="width=device-width" />
    <link href="/nbc/root/css/admin/bootstrap.min.css" rel="stylesheet" />
    <link href="/nbc/root/css/admin/animate.min.css" rel="stylesheet"/>
    <link href="/nbc/root/css/admin/light-bootstrap-dashboard.css" rel="stylesheet"/>
    <link href="/nbc/root/css/admin/demo.css" rel="stylesheet" />
    <link href="http://maxcdn.bootstrapcdn.com/font-awesome/4.2.0/css/font-awesome.min.css" rel="stylesheet">
    <link href='http://fonts.googleapis.com/css?family=Roboto:400,700,300' rel='stylesheet' type='text/css'>
    <link href="/nbc/root/css/admin/pe-icon-7-stroke.css" rel="stylesheet" />

</head>
<body>

<div class="wrapper">
    <div class="sidebar" data-color="red" data-image="/nbc/root/img/admin/sidebar-5.jpg">
        <div class="sidebar-wrapper">
            <div class="logo">
                <a href="/nbc" class="simple-text">
                   <?= App::getTitle(); ?>
                </a>
            </div>

            <ul class="nav">
                <li class="active">
                    <a href="/nbc/admin/dashboard">
                        <i class="pe-7s-graph"></i>
                        <p>Dashboard</p>
                    </a>
                    <a href="/nbc/admin/post">
                        <i class="pe-7s-graph"></i>
                        <p>Posts</p>
                    </a>
                </li>
                <li class="active-pro">
                    <a href="/nbc/logout">
                        <i class="pe-7s-rocket"></i>
                        <p>Logout</p>
                    </a>
                </li>
            </ul>
        </div>
    </div>

    <div class="main-panel">
        <nav class="navbar navbar-default navbar-fixed">
            <div class="container-fluid">
                <div class="navbar-header">
                    <button type="button" class="navbar-toggle" data-toggle="collapse" data-target="#navigation-example-2">
                        <span class="sr-only">Toggle navigation</span>
                        <span class="icon-bar"></span>
                        <span class="icon-bar"></span>
                        <span class="icon-bar"></span>
                    </button>
                    <a class="navbar-brand" href="/nbc/admin/dashboard">Dashboard</a>
                </div>
                <div class="collapse navbar-collapse">

                    <ul class="nav navbar-nav navbar-right">
                        <li>
                            <a href="/nbc/logout">
                                <p>Log out</p>
                            </a>
                        </li>
                        <li class="separator hidden-lg hidden-md"></li>
                    </ul>
                </div>
            </div>
        </nav>


        <div class="content">
            <div class="container-fluid">
                <?= $yield; ?>
            </div>
        </div>


        <footer class="footer">
            <div class="container-fluid">
                <nav class="pull-left">
                    <ul>
                        <li>
                            <a href="/nbc">
                                Home
                            </a>
                        </li>
                        <li>
                            <a href="/nbc/vote">
                                Vote
                            </a>
                        </li>
                        <li>
                            <a href="/nbc/shop">
                                Shop
                            </a>
                        </li>
                        <li>
                            <a href="/nbc/dev-blog">
                                DevBlog
                            </a>
                        </li>
                    </ul>
                </nav>
                <p class="copyright pull-right">
                    &copy; <script>document.write(new Date().getFullYear())</script> <a href="/nbc/"><?= App::getTitle(); ?></a>, made with <?= App::getTitle(); ?>
                </p>
            </div>
        </footer>

    </div>
</div>

<script src="/nbc/root/js/admin/jquery-1.10.2.js" type="text/javascript"></script>
<script src="/nbc/root/js/admin/bootstrap-checkbox-radio-switch.js"></script>
<script src="/nbc/root/js/admin/chartist.min.js"></script>
<script src="/nbc/root/js/admin/bootstrap-notify.js"></script>
<script type="text/javascript" src="https://maps.googleapis.com/maps/api/js?sensor=false"></script>
<script src="/nbc/root/js/admin/light-bootstrap-dashboard.js"></script>
<script src="/nbc/root/js/admin/demo.js"></script>
</body>
</html>
