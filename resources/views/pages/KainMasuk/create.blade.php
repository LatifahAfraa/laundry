@extends('layouts.base')
@section('content')

<main class="col-md-9 ms-sm-auto col-lg-10 px-md-12 mt-3">
    <div class="container-fluid">
        <div class="row">
            <div class="col-lg-12">
                <div class="card text-center">
                </div>

                <div class="card card-primary card-outline">
                    <div class="card-body">
                        <center>
                           <h5 style="font-weight: 700;">Kain Masuk</h5>
                        </center></br>

                        @if (session("error"))
                        <script>
                            Swal.fire(
                                'Gagal!',
                                "{{ session('error') }}",
                                'error'
                            )
                        </script>
                        @endif

                        <form action="" method="POST">
                            @csrf
                            <div class="form-group row mb-1">
                                <label for="nama" class="col-sm-2 col-form-label">Nama Pelanggan</label>
                                <div class="col-sm-10">
                                    <input type="text" name="nama"  class="form-control" >
                                </div>
                            </div>

                            <div class="form-group row mb-1">
                                <label for="jenis" class="col-sm-2 col-form-label">Jenis Layanan</label>
                                <div class="col-sm-10">
                                    <select name="jenis" class="form-control">
                                        <option value="">===PILIH LAYANAN===</option>
                                            <option value="Cuci Komplit">Cuci Komplit</option>
                                            <option value="Cuci Kering">Cuci Kering</option>
                                            <option value="Setrika">Setrika</option>
                                        </select>
                                </div>
                            </div>

                            <div class="form-group row mb-1">
                                <label for="berat" class="col-sm-2 col-form-label">Berat</label>
                                <div class="col-sm-10">
                                    <input type="number" name="berat"  class="form-control" >
                                </div>
                            </div>

                            <div class="form-group row mb-1">
                                <label for="satuan" class="col-sm-2 col-form-label">Satuan</label>
                                <div class="col-sm-10">
                                    <textarea name="alamat" rows="4" cols="50" class="form-control"></textarea>
                                </div>
                            </div>

                            <div class="form-group row mb-1">
                                <label for="jumlah" class="col-sm-2 col-form-label">Jumlah</label>
                                <div class="col-sm-10">
                                    <input type="number" name="jumlah"  class="form-control" >
                                </div>
                            </div>

                            <div class="form-group row mb-1">
                                <label for="hargas" class="col-sm-2 col-form-label">Harga Satuan</label>
                                <div class="col-sm-10">
                                    <input type="text" name="hargas"  class="form-control" >
                                </div>
                            </div>

                            <div class="form-group row mt-1">
                                <label class="col-sm-2 col-form-label"></label>
                                <div class="col-sm-10">
                                    <button type="submit" name="simpan" class="btn btn-success">Simpan</button>
                                </div>
                            </div>

                    </div>
                </div><!-- /.card -->
            </div>

        </div>
        <!-- /.row -->
    </div><!-- /.container-fluid -->

</main>
@endsection
