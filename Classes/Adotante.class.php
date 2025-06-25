<?php

class Adotante{

    public $nome;
    public $idade;
    public $telefone;
    public $email;
    public $endereco;
    public $temoutrosanimais;
    public $experienciacompets;
    public $animaladotado;


public function exibirAdotante(): string{
    return "Informações do adotante. <br> Nome: {$this->nome}. <br> Idade: {$this->idade}. <br> Telefone: {$this->telefone}. <br> Email: {$this->email}. <br> Endereço: {$this->endereco}. <br>";
}



public function adotarAnimal(): string{
    return "Animal a ser adotado por {$this->nome}: Gato. <br>";
}

public function verificarIdade(): string{
    if ($idade > 16)
    return "Está apto a adoção";
    
    
    else return "Não está apto a adoção";
}

}
?>