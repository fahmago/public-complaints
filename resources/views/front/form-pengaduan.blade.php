@extends('layouts.base-front2')

@section('title','Form Pengaduan')

@section('css')
<link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/sweetalert2@11/dist/sweetalert2.min.css">
@endsection


@section('content')
<div class="page-heading">
    <h3>Form Pengaduan Masyarakat</h3>
</div>
    <section id="multiple-column-form">
        <div class="row match-height">
            <div class="col-12">
                <div class="card shadow-sm">
                    <div class="card-header text-center text-uppercase bg-primary text-white">
                        <h4 class="card-title">Masukkan Informasi Pengaduan</h4>
                    </div>
                    <div class="card-content">
                        <div class="card-body">
                            <form class="form" action="{{route ('front.store.pengaduan')}}" method="POST" enctype="multipart/form-data">
                                @csrf
                                <div class="row">
                                    <div class="col-md-6 col-12 mb-3">
                                        <div class="form-group">
                                            <label for="name">Nama Lengkap</label>
                                            <input type="text" id="name" class="form-control" placeholder="Nama Lengkap" name="name" required>
                                        </div>
                                    </div>
                                    <div class="col-md-6 col-12 mb-3">
                                        <div class="form-group">
                                            <label for="title">Judul Pengaduan</label>
                                            <input type="text" id="title" class="form-control" name="title" placeholder="Judul Pengaduan">
                                        </div>
                                    </div>
                                    <div class="col-md-6 col-12 mb-3">
                                        <div class="form-group">
                                            <label for="telp">Nomor Telepon</label>
                                            <input type="text" id="telp" class="form-control" placeholder="Nomor Telepon" name="telp">
                                        </div>
                                    </div>
                                    <div class="col-md-6 col-12 mb-3">
                                        <div class="form-group">
                                            <label for="image">Gambar</label>
                                            <input type="file" id="image" class="form-control" name="image" placeholder="Image">
                                        </div>
                                    </div>
                                    <div class="col-md-6 col-12 mb-3">
                                        <div class="form-group">
                                            <label for="email">Alamat Email</label>
                                            <input type="email" id="email" class="form-control" placeholder="Alamat Email" name="email">
                                        </div>
                                    </div>
                                    <div class="col-md-6 col-12 mb-3">
                                        <div class="form-group">
                                            <label for="description">Deskripsi</label>
                                            <textarea class="form-control" id="description" rows="3" name="description"></textarea>
                                        </div>
                                    </div>
                                    <div class="col-12 d-flex justify-content-end">
                                        <button type="submit" class="btn btn-primary me-1 mb-1">Submit</button>
                                        <button type="reset" class="btn btn-light-secondary me-1 mb-1">Reset</button>
                                    </div>
                                </div>
                            </form>
                            @if(session('msg'))
                                <script src="https://cdn.jsdelivr.net/npm/sweetalert2@11/dist/sweetalert2.min.js"></script>
                                <script>
                                    Swal.fire({
                                        toast: true,
                                        position: 'top-end',
                                        icon: 'success',
                                        title: "{{ session('msg') }}",
                                        showConfirmButton: false,
                                        timer: 3000,
                                        timerProgressBar: true,
                                        didOpen: (toast) => {
                                            toast.addEventListener('mouseenter', Swal.stopTimer)
                                            toast.addEventListener('mouseleave', Swal.resumeTimer)
                                        }
                                    });
                                </script>
                            @endif

                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
@endsection