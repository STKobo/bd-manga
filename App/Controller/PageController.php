<?php 

namespace App\Controller;

class PageController extends Controller 
{
    public function route(): void
    {
        if(isset($_GET['action'])) {
            switch ($_GET['action']) {
                case 'about':
                    
                    break;
                case 'home': 
                    var_dump('On appelle la méthode home');
                    break;
                default:
                    break;
            }
        } else {

        }
    }

    protected function about()
    {
        var_dump('On apelle la méthode about');
    }
}