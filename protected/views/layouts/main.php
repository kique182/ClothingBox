<?php /* @var $this Controller */ ?>
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml" xml:lang="en" lang="en">
<head>
	<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
	<meta name="language" content="es" />

	<!-- blueprint CSS framework -->
	<link rel="stylesheet" type="text/css" href="<?php echo Yii::app()->request->baseUrl; ?>/css/screen.css" media="screen, projection" />
	<link rel="stylesheet" type="text/css" href="<?php echo Yii::app()->request->baseUrl; ?>/css/print.css" media="print" />
	<!--[if lt IE 8]>
	<link rel="stylesheet" type="text/css" href="<?php echo Yii::app()->request->baseUrl; ?>/css/ie.css" media="screen, projection" />
	<![endif]-->

	<link rel="stylesheet" type="text/css" href="<?php echo Yii::app()->request->baseUrl; ?>/css/main.css" />
	<link rel="stylesheet" type="text/css" href="<?php echo Yii::app()->request->baseUrl; ?>/css/form.css" />
        <link rel="stylesheet" type="text/css" href="<?php echo Yii::app()->request->baseUrl; ?>/css/Estilos/estilos.css" />
        <link rel="stylesheet" type="text/css" href="<?php echo Yii::app()->request->baseUrl; ?>/css/Estilos/estilo_menu.css" />
        <link rel="stylesheet" type="text/css" href="<?php echo Yii::app()->request->baseUrl; ?>/css/Estilos/estilo_login.css" />
        <link rel="stylesheet" type="text/css" href="<?php echo Yii::app()->request->baseUrl; ?>/css/Estilos/estilo_registro.css" />

	<title><?php echo CHtml::encode($this->pageTitle); ?></title>
</head>

<body>
    <header>
        <div class="logo">
            <?php echo CHtml::image(Yii::app()->request->baseUrl.'/images/Imagenes/logo2.png');?>
            <p><?php echo CHtml::encode(Yii::app()->name); ?></p>
        </div>
        <div id="menu">
        <?php $this->widget('zii.widgets.CMenu',array(
                'items'=>array(
                        array('label'=>'Inicio', 'url'=>array('/site/index')),
                        array('label'=>'Productos', 'url'=>array('#'),
                            'items' => array(
                            array('label' => 'Mujer', 'url' => '#'),
                            array('label' => 'Hombre', 'url' => '#'))),
                        array('label'=>'Contácto', 'url'=>array('#')),                        
                        array('label'=>'Iniciar Sesión', 'url'=>array('/site/login'), 'visible'=>Yii::app()->user->isGuest),
                        array('label'=>Yii::app()->user->name, 'url'=>array('#'), 
                            'items' => array(
                            array('label' => 'Perfil', 'url' => '#'),
                            array('label' => 'Salir', 'url'=>array('/site/logout'))),'visible'=>!Yii::app()->user->isGuest)
                ),
        )); ?>
        </div><!-- mainmenu -->
        <?php if(isset($this->breadcrumbs)):?>
            <?php $this->widget('zii.widgets.CBreadcrumbs', array(
                    'links'=>$this->breadcrumbs,
            )); ?><!-- breadcrumbs -->
        <?php endif?>
    </header><!-- header -->

    <?php echo $content; ?>

    <div class="clear"></div>

    <div id="footer">
            Copyright &copy; <?php echo date('Y'); ?> por Clothing Box.<br/>
            Todos los Derechos Reservados.<br/>
            <?php echo Yii::powered(); ?>
    </div><!-- footer -->

</body>
</html>
