<?php

/**
 * This is the model class for table "Programacion".
 *
 * The followings are the available columns in table 'Programacion':
 * @property integer $idProgramacion
 * @property string $fecha
 * @property integer $idParcela
 * @property string $horario
 * @property integer $nivelHumedad
 *
 * The followings are the available model relations:
 * @property Parcela $idParcela0
 */
class Programacion extends CActiveRecord
{
	/**
	 * @return string the associated database table name
	 */
	public function tableName()
	{
		return 'Programacion';
	}

	/**
	 * @return array validation rules for model attributes.
	 */
	public function rules()
	{
		// NOTE: you should only define rules for those attributes that
		// will receive user inputs.
		return array(
			array('fecha, idParcela, horario, nivelHumedad', 'required'),
			array('idParcela, nivelHumedad', 'numerical', 'integerOnly'=>true),
			array('horario', 'length', 'max'=>45),
			// The following rule is used by search().
			// @todo Please remove those attributes that should not be searched.
			array('idProgramacion, fecha, idParcela, horario, nivelHumedad', 'safe', 'on'=>'search'),
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
			'idParcela0' => array(self::BELONGS_TO, 'Parcela', 'idParcela'),
		);
	}

	/**
	 * @return array customized attribute labels (name=>label)
	 */
	public function attributeLabels()
	{
		return array(
			'idProgramacion' => 'Id Programacion',
			'fecha' => 'Fecha',
			'idParcela' => 'Id Parcela',
			'horario' => 'Horario',
			'nivelHumedad' => 'Nivel Humedad',
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

		$criteria->compare('idProgramacion',$this->idProgramacion);
		$criteria->compare('fecha',$this->fecha,true);
		$criteria->compare('idParcela',$this->idParcela);
		$criteria->compare('horario',$this->horario,true);
		$criteria->compare('nivelHumedad',$this->nivelHumedad);

		return new CActiveDataProvider($this, array(
			'criteria'=>$criteria,
		));
	}

	/**
	 * Returns the static model of the specified AR class.
	 * Please note that you should have this exact method in all your CActiveRecord descendants!
	 * @param string $className active record class name.
	 * @return Programacion the static model class
	 */
	public static function model($className=__CLASS__)
	{
		return parent::model($className);
	}
}
