<?php
include_once './Classes/Adotante.class.php';
include_once './Classes/Animal.class.php';
include_once './Classes/Cachorro.class.php';
include_once './Classes/Gato.class.php';


    $adotante = new Adotante();

    $adotante->nome = 'Pedro';
    $adotante->idade = 17;
    $adotante->telefone = 'xxxxxxxxxxx'; 
    $adotante->email = 'xxxxxxx@xxxxxxxx'
    $adotante->endereco = 'rua xxxxxxxxxxx'; 
    $adotante->$temoutrosanimais = 'não';
    $adotante->$experienciacompets = 'não';
    $adotante->$animaladotado = 'gato';

   $animal = new Animal();

   $animal->nome = '';
   $animal->especie = ;
   $animal->idade = '';
   $animal->sexo = '';
   $animal->peso = '';
   $animal->cor = '';
   $animal->status = '';
   $animal->chipado = '';


   $cachorro = new Cachorro();

   $cachorro->nome = '';
   $cachorro->raca = '';
   $cachorro->porte = '';
   $cachorro->nivelEnergia = ''; 
   $cachorro->vacinado = '';
   $cachorro->vermifugado = ''; 
   $cachorro->sociavel = '';
   $cachorro->adestrado = '';
   

   $gato = new Gato();
   

   $gato->nome = '';
   $gato->pelagem = '';
   $gato->castrado = '';
   $gato->independente = '';
   $gato->vacinado = '';
   $gato->curioso = '';
   $gato->adoraColo = '';
   $gato->usaCaixaAreia = '';
?>