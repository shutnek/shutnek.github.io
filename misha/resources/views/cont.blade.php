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
              <center><br></br></center>
<br></br>
<style>
.pic{
position: relative;
float right;

}
</style>
<div>
<p style="font-size:200%">Email<div style="margin-left:53%;font-size:200%">Главный по мини пигам</div></p>
<br>example@yandex.ru</br>

</div>
<br></br>
<div>
<p style="font-size:200%">Телефон</p>
<br>+7 916 936-23-06</br>
<div style="margin-left:50%"><img src="/images/bigpig.jpg"width="500" height="500"></img></div>
</div>
<br></br>
<p style="font-size:200%">Соц сети</p>
<a href="https://vk.com/moscow_zoo"><img src="/images/vk.png" height="100" width="100"></a>

            </main>
        </div>
    </body>
</html>

