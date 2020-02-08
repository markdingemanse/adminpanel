<?php

namespace Tests\Feature;

use Tests\TestCase;
use Illuminate\Foundation\Testing\WithoutMiddleware;
use Illuminate\Foundation\Testing\DatabaseMigrations;
use Illuminate\Foundation\Testing\DatabaseTransactions;
use Illuminate\Foundation\Testing\RefreshDatabase;

use App\Models\Logging;
use App\Models\Heroine;

class LoggingAndHeroinesTest extends TestCase
{
    use RefreshDatabase;

    /**
     * A basic test example.
     *
     * @return void
     */
    public function testHeroinesAndLoggings()
    {
        $this->seed();

        $loggingFromDb = Logging::all();
        $heroineFromRelation = $loggingFromDb->first()->heroine;

        $heroinesFromDb = Heroine::all();
        $loggingFromRelation = $heroinesFromDb->first()->logs;

        $this->assertTrue($loggingFromDb->isNotEmpty());
        $this->assertTrue($heroinesFromDb->isNotEmpty());

        $this->assertTrue($loggingFromRelation->isNotEmpty());
        $this->assertTrue((bool) $heroineFromRelation);

    }
}
