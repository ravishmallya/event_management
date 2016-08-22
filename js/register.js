    $( window ).load(function() {
        alert( "window loaded" );
    });
function keyEntered(e)
{
	var tval=document.getElementById('name').value;
	if(tval.length==3)
	{
		var clg_name=fetchName(tval);
		if(clg_name!="")
		{
			document.getElementById("s_id").style.display = "none";
			document.getElementById("username").value=clg_name;
			document.getElementById("password").disabled=false;
			document.getElementById("reg_button").disabled=true;
		}
		else
		{
			document.getElementById("username").value="";
			document.getElementById("s_id").style.display = "inline";
			document.getElementById("s_id").innerHTML="invalid id";
			document.getElementById("password").innerHTML="";
			document.getElementById("password").disabled=true;	
			document.getElementById("reg_button").disabled=true;
		}
	}
}
function access_check()
{
	var acc=document.getElementById("password").value;
	var c_id=document.getElementById("name").value;
	document.getElementById("reg_button").disabled=true;
	if(acc.length==5)
	{
			var ajaxurl = 'http://localhost/project/check_access.php';
        	data =  {'c_id':c_id,'c_pass':acc};
        	$.post(ajaxurl,data,function(response){
        		if(response=='failure')
        		{
        			document.getElementById('access_c').style.display="inline";
        			document.getElementById('access_c').style.innerHTML="invalid code";
        		}
        		else if(response=='success')
        		{
        			document.getElementById("reg_button").disabled=false;
        			document.getElementById('access_c').style.display="none";	
        		}
        	});
	}
	else
		document.getElementById("reg_button").disabled=true;

}
function fetchName(clg)
{
	var xml=new XMLHttpRequest();
	xml.open('GET','college_list.xml',false);
	xml.send();
	var xmlData=xml.responseXML;
	if(!xmlData)
	{
		xmlData=(new DOMParser()).parseFromString(xml.responseText,'application/xml');	
	}
	var x=xmlData.getElementsByTagName("partcipant");
	for(var i=0;i<=2;i++)
		if(x[i].getElementsByTagName("idd")[0].firstChild.data==clg)
			return(x[i].getElementsByTagName("name")[0].firstChild.data);
	return("");
}