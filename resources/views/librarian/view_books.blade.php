@extends('layout')

@section('content')
           <div class="col-md-12 col-sm-12 col-xs-12">
                <div class="x_panel">

                  <div class="x_content">

                    <table id="datatable" class="table table-striped table-bordered">
                      <thead>
                        <tr>
                          <th>Name</th>
                          <th>Code Number</th>
                          <th>Author</th>
                          <th>Publisher</th>
                          <th>Quntity</th>
                          <th>Image</th>
                          <th>Edit</th>
                          <th>Delete</th>
                        </tr>
                      </thead>


                      <tbody>
                        @foreach($books as $book)
                        <tr>
                          <td>{{$book->name}}</td>
                          <td>{{$book->code_number}}</td>
                          <td>{{$book->auther}}</td>
                          <td>{{$book->pubisher}}</td>
                          <td>{{$book->quntity}}</td>
                          <td><img src="{{asset('user/images/'.$book->img)}}" style="width:100px;height:100px"></td>
                          <td> <a href="/book/{{$book->code_number}}/edit" class="btn btn-info btn-xs"><i class="fa fa-pencil"></i> Edit </a></td>
                          <td>
                          <form action="/book/{{$book->code_number}}" method="post">
                            <input type="hidden" name="_method" value="DELETE">
                            {{ csrf_field() }}
                            <button type="submit" class="btn btn-danger btn-xs"  onclick="return confirm('are you sure?')"><i class="fa fa-trash-o"></i> Delete </button>
                          </form>
                          </td>
                        </tr>
                        @endforeach
                      </tbody>
                    </table>
                  </div>
                </div>
              </div>
              <div class="modal fade bs-example-modal-lg" tabindex="-1" role="dialog" aria-hidden="true">
                <div class="modal-dialog modal-lg">
                  <div class="modal-content">

                    <div class="modal-header">
                      <button type="button" class="close" data-dismiss="modal"><span aria-hidden="true">×</span>
                      </button>
                      <h4 class="modal-title" id="myModalLabel">Are you sure to delete it ?</h4>
                    </div>

                    <div class="modal-footer">
                      <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
                      <button type="button" class="btn btn-primary">Save changes</button>
                    </div>

                  </div>
                </div>
              </div>
              <div class="modal fade bs-example-modal-lg" tabindex="-1" role="dialog" aria-hidden="true">
                <div class="modal-dialog modal-lg">
                  <div class="modal-content">

                    <div class="modal-header">
                      <button type="button" class="close" data-dismiss="modal"><span aria-hidden="true">×</span>
                      </button>
                      <h4 class="modal-title" id="myModalLabel">Are you sure to delete it ?</h4>
                    </div>

                    <div class="modal-footer">
                      <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
                      <button type="button" class="btn btn-primary">Save changes</button>
                    </div>

                  </div>
                </div>
              </div>

@endsection
