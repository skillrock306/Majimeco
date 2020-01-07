@extends('frontend.master')
@section('title','Trang chủ')
@section('main')
      <!-- END section -->

   <section class="site-section py-sm">
        <div class="container">
          <div class="row blog-entries">

            <div class="col-md-12 col-lg-8 main-content">
              <div class="row">
            <div class="col-md-6">
              <h2 class="mb-4">Tin nổi bật</h2>
            </div>
          </div>
              <div class="row">
                @foreach($highlight as $item)
                <div class="col-md-6">
                  <a href="{{asset('detail/'.$item->new_id.'/'.$item->new_slug.'.html')}}" class="blog-entry element-animate" data-animate-effect="fadeIn">
                    <img src="{{asset('lib/storage/app/avatar/'.$item->new_img)}}" alt="Image placeholder">
                    <div class="blog-content-body">
                      <div class="post-meta">
                        <span class="mr-2">{{$item->updated_at}} </span>  
                      </div>
                      <h2>{{$item->new_title}}</h2>
                    </div>
                  </a>
                </div>
                @endforeach
              </div>

              <div class="row mt-5">
                <div class="col-md-12 text-center">
                  {{$highlight->links()}}
                </div>
              </div>
              <div class="row">
                <div class="col-md-6">
                  <h2 class="mb-4">Tin cần thiết</h2>
                </div>
              </div>
              <div class="row">
                @foreach($event as $item)
                <div class="col-md-6">
                  <a href="blog-single.html" class="blog-entry element-animate" data-animate-effect="fadeIn">
                    <img src="{{asset('lib/storage/app/avatar/'.$item->new_img)}}" alt="Image placeholder">
                    <div class="blog-content-body">
                      <div class="post-meta">
                        <span class="mr-2">{{$item->updated_at}} </span>  
                      </div>
                      <h2>{{$item->new_title}}</h2>
                    </div>
                  </a>
                </div>
                @endforeach
              </div>
              <div class="row mt-5">
                <div class="col-md-12 text-center">
                </div>
              </div>
            </div>
          
            <!-- END main-content -->
        <div class="col-md-12 col-lg-4 sidebar">
              <div class="sidebar-box search-form-wrap">
                <form action="#" class="search-form">
                  <div class="form-group">
                    <span class="icon fa fa-search"></span>
                    <input type="text" class="form-control" id="s" placeholder="Type a keyword and hit enter">
                  </div>
                </form>
              </div>
              <!-- END sidebar-box -->
            
              <div class="sidebar-box">
                <h3 class="heading">Tin nổi bật</h3>
                <div class="post-entry-sidebar">
                  <ul>
                    @foreach($highlight as $itemslide)
                    <li>
                      <a href="">
                        <img src="{{asset('lib/storage/app/avatar/'.$itemslide->new_img)}}" alt="Image placeholder" class="mr-4">
                        <div class="text">
                          <h4>{{$itemslide->new_title}}</h4>
                          <div class="post-meta">
                            <span class="mr-2">{{$itemslide->updated_at}}</span>
                          </div>
                        </div>
                      </a>
                    </li>
                    @endforeach
                  </ul>
                </div>
              </div>
              <!-- END sidebar-box -->
              <div class="sidebar-box">
                <h3 class="heading">Categories</h3>
                <ul class="categories">
                  @foreach($category as $cate)
                  <li><a href="#">{{$cate->cate_name}}</a></li>
                  @endforeach
                </ul>
              </div>
              <!-- END sidebar-box -->
            </div>
            <!-- END sidebar -->

         </div>
        </div>
      </section>
    
    @stop