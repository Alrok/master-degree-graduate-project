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

class CatalogController extends Controller
{
    public function index()
    {
        $return = Elasticsearch::indices()->stats();

        die(json_encode($return));

        return view('catalog');
    }
}