<?php
declare(strict_types=1);
/**
 * Created by PhpStorm.
 * User: Administrator
 * Date: 2021/5/24
 * Time: 22:45
 */
namespace App\Controller\Index;

use App\Controller\AbstractController;
use Hyperf\Redis\Redis;
use Hyperf\Utils\ApplicationContext;

class User extends AbstractController
{
    public function index()
    {
        $container = ApplicationContext::getContainer();
    }
}