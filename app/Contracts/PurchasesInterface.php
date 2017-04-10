<?php
namespace App\Contracts;
    
interface PurchasesInterface
{
    /**
     * get a single purchase
     *
     * @param integer $id
     * @return purchase
    */
    public function getOne($id);

     /**
     * Get List of all purchases with offering
     *
     * @return Collection
     */
    public function getAllWithOffering();

    /**
     * Create purchase
     *
     * @param array $data
     * @return purchase
     */
    public function create($data);
}
