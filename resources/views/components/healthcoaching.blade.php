<x-layout>
    <style>
        .w-0{
            width:45rem;
        }
.h-0{
    height: 28rem;
}
    </style>
    <div class="flex flex-row pl-96  pb-20 bg-blue-200 mt-4">
     <div class="flex flex-col  pt-10 ">
        <div class="text-3xl pl-36 uppercase">Health coaching</div>
    <div class="italic text-m  pl-32 uppercase pt-3"> Your health deserve to know more about it.</div>
    </div>
    </div>
    <div class="flex flex-row gap-5 mt-5 ml-56 mr-10">
    <div class="w-0 h-0"><img src="/images/background/health2.jpeg" alt=""></div>
    <div class="flex flex-col"> 
      <div class="font-bold italic text-lg">protect your health and mental health with us</div> 
    <div class="py-5 px-5  text-lg italic ">
        <ol class="list-decimal ">
         one month subscription
         <li class="px-3 py-2">3 meetings  on zoom (per month)</li>
         <li class="px-3 py-2"> teach you how to live a healthy lifestyle</li>
         <li class="px-3 py-2"> help you to improve your mental health</li>
         <li class="px-3 py-2">help you to build the diet you want depends on your goals</li>
         <li class="px-3 py-2">only with 150$</li>
        </ol>
    </div>
    @auth
           <div> 
        <a href="meeting"  class=" ml-8 p-4 bg-blue-800 text-white hover:bg-gray-400   font-medium rounded-full text-lg">start you journey!</a>
       </div>
       @else
       <div> 
        <a href="register"  class=" ml-8 p-4 bg-blue-800 text-white hover:bg-gray-400   font-medium rounded-full text-lg">start you journey!</a>
       </div>
       @endauth
    </div>
    </div>
    <div class="flex flex-col">
        <div class="uppercase font-bold  px-1 text-3xl py-4">what's health coaching?</div>
        <div >
            <p class="italic   px-4 text-base font-medium break-all">
            Just as a sports coach can help an athlete develop and excel at a sport, a health and wellness coach can help anyone excel at living their life, even — or especially — if they have chronic medical conditions. The coaching process is similar to talk therapy in that it involves two people discussing ideas and issues, but it is different in that the person who is being coached is in the driver’s seat, creating their goals as well as the strategies on how to arrive at these goals.
            </p>
        </div>
    </div>
    <div class="flex flex-col">
<div class="py-4 px-4">
    <img src="/images/background/healthy.jpeg"  alt="">
</div>
    </div>
    <div class="flex flex-col mb-10 ">
        <div class="uppercase font-bold text-3xl   px-1 py-4">why you need health coaching?</div>
        <div >
            <p class="italic break-all   px-4 text-base font-medium">
            A health coach gets you “unstuck” by helping you figure out what’s keeping you from reaching your health goals. Your coach regularly checks in with you by email, phone calls or in-person meetings, usually over the course of at least three months. During those conversations, a health coach asks questions to get you thinking about how you can overcome challenges.

“The most common obstacle people face is their own thoughts about themselves and about change,” Coates says. “Through motivational interviewing and cognitive behavioral therapy techniques, health coaches help people work through some of their thoughts. People find out what’s blocking them from following through with the changes they’d like to see.”
            </p>
        </div>
    </div>
</x-layout>