<?php

namespace App\Router;

use Nette;
use Nette\Application\Routers\RouteList;
use Nette\Application\Routers\Route;

/**
 * Router factory.
 */
class RouterFactory
{

    /**
     * @return \Nette\Application\IRouter
     */
    public function createRouter()
    {
        $router = new RouteList();
        
	$router[] = new Route('index.php', 'Front:Homepage:default', Route::ONE_WAY);

        $router[] = $adminRouter = new RouteList('Admin');
        $adminRouter[] = new Route("admin/<presenter>/<action>[/<id>]", array(
            'presenter' => "Default",
            'action' => "default",
            'id' => NULL,
        ));

        $router[] = $adminRouter = new RouteList('Front');
        $adminRouter[] = new Route("<presenter>/<action>[/<id>]", array(
            'presenter' => "Homepage",
            'action' => "default",
            'id' => NULL,
        ));

        return $router;
    }

}
