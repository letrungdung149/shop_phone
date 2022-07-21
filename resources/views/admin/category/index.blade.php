@extends('layouts.app')
@section('content')
    <div class="card">
        <div class="card-header">
            <h5 class="card-title">Danh sách chuyên mục</h5>
        </div>

        <div class="card-body">
            <table id="categories-table" class="table" style="width:100%">
                <thead>
                <tr>
                    <th></th>
                    <th>Tên</th>
                    <th>Ngày tạo</th>
                    <th></th>
                </tr>
                </thead>
                <tbody></tbody>
            </table>

        </div>

    </div>
@stop
@push('js')
    <script>
        console.log(1);
    </script>
@endpush
