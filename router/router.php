<?php
/**
 * Created by PhpStorm.
 * User: huy
 * Date: 7/28/17
 * Time: 4:00 PM
 */
function request($controller,$action){
    require './controllers/'.$controller.'.php';
    $controller_class = new $controller();
    $controller_class->$action();
}
if(isset($_GET['page']))
    switch ($_GET['page']){
        case 'add_category':
            request('CategoryController','addCategory');
            break;
        case 'edit_category':
            request('CategoryController','editCategory');
            break;
        case 'delete_category':
            request('CategoryController','deleteCategory');
            break;
    }
else request('CategoryController','getAll');
