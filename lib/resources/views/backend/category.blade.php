@extends('backend.master')
@section('title','Danh mục tin tức')
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
                    <h2>Danh mục tin tức</h2>
                     &nbsp&nbsp&nbsp&nbsp<a href="{{asset('admin/category/add')}}" class="btn btn-round btn-secondary" type="button">Thêm mới</a>
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
                          <th>Loại Tin Tức</th>
                          <th>Tùy chọn</th>
                        </tr>
                      </thead>
                      <tbody>
                        @foreach($catelist as $cate)
                        <tr>
                          <td>{{$cate->cate_name}}</td>
                          <td><a href="{{asset('admin/category/edit/'.$cate->cate_id)}}" class="btn btn-outline-dark"><i class="fa fa-edit"></i> Sữa</a>
                              <a href="{{asset('admin/category/delete/'.$cate->cate_id)}}" class="btn btn-outline-danger"><i class="fa fa-trash"></i> Xóa</a></td>
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