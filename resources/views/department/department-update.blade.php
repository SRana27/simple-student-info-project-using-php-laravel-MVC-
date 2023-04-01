@extends('master')
@section('title')
    Department info
@endsection
@section('content')
    <section class="pt-5 min-vh-100">
        <div class="container">
            <div class="row ">
                <div class="col-md-8 m-auto">
                    <div class="card">
                        <div class="card-header">
                            <h3 class="text-center"> Department Info</h3>
                        </div>
                        <div class="card-body table-responsive">
                            <table class="table table-bordered table-hover">
                                <thead class="text-center">
                                   <tr>
                                      <th>sl</th>
                                      <th>Department Code</th>
                                      <th> Department Name</th>
                                      <th>Action</th>
                                  </tr>
                                </thead>

                                <tbody>
                                   @php $i=1 @endphp
                                   @foreach($department_data as $department)

                                      <tr>
                                            <td>{{$i++}}</td>
                                           <td>{{$department->dept_code}}</td>
                                            <td>{{$department->dept_name}}</td>
                                          <td class="d-flex">
                                               <a href="{{route('department.edit.from',['dept_id'=>$department->id])}}" class="btn btn-primary mx-2">Edit</a>
                                              <form action="{{route('department.delete')}}" method="POST">
                                                @csrf
                                                 <input type="hidden" name="department_id" value="{{$department->id}}">

                                                 <button class="btn btn-danger mx-2"  onclick="return confirm('are you sure for delete')">Delete</button>
                                              </form>
                                          </td>
                                       </tr>
                                   @endforeach
                                </tbody>
                            </table>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
@endsection

