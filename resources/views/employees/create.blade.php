@extends('base')

@section('content')
   
        <div class="container-fluid">
            <div class="row mb-2">
                <div class="col-md-5 offset-md-2">
                    <h1>Create New Employee</h1>
                    {!! Form::open(['url' => '/employees', 'method' => 'post']) !!}

                    <div class="form-group">
                        {{Form::label('lname', 'Last Name')}}
                        {{Form::text('lname', null, ['class' =>'form-control'])}}
                    </div>

                    <div class="form-group">
                        {{Form::label('fname', 'First name')}}
                        {{Form::text('fname', null, ['class' =>'form-control'])}}
                    </div>

                    <div class="form-group">
                        {{Form::label('position', 'Position')}}
                        {{Form::text('position', null, ['class' =>'form-control'])}}
                    </div>

                    <div class="form-group">
                        {{Form::label('salary', 'Salary')}}
                        {{Form::number('salary', null, ['class' =>'form-control'])}}
                    </div>
                    <div class="form-group">
                        <button class="btn btn-primary float-right">
                            Create Employee
                        </button>
                    </div>
                    {!! Form::close() !!}

                </div>
                <div class="mt-5">  
                @include('errors')
        </div>
</div>
        </div>  
@endsection