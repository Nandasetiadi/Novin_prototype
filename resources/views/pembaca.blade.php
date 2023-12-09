@extends('master')
@section('konten')

<div class="container-fluid">
    @if(session('message')) <div class="alert alert-success m-3"> {{session('message')}}
    </div> @endif <table class="table table-dark table-hover m-lg-2">
        <tr>
            <th>Kode</th>
            <th>Nama Pembaca</th>
            <th>judul</th>
            <th>Tanggal Baca</th>
            <th>Status</th> @if(Auth::user()->role!='Guest')
            <th>Option</th>
            @endif
        </tr>
        @foreach ($pembaca as $p)
        <tr>
            <td> {{$p->kode}} </td>
            <td> {{$p->nama_pembaca}} </td>
            <td> {{$p->judul}} </td>
            <td> {{$p->tanggal_baca}} </td>
            <td>
                <button class="btn btn-info" data-bs-toggle="modal" data-bs-target="#ModalUpdatepembaca{{ $p->kode }}">Update</button>
                |
                <button class="btn btn-danger" data-bs-toggle="modal" data-bs-target="#ModalDeletepembaca{{ $p->kode }}">Delete</button>
            </td>
            <td>
                @if(Auth::user()->role!='Guest')
                @if($p->status=='verifikasi')
                <button class="btn btn-warning" data-bs-toggle="modal" data-bs-target="#ModalUpdatepembelian{{
                        str_replace('/','',$p->kode) }}"> {{$p->status}}
                </button> @elseif($p->status=='sudah dipinjam') <button class="btn btn-primary" data-bs-toggle="modal" data-bs-target="#ModalUpdatepembelian{{
str_replace('/','',$p->kode) }}">
                    {{$p->status}}
                </button>
                @elseif($p->status=='Di baca')
                <button class="btn btn-info" data-bs-toggle="modal" data-bs-target="#ModalUpdatepembelian{{
                str_replace('/','',$p->kode) }}"> {{$p->status}}
                </button>
                @elseif($p->status=='lagi dibaca')
                <button class=" btn btn-success" data-bs-toggle="modal" data-bs-target="#ModalUpdatepembelian{{
    str_replace('/','',$p->kode) }}">
                    {{$p->status}}
                </button>
                @endif
                @else
                <button class="btn btn-primary">{{$p->status}}</button>
                @endif
            </td>
            @if(Auth::user()->role!='Guest')
            <td>
                <button class=" btn btn-danger" data-bs-toggle="modal" data-bs-target="#ModalDeletepembaca{{ $p->kode}}">Delete</button>
            </td>
            @endif
        </tr>

        <!-- Ini tampil form update pembaca -->
        <div class="modal fade" id="ModalUpdatepembaca{{ str_replace('/','',$p->kode) }}" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
            <div class="modal-dialog">
                <div class="modal-content">
                    <div class="modal-header">
                        <h1 class="modal-title fs-5" id=" exampleModalLabel">Update pembaca</h1>
                        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                    </div>
                    <div class="modal-body">
                        <form action="/pembaca/storeupdate" method="post" class="form-floating">
                            @csrf
                            <div class="form-floating p-1">
                                <input type="text" name="kode" id="kode" readonly class="form-control" value="{{
                        $p->kode }}"> <label for="floatingInputValue">Kode</label>
                            </div>
                            <div class="form-floating p-1">
                                <select name="status" class="form-control">
                                    <option value="verifikasi" @if($p->status =='dipinjam') selected="selected"
                                        @endif>Dipinjam</option>
                                    <option value="sudah dipinjam" @if($p->status =='sudah dipinjam') selected="selected"
                                        @endif>Sudah dibaca</option>
                                    <option value="dibaca" @if($p->status =='dibaca') selected="selected" @endif>Dibaca
                                    </option>
                                    <option value="selesai" @if($p->status =='lagi dibaca') selected="selected"
                                        @endif>Lagi dibaca</option>
                                </select>
                                <label for="floatingInputValue">Status</label>
                            </div>
                            <div class="modal-footer"> <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close
                                </button>
                                <button type="submit" class="btn btn-primary">Save Updates</button>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div> <!-- Ini tampil form delete pembelian -->
        <div class="modal fade" id="ModalDeletepembelian{{$p->kode}}" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
            <div class="modal-dialog">
                <div class="modal-content">
                    <div class="modal-header">
                        <h1 class="modal-title fs-5" id="exampleModalLabel">Hapus pembelian</h1>
                        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                    </div>
                    <div class="modal-body">
                        <form action="/pembelian/delete/{{$p->kode}}" method="get" class="form-floating"> @csrf <div>
                                <h3>Yakin mau menghapus data <b>{{$p->kode}}</b> ?</h3>
                            </div>
                            <div class="modal-footer"> <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Cancel</button>
                                <button type="submit" class="btn
                                                btn-primary">Yes</button>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>

        @endforeach
    </table>
    <a href="/"><button class="btn btn-info">Lanjutkan Baca</button></a>
</div>


<!-- Ini tampil form tambah pembaca -->
<div class=" modal fade" id="ModalTambahpembaca" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
    <div class="modal-dialog">
        <div class="modal-content">
            <div class="modal-header">
                <h1 class="modal-title fs-5" id="exampleModalLabel">Tambah pembaca </h1>
                <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
            </div>
            <div class="modal-body">
                <form action="/pembaca/storeinput" method="post" class="form-floating">
                    @csrf
                    <div class="form-floating p-1">
                        <input type="text" name="kode" required="required" class="form-control">
                        <label for="floatingInputValue">Kode</label>
                    </div>
                    <div class="form-floating p-1">
                        <input type="text" name="nama_pembaca" required="required" class="form-control">
                        <label for="floatingInputValue">Nama Pembaca</label>
                    </div>
                    <div class="form-floating p-1">
                        <input type="text" name="judul" required="required" class="form-control">
                        <label for="floatingInputValue">Judul</label>
                    </div>
                    <div class="form-floating p-1">
                        <input type="date" name="tanggal_baca" required="required" class="form-control">
                        <label for="floatingInputValue">Tanggal Baca</label>
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