<?php
namespace Wandi\MvcLoginRegister\Controller;



class HomeController
{
 
    function index(): void
    {
        include '../app/View/index.php';
    }
    function login()
    {
        include '../app/View/login.php';
    }
    function signup()
    {
        include '../app/View/register.php';
    }
}