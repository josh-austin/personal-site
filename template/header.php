<?php if(!isset($_REQUEST['ajax'])) { ?>
<!doctype html>
<html lang="en">

<head>
    <link href="//cdnjs.cloudflare.com/ajax/libs/foundation/5.2.2/css/foundation.min.css" rel="stylesheet" type="text/css" />
    <link href="//netdna.bootstrapcdn.com/font-awesome/4.0.3/css/font-awesome.min.css" rel="stylesheet" />
    <link href="assets/slick/slick.css" rel="stylesheet" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>
        Josh Austin<?php if(isset($title)) { echo ' ~ ' . $title; } ?>
    </title>
    <style>
        .row {
            padding: 10px;
        }
        
        footer {
            padding: 12px;
            color: white;
            background-color: #333;
        }
        
        .img-circled {
            border-radius: 100%;
        }
        
        .slick-next, .slick-prev {
            color: #333;
        }
        
    </style>
</head>

<body>
    <div class="off-canvas-wrap" data-offcanvas>
        <div class="inner-wrap">
            <nav class="tab-bar">
                <section class="left tab-bar-section">
                    <a id="headerLink" href="#"><h1 class="title">Josh Austin</h1></a>
                </section>

                <section class="right-small">
                    <a class="right-off-canvas-toggle menu-icon" href="#">
                        <span></span>
                    </a>
                </section>
            </nav>

            <aside class="right-off-canvas-menu">
                <ul class="off-canvas-list">
                    <li>
                        <label>Pages</label>
                    </li>
                    <li>
                        <a id="homeLink" href="#">
                            <i class="fa fa-home">&nbsp;</i>Home</a>
                    </li>
                    <li>
                        <a id="projectLink" href="#">
                            <i class="fa fa-cogs">&nbsp;</i>Projects</a>
                    </li>
                    <li>
                        <a id="aboutLink" href="#">
                            <i class="fa fa-user">&nbsp;</i>About</a>
                    </li>
                    <li>
                        <label>Social</label>
                    </li>
                    <li>
                        <a href="https://github.com/josh-austin">
                            <i class="fa fa-github">&nbsp;</i>GitHub</a>
                    </li>
                    <li>
                        <a href="https://www.linkedin.com/in/jpaustin">
                            <i class="fa fa-linkedin">&nbsp;</i>LinkedIn</a>
                    </li>
                    <li>
                        <a href="http://stackoverflow.com/users/2005984/josh-austin">
                            <i class="fa fa-stack-overflow">&nbsp;</i>StackOverflow</a>
                    </li>
                </ul>
            </aside>
            <section class="main-section">
<?php } ?>