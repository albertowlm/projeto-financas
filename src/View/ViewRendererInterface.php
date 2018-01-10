<?php
/**
 * Created by PhpStorm.
 * User: alber
 * Date: 05/01/2018
 * Time: 14:45
 */
declare(strict_types=1);
namespace SONFin\View;


use Psr\Http\Message\ResponseInterface;
use Zend\Diactoros\Response;

interface ViewRendererInterface
{
    public function render(string $template, array $context = []): ResponseInterface;



}