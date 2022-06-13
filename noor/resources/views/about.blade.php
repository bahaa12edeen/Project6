@extends('layout.master')

@section('title', 'Aduio Book')

@section('content')
    

<!-- Header Start -->
<div class="container-fluid bg-primary mb-5">
    <div class="d-flex flex-column align-items-center justify-content-center" style="min-height: 400px">
        <h3 class="display-3 font-weight-bold text-white">About Us</h3>
        <div class="d-inline-flex text-white">
            <p class="m-0"><a class="text-white" href="">Home</a></p>
            <p class="m-0 px-2">/</p>
            <p class="m-0">About Us</p>
        </div>
    </div>
</div>
<!-- Header End -->


<!-- About Start -->
<div class="container-fluid py-5">
    <div class="container">
        <div class="row align-items-center">
            <div class="col-lg-5">
                <img class="img-fluid rounded mb-5 mb-lg-0" src="https://cdn.discordapp.com/attachments/959076810950311976/985530957505380352/our_team.jpg" alt="">
            </div>
            <div class="col-lg-7">
                <p class="section-title pr-5"><span class="pr-2">Learn About Us</span></p>
                <h1 class="mb-4">About nOOr</h1>
                <p>Our mission is to be the eye and the light for those who have lost their
                   eyesight by providing services that will assist them in their everyday
                   lives, as well as our efforts to integrate them more extensively into society.</p>
                <div class="row pt-2 pb-4">
                    <div class="col-6 col-md-4">
                        <img class="img-fluid rounded" src="https://media.discordapp.net/attachments/959076810950311976/985525341256843284/Untitled-2_0000_Layer_2_copy.png?width=794&height=635" alt="">
                    </div>
                    <div class="col-6 col-md-8">
                        <ul class="list-inline m-0">
                            <li class="py-2 border-top border-bottom"><i class="fa fa-check text-primary mr-3"></i>trustworthy.</li>
                            <li class="py-2 border-bottom"><i class="fa fa-check text-primary mr-3"></i>Worldwide.</li>
                            <li class="py-2 border-bottom"><i class="fa fa-check text-primary mr-3"></i>Outstanding supporter network</li>
                        </ul>
                    </div>
                </div>
                <a href="" class="btn btn-primary mt-2 py-2 px-4">Learn More</a>
            </div>
        </div>
    </div>
</div>
<!-- About End -->


