<?php

class Animal{
protected $nome;
protected $ambiente;
protected $classeFilo;
protected $nomeClass;

public function __construct($nome, $ambiente, $classeFilo){
    $this->nome = $nome;
    $this->ambiente = $ambiente;
    $this->classeFilo = $classeFilo;
    $this->nomeClass = get_class($this);
}

public function relatorio(){
    echo "Olá estou na classe {$this->nomeClass} me chamo {$this->nome}, vivo em ambientes {$this->ambiente} e pertenco a filo {$this->classeFilo}.";
}
public function resultado(){
    echo "Olá você está na classe {$this->nomeClass}.";
}

}
class Cachorro extends Animal{
    private $raca;
    public function __construct($nome, $ambiente, $classeFilo, $raca){
        parent::__construct($nome, $ambiente, $classeFilo);
        $this->raca = $raca;
        
    }
    public function canino(){
        echo "Olá estou na classe {$this->nomeClass} me chamo {$this->nome}, vivo em ambientes {$this->ambiente}, pertenco a filo {$this->classeFilo}, e minha raça é {$this->raca}.";
    }
   
}

class Peixe extends Animal{
    private $calda;
    public function __construct($nome, $ambiente, $classeFilo, $calda){
        parent::__construct($nome, $ambiente, $classeFilo);
        $this->calda = $calda;
}
public function aquatico(){
    echo "Olá estou na classe {$this->nomeClass} me chamo {$this->nome}, vivo em ambientes {$this->ambiente}, pertenco a filo {$this->classeFilo}, e tenho caudas do tipo {$this->calda}.";

}

}




