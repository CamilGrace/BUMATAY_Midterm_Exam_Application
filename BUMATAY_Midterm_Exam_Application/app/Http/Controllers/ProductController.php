<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class ProductController extends Controller
{
    public function index(){
        $gadgets = [
            //Phones
            ['name' => 'Iphone 15 Pro', 'brand' => 'Apple', 'price' => '₱ 70,990'],
            ['name' => 'Galaxy S24 Ultra', 'brand' => 'Samsung', 'price' => '₱ 84,990'],
            ['name' => 'Pixel 8 Pro', 'brand' => 'Google', 'price' => '₱ 55,650'],
            ['name' => 'OnePlus 12', 'brand' => 'OnePlus', 'price' => '₱ 63,990'],
            ['name' => 'Xiaomi 14 Ultra', 'brand' => 'Xiaomi', 'price' => '₱ 49,299'],
            
            //Laptops
            ['name' => 'Macbook Air M2', 'brand' => 'Apple', 'price' => '₱ 87,990'],
            ['name' => 'Dell XPS 15', 'brand' => 'Dell', 'price' => '₱ 119,988'],
            ['name' => 'ASUS ROG Zephyrus G14', 'brand' => 'ASUS', 'price' => '₱ 119,995'],
            ['name' => 'HP Spectre x360', 'brand' => 'HP', 'price' => '₱ 75,990'],
            
            //Tablets
            ['name' => '11-inch iPad Pro M4', 'brand' => 'Apple', 'price' => '₱ 72,990'],
            ['name' => 'Samsung Galaxy Tab S9', 'brand' => 'Samsung', 'price' => '₱ 47,990'],
            ['name' => 'Microsoft Surface Pro 9', 'brand' => 'Microsoft', 'price' => '₱ 119,999'],
        
            
            //Gaming Consoles
            ['name' => 'PlayStation 5', 'brand' => 'Sony', 'price' => '₱ 27,990'],
            ['name' => 'Nintendo Switch OLED', 'brand' => 'Nintendo', 'price' => '₱ 24,995']          
        ];

        return view('products', compact('gadgets'));
    }
}
