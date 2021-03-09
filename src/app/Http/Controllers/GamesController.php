<?php

namespace App\Http\Controllers;

use App\Models\Games;
use GuzzleHttp\Psr7\Request;
use Illuminate\Http\JsonResponse;

class GamesController extends Controller
{
    /**
     * @return \Illuminate\Http\JsonResponse
     */
    public function getAll():JsonResponse
    {
        return response()->json(
            Games::select(['launchcode', 'name', 'game_provider_id', 'rtp'])->paginate(10)
        );
    }

    /**
     * @param $id
     * @return \Illuminate\Http\JsonResponse
     */
    public function getOne($id):JsonResponse
    {
        try {
            return response()->json(
                Games::findOrFail($id)
            );
        } catch (\Exception $exception) {
            return response()->json([$exception], 404);
        }
    }
}
