@extends('frontend.app')

@section('container')
<style>
    html,body{
        max-width: 100%;
        overflow-x: hidden;
    }
    .minyak{
        font-size: 40px;
        color: #029B4B;
        text-transform: uppercase;
        font-weight: 700;
        text-align: center;
    }
    .garis-minyak{
        background:  #029B4B;
        width: 375px;
        height: 10px
    }

    .jelantah-card{
    text-align: center;
    padding: 25px 25px;
    border-radius: 12px;
    margin-top: 30px;
    -webkit-box-shadow: 0 0 15px -2px #ddd;
    box-shadow: 0 0 15px -2px #ddd;
    }

    .judul{
        font-family: 'Poppins', sans-serif;
        color: #029B4B;
        font-style: bold;
        font-weight: 700;
        font-size: 40px;
        line-height: 40px; 
    }

    .jelantah-card h3{
    font-size: 24px;
    margin-bottom: 5px;
    }

    .jelantah-card a{
    font-weight: 600;
    }

    .content7{
        height: auto;
        margin-top: 100px; 
        margin-bottom: 100px;
    }
    .garis7 {
        width: 580px;
        height: 8px;
        background-color: #3eb65f;
    }
    .join {
        width: 164px;
        height: 60px;
        font-size: 20px;
        color: white;
        background: #029B4B;
        box-shadow: 0px 10px 45px rgba(2, 155, 75, 0.5);
        border-radius: 10px !important;
    }
    .jelantah-mitra {
        /* Large heading 30/bold */

        font-family: Poppins;
        font-style: normal;
        font-weight: 500;
        font-size: 24px;
        line-height: 38px;
        /* identical to box height, or 127% */

        text-align: center;

        /* Neutral/10 */

        color: #262626;

    }

    .box4{ 
        width: 32px; 
        height: 32px; 
        margin: 7px;
        background: #029B4B; 
        border-radius: 50%;
    }
    .share{
        margin-top:10px;
        margin-right:10px;
        font-style: Medium;
        font-size: 16px;
        color:#595959;
    }
    .isi{
        font-size: 16px;
        text-align: left;
    }
    .seratus{
        font-size: 20px;
        color: #262626;
        font-weight: 500;
    }

    @media only screen and (min-width:1024px)
    {
        #header{
            padding: 20px;
        }
    }
    @media only screen and (min-width:768px) and (max-width: 1023px)
    {
        
    }
    @media only screen and (min-width:411px) and (max-width:540px)
    {
        .minyak{
            font-size: 30px
        }
        .garis-minyak{
            width: 300px;
            height: 5px;
        }
        .isi{
            font-size: 16px
        }
        .judul{
            font-size: 25px
        }

        .garis7{
            width: 365px
        }
        .jelantah-mitra{
            font-size: 17px;
        }
        .footer .footer-top {
        background-position: center bottom;
        height: auto;
        padding-bottom: 20px
        }
    }

    @media only screen and (min-width:360px) and (max-width:375px)
    {
        .minyak{
            font-size: 30px
        }
        .garis-minyak{
            width: 285px;
            height: 5px;
        }
        .isi{
            font-size: 16px
        }
        .judul{
            font-size: 23px
        }
        .judul-isi{
            font-size: 16px
        }

        .garis7{
            width: 325px
        }
        .jelantah-mitra{
            font-size: 17px;
        }
        .footer .footer-top {
        background-position: center bottom;
        height: auto;
        padding-bottom: 20px
        }
    }
    @media only screen and (min-width:300px) and (max-width:320px)
    {
        .minyak{
            font-size: 25px
        }
        .garis-minyak{
            width: 235px;
            height: 5px;
        }
        .isi{
            font-size: 14px
        }
        .judul-isi{
            font-size: 16px
        }
        .judul{
            font-size: 20px
        }

        .garis7{
            width: 290px
        }
        .jelantah-mitra{
            font-size: 14px;
        }
        .footer .footer-top {
        background-position: center bottom;
        height: auto;
        padding-bottom: 20px
        }
    }

    @media only screen and (min-width:280px) and (max-width:299px)
    {
        .minyak{
            font-size: 25px
        }
        .garis-minyak{
            width: 235px;
            height: 5px;
        }
        .isi{
            font-size: 14px
        }
        .judul-isi{
            font-size: 16px
        }
        .judul{
            font-size: 18px
        }

        .garis7{
            width: 260px
        }
        .jelantah-mitra{
            font-size: 14px;
        }
        .seratus{
            
        }
        .footer .footer-top {
        background-position: center bottom;
        height: auto;
        padding-bottom: 20px
        }
    } 
    .section-visi-misi .lead {
    font-weight: 400;
    font-size: 26px;
    }
    .section-visi-misi .lead strong {
    color: #2a9b02;
    font-weight: 700;
    font-style: italic;
    }

    .section-visi-misi .list-group-flush .list-group-item .list-group-number {
    position: absolute;
    top: 50%;
    transform: translateY(-50%);
    left: 0;
    width: 30px;
    font-size: 70px;
    font-weight: bolder;
    color: #24A19C;
    }
    
    .section-visi-misi .list-group-flush .list-group-item {
    position: relative;
    padding-left: 60px;
    padding-top: 1rem;
    padding-bottom: 2rem;
    font-size: 21px;
    }

    .misi{
        text-align: left;
    }
    .manajemen{
        font-size: 40px;
        color: black;
        text-transform: uppercase;
        font-weight: 700;
    }
    
    .box--br-rounded {
        border-bottom-right-radius: 60px;
        overflow: hidden;
    }
    .box--bg-primary-left {
        background-color: #2a9b02;
    }
    .box--half-pad {
        padding: 30px;
    }
    .section-legalitas{
        background-color: #dfe2e2;
    }
    .section-legalitas__item:nth-child(odd) {
    position: relative;
    padding-right: 40px;
    }
    .section-legalitas__item:nth-child(odd):after {
        content: '';
        position: absolute;
        top: 0;
        bottom: 0;
        right: 0;
        width: 2px;
        background: #2a9b02;
    }
    .legalitas{
        font-size: 40px;
        color: #333;
        text-transform: uppercase;
        font-weight: 700;
    }

    .section--icon-yakesma-header {
        background-color: #dfe2e2;
    background-position: bottom right;
    background-size: auto;
    background-repeat: no-repeat;
}

    .page-title__text {
        color: #145f35;
        font-weight: bolder;
        font-size: 2.1rem;
        line-height: 1.1em;
    }
    
