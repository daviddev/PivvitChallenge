<?php

namespace App\Services;
use App\Contracts\PurchasesInterface;
use App\Purchase;
use Auth;

class PurchasesService implements PurchasesInterface
{
    /**
     * Create a new instance of PurchasesService.
     *
     * @return void
     */
    function __construct()
    {
        $this->purchase = new Purchase();
    }

    /**
     * get a single purchase
     *
     * @param integer $id
     * @return purchase
    */
    public function getOne($id)
    {
        return $this->purchase->find($id);
    }

    /**
     * Get List of all purchases with offering
     *
     * @return Collection
     */
    public function getAllWithOffering()
    {
        $purchases = $this->purchase->with('offering')->get();
        return $purchases;
    }

    /**
     * Create purchase
     *
     * @param array $data
     * @return purchase
     */
    public function create($data)
    {
        return $this->purchase->create($data); 
    }
}
