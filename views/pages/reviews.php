<!--reviews start -->
<section id="reviews" class="reviews">
    <div class="section-header">
        <h2>clients reviews</h2>
        <p>What our client say about us</p>
    </div><!--/.section-header-->
    <div class="reviews-content">

            <div class="single-testimonial-box">
                <?php
                $explorers = [
                    [
                        'name' => 'Abdullah',
                        'country' => 'London',
                        'comment'=>'Gözəl iş çıxardın!'
                    ], [
                        'name' => 'Muhammad',
                        'country' => 'United States',
                        'comment'=>'Bu cümlə çox mənalıdır.'
                    ], [
                        'name' => 'Nihad',
                        'country' => 'Mexico',
                        'comment'=>'Dizayn çox səliqəlidir.'
                    ], [
                        'name' => 'Jones',
                        'country' => 'Brazil',
                        'comment'=>'Kodunu oxumaq asandır'
                    ], [
                        'name' => 'Fedi',
                        'country' => 'Baku',
                        'comment'=>'Növbəti mərhələ üçün həyəcanlıyam!'
                    ], [
                        'name' => 'Cavid',
                        'country' => 'Canada',
                        'comment'=>'Təşəkkürlər, kömək etdiniz!'
                    ], [
                        'name' => 'Ismayil',
                        'country' => 'Turkey',
                        'comment'=>'Çox maraqlı yanaşmadır.'
                    ], [
                        'name' => 'Iskender',
                        'country' => 'Dubai',
                        'comment'=>'Davam et, uğurlar səninlədir'
                    ], [
                        'name' => 'Hamza',
                        'country' => 'Pakistan',
                        'comment'=>'Səhvini tapdım və düzəltdim.'
                    ], [
                        'name' => 'Mehdi',
                        'country' => 'Russia',
                        'comment'=>'Layihən həqiqətən təsirləndirdi.'
                    ],
                ];
                for ($i = 1; $i <= count( $explorers); $i++) {
                ?>
                <div class="testimonial-description">
                    <div class="testimonial-info">
                        <div class="testimonial-img">
                            <img src="assets/images/clients/c1.png" alt="clients">
                        </div><!--/.testimonial-img-->
                        <div class="testimonial-person">
                            <h2><?= $explorers[$i - 1]['name'] ?></h2>
                            <h4><?= $explorers[$i - 1]['country'] ?></h4>
                            <div class="testimonial-person-star">
                                <i class="fa fa-star"></i>
                                <i class="fa fa-star"></i>
                                <i class="fa fa-star"></i>
                                <i class="fa fa-star"></i>
                                <i class="fa fa-star"></i>
                            </div>
                        </div><!--/.testimonial-person-->
                    </div><!--/.testimonial-info-->
                    <div class="testimonial-comment">
                        <p>
                            <?= $explorers[$i - 1]['comment'] ?>
                        </p>
                    </div><!--/.testimonial-comment-->
                </div><!--/.testimonial-description-->
            </div>
            <?php
            }
            ?>
        </div>

</section><!--/.reviews-->
<!--reviews end -->

