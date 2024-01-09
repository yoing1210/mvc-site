@extends('layouts.main')

@section('container') 

  <!-- bradcam_area_start  -->
  <div class="bradcam_area breadcam_bg">
    <div class="container">
        <div class="row">
            <div class="col-xl-12">
                <div class="bradcam_text">
                    <h3>Single Blog</h3>
                </div>
            </div>
        </div>
    </div>
</div>
<!-- bradcam_area_end  -->

  <!--================Blog Area =================-->
  <section class="blog_area single-post-area section-padding">
    <div class="container">
       <div class="row">
          <div class="col-lg-8 posts-list">
             <div class="single-post">
                <div class="feature-img">
                   <img class="img-fluid" src="img/blog/single_blog_1.png" alt="">
                 </div>
                 <div class="blog_details">
                    <h2>{{ $berita->title }} </h2>
                    <img class="img-fluid my-4" src="{{ asset('storage/'. $berita->image) }}" alt="">
                   {{-- <ul class="blog-info-link mt-3 mb-4">
                      <li><a href="#"><i class="fa fa-user"></i> Travel, Lifestyle</a></li>
                      <li><a href="#"><i class="fa fa-comments"></i> 03 Comments</a></li>
                   </ul> --}}
                   <p class="excert">
                    {!! $berita->body !!}
                   </p>
                </div>
             </div>
             <div class="navigation-top">
                <div class="d-sm-flex justify-content-between text-center">
                   <p class="like-info"><span class="align-middle"></span> Lily and 4
                      people like this</p>
                   <div class="col-sm-4 text-center my-2 my-sm-0">
                      <!-- <p class="comment-count"><span class="align-middle"><i class="fa fa-comment"></i></span> 06 Comments</p> -->
                   </div>
                
                </div>
                <div class="navigation-area">
                   <div class="row">
                      <div
                         class="col-lg-6 col-md-6 col-12 nav-left flex-row d-flex justify-content-start align-items-center">
                         <div class="thumb">
                            <a href="#">
                               <img class="img-fluid" src="img/post/preview.png" alt="">
                            </a>
                         </div>
                         <div class="arrow">
                            <a href="#">
                               <span class="lnr text-white ti-arrow-left"></span>
                            </a>
                         </div>
                         <div class="detials">
                            <p>Prev Post</p>
                            <a href="#">
                               <h4>@for ($i = 0; $i < 1; $i++)
                                {{ $berita->title }}
                               @endfor</h4>
                            </a>
                         </div>
                      </div>
                     
                   </div>
                </div>
             </div>
  
            
          </div>
          <div class="col-lg-4">
             <div class="blog_right_sidebar">
               
                <aside class="single_sidebar_widget post_category_widget">
                   <h4 class="widget_title mt-4">Category</h4>
                   <ul class="list cat-list">
                      @foreach ( $cat as $cats )
                      <li> 
                      <a href="" class="d-flex">
                         <p>{{ $cats->name }}</p>
                       </a>
                      </li>
                      @endforeach
                    
          
                   </ul>
                </aside>
                <aside class="single_sidebar_widget popular_post_widget">
                   <h3 class="widget_title">Recent Post</h3>
                   @foreach ($ber as $berita)
                       
                   @endforeach
                   <div class="media post_item">
                      <div class="media-body">
                         <a href="single-blog.html">
                            <h5>{{ $berita->title }}</h5>
                          </a>
                          <img src="{{ asset('storage/'. $berita->image) }}" width="100" alt="post">
                          <p>January 12, 2019</p>
                      </div>
                   </div>
                   
                </aside>
       
             </div>
          </div>
       </div>
    </div>
  </section>
  <!--================ Blog Area end =================-->
  
 @endsection