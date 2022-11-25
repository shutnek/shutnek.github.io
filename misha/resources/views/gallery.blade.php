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
<div style="background-color:#8cc63e">
<a href="welcome"><img src="/images/liz.png" height="100" width="100"></img></a>
</div>
                 

            <!-- Page Content -->
            <main>
<p style="background-color: "#8cc63e">
              <center><br>Наши удивительные звери</br></center>
<br></br>
<style>
.pic{
position: relative;
left: 30%;

}
</style>
<div class="pic">
<img src="/images/chameleon.jpg" width="300" height="300"></img>
</div>
<div style="position:relative; left:50%;">
<img src="/images/tigr.jpg" width="300" height="300"></img>
</div>
<div style="position:relative; left:30%;">
<img src="/images/bear.jpg" width="300" height="300"></img>
</div>
<div style="position:relative; left:50%;">
<img src="/images/fenek.jpg" width="300" height="300"></img>
</div>
</p>
            </main>
        </div>
    </body>
</html>

