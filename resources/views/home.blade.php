@extends('layouts.app')

@section('page_title')
products
@endsection

@section('main_classes')
    black
@endsection

@section('main_content')
    <div class="jumbo">

    </div>
   <section>
       
       <div class="comics-container">
           @include('components.comics-cards')

        </div>

   </section>
@endsection