<div class="header-search header-1-search header-search-sticky d-none d-lg-block">
	<div class="container">
		<div class="row">
			<form class="col-lg-12">
				<div class="row">
					<div class="col-lg-4">
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
				</div>
				<div class="row">
					<div class="col-lg-3">
						<div class="input-group">
							<span class="input-group-text"><i class="homey-icon homey-icon-calendar-3"></i></span>
							<input type="text" class="date-range form-control" placeholder="Check-In - Check-out" />
						</div>
					</div><!-- .datepicker-wrap -->
				</div>
				<div class="row">
				<div class="col-lg-2">
					<div class="input-group">
						<span class="input-group-text" id="inputGroupSelect01"><i class="homey-icon homey-icon-multiple-man-woman-2"></i></span>
						<select class="form-select py-2" id="inputGroupSelect01">
							<option class="fs-6 ">Guest</option>							
							<option value="1">1 Guest</option>
							<option value="2">2 Guests</option>
							<option value="3">3 Guests</option>
							<option value="4">4 Guests</option>
							<option value="5">5 Guests</option>
						</select>

					</div>
				</div><!-- .guest-select-wrap -->
				</div>
				
				<button type="submit" class="btn btn-secondary"><i class="homey-icon homey-icon-search-1" aria-hidden="true"></i></button>
			</form><!-- .form-inline -->
		</div><!-- .header-1-search-wrap -->
		<!-- search filerts -->
		<?php include('inc/search-filter-full-width-mobile.php'); ?>
	</div><!-- .container -->
</div><!-- .header-search -->