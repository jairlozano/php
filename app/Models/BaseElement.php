<?php

class BaseElement {
    private $title;
    public $description;
    public $visible = true;
    public $months;

    public function __construct($title, $description){
        $this->setTitle($title);
        $this->description = $description;
    }

    public function setTitle($t){
        if($t == ''){
            $this->title = 'N/A';
        } else {
            $this->title = $t;
        }
    }

    public function getTitle(){
        return $this->title;
    }

    public function getDurationAsString(){
        $years = floor($this->months / 12);
        $extraMonths = $this->months % 12;
        if($years == 0){
          return "$extraMonths month(s)";
        }else if($extraMonths == 0){
          return "$years year(s)";
        }else{
          return "$years year(s) $extraMonths months";
        }
      }
}