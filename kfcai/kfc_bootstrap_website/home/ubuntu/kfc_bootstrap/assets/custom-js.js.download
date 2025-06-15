/*===============================
==========Custom JS File=========
=================================*/

 ( function( $ ) {
 
  ajaxUrl  =  $("head").attr("ajax-url");
  siteUrl  =  $("head").attr("site-url");
  $(document).ready(function(){
	
   $(document).on("change", "select#thickness", function(e) {
    var thickness = $("#thickness :selected").val();
    var thicknessId = $("#thickness :selected").attr('id');
    $("#wall_thickness").val('');
    // alert(thicknessId);
      
      getPostResponseData("get_diameter",thickness,thicknessId,
        function(d){
         generateHtml(d);
                                 
       },
       function(data){
         console.log("error");
       }
            ); //get response ends here
      return false;
    });


   function getPostResponseData(action,thickness,thicknessId,success_cb, error_cb){        
  $.ajax({
    url : ajaxUrl,
    type : 'get',
    data : {
     action : action,
     thickness : thickness,
     thicknessId:thicknessId
     
   },
   success : function( data ) {
     success_cb(data);
   }, 
   error: function(data){
    error_cb("Error fetching via ajax");
  }
});

}


function generateHtml(data){
  
  if(data.status==="success") {
    var html ="";
    var listdata = data.data;
    var diameterVal = listdata.outerdiameter;
    var scheduleVal = listdata.schedule;

    htmldata ='<div class="select-to select-box"><select name="schedule" id="schedule"><option value="-1">--Select--</option>';
    for (var i = 0; i < scheduleVal.length; i++) 
    {
      htmldata += '<option value="'+scheduleVal[i].name+'" data-id="'+scheduleVal[i].id+'">'+ scheduleVal[i].name + '</option>';           
    }
    htmldata +='</select></div>';
    $("#diameter").val(listdata.outerdiameter);
    $("#changeSchedule").html(htmldata);

    return false;

  }
}

$(document).on("change", "select#schedule", function(e) {
    var schedule = $("#schedule :selected").val();
    var scheduleId = $("#schedule :selected").attr('data-id');
     //alert(thicknessId);
      
      getScheduleResponseData("get_wallThickness",schedule,scheduleId,
        function(data){
          if(data.status==="success") {
            var wallthickness = data.wallthickness;
					  var weightpermeter = data.weight_per_mtr;
            $("#wall_thickness").val(wallthickness);
						$("#weightpermeter").val(weightpermeter);
            return false;
          }

         //generateHtml(d);
                                 
       },
       function(data){
         console.log("error");
       }
            ); //get response ends here
      return false;
    });

function getScheduleResponseData(action,schedule,scheduleId,success_cb, error_cb){        
  $.ajax({
    url : ajaxUrl,
    type : 'get',
    data : {
     action : action,
     schedule : schedule,
     scheduleId:scheduleId
     
   },
   success : function( data ) {
     success_cb(data);
   }, 
   error: function(data){
    error_cb("Error fetching via ajax");
  }
});

}

   
  });   

 } )( jQuery );

    


