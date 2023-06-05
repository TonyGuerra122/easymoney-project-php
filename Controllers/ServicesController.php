<?php
require($_SERVER['DOCUMENT_ROOT'] . "/Models/Services.php");
class ServicesController extends Services{

    private $props;

    public function __construct($id=null){
        $this->props = parent::__construct($id);
    }

    public function getId(){
        return $this->props == true ? $this->id : null;
    }
    public function getTitle(){
        return $this->props == true ? $this->title : null;
    }
    public function getDesc(){
        return $this->props == true ? $this->desc : null;
    }
}