@extends('app')

@section('container')
<style>
    html,body{
        max-width: 100%;
        overflow-x: hidden;
    }
    .doc {
        text-align: left;
        font-size: 14px;
        font-family: 'Poppins',sans-serif;
        font-weight: 400;
        line-height: 22px;
        color: #595959;

    }
    .doctitle {
        text-align: left;
        font-size: 20px;
        font-family: 'Poppins',sans-serif;
        font-weight: 500;
        line-height: 22px;
        color: #262626;

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
    .relawan{
        font-size: 40px;
        color: #029B4B;
        text-transform: uppercase;
        font-weight: 700;
        text-align: center;
    }
    .garis-relawan{
        background: #3EB65F;
        width: 310px;
        height: 8px;
        margin-bottom: 20px;
    }
    .img{
        width: 200px;
        height: 200px;
        border-radius: 50%
    }
    .img-relawan{
        margin-bottom: 60px;
    }
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
  
    .bulat1{ 
        z-index: 0;
        width: 416px; 
        height: 416px; 
        position: relative;
        right: 367px;
        background: #3EB65F; 
        border-radius: 50%;
    }
    .bulat2{ 
        z-index: 0;
        width: 568px; 
        height: 568px; 
        position: relative;
        top: 423px;
        left: 840px;
        background: #3EB65F; 
        border-radius: 50%;
    }
    .bulat3{ 
        z-index: 0;
        width: 525px; 
        height: 525px; 
        position: relative;
        top: 934px;
        right: 301px;
        background: #3EB65F; 
        border-radius: 50%;
    }
    .col-kiri{
        padding-left: 227px;
    }
    .col-tengah{
        padding-right: 39px;
        padding-left: 0px;
    }
    .col-kanan{
        padding-right: 191px;
    }
    .col-gmb{
        margin-right: 40px
    }
    .full-konten{
        margin-top: 60px; height: 3057px
    }
    .konten{
        position: relative; bottom: 1480px
    }
    @media only screen and (min-width:1024px) and (max-width: 1200px)
    {
        #header{
            padding: 20px;
        }
        .full-konten{
            margin-top: 0px;
            height: 3057px
        }
        .pro{
            margin-right: 0px;
            margin-left: 0px
        }
        .col-kiri{
            padding-left: 197px;
        }
        .col-tengah{
            padding-right: 39px;
            padding-left: 0px;
        }
        .col-kanan{
            padding-right: 113px;
        }
    }
    @media only screen and (min-width:768px) and (max-width: 1023px)
    {
        .kiri{
            padding-left: 129px;
        }
        .col-gmb{
            margin-right: 0px
        }
        .col-kiri{
            padding-right: 12px;
            padding-left: 12px;
        }
        .col-tengah{
            padding-right: 12px;
            padding-left: 12px;
        }
        .col-kanan{
            padding-right: 12px;
            padding-left: 12px;
        }
        .full-konten{
            height: 5080px
        }
        
    }
    @media only screen and (min-width:411px) and (max-width:540px)
    {
        .col-gmb{
            padding: 0px 105px 0px 105px;
            margin-bottom: 20px
        }
        .col-gmb1{
            padding: 0px 105px 0px 105px;
        }
        .full-konten{
            margin-top: 0px;
            height: 3610px
        }
        .garis-relawan{
            height: 5px;
        }
        .judul{
            font-size: 25px
        }
        .judul-isi{
            font-size: 16px
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
        .full-konten{
            margin-top: 0px;
            height: 3620px;
        }
        .col-gmb{
            padding: 0px 75px 0px 75px;
            margin-bottom: 20px
        }
        .col-gmb1{
            padding: 0px 75px 0px 75px;
        }
        .relawan{
            font-size: 35px
        }
        .garis-relawan{
            width: 271px;
            height: 5px
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
        .footer .footer-top {
        background-position: center bottom;
        height: auto;
        padding-bottom: 20px
        }
    }
    @media only screen and (min-width:300px) and (max-width:320px)
    {
        .full-konten{
            margin-top: 0px;
            height: 3295px;
        }
        .relawan{
            font-size: 30px
        }
        .garis-relawan{
            width: 234px;
            height: 5px
        }
        .col-gmb{
            padding: 0px 70px 0px 70px;
            margin-bottom: 20px
        }
        .col-gmb1{
            padding: 0px 70px 0px 70px;
        }
        .img {
            width: 180px;
            height: 180px;
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
        .full-konten{
            height: 3290px;
            margin-top: 0px
        }
        .relawan{
            font-size: 25px
        }
        .garis-relawan{
            width: 194px;
            height: 5px
        }
        .img {
            width: 180px;
            height: 180px;
        }
        .col-gmb{
            padding: 0px 50px 0px 50px;
            margin-bottom: 20px
        }
        .col-gmb1{
            padding: 0px 50px 0px 50px;
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
        .footer .footer-top {
        background-position: center bottom;
        height: auto;
        padding-bottom: 20px
        }
    }

</style>

<section class="full-konten">
    <div class="container">
        <div class="bulat1" data-aos="zoom-in"></div>
        <div class="bulat2" data-aos="zoom-in"></div>
        <div class="bulat3" data-aos="zoom-in"></div>
    </div>
<div class="col-lg-12 col-md-12 col-sm-9 konten">
<div class="container pro">
    <div class="row">
        <div class="relawan mt-5" data-aos="fade-up">Sapa Relawan</div>
        <center><div class="garis-relawan mb-5" data-aos="fade-up" data-aos-delay="200"></div></center>
    </div>

<div class="row img-relawan" data-aos="fade-up" data-aos-delay="100">
    <div class="col-lg-2 col-md-4 col-sm-12 col-gmb">
        <img src="{{ asset('assets/images/LAINNYA/LAINNYA - SAPA RELAWAN/relawan1.jfif') }}" alt="" class="img">
    </div>
    <div class="col-lg-2 col-md-4 col-sm-12 col-gmb">
        <img src="{{ asset('assets/images/LAINNYA/LAINNYA - SAPA RELAWAN/relawan2.jfif') }}" alt="" class="img">
    </div>
    <div class="col-lg-2 col-md-4 col-sm-12 col-gmb">
        <img src="{{ asset('assets/images/LAINNYA/LAINNYA - SAPA RELAWAN/relawan3.jfif') }}" alt="" class="img">
    </div>
    <div class="col-lg-2 col-md-6 col-sm-12 col-gmb kiri">
        <img src="{{ asset('assets/images/LAINNYA/LAINNYA - SAPA RELAWAN/relawan4.jfif') }}" alt="" class="img">
    </div>
    <div class="col-lg-2 col-md-6 col-sm-12 col-gmb1">
        <img src="{{ asset('assets/images/LAINNYA/LAINNYA - SAPA RELAWAN/relawan5.jfif') }}" alt="" class="img">
    </div>
</div>

<div class="row img-relawan" data-aos="fade-up" data-aos-delay="300">
    <div class="col-lg-2 col-md-4 col-sm-12 col-gmb">
        <img src="{{ asset('assets/images/LAINNYA/LAINNYA - SAPA RELAWAN/relawan6.jfif') }}" alt="" class="img">
    </div>
    <div class="col-lg-2 col-md-4 col-sm-12 col-gmb">
        <img src="{{ asset('assets/images/LAINNYA/LAINNYA - SAPA RELAWAN/relawan7.jfif') }}" alt="" class="img">
    </div>
    <div class="col-lg-2 col-md-4 col-sm-12 col-gmb">
        <img src="{{ asset('assets/images/LAINNYA/LAINNYA - SAPA RELAWAN/relawan8.jfif') }}" alt="" class="img">
    </div>
    <div class="col-lg-2 col-md-6 col-sm-12 col-gmb kiri">
        <img src="{{ asset('assets/images/LAINNYA/LAINNYA - SAPA RELAWAN/relawan9.jfif') }}" alt="" class="img">
    </div>
    <div class="col-lg-2 col-md-6 col-sm-12 col-gmb1">
        <img src="{{ asset('assets/images/LAINNYA/LAINNYA - SAPA RELAWAN/relawan10.jfif') }}" alt="" class="img">
    </div>
</div>

<div class="row img-relawan" data-aos="fade-up" data-aos-delay="300">
    <div class="col-lg-2 col-md-4 col-sm-12 col-gmb">
        <img src="{{ asset('assets/images/LAINNYA/LAINNYA - SAPA RELAWAN/relawan11.jfif') }}" alt="" class="img">
    </div>
    <div class="col-lg-2 col-md-4 col-sm-12 col-gmb">
        <img src="{{ asset('assets/images/LAINNYA/LAINNYA - SAPA RELAWAN/relawan12.jfif') }}" alt="" class="img">
    </div>
    <div class="col-lg-2 col-md-4 col-sm-12 col-gmb">
        <img src="{{ asset('assets/images/LAINNYA/LAINNYA - SAPA RELAWAN/relawan13.jfif') }}" alt="" class="img">
    </div>
    <div class="col-lg-2 col-md-6 col-sm-12 col-gmb kiri">
        <img src="{{ asset('assets/images/LAINNYA/LAINNYA - SAPA RELAWAN/relawan14.jfif') }}" alt="" class="img">
    </div>
    <div class="col-lg-2 col-md-6 col-sm-12 col-gmb1">
        <img src="{{ asset('assets/images/LAINNYA/LAINNYA - SAPA RELAWAN/relawan15.jfif') }}" alt="" class="img">
    </div>
</div>

<div class="row img-relawan" data-aos="fade-up" data-aos-delay="300">
    <div class="col-lg-2 col-md-4 col-sm-12 col-gmb">
        <img src="{{ asset('assets/images/LAINNYA/LAINNYA - SAPA RELAWAN/relawan16.jfif') }}" alt="" class="img">
    </div>
    <div class="col-lg-2 col-md-4 col-sm-12 col-gmb">
        <img src="{{ asset('assets/images/LAINNYA/LAINNYA - SAPA RELAWAN/relawan17.jfif') }}" alt="" class="img">
    </div>
    <div class="col-lg-2 col-md-4 col-sm-12 col-gmb">
        <img src="{{ asset('assets/images/LAINNYA/LAINNYA - SAPA RELAWAN/relawan18.jfif') }}" alt="" class="img">
    </div>
    <div class="col-lg-2 col-md-6 col-sm-12 col-gmb kiri">
        <img src="{{ asset('assets/images/LAINNYA/LAINNYA - SAPA RELAWAN/relawan19.jfif') }}" alt="" class="img">
    </div>
    <div class="col-lg-2 col-md-6 col-sm-12 col-gmb1">
        <img src="{{ asset('assets/images/LAINNYA/LAINNYA - SAPA RELAWAN/relawan20.jfif') }}" alt="" class="img">
    </div>
</div>

<div class="row img-relawan" data-aos="fade-up" data-aos-delay="300">
    <div class="col-lg-2 col-md-4 col-sm-12  col-gmb">
        <img src="{{ asset('assets/images/LAINNYA/LAINNYA - SAPA RELAWAN/relawan21.jfif') }}" alt="" class="img">
    </div>
    <div class="col-lg-2 col-md-4 col-sm-12  col-gmb">
        <img src="{{ asset('assets/images/LAINNYA/LAINNYA - SAPA RELAWAN/relawan22.jfif') }}" alt="" class="img">
    </div>
    <div class="col-lg-2 col-md-4 col-sm-12  col-gmb">
        <img src="{{ asset('assets/images/LAINNYA/LAINNYA - SAPA RELAWAN/relawan23.jfif') }}" alt="" class="img">
    </div>
    <div class="col-lg-2 col-md-6 col-sm-12 col-gmb kiri">
        <img src="{{ asset('assets/images/LAINNYA/LAINNYA - SAPA RELAWAN/relawan24.jfif') }}" alt="" class="img">
    </div>
    <div class="col-lg-2 col-md-6 col-sm-12 col-gmb1">
        <img src="{{ asset('assets/images/LAINNYA/LAINNYA - SAPA RELAWAN/relawan25.jfif') }}" alt="" class="img">
    </div>
</div>

<div class="row img-relawan" data-aos="fade-up" data-aos-delay="300">
    <div class="col-lg-2 col-md-4 col-sm-12  col-gmb">
        <img src="{{ asset('assets/images/LAINNYA/LAINNYA - SAPA RELAWAN/relawan26.jfif') }}" alt="" class="img">
    </div>
    <div class="col-lg-2 col-md-4 col-sm-12  col-gmb">
        <img src="{{ asset('assets/images/LAINNYA/LAINNYA - SAPA RELAWAN/relawan27.jfif') }}" alt="" class="img">
    </div>
    <div class="col-lg-2 col-md-4 col-sm-12  col-gmb">
        <img src="{{ asset('assets/images/LAINNYA/LAINNYA - SAPA RELAWAN/relawan28.jfif') }}" alt="" class="img">
    </div>
    <div class="col-lg-2 col-md-6 col-sm-12 col-gmb kiri">
        <img src="{{ asset('assets/images/LAINNYA/LAINNYA - SAPA RELAWAN/relawan29.jfif') }}" alt="" class="img">
    </div>
    <div class="col-lg-2 col-md-6 col-sm-12 col-gmb1">
        <img src="{{ asset('assets/images/LAINNYA/LAINNYA - SAPA RELAWAN/relawan30.jfif') }}" alt="" class="img">
    </div>
</div>

<div class="row img-relawan" data-aos="fade-up" data-aos-delay="300">
    <div class="col-lg-2 col-md-4 col-sm-12  col-gmb">
        <img src="{{ asset('assets/images/LAINNYA/LAINNYA - SAPA RELAWAN/relawan31.jfif') }}" alt="" class="img">
    </div>
    <div class="col-lg-2 col-md-4 col-sm-12  col-gmb">
        <img src="{{ asset('assets/images/LAINNYA/LAINNYA - SAPA RELAWAN/relawan32.jfif') }}" alt="" class="img">
    </div>
    <div class="col-lg-2 col-md-4 col-sm-12  col-gmb">
        <img src="{{ asset('assets/images/LAINNYA/LAINNYA - SAPA RELAWAN/relawan33.jfif') }}" alt="" class="img">
    </div>
    <div class="col-lg-2 col-md-6 col-sm-12 col-gmb kiri">
        <img src="{{ asset('assets/images/LAINNYA/LAINNYA - SAPA RELAWAN/relawan34.jfif') }}" alt="" class="img">
    </div>
    <div class="col-lg-2 col-md-6 col-sm-12 col-gmb1">
        <img src="{{ asset('assets/images/LAINNYA/LAINNYA - SAPA RELAWAN/relawan35.jfif') }}" alt="" class="img">
    </div>
</div>

<div class="row img-relawan" data-aos="fade-up" data-aos-delay="300">
    <div class="col-lg-2 col-md-4 col-sm-12  col-gmb">
        <img src="{{ asset('assets/images/LAINNYA/LAINNYA - SAPA RELAWAN/relawan36.jfif') }}" alt="" class="img">
    </div>
    <div class="col-lg-2 col-md-4 col-sm-12  col-gmb">
        <img src="{{ asset('assets/images/LAINNYA/LAINNYA - SAPA RELAWAN/relawan37.jfif') }}" alt="" class="img">
    </div>
    <div class="col-lg-2 col-md-4 col-sm-12  col-gmb">
        <img src="{{ asset('assets/images/LAINNYA/LAINNYA - SAPA RELAWAN/relawan38.jfif') }}" alt="" class="img">
    </div>
    <div class="col-lg-2 col-md-6 col-sm-12 col-gmb kiri">
        <img src="{{ asset('assets/images/LAINNYA/LAINNYA - SAPA RELAWAN/relawan39.jfif') }}" alt="" class="img">
    </div>
    <div class="col-lg-2 col-md-6 col-sm-12 col-gmb1">
        <img src="{{ asset('assets/images/LAINNYA/LAINNYA - SAPA RELAWAN/relawan41.jfif') }}" alt="" class="img">
    </div>
</div>

<div class="row img-relawan" data-aos="fade-up" data-aos-delay="300">
    <div class="col-lg-2 col-md-4 col-sm-12  col-gmb">
        <img src="{{ asset('assets/images/LAINNYA/LAINNYA - SAPA RELAWAN/relawan42.jfif') }}" alt="" class="img">
    </div>
    <div class="col-lg-2 col-md-4 col-sm-12  col-gmb">
        <img src="{{ asset('assets/images/LAINNYA/LAINNYA - SAPA RELAWAN/relawan43.jfif') }}" alt="" class="img">
    </div>
    <div class="col-lg-2 col-md-4 col-sm-12  col-gmb">
        <img src="{{ asset('assets/images/LAINNYA/LAINNYA - SAPA RELAWAN/relawan44.jfif') }}" alt="" class="img">
    </div>
    <div class="col-lg-2 col-md-6 col-sm-12 col-gmb kiri">
        <img src="{{ asset('assets/images/LAINNYA/LAINNYA - SAPA RELAWAN/relawan45.png') }}" alt="" class="img">
    </div>
    <div class="col-lg-2 col-md-6 col-sm-12 col-gmb1">
        <img src="{{ asset('assets/images/LAINNYA/LAINNYA - SAPA RELAWAN/relawan46.jfif') }}" alt="" class="img">
    </div>
</div>

<div class="row img-relawan" data-aos="fade-up" data-aos-delay="300">
    <div class="col-lg-2 col-md-4 col-sm-12  col-gmb">
        <img src="{{ asset('assets/images/LAINNYA/LAINNYA - SAPA RELAWAN/relawan47.jfif') }}" alt="" class="img">
    </div>
    <div class="col-lg-2 col-md-4 col-sm-12  col-gmb">
        <img src="{{ asset('assets/images/LAINNYA/LAINNYA - SAPA RELAWAN/relawan48.jfif') }}" alt="" class="img">
    </div>
    <div class="col-lg-2 col-md-4 col-sm-12  col-gmb">
        <img src="{{ asset('assets/images/LAINNYA/LAINNYA - SAPA RELAWAN/relawan49.jfif') }}" alt="" class="img">
    </div>
    <div class="col-lg-2 col-md-6 col-sm-12 col-gmb kiri">
        <img src="{{ asset('assets/images/LAINNYA/LAINNYA - SAPA RELAWAN/relawan50.jfif') }}" alt="" class="img">
    </div>
    <div class="col-lg-2 col-md-6 col-sm-12 col-gmb1">
        <img src="{{ asset('assets/images/LAINNYA/LAINNYA - SAPA RELAWAN/relawan51.jfif') }}" alt="" class="img">
    </div>
</div>

<center>
<div class="row img-relawan1" data-aos="fade-up" data-aos-delay="300">
    <div class="col-lg-5 col-md-4 col-sm-12 col-kiri">
        <img src="{{ asset('assets/images/LAINNYA/LAINNYA - SAPA RELAWAN/relawan52.jfif') }}" alt="" class="img">
    </div>
    <div class="col-lg-2 col-md-4 col-sm-12 col-tengah">
        <img src="{{ asset('assets/images/LAINNYA/LAINNYA - SAPA RELAWAN/relawan32.jfif') }}" alt="" class="img">
    </div>
    <div class="col-lg-5 col-md-4 col-sm-12 col-kanan">
        <img src="{{ asset('assets/images/LAINNYA/LAINNYA - SAPA RELAWAN/relawan54.jfif') }}" alt="" class="img">
    </div>
</div>
</center>
</div>
</div>
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
                                    <div class="d-flex justify-content-center"><a class="default-button2 join" href=""><span style="position:relative; top: 5px;"> Daftar<i class="fa fa-running "  style="padding-left: 20px;"></i></span></a></div>
                                </div>
                            </div>
                            <div class="col-lg-6 col-md-6 col-sm-6 col-12" data-aos="fade-up">
                                <div class="jelantah-card">
                                    <h3 class="seratus mb-4">JOIN MITRA</h3>
                                    <div class="d-flex justify-content-center"><a class="default-button2 join" href=""><span style="position:relative; top: 5px;">Join<i class="fa fa-laugh" style="padding-left: 20px;" > </i> </span></a></div>
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