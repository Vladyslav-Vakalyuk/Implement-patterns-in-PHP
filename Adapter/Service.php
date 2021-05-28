<?php

/**
 * Class Service
 */
class Service
{
    /**
     * @var TargetInterface
     */
    public $itarget;

    /**
     * Service constructor.
     *
     * @param TargetInterface $itarget
     */
    public function __construct(TargetInterface $itarget)
    {
        $this->itarget = $itarget;
    }

    /**
     *
     */
    public function execute()
    {
        //working with itarget
    }
}