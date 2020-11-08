@extends('layouts.user')
@section('content')
<div class="container-fluid grey py-4">
    <div class="container mb-5" style="max-width:90%;">
            <div class="flex-1 md:px-4">
                <h1 class="text-gray-600 mb-2 font-semibold">Transactions</h1>
                @if (count($trans)>0)
                    <table class="table table-bordered table-hover mb-2 dt">
                        <thead class="thead-dark align-middle">
                          <tr>
                            <th class="align-middle text-center">#</th>
                            <th class="align-middle text-center">Membership Option</th>
                            <th class="align-middle text-center">Expire Date</th>
                            <th class="align-middle text-center">Notes</th>
                          </tr>
                        </thead>
                        <tbody class="bg-transparent">
                            @foreach ($trans as $item)
                                <tr>
                                    <th class="align-middle text-center">{{ $loop->iteration }}. </th>
                                    @if ($item->jenis_membership == 1)
                                        <td class="align-middle">Silver</td>
                                    @elseif($item->jenis_membership == 2)
                                        <td class="align-middle">Gold</td>
                                    @else
                                        <td class="align-middle">Platinum</td>
                                    @endif
                                    @php
                                        $split=explode(" ",$item->waktu_expired_membership);
                                        $cek="";
                                        if($split[0] <= $date_10){
                                            $cek = "a";
                                        }
                                    @endphp
                                    <td>{{$split[0]}}</td>
                                    @if($item->status_transaksi == 3)
                                        <td class="align-middle">This membership has expired</td>
                                    @elseif ($cek == "a")
                                        <td class="align-middle">This membership is about to expire</td>
                                    @elseif($item->waktu_expired_membership > $date)
                                        @if ($item->status_transaksi == 1)
                                            <td class="align-middle">This membership is currently waiting for confirmation</td>
                                        @elseif ($item->status_transaksi == 2)
                                            <td class="align-middle">This membership is currently active</td>
                                        @endif
                                    @endif
                                    </tr>
                            @endforeach
                        </tbody>
                    </table>
                @else
                    You don't have any transaction.
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

