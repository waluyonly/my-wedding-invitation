<!DOCTYPE html>
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
    <meta property="og:title" content="Wedding Invitation Sitronella & Waluyo | 10 Agustu 2024 | Asrama Haji, Bandar Lampung" />
    <meta property="og:description" content="Wedding Sitronella & Waluyo. 10 Agustus 2024 di Asrama Haji Bandar Lampung." />
    <meta property="og:image" content="" />
    <meta property="og:url" content="" />
    <meta property="og:site_name" content="Wedding Invitation Sitronella & Waluyo | 10 Agustu 2024" />
    <meta name="twitter:card" content="website">
    <meta name="twitter:site" content="Wedding Invitation Sitronella & Waluyo | 10 Agustu 2024">
    <meta name="twitter:title" content="Wedding Invitation Sitronella & Waluyo | 10 Agustu 2024">
    <meta name="twitter:description" content="Wedding Sitronella & Waluyo. 10 Agustus 2024 di Asrama Haji Bandar Lampung.">
    <meta name="twitter:creator" content="">
    <meta name="twitter:image" content="">

    <title>Wedding Invitation | 10 Agustus 2024 | Asrama Haji, Bandar Lampung</title>

    <link href="https://fonts.googleapis.com/css?family=Arvo" rel="stylesheet">
    <link rel='stylesheet' href='https://fonts.googleapis.com/css?family=Dancing+Script&amp;display=swap'>
    <link rel="stylesheet" href="{{ asset('css/style.css')}}">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
</head>

<body>
    <!-- partial:index.partial.html -->
    <div class="sakura-falling"></div>
    <img src="{{ asset('images/right.png') }}" alt="image-top-right" class="top-right-decoration">
    <img src="{{ asset('images/left.png') }}" alt="image-top-left" class="top-left-decoration">
    <section id="media"></section>
    <div class="wrap">
        <div class="title">
            <h1>Sitronella </h1>
            <h2>&</h2>
            <h1>Waluyo</h1>
            <h3>akan menikah</h3>
            <p>
                pada <span class="date">10 Agustus 2024</span></29>, di <span class="place">Asrama Haji</span>
                Bandar Lampung
            </p>
        </div>
    </div>
    <div id="time"></div>
    <p class="dance-med">
        Mohon Do'a & Restu
    </p>
    <div class="actions">
        <a href="https://maps.app.goo.gl/gWfDaBzJBReQhEGw7" target="_blank">
            <div class="venue">LIHAT MAPS</div>
        </a>
        <a href=""
            download="Undangan | 10 Agustus 2024 | Kami harap anda dapat menghadiri undangan kami ini!">
            <div class="venue">BUKA UNDANGAN</div>
        </a>
    </div>
    <p class="footer">
        Resepsi pernikahan akan diadakan secara syar'i! <br>
        Tempat duduk tamu laki-laki dan perempuan akan dipisah!
        <span></span>
    </p>
    <div class="music">
        <audio src="{{ asset('audio/audio.mp3') }}" id="my_audio" loop="loop"></audio>
    </div>
    <p class="happiness">Semoga anda dapat hadir pada hari pernikahan kami!<br><a href="" target="_blank"
            class="love"><i class="fa fa-heart"></i></a></p>
    <!-- partial -->
    <script src='https://cdnjs.cloudflare.com/ajax/libs/jquery/3.4.1/jquery.min.js'></script>
    <script src='https://cdn.jsdelivr.net/gh/timoschaefer/jQuery-Sakura/jquery-sakura.min.js'></script>
    <script src="{{ asset('js/script.js')}}"></script>
</body>
</html>
