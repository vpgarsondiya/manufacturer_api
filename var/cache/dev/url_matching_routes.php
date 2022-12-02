<?php

/**
 * This file has been auto-generated
 * by the Symfony Routing Component.
 */

return [
    false, // $matchHost
    [ // $staticRoutes
        '/manufacturer' => [[['_route' => 'app_manufacturer_index', '_controller' => 'App\\Controller\\ManufacturerController::index'], null, ['GET' => 0], null, true, false, null]],
        '/manufacturer/new' => [[['_route' => 'app_manufacturer_new', '_controller' => 'App\\Controller\\ManufacturerController::new'], null, ['GET' => 0, 'POST' => 1], null, false, false, null]],
        '/product' => [[['_route' => 'app_product_index', '_controller' => 'App\\Controller\\ProductController::index'], null, ['GET' => 0], null, true, false, null]],
        '/product/new' => [[['_route' => 'app_product_new', '_controller' => 'App\\Controller\\ProductController::new'], null, ['GET' => 0, 'POST' => 1], null, false, false, null]],
    ],
    [ // $regexpList
        0 => '{^(?'
                .'|/manufacturer/([^/]++)(?'
                    .'|(*:32)'
                    .'|/edit(*:44)'
                    .'|(*:51)'
                .')'
                .'|/product/([^/]++)(?'
                    .'|(*:79)'
                    .'|/edit(*:91)'
                    .'|(*:98)'
                .')'
                .'|/api(?'
                    .'|/\\.well\\-known/genid/([^/]++)(*:142)'
                    .'|(?:/(index)(?:\\.([^/]++))?)?(*:178)'
                    .'|/(?'
                        .'|docs(?:\\.([^/]++))?(*:209)'
                        .'|contexts/([^.]+)(?:\\.(jsonld))?(*:248)'
                        .'|manufacturers(?'
                            .'|(?:\\.([^/]++))?(?'
                                .'|(*:290)'
                            .')'
                            .'|/(?'
                                .'|([^/\\.]++)(?:\\.([^/]++))?(?'
                                    .'|(*:331)'
                                .')'
                                .'|([^/]++)/products(?:\\.([^/]++))?(*:372)'
                            .')'
                        .')'
                        .'|products(?'
                            .'|(?:\\.([^/]++))?(?'
                                .'|(*:411)'
                            .')'
                            .'|/([^/\\.]++)(?:\\.([^/]++))?(?'
                                .'|(*:449)'
                            .')'
                        .')'
                    .')'
                .')'
                .'|/_error/(\\d+)(?:\\.([^/]++))?(*:489)'
            .')/?$}sDu',
    ],
    [ // $dynamicRoutes
        32 => [[['_route' => 'app_manufacturer_show', '_controller' => 'App\\Controller\\ManufacturerController::show'], ['id'], ['GET' => 0], null, false, true, null]],
        44 => [[['_route' => 'app_manufacturer_edit', '_controller' => 'App\\Controller\\ManufacturerController::edit'], ['id'], ['GET' => 0, 'POST' => 1], null, false, false, null]],
        51 => [[['_route' => 'app_manufacturer_delete', '_controller' => 'App\\Controller\\ManufacturerController::delete'], ['id'], ['POST' => 0], null, false, true, null]],
        79 => [[['_route' => 'app_product_show', '_controller' => 'App\\Controller\\ProductController::show'], ['id'], ['GET' => 0], null, false, true, null]],
        91 => [[['_route' => 'app_product_edit', '_controller' => 'App\\Controller\\ProductController::edit'], ['id'], ['GET' => 0, 'POST' => 1], null, false, false, null]],
        98 => [[['_route' => 'app_product_delete', '_controller' => 'App\\Controller\\ProductController::delete'], ['id'], ['POST' => 0], null, false, true, null]],
        142 => [[['_route' => 'api_genid', '_controller' => 'api_platform.action.not_exposed', '_api_respond' => 'true'], ['id'], null, null, false, true, null]],
        178 => [[['_route' => 'api_entrypoint', '_controller' => 'api_platform.action.entrypoint', '_format' => '', '_api_respond' => 'true', 'index' => 'index'], ['index', '_format'], null, null, false, true, null]],
        209 => [[['_route' => 'api_doc', '_controller' => 'api_platform.action.documentation', '_format' => '', '_api_respond' => 'true'], ['_format'], null, null, false, true, null]],
        248 => [[['_route' => 'api_jsonld_context', '_controller' => 'api_platform.jsonld.action.context', '_format' => 'jsonld', '_api_respond' => 'true'], ['shortName', '_format'], null, null, false, true, null]],
        290 => [
            [['_route' => 'api_manufacturers_get_collection', '_controller' => 'api_platform.action.get_collection', '_format' => null, '_stateless' => null, '_api_resource_class' => 'App\\Entity\\Manufacturer', '_api_identifiers' => ['id'], '_api_has_composite_identifier' => false, '_api_exception_to_status' => [], '_api_operation_name' => 'api_manufacturers_get_collection', '_api_collection_operation_name' => 'get'], ['_format'], ['GET' => 0], null, false, true, null],
            [['_route' => 'api_manufacturers_post_collection', '_controller' => 'api_platform.action.post_collection', '_format' => null, '_stateless' => null, '_api_resource_class' => 'App\\Entity\\Manufacturer', '_api_identifiers' => ['id'], '_api_has_composite_identifier' => false, '_api_exception_to_status' => [], '_api_operation_name' => 'api_manufacturers_post_collection', '_api_collection_operation_name' => 'post'], ['_format'], ['POST' => 0], null, false, true, null],
        ],
        331 => [
            [['_route' => 'api_manufacturers_get_item', '_controller' => 'api_platform.action.get_item', '_format' => null, '_stateless' => null, '_api_resource_class' => 'App\\Entity\\Manufacturer', '_api_identifiers' => ['id'], '_api_has_composite_identifier' => false, '_api_exception_to_status' => [], '_api_operation_name' => 'api_manufacturers_get_item', '_api_item_operation_name' => 'get'], ['id', '_format'], ['GET' => 0], null, false, true, null],
            [['_route' => 'api_manufacturers_put_item', '_controller' => 'api_platform.action.put_item', '_format' => null, '_stateless' => null, '_api_resource_class' => 'App\\Entity\\Manufacturer', '_api_identifiers' => ['id'], '_api_has_composite_identifier' => false, '_api_exception_to_status' => [], '_api_operation_name' => 'api_manufacturers_put_item', '_api_item_operation_name' => 'put'], ['id', '_format'], ['PUT' => 0], null, false, true, null],
            [['_route' => 'api_manufacturers_patch_item', '_controller' => 'api_platform.action.patch_item', '_format' => null, '_stateless' => null, '_api_resource_class' => 'App\\Entity\\Manufacturer', '_api_identifiers' => ['id'], '_api_has_composite_identifier' => false, '_api_exception_to_status' => [], '_api_operation_name' => 'api_manufacturers_patch_item', '_api_item_operation_name' => 'patch'], ['id', '_format'], ['PATCH' => 0], null, false, true, null],
        ],
        372 => [[['_route' => 'api_manufacturers_products_get_subresource', '_controller' => 'api_platform.action.get_subresource', '_format' => null, '_stateless' => null, '_api_resource_class' => 'App\\Entity\\Product', '_api_identifiers' => ['id' => ['App\\Entity\\Manufacturer', 'id', true]], '_api_has_composite_identifier' => false, '_api_subresource_operation_name' => 'api_manufacturers_products_get_subresource', '_api_subresource_context' => ['property' => 'products', 'identifiers' => ['id' => ['App\\Entity\\Manufacturer', 'id', true]], 'collection' => true, 'operationId' => 'api_manufacturers_products_get_subresource']], ['id', '_format'], ['GET' => 0], null, false, true, null]],
        411 => [
            [['_route' => 'api_products_get_collection', '_controller' => 'api_platform.action.get_collection', '_format' => null, '_stateless' => null, '_api_resource_class' => 'App\\Entity\\Product', '_api_identifiers' => ['id'], '_api_has_composite_identifier' => false, '_api_exception_to_status' => [], '_api_operation_name' => 'api_products_get_collection', '_api_collection_operation_name' => 'get'], ['_format'], ['GET' => 0], null, false, true, null],
            [['_route' => 'api_products_post_collection', '_controller' => 'api_platform.action.post_collection', '_format' => null, '_stateless' => null, '_api_resource_class' => 'App\\Entity\\Product', '_api_identifiers' => ['id'], '_api_has_composite_identifier' => false, '_api_exception_to_status' => [], '_api_operation_name' => 'api_products_post_collection', '_api_collection_operation_name' => 'post'], ['_format'], ['POST' => 0], null, false, true, null],
        ],
        449 => [
            [['_route' => 'api_products_get_item', '_controller' => 'api_platform.action.get_item', '_format' => null, '_stateless' => null, '_api_resource_class' => 'App\\Entity\\Product', '_api_identifiers' => ['id'], '_api_has_composite_identifier' => false, '_api_exception_to_status' => [], '_api_operation_name' => 'api_products_get_item', '_api_item_operation_name' => 'get'], ['id', '_format'], ['GET' => 0], null, false, true, null],
            [['_route' => 'api_products_delete_item', '_controller' => 'api_platform.action.delete_item', '_format' => null, '_stateless' => null, '_api_resource_class' => 'App\\Entity\\Product', '_api_identifiers' => ['id'], '_api_has_composite_identifier' => false, '_api_exception_to_status' => [], '_api_operation_name' => 'api_products_delete_item', '_api_item_operation_name' => 'delete'], ['id', '_format'], ['DELETE' => 0], null, false, true, null],
            [['_route' => 'api_products_put_item', '_controller' => 'api_platform.action.put_item', '_format' => null, '_stateless' => null, '_api_resource_class' => 'App\\Entity\\Product', '_api_identifiers' => ['id'], '_api_has_composite_identifier' => false, '_api_exception_to_status' => [], '_api_operation_name' => 'api_products_put_item', '_api_item_operation_name' => 'put'], ['id', '_format'], ['PUT' => 0], null, false, true, null],
            [['_route' => 'api_products_patch_item', '_controller' => 'api_platform.action.patch_item', '_format' => null, '_stateless' => null, '_api_resource_class' => 'App\\Entity\\Product', '_api_identifiers' => ['id'], '_api_has_composite_identifier' => false, '_api_exception_to_status' => [], '_api_operation_name' => 'api_products_patch_item', '_api_item_operation_name' => 'patch'], ['id', '_format'], ['PATCH' => 0], null, false, true, null],
        ],
        489 => [
            [['_route' => '_preview_error', '_controller' => 'error_controller::preview', '_format' => 'html'], ['code', '_format'], null, null, false, true, null],
            [null, null, null, null, false, false, 0],
        ],
    ],
    null, // $checkCondition
];
