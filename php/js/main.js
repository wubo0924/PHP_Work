function spread_fashion(){
	var f = document.getElementById('child_fashion').style.display;
	  	if(f=="none"){
	  		document.getElementById('child_fashion').style.display="";
	  	}else{
	  		document.getElementById('child_fashion').style.display="none";
	  	}
}
function spread_electronics(){
	var f = document.getElementById('child_electronics').style.display;
	  	if(f=="none"){
	  		document.getElementById('child_electronics').style.display="";
	  	}else{
	  		document.getElementById('child_electronics').style.display="none";
	  	}
}
function setSize(){
	document.getElementById('head_bar').style.width = screen.width-285+"px";
    document.getElementById('navigator_bar').style.width = screen.width-285+"px";
    document.getElementById('m_div').style.width = screen.width-25+"px";
    document.getElementById('footer').style.width = screen.width-285+"px"; 
    
    document.getElementById('child_fashion').style.display = "none"; 
    document.getElementById('child_electronics').style.display = "none";  
}
function rPage_load(){
	   document.getElementById('head_bar').style.width = screen.width-285+"px";
       document.getElementById('navigator_bar').style.width = screen.width-285+"px";
       document.getElementById('footer').style.width = screen.width-285+"px";
       
}
function pPage_load(){
	document.getElementById('head_bar').style.width = screen.width-285+"px";
    document.getElementById('navigator_bar').style.width = screen.width-285+"px";
    document.getElementById('m_div').style.width = screen.width-285+"px";
    document.getElementById('footer').style.width = screen.width-285+"px";
}
function clear(){
	document.getElementById('email').value="";
	document.getElementById('password').value="";
	document.getElementById('firstName').value="";
	document.getElementById('lastName').value="";
	document.getElementById('address').value="";
	document.getElementById('age').value="";
	document.getElementById('address').value="";
}
function currentDate(){
	var currentDate = new Date();
	var month = currentDate.getMonth()+1;
	if(month<10){month="0"+month;}
	var formatDate = month+"/"+currentDate.getDate()+"/"+currentDate.getFullYear()+" ";
	formatDate = formatDate+currentDate.getHours()+":"+currentDate.getMinutes()+":"+currentDate.getSeconds();
	return formatDate;
}
function lastModifiedDate(){
	return document.lastModified;
}

function ValidateNumber(e, pnumber)
{
	if (!/^\d+$/.test(pnumber))
	{
		e.value = /^\d+/.exec(e.value);
    }
    return false;
}