<?php

/**
 * This is the model class for table "Productos".
 *
 * The followings are the available columns in table 'Productos':
 * @property integer $idproducto
 * @property string $nombre
 * @property string $descripcion
 * @property double $precio
 * @property integer $Categoria_idcategoria
 *
 * The followings are the available model relations:
 * @property Inventario[] $inventarios
 * @property ProductoPedido[] $productoPedidos
 * @property Categorias $categoriaIdcategoria
 */
class Productos extends CActiveRecord
{
	/**
	 * @return string the associated database table name
	 */
	public function tableName()
	{
		return 'Productos';
	}

	/**
	 * @return array validation rules for model attributes.
	 */
	public function rules()
	{
		// NOTE: you should only define rules for those attributes that
		// will receive user inputs.
		return array(
			array('nombre, descripcion, precio, Categoria_idcategoria', 'required'),
			array('Categoria_idcategoria', 'numerical', 'integerOnly'=>true),
			array('precio', 'numerical'),
			array('nombre', 'length', 'max'=>50),
			array('descripcion', 'length', 'max'=>150),
			// The following rule is used by search().
			// @todo Please remove those attributes that should not be searched.
			array('idproducto, nombre, descripcion, precio, Categoria_idcategoria', 'safe', 'on'=>'search'),
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
			'inventarios' => array(self::HAS_MANY, 'Inventario', 'Producto_idproducto'),
			'productoPedidos' => array(self::HAS_MANY, 'ProductoPedido', 'Producto_idproducto'),
			'categoriaIdcategoria' => array(self::BELONGS_TO, 'Categorias', 'Categoria_idcategoria'),
		);
	}

	/**
	 * @return array customized attribute labels (name=>label)
	 */
	public function attributeLabels()
	{
		return array(
			'idproducto' => 'Idproducto',
			'nombre' => 'Nombre',
			'descripcion' => 'Descripcion',
			'precio' => 'Precio',
			'Categoria_idcategoria' => 'Categoria Idcategoria',
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

		$criteria->compare('idproducto',$this->idproducto);
		$criteria->compare('nombre',$this->nombre,true);
		$criteria->compare('descripcion',$this->descripcion,true);
		$criteria->compare('precio',$this->precio);
		$criteria->compare('Categoria_idcategoria',$this->Categoria_idcategoria);

		return new CActiveDataProvider($this, array(
			'criteria'=>$criteria,
		));
	}

	/**
	 * Returns the static model of the specified AR class.
	 * Please note that you should have this exact method in all your CActiveRecord descendants!
	 * @param string $className active record class name.
	 * @return Productos the static model class
	 */
	public static function model($className=__CLASS__)
	{
		return parent::model($className);
	}
}
