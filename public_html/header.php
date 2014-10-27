<!DOCTYPE html>
<html lang="en">
<head>
    <link rel="stylesheet" href="css/bootstrap.min.css" />
    <link rel="stylesheet" href="css/font-awesome.min.css" />
    <link rel="stylesheet" href="css/site.css" />
    <meta charset="utf-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <meta name="viewport" content="width=device-width, initial-scale=1" />
</head>
<body>
    <nav class="navbar navbar-inverse navbar-fixed-top" role="navigation">
        <div class="container">
            <div class="navbar-header">
                <button type="button" class="navbar-toggle collapsed"
                        data-toggle="collapse" data-target="#collapsible">
                    <span class="fa fa-bars"></span>
                </button>
                <a class="navbar-brand" href="/">Josh Austin</a>
            </div>
            <div class="collapse navbar-collapse" id="collapsible">
                <ul class="nav navbar-nav">
                    <li <?php if($page=='home') echo 'class="active"'; ?>>
                        <a href="/"><span class="fa fa-home">&nbsp;</span>Home</a>
                    </li>
                    <li <?php if($page=='projects') echo 'class="active"'; ?>>
                        <a href="/projects"><span class="fa fa-code">&nbsp;</span>Projects</a>
                    </li>
                    <li <?php if($page=='about') echo 'class="active"'; ?>>
                        <a href="/about"><span class="fa fa-user">&nbsp;</span>About</a>
                    </li>
                </ul>
            </div>
        </div>
    </nav>
    <div class="container">
