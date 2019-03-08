<?php

namespace Tests\Unit;

use Tests\TestCase;
use Illuminate\Foundation\Testing\WithFaker;
use Illuminate\Foundation\Testing\RefreshDatabase;
use App\NewsLetter as Model_NewsLetter;

class NewsLetterTest extends TestCase
{
    /**
     * Um teste para inserir um novo email como cadastro da news letter.
     *
     * @return void
     */
    public function testCreate()
    {

        $response = $this->json('POST','/api/newsletter',['email'=>'luiz.mendes@outlook.com']);
        
        $response->assertStatus(201);
    }

    /**
     * Verifica se o dado foi persistido no banco
     */
    public function testPersistido()
    {
        
        $this->assertDatabaseHas('news_letters', [
            'email' => 'luiz.mendes@outlook.com'
        ]);
    }

    /**
     * Verifica se a remoção do registro da newsletter foi efetuada
     */
    public function testDestroy()
    {
        $newsletter = Model_NewsLetter::where('email','=','luiz.mendes@outlook.com')->first();
        $delete = $newsletter->delete();

        $this->assertTrue($delete);
    }

}
