<table class="table-null" border="0" cellpadding="0" cellspacing="0">
    <tr valign="top">
    	<td align="right" width="85px">
    	    <?/*--==vkontakte==--*/?>
			<!-- Put this script tag to the <head> of your page -->
            <script type="text/javascript" src="//vk.com/js/api/openapi.js?86"></script>
            <script type="text/javascript">
              VK.init({apiId: 3529769, onlyWidgets: true});
            </script>
            <!-- Put this div tag to the place, where the Like block will be -->
            <div id="vk_like"></div>
            <script type="text/javascript">
            VK.Widgets.Like("vk_like", {type: "mini", pageTitle: "planetacorps.ru", height: 20, pageUrl: "http://planetacorps.ru" });
            </script>
			<style>
    		    #vk_like_top {
    			 width:80px !important;
    			}
    		</style>
    	</td>
    	<td align="right" width="102px" style="padding-bottom:1px">
    	    <?/*--==facebook==--*/?>
            <div id="fb-root"></div>
            <script>(function(d, s, id) {
              var js, fjs = d.getElementsByTagName(s)[0];
              if (d.getElementById(id)) return;
              js = d.createElement(s); js.id = id;
              js.src = "//connect.facebook.net/ru_RU/all.js#xfbml=1&appId=574843562535620";
              fjs.parentNode.insertBefore(js, fjs);
            }(document, 'script', 'facebook-jssdk'));</script>
	        <div class="fb-like" data-href="http://planetacorps.ru" data-send="false" data-layout="button_count" data-width="100" data-show-faces="false"></div>
    	</td>
    	<td align="right" width="135px" style="padding-top: 1px;">
    		<span style="padding-left:10px;">
    	    <?/*--==mail.ru odnoklassniki==--*/?>								
			<span style="padding-left:10px;">
			<a target="_blank" class="mrc__plugin_uber_like_button" href="http://connect.mail.ru/share?url=http://www.planetacorps.ru" data-mrc-config="{'nt' : '1', 'cm' : '1', 'ck' : '3', 'sz' : '20', 'st' : '3', 'tp' : 'micro'}">Нравится</a>
            <script src="http://cdn.connect.mail.ru/js/loader.js" type="text/javascript" charset="UTF-8"></script>
			</span>
    	</td>
    </tr>
</table>