<?php

/**
 * Interface TargetInterface
 */
interface TargetInterface
{
    /**
     * @param float $double
     *
     * @return mixed
     */
    public function targetDouble(float $double);

    /**
     * @param int $int
     *
     * @return mixed
     */
    public function targetInt(int $int);

    /**
     * @param string $string
     *
     * @return mixed
     */
    public function targetChar(string $string);
}