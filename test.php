<html lang="en">
<head>
  <meta charset="utf-8">
  <title>jQuery UI 折叠面板（Accordion） - 当悬停时打开</title>
  <link rel="stylesheet" href="http://apps.bdimg.com/libs/jqueryui/1.10.4/css/jquery-ui.min.css">
  <script src="http://apps.bdimg.com/libs/jquery/1.10.2/jquery.min.js"></script>
  <script src="http://apps.bdimg.com/libs/jqueryui/1.10.4/jquery-ui.min.js"></script>

<script>
    $(function() {
    $( "#accordion" ).accordion({
      event: "click hoverintent"
    });
  });

    $.event.special.hoverintent = {
    setup: function() {
      $( this ).bind( "mouseover", jQuery.event.special.hoverintent.handler );
    },
    teardown: function() {
      $( this ).unbind( "mouseover", jQuery.event.special.hoverintent.handler );
    },
    handler: function( event ) {
      var currentX, currentY, timeout,
      args = arguments,
      target = $( event.target ),
      previousX = event.pageX,
      previousY = event.pageY;

      function track( event ) {
        currentX = event.pageX;
        currentY = event.pageY;
      };

      function clear() {
        target
        .unbind( "mousemove", track )
        .unbind( "mouseout", clear );
        clearTimeout( timeout );
      }

      function handler() {
        var prop,
        orig = event;

        if ( ( Math.abs( previousX - currentX ) +
        Math.abs( previousY - currentY ) ) < 7 ) {
          clear();

          event = $.Event( "hoverintent" );
          for ( prop in orig ) {
            if ( !( prop in event ) ) {
              event[ prop ] = orig[ prop ];
            }
          }
          // 防止访问原始事件，因为新事件会被异步触发，旧事件不再可用 (#6028)
          delete event.originalEvent;

          target.trigger( event );
        } else {
          previousX = currentX;
          previousY = currentY;
          timeout = setTimeout( handler, 100 );
        }
      }

      timeout = setTimeout( handler, 100 );
      target.bind({
        mousemove: track,
        mouseout: clear
      });
    }
  };
  </script>
</head>
<body>
<div id="accordion-resizer" class="ui-widget-content">
<div id="accordion">
  <h3>部分 1</h3>
  <div>
    <p>
    Mauris mauris ante, blandit et, ultrices a, suscipit eget, quam. Integer
    ut neque. Vivamus nisi metus, molestie vel, gravida in, condimentum sit
    amet, nunc. Nam a nibh. Donec suscipit eros. Nam mi. Proin viverra leo ut
    odio. Curabitur malesuada. Vestibulum a velit eu ante scelerisque vulputate.
    </p>
  </div>
  <h3>部分 2</h3>
  <div>
    <p>
    Sed non urna. Donec et ante. Phasellus eu ligula. Vestibulum sit amet
    purus. Vivamus hendrerit, dolor at aliquet laoreet, mauris turpis porttitor
    velit, faucibus interdum tellus libero ac justo. Vivamus non quam. In
    suscipit faucibus urna.
    </p>
  </div>
</div>



</body>
</html>
