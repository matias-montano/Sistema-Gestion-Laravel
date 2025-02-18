<?php

namespace App\Http\Controllers\Docs\Employee;

use App\Http\Controllers\Employee\EmployeeController;

class EmployeeControllerAnnotations extends EmployeeController
{
    /**
     * @OA\Get(
     *     path="/employees",
     *     operationId="getAllEmployees",
     *     tags={"Empleados"},
     *     summary="Lista todos los empleados",
     *     description="Devuelve un listado de empleados.",
     *     @OA\Response(response=200, description="Operación exitosa")
     * )
     */
    public function index(): \Illuminate\Contracts\View\View
    {
        return parent::index();
    }

    /**
     * @OA\Get(
     *     path="/employees/create",
     *     operationId="createEmployeeForm",
     *     tags={"Empleados"},
     *     summary="Muestra el formulario de creación de empleado",
     *     @OA\Response(response=200, description="Formulario de creación")
     * )
     */
    public function create(): \Illuminate\Contracts\View\View
    {
        return parent::create();
    }

    /**
     * @OA\Post(
     *     path="/employees",
     *     operationId="storeEmployee",
     *     tags={"Empleados"},
     *     summary="Guarda un nuevo empleado",
     *     description="Crea un nuevo empleado y lo persiste en la base de datos.",
     *     @OA\Response(response=302, description="Redirección al index de Empleados"),
     *     @OA\Response(response=422, description="Datos inválidos")
     * )
     */
    public function store(\App\Http\Requests\Employee\StoreEmployeeRequest $request): \Illuminate\Http\RedirectResponse
    {
        return parent::store($request);
    }

    /**
     * @OA\Get(
     *     path="/employees/{id}",
     *     operationId="showEmployee",
     *     tags={"Empleados"},
     *     summary="Muestra un empleado por ID",
     *     @OA\Parameter(
     *         name="id",
     *         in="path",
     *         required=true,
     *         @OA\Schema(type="integer")
     *     ),
     *     @OA\Response(response=200, description="Detalle del empleado"),
     *     @OA\Response(response=404, description="Empleado no encontrado")
     * )
     */
    public function show(int $employee): \Illuminate\Contracts\View\View
    {
        return parent::show($employee);
    }

    /**
     * @OA\Get(
     *     path="/employees/{id}/edit",
     *     operationId="editEmployeeForm",
     *     tags={"Empleados"},
     *     summary="Muestra el formulario de edición de empleado",
     *     @OA\Parameter(
     *         name="id",
     *         in="path",
     *         required=true,
     *         @OA\Schema(type="integer")
     *     ),
     *     @OA\Response(response=200, description="Formulario de edición"),
     *     @OA\Response(response=404, description="Empleado no encontrado")
     * )
     */
    public function edit(int $employee): \Illuminate\Contracts\View\View
    {
        return parent::edit($employee);
    }

    /**
     * @OA\Put(
     *     path="/employees/{id}",
     *     operationId="updateEmployee",
     *     tags={"Empleados"},
     *     summary="Actualiza un empleado existente",
     *     @OA\Parameter(
     *         name="id",
     *         in="path",
     *         required=true,
     *         @OA\Schema(type="integer")
     *     ),
     *     @OA\Response(response=302, description="Redirección al index de Empleados"),
     *     @OA\Response(response=404, description="Empleado no encontrado"),
     *     @OA\Response(response=422, description="Datos inválidos")
     * )
     */
    public function update(\App\Http\Requests\Employee\UpdateEmployeeRequest $request, int $employee): \Illuminate\Http\RedirectResponse
    {
        return parent::update($request, $employee);
    }

    /**
     * @OA\Delete(
     *     path="/employees/{id}",
     *     operationId="deleteEmployee",
     *     tags={"Empleados"},
     *     summary="Elimina un empleado",
     *     @OA\Parameter(
     *         name="id",
     *         in="path",
     *         required=true,
     *         @OA\Schema(type="integer")
     *     ),
     *     @OA\Response(response=302, description="Redirección al index de Empleados"),
     *     @OA\Response(response=404, description="Empleado no encontrado")
     * )
     */
    public function destroy(int $id): \Illuminate\Http\RedirectResponse
    {
        return parent::destroy($id);
    }

}
