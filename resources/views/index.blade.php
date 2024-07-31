<style>
    .navbar img {
        height: 200px;
        width: 200px
    }

    section .card {
        box-shadow: 6px 8px 20px rgba(0, 0, 0, 0.5);
        border-radius: 40px;
    }

    section .card img {
        border-radius: 40px;
        height: 200px;
    }

    .carousel img {
        height: 610px;
    }

    .stats-section {
        font-family: Arial, sans-serif;
        background-color: #2d3b54;
        color: #ffffff;
        margin: 0;
        padding: 0;
        display: flex;
        flex-wrap: wrap;
        justify-content: space-around;
        align-items: center;
        padding: 40px;
    }

    .stat {
        text-align: center;
        margin: 20px;
    }

    .number {
        font-size: 3em;
        color: #ffd700;
        transition: color 0.3s;
        font-weight: bold;
    }

    .number:hover {
        color: #ffffff;
    }

    .label {
        display: block;
        margin-top: 10px;
        font-size: 1.2em;
    }

    .motto {
        max-width: 400px;
        text-align: left;
        margin: 20px;
    }

    .motto h2 {
        font-size: 1.5em;
        margin-bottom: 10px;
    }

    .motto p {
        font-size: 1.1em;
        line-height: 1.5;
    }


    .containe {
        display: flex;
        flex-wrap: wrap;
        justify-content: space-between;
        padding: 20px;
        background-color: #fff;
        box-shadow: 0 0 10px rgba(0, 0, 0, 0.1);
    }

    .content {
        flex: 1;
        padding: 20px;
    }

    .image {
        flex: 0 0 200px;
        display: flex;
        align-items: center;
        justify-content: center;
    }

    .image img {
       width: 300px;
        height: auto;
        height: 420px;
        border-radius: 10px;
    }

    h1 {
        font-size: 2em;
        color: #333;
    }

    h2 {
        font-size: 1.5em;
        color: #666;
    }

    p {
        font-size: 1em;
        line-height: 1.5;
        color: #555;
    }

    strong {
        font-weight: bold;
        color: #000;
    }
</style>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no" />
    <meta name="description" content="" />
    <meta name="author" content="" />
    <meta name="csrf-token" content="{{ csrf_token() }}">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.11.3/font/bootstrap-icons.min.css">
    <!-- Favicon-->
    <link rel="icon" type="image/x-icon" href="assets/favicon.ico" />
    <!-- Font Awesome icons (free version)-->
    <script src="https://use.fontawesome.com/releases/v6.3.0/js/all.js" crossorigin="anonymous"></script>
    <!-- Google fonts-->
    <link href="https://fonts.googleapis.com/css?family=Montserrat:400,700" rel="stylesheet" type="text/css" />
    <link href="https://fonts.googleapis.com/css?family=Roboto+Slab:400,100,300,700" rel="stylesheet" type="text/css" />
    <!-- Core theme CSS (includes Bootstrap)-->
    <link href="css/styles.css" rel="stylesheet" />
</head>

