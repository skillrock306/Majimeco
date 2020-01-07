@extends('backend.master')
@section('title','Thêm tin tức')
@section('main')
<div class="right_col" role="main">

<div class="row">
              <div class="col-md-12 col-sm-12 ">
                <div class="x_panel">
                  <div class="x_title">
                    <h2>Thêm tin tức</h2>
                    <ul class="nav navbar-right panel_toolbox">
                      @include('errors.note')
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
                    <form method="post" id="demo-form2" enctype="multipart/form-data" data-parsley-validate class="form-horizontal form-label-left">
                      <div class="item form-group">
                        <label class="col-form-label col-md-3 col-sm-3 label-align">Tiêu đề
                        </label>
                        <div class="col-md-6 col-sm-6 ">
                          <input id="tieude" name="title" class="date-picker form-control" required type="text">
                        </div>
                      </div>
                      <div class="item form-group">
                        <label class="col-form-label col-md-3 col-sm-3 label-align">Tóm tắt
                        </label>
                        <div class="col-md-6 col-sm-6 ">
                          <input id="tomtat" name="brief" class="date-picker form-control" required type="text">
                        </div>
                      </div>
                      <div class="item form-group">
                        <label class="col-form-label col-md-3 col-sm-3 label-align">Nội dung
                        </label>
                        <div class="col-md-6 col-sm-6 ">
                          <textarea class="ckeditor" required name="description" id="description"></textarea>
                        <script>  
                          CKEDITOR.replace( 'description', {
                            language:'vi',
                            filebrowserBrowseUrl:'../../gentelella/editor/ckfinder/ckfinder.html',
                            filebrowserUploadUrl:'../../gentelella/editor/ckfinder/core/connector/php/connector.php?command=QuickUpload&type=Files',
                            filebrowserImageBrowseUrl: '../../gentelella/editor/ckfinder/ckfinder.html?Type=Images',
                            filebrowserFlashBrowseUrl: '../../gentelella/editor/ckfinder/ckfinder.html?Type=Flash',
                            filebrowserImageUploadUrl: '../../gentelella/editor/ckfinder/core/connector/php/connector.php?command=QuickUpload&type=Images',
                            filebrowserFlashUploadUrl: '../../gentelella/editor/public/ckfinder/core/connector/php/connector.php?command=QuickUpload&type=Flash',
                           });
                        </script>


                        </div>
                      </div>
                      <div class="item form-group">
                        <label class="col-form-label col-md-3 col-sm-3 label-align">Hình đại diện
                        </label>
                        <div class="col-md-6 col-sm-6 ">
                          <input id="img" name="img" class="date-picker form-control" type="file">
                          <!-- <img id="avatar" class="thumbnail" width="300px" height="300px" src="" alt=""> -->
                        </div>
                      </div>
                      <div class="item form-group">
                        <label class="col-form-label col-md-3 col-sm-3 label-align">Nổi bật
                        </label>
                        <div class="col-md-6 col-sm-6 ">
                            <div class="form-group">
                              <select required name="highlight" class="form-control">
                                <option value="1">Accept</option>
                                <option value="0">UnAccept</option>
                              </select>
                            </div>
                        </div>
                      </div>
                      <div class="item form-group">
                        <label class="col-form-label col-md-3 col-sm-3 label-align">Loại tin tức
                        </label>
                        <div class="col-md-6 col-sm-6 ">
                            <div class="form-group">
                              <select required name="cate" class="form-control">
                                @foreach($catelist as $cate)
                                <option value="{{$cate->cate_id}}">{{$cate->cate_name}}</option>
                                @endforeach
                              </select>
                            </div>
                        </div>
                      </div>
                      <div class="ln_solid"></div>
                      <div class="item form-group">
                        <div class="col-md-6 col-sm-6 offset-md-3">
                          <button type="submit" name="submit" class="btn btn-success">Submit</button>
                          <a href="{{asset('admin/category')}}" class="btn btn-primary" type="button">Cancel</a>
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