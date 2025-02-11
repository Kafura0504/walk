@extends('adm.layout')
@section('content')
        <div class="row">
            <div class="col-6">
            <h2>Input Data Buku </h2>
                <form method="post" enctype="multipart/form-data">
                    @csrf
                    <div class="mb-3">
                        <label for="namaBuku" class="form-label">Judul Buku </label>
                        <input type="text" class="form-control" name="judul" >
                    </div>
                    <div class="mb-3">
                        <label for="nmpengarang" class="form-label">Pengarang</label>
                        <input type="number" name="pengarang" id="" class="form-control">
                    </div>
                    <div class="mb-3">
                    <div class="mb-3">
                        <label for="nmpenerbit" class="form-label">Tahun Terbit</label>
                        <select class="form-select" name="tahunTerbit">
                                <option selected>--Pilih Tahun--</option>

                                <option value="">pilihan</option>
                        </select>
                    </div>
                    <div class="mb-3">
                        <label for="nmpenerbit" class="form-label">Kategori / Genre</label>
                        <input type="number" name="kategori" id="">
                    </div>
                    <div class="mb-3">
                        <label for="sinopsis">Sinopsis</label>
                        <textarea name="sinopsis" class="form-control" placeholder="Leave a comment here" id="" for="sinopsis"></textarea>
                    </div>
                    <div class="mb-3">
                        <label for="coverBuku">Cover Buku</label>
                        <input type="file" name="gambar" id="" class="form-control" />
                    </div>

                    <div class="mb-3">
                        <input type="submit" value="Input Data Buku" class="btn btn-primary" name="btnInputBukuGambar">
                    </div>


                </form>
            </div>
        </div>
    @endsection