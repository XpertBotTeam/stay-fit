<x-layout>
<div class=" flex flex-col  bg-zinc-200 text-red-400 mt-10">

<div class="flex flex-row bg-[url('/images/background/shop.jpeg')] bg-no-repeat pt-20 pb-64  ml-36">
 <div class="flex  flex-col  pt-20 px-60 items-center">
<div class="text-3xl  font-bold  break-all underline "><a href="" class="hover:text-white">Try our sales </a>  </div>
<div class="italic pt-2  text-xl font-bold break-all"  >
with our supplement and gym equipement
</div>
<div class="italic pt-2 text-xl   font-bold break-all">
hit your macros and stay fit
</div>

</div>
</div>
</div>
<div class="mt-10">
<x-frontend>


<div class="container px-6 mx-auto">
    <h3 class="text-2xl font-medium text-gray-700">Product List</h3>
    <div class="grid grid-cols-1 gap-6 mt-6 sm:grid-cols-2 lg:grid-cols-3 xl:grid-cols-4">
        @foreach ($shops as $shop)
        <div class="w-full max-w-sm mx-auto overflow-hidden rounded-md shadow-md">
            <img src="{{ url($shop->image) }}" alt="" class="w-full max-h-60">
            <div class="flex items-end justify-end w-full bg-cover">
                
            </div>
            <div class="px-5 py-3">
                <h3 class="text-gray-700 uppercase">{{ $shop->name }}</h3>
                <span class="mt-2 text-gray-500">${{ $shop->price }}</span>
                <form action="{{ route('cart.store') }}" method="POST" enctype="multipart/form-data">
                    @csrf
                    <input type="hidden" value="{{ $shop->id }}" name="id">
                    <input type="hidden" value="{{ $shop->name }}" name="name">
                    <input type="hidden" value="{{ $shop->price }}" name="price">
                    <input type="hidden" value="{{ $shop->image }}"  name="image">
                    <input type="hidden" value="1" name="quantity">
                    <button class="px-4 py-2 text-white bg-blue-800 rounded">Add To Cart</button>
                </form>
            </div>
            
        </div>
        @endforeach
    </div>
</div>
</x-frontend>
</div>
@auth

<div class="flex justify-center">
<x-form.order link="address">Order now!</x-form.order>
</div>
 
@else
<div class="flex justify-center mb-10">
  <x-form.order link="register">Order now!</x-form.order>
</div>

@endauth
                
</x-layout>