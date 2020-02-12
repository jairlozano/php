<?php

require_once 'BaseElement.php';

class Job extends BaseElement {
    public function __construct($title, $description){
        $newTitle = 'Job: ' . $title;
        $this->title = $newTitle;
    }

    public function getDurationAsString(){
        $years = floor($this->months / 12);
        $extraMonths = $this->months % 12;
        if($years == 0){
          return "$extraMonths month(s)";
        }else if($extraMonths == 0){
          return "$years year(s)";
        }else{
          return "Job duration: $years year(s) $extraMonths months";
        }
    }
}