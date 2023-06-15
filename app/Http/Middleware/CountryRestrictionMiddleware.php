<?php

namespace App\Http\Middleware;

use Closure;
use Illuminate\Support\Facades\Request;
use Stevebauman\Location\Facades\Location;

class CountryRestrictionMiddleware
{
    public function handle($request, Closure $next)
    {
        $allowedCountries = ['IL']; // Replace with your list of allowed countries
        $userCountry = $this->getUserCountry();

        if (!in_array($userCountry, $allowedCountries)) {
            abort(403, 'Access denied from your country.');
        }

        return $next($request);
    }

    protected function getUserCountry()
    {
        $ip = Request::ip();
        $location = Location::get($ip);

        return $location->countryCode ?? null;
    }
}
