@extends('app')

@section('container')
<style>
    
    html,body{
        max-width: 100%;
        overflow-x: hidden;
    }

    .p{
        font-size: 20px
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
    .edukasi{
        font-size: 40px;
        color: #029B4B;
        text-transform: uppercase;
        font-weight: 700;
        text-align: center;
    }
    .garis-edukasi{
        background:  #029B4B;
        width: 420px;
        height: 10px
    }
    .judul2{
        font-style: normal;
        font-weight: bold;
        font-size: 40px;
        line-height: 40px;
        color: #029B4B;
        margin-bottom:8px;
    }
    

    .content1{
        width: 70%;
        height: auto;
        margin-right: 175px;
        margin-top: 10px;
        margin-bottom: 10px;
        top: 0px;

        font-family: Poppins;
        font-style: normal;
        font-weight: normal;
        font-size: 19px;
        line-height: 32px;
        /* or 160% */

        text-align: left;
    }

    .img-edukasi{
        width: 720px;
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
    
    .link{
        color: #1890FF;
    }

    .isi{
        font-size: 20px;
        text-align: left;
    }
    .judul-isi{
        color: #029B4B; font-size: 20px; text-align:left;font-weight:600
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
        .edukasi{
            font-size: 30px
        }
        .garis-edukasi{
            width: 300px;
            height: 5px
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
        .edukasi{
            font-size: 30px
        }
        .garis-edukasi{
            width: 310px;
            height: 5px
        }
        .isi{
            font-size: 16px
        }
        .judul{
            font-size: 22px
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
        .edukasi{
            font-size: 25px
        }
        .garis-edukasi{
            width: 235px;
            height: 5px
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
        .edukasi{
            font-size: 25px
        }
        .garis-edukasi{
            width: 260px;
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
<section style="margin-top: 60px">
<div class="container">
<div class="col-lg-12 col-md-12 col-sm-12 mt-lg-4 justify-content-center">
        <div class="row" data-aos="fade-up">
                <div class="edukasi">Edukasi/Kampanye</div>
                <center><div class="garis-edukasi"></div></center>
        </div>
</div>


<center>
<div class="col-lg-9 col-md-8 col-sm-9 mt-4">
        <p class="isi" data-aos="fade-up" data-aos-delay="100">Heroes, edukasi merupakan misi pertama pada Jelantah4Change mengenai bahaya minyak jelantah bagi kesehatan dan lingkungan, pengolahan minyak jelantah, bagaimana perkembangan biodiesel dari jelantah dan masih banyak lagi. Jelantah4Change melakukan edukasi pada beberapa media secara online maupun offline. Yuk kita intip kegiatannya.</p>
<br>
        <p class="judul-isi" data-aos="fade-up" data-aos-delay="200">1. Sosialisasi langsung kepada masyarakat</p>
        <p class="isi" data-aos="fade-up" data-aos-delay="300">
            Sosialisasi dalam kelompok kelompok yang ada di masyarakat seperti kelompok arisan, ibu-ibu pkk, zerowaste movement, dan lainnya. Dengan sosialisasi disetiap kesempatan seperti PKK, Car free day, ataupun pameran/expo Jelantah4Change berusaha menjangkau semua kalangan. Sehingga kesadaran masyarakat mengenai jelantah dapat tersampaikan secara luas.</p>
    
        <img class="img-fluid" src="{{asset('assets/images/program/edukasi1.png')}}" data-aos="zoom-in" alt="">
<br>

    <p class="judul-isi" data-aos="fade-up">2. Melalui siaran radio di kota-kota</p>
    <p class="isi" data-aos="fade-up" data-aos-delay="200">
        Jelantah4Change mendapat kesempatan untuk mengedukasi melalui radio juga lho Heroes, keren bukan
    </p>

<br>
    <img class="img-fluid mb-4" src="{{asset('assets/images/program/edukasi2.png')}}" data-aos="zoom-in" alt="">
    
<br>

    <p class="judul-isi" data-aos="fade-up">3. Melalui media sosial</p>
    <p class="isi" data-aos="fade-up">
        Selain secara offline, Jelantah4Change pun memanfaatkan sosial media sebagai media edukasi. Selain itu, J4C juga sering diundang sebagai narasumber pada talkshow, webinar ataupun podcast lho. Dengan harapan tidak ada yang menjadi hambatan untuk terus meningkatkan awareness terhadap jelantah ya Heroes. Apa saja sih platform edukasi J4C yuk kita intip 
    </p>

<br>
    <img class="img-fluid" src="{{asset('assets/images/program/edukasi3.png')}}" data-aos="zoom-in" alt="">
<br>
    <p class="isi" data-aos="fade-up">
        Nah, Jelantah4Change aktif di Instagram <u><a class="link" href="https://instagram.com/jelantah4change/">@jelantah4change</a></u> dan Youtube <a href="https://www.youtube.com/channel/UC79V_CYPHMqC9u9jYnl5K3w">Jelantah4Change</a> ya Heroes jangan lupa difollow dan subscribe supaya tidak ketinggalan info menarik dari Jelantah4Change ya.
        <br>
        <br>
        Selanjutnya merupakan edukasi pada beberapa talkshow, webinar yang pernah diselenggarakan oleh J4C dan podcast bersama Waste4Change, langsung saja Heroes kita intip yuk
    </p>
<br>
    <img class="img-fluid" src="{{asset('assets/images/program/edukasi4.png')}}" data-aos="zoom-in" alt="">
<br>
    <p class="isi" data-aos="fade-up">
        Jadi, Jelantah4Change pernah menjadi narasumber pada SEA Today, Ruang Tamu by BFI Finance, liputan bersama DAAI TV dan masih banyak lagi. Bagi kamu yang ingin tahu lebih banyak tapi ketinggalan infonya bisa langsung meluncur pada link berikut ya <u><a class="link" href="https://www.youtube.com/playlist?list=PLAWNHowIqpwGZHQjrnhQIxHHN66wm_ZpB">YouTube</a></u> 
        <br>
        <br>
        Adanya pandemi Covid19 yang membatasi ruang gerak edukasi secara bertatap muka maka Jelantah4Change pun melakukan edukasi dengan mengadakan webinar yang diisi oleh beberapa narasumber seperti dokter, bekerjasama dengan Waste4Change ataupun CarbonEthics, seru ya Heroes. 
        <br>
        <br>
        Selain itu, Jelantah4Change pun pernah diundang dalam podcast bersama Waste4Change, langsung saja Heroes kamu bisa mendengarkan podcastnya dikala senggang pada aplikasi spotify berikut <u><a class="link" href="https://open.spotify.com/episode/51sBwPd6OA1CzSuHnCCN1r?si=u5PqtAcnSCC_VT3HK_SrlA&utm_source=copy-link&nd=1">Ada Berkah di Balik Limbah Jelantah - Podcast4Change | Podcast on Spotify</a></u>    
    </p>
<br>
    <p class="judul-isi" data-aos="fade-up">4. Kerjasama dalam Edukasi</p>
    <p class="isi" data-aos="fade-up">
        Heroes, Jelantah4Change juga membuka semua peluang kerjasama dalam hal edukasi seperti Webinar, workshop, pelatihan ataupun program CSR. 
        <br><br>
        Nah salah satu contohnya Pertamina RU V bersama Jelantah4Change melakukan program pemberdayaan masyarakat melalui minyak jelantah untuk melestarikan lingkungan. Program ini dilakukan melalui pelatihan pembuatan lilin pada masyarakat di Kampung Atas Air, Kelurahan Margasari. Program ini melibatkan kelompok masyarakat yang diberi nama “Mario Jela” yang mana merupakan singkatan dari Margasari Olah Jelantah. Setelah melalui pelatihan pembuatan lilin selanjutnya masyarakat diajarkan metode pemasarannya. Nah kamu bisa nonton keseruannya di channel Youtube Pertamina <u><a class="link" href="https://www.youtube.com/watch?v=kteTwZAEbSk&feature=youtu.be">Kampung Atas Air Sulap Jelantah jadi Lilin</a></u> atau membacanya pada media berita berikut Pertamina Latih Warga Manfaatkan Minyak Jelantah Menjadi Lilin - Migas Katadata.co.id    
    </p>
<br>
    <img class="img-fluid" src="{{asset('assets/images/program/edukasi5.png')}}" data-aos="zoom-in" alt="">
<br>
    <p class="isi">
        Wah seru bukan Heroes? Jika instansi mu tertarik untuk bekerjasama dengan Jelantah4Change langsung kontak kami ya <u><a class="link" href="https://api.whatsapp.com/send/?phone=6282353285473&text&app_absent=0"> bit.ly/ContactPersonJ4C</a></u> 
    </p>
<br>
    <div class="col-lg-12 col-md-12 col-sm-12 mt-lg-4">
        <div class="d-flex justify-content-center"  data-aos="fade-up">
            <h5 class="share">Share On</h5>
            <div class="box4"><a href=""><i class="fab fa-facebook-f" style="color: white; margin-top:8px;"></i></a></div>
            <div class="box4"><a href=""><i class="fab fa-twitter" style="color: white; margin-top:8px;"></i></a></div>
            <div class="box4"><a href=""><i class="fab fa-instagram" style="color: white; margin-top:8px;"></i></a></div>
            <div class="box4"><a href=""><i class="fab fa-linkedin-in" style="color: white; margin-top:8px;"></i></a></div>
            <div class="box4"><a href=""><i class="fas fa-clone" style="color: white; margin-top:8px;"></i></a></div>
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