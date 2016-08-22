$(document).ready(function() {
	$(".btn-pref .btn").click(function () 
    {
        $(".btn-pref .btn").removeClass("btn-primary").addClass("btn-default");
        // $(".tab").addClass("active"); // instead of this do the below 
        $(this).removeClass("btn-default").addClass("btn-primary");  
        var clickBtnValue = $(this).val();
        var ajaxurl = 'http://localhost/project/check_registered.php',
        data =  {'action': clickBtnValue,
        'clg_id':document.getElementById("i_hidden").value
    };
        $.post(ajaxurl, data, function (response) 
        {
            if(response=='Student')
                jsfunction();
            if(response=='Staff')
                jsfuntion2();
        });
	    
    });

    $(".btn.btn-primary.btn-lg.btn-block.login-button").click(function () 
    {
        var cid=document.getElementById("i_hidden").value;
        var cname=document.getElementById("name").value;
        var tno=document.getElementById("num_box").value;
        var cat=$(this).val();
        var rep=document.getElementById("rep_name").value;
        var rep_ct=document.getElementById('rep_number').value;
        //var ajaxurl1 = 'http://localhost/project/insert_data.php',
        data={'college_id':cid,
        'cname':cname,
        'tno':tno,
        'cat':cat,
        'rep':rep,
        'rep_ct':rep_ct
        }
        $.post('http://localhost/project/insert_data.php', 
                data, 
                function (response) 
                {
                    alert(response);
                });
    });

    var $select = $(".num_box");
    for (i=0;i<=20;i++)
    {
        $select.append($('<option></option>').val(i).html(i));
    }
});
function jsfunction()
{
	document.getElementById("name").disabled=true;
    document.getElementById("num_box").disabled=true;
    document.getElementById("rep_name").disabled=true;
    document.getElementById("rep_number").disabled=true;
    document.getElementById("reg_button").disabled=true;
    document.getElementById("desc").style.display="inline-block";
}
function jsfuntion2()
{
    document.getElementById("tname").disabled=true;
    document.getElementById("tselect").disabled=true;
    document.getElementById("trep_name").disabled=true;
    document.getElementById("trep_number").disabled=true;
    document.getElementById("treg_button").disabled=true;
    document.getElementById("tdesc").style.display="inline-block";
}