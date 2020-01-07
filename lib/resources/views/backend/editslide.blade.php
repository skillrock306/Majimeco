@extends('backend.master')
@section('title','Sữa danh slide')
@section('main')
<div class="right_col" role="main">

<div class="row">
              <div class="col-md-12 col-sm-12 ">
                <div class="x_panel">
                  <div class="x_title">
                    <h2>Sữa danh mục</h2>
                    <ul class="nav navbar-right panel_toolbox">
                      <li><a class="collapse-link"><i class="fa fa-chevron-up"></i></a>
                      </li>
                      <li class="dropdown">
                        <a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-haspopup="true" aria-expanded="false"><i class="fa fa-wrench"></i></a>
                        <ul class="dropdown-menu" role="menu">
                          <li><a class="dropdown-item" href="#">Settings 1</a>
                          </li>
                          <li><a class="dropdown-item" href="#">Settings 2</a>
                          </li>
                        </ul>
                      </li>
                      <li><a class="close-link"><i class="fa fa-close"></i></a>
                      </li>
                    </ul>
                    <div class="clearfix"></div>
                  </div>
                  <div class="x_content">
                    <br />
                    @include('errors.note')
                    <form method="POST" id="demo-form2" enctype="multipart/form-data" data-parsley-validate class="form-horizontal form-label-left">
                      <div class="item form-group">
                        <label class="col-form-label col-md-3 col-sm-3 label-align">Tên danh mục
                        </label>
                        <div class="col-md-6 col-sm-6 ">
                          <input id="name" name="name" class="date-picker form-control" required type="text" value="{{$slide->name}}">
                        </div>
                      </div>
                      <div class="item form-group">
                        <label class="col-form-label col-md-3 col-sm-3 label-align">Hình slide
                        </label>
                        <div class="col-md-6 col-sm-6 ">
                          <input id="img" name="img" class="date-picker form-control" type="file">
                          <img id="avatar" class="thumbnail" width="300px" height="300px" src="{{asset('lib/storage/app/avatar/'.$slide->image)}}" alt="">
                        </div>
                      </div>
                      <div class="ln_solid"></div>
                      <div class="item form-group">
                        <div class="col-md-6 col-sm-6 offset-md-3">
                          <button type="submit" name="submit" class="btn btn-success">Sữa<a href=""></a></button>
                          <a href="{{asset('admin/slide')}}" class="btn btn-primary" type="button">Hủy bỏ</a>
                        </div>
                      </div>
						{{csrf_field()}}
                    </form>
                  </div>
                </div>
              </div>
            </div>
</div>
@stop