

<x-layout>
 

   
 <header class="w-full container mx-auto">
                     <div class="flex flex-col items-center py-12">
                         <a class="font-bold text-gray-800 uppercase hover:text-gray-700 text-5xl" href="#">
                             Health Blog
                         </a>
                         <p class="text-lg text-gray-600">
                            know more about nutrition and health
                         </p>
                     </div>
                 </header>
    
 
         <!-- Posts Section -->
         <section class="w-full md:w-2/3 flex flex-col items-center px-3">
 
         @foreach($blogs as $blog)
             <article class="flex flex-col shadow my-4">
                 <!-- Article Image -->
                 <a href="#" class="hover:opacity-75">
                     <img src="{{ $blog['urlToImage'] }}">
                 </a>
                 <div class="bg-white flex flex-col justify-start p-6">
                     <a href="#" class="text-blue-700 text-sm font-bold uppercase pb-4">Health</a>
                     <a href="{{ $blog['url'] }}" class="text-3xl font-bold hover:text-gray-700 pb-4">{{ $blog['title'] }}</a>
                     <p href="#" class="text-sm pb-3">
                         By <a href="#" class="font-semibold hover:text-gray-800">{{ $blog['author'] }}</a>, {{ $blog['publishedAt'] }}
                     </p>
                     <a href="#" class="pb-6">{{ $blog['content'] }}</a>
                     <a href="{{ $blog['url'] }}" class="uppercase text-gray-800 hover:text-black">Continue Reading <i class="fas fa-arrow-right"></i></a>
                 </div>
             </article>
 @endforeach
           
 
             <!-- Pagination -->
             <div class="flex items-center py-8">
             <a href="/" class="h-10 w-10 font-semibold text-gray-800 hover:text-gray-900 text-sm flex items-center justify-center ml-3">previous<i class="fas fa-arrow-left ml-2"></i></a>
             <a href="/" class="h-10 w-10  hover:bg-blue-600 font-semibold text-gray-800 text-sm flex items-center justify-center">1</a>
                 <a href="home2" class="h-10 w-10 bg-blue-800 font-semibold text-white hover:bg-blue-600 hover:text-white text-sm flex items-center justify-center">2</a>
   
             </div>
 
         </section>
 
         <!-- Sidebar Section -->
         <aside class="w-full md:w-1/3 flex flex-col items-center px-3">
 
             <div class="w-full bg-white shadow flex flex-col my-4 p-6">
                 <p class="text-xl font-semibold pb-5">About Us</p>
                 <p class="pb-2">we are a big team of nutritionist and dietitian with high degree and expertise with more than +1k clients we can help you with all infos you need to know about nutrition,fitness,meal prep,workout tutorial,health coaching and much more.</p>
                 <a href="#" class="w-full bg-blue-800 text-white font-bold text-sm uppercase rounded hover:bg-blue-700 flex items-center justify-center px-2 py-3 mt-4">
                     Get to know us
                 </a>
             </div>
 
             <div class="w-full bg-white shadow flex flex-col my-4 p-6">
                 <p class="text-xl font-semibold pb-5">Instagram</p>
                 <div class="grid grid-cols-3 gap-3">
                     <img class="hover:opacity-75" src="https://source.unsplash.com/collection/1346951/150x150?sig=1">
                     <img class="hover:opacity-75" src="https://source.unsplash.com/collection/1346951/150x150?sig=2">
                     <img class="hover:opacity-75" src="https://source.unsplash.com/collection/1346951/150x150?sig=3">
                     <img class="hover:opacity-75" src="https://source.unsplash.com/collection/1346951/150x150?sig=4">
                     <img class="hover:opacity-75" src="https://source.unsplash.com/collection/1346951/150x150?sig=5">
                     <img class="hover:opacity-75" src="https://source.unsplash.com/collection/1346951/150x150?sig=6">
                     <img class="hover:opacity-75" src="https://source.unsplash.com/collection/1346951/150x150?sig=7">
                     <img class="hover:opacity-75" src="https://source.unsplash.com/collection/1346951/150x150?sig=8">
                     <img class="hover:opacity-75" src="https://source.unsplash.com/collection/1346951/150x150?sig=9">
                 </div>
                 <a href="#" class="w-full bg-blue-800 text-white font-bold text-sm uppercase rounded hover:bg-blue-700 flex items-center justify-center px-2 py-3 mt-6">
                     <i class="fab fa-instagram mr-2"></i> Follow @dgrzyb
                 </a>
             </div>
 
         </aside>
 
     </div>
 
     <footer class="w-full border-t bg-white pb-12">
         <div
             class="relative w-full flex items-center invisible md:visible md:pb-12"
             x-data="getCarouselData()"
         >
             <button
                 class="absolute bg-blue-800 hover:bg-blue-700 text-white text-2xl font-bold hover:shadow rounded-full w-16 h-16 ml-12"
                 x-on:click="decrement()">
                 &#8592;
             </button>
             <template x-for="image in images.slice(currentIndex, currentIndex + 6)" :key="images.indexOf(image)">
                 <img class="w-1/6 hover:opacity-75" :src="image">
             </template>
             <button
                 class="absolute right-0 bg-blue-800 hover:bg-blue-700 text-white text-2xl font-bold hover:shadow rounded-full w-16 h-16 mr-12"
                 x-on:click="increment()">
                 &#8594;
             </button>
         </div>
         <div class="w-full container mx-auto flex flex-col items-center">
             <div class="flex flex-col md:flex-row text-center md:text-left md:justify-between py-6">
                 <a href="#" class="uppercase px-3">About Us</a>
                 <a href="#" class="uppercase px-3">Privacy Policy</a>
                 <a href="#" class="uppercase px-3">Terms & Conditions</a>
                 <a href="#" class="uppercase px-3">Contact Us</a>
             </div>
             <div class="uppercase pb-6">&copy; Stay_fit.com</div>
         </div>
     </footer>
 
     <script>
         function getCarouselData() {
             return {
                 currentIndex: 0,
                 images: [
                    'https://images.unsplash.com/photo-1477332552946-cfb384aeaf1c?ixlib=rb-1.2.1&ixid=MnwxMjA3fDB8MHxzZWFyY2h8Mnx8aGVhbHRofGVufDB8fDB8fA%3D%3D&auto=format&fit=crop&w=500&q=60',
                    'https://images.unsplash.com/photo-1610348725531-843dff563e2c?ixlib=rb-1.2.1&ixid=MnwxMjA3fDB8MHxzZWFyY2h8MTd8fG51dHJpdGlvbnxlbnwwfHwwfHw%3D&auto=format&fit=crop&w=500&q=60',
                    'https://images.unsplash.com/photo-1494390248081-4e521a5940db?ixlib=rb-1.2.1&ixid=MnwxMjA3fDB8MHxzZWFyY2h8MjF8fGhlYWx0aHxlbnwwfHwwfHw%3D&auto=format&fit=crop&w=500&q=60',
                    'https://images.unsplash.com/photo-1514995669114-6081e934b693?ixlib=rb-1.2.1&ixid=MnwxMjA3fDB8MHxzZWFyY2h8MTF8fG51dHJpdGlvbnxlbnwwfHwwfHw%3D&auto=format&fit=crop&w=500&q=60',
                    'https://images.unsplash.com/photo-1583454110551-21f2fa2afe61?ixlib=rb-1.2.1&ixid=MnwxMjA3fDB8MHxzZWFyY2h8N3x8Zml0bmVzc3xlbnwwfHwwfHw%3D&auto=format&fit=crop&w=500&q=60',
                    'https://images.unsplash.com/photo-1494597564530-871f2b93ac55?ixlib=rb-1.2.1&ixid=MnwxMjA3fDB8MHxzZWFyY2h8MTl8fGZpdG5lc3N8ZW58MHx8MHx8&auto=format&fit=crop&w=500&q=60',
                    'https://images.unsplash.com/photo-1493770348161-369560ae357d?ixlib=rb-1.2.1&ixid=MnwxMjA3fDB8MHxzZWFyY2h8Mjh8fG51dHJpdGlvbnxlbnwwfHwwfHw%3D&auto=format&fit=crop&w=500&q=60',
                    'https://images.unsplash.com/photo-1444491741275-3747c53c99b4?ixlib=rb-1.2.1&ixid=MnwxMjA3fDB8MHxzZWFyY2h8Mzh8fGhlYWx0aHxlbnwwfHwwfHw%3D&auto=format&fit=crop&w=500&q=60',
                    'https://images.unsplash.com/photo-1484627147104-f5197bcd6651?ixlib=rb-1.2.1&ixid=MnwxMjA3fDB8MHxzZWFyY2h8NDZ8fGhlYWx0aHxlbnwwfHwwfHw%3D&auto=format&fit=crop&w=500&q=60',
                 ],
                 increment() {
                     this.currentIndex = this.currentIndex === this.images.length - 6 ? 0 : this.currentIndex + 1;
                 },
                 decrement() {
                     this.currentIndex = this.currentIndex === this.images.length - 6 ? 0 : this.currentIndex - 1;
                 },
             }
         }
     </script>
    
 </x-layout>
 