<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <title>@yield('title')</title>
    
    <!-- Tailwind CSS Link -->
    <link rel="stylesheet" 
    href="https://cdnjs.cloudflare.com/ajax/libs/tailwindcss/2.0.1/tailwind.min.css">

    <!-- Fontawesome Link -->
    <link href="https://pro.fontawesome.com/releases/v5.10.0/css/all.css" rel="stylesheet">
    <style>
      .body{            
                /*Fondo*/
        background-image: url(https://acegif.com/wp-content/uploads/gifs/race-car-19.gif);
        background-position: center;
                background-size: cover;
                background-attachment: fixed; 
      }
    </style>
  </head>
  <body style="
                background-image: url(https://acegif.com/wp-content/uploads/gifs/race-car-19.gif);background-position: center;background-size: cover; background-attachment: fixed; }" class="text-gray-800" style="font-family:Verdana, Geneva, Tahoma, sans-serif">
    
    <main class="p-16 flex justify-center">
        @yield('content')
    </main>
  
  </body>
</html>