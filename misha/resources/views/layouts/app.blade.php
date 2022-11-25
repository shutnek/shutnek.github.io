<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <meta name="csrf-token" content="{{ csrf_token() }}">

        <title>{{ config('app.name', 'Laravel') }}</title>

        <!-- Fonts -->
        <link rel="stylesheet" href="https://fonts.bunny.net/css2?family=Nunito:wght@400;600;700&display=swap">

        <!-- Scripts -->
        @vite(['resources/css/app.css', 'resources/js/app.js'])
    </head>
    <body background="/images/bg.jpg" class="font-sans antialiased">
        <div class="min-h-screen">
            @include('layouts.navigation')

            <!-- Page Heading -->
            @if (isset($header))
                <header>

  
                
            @endif
</header>
<style>
.but{
height: 50px;
font-size: 30px;
text-align: center;



}
</style>

                  <div class="but" display: block; style="background-color:#8cc63e" Width: 300px;>Карта</div> 
            <!-- Page Content -->
            <main>
<p style="background-color: "#8cc63e">
              <center><br>Добро пожаловать в наш зоопарк</br></center>
<br></br>
<center><img src="/images/map.png"></img></center>

</p>
            </main>
        </div>
    </body>
</html>


