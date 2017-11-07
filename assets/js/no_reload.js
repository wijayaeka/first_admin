
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
					$('li').removeClass('active');
					$(this).parent().addClass('active').siblings().removeClass('active');
				 	$.ajax({
						type: "post",
						url: baseUrl+url,
						dataType: "html",
						data: token,
						success: function(msg){
								if ( $("#body").hasClass('sidebar-mini') ) {
				            $( "#minimizeSidebar" ).trigger( "click" );
				        }
								$( ".navbar-toggle" ).trigger( "click" );
								$('#pageContent').html(msg);
						},error: function(xhr){
							$('#pageContent').load(baseUrl+"not_found");
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
								data: token,
                success: function(msg){
                    $('#pageContent').html(msg);
                },error: function(xhr){
									$('#pageContent').load(baseUrl+"not_found");
								}
            });
        }
    }


		$('.nav').on('show.bs.collapse', function () {
    var actives = $(this).find('.collapse.in'),
        hasData;

    if (actives && actives.length) {
        hasData = actives.data('collapse')
        if (hasData && hasData.transitioning) return
        actives.collapse('hide')
        hasData || actives.data('collapse', null)
    }
});

function setCookie(cname, cvalue, exdays) {
    var d = new Date();
    d.setTime(d.getTime() + (exdays*24*60*60*1000));
    var expires = "expires="+ d.toUTCString();
    document.cookie = cname + "=" + cvalue + ";" + expires + ";path=/";
}
function getCookie(cname) {
    var name = cname + "=";
    var decodedCookie = decodeURIComponent(document.cookie);
    var ca = decodedCookie.split(';');
    for(var i = 0; i <ca.length; i++) {
        var c = ca[i];
        while (c.charAt(0) == ' ') {
            c = c.substring(1);
        }
        if (c.indexOf(name) == 0) {
            return c.substring(name.length, c.length);
        }
    }
    return "";
}
