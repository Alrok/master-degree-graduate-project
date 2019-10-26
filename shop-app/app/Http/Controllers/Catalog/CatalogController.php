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
use GuzzleHttp\Exception\GuzzleException;
use Illuminate\Support\Facades\Auth;

class CatalogController extends Controller
{
    public function index()
    {
        return view('catalog', ['products' => $this->loadProducts()]);
    }

    protected function loadProducts()
    {
        $client = new Client(['base_uri' => env('COMPUTING_SERVICE_URL')]);

        $query = [
            'request' => json_encode([
                'size'=> 100
            ])
        ];

        if (Auth::check()) {
            $query['userId'] = Auth::user()->id;
        }

        try {
            $res = $client->request('GET', '/products/search', ['query' => $query]);
        } catch (GuzzleException $e) {
            return [];
        }

        $products = json_decode($res->getBody()->getContents(), true);

        return $products['items'] ?? [];
    }
}