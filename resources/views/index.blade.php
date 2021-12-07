@extends('layouts.template')

@section('title','首頁')

@section('css')
<!-- index Core CSS -->
<link rel="stylesheet" href="{{asset('css/index.css')}}">
@endsection

@section('main')
<!-- 輪播區 -->
<div id="carouselExampleControls" class="carousel slide" data-ride="carousel">
    <ol class="carousel-indicators">
        <li data-target="#carouselExampleIndicators" data-slide-to="0" class="active"></li>
        <li data-target="#carouselExampleIndicators" data-slide-to="1"></li>
        <li data-target="#carouselExampleIndicators" data-slide-to="2"></li>
    </ol>
    <div class="carousel-inner active">
        <div class="carousel-item active">
            <img src="https://placeholder.pics/svg/1920x800" class="d-block w-100" alt="...">
        </div>
        <div class="carousel-item">
            <img src="https://placeholder.pics/svg/1920x800" class="d-block w-100" alt="...">
        </div>
        <div class="carousel-item">
            <img src="https://placeholder.pics/svg/1920x800" class="d-block w-100" alt="...">
        </div>
    </div>
    <button class="carousel-control-prev" type="button" data-target="#carouselExampleControls" data-slide="prev">
        <span class="carousel-control-prev-icon" aria-hidden="true"></span>
        <span class="sr-only">Previous</span>
    </button>
    <button class="carousel-control-next" type="button" data-target="#carouselExampleControls" data-slide="next">
        <span class="carousel-control-next-icon" aria-hidden="true"></span>
        <span class="sr-only">Next</span>
    </button>
</div>

<!-- 服務1區 -->
<section id="service_1">
    <div class="container">
        <div class="service_top_block">
            <div class="service-paragraph d-flex flex-column justify-content-center align-items-center">
                <h2 class="section-title text-center">Raw Denim Heirloom Man Braid</h2>
                <p class="w-75 mb-4 text-center ">
                    Blue bottle crucifix vinyl post-ironic four dollar toast vegan taxidermy. Gastropub indxgo
                    juice
                    poutine, ramps microdosing banh mi pug.
                </p>
            </div>
        </div>
        <div class="row">
            <div class="col-md-4">
                <div class="d-flex flex-column justify-content-center align-items-center mb-5">
                    <div class="service_icon mb-5">
                        <svg fill="none" stroke="currentColor" stroke-linecap="round" stroke-linejoin="round"
                            stroke-width="2" width="50" viewBox="0 0 24 24">
                            <path d="M22 12h-4l-3 9L9 3l-3 9H2"></path>
                        </svg>
                    </div>
                    <h5 class="mb-4">Shooting Stars</h5>
                    <p class="text-center">Blue bottle crucifix vinyl post-ironic four dollar toast vegan
                        taxidermy. Gastropub indxgo juice poutine, ramps microdosing banh mi pug VHS try-hard.
                    </p>
                    <a href=""> Learn More &nbsp;&nbsp;<i class="fas fa-arrow-right"></i></a>
                </div>
            </div>
            <div class="col-md-4">
                <div class="d-flex flex-column justify-content-center align-items-center mb-5">
                    <div class="service_icon mb-5">
                        <svg fill="none" stroke="currentColor" stroke-linecap="round" stroke-linejoin="round"
                            stroke-width="2" width="50" viewBox="0 0 24 24">
                            <circle cx="6" cy="6" r="3"></circle>
                            <circle cx="6" cy="18" r="3"></circle>
                            <path d="M20 4L8.12 15.88M14.47 14.48L20 20M8.12 8.12L12 12"></path>
                        </svg>
                    </div>
                    <h5 class="mb-4">The Catalyzer</h5>
                    <p class="text-center">Blue bottle crucifix vinyl post-ironic four dollar toast vegan
                        taxidermy. Gastropub indxgo juice poutine, ramps microdosing banh mi pug VHS try-hard.
                    </p>
                    <a href=""> Learn More &nbsp;&nbsp;<i class="fas fa-arrow-right"></i></a>
                </div>
            </div>
            <div class="col-md-4">
                <div class="d-flex flex-column justify-content-center align-items-center mb-5">
                    <div class="service_icon mb-5">
                        <svg fill="none" stroke="currentColor" stroke-linecap="round" stroke-linejoin="round"
                            stroke-width="2" width="50" viewBox="0 0 24 24">
                            <path d="M20 21v-2a4 4 0 00-4-4H8a4 4 0 00-4 4v2"></path>
                            <circle cx="12" cy="7" r="4"></circle>
                        </svg>
                    </div>
                    <h5 class="mb-4">Neptune</h5>
                    <p class="text-center">Blue bottle crucifix vinyl post-ironic four dollar toast vegan
                        taxidermy. Gastropub indxgo juice poutine, ramps microdosing banh mi pug VHS try-hard.
                    </p>
                    <a href=""> Learn More &nbsp;&nbsp;<i class="fas fa-arrow-right"></i></a>
                </div>
            </div>
        </div>
        <div class="d-flex justify-content-center mt-md-5 mt-3">
            <button type="button" class="btn btn-lg px-4 service_btn">Button</button>
        </div>


    </div>
