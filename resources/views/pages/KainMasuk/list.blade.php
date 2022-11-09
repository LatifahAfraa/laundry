@extends('layouts.base')
@section('content')

<main class="col-md-9 ms-sm-auto col-lg-10 px-md-12 mt-3">
    <div class="countainer">
       <a href="{{ route('KainMasuk.create') }}">
        <span class="fa fa-plus-circle" aria-hidden="true" >Tambahkan  Pelanggan</span>
        </a>
            <table class="table table-bordered border-black table-striped text-center">
                <thead class="table-light">
                    <th>No</th>
                    <th>Nama Pelanggan</th>
                    <th>Jenis Layanan</th>
                    <th>Berat</th>
                    <th>Harga</th>
                    <th>Satuan</th>
                    <th>Harga Satuan</th>
                    <th>Total Harga</th>
                    <th>Aksi</th>
                </thead>

                <tbody>
                    @php
                        $no=1;
                        $total=0;
                    @endphp
                    @foreach ($masuk as $item)
                        <tr>

                            <td>{{ $no++ }}.</td>
                            <td>{{ $item->nama ?? ""}}</td>
                            <td>{{ $item->jenis ?? ""}}</td>
                            <td>{{ $item->berat ?? ""}} Kg</td>
                            <td>Rp. {{ $item->harga ?? ""}}</td>
                            <td>{{ $item->satuan ?? "-"}}</td>
                            <td>Rp. {{ $item->hargas ?? "0"}}</td>
                            <td>Rp. {{ $total=(($item->harga*$item->berat)+$item->hargas)}}</td>
                            <td></td>
                        </tr>
                    @endforeach
                </tbody>
              </table>
    </div>
</main>

@endsection
