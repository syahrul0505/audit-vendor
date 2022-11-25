@extends('app')

@section('container')
    <style>
    .materi{
        font-size: 40px;
        color: #029B4B;
        text-transform: uppercase;
        font-weight: 700;
        text-align: center;
    }
    .garis-materi{
        width: 355px;
        height: 8px;
        background-color: #3eb65f;
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


    /* Dokumentasi Foto */
    .content3{
        height: auto;
        margin-bottom: 100px;
    }

     /* Dukung Jelantah4Change */
    .content7{
        height: auto;
    }
    .garis7 {
        width: 580px;
        height: 8px;
        background-color: #3eb65f;
    }
    .join {
        width: 164px;
        height: 60px;
        background: #029B4B;
        box-shadow: 0px 10px 45px rgba(2, 155, 75, 0.5);
        border-radius: 10px !important;
    }

    .jelantah-mitra{  
        font-style: normal;
        font-weight: 500;
        font-size: 24px;
        line-height: 38px;
        text-align: center;
        color: #262626;
    }

    /* Subscribe */
    .content8{
        height: auto;
    }
    .by-entering {

        /* Body 14/medium */

        margin-top: 10px;
        font-family: Poppins;
        font-style: normal;
        font-weight: 500;
        font-size: 14px;
        line-height: 22px;
        /* or 157% */

        text-align: center;
        margin:10%;
        padding-block: 100px;
        /* Neutral/7 */

        color: #8C8C8C;
    }
    .get-article {

        font-family: Poppins;
        font-style: normal;
        font-weight: 500;
        font-size: 23px;
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
        Font style: Medium
        Font size: 16px
        Line height: 24px
        Line height: 100%
        Align: Left
        Vertical align: Top;
        color:#595959;
    }

    /* Dokumen */
    .content5{
        height: auto;
        margin-bottom: 100px;
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

    .date{
        text-align: left; 
        font-style:normal;
        font-weight:normal;
        font-size:14px; 
        line-height:22px;
        color: #029B4B;
    }

    .btn1{
        border-radius: 8px; 
        width:171px ; 
        height:56px; 
        background-color: #fff; 
        color:#029B4B; 
        font-size:20px;
        border: 2px solid #029B4B; 
        box-sizing: border-box; 
        text-align:center; 
        padding: 10px 10px 10px 10px;
        margin-top:32px; 
        font-weight:normal;
    }
    .btn2{
        border-radius: 8px; width:171px ; 
        height:56px; background-color: #029B4B; color:white; font-size:20px;
        box-shadow: 0px 12px 32px 0px #029B4B; text-align:center; padding: 10px 10px 10px 10px;
        margin-top:16px; font-weight:normal;
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
        width: 416px; 
        height: 416px; 
        position: relative;
        right: 316px;
        background: #3EB65F; 
        border-radius: 50%;
    }

    .bulat2{ 
        z-index: 0;
        width: 568px; 
        height: 568px; 
        position: relative;
        left: 913px;
        bottom: 50px;
        background: #3EB65F; 
        border-radius: 50%;
    }
    .card-materi{
        height: 246px; border-radius: 12px; box-shadow: 0px 8px 100px 0px #00000014;
    }
    .gmb{
        border-radius:10px 0px 0px 10px; width:100%; height:200px; margin:32px 0px 0px 32px
    }
    .bton{
        margin-top:32px; position: relative; right: 21px
    }
    .full-konten{
        margin-top: 60px; height:1415px
    }
    .konten{
        position: relative; bottom: 930px
    }
    

    @media only screen and (min-width: 280px) and (max-width:319px){
        .card-materi{
            height: auto;
        }
        .gmb{
            margin:20px 0px 0px 10px;
            width: 90%;
            border-radius:10px 10px 0px 0px;
        }
        .isi{
            padding-left: 15px;
        }
        .bton{
            right: 0px;
            margin-top: 0px
        }
        .col-bton{
            padding-left: 30px;
            padding-right: 30px;
            margin-bottom: 20px
        }
        .btn1{
            width: 195px;
        }
        .btn2{
            width: 195px;
        }
        .full-konten{
            height: 2630px;
            margin-top: 0px
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
        .card-materi{
            height: 700px;
        }
        .gmb{
            margin:20px 0px 0px 20px;
            width: 90%;
            border-radius:10px 10px 0px 0px;
        }
        .isi{
            padding-left: 17px;
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
            width: 257px;
        }
        .btn2{
            width: 257px;
        }
        .full-konten{
            height: 2630px;
            margin-top: 0px
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
    @media only screen and (min-width: 360px) and (max-width:375px){
        .card-materi{
            height: 700px;
        }
        .gmb{
            margin:20px 0px 0px 20px;
            width: 90%;
            border-radius:10px 10px 0px 0px;
        }
        .isi{
            padding-left: 17px;
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
            width: 257px;
        }
        .btn2{
            width: 257px;
        }
        .full-konten{
            height: 2630px;
            margin-top: 0px
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
        .card-materi{
            height: 700px;
        }
        .gmb{
            margin:20px 0px 0px 20px;
            width: 90%;
            border-radius:10px 10px 0px 0px;
        }
        .isi{
            padding-left: 17px;
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
            width: 257px;
        }
        .btn2{
            width: 257px;
        }
        .full-konten{
            height: 2630px;
            margin-top: 0px
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
        .card-materi{
            height: 700px;
        }
        .gmb{
            margin:20px 0px 0px 20px;
            width: 90%;
            height: 253px
            border-radius:10px 10px 0px 0px;
        }
        .isi{
            padding-left: 17px;
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
            width: 275px;
        }
        .btn2{
            width: 275px;
        }
        .full-konten{
            height: 2630px;
            margin-top: 0px
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
        .card-materi{
            height: 797px;
        }
        .gmb{
            margin:20px 0px 0px 20px;
            width: 93%;
            height: 376px;
            border-radius:10px 10px 0px 0px;
        }
        .isi{
            padding-left: 17px;
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
            width: 452px;
        }
        .btn2{
            width: 452px;
        }
        .full-konten{
            height: 2480px;
            margin-top: 0px
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
        .btn1{
            width: 136px
        }
        .btn2{
            width: 136px
        }
    }

</style>

<section class="full-konten">
    <div class="container">
        <div class="bulat1" data-aos="zoom-in"></div>
        <div class="bulat2" data-aos="zoom-in"></div>
    </div>
<div class="col-lg-12 col-md-12 col-sm-12 konten">
    <div class="container">
        <div class="row mt-4 mb-4">
            <div class="container">
            <div class="materi" data-aos="fade-up">MATERI KEGIATAN</div>
            <center><div class="garis-materi" data-aos="fade-up" data-aos-delay="200"></div></center>
            </div>
        </div>

    {{-- Dokumen --}}

    <div class="content5" data-aos="fade-up">
        <div class="container">
        <div class="card card-materi" data-aos="zoom-out">
            <div class="col-lg-12">
                <div class="row">
                <div class="col-lg-4 col-md-12 col-sm-12">
                    <img data-aos="zoom-out" src="{{ asset('assets/images/LAINNYA/LAINNYA - GALERI/8 Foto.jpg') }}" alt="image" class="img-fluid gmb">
                </div>
                
                <div class="col-lg-6 col-md-12 col-sm-12" style="margin-top:55px;">
                    <ul class="isi">
                        <p data-aos="fade-up" class="doctitle">Materi Sosialisasi Pengolahan Jelantah</p>
                        <p class="date" data-aos="fade-up" data-aos-delay="200"> 
                            20 Maret 2020 
                        </p>
                        <p class="doc"  data-aos="fade-up" data-aos-delay="300">
                            Materi pengenalan tentang komunitas Jelantah4Change, baik berupa profil komunitas, program-program, dan dokumentasi kegiatan.
                        </p>
                    </ul>
                </div>
                
                <div class="col-lg-2 col-md-12 col-sm-12 bton">
                    <div class="row" data-aos="fade-up">
                    <div class="col-md-12 col-sm-12 col-bton">
                    <a href="{{ route('detail-jelantah') }}" class="default-button btn1">
                    <span style="text-align:center;">
                        Detail
                        <i class="fab fa-readme" style="margin-left: 10px "></i>
                    </span></a>
                    </div>
                    </div>
                    <div class="row" data-aos="fade-up" data-aos-delay="300">
                    <div class="col-md-12 col-sm-12 col-bton">
                    <a href="{{ asset("assets/materi/Profil J4C Juli 2020.pdf") }}" target="_blank" class="default-button2 btn2">
                    <span>
                        Unduh
                        <i class="fa fa-cloud-download-alt" style="color: #FFFFFF; margin-left: 10px"></i>
                    </span>
                    </a>
                    </div>
                    </div>
                </div>
                </div>
            </div>
        </div>
        </div>

        <div class="col-lg-12 col-md-12 col-sm-12">
        <div class="container" style="margin-top: 40px">
            <div class="card card-materi"  data-aos="zoom-out">
                <div class="row">
                <div class="col-lg-4 col-md-12 col-sm-12">
                    <img src="{{ asset('assets/images/LAINNYA/LAINNYA - DOKUMENTASI KEGIATAN/FPSN 2021/Edukasi Jelantah Kelurahan Margasari Kota Balikpapan.jpg') }}" alt="image" class="img-fluid gmb">
                </div>
                
                <div class="col-lg-6 col-md-12 col-sm-12" style="margin-top:55px;">
                    <ul class="isi">
                        <p data-aos="fade-up" class="doctitle">Kelola Minyak Jelantah Bawa Berkah</p>
                        <p class="date" data-aos="fade-up" data-aos-delay="300"> 
                            20 Maret 2020 
                        </p>
                        <p class="doc" data-aos="fade-up" data-aos-delay="300">
                            Materi tentang pengelolaan minyak jelantah sehingga bisa membawa berkah dan pundi-pundi pemasukan.
                        </p>
                    </ul>
                </div>
                
                <div class="col-lg-2 col-md-12 col-sm-12 bton">
                    <div class="row" data-aos="fade-up">
                    <div class="col-md-12 col-sm-12 col-bton">
                    <a href="{{ route('detail-pengelolaan') }}" class="default-button btn1">
                    <span style="text-align:center;">
                        Detail
                        <i class="fab fa-readme" style="margin-left: 10px "></i>
                    </span></a>
                    </div>
                    </div>
                    <div class="row" data-aos="fade-up" data-aos-delay="300">
                    <div class="col-md-12 col-sm-12 col-bton">
                    <a href="{{ asset("assets/materi/[Waste4Change] Mitra Pengumpul Jelantah.pdf") }}" target="_blank" class="default-button2 btn2">
                    <span>
                        Unduh
                        <i class="fa fa-cloud-download-alt" style="color: #FFFFFF; margin-left: 10px"></i>
                    </span>
                    </a>
                    </div>
                    </div>
                </div>
                </div>
            </div>
        </div>
        </div>
    </div>
{{-- end Dokumen --}}

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