@extends('frontend.master')
@section('title','Hoàn thành')
@section('main')
	<section class="site-section pt-5">
      <div class="container">
        
        <div class="row blog-entries">
          <div class="col-md-12 col-lg-8 main-content">
            
            <div class="row">
              <div class="col-md-12">
                <h2 class="mb-4" align="center">Quý khách đã gửi thông tin thành công</h2>
					<p>Công ty sẽ liên hệ tư vấn với Quý khách thông qua thông tin khách hàng đã gửi</p>
					<p>Cám ơn Quý khách đã tin tưởng Công ty chúng tôi</p>
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