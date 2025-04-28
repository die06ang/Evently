<?php

namespace controllers;

class events extends \Controller
{
    protected function Index()
    {
        $viewModel = new \EventModel();
        $this->ReturnView($viewModel->Index(), true);
    }

    protected function add()
    {
        if (!isset($_SESSION['is_logged_in'])) {
            header('Location: ' . ROOT_URL . 'events');
        }

        $viewModel = new \EventModel();
        $this->ReturnView($viewModel->add(), true);
    }
}