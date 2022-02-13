@extends('layouts.app')

{{-- Meta Tag --}}
@section('metakey',$meta->get('service')->metakey)
@section('title','Service - '.$service->title)
@section('metadesc',$service->desc)
@section('metaimage',$service->image)
{{-- end Meta --}}

@section('content')
<section class="py-3 pb-5 mb-4 py-5" style="background-color:#F7F7F7">
    <div class="container">
        <div class="grid">
            <div class="g-col-12">
                <h1 class="fw-bold responsive-title">{{ $service->title }}</h1>
                <hr>
            </div>
            <div class="g-col-12 g-col-lg-7">
                <div id="carouselExampleFade" class="carousel slide carousel-fade" data-bs-ride="carousel">
                    <div class="carousel-inner">
                        @php $images = json_decode($service->preview); @endphp
                        <div class="carousel-item active">
                            <img src="{{ Voyager::image($service->image) }}" class="d-block w-100 rounded-3" alt="asdasd">
                        </div>
                        @foreach ( $images as $image )
                            <div class="carousel-item">
                                <img src="{{ Voyager::image($image) }}" class="d-block w-100 rounded-3" alt="asdasd">
                            </div>
                        @endforeach
                    </div>
                    <button class="carousel-control-prev" type="button" data-bs-target="#carouselExampleFade" data-bs-slide="prev">
                        <span class="carousel-control-prev-icon bg-dark rounded-circle" aria-hidden="true"></span>
                        <span class="visually-hidden">Previous</span>
                    </button>
                    <button class="carousel-control-next" type="button" data-bs-target="#carouselExampleFade" data-bs-slide="next">
                        <span class="carousel-control-next-icon bg-dark rounded-circle" aria-hidden="true"></span>
                        <span class="visually-hidden">Next</span>
                    </button>
                </div>
            </div>
            <div class="g-col-12 g-col-lg-5">
                <div class="d-flex flex-column align-items-start justify-content-start gap-3">
                    <div class="bg-white p-3 rounded-3 content">
                        {!! $service->content !!}
                    </div>
                    <a href="https://wa.me/{{ $contact->get('wa-utama')->contact }}?text=Hi+Rekydesign,I+want+take+{{ $service->title }}+service" class="btn btn-primary w-100 my-3 hover-shadow order-sm-first order-md-last">Take This Service</a>
                </div>
            </div>
        </div>
    </div>
    <div class="container mt-4">
        <h2 class="fw-bold">Best Service for You!</h2>
        <div class="service-box">
            <div class="grid owl-carousel gap-3 align-items-start">
                @foreach ($services as $service)
                    @include('components.service',['service'=>$service])
                @endforeach
            </div>
        </div>
    </div>
</section>
@endsection