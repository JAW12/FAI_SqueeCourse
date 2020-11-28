@extends('layouts.admin')
@section('title')
    List Quiz
@endsection
@section('content')
    <div class="container">
        <div class="my-2">
            @include('layouts.alert')
        </div>
        <div class="container-fluid text-right">
            <a class="btn btn-dark" href="/admin/quiz/add" >
                Add Quiz
            </a>
        </div>
            @if (count($data) > 0)
                <table class="table table-bordered table-light table-hover mb-2 dt">
                    <thead class="thead-dark align-middle">
                    <tr>
                        <th class="align-middle text-center">Id</th>
                        <th class="align-middle text-center">Name</th>
                        <th class="align-middle text-center">Created_at</th>
                        <th class="align-middle text-center">Action</th>
                    </tr>
                    </thead>
                    <tbody>
                        @foreach ($data as $rowquiz)
                            <tr>
                                <th class="align-middle text-center" scope="row">{{$rowquiz->id}}</th>
                                <td class="align-middle">{{$rowquiz->nama}}</td>
                                <td class="align-middle">{{$rowquiz->created_at}}</td>
                                <td class="align-middle">
                                <a href="{{URL::to('admin/quiz')}}/{{$rowquiz->id}}/{{'edit'}}"> <button type="button" class="btn btn-info" style="width: 75px;">Update</button></a>
                                <a href="{{URL::to('admin/quiz')}}/{{$rowquiz->id}}"> <button type="button" class="btn btn-info" style="width: 75px;">Detail</button></a>
                                </td>
                            </tr>
                        @endforeach
                    </tbody>
                </table>
            @else
                <div class="h3 text-center mr-5 mt-5">No Quiz Data Found</div>
            @endif
    </div>
@endsection
@section('script')
    <script>
        $(document).ready(function(){
            $('.dt').DataTable();
        });
    </script>
@endsection