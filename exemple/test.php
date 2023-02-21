<?php 

Interface IVehicule
{
    public function accelerer();
    public function freiner();
}

trait Moteur {

}

Class Vehicule implements IVehicule{

    protected string $marque;
    protected float $vitesse_max;

    public function __construct(string $marque, float $vitesse_max)
    {
        
    }

    public function accelerer(){
        echo 'La voiture accelère';
    }

    public function freiner(){
        echo 'la voiture freine';
    }
}


Class Voiture extends Vehicule {
    protected int $nombre_roues;
}

Class Bateau {
    protected int $nombres_cabines; 
}

