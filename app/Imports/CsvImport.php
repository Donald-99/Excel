<?php

namespace App\Imports;

use App\Models\Product;
use Maatwebsite\Excel\Concerns\ToModel;

class CsvImport implements ToModel
{
    /**
    * @param array $row
    *
    * @return \Illuminate\Database\Eloquent\Model|null
    */
    public function model(array $row)
    {
        return new Product([
            // 'name' => $row["name"],
            // 'email' => $row["email"],
            // 'password' => \HASH::make($row['password']),
            'product_code' => $row["product_code"],
            'sku' => $row["sku"],
            'category' => $row["category"],
            'tag' => $row["tag"],
            'product_title' => $row["product_title"],
            'short_description' => $row["short_description"],
            'description' => $row["description"],
            'price' => $row["price"],
            'sale_price' => $row["sale_price"],
            'stock' => $row["stock"],
            'madhesia' => $row["madhesia"],
            'ngjyra' => $row["ngjyra"],
            'brand' => $row["brand"],
            'madhesia' => $row["madhesia"],
            'ngjyra' => $row["ngjyra"],
            'description' => $row["description"]
        ]);
    }
}
