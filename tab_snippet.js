$(document).ready(function() 
{
	$(".btn-pref .btn").click(function () {
    $(".btn-pref .btn").removeClass("btn-primary").addClass("btn-default");
    // $(".tab").addClass("active"); // instead of this do the below 
    $(this).removeClass("btn-default").addClass("btn-primary");   
	});
	var $select = $(".num_box");
    for (i=0;i<=20;i++){
        $select.append($('<option></option>').val(i).html(i))
    }
    
});
