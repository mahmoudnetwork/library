@extends('layout')

@section('content')
           <div class="col-md-12 col-sm-12 col-xs-12">
                <div class="x_panel">

                  <div class="x_content">
                  
                    <table id="datatable" class="table table-striped table-bordered">
                      <thead>
                        <tr>
                          <th>Student Name</th>
                          <th>Student ID</th>
                          <th>Book Name</th>
                          <th>Return Borrow Book</th>
                        </tr>
                      </thead>


                      <tbody>
                        @foreach($borrowbook as $borrow)
                        <tr>
                          <td>{{$borrow->student_name}}</td>
                          <td>{{$borrow->student_id}}</td>
                          <td>
                            {{$borrow->book->name}}
                          </td>

                          <td>
                            <form action="/borrowbook/{{$borrow->book_code}}/{{$borrow->student_id}}" method="post">
                              {{ csrf_field() }}
                              <button type="submit" class="btn btn-danger btn-xs" onclick="return confirm('this book will br return are you sure?')"><i class="fa fa-trash-o"></i> return book </button>
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
