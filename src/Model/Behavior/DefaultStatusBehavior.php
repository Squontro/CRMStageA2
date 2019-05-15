<?php 
namespace App\Model\Behavior;

use ArrayObject;
use Cake\Datasource\EntityInterface;
use Cake\Event\Event;
use Cake\ORM\Behavior;
use Cake\ORM\Entity;
use Cake\ORM\Query;
use Cake\Utility\Text;

class DefaultStatus extends Behavior {
    
    protected $_defaultConfig = [
        'field' => 'opportunity_status_id',
    ];

    public function DefaultStatus(Entity $entity){
        
    }

    public function beforeSave(Event $event, EntityInterface $entity, ArrayObject $options){
        $this->DefaultStatus($entity);
    }

}

?>