<?php

?>
<?php
class Cmsmart_Ajaxsearch_Model_Source_SortBy
{
  public function toOptionArray()
  {
    return array(
      array('value' => 0, 'label' =>'ID'),
      array('value' => 1, 'label' =>'Name'),
      array('value' => 2, 'label' =>'Price'),
      array('value' => 3, 'label' =>'Create Date'),
      array('value' => 4, 'label' =>'Quantity'),
     
     // and so on...
    );
  }
}