<!-- Facilities Start -->
<!-- <div class="container-fluid pt-5">
    <div class="container pb-3">
        <div class="row">
            <div class="col-lg-4 col-md-6 pb-1">
                <div class="d-flex bg-light shadow-sm border-top rounded mb-4" style="padding: 30px;">
                    <i class="flaticon-050-fence h1 font-weight-normal text-primary mb-3"></i>
                    <div class="pl-4">
                        <h4>Play Ground</h4>
                        <p class="m-0">Kasd labore kasd et dolor est rebum dolor ut, clita dolor vero lorem amet elitr vero...</p>
                    </div>
                </div>
            </div>
            <div class="col-lg-4 col-md-6 pb-1">
                <div class="d-flex bg-light shadow-sm border-top rounded mb-4" style="padding: 30px;">
                    <i class="flaticon-022-drum h1 font-weight-normal text-primary mb-3"></i>
                    <div class="pl-4">
                        <h4>Music and Dance</h4>
                        <p class="m-0">Kasd labore kasd et dolor est rebum dolor ut, clita dolor vero lorem amet elitr vero...</p>
                    </div>
                </div>
            </div>
            <div class="col-lg-4 col-md-6 pb-1">
                <div class="d-flex bg-light shadow-sm border-top rounded mb-4" style="padding: 30px;">
                    <i class="flaticon-030-crayons h1 font-weight-normal text-primary mb-3"></i>
                    <div class="pl-4">
                        <h4>Arts and Crafts</h4>
                        <p class="m-0">Kasd labore kasd et dolor est rebum dolor ut, clita dolor vero lorem amet elitr vero...</p>
                    </div>
                </div>
            </div>
            <div class="col-lg-4 col-md-6 pb-1">
                <div class="d-flex bg-light shadow-sm border-top rounded mb-4" style="padding: 30px;">
                    <i class="flaticon-017-toy-car h1 font-weight-normal text-primary mb-3"></i>
                    <div class="pl-4">
                        <h4>Safe Transportation</h4>
                        <p class="m-0">Kasd labore kasd et dolor est rebum dolor ut, clita dolor vero lorem amet elitr vero...</p>
                    </div>
                </div>
            </div>
            <div class="col-lg-4 col-md-6 pb-1">
                <div class="d-flex bg-light shadow-sm border-top rounded mb-4" style="padding: 30px;">
                    <i class="flaticon-025-sandwich h1 font-weight-normal text-primary mb-3"></i>
                    <div class="pl-4">
                        <h4>Healthy food</h4>
                        <p class="m-0">Kasd labore kasd et dolor est rebum dolor ut, clita dolor vero lorem amet elitr vero...</p>
                    </div>
                </div>
            </div>
            <div class="col-lg-4 col-md-6 pb-1">
                <div class="d-flex bg-light shadow-sm border-top rounded mb-4" style="padding: 30px;">
                    <i class="flaticon-047-backpack h1 font-weight-normal text-primary mb-3"></i>
                    <div class="pl-4">
                        <h4>Educational Tour</h4>
                        <p class="m-0">Kasd labore kasd et dolor est rebum dolor ut, clita dolor vero lorem amet elitr vero...</p>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div> -->
<!-- Facilities Start -->


