<?php

namespace dto;
use enum\TariffTypes;

class TariffDto
{
    public function __construct(
        public string $name,
        public int    $expired,
        public int    $speed,
        public TariffTypes $type
    )
    {
    }
}