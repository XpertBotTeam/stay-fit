<x-layout>
<!-- https://stayfitconsultation.setmore.com/ -->
   <!-- bg-[url('/images/background/consultation.jpg')] --> 
<div class="bg-slate-100  w-full " >
   <div class="  bg-no-repeat bg-[url('/images/background/healthyfood.jpeg')] ml-36  font-family-karla  ">

<header class=" w-full container mx-auto   pl-10">
                    <div class="flex flex-col  w-56 bg-stone-800 opacity-75 py-5">
                      
                    <div class="px-5">
                    <a class="font-bold  text-white px-1 uppercase hover:text-gray-700 text-2xl" href="#">
                           Stay fit plan

                        </a>
 
                    </div>
                
                  <div class="py-2">
                       <p class=" font-serif text-sm italic text-white tracking-wide  whitespace-normal px-2">
                     Try our plan to stay fit which includes:
                          </p> 
                  </div>
                  <div>
                      <ul class=" list-disc font-serif text-sm italic text-white tracking-wide  whitespace-normal px-5">
                        <li> customized meal plan </li>
                        <li>6 days meals per week</li>
                        <li>customized training plan</li>
                      </ul>
                     </div>
                    
                    </div >
                   @auth
                    <div class="flex flex-row mt-3">
                     <div class="mt-100 mx-64 mb-5   ">
               <a href="package" class="rounded-full px-5 py-3 font-bold bg-blue-800 ml-32  text-slate-400 hover:text-white  hover:bac"> Subscribe now!</a>
                    </div>
                    </div>
                    @else
                      <div class="flex flex-row mt-3">
                     <div class="mt-100 mx-64 mb-5   ">
               <a href="/register" class="rounded-full px-5 py-3 font-bold bg-blue-800 ml-32  text-slate-400 hover:text-white  hover:bac"> Subscribe now!</a>
                    </div>
                    </div>
            @endauth
                    
                    </div>
                   <div class="flex flex-col bg-slate-100">

                   
                      <div class="text-center   font-light italic pb-5 text-4xl pt-10 ">
                    <p>Try our meals </p>
                    </div>
                    <div class="flex flex-row mx-5 gap-2 ">
                     <div><img src="/images/mealsanddessert/cherryclafoutis.jpg" alt=""></div>
                     <div><img src="/images/mealsanddessert/gluten-free-carrot-cake.jpg" alt=""></div>
                    </div>
</div>
<x-frontend>


    <div class="container px-6 mx-auto">
        <h3 class="text-2xl font-medium text-gray-700">Product List</h3>
        <div class="grid grid-cols-1 gap-6 mt-6 sm:grid-cols-2 lg:grid-cols-3 xl:grid-cols-4">
            @foreach ($products as $product)
            <div class="w-full max-w-sm mx-auto overflow-hidden rounded-md shadow-md">
                <img src="{{ url($product->image) }}" alt="" class="w-full max-h-60">
                <div class="flex items-end justify-end w-full bg-cover">
                    
                </div>
                <div class="px-5 py-3">
                    <h3 class="text-gray-700 uppercase">{{ $product->name }}</h3>
                    <span class="mt-2 text-gray-500">${{ $product->price }}</span>
                    <form action="{{ route('cart.store') }}" method="POST" enctype="multipart/form-data">
                        @csrf
                        <input type="hidden" value="{{ $product->id }}" name="id">
                        <input type="hidden" value="{{ $product->name }}" name="name">
                        <input type="hidden" value="{{ $product->price }}" name="price">
                        <input type="hidden" value="{{ $product->image }}"  name="image">
                        <input type="hidden" value="1" name="quantity">
                        <button class="px-4 py-2 text-white bg-blue-800 rounded">Add To Cart</button>
                    </form>
                </div>
                
            </div>
            @endforeach
        </div>
    </div>
</x-frontend>

<!--  
<div class="flex flex-row  gap-24 bg-slate-100 pt-10 px-48 ">
   <div class="flex flex-col ">
      <div ><img src="{{ $cookies->image }}" class="h-44 w-64" alt="">
      <div class="py-3 italic text-zinc-700"> {{ $cookies->name }}</div>
  </div>
  <div class="py-3 italic text-zinc-700"> </div>
   </div>
   <div class="flex flex-col  ">
    <div ><img src="{{ $bibingka->image }}" class="h-44 w-64"alt="">
   </div> 
   <div class="py-3 italic text-zinc-700"> {{ $bibingka->name }}</div>
 </div>
   <div class="flex flex-col">
<div > <img src="{{ $chicken->image}}" class="h-44 w-64" alt="">
</div>
<div class="py-3 italic text-zinc-700"> {{ $chicken->name }}</div>
</div>
    
     <div class="flex flex-col">
<div  > <img src="{{ $pasta->image }}" class="h-44 w-64" alt=""></div>
<div class="py-3 italic text-zinc-700"> {{ $pasta->name }}</div>
</div>
     </div>   
               </div>-->
<!-- <div class="mt-10 mx-64">
<table class="table-fixed w-92  border border-separate border-spacing-y-5 border-spacing-x-24 bg-green-500 opacity-75" >
  <thead>
    <tr class="space-x-20" >
      <th>Meals or dessert</th>
     <th></th>
     <th></th>
      <th>Price</th>
    </tr>
  </thead>
 
  <tbody>
   @foreach($products as $product)
  <tr>
      <td>{{ $product->name }}  </td>
      <td></td>
      <td></td>
      <td>{{  $product->price }}$</td>
    </tr>
    <tr>
      @endforeach
     
  </tbody>
</table> -->

@auth

<div class="flex justify-center">
<x-form.order link="address">Order now!</x-form.order>
</div>
 
@else
<div class="flex justify-center mb-10">
  <x-form.order link="register">Order now!</x-form.order>
</div>

@endauth

</div>

</div>

    
</x-layout>

                

                
              

