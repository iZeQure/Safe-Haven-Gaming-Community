<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>SH Gaming Community</title>

    <!-- Font Awesome Kit Code -->
    <script src="https://kit.fontawesome.com/b85b760244.js" crossorigin="anonymous"></script>

    <!-- Bootstrap CSS 4.3.1 -->
    <link rel="stylesheet" href="./app/libs/bootstrap/css/bootstrap.min.css">

    <!-- Personal CSS -->
    <link rel="stylesheet" href="./app/css/main.css">
</head>

<body>
    <!-- Navbar Container -->
    <nav id="navbar-scrollspy" class="navbar navbar-expand-sm navbar-dark bg-dark fixed-top">
        <!-- Gallery -->
        <div class="navbar-collapse collapse">
            <ul class="nav navbar-nav">
                <li class="nav-item">
                    <a class="nav-link" href="./index.php">
                        Home
                        <span class="sr-only">(current)</span>
                    </a>
                </li>
                <li class="nav-item">
                    <a class="nav-link dropdown-toggle" href="#" role="button" id="dropdownMenuIntroductions" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                        Introductions
                    </a>
                    <div class="dropdown">
                        <div class="dropdown-menu" aria-labelledby="dropdownMenuIntroductions">
                            <a class="dropdown-item" href="./staff-introductions.php">Staff Introductions</a>
                            <div class="dropdown-divider"></div>
                            <a class="dropdown-item" href="#">Member Introductions</a>
                        </div>
                    </div>
                </li>
            </ul>
        </div>
        <!-- END Gallery -->

        <!-- Brand -->
        <a class="navbar-brand mx-auto" href="#">
            <img src="./images/Brand Image.svg" width="auto" height="50" alt="">
        </a>
        <!-- END Brand -->

        <!-- Collapse Button -->
        <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNavDropdown"
            aria-controls="navbarNavDropdown" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
        </button>
        <!-- END Collapse Button -->

        <!-- Contact & About Links -->
        <div class="collapse navbar-collapse" id="navbarNavDropdown">
            <ul class="navbar-nav nav ml-auto">
                <li class="nav-item">
                    <a class="nav-link" href="#about">Server Rules</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="#contact">FAQ</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="#contact">Terms of Service</a>
                </li>
            </ul>
        </div>
        <!-- END Contact & About Links -->
    </nav>