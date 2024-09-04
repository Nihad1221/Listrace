<!--subscription strat -->
<section id="contact" class="subscription">
    <div class="container">
        <div class="subscribe-title text-center">
            <h2>
                do you want to add your business listing with us?
            </h2>
            <p>
                Listrace offer you to list your business with us and we very much able to promote your Business.
            </p>
        </div>
        <div class="row">
            <div class="col-sm-12">
                <div class="subscription-input-group">
                    <form id="subscribe-form">
                        <input type="text" name="email" id="email" class="subscription-input-form" placeholder="Enter your email here">
                        <button type="submit" class="appsLand-btn subscribe-btn">
                            Email göndər
                        </button>
                    </form>
                </div>
            </div>
        </div>
        <div id="response-message" class="text-center"></div>
    </div>
</section>
<!--subscription end -->

<script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
<script>
    $(document).ready(function() {
        $('#subscribe-form').on('submit', function(e) {
            e.preventDefault();

            var email = $('#email').val();

            $.ajax({
                url: '<?= view('pages.subscribe') ?>',
                type: 'POST',
                data: { email: email },
                success: function(response) {
                    $('#response-message').html(response);
                },
                error: function() {
                    $('#response-message').html("Xəta baş verdi. Xahiş edirik yenidən cəhd edin.");
                }
            });
        });
    });
</script>
