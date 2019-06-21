@extends('layouts.app')

@section('content')
<div class='container pdf'>
    <div class='row justify-content-center'>
        <div class='container'>
            <div class='card'>
                <div class='card-header font-weight-bold d-flex justify-content-between align-items-center'>
                    <h1 class='h4 mb-0 text-uppercase' id='noteTitle'>Nota Pengiriman <span class='text-muted'>/ Delivery Note</span></h1>
                    <div class='border-left noteTitleDetails pl-2'>
                        <small class='note-data'>Dibuat pada tanggal</small><small><b>{{date('d-m-Y')}}</b></small>
                        <br/>
                        <small class='note-data'>Nomor Resi Pengiriman</small>
                    </div>
                </div>

                <div class='card-body'>
                    <div class='row'>
                        <div class='col'>
                            <h2 class='h6 font-weight-bold note-data'>Pengirim</h2>
                        </div>
                        <div class='col'>
                            <h2 class='h6 font-weight-bold note-data'>Penerima</h2>
                        </div>
                    </div>
                    <div class="row">
                        <div class='col'>
                            <h2 class='h6 font-weight-bold note-data'>Kurir</h2>
                        </div>
                        <div class='col'>
                            <h2 class='h6 font-weight-bold note-data'>Deskripsi Produk</h2>
                        </div>
                    </div>
                </div>
                <div class="card-footer d-flex justify-content-between align-items-center">
                    <div>
                        <h2 class="h6 font-weight-bold note-data">Nomor Seri Transaksi</h2>
                    </div>
                    <div>
                        <span class="company">Tasindo Batam</span>
                    </div>
                    <div>
                        <h2 class="h6 font-weight-bold note-data">Keterangan</h2>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
