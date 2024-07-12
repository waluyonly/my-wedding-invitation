<!doctype html>
<html lang="en">

<head>
    <link rel="shortcut icon" href="{{ asset('favicon.png') }}" type="image/png">
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, user-scalable=no" />
    <meta name="description" content="Wedding Sitronella & Waluyo. 10 Agustus 2024 di Asrama Haji Bandar Lampung.">
    <meta name="author" content="">
    <meta name="email" content="">
    <meta name="copyright" content="" />
    <meta property="og:type" content="website" />
    <meta property="og:title"
        content="Wedding Invitation Sitronella & Waluyo | 10 Agustu 2024 | Asrama Haji, Bandar Lampung" />
    <meta property="og:description"
        content="Wedding Sitronella & Waluyo. 10 Agustus 2024 di Asrama Haji Bandar Lampung." />
    <meta property="og:image" content="{{ asset('images/wedding.png') }}" />
    <meta property="og:url" content="{{ env('APP_URL') }}" />
    <meta property="og:site_name" content="Wedding Invitation Sitronella & Waluyo | 10 Agustu 2024" />
    <meta name="twitter:card" content="website">
    <meta name="twitter:site" content="Wedding Invitation Sitronella & Waluyo | 10 Agustu 2024">
    <meta name="twitter:title" content="Wedding Invitation Sitronella & Waluyo | 10 Agustu 2024">
    <meta name="twitter:description"
        content="Wedding Sitronella & Waluyo. 10 Agustus 2024 di Asrama Haji Bandar Lampung.">
    <meta name="twitter:creator" content="">
    <meta name="twitter:image" content="">
    <meta name="csrf-token" content="{{ csrf_token() }}" />

    <title>Sitronella & Waluyo Wedding</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/fontawesome-free-6.2.1@6.2.1/css/all.min.css">

    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link
        href="https://fonts.googleapis.com/css2?family=Sacramento&family=Work+Sans:wght@100;300;400;600;700&display=swap"
        rel="stylesheet">
    <link href="https://fonts.googleapis.com/css2?family=Engagement&display=swap" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css2?family=Parisienne&display=swap" rel="stylesheet">

    <!-- Bootstrap Icons -->
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.10.5/font/bootstrap-icons.css">
    <link rel="stylesheet" href="{{ asset('vendors/sakura/sakura.css') }}">
    <link rel="stylesheet" href="{{ asset('css/style.css') }}">

    <!-- simplyCountdown -->
    <link rel="stylesheet" href="{{ asset('vendors/countdown/simplyCountdown.theme.default.css') }}" />


</head>

