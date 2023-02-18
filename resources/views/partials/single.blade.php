@extends('layouts.app')
@section('main')

{{-- blue bar --}}
    <div class="container-fluid comic_top_container bg-primary py-5">
        <div class="row">
            <div class="col">
                <div class="container px-5">
                    <div class="row px-5">
                        <div class="col">
                            <img src="{{$comics[0]['thumb']}}" alt="" class="comic_cover">
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>

    {{-- description --}}
    <div class="container-fluid comic_description_container py-5">
        <div class="row">
            <div class="col">
                <div class="container px-5">
                    <div class="row px-5">
                        <div class="col-8">
                            <h2>{{ $comics[0]['title']}}</h2>
                            <div class="my-4 buy_comic bg-success bg-gradient d-flex justify-content-between">
                                <div class='p-3 d-flex justify-content-between'>
                                    <span>U.S. Price $19.99</span>
                                    <span>AVAILABLE</span>
                                    </div>
                                <select class='p-3 bg-success bg-gradient'  name="" id="">
                                    <option value="">Check Availability</option>
                                </select> 
                           </div>
                           <p class='text-secondary'>{{ $comics[0]['description']}}</p>
                        </div>
                        <div class="adv_container col-4">
                            <p class='text-end'>ADVIRSEMENT</p>
                            <img class='adv_img' src="{{ Vite::asset('resources/img/adv.jpg') }}" alt="">
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>


@endsection