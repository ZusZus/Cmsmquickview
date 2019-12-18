<?php

?>
<?php

class Cmsmart_Ajaxsearch_Model_Source_Order
{
  public function toOptionArray()
  {
    return array(
      array('value' => 0, 'label' =>'Ascending'),
      array('value' => 1, 'label' => 'Descending'),     
     // and so on...
    );
  }
}
