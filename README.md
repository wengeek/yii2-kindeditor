# Yii2-kindeditor is extention for Yii Framework 2.0

## Installation
The preferred way to install this extension is through [composer](http://getcomposer.org/download/).

Either run

```
php composer.phar require "crazycoder/yii2-kindeditor" "dev-master"
```
or add

```json
"crazycoder/yii2-kindeditor": "dev-master"
```

to the require section of your application's `composer.json` file.

## Usage Example
~~~php
echo $form->field($model, 'post')->widget(crazycoder\kindeditor\KindEditor::className(), [
    'options' => [
        
    ],
    'configs' => [
        'width' => '100%',
        'minHeight' => '400px',
        'resizeType' => '1',
    ]
]);
## configs http://kindeditor.net/docs/option.html
~~~
## HighLight Code Example
crazycoder\kindeditor\LightAsset::register($this);


