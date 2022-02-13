@extends('layouts.app')

{{-- Meta Tag --}}
@section('metakey',$meta->get('service')->metakey)
@section('title',$meta->get('service')->metatitle)
@section('metadesc',$meta->get('service')->metadesc)
@section('metaimage',$meta->get('service')->metaimage)
{{-- end Meta --}}

@section('content')
<section class="py-3 pb-5 mb-4 py-5" style="background-color:#F7F7F7">
    <div class="container pe-0 pb-3">
        <div class="d-flex align-items-center justify-content-between">
            <div>
                <h2 class="fw-bold">{{ $content->get('service-title')->content }}</h2>
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
    <div class="container mt-4">
        <div class="bg-white rounded-3 p-3 d-inline-flex align-items-center justify-content-start gap-3">
            <h4 class="m-0 fw-bold">{{ $content->get('service-fiverr')->content }}</h4>
            <a href="{{ $contact->get('fiverr')->url }}" target="_blank" class="btn btn-success">Fiverr</a>
        </div>
    </div>
</section>

<section class="py-5" style="background-color: #Fff;">
    <div class="container mb-2">
        <h2 class="fw-bold">Our Statified Costumer Said</h2>
    </div>
    <div class="container quote owl-carousel owl-theme w-100">
        @foreach ($quotes as $testi)
            @include('components.quote',['quote'=>$testi])
        @endforeach
    </div>
</section>
@endsection