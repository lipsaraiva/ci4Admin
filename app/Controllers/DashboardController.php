<?php 

namespace App\Controllers;  
use CodeIgniter\Controller;

  
class DashboardController extends Controller
{
    public function index()
    {
        $session = session();
        echo "Hey User : ".$session->get('name');
        echo "<br><hr><br>";
        echo "<a href='/logout'>Sair</a>";
    }

}