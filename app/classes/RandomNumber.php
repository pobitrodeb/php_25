<?php


namespace App\classes;


class RandomNumber
{
    public $number, $result;
    public function __construct($data =null)
    {
        if($data)
        {
            $this->number = $data['number'];
        }
    }

    public function getAllData()
  {
      return[
         0=>[
           'id'         => 1,
           'value'      => 10,
         ],
          1=>[
           'id'         => 2,
           'value'      => 20,
         ],
          2=>[
           'id'         => 3,
           'value'      => 30,
         ],
          3=>[
           'id'         => 3,
           'value'      => 30,
         ],
          4=>[
           'id'         => 1,
           'value'      => 40,
         ],
          5=>[
           'id'         => 1,
           'value'      => 50,
         ],
      ];
  }


  public function getRandomResult()
  {
    foreach ($this->number as $item)
    {
        $this->result += $item;
    }
    return $this->result;
  }
}
