<?php
/**
 * Created by PhpStorm.
 * User: 1roky
 * Date: 22.09.2019
 * Time: 0:03
 */

namespace App\Http\Controllers\Catalog;


use App\Facades\Elasticsearch;
use App\Http\Controllers\Controller;
use GuzzleHttp\Client;

class CatalogController extends Controller
{
    public function index()
    {
        $client = new Client();
        $res = $client->request('GET', env('COMPUTING_SERVICE_URL').'/products/search');
        $products = json_decode($res->getBody()->getContents(), true);

        return view('catalog', ['products' => $products['items']]);
    }
}