</section>

<!-- 照片牆 -->
<section id="photowall">
    <div class="container">
        <div class="d-flex flex-wrap">
            <h2 class="col-lg-4 p-0 mb-3 mb-lg-1 section-title">Master Cleanse Reliac Heirloom</h2>
            <p class="col-lg-8 p-0">Whatever cardigan tote bag tumblr hexagon brooklyn asymmetrical gentrify,
                subway
                tile poke farm-to-table. Franzen you probably haven't heard of them man bun deep jianbing
                selfies heirloom.</p>
        </div>
        <div class="row p-3">
            <div class="col-6">
                <div class="row">
                    <div class="col-6 p-1">
                        <img src="https://placeholder.pics/svg/500x300" class="img-fluid" alt="Responsive image">
                    </div>
                    <div class="col-6 p-1">
                        <img src="https://placeholder.pics/svg/501x301" class="img-fluid" alt="Responsive image">
                    </div>
                    <div class="col p-1">
                        <img src="https://placeholder.pics/svg/600x360" class="img-fluid" alt="Responsive image">
                    </div>
                </div>
            </div>
            <div class="col-6">
                <div class="row">
                    <div class="col-12 p-1">
                        <img src="https://placeholder.pics/svg/601x361" class="img-fluid" alt="Responsive image">
                    </div>
                    <div class="col p-1">
                        <img src="https://placeholder.pics/svg/502x302" class="img-fluid" alt="Responsive image">
                    </div>
                    <div class="col p-1">
                        <img src="https://placeholder.pics/svg/503x303" class="img-fluid" alt="Responsive image">
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>

<!-- 價目表 -->
<section id="pricing-table">
    <div class="container">
        <div class="service-paragraph d-flex flex-column justify-content-center align-items-center mb-4">
            <h2 class="section-title">Pricing</h2>
            <p class="w-75 text-center">
                Banh mi cornhole echo park skateboard authentic crucifix neutra tilde lyft biodiesel artisan
                direct trade mumblecore 3 wolf moon twee
            </p>
        </div>
        <div class="d-flex flex-column justify-content-center align-items-center">
            <table class="table w-75">
                <thead class="table-dark">
                    <tr>
                        <th scope="col">Plan</th>
                        <th scope="col">Speed</th>
                        <th scope="col">Storage</th>
                        <th scope="col">Price</th>
                        <th scope="col"></th>
                    </tr>
                </thead>
                <tbody>
                    <tr>
                        <td scope="row">Start</td>
                        <td>5 Mb/s</td>
                        <td>15 GB</td>
                        <td>Free</td>
                        <td>
                            <div class="form-check">
                                <input class="form-check-input" type="radio" name="selectPrice">
                            </div>
                        </td>
                    </tr>
                    <tr>
                        <td scope="row">Pro</td>
                        <td>25 Mb/s</td>
                        <td>25 GB</td>
                        <td>$24</td>
                        <td>
                            <div class="form-check">
                                <input class="form-check-input" type="radio" name="selectPrice">
                            </div>
                        </td>
                    </tr>
                    <tr>
                        <td scope="row">Business</td>
                        <td>36 Mb/s</td>
                        <td>40 GB</td>
                        <td>$50</td>
                        <td>
                            <div class="form-check">
                                <input class="form-check-input" type="radio" name="selectPrice">
                            </div>
                        </td>
                    </tr>
                    <tr>
                        <td scope="row">Exclusive</td>
                        <td>48 Mb/s</td>
                        <td>120 GB</td>
                        <td>$72</td>
                        <td>
                            <div class="form-check">
                                <input class="form-check-input" type="radio" name="selectPrice">
                            </div>
                        </td>
                    </tr>
                </tbody>
            </table>
            <div class="d-flex  align-items-center w-75">
                <a href="" class="mr-auto"> Learn More &nbsp;&nbsp;<i class="fas fa-arrow-right"></i></a>
                <button type="button" class="btn btn-primary px-3 ml-auto">Button</button>
            </div>
        </div>
    </div>
</section>