<!-- Team Start -->
<div class="container-fluid pt-5">
    <div class="container">
        <div class="text-center pb-2">
            <p class="section-title px-5"><span class="px-2">Our Team</span></p>
            <h1 class="mb-4">Meet Our Developers</h1>
        </div>
        <div class="row">
            <div class="col-md-6 col-lg-3 text-center team mb-5">
                <div class="position-relative overflow-hidden mb-4" style="border-radius: 100%;">
                    <img class="img-fluid w-100" src="https://cdn.discordapp.com/attachments/959076810950311976/985521911855460392/hadi2.jpg" alt="" >
                    <div
                        class="team-social d-flex align-items-center justify-content-center w-100 h-100 position-absolute">
                        <a class="btn btn-outline-light text-center mr-2 px-0" style="width: 38px; height: 38px;"
                            href="#"><i class="fab fa-twitter"></i></a>
                        <a class="btn btn-outline-light text-center mr-2 px-0" style="width: 38px; height: 38px;"
                            href="#"><i class="fab fa-facebook-f"></i></a>
                        <a class="btn btn-outline-light text-center px-0" style="width: 38px; height: 38px;"
                            href="#"><i class="fab fa-linkedin-in"></i></a>
                    </div>
                </div>
                <h4>Hadi-AL-Saden</h4>
                <i>Project Owner</i>
            </div>
            <div class="col-md-6 col-lg-3 text-center team mb-5">
                <div class="position-relative overflow-hidden mb-4" style="border-radius: 100%;">
                    <img class="img-fluid w-100" src="https://cdn.discordapp.com/attachments/976104176255901736/976476829852520458/pers-modified.png" alt="" >
                    <div
                        class="team-social d-flex align-items-center justify-content-center w-100 h-100 position-absolute">
                        <a class="btn btn-outline-light text-center mr-2 px-0" style="width: 38px; height: 38px;"
                            href="#"><i class="fab fa-twitter"></i></a>
                        <a class="btn btn-outline-light text-center mr-2 px-0" style="width: 38px; height: 38px;"
                            href="#"><i class="fab fa-facebook-f"></i></a>
                        <a class="btn btn-outline-light text-center px-0" style="width: 38px; height: 38px;"
                            href="#"><i class="fab fa-linkedin-in"></i></a>
                    </div>
                </div>
                <h4>Bahaa Aldeen</h4>
                <i>Scrum Master</i>
            </div>
            <div class="col-md-6 col-lg-3 text-center team mb-5">
                <div class="position-relative overflow-hidden mb-4" style="border-radius: 100%;">
                    <img class="img-fluid w-100" src="https://instagram.famm7-1.fna.fbcdn.net/v/t51.2885-15/287481645_432134948459547_5785704433932152842_n.jpg?stp=dst-jpg_e15_s320x320&_nc_ht=instagram.famm7-1.fna.fbcdn.net&_nc_cat=103&_nc_ohc=udgQ6aQMi4cAX89sg3V&edm=ABJHkxYAAAAA&ccb=7-5&ig_cache_key=Mjg1ODk3ODIzODg0MDYzMTg3MA%3D%3D.2-ccb7-5&oh=00_AT9D4_ht5ehWOy2tqS0WHRFuNTIGEPy5x9Ct9EzLdoLFPQ&oe=62AD5A79&_nc_sid=fa978c" alt="" >
                    <div
                        class="team-social d-flex align-items-center justify-content-center w-100 h-100 position-absolute">
                        <a class="btn btn-outline-light text-center mr-2 px-0" style="width: 38px; height: 38px;"
                            href="#"><i class="fab fa-twitter"></i></a>
                        <a class="btn btn-outline-light text-center mr-2 px-0" style="width: 38px; height: 38px;"
                            href="#"><i class="fab fa-facebook-f"></i></a>
                        <a class="btn btn-outline-light text-center px-0" style="width: 38px; height: 38px;"
                            href="#"><i class="fab fa-linkedin-in"></i></a>
                    </div>
                </div>
                <h4>Saja Al Ghalayini</h4>
                <i>Our Developer</i>
            </div>
            <div class="col-md-6 col-lg-3 text-center team mb-5">
                <div class="position-relative overflow-hidden mb-4" style="border-radius: 100%;">
                    <img class="img-fluid w-100" src="https://cdn.discordapp.com/attachments/948891698585550888/985515396520099860/Majd.gif" alt="" >
                    <div
                        class="team-social d-flex align-items-center justify-content-center w-100 h-100 position-absolute">
                        <a class="btn btn-outline-light text-center mr-2 px-0" style="width: 38px; height: 38px;"
                            href="#"><i class="fab fa-twitter"></i></a>
                        <a class="btn btn-outline-light text-center mr-2 px-0" style="width: 38px; height: 38px;"
                            href="#"><i class="fab fa-facebook-f"></i></a>
                        <a class="btn btn-outline-light text-center px-0" style="width: 38px; height: 38px;"
                            href="#"><i class="fab fa-linkedin-in"></i></a>
                    </div>
                </div>
                <h4>Majd Albalawneh</h4>
                <i>Our Developer</i>
            </div>
            <div class="col-md-6 col-lg-3 text-center team mb-5">
                <div class="position-relative overflow-hidden mb-4" style="border-radius: 100%;">
                    <img class="img-fluid w-100" src="https://cdn.discordapp.com/attachments/978565358237646880/981551027704713276/obada.png" alt="" >
                    <div
                        class="team-social d-flex align-items-center justify-content-center w-100 h-100 position-absolute">
                        <a class="btn btn-outline-light text-center mr-2 px-0" style="width: 38px; height: 38px;"
                            href="#"><i class="fab fa-twitter"></i></a>
                        <a class="btn btn-outline-light text-center mr-2 px-0" style="width: 38px; height: 38px;"
                            href="#"><i class="fab fa-facebook-f"></i></a>
                        <a class="btn btn-outline-light text-center px-0" style="width: 38px; height: 38px;"
                            href="#"><i class="fab fa-linkedin-in"></i></a>
                    </div>
                </div>
                <h4>Obada Al Shafie</h4>
                <i>Our Developer</i>
            </div>
        </div>
    </div>
</div>
<!-- Team End -->

@endsection