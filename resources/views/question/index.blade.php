@extends('master')

@section('content')
    <div class="container-fluid">
        <div class="row">
            <div class="col-lg-12">
                <h1 class="page-header">Danh câu hỏi</h1>
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
                    <tr>
                        <td>
                            1
                        </td>
                        <td>
                            Admin
                        </td>
                        <td>
                            Hanh Thông
                        </td>
                        <td>
                            <button type="button" class="btn btn-primary">Chỉnh sửa</button>
                        </td>
                        <td>
                            <button type="button" class="btn btn-danger">Xóa</button>
                        </td>
                    </tr>
                    </tbody>
                </table>
            </div>
        </div>
        <!-- /.row -->
    </div>
@stop
@section('javascript_plugin')

@stop