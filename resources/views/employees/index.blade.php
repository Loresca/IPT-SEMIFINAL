@extends('base')
@section('content')

@if($info = Session::get('info'))
<div class="card">
    <div class="card-body bg-success text-dark">
    {{$info}}
    </div>
</div>
@endif
<div class="container">
<div class="float-right">
    <a href="{{url('/employees/create')}}" class="btn btn-primary"> Add New Employee</a>
</div>
        <div class="align-self-center px-9 mt-5">
            <h1 class="text-white">Employees</h1>
            <table class="table table-bordered table table-striped table-light table-sm">
                <thead class="bg-info">
                    <tr>
                        <th>Employee Id</th>
                        <th>Last Name</th>
                        <th>First Name</th>
                        <th>Position</th>
                        <th>Salary</th>
                    </tr>
                </thead>
                <tbody class="table-striped">
                    @foreach($employees as $emp)
                    <tr class="fs-5">
                        <td>{{$emp->id}}</td>
                        <td>{{$emp->lname}}</td>
                        <td>{{$emp->fname}}</td>
                        <td>{{$emp->position}}</td>
                        <td>{{$emp->salary}}</td>
                    </tr>
                    @endforeach
                </tbody>
            </table>
        </div>
</div>
@endsection