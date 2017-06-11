@extends('app')
@section('content')
    <h1>增加Account</h1>
    {!! Form::open(array('route' => 'add', 'class' => 'form')) !!}

    <div class="form-group">
        {!! Form::label('section','地区:') !!}
        {!! Form::text('section',null,['class'=>'form-control','placeholder'=>'32区']) !!}
    </div>
    <div class="form-group">
        {!! Form::label('account','账号:') !!}
        {!! Form::text('account',null,['class'=>'form-control','placeholder'=>'haha']) !!}
    </div>
    <div class="form-group">
        {!! Form::label('pwd','密码:') !!}
        {!! Form::text('pwd',null,['class'=>'form-control','placeholder'=>'fdsfds']) !!}
    </div>
    <div class="form-group">
        {!! Form::label('name','名字:') !!}
        {!! Form::text('name',null,['class'=>'form-control','placeholder'=>'屠龙刀']) !!}
    </div>
    <div class="form-group">
        {!! Form::label('type','类型:') !!}
        {!! Form::text('type',null,['class'=>'form-control','placeholder'=>'1']) !!}
    </div>
    <div class="form-group">
        {!! Form::label('level','级别:') !!}
        {!! Form::text('level',null,['class'=>'form-control','placeholder'=>'18']) !!}
    </div>
    <div class="form-group">
        {!! Form::label('priority','优先级:') !!}
        {!! Form::text('priority',null,['class'=>'form-control','placeholder'=>'0']) !!}
    </div>
    <div class="form-group">
        {!! Form::label('status','状态:') !!}
        {!! Form::text('status',null,['class'=>'form-control','placeholder'=>'1']) !!}
    </div>
    <div class="form-group">
        {!! Form::label('device_index','设备号:') !!}
        {!! Form::text('device_index',null,['class'=>'form-control','placeholder'=>'10']) !!}
    </div>
    <div class="form-group">
        {!! Form::label('time','时间:') !!}
        {!! Form::text('time',Carbon\Carbon::now()->format('Y-m-d H:i:s'),['class'=>'form-control']) !!}
    </div>
    <div class="form-group">
        {!! Form::submit('增加',['class'=>'btn btn-success form-control']) !!}
    </div>
    {!! Form::close() !!}
    @if($errors->any())
        <ul class="alert alert-danger">
            @foreach($errors->all() as $error)
                <li>{{ $error }}</li>
            @endforeach
        </ul>
    @endif

@endsection
