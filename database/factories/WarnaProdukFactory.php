<?php

namespace Database\Factories;
use App\Models\WarnaProduk;
use Illuminate\Database\Eloquent\Factories\Factory;
use Illuminate\Support\Arr;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\WarnaProduk>
 */
class WarnaProdukFactory extends Factory
{
    protected $model = WarnaProduk::class;
    private static $warna =['Merah','Biru','Hitam','Abu-abu'];
    private static $sequence =0;
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition(): array
    {
        
        
        return [
            'warna'=>$this->getUniqueSize()
        ];
    }
    private function getUniqueSize():string{
        $warnas= Arr::get(self::$warna,self::$sequence % count(self::$warna));
        self::$sequence++;
        return $warnas;
    }
}
