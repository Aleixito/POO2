
<?php 

interface SonidoAnimal {
    public function getSound(): string;
}

class Ladrido implements SonidoAnimal {
    public function getSound(): string {
        return "Bup, bup!";
    }
}

class Maullido implements SonidoAnimal {
    public function getSound(): string {
        return "Mi!";
    }
}

?>
