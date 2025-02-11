@extends('adm.layout')
@section('content')
        <div class="row">
            <div class="col-6">
                <form method="post" enctype="multipart/form-data">
                  @csrf
                        <label for="namaBuku" class="form-label">Penulis</label>
                        <input type="text" name="nama-penulis" class="form-control">
                        <div class="mb-3">
                            <label for="sinopsis">deskripsi penulis</label>
                            <textarea name="penulis" id="" class="form-control" placeholder="Leave a comment here"></textarea>
                        </div>
                        

                    <div class="mb-3">
                        <input type="submit" value="Input Data Buku" class="btn btn-primary" name="btnInputBukuGambar">
                    </div>


                </form>
            </div>
        </div>
    @endsection