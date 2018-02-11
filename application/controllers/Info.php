<?php
defined('BASEPATH') OR exit('No direct script access allowed');
class Info extends Application
{
    public function index()
    {
        header("Content-type: application/json");
        echo json_encode("Scenario: Best Food Bowl");
    }

    public function category($key = NULL)
    {
        $categories = $this->Categories->all();
        $match = false;
        if($key != NULL)
        {
            foreach($categories as $item)
            {
                if(!strcmp($item->name, $key))
                {
                    $match = true;
                    break;
                }
            }
        }
        header("Content-type: application/json");
        if($match)
        {
            echo json_encode($item);
        }
        else
        {
            echo json_encode($categories);
        }
    }

    public function catelog($key = NULL)
    {
        $accessories = $this->Accessories->all();
        $match = false;
        if($key != NULL)
        {
            foreach($accessories as $item)
            {
                if(!strcmp($item->name, $key))
                {
                    $match = true;
                    break;
                }
            }
        }
        header("Content-type: application/json");
        if($match)
        {
            echo json_encode($item);
        }
        else
        {
            echo json_encode($accessories);
        }
    }

    public function bundle($key = NULL)
    {
        $sets = $this->Set->all();
        $match = false;
        if($key != NULL)
        {
            foreach($sets as $item)
            {
                if(!strcmp($item->name, $key))
                {
                    $match = true;
                    break;
                }
            }
        }
        header("Content-type: application/json");
        if($match)
        {
            echo json_encode($item);
        }
        else
        {
            echo json_encode($sets);
        }
    }
    
}