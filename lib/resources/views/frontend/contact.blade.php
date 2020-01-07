@extends('frontend.master')
@section('title','Liên hệ')
@section('main')


    <section class="site-section">
      <div class="container">
        <div class="row mb-4">
          <div class="col-md-6">
            <h1>Liên hệ với chúng tôi</h1>
          </div>
        </div>
        <div class="row blog-entries">
          <div class="col-md-12 col-lg-8 main-content">
            
            <form method="post">
                  <div class="row">
                    <div class="col-md-12 form-group">
                      <label for="name">Họ và tên</label>
                      <input type="text" id="name" name="name" class="form-control ">
                    </div>
                    <div class="col-md-12 form-group">
                      <label for="phone">Số điện thoại</label>
                      <input type="text" id="phone" name="phone" class="form-control ">
                    </div>
                    <div class="col-md-12 form-group">
                      <label for="phone">Địa chỉ</label>
                      <input type="text" id="address" name="address" class="form-control ">
                    </div>
                    <div class="col-md-12 form-group">
                      <label for="email">Email</label>
                      <input type="email" id="email" name="email" class="form-control ">
                    </div>
                  </div>
                  <div class="row">
                    <div class="col-md-12 form-group">
                      <label for="message">Yêu cầu tư vấn</label>
                      <textarea name="message" id="message" class="form-control " cols="30" rows="8"></textarea>
                    </div>
                  </div>
                  <div class="row">
                    <div class="col-md-6 form-group">
                      <input type="submit" value="Gửi tin" class="btn btn-primary">
                    </div>
                  </div>
                  {{csrf_field()}}
                </form>
            

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