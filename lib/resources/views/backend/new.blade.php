@extends('backend.master')
@section('title','Tin tức')
@section('main')
<!-- page content -->
<div class="right_col" role="main">
  <!-- /top tiles -->
  <div class="row">
    <div class="col-md-12 col-sm-12 ">
<div class="title_right">
            <form action="{{URL::to('admin/new/search')}}" method="GET">
                <div class="col-md-5 col-sm-5   form-group pull-right top_search">
                  <div class="input-group">
                    <input type="search" name="search" class="form-control" placeholder="Search for...">
                        <span class="input-group-prepend">
                      <button class="btn btn-default" type="submit" type="button">Go!</button>
                    </span>
                  </div>
                </div>
                </form>
              </div>
<div class="col-md-12 col-sm-12  ">
                <div class="x_panel">
                  <div class="x_title">
                    <h2>Tin tức</h2>
                     &nbsp&nbsp&nbsp&nbsp<a href="{{asset('admin/new/add')}}" class="btn btn-round btn-secondary" type="button">Thêm mới</a>
                    <ul class="nav navbar-right panel_toolbox">
                      <li><a class="collapse-link"><i class="fa fa-chevron-up"></i></a>
                      </li>
                      <li class="dropdown">
                        <a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-expanded="false"><i class="fa fa-wrench"></i></a>
                        <div class="dropdown-menu" aria-labelledby="dropdownMenuButton">
                            <a class="dropdown-item" href="#">Settings 1</a>
                            <a class="dropdown-item" href="#">Settings 2</a>
                          </div>
                      </li>
                      <li><a class="close-link"><i class="fa fa-close"></i></a>
                      </li>
                    </ul>
                    <div class="clearfix"></div>
                  </div>
                  <div class="x_content">

                    <table class="table table-striped">
                      <thead>
                        <tr>
                          <th>Hình đại diện</th>
                          <th>Tiêu đề</th>
                          <th>Tóm tắt</th>
                          <th>Danh mục</th>
                          <th>Nổi bật</th>
                          <th>Số lượt xem</th>
                          <th>Ngày tạo</th>
                          <th>Ngày cập nhật</th>
                          <th>Tùy chọn</th>
                        </tr>
                      </thead>
                      <tbody>
                      @foreach($newlist as $new)
                        <tr>
                          <td><img width="150px" height="150px" src="{{asset('lib/storage/app/avatar/'.$new->new_img)}}" alt=""></td>
                         <td>{{$new->new_title}}</td>
                         <td>{{$new->new_brief}}</td>
                         <td>{{$new->cate_name}}</td>
                         <td>@if($new->new_highlight == 1) YES @else NO @endif</td>
                         <td>{{$new->new_numberviews}}</td>
                         <td>{{$new->created_at}}</td>
                         <td>{{$new->updated_at}}</td>
                          <td><a href="{{asset('admin/new/detail/'.$new->new_id)}}" class="btn btn-outline-success"><i class="fa fa-edit"></i> Chi tiết</a>
                            <a href="{{asset('admin/new/edit/'.$new->new_id)}}" class="btn btn-outline-dark"><i class="fa fa-edit"></i> Sữa</a>
                              <a onclick="return confirm('Bạn có chắc muốn xóa không!')" href="{{asset('admin/new/delete/'.$new->new_id)}}" class="btn btn-outline-danger"><i class="fa fa-trash"></i> Xóa</a></td>
                        </tr>
                        @endforeach
                      </tbody>
                    </table>
                    <div class="text-md-center">
                <div>
                  {{$newlist->links()}}
                </div>
              </div>
                  </div>
                </div>
              </div>
    </div>

  </div>
  <br />
</div>
<!-- /page content -->

@stop