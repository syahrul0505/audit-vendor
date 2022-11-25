@extends('app')

@section('container')
<style>
    html,body{
        max-width: 100%;
        overflow-x: hidden;
    }
    .regulasi{
        font-size: 40px;
        color: #029B4B;
        text-transform: uppercase;
        font-weight: 700;
        text-align: center;
    }
    .garis-regulasi{
        background:  #029B4B;
        max-width: 398px;
        height: 10px
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
        max-width: 580px;
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
    .judul-isi{
        color: #029B4B; font-size: 20px; text-align:left;font-weight:700
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
        .regulasi{
            font-size: 30px
        }
        .garis-regulasi{
            width: 300px;
            height: 5px 
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
        .regulasi{
            font-size: 30px
        }
        .garis-regulasi{
            width: 300px;
            height: 5px 
        }
        .isi{
            font-size: 16px
        }
        .judul{
            font-size: 23px
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
        .regulasi{
            font-size: 25px
        }
        .garis-regulasi{
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
        .regulasi{
            font-size: 25px
        }
        .garis-regulasi{
            width: 250px;
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
    <div class="col-lg-12 col-md-12 col-sm-5 mt-lg-4 justify-content-center">
        <div class="row">
            <span class="regulasi" data-aos="fade-up">regulasi Jelantah</span>
            <center><div class="garis-regulasi" data-aos="fade-up" data-aos-delay="200"></div></center>
        </div>
    </div>
        <center>
        <div class="col-lg-9 col-md-8 col-sm-9 mt-4">
            <p class="judul-isi"  data-aos="fade-up">"SIKLUS JELANTAH BERBAHAYA"</p>
            <p class="isi" data-aos="fade-up" data-aos-delay="200">perlu kita ketahui bahwa pengelolaan jelantah secara tidak bertanggung jawab berpotensi merugikan konsumen. Mari kita simak bagaimana siklus jelantah berbahaya dapat terjadi pada infografik dibawah ini:</p>
<br>
            <img src="{{ asset('assets/images/siklus.png') }}" class="img-fluid" data-aos="zoom-in"  alt="">
<br>
<br>
            <p class="isi" data-aos="fade-up" data-aos-delay="200">So, lebih baik jelantahmu diserahkan kepada pihak yang lebih bertanggung jawab ya Heroes!</p>            
<br>
            <p class="judul-isi"  data-aos="fade-up">"Regulasi"</p>
            <p class="isi" data-aos="fade-up" data-aos-delay="200">Yuk kenali dasar hukum jelantah. Loh kok jelantah ada dasar hukumnya? Yup secara eksplisit jelantah yang merupakan limbah masuk dalam Undang-Undang dan Peraturan Pemerintah, penasaran? Langsung saja berikut penjabarannya ya.</p>
<br>
            <ul class="isi">
                <li data-aos="fade-up" data-aos-delay="200">PP No. 86 Tahun 2009 “Keamanan Pangan”. Pasal 1 ayat (2) Keamanan pangan adalah kondisi dan upaya yang diperlukan untuk mencegah pangan dari kemungkinan cemaran biologis, kimia dan benda lain yang dapat mengganggu, merugikan, dan membahayakan kesehatan manusia.</li>
                <br>
                <li data-aos="fade-up" data-aos-delay="200">UU No. 23 Tahun 1992 “Kesehatan”. Pasal 5 Setiap orang berkewajiban untuk ikut serta dalam memelihara dan meningkatkan derajat kesehatan perseorangan, keluarga, dan lingkungannya.</li>
                <br>
                <li data-aos="fade-up" data-aos-delay="200">UU No. 7 Tahun 2004 “Sumber Daya Air”. Pasal 23 terkait dengan “Pengelolaan kualitas air dan pengendalian pencemaran air”</li>
                <br>
                <li data-aos="fade-up" data-aos-delay="200">UU No. 32 Tahun 2009 “Perlindungan dan Pengelolaan Lingkungan Hidup”. Pasal 1 ayat (2) adalah upaya sistematis dan terpadu yang dilakukan untuk melestarikan fungsi lingkungan hidup dan mencegah terjadinya pencemaran dan/atau kerusakan lingkungan hidup yang meliputi perencanaan, pemanfaatan, pengendalian, pemeliharaan, pengawasan, dan penegakan hukum</li>
                <br>
                <li data-aos="fade-up" data-aos-delay="200">PP No.6 Tahun 2014 “Kesehatan Lingkungan”. Pasal 1 ayat (1) Kesehatan lingkungan adalah upaya pencegahan penyakit dan/atau gangguan kesehatan dari faktor risiko lingkungan untuk mewujudkan kualitas lingkungan yang sehat baik dari aspek fisik, kimia, biologi maupun sosial.</li>
            </ul>
<br>
            <p class="isi" data-aos="fade-up" data-aos-delay="200">Kenapa jelantah secara eksplisit memiliki dasar hukum? Karena jelantah merupakan limbah yang jika digunakan secara tidak bijak akan berdampak buruk bagi kesehatan dan jika tidak dikelola dan diolah secara bertanggung jawab jelas akan memberikan dampak negatif bagi lingkungan. So, yuk mulai dari sekarang! </p>
<br>
            <p class="judul-isi"  data-aos="fade-up">“Educate, Collect and Donate with Jelantah4Change”</p>
            <p class="isi" data-aos="fade-up" data-aos-delay="200">Kenal minyak jelantah sudah, dampak jelantah sudah dan regulasinya juga sudah jelas selanjutnya kemana jelantah mu akan diserahkan? Eits jangan bingung dan ragu lagi ya Heroes, keraguanmu akan terjawab bersama Jelantah4Change. Langsung saja kita intip kegiatan Jelantah4Change itu apa saja pada infografik dibawah ini.</p>
<br>
            <img src="{{ asset('assets/images/kegiatanjelantah.png') }}" data-aos="zoom-in" class="img-fluid"  alt="">
<br>
<br>
            <p class="isi" data-aos="fade-up" data-aos-delay="200">Jadi gimana Heroes? Jelantah yang kamu donasikan akan dikelola secara bijak karena Jelantah4Change bekerjasama dalam pengolahan jelantah ke tahap yang lebih lanjut seperti biodiesel, sabun, lilin dan sebagainya. Lalu dana yang terkumpul akan digunakan sebagai aksi sosial seperti beasiswa pendidikan, lampu solar panel, buku-buku pemberdayaan masyarakat. Jelantah mu tentu dikelola dan menjadi manfaat bagi sekitar. Hal baik hanya perlu dimulai dari langkah kecil dan menjadi dampak besar. </p>
<br>
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
                    <p class="jelantah-mitra">Dukung menjadi Jelantah Heroes / Mitra</p>
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