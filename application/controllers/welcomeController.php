<?php
class welcomeController extends framework
{
    public function __construct()
    {

        $this->helper("link");
    }

    public function index()
    {
        $this->view("welcome");
    }
}
