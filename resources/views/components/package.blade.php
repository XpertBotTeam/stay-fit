<x-layout>
<div class="bg-slate-300  w-full " >
   <div class="  bg-no-repeat  ml-36 pb-60 font-family-karla  ">

<header class=" w-full container mx-auto   pl-72">
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
                           </div>          
                     <div class="flex flex-center text-red-500 text-3xl">Congrats!</div>
                     <div class="flex flex-center text-lg text-red-500"> you win our 40% offer on this package</div>
                     <div class="flex flex-center text-lg text-red-500"> its only for 850$(per month) if you don't enter personal info please click below</div>
                     <div class="flex flex-center text-red-500 font-bold  hover:text-black uppercase text-3xl"><a href="/client"> Personal info</a></div>
    <main class="max-w-lg bg-slate-400 mt-2">
      <x-panel>
       <h1 class="text-center font-bold text-xl">stay_fit Package</h1>
       <form class="mt-10" action="package" method="POST">
          @csrf
          <x-form.input name="name"  autocomplete="username" type="text" />
     <x-form.input name="address"  autocomplete="username" type="text" />
      <x-form.input name="number" type="text"  autocomplete="new-password"/>
    <x-form.button>submit</x-form.button>
    
</form> 
       </main>
   </x-panel>

                    </x-layout>