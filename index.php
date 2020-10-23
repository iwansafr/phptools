<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<title>php tools</title>
	<link rel=stylesheet href="codemirror/doc/docs.css">
		<link rel="stylesheet" href="codemirror/lib/codemirror.css">
	<link rel="stylesheet" href="codemirror/theme/3024-day.css">
	<link rel="stylesheet" href="codemirror/theme/3024-night.css">
	<link rel="stylesheet" href="codemirror/theme/abcdef.css">
	<link rel="stylesheet" href="codemirror/theme/ambiance.css">
	<link rel="stylesheet" href="codemirror/theme/ayu-dark.css">
	<link rel="stylesheet" href="codemirror/theme/ayu-mirage.css">
	<link rel="stylesheet" href="codemirror/theme/base16-dark.css">
	<link rel="stylesheet" href="codemirror/theme/bespin.css">
	<link rel="stylesheet" href="codemirror/theme/base16-light.css">
	<link rel="stylesheet" href="codemirror/theme/blackboard.css">
	<link rel="stylesheet" href="codemirror/theme/cobalt.css">
	<link rel="stylesheet" href="codemirror/theme/colorforth.css">
	<link rel="stylesheet" href="codemirror/theme/dracula.css">
	<link rel="stylesheet" href="codemirror/theme/duotone-dark.css">
	<link rel="stylesheet" href="codemirror/theme/duotone-light.css">
	<link rel="stylesheet" href="codemirror/theme/eclipse.css">
	<link rel="stylesheet" href="codemirror/theme/elegant.css">
	<link rel="stylesheet" href="codemirror/theme/erlang-dark.css">
	<link rel="stylesheet" href="codemirror/theme/gruvbox-dark.css">
	<link rel="stylesheet" href="codemirror/theme/hopscotch.css">
	<link rel="stylesheet" href="codemirror/theme/icecoder.css">
	<link rel="stylesheet" href="codemirror/theme/isotope.css">
	<link rel="stylesheet" href="codemirror/theme/lesser-dark.css">
	<link rel="stylesheet" href="codemirror/theme/liquibyte.css">
	<link rel="stylesheet" href="codemirror/theme/lucario.css">
	<link rel="stylesheet" href="codemirror/theme/material.css">
	<link rel="stylesheet" href="codemirror/theme/material-darker.css">
	<link rel="stylesheet" href="codemirror/theme/material-palenight.css">
	<link rel="stylesheet" href="codemirror/theme/material-ocean.css">
	<link rel="stylesheet" href="codemirror/theme/mbo.css">
	<link rel="stylesheet" href="codemirror/theme/mdn-like.css">
	<link rel="stylesheet" href="codemirror/theme/midnight.css">
	<link rel="stylesheet" href="codemirror/theme/monokai.css">
	<link rel="stylesheet" href="codemirror/theme/moxer.css">
	<link rel="stylesheet" href="codemirror/theme/neat.css">
	<link rel="stylesheet" href="codemirror/theme/neo.css">
	<link rel="stylesheet" href="codemirror/theme/night.css">
	<link rel="stylesheet" href="codemirror/theme/nord.css">
	<link rel="stylesheet" href="codemirror/theme/oceanic-next.css">
	<link rel="stylesheet" href="codemirror/theme/panda-syntax.css">
	<link rel="stylesheet" href="codemirror/theme/paraiso-dark.css">
	<link rel="stylesheet" href="codemirror/theme/paraiso-light.css">
	<link rel="stylesheet" href="codemirror/theme/pastel-on-dark.css">
	<link rel="stylesheet" href="codemirror/theme/railscasts.css">
	<link rel="stylesheet" href="codemirror/theme/rubyblue.css">
	<link rel="stylesheet" href="codemirror/theme/seti.css">
	<link rel="stylesheet" href="codemirror/theme/shadowfox.css">
	<link rel="stylesheet" href="codemirror/theme/solarized.css">
	<link rel="stylesheet" href="codemirror/theme/the-matrix.css">
	<link rel="stylesheet" href="codemirror/theme/tomorrow-night-bright.css">
	<link rel="stylesheet" href="codemirror/theme/tomorrow-night-eighties.css">
	<link rel="stylesheet" href="codemirror/theme/ttcn.css">
	<link rel="stylesheet" href="codemirror/theme/twilight.css">
	<link rel="stylesheet" href="codemirror/theme/vibrant-ink.css">
	<link rel="stylesheet" href="codemirror/theme/xq-dark.css">
	<link rel="stylesheet" href="codemirror/theme/xq-light.css">
	<link rel="stylesheet" href="codemirror/theme/yeti.css">
	<link rel="stylesheet" href="codemirror/theme/idea.css">
	<link rel="stylesheet" href="codemirror/theme/darcula.css">
	<link rel="stylesheet" href="codemirror/theme/yonce.css">
	<link rel="stylesheet" href="codemirror/theme/zenburn.css">
	<script src="codemirror/lib/codemirror.js"></script>
	<script src="codemirror/mode/javascript/javascript.js"></script>
	<script src="codemirror/addon/selection/active-line.js"></script>
	<script src="codemirror/addon/edit/matchbrackets.js"></script>
	<style>
      .CodeMirror {border: 1px solid black; font-size:13px}
   </style>
