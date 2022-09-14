
<x-layout>
<style>
    .px-101{
        padding-left: 24rem;
        padding-right: 24rem;
    }
    .pl-101{
        padding-left: 26rem;
    }
   
</style>
    <div class="flex justify-center  bg-slate-100">
    <div  class="bg-[url('/images/background/fitness.jpeg')]   brightness-90 mx-44  py-64 bg-no-repeat  "> 
       <div class="flex  flex-col px-72">
    <div class="text-white text-4xl font-bold break-all">
        Try Our free exerices
       </div>
       <div class="italic text-white text-xl">
        build your dream body and start working on yourself more
        
       </div>
       </div>

    </div>    

    </div>
    <div class="flex flex-col mt-10  ">
        <div class="text-4xl font-bold  text-blue-800 pl-101 pb-5">Choose the muscle</div>
         <div class="italic text-lg font-serif  break-all px-96"> we have more than 30 exercice for each muscle so now choose the muscle you want and you have many choices to do it even if don't have equipement we have execice uses only your bodyweight so you have no excuses</div>
    </div>
  
    <div class="flex flex-row gap-4 ml-10  mb-10 mt-5"> 

<a href=" {{ $chest->link }}">  <div class="flex flex-col ">
<div class="h-42 w-56"> <img src="{{ $chest->image }}" alt=""> </div>
<div class="pl-8 text-blue-700 italic"> {{ $chest->muscle }}</div>
 </div>
</a>   
<a href=" {{ $back->link }}">  <div class="flex flex-col ">
<div class="h-42 w-56"> <img src="{{ $back->image }}" alt=""> </div>
<div class="pl-8 text-blue-700 italic"> {{ $back->muscle }}</div>
 </div>
</a> 

<a href=" {{ $shoulders->link }}">  <div class="flex flex-col ">
<div class="h-42 w-56"> <img src="{{ $shoulders->image }}" alt=""> </div>
<div class="pl-8 text-blue-700 italic"> {{ $shoulders->muscle }}</div>
 </div>
</a>  

<a href=" {{ $abs->link }}">  <div class="flex flex-col ">
<div class="h-42 w-56"> <img src="{{ $abs->image }}" alt=""> </div>
<div class="pl-8 text-blue-700 italic"> {{ $abs->muscle }}</div>
 </div>
</a>  
<a href=" {{ $cardio->link }}">  <div class="flex flex-col ">
<div class="h-42 w-56"> <img src="{{ $cardio->image }}" alt=""> </div>
<div class="pl-8 text-blue-700 italic"> {{ $cardio->muscle }}</div>
 </div>
</a>  
</div> 




<div class="flex flex-row gap-4 ml-10  mb-10 mt-5"> 

<a href=" {{ $upperarms->link }}">  <div class="flex flex-col ">
<div class="h-42 w-56"> <img src="{{ $upperarms->image }}" alt=""> </div>
<div class="pl-8 text-blue-700 italic"> {{ $upperarms->muscle }}</div>
 </div>
</a>  

<a href=" {{ $lowerarms->link }}">  <div class="flex flex-col ">
<div class="h-42 w-56"> <img src="{{ $lowerarms->image }}" alt=""> </div>
<div class="pl-8 text-blue-700 italic"> {{ $lowerarms->muscle }}</div>
 </div>
</a> 



<a href=" {{ $upperlegs->link }}">  <div class="flex flex-col ">
<div class="h-42 w-56"> <img src="{{ $upperlegs->image }}" alt=""> </div>
<div class="pl-8 text-blue-700 italic"> {{ $upperlegs->muscle }}</div>
 </div>
</a>  

<a href=" {{ $lowerlegs->link }}">  <div class="flex flex-col ">
<div class="h-42 w-56"> <img src="{{ $lowerlegs->image }}" alt=""> </div>
<div class="pl-8 text-blue-700 italic"> {{ $lowerlegs->muscle }}</div>
 </div>
</a> 

 


 



</div>

</x-layout>