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

    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link
        href="https://fonts.googleapis.com/css2?family=Sacramento&family=Work+Sans:wght@100;300;400;600;700&display=swap"
        rel="stylesheet">

    <!-- simplyCountdown -->
    <link rel="stylesheet" href="{{ asset('vendors/countdown/simplyCountdown.theme.default.css') }}" />
    <script src="{{ asset('vendors/countdown/simplyCountdown.min.js') }}"></script>

    <!-- Bootstrap Icons -->
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.10.5/font/bootstrap-icons.css">
    <link rel="stylesheet" href="{{ asset('vendors/sakura/sakura.css') }}">
    <link rel="stylesheet" href="{{ asset('css/style.css') }}">

</head>

<body>
    <div class="sakura-falling"></div>

    <section id="hero"
        class="hero w-100 h-100 p-3 mx-auto text-center d-flex justify-content-center align-items-center">
        <main>
            <h3>Walimatul 'Ursy</h3>
            <h1>Sitronella & Waluyo</h1>
            <p>Kepada Bapak/Ibu/Saudara/i<br>
                @if (@$undangan)
                    <button class="btn btn-outline-secondary" style="font-size: 28pt;"
                        disabled>{{ @$undangan }}</button> <br>
                @endif
                Kami mengundang Anda untuk hadir di acara pernikahan kami.
            </p>
            <h2>10 | 08 | 2024</h2>
            <div class="simply-countdown"></div>
            <a href="#home" class="btn btn-lg mt-4">Buka undangan</a>
        </main>
    </section>

    <section id="home" class="home">
        <div class="container">
            <div class="row justify-content-center">
                <div class="col-md-8 text-center">
                    <h3><i>Bismillahirrahmanirrahim</i></h3>
                    <p>Dengan memohon rahmat dan ridho Allah Subhanahu wa Ta'ala, yang telah menciptakan makhluk-Nya
                        berpasang-pasangan. Kami bermaksud menyeleggarakan pernikahan kami: </p>
                </div>
            </div>

            <div class="row couple text-center">
                <div class="col">
                    <h3>Sitronella N H, S.T., M.T</h3>
                    <p>Putri dari <br> Bapak Ir. Rosid Hasim dan Dra. Desi Widianti</p>
                </div>

                <span class="heart"><i class="bi bi-heart-fill"></i></span>


                <div class="col">
                    <h3>Waluyo, S.T</h3>
                    <p>Putra dari <br> Bapak Sariman dan Ibu Paniyem</p>
                </div>
            </div>
        </div>
    </section>

    <section id="info" class="info">
        <div class="container">
            <div class="row justify-content-center mt-4">
                <div class="text-center">
                    <h2>- Save the Date -</h2>
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
                                    <span>10 Agustu 2024</span>
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
                    <p class="alamat">Alamat: Gedung Asrama Haji Lampung <br>
                        Jl. Soekarno - Hatta No.36, Rajabasa Raya, Kec. Rajabasa, Kota Bandar Lampung
                    </p>
                    <img src="{{ asset('images/qrcode-alamat.png') }}" alt="" width="500">
                    <a href="https://maps.app.goo.gl/gWfDaBzJBReQhEGw7" target="_blank"
                        class="btn btn-light btn-sm my-3">Scan di atas atau klik di sini untuk
                        membuka peta</a>
                </div>
            </div>
        </div>
    </section>

    <section id="tema" class="tema">
        <div class="container">
            <div class="row justify-content-center">
                <div class="text-center">
                    <h2>Adab-Adab Walimah</h2>
                    <p>Tanpa mengurangi rasa hormat, ada adab seorang muslim ketika menghadiri walimah yang harus
                        diperhatikan :</p>
                </div>
                <div class="container text-center">
                    <div class="row">
                        <div class="col">
                            <p>1. Memakai pakaian yang sopan dan menutup aurat.</p>
                        </div>
                        <div class="col">
                            <p>2. Memperhatikan waktu sholat.</p>
                        </div>
                        <div class="col">
                            <p>3. Mendoakan kedua mempelai.</p>
                        </div>
                    </div>
                    <div class="row">
                        <div class="col">
                            <p>4. Memperhatikan adab makan.</p>
                        </div>
                        <div class="col">
                            <p>5. Tidak berjabat tangan dengan yang bukan mahrom.</p>
                        </div>
                    </div>
                    <div class="row">
                        <div class="col">
                            <b>
                                <p>7. Ruangan terpisah antara Tamu Ikhwan dan Akhwat.</p>
                            </b>
                        </div>
                    </div>
                    <p class="text-center">Atas perhatian dan pengertiannya, kami mengucapkan terima kasih.
                        <br>Jazaakumullahu Khayran
                    </p>
                </div>
            </div>

            <div class="row justify-content-center mt-4">
                <div class="text-center">
                    <h2> - Doa untuk Pengantin - </h2>
                    <p>Barakallahu laka wa baraka ‘alaika wa jama’a bainakuma fi khayr<br>
                        “Semoga Allah memberikan keberkahan padamu dan mengumpulkan kalian berdua dalam kebaikan”</p>
                </div>
            </div>
        </div>
    </section>

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
    <script src="https://cdn.jsdelivr.net/npm/sweetalert2@11"></script>
    <script src='https://cdnjs.cloudflare.com/ajax/libs/jquery/3.4.1/jquery.min.js'></script>
    <script src="{{ asset('vendors/sakura/sakura.js') }}"></script>

    <script type="text/javascript">
        $(document).ready(function() {
            $.ajaxSetup({
                headers: {
                    'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
                }
            });

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

            $(document).on('click', function() {
                document.getElementById("my_audio").play();
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