<body id="page-top">
    <!-- Navigation-->
    <nav class="navbar navbar-expand-lg navbar-dark fixed-top" id="mainNav">
        <div class="container">
            <a class="navbar-brand" href="#page-top"><img src="assets/img/navbar.webp" alt="..." /></a>
            <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarResponsive"
                aria-controls="navbarResponsive" aria-expanded="false" aria-label="Toggle navigation">
                Menu
                <i class="fas fa-bars ms-1"></i>
            </button>
            <div class="collapse navbar-collapse" id="navbarResponsive">
                <ul class="navbar-nav text-uppercase ms-auto py-4 py-lg-0">
                    <li class="nav-item"><a class="nav-link" href="#home">Beranda</a></li>
                    <li class="nav-item"><a class="nav-link" href="#jurusan">Jurusan</a></li>
                    <li class="nav-item"><a class="nav-link" href="#informasi">Informasi</a></li>
                    <li class="nav-item"><a class="nav-link" href="#eskul">Ekstrakurikuler</a></li>
                    <li class="nav-item"><a class="nav-link" href="#fasilitas">Fasilitas</a></li>
                    <li class="nav-item"><a class="nav-link" href="#industri">Industri</a></li>
                    <li class="nav-item"><a class="nav-link" href="#contact">Kontak</a></li>
                </ul>
            </div>
        </div>
    </nav>
    <!-- slid -->
    <div id="carouselExampleInterval" class="carousel slide" data-bs-ride="carousel">
        <div class="carousel-inner" id="home">
            <div class="carousel-item active" data-bs-interval="10000">
                <img src="assets/img/kelas.jpg" class="d-block w-100" alt="...">
                <div class="carousel-caption d-none d-md-block">
                    {{-- <button type="button" class="btn btn-info"><a href="{{ url('auth/login/')}}"></a> Login Sebagai
                        Admin</button> --}}
                    <h5 class="mt-3">Ruangan Kelas</h5>
                    <p style="color: white">SMK MUHAMMADIYAH KADUNGORA</p>
                </div>
            </div>
            <div class="carousel-item" data-bs-interval="2000">
                <img src="assets/img/perpus.jpg" class="d-block w-100" alt="...">
                <div class="carousel-caption d-none d-md-block">
                    <h5 class="mt-3">Ruangan Kelas</h5>
                    <p style="color: white">SMK MUHAMMADIYAH KADUNGORA</p>
                </div>
            </div>
            <div class="carousel-item">
                <img src="assets/img/sekolah.jpg" class="d-block w-100" alt="...">
                <div class="carousel-caption d-none d-md-block">
                    <h5 class="mt-3">Taman</h5>
                    <p style="color: white">SMK MUHAMMADIYAH KADUNGORA</p>
                </div>
            </div>
        </div>
        <button class="carousel-control-prev" type="button" data-bs-target="#carouselExampleInterval"
            data-bs-slide="prev">
            <span class="carousel-control-prev-icon" aria-hidden="true"></span>
            <span class="visually-hidden">Previous</span>
        </button>
        <button class="carousel-control-next" type="button" data-bs-target="#carouselExampleInterval"
            data-bs-slide="next">
            <span class="carousel-control-next-icon" aria-hidden="true"></span>
            <span class="visually-hidden">Next</span>
        </button>
    </div>
    {{-- --}}
    <div class="containe py-5" style="background: #ECF5FE">
        <div class="content">
            <h1>Nana Setiana</h1>
            <h2>Kepala SMK MUHAMMADIYAH KADUNGORA</h2>
            <br>
            <p>
                Selamat datang di Website kami di Sekolah Menengah Kejuruan Muhammadiyah Kadungora.
                Website ini kami tujukan untuk seluruh guru, karyawan dan siswa serta masyarakat
                umum agar dapat mengakses seluruh informasi tentang profil, aktifitas atau kegiatan serta
                fasilitas sekolah secara berkala dan update.
            </p>
            <p>
                Tentunya Website sekolah kami masih terdapat banyak kekurangan, oleh karena itu
                kepada seluruh civitas akademika dan masyarakat umum dapat memberikan saran
                dan kritik yang membangun demi kemajuan website ini lebih lanjut.
            </p>
            <p><strong>SMK MUHAMMADIYAH KADUNGORA Sekolahnya Sang Juara, PRIMASERU Semua Prima, Semua Seru,
                    Makin Prima dan Makin Seru dalam Karakter, Prestasi dan Layanan</strong></p>
            <p>
                Pada akhirnya, mari kita bekerja dan berkarya dengan keikhlasan yang tulus demi
                suksesnya masa depan anak-anak didik kita.
            </p>
        </div>
        <div class="image">
            <img src="assets/img/kepala.jpg" alt="Rosyanto, M.Pd">
        </div>
        </div>
        <!-- jurusan-->
        <section class="page-section" id="jurusan">
            <div class="container">
                <div class="text-center">
                    <h2 class="section-heading text-uppercase" style="color: black;">Jurusan</h2>
                    <h3 class="section-subheading text-muted">SMK MUHAMMADIYAH KADUNGORA</h3>
                </div>
                <div class="row text-center">
                    @foreach ($jurusan as $item)
                    <div class="col-md-4">
                        <h4 class="my-3">
                            {{$item->nama_jurusan}}

                        </h4>
                        <p class="text-muted">ekstrakurikuler di sekolah memberikan gambaran tentang jenis kegiatan yang ditawarkan kepada siswa dan manfaatnya bagi
                        perkembangan mereka.</p>
                    </div>
                    @endforeach
                </div>
            </div>
        </section>
        <!-- informasi -->
        <section class="page-section" style="background: #03A9F4" id="informasi">
            <div class="container">
                <div class="text-center">
                    <h2 class="section-heading text-uppercase" style="color: white">Informasi</h2>
                    <h3 class="section-subheading" style="color: white">SMK MUHAMMADIYAH KADUNGORA</h3>
                </div>
                <div class="row" style="margin-left: 40px">
                    @foreach ($informasi as $item)
                    <div class="col-lg-4 col-sm-6 mb-4">
                        <div class="card" style="width: 18rem;">
                            <img src="{{ asset('images/informasi/' .$item->img)}}" class="card-img-top" alt="...">
                            <div class="card-body">
                                <h5 class="card-title">{{$item->judul}}</h5>
                                <p class="card-text">{{$item->deskripsi}}</p>
                                <h6 style="color: lightslategray">{{$item->tgl}}</h6>
                            </div>
                        </div>
                    </div>
                    @endforeach
                </div>
        </section>
        {{-- jumlah --}}
        <div class="stats-section">
            <div class="stat">
                <span class="number">3000+</span>
                <span class="label">Lulusan terbaik</span>
            </div>
            <div class="stat">
                <span class="number">90%</span>
                <span class="label">Telah bekerja</span>
            </div>
            <div class="stat">
                <span class="number">100+</span>
                <span class="label">Dunia industri</span>
            </div>
            <div class="stat">
                <span class="number">300+</span>
                <span class="label">Kuliah di PTN</span>
            </div>
            <div class="motto">
                <h2>Moto SMK MUHAMMADIYAH KADUNGORA</h2>
                <p>kesuksesan diawali oleh perubahan, perubahan terjadi pada orang yang aktif, kreatif dan inovatif.</p>
            </div>
        </div>
        <!-- eskul -->
        <section class="page-section" style="background: #ECF5FE" id="eskul">
            <div class="container">
                <div class="text-center">
                    <h2 class="section-heading text-uppercase" style="color: black">Ekstrakurikuler</h2>
                    <h3 class="section-subheading text-muted">SMK MUHAMMADIYAH KADUNGORA</h3>
                </div>
                <div class="row">
                    @foreach ($eskul as $item)
                    <div class="col-lg-4 col-sm-6 mb-4">
                        <div class="team-member">
                            <img class="mx-auto rounded-circle" src="{{ asset('images/eskul/' .$item->img)}}"
                                alt="..." />
                            <h4>{{$item->eskul}}</h4>
                            <p class="text-muted">{{$item->deskripsi}}</p>
                        </div>
                    </div>
                    @endforeach
                </div>
            </div>
        </section>
        {{-- fasilitas --}}
        <section class="page-section" style="background: #ECF5FE" id="fasilitas">
            <div class="container">
                <div class="text-center">
                    <h2 class="section-heading text-uppercase" style="color: black">Fasilitas</h2>
                    <h3 class="section-subheading text-muted">SMK MUHAMMADIYAH KADUNGORA</h3>
                </div>
                <div class="row" style="margin-left: 40px">
                    @foreach ($fasilitas as $item)
                    <div class="col-lg-4 col-sm-6 mb-4">
                        <div class="card" style="width: 18rem;">
                            <img src="{{ asset('images/fasilitas/' .$item->img)}}" class="card-img-top" alt="...">
                            <div class="card-body">
                                <h5 class="card-title">{{$item->nama}}</h5>
                            </div>
                        </div>
                    </div>
                    @endforeach
                </div>
        </section>
        {{-- industri --}}
        <section class="page-section" id="industri">
            <div class="container">
                <div class="text-center">
                    <h2 class="section-heading text-uppercase" style="color: black;">Industri</h2>
                    <h3 class="section-subheading text-muted">Yang Sudah Kerja Sama Dengan SMK MUHAMMADIYAH KADUNGORA
                    </h3>
                </div>
                <div class="row" style="margin-left: 40px">
                    @foreach ($industri as $item)
                    <div class="col-lg-4 col-sm-6 mb-4">
                    <div class="card" style="width: 18rem;">
                        <h4 class="my-3" style="margin-left: 10px">{{$item->nama}}</h4>
                        <p class="text-muted" style="margin-left: 10px">Jurusan : {{$item->jurusan->nama_jurusan}}</p>
                        <p class="text-muted" style="margin-left: 10px">Alamat : {{$item->alamat}}</p>
                        <p class="text-muted" style="margin-left: 10px">Tahun Kerja Sama : {{$item->tahun}}</p>
                    </div>
                    </div>
                    @endforeach
                </div>
            </div>
        </section>
        <!-- Contact-->
        {{-- <div class="container">
            <div class="row justify-content-center">
                <div class="col-md-8">
                    <div class="card">
                        <div class="card-body">
                            <form action="{{ route('contact.store') }}" method="post" enctype="multipart/form-data">
                                @csrf
                                <div class="mb-2">
                                    <label for="nama">Nama</label>
                                    <input type="text" class="form-control @error('nama') is-invalid @enderror"
                                        name="nama">
                                    @error('nama')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                    @enderror
                                </div>
                                <div class="mb-2">
                                    <label for="email">Email</label>
                                    <input type="taxt" class="form-control @error('email') is-invalid @enderror"
                                        name="email">
                                    @error('email')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                    @enderror
                                </div>
                                <div class="mb-2">
                                    <label for="nomor">telepon</label>
                                    <input type="taxt" class="form-control @error('nomor') is-invalid @enderror"
                                        name="nomor">
                                    @error('nomor')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                    @enderror
                                </div>
                                <div class="mb-2">
                                    <label for="pesan">Pesan</label>
                                    <textarea class="form-control @error('pesan') is-invalid @enderror"
                                        name="pesan"></textarea>
                                    @error('pesan')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                    @enderror
                                </div>
                                <div class="mb-2">
                                    <button class="btn btn-sm btn-success" type="submit">Simpan</button>
                                </div>
                            </form>
                        </div>
                    </div>
                </div>
            </div>
        </div> --}}
        {{-- <section class="page-section" id="contact">
            <div class="container">
                <div class="text-center">
                    <h2 class="section-heading text-uppercase">Contact Us</h2>
                    <h3 class="section-subheading text-muted">Lorem ipsum dolor sit amet consectetur.</h3>
                </div>
                <form id="contactForm" action="{{ route('contact.store') }}" method="post"
                    enctype="multipart/form-data">
                    @csrf
                    <div class="row align-items-stretch mb-5">
                        <div class="col-md-6">
                            <div class="form-group">
                                <!-- Name input-->
                                <input class="form-control @error('nama') is-invalid @enderror" name="nama" id="name"
                                    type="text" placeholder="Nama" data-sb-validations="required" />
                                @error('nama')
                                <span class="invalid-feedback" role="alert">
                                    <strong>{{ $message }}</strong>
                                </span>
                                @enderror
                            </div>
                            <div class="form-group">
                                <!-- Email address input-->
                                <input class="form-control @error('email') is-invalid @enderror" name="email" id="email"
                                    type="email" placeholder="Email" data-sb-validations="required,email" />
                                @error('email')
                                <span class="invalid-feedback" role="alert">
                                    <strong>{{ $message }}</strong>
                                </span>
                                @enderror
                            </div>
                            <div class="form-group mb-md-0">
                                <!-- Phone number input-->
                                <input class="form-control @error('nomor') is-invalid @enderror" name="nomor" id="phone"
                                    type="tel" placeholder="Nomor" data-sb-validations="required" />
                                @error('nomor')
                                <span class="invalid-feedback" role="alert">
                                    <strong>{{ $message }}</strong>
                                </span>
                                @enderror
                            </div>
                        </div>
                        <div class="col-md-6">
                            <div class="form-group form-group-textarea mb-md-0">
                                <!-- Message input-->
                                <textarea class="form-control @error('pesan') is-invalid @enderror" name="pesan"
                                    id="message" placeholder="Pesan" data-sb-validations="required"></textarea>
                                @error('pesan')
                                <span class="invalid-feedback" role="alert">
                                    <strong>{{ $message }}</strong>
                                </span>
                                @enderror
                            </div>
                        </div>
                    </div>
                    <!-- Submit success message-->
                    <!---->
                    <!-- This is what your users will see when the form-->
                    <!-- has successfully submitted-->

                    <!-- Submit Button-->
                    <div class="text-center"><button class="btn btn-primary" type="submit">Send Message</button></div>
                </form>
            </div>
        </section> --}}
        {{-- <section class="page-section" id="contact">
            <div class="container">
                <div class="text-center">
                    <h2 class="section-heading text-uppercase">Contact Us</h2>
                    <h3 class="section-subheading text-muted">Lorem ipsum dolor sit amet consectetur.</h3>
                </div>
                <form id="contactForm" action="{{ route('contact.store') }}" method="post"
                    enctype="multipart/form-data">
                    @csrf
                    <div class="row align-items-stretch mb-5">
                        <div class="col-md-6">
                            <div class="form-group">
                                <!-- Name input-->
                                <input class="form-control @error('nama') is-invalid @enderror" name="nama" id="name"
                                    type="text" placeholder="Nama" data-sb-validations="required" />
                                @error('nama')
                                <span class="invalid-feedback" role="alert">
                                    <strong>{{ $message }}</strong>
                                </span>
                                @enderror
                            </div>
                            <div class="form-group">
                                <!-- Email address input-->
                                <input class="form-control @error('email') is-invalid @enderror" name="email" id="email"
                                    type="email" placeholder="Email" data-sb-validations="required,email" />
                                @error('email')
                                <span class="invalid-feedback" role="alert">
                                    <strong>{{ $message }}</strong>
                                </span>
                                @enderror
                            </div>
                            <div class="form-group mb-md-0">
                                <!-- Phone number input-->
                                <input class="form-control @error('nomor') is-invalid @enderror" name="nomor" id="phone"
                                    type="tel" placeholder="Nomor" data-sb-validations="required" />
                                @error('nomor')
                                <span class="invalid-feedback" role="alert">
                                    <strong>{{ $message }}</strong>
                                </span>
                                @enderror
                            </div>
                        </div>
                        <div class="col-md-6">
                            <div class="form-group form-group-textarea mb-md-0">
                                <!-- Message input-->
                                <textarea class="form-control @error('pesan') is-invalid @enderror" name="pesan"
                                    id="message" placeholder="Pesan" data-sb-validations="required"></textarea>
                                @error('pesan')
                                <span class="invalid-feedback" role="alert">
                                    <strong>{{ $message }}</strong>
                                </span>
                                @enderror
                            </div>
                        </div>
                    </div>
                    <!-- Submit success message-->
                    <!---->
                    <!-- This is what your users will see when the form-->
                    <!-- has successfully submitted-->

                    <!-- Submit Button-->
                    <div class="text-center"><button class="btn btn-primary" type="submit">Send Message</button></div>
                </form>
            </div>
        </section> --}}

        <section class="page-section" id="contact">
            <div class="container">
                <div class="text-center">
                    <h2 class="section-heading text-uppercase">Hubungi Kami</h2>
                </div>
                <form id="contactForm" data-sb-form-api-token="API_TOKEN">
                    <div class="row align-items-stretch mb-5 py-5">

                        <div class="col-md-6">
                            <div class="form-group form-group-textarea mb-md-0">
                                <div class="col-lg-8 col-lg-12 col-sm-12 col-xs-12 no-padding">
                                    <!-- Google map -->
                                    <iframe
                                        src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3960.3674102673285!2d107.59072401417895!3d-6.965911270139053!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x2e68e8deccecb6f1%3A0x658cc60fbe5017b9!2sSMK+Assalaam+Bandung!5e0!3m2!1sid!2sid!4v1510815784148"
                                        width="100%" height="300" frameborder="0" style="border:0"
                                        allowfullscreen=""></iframe>
                                    <!-- End Google map -->
                                </div>
                            </div>
                        </div>
                        <div class="col-md-6">
                            <div class="form-group">
                                <!-- Name input-->
                                <div class="icon-with-text">
                                    <i class="bi bi-house-door-fill" style="color: #03A9F4; font-size: 35px;"></i>
                                    <span style="color: white; font-size: 15px; margin-left: 10px;">Jl. Raya Kadungora,
                                        Kabupaten Garut, Jawa Barat 44153</span>
                                </div>
                            </div>
                            <div class="form-group">
                                <!-- Email address input-->
                                <div class="icon-with-text">
                                    <i class="bi bi-person-lines-fill" style="color: #03A9F4; font-size: 35px;"></i>
                                    <span style="color: white; font-size: 15px; margin-left: 10px;">022 2350-340</span>
                                </div>
                            </div>
                            <div class="form-group mb-md-0">
                                <!-- Phone number input-->
                                <div class="icon-with-text">
                                    <i class="bi bi-envelope-paper-fill" style="color: #03A9F4; font-size: 35px;"></i>
                                    <span
                                        style="color: white; font-size: 15px; margin-left: 10px;">smkmuhammadiyah1kdr@gmail.com</span>
                                </div>
                            </div>
                        </div>
                    </div>
                </form>
            </div>
        </section>

        <!-- Footer-->
        <footer class="footer py-4">
            <div class="container">
                <div class="row align-items-center">
                    <div class="col-lg-4 text-lg-start">Copyright &copy; Your Website 2023</div>
                    <div class="col-lg-4 my-3 my-lg-0">
                        <a class="btn btn-dark btn-social mx-2" href="#!" aria-label="Twitter"><i
                                class="fab fa-twitter"></i></a>
                        <a class="btn btn-dark btn-social mx-2" href="#!" aria-label="Facebook"><i
                                class="fab fa-facebook-f"></i></a>
                        <a class="btn btn-dark btn-social mx-2" href="#!" aria-label="LinkedIn"><i
                                class="fab fa-linkedin-in"></i></a>
                    </div>
                    <div class="col-lg-4 text-lg-end">
                        <a class="link-dark text-decoration-none me-3" href="#!">Privacy Policy</a>
                        <a class="link-dark text-decoration-none" href="#!">Terms of Use</a>
                    </div>
                </div>
            </div>
        </footer>
        <!-- Portfolio Modals-->
        <!-- Portfolio item 1 modal popup-->
        <div class="portfolio-modal modal fade" id="portfolioModal1" tabindex="-1" role="dialog" aria-hidden="true">
            <div class="modal-dialog">
                <div class="modal-content">
                    <div class="close-modal" data-bs-dismiss="modal"><img src="assets/img/close-icon.svg"
                            alt="Close modal" /></div>
                    <div class="container">
                        <div class="row justify-content-center">
                            <div class="col-lg-8">
                                <div class="modal-body">
                                    <!-- Project details-->
                                    <h2 class="text-uppercase">Project Name</h2>
                                    <p class="item-intro text-muted">Lorem ipsum dolor sit amet consectetur.</p>
                                    <img class="img-fluid d-block mx-auto" src="assets/img/portfolio/1.jpg" alt="..." />
                                    <p>Use this area to describe your project. Lorem ipsum dolor sit amet, consectetur
                                        adipisicing elit. Est blanditiis dolorem culpa incidunt minus dignissimos
                                        deserunt
                                        repellat aperiam quasi sunt officia expedita beatae cupiditate, maiores
                                        repudiandae,
                                        nostrum, reiciendis facere nemo!</p>
                                    <ul class="list-inline">
                                        <li>
                                            <strong>Client:</strong>
                                            Threads
                                        </li>
                                        <li>
                                            <strong>Category:</strong>
                                            Illustration
                                        </li>
                                    </ul>
                                    <button class="btn btn-primary btn-xl text-uppercase" data-bs-dismiss="modal"
                                        type="button">
                                        <i class="fas fa-xmark me-1"></i>
                                        Close Project
                                    </button>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!-- Portfolio item 2 modal popup-->
        <div class="portfolio-modal modal fade" id="portfolioModal2" tabindex="-1" role="dialog" aria-hidden="true">
            <div class="modal-dialog">
                <div class="modal-content">
                    <div class="close-modal" data-bs-dismiss="modal"><img src="assets/img/close-icon.svg"
                            alt="Close modal" /></div>
                    <div class="container">
                        <div class="row justify-content-center">
                            <div class="col-lg-8">
                                <div class="modal-body">
                                    <!-- Project details-->
                                    <h2 class="text-uppercase">Project Name</h2>
                                    <p class="item-intro text-muted">Lorem ipsum dolor sit amet consectetur.</p>
                                    <img class="img-fluid d-block mx-auto" src="assets/img/portfolio/2.jpg" alt="..." />
                                    <p>Use this area to describe your project. Lorem ipsum dolor sit amet, consectetur
                                        adipisicing elit. Est blanditiis dolorem culpa incidunt minus dignissimos
                                        deserunt
                                        repellat aperiam quasi sunt officia expedita beatae cupiditate, maiores
                                        repudiandae,
                                        nostrum, reiciendis facere nemo!</p>
                                    <ul class="list-inline">
                                        <li>
                                            <strong>Client:</strong>
                                            Explore
                                        </li>
                                        <li>
                                            <strong>Category:</strong>
                                            Graphic Design
                                        </li>
                                    </ul>
                                    <button class="btn btn-primary btn-xl text-uppercase" data-bs-dismiss="modal"
                                        type="button">
                                        <i class="fas fa-xmark me-1"></i>
                                        Close Project
                                    </button>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!-- Portfolio item 3 modal popup-->
        <div class="portfolio-modal modal fade" id="portfolioModal3" tabindex="-1" role="dialog" aria-hidden="true">
            <div class="modal-dialog">
                <div class="modal-content">
                    <div class="close-modal" data-bs-dismiss="modal"><img src="assets/img/close-icon.svg"
                            alt="Close modal" /></div>
                    <div class="container">
                        <div class="row justify-content-center">
                            <div class="col-lg-8">
                                <div class="modal-body">
                                    <!-- Project details-->
                                    <h2 class="text-uppercase">Project Name</h2>
                                    <p class="item-intro text-muted">Lorem ipsum dolor sit amet consectetur.</p>
                                    <img class="img-fluid d-block mx-auto" src="assets/img/portfolio/3.jpg" alt="..." />
                                    <p>Use this area to describe your project. Lorem ipsum dolor sit amet, consectetur
                                        adipisicing elit. Est blanditiis dolorem culpa incidunt minus dignissimos
                                        deserunt
                                        repellat aperiam quasi sunt officia expedita beatae cupiditate, maiores
                                        repudiandae,
                                        nostrum, reiciendis facere nemo!</p>
                                    <ul class="list-inline">
                                        <li>
                                            <strong>Client:</strong>
                                            Finish
                                        </li>
                                        <li>
                                            <strong>Category:</strong>
                                            Identity
                                        </li>
                                    </ul>
                                    <button class="btn btn-primary btn-xl text-uppercase" data-bs-dismiss="modal"
                                        type="button">
                                        <i class="fas fa-xmark me-1"></i>
                                        Close Project
                                    </button>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!-- Portfolio item 4 modal popup-->
        <div class="portfolio-modal modal fade" id="portfolioModal4" tabindex="-1" role="dialog" aria-hidden="true">
            <div class="modal-dialog">
                <div class="modal-content">
                    <div class="close-modal" data-bs-dismiss="modal"><img src="assets/img/close-icon.svg"
                            alt="Close modal" /></div>
                    <div class="container">
                        <div class="row justify-content-center">
                            <div class="col-lg-8">
                                <div class="modal-body">
                                    <!-- Project details-->
                                    <h2 class="text-uppercase">Project Name</h2>
                                    <p class="item-intro text-muted">Lorem ipsum dolor sit amet consectetur.</p>
                                    <img class="img-fluid d-block mx-auto" src="assets/img/portfolio/4.jpg" alt="..." />
                                    <p>Use this area to describe your project. Lorem ipsum dolor sit amet, consectetur
                                        adipisicing elit. Est blanditiis dolorem culpa incidunt minus dignissimos
                                        deserunt
                                        repellat aperiam quasi sunt officia expedita beatae cupiditate, maiores
                                        repudiandae,
                                        nostrum, reiciendis facere nemo!</p>
                                    <ul class="list-inline">
                                        <li>
                                            <strong>Client:</strong>
                                            Lines
                                        </li>
                                        <li>
                                            <strong>Category:</strong>
                                            Branding
                                        </li>
                                    </ul>
                                    <button class="btn btn-primary btn-xl text-uppercase" data-bs-dismiss="modal"
                                        type="button">
                                        <i class="fas fa-xmark me-1"></i>
                                        Close Project
                                    </button>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!-- Portfolio item 5 modal popup-->
        <div class="portfolio-modal modal fade" id="portfolioModal5" tabindex="-1" role="dialog" aria-hidden="true">
            <div class="modal-dialog">
                <div class="modal-content">
                    <div class="close-modal" data-bs-dismiss="modal"><img src="assets/img/close-icon.svg"
                            alt="Close modal" /></div>
                    <div class="container">
                        <div class="row justify-content-center">
                            <div class="col-lg-8">
                                <div class="modal-body">
                                    <!-- Project details-->
                                    <h2 class="text-uppercase">Project Name</h2>
                                    <p class="item-intro text-muted">Lorem ipsum dolor sit amet consectetur.</p>
                                    <img class="img-fluid d-block mx-auto" src="assets/img/portfolio/5.jpg" alt="..." />
                                    <p>Use this area to describe your project. Lorem ipsum dolor sit amet, consectetur
                                        adipisicing elit. Est blanditiis dolorem culpa incidunt minus dignissimos
                                        deserunt
                                        repellat aperiam quasi sunt officia expedita beatae cupiditate, maiores
                                        repudiandae,
                                        nostrum, reiciendis facere nemo!</p>
                                    <ul class="list-inline">
                                        <li>
                                            <strong>Client:</strong>
                                            Southwest
                                        </li>
                                        <li>
                                            <strong>Category:</strong>
                                            Website Design
                                        </li>
                                    </ul>
                                    <button class="btn btn-primary btn-xl text-uppercase" data-bs-dismiss="modal"
                                        type="button">
                                        <i class="fas fa-xmark me-1"></i>
                                        Close Project
                                    </button>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!-- Portfolio item 6 modal popup-->
        <div class="portfolio-modal modal fade" id="portfolioModal6" tabindex="-1" role="dialog" aria-hidden="true">
            <div class="modal-dialog">
                <div class="modal-content">
                    <div class="close-modal" data-bs-dismiss="modal"><img src="assets/img/close-icon.svg"
                            alt="Close modal" /></div>
                    <div class="container">
                        <div class="row justify-content-center">
                            <div class="col-lg-8">
                                <div class="modal-body">
                                    <!-- Project details-->
                                    <h2 class="text-uppercase">Project Name</h2>
                                    <p class="item-intro text-muted">Lorem ipsum dolor sit amet consectetur.</p>
                                    <img class="img-fluid d-block mx-auto" src="assets/img/portfolio/6.jpg" alt="..." />
                                    <p>Use this area to describe your project. Lorem ipsum dolor sit amet, consectetur
                                        adipisicing elit. Est blanditiis dolorem culpa incidunt minus dignissimos
                                        deserunt
                                        repellat aperiam quasi sunt officia expedita beatae cupiditate, maiores
                                        repudiandae,
                                        nostrum, reiciendis facere nemo!</p>
                                    <ul class="list-inline">
                                        <li>
                                            <strong>Client:</strong>
                                            Window
                                        </li>
                                        <li>
                                            <strong>Category:</strong>
                                            Photography
                                        </li>
                                    </ul>
                                    <button class="btn btn-primary btn-xl text-uppercase" data-bs-dismiss="modal"
                                        type="button">
                                        <i class="fas fa-xmark me-1"></i>
                                        Close Project
                                    </button>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        {{-- <script>
            @import url("https://cdn.jsdelivr.net/npm/bootstrap-icons@1.11.3/font/bootstrap-icons.min.css");
        </script> --}}
        <!-- Bootstrap core JS-->
        <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/js/bootstrap.bundle.min.js"></script>
        <!-- Core theme JS-->
        <script src="js/scripts.js"></script>
        <!-- * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * *-->
        <!-- * *                               SB Forms JS                               * *-->
        <!-- * * Activate your form at https://startbootstrap.com/solution/contact-forms * *-->
        <!-- * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * *-->
        <script src="https://cdn.startbootstrap.com/sb-forms-latest.js"></script>
</body>

</html>