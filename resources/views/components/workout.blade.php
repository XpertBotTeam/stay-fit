<x-layout>
     <div class="flex justify-center  text-3xl text-blue-700">{{ $exercices['0']['bodyPart'] }} exercices</div>
     <div class="flex flex-row gap-4 ml-10  mb-10 mt-2"> 
     @foreach($exercices as $exercice)

  <div class="flex flex-col ">
<div class="h-42 w-56"> <img src="{{ $exercice['gifUrl'] }}" alt=""> </div>
<div class="pl-8 text-red-300 italic"> exercice:{{ $exercice['name'] }}</div>
<div class="pl-8 text-red-300 italic"> target:{{ $exercice['target'] }}</div>
 </div>
 @endforeach
     </div>

     <div class="flex flex-row gap-4 ml-10  mb-10 mt-2"> 


 @foreach($exercices2 as $exercice)
  <div class="flex flex-col ">
<div class="h-42 w-56"> <img src="{{ $exercice['gifUrl'] }}" alt=""> </div>
<div class="pl-8 text-red-300 italic"> exercice:{{ $exercice['name'] }}</div>
<div class="pl-8 text-red-300 italic"> target:{{ $exercice['target'] }}</div>
</div>
 @endforeach
  </div>
 <div class="flex flex-row gap-4 ml-10  mb-10 mt-2"> 
 @foreach($exercices3 as $exercice)
     

  <div class="flex flex-col ">
<div class="h-42 w-56"> <img src="{{ $exercice['gifUrl'] }}" alt=""> </div>
<div class="pl-8 text-red-300 italic"> exercice:{{ $exercice['name'] }}</div>
<div class="pl-8 text-red-300 italic"> target:{{ $exercice['target'] }}</div>
 </div>
 @endforeach
     </div>
    
</x-layout>