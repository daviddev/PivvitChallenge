<?php

namespace App\Services;
use App\Contracts\OfferingsInterface;
use App\Offering;

class OfferingsService implements OfferingsInterface
{
    /**
     * Create a new instance of OfferingsService.
     *
     * @return void
     */
    function __construct()
    {
        $this->offering = new Offering();
    }

    /**
     * get a single offering
     *
     * @param integer $id
     * @return offering
    */
    public function getOne($id)
    {
        return $this->offering->find($id);
    }

    /**
     * Get List of all offerings
     *
     * @return Collection
     */
    public function getAll()
    {
        $offerings = $this->offering->get();
        return $offerings;
    }
}
