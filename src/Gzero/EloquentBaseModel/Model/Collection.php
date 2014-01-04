<?php namespace Gzero\EloquentBaseModel\Model;

use Illuminate\Database\Eloquent\Collection as EloquentCollection;

/**
 * Class Collection
 *
 * This class represents modified eloquent collection
 *
 * @author  Adrian Skierniewski <adrian.skierniewski@gmail.com>
 * @package Gzero\EloquentBaseModel\Model
 */
class Collection extends EloquentCollection {

    /**
     * Find a model in the collection by custom attribute
     *
     * @param  mixed $key     Attribute name
     * @param  mixed $value   Attribute Value
     * @param  mixed $default Default value if not found
     *
     * @return \Illuminate\Database\Eloquent\Model
     */
    public function findByAttribute($key, $value, $default = NULL)
    {
        return array_first(
            $this->items,
            function ($itemKey, $model) use ($key, $value) {
                return $model->getAttribute($key) == $value;
            },
            $default
        );
    }

} 
