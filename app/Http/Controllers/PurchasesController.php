<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Http\Requests\PurchaseRequest;

use App\Contracts\OfferingsInterface;
use App\Contracts\PurchasesInterface;

class PurchasesController extends Controller
{
	/**
    * Create a new instance of PurchasesController class.
    *
    * @return void
    */
	public function __construct(OfferingsInterface $offeringsRepo,
								PurchasesInterface $purchasesRepo)
	{
		$this->offeringsRepo = $offeringsRepo;
		$this->purchasesRepo = $purchasesRepo;
	}

    /**
	* Get create purchase view
	* GET  /
	*
	* @return view
	*/
    public function index()
    {
    	return view('purchase');
    }

    /**
	* Add new purchase
	* POST /purchases
	*
	* @param PurchaseRequest $request
	*
	* @return json
	*/
    public function store(PurchaseRequest $request)
    {
    	$purchase = $this->purchasesRepo->create($request->all());

    	if (!$purchase) return response()->json(['result' => 'error']);

    	return response()->json(['result' => 'success']);
    }

    /**
	* Get all purchases
	* GET /purchases
	*
	* @return view
	*/
    public function getAllPurchases()
    {
    	$purchases = $this->purchasesRepo->getAllWithOffering();
    	return view('purchases', compact('purchases'));
    }
}
