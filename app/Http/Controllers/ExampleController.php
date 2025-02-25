<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use OpenApi\Annotations as OA;

/**

 * @OA\Server(
 *      url="http://localhost:8000/api",
 *      description="Local API Server"
 * )
 */
class ExampleController extends Controller
{
    /**
     * @OA\Get(
     *     path="/example",
     *     summary="Пример запроса",
     *     tags={"Example"},
     *     @OA\Response(
     *         response=200,
     *         description="Успешный ответ"
     *     )
     * )
     */
    public function example()
    {
        return response()->json(['message' => 'Hello, Swagger!']);
    }
}
