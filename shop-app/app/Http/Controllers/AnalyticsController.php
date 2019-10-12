<?php
/**
 * Created by PhpStorm.
 * User: rokytskyi
 * Date: 2019-10-12
 * Time: 14:28
 */

namespace App\Http\Controllers;


use GuzzleHttp\Client;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class AnalyticsController extends Controller
{
    /**
     * @param Request $request
     * @throws \GuzzleHttp\Exception\GuzzleException
     */
    public function event(Request $request): void
    {
        $input = $request->all();
        $event = $input['event'] ?? null;

        if ($event && Auth::check()) {
            $userId = Auth::user()->id;

            $client = new Client();
            $client->request('post', env('COMPUTING_SERVICE_URL') . '/analytics', [
                'headers' => ['Content-Type' => 'application/json'],
                'body'    => json_encode(['userId' => $userId, 'event' => $event])
            ]);
        }
    }
}