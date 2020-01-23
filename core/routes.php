<?php 

//This is an array of the routes used for this website.
$routes = [
    //These are the static routes.
    'home' => 'StaticPageController@home',
    '' => 'StaticPageController@home',
    'about' => 'StaticPageController@about',
    'services' => 'StaticPageController@services',
    'contact' => 'StaticPageController@contact',
    'testing' => 'StaticPageController@testing',
    //These are the services routes.
    'service-tutoring' => 'ServiceController@tutor',
    'service-counseling' => 'ServiceController@counsel',
    'service-editing' => 'ServiceController@edit',
    'service-speech' => 'ServiceController@speech',
    'service-class' => 'ServiceController@class',
    'submit-form' => 'ServiceController@submit',
    'pay' => 'PaymentController@pay'
]

?>