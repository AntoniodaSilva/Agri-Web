
@extends('layouts.admin.body')
        @section('titulo','Home')

    @section('conteudo')

  <div style="text-align: center; background-color:rgb(110, 62, 0); color:white;" class="container-fluid p-5">
    <h1>Tenha o melhor cult</h1>
    <p></p>
  </div>
<div style="background-image: url({{ asset('assets/img/logo/1.jpg') }});

    <h1 style="color:rgb(183, 182, 130) ;">
   Descubra o Melhor Momento para Cultivar! </h1>
    <p></p>
  </div>
<div style="background-image: url({{ asset('assets/img/logo/4.jpg') }});
>>>>>>> antonio
 align-contents:center;
 height:800px; width:100%;
 background-size:cover;
 background-repeat:no-repeat;">
 <div style="
     color:white;
     text-align:center;
 ">
 <br><br><br>
    <h1 style="
        color:white;
        margin-left:4%;
        margin-right: 4px;
    ">Com a Nossa plataforma podera examinar o estado do seu solo para cultivo!</h1>
    <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Provident ex laudantium magnam voluptates aspernatur. <br>
         Pariatur quod voluptatibus, delectus quae perferendis necessitatibus saepe illum quidem molestiae rerum sunt nobis, sit tenetur!</p>
         <br><br><br><br><br><br><br><br><br>
    <button style="
        background-color:rgb(107, 116, 0);
        color:rgb(110, 62, 0);
        height:40px;
        width:200px;
        border-radius:10px;
        border: 2px solid #0000;

        "><a style="color:white; text-decoration: none;" href="{{ route('culturas') }}">Começar Inspeçao</a></button>

    <p style="font-size: 23px;
">Explore o Mapa Agrícola do Agri-web e saiba quando plantar cada cultura.<br> Navegue pelo mapa para encontrar informações sobre o momento ideal de plantio para cada tipo de planta.<br> Tome decisões informadas e aumente sua produtividade agrícola!

<br> Agri-web O Seu Guia para o Cultivo Ideal!  </p>
<br><br><br>
<div class="d-flex justify-content-center position-relative">
    <form action="{{route('search')}}" method="get" class="col-6 position-relative ">
        <div class="input-group">
            <input type="search" name="search" id="search" class="form-control pl-5 position-absolute top-0 start-0 pt-2  " style="height:50px; width: 120%; max-width: 650px ;border-radius: 20px;" placeholder="Faça a sua pesquisa na Agri-Web">
                <svg xmlns="http://www.w3.org/2000/svg" width="16" height="23" fill="currentColor" class="bi bi-search ml-4 mt-3 position-relative top-60 end-0 translate-middle-y" type="submit" style="color:black" viewBox="0 0 16 16" >
                    <path d="M11.742 10.344a6.5 6.5 0 1 0-1.397 1.398h-.001q.044.06.098.115l3.85 3.85a1 1 0 0 0 1.415-1.414l-3.85-3.85a1 1 0 0 0-.115-.1zM12 6.5a5.5 5.5 0 1 1-11 0 5.5 5.5 0 0 1 11 0"/>
                </svg>


        </div>
    </form>
</div>
 </div>
</div>

@endsection
