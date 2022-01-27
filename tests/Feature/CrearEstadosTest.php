<?php

namespace Tests\Feature;

use App\User;
use Illuminate\Foundation\Testing\RefreshDatabase;
use Illuminate\Foundation\Testing\WithFaker;
use Tests\TestCase;

class CrearEstadosTest extends TestCase
{
    use RefreshDatabase;

    /** @test */
    public function los_invitados_no_pueden_crear_estados()
    {
        $response = $this->post(\route('statuses.store'),['body' => 'mi primer status']);
        $response->assertRedirect('login');
    }

    /** @test  */
    public function un_usuario_autenticado_puede_crear_estados()
    {
        $this->withoutExceptionHandling();

        //1.Given => Teniendo un usuario autenticado
        $user = \factory(User::class)->create();
        $this->actingAs($user);
        //2.When =>Cuando hace un post request a status
        $response = $this->postJson(\route('statuses.store'),['body' => 'mi primer status']);
        
        //Ahora podemos hacer verificaciones sobre la respuesta
        $response->assertJson([
            'body' => 'mi primer status'
        ]);


        //3.Then => Entonces veo un nuevo estado en la base de datos
        $this->assertDatabaseHas('statuses',[
            'body' => 'mi primer status',
            'user_id' => $user->id
        ]);
    }

    /** @test */
    public function un_estado_requiere_un_cuerpo()
    {
        $user = \factory(User::class)->create();
        $this->actingAs($user); 
   
        $response = $this->postJson(\route('statuses.store'),['body' => '']);
        
        $response->assertJsonStructure([
            'message', 'errors'=>['body']
        ]);
    }

    /** @test */
    public function el_cuerpo_de_un_estado_requiere_un_minimo_de_caracteres()
    {
        $user = \factory(User::class)->create();
        $this->actingAs($user); 
   
        $response = $this->postJson(\route('statuses.store'),['body' => '1234']);
        
        $response->assertJsonStructure([
            'message', 'errors'=>['body']
        ]);
    }
}