<!-- 商務區 -->
<section id="business">
    <div class="container">
        <div class="d-flex flex-wrap">
            <h2 class="col-lg-4 p-0 mb-lg-1 mb-4 section-title">Pitchfork Kickstarter Taxidermy</h2>
            <p class="col-lg-8 p-0 ">Whatever cardigan tote bag tumblr hexagon brooklyn asymmetrical gentrify,
                subway
                tile poke farm-to-table. Franzen you probably haven't heard of them man bun deep jianbing
                selfies heirloom prism food truck ugh squid celiac humblebrag.</p>
        </div>
        <div class="business-block">
            <div class="row">
                <div class="col-sm-12 col-md-6 col-xl-3">
                    <img src="https://placeholder.pics/svg/720x400" class="img-fluid" alt="Responsive image">
                    <h3 class="mt-4">SUBTITLE</h3>
                    <h2 class="mb-3">Chichen Itza</h2>
                    <p>Fingerstache flexitarian street art 8-bit waistcoat. Distillery hexagon disrupt edison
                        bulbche.</p>

                </div>
                <div class="col-sm-12 col-md-6 col-xl-3">
                    <img src="https://placeholder.pics/svg/721x401" class="img-fluid" alt="Responsive image">
                    <h3 class="mt-4">SUBTITLE</h3>
                    <h2 class="mb-3">Colosseum Roma</h2>
                    <p>Fingerstache flexitarian street art 8-bit waistcoat. Distillery hexagon disrupt edison
                        bulbche.</p>

                </div>
                <div class="col-sm-12 col-md-6 col-xl-3">
                    <img src="https://placeholder.pics/svg/722x402" class="img-fluid" alt="Responsive image">
                    <h3 class="mt-4">SUBTITLE</h3>
                    <h2 class="mb-3">Great Pyramid of Giza</h2>
                    <p>Fingerstache flexitarian street art 8-bit waistcoat. Distillery hexagon disrupt edison
                        bulbche.</p>

                </div>
                <div class="col-sm-12 col-md-6 col-xl-3">
                    <img src="https://placeholder.pics/svg/723x403" class="img-fluid" alt="Responsive image">
                    <h3 class="mt-4">SUBTITLE</h3>
                    <h2 class="mb-3">San Francisco</h2>
                    <p>Fingerstache flexitarian street art 8-bit waistcoat. Distillery hexagon disrupt edison
                        bulbche.</p>
                </div>
            </div>
        </div>

    </div>
</section>

<!-- 服務2區 -->
<section id="service_2">
    <div class="container">
        <div class="d-flex flex-column align-items-center">
            <div class="col-md-10 d-flex justify-content-center align-items-center service_item">
                <div class="service_icon">
                    <svg fill="none" stroke="currentColor" stroke-linecap="round" stroke-linejoin="round"
                        stroke-width="2" width="4rem" viewBox="0 0 24 24">
                        <path d="M22 12h-4l-3 9L9 3l-3 9H2"></path>
                    </svg>
                </div>
                <div class="d-flex flex-column service_textblock">
                    <h5 class="text-md-left text-center  mt-5 mt-md-0">Shooting Stars</h5>
                    <p class="text-md-left text-center">Blue bottle crucifix vinyl post-ironic four dollar toast
                        vegan taxidermy.
                        Gastropub indxgo juice poutine.</p>
                    <a href=""> Learn More &nbsp;&nbsp;<i class="fas fa-arrow-right"></i></a>
                </div>
            </div>
            <div
                class="col-md-10  d-flex justify-content-center align-items-center service_item_tbline service_mid_item">
                <div class="ml-md-5 d-flex flex-column service_textblock">
                    <h5 class="text-md-left text-center mt-5 mt-md-0">The Catalyzer</h5>
                    <p class="text-md-left text-center">Blue bottle crucifix vinyl post-ironic four dollar toast
                        vegan taxidermy.
                        Gastropub indxgo juice poutine, ramps microdosing banh mi pug VHS try-hard.</p>
                    <a href=""> Learn More &nbsp;&nbsp;<i class="fas fa-arrow-right"></i></a>
                </div>
                <div class="service_icon">
                    <svg fill="none" stroke="currentColor" stroke-linecap="round" stroke-linejoin="round"
                        stroke-width="2" width="4rem" viewBox="0 0 24 24">
                        <circle cx="6" cy="6" r="3"></circle>
                        <circle cx="6" cy="18" r="3"></circle>
                        <path d="M20 4L8.12 15.88M14.47 14.48L20 20M8.12 8.12L12 12"></path>
                    </svg>
                </div>
            </div>
            <div class="col-md-10  d-flex justify-content-center align-items-center service_item">
                <div class="service_icon">
                    <svg fill="none" stroke="currentColor" stroke-linecap="round" stroke-linejoin="round"
                        stroke-width="2" width="4rem" viewBox="0 0 24 24">
                        <path d="M20 21v-2a4 4 0 00-4-4H8a4 4 0 00-4 4v2"></path>
                        <circle cx="12" cy="7" r="4"></circle>
                    </svg>
                </div>
                <div class="d-flex flex-column service_textblock">
                    <h5 class="text-md-left text-center mt-5 mt-md-0">Neptune</h5>
                    <p class="text-md-left text-center">Blue bottle crucifix vinyl post-ironic four dollar toast
                        vegan taxidermy. Gastropub
                        indxgo juice poutine.</p>
                    <a href=""> Learn More &nbsp;&nbsp;<i class="fas fa-arrow-right"></i></a>
                </div>
            </div>
        </div>
        <div class="d-flex justify-content-center mt-5">
            <button type="button" class="btn btn-lg px-4 service2_btn">Button</button>
        </div>
    </div>
