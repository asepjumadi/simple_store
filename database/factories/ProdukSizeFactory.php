<?php

namespace Database\Factories;
use App\Models\ProdukSize;
use Illuminate\Database\Eloquent\Factories\Factory;
use Illuminate\Support\Arr;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\ProdukSize>
 */
class ProdukSizeFactory extends Factory
{
    protected $model = ProdukSize::class;
    private static $sizes = ['S','M','L','XL','XXL'];
    private static $sequence =0;
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition(): array
    {
        
    
        return [
            'nama_ukuran'=>$this->getUniqueSize(),
        ];
    }
    private function getUniqueSize():string{
        $size = Arr::get(self::$sizes,self::$sequence % count(self::$sizes));
        self::$sequence++;
        return $size;
    }
}
