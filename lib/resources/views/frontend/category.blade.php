@extends('frontend.master')
@section('title','Danh mục bài viết')
@section('main')

    <section class="site-section pt-5">
      <div class="container">
        <div class="row mb-4">
          <div class="col-md-6">
            <h2 class="mb-4">{{$cateName->cate_name}}</h2>
          </div>
        </div>
        <div class="row blog-entries">
          <div class="col-md-12 col-lg-8 main-content">
            <div class="row mb-5 mt-5">

              <div class="col-md-12">
              @foreach($items as $item )
                <div class="post-entry-horzontal">
                  <a href="{{asset('detail/'.$item->new_id.'/'.$item->new_slug.'.html')}}">
                    <div class="image element-animate" data-animate-effect="fadeIn" style="background-image: url({{asset('lib/storage/app/avatar/'.$item->new_img)}});"></div>
                    <span class="text">
                      <div class="post-meta">
                        <span class="mr-2">{{$item->updated_at}} </span> &bullet;
                      </div>
                      <h2>{{$item->new_title}}</h2>
                    </span>
                  </a>
                </div>
                <!-- END post -->
              @endforeach
              </div>
            </div>

            <div class="row mt-5">
              <div class="col-md-12 text-center">
                  {{$items->links()}}
              </div>
            </div>

            

          </div>

          <!-- END main-content -->

          <div class="col-md-12 col-lg-4 sidebar">
              <div class="sidebar-box search-form-wrap">
                <form action="{{URL::to('category/'.$cateName->cate_id.'/'.$cateName->cate_slug.'.html')}}" method="GET" class="search-form">
                  <div class="input-group">
                    <span class="icon fa fa-search" ></span>
                    <input type="search" name="keyword" class="form-control" placeholder="Tìm kiếm" value="@if (isset($keyword)) {{ $keyword }} @endif">
                    <button class="btn btn-default" type="submit" type="button"></button>
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