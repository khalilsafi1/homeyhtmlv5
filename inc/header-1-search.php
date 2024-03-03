<div class="header-search header-1-search header-search-sticky d-none d-lg-block">
	<div class="container">
		<div class="header-1-search-wrap main-search-wrap">
			<form class="row">
				<div class="search-wrap col-lg-4">
					<div class="input-group">
						<span class="input-group-text"><i class="homey-icon homey-icon-search-1"></i></span>
						<input type="text" class="form-control input-search" placeholder="Where to go?">
						<span class="input-group-text search-filter-btn">
							<span class="filter-text">Filters</span> <i class="homey-icon homey-icon-settings-slider"></i></span>
						<!-- <div class="search-auto-complete">
							<ul>
								<li><strong>Miami FL</strong>, United States</li>
								<li><strong>Miami FL</strong>, United States</li>
								<li><strong>Miami FL</strong>, United States</li>
								<li><strong>Miami FL</strong>, United States</li>
								<li><strong>Miami FL</strong>, United States</li>
							</ul>
						</div> -->
					</div><!-- .input-group -->
				</div><!-- .search-wrap -->
				<div class="datepicker-wrap col-lg-3">
					<div class="input-group">
						<span class="input-group-text"><i class="homey-icon homey-icon-calendar-3"></i></span>
						<input type="text" class="date-range form-control" placeholder="Check-In - Check-out" />
					</div>
				</div><!-- .datepicker-wrap -->
				<div class="guest-select-wrap col-lg-3 d-md-flex">
					<div class="input-group">
						<span class="input-group-text" id="inputGroupSelect01"><i class="homey-icon homey-icon-multiple-man-woman-2"></i></span>
						<select class="form-select" id="inputGroupSelect01">
							<option selected>Choose...</option>
							<option value="1">One</option>
							<option value="2">Two</option>
							<option value="3">Three</option>
						</select>

					</div>
				</div><!-- .guest-select-wrap -->
				<button type="submit" class="btn btn-secondary col-lg-2"><i class="homey-icon homey-icon-search-1" aria-hidden="true"></i></button>
			</form><!-- .form-inline -->
		</div><!-- .header-1-search-wrap -->
		<!-- search filerts -->
		<?php include('inc/search-filter-full-width-mobile.php'); ?>
	</div><!-- .container -->
</div><!-- .header-search -->