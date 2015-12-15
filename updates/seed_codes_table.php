<?php namespace Acme\Users\Updates;

use Seeder;
use BrenoDouglas\Shortcode\Models\Code;

class SeedCodesTable extends Seeder
{
    public function run()
    {
        $code = Code::create([
            'identity' => 'teste',
            'content'  => '<h2>teste</h2>'	
        ]);
    }
}