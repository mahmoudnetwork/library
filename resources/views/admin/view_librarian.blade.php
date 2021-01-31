@extends('layout')

@section('content')
           <div class="col-md-12 col-sm-12 col-xs-12">
                <div class="x_panel">

                  <div class="x_content">

                    <table id="datatable" class="table table-striped table-bordered">
                      <thead>
                        <tr>
                          <th>Name</th>
                          <th>Email</th>
                          <th>Phone</th>
                          <th>Image</th>
                          <th>Edit</th>
                          <th>Delete</th>
                        </tr>
                      </thead>

                      <tbody>
                        @foreach($librarain as $lib)
                        <tr>
                          <td>{{$lib->name}}</td>
                          <td>{{$lib->email}}</td>
                          <td>{{$lib->phone}}</td>
                          <td><img src="{{asset('user/images/'.$lib->img)}}" style="width:100px;height:100px"></td>
                          <td> <a href="/librarain/{{$lib->id}}/edit" class="btn btn-info btn-xs"><i class="fa fa-pencil"></i> Edit </a></td>
                          <td>
                          <form action="/librarain/{{$lib->id}}" method="post">
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
@endsection
