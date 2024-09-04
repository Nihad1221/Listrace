<!--explore start -->
<section id="explore" class="explore">
    <div class="container">
        <div class="section-header">
            <h2>explore</h2>
            <p>Explore New place, food, culture around the world and many more</p>
        </div><!--/.section-header-->
        <div class="explore-content">
            <div class="row">
                <?php
                $explorers = [
                    [
                        'title' => 'Explorer title 1',
                        'rating' => 12,
                    ], [
                        'title' => 'Explorer title 2',
                        'rating' => 32,
                    ], [
                        'title' => 'Explorer title 3',
                        'rating' => 34,
                    ], [
                        'title' => 'Explorer title 4',
                        'rating' => 12,
                    ], [
                        'title' => 'Explorer title 5',
                        'rating' => 21
                    ], [
                        'title' => 'Explorer title 6',
                        'rating' => 32,
                    ], [
                        'title' => 'Explorer title 7',
                        'rating' => 43,
                    ], [
                        'title' => 'Explorer title 8',
                        'rating' => 23,
                    ], [
                        'title' => 'Explorer title 9',
                        'rating' => 44,
                    ], [
                        'title' => 'Explorer title 10',
                        'rating' => 39,
                    ],
                ];
                for ($i = 1; $i <= count($explorers); $i++) {
                    ?>
                    <div class=" col-md-4 col-sm-6">
                        <div class="single-explore-item">
                            <div class="single-explore-img">
                                <img src="assets/images/explore/e1.jpg" alt="explore image">
                                <div class="single-explore-img-info">
                                    <button onclick="window.location.href='#'">best rated</button>
                                    <div class="single-explore-image-icon-box">
                                        <ul>
                                            <li>
                                                <div class="single-explore-image-icon">
                                                    <i class="fa fa-arrows-alt"></i>
                                                </div>
                                            </li>
                                            <li>
                                                <div class="single-explore-image-icon">
                                                    <i class="fa fa-bookmark-o"></i>
                                                </div>
                                            </li>
                                        </ul>
                                    </div>
                                </div>
                            </div>
                            <div class="single-explore-txt bg-theme-1">
                                <h2><a href="#"><?= $explorers[$i - 1]['title'] ?></a></h2>
                                <p class="explore-rating-price">
                                    <span class="explore-rating">5.0</span>
                                    <a href="#"> <?= $explorers[$i - 1]['rating'] ?>ratings</a>
                                    <span class="explore-price-box">
											form
											<span class="explore-price">5$-300$</span>
										</span>
                                    <a href="#">resturent</a>
                                </p>
                                <div class="explore-person">
                                    <div class="row">
                                        <div class="col-sm-2">
                                            <div class="explore-person-img">
                                                <a href="#">
                                                    <img src="assets/images/explore/person.png" alt="explore person">
                                                </a>
                                            </div>
                                        </div>
                                        <div class="col-sm-10">
                                            <p>
                                                Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod
                                                tempor incid ut labore et dolore magna aliqua....
                                            </p>
                                        </div>
                                    </div>
                                </div>
                                <div class="explore-open-close-part">
                                    <div class="row">
                                        <div class="col-sm-5">
                                            <button class="close-btn" onclick="window.location.href='#'">close now
                                            </button>
                                        </div>
                                        <div class="col-sm-7">
                                            <div class="explore-map-icon">
                                                <a href="#"><i data-feather="map-pin"></i></a>
                                                <a href="#"><i data-feather="upload"></i></a>
                                                <a href="#"><i data-feather="heart"></i></a>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <?php
                }
                ?>
            </div>
        </div>
    </div><!--/.container-->

</section><!--/.explore-->
<!--explore end -->

