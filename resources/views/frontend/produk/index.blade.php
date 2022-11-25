@extends('app')

@section('container')
<style>
    html,body{
        overflow-x: hidden;
        max-width : 100%
    }

    .sabun{
        font-size: 40px;
        color: #029B4B;
        text-transform: uppercase;
        font-weight: 700;
        text-align: center;
    }
    .garis-sabun{
        background:  #029B4B;
        width: 348px;
        height: 10px
    }

    .lilin{
        font-size: 40px;
        color: #029B4B;
        text-transform: uppercase;
        font-weight: 700;
        text-align: center;
    }
    .garis-lilin{
        background:  #029B4B;
        width: 302px;
        height: 10px
    }

    .lampu{
        font-size: 40px;
        color: #029B4B;
        text-transform: uppercase;
        font-weight: 700;
        text-align: center;
    }
    .garis-lampu{
        background:  #029B4B;
        width: 429px;
        height: 10px
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
        margin-top: 60px; 
        margin-bottom: 60px;
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
        font-size: 16px;
        color:#595959;
    }
    .isi{
        font-size: 20px;
        text-align: left;
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
        .sabun{
            font-size: 35px
        }
        .garis-sabun{
            width: 303px;
            height: 5px;
        }
        .lilin{
            font-size: 35px
        }
        .garis-lilin{
            width: 267px;
            height: 5px;
        }
        .lampu{
            font-size: 35px
        }
        .garis-lampu{
            width: 374px;
            height: 5px;
        }
        .isi{
            font-size: 16px
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
        .sabun{
            font-size: 34px
        }
        .garis-sabun{
            width: 295px;
            height: 5px;
        }
        .lilin{
            font-size: 34px
        }
        .garis-lilin{
            width: 258px;
            height: 5px;
        }
        .lampu{
            font-size: 30px
        }
        .garis-lampu{
            width: 321px;
            height: 5px;
        }
        .isi{
            font-size: 16px
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
        .sabun{
            font-size: 28px
        }
        .garis-sabun{
            width: 243px;
            height: 5px;
        }
        .lilin{
            font-size: 28px
        }
        .garis-lilin{
            width: 209px;
            height: 5px;
        }
        .lampu{
            font-size: 27px
        }
        .garis-lampu{
            width: 287px;
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
        .sabun{
            font-size: 24px
        }
        .garis-sabun{
            width: 170px;
            height: 5px;
        }
        .lilin{
            font-size: 28px
        }
        .garis-lilin{
            width: 170px;
            height: 5px;
        }
        .lampu{
            font-size: 28px
        }
        .garis-lampu{
            width: 170px;
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
        .footer .footer-top {
        background-position: center bottom;
        height: auto;
        padding-bottom: 20px
        }
    }
</style>

<section style="margin-top: 60px">
<div class="container">
    <div class="col-lg-12 col-md-12 col-sm-12 mt-lg-4 justify-content-center">
        <div class="row mt-4 mb-4">
            <div class="sabun" data-aos="fade-up">SABUN JELANTAH</div>
            <center><div class="garis-sabun" data-aos="fade-up" data-aos-delay="200"></div></center>
        </div>
    </div>  

<center>
<div class="col-lg-9 col-md-8 col-sm-9 mt-4">

    <img src="{{ asset('assets/images/produk.png') }}" class="img-fluid" data-aos="zoom-in" alt="">
<br>
            <p class="isi mt-4 mb-4" data-aos="fade-up" data-aos-delay="200">Sabun jelantah ramah bagi lingkungan, pemanfaatan sabun dari jelantah bertujuan untuk mengurangi 
                dampak pencemaran lingkungan dimana kadar lemak yang terkandung lebih rendah dari minyak jelantah jika dibuang ke lingkungan.
                Sabun dari jelantah masih memerlukan pengujian lebih lanjut. Menurut Pakar Lingkungan ITB, 
                Katharina Oginawati menyarankan sabun tersebut digunakan untuk mencuci benda yang tidak bersentuhan langsung dengan kulit.
            </p>

            <div class="lilin" data-aos="fade-up">LILIN JELANTAH</div>
            <center><div class="garis-lilin" data-aos="fade-up" data-aos-delay="200"></div></center>

            <img src="{{ asset('assets/images/lilin.png') }}" class="img-fluid mt-4" data-aos="zoom-in" alt="">
<br>
            <p class="isi mt-4 mb-4" data-aos="fade-up" data-aos-delay="200">Selain dapat mengurangi pencemaran lingkungan akibat pembuangan minyak jelantah yang tidak terkelola. 
                Pembuatan lilin dari jelantah dapat meningkatkan nilai guna dan ekonomis dari minyak jelantah loh. Gunakan minyak jelantah yang 
                telah disaring dan tidak berbau, kalian dapat menambahkan essential oil pada lilin. Heroes, kamu bisa membuat lilin ini sendiri 
                di rumah, caranya bisa kalian lihat pada Channel Youtube Jelantah4Change ya Kreasi <u><a href="">Lilin Jelantah ala Jelantah4Change.</a></u>


            <div class="lampu" data-aos="fade-up">LAMPU LED JELANTAH</div>
            <center><div class="garis-lampu" data-aos="fade-up" data-aos-delay="200"></div></center>

            <img src="{{ asset('assets/images/lampu.png') }}" class="img-fluid mt-4" data-aos="zoom-in" alt="">
<br>
            <p class="isi mt-4" data-aos="fade-up" data-aos-delay="200">
                Cooking Oil Lamp adalah lampu LED portable inovatif hasil kerjasama Jelantah4Change dan Lumir Indonesia yang berbahan 
                bakar minyak goreng atau jelantah. 
            </p>
            <p class="isi" data-aos="fade-up" data-aos-delay="200">
            Kegunaan :
            </p>
            <ol class="isi">
                <li data-aos="fade-up" data-aos-delay="200">
                    Lampu Belajar
                </li>
                <li data-aos="fade-up" data-aos-delay="200">
                    Lampu Darurat
                </li>
                <li data-aos="fade-up" data-aos-delay="200">
                    Lampu Outdoor (untuk hikers, camping dll)
                </li>
            </ol>
            <br>
            <p class="isi" data-aos="fade-up" data-aos-delay="200">Kelebihan :</p>
            <ol class="isi">
                <li data-aos="fade-up" data-aos-delay="200">
                    Ramah Lingkungan
                </li>
                <li data-aos="fade-up" data-aos-delay="200">
                    Tahan Lama
                </li>
            </ol>
<br>
    <div class="container" style="margin-bottom:100px;" data-aos="fade-up">
        <div class="row">
            <div class="col-lg-12">
                <div class="d-flex justify-content-center">
                    <h5 class="share">Share On</h5>
                    <div class="box4"><a href=""><i class="fab fa-facebook-f" style="color: white; margin-top:8px;"></i></a></div>
                    <div class="box4"><a href=""><i class="fab fa-twitter" style="color: white; margin-top:8px;"></i></a></div>
                    <div class="box4"><a href=""><i class="fab fa-instagram" style="color: white; margin-top:8px;"></i></a></div>
                    <div class="box4"><a href=""><i class="fab fa-linkedin-in" style="color: white; margin-top:8px;"></i></a></div>
                    <div class="box4"><a href=""><i class="fas fa-clone" style="color: white; margin-top:8px;"></i></a></div>
                </div>
            </div>
        </div>
    </div>
</div>
</center>
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
                                    <div class="d-flex justify-content-center"><a class="default-button2 join" href=""><span style="position:relative; top:5px"> Daftar<i class="fa fa-running "  style="padding-left: 20px;"></i></span></a></div>
                                </div>
                            </div>
                            <div class="col-lg-6 col-md-6 col-sm-6 col-12" data-aos="fade-up">
                                <div class="jelantah-card">
                                    <h3 class="seratus mb-4">JOIN MITRA</h3>
                                    <div class="d-flex justify-content-center"><a class="default-button2 join" href=""><span style="position:relative; top:5px">Join<i class="fa fa-laugh" style="padding-left: 20px;" > </i> </span></a></div>
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