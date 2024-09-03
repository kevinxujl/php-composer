<?php

namespace App2\Controllers;

use App\Models\User;

class UserController {
    public function __construct() {
        $user = new User(); // 使用 App\Models\User 类
    }
}

