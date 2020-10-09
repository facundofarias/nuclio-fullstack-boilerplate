<?php

namespace Tests\Unit;

use Illuminate\Foundation\Testing\RefreshDatabase;
use Illuminate\Support\Facades\DB;
use Tests\CreatesApplication;
use Tests\TestCase;

abstract class BaseTestCase extends TestCase
{
    use CreatesApplication;
    use RefreshDatabase;

    public function setUp(): void
    {
        parent::setUp();
        DB::unprepared(file_get_contents(database_path('/scripts/001_create_users.sql')));
        DB::unprepared(file_get_contents(database_path('/scripts/002_create_boards.sql')));
        DB::unprepared(file_get_contents(database_path('/scripts/003_create_pins.sql')));
        DB::unprepared(file_get_contents(database_path('/scripts/004_create_tags.sql')));
        DB::unprepared(file_get_contents(database_path('/scripts/005_create_pin_tag.sql')));
        DB::unprepared(file_get_contents(database_path('/scripts/006_create_cities.sql')));
        DB::unprepared(file_get_contents(database_path('/scripts/007_add_city_relation_to_user.sql')));
        DB::unprepared(file_get_contents(database_path('/scripts/008_seed_data.sql')));
    }
}
