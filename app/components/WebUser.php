<?php

class WebUser extends CWebUser {

    private $_model = null;

    function getRole() {
        if ($user = $this->getModel()) {
            return $user->role;
        }
    }

    public function getModel() {
        if (!$this->isGuest && $this->_model === null) {
            $this->_model = Users::model()->findByPk($this->id);
        }
        return $this->_model;
    }
    
    /**
     * Check user ability for genre
     * @param int $genre_id genre_id
     * @param float $min_value minimum available value
     * @param int $user_id user_id
     */
    public function checkAbility($genre_id, $min_value=5, $user_id=null) {
        $user_id = $user_id == null ? $this->id : $user_id;
        
        $model = UsersAbility::model()->find("user_id = {$user_id} AND genre_id = {$genre_id}");

        if ($model == null OR $model->value < $min_value)
            return false;
        return true;
    }
    
    public function checkNickname($user_id=null) {
        $user_id = $user_id == null ? $this->id : $user_id;

        if (Users::model()->findByPk($user_id)->nickname == '')
            Yii::app()->controller->redirect('/firststeps/nickname');
    }

}