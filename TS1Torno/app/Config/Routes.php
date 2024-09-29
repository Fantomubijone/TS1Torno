<?php

use CodeIgniter\Router\RouteCollection;

/**
 * @var RouteCollection $routes
 */
$routes->get('/', 'Operations::index');

// localhost/TS1LastName/operations/displayinfo/[student number]/[full name]/[degree program]/[year level]/[section]
$routes->get('operations/displayinfo/(:any)/(:any)/(:any)/(:any)/(:any)','Operations::displayInfo/$1/$2/$3/$4/$5');

//other varaitions
$routes->get('operations/DISPLAYINFO/(:any)/(:any)/(:any)/(:any)/(:any)','Operations::displayInfo/$1/$2/$3/$4/$5');
$routes->get('operations/Displayinfo/(:any)/(:any)/(:any)/(:any)/(:any)','Operations::displayInfo/$1/$2/$3/$4/$5');
$routes->get('operations/displayInfo/(:any)/(:any)/(:any)/(:any)/(:any)','Operations::displayInfo/$1/$2/$3/$4/$5');
$routes->get('operations/DisplayInfo/(:any)/(:any)/(:any)/(:any)/(:any)','Operations::displayInfo/$1/$2/$3/$4/$5');

// localhost/TS1LastName/operations/compute/[number]/[number]
$routes->get('operations/compute/(:num)/(:num)', 'Operations::compute/$1/$2');
$routes->get('operations/Compute/(:num)/(:num)', 'Operations::compute/$1/$2');