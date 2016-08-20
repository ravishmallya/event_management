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
			document.getElementById("username").value=clg_name;
		else
			alert('invalid id');
	}
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