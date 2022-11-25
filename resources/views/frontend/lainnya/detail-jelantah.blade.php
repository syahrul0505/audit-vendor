@extends('app')

@section('container')
<style>
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
        font-weight: 500;
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

    .bulat{ 
        width: 32px; 
        height: 32px; 
        margin: 12px;
        background: #029B4B; 
        border-radius: 50%;
        padding: 0px 10px;
    }

    .default-button {
    position: relative;
    overflow: hidden;
    padding: 10px 10px 10px 10px;
    border-radius: 8px;
    display: inline-block;
    color: #029B4B;
    -webkit-transition: .5s ease-in-out;
    transition: .5s ease-in-out;
    background-color:white ;
    font-size: 20px;
    box-shadow: 0px 12px 32px rgba(2, 155, 75, 0.5);
    font-weight: 500;
    }

    .default-button span {
        position: relative;
        z-index: 9
    }

    .default-button i {
        position: relative;
        top: 2px;
    }

    .default-button::before {
        content: '';
        top: 0;
        left: 0;
        width: 0;
        height: 0;
        position: absolute;
        border-radius: 50%;
        -webkit-transform: translate(-50%, -50%);
        transform: translate(-50%, -50%);
        -webkit-transition: .5s ease-in-out;
        transition: .5s ease-in-out;
        background-color: #029B4B
    }

    .default-button:hover {
        color:white
    }

    .default-button:hover::before {
        width: 300%;
        height: 300%
    }
    .default-button2 {
    position: relative;
    overflow: hidden;
    padding: 10px 10px 10px 10px;
    border-radius: 8px;
    display: inline-block;
    color: white;
    -webkit-transition: .5s ease-in-out;
    transition: .5s ease-in-out;
    background-color: #029B4B;
    font-size: 20px;
    box-shadow: 0px 12px 32px rgba(2, 155, 75, 0.5);
    font-weight: 500;
    }

    .default-button2 span {
        position: relative;
        z-index: 9
    }

    .default-button2 i {
        position: relative;
        top: 2px;
        margin-left: 2px
    }

    .default-button2::before {
        content: '';
        top: 0;
        left: 0;
        width: 0;
        height: 0;
        position: absolute;
        border-radius: 50%;
        -webkit-transform: translate(-50%, -50%);
        transform: translate(-50%, -50%);
        -webkit-transition: .5s ease-in-out;
        transition: .5s ease-in-out;
        background-color: black
    }

    .default-button2:hover {
        color:white
    }

    .default-button2:hover::before {
        width: 300%;
        height: 300%
    }

    .bulat1{ 
        z-index: 0;
        width: 616px; 
        height: 616px; 
        position: relative;
        left: 992px;
        background: #3EB65F; 
        border-radius: 50%;
    }
    .full-konten{
        margin-top: 60px; height: 1690px
    }
    .gmb{
        border-radius:10px 0px 0px 10px; width:100%; height:200px; margin:32px 0px 0px 32px
    }
    .card-detail{
        height: 246px; border-radius: 12px; box-shadow: 0px 8px 100px 0px #00000014;
    }
    .title{
        font-size: 30px;text-align:left; color:#029B4B;font-weight: 500
    }
    .isi{
        font-size: 14px; margin: 0px 80px 12px 0px;
    }
    @media only screen and (min-width: 280px) and (max-width:319px){
        .card-detail{
            height: 660px;
        }
        .gmb{
            margin:20px 0px 0px 10px;
            width: 90%;
            border-radius: 10px 10px 0px 0px;
        }
        .isi{
            margin-right: 48px
        }
        .fold{
            padding-left: 1rem
        }
        .icon{
            margin-top: 20px;
            margin-bottom: 20px
        }
        .bton{
            right: 0px;
            margin-top: 0px
        }
        .col-bton{
            padding-left: 30px;
            padding-right: 30px;
        }
        .btn1{
            width: 195px;
            text-align: center
        }
        .title{
            font-size: 16px
        }
        .full-konten{
            margin-top: 0px;
            padding-top: 80px
        }
        .materi{
            font-size: 30px
        }
        .garis-materi{
            width: 150px;
            height: 4px
        }
        .judul{
            font-size: 25px
        }
        .garis7{
            width: 250px
        }
        .jelantah-mitra{
            font-size: 17px;
        }
    } 
    @media only screen and (min-width: 320px) and (max-width:359px){
        .card-detail{
            height: 670px;
        }
        .gmb{
            margin:20px 0px 0px 12px;
            border-radius: 10px 10px 0px 0px;
            width: 90%
        }
        .isi{
            margin-right: 50px
        }
        .title{
            font-size: 21px;
        }
        .icon{
            margin-top: 20px;
            margin-bottom: 20px
        }
        .bton{
            right: 0px;
            margin-top: 0px
        }
        .col-bton{
            padding-left: 50px;
            padding-right: 50px;
        }
        .btn1{
            width: 200px;
            text-align: center
        }
        .full-konten{
            margin-top: 0px;
            padding-top: 80px
        }
        .materi{
            font-size: 30px
        }
        .garis-materi{
            width: 269px;
            height: 4px
        }
        .judul{
            font-size: 25px
        }
        .garis7{
            width: 250px
        }
        .jelantah-mitra{
            font-size: 18px;
        }
    } 
    @media only screen and (min-width: 360px) and (max-width:375px){
        .card-detail{
            height: 670px;
        }
        .gmb{
            margin:20px 0px 0px 15px;
            border-radius: 10px 10px 0px 0px;
            width: 90%
        }
        .title{
            font-size: 25px
        }
        .icon{
            margin-top: 20px;
            margin-bottom: 20px;
        }
        .isi{
            margin-right: 50px
        }
        .bton{
            right: 0px;
            margin-top: 0px
        }
        .col-bton{
            padding-left: 50px;
            padding-right: 50px;
        }
        .btn1{
            width: 250px;
            text-align: center
        }
        .full-konten{
            margin-top: 0px;
            padding-top: 80px;
        }
        .materi{
            font-size: 30px
        }
        .garis-materi{
            width: 269px;
            height: 4px
        }
        .judul{
            font-size: 30px
        }
        .garis7{
            width: 302px
        }
        .jelantah-mitra{
            font-size: 20px;
        }
    } 
    @media only screen and (min-width: 411px) and (max-width:539px){
        .card-detail{
            height: 670px;
        }
        .gmb{
            margin:20px 0px 0px 20px;
            border-radius: 10px 10px 0px 0px;
            width: 90%
        }
        .isi{
            font-size: 16px;
        }
        .bton{
            right: 0px;
            margin-top: 0px
        }
        .icon{
            margin-top: 20px; 
            margin-bottom: 20px
        }
        .col-bton{
            padding-left: 50px;
            padding-right: 50px;
        }
        .btn1{
            width: 298px;
            text-align: center
        }
        .full-konten{
            margin-top: 0px;
            padding-top:80px;
        }
        .materi{
            font-size: 30px
        }
        .garis-materi{
            width: 269px;
            height: 4px
        }
        .judul{
            font-size: 30px
        }
        .garis7{
            width: 302px
        }
        .jelantah-mitra{
            font-size: 20px;
        }
    } 
    @media only screen and (min-width: 540px) and (max-width: 767px){
        .card-detail{
            height: 630px;
        }
        .gmb{
            margin:20px 0px 0px 20px;
            width: 90%;
            border-radius: 10px 10px 0px 0px;
            height: 253px
        }
        .icon{
            margin-top: 20px;
            margin-bottom: 20px
        }
        .title{
            font-size: 27px
        }
        .btn1{
            width: 411px;
            text-align: center
        }
        .full-konten{
            margin-top: 0px;
            padding-top: 80px
        }
        .materi{
            font-size: 30px
        }
        .garis-materi{
            width: 269px;
            height: 4px
        }
        .judul{
            font-size: 30px
        }
        .garis7{
            width: 435px
        }
        .jelantah-mitra{
            font-size: 20px;
        }
    } 
    @media only screen and (min-width: 748px) and (max-width: 1023px){
        .card-detail{
            height: 740px;
        }
        .gmb{
            margin:20px 0px 0px 20px;
            border-radius: 10px 10px 0px 0px;
            width: 93%;
            height: 376px
        }
        .icon{
            margin-top: 20px;
            margin-bottom: 20px
        }
        .bton{
            right: 0px;
            margin-top: 0px
        }
        .col-bton{
            padding-left: 120px;
            padding-right: 120px;
        }
        .btn1{
            width: 570px;
            text-align:center
        }
        .full-konten{
            padding-top: 80px; 
            margin-top: 0px;
            height: 1900px
        }
        .materi{
            font-size: 30px
        }
        .garis-materi{
            width: 269px;
            height: 4px
        }
        .judul{
            font-size: 30px
        }
        .garis7{
            width: 435px
        }
        .jelantah-mitra{
            font-size: 20px;
        }
    } 
    @media only screen and (min-width: 1024px) and (max-width: 1199px){
        #header{
            padding: 20px;
        }
        .full-konten{
            height: 1600px;
        }
        .btn1{
            width: 136px
        }
        .card-detail{
            height: 290px
        }
        .gmb{
            margin-bottom: 32px;
            height: 220px
        }
    }

