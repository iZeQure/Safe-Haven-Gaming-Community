<?php
error_reporting(E_ERROR);
?>

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
                    <a class="nav-link dropdown-toggle" href="#" role="button" id="dropdownMenuIntroductions"
                        data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                        Introductions
                    </a>
                    <div class="dropdown">
                        <div class="dropdown-menu" aria-labelledby="dropdownMenuIntroductions">
                            <a class="dropdown-item" href="./staff-introductions.php">Staff Introductions</a>
                            <a class="dropdown-item" href="#">Member Introductions</a>
                            <div class="dropdown-divider"></div>
                            <a class="dropdown-item" href="#" data-toggle="modal" data-target="#exampleModalCenter">
                                Create Introduction
                            </a>
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

    <!-- Create Introduction Modal -->
    <div class="modal fade" id="exampleModalCenter" tabindex="-1" role="dialog"
        aria-labelledby="exampleModalCenterTitle" aria-hidden="true">
        <div class="modal-dialog modal-lg modal-dialog-centered" role="document">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title" id="exampleModalCenterTitle">Fill out the required fields. *</h5>
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                        <span aria-hidden="true">&times;</span>
                    </button>
                </div>
                <div class="modal-body">

                    <?php
                        include './app/core/database.php';

                        $db = new db($dbhost, $dbuser, $dbpass, $dbname);

                        $pronouns = $db->query('CALL DropdownPronouns;')->fetchAll();
                        $positions = $db->query('CALL DropdownPositions;')->fetchAll();
                        $countries = $db->query('CALL DropdownCountries;')->fetchAll();
                    ?>

                    <form id="introduction-form">
                        <div class="mb-3">
                            <label for="basic-url">Enter your steam profile ID</label>
                            <div class="input-group">
                                <div class="input-group-prepend">
                                    <span class="input-group-text" id="basic-addon3">https://steamcommunity.com/profiles/</span>
                                </div>
                                <input type="number" class="form-control" id="steam-id" aria-describedby="basic-addon3" onfocusout="getSteamAPIInfo();">
                            </div>
                            <small id="steamProfileHelp" class="form-text text-muted">Find your id <a class="" href="https://steamid.io/lookup" target="_blank" rel="noopener noreferrer">here.</a></small>
                        </div>

                        <select id="selected_pronoun" class="custom-select custom-select-sm mb-3"
                            name="selected_pronoun">
                            <option selected>--Select Pronoun--</option>
                            <?php foreach ( $pronouns as $pronoun ) : ?>
                            <option value="<?=$pronoun['id']?>"><?=$pronoun['name']?></option>
                            <?php endforeach; ?>
                        </select>

                        <select id="selected_position" class="custom-select custom-select-sm mb-3"
                            name="selected_position">
                            <option selected>--Select Position--</option>
                            <?php foreach ( $positions as $position ) : ?>
                            <option value="<?=$position['id']?>"><?=$position['name']?></option>
                            <?php endforeach; ?>
                        </select>

                        <select id="selected_country" class="custom-select custom-select-sm mb-3"
                            name="selected_country">
                            <option selected>--Select Country--</option>
                            <?php foreach ( $countries as $country ) : ?>
                            <option value="<?=$country['countrycode']?>"><?=$country['countryname']?></option>
                            <?php endforeach; ?>
                        </select>

                        <input type="submit" value="Save Introduction" class="btn btn-primary">
                    </form>
                </div>
                <div class="modal-footer">
                    <button type="button" class="btn btn-secondary" data-dismiss="modal">Cancel</button>
                </div>
            </div>
        </div>
    </div>