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
        .uni-blog-read2{
            height: 617px;
        }
        #header{
            padding: 20px
        }
    }
    @media only screen and (min-width:768px) and (max-width:1023px){
        .uni-blog-read2{
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
        .uni-blog-read2{
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
        .uni-blog-read2{
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
        .uni-blog-read2{
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
        .uni-blog-read2{
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
        .uni-blog-read2{
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
        .uni-blog-read2{
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
<div class="uni-blog-read2">
    <div class="container">
        <div class="uni-banner-text">
        </div>
    </div>
</div>
<div class="container">
        <center>
        <div class="col-xl-8 mt-5 konten-read mx-auto">
                <p class="head lorem mb-2">Kolestrol Menghantui Gorengan, Ih Serem!</p>
                <p class="date">2021</p>
                <p class="isi mb-4">
                    Siapa yang tidak kenal dengan makanan ringan yang populer yang biasa terdiri dari pisang, tempe atau tahu yang dilapisi adonan tepung dan digoreng? ya tepat sekali gorengan. Biasa dijajakan di tepi jalan atau warung kecil yang jarang sepi peminat. Gorengan menjadi makanan ringan yang praktis dan murah menjadikannya makanan favorit masyarakat. Selain itu, enak dan nagih banget ya, penasaran ga sih kenapa bisa senagih itu. 
                </p>                    
                <p class="isi mb-4">
                    Perubahan rasa pada gorengan dikarenakan menyerapnya minyak ke dalam makanan. Minyak yang meresap dalam makanan akan mengubah cita rasa dari makanan tersebut. Selain itu, minyak mengandung lemak yang dapat membuat kita merasa cepat kenyang dan otak kita memicu pelepasan hormon yang juga membuat kita merasa rileks dan puas. Menurut Dokter spesialis gizi klinik dari Perhimpunan Dokter Gizi Klinik (PDGKI) Cabang Banten, Juwalita Surapsari gorengan terasa lebih enak dengan minyak yang digunakan berulang kali pakai karena proses kimia yang terjadi, sehingga minyak menghasilkan rasa yang lebih gurih. Ternyata minyak goreng berpengaruh sekali ya Heroes.
                </p>                    
                <p class="isi mb-4">
                    Nagihnya gorengan terkadang membuat kita lupa bahwa gorengan dapat berpotensi mengandung asam lemak trans akibat dari minyak goreng yang digunakan berulang kali pada suhu tinggi. Asam lemak trans merupakan lemak yang memiliki ikatan rangkap pada minyak atau lemak cair. Asam lemak trans memiliki pengaruh buruk bagi kesehatan, menurut Institute od Food Science and Technology satu persen asam lemak trans dapat meningkatkan kadar low density lipoprotein (kolestrol jahat) sebesar 0,04 mmol per liter dan menurunkan kadar high density lipoprotein (kolestrol baik) sebanyak 0,013 mmol per liter. LDL sering disebut kolestrol jahat, berbentuk lemak mirip lilin. Selain lemak asam trans, lemak jenuh pun menyebakan peningkatan kolestrol total dan kolestrol LDL (low density lipoprotein). Tingginya tingkat kolestrol dalam tubuh akan membentuk plak atheroma dalam pembuluh darah arteri yang berdampak pada penyempitan pembuluh darah ke jantung. Yang jika sudah terjadi dapat mengakibatkan penyakit jantung, stroke, dan serangan jantung. 
                </p>                    
<br>
                
                <img class="img-fluid img-read mb-5" src="{{asset('assets/images/blog/blog0.jpg')}}" alt="">
<br>
                <p class="isi mb-3">
                    Nah sekarang kamu tahu jika gorengan tidak baik dimakan terlalu sering meskipun gurih dan enak ya. Jika bisa mengurangi konsumsi gorengan dengan maksimal 6 potong gorengan ya Heroes karena dalam satu gorengan mengandung minyak 1 sendok teh. Namun hal itu juga harus diperhatikan apakah minyak goreng yang dipakai minyak goreng baru atau berkali-kali pakai (lebih 3 kali) karena akan mempengaruhi kandungan lemak jenuh dalam gorengan. Lebih amannya kamu dapat membuatnya sendiri dengan penggunaan minyak goreng yang benar. Masih ingatkan bagaimana penggunaan minyak goreng yang benar? Kamu dapat melihatnya kembali di instagram Jelantah4Change Jelantah4Change on Instagram: <a href="">“Hello Jelantah Heroes hayooo sudah tau belum nih cara menggunakan minyak goreng dengan benar? Yok sadari dan kenali bagaimana menggunakan…”</a> .
                </p>
<br>

                <div class="container">
                <p class="isi mb-4">
                Sumber : <br>
                    <ol class="isi">
                        <li>
                            “Berapa Potong Gorengan yang Aman Kita Konsusmsi Sehari?”<a href="" class="link"> https://goodlife.id </a>
                        </li>
                        <br>
                        <li>
                            Hanum, Yuspa, M.S. 2016. Dampak Bahaya Makanan Gorengan Bagi Jantung. Jurnal Keluarga Sehat Sejahtera Vol. 14. 
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


{{--<div class="uni-blog-read2">
    <div class="container">
        <div class="uni-banner-text">
        </div>
    </div>
</div>
<section style="width: 720px; margin-left: 360px">
<div class="container">
    <div class="row">
        <div class="col-lg-12 mx-auto">
            <div class="row">
                <div class="col-lg-12">
                    <p class="head lorem mb-2">Kolestrol Menghantui Gorengan, Ih Serem!</p>
                </div>
                <div class="col-lg-12 text-left" style="font-size: 20px; font-weight: 500">2021</div>
                <div class="col-lg-12 mt-3 text-left ">
                    <p class="mb-4" style="font-size:20px;">
                        Siapa yang tidak kenal dengan makanan ringan yang populer yang biasa terdiri dari pisang, tempe atau tahu yang dilapisi adonan tepung dan digoreng? ya tepat sekali gorengan. Biasa dijajakan di tepi jalan atau warung kecil yang jarang sepi peminat. Gorengan menjadi makanan ringan yang praktis dan murah menjadikannya makanan favorit masyarakat. Selain itu, enak dan nagih banget ya, penasaran ga sih kenapa bisa senagih itu. 
                    </p>
                    <br>
                    <p class="mb-4" style="font-size:20px;">
                        Perubahan rasa pada gorengan dikarenakan menyerapnya minyak ke dalam makanan. Minyak yang meresap dalam makanan akan mengubah cita rasa dari makanan tersebut. Selain itu, minyak mengandung lemak yang dapat membuat kita merasa cepat kenyang dan otak kita memicu pelepasan hormon yang juga membuat kita merasa rileks dan puas. Menurut Dokter spesialis gizi klinik dari Perhimpunan Dokter Gizi Klinik (PDGKI) Cabang Banten, Juwalita Surapsari gorengan terasa lebih enak dengan minyak yang digunakan berulang kali pakai karena proses kimia yang terjadi, sehingga minyak menghasilkan rasa yang lebih gurih. Ternyata minyak goreng berpengaruh sekali ya Heroes.
                    </p>
                    <br>
                    <p class="mb-4" style="font-size:20px;">
                        Nagihnya gorengan terkadang membuat kita lupa bahwa gorengan dapat berpotensi mengandung asam lemak trans akibat dari minyak goreng yang digunakan berulang kali pada suhu tinggi. Asam lemak trans merupakan lemak yang memiliki ikatan rangkap pada minyak atau lemak cair. Asam lemak trans memiliki pengaruh buruk bagi kesehatan, menurut Institute od Food Science and Technology satu persen asam lemak trans dapat meningkatkan kadar low density lipoprotein (kolestrol jahat) sebesar 0,04 mmol per liter dan menurunkan kadar high density lipoprotein (kolestrol baik) sebanyak 0,013 mmol per liter. LDL sering disebut kolestrol jahat, berbentuk lemak mirip lilin. Selain lemak asam trans, lemak jenuh pun menyebakan peningkatan kolestrol total dan kolestrol LDL (low density lipoprotein). Tingginya tingkat kolestrol dalam tubuh akan membentuk plak atheroma dalam pembuluh darah arteri yang berdampak pada penyempitan pembuluh darah ke jantung. Yang jika sudah terjadi dapat mengakibatkan penyakit jantung, stroke, dan serangan jantung. 
                    </p>
                </div>
<br>
                <div class="container">
                    <div class="row mb-3">
                        <div class="col-lg-12">
                            <center>
                                <img class="img-pengumpulan" src="{{asset('assets/images/blog/blog0.jpg')}}" style="width: 720px" alt="">
                            </center>
                        </div>
                    </div>
                </div>
<br>
                <div class="col-lg-12 mt-3 text-left ">
                    <p class="mb-3" style="font-size:20px;">
                        Nah sekarang kamu tahu jika gorengan tidak baik dimakan terlalu sering meskipun gurih dan enak ya. Jika bisa mengurangi konsumsi gorengan dengan maksimal 6 potong gorengan ya Heroes karena dalam satu gorengan mengandung minyak 1 sendok teh. Namun hal itu juga harus diperhatikan apakah minyak goreng yang dipakai minyak goreng baru atau berkali-kali pakai (lebih 3 kali) karena akan mempengaruhi kandungan lemak jenuh dalam gorengan. Lebih amannya kamu dapat membuatnya sendiri dengan penggunaan minyak goreng yang benar. Masih ingatkan bagaimana penggunaan minyak goreng yang benar? Kamu dapat melihatnya kembali di instagram Jelantah4Change Jelantah4Change on Instagram: <a href="">“Hello Jelantah Heroes hayooo sudah tau belum nih cara menggunakan minyak goreng dengan benar? Yok sadari dan kenali bagaimana menggunakan…”</a> .
                    </p>
                </div>
<br>
                <div class="col-lg-12 mt-3 text-left ">
                    <p class="mb-4" style="font-size:20px;">
                        Sumber :
                        <ol  style="font-size:20px; color:#5B5955;">
                            <li>
                                “Berapa Potong Gorengan yang Aman Kita Konsusmsi Sehari?”<a href=""> https://goodlife.id </a>
                            </li>
                            <br>
                            <li>
                                Hanum, Yuspa, M.S. 2016. Dampak Bahaya Makanan Gorengan Bagi Jantung. Jurnal Keluarga Sehat Sejahtera Vol. 14. 
                            </li>
                            
                        </ol>
                    </p>
                </div>


            <div class="container" style="margin-bottom:100px;">
                <div class="row">
                    <div class="col-lg-12">
                        <div class="d-flex justify-content-center">
                            <p class="share">Share On</p>
                            <div class="box4"><a href=""><i class="fab fa-facebook-f" style="padding:0px 5px 5px 11px; color: white; margin-top:8px;"></i></a></div>
                            <div class="box4"><a href=""><i class="fab fa-twitter" style="padding:0px 5px 5px 10px; color: white; margin-top:8px;"></i></a></div>
                            <div class="box4"><a href=""><i class="fab fa-instagram" style="padding:0px 5px 5px 10px; color: white; margin-top:8px;"></i></a></div>
                            <div class="box4"><a href=""><i class="fab fa-linkedin-in" style="padding:0px 5px 5px 10px; color: white; margin-top:8px;"></i></a></div>
                            <div class="box4"><a href=""><i class="fas fa-clone" style="padding:0px 5px 5px 10px; color: white; margin-top:8px;"></i></a></div>
                        </div>
                    </div>
                </div>
            </div>

                <hr class="line">
                <div class="col-lg-12 mb-lg-4">
                    <div class="row">
                        <div class="col-lg-6">
                            <label for="">999</label>
                            <label for="">Comments</label>
                        </div>
                        <div class="col-lg-6 text-right" style="text-align: right">
                            <label for="" class="text-success"><u>Newest</u></label>
                            <label for="">Oldest</label>
                        </div>
                    </div>
                </div>
<br>
                <div class="col-lg-12 col-12 mb-lg-4">
                    <div class="row">
                        <div class="col-lg-2 col-2">
                            <img src="{{asset('assets/images/foto/foto-read.png')}}" alt="" style="border-radius: 50%; width: 80px; height: 80px">
                        </div>
                        <div class="col-lg-10 col-10">
                            <span style="font-size:20px; font-weight: 500">Marcell Santiago</span><br>
                            <span style="font-size: 16px;">
                                Lorem ipsum dolor sit amet, consectetur adipiscing elit
                                <br>
                                20 Maret 2021
                            </span>
                        </div>
                    </div>
                </div>
                <br>
                <div class="col-lg-12 col-12 mb-lg-4">
                    <div class="row">
                        <div class="col-lg-2 col-2">
                            <img src="{{asset('assets/images/foto/2.png')}}" alt="" style="border-radius: 50%; width: 80px; height: 80px">
                        </div>
                        <div class="col-lg-10 col-10">
                            <span style="font-size:20px; font-weight: 500">Ralph Edwards</span><br>
                            <span style="font-size: 16px;">
                                Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua.
                                <br>
                                19 Maret 2021
                            </span>
                        </div>
                    </div>
                </div>
                <br>
                <div class="col-lg-12 col-12 mb-lg-4">
                    <div class="row">
                        <div class="col-lg-2 col-2">
                            <img src="{{asset('assets/images/foto/3.png')}}" alt="" style="border-radius: 50%; width: 80px; height: 80px">
                        </div>
                        <div class="col-lg-10 col-10">
                            <span style="font-size:20px; font-weight: 500">Kathryn Murphy</span><br>
                            <span style="font-size: 16px;">
                                Lorem ipsum dolor sit amet, consectetur adipiscing elit
                                <br>
                                12 Maret 2021
                            </span>
                        </div>
                    </div>
                </div>
                <br>
                <div class="col-lg-12 col-12 mb-lg-4">
                    <div class="row">
                        <div class="col-lg-2 col-2">
                            <img src="{{asset('assets/images/foto/4.png')}}" alt="" style="border-radius: 50%; width: 80px; height: 80px">
                        </div>
                        <div class="col-lg-10 col-10">
                            <span style="font-size:20px; font-weight: 500">Guy Hawkins</span><br>
                            <span style="font-size: 16px;">
                                Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua.
                                <br>
                                08 Maret 2021
                            </span>
                        </div>
                    </div>
                </div>
                <br>
                <div class="col-lg-12 col-12 mb-lg-4">
                    <div class="row">
                        <div class="col-lg-2 col-2">
                            <img src="{{asset('assets/images/foto/5.png')}}" alt="" style="border-radius: 50%; width: 80px; height: 80px">
                        </div>
                        <div class="col-lg-10 col-10">
                            <span style="font-size:20px; font-weight: 500">Devon Lane</span><br>
                            <span style="font-size: 16px;">
                                Lorem ipsum dolor sit amet, consectetur adipiscing elit
                                <br>
                                03 Maret 2021
                            </span>
                        </div>
                    </div>
                </div>
                
                <center>
                    <div class="container">
                        <div class="default-section-heading default-section-heading-middle">
                            <a class="lihat btn-outline-success border-3 btn-lg" style="border: 1px solid #029B4B" href=""><span>Tamplikan Lebih Banyak</span></a>
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
                </div>
                
            </div>
        </div>
        <hr>


    </div>
</div>
</section> --}}

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
                                    <div class="d-flex justify-content-center"><a class="join" href=""><span style="position:relative; top:15px"> Daftar<i class="fa fa-running "  style="padding-left: 20px;"></i></span></a></div>
                                </div>
                            </div>

                            <div class="col-lg-6 col-md-6 col-sm-6 col-12" data-aos="fade-up">
                                <div class="jelantah-card">
                                    <h3 class="seratus mb-4">JOIN MITRA</h3>
                                    <div class="d-flex justify-content-center"><a class="join" href=""><span style="position:relative; top:15px">Join<i class="fa fa-laugh" style="padding-left: 20px;" > </i> </span></a></div>
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
