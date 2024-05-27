@section('title', 'Halaman Utama Pasien')
@section('setAktifHalamanUtama', 'active')

@section('HalamanUtama')
    <!-- Vendor CSS Files -->
    <link href="/home-pasien-assets/vendor/fontawesome-free/css/all.min.css" rel="stylesheet">
    <link href="/home-pasien-assets/vendor/animate.css/animate.min.css" rel="stylesheet">
    <link href="/home-pasien-assets/vendor/bootstrap/css/bootstrap.min.css" rel="stylesheet">
    <link href="/home-pasien-assets/vendor/bootstrap-icons/bootstrap-icons.css" rel="stylesheet">
    <link href="/home-pasien-assets/vendor/boxicons/css/boxicons.min.css" rel="stylesheet">
    <link href="/home-pasien-assets/vendor/glightbox/css/glightbox.min.css" rel="stylesheet">
    <link href="/home-pasien-assets/vendor/remixicon/remixicon.css" rel="stylesheet">
    <link href="/home-pasien-assets/vendor/swiper/swiper-bundle.min.css" rel="stylesheet">

    <!-- Template Main CSS File -->
    <link href="/home-pasien-assets/css/style.css" rel="stylesheet">

    <!-- ======= Hero Section ======= -->
    <section id="hero" class="d-flex align-items-center">
        <div class="container">
            <h1>Welcome to Medilab</h1>
            <h2>We are a team of talented designers making websites with Bootstrap</h2>
        </div>
    </section><!-- End Hero -->

    <main id="main dashboard">
        <!-- ======= Why Us Section ======= -->
        <section id="why-us" class="why-us">
            <div class="container">
                <div class="row">
                    <div class="col-lg-4 d-flex align-items-stretch">
                        <div class="content">
                            <h3>Why Choose Medilab?</h3>
                            <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor
                                incididunt ut labore et dolore magna aliqua. Duis aute irure dolor in reprehenderit
                                asperiores dolores sed et. Tenetur quia eos. Autem tempore quibusdam vel necessitatibus
                                optio ad corporis.</p>
                        </div>
                    </div>
                    <div class="col-lg-8 d-flex align-items-stretch">
                        <div class="icon-boxes d-flex flex-column justify-content-center">
                            <div class="row">
                                <div class="col-xl-4 d-flex align-items-stretch">
                                    <div class="icon-box mt-4 mt-xl-0">
                                        <i class="bx bx-receipt"></i>
                                        <h4>Corporis voluptates sit</h4>
                                        <p>Consequuntur sunt aut quasi enim aliquam quae harum pariatur laboris nisi ut
                                            aliquip</p>
                                    </div>
                                </div>
                                <div class="col-xl-4 d-flex align-items-stretch">
                                    <div class="icon-box mt-4 mt-xl-0">
                                        <i class="bx bx-cube-alt"></i>
                                        <h4>Ullamco laboris ladore pan</h4>
                                        <p>Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia
                                            deserunt</p>
                                    </div>
                                </div>
                                <div class="col-xl-4 d-flex align-items-stretch">
                                    <div class="icon-box mt-4 mt-xl-0">
                                        <i class="bx bx-images"></i>
                                        <h4>Labore consequatur</h4>
                                        <p>Aut suscipit aut cum nemo deleniti aut omnis. Doloribus ut maiores omnis
                                            facere</p>
                                    </div>
                                </div>
                            </div>
                        </div><!-- End .content-->
                    </div>
                </div>
            </div>
        </section><!-- End Why Us Section -->

        <!-- ======= About Section ======= -->
        <section id="about" class="about">
            <div class="container-fluid">
                <div class="row">
                    <div
                        class="col-xl-5 col-lg-6 video-box d-flex justify-content-center align-items-stretch position-relative">
                        <a href="https://www.youtube.com/watch?v=jDDaplaOz7Q" class="glightbox play-btn mb-4"></a>
                    </div>
                    <div
                        class="col-xl-7 col-lg-6 icon-boxes d-flex flex-column align-items-stretch justify-content-center py-5 px-lg-5">
                        <h3>Enim quis est voluptatibus aliquid consequatur fugiat</h3>
                        <p>Esse voluptas cumque vel exercitationem. Reiciendis est hic accusamus. Non ipsam et sed
                            minima temporibus laudantium. Soluta voluptate sed facere corporis dolores excepturi. Libero
                            laboriosam sint et id nulla tenetur. Suscipit aut voluptate.</p>

                        <div class="icon-box">
                            <div class="icon"><i class="bx bx-fingerprint"></i></div>
                            <h4 class="title">Lorem Ipsum</h4>
                            <p class="description">Voluptatum deleniti atque corrupti quos dolores et quas molestias
                                excepturi sint occaecati cupiditate non provident</p>
                        </div>

                        <div class="icon-box">
                            <div class="icon"><i class="bx bx-gift"></i></div>
                            <h4 class="title">Nemo Enim</h4>
                            <p class="description">At vero eos et accusamus et iusto odio dignissimos ducimus qui
                                blanditiis praesentium voluptatum deleniti atque</p>
                        </div>

                        <div class="icon-box">
                            <div class="icon"><i class="bx bx-atom"></i></div>
                            <h4 class="title">Dine Pad</h4>
                            <p class="description">Explicabo est voluptatum asperiores consequatur magnam. Et veritatis
                                odit. Sunt aut deserunt minus aut eligendi omnis</p>
                        </div>
                    </div>
                </div>
            </div>
        </section>
    </main>
@endsection
