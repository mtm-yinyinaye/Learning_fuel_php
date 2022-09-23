<?php

class Controller_Example extends Controller_Welcome {
    public function action_index()
    {
        echo "This is example controller";
    }

    public function action_show()
    {
        echo "This is show method in example controller";
    }

    public function action_detail()
    {
        echo "This is detail method in example controller";
    }
}