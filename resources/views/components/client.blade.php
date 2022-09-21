<x-layout>

 <section class="px-6 py-8">
    <main class="max-w-lg mx-auto mt-10 ">
      <x-panel>
       <h1 class="text-center font-bold text-xl">Client Info</h1>
       <form class="mt-10" action="/client" method="POST">
          @csrf
      
     <x-form.input name="height"   />
      <x-form.input name="weight" />
      <x-form.input name="age" />
      <x-form.input name="gender" />
<!-- <div class=" uppercase font-bold text-xs text-gray-700 mt-5 p-2 w-full"> gender</div>
   
 <div class="flex items-center mb-4">
    <input id="default-radio-1" type="radio" value="" name="default-radio" class="w-4 h-4 text-blue-600 bg-gray-100 border-gray-300 focus:ring-blue-500 dark:focus:ring-blue-600 dark:ring-offset-gray-800 focus:ring-2 dark:bg-gray-700 dark:border-gray-600">
    <label for="gender" class="ml-2 text-sm font-medium text-gray-900 dark:text-gray-300">female</label>
</div>
<div class="flex items-center">
    <input checked="" id="default-radio-2" type="radio" value="" name="default-radio" class="w-4 h-4 text-blue-600 bg-gray-100 border-gray-300 focus:ring-blue-500 dark:focus:ring-blue-600 dark:ring-offset-gray-800 focus:ring-2 dark:bg-gray-700 dark:border-gray-600">
    <label for="gender" class="ml-2 text-sm font-medium text-gray-900 dark:text-gray-300">male</label> 

</div> -->
<x-form.input name="caloriesintake" />
<x-form.input name="activity" />

<x-form.input name="goals" />

    <x-form.button>submit</x-form.button> 
       </form> 
       </div>
    </main>
   </x-panel>
</section> 



</x-layout>