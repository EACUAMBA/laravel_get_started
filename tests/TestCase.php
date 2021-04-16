<?php

namespace Tests;

use App\Http\Controllers\PostCRUDController;
use Illuminate\Foundation\Testing\TestCase as BaseTestCase;

abstract class TestCase extends BaseTestCase
{
    use CreatesApplication;

    public function testSoma(){
        $cc = new PostCRUDController();
        $re = $cc->soma(10);
        $this->assertTrue($re == 30);
    }
}
