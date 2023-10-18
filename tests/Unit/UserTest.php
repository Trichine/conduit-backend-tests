<?php

namespace Tests\Unit;

use App\Models\Article;
use Illuminate\Foundation\Testing\RefreshDatabase;
use PHPUnit\Framework\TestCase;
use App\Models\User;
use Illuminate\Support\Facades\Hash;

class UserTest extends TestCase
{
    use RefreshDatabase;

    protected $seed = true;

    public function __construct(?string $name = null, array $data = [], $dataName = '')
    {
        parent::__construct($name, $data, $dataName);
    }

    public function test_example()
    {
        $this->assertTrue(true);
    }

    public function test_getRouteKeyName()
    {
        $this->assertEquals('username', User::make()->getRouteKeyName());
    }

    public function test_articles()
    {
        $musonda = User::find(2);

        $this->assertEquals(
            Article::where('user_id', $musonda->id)->select(['id', 'title', 'slug', 'description'])->get()->map->only(['id', 'title', 'slug', 'description']),
            $musonda->articles->map->only(['id', 'title', 'slug', 'description'])
        );

        $this->assertGreaterThanOrEqual(2,count($musonda->articles));
    }
}
