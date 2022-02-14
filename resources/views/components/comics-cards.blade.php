<div class="comics">
    @foreach($comics as $comic )
    {{-- SINGLE  COMIC --}}
    <div class="single-comic">
         <div>
           <a href="{{ route('fumetto_singolo', ['id' => $comic['id']]) }}"><img src="{{ $comic['thumb'] }}" alt="Prova"></a>  
             <h3>{{$comic['series']}}</h3>
             
         </div>    
    </div>
    {{-- END SINGLE COMIC --}}
    @endforeach
</div>