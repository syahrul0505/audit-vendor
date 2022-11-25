@extends('frontend.app')

@section('container')
<style>
    html,body{
        max-width: 100%;
        overflow-x: hidden
    }
    .artikel{
        font-size: 40px;
        color: #029B4B;
        text-transform: uppercase;
        font-weight: 700;
        text-align: center;
    }
    .garis-artikel{
        background: #029B4B;
        width: 344px;
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

    .card{
        border-radius:12px !important; 
        box-shadow: 0 6px 10px rgba(0,0,0,.08), 0 0 6px rgba(0,0,0,.05);
        transition: .3s transform cubic-bezier(.155,1.105,.295,1.12),.3s box-shadow,.3s -webkit-transform cubic-bezier(.155,1.105,.295,1.12);
        cursor: pointer;
    }
    .card .isi-artikel {
        font-size: 24px;
        color: #434343;
        font-weight: 500;
        margin-bottom: 18px;
        position: relative;
        transition: 0.3s;
    }

    .recent-blog-posts .card:hover .isi-artikel{
        color: #029B4B;
    }
    .card:hover{
        transform: scale(1.05);
        box-shadow: 0 10px 20px rgba(0,0,0,.12), 0 4px 8px rgba(0,0,0,.06);
    }

    .post-box:hover{
        transform: scale(1.05);
        box-shadow: 0 10px 20px rgba(0,0,0,.12), 0 4px 8px rgba(0,0,0,.06);
    }
    .card .post-date {
        font-size: 14px;
        font-weight: 500;
        color: #828282;
        display: block;
    }
    .container-artikel{
        padding-top: 101px; padding-right: 0px;
    }
    .gmb-artikel{
        width: 780px; height: 400px; border-radius: 12px 0px 0px 12px;
    }
    .date{
        font-size: 14px; text-align:left
    }
    .isi-artikel{
        font-size: 24px; font-weight:500;
    }
    @media only screen and (min-width:1024px) and (max-width: 1199px)
    {   
        #header{
            padding: 20px;
        }
    }
    @media only screen and (min-width:768px) and (max-width: 1023px)
    {
        .recent-blog-posts .post-box .post-img{
            width: 696px;
        }
        .artikel{
            font-size: 35px;
        }
        .garis-artikel{
            width: 300px;height: 8px; margin-bottom: 20px
        }
        .container-artikel{
            padding: 20px 30px;
        }
        .gmb-artikel{
            height: 238px
        }
        .date{
            color: #434343
        }
        .isi-artikel{
            font-size: 16px;
            color: #434343
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
    @media only screen and (min-width:540px) and (max-width:767px)
    {
        .artikel{
            font-size: 35px;
        }
        .garis-artikel{
            width: 300px;height: 8px; margin-bottom: 20px
        }
        .container-artikel{
            padding: 20px 30px;
        }
        .gmb-artikel{
            height: 238px
        }
        .date{
            color: #434343
        }
        .isi-artikel{
            font-size: 16px;
            color: #434343
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
        .recent-blog-posts .post-box .post-img{
            width: 516px;
        }
    }
    @media only screen and (min-width:411px) and (max-width:539px)
    {
        .artikel{
            font-size: 35px;
        }
        .garis-artikel{
            width: 300px;height: 8px; margin-bottom: 20px
        }
        .container-artikel{
            padding: 20px 30px;
        }
        .gmb-artikel{
            height: 238px
        }
        .date{
            color: #434343
        }
        .isi-artikel{
            font-size: 16px;
            color: #434343
        }
        .card-kecil{
            margin-top: 20px;
            margin-bottom: 20px
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
    @media only screen and (min-width:375px) and (max-width:410px)
    {
        .artikel{
            font-size: 35px;
        }
        .garis-artikel{
            width: 300px;height: 8px; margin-bottom: 20px
        }
        .container-artikel{
            padding: 20px 30px;
        }
        .gmb-artikel{
            height: 238px
        }
        .date{
            color: #434343
        }
        .isi-artikel{
            font-size: 16px;
            color: #434343
        }
        .card-kecil{
            margin-top: 20px;
            margin-bottom: 20px
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
    @media only screen and (min-width:360px) and (max-width:374px)
    {
        .artikel{
            font-size: 35px;
        }
        .garis-artikel{
            width: 300px;height: 8px; margin-bottom: 20px
        }
        .container-artikel{
            padding: 20px 30px;
        }
        .gmb-artikel{
            height: 238px
        }
        .date{
            color: #434343
        }
        .isi-artikel{
            font-size: 16px;
            color: #434343
        }
        .card-kecil{
            margin-top: 20px;
            margin-bottom: 20px
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
        .artikel{
            font-size: 30px;
        }
        .garis-artikel{
            width: 255px;height: 8px; margin-bottom: 20px
        }
        .container-artikel{
            padding: 20px 30px;
        }
        .gmb-artikel{
            height: 238px
        }
        .date{
            color: #434343
        }
        .isi-artikel{
            font-size: 16px;
            color: #434343
        }
        .card-kecil{
            margin-top: 20px;
            margin-bottom: 20px
        }
        .judul{
            font-size: 22px
        }
        .garis7{
            width: 220px
        }
        .jelantah-mitra{
            font-size: 17px;
        }
    }
    @media only screen and (min-width:280px) and (max-width:299px)
    {
        .artikel{
            font-size: 30px;
        }
        .garis-artikel{
            width: 255px;height: 8px; margin-bottom: 20px
        }
        .container-artikel{
            padding: 20px 30px;
        }
        .gmb-artikel{
            height: 238px
        }
        .date{
            color: #434343
        }
        .isi-artikel{
            font-size: 16px;
            color: #434343
        }
        .card-kecil{
            margin-top: 20px;
            margin-bottom: 20px
        }
        .judul{
            font-size: 22px
        }
        .garis7{
            width: 220px
        }
        .jelantah-mitra{
            font-size: 17px;
        }
    }
</style>

{{-- Artikel --}}
<!-- ======= Recent Blog Posts Section ======= -->
<section id="recent-blog-posts" class="recent-blog-posts" style="margin-top: 150px">
    <div class="content3" data-aos="fade-up">
    <div class="container konten-artikel">
        <div class="bulat5"></div>
    <div class="row">
        <span class="artikel">Artikel bacaan</span>
        <center><div class="garis-artikel"></div></center>
    </div>

    <div class="row mt-4 mb-4">
        <div class="col-12">
            <a href="{{ route('blog-read') }}">
            <div class="card">
                <div class="row">
                    <div class="col-xl-8 col-lg-8 col-md-12 col-sm-12">
                    <img src="{{ asset('assets/images/minyakjelantah.png') }}" class="img-fluid gmb-artikel" alt="image">
                    </div>
                    <div class="col-xl-4 col-lg-4 col-md-10 col-sm-12">
                        <div class="container container-artikel">
                        <span class="post-date">2021</span><br>
                        <span class="isi-artikel">Minyak Jelantah Bersifat Karsinogenik, Kok Bisa?</span>
                        </div>
                    </div>
                </div>
            </div>
            </a>
        </div>
    </div>

    <div class="row">

        <div class="col-lg-4 col-md-12 col-sm-12 card-kecil">
        <a href="{{ route('blog-read1') }}">
        <div class="post-box">
            <div class="post-img"><img src="{{asset('assets/images/testimonial/b-20.jpg')}}" class="img-fluid" alt=""></div>
            <span class="post-date">2021</span>
            <h3 class="post-title">Intip Potensi Jelantah sebagai Bahan Baku Biodiesel</h3>
        </div>
        </a>
        </div>

        <div class="col-lg-4 col-md-12 col-sm-12 card-kecil">
        <a href="{{ route('blog-read2') }}">
        <div class="post-box">
            <div class="post-img"><img src="{{asset('assets/images/gorengan.jpg')}}" class="img-fluid" alt=""></div>
            <span class="post-date">2021</span>
            <h3 class="post-title">Kolestrol Menghantui Gorengan, Ih Serem!</h3>
        </div>
        </a>
        </div>

        <div class="col-lg-4 col-md-12 col-sm-12 card-kecil">
        <a href="{{ route('blog-read3') }}">
        <div class="post-box">
            <div class="post-img"><img src="{{asset('assets/images/testimonial/b-20.jpg')}}" class="img-fluid" alt=""></div>
            <span class="post-date">2021</span>
            <h3 class="post-title">Intip Potensi Jelantah sebagai Bahan Baku Biodiesel</h3>
        </div>
        </a>
        </div>

    </div>

    </div>
    </div>

</section><!-- End Recent Blog Posts Section -->

{{-- End Artikel --}}

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