<?php

namespace App\Http\Controllers\Docs\Auth;

use App\Http\Controllers\Auth\EmployeeLoginController;
use App\Http\Requests\Employee\Auth\EmployeeLoginRequest;

/**
 * @OA\OpenApi(
 *   @OA\Info(
 *     title="Sistema de Gestión - API Empleados",
 *     version="1.0.0",
 *     description="API para la autenticación de empleados",
 *     @OA\Contact(email="soporte@empresa.com"),
 *     @OA\License(name="MIT")
 *   ),
 *   @OA\Server(
 *     url="http://localhost:8080",
 *     description="Servidor de Desarrollo"
 *   ),
 *   @OA\Tag(
 *     name="Autenticación",
 *     description="Operaciones relacionadas con la autenticación de empleados"
 *   )
 * )
 */
class EmployeeLoginControllerAnnotations extends EmployeeLoginController
{
    /**
     * @OA\Get(
     *     path="/employee/login",
     *     operationId="showEmployeeLoginForm",
     *     tags={"Autenticación"},
     *     summary="Muestra el formulario de login para empleados",
     *     description="Retorna la vista HTML del formulario de autenticación",
     *     @OA\Response(
     *         response=200,
     *         description="Formulario de login",
     *         @OA\MediaType(
     *             mediaType="text/html",
     *             @OA\Schema(type="string")
     *         )
     *     ),
     *     @OA\Response(
     *         response=302,
     *         description="Redirección si ya está autenticado",
     *         @OA\JsonContent(
     *             @OA\Property(property="redirect", type="string", example="/dashboard")
     *         )
     *     )
     * )
     */
    public function showLoginForm(): \Illuminate\Contracts\View\View
    {
        return parent::showLoginForm();
    }

    /**
     * @OA\Post(
     *     path="/employee/login",
     *     operationId="authenticateEmployee",
     *     tags={"Autenticación"},
     *     summary="Autentica a un empleado",
     *     description="Procesa las credenciales de autenticación",
     *     @OA\RequestBody(
     *         required=true,
     *         description="Credenciales del empleado",
     *         @OA\MediaType(
     *             mediaType="application/json",
     *             @OA\Schema(
     *                 required={"email", "password"},
     *                 @OA\Property(
     *                     property="email",
     *                     type="string",
     *                     format="email",
     *                     example="empleado@empresa.com"
     *                 ),
     *                 @OA\Property(
     *                     property="password",
     *                     type="string",
     *                     format="password",
     *                     example="secret"
     *                 ),
     *                 @OA\Property(
     *                     property="remember",
     *                     type="boolean",
     *                     example=false
     *                 )
     *             )
     *         )
     *     ),
     *     @OA\Response(
     *         response=302,
     *         description="Autenticación exitosa",
     *         @OA\Header(
     *             header="Location",
     *             description="URL de redirección",
     *             @OA\Schema(type="string", example="/dashboard")
     *         )
     *     ),
     *     @OA\Response(
     *         response=401,
     *         description="Credenciales inválidas",
     *         @OA\JsonContent(
     *             @OA\Property(property="message", type="string", example="Credenciales inválidas"),
     *             @OA\Property(
     *                 property="errors",
     *                 type="object",
     *                 @OA\Property(
     *                     property="email",
     *                     type="array",
     *                     @OA\Items(type="string", example="Las credenciales no coinciden")
     *                 )
     *             )
     *         )
     *     ),
     *     @OA\Response(
     *         response=422,
     *         description="Validación fallida",
     *         @OA\JsonContent(
     *             @OA\Property(property="message", type="string", example="Los datos proporcionados no son válidos"),
     *             @OA\Property(
     *                 property="errors",
     *                 type="object",
     *                 @OA\Property(
     *                     property="email",
     *                     type="array",
     *                     @OA\Items(type="string", example="El campo email es obligatorio")
     *                 )
     *             )
     *         )
     *     )
     * )
     */
    public function login(EmployeeLoginRequest $request): \Illuminate\Http\RedirectResponse
    {
        return parent::login($request);
    }

    /**
     * @OA\Post(
     *     path="/employee/logout",
     *     operationId="logoutEmployee",
     *     tags={"Autenticación"},
     *     summary="Cierra la sesión del empleado",
     *     description="Invalida la sesión activa del empleado",
     *     security={{"employee_auth": {}}},
     *     @OA\Response(
     *         response=302,
     *         description="Sesión cerrada exitosamente",
     *         @OA\Header(
     *             header="Location",
     *             description="URL de redirección",
     *             @OA\Schema(type="string", example="/")
     *         )
     *     ),
     *     @OA\Response(
     *         response=401,
     *         description="No autenticado",
     *         @OA\JsonContent(
     *             @OA\Property(property="message", type="string", example="Unauthenticated")
     *         )
     *     )
     * )
     */
    public function logout(): \Illuminate\Http\RedirectResponse
    {
        return parent::logout();
    }
}