</section>

<!-- 主打商品區 -->
<section id="highlight_product">
    <div class="container">
        <div class="card border-0 mb-3">
            <div class="row">
                <div class="col-lg-6 col-12">
                    <img src="https://placeholder.pics/svg/500x500" class="img-fluid" alt="...">
                </div>
                <div class="col-lg-6 col-12">
                    <form class="card-body">
                        <p class="text-muted my-0">BRAND NAME</p>
                        <h3 class="card-title">The Catcher in the Rye</h3>
                        <div class="comment mb-4 d-flex">
                            <div class="star-group d-flex">
                                <div class="star"><i class="fas fa-star"></i></div>
                                <div class="star"><i class="fas fa-star"></i></div>
                                <div class="star"><i class="fas fa-star"></i></div>
                                <div class="star"><i class="fas fa-star"></i></div>
                                <div class="star"><i class="far fa-star"></i></div>
                            </div>
                            <div class="mx-3">
                                <span>4 Reviews</span>
                            </div>
                            <div class="media d-flex pl-3">
                                <div class="mr-1"><i class="fab fa-facebook-f"></i></div>
                                <div class="mr-1"><i class="fab fa-twitter"></i></div>
                                <div class="mr-1"><i class="fas fa-comment"></i></div>
                            </div>
                        </div>

                        <p class="card-text">Fam locavore kickstarter distillery. Mixtape chillwave tumeric
                            sriracha taximy chia microdosing tilde DIY. XOXO fam indxgo juiceramps cornhole raw
                            denim forage brooklyn. Everyday carry +1 seitan poutine tumeric. Gastropub blue
                            bottle austin listicle pour-over, neutra jean shorts keytar banjo tattooed umami
                            cardigan.</p>
                        <div class="d-flex">
                            <div class="d-flex align-items-center">
                                <span class="mr-2">Color</span>
                                <label class="mx-1 color-label" for="white"
                                    style="background-color: rgb(252, 252, 252);">
                                    <input class="color-radio" type="radio" id="white" name="color" value="white"
                                        aria-label="...">
                                </label>
                                <label class="mr-1 color-label" for="blue" style="background-color: rgb(69, 77, 192);">
                                    <input class="color-radio" type="radio" id="blue" name="color" value="blue"
                                        aria-label="...">
                                </label>
                                <label class="mr-1 color-label" for="black" style="background-color: rgb(36, 35, 35);">
                                    <input class="color-radio" type="radio" id="black" name="color" value="black"
                                        aria-label="...">
                                </label>
                            </div>
                            <div class="form-inline ml-4">
                                <label class="my-1 mr-2" for="selectSize">Size</label>
                                <select class="form-control my-1 mr-sm-2" id="selectSize">
                                    <option>SM</option>
                                    <option>M</option>
                                    <option>L</option>
                                    <option>XL</option>
                                </select>
                            </div>
                        </div>
                        <hr>
                        <div class="d-flex">
                            <span class="thePrice">$58.00</span>
                            <button type="submit" class="btn btn-m px-3 ml-auto service_btn">加入購物車</button>
                            <button type="button" class="btn ml-3 like-btn"><i class="fab fa-gratipay"></i></button>
                        </div>
                    </form>
                </div>


            </div>
        </div>
    </div>
</section>

