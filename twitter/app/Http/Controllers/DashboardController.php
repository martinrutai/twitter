<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class DashboardController extends Controller
{
    public function index() {

        $users = [
            [
                "name" => "fero",
            ],
            [
                "name" => "Maťo",
            ],
            [
                "name" => "Tomaš",
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