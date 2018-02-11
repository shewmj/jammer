<?php
defined('BASEPATH') OR exit('No direct script access allowed');
class Info extends Application
{
    /**
     * Returns a description of the scenario
     */
    public function index()
    {
        header("Content-type: application/json");
        echo json_encode("Scenario: Best Food Bowl");
    }

    /**
     * Returns the designated category if found,
     * or all of them if one was not found.
     */
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

    /**
     * Returns the designated catelog item if found,
     * or all of them if one was not found.
     */
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

    /**
     * Returns the designated set if found,
     * or all of them if one was not found.
     */
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