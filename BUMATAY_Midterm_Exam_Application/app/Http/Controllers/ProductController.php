<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class ProductController extends Controller
{
    public function index(){
        $gadgets = [
            //Phones
            ['name' => 'Iphone 15 Pro', 'brand' => 'Apple', 'price' => '₱ 70,990', 'category' => 'Phones'],
            ['name' => 'Galaxy S24 Ultra', 'brand' => 'Samsung', 'price' => '₱ 84,990', 'category' => 'Phones'],
            ['name' => 'Pixel 8 Pro', 'brand' => 'Google', 'price' => '₱ 55,650', 'category' => 'Phones'],
            ['name' => 'OnePlus 12', 'brand' => 'OnePlus', 'price' => '₱ 63,990', 'category' => 'Phones'],
            ['name' => 'Xiaomi 14 Ultra', 'brand' => 'Xiaomi', 'price' => '₱ 49,299', 'category' => 'Phones'],
            
            //Laptops
            ['name' => 'Macbook Air M2', 'brand' => 'Apple', 'price' => '₱ 87,990', 'category' => 'Laptops'],
            ['name' => 'Dell XPS 15', 'brand' => 'Dell', 'price' => '₱ 119,988', 'category' => 'Laptops'],
            ['name' => 'ASUS ROG Zephyrus G14', 'brand' => 'ASUS', 'price' => '₱ 119,995', 'category' => 'Laptops'],
            ['name' => 'HP Spectre x360', 'brand' => 'HP', 'price' => '₱ 75,990', 'category' => 'Laptops'],
            
            //Tablets
            ['name' => '11-inch iPad Pro M4', 'brand' => 'Apple', 'price' => '₱ 72,990', 'category' => 'Tablets'],
            ['name' => 'Samsung Galaxy Tab S9', 'brand' => 'Samsung', 'price' => '₱ 47,990', 'category' => 'Tablets'],
            ['name' => 'Microsoft Surface Pro 9', 'brand' => 'Microsoft', 'price' => '₱ 119,999', 'category' => 'Tablets'],
        
            
            //Gaming Consoles
            ['name' => 'PlayStation 5', 'brand' => 'Sony', 'price' => '₱ 27,990', 'category' => 'Gaming Consoles'],
            ['name' => 'Nintendo Switch OLED', 'brand' => 'Nintendo', 'price' => '₱ 24,995', 'category' => 'Gaming Consoles']          
        ];

        //Group by categories
        $categories =[];
        foreach ($gadgets as $gadget) {
            $categories[$gadget['category']][] = $gadget;
        }

        return view('products', compact('categories'));
    }
}
