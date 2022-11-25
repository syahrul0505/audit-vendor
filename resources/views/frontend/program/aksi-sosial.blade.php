@extends('app')
<style>
     html,body{
        max-width: 100%;
        overflow-x: hidden;
    }
    .aksi{
        font-size: 40px;
        color: #029B4B;
        text-transform: uppercase;
        font-weight: 700;
        text-align: center;
    }
    .garis-aksi{
        background:  #029B4B;
        width: 243px;
        height: 10px
    }
    
    .box4{ 
        width: 32px; 
        height: 32px; 
        margin: 70px 7px 7px 7px;
        background: #029B4B; 
        border-radius: 50%;
    }
    .share{
        margin-top:72px;
        margin-right:10px;
        font-size: 16px;
        color:#595959;
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
        .aksi{
            font-size: 28px
        }
        .garis-aksi{
            width: 170px;
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
        .aksi{
            font-size: 25px
        }
        .garis-aksi{
            width: 150px;
            height: 5px
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
        .aksi{
            font-size: 22px
        }
        .garis-aksi{
            width: 130px;
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
        .aksi{
            font-size: 25px
        }
        .garis-aksi{
            width: 152px;
            height: 5px
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
@section('container')
<section style="margin-top: 60px">
<div class="container">
<div class="col-lg-12 col-md-12 col-sm-12 mt-lg-4 justify-content-center">
    <div class="row" data-aos="fade-up">
        <div class="aksi">Aksi Sosial</div>
        <center><div class="garis-aksi"></div></center>
    </div>
</div>
<br>
<center>
<div class="col-lg-9 col-md-8 col-sm-9 mt-4">
    <p class="isi" data-aos="fade-up" data-aos-delay="200">
            Jelantah jadi berkah merupakan hasil dari donasi jelantah yang telah terkumpul. Jadi, jelantah yang telah dikelola dengan baik akan menghasilkan feedback yang J4C manfaatkan untuk program Pemberdayaan Masyarakat. Nah, bentuk pemberdayaan masyarakat sebagai berikut Heroes 
        </p>  
            <ol class="isi">
                <li data-aos="fade-up" data-aos-delay="300">
                    Donasi kepada panti asuhan
                </li>
                <br>
                <li data-aos="fade-up" data-aos-delay="300">
                    Donasi kepada korban bencana alam
                </li>
                <br>
                <li data-aos="fade-up" data-aos-delay="300">
                    Pemberian beasiswa dan peduli penduli pendidikan
                </li>
                <br>
                <li data-aos="fade-up" data-aos-delay="300">
                    Berikut beberapa dokumentasi aksi sosial yang pernah Jelantah4Change lakukan
                </li>
            </ol>   
    <br>
        <img class="img-fluid" src="{{asset('assets/images/program/aksi1.png')}}" data-aos="zoom-in" alt="">

    <br>
        <p class="isi mt-4" data-aos="fade-up">
            Jelantah4Change juga melakukan tanggap terhadap pandemi Covid19 seperti yang dilakukan relawan Soloraya yang membagikan sembako kepada tukang parkir dan tukang becak area Soloraya. Relawan Yogyakarta pun melakukan hal serupa yaitu donasi berupa uang untuk memenuhi kebutuhan shelter isoman di Wisma Pembina Tenaga Pengembangan Masyarakat (PTPM) yang nerupakan tempat isolasi mandiri para pasien positif Covid. Selain itu UCO Project yang adalah relawan daerah Jakarta Selatan melakukan aksi sosial berupa beras, susu dan buah-buahan kepada Rumah Harapan Indonesia yang merupakan rumah singgah untuk anak-anak sakit (0 - 17 tahun) dari keluarga tidak mampu yang berasal dari luar Jakarta yang dirujuk untuk berobat atau rawat jalan di rumah sakit di Jakarta. 
        </p>
    <br>
        <img class="img-fluid" src="{{asset('assets/images/program/aksi2.png')}}" data-aos="zoom-in" alt="">
    <br>
        <p class="isi mt-4" data-aos="fade-up">
            Tanggap Bencana Banjir KalSel dan Gempa SulBar dan Peduli Pendidikan berupa Beasiswa dan Donasi Buku kepada Ruang Baca 
        </p>
    <br>
        <img class="img-fluid" src="{{asset('assets/images/program/aksi3.png')}}" data-aos="zoom-in" alt="">
    <br>
        <p class="isi mt-4" data-aos="fade-up">
            Jelantah Sister merupakan rekan dari Jelantah4Change Blora yang peduli pada bidang kesehatan. Jelantah Sister dalam kepeduliannya terhadap kesehatan seringkali melakukan kegiatan pemeriksaan cek gula darah dan pengukuran tekanan darah. Tujuan kegiatan ini adalah deteksi dini penyakit tidak menular yaitu hipertensi dan diabetes. Untuk dapat dilakukan pemeriksaan peserta cukup membawa 250mL jelantah saja, gimana keren ya
        </p>

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
<center>
<hr style="width: 85%; background:black;">
</center>
<br>
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
                                    <div class="d-flex justify-content-center"><a class="default-button2 join" href=""><span style="position:relative; top: 5px"> Daftar<i class="fa fa-running "  style="padding-left: 20px;"></i></span></a></div>
                                </div>
                            </div>
                            <div class="col-lg-6 col-md-6 col-sm-6 col-12" data-aos="fade-up">
                                <div class="jelantah-card">
                                    <h3 class="seratus mb-4">JOIN MITRA</h3>
                                    <div class="d-flex justify-content-center"><a class="default-button2 join" href=""><span style="position:relative; top: 5px">Join<i class="fa fa-laugh" style="padding-left: 20px;" > </i> </span></a></div>
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