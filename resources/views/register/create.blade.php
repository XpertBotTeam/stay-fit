<x-layout>

<section class="px-6 py-8">
    <main class="max-w-lg mx-auto mt-10 bg-gray-100 border border-gray-200 rounded-xl p-6">
       <h1 class="text-center font-bold text-xl">Register</h1>
       <form class="mt-10" action="/register" method="POST">
          @csrf
       <div class="mb-6">
               <label class="block mb-2 uppercase font-bold text-xs text-gray-700"
                for="name">
                  name
               </label>
               <input type="text"
                class="border border-gray-400 p-2 w-full"
                name="name"
                id="name"
                value="{{ old('name') }}"
                required>
              @error('name')
              <p class="text-red-500 text-xs mt-1">{{ $message }}</p>
         @enderror
            </div>
       
    
           <div class="mb-6">
               <label class="block mb-2 uppercase font-bold text-xs text-gray-700"
                for="username">
                  Username
               </label>
               <input type="text"
                class="border border-gray-400 p-2 w-full"
                name="username"
                id="username"
               
                value="{{ old('username') }}"
                required>
              @error('username')
              <p class="text-red-500 text-xs mt-1">{{ $message }}</p>
         @enderror
           </div>
 
           <div class="mb-6">
               <label class="block mb-2 uppercase font-bold text-xs text-gray-700"
                for="email">
                  email
               </label>
               <input type="email"
                class="border border-gray-400 p-2 w-full"
                name="email"
                id="email"
                value="{{ old('email') }}"
                required>
              @error('email')
              <p class="text-red-500 text-xs mt-1">{{ $message }}</p>
         @enderror
                
              
           </div>
       
           <div class="mb-6">
               <label class="block mb-2 uppercase font-bold text-xs text-gray-700"
                for="password">
                  Password
               </label>
               <input type="password"
                class="border border-gray-400 p-2 w-full"
                name="password"
                id="password"
               
                required>
             
               @error('password')
<p class="text-red-500 text-xs mt-1">{{ $message }}</p>
              @enderror
           </div>
     
      <div  class="mb-6">
         <x-form.button>submit</x-form.button>
       </form> 
       </div>
    </main>
</section>

</x-layout>