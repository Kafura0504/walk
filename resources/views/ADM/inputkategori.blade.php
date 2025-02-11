@extends('adm.layout')

@section('content')
        <div class="row">
            <div class="col-6">
                <form method="post" enctype="multipart/form-data" action="{{route('adm.storekategori')}}">
                  @csrf
                        <label for="namaBuku" class="form-label">Kategori / Genre</label>
                        <input type="text" name="nama" class="form-control">
                        <div class="mb-3">
                            <label for="sinopsis">deskripsi kategori</label>
                            <textarea name="deskripsi" id="" class="form-control" placeholder="Leave a comment here"></textarea>
                        </div>
                        

                    <div class="mb-3">
                        <input type="submit" value="Input Data Buku" class="btn btn-primary" name="btnInputBukuGambar">
                    </div>

                    <table class="table">
                      <tr>
                        <td>#</td>
                        <td>nama</td>
                        <td colspan=2>Menu</td>
                      </tr>
                      @forelse( $kat as $k )
                      <tr>
                        <td>{{$k->id}}</td>
                        <td>{{$k->nama}}</td>
                        <td>edit</td>
                        <td>delete</td>
                      </tr>

                      @empty
                      data kosong.
                      @endforelse
                    </table>
                </form>
                @if (session('error')){{session('error')}}
                  
                @endif
                @if (session('success')){{session('success')}}
                  
                @endif
            </div>
        </div>
        @endsection