@extends('layouts.app')

{{-- Meta Tag --}}
@section('metakey',$meta->get('contact')->metakey)
@section('title',$meta->get('contact')->metatitle)
@section('metadesc',$meta->get('contact')->metadesc)
@section('metaimage',$meta->get('contact')->metaimage)
{{-- end Meta --}}

@section('content')
<section class="py-5">
    <div class="container">
        @if (session('status'))
        <div class="alert alert-success alert-dismissible fade show" role="alert">
            <strong>Horeeayy!</strong> Email berhasil terkirim! <br>
            Tunggu beberapa saat kami pasti membalas email anda!
            <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
        </div>
        @endif
        @error('name')
        <div class="alert alert-warning alert-dismissible fade show" role="alert">
            <strong>Ada kesalahan menginput data!</strong> {{ $message }}
            <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
        </div>
        @enderror
        @error('email')
        <div class="alert alert-warning alert-dismissible fade show" role="alert">
            <strong>Ada kesalahan menginput data!</strong> {{ $message }}
            <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
        </div>
        @enderror
        @error('no')
        <div class="alert alert-warning alert-dismissible fade show" role="alert">
            <strong>Ada kesalahan menginput data!</strong> {{ $message }}
            <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
        </div>
        @enderror
    </div>
    <div class="container">
        <div class="grid mb-4">
            <div class="g-col-5 g-col-md-3">
                <h3 class="title fw-bold"><span class="color-primary fs-3 fw-bold">Contact</span> Reky</h3>
            </div>
            <div class="g-col-7 g-col-md-9">
                <hr class="color-light">
            </div>
        </div>
        <div class="grid align-items-start">
            <div class="g-col-12 g-col-md-8">
                <form action="{{ route('contact.send') }}" class="bg-white p-3 rounded-3" method="POST">
                    @csrf
                    <h5 class="fw-bold mb-3">Email</h5>
                    <div class="form-floating mb-3">
                        <input type="nama" class="form-control" id="nama" name="name" placeholder="Your Name">
                        <label for="nama">Your Name</label>
                    </div>
                    <div class="form-floating mb-3">
                        <input type="email" class="form-control" id="email" name="email" placeholder="email@anda.com">
                        <label for="email">Email address</label>
                    </div>
                    <div class="form-floating">
                        <input type="number" class="form-control" id="no" name="no" placeholder="Password">
                        <label for="no">No. Phone or Whatsapp</label>
                    </div>
                    <div class="mt-3">
                        <textarea name="message" id="message" class="form-control" cols="30" rows="10" placeholder="Messages"></textarea>
                    </div>
                    <button class="btn btn-primary mt-3" type="submit">Kirim</button>
                </form>
            </div>
            <div class="g-col-12 g-col-md-4 bg-white rounded-3 p-3">
                <h5 class="fw-bold mb-3">Direct Message</h5>
                @foreach ($contact as $con)
                    @if ($con->key !== 'webmail')
                    <a href="{{ $con->url }}" class="text-decoration-none mb-2 d-flex align-items-center gap-2 btn btn-outline-primary">
                        <span class="iconify" data-icon="{{ $con->icon }}"></span>
                        {{ $con->name }}
                    </a>
                    @endif
                @endforeach
            </div>
        </div>
    </div>
    
</section>
@endsection