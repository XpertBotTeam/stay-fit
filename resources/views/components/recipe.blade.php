<x-layout>
    @foreach($food['hits'] as $food)
<x-form.recipegrid name="$food['recipe']['label']" image="$food['recipe']['image']"/>
</x-layout>