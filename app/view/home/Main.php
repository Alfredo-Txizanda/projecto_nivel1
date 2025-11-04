<!-- Carrossel -->
<div id="carouselExampleSlidesOnly" class="carousel slide" data-bs-ride="carousel">
  <div class="carousel-inner">
    <div class="carousel-item active">
      <img src="<?php echo DIRIMG . 'htl.png'; ?>" class="d-block w-100 c-img" alt="...">
    </div>
    <div class="carousel-item">
      <img src="<?php echo DIRIMG . 'htl_room.jpg'; ?>" class="d-block w-100 c-img" alt="Fundo do ecrã">
    </div>
    <div class="carousel-item">
      <img src="<?php echo DIRIMG . 'a1.jpg'; ?>" class="d-block w-100 c-img" alt="Fundo do ecrã">
    </div>
    <div class="carousel-item">
      <img src="<?php echo DIRIMG . 'a1.jpg'; ?>" class="d-block w-100 c-img" alt="Fundo do ecrã">
    </div>
    <div class="carousel-item">
      <img src="<?php echo DIRIMG . 'about.jpg'; ?>" class="d-block w-100 c-img" alt="...">
    </div>
  </div>
</div>

<section id="hero-carousel" class="carousel slide" data-bs-ride="carousel"></section>

<!-- Verificar disponibilidade de quartos -->
<section id="home-form">
    <div class="wrapper">
        <form id="find-available-rooms-form">
            <div class="form-group">
                <label for="check-in">Check In</label>
                <input type="hidden" id="check-in" class="form-control" name="check-in"/>
                <button id="check-in-button" class="btn input-button">Data de Checkin </button>
            </div>
            <div class="form-group">
                <label for="check-out">Check Out</label>
                <input type="hidden" id="check-out" class="form-control" name="check-out" value=""/>
                <button id="check-out-button" class="btn input-button">Data de Checkout</button>
            </div>
            <div class="dropdown form-group">
                <label for="form-dropdown-convidados">Convidados</label>
                <button class="btn dropdown-toggle" type="button" id="dropdownMenuButton" data-bs-toggle="dropdown" aria-haspopup="true" aria-expanded="false" aria-controls="dropdown-menu-convidados">
                    Adicionar Convidado
                </button>
                <ul class="dropdown-menu" aria-labelledby="dropdownMenuButton" id="dropdown-menu-convidados">
                    <li class="px-4 py-3">
                        <div class="form-group form-group-nested">
                            <label for="count-adults">Adultos</label>
                            <input type="number" class="form-control" name="count-adults" id="count-adults" placeholder="Idade 13 ou mais" min="13" />
                        </div>
                        <div class="form-group form-group-nested">
                            <label for="count-children">Crianças</label>
                            <input type="number" class="form-control" name="count-children" id="count-children" placeholder="Idade 1 a 12" min="0" />
                        </div>
                    </li>
                </ul>
            </div>
            <div class="form-group">
                <button type="submit" class="btn btn-primary" name="find-rooms">Buscar</button>
            </div>
        </form>
    </div>
</section>

