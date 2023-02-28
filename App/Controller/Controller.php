<?php 

namespace App\Controller;

Class Controller
{
    public function route(): void {
        if(isset($_GET['controller'])) {
            switch ($_GET['controller']){
                case 'page' : 
                    $pageController = new PageController();
                    $pageController->route();
                    break; 

                case 'book':
                    var_dump('On charge BookController');
                    break;

                default:

                    break;
            }
        } else {
            //charger la page d'accueil 
        }
    }

    protected function render(string $path, array $params = []): void
    {
        
    }
}