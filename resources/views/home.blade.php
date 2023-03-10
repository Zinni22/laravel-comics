@extends('layouts.main_layout')

{{-- Nome della pagina --}}
@section('page_title')
    Laravel Comics
@endsection

{{-- Contenuto main --}}
@section('card_content')

    <div class="jumbo">
    </div>

    {{-- CONTENITORE CARD --}}
    <div class="card-container">
        <div class="container">

            {{-- carte --}}
            <div class="row g-2">
            @foreach ($comics as $comic)

                <div class="col-2 comic-card">
                    <img src="https://www.starshop.it/media/catalog/product/cache/225e5fda4dc5652637d552768fc55c5c/import/02139CTWS0005.jpg" alt="">

                    <p>
                        {{ $comic['series'] }}
                    </p>
                </div>
            @endforeach
            </div>

            {{-- bottone --}}
            <div class="d-flex justify-content-center">
                <button>
                    LOAD MORE
                </button>
            </div>

        </div> 
    </div>

@endsection