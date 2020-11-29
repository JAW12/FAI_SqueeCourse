@extends('layouts.admin')
@section('title')
    @if (isset($cek))
        Pending Transactions
    @else
        All Transactions
    @endif
@endsection
@section('content')
    <div class="container py-5">
        <br>
        @if (isset($cek))
            <div class="h1 text-center">List of Pending Transactions</div>
        @else
            <div class="h1 text-center">List of Transactions</div>
        @endif
        @if (isset($cek) && count($data) > 0)
            <a href="all/accept" class="btn btn-success mb-3">Accept all</a>
            <a href="all/reject" class="btn btn-danger mb-3">Reject all</a>
        @endif
            @if (count($data) > 0)
            <div class="table-responsive">
                <table class="table table-bordered table-light table-hover mb-2 dt">
                    <thead class="thead-dark align-middle">
                    @if (isset($cek))
                        <tr>
                            <th class="align-middle text-center py-2" name="num">#</th>
                            <th class="align-middle text-center" name="name">Name</th>
                            <th class="align-middle text-center" name="from">From</th>
                            <th class="align-middle text-center" name="amount">Amount</th>
                            <th class="align-middle text-center" name="statusall">Status</th>
                        </tr>
                    @else
                        <tr>
                            <th class="align-middle text-center py-2" name="num">#</th>
                            <th class="align-middle text-center" name="name">Name</th>
                            <th class="align-middle text-center" name="from">From</th>
                            <th class="align-middle text-center" name="amount">Amount</th>
                            <th class="align-middle text-center" name="status">Status</th>
                            <th class="align-middle text-center" name="detail">See Detail</th>
                        </tr>
                    @endif
                    </thead>
                    <tbody>
                        @if (isset($cek))
                            @foreach ($data as $item)
                                <tr>
                                    <th class="align-middle text-center" scope="row">{{ $loop->iteration }} &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</th>
                                    <td class="align-middle">{{ $item->user->nama }}</td>
                                    <td class="align-middle">{{ $item->bank_asal."(".$item->nomor_rekening.")" }}</td>
                                    <td class="align-middle">{{ $item->total_pembayaran }}</td>
                                    <td class="align-middle"><a href="{{$item->id}}/accept" class="btn btn-success btn-block">Accept</a><a href="{{$item->id}}/reject" class="btn btn-danger btn-block" style="float: right;">Reject</a></td>
                                </tr>
                            @endforeach
                        @else
                            @foreach ($data as $item)
                                <tr>
                                    <th class="align-middle text-center" scope="row">{{ $loop->iteration }} &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</th>
                                    <td class="align-middle">{{ $item->user->nama }}</td>
                                    <td class="align-middle">{{ $item->bank_asal."(".$item->nomor_rekening.")" }}</td>
                                    <td class="align-middle">{{ $item->total_pembayaran }}</td>
                                    @if ($item->status_transaksi == 1)
                                        <td class="align-middle">Pending</td>
                                    @elseif($item->status_transaksi == 2)
                                        <td class="align-middle">Accepted</td>
                                    @else
                                        <td class="align-middle">Rejected</td>
                                    @endif
                                    <td class="align-middle"><a href="{{$item->id}}/detail" class="btn btn-info btn-block">Detail</a>
                                </tr>
                            @endforeach
                        @endif
                    </tbody>
                </table>
            </div>
            @else
                <div class="h3 text-center mr-5 mt-5">No Transaction Data Found</div>
            @endif
    </div>
@endsection
@section('script')
    <script>
        $(document).ready(function(){
            var table = $('.dt').DataTable({
                initComplete: function () {
                    this.api().columns().every( function () {
                        var column = this;
                        var headercol = this.header();
                        var name = $(headercol).attr("name");
                        if(name == "detail"){
                            $(headercol).html("See Detail");
                        }
                        else if(name == "statusall"){
                            $(headercol).html("Status");
                        }
                        else{
                            var select = $('<select class="form-control"><option value="">All ' + name + '</option></select>')
                            // kalo yang awal di append ke column.footer()
                                .appendTo( $(column.header()).empty() )
                                .on( 'change', function () {
                                    var val = $.fn.dataTable.util.escapeRegex(
                                        $(this).val()
                                    );

                                    column
                                        .search( val ? '^'+val+'$' : '', true, false )
                                        .draw();
                                } );

                                column.data().unique().sort().each( function ( d, j ) {
                                    select.append( '<option value="'+d+'">'+d+'</option>' )
                                }
                            );
                        }
                    } );
                }
            });
        });
    </script>
@endsection