<body>
    <div class="sakura-falling"></div>

    <section id="hero"
        class="hero w-100 h-100 p-3 mx-auto text-center d-flex justify-content-center align-items-center">
        <main>
            <h3>Walimatul 'Ursy</h3>
            <h1>Sitronella & Waluyo</h1>
            <p>Kepada Bapak/Ibu/Saudara/i</p>
            @if (@$undangan)
                <h2>{{ @$undangan }}</h2>
            @endif
            <a href="javascript:void(0)" class="btn btn-lg mt-4 buka-undangan"> <i class="fa fa-envelope-open"></i> Buka
                Undangan</a>
        </main>
    </section>

    <section id="home" class="home">
        <div class="container">
            <div class="text-center">
                <h3>Walimatul 'Ursy</h3>
                <h1>Sitronella & Waluyo</h1>
                <h4>-- Sabtu, 10 Agustus 2024 --</h4>
                <div class="simply-countdown text-center"></div>
                <br><br>
                <span class="save-date"> <i class="fa fa-calendar"></i> Save the date</span>
            </div>
        </div>
    </section>

    <section id="undangan" class="undangan">
        <div class="card">
            <div class="card-body">
                <div class="text-center">
                    <h3 class="bismillah">بِسْمِ ٱللَّٰهِ ٱلرَّحْمَٰنِ ٱلرَّحِيمِ</h3>
                    <p>Dengan memohon rahmat dan ridho Allah Subhanahu wa Ta'ala, yang telah menciptakan makhluk-Nya
                        berpasang-pasangan. Kami bermaksud menyeleggarakan acara pernikahan: </p>
                </div>
                <div class="row justify-content-center">
                    <div class="col-xl-5 col-md-5 col-sm-12 text-center mb-5">
                        <div class="mempelai">
                            <img src="{{ asset('images/wanita.png') }}" alt="" srcset="">
                        </div>
                        <h3>Sitronella N H, S.T., M.T</h3>
                        <p>Putri dari <br> Bapak Ir. Rosid Hasim dan Dra. Desi Widianti</p>
                    </div>
                    <div class="col-xl-2 col-md-2 col-sm12 text-center">
                        <span class="heart"><i class="bi bi-heart-fill"></i></span>
                    </div>
                    <div class="col-xl-5 col-md-5 col-sm-12 text-center mb-5">
                        <div class="mempelai">
                            <img src="{{ asset('images/pria.png') }}" alt="" srcset="">
                        </div>
                        <h3>Waluyo, S.T</h3>
                        <p>Putra dari <br> Bapak Sariman dan Ibu Paniyem</p>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <section id="info" class="info">
        <div class="container">
            <div class="row justify-content-center mt-4">
                <div class="text-center">
                    <h2>Acara</h2>
                    <p>InsyaAllah rangkaian acara akan diselenggarakan pada:</p>
                </div>
                <div class="col-md-5 col-10">
                    <div class="card text-center text-bg-light mb-5">
                        <div class="card-header">Akad Nikah</div>
                        <div class="card-body">
                            <div class="row justify-content-center">
                                <div class="col-md-6">
                                    <i class="bi bi-calendar3 d-block"></i>
                                    <span>10 Agustus 2024</span>
                                </div>
                                <div class="col-md-6">
                                    <i class="bi bi-clock d-block"></i>
                                    <span>08.00 - selesai</span>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-md-5 col-10">
                    <div class="card text-center text-bg-light">
                        <div class="card-header">Resepsi</div>
                        <div class="card-body">
                            <div class="row justify-content-center">
                                <div class="col-md-6">
                                    <i class="bi bi-calendar3 d-block"></i>
                                    <span>10 Agustus 2024</span>
                                </div>
                                <div class="col-md-6">
                                    <i class="bi bi-clock d-block"></i>
                                    <span>10.00 - 14:00</span>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>

            <div class="row justify-content-center">
                <div class="col-md-8 col-10 text-center">
                    <h2>Lokasi Acara</h2>
                    <p class="alamat">Gedung Madinatul Hujjaj Asrama Haji<br>
                        Jl. Soekarno - Hatta No.36, Rajabasa Raya, Kec. Rajabasa, Kota Bandar Lampung
                    </p>
                    <img class="img-alamat" src="{{ asset('images/qrcode-alamat.png') }}" alt=""
                        width="40%"><br>
                    <a href="https://maps.app.goo.gl/gWfDaBzJBReQhEGw7" target="_blank"
                        class="btn btn-light btn-sm my-3">Scan di atas atau klik di sini untuk
                        membuka peta</a>
                </div>
            </div>
        </div>
    </section>

    {{-- <section id="tema" class="tema">
        <div class="container">
            <div class="row justify-content-center">
            </div>
        </div>
    </section> --}}

    <section id="rsvp" class="rsvp">
        <div class="container">
            <div class="row justify-content-center">
                <div class="col-md-8 col-10 text-center">
                    <h2>Konfirmasi Kehadiran</h2>
                    <p>Isi form di bawah ini untuk melakukan konfirmasi kehadiran.</p>
                </div>
            </div>
            <div class="row row-cols-md-auto g-3 align-items-center justify-content-center">
                <div class="col-12">
                    <div class="mb-3">
                        <label for="nama" class="form-label">Nama</label>
                        <input type="text" class="form-control" id="nama">
                    </div>
                </div>
                <div class="col-12">
                    <div class="mb-3">
                        <label for="jumlah" class="form-label">Jumlah</label>
                        <input type="number" class="form-control" id="jumlah" min="1" max="5"
                            length="1" value="1">
                    </div>
                </div>
                <div class="col-12">
                    <div class="mb-3">
                        <label for="status" class="form-label">Konfirmasi</label>
                        <select id="status" class="form-select">
                            <option value="" selected>Pilih salah satu</option>
                            <option value="Hadir">Hadir</option>
                            <option value="Tidak Hadir">Tidak Hadir</option>
                        </select>
                    </div>
                </div>
                <div class="col-12" style="margin-top: 35px;">
                    <button class="btn btn-primary btn-kirim" data-url="{{ route('konfirmasi') }}">Kirim</button>
                </div>
            </div>
        </div>
    </section>
    <div class="music" style="display: none;">
        <audio src="{{ asset('audio/audio.mp3') }}" id="my_audio" loop="loop"></audio>
    </div>
    <footer>
        <div class="container">
            <div class="row">
                <div class="col text-center">
                    <small class="block">&copy; 2024 Wedding Sitronella & Walluyo</small>
                </div>
            </div>
        </div>
    </footer>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js"
        integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz" crossorigin="anonymous">
    </script>
    <script src="https://cdn.jsdelivr.net/npm/fontawesome-free-6.2.1@6.2.1/js/all.min.js"></script>

    <script src="https://cdn.jsdelivr.net/npm/sweetalert2@11"></script>
    <script src='https://cdnjs.cloudflare.com/ajax/libs/jquery/3.4.1/jquery.min.js'></script>
    <script src="{{ asset('vendors/countdown/simplyCountdown.min.js') }}"></script>
    <script src="{{ asset('vendors/sakura/sakura.js') }}"></script>

    <script type="text/javascript">
        $(document).ready(function() {
            $("body,html").css({
                "overflow": "hidden"
            });

            $(".buka-undangan").on('click', function() {
                $("body,html").css({
                    "overflow": "auto"
                });
                setTimeout(() => {
                    document.getElementById("home").scrollIntoView();
                }, 100);
            });

            $.ajaxSetup({
                headers: {
                    'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
                }
            });

            setTimeout(() => {
                $("#my_audio").get(0).play();
            }, 100);

            var sakura = new Sakura('body', {
                colors: [{
                        gradientColorStart: 'rgba(255, 183, 197, 0.9)',
                        gradientColorEnd: 'rgba(255, 197, 208, 0.9)',
                        gradientColorDegree: 120,
                    },
                    {
                        gradientColorStart: 'rgba(255,189,189)',
                        gradientColorEnd: 'rgba(227,170,181)',
                        gradientColorDegree: 120,
                    },
                    {
                        gradientColorStart: 'rgba(212,152,163)',
                        gradientColorEnd: 'rgba(242,185,196)',
                        gradientColorDegree: 120,
                    },
                ],
                delay: 200,
            });

            $(document).on('click', '.btn-kirim', function() {
                var nama = $('#nama').val(),
                    jumlah = $('#jumlah').val(),
                    status = $('#status').val(),
                    url = $(this).data('url');
                if (nama != '' && status != '') {
                    $.ajax({
                        url: url,
                        type: 'POST',
                        dataType: 'json',
                        data: {
                            'nama': nama,
                            'jumlah': jumlah,
                            'status': status
                        },
                        success: function(response) {
                            if (response.status == 'success') {
                                Swal.fire({
                                    icon: "success",
                                    title: response.message,
                                });
                            } else {
                                Swal.fire({
                                    icon: "warning",
                                    title: "Konfirmasi gagal!",
                                    text: response.message,
                                });
                            }
                        }
                    });
                } else {
                    Swal.fire({
                        icon: "warning",
                        title: "Konfirmasi gagal!",
                        text: "Nama dan status kehadiran wajib diisi!",
                    });
                }
            });

            simplyCountdown('.simply-countdown', {
                year: 2024,
                month: 8,
                day: 10,
                hours: 8, // Default is 0 [0-23] integer
                words: {
                    days: {
                        singular: 'hari',
                        plural: 'hari'
                    },
                    hours: {
                        singular: 'jam',
                        plural: 'jam'
                    },
                    minutes: {
                        singular: 'menit',
                        plural: 'menit'
                    },
                    seconds: {
                        singular: 'detik',
                        plural: 'detik'
                    }
                },
            });
        });
    </script>
</body>

</html>
