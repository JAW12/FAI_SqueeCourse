@extends('layouts.user')
@section('title')
    History Quiz 
@endsection
@section('content')
@include('layouts.alert')
<div class="container-fluid py-4">
    <div class="container mb-5" style="max-width:90%;">
            <div class="flex-1 md:px-4">
                <h1 class="text-gray-600 mb-2 font-semibold">History Quiz</h1>
                @if (count($hasil)>0)
                    <table class="table table-bordered table-hover mb-2 dt">
                        <thead class="thead-dark align-middle">
                          <tr>
                            <th class="align-middle text-center">Name</th>
                            <th class="align-middle text-center">Score</th>
                            <th class="align-middle text-center">Quiz Submitted At</th>
                          </tr>
                        </thead>
                        <tbody class="bg-transparent">
                            @foreach ($hasil as $rowhasil)
                                <tr>
                                @foreach($quiz as $rowquiz)
                                    @if($rowhasil->row_id_kuis==$rowquiz->id)
                                        <td class="align-middle">{{$rowquiz->nama}}</td>
                                    @endif
                                @endforeach
                                <td class="align-middle">{{$rowhasil->nilai}}</td>
                                <td class="align-middle">{{$rowhasil->created_at}}</td>
                                    
                            @endforeach
                        </tbody>
                    </table>
                @else
                    You don't have any History Quiz.
                @endif
            </div>
    </div>
</div>
@endsection

@section('script')
    <script>
        $(document).ready(function(){
            $('.dt').DataTable();
        });
    </script>
@endsection