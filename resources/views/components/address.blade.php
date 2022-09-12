<x-layout>

<section class="px-6 py-8">
    <main class="max-w-lg mx-auto mt-10 ">
      <x-panel>
       <h1 class="text-center font-bold text-xl">Log In</h1>
       <form class="mt-10" action="sessions" method="POST">
          @csrf
          <x-form.input name="name"  autocomplete="username" type="text" />
     <x-form.input name="address"  autocomplete="username" type="text" />
      <x-form.input name="number" type="text"  autocomplete="new-password"/>
    <x-form.button>submit</x-form.button>
       </form> 
       </div>
    </main>
   </x-panel>
</section>
</x-layout>