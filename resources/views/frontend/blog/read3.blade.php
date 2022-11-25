@extends('app')

@section('container')
<style>
    html,body{
        max-width: 100%;
        overflow-x: hidden;
    }
  .head{
    /* width: 720px; */

    /* Large heading 38/bold */

    font-family: Poppins;
    font-style: normal;
    font-weight: 500;
    font-size: 38px;
    line-height: 46px;
    /* or 121% */

    text-align: left;
    /* Neutral/9 */

    color: #434343;


    /* Inside Auto Layout */
/* 
    flex: none;
    order: 0;
    flex-grow: 1;
    margin: 0px 10px; */
  }

  .text--left{
      text-align: left!important;
  }

  .comment{
      font-size: 25px;
  }
    .line{
        border: 1px solid #8C8C8C
    }

  .lihat {
        text-align: center;
        background: white;
        box-shadow: 0px 12px 32px rgba(2, 155, 75, 0.5);
        border-radius: 10px;
        color: #029B4B;
    }

    .post {
        margin-top: 15px;
        width: 200px;
        background: #029B4B;
        box-shadow: 0px 10px 45px rgba(2, 155, 75, 0.5);
        border-radius: 12px;
    }

    .artikel-terkait {
        font-family: Poppins;
        font-style: normal;
        font-weight: bold;
        font-size: 30px;
        line-height: 40px;
        /* identical to box height, or 100% */

        text-align: center;

        /* Color Pallete/Green 1 */

        color: #029B4B;


        /* Inside Auto Layout */

        flex: none;
        order: 0;
        flex-grow: 0;
        margin: 20px 0px;
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

    .lihat-lebih {
        text-align: center;
        background: #029B4B;
        box-shadow: 0px 12px 32px rgba(2, 155, 75, 0.5);
        border-radius: 10px;
    }

    .garis7 {
        width: 580px;
        height: 8px;
        background-color: #3eb65f;
    }

    .radius--50{
        border-radius: 50px;
    }
    .link{
        color: #1890FF;
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
        font-weight: 500;
        font-size: 16px;
        color: #595959;
    }

    .post {
        margin-top: 15px;
        width: 200px;
        background: #029B4B;
        box-shadow: 0px 12px 32px 0px #029B4B80;
        border-radius: 12px;
    }
    .default-button {
    position: relative;
    overflow: hidden;
    padding: 15px;
    width: 107px;
    height: 56px;
    border-radius: 8px;
    display: inline-block;
    color: white;
    -webkit-transition: .5s ease-in-out;
    transition: .5s ease-in-out;
    background-color: #029B4B;
    font-size: 15px;
    font-weight: 600;
    }

    .default-button span {
        position: relative;
        z-index: 9
    }

    .default-button i {
        position: relative;
        top: 2px;
        margin-left: 2px
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
        background-color: black
    }

    .default-button:hover {
        color: white
    }

    .default-button:hover::before {
        width: 300%;
        height: 300%
    }

    .btn{
        float: right;
    }
    .date{
        font-size: 20px; font-weight: 500; text-align: left
    }
    .konten-read{
        width: 720px;
    }
    .isi{
        font-weight: normal;
        font-size: 20px;
        text-align: justify;
        color: #595959;
    }
    .isi-judul{
        font-size: 20px;
        font-weight: 600;
        text-align: left;
        color: #029B4B;

    }
    .gmb-komen{
        border-radius: 50%; width: 80px; height: 80px
    }
    .name{
        font-size: 20px; font-weight: 600;text-align: left
    }
    .komentar{
        font-size: 16px; text-align: left
    }
    .latest{
        text-align: right;
    }
    
    @media only screen and (min-width:1024px)and (max-width:1199px){
        .uni-blog-read1{
            height: 617px;
        }
        #header{
            padding: 20px
        }
    }
    @media only screen and (min-width:768px) and (max-width:1023px){
        .uni-blog-read1{
            height: 460px
        }
        .komentar{
            margin-bottom: 50px
        }
        .konten-read{
            width: 100%
        }
    }
    @media only screen and (min-width:540px) and (max-width:767px){
        .uni-blog-read1{
            height: 328px
        }
        .konten-read{
            width: 100%
        }
        .head{
            font-size: 25px
        }
        .isi{
            font-size: 16px
        }
        .latest{
            position: relative;
            bottom: 26px;
        }
        .gmb-komen{
            float: left
        }
        .info{
            padding: 25px 12px
        }
        .comment{
            margin-top: 50px
        }
        .judul{
            font-size: 26px
        }
        .garis7{
            width: 380px
        }
        .jelantah-mitra{
            font-size: 17px;
        }
    }
    @media only screen and (min-width:411px) and (max-width:539px){
        .uni-blog-read1{
            height: 256px
        }
        .konten-read{
            width: 100%
        }
        .head{
            font-size: 25px
        }
        .isi{
            font-size: 16px
        }
        .latest{
            position: relative;
            bottom: 26px;
        }
        .gmb-komen{
            float: left
        }
        .info{
            padding: 25px 12px
        }
        .comment{
            margin-top: 50px
        }
        .judul{
            font-size: 26px
        }
        .garis7{
            width: 380px
        }
        .jelantah-mitra{
            font-size: 17px;
        }
    }
    @media only screen and (min-width:375px) and (max-width:410px){
        .uni-blog-read1{
            height: 225px
        }
        .konten-read{
            width: 100%
        }
        .head{
            font-size: 25px
        }
        .isi{
            font-size: 16px
        }
        .latest{
            position: relative;
            bottom: 26px;
        }
        .gmb-komen{
            float: left
        }
        .info{
            padding: 25px 12px
        }
        .comment{
            margin-top: 50px
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
    @media only screen and (min-width:360px) and (max-width:374px){
        .uni-blog-read1{
            height: 215px
        }
        .konten-read{
            width: 100%
        }
        .head{
            font-size: 25px
        }
        .isi{
            font-size: 16px
        }
        .latest{
            position: relative;
            bottom: 26px;
        }
        .gmb-komen{
            float: left
        }
        .info{
            padding: 25px 12px
        }
        .comment{
            margin-top: 50px
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
    @media only screen and (min-width:300px) and (max-width:359px){
        .uni-blog-read1{
            height: 195px
        }
        .konten-read{
            width: 100%
        }
        .head{
            font-size: 20px
        }
        .link{
            font-size: 14px
        }
        .date{
            font-size: 16px
        }
        .isi{
            font-size: 16px;
            text-align: left
        }
        .latest{
            position: relative;
            bottom: 26px;
        }
        .gmb-komen{
            float: left
        }
        .info{
            padding: 25px 12px
        }
        .comment{
            margin-top: 50px
        }
        .judul{
            font-size: 22px
        }
        .garis7{
            width: 222px
        }
        .jelantah-mitra{
            font-size: 17px;
        }
    }
    @media only screen and (min-width:280px) and (max-width:299px){
        .uni-blog-read1{
            height: 170px
        }
        .konten-read{
            width: 100%
        }
        .head{
            font-size: 18px;
            line-height: 20px;
        }
        .link{
            font-size: 12px
        }
        .date{
            font-size: 16px
        }
        .isi{
            font-size: 16px;
            text-align: left
        }
        .latest{
            position: relative;
            bottom: 26px;
        }
        .gmb-komen{
            float: left
        }
        .info{
            padding: 25px 12px
        }
        .comment{
            margin-top: 50px
        }
        .judul{
            font-size: 22px
        }
        .garis7{
            width: 222px
        }
        .jelantah-mitra{
            font-size: 17px;
        }
    }
</style>
<section>
<div class="uni-blog-read1">
    <div class="container">
        <div class="uni-banner-text">
        </div>
    </div>
</div>
<div class="container">
        <center>
        <div class="col-xl-8 mt-5 konten-read mx-auto">
                <p class="head lorem mb-2">Intip Potensi Jelantah sebagai Bahan Baku Biodiesel</p>
                <p class="date">2021</p>
                <p class="isi mb-4">
                    Biodiesel saat ini mendapat perhatian dari pemerintah sejak tahun 2008 dimulai dengan B2,5 dan pada tahun 2020 program B30 dapat dilaksanakan. Presiden Joko Widodo berkomitmen meningkatkan pemanfaatan bahan bakar nabati dari B30 menjadi B50 pada 2021. B50 merupakan pencampuran 50% biodiesel dengan 50% bahan bakar minyak jenis solar. Program mandatori BBN (bahan bakar nabati) salah satunya bertujuan untuk memenuhi komitmen pemerintah untuk mengurangi emisi gas rumah kaca sebesar 29% dari BAU pada 2030.
                </p>                    
<br>
                
                <img class="img-fluid img-read mb-5" src="{{asset('assets/images/blog/blog2.jfif')}}" alt="">
<br>
                <p class="isi text-center">(Foto: Antara Foto/Aprilio Akbar)</p>
<br>
                <p class="isi mb-3">
                    Bahan baku biodiesel di Indonesia saat ini yaitu minyak sawit (CPO). Namun dalam prosesnya biodiesel belum tentu ramah lingkungan seperti yang dikatakan Senior Forest Campaigner Greenpeace, Arkian Suryadarma yaitu terdapat berbagai potensi pencemaran atau jejak karbon dari proses produksi biodiesel. Seperti diantaranya diakibatkan oleh pembukaan lahan, proses transportasi dalam kegiatan distribusi, hingga limbah yang dihasilkan saat pengolahan. Oleh karena itu, diperlukan alternatif bahan baku biodiesel. Maka hal ini tidak menutup kemungkinan jika produk turunan minyak kelapa sawit bekas (jelantah) sebagai bahan baku alternatif biodiesel. Staf Ahli Menteri Bidang Lingkungan Hidup dan Tata Ruang Kementrian ESDM Saleh Abdurrahman menuturkan bahwa pemanfaatan minyak jelantah untuk biodiesel ini menjadi salah satu opsi yang baik sebagai bagian dari peningkatan sirkuar ekonomi yaitu melakukan daur ulang pemanfaatan sumber daya untuk terus menghasilkan manfaat ekonomi sekaligus mengurangi dampak lingkungan.
                </p>
<br>
                <p class="isi mb-4">
                    Lalu bagaimana potensi penghasil jelantah di Indonesia? Berdasarkan data konsumsi minyak goreng dunia dari United States Department of Agriculture (USDA) Indonesia merupakan pengguna minyak goreng paling banyak pada tahun 2019. Menurut kajian awal TNP2K dan Traction Energi Asia tentang potensi Minyak Jelantah Untuk Biodiesel dan Penurunan Kemiskinan di Indonesia (2020) mencatat bahwa pada tahun 2019, konsumsi minyak kelapa sawit nasional mencapai 16,2 juta kilo liter (KL) namun hanya 3 juta KL minyak jelantah yang dapat dikumpulkan atau sekitar 18,5% dari total konsumsi minyak goreng sawit nasional.  Data International Council on Clean Transportation (ICCT) menunjukkan bahwa 51% minyak jelantah dari rumah tangga di Tangerang terbuang begitu saja dan menjadi limbah. Sebesar 39% terbuang di selokan dan 4% mencemari tanah.    
                </p>
<br>
                <img class="img-fluid img-read mb-5" src="{{asset('assets/images/blog/blog5.png')}}" alt="">
<br>
                <p class="isi mb-4">
                    Kajian TNP2K dan Traction Energi Asia menemukan bahwa dari 3 juta KL jelantah yang berhasil dikumpulkan hanya sekitar 570 KL yang dikonversi untuk biodiesel dan kebutuhan lainnya, sisanya sekitar 2,4 juta KL digunakan untuk minyak daur ulang dan ekspor. Wah gawat nih Heroes. Padahal jika dimaksimalkan biodiesel dari jelantah akan sangat menguntungkan.
                </p>
<br>

                <div class="container">
                <p class="isi mb-4">
                Sumber : <br>
                    <ol class="isi">
                        <li>
                            esdm.go.id. 2020. Minyak Jelantah: Sebuah Potensi Bisnis Energi Yang Menjanjikan
                        </li>
                        <br>
                        <li>
                            <a href="https://katadata.co.id/timrisetdanpublikasi/analisisdata/" class="link">https://katadata.co.id/timrisetdanpublikasi/analisisdata/</a>
                        </li>
                        <br>
                        <li>
                            Sani, Christine. Menakar Peluang Pemanfaatan Minyak Jelantah untuk Biodiesel. Analisis Data Katadata. (Diakses tanggal 16 November 2021) 
                        </li>
                    </ol>
                </p>
                </div>
            <div class="container" style="margin-bottom:100px;">
                <div class="row">
                    <div class="col-lg-12">
                        <div class="d-flex justify-content-center">
                            <p class="share">Share On</p>
                            <div class="box4"><a href=""><i class="fab fa-facebook-f" style="color: white; margin-top:8px;"></i></a></div>
                            <div class="box4"><a href=""><i class="fab fa-twitter" style="color: white; margin-top:8px;"></i></a></div>
                            <div class="box4"><a href=""><i class="fab fa-instagram" style="color: white; margin-top:8px;"></i></a></div>
                            <div class="box4"><a href=""><i class="fab fa-linkedin-in" style="color: white; margin-top:8px;"></i></a></div>
                            <div class="box4"><a href=""><i class="fas fa-clone" style="color: white; margin-top:8px;"></i></a></div>
                        </div>
                    </div>
                </div>
            </div>


        
                <hr class="line">
                    <div class="row">
                        <div class="col-lg-6" style="text-align: left">
                            <label for="">999</label>
                            <label for="">Comments</label>
                        </div>
                        <div class="col-lg-6 latest">
                            <a href=""><label class="text-decoration-underline" for="">Newest</label></a>
                            <label for="">Oldest</label>
                        </div>
                    </div>
<br>
                <div class="col-12 mb-lg-4">
                    <div class="row">
                        <div class="col-lg-2 col-md-2 col-sm-4">
                            <img src="{{asset('assets/images/foto/foto-read.png')}}" class="gmb-komen" alt="">
                        </div>
                        <div class="col-lg-10 col-md-10 col-sm-4 info">
                            <h4 class="name">Marcell Santiago</h4><br>
                            <h6 class="komentar">
                                Lorem ipsum dolor sit amet, consectetur adipiscing elit
                                <br>
                                20 Maret 2021
                            </h6>
                        </div>
                    </div>
                </div>
                <br>
                <div class="col-12 mb-lg-4">
                    <div class="row">
                        <div class="col-lg-2 col-md-2 col-sm-4">
                            <img src="{{asset('assets/images/foto/2.png')}}" alt="" class="gmb-komen">
                        </div>
                        <div class="col-lg-10 col-md-10 col-sm-4 info">
                            <h4 class="name">Ralph Edwards</h4><br>
                            <h6 class="komentar">
                                Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua.
                                <br>
                                19 Maret 2021
                            </h6>
                        </div>
                    </div>
                </div>
                <br>
                <div class="col-12 mb-lg-4">
                    <div class="row">
                        <div class="col-lg-2 col-md-2 col-sm-4">
                            <img src="{{asset('assets/images/foto/3.png')}}" alt="" class="gmb-komen">
                        </div>
                        <div class="col-lg-10 col-md-10 col-sm-4 info">
                            <h4 class="name">Kathryn Murphy</h4><br>
                            <h6 class="komentar">
                                Lorem ipsum dolor sit amet, consectetur adipiscing elit
                                <br>
                                12 Maret 2021
                            </h6>
                        </div>
                    </div>
                </div>
                <br>
                <div class="col-12 mb-lg-4">
                    <div class="row">
                        <div class="col-lg-2 col-md-2 col-sm-4">
                            <img src="{{asset('assets/images/foto/4.png')}}" alt="" class="gmb-komen">
                        </div>
                        <div class="col-lg-10 col-md-10 col-sm-4 info">
                            <h4 class="name">Guy Hawkins</h4><br>
                            <h6 class="komentar">
                                Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua.
                                <br>
                                08 Maret 2021
                            </h6>
                        </div>
                    </div>
                </div>
                <br>
                <div class="col-12 mb-lg-4">
                    <div class="row">
                        <div class="col-lg-2 col-md-2 col-sm-4">
                            <img src="{{asset('assets/images/foto/5.png')}}" alt="" class="gmb-komen">
                        </div>
                        <div class="col-lg-10 col-md-10 col-sm-4 info">
                            <h4 class="name">Devon Lane</h4><br>
                            <h6 class="komentar">
                                Lorem ipsum dolor sit amet, consectetur adipiscing elit
                                <br>
                                03 Maret 2021
                            </h6>
                        </div>
                    </div>
                </div>
            
                <center>
                    <div class="container">
                        <div class="default-section-heading default-section-heading-middle">
                            <a class="lihat btn-outline-success border-3 btn-lg btn-sm" style="border: 1px solid #029B4B" href=""><span>Tamplikan Lebih Banyak</span></a>
                        </div>
                    </div>
                </center>

                <div class="col-lg-12 mt-3 text--left">
                    <p class="comment">Comments</p>
                </div>

                <div class="col-lg-12 mt-3 text--left">
                    <div class="sidebar-searchbox" style="border :1px solid #029B4B; border-radius: 8px">
                        <div class="input-group ">
                            <textarea class="form-control" style="text-align: left; border-radius: 8px" cols="30" rows="10" placeholder="Your Comments.. "></textarea>
                        </div>
                    </div>
                </div>
                
                <div class="col-lg-12 mt-3 text--left">
                    <div class="btn">
                        <a class="default-button post" href=""><span>Post</span></a>
                    </div>
                </div><br>
                
        </div>
    </center>
</div>
</section>
<center><hr style="width: 95%;"></center>
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
