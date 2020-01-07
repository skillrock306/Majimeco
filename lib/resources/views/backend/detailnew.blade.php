@extends('backend.master')
@section('title','Chi tiết tin tức')
@section('main')
<div class="right_col" role="main">
	<div class="row">
              <div class="col-md-12">
                <div class="x_panel">
                  <div class="x_title">
                    <h1>{{$item->new_title}}</h1>
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
                    <div class="row">
                      <!-- CONTENT MAIL -->
                      <div class="col-sm-12 mail_view">
                        <div class="inbox-body">
                          <div class="mail_heading row">
                            
                            <div class="col-md-12">
                              <h3>{{$item->new_brief}}</h3>
                            </div>
                          </div>
                          <div class="sender-info">
                            <div class="row">
                              <div class="col-md-12">
                                <strong>Jon Doe</strong>
                                <span>(jon.doe@gmail.com)</span> to
                                <strong>me</strong>
                                <a class="sender-dropdown"><i class="fa fa-chevron-down"></i></a>
                              </div>
                            </div>
                          </div>
                          <div class="view-mail">
                            <p>{!!$item->new_description!!}</p>
                          </div>
                          <div class="col-md-8">
                            </div>
                            <div class="col-md-4 text-right">
                              <p class="date"> {{$item->created_at}}</p>
                            </div>
                          <div class="btn-group">
                            <a href="{{asset('admin/new')}}" class="btn btn-sm btn-primary" type="button"><i class="fa fa-reply"></i> Reply</a>
                          </div>
                        </div>

                      </div>
                      <!-- /CONTENT MAIL -->
                    </div>
                  </div>
                </div>
              </div>
            </div>
</div>
@stop