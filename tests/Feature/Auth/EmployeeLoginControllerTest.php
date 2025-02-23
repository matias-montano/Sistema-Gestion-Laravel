<?php

namespace Tests\Feature\Auth;

use App\Models\Employee;
use Tests\TestCase;
use Illuminate\Foundation\Testing\RefreshDatabase;

class EmployeeLoginControllerTest extends TestCase
{
    use RefreshDatabase;

    public function test_show_login_form()
    {
        // Enviar una solicitud GET a la ruta de login
        $response = $this->get(route('employee.login'));

        // Verificar que la respuesta tenga un estado 200
        $response->assertStatus(200);
        // Verificar que la vista correcta sea renderizada
        $response->assertViewIs('auth.employee-login');
    }

    public function test_login_successful()
    {
        /** @var \App\Models\Employee $employee */
        $employee = Employee::factory()->create([
            'username' => 'testuser',
            'password' => bcrypt('password'),
        ]);

        // Enviar una solicitud POST a la ruta de login con credenciales válidas
        $response = $this->post(route('employee.login'), [
            'username' => 'testuser',
            'password' => 'password',
        ]);

        // Verificar que la respuesta redirija a la ruta principal
        $response->assertRedirect(route('main'));
        // Verificar que el empleado esté autenticado
        $this->assertAuthenticatedAs($employee, 'employee');
    }

    public function test_login_failed()
    {
        /** @var \App\Models\Employee $employee */
        $employee = Employee::factory()->create([
            'username' => 'testuser',
            'password' => bcrypt('password'),
        ]);

        // Enviar una solicitud POST a la ruta de login con una contraseña incorrecta
        $response = $this->post(route('employee.login'), [
            'username' => 'testuser',
            'password' => 'wrongpassword',
        ]);

        // Verificar que la respuesta redirija de vuelta a la página de login
        $response->assertRedirect(route('employee.login'));
        // Verificar que haya un error de sesión para el campo 'username'
        $response->assertSessionHasErrors('username');
        // Verificar que el empleado no esté autenticado
        $this->assertGuest('employee');
    }

    public function test_logout()
    {
        /** @var \App\Models\Employee $employee */
        $employee = Employee::factory()->create([
            'username' => 'testuser',
            'password' => bcrypt('password'),
        ]);

        // Autenticar el empleado
        $this->actingAs($employee, 'employee');

        // Enviar una solicitud POST a la ruta de logout
        $response = $this->post(route('employee.logout'));

        // Verificar que la respuesta redirija a la página principal
        $response->assertRedirect('/');
        // Verificar que el empleado no esté autenticado
        $this->assertGuest('employee');
    }
}