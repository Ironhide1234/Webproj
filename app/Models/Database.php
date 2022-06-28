<?php

namespace App\Models;

use Illuminate\Support\Facades\DB;

class Database {
    public static function get_product_by_id($id) {
        $product = DB::select("select * from products where product_id = '$id'");
        return $product[0];
    }
}
