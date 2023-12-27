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
    function tambahBarang()
    {
        include 'tambah.php';
    }
    function admin()
    {
        include '../app/View/admin.php';
    }
    function detail()
    {
        include 'detail.php';
    }
    function css()
    {
        include '../app/View/bootstrap-5.3.2-dist/css/bootstrap.css';
    }
}