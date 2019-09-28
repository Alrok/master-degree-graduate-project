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
        $res = $client->request('GET',env('COMPUTING_SERVICE_URL'));
        $json = json_decode($res->getBody()->getContents(), true);


        $return = Elasticsearch::search(['index' => 'products']);

        $products = [];

        foreach ($return['hits']['hits'] ?? [] as $product) {
            $products[$product['_id']] = $product['_source'];
            $products[$product['_id']]['_id'] = $product['_id'];
        }

        return view('catalog', ['products' => $products]);
    }
}