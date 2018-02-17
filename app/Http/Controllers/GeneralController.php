<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Artisan;
use App\User;
use App\Trip;

class GeneralController extends Controller
{
	public function seeding(Request $request, $n_users = 100, $n_trips = 1000) {
		Artisan::call('migrate:refresh', ["--force"=> true ]);
		$users = factory(User::class, $n_users)->make();
		$trips = factory(Trip::class, $n_trips)->make();

		$n_users = User::count();
		$n_trips = Trip::count();

		return [
			'created_users' => $n_users,
			'created_trips' => $n_trips,
		];
	}
}
