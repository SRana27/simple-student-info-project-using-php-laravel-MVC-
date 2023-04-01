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
                            <h3 class="text-center"> All Department Info</h3>
                        </div>
                        <div class="card-body">
                            <table class="table table-bordered table-hover">
                                <thead class="text-center">
                                <tr>
                                    <th>sl</th>
                                    <th>Department Code</th>
                                    <th> Department Name</th>

                                </tr>
                                </thead>

                                    <tbody>
                                    @php $i=1 @endphp
                                    @foreach($department_data as $department)
                                    <tr>
                                        <td>{{$i++}}</td>
                                        <td>{{$department->dept_code}}</td>
                                        <td>{{$department->dept_name}}</td>
                                    </tr>

                                    </tbody>
                                @endforeach
                            </table>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
@endsection
