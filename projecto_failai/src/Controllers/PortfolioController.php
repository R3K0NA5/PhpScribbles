<?php

namespace Rec\Controllers;

use Rec\Database;
use Rec\FS;
use Rec\Response;
use Rec\Validator;
use Exception;
use PDO;
use Rec\Configs;
use PDOException;

class PortfolioController
{
    public function index():Response
    {
//      Nuskaitomas HTML failas ir siunciam jo teksta i Output klase
        $failoSistema = new FS('../src/html/admin.html');
        $failoTurinys = $failoSistema->getFailoTurinys();
        return new Response($failoTurinys);
    }

    public function store()
    {
        $vardas = $_POST['vardas'] ?? '';
        $pavarde = $_POST['pavarde'] ?? '';
        $kodas = (int)$_POST['kodas'] ?? '';

        Validator::required($vardas);
        Validator::required($pavarde);
        Validator::required($kodas);
        Validator::numeric($kodas);
        Validator::asmensKodas($kodas);

        $conf = new Configs();
        $conn = new Database($conf);

        $conn->query(
            "INSERT INTO `persons` (`first_name`, `last_name`, `code`)
                    VALUES (:vardas, :pavarde, :kodas)",
            [
                'vardas' => $vardas,
                'pavarde' => $pavarde,
                'kodas' => $kodas,
            ]
        );

        echo "New record created successfully";
    }
}