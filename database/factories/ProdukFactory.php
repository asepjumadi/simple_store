<?php

namespace Database\Factories;

use App\Models\Produk;
use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Produk>
 */
class ProdukFactory extends Factory
{
    protected $model = Produk::class;

    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition(): array
    {
        $categories = ['Pakaian', 'Celana', 'Topi', 'Jas', 'Sepatu', 'Jaket', 'Tas', 'Dompet'];

        $categoryKey = $this->faker->numberBetween(0, count($categories) - 1);
        $category = $categories[$categoryKey];
        $categoryId = $categoryKey + 1;
        return [
            'nama_produk' => $this->faker->word,
            'kategori' => $category,
            'deskripsi' => $this->faker->paragraph(),
            'categori_id' => $categoryId
        ];
    }
}