<!-- 其他商品商品區 -->
<section id="other_product">
    <div class="container">
        <div class="row">
            <div class="col-12 col-sm-6 col-lg-3">
                <div class="card border-0 mb-3">
                    <img src="https://placeholder.pics/svg/420x260" class="card-img-top mb-2" alt="...">
                    <div class="card-body p-0">
                        <h3>CATEGORY</h3>
                        <h2>The Catalyzer</h2>
                        <p>$16.00</p>
                    </div>
                </div>
            </div>
            <div class="col-12 col-sm-6 col-lg-3">
                <div class="card border-0 mb-3">
                    <img src="https://placeholder.pics/svg/420x260" class="card-img-top mb-2" alt="...">
                    <div class="card-body p-0">
                        <h3>CATEGORY</h3>
                        <h2>Shooting Stars</h2>
                        <p>$21.15</p>
                    </div>
                </div>
            </div>
            <div class="col-12 col-sm-6 col-lg-3">
                <div class="card border-0 mb-3">
                    <img src="https://placeholder.pics/svg/420x260" class="card-img-top mb-2" alt="...">
                    <div class="card-body p-0">
                        <h3>CATEGORY</h3>
                        <h2>Neptune</h2>
                        <p>$12.00</p>
                    </div>
                </div>
            </div>
            <div class="col-12 col-sm-6 col-lg-3">
                <div class="card border-0 mb-3">
                    <img src="https://placeholder.pics/svg/420x260" class="card-img-top mb-2" alt="...">
                    <div class="card-body p-0">
                        <h3>CATEGORY</h3>
                        <h2>The 400 Blows</h2>
                        <p>$18.40</p>
                    </div>
                </div>
            </div>
            <div class="col-12 col-sm-6 col-lg-3">
                <div class="card border-0 mb-3">
                    <img src="https://placeholder.pics/svg/420x260" class="card-img-top mb-2" alt="...">
                    <div class="card-body p-0">
                        <h3>CATEGORY</h3>
                        <h2>The Catalyzer</h2>
                        <p>$16.00</p>
                    </div>
                </div>
            </div>
            <div class="col-12 col-sm-6 col-lg-3">
                <div class="card border-0 mb-3">
                    <img src="https://placeholder.pics/svg/420x260" class="card-img-top mb-2" alt="...">
                    <div class="card-body p-0">
                        <h3>CATEGORY</h3>
                        <h2>Shooting Stars</h2>
                        <p>$21.15</p>
                    </div>
                </div>
            </div>
            <div class="col-12 col-sm-6 col-lg-3">
                <div class="card border-0 mb-3">
                    <img src="https://placeholder.pics/svg/420x260" class="card-img-top mb-2" alt="...">
                    <div class="card-body p-0">
                        <h3>CATEGORY</h3>
                        <h2>Neptune</h2>
                        <p>$12.00</p>
                    </div>
                </div>
            </div>
            <div class="col-12 col-sm-6 col-lg-3">
                <div class="card border-0 mb-3">
                    <img src="https://placeholder.pics/svg/420x260" class="card-img-top mb-2" alt="...">
                    <div class="card-body p-0">
                        <h3>CATEGORY</h3>
                        <h2>The 400 Blows</h2>
                        <p>$18.40</p>
                    </div>
                </div>
            </div>
        </div>
    </div>



</section>

<!-- 地圖與feedback區 -->
<section id="map">
    <iframe
        src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d5149.717432058651!2d120.67239503171187!3d24.12258272180959!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x34693cfcecffe9d9%3A0xe28afadc0dad203a!2z5ZyL56uL5Lit6IiI5aSn5a24!5e0!3m2!1szh-TW!2stw!4v1637989907489!5m2!1szh-TW!2stw"
        width="100%" height="100%" style="border:0;" allowfullscreen="" loading="lazy"></iframe>
    <div class="container">
        <div class="card ml-auto feedback">
            <div class="card-body">
                <form action="">
                    <h5 class="card-title">Feedback</h5>
                    <h6 class="card-subtitle mb-2 text-muted">Post-ironic portland shabby chic echo park, banjo
                        fashion axe</h6>
                    <div class="my-4">
                        <label for="Email" class="form-label">Email</label>
                        <input type="text" class="form-control mb-3" id="Email" aria-describedby="basic-addon3">
                        <label for="Message" class="form-label">Message</label>
                        <textarea type="text" rows="4" class="form-control message_textarea" id="Message"
                            aria-describedby="basic-addon3"></textarea>
                    </div>
                    <button type="submit" class="btn w-100 px-4 feedback_btn">Button</button>
                    <p class="mt-2">Chicharrones blog helvetica normcore iceland tousled brook viral artisan.
                    </p>
                </form>
            </div>
        </div>
    </div>
</section>

@endsection

@section('js')

@endsection