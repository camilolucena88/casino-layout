<?php

namespace App\Http\Controllers;

use App\Models\GameProviders;
use Illuminate\Http\JsonResponse;
use Illuminate\Http\Request;

class GameProvidersController extends Controller
{
    /**
     * @return \Illuminate\Http\JsonResponse
     */
    public function getAll():JsonResponse
    {
        return response()->json(
            GameProviders::select(['id', 'name'])
                 ->paginate(10)
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
                GameProviders::findOrFail($id)
            );
        } catch (\Exception $exception) {
            return response()->json([$exception], 404);
        }
    }
}
