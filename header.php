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
<header>
	<div id="header">
		<div id="title">
			<h1><a href="http://www.ninjasudo.com/">Ninja Sudo</a></h1>
			<h5>Hacking, philosophy, and more</h5>
		</div>
	</div>
</header>
</section>
<div id="container">
	<div id="content">
		<div id="articles">