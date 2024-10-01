<?php

namespace App\Http\Controllers;

use App\Responses\ApiResponse;
use App\Responses\ApiResponses;
use GuzzleHttp\Psr7\Response;
use Illuminate\Http\Client\Response as ClientResponse;
use Illuminate\Http\Request;

class ClienteController extends Controller
{
    public function salvar()
    {

    }
    public function editar(int $id)
    {

    }
    public function listar()
    {
       return ApiResponses::success(data: ["nome" => "Willian"]);
    }
    public function excluir(int $id)
    {

    }
}

