@extends('app')
@section('content')
    <h1>修改account数据:{{ $data['id'] }}</h1>
    {!! Form::model($data,['url'=>'/update']) !!}

    {!! Form::hidden('id',$data['id']) !!}
    <div class="form-group">
        {!! Form::label('section','地区:') !!}
        {!! Form::text('section',$data['section'],['class'=>'form-control']) !!}
    </div>
    <div class="form-group">
        {!! Form::label('account','账号:') !!}
        {!! Form::text('account',$data['account'],['class'=>'form-control']) !!}
    </div>
    <div class="form-group">
        {!! Form::label('pwd','密码:') !!}
        {!! Form::text('pwd',$data['pwd'],['class'=>'form-control']) !!}
    </div>
    <div class="form-group">
        {!! Form::label('name','名字:') !!}
        {!! Form::text('name',$data['name'],['class'=>'form-control']) !!}
    </div>
    <div class="form-group">
        {!! Form::label('type','类型:') !!}
        {!! Form::text('type',$data['type'],['class'=>'form-control']) !!}
    </div>
    <div class="form-group">
        {!! Form::label('level','级别:') !!}
        {!! Form::text('level',$data['level'],['class'=>'form-control']) !!}
    </div>
    <div class="form-group">
        {!! Form::label('priority','优先级:') !!}
        {!! Form::text('priority',$data['priority'],['class'=>'form-control']) !!}
    </div>
    <div class="form-group">
        {!! Form::label('status','状态:') !!}
        {!! Form::text('status',$data['status'],['class'=>'form-control']) !!}
    </div>
    <div class="form-group">
        {!! Form::label('deviceIndex','设备号:') !!}
        {!! Form::text('deviceIndex',$data['deviceIndex'],['class'=>'form-control']) !!}
    </div>
    <div class="form-group">
        {!! Form::label('time','时间:') !!}
        {!! Form::text('time',$data['time'],['class'=>'form-control']) !!}
    </div>
    <div class="form-group">
        {!! Form::submit('修改',['class'=>'btn btn-success form-control']) !!}
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
