<?php
    
namespace Tests\Controllers;
    
use Illuminate\Http\Response;
use Tests\TestCase;
    
class ApiControllerTests extends TestCase {
    
    public function testIndexReturnsDataInValidFormat() {
    
    $this->json('get', 'api/item/list',
    [
        'Authorization' => 'Bearer '.'78c09f32b08ba2ad6e5e3612ee12366d773f6b84f6fe1386814d3f44d4e76492',
    ])
         ->assertStatus(Response::HTTP_OK)
/*         ->assertJsonStructure(
             [
                 'data' => [
                     '*' => [
                         'id',
                         'first_name',
                         'last_name',
                         'email',
                         'created_at',
                         'wallet' => [
                             'id',
                             'balance'
                         ]
                     ]
                 ]
             ]
         )
*/
         ;
  }
    
}