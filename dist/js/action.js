jQuery(document).ready(function(){
  jQuery("#menu-top-header-menu .submenu li.active").parent().addClass("active");
  jQuery("#menu-top-header-menu .submenu li.active").parent().closest('li').addClass("active");
  jQuery("#menu-top-header-menu-uk .submenu li.active").parent().addClass("active");
	jQuery("#menu-top-header-menu-uk .submenu li.active").parent().closest('li').addClass("active");
// for search placeholder
jQuery('.md-icon-float.md-default-theme.md-input-invalid input').focus(function(){
	jQuery(this).parent().addClass("md-input-focused");
});
// for modal
function modalSearch(){    
	jQuery(".search-block .fa-search").click(function(){   
	jQuery("body").prepend('<div class="content-wrapper-result"></div>');   
	jQuery("#search-result-block").addClass("active");   
	delModelSearch() 
}); }  
function delModelSearch(){
   jQuery(".close-modal-search ").click(function(){   
   		jQuery(".content-wrapper-result").remove();     
   		jQuery("#search-result-block").removeClass("active");
   		jQuery('#input_search').val('');
   		jQuery(".content-search-result").empty(); 

   	}); 
} 
modalSearch(); 


function searchLive(){
  jQuery('#input_search').keyup(function(){
  	
    var count = jQuery(this).val().length;
    var text = jQuery(this).val();
    if(count > 3){
      jQuery('.content-search-result').empty().append('<i class="fa fa-spinner"></i>');
  }
    if(count > 4){
      jQuery.ajax({
        data:"s="+text,
        success: function(msg){
        	jQuery('.content-search-result').empty().append(msg);

        }
      })
      } 
  })
}

searchLive();




});




