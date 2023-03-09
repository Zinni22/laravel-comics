@extends('layouts.main_layout')

{{-- Nome della pagina --}}
@section('page_title')
    Laravel Comics
@endsection

{{-- Contenuto main --}}
@section('card_content')
    <div class="container">
        <div class="row">

            @foreach ($comics as $comic)
                <div class="col">
                    {{ $comic['series'] }}
                </div>
            @endforeach
        
            
        </div>
    </div>
@endsection