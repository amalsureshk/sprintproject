$(document).ready(function(){
	$("#login").click(function(){
    var username=$("#username").val();
		var password=$("#password").val();
        $.ajax({
        	'url':'http://services.trainees.baabtra.com/LoginService/login.php',
        	'datatype':'jsonp',
        	'data':{email:username,password:password},
        	success:function(data)
        	{
        		var json = $.parseJSON(data);
        		console.log(json[0].ResponseCode);
        		if(json[0].ResponseCode=="200")
        		{
        			window.location.href="success1.php?name="+json[0].vchr_first_name+"&&pic="+json[0].vchr_prof_pic;
        		}
                else if(json[0].ResponseCode=="500")
                {
                    window.location.href="password error.php?name="+json[0].vchr_first_name+"&&pic="+json[0].vchr_prof_pic+"&&email="+json[0].vchr_user_name;
                }
                else
                {
                    window.location.href="error.php";
                }
                
            },
            error:function()
            {
                console.log("error");
            }

        });
	});
});