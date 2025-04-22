<html>
<head>
    <title>ShareBoard</title>
    <link rel="stylesheet"
          href="C:\Users\daw1xx\OneDrive - Gobierno de La Rioja - Educación\DiegoAnguiano\PROG\PHP\CursoProyect\assets\css\bootstrap.css">
    <link rel="stylesheet"
          href="assets/css/style.css">
</head>
<body>
<nav class="navbar navbar-expand-md navbar-dark fixed-top bg-dark">
    <div class="container-fluid">
        <a class="navbar-brand" href="#">ShareBoard</a>
        <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarCollapse"
                aria-controls="navbarCollapse" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
        </button>
        <div class="collapse navbar-collapse" id="navbarCollapse">
            <ul class="navbar-nav me-auto mb-2 mb-md-0">
                <li class="nav-item">
                    <a class="nav-link active" aria-current="page" href="<?php echo ROOT_URL; ?>">Home</a>
                    <a class="nav-link active" aria-current="page" href="<?php echo ROOT_URL; ?>">Evento</a>
                </li>
            </ul>
            <ul class="navbar-nav me-auto mb-2 mb-md-0">
                <?php if (isset($_SESSION['is_logged_in'])) : ?>
                    <li class="nav-item">
                        <a class="nav-link active" aria-current="page"
                           href="<?php echo ROOT_URL; ?>Welcome"><?php echo $_SESSION['user_data']['name']; ?></a>
                        <a class="nav-link active" aria-current="page"
                           href="<?php echo ROOT_URL; ?>users/logout">Logout</a>
                    </li>
                <?php else : ?>
                    <li class="nav-item">
                        <a class="nav-link active" aria-current="page"
                           href="<?php echo ROOT_URL; ?>users/login">Login</a>
                        <a class="nav-link active" aria-current="page" href="<?php echo ROOT_URL; ?>user/register">Register</a>
                    </li>
                <?php endif; ?>
            </ul>
            <form class="d-flex" role="search">
                <input class="form-control me-2" type="search" placeholder="Search" aria-label="Search">
                <button class="btn btn-outline-success" type="submit">Search</button>
            </form>
        </div>
    </div>
</nav>
<div class="container">
    <div class="row">
        <?php Messages::display(); ?>
        <?php require($view); ?>
    </div>
</div>
</body>
</html>