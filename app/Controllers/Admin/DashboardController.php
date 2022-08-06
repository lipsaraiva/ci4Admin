<?php 

namespace App\Controllers\Admin;  
use CodeIgniter\Controller;

  
class DashboardController extends Controller
{
    public function index($page = 'dashboard_textos')  
    {
        $session = session();
        helper(['form']);

        // $racas = model(RacasModel::class);
        // $pericias = model(PericiasModel::class);
        // $ocupacoes = model(OcupacoesModel::class);
        // $complicacoes = model(ComplicacoesModel::class);

        // $data = [
        //     'racas'  => $racas->getRacas(),
        //     'pericias'  => $pericias->getPericias(),
        //     'ocupacoes'  => $ocupacoes->getOcupacoes(),
        //     'complicacoes'  => $complicacoes->getComplicacoes(),
        // ];

        // return view('index', $data);

        // echo "Hey User : ".$session->get('name');
        // echo "<br><hr><br>";
        // echo "<a href='/logout'>Sair</a>";
        // echo view('admin/login');

        $data = [
            'nomeUsuario' => $session->get('name'),
        ];

        return view('admin/templates/header', $data)
            . view('admin/' . $page)
            . view('admin/templates/footer');

    }

}