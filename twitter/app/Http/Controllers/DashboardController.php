<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class DashboardController extends Controller
{
    public function index() {

        $users = [
            [
                "name" => "fero",
                "age" => "25"
            ],
            [
                "name" => "Maťo",
                "age" => "16"
            ],
            [
                "name" => "Tomaš",
                "age" => "13"
            ],
        ];

        return view(
            'dashboard',
            [
                "users" => $users
            ]
        );
    }
}