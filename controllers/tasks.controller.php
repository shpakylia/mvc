<?php

class TasksController extends Controller{

    public function __construct($data = array()){
        parent::__construct($data);
        $this->model = new Task();
    }

    public function index(){
//        $this->data['pages'] = $this->model->getList();
    }

    public function view(){
        $params = App::getRouter()->getParams();

//        if ( isset($params[0]) ){
//            $alias = strtolower($params[0]);
//            $this->data['page'] = $this->model->getByAlias($alias);
//        }
    }



}