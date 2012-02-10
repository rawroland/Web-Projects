<?php
  
  /*
   * Facilities model. 
   */
  class Facility extends AppModel {
    
    var $name = 'Facility';
    
    //For Yacht Model
    var $hasMany = array(
      'Facility' => array(
        'className' => 'Facility',
        'foreignKey' => 'yacht_id'
      )
    );
    
    var $belongsTo = array(
      'Yacht' => array(
        'className' => 'Yacht',
        'foreignKey' => 'yacht_id'
      )
    );
    
  }
?>