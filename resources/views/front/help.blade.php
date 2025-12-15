@include('includes.header')

<div class="container-fluid bg-primary py-5 mb-5 page-header">
    <div class="container py-5">
        <div class="row justify-content-center">
            <div class="col-lg-10 text-center">
                <h1 class="display-3 text-white animated slideInDown">How may we help you</h1>
                <div class="input-group flex-nowrap" style="display: flex; justify-content: center;">
                    <span class="input-group-text iconbtnt" id="addon-wrapping">
                        <i class="bi bi-search"></i>
                    </span>
                    <input  type="text" class="form-control searchinput" placeholder="Username" aria-label="Username" aria-describedby="addon-wrapping">
                  </div>
            </div>
        </div>
    </div>
</div>


<div class="container-xxl py-5">
    <div class="container">
        <div class="row g-4">
            <div class="col-lg-3 col-sm-6 wow fadeInUp" data-wow-delay="0.1s" style="visibility: visible; animation-delay: 0.1s; animation-name: fadeInUp;">
                <div class="service-item text-center pt-3">
                    <div class="p-4">
                        <i class="fa fa-3x fa-graduation-cap text-primary mb-4"></i>
                        <h5 class="mb-3">Skilled Instructors</h5>
                        <p>Diam elitr kasd sed at elitr sed ipsum justo dolor sed clita amet diam</p>
                    </div>
                </div>
            </div>
            <div class="col-lg-3 col-sm-6 wow fadeInUp" data-wow-delay="0.3s" style="visibility: visible; animation-delay: 0.3s; animation-name: fadeInUp;">
                <div class="service-item text-center pt-3">
                    <div class="p-4">
                        <i class="fa fa-3x fa-globe text-primary mb-4"></i>
                        <h5 class="mb-3">Online Classes</h5>
                        <p>Diam elitr kasd sed at elitr sed ipsum justo dolor sed clita amet diam</p>
                    </div>
                </div>
            </div>
            <div class="col-lg-3 col-sm-6 wow fadeInUp" data-wow-delay="0.5s" style="visibility: visible; animation-delay: 0.5s; animation-name: fadeInUp;">
                <div class="service-item text-center pt-3">
                    <div class="p-4">
                        <i class="fa fa-3x fa-home text-primary mb-4"></i>
                        <h5 class="mb-3">Home Projects</h5>
                        <p>Diam elitr kasd sed at elitr sed ipsum justo dolor sed clita amet diam</p>
                    </div>
                </div>
            </div>
            <div class="col-lg-3 col-sm-6 wow fadeInUp" data-wow-delay="0.7s" style="visibility: visible; animation-delay: 0.7s; animation-name: fadeInUp;">
                <div class="service-item text-center pt-3">
                    <div class="p-4">
                        <i class="fa fa-3x fa-book-open text-primary mb-4"></i>
                        <h5 class="mb-3">Book Library</h5>
                        <p>Diam elitr kasd sed at elitr sed ipsum justo dolor sed clita amet diam</p>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>

<div>

    <div style="width: 50%; margin: 0 auto; padding: 20px; border: 1px solid #ccc; border-radius: 10px; text-align: center;">
        <h1>Make Payment</h1>
        <form id="paymentForm">
            @csrf

            <button class="btn btn-primary" type="submit" onclick="makePayment(event)">Make Payment</button>
        </form>
        <br>
        <div id="loading"></div>
        <iframe id="paymentFormifram" src="" frameborder="0" style="width: 100%; height: 500px;"></iframe>


    </div>
</div>

<script>
    function makePayment(e) {

        e.preventDefault();
        $('#loading').html('<div class="spinner-border text-primary" role="status"><span class="visually-hidden">Loading...</span></div>');
        // make a ajex post request
        $.ajax({
            url: "<?=url('payment')?>",
            method: 'post',
            data: {
                _token: '{{ csrf_token() }}'
            },
            success: function(response) {
                // console.log(response.data);
                // console.log('checkoutDirectUrl', response.data.checkoutDirectUrl);
                $('#paymentFormifram').attr('src', response.data.checkoutDirectUrl);
                $('#loading').html('');
            }
        });
    }
</script>

@include('includes.footer')
