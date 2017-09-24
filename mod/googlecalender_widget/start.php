<?php
function googlecalender_init() {        
    elgg_register_widget_type('list', 'Google Takvim', 'Google Calender Widget',$context='profile',$multiple=true);
}
elgg_register_event_handler('init', 'system', 'googlecalender_init');       
?>