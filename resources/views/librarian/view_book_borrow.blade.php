@extends('layout')

@section('content')

  <div class="col-md-12">
                              <div class="x_panel">
                                <div class="x_title">
                                  <h2>Media Gallery <small> gallery design </small></h2>
                                  <ul class="nav navbar-right panel_toolbox">
                                    <li><a class="collapse-link"><i class="fa fa-chevron-up"></i></a>
                                    </li>
                                    <li class="dropdown">
                                      <a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-expanded="false"><i class="fa fa-wrench"></i></a>
                                      <ul class="dropdown-menu" role="menu">
                                        <li><a href="#">Settings 1</a>
                                        </li>
                                        <li><a href="#">Settings 2</a>
                                        </li>
                                      </ul>
                                    </li>
                                    <li><a class="close-link"><i class="fa fa-close"></i></a>
                                    </li>
                                  </ul>
                                  <div class="clearfix"></div>
                                </div>
                                <div class="x_content">

                                  <div class="row">

                                    <p>Media gallery design emelents</p>
                                    @foreach($books as $book)
                                    <div class="col-md-55">
                                      <div class="thumbnail">
                                        <div class="image view view-first">
                                          <a href="/borrowbook/{{$book->code_number}}">
                                          <img style="width: 100%; display: block;" src="{{asset('user/images/'.$book->img)}}" alt="image">
                                          <div class="mask">
                                            <p>{{$book->name}}</p>
                                            <div class="tools tools-bottom">
                                              <a href="#"><i class="fa fa-link"></i></a>
                                              <a href="#"><i class="fa fa-pencil"></i></a>
                                              <a href="#"><i class="fa fa-times"></i></a>
                                            </div>
                                          </div>
                                          </a>
                                        </div>
                                        <div class="caption">
                                          <p>Assign Book To Student</p>
                                        </div>
                                      </div>
                                    </div>
                                    @endforeach
                                  </div>
                                </div>
                              </div>
                            </div>
@endsection
