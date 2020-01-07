@extends('backend.master')
@section('title','Danh mục slide')
@section('main')
<!-- page content -->
<div class="right_col" role="main">
  <!-- /top tiles -->
  <div class="row">
    <div class="col-md-12 col-sm-12 ">
<div class="title_right">
                <div class="col-md-5 col-sm-5   form-group pull-right top_search">
                  <div class="input-group">
                    <input type="text" class="form-control" placeholder="Search for...">
                    <span class="input-group-btn">
                      <button class="btn btn-default" type="button">Go!</button>
                    </span>
                  </div>
                </div>
              </div>
<div class="col-md-12 col-sm-12  ">
                <div class="x_panel">
                  <div class="x_title">
                    <h2>Danh mục slide</h2>
                     &nbsp&nbsp&nbsp&nbsp<a href="{{asset('admin/slide/add')}}" class="btn btn-round btn-secondary" type="button">Thêm mới</a>
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
                          <th>Tên slide</th>
                          <th>Hình</th>
                          <th>Tên title</th>
                          <th>Ngày tạo</th>
                          <th>Ngày cập nhật</th>
                        </tr>
                      </thead>
                      <tbody>
                        @foreach($slidelist as $slide)
                        <tr>
                          <td>{{$slide->name}}</td>
                          <td><img width="150px" height="150px" src="{{asset('lib/storage/app/avatar/'.$slide->image)}}" alt=""></td>
                          <td>{{$slide->slug}}</td>
                          <td>{{$slide->created_at}}</td>
                          <td>{{$slide->updated_at}}</td>
                          <td><a href="{{asset('admin/slide/edit/'.$slide->slide_id)}}" class="btn btn-outline-dark"><i class="fa fa-edit"></i> Sữa</a>
                              <a href="{{asset('admin/slide/delete/'.$slide->slide_id)}}" class="btn btn-outline-danger"><i class="fa fa-trash"></i> Xóa</a></td>
                        </tr>
                        @endforeach
                      </tbody>
                    </table>

                  </div>
                </div>
              </div>
    </div>

  </div>
  <br />
</div>
<!-- /page content -->

@stop