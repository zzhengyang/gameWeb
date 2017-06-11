@extends('app')
@section('content')
    <div class="container">
        <div class="row">
            <div class="col-md-10">


                <h3 align="center">放开那三国1</h3>
                <a href="{{ url('/edit') }}"><button class="btn btn-success">添加</button></a>
                <table class="table table-bordered table-striped table-responsive">
                    <tr>
                        <td>区</td>
                        <td>账号</td>
                        <td>装备名</td>
                        <td>类型</td>
                        <td>级别</td>
                        <td>优先级</td>
                        <td>状态</td>
                        <td>时间</td>
                        <td>密码</td>
                        <td>设备号</td>
                        <td>操作</td>
                    </tr>
                    @foreach($datas as $data)

                        <tr>

                            @if ($data['name'] == '')
                                <td>{{ $data['section']  }}</td>
                                <td>{{ $data['account'] }}</td>
                                <td></td>
                                <td></td>
                                <td></td>
                                <td></td>
                                <td></td>
                                <td></td>
                                <td>{{ $data['pwd']  }}</td>
                                <td></td>
                                <td>

                                    <a href="{{ url('/edit',[$data['id']]) }}"><button class="btn btn-success">修改</button></a>
                                </td>
                            @else
                                <td>{{ $data['section']  }}</td>
                                <td>{{ $data['account'] }}</td>
                                <td>{{ $data['name'] }}</td>
                                <td>{{ $data['type']  }}</td>
                                <td>{{ $data['level'] }}</td>
                                <td>{{ $data['priority']  }}</td>
                                <td>{{ $data['status']  }}</td>
                                <td>{{ $data['time']  }}</td>
                                <td>{{ $data['pwd']  }}</td>
                                <td>{{ $data['deviceIndex']  }}</td>


                            <td>

                                <a href="{{ url('/edit',[$data['id']]) }}"><button class="btn btn-success">修改</button></a>
                            </td>
                                @endif
                        </tr>
                    @endforeach
                </table>
            </div>
        </div>
    </div>
@endsection