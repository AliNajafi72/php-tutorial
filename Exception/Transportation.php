<?php


class Transportation
{
    public function transport(int $weight) : bool
    {
        if ($weight > 5) {
            throw new HeavyWeightException("Your package weight is too heavy!");
        }
        return true;
    }
}