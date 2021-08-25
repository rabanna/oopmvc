// JavaScript Document
 tinymce.init({

selector:'textarea.tinymce',
theme:"modern",
skin:"lightgray",
width:"100%",
plugins: "media",
menubar: "insert",
toolbar: "media",
media_live_embeds: true,
menubar: true,
height:300,

plugins: [
"advlist autolink link image lists charmap print preview hr anchor pagebreak",
"searchreplace wordcount visualblocks visualchars code fullscreen insertdatetime media",
"save table contextmenu directionality emoticons template paste textcolor"
],

toolbar: "insertfile undo redo | styleselect | bold italic | alignleft aligncenter alignright alignjustify | bullist numlist | image | media fullpage | forecolor backcolor emoticons | table",


file_browser_callback: function(field, url, type, win) {
  tinyMCE.activeEditor.windowManager.open({
	  file: 'tinymce/kcfinder/browse.php?opener=tinymce4&field=' + field + '&type=' + type,
	  title: 'KCFinder',
	  inline: true,
	  resizable:"yes",
	  width:700,
	  height:500,
	  close_previous: false
  }, {
	  window: win,
	  input: field
  });
  return false;
}



 });
