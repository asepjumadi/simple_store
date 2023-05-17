<?php

namespace Database\Factories;
use App\Models\Categories;
use Illuminate\Database\Eloquent\Factories\Factory;
use Illuminate\Support\Arr;
/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Categories>
 */
class CategoriesFactory extends Factory
{
    protected $model = Categories::class;
    private static $categories = ['Pakaian','Celana','Topi','Jas','Sepatu','Jaket','Tas','Dompet'];
    private static $sequence =0;
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition(): array
    {
        
    
        return [
            'name'=>$this->getUniqueSize(),
        ];
    }
    private function getUniqueSize():string{
        $size = Arr::get(self::$categories,self::$sequence % count(self::$categories));
        self::$sequence++;
        return $size;
    }
}
