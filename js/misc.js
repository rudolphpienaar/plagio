
//
// Set a "singleton" class/object for document dimensions
//
screendim = new function() {
	 this.width	= 0;
	 this.height	= 0;
	
	 this.dimensions_find = function() {
	 	if (self.innerHeight) // all except Explorer
	 	{
	 		this.width 	= self.innerWidth;
	 		this.height = self.innerHeight;
	 	}
	 	else if (document.documentElement && document.documentElement.clientHeight)
	 		// Explorer 6 Strict Mode
	 	{
	 		this.width	= document.documentElement.clientWidth;
	 		this.height = document.documentElement.clientHeight;
	 	}
	 	else if (document.body) // other Explorers
	 	{
	 		this.width	= document.body.clientWidth;
	 		this.height = document.body.clientHeight;
	 	}		
	 };
}

resize = function(){
	 screendim.dimensions_find();
	 pageTopBar	= document.getElementById('topbar');
	 pageBody 	= document.getElementById('wrap');
	 pageCredit	= document.getElementById('credit');
	
	 topBarHeight	= 43;//pageTopBar.offsetHeight;
	 creditHeight	= 47+22;//pageCredit.offsetHeight;
	
	 bodyHeight 		= screendim.height - (topBarHeight + creditHeight);
	 str_bodyHeight	= bodyHeight.toString() + 'px';
	 pageBody.style.height = str_bodyHeight;
}

window.onload = function() {
  resize();

  // update stats
  (function(i,s,o,g,r,a,m){i['GoogleAnalyticsObject']=r;i[r]=i[r]||function(){
  (i[r].q=i[r].q||[]).push(arguments)},i[r].l=1*new Date();a=s.createElement(o),
  m=s.getElementsByTagName(o)[0];a.async=1;a.src=g;m.parentNode.insertBefore(a,m)
  })(window,document,'script','//www.google-analytics.com/analytics.js','ga');

  ga('create', 'UA-45247641-1', 'headinjurystudy.com');
  ga('send', 'pageview');

}

window.onresize = function(event) {
  resize();
}
