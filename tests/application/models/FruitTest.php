<?php

use PHPUnit\Framework\TestCase;

class FruitTest extends TestCase
{

        function setUp()
        {
                $this->CI = &get_instance();
                $this->CI->load->model('fruit');
                $this->item = new Fruit();
                $this->item->id = 1;
                $this->item->name = 'Banana';
                $this->item->color = 'yellow';
                $this->item->weight = 100;
        }

}