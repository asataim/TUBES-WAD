<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Thalita Fried Chicken</title>
    <!-- Bootstrap CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet">


    <link href="{{ asset('css/style_Home.css') }}" rel="stylesheet">
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=ADLaM+Display&display=swap" rel="stylesheet">

    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.7.1/jquery.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/js/bootstrap.min.js"></script>

</head>

<body>
    <header>
        <nav class="navbar navbar-expand-lg">
            <div class="container-fluid">
                <a class="navbar-brand" href="#">
                    <img src="{{ asset('gambar/thalita_navbar.jpeg') }}" alt="Thalita Logo" style="height: 40px;">
                </a>
                <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav"
                    aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
                    <span class="navbar-toggler-icon"></span>
                </button>
                <div class="collapse navbar-collapse" id="navbarNav">
                    <ul class="navbar-nav ms-auto">
                        <li class="nav-item">
                            <a class="nav-link active" href="{{ route('main') }}">Home</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="{{ route('about') }}">Profil</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="{{ route('partners.index') }}">Kemitraan</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="#">Testimoni</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="#">Resto</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="#">Menu</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="#">Hubungi Kami</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="{{ url('/') }}">Logout</a>
                        </li>
                    </ul>
                </div>
            </div>
        </nav>
    </header>
    
    <div class="hero-section">
        <div class="hero-overlay">
            <div class="logo-section">
                <img src="{{ asset('gambar/thalita_logo.png') }}" width="400" height="400">
            </div>
            <div class="title-section">
                <h1 class="title-home">Ciptakan Pengalaman Lezat di Setiap Outlet</h1>
            </div>
        </div>
    </div>

    <div class="promo-section container-fluid">
        <div class="row">
            <div class="col-sm promo-item">
                <img src="{{ asset('gambar/promo1.jpeg') }}" alt="">
            </div>
            <div class="col-sm promo-item">
                <img src="{{ asset('gambar/promo2.jpeg') }}" alt="">
            </div>
            <div class="col-sm promo-item">
                <img src="{{ asset('gambar/promo3.jpeg') }}" alt="">
            </div>
            <div class="col-sm promo-item">
                <img src="{{ asset('gambar/promo4.jpeg') }}" alt="">
            </div>
        </div>
    </div>

    <div class="grid-section container-fluid">
        <div class="row">
            <div class="col grid-item">
                <div class="inner-box">
                    <div class="first-column" id="box_satu">
                        <p>"Sistem kemitraan yang ditawarkan benar-benar memudahkan, saya sangat puas!"</p>
                    </div>
                    <div class="second-column">
                        <div class="second-column-img">
                            <img src="{{ asset('gambar/profile.jpg') }}" alt="">
                        </div>
                        <div class="second-column-name">
                            <p>Rina</p>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col grid-item">
                <div class="inner-box">
                    <div class="first-column" id="box_dua">
                        <p>"Perusahaan ini memberikan panduan yang jelas dan membantu saya mencapai target bisnis dengan
                            cepat!"</p>
                    </div>
                    <div class="second-column">
                        <div class="second-column-img">
                            <img src="{{ asset('gambar/profile.jpg') }}" alt="">
                        </div>
                        <div class="second-column-name">
                            <p>Fahmi</p>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col grid-item">
                <div class="inner-box">
                    <div class="first-column" id="box_tiga">
                        <p>"Produk berkualitas dan strategis bisnisnya jitu, saya bangga menjadi bagian dari kemitraan
                            ini!"</p>
                    </div>
                    <div class="second-column">
                        <div class="second-column-img">
                            <img src="{{ asset('gambar/profile.jpg') }}" alt="">
                        </div>
                        <div class="second-column-name">
                            <p>Dian</p>
                        </div>
                    </div>
                </div>
            </div>
        </div>

        <div class="row">
            <div class="col grid-item">
                <div class="inner-box">
                    <div class="first-column" id="box_empat">
                        <p>"Kepercayaan yang diberikan perusahaan ini membuat saya semakin yakin dalam menjalankan
                            usaha"</p>
                    </div>
                    <div class="second-column">
                        <div class="second-column-img">
                            <img src="{{ asset('gambar/profile.jpg') }}" alt="">
                        </div>
                        <div class="second-column-name">
                            <p>Agus</p>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col grid-item">
                <div class="inner-box">
                    <div class="first-column" id="box_lima">
                        <p>"Berkat kemitraan ini, mimpi saya memiliki bisnis sukses akhirnya terwujud"</p>
                    </div>
                    <div class="second-column">
                        <div class="second-column-img">
                            <img src="{{ asset('gambar/profile.jpg') }}" alt="">
                        </div>
                        <div class="second-column-name">
                            <p>Eko</p>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col grid-item">
                <div class="inner-box">
                    <div class="first-column" id="box_enam">
                        <p>"Hasil usaha dari kemitraan ini jauh di atas ekspetasi, saya sangat puas!"</p>
                    </div>
                    <div class="second-column">
                        <div class="second-column-img">
                            <img src="{{ asset('gambar/profile.jpg') }}" alt="">
                        </div>
                        <div class="second-column-name">
                            <p>Maya</p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <h1 class="faq">FAQ</h1>

    <div class="container">
        <div class="accordion" id="accordionFAQ">
            <div class="accordion-item">
                <h2 class="accordion-header" id="headingOne">
                    <button class="accordion-button collapsed" data-bs-toggle="collapse" data-bs-target="#collapse1"
                        aria-expanded="true" aria-controls="collapse1">
                        Bagaimana cara bergabung kemitraannya?
                    </button>
                </h2>
                <div id="collapse1" class="accordion-collapse collapse" aria-labelledby="headingOne"
                    data-bs-parent="#accordionFAQ">
                    <div class="accordion-body">
                        <strong>Calon mitra dapat mendaftar melalui dua cara. Bisa mlelaui website resmi Thalita dan
                            mengisi formulir yang tersedia, atau dengan cara menghubungi admin Thalita Fried Chicken dan
                            membuat janji temu untuk perjanjian kerja sama di kantor pusat</strong>
                    </div>
                </div>
            </div>
            <div class="accordion-item">
                <h4 class="accordion-header" id="headingTwo">
                    <button class="accordion-button collapsed" data-bs-toggle="collapse" data-bs-target="#collapse2"
                        aria-expanded="true" aria-controls="collapse2">
                        Berapa lama proses pendaftaran kemitraan sampai selesai?
                    </button>
                </h4>
                <div id="collapse2" class="accordion-collapse collapse" aria-labelledby="headingTwo"
                    data-bs-parent="#accordionFAQ">
                    <div class="accordion-body">
                        <strong>Untuk prosesnya biasanya memakan waktu 1-2 minggu tergantung kelengkapan dokumen dan
                            proses komunikasi.</strong>
                    </div>
                </div>
            </div>
            <div class="accordion-item">
                <h4 class="accordion-header" id="headingThree">
                    <button class="accordion-button collapsed" data-bs-toggle="collapse" data-bs-target="#collapse3"
                        aria-expanded="true" aria-controls="collapse3">
                        Apakah bisa meminta saran lokasi dari Thalita langsung?
                    </button>
                </h4>
                <div id="collapse3" class="accordion-collapse collapse" aria-labelledby="headingThree"
                    data-bs-parent="#accordionFAQ">
                    <div class="accordion-body">
                        <strong>Tim Thalita hanya bisa memberikan rekomendasi lokasi berdasarkan pengalaman dan analisis
                            bisnis</strong>
                    </div>
                </div>
            </div>
            <div class="accordion-item">
                <h4 class="accordion-header" id="headingFour">
                    <button class="accordion-button collapsed" data-bs-toggle="collapse" data-bs-target="#collapse4"
                        aria-expanded="true" aria-controls="collapse4">
                        Apakah ada sistem bagi hasil untuk kemitraan Thalita?
                    </button>
                </h4>
                <div id="collapse4" class="accordion-collapse collapse" aria-labelledby="headingFour"
                    data-bs-parent="#accordionFAQ">
                    <div class="accordion-body">
                        <strong>Tidak ada sistem bagi hasil. Seluruh keuntungan sepenuhnya menjadi hak mitra. Mitra
                            hanya diwajibkan membeli peralatan dan bahan baku langsung dari pusat</strong>
                    </div>
                </div>
            </div>
            <div class="accordion-item">
                <h4 class="accordion-header" id="headingFive">
                    <button class="accordion-button collapsed" data-bs-toggle="collapse" data-bs-target="#collapse5"
                        aria-expanded="true" aria-controls="collapse5">
                        Apakah boleh membeli bahan baku di luar standar Thalita?
                    </button>
                </h4>
                <div id="collapse5" class="accordion-collapse collapse" aria-labelledby="headingFive"
                    data-bs-parent="#accordionFAQ">
                    <div class="accordion-body">
                        <strong>Tidak boleh. Semua bahan baku utama seperti ayam, bumbu dan kemasan sudah disuplai
                            langsung oleh pusat Thalita Fried Chicken. Pengiriman bahan dilakukan secara berkala dari
                            gudang utama</strong>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <!-- Footer -->
    <footer class="text-center text-lg-start bg-body-tertiary text-muted">
        <!-- Section: Social media -->
        <section class="d-flex justify-content-center justify-content-lg-between p-4 border-bottom">
            <!-- Left -->
            <div class="me-5 d-none d-lg-block">
                <span>Get connected with us on social networks:</span>
            </div>
            <!-- Left -->

            <!-- Right -->
            <div>
                <a href="https://www.instagram.com/fuad.ngrha?igsh=MXZ1NDZneDd1N3Jn" class="me-4 text-reset"
                    target="_blank">
                    <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor"
                        class="bi bi-instagram" viewBox="0 0 16 16">
                        <path
                            d="M8 0C5.829 0 5.556.01 4.703.048 3.85.088 3.269.222 2.76.42a3.9 3.9 0 0 0-1.417.923A3.9 3.9 0 0 0 .42 2.76C.222 3.268.087 3.85.048 4.7.01 5.555 0 5.827 0 8.001c0 2.172.01 2.444.048 3.297.04.852.174 1.433.372 1.942.205.526.478.972.923 1.417.444.445.89.719 1.416.923.51.198 1.09.333 1.942.372C5.555 15.99 5.827 16 8 16s2.444-.01 3.298-.048c.851-.04 1.434-.174 1.943-.372a3.9 3.9 0 0 0 1.416-.923c.445-.445.718-.891.923-1.417.197-.509.332-1.09.372-1.942C15.99 10.445 16 10.173 16 8s-.01-2.445-.048-3.299c-.04-.851-.175-1.433-.372-1.941a3.9 3.9 0 0 0-.923-1.417A3.9 3.9 0 0 0 13.24.42c-.51-.198-1.092-.333-1.943-.372C10.443.01 10.172 0 7.998 0zm-.717 1.442h.718c2.136 0 2.389.007 3.232.046.78.035 1.204.166 1.486.275.373.145.64.319.92.599s.453.546.598.92c.11.281.24.705.275 1.485.039.843.047 1.096.047 3.231s-.008 2.389-.047 3.232c-.035.78-.166 1.203-.275 1.485a2.5 2.5 0 0 1-.599.919c-.28.28-.546.453-.92.598-.28.11-.704.24-1.485.276-.843.038-1.096.047-3.232.047s-2.39-.009-3.233-.047c-.78-.036-1.203-.166-1.485-.276a2.5 2.5 0 0 1-.92-.598 2.5 2.5 0 0 1-.6-.92c-.109-.281-.24-.705-.275-1.485-.038-.843-.046-1.096-.046-3.233s.008-2.388.046-3.231c.036-.78.166-1.204.276-1.486.145-.373.319-.64.599-.92s.546-.453.92-.598c.282-.11.705-.24 1.485-.276.738-.034 1.024-.044 2.515-.045zm4.988 1.328a.96.96 0 1 0 0 1.92.96.96 0 0 0 0-1.92m-4.27 1.122a4.109 4.109 0 1 0 0 8.217 4.109 4.109 0 0 0 0-8.217m0 1.441a2.667 2.667 0 1 1 0 5.334 2.667 2.667 0 0 1 0-5.334" />
                    </svg>
                </a>
                <a href="https://wa.me/6281289804888" class="me-4 text-reset" target="_blank">
                    <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor"
                        class="bi bi-whatsapp" viewBox="0 0 16 16">
                        <path
                            d="M13.601 2.326A7.85 7.85 0 0 0 7.994 0C3.627 0 .068 3.558.064 7.926c0 1.399.366 2.76 1.057 3.965L0 16l4.204-1.102a7.9 7.9 0 0 0 3.79.965h.004c4.368 0 7.926-3.558 7.93-7.93A7.9 7.9 0 0 0 13.6 2.326zM7.994 14.521a6.6 6.6 0 0 1-3.356-.92l-.24-.144-2.494.654.666-2.433-.156-.251a6.56 6.56 0 0 1-1.007-3.505c0-3.626 2.957-6.584 6.591-6.584a6.56 6.56 0 0 1 4.66 1.931 6.56 6.56 0 0 1 1.928 4.66c-.004 3.639-2.961 6.592-6.592 6.592m3.615-4.934c-.197-.099-1.17-.578-1.353-.646-.182-.065-.315-.099-.445.099-.133.197-.513.646-.627.775-.114.133-.232.148-.43.05-.197-.1-.836-.308-1.592-.985-.59-.525-.985-1.175-1.103-1.372-.114-.198-.011-.304.088-.403.087-.088.197-.232.296-.346.1-.114.133-.198.198-.33.065-.134.034-.248-.015-.347-.05-.099-.445-1.076-.612-1.47-.16-.389-.323-.335-.445-.34-.114-.007-.247-.007-.38-.007a.73.73 0 0 0-.529.247c-.182.198-.691.677-.691 1.654s.71 1.916.81 2.049c.098.133 1.394 2.132 3.383 2.992.47.205.84.326 1.129.418.475.152.904.129 1.246.08.38-.058 1.171-.48 1.338-.943.164-.464.164-.86.114-.943-.049-.084-.182-.133-.38-.232" />
                    </svg>
                </a>

            </div>

        </section>

        <section class="">
            <div class="container text-center text-md-start mt-5">

                <div class="row mt-3">

                    <div class="col-md-3 col-lg-4 col-xl-3 mx-auto mb-4">

                        <h6 class="text-uppercase fw-bold mb-4">
                            <i class="fas fa-gem me-3"></i>Thalita Fried Chicken
                        </h6>
                        <p>
                            Bisnis kemitraan yang menawarkan cita rasa lezat serta harga yang terjangkau.
                            Dengan modal awal yang fleksibel, mitra mendapatkan dukungan penuh. Bergabung bersama
                            Thalita Fried Chicken!
                        </p>
                    </div>



                    <div class="col-md-2 col-lg-2 col-xl-2 mx-auto mb-4">

                        <h6 class="text-uppercase fw-bold mb-4">
                            Products
                        </h6>
                        <p>
                            <a href="#!" class="text-reset">Produk 1</a>
                        </p>
                        <p>
                            <a href="#!" class="text-reset">Produk 2</a>
                        </p>
                        <p>
                            <a href="#!" class="text-reset">Produk 3</a>
                        </p>
                        <p>
                            <a href="#!" class="text-reset">Produk 4</a>
                        </p>
                    </div>


                    <div class="col-md-3 col-lg-2 col-xl-2 mx-auto mb-4">

                        <h6 class="text-uppercase fw-bold mb-4">
                            Useful links
                        </h6>
                        <p>
                            <a href="#!" class="text-reset">Link 1</a>
                        </p>
                        <p>
                            <a href="#!" class="text-reset">Link 2</a>
                        </p>
                        <p>
                            <a href="#!" class="text-reset">Link 3</a>
                        </p>
                        <p>
                            <a href="#!" class="text-reset">Link 4</a>
                        </p>
                    </div>

                    <div class="col-md-4 col-lg-3 col-xl-3 mx-auto mb-md-0 mb-4">

                        <h6 class="text-uppercase fw-bold mb-4">Contact</h6>
                        <p><i class="fas fa-home me-3"></i> Bandung, Bojongsoang, Indonesia</p>
                        <p>
                            <i class="fas fa-envelope me-3"></i>
                            ThalitaChicken@gmail.com
                        </p>
                        <p><i class="fas fa-phone me-3"></i> +62 999 999</p>
                        <p><i class="fas fa-print me-3"></i> +62 888 888</p>
                    </div>
                </div>

            </div>
        </section>

    </footer>


    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js"></script>
</body>

</html>