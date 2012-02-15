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
<section>
<header id="main">
<div id="header">
  <div id="title">Ninja Sudo</div>
  <div id="subtitle">Hacking, philosophy, and more</div>
</div>
</header>
</section>
<div id="container">
	<div id="content">
		<div id="articles"></div>
	</div>
	<div id="sidebar">
		
	</div>
</div>