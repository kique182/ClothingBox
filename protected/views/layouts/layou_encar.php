<?php /* @var $this Controller */ ?>
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml" xml:lang="en" lang="en">
<head>
	<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
	<meta name="language" content="es" />

    <link rel="shortcut icon" href="<?php echo Yii::app()->request->baseUrl; ?>/images/Imagenes/carrito.png" type="image/x-icon" />
	<link rel="stylesheet" type="text/css" href="<?php echo Yii::app()->request->baseUrl; ?>/css/screen.css" media="screen, projection" />
	<link rel="stylesheet" type="text/css" href="<?php echo Yii::app()->request->baseUrl; ?>/css/print.css" media="print" />
	<link rel="stylesheet" type="text/css" href="<?php echo Yii::app()->request->baseUrl; ?>/css/main.css" />
	<link rel="stylesheet" type="text/css" href="<?php echo Yii::app()->request->baseUrl; ?>/css/form.css" />
    <link rel="stylesheet" type="text/css" href="<?php echo Yii::app()->request->baseUrl; ?>/css/Estilos/estilos.css" />
    <link rel="stylesheet" type="text/css" href="<?php echo Yii::app()->request->baseUrl; ?>/css/Estilos/estilo_menu.css" />
    <link rel="stylesheet" type="text/css" href="<?php echo Yii::app()->request->baseUrl; ?>/css/Estilos/usuarios_admin.css" />
    <link rel="stylesheet" type="text/css" href="<?php echo Yii::app()->request->baseUrl; ?>/css/Estilos/estilo_registro.css" />
    <link rel="stylesheet" type="text/css" href="<?php echo Yii::app()->request->baseUrl; ?>/css/Estilos/estilo_menu_lateral.css" />
        <link rel="stylesheet" type="text/css" href="<?php echo Yii::app()->request->baseUrl; ?>/js/css/style.css" />
    <script type="text/javascript" src="<?php echo Yii::app()->request->baseUrl; ?>/js/js/modernizr.custom.63321.js"></script>

	<title><?php echo CHtml::encode($this->pageTitle); ?></title>
</head>

<body>
    <header>
        <div class="logo">
            <a href="#"><?php echo CHtml::image(Yii::app()->request->baseUrl.'/images/Imagenes/logo2.png');?>
            <p><?php echo CHtml::encode(Yii::app()->name); ?></p></a>
        </div>
        <div class="carrito">
        </div>
        <div id="menu">
        <?php $this->widget('zii.widgets.CMenu',array(
                'items'=>array(
                        array('label'=>'Inicio', 'url'=>array('index')),
                        array('label'=>'Productos', 'url'=>array('#'),
                            'items' => array(
                            array('label' => 'Producto Más Vendido', 'url' => array('mas_vendido')))),
                        array('label'=>'Reclamos', 'url'=>array('#')),
                        array('label'=>'Pedidos', 'url'=>array('pedidos')),
                        array('label'=>Yii::app()->user->name, 'url'=>array('#'), 
                            'items' => array(
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
        <div class="contenido_afuera">    
            <div class='info' style='text-align:center;'>
                <?php
                    $flashMessages = Yii::app()->user->getFlashes();
                    if($flashMessages)
                    {
                        echo '<ul class="flashes">';
                        foreach ($flashMessages as $key => $message)
                        {
                            echo '<li><div class="flash-' . $key . '">' . $message . "</div></li>";
                        }
                        echo '</ul>';                
                    }
                ?>
            </div>
            <?php echo $content; ?>
        </div>
        
    <div class="clear"></div>

    <div id="footer">
            Copyright &copy; <?php echo date('Y'); ?> por Clothing Box.<br/>
            Todos los Derechos Reservados.<br/>
            <?php echo Yii::powered(); ?>
    </div><!-- footer -->

<script type="text/javascript" src="<?php echo Yii::app()->request->baseUrl; ?>/jcart/js/jquery-1.4.4.min.js"></script>
<script type="text/javascript" src="<?php echo Yii::app()->request->baseUrl; ?>/js/js/modernizr.custom.63321.js"></script>
</body>
</html>

<?php
    Yii::app()->clientScript->registerScript(
        'myHideEffect',
        '$("info").animate({opacity: 1.0}, 10000).slideUp("slow");',
        CClientScript::POS_READY
        );
?>