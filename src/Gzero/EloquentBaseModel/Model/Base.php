<?php namespace Gzero\EloquentBaseModel\Model;

use Illuminate\Database\Eloquent\Model;

/**
 * Class Base Model
 *
 * This class represents abstract base eloquent model for inheritance
 *
 * @author  Adrian Skierniewski <adrian.skierniewski@gmail.com>
 * @package Gzero\EloquentBaseModel\Model
 */
abstract class Base extends Model {

    /**
     * Create a new Eloquent Collection instance.
     *
     * @param  array $models
     *
     * @return Collection
     */
    public function newCollection(array $models = array())
    {
        return new Collection($models);
    }
} 
