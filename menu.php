<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Call us For Any Plumbing</title>

    <link rel="stylesheet" href="assets/css/style.css">
    <link rel="stylesheet" href="assets/css/input.css">
    
    <!-- tailwindcss -->
    <script src="https:unpkg.com/@tailwindcss/browser@4" ></script> 
    <!-- jquery -->
    <script src="https://code.jquery.com/jquery-3.7.1.js"></script>

    <!-- carousel -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/slick-carousel/1.9.0/slick.min.css" integrity="sha512-yHknP1/AwR+yx26cB1y0cjvQUMvEa2PFzt1c9LlS4pRQ5NOTZFWbhBig+X9G9eYW/8m0/4OXNx8pxJ6z57x0dw==" crossorigin="anonymous" referrerpolicy="no-referrer" />
  
    <script src="https://cdnjs.cloudflare.com/ajax/libs/slick-carousel/1.9.0/slick.min.js" integrity="sha512-HGOnQO9+SP1V92SrtZfjqxxtLmVzqZpjFFekvzZVWoiASSQgSr4cw9Kqd2+l8Llp4Gm0G8GIFJ4ddwZilcdb8A==" crossorigin="anonymous" referrerpolicy="no-referrer"></script>

        <!-- Leafletjs  -->
    <link rel="stylesheet" href="https://unpkg.com/leaflet@1.9.4/dist/leaflet.css" integrity="sha256-p4NxAoJBhIIN+hmNHrzRCf9tD/miZyoHS5obTRR9BMY=" crossorigin="" />

</head>

<body>
    <div class="header-menu sticky top-0 z-100 bg-[#fdfdfd] shadow-[0_4px_24px_rgba(0,0,0,0.05)] ">
        <div class="container">
            <div class="py-2">
              <div class="flex justify-between items-center">
          
                <!-- Logo -->
                <div class="w-fit">
                  <a href="home.php"><img class="ml-0" src="assets/img/logo.png" alt="Logo"></a>
                </div>
          
                <!-- Navigation Menu
                <div class=" roboto flex flex-grow font-medium justify-end ">
                  <ul class="flex gap-10 items-center text-[14px] text-[#222222]  mr-10">
                    <li class=" group " ><a class="w-fit block border-b-3 border-transparent group-hover:border-[#DD3142] transition duration-200" href="#">Home</a></li>
                    <li class=" group "><a class="w-fit block border-b-3 border-transparent group-hover:border-[#DD3142] transition duration-200" href="#">About Us</a></li>
                    <li class=" group "><a class="w-fit block border-b-3 border-transparent group-hover:border-[#DD3142] transition duration-200" href="#">Services</a></li>
                    <li class=" group "><a class="w-fit block border-b-3 border-transparent group-hover:border-[#DD3142] transition duration-200" href="#">Blogs</a></li>
                    <li class=" group "><a class="w-fit block border-b-3 border-transparent group-hover:border-[#DD3142] transition duration-200" href="#">Contact</a></li>
                  </ul>
                </div> -->

                <!-- php menu  -->

              <div class="php-menu">
                <?php
                function is_active($check) {
                  $requested_uri = $_SERVER['REQUEST_URI'];
                  $search = strpos($requested_uri,$check);
                  
                  if ($search !== FALSE) {
                    return 'active';
                  };
                };

                $menu = [
                  'Home' => 'home',
                  'About Us' => 'about',
                  'Services' => 'services',
                  'Blogs' => 'blogs',
                  'Contact' => 'contact'
                  
                ];              
                ?>

                <ul class="flex gap-8 items-center text-[14px] font-medium text-[#222222]  mr-10">
                  <?php foreach ($menu as $label => $link) : ?>

                  <li class=" group  "> <a class="<?php echo is_active($link);?> px-2 py-1 w-fit block border-b-3 border-transparent group-hover:border-[#DD3142] transition duration-200" 
                          href="<?php echo $link;?>.php"><?php echo $label;?></a></li>
                  <?php endforeach; ?>
                </ul>

                <style>
                  li a.active {
    background-color: #DD3142;
    padding-right: 5px;
    padding-left: 5px;
    border-radius: 5px;
    color: white;
    font-weight: 500;}
                </style>

                </div>

                <!-- CTA Button -->
                <div>
                  <a class="bg-[#DD3142] text-[12px] font-bold text-white uppercase rounded-sm py-2 px-2" href="#">
                    request a call back
                  </a>
                </div>
          
              </div>
            </div>
          </div>
          
    </div>




