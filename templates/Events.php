<div class="col-lg-12 col-md-12 col-sm-12 col-xs-12 entirepage">
<!-- Header Start Here -->
  <?php
    include('header.php');
  ?>
<script src="../js/jquery-ui.js"></script>
<script src="../js/jPages.min.js"></script>
<br><br>
<!-- Header End Here -->
<div class="col-lg-10 col-md-10 col-sm-10 col-xs-12 col-centered">
	<div class="pull-left col-lg-12 col-md-12 col-sm-12 col-xs-12">
		<h2 class="pull-left">Upcomming Events</h2>
		<div class="Upcomming_Events_pag pull-right"></div>
	</div>
	<ul id="Upcomming_Events" class="sortable pull-left">
		<li class="col-lg-4 col-md-4 col-sm-4 col-xs-12 upcoming_Events">
			<h3>SED QUIA NON NUMQUA</h3>
			<span>SEP 20TH, 2013</span>
			<img src="https://p.w3layouts.com/demos/events_club/web/images/blog-img2.jpg">
		</li>
		<li class="col-lg-4 col-md-4 col-sm-4 col-xs-12 upcoming_Events">
			<h3>SED QUIA NON NUMQUA</h3>
			<span>SEP 20TH, 2013</span>
			<img src="https://p.w3layouts.com/demos/events_club/web/images/blog-img2.jpg">
		</li>
		<li class="col-lg-4 col-md-4 col-sm-4 col-xs-12 upcoming_Events">
			<h3>SED QUIA NON NUMQUA</h3>
			<span>SEP 20TH, 2013</span>
			<img src="https://p.w3layouts.com/demos/events_club/web/images/blog-img2.jpg">
		</li>
		<li class="col-lg-4 col-md-4 col-sm-4 col-xs-12 upcoming_Events">
			<h3>SED QUIA NON NUMQUA</h3>
			<span>SEP 20TH, 2013</span>
			<img src="https://p.w3layouts.com/demos/events_club/web/images/blog-img2.jpg">
		</li>
		<li class="col-lg-4 col-md-4 col-sm-4 col-xs-12 upcoming_Events">
			<h3>SED QUIA NON NUMQUA</h3>
			<span>SEP 20TH, 2013</span>
			<img src="https://p.w3layouts.com/demos/events_club/web/images/blog-img2.jpg">
		</li>
		<li class="col-lg-4 col-md-4 col-sm-4 col-xs-12 upcoming_Events">
			<h3>SED QUIA NON NUMQUA</h3>
			<span>SEP 20TH, 2013</span>
			<img src="https://p.w3layouts.com/demos/events_club/web/images/blog-img2.jpg">
		</li>
		<li class="col-lg-4 col-md-4 col-sm-4 col-xs-12 upcoming_Events">
			<h3>SED QUIA NON NUMQUA</h3>
			<span>SEP 20TH, 2013</span>
			<img src="https://p.w3layouts.com/demos/events_club/web/images/blog-img2.jpg">
		</li>
		<li class="col-lg-4 col-md-4 col-sm-4 col-xs-12 upcoming_Events">
			<h3>SED QUIA NON NUMQUA</h3>
			<span>SEP 20TH, 2013</span>
			<img src="https://p.w3layouts.com/demos/events_club/web/images/blog-img2.jpg">
		</li>
		<li class="col-lg-4 col-md-4 col-sm-4 col-xs-12 upcoming_Events">
			<h3>SED QUIA NON NUMQUA</h3>
			<span>SEP 20TH, 2013</span>
			<img src="https://p.w3layouts.com/demos/events_club/web/images/blog-img2.jpg">
		</li>
		<li class="col-lg-4 col-md-4 col-sm-4 col-xs-12 upcoming_Events">
			<h3>SED QUIA NON NUMQUA</h3>
			<span>SEP 20TH, 2013</span>
			<img src="https://p.w3layouts.com/demos/events_club/web/images/blog-img2.jpg">
		</li>
		<li class="col-lg-4 col-md-4 col-sm-4 col-xs-12 upcoming_Events">
			<h3>SED QUIA NON NUMQUA</h3>
			<span>SEP 20TH, 2013</span>
			<img src="https://p.w3layouts.com/demos/events_club/web/images/blog-img2.jpg">
		</li>
		<li class="col-lg-4 col-md-4 col-sm-4 col-xs-12 upcoming_Events">
			<h3>SED QUIA NON NUMQUA</h3>
			<span>SEP 20TH, 2013</span>
			<img src="https://p.w3layouts.com/demos/events_club/web/images/blog-img2.jpg">
		</li>
		<li class="col-lg-4 col-md-4 col-sm-4 col-xs-12 upcoming_Events">
			<h3>SED QUIA NON NUMQUA</h3>
			<span>SEP 20TH, 2013</span>
			<img src="https://p.w3layouts.com/demos/events_club/web/images/blog-img2.jpg">
		</li>
	</ul>
	<script type="text/javascript">
		$(function () {
			$("div.Upcomming_Events_pag").jPages({
	          	containerID: "Upcomming_Events",
	          	perPage: 12,
	          	startPage: 1,
	          	startRange: 1,
	          	midRange: 5,
	          	endRange: 1
	      	});
	      	$(".sortable").sortable({
	          cursor: "move"
		    });
		    $(".sortable").disableSelection();
		    $("#close1").click(function () {
		        $("#close2").remove();
		    });
		});
	</script>
</div>
<!-- Footer Start Here -->
  <?php
    include('footer.php');
  ?>
<!-- Footer End Here -->
</div>