</style>
<section class="full-konten">
    <div class="container">
        <div class="bulat1" data-aos="zoom-in"></div>
    </div>
<div class="col-lg-12 col-md-12 col-sm-12" style="position: relative; bottom: 600px">
    <div class="container">
        <div class="row" data-aos="zoom-out">
            <div class="col-lg-2 col-md-6 col-sm-6" style="">
            <a href="{{ route('materi') }}">
                <i class="far fa-arrow-alt-circle-left" style="font-size: 24px; color:#029B4B;">
                </i>
                <span style="font-size: 20px; margin-left:10px;">Kembali</span> 
            </a>
            </div>
            <div class="col-10 col-md-6 col-sm-6"></div>
        </div>

    <div class="container mt-5">
        <div class="row">
            <div class="card card-detail" data-aos="zoom-out">
                <div class="row">
                    <div class="col-lg-4 col-md-12 col-sm-12">
                            <img src="{{ asset('assets/images/LAINNYA/LAINNYA - GALERI/8 Foto.jpg') }}" alt="image" class="img-fluid gmb">
                    </div>
                    <div class="col-lg-8 col-md-12 col-sm-12" style="margin-top: 30px;">
                        <ul class="fold">
                            <span class="title" data-aos="fade-up">Komunitas Jelantah4Change</span>
                            <hr data-aos="fade-up" data-aos-delay="200" style="margin: 12px 50px 12px 0px; color: #BFBFBF">
                            <p class="isi" data-aos="fade-up" data-aos-delay="300">Materi pengenalan tentang komunitas Jelantah4Change, baik berupa profil komunitas, program-program, dan dokumentasi kegiatan.</p>
                        
                        <h4 style="font-size: 20px; text-align: left; margin: 0px" data-aos="fade-up" data-aos-delay="200">Bagikan :</h4>
                        <div class="row mt-lg-4">
                            <div class="col-lg-12 mr-4" style="position: relative; bottom: 20px;">
                                <div class="row">
                                    <div class="col-xl-5 col-lg-5" data-aos="fade-up" data-aos-delay="200">
                                        <div class="row icon" style="text-align: left;">
                                            <div class="bulat"><a href=""><i class="fab fa-facebook-f" style="color: white; margin-top:8px;"></i></a></div>
                                            <div class="bulat"><a href=""><i class="fab fa-twitter" style="color: white; margin-top:8px; position: relative; right: 2px"></i></a></div>
                                            <div class="bulat"><a href=""><i class="fab fa-instagram" style="color: white; margin-top:8px; position: relative; right: 2px"></i></a></div>
                                            <div class="bulat"><a href=""><i class="fas fa-clone" style="color: white; margin-top:8px; position: relative; right: 2px"></i></a></div>
                                        </div>
                                    </div>  
                                    <div class="col-xl-4 col-lg-3"></div>
                                    <div class=" col-xl-3 col-lg-4" data-aos="fade-up" data-aos-delay="200">
                                        <a href="{{ asset("assets/materi/Profil J4C Juli 2020.pdf") }}" target="_blank" class="default-button2 btn1">
                                        <span>
                                            Unduh
                                            <i class="fa fa-cloud-download-alt" style="color: #FFFFFF; margin-left: 10px"></i>
                                        </span>
                                        </a>       
                                    </div>
                                </div>
                            </div>
                        </div>
                        </ul>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <div class="container">
        <div class="col-lg-12 col-md-12 col-sm-12 mt-5">
            <img  data-aos="zoom-out" src="{{ asset('assets/images/banner/mac.png') }}" class="img-fluid" alt="">
        </div>
    </div>
    
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
                                <div class="d-flex justify-content-center"><a class="default-button2 join" href=""><span style="position:relative; top:5px; font-weight: 500"> Daftar<i class="fa fa-running "  style="padding-left: 20px;"></i></span></a></div>
                            </div>
                        </div>
                        <div class="col-lg-6 col-md-6 col-sm-6 col-12" data-aos="fade-up">
                            <div class="jelantah-card">
                                <h3 class="seratus mb-4">JOIN MITRA</h3>
                                <div class="d-flex justify-content-center"><a class="default-button2 join" href=""><span style="position:relative; top:5px; font-weight: 500">Join<i class="fa fa-laugh" style="padding-left: 20px;" > </i> </span></a></div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
{{-- End Dukung Jelantah --}} 
</div>
</div> 
</section>
@endsection