<!-- OUTRAS INFORMAÇÕES IMPORTANTES -->
<section id="featured-rooms">
    <div class="container my-5 py-5">
        <div class="section-title">
            <h2>A sua melhor escolha para hoje!</h2>
        </div>
        <div class="row custom-room-cards">
            <div class="col col-md-3">
                <div class="card">
                    <div class="card-body">
                        <img src="<?php echo DIRIMG . '5.jpg'; ?>" alt="" />
                    </div>
                    <div class="card-footer">
                        <div class="footer-head">
                            <div class="label">Premium</div>
                            <div class="price">$120/day</div>
                        </div>
                        <div class="footer-body">Daimond Suite</div>
                        <!-- <div class="footer-foot">lemon</div> -->
                    </div>
                </div>
            </div>
            <div class="col col-md-3">
                <div class="card">
                    <div class="card-body">
                        <img src="<?php echo DIRIMG . '3.jpg'; ?>" alt="" />
                    </div>
                    <div class="card-footer">
                        <div class="footer-head">
                            <div class="label">Premium</div>
                            <div class="price">$120/day</div>
                        </div>
                        <div class="footer-body">Daimond Suite</div>
                        <!-- <div class="footer-foot">lemon</div> -->
                    </div>
                </div>
            </div>
            <div class="col col-md-3">
                <div class="card">
                    <div class="card-body">
                        <img src="<?php echo DIRIMG . '1.jpg'; ?>" alt="" />
                    </div>
                    <div class="card-footer">
                        <div class="footer-head">
                            <div class="label">Premium</div>
                            <div class="price">$120/day</div>
                        </div>
                        <div class="footer-body">Daimond Suite</div>
                        <!-- <div class="footer-foot">lemon</div> -->
                    </div>
                </div>
            </div>
            <div class="col col-md-3">
                <div class="card">
                    <div class="card-body">
                        <img src="<?php echo DIRIMG . '4.jpg'; ?>" alt="" />
                    </div>
                    <div class="card-footer">
                        <div class="footer-head">
                            <div class="label">Premium</div>
                            <div class="price">$120/day</div>
                        </div>
                        <div class="footer-body">Daimond Suite</div>
                        <!-- <div class="footer-foot">lemon</div> -->
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>
<section id="decoration-accomodation">
    <div class="container my-5 py-5">
        <div class="row">
            <div class="col-md-5">
                <div class="content">
                    <div class="section-title">
                        <h2>Escolha a acomodação perfeita!</h2>
                    </div>
                    <p>
                        Lorem ipsum dolor sit amet consectetur, adipisicing elit. Eos
                        illum veniam qui veritatis praesentium voluptates atque enim
                        quia exercitationem ipsa quaerat, delectus officia dolore rem
                        consequatur nesciunt. Ullam, consequuntur necessitatibus.m
                    </p>
                </div>
            </div>
            <div class="col-md-7 card-container">
                <div class="card">
                    <div class="card-body">
                        <img src="<?php echo DIRIMG . 'nova9.png'; ?>" alt="" />
                    </div>
                    <div class="card-footer">lemon</div>
                </div>
                <div class="card">
                    <div class="card-body">
                        <img src="<?php echo DIRIMG . 'pool.jpg'; ?>" alt="" />
                    </div>
                    <div class="card-footer">lemon</div>
                </div>
            </div>
        </div>
    </div>
</section>
<section id="premium-section">
    <div class="container my-5 py-5">
        <div class="row">
            <div class="col-md-7">
                <div class="card-container">
                    <div class="card">
                        <div class="card-body">
                            <img src="<?php echo DIRIMG . 'home-2.jpg'; ?>" alt="" />
                        </div>
                        <div class="card-footer">
                            <div class="footer-head">
                                <div class="label">Premium</div>
                                <div class="price">$120/day</div>
                            </div>
                            <div class="footer-body">Daimond Suite</div>
                            <!-- <div class="footer-foot">lemon</div> -->
                        </div>
                    </div>
                    <!-- <div class="spacer"></div>
                      <div class="spacer"></div> -->
                    <div class="card">
                        <div class="card-body">
                            <img src="<?php echo DIRIMG . 'nova7.png'; ?>" alt="" />
                        </div>
                        <div class="card-footer">
                            <div class="footer-head">
                                <div class="label">Premium</div>
                                <div class="price">$120/day</div>
                            </div>
                            <div class="footer-body">Daimond Suite</div>
                            <!-- <div class="footer-foot">lemon</div> -->
                        </div>
                    </div>
                    <!-- <div class="card decoration"></div> -->
                </div>
            </div>
            <div class="col-md-5">
                <div class="content">
                    <div class="section-title">
                        <h2>Premium deals for your premium needs</h2>
                    </div>
                    <p>
                        Lorem ipsum dolor sit amet consectetur, adipisicing elit. Eos
                        illum veniam qui veritatis praesentium voluptates atque enim
                        quia exercitationem ipsa quaerat, delectus officia dolore rem
                        consequatur nesciunt. Ullam, consequuntur necessitatibus.m
                    </p>
                </div>
            </div>
        </div>
    </div>
</section>