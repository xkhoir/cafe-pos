@extends('layouts.app')

@section('content')
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-md-8" style="margin-top: 2%">
                <div class="card" style="width: 40rem;">
                    <div class="card-body">
                        <h4 class="card-title">Verifikasi email kamu</h4>
                        @if (session('resent'))
                            <p class="alert alert-success" role="alert">Link verifikasi sudah dikirimkan ke email kamu</p>
                        @endif
                        <p class="card-text">Sebelum diproses, silahkan cek link verifikasi yang dikirimkan ke email kamu.Jika kamu belum menerima email,</p>
                        <a href="{{ route('verification.resend') }}">Klik disini untuk meminta link kembali</a>.
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection