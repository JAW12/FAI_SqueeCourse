@extends('layouts.admin')
@section('title')
    List Blog
@endsection
@section('content')
@include('layouts.alert')
    
     <div class="container ml-5 py-5" style="width: 80%">
         <div class="container-fluid text-right">
            <a class="btn btn-dark" href="/admin/blog/add" >
                Add Blog
            </a>
        </div>
        <h1 class="mb-3 mt-4 text-center">List Blog</h1>
        <div class="table-responsive">
            <table class="table table-sm table-bordered table-hover mb-2 dt">
                <thead class="thead-dark align-middle">
                    <tr>
                        <th class="align-middle text-center">Category</th>
                        <th class="align-middle text-center">Title</th>
                        <th class="align-middle text-center">Action</th>
                    </tr>
                </thead>
                <tbody class="bg-transparent">
                    @foreach ($blogactive as $rowblog)
                        <tr>
                            @foreach($category as $rowcategory)
                                @if($rowcategory->id==$rowblog->row_id_kategori)
                                    <td class="align-middle">{{$rowcategory->nama}}</td>
                                @endif
                            @endforeach
                           
                                <td class="align-middle">{{$rowblog->judul}}</td>
                            
                                <td class="align-middle">
                                 <a href="{{URL::to('admin/blog')}}/{{$rowblog->slug}}/{{'edit'}}">
                                <button type="button" class="btn btn-info" style="width: 75px;">Edit</button>
                                </a>
                                </td>
                        </tr>
                    @endforeach
                </tbody>
            </table>
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