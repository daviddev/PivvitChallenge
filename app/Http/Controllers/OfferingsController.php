<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Contracts\OfferingsInterface;

class OfferingsController extends Controller
{
    public function getOfferings(OfferingsInterface $offeringsRepo)
    {
    	$offerings = $offeringsRepo->getAll();
    	return response()->json(['offerings' => $offerings]);
    }
}
