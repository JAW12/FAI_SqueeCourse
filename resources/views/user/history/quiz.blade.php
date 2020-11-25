@extends('layouts.user')
@section('title')
    History Quiz 
@endsection
@section('content')
<div class="my-2">
            @include('layouts.alert')
</div>
<div class="container-fluid grey py-4">
    <div class="container mb-5" style="max-width:90%;">
            <div class="flex-1 md:px-4">
                <h1 class="text-gray-600 mb-2 font-semibold">History Quiz</h1>
                @if (count($hasil)>0)
                    <table class="table table-bordered table-hover mb-2 dt">
                        <thead class="thead-dark align-middle">
                          <tr>
                            <th class="align-middle text-center">Nama</th>
                            <th class="align-middle text-center">Nilai</th>
                            <th class="align-middle text-center">Join Quiz</th>
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
                    You don't have any History QUiz.
                    <a href="/membership" class="underline">Go make one</a>
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