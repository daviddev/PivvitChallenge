<?php
namespace App\Contracts;
    
interface OfferingsInterface
{
    /**
     * get a single purchase
     *
     * @param integer $id
     * @return purchase
    */
    public function getOne($id);

     /**
     * Get List of all offerings
     *
     * @return Collection
     */
    public function getAll();
}
