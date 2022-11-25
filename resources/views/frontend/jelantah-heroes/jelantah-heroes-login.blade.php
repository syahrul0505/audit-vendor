@extends('frontend.sapp')

@section('container')

<style>

    .mulai {
        text-align: center;
        background: #029B4B;
        box-shadow: 0px 12px 32px rgba(2, 155, 75, 0.5);
        border-radius: 10px;
    }


    .dukung-jelantah {
        width: 470px;
        height: 8px;
        background-color: #3eb65f;
    }
    .urutkan{
        background-color: transparent; 
        color:#029B4B;
         border :1px solid #029B4B;
         border-radius:5px;
    }
    .live{
        width: 230px;
        height: 8px;
        background-color: #3eb65f;
    }

    .dukung{
        width: 560px;
        height: 8px;
        background-color: #3eb65f;
    }

    .get-article-aktivitas{
        text-align: center;
        font-family: Poppins;
        font-style: normal;
        font-weight: 500;
        font-size: 25px;
        line-height: 38px;
        /* identical to box height, or 127% */


        /* Neutral/10 */

        color: #262626;
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

    .join {
        margin-top: 15px;
        width: 200px;
        background: #029B4B;
        box-shadow: 0px 10px 45px rgba(2, 155, 75, 0.5);
        border-radius: 12px;
    }

    .profilkami {
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

    .artikel-kami {
        font-family: Poppins;
        font-style: normal;
        font-weight: bold;
        font-size: 28px;
        line-height: 40px;
        /* identical to box height, or 100% */

        text-align: center;

        /* Color Pallete/Green 1 */

        color: #000000;


        /* Inside Auto Layout */

        flex: none;
        order: 0;
        flex-grow: 0;
        margin: 20px 0px;
    }

    .jelantah-heroes{
    font-family: Poppins;
    font-style: normal;
    font-weight: 600;
    font-size: 36px;
    line-height: 60px;
    /* identical to box height, or 167% */

    text-align: center;

    /* Neutral/9 */

    color: #434343;

    }
    .tiga-ribu{
    font-family: Poppins;
    font-style: normal;
    font-weight: 600;
    font-size: 36px;
    line-height: 60px;
    /* identical to box height, or 167% */

    text-align: center;

    /* Color Pallete/Green 1 */

    color: #029B4B;


    }

    .tommy-desc {
        text-align: left;
    }
    .tommy{
        text-align: left;
        color: #029B4B;
    }
    .new-york{
    /* Subheading 16/medium */

    font-family: Poppins;
    font-style: normal;
    font-weight: 500;
    font-size: 16px;
    line-height: 24px;

    color: #262626;
    text-align: left;
    }

    .bergabung{

    font-family: Poppins;
    font-style: normal;
    font-weight: normal;
    font-size: 14px;
    line-height: 22px;
    /* identical to box height, or 157% */


    /* Color Pallete/Green 1 */

    color: #029B4B;
    text-align: left;
    }

    .img-tommy{
        border-radius: 100%;
    }
    .card-tommy{
        border-radius: 30px;
    }

    .dukung-jelantah-change{
        color:#029B4B;
    }

    .jelantah-mitra{
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
    .heroes{
        margin-top: -60px;
    }
</style>

<div class="uni-banner-jelantah-login">
    <div class="container">
        <div class="uni-banner-text">
            <h1>LIHAT HASIL PARA PAHLAWAN KAMI DI SELURUH INDONESIA</h1>
            <a class="default-button2 mulai" href=""><span>Lihat</span></a>
        </div>
    </div>
</div>


<div class="service pb-30 pt-70 ">
    <div class="container">
        <h2 style="color:#029B4B;" class="judul"><center><b>PETA DISTRIBUSI JELANTAH HEROES</b></center></h2>
        <center><div class="dukung"></div></center>
    </div>
</div>

<div class="service pb-30 pt-70 ">
    <div class="container">
        <img src="{{asset('assets/images/home/maps.png')}}" class="img-fluid" alt="">
    </div>
</div>

<div class="service pb-30 ">
    <div class="container">
        <div class="default-section-heading default-section-heading-middle">
            <p class="artikel-kami">? <u class="profilkami"> SIAPA</u> APA YANG INGIN KAMU CARI </p>
            <center><div class="artikel-apa"></div></center>
        </div>
    </div>
</div>

<div class="testimonial pt-70">
    <div class="container">
        <div class="row">
            <div class="col-lg-12">
                <div class="row">
                    <div class="col-lg-5">
                        <div class="row">
                            <div class="sidebar" style="">
                                <div class="dropdown" style="margin-right: 120px;">
                                <button class="default-button2 urutkan" type="button" id="dropdownMenuButton2" data-bs-toggle="dropdown" aria-expanded="false">
                                    <span style="text-align:left">Urutkan Berdasarkan</span>
                                    <i class="fas fa-caret-down" ></i>
                                </button>
                                <ul class="dropdown-menu dropdown-menu" aria-labelledby="dropdownMenuButton2">
                                    <li><a class="dropdown-item" href="#">Action</a></li>
                                    <li><a class="dropdown-item" href="#">Another action</a></li>
                                    <li><a class="dropdown-item" href="#">Something else here</a></li>
                                    <li><hr class="dropdown-divider"></li>
                                    <li><a class="dropdown-item" href="#">Separated link</a></li>
                                </ul>
                                </div>
                            </div>
                        </div>
                    </div>

                    <div class="col-lg-7 d-block mx-auto">
                        <div class="sidebar" style="width: 540px; height:60px;">
                            <div class="sidebar-searchbox" style="border :1px solid #029B4B;">
                                <div class="input-group ">
                                    <a href="">
                                    <button class="default-button2" style="background-color: #029B4B"><span>Search</span></button>
                                    </a>
                                    <input type="text" class="form-control" style="text-align: left" placeholder="Text Here">
                                </div>
                            </div>
                        </div>
                    </div>

                </div>
            </div>
        </div>
    </div>
</div>

<div class="service pb-30 pt-70 ">
    <div class="container">
        <div class="row">
            <div class="col-lg-12">
                <div class="col-lg-12">

                    <h2 class="tiga-ribu">+3000</h2>
                    <P class="jelantah-heroes">Jelantah Heroes</P>    
                </div>
            </div>
        </div>
    </div>
</div>

<div class="testimonial pt-70 pb-30">
    <div class="container">
        <div class="row">
            <div class="col-lg-12">
                <div class="row">

                    <div class="col-lg-6">
                        <div class="contact-card bg-card card-tommy">
                            <div class="row">
                                <div class="col-8">
                                    <h3 class="tommy">Irene Sukandar</h3>
                                    <hr>
                                    <p class="tommy-desc">Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed
                                        do eiusmod tempor
                                        incididunt ut
                                        labore et dolore magna aliqua. Qui ipsum suspendisse ultrices gravida. Risus
                                        commodo viverra
                                        maecenascum</p>
                                        <p class="new-york">New York</p>
                                        <p class="bergabung">Bergabung Sejak 20 Juli 2020</p>
                                </div>
                                <div class="col-4">
                                    <img src="{{asset('assets/images/testimonial/irene.png')}}" class="img-tommy" alt="image">
                                </div>
                            </div>
                        </div>
                    </div>

                    <div class="col-lg-6">
                        <div class="contact-card bg-card card-tommy">
                            <div class="row">
                                <div class="col-8">
                                    <h3 class="tommy">Tommy Kurniawan</h3>
                                    <hr>
                                    <p class="tommy-desc">Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed
                                        do eiusmod tempor
                                        incididunt ut
                                        labore et dolore magna aliqua. Qui ipsum suspendisse ultrices gravida. Risus
                                        commodo viverra
                                        maecenascum</p>
                                        <p class="new-york">New York</p>
                                        <p class="bergabung">Bergabung Sejak 20 Juli 2020</p>
                                </div>
                                <div class="col-4">
                                    <img src="{{asset('assets/images/testimonial/tommy.png')}}" class="img-tommy" alt="image">
                                </div>
                            </div>
                        </div>
                    </div>

                    <div class="col-lg-6">
                        <div class="contact-card bg-card card-tommy">
                            <div class="row">
                                <div class="col-8">
                                    <h3 class="tommy">Marina Nagasawa</h3>
                                    <hr>
                                    <p class="tommy-desc">Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed
                                        do eiusmod tempor
                                        incididunt ut
                                        labore et dolore magna aliqua. Qui ipsum suspendisse ultrices gravida. Risus
                                        commodo viverra
                                        maecenascum</p>
                                        <p class="new-york">New York</p>
                                        <p class="bergabung">Bergabung Sejak 20 Juli 2020</p>
                                </div>
                                <div class="col-4">
                                    <img src="{{asset('assets/images/testimonial/marina.png')}}" class="img-tommy" alt="image">
                                </div>
                            </div>
                        </div>
                    </div>

                    <div class="col-lg-6">
                        <div class="contact-card bg-card card-tommy">
                            <div class="row">
                                <div class="col-8">
                                    <h3 class="tommy">Angel Violita</h3>
                                    <hr>
                                    <p class="tommy-desc">Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed
                                        do eiusmod tempor
                                        incididunt ut
                                        labore et dolore magna aliqua. Qui ipsum suspendisse ultrices gravida. Risus
                                        commodo viverra
                                        maecenascum</p>
                                        <p class="new-york">New York</p>
                                        <p class="bergabung">Bergabung Sejak 20 Juli 2020</p>
                                </div>
                                <div class="col-4">
                                    <img src="{{asset('assets/images/testimonial/angel.png')}}" class="img-tommy" alt="image">
                                </div>
                            </div>
                        </div>
                    </div>

                    <div class="col-lg-6">
                        <div class="contact-card bg-card card-tommy">
                            <div class="row">
                                <div class="col-8">
                                    <h3 class="tommy">Sarah Vio Barallia</h3>
                                    <hr>
                                    <p class="tommy-desc">Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed
                                        do eiusmod tempor
                                        incididunt ut
                                        labore et dolore magna aliqua. Qui ipsum suspendisse ultrices gravida. Risus
                                        commodo viverra
                                        maecenascum</p>
                                        <p class="new-york">New York</p>
                                        <p class="bergabung">Bergabung Sejak 20 Juli 2020</p>
                                </div>
                                <div class="col-4">
                                    <img src="{{asset('assets/images/testimonial/sarah.png')}}" class="img-tommy" alt="image">
                                </div>
                            </div>
                        </div>
                    </div>

                    <div class="col-lg-6">
                        <div class="contact-card bg-card card-tommy">
                            <div class="row">
                                <div class="col-8">
                                    <h3 class="tommy">Rere Simonangkir</h3>
                                    <hr>
                                    <p class="tommy-desc">Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed
                                        do eiusmod tempor
                                        incididunt ut
                                        labore et dolore magna aliqua. Qui ipsum suspendisse ultrices gravida. Risus
                                        commodo viverra
                                        maecenascum</p>
                                        <p class="new-york">New York</p>
                                        <p class="bergabung">Bergabung Sejak 20 Juli 2020</p>
                                </div>
                                <div class="col-4">
                                    <img src="{{asset('assets/images/testimonial/rere.png')}}" class="img-tommy" alt="image">
                                </div>
                            </div>
                        </div>
                    </div>

                    <div class="col-lg-6">
                        <div class="contact-card bg-card card-tommy">
                            <div class="row">
                                <div class="col-8">
                                    <h3 class="tommy">Andrew Pratama</h3>
                                    <hr>
                                    <p class="tommy-desc">Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed
                                        do eiusmod tempor
                                        incididunt ut
                                        labore et dolore magna aliqua. Qui ipsum suspendisse ultrices gravida. Risus
                                        commodo viverra
                                        maecenascum</p>
                                        <p class="new-york">New York</p>
                                        <p class="bergabung">Bergabung Sejak 20 Juli 2020</p>
                                </div>
                                <div class="col-4">
                                    <img src="{{asset('assets/images/testimonial/andrew.png')}}" class="img-tommy" alt="image">
                                </div>
                            </div>
                        </div>
                    </div>

                    <div class="col-lg-6">
                        <div class="contact-card bg-card card-tommy">
                            <div class="row">
                                <div class="col-8">
                                    <h3 class="tommy">Celine Margareta</h3>
                                    <hr>
                                    <p class="tommy-desc">Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed
                                        do eiusmod tempor
                                        incididunt ut
                                        labore et dolore magna aliqua. Qui ipsum suspendisse ultrices gravida. Risus
                                        commodo viverra
                                        maecenascum</p>
                                        <p class="new-york">New York</p>
                                        <p class="bergabung">Bergabung Sejak 20 Juli 2020</p>
                                </div>
                                <div class="col-4">
                                    <img src="{{asset('assets/images/testimonial/celine.png')}}" class="img-tommy" alt="image">
                                </div>
                            </div>
                        </div>
                    </div>

                </div>
            </div>
        </div>
    </div>
</div>

<div class="container">
    <div class="row" style="margin-top: 100px; margin-bottom:100px;">
        <div class="col-12">
            <div class="pagination justify-content-center">
                <ul class="pagination">
                    <li><a class="default-button2 page-item" style="background-color: #FFFF; border-radius: 5px; height:60px; width: 60px; color:#029B4B" href="#"><i class="fas fa-caret-right"></i></a></li>
                    <li><a class="default-button2 page-item" style="background-color: #FFFF; border-radius: 5px; height:60px; width: 60px; color:#029B4B" href="#"><span>10</span></a></li>
                    <li><a class="default-button2 page-item" style="background-color: #FFFF; border-radius: 5px; height:60px; width: 60px; color:#029B4B" href="#"><span>..</span></a></li>
                    <li><a class="default-button2 page-item" style="background-color: #FFFF; border-radius: 5px; height:60px; width: 60px; color:#029B4B" href="#"><span>3</span></a></li>
                    <li><a class="default-button2 page-item" style="background-color: #FFFF; border-radius: 5px; height:60px; width: 60px; color:#029B4B" href="#"><span>2</span></a></li>
                    <li><a class="default-button2 page-item" style="background-color: #FFFF; border-radius: 5px; height:60px; width: 60px; color:#029B4B" href="#"><span>1</span></a></li>
                    <li><a class="default-button2 page-item" style="background-color: #FFFF; border-radius: 5px; height:60px; width: 60px; color:#029B4B" href="#"><i class="fas fa-caret-left"></i></a></li>
                </ul>
            </div>
        </div>
            
    </div>
</div>

@endsection
