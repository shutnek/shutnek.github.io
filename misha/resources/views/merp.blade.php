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
              <center><br>Наши события</br></center>
<br></br>
<table border="1" width="100%" style=" background: #8cc63e;">
<tr>
<td rowspan="2"><img src="/images/pig2.jpg" height="200" width="200"></img></td><td><center>Театр микро мини пигов</center></td>
</tr>
<tr>
<td><center>25.11.2022 пройдет ежегодный театр минипигов, в нем вы познакомитись с Розочкой, Пятнышком и Фиалкой, а также увидите их представление</center></td>
</tr>
</table>
<br></br>
<table border="1" width="100%" style=" background: #8cc63e;">
<tr>
<td rowspan="2"><img src="/images/ham.jpg" height="200" width="200"></img></td><td><center>Цветовое шоу</center></td>
</tr>
<tr>
<td><center>26.11.2022 пройдет первое в мире цветовое шоу хамелионов, вы сможете увидить разнообразные картины сделаные с помощью хамелеонов и их окраса</center></td>
</tr>
</table>
<br></br>
<table border="1" width="100%" style=" background: #8cc63e;">
<tr>
<td rowspan="2"><img src="/images/volk.jpg" height="200" width="200"></img></td><td><center>Цитаты волка</center></td>
</tr>
<tr>
<td><center>27.11.2022 пройдет лекция профессионального зоолога, который раскажет как появились цитаты про волков и с каким поведением этих животных они связаны</center></td>
</tr>
</table>
</div>
<style>
.pic{
position: relative;
left: 30%;

}
</style>

</p>
            </main>
        </div>
    </body>
</html>
