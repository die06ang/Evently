<?php

namespace controllers;

class users extends \Controller
{
    protected function register()
    {
        $viewModel = new \UserModel();
        $this->ReturnView($viewModel->register(), true);
    }

    protected function login()
    {
        $viewModel = new \UserModel();
        $this->ReturnView($viewModel->login(), true);
    }

    protected function logout()
    {
        unset($_SESSION['is_logged_in']);
        unset($_SESSION['user_data']);
        session_destroy();
        // Redirect
        header('Location ' . ROOT_URL);
    }
}