# Buto-Plugin-DragdropDragula372




In settings.yml

```
plugin:
  dragdrop:
    dragula372:
      enabled: true
```


In html head section.

```
-
  type: widget
  data:
    plugin: dragdrop/dragula372
    method: include_css
-
  type: widget
  data:
    plugin: dragdrop/dragula372
    method: include_js
```


Javascript to connect multiple elements.
```
dragula([ document.getElementById('container_0'), document.getElementById('container_1'), document.getElementById('container_2') ])
  .on('drag', function (el) {
    el.className = el.className.replace('ex-moved', '');
    //console.log('drag');
  }).on('drop', function (el) {
    el.className += ' ex-moved';
    //console.log('drop');
  }).on('over', function (el, container) {
    //container.className += ' ex-over';
    //console.log('over');
  }).on('out', function (el, container) {
    //container.className = container.className.replace('ex-over', '');
    //console.log('out');  
});

```



