<?php

namespace CAC\Component\RateLimit;


class RateLimit
{

    private $maxLimit;

    private $storage;


    public function __construct($config = array())
    {
        $this->maxLimit = 100;

    }

    /**
     * Check if given id has reached the rate limit for the given resource amount
     *
     * @param mixed   $id
     * @param integer $amount
     *
     * @return bool
     */
    public function hasReachedLimit($id, $amount)
    {

    }


    /**
     * Get the current rate limit of the id given
     *
     * @param mixed $id
     */
    public function getCurrentLimit($id)
    {

    }



}
