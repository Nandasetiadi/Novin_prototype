@extends('master')
@section('konten')

<div class="container-fluid">
    <div class="text-end m-2"><button class="btn btn-primary" data-bs-toggle="modal" data-bs-target="#ModalTambahproduk"> + Tambah produk Baru</button></div>
    @if(session('message'))
    <div class="alert alert-success m-3"> {{session('message')}} </div>
    @endif
    <table class="table table-dark table-hover m-lg-2">
        <tr>
            <th>Id</th>
            <th>Novel</th>
            <th>Genre</th>
            <th>Deskripsi</th>
            <th>Option</th>
        </tr>
        @foreach ($produk as $p)
        <tr>
            <td> {{$p->id}}<br><img src="/assets/img/{{$p->foto}}" alt="" width="80px" height="100px"> </td>
            <td> {{$p->novel}} </td>
            <td> {{$p->genre}} </td>
            <td> {{$p->deskripsi}} </td>
            <td>

                <button class="btn btn-info" data-bs-toggle="modal" data-bs-target="#ModalUpdateproduk{{ $p->id }}">Update</button>
                |
                <button class="btn btn-danger" data-bs-toggle="modal" data-bs-target="#ModalDeleteproduk{{ $p->id }}">Delete</button>
            </td>
        </tr>

        <!-- Ini tampil form update produk -->
        <div class="modal fade" id="ModalUpdateproduk{{ $p->id }}" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
            <div class="modal-dialog">
                <div class="modal-content">
                    <div class="modal-header">
                        <h1 class="modal-title fs-5" id="exampleModalLabel">Update produk</h1>
                        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                    </div>
                    <div class="modal-body">
                        <form action="/produk/storeupdate" method="post" class="form-floating">
                            @csrf
                            <div class="form-floating p-1">
                                <input type="number" name="id" id="id" readonly class="form-control" value="{{ $p->id }}">
                                <label for="floatingInputValue">Id</label>
                            </div>
                            <div class="form-floating p-1">
                                <input type="text" name="novel" required="required" class="form-control" value="{{ $p->novel }}">
                                <label for="floatingInputValue">Novel</label>
                            </div>
                            <div class="form-floating p-1">
                                <input type="text" name="genre" required="required" class="form-control" value="{{ $p->genre }}">
                                <label for="floatingInputValue">Genre</label>
                            </div>
                            <div class="form-floating p-1">
                                <input type="text" name="deskripsi" required="required" class="form-control" value="{{ $p->deskripsi }}">
                                <label for="floatingInputValue">Deskripsi</label>
                            </div>
                            <div class="form-floating p-1">
                                <input type="foto" name="foto" required="required" class="form-control" value="{{ $p->foto }}">
                                <label for="floatingInputValue">Foto</label>
                            </div>
                            <div class="modal-footer">
                                <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
                                <button type="submit" class="btn btn-primary">Save Updates</button>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>

        <!-- Ini tampil form delete produk -->
        <div class="modal fade" id="ModalDeleteproduk{{$p->id}}" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
            <div class="modal-dialog">
                <div class="modal-content">
                    <div class="modal-header">
                        <h1 class="modal-title fs-5" id="exampleModalLabel">Hapus produk</h1>
                        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                    </div>
                    <div class="modal-body">
                        <form action="/pembaca/delete/{{$p->id}}" method="get" class="form-floating">
                            @csrf
                            <div>
                                <h3>Yakin mau menghapus data <b>{{$p->novel}}</b> ?</h3>
                            </div>
                            <div class="modal-footer">
                                <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Cancel</button>
                                <button type="submit" class="btn btn-primary">Yes</button>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>

        @endforeach
    </table>
</div>

<!-- Ini tampil form tambah produk -->
<div class="modal fade" id="ModalTambahproduk" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
    <div class="modal-dialog">
        <div class="modal-content">
            <div class="modal-header">
                <h1 class="modal-title fs-5" id="exampleModalLabel">Tambah produk</h1>
                <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
            </div>
            <div class="modal-body">
                <form action="/produk/storeinput" method="post" class="form-floating" enctype="multipart/form-data">
                    @csrf
                    <div class="form-floating p-1">
                        <input type="number" name="id" required="required" class="form-control">
                        <label for="floatingInputValue">Id</label>
                    </div>
                    <div class="form-floating p-1">
                        <input type="text" name="novel" required="required" class="form-control">
                        <label for="floatingInputValue">Novel</label>
                    </div>
                    <div class="form-floating p-1">
                        <input type="text" name="genre" required="required" class="form-control">
                        <label for="floatingInputValue">Genre</label>
                    </div>
                    <div class="form-floating p-1">
                        <input type="text" name="deskripsi" required="required" class="form-control">
                        <label for="floatingInputValue">Deskripsi</label>
                    </div>
                    <div class="form-floating p-1">
                        <input type="file" name="foto" required="required" class="form-control">
                        <label for="floatingInputValue">Foto</label>
                    </div>
                    <div class="modal-footer">
                        <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
                        <button type="submit" class="btn btn-primary">Save changes</button>
                    </div>
                </form>
            </div>
        </div>
    </div>
</div>

@endsection