</style>
{{-- tentang kami --}}
<section class="page-title jumbotron jumbotron-fluid section--icon-yakesma-header" style="margin-top: 100px;">
    <div class="container">
        <h1 class="page-title__text">Tentang Kami</h1>
    </div>
</section>
{{-- end tentang kami --}}
<section style="margin-top: 60px">
<div class="container">
    <div class="col-lg-12 col-md-12 col-sm-12 mt-lg-4 justify-content-center">
    <div class="row">
        <div class="text-center">
            <img src="{{asset('assets/img/program/yakesma.jpg')}}" alt="" style="max-width: 40%" class="img-fluid">
        </div>
    </div>
    </div>
    <center>
    <div class="col-lg-9 col-md-8 col-sm-9 mt-lg-4">
        <p class="isi mt-4" data-aos="fade-up" data-aos-delay="200"> Yayasan Kesejahteraan Madani (YAKESMA) didirikan pada 4 Juli 2011, lahir dari sebuah kepedulian akan kehidupan para guru dan Da'i di 
            kota maupun di pelosok pedesaan yang tetap bersemangat dalam memperbaiki masyarakatnya. Dalam proses perbaikan masyarakat tersebut para 
            dai beserta elemen masyarakat yang lain seperti para guru dan penggiat kebajikan lainnya yang penuh dedikasi terkadang mengeluarkan pengorbanan 
            yang lebih dari batas-batas materi yang mereka miliki. Terlebih lagi di saat mereka kekurangan dan mendapatkan musibah ketika menjalankan tugas. 
            Seperti masalah kesehatan Da'i dan keluarganya, perawatan rumah sakit dan kasus kesehatan lainnya. Selain itu ketika anak mereka akan masuk 
            sekolah atau juga ketika mereka tidak memiliki rumah sebagai kebutuhan primer sebuah keluarga.
        </p>

        <p class="isi mt-4" data-aos="fade-up" data-aos-delay="200">
            Pada saat yang sama kemampuan ekonomi para Da'i pun belum di tunjang oleh profesi yang di sandangnya saat ini dan juga oleh usaha mereka. 
            Sampai saat ini masih sedikit lembaga yang memperhatikan kehidupan mereka sehingga yang terjadi adalah proses perbaikan di dalam masyarakat terganggu. 
            Untuk itulah lembaga YAKESMA berdiri untuk membantu mereka dalam rangka meringankan beban guru dan Da'i di bidang kesehatan, pendidikan dan perumahan 
            sehingga mereka dapat lebih fokus dalam proses perbaikan di masyarakat.
        </p>
        <p class="isi mt-4" data-aos="fade-up" data-aos-delay="200">
            Pada saat yang sama kemampuan ekonomi para Da'i pun belum di tunjang oleh profesi yang di sandangnya saat ini dan juga oleh usaha mereka. 
            Sampai saat ini masih sedikit lembaga yang memperhatikan kehidupan mereka sehingga yang terjadi adalah proses perbaikan di dalam masyarakat terganggu. 
            Untuk itulah lembaga YAKESMA berdiri untuk membantu mereka dalam rangka meringankan beban guru dan Da'i di bidang kesehatan, pendidikan dan perumahan 
            sehingga mereka dapat lebih fokus dalam proses perbaikan di masyarakat.
        </p>

        <div class="section-visi-misi my-5">
            <h1>
                <span> <i class="fas fa-angle-right" style="color: #F76E11"></i> VISI <i class="fas fa-angle-left" style="color: #F76E11"></i></span>
            </h1>
            <div class="lead mb-5 text-center" style="text-align: left">
                Menjadi Lembaga Filantropi yang <strong>Terpercaya, Profesional,</strong> dan <strong>Berkontribusi</strong> dalam Meningkatkan Kesejahteraan Masyarakat.
            </div>
            <h1>
                <span>MISI</span>
            </h1>
            <ul class="list-group list-group-flush">
                <li class="list-group-item">
                    <span class="list-group-number">1</span>
                    <p class="misi">
                        Mendorong tumbuhnya kesadaran masyarakat untuk berpartisipasi dalam upaya meningkatkan kesejahteraan masyarakat
                    </p>
                </li>
                <li class="list-group-item">
                    <span class="list-group-number">2</span>
                    <p class="misi">
                        Membangun kemitraan lembaga filantropi dari dalam negeri dan luar negeri
                    </p>
                </li>
                <li class="list-group-item">
                    <span class="list-group-number">3</span>
                    <p class="misi">
                        Menciptakan program layanan dan pemberdayaan yang profesional dan terpercaya
                    </p>
                </li>
            </ul>
        </div>
    </div>
    </center>
