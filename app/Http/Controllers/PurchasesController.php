<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Http\Requests\PurchaseRequest;

use App\Contracts\OfferingsInterface;
use App\Contracts\PurchasesInterface;

class PurchasesController extends Controller
{
	public function __construct(OfferingsInterface $offeringsRepo,
								PurchasesInterface $purchasesRepo)
	{
		$this->offeringsRepo = $offeringsRepo;
		$this->purchasesRepo = $purchasesRepo;
	}

    public function index()
    {
    	$offerings = $this->offeringsRepo->getAll();
    	return view('purchase', compact('offerings'));
    }

    public function store(PurchaseRequest $request)
    {
    	$purchase = $this->purchasesRepo->create($request->all());

    	if (!$purchase) return response()->json(['result' => 'error']);

    	return response()->json(['result' => 'success']);
    }

    public function getAllPurchases()
    {
    	$purchases = $this->purchasesRepo->getAllWithOffering();
    	return view('purchases', compact('purchases'));
    }
}
