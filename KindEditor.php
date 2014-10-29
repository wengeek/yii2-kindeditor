<?php
namespace crazycoder\kindeditor;

use yii\helpers\Json;
use yii\helpers\Html;
class KindEditor extends \yii\widgets\InputWidget
{
    public $id = '';
    public $configs = [];
    public function init()
    {
        KindEditorAssets::register($this->view);
    }
    
    public function run()
    {
        if(empty($this->options['id'])) {
            $this->options['id'] = $this->getId();
        }
        
        echo Html::activeTextarea($this->model, $this->attribute, $this->options);
        
        if(empty($this->configs)) {
            $this->getView()->registerJs('KindEditor.ready(function(K){K.create("#'.$this->options['id'].'");prettyPrint();});');
        } else {
            $this->getView()->registerJs('KindEditor.ready(function(K){K.create("#'.$this->options['id'].'", '.Json::encode($this->configs).');prettyPrint();});');
        }
    }
}
