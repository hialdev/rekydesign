@extends('layouts.app')

{{-- Meta Tag --}}
@section('metakey',$meta->get('home')->metakey)
@section('title',$meta->get('home')->metatitle)
@section('metadesc',$meta->get('home')->metadesc)
@section('metaimage',$meta->get('home')->metaimage)
{{-- end Meta --}}

@section('content')
<section>
    <div class="wrap">
        <div class="hero container-fluid p-0">
            <div class="jumbotron owl-carousel">
                @foreach ($banners as $hero)
                    @include('components.hero',['hero'=>$hero])
                @endforeach
            </div>
        </div>
        <div class="arrow d-flex justify-content-between">
            <div class="arrow-prev d-flex justify-content-center align-items-center p-2 rounded-circle bg-dark bg-opacity-50 shadow">
                <span class="iconify" data-icon="ep:arrow-left-bold"></span>
            </div>
            <div class="arrow-next d-flex justify-content-center align-items-center p-2 rounded-circle bg-dark bg-opacity-50 shadow">
                <span class="iconify" data-icon="ep:arrow-right-bold"></span>
            </div>
        </div>
    </div>
<!-- End Hero -->
</section>
<section class="py-5" style="background-color:#F7F7F7">
    <h1 class="fw-bold text-center mb-4">{{ $content->get('home-value-title')->content }}</h1>
    <div class="container">
        <div class="grid gap-3 align-items-start">
            @foreach ($values as $value)
            <div class="g-col-12 g-col-md-6 g-col-xl-4 bg-white rounded p-4">
                <span class="iconify d-block mx-auto mb-3" data-icon="{{ $value->icon }}" style="width: 5em;height:5em"></span>
                <h3 class="text-center fw-bold">{{$value->value}}</h3>
                <p class="text-center">{{$value->desc}}</p>
            </div>  
            @endforeach
        </div>
    </div>
</section>
<section class="py-3 pb-5 mb-4" style="background-color:#F7F7F7">
    <div class="container pe-0 pb-3">
        <div class="d-flex align-items-center justify-content-between">
            <div>
                <h2 class="fw-bold">{{ $content->get('home-title-service')->content }}</h2>
            </div>
            <div>
                <a href="{{ url('service') }}" class="d-inline-flex align-items-center gap-2">See All <span class="iconify" data-icon="bi:arrow-right-circle-fill"></span></a>
            </div>
        </div>
    </div>
    <div class="container">
        <div class="grid gap-3 align-items-start">
            @foreach ($services as $service)
                @include('components.service',['service'=>$service])
            @endforeach
        </div>
    </div>
</section>
<section class="px-0 m-0">
    <div class="container-fluid m-0 p-0">
        <h1 class="fw-bold p-3" style="font-size: 74px;max-width:40em;width:100%;">{{ $content->get('home-title-video')->content }}</h1>
        <div class="videoWrapper">
            <iframe width="560" height="349" src="{{ $content->get('home-url-video')->content }}" frameborder="0" allowfullscreen></iframe>
        </div>
    </div>
</section>
<section class="py-5" style="background-color: #F7F7F7;">
    <div class="container mb-4">
        <h2 class="fw-bold">{{ $content->get('home-title-portofolio')->content }}</h2>
    </div>
    <div class="container">
        <div class="masonry">
            @foreach ($portofolio as $porto)
                @include('components.portofolio',['porto'=>$porto])
            @endforeach
        </div>
    </div>
    <div class="container text-center">
        <a href="{{ url('portofolio') }}" class="btn btn-outline-primary">More Portofolios <span class="iconify" data-icon="bi:arrow-right"></span></a>
    </div>
</section>
<section class="py-5" style="background-color: #Fff;">
    <div class="container mb-2">
        <h2 class="fw-bold">{{ $content->get('title-testimonial')->content }}</h2>
    </div>
    <div class="container quote owl-carousel owl-theme w-100">
        @foreach ($quotes as $testi)
            @include('components.quote',['quote'=>$testi])
        @endforeach
    </div>
</section>    
@endsection