</div>
</section>

{{-- Manajemen & Dewan Deskripsi --}}
<section class="section" style="background: #EFF3F1">
    <div class="container">
        <h6 class="section__title section__title--half-block">
            <div class="text-center">
                <span class="manajemen">MANAJEMEN & DEWAN DIREKSI</span>
            </div>
        </h6>
        <div class="section-structure__container">
            <div class="row justify-content-center mb-5">
                <div class="col-md-4 mb-5 mb-md-0">
                    <div class="box--br-rounded box--half-pad box--bg-primary-left text-center">
                        <img src="{{asset('assets/img/program/atabik.png')}}" style="max-width: 60%;">
                        <label class="d-block font-weight-bold h3 text-white">Dr. KH. Atabik Luthfi, M.A</label> 
                        <span class="text-white">Dewan Pengawas Syariah</span>
                    </div>
                </div>
                <div class="col-md-4 mb-5 mb-md-0">
                    <div class="box--br-rounded box--half-pad box--bg-primary-left text-center">
                        <img src="{{asset('assets/img/program/atabik.png')}}" style="max-width: 60%;">
                        <label class="d-block font-weight-bold h3 text-white">Dr. KH. Muhammad Choirin</label> 
                        <span class="text-white">Dewan Pengawas Syariah</span>
                    </div>
                </div>
                <div class="col-md-4 mb-5 mb-md-0">
                    <div class="box--br-rounded box--half-pad box--bg-primary-left text-center">
                        <img src="{{asset('assets/img/program/atabik.png')}}" style="max-width: 60%;">
                        <label class="d-block font-weight-bold h3 text-white">Dr. KH. Saiful Bahri, Lc</label> 
                        <span class="text-white">Dewan Pengawas Syariah</span>
                    </div>
                </div>
            </div>

            <div class="row justify-content-center mb-5">
                <div class="col-md-4  mb-5 mb-md-0">
                    <div class="box--br-rounded box--half-pad box--bg-primary-left text-center">
                        <img src="{{asset('assets/img/program/atabik.png')}}" style="max-width: 60%;">
                        <label class="d-block font-weight-bold h3 text-white">Sahabudin, Ak, MM</label> 
                        <span class="text-white">Direktur Utama</span>
                    </div>
                </div>
            </div>
            
            <div class="row justify-content-center mb-5">
                                <div class="col-md-4  mb-5 mb-md-0">
                    <div class="box--br-rounded box--half-pad box--bg-primary-left text-center">
                        <img src="{{asset('assets/img/program/atabik.png')}}" style="max-width: 60%;">
                        <label class="d-block font-weight-bold h3 text-white">Ade Dodo</label> 
                        <span class="text-white">Direktur Keuangan & Umum</span>
                    </div>
                </div>
                <div class="col-md-4  mb-5 mb-md-0">
                    <div class="box--br-rounded box--half-pad box--bg-primary-left text-center">
                        <img src="{{asset('assets/img/program/atabik.png')}}" style="max-width: 60%;">
                        <label class="d-block font-weight-bold h3 text-white">Arifuddin Muchtar</label> 
                        <span class="text-white">Direktur Program & Jaringan Kemitraan</span>
                    </div>
                </div>
            </div>
            
		
        </div>
    </div>
