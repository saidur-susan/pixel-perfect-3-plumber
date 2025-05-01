<?php include('menu.php');?>

    

<div class="max-w-[1440px] h-[304px] mx-auto bg-[url(assets/img/image-4.png)] bg-contain bg-repeat-round bg-blend-hard-light">
                                             
    <div class="bg-linear-65 from-[#DD3142] to-[#C4C4C400] h-full ">
        <div class=" container flex flex-col justify-center ">
            <div class="max-w-[432px] mt-[126px]">
                <h2 class="font-black text-left text-[#EEFF06] uppercase ">Contact us</h2>
            <h4 class="text-[14px]  roboto text-left text-white">Please feel free to contact us in regards to all matters and we will try to get back to you as soon as possible. </h4>
            </div>
        </div>
    </div>
    
</div>


<div class="container">
    <div class="w-[1070px] ">
        <h4 class="roboto text-[#000000] text-[40px] text-center font-bold mt-[63px] mb-[23px]">Get in touch</h4>

        <div class="grid grid-cols-1 md:grid-cols-2 gap-x-[40px] gap-y-[51px]">

            <div class="w-full ">
                <div class="flex">
                    <h4 class="josefin text-[16px] mb-2 w-[85px]">Full name </h4> <input class="ml-2  w-full focus:outline-none" type="text" >
                </div>
                <svg width="514" height="1" viewBox="0 0 514 1" fill="none" xmlns="http://www.w3.org/2000/svg">
                    <path d="M0 0.5H513.909" stroke="#707070"/>
                    </svg>
                    
            </div>

            <div class="w-full ">
                <div class="flex">
                    <h4 class="josefin text-[16px] mb-2 w-[130px]">Email address </h4> <input class="ml-2 w-full focus:outline-none" type="email" >
                </div>
                <svg width="514" height="1" viewBox="0 0 514 1" fill="none" xmlns="http://www.w3.org/2000/svg">
                    <path d="M0 0.5H513.909" stroke="#707070"/>
                    </svg>
                    
            </div>

            <div class="w-full ">
                <div class="flex">
                    <h4 class="josefin text-[16px] mb-2 w-[150px]">Contact number</h4> <input class="ml-2  w-full focus:outline-none" type="number" >
                </div>
                <svg width="514" height="1" viewBox="0 0 514 1" fill="none" xmlns="http://www.w3.org/2000/svg">
                    <path d="M0 0.5H513.909" stroke="#707070"/>
                    </svg>
                    
            </div>

            <div class="w-full ">
                <div class="flex">
                    <h4 class="josefin text-[16px] mb-2 w-[50px]">Subject </h4> <input class="ml-2 w-full focus:outline-none" type="text" >
                </div>
                <svg width="514" height="1" viewBox="0 0 514 1" fill="none" xmlns="http://www.w3.org/2000/svg">
                    <path d="M0 0.5H513.909" stroke="#707070"/>
                    </svg>
                    
            </div>
            
        </div>

        <div class="w-full mt-[51px] mb-[33px] ">
            <div class="flex">
                <h4 class="josefin text-[16px] mb-2 w-[85px]">Description </h4> <input class="ml-2 w-full focus:outline-none" type="text" >
            </div>
            <svg width="1070" height="1" viewBox="0 0 1070 1" fill="none" xmlns="http://www.w3.org/2000/svg">
                <path d="M0 0.5H1070" stroke="#707070"/>
                </svg>
                
        </div>

        <!-- CTA Button -->
        <div class="flex justify-end mb-[60px]">
            <a class="roboto px-[24px] pt-[16px] pb-[13px] bg-[#DD3142] text-[20px] font-bold text-white uppercase rounded-full " href="#">
                Send A MEssage
            </a>
          </div>
    </div>
</div>


<div class="container">
    <div class="py-[33px]">
        <div class="flex flex-col md:flex-row gap-10 justify-between ">

            <div class="text-side">
                <h4 class="roboto text-[18px] text-[#DD3142] font-bold">Contact Us</h4>
                <h4 class="roboto text-[14px] text-[#000000] mb-[37px] max-w-[377px]">It is a long established fact that a reader will be distracted by the readable content of a page when looking at its layout.</h4>

                <h4 class="roboto text-[14px] text-[#DD3142] font-medium">Business hours:</h4>
                <h4 class="roboto text-[14px] text-[#000000] mb-[24px]">Monday to Saturday 9:30 am - 4:30 pm</h4>

                <h4 class="roboto text-[14px] text-[#DD3142] font-medium">Address:</h4>
                <h4 class="roboto text-[14px] text-[#000000] mb-[24px]">Main Road, Meherpur Sadar, Meherpur</h4>

                <h4 class="roboto text-[14px] text-[#DD3142] font-medium">Email:</h4>
                <h4 class="roboto text-[14px] text-[#000000] mb-[24px]">abc@abc.com</h4>

                <h4 class="roboto text-[14px] text-[#DD3142] font-medium">Phone:</h4>
                <h4 class="roboto text-[14px] text-[#000000] ">1800 - 458495-4455</h4>
            </div>


            <div class="map-side">
                <div id="map" class="w-[661px] h-[354px] bg-red-200">

                </div>

            </div>
        </div>
    </div>
</div>

	



<!-- L.marker([51.5, -0.09]).addTo(map)
    .bindPopup('A pretty CSS popup.<br> Easily customizable.')
    .openPopup(); -->

<script src="https://unpkg.com/leaflet@1.9.4/dist/leaflet.js" integrity="sha256-20nQCchB9co0qIjJZRGuk2/Z9VM+kNiyxNV1lvTlZBo=" crossorigin=""></script>
<script>
    var map = L.map('map').setView([23.7740362, 88.63118172], 12);

    var osm = L.tileLayer('https://tile.openstreetmap.org/{z}/{x}/{y}.png', {
    attribution: '&copy; <a href="https://www.openstreetmap.org/copyright">OpenStreetMap</a> contributors'
});
osm.addTo(map);

L.marker([23.7740362, 88.63118172]).addTo(map)
    .bindPopup('Home District<br> মেহেরপুর')
    .openPopup();
</script>


<?php include('footer.php');?>