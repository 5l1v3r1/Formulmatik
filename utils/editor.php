
<!DOCTYPE html>
<html>
<head>
  <meta http-equiv="content-type" content="text/html; charset=UTF-8">
  <title>Formulmatik EasyLatex Editor</title>
  
  <script type='text/javascript' src='http://code.jquery.com/jquery-git2.js'></script>
  <link rel="stylesheet" type="text/css" href="http://latex.codecogs.com/css/equation-embed.css">  
      <script type='text/javascript' src="http://latex.codecogs.com/js/eq_config.js"></script>
      <script type='text/javascript' src="http://latex.codecogs.com/js/eq_editor-lite-15.js"></script>
    
  
  <style type='text/css'>
    #EqnEditor {
    text-align:left;
}
  </style>
<script type='text/javascript'>
$(window).load(function(){
$("#bosluk").click(function () {
    $('#latexInput').val($('#latexInput').val() + "\\,");
});

$("#display").click(function () {
    $('#latexInput').val($('#latexInput').val() + "\\displaystyle");
});

$("#paragraf").click(function () {
    $('#latexInput').val($('#latexInput').val() + '\\\\');
});

$("#temizle").click(function () {
    $('#latexInput').val('');
});

EqEditor.embed('editor', '', "ope,rel,mat:bra,arr,sym,gel,geo", "tr-tr");
var a = new EqTextArea('equation', 'latexInput');
EqEditor.add(a, false);
});
</script>
</head>
<body>
  <div id="editor"></div>
<input id="display" type="button" class="lightbluebutton" value="Displaystyle" />
<input id="bosluk" type="button" class="lightbluebutton" value="Bosluk" />
<input id="paragraf" type="button" class="lightbluebutton" value="Paragraf" />
<input id="temizle" type="button" class="lightbluebutton" value="Temizle" />
</br>
<textarea id="latexInput" rows="3" cols="40">\displaystyle</textarea>
<br>
<img id="equation" />
</body>
</html>

