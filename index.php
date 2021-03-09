<!doctype html>
<html lang="en">

<head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- Bootstrap CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta2/dist/css/bootstrap.min.css" as="stylesheet" rel="preload" integrity="sha384-BmbxuPwQa2lc/FVzBcNJ7UAyJxM6wuqIj61tLrc4wSX0szH/Ev+nYRRuWlolflfl" crossorigin="anonymous">

    <!--google fonts-->
    <link rel="preconnect" href="https://fonts.gstatic.com">
    <link href="https://fonts.googleapis.com/css2?family=Roboto:ital,wght@0,100;0,300;0,400;0,500;0,700;0,900;1,100;1,300;1,400;1,500;1,700;1,900&display=swap" rel="stylesheet">

    <!-- css link -->
    <link rel="stylesheet" href="./css/style.css">
    <title>myworld</title>
</head>

<body>

    <?php include "./src/components/header.php" ?>
    <div class="main">
        <div id="carouselExampleControls" class="carousel slide lazy-load" data-bs-ride="carousel">
            <div class="carousel-inner">
                <div class="carousel-item active">
                    <img data-src="https://images.unsplash.com/photo-1587526807462-74cf0f0f0a94?ixid=MXwxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHw%3D&ixlib=rb-1.2.1&auto=format&fit=crop&w=1050&q=80" src="https://images.unsplash.com/photo-1587526807462-74cf0f0f0a94?ixid=MXwxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHw%3D&ixlib=rb-1.2.1&auto=format&fit=crop&w=1050&q=80" src="images/sri lanka (1).png" class="d-block w-100" alt="..." class="lazy">
                </div>
                <div class="carousel-item">
                    <img data-src="https://images.unsplash.com/photo-1587526807462-74cf0f0f0a94?ixid=MXwxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHw%3D&ixlib=rb-1.2.1&auto=format&fit=crop&w=1050&q=80" src="https://images.unsplash.com/photo-1587526807462-74cf0f0f0a94?ixid=MXwxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHw%3D&ixlib=rb-1.2.1&auto=format&fit=crop&w=1050&q=80" class="d-block w-100" alt="..." class="lazy">
                </div>
                <div class="carousel-item">
                    <img data-src="https://images.unsplash.com/photo-1579907229570-6ad2436fc72c?ixid=MXwxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHw%3D&ixlib=rb-1.2.1&auto=format&fit=crop&w=1141&q=80" src="https://images.unsplash.com/photo-1587526807462-74cf0f0f0a94?ixid=MXwxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHw%3D&ixlib=rb-1.2.1&auto=format&fit=crop&w=1050&q=80" class="d-block w-100" alt="..." class="lazy">
                </div>
            </div>
            <button class="carousel-control-prev" type="button" data-bs-target="#carouselExampleControls" data-bs-slide="prev">
                <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                <span class="visually-hidden">Previous</span>
            </button>
            <button class="carousel-control-next" type="button" data-bs-target="#carouselExampleControls" data-bs-slide="next">
                <span class="carousel-control-next-icon" aria-hidden="true"></span>
                <span class="visually-hidden">Next</span>
            </button>
        </div>
    </div>
    <section class="py-5 section2">
        <div class="container">
            <div class="row">
                <div class="col-md-4 d-flex justify-content-center">
                    <div class="card" style="width: 18rem;">
                        <div class="card-body">
                            <h5 class="card-title">Card title</h5>
                            <h6 class="card-subtitle mb-2 text-muted">Card subtitle</h6>
                            <p class="card-text">Some quick example text to build on the card title and make up the bulk of the card's content.</p>
                            <a href="#" class=" btn btn-primary card-link">Card link</a>
                        </div>
                    </div>
                </div>
                <div class="col-md-4 d-flex justify-content-center">
                    <div class="card" style="width: 18rem;">
                        <div class="card-body">
                            <h5 class="card-title">Card title</h5>
                            <h6 class="card-subtitle mb-2 text-muted">Card subtitle</h6>
                            <p class="card-text">Some quick example text to build on the card title and make up the bulk of the card's content.</p>
                            <a href="#" class="btn btn-primary card-link">Card link</a>
                        </div>
                    </div>
                </div>
                <div class="col-md-4 d-flex justify-content-center">
                    <div class="card" style="width: 18rem;">
                        <div class="card-body">
                            <h5 class="card-title">Card title</h5>
                            <h6 class="card-subtitle mb-2 text-muted">Card subtitle</h6>
                            <p class="card-text">Some quick example text to build on the card title and make up the bulk of the card's content.</p>
                            <a href="#" class=" btn btn-primary card-link">Card link</a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <div>
        <?php include "./src/components/footer.php" ?>
    </div>
</body>

</html>