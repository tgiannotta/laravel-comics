<div class="comics">
    @foreach($comics as $comic )
    {{-- SINGLE  COMIC --}}
    <div class="single-comic">
         <div>
             <img src="{{ $comic['thumb'] }}" alt="Prova">
             <h3>{{$comic['series']}}</h3>
             
         </div>    
    </div>
    {{-- END SINGLE COMIC --}}
    @endforeach
</div>