<?php
if (session_status() == PHP_SESSION_NONE) {
    session_start();
}
?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
    <link rel="stylesheet" href="header.css">
    <title>Good Reads</title>
</head>

<body>
    <nav class="navbar navbar-expand-lg navbar-light bg-light">
        <img src="/images/logo.png" alt="Logo" height="40">
        <div class="container-fluid">
            <div class="navbar-brand" href="#"></div>
            <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNavDropdown"
                aria-controls="navbarNavDropdown" aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
            </button>
            <div class="collapse navbar-collapse justify-content-center" id="navbarNavDropdown">
                <ul class="navbar-nav">
                    <li class="nav-item">
                        <a class="nav-link" href="home">Home</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="../views/library.php">My Library</a>
                    </li>
                </ul>
            </div>
            <?php if (isset($_SESSION['loggedInUser'])) { ?>
                <a class="nav-link" href="profile">
                    <?php print_r($_SESSION['loggedInUser']->getName()); ?>
                </a>
            <?php } else { ?>
                <a class="nav-link" href="login">Login/Register</a>
            <?php } ?>
        </div>
    </nav>
</body>

</html>
<style>
    nav {
        background-color: #333;
        color: #fff;
        padding: 10px;
    }

    nav ul {
        list-style-type: none;
        padding: 0;
        margin: 0;
    }

    nav ul li {
        display: inline;
        margin-right: 10px;
    }

    nav ul li a {
        color: #fff;
        text-decoration: none;
    }
</style>