<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;

class ProductFactory extends Factory
{
    public function definition(): array
    {
        $produk = [
            'Kemeja Flanel', 'Kaos Polos Premium', 'Celana Chino', 'Jaket Bomber',
            'Sepatu Sneakers', 'Tas Ransel', 'Topi Baseball', 'Jam Tangan Kulit',
            'Kacamata Anti Radiasi', 'Dompet Lipat', 'Sabuk Kulit', 'Kaos Kaki Sport',
            'Sweater Hoodie', 'Kemeja Batik', 'Celana Jeans', 'Jaket Windbreaker',
            'Sepatu Running', 'Tas Selempang', 'Topi Snapback', 'Gelang Titanium',
            'Kemeja Linen', 'Kaos Oversize', 'Celana Jogger', 'Jaket Varsity',
            'Sepatu Formal', 'Tas Kerja', 'Topi Trucker', 'Jam Tangan Digital'
        ];

        $warna = ['Hitam', 'Putih', 'Navy', 'Abu-abu', 'Merah', 'Biru', 'Hijau', 'Cokelat'];

        return [
            'category_id' => \App\Models\Category::factory(),
            'name' => $this->faker->randomElement($produk) . ' ' . $this->faker->randomElement($warna),
            'description' => $this->faker->paragraph(),
            'price' => $this->faker->numberBetween(50000, 5000000),
            'stock' => $this->faker->numberBetween(1, 100),
        ];
    }
}