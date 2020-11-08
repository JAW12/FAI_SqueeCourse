@extends('layouts.admin')
@section('content')
    <div class="container">
        <br>
        <div class="h3">List of Transactions</div>
        @if (isset($cek) && count($data) > 0)
            <a href="all/accept" class="btn btn-success mb-3">Accept all</a>
            <a href="all/reject" class="btn btn-danger mb-3">Reject all</a>
        @endif
            @if (count($data) > 0)
                <table class="table table-bordered table-light table-hover mb-2 dt">
                    <thead class="thead-dark align-middle">
                    <tr>
                        <th class="align-middle text-center">#</th>
                        <th class="align-middle text-center">Name</th>
                        <th class="align-middle text-center">From</th>
                        <th class="align-middle text-center">Amount</th>
                        <th class="align-middle text-center">Status</th>
                    </tr>
                    </thead>
                    <tbody>
                        @if (isset($cek))
                            @foreach ($data as $item)
                                <tr>
                                    <th class="align-middle text-center" scope="row">{{ $loop->iteration }}</th>
                                    <td class="align-middle">{{ $item->user->nama }}</td>
                                    <td class="align-middle">{{ $item->bank_asal."(".$item->nomor_rekening.")" }}</td>
                                    <td class="align-middle">{{ $item->total_pembayaran }}</td>
                                    <td class="align-middle"><a href="{{$item->id}}/accept" class="btn btn-success btn-block">Accept</a><a href="{{$item->id}}/reject" class="btn btn-danger btn-block" style="float: right;">Reject</a></td>
                                </tr>
                            @endforeach
                        @else
                            @foreach ($data as $item)
                                <tr>
                                    <th class="align-middle text-center" scope="row">{{ $loop->iteration }}</th>
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
                                </tr>
                            @endforeach
                        @endif
                    </tbody>
                </table>
            @else
                <div class="h3 text-center mr-5 mt-5">No Transaction Data Found</div>
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
