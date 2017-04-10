<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Contracts\OfferingsInterface;

class OfferingsController extends Controller
{

	/**
    * Create a new instance of OfferingsController class.
    *
    * @return void
    */
	public function __construct(OfferingsInterface $offeringsRepo)
	{
		$this->offeringsRepo = $offeringsRepo;
	}

	/**
	* Get all offerings
	* GET /offerings
	*
	*
	* @return json
	*/
    public function getOfferings()
    {
    	$offerings = $this->offeringsRepo->getAll();
    	return response()->json(['offerings' => $offerings]);
    }
}
