<?php


class Home extends Controller{

    public function index()
    {
        echo "Hello From Controller";
    }
}
$home = new Home;
$home->index();

