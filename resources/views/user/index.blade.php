@extends('master')

@section('content')
    <div class="container-fluid">
        <div class="row">
            <div class="col-lg-12">
                <h1 class="page-header">Danh sách tài khoản</h1>
            </div>
            <!-- /.col-lg-12 -->
        </div>
        <div class="row">
            <div class="col-sm-12">
                <table class="table table-hover">
                    <thead>
                    <tr>
                        <th>
                            ID
                        </th>
                        <th>
                            Tên đăng nhập
                        </th>
                        <th>
                            Tên
                        </th>
                        <th>
                            Chỉnh sửa
                        </th>
                        <th>
                            Xóa
                        </th>
                    </tr>
                    </thead>
                    <tbody>
                    @foreach($data as $d)
                    <tr>
                        <td>
                            {{ $d->id }}
                        </td>
                        <td>
                            {{ $d->username }}
                        </td>
                        <td>
                            {{ $d->full_name }}
                        </td>
                        <td>
                            <a type="button" class="btn btn-primary" href="{{ route('user.edit', $d->id) }}">Chỉnh sửa</a>
                        </td>
                        <td>
                            <a type="button" class="btn btn-danger">Xóa</a>
                        </td>
                    </tr>
                    @endforeach
                    </tbody>
                </table>
            </div>
        </div>
        <!-- /.row -->
    </div>
@stop
@section('javascript_plugin')

@stop