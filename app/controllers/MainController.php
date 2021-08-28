<?php

namespace app\controllers;

use core\Tone;
use app\models\Tip;

class MainController extends AppController {
    
    public function indexAction() {
    
       $this->setMeta(
           Tone::$app->getProperty('site_name'),
           'TonePHP Starter KIT',
           'TonePHP, starter kit'
       );

       $m_tip = new Tip();
       $tips = $m_tip->getTips();
       $this->set(compact('tips'));
    }

    public function addTipAction() {
        if (isAjax()) {
            $data = json_decode(file_get_contents("php://input"), TRUE);
            $image = $data['image'];
 
            if ($image) {
                $m_tip = new Tip();
                $insertId = $m_tip->addNew($image);
 
                 if ($insertId) {
                     header('Content-type: application/json');
 
                     echo json_encode([
                         'success' => true
                     ]);
                 }
            }
 
           die;
         }
    }
}