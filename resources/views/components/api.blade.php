<x-layout>
     @foreach($food['hits'] as $recipe)
    <h1>{{ $recipe ['recipe']['label'] }}</h1>
    hello 
    @endforeach

</x-layout>