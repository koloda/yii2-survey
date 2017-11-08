<?php
/**
 * Created by PhpStorm.
 * User: kozhevnikov
 * Date: 10/10/2017
 * Time: 13:59
 */

use common\modules\survey\models\SurveyUserAnswer;
use vova07\imperavi\Widget;
use yii\helpers\Html;
use yii\helpers\Url;

/** @var $question \common\modules\survey\models\SurveyQuestion */
/** @var $form \yii\widgets\ActiveForm */

echo Html::beginTag('div', ['class' => 'answers-stat']);
foreach ($question->answers as $i => $answer) {
    $average = $answer->getTotalUserAnswersCount();
    $average = $average > 0 ? $average : 0;
    echo Html::label($answer->survey_answer_name) . ' - ' . "average <b>$average</b>";
    echo Html::tag('br', '');
}
echo Html::endTag('div');