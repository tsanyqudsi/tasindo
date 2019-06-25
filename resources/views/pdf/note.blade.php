@extends('layouts.pdf')

@section('style')
    <style>
        .pdf .note-data::after{
        content: ':';
        margin-left: 4px;
        margin-right: 4px;
        }
    
        .pdf .company{
            font-size: .8rem;
        }
    </style>
@stop

@section('content')
    {{-- @foreach ($orders as $order) --}}
        <div class='container-fluid pdf'>
            <table class='table table-borderless'>
                <thead class='table-active'>
                    <th colspan="4">
                        <h1 class='h4 text-uppercase' id='noteTitle'>Nota Pengiriman <span class='text-muted'>/ Delivery Note</span></h1>
                    </th>
                    <th style='width:300px' >
                        <div class ='noteTitleDetails pl-3' style='border-left:1px solid #9e9e9e'>
                            <small class='note-data'>Dibuat pada tanggal</small><small><b>{{date('d-m-Y')}}</b></small>
                            <br/>
                            <small class='note-data'>Nomor Resi Pengiriman</small><small>789321788</small>
                        </div>
                    </th>
                </thead>

                <tbody>
                    <tr >
                        <td colspan="3">
                            <span class='h6 font-weight-bold note-data'>Pengirim</span>
                            <div>
                            {{$sender_data}}
                            </div>
                        </td>
                        <td colspan="2">
                            <span class='h6 font-weight-bold note-data'>Penerima</span>
                            <div>
                                {{$order->receiver_data}}
                            </div>
                        </td>
                    </tr>
                    <tr>
                        <td colspan="3">
                            <span class='h6 font-weight-bold note-data'>Kurir</span>
                            <div class='h3'>
                                {{$courier}}
                            </div>
                        </td>
                        <td colspan="2">
                            <span class='h6 font-weight-bold note-data'>Deskripsi Produk</span>
                            <div>
                                {{$order->product_data}}
                            </div>
                        </td>
                    </tr>
                    <tr>
                        <td colspan="5"></td>
                    </tr>
                    <tr style='border-top:2px solid #9e9e9e'>
                        <td colspan="2">
                            <span class="h6 font-weight-bold note-data">Nomor Pesanan</span>
                            <div>
                                {{$order->order_badge}}
                            </div>
                        </td>
                        <td>
                            <span class="company">Tasindo Batam</span>
                        </td>
                        <td colspan="2">
                            <span class="h6 font-weight-bold note-data">Keterangan</span>
                            <div style="width:550px">
                                {{$order->description}}
                            </div>
                        </td>
                    </tr>
                </tbody>
            </table>
        </div>
    {{-- @endforeach --}}
@endsection