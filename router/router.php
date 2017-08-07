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
        case 'list_category':
            request('CategoryController','getAll');
            break;
        case 'add_category':
            request('CategoryController','addCategory');
            break;
        case 'edit_category':
            request('CategoryController','editCategory');
            break;
        case 'delete_category':
            request('CategoryController','deleteCategory');
            break;

        case 'list_account':
            request('AccountController','getAll');
            break;
        case 'add_account':
            request('AccountController','addAccount');
        break;
        case 'edit_account':
            request('AccountController','editAccount');
            break;
        case 'delete_account':
            request('AccountController','deleteAccount');
            break;

        case 'list_blog':
            request('BlogController','getAll');
            break;
        case 'add_blog':
            request('BlogController','addBlog');
            break;
        case 'edit_blog':
            request('BlogController','editBlog');
            break;
        case 'delete_blog':
            request('BlogController','deleteBlog');
            break;

        case 'list_interact':
            request('InteractController','getAll');
            break;
        case 'add_interact':
            request('InteractController','addInteract');
            break;
        case 'edit_interact':
            request('InteractController','editInteract');
            break;
        case 'delete_interact':
            request('InteractController','deleteInteract');
            break;

    }
else request('CategoryController','getAll');
