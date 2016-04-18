<!DOCTYPE html>
<html>
<head>
    <title>Test</title>
    <link rel=stylesheet href="<?=base_url()?>public/css/bootstrap.min.css" />
    <link rel=stylesheet href="<?=base_url()?>public/css/styles.css" />
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.12.2/jquery.min.js"></script>
    <script src="<?=base_url()?>public/js/bootstrap.min.js"></script>
    <script src="<?=base_url()?>public/js/smallsteps/dashboard/result.js"></script>
    <script src="<?=base_url()?>public/js/smallsteps/dashboard/event.js"></script>
    <script src="<?=base_url()?>public/js/smallsteps/dashboard/template.js"></script>
    <script src="<?=base_url()?>public/js/smallsteps/dashboard.js"></script>
</head>
<body>
<header>
    <a class="brand" href="#"><img src="<?=base_url()?>public/img/lungs.png"/><h1>Small Steps</h1></a>
</header>

    <nav class="navbar">

        <div class="navbar-inner">
            <ul class="nav">
                <li><a href="#">Dashboard</a></li>
                <li><a href="#">User</a></li>
                <li><a href="<?=site_url()?>dashboard/logout">Logout</a></li>
            </ul>
        </div>
    </nav>


<div class="wrapper">

    <script>
        $(function() {
// Init the Dashboard application
            var dashboard = new Dashboard();
        });
    </script>