</head>
<body>
	<form><textarea id="code" name="code">
function findSequence(goal) {
  function find(start, history) {
    if (start == goal)
      return history;
    else if (start > goal)
      return null;
    else
      return find(start + 5, "(" + history + " + 5)") ||
             find(start * 3, "(" + history + " * 3)");
  }
  return find(1, "1");
}</textarea></form>
<p>Select a theme: <select onchange="selectTheme()" id=select>
    <option selected>default</option>
    <option>3024-day</option>
    <option>3024-night</option>
    <option>abcdef</option>
    <option>ambiance</option>
    <option>ayu-dark</option>
    <option>ayu-mirage</option>
    <option>base16-dark</option>
    <option>base16-light</option>
    <option>bespin</option>
    <option>blackboard</option>
    <option>cobalt</option>
    <option>colorforth</option>
    <option>darcula</option>
    <option>dracula</option>
    <option>duotone-dark</option>
    <option>duotone-light</option>
    <option>eclipse</option>
    <option>elegant</option>
    <option>erlang-dark</option>
    <option>gruvbox-dark</option>
    <option>hopscotch</option>
    <option>icecoder</option>
    <option>idea</option>
    <option>isotope</option>
    <option>lesser-dark</option>
    <option>liquibyte</option>
    <option>lucario</option>
    <option>material</option>
    <option>material-darker</option>
    <option>material-palenight</option>
    <option>material-ocean</option>
    <option>mbo</option>
    <option>mdn-like</option>
    <option>midnight</option>
    <option>monokai</option>
    <option>moxer</option>
    <option>neat</option>
    <option>neo</option>
    <option>night</option>
    <option>nord</option>
    <option>oceanic-next</option>
    <option>panda-syntax</option>
    <option>paraiso-dark</option>
    <option>paraiso-light</option>
    <option>pastel-on-dark</option>
    <option>railscasts</option>
    <option>rubyblue</option>
    <option>seti</option>
    <option>shadowfox</option>
    <option>solarized dark</option>
    <option>solarized light</option>
    <option>the-matrix</option>
    <option>tomorrow-night-bright</option>
    <option>tomorrow-night-eighties</option>
    <option>ttcn</option>
    <option>twilight</option>
    <option>vibrant-ink</option>
    <option>xq-dark</option>
    <option>xq-light</option>
    <option>yeti</option>
    <option>yonce</option>
    <option>zenburn</option>
</select>
</p>
<script>
  var editor = CodeMirror.fromTextArea(document.getElementById("code"), {
    lineNumbers: true,
    styleActiveLine: true,
    matchBrackets: true,
    autocomplete: true,
  });
  var input = document.getElementById("select");
  function selectTheme() {
    var theme = input.options[input.selectedIndex].textContent;
    editor.setOption("theme", theme);
    location.hash = "#" + theme;
  }
  var choice = (location.hash && location.hash.slice(1)) ||
               (document.location.search &&
                decodeURIComponent(document.location.search.slice(1)));
  if (choice) {
    input.value = choice;
    editor.setOption("theme", choice);
  }
  CodeMirror.on(window, "hashchange", function() {
    var theme = location.hash.slice(1);
    if (theme) { input.value = theme; selectTheme(); }
  });
</script>
</body>
</html>