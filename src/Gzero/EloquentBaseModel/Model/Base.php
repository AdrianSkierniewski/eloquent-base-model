<?php namespace Gzero\EloquentBaseModel\Model;

/**
 * Class Base Model
 *
 * This class represents abstract base eloquent model for inheritance
 *
 * @author  Adrian Skierniewski <adrian.skierniewski@gmail.com>
 * @package Gzero\EloquentBaseModel\Model
 */
abstract class Base extends \Eloquent {

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
