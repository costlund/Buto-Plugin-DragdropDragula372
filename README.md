# Buto-Plugin-DragdropDragula372




## Include
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

## Javascript
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

## Example
Working example.
```
-
  type: div
  attribute:
    id: container_0
    style:
      height: 100px
      background: silver
  innerHTML:
    -
      type: div
      innerHTML: Item 1
-
  type: div
  attribute:
    id: container_1
    style:
      height: 100px
      background: green
  innerHTML:
    -
      type: div
      innerHTML: Item 2
-
  type: script
  innerHTML: |
    dragula([ document.getElementById('container_0'), document.getElementById('container_1') ])
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

Example of Javascript to handle changes.
```
var id = btn.getAttribute('data-id');
var element = document.getElementById('container_0').getElementsByTagName('div');
var keys = '';
for(var i=0; i<element.length; i++){
  keys += ','+element[i].getAttribute('id');
}
keys = keys.substr(1);
$.post( "/save", { id: id, keys: keys })
.done(function( data ) {
  // Do something more...
});  
```
