<script>
/* this is a workaround for the enqueue style not working */
$("head").append("<link>");
    css = $("head").children(":last");
    css.attr({
      rel:  "stylesheet",
      type: "text/css",
      href: "http://fonts.googleapis.com/css?family=Droid+Sans+Mono|Droid+Serif:400,400italic"
    });
</script>
<div id="sidebar">
	
</div>