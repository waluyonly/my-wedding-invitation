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
        content="Wedding Invitation Sitronella & Waluyo | 10 Agustus 2024 | Asrama Haji, Bandar Lampung" />
    <meta property="og:description"
        content="Wedding Sitronella & Waluyo. 10 Agustus 2024 di Asrama Haji Bandar Lampung." />
    <meta property="og:image" content="{{ asset('images/wedding.png') }}" />
    <meta property="og:url" content="{{ env('APP_URL') }}?undangan=" />
    <meta property="og:site_name" content="Wedding Invitation Sitronella & Waluyo | 10 Agustus 2024" />
    <meta name="twitter:card" content="website">
    <meta name="twitter:site" content="Wedding Invitation Sitronella & Waluyo | 10 Agustus 2024">
    <meta name="twitter:title" content="Wedding Invitation Sitronella & Waluyo | 10 Agustus 2024">
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

    <!-- simplyCountdown -->
    <link rel="stylesheet" href="{{ asset('vendors/countdown/simplyCountdown.css') }}" />

    <link rel="stylesheet" href="{{ asset('css/style.css') }}">


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
                <div class="countdown">
                    <div class="simply-countdown"></div>
                </div>
                <br><br>
                <span class="save-date"> <i class="fa fa-calendar"></i> Save the date</span>
            </div>
        </div>
    </section>

    <section id="undangan" class="undangan">
        <div class="content">
            <div class="text-center mt-5">
                <h3 class="bismillah">بِسْمِ ٱللَّٰهِ ٱلرَّحْمَٰنِ ٱلرَّحِيمِ</h3>
                <p class="mb-3">Dengan memohon rahmat dan ridho Allah Subhanahu wa Ta'ala, yang telah menciptakan
                    makhluk-Nya
                    berpasang-pasangan. Kami bermaksud menyeleggarakan acara pernikahan: </p>
            </div>
            <div class="row justify-content-center mb-5">
                <div class="col-xl-5 col-md-5 col-sm-12 text-center wanita">
                    <div class="mempelai">
                        <img src="{{ asset('images/wanita.png') }}" alt="" srcset="">
                    </div>
                    <h3>Sitronella Nurfitriani Hasim</h3>
                    <p class="orangtua">Putri dari <br> Bapak Rosid Hasim dan Ibu Desi Widianti</p>
                </div>
                <div class="col-xl-2 col-md-2 col-sm12 text-center heart">
                    <span><i class="bi bi-heart-fill heartbeat"></i></span>
                    <span><i class="bi bi-heart-fill heartecho"></i></span>
                </div>
                <div class="col-xl-5 col-md-5 col-sm-12 text-center pria">
                    <div class="mempelai">
                        <img src="{{ asset('images/pria.png') }}" alt="" srcset="">
                    </div>
                    <h3>Waluyo</h3>
                    <p class="orangtua">Putra dari <br> Bapak Sariman dan Ibu Paniyem</p>
                </div>
            </div>
        </div>
    </section>

    <section id="info" class="info">
        <div class="content mt-5">
            <div class="row justify-content-center mb-5">
                <div class="text-center">
                    <h2 class="text-center">Acara</h2>
                    <p>InsyaAllah rangkaian acara akan diselenggarakan pada:</p>
                </div>
                <div class="col-xl-6 col-md-6 col-sm-12">
                    <div class="card info-waktu text-center mb-5">
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
                <div class="col-xl-6 col-md-6 col-sm-12">
                    <div class="card info-waktu text-center">
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

            <div class="row text-center himbauan">
                <img src="{{ asset('images/tamu.svg') }}" alt="" srcset="">
                <p class="text-center">Tamu Undangan Ikhwan & Akhwat dipisah</p>
            </div>

            <div class="row justify-content-center lokasi mb-5">
                <div class="col-md-8 col-10 text-center">
                    <h2 class="text-center">Lokasi Acara</h2>
                    <p class="alamat">Gedung Madinatul Hujjaj Asrama Haji<br>
                        Jl. Soekarno - Hatta No.36, Rajabasa Raya, Kec. Rajabasa, Kota Bandar Lampung
                    </p>
                    <img class="img-alamat" src="{{ asset('images/qrcode-alamat.png') }}" alt=""
                        width="40%"><br>
                    <a href="https://maps.app.goo.gl/gWfDaBzJBReQhEGw7" target="_blank"
                        class="btn btn-sm mt-3 scan-map">Scan di atas atau klik di sini untuk
                        membuka peta</a>
                </div>
            </div>

            @if (env('ADAB') == true)
                <div class="note">
                    <h2 class="text-center">Adab Walimah</h2>
                    <p class="text-center">Tanpa mengurangi rasa hormat, ada hal-hal dalam adab seorang muslim ketika
                        menghadiri walimah yang harus diperhatikan :</p>
                    <div class="point"> <i class="fa fa-check"></i> Memakai pakaian yang sopan dan menutup aurat</div>
                    <div class="point"> <i class="fa fa-check"></i> Memperhatikan waktu sholat</div>
                    <div class="point"> <i class="fa fa-check"></i> Mendoakan kedua mempelai</div>
                    <div class="point"> <i class="fa fa-check"></i> Memperhatikan adab makan</div>
                    <div class="point"> <i class="fa fa-check"></i> Tidak berjabat tangan dengan yang bukan mahrom</div>
                </div>
            @endif
        </div>
    </section>

    <section id="ucapan" class="ucapan">
        <div class="content">
            <div class="row form-ucapan">
                <div class="text-center mb-2">
                    <h2 class="text-center">Ucapan dan Do'a</h2>
                </div>
                <input type="text" id="nama_pengirim" class="form-control mb-3" placeholder="Nama">
                <textarea id="ucapan_pengirim" class="form-control mb-3" cols="30" rows="10"
                    placeholder="Tulis ucapan dan do'a..."></textarea>
                <button class="btn w-100 kirim-ucapan" data-url="{{ route('ucapan') }}">Kirim</button>
            </div>
            <div class="row pesan-ucapan">
                @foreach ($ucapan as $u)
                    <div class="box-ucapan py-2">
                        <div class="pengirim-ucapan">{{ $u->pengirim }}</div>
                        <p class="isi-ucapan">{{ $u->ucapan }}</p>
                        <small class="waktu-ucapan">{{ $u->created_at->diffForHumans() }}</small>
                    </div>
                @endforeach
            </div>
        </div>
    </section>
    
    @if (env('HADIAH') == true)
        <section id="hadiah" class="hadiah">
            <div class="content">
                <h2 class="text-center">Kirim Hadiah</h2>
                <p class="text-center">Kehadiran dan doa restu anda merupakan karunia yang sangat berharga bagi kami,
                    namun apabila ingin memberikan hadiah anda dapat mengirimkan ke rekening berikut, Jazakumullahu
                    khayran</p>
                <div class="row justify-content-center">
                    <div class="col-xl-6 col-md-6 col-sm-12 text-center">
                        <img src="{{ asset('images/bni.png') }}" alt="" srcset="">
                        <div class="text-center nama">a.n. Sitro Nella</div>
                        <div class="text-center rekening rekening-bni" id="rekbni">1407556639</div>
                        <div class="text-center mt-2">
                            <a class="salin-rekening salin-bni" data-clipboard-target="#rekbni">Salin nomor
                                rekening</a>
                        </div>
                    </div>
                    <div class="col-xl-6 col-md-6 col-sm-12 text-center">
                        <img src="{{ asset('images/bsi.png') }}" alt="" srcset="">
                        <div class="text-center nama">a.n. Waluyo</div>
                        <div class="text-center rekening rekening-bsi" id="rekbsi">7190099417</div>
                        <div class="text-center mt-2">
                            <a class="salin-rekening salin-bsi" data-clipboard-target="#rekbsi">Salin nomor
                                rekening</a>
                        </div>
                    </div>
                </div>
            </div>
        </section>
    @endif

    <section id="rsvp" class="rsvp">
        <div class="content">
            <div class="form-rsvp">
                <div class=text-center">
                    <h2 class="text-center">Konfirmasi Kehadiran</h2>
                    <p class="text-center">Isi form di bawah ini untuk melakukan konfirmasi kehadiran.</p>
                </div>
            </div>
            <div class="row align-items-center">
                <div class="col-12">
                    <div class="mb-3">
                        <label for="nama" class="form-label">Nama</label>
                        <input type="text" id="nama_rsvp" class="form-control">
                    </div>
                    <div class="col-12">
                        <div class="mb-3">
                            <label for="alamat" class="form-label">Alamat</label>
                            <textarea id="alamat_rsvp" class="form-control" cols="15" rows="10"></textarea>
                        </div>
                    </div>
                    <div class="col-12 mt-3">
                        <div class="form-check">
                            <input type="radio" class="form-check-input" id="hadir" name="optradio"
                                value="hadir" checked>Saya akan hadir
                            <label class="form-check-label" for="hadir"></label>
                        </div>
                        <div class="form-check">
                            <input type="radio" class="form-check-input" id="ragu" name="optradio"
                                value="ragu">Saya masih ragu
                            <label class="form-check-label" for="ragu"></label>
                        </div>
                        <div class="form-check">
                            <input type="radio" class="form-check-input" id="tidak" name="optradio"
                                value="tidak">Maaf, saya tidak bisa hadir
                            <label class="form-check-label" for="tidak"></label>
                        </div>
                    </div>
                    <div class="col-12">
                        <button class="btn w-100 kirim-rsvp" data-url="{{ route('rsvp') }}">Kirim</button>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <section id="penutup" class="penutup">
        <div class="content text-center">
            <p>Merupakan suatu kehormatan dan kebahagiaan bagi kami apabila Bapak/Ibu/Saudara/i berkenan hadir untuk
                memberikan do’a restu kepada kami.</p>

            <p class="ayat">“Dan di antara tanda-tanda kekuasaan-Nya ialah Dia menciptakan untukmu isteri-isteri dari
                jenismu sendiri, supaya kamu merasa tenang dan tentram kepadanya, dan dijadikan-Nya diantaramu rasa
                kasih dan sayang. Sesungguhnya pada yang demikian itu benar-benar terdapat tanda-tanda bagi kaum yang
                berfikir.” <br> (QS. Ar-Rum: 21) </p>

            <p>Kami yang berbahagia,</p>
            <h3 class="mempelai">Sitronella & Waluyo</h3>
        </div>
    </section>

    <button class="playerButton"><i class="fa-solid fa-circle-pause"></i></button>
    <button class="backToTopBtn"><i class="fas fa-angle-up"></i></button>

    <div class="music" style="display: none;">
        <audio src="{{ asset('audio/audio.mp3') }}" id="my_audio" loop="loop" autoplay></audio>
    </div>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js"
        integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz" crossorigin="anonymous">
    </script>
    <script src="https://cdn.jsdelivr.net/npm/fontawesome-free-6.2.1@6.2.1/js/all.min.js"></script>

    <script src="https://cdn.jsdelivr.net/npm/sweetalert2@11"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/clipboard.js/2.0.8/clipboard.min.js"></script>
    <script src='https://cdnjs.cloudflare.com/ajax/libs/jquery/3.4.1/jquery.min.js'></script>
    <script src="{{ asset('vendors/countdown/simplyCountdown.min.js') }}"></script>
    <script src="{{ asset('vendors/sakura/sakura.js') }}"></script>

    <script type="text/javascript">
        var body = document.getElementsByTagName("body")[0];
        body.style.overflow = "hidden";

        $(document).ready(function() {
            $(this).scrollTop(0);

            setTimeout(() => {
                $("#my_audio").get(0).play();
            }, 100);
            var audioState = 'play';

            $.ajaxSetup({
                headers: {
                    'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
                }
            });

            $(".buka-undangan").on('click', function() {
                $("body,html").css({
                    "overflow": "auto"
                });
                setTimeout(() => {
                    document.getElementById("home").scrollIntoView();
                    $(".playerButton").addClass("active").addClass("play");
                    audioState = 'play';
                }, 100);
            });

            $('body').on('click', function() {
                $("#my_audio").get(0).play();
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

            $(document).on('click', '.kirim-rsvp', function() {
                var nama = $('#nama_rsvp').val(),
                    alamat = $('#alamat_rsvp').val(),
                    url = $(this).data('url');

                var status = 'Tidak';
                if ($('#hadir').is(':checked')) {
                    status = 'Hadir';
                } else if ($('#ragu').is(':checked')) {
                    status = 'Ragu';
                }

                if (nama != '' && alamat != '') {
                    $.ajax({
                        url: url,
                        type: 'POST',
                        dataType: 'json',
                        data: {
                            'nama': nama,
                            'alamat': alamat,
                            'status': status
                        },
                        success: function(response) {
                            if (response.status == 'success') {
                                $('#nama_rsvp').val('');
                                $('#alamat_rsvp').val('');
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

            $(document).on('click', '.kirim-ucapan', function() {
                var pengirim = $('#nama_pengirim').val(),
                    ucapan = $('#ucapan_pengirim').val(),
                    url = $(this).data('url');
                if (pengirim != '' && ucapan != '') {
                    $.ajax({
                        url: url,
                        type: 'POST',
                        dataType: 'json',
                        data: {
                            'pengirim': pengirim,
                            'ucapan': ucapan
                        },
                        success: function(response) {
                            if (response.status == 'success') {
                                Swal.fire({
                                    icon: "success",
                                    title: response.message,
                                });
                                setTimeout(() => {
                                    window.location.reload();
                                }, 1000);
                            }
                        }
                    });
                } else {
                    Swal.fire({
                        icon: "warning",
                        title: "Ucapan gagal dikirim!",
                        text: "Nama dan ucapan wajib diisi!",
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

            var clipboard = new ClipboardJS('.salin-rekening');
            clipboard.on('success', function(e) {
                e.clearSelection();
            });

            $(document).on('click', '.playerButton', function(e) {
                e.preventDefault();
                if (audioState == 'play') {
                    audioState = 'pause';
                    $("#my_audio").get(0).pause();
                    $(this).html('<i class="fa-solid fa-circle-play"></i>');
                    $(this).removeClass('play').addClass('pause');
                } else {
                    $("#my_audio").get(0).play();
                    audioState = 'play';
                    $(this).html('<i class="fa-solid fa-circle-pause"></i>');
                    $(this).removeClass('pause').addClass('play');
                }
            })

            function scrollTop() {
                if ($(window).scrollTop() > 500) {
                    $(".backToTopBtn").addClass("active");
                } else {
                    $(".backToTopBtn").removeClass("active");
                }
            }
            $(function() {
                scrollTop();
                $(window).on("scroll", scrollTop);
                $(".backToTopBtn").click(function() {
                    $("html, body").animate({
                        scrollTop: 0
                    }, 1);
                    return false;
                });
            });
        });
    </script>
</body>

</html>
