<div>
    <label>Gmail adresi:</label> 
<?php 
    
    $widget = $vars['entity'];
 
    echo elgg_view('input/text', array(
        'name' => 'params[gadress]', 
        'value' => $widget->gadress,
        'class' => 'googleiframe-input-text',
    )); 
?>
</div>