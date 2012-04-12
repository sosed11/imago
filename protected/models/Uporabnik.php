<?php

/**
 * This is the model class for table "uporabnik".
 *
 * The followings are the available columns in table 'uporabnik':
 * @property integer $iduporabnik
 * @property string $ime
 * @property string $priimek
 * @property string $upime
 * @property string $geslo
 * @property string $naslov
 * @property string $mesto
 * @property string $email
 * @property integer $vloga
 */
class Uporabnik extends CActiveRecord
{
	/**
	 * Returns the static model of the specified AR class.
	 * @param string $className active record class name.
	 * @return Uporabnik the static model class
	 */
	public static function model($className=__CLASS__)
	{
		return parent::model($className);
	}

	/**
	 * @return string the associated database table name
	 */
	public function tableName()
	{
		return 'uporabnik';
	}

	/**
	 * @return array validation rules for model attributes.
	 */
	public function rules()
	{
		// NOTE: you should only define rules for those attributes that
		// will receive user inputs.
		return array(
			array('ime, priimek, upime, geslo, naslov, mesto, email, vloga', 'required'),
			array('vloga', 'numerical', 'integerOnly'=>true),
			array('ime, geslo', 'length', 'max'=>15),
			array('priimek', 'length', 'max'=>30),
			array('upime', 'length', 'max'=>13),
			array('naslov, mesto, email', 'length', 'max'=>45),
			// The following rule is used by search().
			// Please remove those attributes that should not be searched.
			array('iduporabnik, ime, priimek, upime, geslo, naslov, mesto, email, vloga', 'safe', 'on'=>'search'),
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
		);
	}

	/**
	 * @return array customized attribute labels (name=>label)
	 */
	public function attributeLabels()
	{
		return array(
			'iduporabnik' => 'Iduporabnik',
			'ime' => 'Ime',
			'priimek' => 'Priimek',
			'upime' => 'Upime',
			'geslo' => 'Geslo',
			'naslov' => 'Naslov',
			'mesto' => 'Mesto',
			'email' => 'Email',
			'vloga' => 'Vloga',
		);
	}

	/**
	 * Retrieves a list of models based on the current search/filter conditions.
	 * @return CActiveDataProvider the data provider that can return the models based on the search/filter conditions.
	 */
	public function search()
	{
		// Warning: Please modify the following code to remove attributes that
		// should not be searched.

		$criteria=new CDbCriteria;

		$criteria->compare('iduporabnik',$this->iduporabnik);
		$criteria->compare('ime',$this->ime,true);
		$criteria->compare('priimek',$this->priimek,true);
		$criteria->compare('upime',$this->upime,true);
		$criteria->compare('geslo',$this->geslo,true);
		$criteria->compare('naslov',$this->naslov,true);
		$criteria->compare('mesto',$this->mesto,true);
		$criteria->compare('email',$this->email,true);
		$criteria->compare('vloga',$this->vloga);

		return new CActiveDataProvider($this, array(
			'criteria'=>$criteria,
		));
	}
}