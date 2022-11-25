@extends('app')

@section('container')
<style>
    html,body{
        max-width: 100%;
        overflow-x: hidden;
    }

     /* Dukung Jelantah4Change */
    .jelantah-card{
    text-align: center;
    padding: 30px 25px;
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
    .title{
        font-size: 38px; 
        font-weight: 500;
        color: #434343;   
    }
    .judul2{
        font-style: normal;
        font-weight: bold;
        font-size: 40px;
        line-height: 40px;
        color: #029B4B;
        margin-bottom:8px;
    }
    .list{
        background: #029B4B;
        color: white;
        padding: 8px;
    }
    .gmb1{
        height: 443px;
        border-radius: 12px
    }
    .gmb2{
        border-radius: 12px; width:284px; height:212px;
    }
    .gmb2-kanan{
        margin: 0px 0px 10px 0px; padding:0px 10px 0px 10px;
    }
    .gmb2-kiri{
        margin: 0px 0px 10px 0px; padding:0px 10px 0px 0px;
    }
    .col-gmb{
        width:570px;height:443px; padding: 0px 12px 0px 12px
    }
    .btn-back{
        margin-bottom: 48px; margin-top: 48px
    }
    .back{
        font-family: Poppins;font-size: 24px;font-style: normal;font-weight: 500;
        line-height: 32px;letter-spacing: 0em;text-align: left; margin: 0px 0px 0px 10px;
    }
    @media only screen and (min-width:1024px) and (max-width: 1200px)
    {
        #header{
            padding: 20px;
        }
        .gmb1{
            width: 100%;
            height: 408px
        }
        .gmb2{
            width: 200px;
            height: 200px
        }
        .col-gmb{
            width: 450px;
        }
    }
    @media only screen and (min-width:768px) and (max-width: 1023px)
    {
        .title{
            text-align: center
        }
        .gmb1{
            width: 100%;
            height: 370px;
            margin-bottom: 10px
        }
        .gmb2{
            width: 100%
        }
        .col-gmb{
            width: 100%
        }
    }
    @media only screen and (min-width:411px) and (max-width:540px)
    {
        .title{
            font-size: 30px;
            text-align: center;
        }
        .gmb1{
            height: 370px;
            margin-bottom: 20px
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
    }

    @media only screen and (min-width:360px) and (max-width:375px)
    {
        .title{
            font-size: 25px;
            text-align: center
        }
        .gmb1{
            height: 370px;
            margin-bottom: 10px
        }
        .judul{
            font-size: 22px
        }

        .garis7{
            width: 325px
        }
        .jelantah-mitra{
            font-size: 17px;
        }
    }
    @media only screen and (min-width:300px) and (max-width:320px)
    {
        .title{
            font-size: 20px;
            text-align: center;
        }
        .gmb1{
            height: 370px;
            margin-bottom: 10px
        }
        .full-konten{
            height: 4063px;
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
    }
    @media only screen and (min-width:280px) and (max-width:299px)
    {
        .title{
            font-size: 15px;
            text-align: center;
        }
        .gmb1{
            height: 200px;
            margin-bottom: 10px
        }
        .gmb2{
            height: 133px;
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
    }


</style>
<section style="margin-top: 80px">
<div class="container btn-back" data-aos="fade-right">
    <div class="row">
        <div class="col-xl-4 col-lg-4 col-md-6 col-sm-6" style="">
        <a href="{{ route('dokumentasi') }}">
            <i class="far fa-arrow-alt-circle-left fa-2x ">
            <span class="back">Kembali</span>
            </i>
        </a>
        </div>
        <div class="col-xl-8 col-lg-8 col-md-6 col-sm-6"></div>
    </div>
</div>

<div class="col-lg-12 col-md-12 col-sm-12">
    <div class="container">
        <div class="row">
            <div class="col-lg-12">
                <div class="d-flex justify-content-center title mt-3" data-aos="zoom-in">Festival Peduli Sampah Nasional (FPSN) 2021</div>
            </div>
        </div>
    </div>

    <div class="container mt-4">
        <div class="row ">
            <div class="col-lg-6 col-md-12 col-sm-12 col-xs-12" data-aos="fade-right"> 
                <img src="{{ asset('assets/images/LAINNYA/LAINNYA - DOKUMENTASI KEGIATAN/FPSN 2021/Edukasi Jelantah Kelurahan Margasari Kota Balikpapan.jpg') }}" class="img-fluid gmb1" alt="">
            </div>
            <div class="col-lg-6 col-md-12 col-sm-12 col-xs-12 col-gmb">
                <div class="row" data-aos="fade-down" data-aos-delay="200">
                    <div class="col-6 gmb2-kanan">
                        <img src="{{ asset('assets/images/LAINNYA/LAINNYA - DOKUMENTASI KEGIATAN/FPSN 2021/FPSN 2021 J4C 1.png') }}" class="img-fluid gmb2" alt="">
                    </div>
                    <div class="col-6 gmb2-kiri">
                        <img src="{{ asset('assets/images/LAINNYA/LAINNYA - DOKUMENTASI KEGIATAN/FPSN 2021/FPSN 2021 J4C 2.png') }}" class="img-fluid gmb2" alt="">
                    </div>
                </div>
                <div class="row" data-aos="fade-down">
                    <div class="col-6 gmb2-kiri">
                        <img src="{{ asset('assets/images/LAINNYA/LAINNYA - DOKUMENTASI KEGIATAN/FPSN 2021/FPSN 2021 J4C 3.png') }}" class="img-fluid gmb2" alt="">
                    </div>
                    <div class="col-6 gmb2-kanan">
                        <img src="{{ asset('assets/images/LAINNYA/LAINNYA - DOKUMENTASI KEGIATAN/FPSN 2021/FPSN 2021 J4C 4.png') }}" class="img-fluid gmb2" alt="">
                    </div>
                </div>
            </div>
        </div>
    </div>

{{-- Mario Jela Pemasaran --}}

    <div class="container mt-4">
        <div class="row ">
            <div class="col-lg-6 col-md-12 col-sm-12 col-xs-12 col-gmb">
                <div class="row" data-aos="fade-down" data-aos-delay="200">
                    <div class="col-6 gmb2-kanan">
                        <img src="{{ asset('assets/images/LAINNYA/LAINNYA - DOKUMENTASI KEGIATAN/FPSN 2021/FPSN 2021 J4C 5.png') }}" class="img-fluid gmb2" alt="">
                    </div>
                    <div class="col-6 gmb2-kiri">
                        <img src="{{ asset('assets/images/LAINNYA/LAINNYA - DOKUMENTASI KEGIATAN/FPSN 2021/Pameran Produk Pemanfaatan Jelantah.jpg') }}" class="img-fluid gmb2" alt="">
                    </div>
                </div>
                <div class="row" data-aos="fade-down">
                    <div class="col-6 gmb2-kanan">
                        <img src="{{ asset('assets/images/LAINNYA/LAINNYA - DOKUMENTASI KEGIATAN/FPSN 2021/Pendampingan Program CSR MARIO JELA Pertamina RU V Balikpapan.JPG') }}" class="img-fluid gmb2" alt="">
                    </div>
                    <div class="col-6 gmb2-kiri">
                        <img src="{{ asset('assets/images/LAINNYA/LAINNYA - DOKUMENTASI KEGIATAN/FPSN 2021/Salinan IMG-20180218-WA0039.jpg') }}" class="img-fluid gmb2" alt="">
                    </div>
                </div>
            </div>
            <div class="col-lg-6 col-md-12 col-sm-12 col-xs-12" data-aos="fade-left"> 
                <img src="{{ asset('assets/images/LAINNYA/LAINNYA - DOKUMENTASI KEGIATAN/FPSN 2021/Penyerahan Sembako ke PA Cacat Ganda di Semarang.jpeg') }}" class="img-fluid gmb1" alt="">
            </div>
        </div>
    </div>
{{--end Mario Jela Pemasaran --}}

{{-- Mario Jela Batch --}}
    <div class="container mt-4">
        <div class="row ">
            <div class="col-lg-6 col-md-12 col-sm-12 col-xs-12" data-aos="fade-right"> 
                <img src="{{ asset('assets/images/LAINNYA/LAINNYA - DOKUMENTASI KEGIATAN/FPSN 2021/Salinan IMG-20180423-WA0012.jpg') }}" class="img-fluid gmb1" alt="">
            </div>
            <div class="col-lg-6 col-md-12 col-sm-12 col-xs-12 col-gmb">
                <div class="row" data-aos="fade-down" data-aos-delay="200">
                    <div class="col-6 gmb2-kanan">
                        <img src="{{ asset('assets/images/LAINNYA/LAINNYA - DOKUMENTASI KEGIATAN/FPSN 2021/Salinan IMG-20180408-WA0060.jpg') }}" class="img-fluid gmb2" alt="">
                    </div>
                    <div class="col-6 gmb2-kiri">
                        <img src="{{ asset('assets/images/LAINNYA/LAINNYA - DOKUMENTASI KEGIATAN/FPSN 2021/Salinan IMG-20190827-WA0018.jpg') }}" class="img-fluid gmb2" alt="">
                    </div>
                </div>
                <div class="row" data-aos="fade-down">
                    <div class="col-6 gmb2-kanan">
                        <img src="{{ asset('assets/images/LAINNYA/LAINNYA - DOKUMENTASI KEGIATAN/FPSN 2021/Salinan IMG20180218133903.jpg') }}" class="img-fluid gmb2" alt="">
                    </div>
                    <div class="col-6 gmb2-kiri">
                        <img src="{{ asset('assets/images/LAINNYA/LAINNYA - DOKUMENTASI KEGIATAN/FPSN 2021/Salinan numpang J4C_190204_0012.jpg') }}" class="img-fluid gmb2" alt="">
                    </div>
                </div>
            </div>
        </div>
    </div>

{{-- end Mario Jela Batch --}}


{{-- Pengelolaan --}}

    <div class="container mt-4">
        <div class="row ">
            <div class="col-lg-6 col-md-12 col-sm-12 col-xs-12 col-gmb">
                <div class="row" data-aos="fade-down" data-aos-delay="200">
                    <div class="col-6 gmb2-kanan">
                        <img src="{{ asset('assets/images/LAINNYA/LAINNYA - DOKUMENTASI KEGIATAN/FPSN 2021/Sosialisasi _ Serah Terima Jelantah di Paguyuban Pengrajin Kripik Tempe, Kelurahan Jenar, Blora.jpeg') }}" class="img-fluid gmb2" alt="">
                    </div>
                    <div class="col-6 gmb2-kiri">
                        <img src="{{ asset('assets/images/LAINNYA/LAINNYA - DOKUMENTASI KEGIATAN/FPSN 2021/Serah Terima Jelantah dari Relawan.jpg') }}" class="img-fluid gmb2" alt="">
                    </div>
                </div>
                <div class="row" data-aos="fade-down">
                    <div class="col-6 gmb2-kanan">
                        <img src="{{ asset('assets/images/LAINNYA/LAINNYA - DOKUMENTASI KEGIATAN/FPSN 2021/Salinan numpang J4C_190204_0014.jpg') }}" class="img-fluid gmb2" alt="">
                    </div>
                    <div class="col-6 gmb2-kiri">
                        <img src="{{ asset('assets/images/LAINNYA/LAINNYA - DOKUMENTASI KEGIATAN/FPSN 2021/Salinan IMG20180218133903.jpg') }}" class="img-fluid gmb2" alt="">
                    </div>
                </div>
            </div>
            <div class="col-lg-6 col-md-12 col-sm-12 col-xs-12" data-aos="fade-left"> 
                <img src="{{ asset('assets/images/LAINNYA/LAINNYA - DOKUMENTASI KEGIATAN/FPSN 2021/Seminar.jpg') }}" class="img-fluid gmb1" alt="">
            </div>
        </div>
    </div>  
{{-- end Pengelolaan --}}
</section>

{{-- Dukung Jelantah --}}
    <div class="row">
        <div class="content7">
            <div class="title" style="margin-bottom: 48px;" data-aos="fade-up">
            <span style="margin-top:-50px;" class="judul"><center>DUKUNG JELANTAH4CHANGE</center></span>
            <center><div class="garis7"></div></center>
            </div>

                <div class="container" data-aos="fade-up">
                    <P class="jelantah-mitra">Dukung menjadi Jelantah Heroes / Mitra</P>
                </div>
            <div class="container">
                <div class="row">
                    <div class="col-lg-12">
                        <div class="row">
                            <div class="col-lg-6 col-md-6 col-sm-6 col-12" data-aos="fade-up">
                                <div class="jelantah-card">
                                    <h3 class="seratus mb-4">JELANTAH HEROES</h3>
                                    <div class="d-flex justify-content-center"><a class="default-button2 join" href=""><span style="position:relative; top: 5px; font-size: 20px; font-weight: 500"> Daftar<i class="fa fa-running "  style="padding-left: 20px;"></i></span></a></div>
                                </div>
                            </div>
                            <div class="col-lg-6 col-md-6 col-sm-6 col-12" data-aos="fade-up">
                                <div class="jelantah-card">
                                    <h3 class="seratus mb-4">JOIN MITRA</h3>
                                    <div class="d-flex justify-content-center"><a class="default-button2 join" href=""><span style="position:relative; top: 5px; font-size: 20px; font-weight: 500">Join<i class="fa fa-laugh" style="padding-left: 20px;" > </i> </span></a></div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
{{-- End Dukung Jelantah --}}
@endsection