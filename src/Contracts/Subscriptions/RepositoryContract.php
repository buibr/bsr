<?php

namespace BSR\Contracts\Subscriptions;

interface RepositoryContract
{
    /**
     * @param $attributes
     *
     * @return \BSR\Contracts\Subscriptions\ModelContract
     */
    public function create($attributes): ModelContract;
    
    /**
     * Update model
     *
     * @param \BSR\Contracts\Subscriptions\ModelContract $model
     * @param                                            $attributes
     *
     * @return bool
     */
    public function update(ModelContract $model, $attributes): bool;
    
    /**
     * Delete an subscription.
     *
     * @param \BSR\Contracts\Subscriptions\ModelContract $model
     *
     * @return bool
     */
    public function delete(ModelContract $model): bool;
}
