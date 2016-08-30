$(document).ready(function() {
   
   $("form[name='place']").validate({
     rules:{
       placeName:"required",
       Introduction:"required"
     },
     messages:{
       placeName:"(必填)",
       Introduction:"(必填)"
     }
   });
});
