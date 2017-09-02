$(function(){
	var default_content="";
					checkURL();

	        default_content = $('#pageContent').html();
	$("a[rel='tab']").click(function(e){
		pageurl = $(this).attr('href');
		url=pageurl.replace('#page/','');
		if(url == '#page'){
				location.href = baseUrl;
		}else{
				 $.ajax({
						type: "post",
						url: baseUrl+url,
						dataType: "html",
						success: function(msg){
								$('#pageContent').html(msg);
						}
				});
		}
	});
});
var lasturl="";
function checkURL(hash){
		if(!hash) hash = window.location.hash;
		if(hash != lasturl){
				lasturl=hash;
				if(hash=="")
				$('#pageContent').html(default_content);
				else
				loadPage(hash);
		}
}
function loadPage(url){
        url=url.replace('#page/','');
        if(url == '#page'){
            location.href = baseUrl;
        }else{
					$.ajax({
                type: "post",
                url: baseUrl+url,
                dataType: "html",
                success: function(msg){
                    $('#pageContent').html(msg);
                }
            });
        }
    }
