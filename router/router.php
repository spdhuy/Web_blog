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
if(isset($_GET['page'])) {
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
        case 'sign_in':
            request('AccountController','signIn');
            break;
        case 'sign_up':
            request('AccountController','signUp');
            break;
        case 'register':
            request('AccountController','register');
            break;
        case 'login':
            request('AccountController','login');
            break;
        case 'detail_blog':
            request('BlogController','viewDetailBLog');
            break;
        case 'detail_account':
            request('AccountController','viewDetailAccount');
            break;
        case 'view_create_blog':
            request('ClientController','viewCreateBLogPage');
            break;
        case 'post_blog':
            request('ClientController','postBlog');
            break;
        case 'log_out':
            request('ClientController','logOut');
            break;
        case 'to_edit_account_page':
            request('AccountController','editInfo');
            break;
        case 'update_info':
            request('AccountController','updateInfo');
            break;
        case 'to_edit_blog_page':
            request('ClientController','toEditBlog');
            break;
        case 'to_list_own_page':
            request('ClientController','getListUserBlog');
            break;
        case 'edit_own_blog':
            request('ClientController','editBlog');
            break;
    }
} else request('ClientController','getAll');
