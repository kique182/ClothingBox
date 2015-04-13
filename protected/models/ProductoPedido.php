<?php

/**
 * This is the model class for table "producto_pedido".
 *
 * The followings are the available columns in table 'producto_pedido':
 * @property integer $idProducto_Pedido
 * @property string $Precio_Compra
 * @property integer $Pedido_idpedido
 * @property integer $Producto_idproducto
 *
 * The followings are the available model relations:
 * @property Pedido $pedidoIdpedido
 * @property Productos $productoIdproducto
 */
class ProductoPedido extends CActiveRecord
{
	/**
	 * @return string the associated database table name
	 */
	public function tableName()
	{
		return 'producto_pedido';
	}

	/**
	 * @return array validation rules for model attributes.
	 */
	public function rules()
	{
		// NOTE: you should only define rules for those attributes that
		// will receive user inputs.
		return array(
			array('idProducto_Pedido, Precio_Compra, Pedido_idpedido, Producto_idproducto', 'required'),
			array('idProducto_Pedido, Pedido_idpedido, Producto_idproducto', 'numerical', 'integerOnly'=>true),
			array('Precio_Compra', 'length', 'max'=>6),
			// The following rule is used by search().
			// @todo Please remove those attributes that should not be searched.
			array('idProducto_Pedido, Precio_Compra, Pedido_idpedido, Producto_idproducto', 'safe', 'on'=>'search'),
		);
	}

	/**
	 * @return array relational rules.
	 */
	public function relations()
	{
		// NOTE: you may need to adjust the relation name and the related
		// class name for the relations automatically generated below.
		return array(
			'pedidoIdpedido' => array(self::BELONGS_TO, 'Pedido', 'Pedido_idpedido'),
			'productoIdproducto' => array(self::BELONGS_TO, 'Productos', 'Producto_idproducto'),
		);
	}

	/**
	 * @return array customized attribute labels (name=>label)
	 */
	public function attributeLabels()
	{
		return array(
			'idProducto_Pedido' => 'Id Producto Pedido',
			'Precio_Compra' => 'Precio Compra',
			'Pedido_idpedido' => 'Pedido Idpedido',
			'Producto_idproducto' => 'Producto Idproducto',
		);
	}

	/**
	 * Retrieves a list of models based on the current search/filter conditions.
	 *
	 * Typical usecase:
	 * - Initialize the model fields with values from filter form.
	 * - Execute this method to get CActiveDataProvider instance which will filter
	 * models according to data in model fields.
	 * - Pass data provider to CGridView, CListView or any similar widget.
	 *
	 * @return CActiveDataProvider the data provider that can return the models
	 * based on the search/filter conditions.
	 */
	public function search()
	{
		// @todo Please modify the following code to remove attributes that should not be searched.

		$criteria=new CDbCriteria;

		$criteria->compare('idProducto_Pedido',$this->idProducto_Pedido);
		$criteria->compare('Precio_Compra',$this->Precio_Compra,true);
		$criteria->compare('Pedido_idpedido',$this->Pedido_idpedido);
		$criteria->compare('Producto_idproducto',$this->Producto_idproducto);

		return new CActiveDataProvider($this, array(
			'criteria'=>$criteria,
		));
	}

	/**
	 * Returns the static model of the specified AR class.
	 * Please note that you should have this exact method in all your CActiveRecord descendants!
	 * @param string $className active record class name.
	 * @return ProductoPedido the static model class
	 */
	public static function model($className=__CLASS__)
	{
		return parent::model($className);
	}
}
