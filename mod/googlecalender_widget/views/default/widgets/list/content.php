<?php
 $widget = $vars['entity'];
 if (!$widget->gadress) {
  return;
 }
 $gmail = $widget->gadress;
  ?>
<style>
.googleiframe{
width:100%;
}
</style> 
<div id="content; ?>"  class="googleiframe"> 
<iframe src="https://calendar.google.com/calendar/embed?src=<?php echo $gmail."&ctz=Europe/Istanbul"; ?>" width=100%  height=500 frameborder=0 scrolling="no"></iframe>
</div>
