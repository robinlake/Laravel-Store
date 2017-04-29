<?php

use Illuminate\Database\Seeder;

class ProductTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $product = new \App\Product([
            'imagePath' => 'https://i0.wp.com/rummuser.com/wp-content/uploads/Self-Esteem.jpg?resize=309%2C310',
            'title' => 'Self-esteem',
            'description' => 'Don\'t you want to love yourself unconditionally? Well now you can!',
            'price' => 10
        ]);
        $product->save();
        $product = new \App\Product([
            'imagePath' => 'https://i0.wp.com/rummuser.com/wp-content/uploads/Self-Esteem.jpg?resize=309%2C310',
            'title' => 'Self-esteem',
            'description' => 'Don\'t you want to love yourself unconditionally? Well now you can!',
            'price' => 10
        ]);
        $product->save();        $product = new \App\Product([
            'imagePath' => 'https://i0.wp.com/rummuser.com/wp-content/uploads/Self-Esteem.jpg?resize=309%2C310',
            'title' => 'Confidence',
            'description' => 'Don\'t you want to love yourself unconditionally? Well now you can!',
            'price' => 10
        ]);
        $product->save();        $product = new \App\Product([
            'imagePath' => 'https://i0.wp.com/rummuser.com/wp-content/uploads/Self-Esteem.jpg?resize=309%2C310',
            'title' => 'Peace',
            'description' => 'Don\'t you want to love yourself unconditionally? Well now you can!',
            'price' => 10
        ]);
        $product->save();        $product = new \App\Product([
            'imagePath' => 'https://i0.wp.com/rummuser.com/wp-content/uploads/Self-Esteem.jpg?resize=309%2C310',
            'title' => 'Luck',
            'description' => 'Don\'t you want to love yourself unconditionally? Well now you can!',
            'price' => 10
        ]);
        $product->save();        $product = new \App\Product([
            'imagePath' => 'https://i0.wp.com/rummuser.com/wp-content/uploads/Self-Esteem.jpg?resize=309%2C310',
            'title' => 'Charisma',
            'description' => 'Don\'t you want to love yourself unconditionally? Well now you can!',
            'price' => 10
        ]);
        $product->save();
    }
}
