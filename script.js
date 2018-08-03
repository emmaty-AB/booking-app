// Modal Popup upon click of plus(+) button
$(document).ready(function(){
    $("#myBtn").click(function(){
        $("#myModal").modal();
    });
});


$(document).ready(function(){
    $('[data-toggle="tooltip"]').tooltip(); 
});




// Change ID's of listings after gotten from database to allow accordion to work properly
function changeID(){

  // Settinng local variable (i) to count number of purposes listed for the bookings available now
  var i = document.querySelectorAll(".var-purpose").length;

  // Find and replace ids for various purposes listed and their corresponding link hrefs:
  for (var j = 0; j <= i-1; j++) { 
    document.querySelectorAll(".var-purpose")[j].id = "purpose-" + (j+1);
    document.querySelectorAll(".purpose")[j].href = "#purpose-" + (j+1);
   }
};


// Letting code run only after page has loaded - To finally make changes to ID's
dvInterceptQueryResponse = function(resp){
	 setTimeout(function(){
	   changeID();
	  },1000);
	  return resp;
	};

// Reload Webpage after submitting data,
		//So the browser has enough time to submit the form and then reload the page"
    dvInterceptSubmission = function(resp) {
    		setTimeout(function(){window.location.reload();},5000);
            return resp;
    };








