<?php

namespace App\Http\Controllers\API;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

/**
 * @OA\Info(
 *      version="1.0.0",
 *      title="API документация",
 *      description="Пример описания API с использованием Swagger",
 * )
 */
class TestController extends Controller
{
    /**
     * Получить приветственное сообщение
     *
     * @OA\Get(
     *     path="/api/hello",
     *     summary="Приветствие",
     *     tags={"Тест"},
     *     @OA\Response(
     *         response=200,
     *         description="Успешный ответ",
     *         @OA\JsonContent(
     *             type="object",
     *             @OA\Property(property="message", type="string", example="Привет, мир!")
     *         )
     *     )
     * )
     */
    public function hello()
    {
        return response()->json(['message' => 'Привет, мир!']);
    }
}
