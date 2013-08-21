// JavaScript Document
jQuery(document).ready(function(){
$("#dropdown").change(function() {
	var ddmask = $('#dropdown').val(); // selected value from dropdown
    $.ajax({
     url: "checkbox.php?ddmask=" + ddmask, // go to php file to get array
	processData: false,
  contentType: false,
	// data: ({ajaxableVar : $(this).html()}),
     success: function(result){ // on success 
       // todo dropdownid2 opvullen
	   $('#klassen').html(result);
	 }
   });
 });
});

  