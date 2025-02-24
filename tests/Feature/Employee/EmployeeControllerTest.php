<?php

namespace Tests\Feature\Employee;

use App\Models\Employee;
use Illuminate\Foundation\Testing\RefreshDatabase;
use Illuminate\Foundation\Testing\WithFaker;
use Tests\TestCase;

class EmployeeControllerTest extends TestCase
{
    use RefreshDatabase, WithFaker;

    public function test_index_displays_employees()
    {
        /** @var \App\Models\Employee $admin */
        $admin = Employee::factory()->create(['role' => 'admin']);
        /** @var \App\Models\Employee $employee */
        $employee = Employee::factory()->create();

        // Autenticar el administrador
        $this->actingAs($admin, 'employee');

        $response = $this->get(route('employees.index'));

        $response->assertStatus(200);
        $response->assertSee($employee->name);
    }

    public function test_create_displays_form()
    {
        /** @var \App\Models\Employee $admin */
        $admin = Employee::factory()->create(['role' => 'admin']);

        // Autenticar el administrador
        $this->actingAs($admin, 'employee');

        $response = $this->get(route('employees.create'));

        $response->assertStatus(200);
        $response->assertSee('Crear Empleado'); // Actualizado para buscar el texto en español
    }

    public function test_store_creates_employee()
    {
        /** @var \App\Models\Employee $admin */
        $admin = Employee::factory()->create(['role' => 'admin']);

        // Autenticar el administrador
        $this->actingAs($admin, 'employee');

        $data = [
            'name' => $this->faker->name,
            'email' => $this->faker->unique()->safeEmail,
            'username' => $this->faker->unique()->userName,
            'password' => 'password',
            'password_confirmation' => 'password',
            'role' => 'admin',
        ];

        $response = $this->post(route('employees.store'), $data);

        $response->assertRedirect(route('employees.index'));
        $this->assertDatabaseHas('employees', ['email' => $data['email']]);
    }

    public function test_edit_displays_form()
    {
        /** @var \App\Models\Employee $admin */
        $admin = Employee::factory()->create(['role' => 'admin']);

        // Autenticar el administrador
        $this->actingAs($admin, 'employee');

        $employee = Employee::factory()->create();

        $response = $this->get(route('employees.edit', $employee->id));

        $response->assertStatus(200);
        $response->assertSee('Editar Empleado'); // Actualizado para buscar el texto en español
    }

    public function test_update_updates_employee()
    {
        /** @var \App\Models\Employee $admin */
        $admin = Employee::factory()->create(['role' => 'admin']);

        // Autenticar el administrador
        $this->actingAs($admin, 'employee');

        $employee = Employee::factory()->create();

        $data = [
            'name' => 'Updated Name',
            'email' => $employee->email,
            'username' => $employee->username,
            'role' => 'vendor',
        ];

        $response = $this->put(route('employees.update', $employee->id), $data);

        $response->assertRedirect(route('employees.index'));
        $this->assertDatabaseHas('employees', ['name' => 'Updated Name']);
    }

    public function test_destroy_deletes_employee()
    {
        /** @var \App\Models\Employee $admin */
        $admin = Employee::factory()->create(['role' => 'admin']);

        // Autenticar el administrador
        $this->actingAs($admin, 'employee');

        $employee = Employee::factory()->create();

        $response = $this->delete(route('employees.destroy', $employee->id));

        $response->assertRedirect(route('employees.index'));
        $this->assertDatabaseMissing('employees', ['id' => $employee->id]);
    }
}