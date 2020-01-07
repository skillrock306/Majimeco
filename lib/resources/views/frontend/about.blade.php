@extends('frontend.master')
@section('title','Vì sao chọn chúng tôi')
@section('main')
    <section class="site-section pt-5">
      <div class="container">
        
        <div class="row blog-entries">
          <div class="col-md-12 col-lg-8 main-content">
            
            <div class="row">
              <div class="col-md-12">
                <h2 class="mb-4">Vì sao chọn chúng tôi</h2>
                <p class="mb-5"><img src="{{asset('lib/storage/app/avatar/21.jpg')}}" alt="Image placeholder" class="img-fluid"></p>
                <p>Với tiêu chí luôn luôn cung cấp nguồn lao động có chất lượng cho đối tác, chủ sử dụng lao động cũng như cam kết đảm bảo mức lương, các quyền và lợi ích hợp pháp cho người lao động, MAJIMECO luôn cố vươn lên những tầm cao mới, khẳng định được thương hiệu uy tín trong lĩnh vực cung ứng nguồn nhân lực. gắng nỗ lực hết mình để làm hài lòng đối tác, cổ đông và người lao động. Đây cũng là cơ sở để MAJIMECO Là một trong những công ty hàng đầu trong lĩnh vực cung ứng nguồn lao động cho các đối tác ở Nhật Bản, Với những thành công mà MAJIMECO đã đạt được trong 10 năm qua, MAJIMECO tự hào là một địa chỉ uy tín và đúng đắn cho người lao động. Sau đây là những lý do bạn nên chọn MAJIMECO:</p>

<p>- MAJIMECO là công ty uy tín, là thương hiệu tin cậy cho người lao động </p>

<p>- Đến với MAJIMECO, người lao động sẽ được đào tạo trong một môi trường thân thiện, trang bị vật chất và cơ sở học đầy đủ. Đội ngũ giảng viên có nhiều kinh nghiệm với chuyên môn vững vàng và tận tâm trong việc đào tạo nguồn nhân lực.</p>

<p>- MAJIMECO luôn khai thác những đơn hàng có chất lượng nhằm mang đến cho người lao động những công việc có thu nhập cao, đảm bảo cuộc sống ổn định.</p>

<p>- Luôn có những chính sách hỗ trợ cho người lao động khi làm việc tại Nhật Bản, luôn đồng hành cùng với người lao động trong mọi hoàn cảnh. </p>

<p>- MAJIMECO luôn cam kết đảm bảo sẽ giới thiệu việc làm cho người lao động sau khi về nước. </p>

<p>Với phương châm “Tận tâm phục vụ để mang đến những chất lượng hoàn hảo cho người lao động”, MAJIMECO tự hào là cầu nối tin cậy, đáp ứng mọi nhu cầu về việc làm cho người lao động.</p>
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