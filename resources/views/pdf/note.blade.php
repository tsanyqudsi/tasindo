@extends('layouts.pdf')

@section('style')
    <style>       
        .pdf .note-data::after{
        content: ':';
        margin: 1px;
        position: static;
        overflow: auto;
        }
    
        .pdf .company{
            font-size: .6rem;
        }

        .table-pdf{
            height: fixed;

        }

        .container-print{
            content: ':';
            margin: 1px;
            position: static;
            overflow: auto;
        }

        small { 
            font-size: .6rem;
        }
    </style>
@stop

@section('content')
    {{-- @foreach ($orders as $order) --}}
        <div class='container-print' cellpadding="1">
            <table class='table-pdf' >
                <thead class='table-active'>
                    <th colspan="4">
                        <h1 class='h4 text-uppercase' id='noteTitle'>Nota Pengiriman <span class='text-muted'>/ Delivery Note</span></h1>
                    </th>
                    <th style='width:400px' >
                        <div class ='noteTitleDetails pl-3' style='border-left:1px solid #9e9e9e'>
                            <small class='note-data'>Dibuat pada tanggal</small><small><b>{{date('d-m-Y')}}</b></small>
                            <br/>
                        <small class='note-data'>Nomor Resi Pengiriman</small><small>{{$order->admin_receipt_number}}</small>
                        </div>
                    </th>
                </thead>

                <tbody>
                    <tr>
                        <td colspan="3">
                            <span class='h6 font-weight-bold note-data'>Pengirim</span>
                            <div>
                                <small>@if($order->dropship_data === NULL) {{$order->sender_data}} @else {{$order->dropship_data}} @endif</small>
                            </div>
                            <div>
                                <small><b>No. pesanan:</b>{{$order->order_badge}}</small>
                            </div>
                        </td>
                        <td colspan="6">
                            <span class='h6 font-weight-bold note-data'>Penerima</span>
                            <div>
                                <small>{{$order->receiver_data}}</small>
                            </div>
                        </td>
                    </tr>
                    <tr>
                        <td colspan="3">
                            <span class='h6 font-weight-bold note-data'>Kurir: {{$courier}}</span>
                        </td>
                        <td colspan="2">
                            <span class='h6 font-weight-bold note-data'>Deskripsi Produk</span>
                            <div>
                                {{$order->product_data}}
                            </div>
                            <div>
                                <small>{{$order->description}}</small>
                            </div>
                        </td>
                    </tr>
                    <tr style='border-top:1px solid #9e9e9e'>
                        <td colspan="2">
                            <span class="h6 font-weight-bold note-data">Nomor Pesanan</span>
                            <div>
                                {{$order->order_badge}}
                            </div>
                        </td>
                        <td>
                            <span class="company">{{$sender_data}}</span>
                        </td>
                        <td colspan="1">
                            <span class='h6 font-weight-bold note-data'>Deskripsi Produk</span>
                            <div>
                                {{$order->product_data}}
                            </div>
                        </td>
                        <td colspan="1">
                            <small>Date:{{ date('Y-m-d H:i:s') }}</small>
                        </td>
                    </tr>
                </tbody>
            </table>
        </div>
    {{-- @endforeach --}}
@endsection