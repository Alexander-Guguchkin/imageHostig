<x-layout>
    <div class="containerImage">
        <div class="containerImage__header">
            <a href="/"> <button class="close"><img src="{{asset('image/Close_round.svg')}}"></button></a>
        </div>
        <div class="containerImage__body">
         <img src="{{asset('/storage/' . $results->path)}}" id="{{$results->id}}" width="100%" height="100%">
        </div>
    </div>

</x-layout>
