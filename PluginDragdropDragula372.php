<?php
class PluginDragdropDragula372{
  public static function widget_include_js(){
    $element = array();
    $element[] = wfDocument::createHtmlElement('script', null, array('src' => '/plugin/dragdrop/dragula372/dragula.js', 'type' => 'text/javascript'));
    wfDocument::renderElement($element);
  }
  public static function widget_include_css(){
    $element = wfDocument::createHtmlElement('link', null, array('href' => '/plugin/dragdrop/dragula372/dragula.css', 'rel' => 'stylesheet', 'id' => 'PluginJsdragdropDragula'));
    wfDocument::renderElement(array($element));
  }
}
