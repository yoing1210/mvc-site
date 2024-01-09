@extends('layouts.main')

@section('container')
    @include('partials.carousel')


    <!-- service_area_start  -->
    <div class="service_area gray_bg ">
        <div class="container">
            <div class="row justify-content-center ">
                <div class="col-lg-4 col-md-6">
                    <div class="single_service d-flex align-items-center ">
                        <div class="icon">
                            <i class="flaticon-school"></i>
                        </div>
                        <div class="service_info">
                            <h4>Tentang Kami</h4>
                            <p>Available</p>
                        </div>
                    </div>
                </div>
                <div class="col-lg-4 col-md-6">
                    <div class="single_service d-flex align-items-center ">
                        <div class="icon">
                            <i class="flaticon-error"></i>
                        </div>
                        <div class="service_info">
                            <h4>Visi Misi</h4>
                            <p>Available</p>
                        </div>
                    </div>
                </div>
                <div class="col-lg-4 col-md-6">
                    <div class="single_service d-flex align-items-center ">
                        <div class="icon">
                            <i class="flaticon-book"></i>
                        </div>
                        <div class="service_info">
                            <h4>Geografis</h4>
                            <p>Available</p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <!-- popular_program_area_start  -->
    <div id="item-1" class="popular_program_area section__padding">
        <div class="container">
            <div class="row">
                <div class="col-lg-12">
                    <div class="section_title text-center">
                        <h3>Profil Desa Lakologou</h3>
                    </div>
                </div>
            </div>
            <div class="row">
                <div class="col-lg-12">
                    <nav class="custom_tabs text-center">
                        <div class="nav" id="nav-tab" role="tablist">

                            <a class="nav-item nav-link active" id="nav-home-tab" data-toggle="tab" href="#nav-home"
                                role="tab" aria-controls="nav-home" aria-selected="true">Tentang Desa</a>
                            <a class="nav-item nav-link" id="nav-profile-tab" data-toggle="tab" href="#nav-profile"
                                role="tab" aria-controls="nav-profile" aria-selected="false">Visi Misi </a>
                            <a class="nav-item nav-link" id="nav-contact-tab" data-toggle="tab" href="#nav-contact"
                                role="tab" aria-controls="nav-contact" aria-selected="false">Geografis Desa</a>

                        </div>
                    </nav>
                </div>
            </div>
            <div class="tab-content" id="nav-tabContent">
                <div class="tab-pane fade show active" id="nav-home" role="tabpanel" aria-labelledby="nav-home-tab">
                    <div class="row">
                        <div class="col-lg-12 col-md-6">
                            <div class="single__program">
                                <div class="program_thumb">
                                    <img src="img/program/1.png" alt="">
                                </div>
                                @foreach ($profil as $profils)
                                    <div class="program__content">
                                        <div class="row g-0 text-center">
                                            <div class="col-6 col-md-6">
                                                {{-- nama --}}
                                                <h3 class="mb-30 font-weight-bold">Nama Desa</h3>
                                                <div class="row">
                                                    <div class="col-lg-12">
                                                        <blockquote class="generic-blockquote">
                                                          {{$profils->nama}}
                                                        </blockquote>
                                                    </div>
                                                </div>
                                                <br>

                                                {{-- kepala desa --}}
                                                <h3 class="mb-30 font-weight-bold">Kepala Desa</h3>
                                                <div class="row">
                                                    <div class="col-lg-12">
                                                        <blockquote class="generic-blockquote">
                                                            {{$profils->kd}}
                                                        </blockquote>
                                                    </div>
                                                </div>
                                                <br>

                                                {{-- nip --}}
                                                <h3 class="mb-30 font-weight-bold">Nip</h3>
                                                <div class="row">
                                                    <div class="col-lg-12">
                                                        <blockquote class="generic-blockquote">
                                                            {{$profils->nip}}
                                                        </blockquote>
                                                    </div>
                                                </div>
                                            </div>


                                            <div class="col-6 col-md-6">
                                                {{-- kontak --}}
                                                <h3 class="mb-30 font-weight-bold">kontak</h3>
                                                <div class="row">
                                                    <div class="col-lg-12">
                                                        <blockquote class="generic-blockquote">
                                                            {{$profils->kontak}}
                                                        </blockquote>
                                                    </div>
                                                </div>
                                                <br>

                                                {{-- email --}}
                                                <h3 class="mb-30 font-weight-bold">email</h3>
                                                <div class="row">
                                                    <div class="col-lg-12">
                                                        <blockquote class="generic-blockquote">
                                                            {{$profils->email}}
                                                        </blockquote>
                                                    </div>
                                                </div>
                                                <br>

                                                {{-- kode pos --}}
                                                <h3 class="mb-30 font-weight-bold">kode pos</h3>
                                                <div class="row">
                                                    <div class="col-lg-12">
                                                        <blockquote class="generic-blockquote">
                                                            {{$profils->pos}}
                                                        </blockquote>
                                                    </div>
                                                </div>
                                                <br>
                                            </div>
                                        </div>


                                    </div>
                            </div>
                        </div>

                    </div>
                </div>
                <div class="tab-pane fade" id="nav-profile" role="tabpanel" aria-labelledby="nav-profile-tab">
                    <div class="row">
                        <div class="col-lg-12 col-md-6">
                            <div class="single__program">
                                <div class="program_thumb">
                                    <img src="img/program/2.png" alt="">
                                </div>
                                <div class="program__content">
                                    {{-- visi --}}
                                    <h3 class="mb-30 font-weight-bold">VISI</h3>
                                    <div class="row">
                                        <div class="col-lg-12">
                                            <blockquote class="generic-blockquote">
                                                {!! $profils->visi !!}
                                            </blockquote>
                                        </div>
                                    </div>
                                    {{-- visi --}}
                                    {{-- misi --}}
                                    <h3 class="mb-30 font-weight-bold">MISI</h3>
                                    <div class="row">
                                        <div class="col-lg-12">
                                            <blockquote class="generic-blockquote">
                                                {!! $profils->misi !!}
                                            </blockquote>
                                        </div>
                                    </div>
                                    {{-- misi --}}
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="tab-pane fade" id="nav-contact" role="tabpanel" aria-labelledby="nav-contact-tab">
                    <div class="row">
                        <div class="col-lg-12 col-md-6">
                            <div class="single__program">
                                <div class="program_thumb">
                                    <img src="img/program/3.png" alt="">
                                </div>
                                <div class="program__content">
                                    {{-- alamat --}}
                                    <h3 class="mb-30 font-weight-bold">Alamat</h3>
                                    <div class="row">
                                        <div class="col-lg-12">
                                            <blockquote class="generic-blockquote">
                                                {{$profils->alamat}}
                                            </blockquote>
                                        </div>
                                    </div>

                                    {{-- Luas --}}
                                    <h3 class="mb-30 font-weight-bold">Luas</h3>
                                    <div class="row">
                                        <div class="col-lg-12">
                                            <blockquote class="generic-blockquote">
                                                {{$profils->luas}}
                                            </blockquote>
                                        </div>
                                    </div>

                                    {{-- penduduk --}}
                                    <h3 class="mb-30 font-weight-bold">Penduduk</h3>
                                    <div class="row">
                                        <div class="col-lg-12">
                                            <blockquote class="generic-blockquote">
                                                {{$profils->penduduk}}
                                            </blockquote>
                                        </div>
                                    </div>

                                </div>
                            </div>
                        </div>
                    </div>
                    @endforeach
                </div>
            </div>
        </div>
    </div>
    <!-- popular_program_area_end -->




    <!-- latest_coures_area_start  -->
    {{-- <div class="latest_coures_area">
        <div class="latest_coures_inner">
            <div class="container">
                <div class="row">
                    <div class="col-lg-8">
                        <div class="coures_info">
                            <div class="section_title white_text">
                                <h3>Latest Courses</h3>
                                <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod <br> tempor
                                    incididunt ut labore et dolore magna aliqua. Ut enim ad minim <br> veniam, quis nostrud
                                    exercitation.</p>
                            </div>
                            <div class="coures_wrap d-flex">
                                <div class="single_wrap">
                                    <div class="icon">
                                        <i class="flaticon-lab"></i>
                                    </div>
                                    <h4>Bachelor of <br>
                                        Graphic Design</h4>
                                    <p>Lorem ipsum dolor sit amet, sectetur adipiscing elit, sed do eiusmod tpor incididunt
                                        ut piscing vcs.</p>
                                    <a href="#" class="boxed-btn5">Apply NOw</a>
                                </div>
                                <div class="single_wrap">
                                    <div class="icon">
                                        <i class="flaticon-lab"></i>
                                    </div>
                                    <h4>Bachelor of <br>
                                        Graphic Design</h4>
                                    <p>Lorem ipsum dolor sit amet, sectetur adipiscing elit, sed do eiusmod tpor incididunt
                                        ut piscing vcs.</p>
                                    <a href="#" class="boxed-btn5">Apply NOw</a>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div> --}}
    <!--/ latest_coures_area_end -->




    <!-- recent_event_area_strat  -->
    {{-- <div class="recent_event_area section__padding">
        <div class="container">
            <div class="row justify-content-center">
                <div class="col-lg-8 col-md-10">
                    <div class="section_title text-center mb-70">
                        <h3 class="mb-45">Recent Event</h3>
                        <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut
                            labore et dolore magna aliqua.</p>
                    </div>
                </div>
            </div>
            <div class="row justify-content-center">
                <div class="col-lg-10">
                    <div class="single_event d-flex align-items-center">
                        <div class="date text-center">
                            <span>02</span>
                            <p>Dec, 2020</p>
                        </div>
                        <div class="event_info">
                            <a href="event_details.html">
                                <h4>How to speake like a nativespeaker?</h4>
                            </a>
                            <p><span> <i class="flaticon-clock"></i> 10:30 pm</span> <span> <i
                                        class="flaticon-calendar"></i> 21Nov 2020 </span> <span> <i
                                        class="flaticon-placeholder"></i> AH Oditoriam</span> </p>
                        </div>
                    </div>
                    <div class="single_event d-flex align-items-center">
                        <div class="date text-center">
                            <span>03</span>
                            <p>Dec, 2020</p>
                        </div>
                        <div class="event_info">
                            <a href="event_details.html">
                                <h4>How to speake like a nativespeaker?</h4>
                            </a>
                            <p><span> <i class="flaticon-clock"></i> 10:30 pm</span> <span> <i
                                        class="flaticon-calendar"></i> 21Nov 2020 </span> <span> <i
                                        class="flaticon-placeholder"></i> AH Oditoriam</span> </p>
                        </div>
                    </div>
                    <div class="single_event d-flex align-items-center">
                        <div class="date text-center">
                            <span>10</span>
                            <p>Dec, 2020</p>
                        </div>
                        <div class="event_info">
                            <a href="event_details.html">
                                <h4>How to speake like a nativespeaker?</h4>
                            </a>
                            <p><span> <i class="flaticon-clock"></i> 10:30 pm</span> <span> <i
                                        class="flaticon-calendar"></i> 21Nov 2020 </span> <span> <i
                                        class="flaticon-placeholder"></i> AH Oditoriam</span> </p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div> --}}
    <!-- recent_event_area_end  -->



    {{-- galeri --}}
    <div id="item-2" class="popular_program_area section__padding">
        <div class="container">
            <div class="row ">
                <div class="col-lg-12">
                    <div class="section_title text-center">
                        <h3>Galeri</h3>
                    </div>
                </div>
            </div>
            <div class="row gallery-item">
                @foreach ($berita as $beritas)
                    <div class="col-md-4">
                        <a href="{{ asset('storage/' . $beritas->image) }}" class="img-pop-up">
                            <div class="single-gallery-image"
                                style="background: url({{ asset('storage/' . $beritas->image) }});"></div>
                        </a>
                    </div>
                @endforeach


                @foreach ($kategori as $kategoris)
                    <div class="col-md-6">
                        <a href="{{ asset('storage/' . $kategoris->image) }}" class="img-pop-up">
                            <div class="single-gallery-image"
                                style="background: url({{ asset('storage/' . $kategoris->image) }});"></div>
                        </a>
                    </div>
                @endforeach

            </div>
        </div>
    </div>







    <!-- recent_news_area_start  -->
    <div id="item-3" class="recent_news_area section__padding">
        <div class="container">
            <div class="row justify-content-center">
                <div class="col-lg-8 col-md-10">
                    <div class="section_title text-center mb-70">
                        <h3 class="mb-45">Recent News</h3>
                        <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut
                            labore et dolore magna aliqua.</p>
                    </div>
                </div>
            </div>
            <div class="row">
                @foreach ($berita as $beritas)
                    <div class="col-md-6">
                        <div class="single__news">
                            <div class="thumb">
                                <a href="{{ url('detail') }}/{{ $beritas->id }}">
                                    <img src="{{ asset('storage/' . $beritas->image) }}" alt="">
                                </a>
                                <span class="badge">Group Study</span>
                            </div>
                            <div class="news_info">
                                <a href="{{ url('detail') }}/{{ $beritas->id }}">
                                    <h4>{{ $beritas->title }}</h4>
                                </a>
                                <p class="d-flex align-items-center"> <span><i class="flaticon-calendar-1"></i> May 10,
                                        2020</span>

                                    <span> <i class="flaticon-comment"></i> 01 comments</span>
                                </p>
                            </div>
                        </div>
                    </div>
                @endforeach

            </div>
        </div>
    </div>
    <!-- recent_news_area_end  -->

    <!-- latest_coures_area_start  -->
    {{-- <div data-scroll-index='3' class="admission_area">
    <div class="admission_inner">
        <div class="container">
            <div class="row justify-content-end">
                <div class="col-lg-7">
                    <div class="admission_form">
                        <h3>Apply for Admission</h3>
                        <form action="#">
                            <div class="row">
                                <div class="col-md-6">
                                    <div class="single_input">
                                        <input type="text" placeholder="First Name" >
                                    </div>
                                </div>
                                <div class="col-md-6">
                                    <div class="single_input">
                                        <input type="text" placeholder="Last Name" >
                                    </div>
                                </div>
                                <div class="col-md-6">
                                    <div class="single_input">
                                        <input type="text" placeholder="Phone Number" >
                                    </div>
                                </div>
                                <div class="col-md-6">
                                    <div class="single_input">
                                        <input type="text" placeholder="Email Address" >
                                    </div>
                                </div>
                                <div class="col-md-12">
                                    <div class="single_input">
                                        <textarea cols="30" placeholder="Write an Application" rows="10"></textarea>
                                    </div>
                                </div>
                                <div class="col-md-12">
                                    <div class="apply_btn">
                                        <button class="boxed-btn3" type="submit">Apply Now</button>
                                    </div>
                                </div>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div> --}}
    <!--/ latest_coures_area_end -->

    <div id="item-4" class="contact section">
        <div class="container">
            <div class="row ">
                <div class="col-lg-12">
                    <div class="section_title text-center">
                        <h3>Administrasi</h3>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <div class="contact-content mb-5">
        <div class="container">
            <div class="row">
                <div class="col-lg-7">
                    <div id="map">
                        <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d89934.30101312666!2d122.54947179016042!3d-5.010488939475794!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x2da3b97fb0a66333%3A0x72ca0889f2475153!2sLakologou%2C%20Kec.%20Tongkuno%2C%20Kabupaten%20Muna%2C%20Sulawesi%20Tenggara!5e0!3m2!1sid!2sid!4v1704790007609!5m2!1sid!2sid" width="600" height="450" style="border:0;" allowfullscreen="" loading="lazy" referrerpolicy="no-referrer-when-downgrade"></iframe>
                    </div>
                    <div class="row">
                        <div class="col-lg-4">
                            <div class="item phone">
                                <img src="assets/images/phone-icon.png" alt="" style="max-width: 40px;">
                                <h6>+6285241611228<br><span>Nomor HP</span></h6>
                            </div>
                        </div>
                        <div class="col-lg-8">
                            <div class="item email">
                                <img src="assets/images/email-icon.png" alt="" style="max-width: 60px;">
                                <h6>akbarmuhamad240201@gmail.com<br><span>Email Desa</span></h6>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-lg-5">
                    {{-- wa --}}
                    <form id="contact-form">


                        <label for="">Nama</label>
                        <input type="text" class="name">

                        <label for="">Email</label>
                        <input type="text" class="gmail">

                        <label for="">NIK</label>
                        <input type="text" class="nik">

                        <label for="">Pesan</label>
                        <textarea class="message"></textarea>

                        <button type="button" onclick="sendwhatsapp();">Send Via WhatsApp</button>
                    </form>

                    <script>
                        function sendwhatsapp() {
                            var phonenumber = "+6285282816818";

                            var name = document.querySelector(".name").value;
                            var gmail = document.querySelector(".gmail").value;
                            var nik = document.querySelector(".nik").value;
                            var message = document.querySelector(".message").value;

                            var url = "https://wa.me/" + phonenumber + "?text=" +
                                "*Nama :* " + name + "%0a" +
                                "*Email :* " + gmail + "%0a" +
                                "*NIK:* " + nik + "%0a" +
                                "*Message :* " + message +
                                "%0a%0a";


                            window.open(url, '_blank').focus();
                        }
                    </script>



                    {{-- <div class="row">
                            <form method="post" action="/beranda" id="contact-form"  target="_blank">
                            <div class="col-lg-12">
                               
                                    <label for="name">Nama Lengkap</label>
                                    <input type="name" name="name" id="name" placeholder="Your Name..."
                                        autocomplete="on" required>
                           
                            </div>
                            <div class="col-lg-12">
                            
                                    <label for="email">Email</label>
                                    <input type="text" name="email" id="email" pattern="[^ @]*@[^ @]*"
                                        placeholder="Your E-mail..." required="">
                              
                            </div>
                            <div class="col-lg-12">
                               
                                    <label for="subject">NIK</label>
                                    <input type="nik" name="nik" id="nik" placeholder="nik..."
                                        autocomplete="on">
                              
                            </div>
                            <div class="col-lg-12">
                              
                                    <label for="message">Pesan</label>
                                    <textarea name="message" id="message" placeholder="Your Message"></textarea>
                               
                            </div>
                            <input type="hidden" name="noWA" value="6285241611228">
                            <div class="col-lg-12">
                               
                                    <button type="submit" name="submit" class="btn btn-primary">Kirim Pesan</button>
                               
                            </div>
                        </div>
                    </form>  --}}
                </div>
            </div>
        </div>
    </div>
@endsection
