<?php


namespace BSR\Contracts\Packages;


/**
 * @property string $type
 * @property string $name
 * @property int    $price
 *
 * @package BSR\Contracts\Packages
 */
interface RepositoryContract
{
    /**
     * Get package by id or throw an error
     *
     * @param int $id
     *
     * @return mixed
     */
    public function getById(int $id);
    
    /**
     * Create new package
     *
     * @param array $attributes
     *
     * @return mixed
     */
    public function create(array $attributes);
    
    /**
     * Attach items to package
     *
     * @param        $model
     * @param string $type
     * @param int    $type_id
     *
     * @return mixed
     */
    public function attach($model, string $type, int $type_id);
    
    /**
     * Attach item to package with id of package
     * @param int    $package_id
     * @param string $type
     * @param int    $type_id
     *
     * @return mixed
     */
    public function attachByID(int $package_id, string $type, int $type_id);
    
    /**
     * @param string $type
     * @param int    $type_id
     *
     * @return mixed
     */
    public function detachAllFromTypeAndTypeId(string $type, int $type_id);
}
