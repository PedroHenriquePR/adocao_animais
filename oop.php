<?php
include_once './Classes/Adotante.class.php';
include_once './Classes/Animal.class.php';
include_once './Classes/Cachorro.class.php';
include_once './Classes/Gato.class.php';


    $adotante = new Adotante();

    $adotante->nome = 'Pedro';
    $adotante->idade = 17;
    $adotante->telefone = 'xxxxxxxxxxx'; 
    $adotante->email = 'xxxxxxx@xxxxxxxx';
    $adotante->endereco = 'Rua xxxxxxxxxxx'; 
    $adotante->temoutrosanimais = 'não';
    $adotante->experienciacompets = 'não';
    $adotante->animaladotado = 'Gato';

    echo $adotante->exibirAdotante(). '<br>';
    echo $adotante->adotarAnimal(). '<br>';
    echo $adotante->verificarIdade(). '<br>';

   $animal = new Animal();

   $animal->nome = 'Luna';
   $animal->especie = 'Mamífero';
   $animal->idade = 2;
   $animal->sexo = 'Fêmea';
   $animal->peso = '3,5kg';
   $animal->cor = 'Preta';
   $animal->status = 'Disponível';
   $animal->chipado = 'Não';


   $cachorro = new Cachorro();

   $cachorro->nome = 'Beto';
   $cachorro->raca = 'Pastor-alemão';
   $cachorro->porte = 'Grande';
   $cachorro->nivelEnergia = '8'; 
   $cachorro->vacinado = 'Sim';
   $cachorro->vermifugado = 'Não'; 
   $cachorro->sociavel = 'Sim';
   $cachorro->adestrado = 'Sim';
   

   $gato = new Gato();
   

   $gato->nome = 'Luna';
   $gato->pelagem = 'Preta';
   $gato->castrado = 'Sim';
   $gato->independente = '8';
   $gato->vacinado = 'Sim';
   $gato->curioso = 'Sim';
   $gato->adoraColo = 'Sim';
   $gato->usaCaixaAreia = 'Sim';
?>