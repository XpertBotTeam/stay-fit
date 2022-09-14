<!-- This example requires Tailwind CSS v2.0+ -->
<!--
  This example requires updating your template:

  ```
  <html class="h-full bg-gray-100">
  <body class="h-full">
  ```
   <script src="https://cdn.tailwindcss.com"></script>
-->
<link href="https://cdnjs.cloudflare.com/ajax/libs/tailwindcss/2.2.19/tailwind.min.css" rel="stylesheet">
    <style>
        @import url('https://fonts.googleapis.com/css?family=Karla:400,700&display=swap');

        .font-family-karla {
            font-family: karla;
        }
    </style>

    <!-- AlpineJS -->
    <script src="https://cdn.jsdelivr.net/gh/alpinejs/alpine@v2.x.x/dist/alpine.min.js" defer></script>
    <!-- Font Awesome -->
    <script src="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.13.0/js/all.min.js" integrity="sha256-KzZiKy0DWYsnwMF+X1DvQngQ2/FxF7MF3Ff72XcpuPs=" crossorigin="anonymous"></script>
<script src="https://cdn.tailwindcss.com"></script>



<script src="//unpkg.com/alpinejs" defer></script>


<div  class="min-h-full">

<nav class="">
  <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
    <div class="flex items-center justify-between h-16">
      <div class="flex items-center">
        <div class="flex-shrink-0">
        <a href="/"> <img class="h-10 w-10" src="/images/HatchfulExport-All (2)/logo.png" alt="Workflow">
     </a>  
      </div>
        <div class="hidden md:block">
          <div class="ml-10 flex items-baseline space-x-4 ">
          <a href="/" class="text-gray-600 hover:bg-gray-700 hover:text-white px-3 py-2 rounded-md text-sm font-medium " >Home</a>

            <a href="customizedmeal" class="text-gray-600 hover:bg-gray-700 hover:text-white px-3 py-2 rounded-md text-sm font-medium " >customized meals plans</a>

            <a href="meal" class="text-gray-600 hover:bg-gray-700 hover:text-white px-3 py-2 rounded-md text-sm font-medium">meals and dessert</a>

            <a href="#" class="text-gray-600 hover:bg-gray-700 hover:text-white px-3 py-2 rounded-md text-sm font-medium">consultation</a>

            <a href="stayfit" class="text-gray-600 hover:bg-gray-700 hover:text-white px-3 py-2 rounded-md text-sm font-medium">Stay_fit</a>
            <a href="#" class="text-gray-600 hover:bg-gray-700 hover:text-white px-3 py-2 rounded-md text-sm font-medium">1:1 health coaching</a>
            <a href="shop" class="text-gray-600 hover:bg-gray-700 hover:text-white px-3 py-2 rounded-md text-sm font-medium " >shop</a>
            
          </div>
        </div>
      </div>

     
        
@auth
          <!-- Profile dropdown -->
          <x-dropdown>
              <x-slot name="trigger">
<button class="text-xs font-bold uppercase">Welcome {{ auth()->user()->name }}! </button>
              </x-slot>
              @can('admin')
              <x-dropdownitem href="dashboard" :active="request()->is('dashboard')">dashboard</x-dropdown-item>
    @endcan
   <x-dropdownitem href="logout" :active="request()->is('logout')">logout</x-dropdown-item>

<form action="/logout" method="POST" class="hidden" id="logout-form">
@csrf

   
</form>
          </x-dropdown>
       
      
       @else
       <div class="hidden md:block">
       <div class="ml-4 flex  items-center md:ml-6">

    <a href="/register" >          <x-normalbutton>register</x-normalbutton> </a>
   <a href="/login" >    <x-normalbutton>log in</x-normalbutton></a>
      </div>
       </div>
    
       @endauth   


              <!--
                Dropdown menu, show/hide based on menu state.

                Entering: "transition ease-out duration-100"
                  From: "transform opacity-0 scale-95"
                  To: "transform opacity-100 scale-100"
                Leaving: "transition ease-in duration-75"
                  From: "transform opacity-100 scale-100"
                  To: "transform opacity-0 scale-95"
              -->
              <!-- <div class="origin-top-right absolute right-0 mt-2 w-48 rounded-md shadow-lg py-1 bg-white ring-1 ring-black ring-opacity-5 focus:outline-none" role="menu" aria-orientation="vertical" aria-labelledby="user-menu-button" tabindex="-1">
 Active: "bg-gray-100", Not Active: "" -->
                            <!--    <a href="#" class="block px-4 py-2 text-sm text-gray-700" role="menuitem" tabindex="-1" id="user-menu-item-0">Your Profile</a>

                <a href="#" class="block px-4 py-2 text-sm text-gray-700" role="menuitem" tabindex="-1" id="user-menu-item-1">Settings</a>

                <a href="#" class="block px-4 py-2 text-sm text-gray-700" role="menuitem" tabindex="-1" id="user-menu-item-2">Sign out</a>
              </div> -->
          
         
              <div class="mr-2 flex md:hidden">
          <!-- Mobile menu button -->
          
       
    <!-- Mobile menu, show/hide based on menu state. -->
    <!-- <div class="md:hidden" id="mobile-menu">
      <div class="px-2 pt-2 pb-3 space-y-1 sm:px-3">
 Current: "bg-gray-900 text-white", Default: "text-gray-300 hover:bg-gray-700 hover:text-white" -->
        <a href="#" class="text-gray-500 hover:bg-gray-700 hover:text-white block px-3 py-2 rounded-md text-base font-medium">stay_fit</a>

        <a href="#" class="text-gray-500 hover:bg-gray-700 hover:text-white block px-3 py-2 rounded-md text-base font-medium">customized meal plan</a>

        <a href="#" class="text-gray-500 hover:bg-gray-700 hover:text-white block px-3 py-2 rounded-md text-base font-medium">meals and dessert</a>

        <a href="#" class="text-gray-500 hover:bg-gray-700 hover:text-white block px-3 py-2 rounded-md text-base font-medium">Consultation</a>

        <a href="#" class="text-gray-500 hover:bg-gray-700 hover:text-white block px-3 py-2 rounded-md text-base font-medium">1:1 health coaching</a>
        <a href="#" class="text-gray-500 hover:bg-gray-700 hover:text-white block px-3 py-2 rounded-md text-base font-medium">shop</a>
      </div>
      
      <!-- <div class="pt-4 pb-3 border-t border-gray-700">
        <div class="flex items-center px-5">
          <div class="flex-shrink-0">          
          </div> -->
          
       
      </div>
    </div>
  </nav>

  {{ $slot }}
      <!-- /End replace -->
  </div>
  <div>
    
  </div>
      <x-flash/>
  <link rel="stylesheet" href="/app.css">






