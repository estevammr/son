<?php

/**
 * Created by PhpStorm.
 * User: estev_000
 * Date: 02/09/2017
 * Time: 16:27
 */

declare(strict_types = 1);
namespace EstevamFin\View;

use Psr\Http\Message\ResponseInterface;

interface ViewRendererInterface
{
    public function render(string $template, array $context = []): ResponseInterface;
}