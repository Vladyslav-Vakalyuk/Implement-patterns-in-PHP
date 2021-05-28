<?php

/**
 * Class Adapter
 */
class Adapter implements TargetInterface
{
    /**
     * @var Client
     */
    public $clientObj;

    /**
     * Adapter constructor.
     *
     * @param Client $clientObj
     */
    public function __construct(Client $clientObj)
    {
        $this->clientObj = $clientObj;
    }

    /**
     * @param float $double
     */
    public function targetDouble(float $double)
    {
        $this->clientObj->clientDouble($double);
    }

    /**
     * @param int $int
     */
    public function targetInt(int $int)
    {
        $this->clientObj->clientInt($int * 2);
    }

    /**
     * @param string $string
     */
    public function targetChar(string $string)
    {
        for ($i = 0; $i < 5; $i++) {
            $this->clientObj->clientChar($string);
        }
    }
}