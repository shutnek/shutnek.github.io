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
              <center><br>Узнайте больше о нас</br></center>
<br></br>
<style>
.pic{
position: relative;
left: 30%;

}
</style>
<style>
.pig{
display: flex;
flex-wrap: wrap;

}
</style>
<style>
.pi{
display: flex;
flex-wrap: wrap;
 border-width: 1px;
    border-color: Black;
}
</style>
<div >
Exotic zoo — это развлекательная, познавательная живая выставка усатых, рогатых, копытных и хвостатых. В отличии от обычного зоопарка или заповедника, его уникальность в том, что питомцев можно потрогать и покормить!

В зоопарке представлены домашние и дикие животные: страусы «Эму», овцы, камерунские козы, кролики, экзотические птицы, дикобраз, хорёк, белка, цыплята, поросята «Мини микро пиги», морские свинки, а так же рептилии! 
</div>

 <ul>
        <li>
          <div class="pig" >
          <img src="/images/pig.jpg"class="pi" width="312" height="300" >
          <img src="/images/pig2.jpeg"class="pi" width="312" height="300">
<img src="/images/pig3.jpg"class="pi" width="312" height="300" >
          <img src="/images/pig4.jpg"class="pi" width="312" height="300">
<img src="/images/pig5.jpeg"class="pi" width="312" height="300" >
          <img src="/images/pig 7.jpg"class="pi" width="312" height="300">
         </div>
        </li>

          
        

</ul>




<div>
Опытные сотрудники зоопарка с удовольствием расскажут об интересных фактах из жизни наших питомцев.

Это общение принесет Вам много удовольствия и приятных эмоций!
Добро пожаловать в наши зоопарки!
</div>

</p>
            </main>
        </div>
    </body>
</html>