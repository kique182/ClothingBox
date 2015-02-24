<?php

/* 
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */
class AdministradorController extends Controller
{
    public $layout='//layouts/layou_admi';

    public function filters()
	{
		return array(
			'accessControl', // perform access control for CRUD operations
			'postOnly + delete', // we only allow deletion via POST request
		);
	}

	public function accessRules()
	{
	    return array(
			array('allow', // allow authenticated user to perform 'create' and 'update' actions
				'roles'=>array('Administrador'),
				'users'=>array('@'),
			),
			array('deny',  // deny all users
				'users'=>array('*'),
			),
		);
    }
    public function actionIndex()
    {
            $this->render('index');
    }
    
    public function actionUsuarios()
    {
            $this->render('usuarios');
    }
    public function actionCategorias()
    {
    		$this->render('categorias');
    }
    
    
}
