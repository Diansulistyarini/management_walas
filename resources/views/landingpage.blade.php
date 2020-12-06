<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="{{asset('landing_page/style.css')}}">
    <link href='https://cdn.jsdelivr.net/npm/boxicons@2.0.7/css/boxicons.min.css' rel='stylesheet'>
    <link href="https://fonts.googleapis.com/css2?family=Nunito:wght@600&display=swap" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css2?family=Rubik:wght@400;500&display=swap" rel="stylesheet">
    <title>Landing Page</title>
</head>
<body>
    <div class="warp">
        <header>
            <div class="logo">SMK Taruna Bhakti</div>
            <div class="menu">
                <ul>
                    <li><a href="{{ route('login') }}">Login</a></li>
                </ul>
            </div>
        </header>
    </div>

    <div class="container">
        <div class="content">
            <h3>Untuk memenuhi kebutuhan akan sumber daya manusia yang berkualitas tinggi dalam penguasaan IPTEK yang didasari semangat iman dan taqwa, SMK Taruna Bhakti Depok dirancang untuk membekali siswa agar menguasai ilmu pengetahuan khususnya dalam bidang Teknologi Informasi dan Komunikasi  yang berkualitas, serta memiliki kecakapan hidup. Program pembelajaran SMK Taruna Bhakti  memberi perhatian khusus (ciri khas) pada penguasaan TIK khususnya bidang Teknik Komputer dan Jaringan (TKJ), Multimedia (MM) serta Rekaya Perangkat Lunak (RPL)  dengan menggunakan kurikulum Nasional yang secara inovatif diperkaya oleh SMK Taruna Bhakti berdasarkan VISI, MISI, TUJUAN serta TARGET SMK Taruna Bhakti.</h3>
            {{-- <h1>Lorem ipsum dolor sit amet consectetur adipisicing elit. Dolore tempore nam nesciunt</h1> --}}
            <div class="btn-group">
                <a href="admin" class="color1">Get Manage</a>
                <!-- <a href="#">Learn more</a> -->
            </div>
        </div>
    
        <div class="gif">
            <img src="{{asset('landing_page/blue-office.jpg')}}" class="animated infinite jello" style="width: 500px;">
        </div>
    </div>

    <div class="about-title">
        <center>
            <h2 style="margin-top: 2px">About</h2>
        </center> 
    </div>

    <div class="about">
        <div class="about-inner">
            <h1 style="margin-top: 2cm; font-weight:bold;">Apa itu Starbhak Management?</h1>
            <br>
            <p>
                Starbhak Management adalah aplikasi Management Walas, yang dibuat dengan Laravel. Fungsi Aplikasi Management Walas ini merupakan sebuah Aplikasi sederhana yang digunakan untuk menyusun laporan Administrasi Kelas, Administrasi Siswa dan Administrasi Pembelajaran , jadi pada dasarnya aplikasi ini sangat lengkap sehingga sangat cocok untuk Wali Kelas. Di aplikasi ini Wali Kelas dapat meng-input data. Jadi Wali Kelas bisa meng-input data siswanya serta data-data kegiatan yang telah dilaksanakan perkelas.
            </p>
        </div>
        <div class="about-image">
            <img src="{{asset('landing_page/about-img.png')}}" alt="gambar" style="width: 500px;">
        </div>
    </div>

    <div class="other-title">
        <center>
            <h2 style="margin-top: 2px">Other</h2>
        </center> 
    </div>

    <div class="other">
        <div class="other-image">
            <img src="{{asset('landing_page/other-img.png')}}" alt="gambar" style="width: 500px;">
        </div>
        <div class="other-inner">
            <h1 style="margin-top: 3cm;font-weight:bold;">Apa aja sih Fitur dari Starbhak Management?</h1>
            <br>
            <h2>
                Dalam Aplikasi  Management Walas ini terdapat beberapa Fitur antara lain sebagai berikut ; Fitur Landing page. Dashborad Walas & Admin, Data Adm, Data Absensi Siswa, Data Kelas, Data Jadwal, Data Keuangan Kelas, Data Rapat Ortu, dan Data Kasus Siswa.
            </h2>
        </div>
    </div>
</body>
</html>