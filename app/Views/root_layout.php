<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-Zenh87qX5JnK2Jl0vWa8Ck2rdkQ2Bzep5IDxbcnCeuOxjzrPF/et3URy9Bv1WTRi" crossorigin="anonymous">
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Lato:wght@400;700&family=Rubik&display=swap" rel="stylesheet">
    <title>Music of The Month</title>
</head>
<style>
    body {
        font-family: 'Rubik', sans-serif;
    }
</style>
<body>
    <!-- START: NAVBAR -->
    <nav class="navbar navbar-expand-lg bg-dark">
        <div class="container-fluid container">
            <a class="navbar-brand fw-bold text-white" href="/">🎹 Music of The Month </a>
            <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
            </button>
            <div class="collapse navbar-collapse ms-4" id="navbarSupportedContent">
                <ul class="navbar-nav me-auto mb-2 mb-lg-0">
                    <li class="nav-item ">
                    <a class="nav-link active text-white" aria-current="page" href="/music">Music List</a>
                    </li>
                    <li class="nav-item">
                    <a class="nav-link text-white" href="/new-music">Add Music</a>
                    </li>
                    <li class="nav-item">
                    <a class="nav-link text-white" href="/about">About Me</a>
                    </li>
                </ul>
            </div>
        </div>
    </nav>
<!-- END: NAVBAR -->

    <!-- START: MAIN -->
    <main>
        <div class="container">
            <?= $this->renderSection('content') ?>
        </div>
    </main>
    <!-- END: MAIN -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-OERcA2EqjJCMA+/3y+gxIOqMEjwtxJY7qPCqsdltbNJuaOe923+mo//f6V8Qbsw3" crossorigin="anonymous"></script>
</body>
</html>