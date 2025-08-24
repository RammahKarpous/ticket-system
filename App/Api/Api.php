<?php
    
namespace App\Api;

class Api {
    public function __construct(
        protected string $base = '',
        protected string $method = ''
    ) {}
}