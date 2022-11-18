<?php
/**
 * Created by PhpStorm.
 * User: liuyan
 * Date: 2022/11/11
 * Time: 18:07
 */


class DeliverIntention extends BaseModel {

    public function tableName() {
        return '{{Delivery_man}}';//考试科目设置
    }

    /**
     * 属性标签
     */
    public function attributeLabels() {

        return array(
            'id' => 'ID',
            'code' =>'送货人ID',
            'name'  => '姓名',
            'phone'  => '送货人电话'

        );
    }
    /**
     * 模型验证规则
     */
    public function rules() {

        return array(
            array('code', 'required', 'message' => '{attribute} 不能为空'),
            array('name', 'required', 'message' => '{attribute} 不能为空'),
            array('phone', 'required', 'message' => '{attribute} 不能为空'),
           // array('price', 'required', 'message' => '{attribute} 不能为空'),
            array('code,name,phone','safe'),
            //array($s1,'safe'),
        );
    }

    /**
     * 模型关联规则
     */
    public function relations() {
        return array(

        );
    }



    /**
     * Returns the static model of the specified AR class.
     */
    public static function model($className = __CLASS__) {
        return parent::model($className);
    }

}