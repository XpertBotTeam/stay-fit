<x-layout>

<section class="px-6 py-8">
    <main class="max-w-lg mx-auto mt-10 bg-gray-100 border border-gray-200 rounded-xl p-6">
       <h1 class="text-center font-bold text-xl">Meeting</h1>
       <form class="mt-10" action="meeting" method="POST">
          @csrf
       <div class="mb-6">
               <label class="block mb-2 uppercase font-bold text-xs text-gray-700"
                for="email">
                email
               </label>
               <input type="text"
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
                for="number">
                number
               </label>
               <input type="text"
                class="border border-gray-400 p-2 w-full"
                name="number"
                id="number"
               
                value="{{ old('number') }}"
                required>
              @error('number')
              <p class="text-red-500 text-xs mt-1">{{ $message }}</p>
         @enderror
           </div>
 
           <div class="mb-6">
               <label class="block mb-2 uppercase font-bold text-xs text-gray-700"
                for="place">
                 which way do you prefer to meet
               </label>
               <input type="place"
                class="border border-gray-400 p-2 w-full"
                name="place"
                placeholder="zoom/our clinics"
                id="place"
                value="{{ old('place') }}"
                required>
              @error('place')
              <p class="text-red-500 text-xs mt-1">{{ $message }}</p>
         @enderror
                
              
           </div>
       
           <div class="mb-6">
               <label class="block mb-2 uppercase font-bold text-xs text-gray-700"
                for="time">
                 put the best time for you
               </label>
               <input type="text"
                class="border border-gray-400 p-2 w-full"
                placeholder="monday->friday(8am-6pm)"
                name="time"
                id="time"
               
                required>
             
               @error('time')
<p class="text-red-500 text-xs mt-1">{{ $message }}</p>
              @enderror
           </div>
           <div class="mb-6">
               <label class="block mb-2 uppercase font-bold text-xs text-gray-700"
                for="meeting">
                type of meeting
               </label>
               <input type="text"

                class="border border-gray-400 p-2 w-full"
                placeholder="consultation/health coaching"
                name="meeting"
                id="meeting"
               
                required>
             
               @error('meeting')
<p class="text-red-500 text-xs mt-1">{{ $message }}</p>
              @enderror
           </div>
     
      <div  class="mb-6">
         <x-form.button>submit</x-form.button>
       </form> 
       </div>
      <p class="italic  mt-4 text-zinc-700 text-center">if you have an account already <a href="/login" class="text-zinc-400 hover:text-zinc-900">log in here</a></p> 
    </main>
</section>

</x-layout>