
                <div id="image-container" align="center">
					<h1>Realms</h1><p>These are the different maps you can brawl it out on.<br><br><b>*note:</b>  available for
					 1v1 or 2v2 ranked play<br><b>**note:</b>  available for 2v2 ranked play</p><hr>
					<h3>Blackguard Keep*</h3>
					<img class="img0" src="/images/blankimg.png"/>			
					<h3>Brawlhaven</h3>
					<img class="img1" src="/images/blankimg.png"/>
					<h3>Enigma</h3>
					<img class="img2" src="/images/blankimg.png"/>
					<h3>Grumpy Temple**</h3>
					<img class="img3" src="/images/blankimg.png"/>
					<h3>King's Pass*</h3>
					<img class="img4" src="/images/blankimg.png"/>
					<h3>Mammoth Fortress*</h3>
					<img class="img5" src="/images/blankimg.png"/>
					<h3>Thundergard Stadium*</h3>
					<img class="img6" src="/images/blankimg.png"/>
					<h3>Twilight Grove*</h3>
					<img class="img7" src="/images/blankimg.png"/>
					<h3>The Great Hall*</h3>
					<img class="img8" src="/images/blankimg.png"/>
					<h3>Shipwreck Falls*</h3>
					<img class="img9" src="/images/blankimg.png"/>
					<h3>Titan's End</h3>
					<img class="img10" src="/images/blankimg.png"/>
                </div>
	<script>
	function createCallback( i ){
		return function(){
			var src = $('#img' + i).attr('src');
			var newsrc = (src=='images/realms/'+i+'_thumb.jpg') ? 'images/realms/'+i+'.jpg':'images/realms/'+i+'_thumb.jpg';
			$('#img' + i).attr('src',newsrc);
			(src=='images/realms/'+i+'_thumb.jpg') ? $('#img' + i).css('cursor','zoom-out'):$('#img' + i).css('cursor','zoom-in');
		}
	}	
	
	
	
	function enlargeImg(){		
		var imgArray = range($("#image-container > img").length);
		for (i = 0 ; i < imgArray.length ; i++){
		$('#img' + i).css('cursor','zoom-in');
		$('#img' + i).click( createCallback( i ) );}
		}
		
		$( window ).load( enlargeImg );
	</script>
	