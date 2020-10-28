@extends('layouts.user')
@section('content')
<div class="container-fluid grey py-4">
    <div class="container mb-5" style="max-width:90%;">
            <div class="flex-1 md:px-4">
                <h1 class="text-gray-600 mb-2 font-semibold">Transactions</h1>
                @if (count($trans)>0)
                    <table class="table">
                        <thead>
                          <tr>
                            <th scope="col">#</th>
                            <th scope="col">Membership Option</th>
                            <th scope="col">Expire Date</th>
                            <th scope="col">Notes</th>
                          </tr>
                        </thead>
                        <tbody>
                            @foreach ($trans as $item)
                                <tr>
                                    <th scope="row">{{ $loop->iteration }}. </th>
                                    @if ($item->jenis_membership == 1)
                                        <td>Silver</td>
                                    @elseif($item->jenis_membership == 2)
                                        <td>Gold</td>
                                    @else
                                        <td>Platinum</td>
                                    @endif
                                    @php
                                        $split=explode(" ",$item->waktu_expired_membership);
                                    @endphp
                                    <td>{{$split[0]}}</td>
                                    @if ($date_10 == "a")
                                        <td>This membership is about to expire</td>
                                    @elseif($item->waktu_expired_membership > $date)
                                        @if ($item->status_transaksi == 1)
                                            <td>This membership is currently waiting for confirmation</td>
                                        @elseif ($item->status_transaksi == 2)
                                            <td>This membership is currently active</td>
                                        @endif
                                    @else
                                        <td>This membership has expired</td>
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
