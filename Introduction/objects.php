//Objetos em PHP
<?php
class Carro {
  public $cor;
  public $modelo;
  
  public function __construct($cor, $modelo) {
    $this->cor = $cor;
    $this->modelo = $modelo;
  }
  public function mensagem() {
    return "Meu carro é um " . $this->modelo . " " . $this->cor . "!";
  }
}

$carro = new Carro("Vermelho", "Toyota");
echo $carro->mensagem();
?>