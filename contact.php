<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Btech Hotelwala -Contact Us</title>
    <?php require('inc/links.php'); ?>
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/swiper@9/swiper-bundle.min.css" />

    <style>
        .pop:hover {
            border-top-color:  #279e8c;
            transform: scale(1.03);
            transition: 0.3s;
        }
    </style>

</head>

<body class="bg-light">
    <?php require('inc/header.php'); ?>
    <div class="my-5 px-4">
        <h2 class="fw-bold h-font text-center">CONTACT US</h2>
        <div class="h-line bg-dark"></div>
        <p class="text-center mt-3">
            Lorem ipsum, dolor sit amet consectetur adipisicing elit. Non, perferendis mollitia. Harum odio<br> expedita corporis facere alias sit aperiam placeat.
        </p>
    </div>
    <div class="container">
        <div class="row">
            <div class="col-lg-6 col-md-6 mb-5 px-4">
                <div class="bg-white rounded shadow  p-4">
                <iframe class="w-100 rounded mb-4" height="320" src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d116784.88256487192!2d91.2891983086914!3d23.835392559180537!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x3753f40dc94123a7%3A0xd0a1263c6c40c8c7!2sAgartala%2C%20Tripura!5e0!3m2!1sen!2sin!4v1688381197207!5m2!1sen!2sin" loading="lazy"></iframe>
                    <h5>Address</h5>
                    <a href="https://goo.gl/maps/JaFe294x6yRGnQdX6" target="-blank" class="d-inline-block text-decoration-none text-dark mb-2">
                    <i class="bi bi-geo-alt-fill"></i> XYZ, Agartala ,Tripura ,India
                    </a>
                    <h5 class="mt-4">Call Us :</h5>
                        <i class="bi bi-telephone-fill"></i> <a href="tel:+911234567890" class="d-inline-block mb-2 text-decoration-none text-dark">
                             +911234567890
                        </a>
                        <br>
                        <i class="bi bi-telephone-fill"></i> <a href="tel:+911234567890" class="d-inline-block text-decoration-none text-dark">
                            +911234567890
                       </a>
                    <h5 class="mt-4">Email :</h5>
                    <a href="mailto: sukuna2ryomen@gmail.com" class="d-inline-block mb-2 text-decoration-none text-dark">
                    <i class="bi bi-envelope-at-fill"></i> sukuna2ryomen@gmail.com

                    </a>

                    <h5 class="mt-4">Follow Us :</h5>
                        <a href="#" class="d-inline-block mb-3 text-dark fs-5 me-2">
                            <i class="bi bi-twitter me-1"></i>
                        </a>
                        <a href="#" class="d-inline-block mb-3 text-dark fs-5 me-2">                        
                                <i class="bi bi-facebook me-1"></i>
                        </a>
                        <a href="#" class="d-inline-block mb-3 text-dark fs-5">
                            <i class="bi bi-instagram me-1"></i>
                        </a>

                </div>
            </div>
            <div class="col-lg-6 col-md-6 px-4">
                <div class="bg-white rounded shadow  p-4 b">
                    <form>
                        <h5>Send a message</h5>
                        <div class="mt-3">
                            <label class="form-label" style="font-weight:500;">Name</label>
                            <input type="text" class="form-control shadow-none">
                        </div>
                        <div class="mt-3">
                            <label class="form-label" style="font-weight:500;">Email</label>
                            <input type="email" class="form-control shadow-none">
                        </div>
                        <div class="mt-3">
                            <label class="form-label" style="font-weight:500;">Subject</label>
                            <input type="text" class="form-control shadow-none">
                        </div>
                        <div class="mt-3">
                            <label class="form-label" style="font-weight:500;">Message</label>
                            <textarea class="form-control shadow-none" rows="5" style="resize : none;"></textarea>
                            <button class="btn btn-dark text-white custom-bg mt-3">SEND</button>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
    <?php require('inc/footer.php'); ?>

</body>

</html>