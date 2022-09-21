
<x-layout>
  <style>
    .w-101{
   width: 81rem;
    }
</style>
<div class="flex flex-row">
    <div ><img src="images/background/consultation.jpeg" class="w-101" alt=""></div>
</div>
<div class="flex flex-col mt-8  mr-3 ">
 
<div class="font-bold  uppercase border-b-2 ml-6 text-xl border-blue-700 b-4 ml-5 mb-4">Book an online consultation<</div>
 
    <div class="pb-4 ml-4">for consultation with our dietitan click below: </div>
    @auth  
    <div >
        <a href="meeting" class="rounded-full ml-4  p-2 mb-4 bg-blue-600 hover:bg-gray-400 text-white italic font-semibold"> book a consultation</a>
    </div>
      @else
      <div >
        <a href="register" class="rounded-full ml-4  p-2 mb-4 bg-blue-600 hover:bg-gray-400 text-white italic font-semibold"> book a consultation</a>
    </div>
   
   
   @endauth <div><p class="break-all font-medium text-md ml-4 p-4">a 15-minute consultation on Stay fit Center online platform or in our clinic. Prior to your consultation appointment, please install “ZOOM client for meetings” application on your computer or mobile device. To install it on your computer, please <a href="https://zoom.us/download">click here</a> . To install it on your Apple mobile device, please <a href="https://apps.apple.com/us/app/zoom-cloud-meetings/id546505307">click here</a> . To install it on your Android mobile device, please <a href="https://play.google.com/store/apps/details?id=us.zoom.videomeetings&hl=en&gl=US"> click here</a>. If you couldn’t install the application, you can use your web browser from your computer. You can join up to 15 minutes prior to the consultation by clicking on the link sent to you upon the consultation confirmation or thru the appointment created on your calendar. To take an appointment at Bellevue clinics, please call us on 0096178940187. For technical assistance, please contact the IT team on extension 7505 during working hours from Monday to Friday from 9 am to 5 pm.</div>
</p> </div>
<div class="mt-6 uppercase text-xl font-bold mb-3 ml-6 ">terms and conditions</div>
<div>
    <p class="break-all font-medium text-md p-4 ml-4 mr-5">
    Telemedicine consultation offered by Stay fit Center relies on online information and does not replace clinical examination. Physicians may not become aware of certain facts that affect the diagnosis and the treatment. Physicians and stay fit Center are not responsible for the clinical evolution and follow-up of your condition. If you do not agree to the above, you may leave this application and your appointment is void. By continuing, you agree to the following: Electronic information transmission is risky. There is no guarantee about the accuracy and confidentiality of the diagnosis or results based on this consultation. I discharge the physician, the Bellevue Medical Center, and its medical staff, of any responsibility, claim, or compensation resulting from this consultation and its results of any kind. I acknowledge that I have read, understood, and agreed to all of the above without any reservation. My consent via e-mail is producing all its legal effects without the need for any further action. 
    </p>
</div>
</x-layout>