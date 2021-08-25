// JavaScript Document
 tinymce.init({ 

selector:'textarea.tinymce',
theme:"modern",
skin:"lightgray",
width:"100%",
height:150,

menubar: false,

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
	  width: 700,
	  height: 500,
	  inline: true,
	  close_previous: false
  }, {
	  window: win,
	  input: field
  });
  return false;
}



 });	
		