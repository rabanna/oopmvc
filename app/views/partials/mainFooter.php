<!-- start foot-->
<footer class="container-fluid text-center">

    <div class="row">
        <div class="col-md-12">
            <ul class="links">

            <li><a href="https://github.com/rabanna">GitHub</a></li>
            <li><a href="https://www.facebook.com/ethuto">Facebook</a></li>
            <li><a href="#">Contact Us</a></li>
            <li><a href="#">About Us</a></li>

            </ul>
            <p>&copy; <script>document.write(new Date().getFullYear())</script>. All rights reserved</p>
        </div>

    </div>
</footer>
<!--end start foot-->

<script type="text/javascript">
Date.prototype.getCurrentTime = function(){ 
  return ((this.getHours() < 10)?"0":"") + ((this.getHours()>12)?(this.getHours()-12):this.getHours()) +":"+ ((this.getMinutes() < 10)?"0":"") + this.getMinutes() +":"+ ((this.getSeconds() < 10)?"0":"") + this.getSeconds() + ((this.getHours()>12)?(' PM'):' AM'); 
};

function realtime()
{
var today = new Date(); //date object
var current_date = today.getDate();
var current_month = today.getMonth()+1; //Month starts from 0
var current_year =  today.getFullYear();
var current_time = today.getCurrentTime();
var realtime = current_date+"/"+current_month+"/"+current_year+' - '+current_time;
$("#update_time").html(realtime);
}

//update current date and time every 1 sec
setInterval(function(){ realtime(); }, 1000);




jQuery(document).ready(function() {
	function count($this){
		var current = parseInt($this.html(), 10);
		current = current + 1; /* Where 1 is increment */

		$this.html(++current);
		if(current > $this.data('count')){
			$this.html($this.data('count'));
		} else {
			setTimeout(function(){count($this)}, 50);
		}
	}

	jQuery(".stat-count").each(function() {
	  jQuery(this).data('count', parseInt(jQuery(this).html(), 10));
	  jQuery(this).html('0');
	  count(jQuery(this));
	});
});

$('body').prepend('<a href="#" class="back-to-top" ><span><i class="glyphicon glyphicon-chevron-up"></i></span></a>');
$(window).scroll(function(){
	if($(window).scrollTop()>300){
		$('a.back-to-top').fadeIn('fast');
		
		}else{
			$('a.back-to-top').fadeOut('fast');
			}
	
	})
$("a.back-to-top").click(function(){
	$('body').animate({
		scrollTop:0
		}, 'fast');
	
	});
	

</script>