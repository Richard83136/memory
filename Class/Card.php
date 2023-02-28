<?php

class Card
{
    public $id;
    public $img;
    public $retourImg;
    public function __construct($id, $img, $retourImg)
    {
        $this->id = $id + 1;
        $this->img = $img;
        $this->retourImg = $retourImg;
    }

    public function generateNum()
    {
        switch ($this->id) {
            case 1:
            case 2:
                return 'tata12';
            case 3:
            case 4:
                return 'tata34';
            case 5:
            case 6:
                return 'tata56';
            case 7:
            case 8:
                return 'tata78';
            case 9:
            case 10:
                return 'tata910';
            case 11:
            case 12:
                return 'tata1112';
            case 13:
            case 14:
                return 'tata1314';
            case 15:
            case 16:
                return 'tata1516';
            case 17:
            case 18:
                return 'tata1718';
            case 19:
            case 20:
                return 'tata1920';
            case 21:
            case 22:
                return 'tata2122';
            case 23:
            case 24:
                return 'tata2324';
        }
    }

    public function cellNumber() {
        return 'cell'.$this->id;
    }    
}

?>