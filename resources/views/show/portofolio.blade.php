@extends('layouts.app')

{{-- Meta Tag --}}
@section('metakey',$porto->meta_keywords)
@section('title',$porto->title)
@section('metadesc',$porto->meta_description)
@section('metaimage',Voyager::image($porto->image))
{{-- end Meta --}}

@section('content')
<section class="py-3 pb-5 mb-4 py-5" style="background-color:#F7F7F7">
    <div class="container">
        <div class="row">
            <div class="col-12 col-lg-7 mx-auto">
                <h1 class="fw-bold responsive-title">{{ $porto->title }}</h1>
                <hr>
                <img src="{{ Voyager::image($porto->image) }}" alt="" class="d-block w-100 rounded-3">
                <div class="d-flex flex-column align-items-start justify-content-start gap-3">
                    <a href="https://wa.me/{{ $contact->contact }}?text=Hi+Rekydesign,I+Want+to+like+{{ $porto->title }}" target="_blank" class="btn btn-primary w-100 my-3 hover-shadow">Order Like This!</a>
                    <div class="content">
                        {!! $porto->body !!}
                    </div>
                </div>
            </div>
        </div>
    </div>
    <div class="container mt-5">
        <h2 class="fw-bold">Another Portofolio for You!</h2>
        <div class="portofolio-box mt-4">
            <div class="grid owl-carousel gap-3 align-items-start">
            @foreach ($portos as $porto)
                @include('components.portofolio',['porto'=>$porto])
            @endforeach
            </div>
        </div>
    </div>
</section>
@endsection