</section>
{{-- End Manajemen & Dewan Deskripsi --}}

{{-- Legalitas --}}
<section class="section section-legalitas">
    <div class="container">
        <h6 class="section__title section__title--half-block">
            <div class="text-center" style="margin-top: -30px; margin-bottom: 30px;">
                <span class="legalitas">LEGALITAS</span>
            </div>
        </h6>
        <div class="row justify-content-center">
            <div class="section-legalitas__item col-md-4 text-center text-md-right">
                <p style="text-align: right">
                    <strong class="section-legalitas__title">Notary Acts</strong> <br>
                    Yuliati Gantini, SH. <br>
                    Irma Rachmawati, SH / surrogate <br>
                    No. 6 Date 4 th of July 2011 <br>
                    Widyatmoko, SH. <br>
                    No. 14 Date 12th of April 2013
                </p>
                <p style="text-align: right">
                    <strong class="section-legalitas__title">NPWP (Taxpayer ID Number)</strong> <br>
                    No. 31.365.165.5-017.000
                </p>
                <p style="text-align: right">
                    <strong class="section-legalitas__title">Decree of the Ministry of Law and Human  Rights of Republic Indonesia</strong> <br>
                    No. AHU.-6720.AH.01.04 Year 2011
                </p>
            </div>
            <div class="section-legalitas__item col-md-4 text-center text-md-left">
                <p style="text-align: left">
                    <strong class="section-legalitas__title">Social Intitution Operational Permit</strong> <br>
                    No. 007/10.3.1/31.74.04/1.848/2015
                </p>
                <p style="text-align: left">
                    <strong class="section-legalitas__title">Registered as Nazhir Wakaf in Badan Wakaf Indonesia</strong> <br>
                    No. 3.3.00102
                </p>
                <p style="text-align: left">
                    <strong class="section-legalitas__title">Lembaga Amil Zakat</strong> <br>
                    Berdasarkan SK Kemenag RI No. 951 Tahun 2017 sebagai Lembaga Amil Zakat Nasional
                </p>
            </div>
        </div>
    </div>
</section>
{{-- End Legalitas --}}
@endsection