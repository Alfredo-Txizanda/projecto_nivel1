<link rel="stylesheet" type="text/css" href="<?= DIRCSS . 'estilo.css'; ?>">

<section class="fundo-detalhe">
    <div class="container py-4">
        <div class="row">
            <!-- Main Content -->
            <div class="col-md-8">
                <!-- Room Image Carousel -->
                <div id="roomCarousel" class="carousel carrossel-detalhe slide mb-4" data-bs-ride="carousel">
                    <div class="carousel-inner detalhe-inner">
                        <div class="carousel-item detalhe-item active">
                            <img src="<?= DIRIMG . 'alila.webp'; ?>" alt="Diamond Suite 1" class="img-fluid rounded-3 shadow-sm">
                        </div>
                        <div class="carousel-item detalhe-item">
                            <img src="<?= DIRIMG . 'andaz.webp'; ?>" alt="Diamond Suite 2" class="img-fluid rounded-3 shadow-sm">
                        </div>
                        <div class="carousel-item detalhe-item">
                            <img src="<?= DIRIMG . 'hotelluso.jpg'; ?>" alt="Diamond Suite 3" class="img-fluid rounded-3 shadow-sm">
                        </div>
                        <div class="carousel-item detalhe-item">
                            <img src="<?= DIRIMG . 'santani.webp'; ?>" alt="Diamond Suite 4" class="img-fluid rounded-3 shadow-sm">
                        </div>
                        <div class="carousel-item detalhe-item">
                            <img src="<?= DIRIMG . 'hotelluso3.jpg'; ?>" alt="Diamond Suite 5" class="img-fluid rounded-3 shadow-sm">
                        </div>
                    </div>

                    <!-- Carousel Controls -->
                    <button class="carousel-control-prev" type="button" data-bs-target="#roomCarousel" data-bs-slide="prev">
                        <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                        <span class="visually-hidden">Previous</span>
                    </button>
                    <button class="carousel-control-next" type="button" data-bs-target="#roomCarousel" data-bs-slide="next">
                        <span class="carousel-control-next-icon" aria-hidden="true"></span>
                        <span class="visually-hidden">Next</span>
                    </button>

                    <!-- Carousel Indicators -->
                    <div class="carousel-indicators">
                        <button type="button" data-bs-target="#roomCarousel" data-bs-slide-to="0" class="active" aria-current="true" aria-label="Slide 1"></button>
                        <button type="button" data-bs-target="#roomCarousel" data-bs-slide-to="1" aria-label="Slide 2"></button>
                        <button type="button" data-bs-target="#roomCarousel" data-bs-slide-to="2" aria-label="Slide 3"></button>
                        <button type="button" data-bs-target="#roomCarousel" data-bs-slide-to="3" aria-label="Slide 4"></button>
                        <button type="button" data-bs-target="#roomCarousel" data-bs-slide-to="4" aria-label="Slide 5"></button>
                    </div>
                </div>

                <!-- Room Title and Price -->
                <div class="row mb-4">
                    <div class="col-md-6">
                        <h2 class="fw-bold">Diamond Suite</h2>
                    </div>
                    <div class="col-md-6 text-end">
                        <h4 class="fw-bold text-dark">Starts from: <span class="text-primary">$299</span></h4>
                    </div>
                </div>

                <!-- Room Features -->
                <div class="row mb-4">
                    <div class="col-md-3">
                        <div class="d-flex align-items-center">
                            <i class="fas fa-bed text-danger me-2"></i>
                            <span class="text-danger">2 bedroom</span>
                        </div>
                    </div>
                    <div class="col-md-3">
                        <div class="d-flex align-items-center">
                            <i class="fas fa-bath text-danger me-2"></i>
                            <span class="text-danger">Diamond Suite bathroom</span>
                        </div>
                    </div>
                    <div class="col-md-3">
                        <div class="d-flex align-items-center">
                            <i class="fas fa-ruler-horizontal text-danger me-2"></i>
                            <span class="text-danger">1250 sq.ft</span>
                        </div>
                    </div>
                    <div class="col-md-3">
                        <div class="d-flex align-items-center">
                            <i class="fas fa-lock text-danger me-2"></i>
                            <span class="text-danger">Highly Secured</span>
                        </div>
                    </div>
                </div>

                <!-- Description -->
                <div class="mb-4">
                    <h3 class="fw-bold mb-2">DESCRIPTION</h3>
                    <p class="text-muted">
                        Lorem ipsum dolor sit amet consectetur, adipisicing elit. Eos illum veniam qui veritatis praesentium voluptates atque enim quia exercitationem ipsa quaerat, delectus officia dolore rem consequatur nesciunt. Ullam, consequuntur necessitatibus.
                    </p>
                </div>

                <!-- Book Now Button -->
                <button class="btn btn-danger btn-lg shadow-sm" id="bookNowBtns">
                    <i class="fas fa-calendar-check me-2"></i><a href="<?= DIRPAGE . 'reserva'; ?>">Reserva Já</a>
                </button>
            </div>

            <!-- Reviews Section -->
            <div class="col-md-4">
                <h3 class="fw-bold mb-4">Reviews</h3>

                <!-- Review 1 -->
                <div class="card card-detalhe mb-3 border-0 shadow-sm">
                    <div class="card-body">
                        <h5 class="card-title titulo-card mb-3">Users</h5>
                        <p class="card-text texto-card text-muted">
                            Lorem ipsum dolor sit amet consectetur, adipisicing elit. Eos illum veniam qui veritatis praesentium voluptates atque enim quia exercitationem ipsa quaerat, delectus officia dolore rem consequatur nesciunt. Ullam, consequuntur necessitatibus.
                        </p>
                    </div>
                </div>

                <!-- Review 2 -->
                <div class="card card-detalhe mb-3 border-0 shadow-sm">
                    <div class="card-body">
                        <h5 class="card-title titulo-card mb-3">Users</h5>
                        <p class="card-text texto-card text-muted">
                            Lorem ipsum dolor sit amet consectetur, adipisicing elit. Eos illum veniam qui veritatis praesentium voluptates atque enim quia exercitationem ipsa quaerat, delectus officia dolore rem consequatur nesciunt. Ullam, consequuntur necessitatibus.
                        </p>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>

<script src="<?= DIRJS . 'projecto.js'; ?>"></script>

