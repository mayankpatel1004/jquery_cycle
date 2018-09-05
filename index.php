<script type="text/javascript" src="js/jquery.js"></script>
<script type="text/javascript" src="js/cycle.js"></script>

<div class="banner">
  <div class="banner-image" id="banner-image"> <span class="test1">dsfsafsf---1</span> <span class="test1">dsfsafsffsdfsfsdfsdfs---2</span>
    <div class="test1">dsfsafsfdddddddddd---3</div>
    <div class="test1">dsfsafsfgbgggggggg--4</div>
  </div>
  <div>
    <ul id="banner-slider" class="banner-slider">
    </ul>
  </div>
  <script type="text/javascript">			
	$(document).ready(function() {
		$('.banner-image').cycle({
			fx: 'fade',
			timeout:3000,
			pager:  '.banner-image',
			pagerAnchorBuilder: function(idx, slide) { 
			return '<li><a href="#"></a></li>'; 
		} 																		
		});
	});
	</script>
  <div style="clear:both;"></div>
</div>
