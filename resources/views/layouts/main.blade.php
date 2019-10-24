<!DOCTYPE html>
<html lang="en">

	<!-- begin::Head -->
	<head>
		<meta charset="utf-8" />
		<title>Metronic | No Aside</title>
		<meta name="description" content="No aside layout examples">
		<meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
        <link href="{{mix('css/app.css')}}" rel="stylesheet" type="text/css" />
        @yield('extend_css')
	</head>
	<!-- end::Head -->

	<!-- begin::Body -->
	<body class="kt-quick-panel--right kt-demo-panel--right kt-offcanvas-panel--right kt-header--fixed kt-header-mobile--fixed kt-subheader--fixed kt-subheader--enabled kt-subheader--solid kt-page--loading">

		<!-- begin:: Page -->

		<!-- begin:: Header Mobile -->
		<div id="kt_header_mobile" class="kt-header-mobile  kt-header-mobile--fixed ">
			<div class="kt-header-mobile__logo">
				<a href="demo1/index.html">
					<img alt="Logo" src="./assets/media/logos/logo-dark.png" />
				</a>
			</div>
			<div class="kt-header-mobile__toolbar">
				<button class="kt-header-mobile__toggler" id="kt_header_mobile_toggler"><span></span></button>
				<button class="kt-header-mobile__topbar-toggler" id="kt_header_mobile_topbar_toggler"><i class="flaticon-more"></i></button>
			</div>
		</div>

		<!-- end:: Header Mobile -->
		<div class="kt-grid kt-grid--hor kt-grid--root">
			<div class="kt-grid__item kt-grid__item--fluid kt-grid kt-grid--ver kt-page">
				<div class="kt-grid__item kt-grid__item--fluid kt-grid kt-grid--hor kt-wrapper" id="kt_wrapper">

					<!-- begin:: Header -->
                    @include('components.header')
					<!-- end:: Header -->
					<div class="kt-grid__item kt-grid__item--fluid kt-grid kt-grid--hor">

						<!-- begin:: Subheader -->
                         @yield('subheader', View::make('components.subheader'))
						<!-- end:: Subheader -->

						<!-- begin:: Content -->
                        @yield('content')
                        <div class="kt-content  kt-grid__item kt-grid__item--fluid" id="kt_content">

							<!--Begin::Dashboard 4-->

							<!--Begin::Section-->
							<div class="row">
								<div class="col-xl-6">

									<!--begin:: Widgets/Quick Stats-->
									<div class="row row-full-height">
										<div class="col-sm-12 col-md-12 col-lg-6">
											<div class="kt-portlet kt-portlet--height-fluid-half kt-portlet--border-bottom-brand">
												<div class="kt-portlet__body kt-portlet__body--fluid">
													<div class="kt-widget26">
														<div class="kt-widget26__content">
															<span class="kt-widget26__number">570</span>
															<span class="kt-widget26__desc">Total Sales</span>
														</div>
														<div class="kt-widget26__chart" style="height:100px; width: 230px;">
															<canvas id="kt_chart_quick_stats_1"></canvas>
														</div>
													</div>
												</div>
											</div>
											<div class="kt-space-20"></div>
											<div class="kt-portlet kt-portlet--height-fluid-half kt-portlet--border-bottom-danger">
												<div class="kt-portlet__body kt-portlet__body--fluid">
													<div class="kt-widget26">
														<div class="kt-widget26__content">
															<span class="kt-widget26__number">640</span>
															<span class="kt-widget26__desc">Completed Transactions</span>
														</div>
														<div class="kt-widget26__chart" style="height:100px; width: 230px;">
															<canvas id="kt_chart_quick_stats_2"></canvas>
														</div>
													</div>
												</div>
											</div>
										</div>
										<div class="col-sm-12 col-md-12 col-lg-6">
											<div class="kt-portlet kt-portlet--height-fluid-half kt-portlet--border-bottom-success">
												<div class="kt-portlet__body kt-portlet__body--fluid">
													<div class="kt-widget26">
														<div class="kt-widget26__content">
															<span class="kt-widget26__number">234+</span>
															<span class="kt-widget26__desc">Transactions</span>
														</div>
														<div class="kt-widget26__chart" style="height:100px; width: 230px;">
															<canvas id="kt_chart_quick_stats_3"></canvas>
														</div>
													</div>
												</div>
											</div>
											<div class="kt-space-20"></div>
											<div class="kt-portlet kt-portlet--height-fluid-half kt-portlet--border-bottom-warning">
												<div class="kt-portlet__body kt-portlet__body--fluid">
													<div class="kt-widget26">
														<div class="kt-widget26__content">
															<span class="kt-widget26__number">4.4M$</span>
															<span class="kt-widget26__desc">Paid Comissions</span>
														</div>
														<div class="kt-widget26__chart" style="height:100px; width: 230px;">
															<canvas id="kt_chart_quick_stats_4"></canvas>
														</div>
													</div>
												</div>
											</div>
										</div>
									</div>

									<!--end:: Widgets/Quick Stats-->
								</div>
								<div class="col-xl-6">

									<!--begin:: Widgets/Order Statistics-->
									<div class="kt-portlet kt-portlet--height-fluid">
										<div class="kt-portlet__head">
											<div class="kt-portlet__head-label">
												<h3 class="kt-portlet__head-title">
Order Statistics
</h3>
											</div>
											<div class="kt-portlet__head-toolbar">
												<a href="#" class="btn btn-label-brand btn-bold btn-sm dropdown-toggle" data-toggle="dropdown">
    Export
												</a>
												<div class="dropdown-menu dropdown-menu-fit dropdown-menu-right">

													<!--begin::Nav-->
													<ul class="kt-nav">
														<li class="kt-nav__head">
Export Options
<i class="flaticon2-information" data-toggle="kt-tooltip" data-placement="right" title="Click to learn more..."></i>
														</li>
														<li class="kt-nav__separator"></li>
														<li class="kt-nav__item">
															<a href="#" class="kt-nav__link">
																<i class="kt-nav__link-icon flaticon2-drop"></i>
																<span class="kt-nav__link-text">Activity</span>
															</a>
														</li>
														<li class="kt-nav__item">
															<a href="#" class="kt-nav__link">
																<i class="kt-nav__link-icon flaticon2-calendar-8"></i>
																<span class="kt-nav__link-text">FAQ</span>
															</a>
														</li>
														<li class="kt-nav__item">
															<a href="#" class="kt-nav__link">
																<i class="kt-nav__link-icon flaticon2-link"></i>
																<span class="kt-nav__link-text">Settings</span>
															</a>
														</li>
														<li class="kt-nav__item">
															<a href="#" class="kt-nav__link">
																<i class="kt-nav__link-icon flaticon2-new-email"></i>
																<span class="kt-nav__link-text">Support</span>
																<span class="kt-nav__link-badge">
																	<span class="kt-badge kt-badge--success">5</span>
																</span>
															</a>
														</li>
														<li class="kt-nav__separator"></li>
														<li class="kt-nav__foot">
															<a class="btn btn-label-danger btn-bold btn-sm" href="#">Upgrade plan</a>
															<a class="btn btn-clean btn-bold btn-sm" href="#" data-toggle="kt-tooltip" data-placement="right" title="Click to learn more...">Learn more</a>
														</li>
													</ul>

													<!--end::Nav-->
												</div>
											</div>
										</div>
										<div class="kt-portlet__body kt-portlet__body--fluid">
											<div class="kt-widget12">
												<div class="kt-widget12__content">
													<div class="kt-widget12__item">
														<div class="kt-widget12__info">
															<span class="kt-widget12__desc">Annual Taxes EMS</span>
															<span class="kt-widget12__value">$400,000</span>
														</div>
														<div class="kt-widget12__info">
															<span class="kt-widget12__desc">Finance Review Date</span>
															<span class="kt-widget12__value">July 24,2019</span>
														</div>
													</div>
													<div class="kt-widget12__item">
														<div class="kt-widget12__info">
															<span class="kt-widget12__desc">Avarage Revenue</span>
															<span class="kt-widget12__value">$60M</span>
														</div>
														<div class="kt-widget12__info">
															<span class="kt-widget12__desc">Revenue Margin</span>
															<div class="kt-widget12__progress">
																<div class="progress kt-progress--sm">
																	<div class="progress-bar kt-bg-brand" role="progressbar" style="width: 40%;" aria-valuenow="100" aria-valuemin="0" aria-valuemax="100"></div>
																</div>
																<span class="kt-widget12__stat">
40%
																</span>
															</div>
														</div>
													</div>
												</div>
												<div class="kt-widget12__chart" style="height:250px;">
													<canvas id="kt_chart_order_statistics"></canvas>
												</div>
											</div>
										</div>
									</div>

									<!--end:: Widgets/Order Statistics-->
								</div>
							</div>

							<!--End::Section-->

							<!--Begin::Section-->
							<div class="row">
								<div class="col-xl-6">

									<!--begin:: Widgets/Sale Reports-->
									<div class="kt-portlet kt-portlet--tabs kt-portlet--height-fluid">
										<div class="kt-portlet__head">
											<div class="kt-portlet__head-label">
												<h3 class="kt-portlet__head-title">
Sales Reports
</h3>
											</div>
											<div class="kt-portlet__head-toolbar">
												<ul class="nav nav-tabs nav-tabs-line nav-tabs-bold nav-tabs-line-brand" role="tablist">
													<li class="nav-item">
														<a class="nav-link active" data-toggle="tab" href="#kt_widget11_tab1_content" role="tab">
    Last Month
</a>
													</li>
													<li class="nav-item">
														<a class="nav-link" data-toggle="tab" href="#kt_widget11_tab2_content" role="tab">
    All Time
</a>
													</li>
												</ul>
											</div>
										</div>
										<div class="kt-portlet__body">

											<!--Begin::Tab Content-->
											<div class="tab-content">

												<!--begin::tab 1 content-->
												<div class="tab-pane active" id="kt_widget11_tab1_content">

													<!--begin::Widget 11-->
													<div class="kt-widget11">
														<div class="table-responsive">
															<table class="table">
																<thead>
																	<tr>
																		<td style="width:1%">#</td>
																		<td style="width:40%">Application</td>
																		<td style="width:14%">Sales</td>
																		<td style="width:15%">Change</td>
																		<td style="width:15%">Status</td>
																		<td style="width:15%" class="kt-align-right">Total</td>
																	</tr>
																</thead>
																<tbody>
																	<tr>
																		<td>
																			<label class="kt-checkbox kt-checkbox--single">
																				<input type="checkbox"><span></span>
																			</label>
																		</td>
																		<td>
																			<a href="#" class="kt-widget11__title">Loop</a>
																			<span class="kt-widget11__sub">CRM System</span>
																		</td>
																		<td>19,200</td>
																		<td>$63</td>
																		<td><span class="kt-badge kt-badge--inline kt-badge--brand">new</span></td>
																		<td class="kt-align-right kt-font-brand kt-font-bold">$34,740</td>
																	</tr>
																	<tr>
																		<td>
																			<label class="kt-checkbox kt-checkbox--single"><input type="checkbox"><span></span></label>
																		</td>
																		<td>
																			<a href="#" class="kt-widget11__title">Selto</a>
																			<span class="kt-widget11__sub">Powerful Website Builder</span>
																		</td>
																		<td>24,310</td>
																		<td>$39</td>
																		<td><span class="kt-badge kt-badge--inline kt-badge--success">approved</span></td>
																		<td class="kt-align-right kt-font-brand kt-font-bold">$46,010</td>
																	</tr>
																	<tr>
																		<td>
																			<label class="kt-checkbox kt-checkbox--single"><input type="checkbox"><span></span></label>
																		</td>
																		<td>
																			<a href="#" class="kt-widget11__title">Jippo</a>
																			<span class="kt-widget11__sub">The Best Selling App</span>
																		</td>
																		<td>9,076</td>
																		<td>$105</td>
																		<td><span class="kt-badge kt-badge--inline kt-badge--warning">pending</span></td>
																		<td class="kt-align-right kt-font-brand kt-font-bold">$67,800</td>
																	</tr>
																	<tr>
																		<td>
																			<label class="kt-checkbox kt-checkbox--single"><input type="checkbox"><span></span></label>
																		</td>
																		<td>
																			<a href="#" class="kt-widget11__title">Verto</a>
																			<span class="kt-widget11__sub">Web Development Tool</span>
																		</td>
																		<td>11,094</td>
																		<td>$16</td>
																		<td><span class="kt-badge kt-badge--inline kt-badge--danger">on hold</span></td>
																		<td class="kt-align-right kt-font-brand kt-font-bold">$18,520</td>
																	</tr>
																</tbody>
															</table>
														</div>
														<div class="kt-widget11__action kt-align-right">
															<button type="button" class="btn btn-label-brand btn-bold btn-sm">Import Report</button>
														</div>
													</div>

													<!--end::Widget 11-->
												</div>

												<!--end::tab 1 content-->

												<!--begin::tab 2 content-->
												<div class="tab-pane" id="kt_widget11_tab2_content">

													<!--begin::Widget 11-->
													<div class="kt-widget11">
														<div class="table-responsive">
															<table class="table">
																<thead>
																	<tr>
																		<td style="width:1%">#</td>
																		<td style="width:40%">Application</td>
																		<td style="width:14%">Sales</td>
																		<td style="width:15%">Change</td>
																		<td style="width:15%">Status</td>
																		<td style="width:15%" class="kt-align-right">Total</td>
																	</tr>
																</thead>
																<tbody>
																	<tr>
																		<td>
																			<label class="kt-checkbox kt-checkbox--single">
																				<input type="checkbox"><span></span>
																			</label>
																		</td>
																		<td>
																			<span class="kt-widget11__title">Loop</span>
																			<span class="kt-widget11__sub">CRM System</span>
																		</td>
																		<td>19,200</td>
																		<td>$63</td>
																		<td><span class="kt-badge kt-badge--inline kt-badge--danger">pending</span></td>
																		<td class="kt-align-right kt-font-brand  kt-font-bold">$23,740</td>
																	</tr>
																	<tr>
																		<td>
																			<label class="kt-checkbox kt-checkbox--single"><input type="checkbox"><span></span></label>
																		</td>
																		<td>
																			<span class="kt-widget11__title">Selto</span>
																			<span class="kt-widget11__sub">Powerful Website Builder</span>
																		</td>
																		<td>24,310</td>
																		<td>$39</td>
																		<td><span class="kt-badge kt-badge--inline kt-badge--success">new</span></td>
																		<td class="kt-align-right kt-font-success  kt-font-bold">$46,010</td>
																	</tr>
																	<tr>
																		<td>
																			<label class="kt-checkbox kt-checkbox--single"><input type="checkbox"><span></span></label>
																		</td>
																		<td>
																			<span class="kt-widget11__title">Jippo</span>
																			<span class="kt-widget11__sub">The Best Selling App</span>
																		</td>
																		<td>9,076</td>
																		<td>$105</td>
																		<td><span class="kt-badge kt-badge--inline kt-badge--brand">approved</span></td>
																		<td class="kt-align-right kt-font-danger kt-font-bold">$15,800</td>
																	</tr>
																	<tr>
																		<td>
																			<label class="kt-checkbox kt-checkbox--single"><input type="checkbox"><span></span></label>
																		</td>
																		<td>
																			<span class="kt-widget11__title">Verto</span>
																			<span class="kt-widget11__sub">Web Development Tool</span>
																		</td>
																		<td>11,094</td>
																		<td>$16</td>
																		<td><span class="kt-badge kt-badge--inline kt-badge--info">done</span></td>
																		<td class="kt-align-right kt-font-warning kt-font-bold">$8,520</td>
																	</tr>
																</tbody>
															</table>
														</div>
														<div class="kt-widget11__action kt-align-right">
															<button type="button" class="btn btn-label-success btn-bold btn-sm">Generate Report</button>
														</div>
													</div>

													<!--end::Widget 11-->
												</div>

												<!--end::tab 2 content-->

												<!--begin::tab 3 content-->
												<div class="tab-pane" id="kt_widget11_tab3_content">
												</div>

												<!--end::tab 3 content-->
											</div>

											<!--End::Tab Content-->
										</div>
									</div>

									<!--end:: Widgets/Sale Reports-->
								</div>
								<div class="col-xl-6">

									<!--Begin::Portlet-->
									<div class="kt-portlet kt-portlet--height-fluid">
										<div class="kt-portlet__head">
											<div class="kt-portlet__head-label">
												<h3 class="kt-portlet__head-title">
Recent Activities
</h3>
											</div>
											<div class="kt-portlet__head-toolbar">
												<div class="dropdown dropdown-inline">
													<button type="button" class="btn btn-clean btn-sm btn-icon btn-icon-md" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
														<i class="flaticon-more-1"></i>
													</button>
													<div class="dropdown-menu dropdown-menu-right dropdown-menu-fit dropdown-menu-md">

														<!--begin::Nav-->
														<ul class="kt-nav">
															<li class="kt-nav__head">
Export Options
<i class="flaticon2-information" data-toggle="kt-tooltip" data-placement="right" title="Click to learn more..."></i>
															</li>
															<li class="kt-nav__separator"></li>
															<li class="kt-nav__item">
																<a href="#" class="kt-nav__link">
																	<i class="kt-nav__link-icon flaticon2-drop"></i>
																	<span class="kt-nav__link-text">Activity</span>
																</a>
															</li>
															<li class="kt-nav__item">
																<a href="#" class="kt-nav__link">
																	<i class="kt-nav__link-icon flaticon2-calendar-8"></i>
																	<span class="kt-nav__link-text">FAQ</span>
																</a>
															</li>
															<li class="kt-nav__item">
																<a href="#" class="kt-nav__link">
																	<i class="kt-nav__link-icon flaticon2-link"></i>
																	<span class="kt-nav__link-text">Settings</span>
																</a>
															</li>
															<li class="kt-nav__item">
																<a href="#" class="kt-nav__link">
																	<i class="kt-nav__link-icon flaticon2-new-email"></i>
																	<span class="kt-nav__link-text">Support</span>
																	<span class="kt-nav__link-badge">
																		<span class="kt-badge kt-badge--success">5</span>
																	</span>
																</a>
															</li>
															<li class="kt-nav__separator"></li>
															<li class="kt-nav__foot">
																<a class="btn btn-label-danger btn-bold btn-sm" href="#">Upgrade plan</a>
																<a class="btn btn-clean btn-bold btn-sm" href="#" data-toggle="kt-tooltip" data-placement="right" title="Click to learn more...">Learn more</a>
															</li>
														</ul>

														<!--end::Nav-->
													</div>
												</div>
											</div>
										</div>
										<div class="kt-portlet__body">

											<!--Begin::Timeline 3 -->
											<div class="kt-timeline-v2">
												<div class="kt-timeline-v2__items  kt-padding-top-25 kt-padding-bottom-30">
													<div class="kt-timeline-v2__item">
														<span class="kt-timeline-v2__item-time">10:00</span>
														<div class="kt-timeline-v2__item-cricle">
															<i class="fa fa-genderless kt-font-danger"></i>
														</div>
														<div class="kt-timeline-v2__item-text  kt-padding-top-5">
Lorem ipsum dolor sit amit,consectetur eiusmdd tempor<br>
															incididunt ut labore et dolore magna
</div>
													</div>
													<div class="kt-timeline-v2__item">
														<span class="kt-timeline-v2__item-time">12:45</span>
														<div class="kt-timeline-v2__item-cricle">
															<i class="fa fa-genderless kt-font-success"></i>
														</div>
														<div class="kt-timeline-v2__item-text kt-timeline-v2__item-text--bold">
AEOL Meeting With
</div>
														<div class="kt-list-pics kt-list-pics--sm kt-padding-l-20">
															<a href="#"><img src="./assets/media/users/100_4.jpg" title=""></a>
															<a href="#"><img src="./assets/media/users/100_13.jpg" title=""></a>
															<a href="#"><img src="./assets/media/users/100_11.jpg" title=""></a>
															<a href="#"><img src="./assets/media/users/100_14.jpg" title=""></a>
														</div>
													</div>
													<div class="kt-timeline-v2__item">
														<span class="kt-timeline-v2__item-time">14:00</span>
														<div class="kt-timeline-v2__item-cricle">
															<i class="fa fa-genderless kt-font-brand"></i>
														</div>
														<div class="kt-timeline-v2__item-text kt-padding-top-5">
Make Deposit <a href="#" class="kt-link kt-link--brand kt-font-bolder">USD 700</a> To ESL.
														</div>
													</div>
													<div class="kt-timeline-v2__item">
														<span class="kt-timeline-v2__item-time">16:00</span>
														<div class="kt-timeline-v2__item-cricle">
															<i class="fa fa-genderless kt-font-warning"></i>
														</div>
														<div class="kt-timeline-v2__item-text kt-padding-top-5">
Lorem ipsum dolor sit amit,consectetur eiusmdd tempor<br>
															incididunt ut labore et dolore magna elit enim at minim<br>
															veniam quis nostrud
</div>
													</div>
													<div class="kt-timeline-v2__item">
														<span class="kt-timeline-v2__item-time">17:00</span>
														<div class="kt-timeline-v2__item-cricle">
															<i class="fa fa-genderless kt-font-info"></i>
														</div>
														<div class="kt-timeline-v2__item-text kt-padding-top-5">
Placed a new order in <a href="#" class="kt-link kt-link--brand kt-font-bolder">SIGNATURE MOBILE</a> marketplace.
														</div>
													</div>
													<div class="kt-timeline-v2__item">
														<span class="kt-timeline-v2__item-time">16:00</span>
														<div class="kt-timeline-v2__item-cricle">
															<i class="fa fa-genderless kt-font-brand"></i>
														</div>
														<div class="kt-timeline-v2__item-text kt-padding-top-5">
Lorem ipsum dolor sit amit,consectetur eiusmdd tempor<br>
															incididunt ut labore et dolore magna elit enim at minim<br>
															veniam quis nostrud
</div>
													</div>
													<div class="kt-timeline-v2__item">
														<span class="kt-timeline-v2__item-time">17:00</span>
														<div class="kt-timeline-v2__item-cricle">
															<i class="fa fa-genderless kt-font-danger"></i>
														</div>
														<div class="kt-timeline-v2__item-text kt-padding-top-5">
Received a new feedback on <a href="#" class="kt-link kt-link--brand kt-font-bolder">FinancePro App</a> product.
														</div>
													</div>
													<div class="kt-timeline-v2__item">
														<span class="kt-timeline-v2__item-time">15:30</span>
														<div class="kt-timeline-v2__item-cricle">
															<i class="fa fa-genderless kt-font-danger"></i>
														</div>
														<div class="kt-timeline-v2__item-text kt-padding-top-5">
New notification message has been received on <a href="#" class="kt-link kt-link--brand kt-font-bolder">LoopFin Pro</a> product.
														</div>
													</div>
												</div>
											</div>

											<!--End::Timeline 3 -->
										</div>
									</div>

									<!--End::Portlet-->
								</div>
							</div>

							<!--End::Section-->

							<!--Begin::Section-->
							<div class="row">
								<div class="col-xl-4">

									<!--begin:: Widgets/Sales Stats-->
									<div class="kt-portlet kt-portlet--head--noborder kt-portlet--height-fluid">
										<div class="kt-portlet__head kt-portlet__head--noborder">
											<div class="kt-portlet__head-label">
												<h3 class="kt-portlet__head-title">
Sales Stats
</h3>
											</div>
											<div class="kt-portlet__head-toolbar">
												<div class="dropdown dropdown-inline">
													<button type="button" class="btn btn-clean btn-sm btn-icon btn-icon-lg" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
														<i class="flaticon-more-1"></i>
													</button>
													<div class="dropdown-menu dropdown-menu-right">
														<ul class="kt-nav">
															<li class="kt-nav__section kt-nav__section--first">
																<span class="kt-nav__section-text">Finance</span>
															</li>
															<li class="kt-nav__item">
																<a href="#" class="kt-nav__link">
																	<i class="kt-nav__link-icon flaticon2-graph-1"></i>
																	<span class="kt-nav__link-text">Statistics</span>
																</a>
															</li>
															<li class="kt-nav__item">
																<a href="#" class="kt-nav__link">
																	<i class="kt-nav__link-icon flaticon2-calendar-4"></i>
																	<span class="kt-nav__link-text">Events</span>
																</a>
															</li>
															<li class="kt-nav__item">
																<a href="#" class="kt-nav__link">
																	<i class="kt-nav__link-icon flaticon2-layers-1"></i>
																	<span class="kt-nav__link-text">Reports</span>
																</a>
															</li>
															<li class="kt-nav__section kt-nav__section--first">
																<span class="kt-nav__section-text">HR</span>
															</li>
															<li class="kt-nav__item">
																<a href="#" class="kt-nav__link">
																	<i class="kt-nav__link-icon flaticon2-calendar-4"></i>
																	<span class="kt-nav__link-text">Notifications</span>
																</a>
															</li>
															<li class="kt-nav__item">
																<a href="#" class="kt-nav__link">
																	<i class="kt-nav__link-icon flaticon2-file-1"></i>
																	<span class="kt-nav__link-text">Files</span>
																</a>
															</li>
														</ul>
													</div>
												</div>
											</div>
										</div>
										<div class="kt-portlet__body">

											<!--begin::Widget 6-->
											<div class="kt-widget15">
												<div class="kt-widget15__chart">
													<canvas id="kt_chart_sales_stats" style="height:160px;"></canvas>
												</div>
												<div class="kt-widget15__items kt-margin-t-40">
													<div class="row">
														<div class="col">
															<div class="kt-widget15__item">
																<span class="kt-widget15__stats">
63%
																</span>
																<span class="kt-widget15__text">
Sales Grow
</span>
																<div class="kt-space-10"></div>
																<div class="progress kt-widget15__chart-progress--sm">
																	<div class="progress-bar bg-danger" role="progressbar" style="width: 25%;" aria-valuenow="25" aria-valuemin="0" aria-valuemax="100"></div>
																</div>
															</div>
														</div>
														<div class="col">
															<div class="kt-widget15__item">
																<span class="kt-widget15__stats">
54%
																</span>
																<span class="kt-widget15__text">
Orders Grow
</span>
																<div class="kt-space-10"></div>
																<div class="progress kt-progress--sm">
																	<div class="progress-bar bg-warning" role="progressbar" style="width: 40%;" aria-valuenow="50" aria-valuemin="0" aria-valuemax="100"></div>
																</div>
															</div>
														</div>
													</div>
													<div class="row">
														<div class="col">
															<div class="kt-widget15__item">
																<span class="kt-widget15__stats">
41%
																</span>
																<span class="kt-widget15__text">
Profit Grow
</span>
																<div class="kt-space-10"></div>
																<div class="progress kt-progress--sm">
																	<div class="progress-bar bg-success" role="progressbar" style="width: 55%;" aria-valuenow="75" aria-valuemin="0" aria-valuemax="100"></div>
																</div>
															</div>
														</div>
														<div class="col">
															<div class="kt-widget15__item">
																<span class="kt-widget15__stats">
79%
																</span>
																<span class="kt-widget15__text">
Member Grow
</span>
																<div class="kt-space-10"></div>
																<div class="progress kt-progress--sm">
																	<div class="progress-bar bg-primary" role="progressbar" style="width: 60%;" aria-valuenow="100" aria-valuemin="0" aria-valuemax="100"></div>
																</div>
															</div>
														</div>
													</div>
													<div class="row">
														<div class="col">
															<div class="kt-widget15__desc">
																* lorem ipsum dolor sit amet consectetuer sediat elit
</div>
														</div>
													</div>
												</div>
											</div>

											<!--end::Widget 6-->
										</div>
									</div>

									<!--end:: Widgets/Sales Stats-->
								</div>
								<div class="col-xl-4">

									<!--begin:: Widgets/Top Locations-->
									<div class="kt-portlet kt-portlet--head--noborder kt-portlet--height-fluid">
										<div class="kt-portlet__head">
											<div class="kt-portlet__head-label">
												<h3 class="kt-portlet__head-title">
Top Locations
</h3>
											</div>
											<div class="kt-portlet__head-toolbar">
												<div class="dropdown dropdown-inline">
													<button type="button" class="btn btn-clean btn-sm btn-icon btn-icon-lg" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
														<i class="flaticon-more-1"></i>
													</button>
													<div class="dropdown-menu dropdown-menu-right">
														<ul class="kt-nav">
															<li class="kt-nav__section kt-nav__section--first">
																<span class="kt-nav__section-text">Finance</span>
															</li>
															<li class="kt-nav__item">
																<a href="#" class="kt-nav__link">
																	<i class="kt-nav__link-icon flaticon2-graph-1"></i>
																	<span class="kt-nav__link-text">Statistics</span>
																</a>
															</li>
															<li class="kt-nav__item">
																<a href="#" class="kt-nav__link">
																	<i class="kt-nav__link-icon flaticon2-calendar-4"></i>
																	<span class="kt-nav__link-text">Events</span>
																</a>
															</li>
															<li class="kt-nav__item">
																<a href="#" class="kt-nav__link">
																	<i class="kt-nav__link-icon flaticon2-layers-1"></i>
																	<span class="kt-nav__link-text">Reports</span>
																</a>
															</li>
															<li class="kt-nav__section kt-nav__section--first">
																<span class="kt-nav__section-text">HR</span>
															</li>
															<li class="kt-nav__item">
																<a href="#" class="kt-nav__link">
																	<i class="kt-nav__link-icon flaticon2-calendar-4"></i>
																	<span class="kt-nav__link-text">Notifications</span>
																</a>
															</li>
															<li class="kt-nav__item">
																<a href="#" class="kt-nav__link">
																	<i class="kt-nav__link-icon flaticon2-file-1"></i>
																	<span class="kt-nav__link-text">Files</span>
																</a>
															</li>
														</ul>
													</div>
												</div>
											</div>
										</div>
										<div class="kt-portlet__body">
											<div class="kt-widget15">
												<div class="kt-widget15__map">
													<div id="kt_chart_latest_trends_map" style="height:320px;"></div>
												</div>
												<div class="kt-widget15__items kt-margin-t-30">
													<div class="row">
														<div class="col">

															<!--begin::widget item-->
															<div class="kt-widget15__item">
																<span class="kt-widget15__stats">
63%
																</span>
																<span class="kt-widget15__text">
London
																</span>
																<div class="kt-space-10"></div>
																<div class="progress m-progress--sm">
																	<div class="progress-bar bg-danger" role="progressbar" style="width: 25%;" aria-valuenow="25" aria-valuemin="0" aria-valuemax="100"></div>
																</div>
															</div>

															<!--end::widget item-->
														</div>
														<div class="col">

															<!--begin::widget item-->
															<div class="kt-widget15__item">
																<span class="kt-widget15__stats">
54%
																</span>
																<span class="kt-widget15__text">
Glasgow
																</span>
																<div class="kt-space-10"></div>
																<div class="progress m-progress--sm">
																	<div class="progress-bar bg-warning" role="progressbar" style="width: 40%;" aria-valuenow="50" aria-valuemin="0" aria-valuemax="100"></div>
																</div>
															</div>

															<!--end::widget item-->
														</div>
													</div>
													<div class="row">
														<div class="col">

															<!--begin::widget item-->
															<div class="kt-widget15__item">
																<span class="kt-widget15__stats">
41%
																</span>
																<span class="kt-widget15__text">
Dublin
																</span>
																<div class="kt-space-10"></div>
																<div class="progress m-progress--sm">
																	<div class="progress-bar bg-success" role="progressbar" style="width: 55%;" aria-valuenow="75" aria-valuemin="0" aria-valuemax="100"></div>
																</div>
															</div>

															<!--end::widget item-->
														</div>
														<div class="col">

															<!--begin::widget item-->
															<div class="kt-widget15__item">
																<span class="kt-widget15__stats">
79%
																</span>
																<span class="kt-widget15__text">
Edinburgh
																</span>
																<div class="kt-space-10"></div>
																<div class="progress m-progress--sm">
																	<div class="progress-bar bg-primary" role="progressbar" style="width: 60%;" aria-valuenow="100" aria-valuemin="0" aria-valuemax="100"></div>
																</div>

																<!--end::widget item-->
															</div>
														</div>
													</div>
												</div>
											</div>
										</div>
									</div>

									<!--end:: Widgets/Top Locations-->
								</div>
								<div class="col-xl-4">

									<!--begin:: Widgets/Trends-->
									<div class="kt-portlet kt-portlet--head--noborder kt-portlet--height-fluid">
										<div class="kt-portlet__head kt-portlet__head--noborder">
											<div class="kt-portlet__head-label">
												<h3 class="kt-portlet__head-title">
Trends
												</h3>
											</div>
											<div class="kt-portlet__head-toolbar">
												<div class="dropdown dropdown-inline">
													<button type="button" class="btn btn-clean btn-sm btn-icon btn-icon-lg" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
														<i class="flaticon-more-1"></i>
													</button>
													<div class="dropdown-menu dropdown-menu-right">
														<ul class="kt-nav">
															<li class="kt-nav__item">
																<a href="#" class="kt-nav__link">
																	<i class="kt-nav__link-icon flaticon2-line-chart"></i>
																	<span class="kt-nav__link-text">Reports</span>
																</a>
															</li>
															<li class="kt-nav__item">
																<a href="#" class="kt-nav__link">
																	<i class="kt-nav__link-icon flaticon2-send"></i>
																	<span class="kt-nav__link-text">Messages</span>
																</a>
															</li>
															<li class="kt-nav__item">
																<a href="#" class="kt-nav__link">
																	<i class="kt-nav__link-icon flaticon2-pie-chart-1"></i>
																	<span class="kt-nav__link-text">Charts</span>
																</a>
															</li>
															<li class="kt-nav__item">
																<a href="#" class="kt-nav__link">
																	<i class="kt-nav__link-icon flaticon2-avatar"></i>
																	<span class="kt-nav__link-text">Members</span>
																</a>
															</li>
															<li class="kt-nav__item">
																<a href="#" class="kt-nav__link">
																	<i class="kt-nav__link-icon flaticon2-settings"></i>
																	<span class="kt-nav__link-text">Settings</span>
																</a>
															</li>
														</ul>
													</div>
												</div>
											</div>
										</div>
										<div class="kt-portlet__body kt-portlet__body--fluid kt-portlet__body--fit">
											<div class="kt-widget4 kt-widget4--sticky">
												<div class="kt-widget4__chart">
													<canvas id="kt_chart_trends_stats" style="height: 240px;"></canvas>
												</div>
												<div class="kt-widget4__items kt-widget4__items--bottom kt-portlet__space-x kt-margin-b-20">
													<div class="kt-widget4__item">
														<div class="kt-widget4__img kt-widget4__img--logo">
															<img src="./assets/media/client-logos/logo3.png" alt="">
														</div>
														<div class="kt-widget4__info">
															<a href="#" class="kt-widget4__title">
Phyton
															</a>
															<span class="kt-widget4__sub">
A Programming Language
</span>
														</div>
														<span class="kt-widget4__ext">
															<span class="kt-widget4__number kt-font-danger">+$17</span>
														</span>
													</div>
													<div class="kt-widget4__item">
														<div class="kt-widget4__img kt-widget4__img--logo">
															<img src="./assets/media/client-logos/logo1.png" alt="">
														</div>
														<div class="kt-widget4__info">
															<a href="#" class="kt-widget4__title">
FlyThemes
															</a>
															<span class="kt-widget4__sub">
A Let's Fly Fast Again Language
															</span>
														</div>
														<span class="kt-widget4__ext">
															<span class="kt-widget4__number kt-font-danger">+$300</span>
														</span>
													</div>
													<div class="kt-widget4__item">
														<div class="kt-widget4__img kt-widget4__img--logo">
															<img src="./assets/media/client-logos/logo2.png" alt="">
														</div>
														<div class="kt-widget4__info">
															<a href="#" class="kt-widget4__title">
																AirApp
															</a>
															<span class="kt-widget4__sub">
																Awesome App For Project Management
															</span>
														</div>
														<span class="kt-widget4__ext">
															<span class="kt-widget4__number kt-font-danger">+$6700</span>
														</span>
													</div>
												</div>
											</div>
										</div>
									</div>

									<!--end:: Widgets/Trends-->
								</div>
							</div>

							<!--End::Section-->

							<!--Begin::Section-->
							<div class="row">
								<div class="col-xl-12">
									<div class="kt-portlet kt-portlet--height-fluid kt-portlet--mobile ">
										<div class="kt-portlet__head kt-portlet__head--lg kt-portlet__head--noborder kt-portlet__head--break-sm">
											<div class="kt-portlet__head-label">
												<h3 class="kt-portlet__head-title">
													Exclusive Datatable Plugin
												</h3>
											</div>
											<div class="kt-portlet__head-toolbar">
												<div class="dropdown dropdown-inline">
													<button type="button" class="btn btn-clean btn-sm btn-icon btn-icon-md" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
														<i class="flaticon-more-1"></i>
													</button>
													<div class="dropdown-menu dropdown-menu-right dropdown-menu-md dropdown-menu-fit">

														<!--begin::Nav-->
														<ul class="kt-nav">
															<li class="kt-nav__head">
																Export Options
																<i class="flaticon2-information" data-toggle="kt-tooltip" data-placement="right" title="Click to learn more..."></i>
															</li>
															<li class="kt-nav__separator"></li>
															<li class="kt-nav__item">
																<a href="#" class="kt-nav__link">
																	<i class="kt-nav__link-icon flaticon2-drop"></i>
																	<span class="kt-nav__link-text">Activity</span>
																</a>
															</li>
															<li class="kt-nav__item">
																<a href="#" class="kt-nav__link">
																	<i class="kt-nav__link-icon flaticon2-calendar-8"></i>
																	<span class="kt-nav__link-text">FAQ</span>
																</a>
															</li>
															<li class="kt-nav__item">
																<a href="#" class="kt-nav__link">
																	<i class="kt-nav__link-icon flaticon2-link"></i>
																	<span class="kt-nav__link-text">Settings</span>
																</a>
															</li>
															<li class="kt-nav__item">
																<a href="#" class="kt-nav__link">
																	<i class="kt-nav__link-icon flaticon2-new-email"></i>
																	<span class="kt-nav__link-text">Support</span>
																	<span class="kt-nav__link-badge">
																		<span class="kt-badge kt-badge--success">5</span>
																	</span>
																</a>
															</li>
															<li class="kt-nav__separator"></li>
															<li class="kt-nav__foot">
																<a class="btn btn-label-danger btn-bold btn-sm" href="#">Upgrade plan</a>
																<a class="btn btn-clean btn-bold btn-sm" href="#" data-toggle="kt-tooltip" data-placement="right" title="Click to learn more...">Learn more</a>
															</li>
														</ul>

														<!--end::Nav-->
													</div>
												</div>
											</div>
										</div>
										<div class="kt-portlet__body kt-portlet__body--fit">

											<!--begin: Datatable -->
											<div class="kt-datatable" id="kt_datatable_latest_orders"></div>

											<!--end: Datatable -->
										</div>
									</div>
								</div>
							</div>

							<!--End::Section-->

							<!--Begin::Section-->
							<div class="row">
								<div class="col-xl-6">

									<!--begin:: Widgets/Application Sales-->
									<div class="kt-portlet kt-portlet--height-fluid">
										<div class="kt-portlet__head">
											<div class="kt-portlet__head-label">
												<h3 class="kt-portlet__head-title">
													Application Sales
												</h3>
											</div>
											<div class="kt-portlet__head-toolbar">
												<ul class="nav nav-pills nav-pills-sm nav-pills-label nav-pills-bold" role="tablist">
													<li class="nav-item">
														<a class="nav-link active" data-toggle="tab" href="#kt_widget11_tab1_content" role="tab">
															Last Month
														</a>
													</li>
													<li class="nav-item">
														<a class="nav-link" data-toggle="tab" href="#kt_widget11_tab2_content" role="tab">
															All Time
														</a>
													</li>
												</ul>
											</div>
										</div>
										<div class="kt-portlet__body">
											<div class="tab-content">
												<div class="tab-pane active" id="kt_widget11_tab1_content">

													<!--begin::Widget 11-->
													<div class="kt-widget11">
														<div class="table-responsive">
															<table class="table">
																<thead>
																	<tr>
																		<td style=" width: 1%;"></td>
																		<td style=" width: 20%;">Application</td>
																		<td style=" width: 10%;">Sales</td>
																		<td style=" width: 20%;">Change</td>
																		<td style=" width: 10%;">Status</td>
																		<td style=" width: 10%;" class="kt-align-right">Total</td>
																	</tr>
																</thead>
																<tbody>
																	<tr>
																		<td>
																			<label class="kt-checkbox kt-checkbox--single">
																				<input type="checkbox"><span></span>
																			</label>
																		</td>
																		<td>
																			<span class="kt-widget11__title">Vertex 2.0</span>
																			<span class="kt-widget11__sub">Vertex To By Again</span>
																		</td>
																		<td>19,200</td>
																		<td>
																			<div class="kt-widget11__chart" style="height:50px; width: 100px">
																				<iframe class="chartjs-hidden-iframe" tabindex="-1" style="display: block; overflow: hidden; border: 0px; margin: 0px; top: 0px; left: 0px; bottom: 0px; right: 0px; height: 100%; width: 100%; position: absolute; pointer-events: none; z-index: -1;"></iframe>
																				<canvas id="kt_chart_sales_by_apps_1_1" style="display: block; width: 100px; height: 50px;" width="100" height="50"></canvas>
																			</div>
																		</td>
																		<td><span class="kt-badge kt-badge--danger kt-badge--inline">in process</span></td>
																		<td class="kt-align-right kt-font-brand kt-font-bold">$14,740</td>
																	</tr>
																	<tr>
																		<td>
																			<label class="kt-checkbox kt-checkbox--single"><input type="checkbox"><span></span></label>
																		</td>
																		<td>
																			<span class="kt-widget11__title">Metronic</span>
																			<span class="kt-widget11__sub">Powerful Admin Theme</span>
																		</td>
																		<td>24,310</td>
																		<td>
																			<div class="kt-widget11__chart" style="height:50px; width: 100px">
																				<canvas id="kt_chart_sales_by_apps_1_2" style="display: block; width: 100px; height: 50px;" width="100" height="50"></canvas>
																			</div>
																		</td>
																		<td>
																			<span class="kt-badge kt-badge--success kt-badge--inline">pending</span>
																		</td>
																		<td class="kt-align-right kt-font-brand kt-font-bold">$16,010</td>
																	</tr>
																	<tr>
																		<td>
																			<label class="kt-checkbox kt-checkbox--single"><input type="checkbox"><span></span></label>
																		</td>
																		<td>
																			<span class="kt-widget11__title">Apex</span>
																			<span class="kt-widget11__sub">The Best Selling App</span>
																		</td>
																		<td>9,076</td>
																		<td>
																			<div class="kt-widget11__chart" style="height:50px; width: 100px">
																				<canvas id="kt_chart_sales_by_apps_1_3" style="display: block; width: 100px; height: 50px;" width="100" height="50"></canvas>
																			</div>
																		</td>
																		<td>
																			<span class="kt-badge kt-badge--brand kt-badge--inline">new</span>
																		</td>
																		<td class="kt-align-right kt-font-brand kt-font-bold">$37,200</td>
																	</tr>
																	<tr>
																		<td>
																			<label class="kt-checkbox kt-checkbox--single"><input type="checkbox"><span></span></label>
																		</td>
																		<td>
																			<span class="kt-widget11__title">Cascades</span>
																			<span class="kt-widget11__sub">Design Tool</span>
																		</td>
																		<td>11,094</td>
																		<td>
																			<div class="kt-widget11__chart" style="height:50px; width: 100px">
																				<canvas id="kt_chart_sales_by_apps_1_4" style="display: block; width: 100px; height: 50px;" width="100" height="50"></canvas>
																			</div>
																		</td>
																		<td>
																			<span class="kt-badge kt-badge--warning kt-badge--inline">new</span>
																		</td>
																		<td class="kt-align-right kt-font-brand kt-font-bold">$8,520</td>
																	</tr>
																</tbody>
															</table>
														</div>
														<div class="kt-widget11__action kt-align-right">
															<button type="button" class="btn btn-label-success btn-sm btn-bold">View All Records</button>
														</div>
													</div>

													<!--end::Widget 11-->
												</div>
												<div class="tab-pane" id="kt_widget11_tab2_content">

													<!--begin::Widget 11-->
													<div class="kt-widget11">
														<div class="table-responsive">
															<table class="table">
																<thead>
																	<tr>
																		<td style=" width: 1%;"></td>
																		<td style=" width: 20%;">Application</td>
																		<td style=" width: 10%;">Sales</td>
																		<td style=" width: 20%;">Change</td>
																		<td style=" width: 10%;">Status</td>
																		<td style=" width: 10%;" class="kt-align-right">Total</td>
																	</tr>
																</thead>
																<tbody>
																	<tr>
																		<td>
																			<label class="kt-checkbox kt-checkbox--single">
																				<input type="checkbox"><span></span>
																			</label>
																		</td>
																		<td>
																			<span class="kt-widget11__title">Loop</span>
																			<span class="kt-widget11__sub">CRM System</span>
																		</td>
																		<td>19,200</td>
																		<td>
																			<div class="kt-widget11__chart" style="height:50px; width: 100px">
																				<canvas id="kt_chart_sales_by_apps_2_1" style="display: block; width: 0px; height: 0px;" height="0" width="0"></canvas>
																			</div>
																		</td>
																		<td><span class="kt-badge kt-badge--danger kt-badge--inline">in process</span></td>
																		<td class="kt-align-right kt-font-brand">$34,740</td>
																	</tr>
																	<tr>
																		<td>
																			<label class="kt-checkbox kt-checkbox--single"><input type="checkbox"><span></span></label>
																		</td>
																		<td>
																			<span class="kt-widget11__title">Selto</span>
																			<span class="kt-widget11__sub">Powerful Website Builder</span>
																		</td>
																		<td>24,310</td>
																		<td>
																			<div class="kt-widget11__chart" style="height:50px; width: 100px">
																				<canvas id="kt_chart_sales_by_apps_2_2" style="display: block; width: 0px; height: 0px;" height="0" width="0"></canvas>
																			</div>
																		</td>
																		<td><span class="kt-badge kt-badge--success kt-badge--inline">new</span></td>
																		<td class="kt-align-right kt-font-brand">$46,010</td>
																	</tr>
																	<tr>
																		<td>
																			<label class="kt-checkbox kt-checkbox--single"><input type="checkbox"><span></span></label>
																		</td>
																		<td>
																			<span class="kt-widget11__title">Jippo</span>
																			<span class="kt-widget11__sub">The Best Selling App</span>
																		</td>
																		<td>9,076</td>
																		<td>
																			<div class="kt-widget11__chart" style="height:50px; width: 100px">
																				<canvas id="kt_chart_sales_by_apps_2_3" style="display: block; width: 0px; height: 0px;" height="0" width="0"></canvas>
																			</div>
																		</td>
																		<td><span class="kt-badge kt-badge--brand kt-badge--inline">approved</span></td>
																		<td class="kt-align-right kt-font-brand">$67,800</td>
																	</tr>
																	<tr>
																		<td>
																			<label class="kt-checkbox kt-checkbox--single"><input type="checkbox"><span></span></label>
																		</td>
																		<td>
																			<span class="kt-widget11__title">Verto</span>
																			<span class="kt-widget11__sub">Web Development Tool</span>
																		</td>
																		<td>11,094</td>
																		<td>
																			<div class="kt-widget11__chart" style="height:50px; width: 100px">
																				<canvas id="kt_chart_sales_by_apps_2_4" style="display: block; width: 0px; height: 0px;" height="0" width="0"></canvas>
																			</div>
																		</td>
																		<td><span class="kt-badge kt-badge--danger kt-badge--inline">pending</span></td>
																		<td class="kt-align-right kt-font-brand">$18,520</td>
																	</tr>
																</tbody>
															</table>
														</div>
														<div class="kt-widget11__action kt-align-right">
															<button type="button" class="btn btn-outline-brand btn-bold">View All Records</button>
														</div>
													</div>

													<!--end::Widget 11-->
												</div>
											</div>
										</div>
									</div>

									<!--end:: Widgets/Application Sales-->
								</div>
								<div class="col-xl-6">

									<!--begin:: Widgets/Latest Updates-->
									<div class="kt-portlet kt-portlet--height-fluid ">
										<div class="kt-portlet__head">
											<div class="kt-portlet__head-label">
												<h3 class="kt-portlet__head-title">
													Latest Updates
												</h3>
											</div>
											<div class="kt-portlet__head-toolbar">
												<a href="#" class="btn btn-label-brand btn-bold btn-sm dropdown-toggle" data-toggle="dropdown">
													Today
												</a>
												<div class="dropdown-menu dropdown-menu-right dropdown-menu-fit dropdown-menu-md">

													<!--begin::Nav-->
													<ul class="kt-nav">
														<li class="kt-nav__head">
															Export Options
															<i class="flaticon2-information" data-toggle="kt-tooltip" data-placement="right" title="Click to learn more..."></i>
														</li>
														<li class="kt-nav__separator"></li>
														<li class="kt-nav__item">
															<a href="#" class="kt-nav__link">
																<i class="kt-nav__link-icon flaticon2-drop"></i>
																<span class="kt-nav__link-text">Activity</span>
															</a>
														</li>
														<li class="kt-nav__item">
															<a href="#" class="kt-nav__link">
																<i class="kt-nav__link-icon flaticon2-calendar-8"></i>
																<span class="kt-nav__link-text">FAQ</span>
															</a>
														</li>
														<li class="kt-nav__item">
															<a href="#" class="kt-nav__link">
																<i class="kt-nav__link-icon flaticon2-link"></i>
																<span class="kt-nav__link-text">Settings</span>
															</a>
														</li>
														<li class="kt-nav__item">
															<a href="#" class="kt-nav__link">
																<i class="kt-nav__link-icon flaticon2-new-email"></i>
																<span class="kt-nav__link-text">Support</span>
																<span class="kt-nav__link-badge">
																	<span class="kt-badge kt-badge--success">5</span>
																</span>
															</a>
														</li>
														<li class="kt-nav__separator"></li>
														<li class="kt-nav__foot">
															<a class="btn btn-label-danger btn-bold btn-sm" href="#">Upgrade plan</a>
															<a class="btn btn-clean btn-bold btn-sm" href="#" data-toggle="kt-tooltip" data-placement="right" title="Click to learn more...">Learn more</a>
														</li>
													</ul>

													<!--end::Nav-->
												</div>
											</div>
										</div>

										<!--full height portlet body-->
										<div class="kt-portlet__body kt-portlet__body--fluid kt-portlet__body--fit">
											<div class="kt-widget4 kt-widget4--sticky">
												<div class="kt-widget4__items kt-portlet__space-x kt-margin-t-15">
													<div class="kt-widget4__item">
														<span class="kt-widget4__icon">
															<i class="flaticon2-graphic  kt-font-brand"></i>
														</span>
														<a href="#" class="kt-widget4__title">
															Metronic Admin Theme
														</a>
														<span class="kt-widget4__number kt-font-brand">+500</span>
													</div>
													<div class="kt-widget4__item">
														<span class="kt-widget4__icon">
															<i class="flaticon2-analytics-2  kt-font-success"></i>
														</span>
														<a href="#" class="kt-widget4__title">
															Green Maker Team
														</a>
														<span class="kt-widget4__number kt-font-success">-64</span>
													</div>
													<div class="kt-widget4__item">
														<span class="kt-widget4__icon">
															<i class="flaticon2-drop  kt-font-danger"></i>
														</span>
														<a href="#" class="kt-widget4__title">
															Make Apex Great Again
														</a>
														<span class="kt-widget4__number kt-font-danger">+1080</span>
													</div>
													<div class="kt-widget4__item">
														<span class="kt-widget4__icon">
															<i class="flaticon2-pie-chart-4 kt-font-warning"></i>
														</span>
														<a href="#" class="kt-widget4__title">
															A Programming Language
														</a>
														<span class="kt-widget4__number kt-font-warning">+19</span>
													</div>
												</div>
												<div class="kt-widget4__chart kt-margin-t-15">
													<canvas id="kt_chart_latest_updates" style="height: 150px;"></canvas>
												</div>
											</div>
										</div>
									</div>

									<!--end:: Widgets/Latest Updates-->
								</div>
							</div>

							<!--End::Section-->

							<!--End::Dashboard 4-->
						</div>
						<!-- end:: Content -->
					</div>

					<!-- begin:: Footer -->
                    @yield('footer', View::make('components.footer'))
					<!-- end:: Footer -->
				</div>
			</div>
		</div>

		<!-- end:: Page -->

		<!-- begin::Quick Panel -->
		<!-- end::Quick Panel -->

		<!-- begin::Scrolltop -->
		<div id="kt_scrolltop" class="kt-scrolltop">
			<i class="fa fa-arrow-up"></i>
		</div>
		<!-- end::Scrolltop -->

		<!-- begin::Sticky Toolbar -->
		<ul class="kt-sticky-toolbar" style="margin-top: 30px;">
			<li class="kt-sticky-toolbar__item kt-sticky-toolbar__item--success" id="kt_demo_panel_toggle" data-toggle="kt-tooltip" title="Check out more demos" data-placement="right">
				<a href="#" class=""><i class="flaticon2-drop"></i></a>
			</li>
			<li class="kt-sticky-toolbar__item kt-sticky-toolbar__item--brand" data-toggle="kt-tooltip" title="Layout Builder" data-placement="left">
				<a href="https://keenthemes.com/metronic/preview/demo1/builder.html" target="_blank"><i class="flaticon2-gear"></i></a>
			</li>
			<li class="kt-sticky-toolbar__item kt-sticky-toolbar__item--warning" data-toggle="kt-tooltip" title="Documentation" data-placement="left">
				<a href="https://keenthemes.com/metronic/?page=docs" target="_blank"><i class="flaticon2-telegram-logo"></i></a>
			</li>
			<li class="kt-sticky-toolbar__item kt-sticky-toolbar__item--danger" id="kt_sticky_toolbar_chat_toggler" data-toggle="kt-tooltip" title="Chat Example" data-placement="left">
				<a href="#" data-toggle="modal" data-target="#kt_chat_modal"><i class="flaticon2-chat-1"></i></a>
			</li>
		</ul>
		<!-- end::Sticky Toolbar -->

		<!-- begin::Demo Panel -->
		<!-- end::Demo Panel -->

		<!--Begin:: Chat-->
		<div class="modal fade- modal-sticky-bottom-right" id="kt_chat_modal" role="dialog" data-backdrop="false">
			<div class="modal-dialog" role="document">
				<div class="modal-content">
					<div class="kt-chat">
						<div class="kt-portlet kt-portlet--last">
							<div class="kt-portlet__head">
								<div class="kt-chat__head ">
									<div class="kt-chat__left">
										<div class="kt-chat__label">
											<a href="#" class="kt-chat__title">Jason Muller</a>
											<span class="kt-chat__status">
												<span class="kt-badge kt-badge--dot kt-badge--success"></span> Active
											</span>
										</div>
									</div>
									<div class="kt-chat__right">
										<div class="dropdown dropdown-inline">
											<button type="button" class="btn btn-clean btn-sm btn-icon btn-icon-md" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
												<i class="flaticon-more-1"></i>
											</button>
											<div class="dropdown-menu dropdown-menu-fit dropdown-menu-right dropdown-menu-md">

												<!--begin::Nav-->
												<ul class="kt-nav">
													<li class="kt-nav__head">
														Messaging
														<i class="flaticon2-information" data-toggle="kt-tooltip" data-placement="right" title="Click to learn more..."></i>
													</li>
													<li class="kt-nav__separator"></li>
													<li class="kt-nav__item">
														<a href="#" class="kt-nav__link">
															<i class="kt-nav__link-icon flaticon2-group"></i>
															<span class="kt-nav__link-text">New Group</span>
														</a>
													</li>
													<li class="kt-nav__item">
														<a href="#" class="kt-nav__link">
															<i class="kt-nav__link-icon flaticon2-open-text-book"></i>
															<span class="kt-nav__link-text">Contacts</span>
															<span class="kt-nav__link-badge">
																<span class="kt-badge kt-badge--brand  kt-badge--rounded-">5</span>
															</span>
														</a>
													</li>
													<li class="kt-nav__item">
														<a href="#" class="kt-nav__link">
															<i class="kt-nav__link-icon flaticon2-bell-2"></i>
															<span class="kt-nav__link-text">Calls</span>
														</a>
													</li>
													<li class="kt-nav__item">
														<a href="#" class="kt-nav__link">
															<i class="kt-nav__link-icon flaticon2-dashboard"></i>
															<span class="kt-nav__link-text">Settings</span>
														</a>
													</li>
													<li class="kt-nav__item">
														<a href="#" class="kt-nav__link">
															<i class="kt-nav__link-icon flaticon2-protected"></i>
															<span class="kt-nav__link-text">Help</span>
														</a>
													</li>
													<li class="kt-nav__separator"></li>
													<li class="kt-nav__foot">
														<a class="btn btn-label-brand btn-bold btn-sm" href="#">Upgrade plan</a>
														<a class="btn btn-clean btn-bold btn-sm" href="#" data-toggle="kt-tooltip" data-placement="right" title="Click to learn more...">Learn more</a>
													</li>
												</ul>

												<!--end::Nav-->
											</div>
										</div>
										<button type="button" class="btn btn-clean btn-sm btn-icon" data-dismiss="modal">
											<i class="flaticon2-cross"></i>
										</button>
									</div>
								</div>
							</div>
							<div class="kt-portlet__body">
								<div class="kt-scroll kt-scroll--pull" data-height="410" data-mobile-height="300">
									<div class="kt-chat__messages kt-chat__messages kt-chat__messages--modal">
										<div class="kt-chat__message kt-bg-light-success">
											<div class="kt-chat__user">
												<span class="kt-userpic kt-userpic--circle kt-userpic--sm">
													<img src="./assets/media/users/100_12.jpg" alt="image">
												</span>
												<a href="#" class="kt-chat__username">Jason Muller</span></a>
												<span class="kt-chat__datetime">2 Hours</span>
											</div>
											<div class="kt-chat__text">
												How likely are you to recommend our company<br> to your friends and family?
											</div>
										</div>
										<div class="kt-chat__message kt-chat__message--right kt-bg-light-brand">
											<div class="kt-chat__user">
												<span class="kt-chat__datetime">30 Seconds</span>
												<a href="#" class="kt-chat__username">You</span></a>
												<span class="kt-userpic kt-userpic--circle kt-userpic--sm">
													<img src="./assets/media/users/300_21.jpg" alt="image">
												</span>
											</div>
											<div class="kt-chat__text">
												Hey there, we’re just writing to let you know that you’ve<br> been subscribed to a repository on GitHub.
											</div>
										</div>
										<div class="kt-chat__message kt-bg-light-success">
											<div class="kt-chat__user">
												<span class="kt-userpic kt-userpic--circle kt-userpic--sm">
													<img src="./assets/media/users/100_12.jpg" alt="image">
												</span>
												<a href="#" class="kt-chat__username">Jason Muller</span></a>
												<span class="kt-chat__datetime">30 Seconds</span>
											</div>
											<div class="kt-chat__text">
												Ok, Understood!
											</div>
										</div>
										<div class="kt-chat__message kt-chat__message--right kt-bg-light-brand">
											<div class="kt-chat__user">
												<span class="kt-chat__datetime">Just Now</span>
												<a href="#" class="kt-chat__username">You</span></a>
												<span class="kt-userpic kt-userpic--circle kt-userpic--sm">
													<img src="./assets/media/users/300_21.jpg" alt="image">
												</span>
											</div>
											<div class="kt-chat__text">
												You’ll receive notifications for all issues, pull requests!
											</div>
										</div>
										<div class="kt-chat__message kt-bg-light-success">
											<div class="kt-chat__user">
												<span class="kt-userpic kt-userpic--circle kt-userpic--sm">
													<img src="./assets/media/users/100_12.jpg" alt="image">
												</span>
												<a href="#" class="kt-chat__username">Jason Muller</span></a>
												<span class="kt-chat__datetime">2 Hours</span>
											</div>
											<div class="kt-chat__text">
												You were automatically <b class="kt-font-brand">subscribed</b> <br>because you’ve been given access to the repository
											</div>
										</div>
										<div class="kt-chat__message kt-chat__message--right kt-bg-light-brand">
											<div class="kt-chat__user">
												<span class="kt-chat__datetime">30 Seconds</span>
												<a href="#" class="kt-chat__username">You</span></a>
												<span class="kt-userpic kt-userpic--circle kt-userpic--sm">
													<img src="./assets/media/users/300_21.jpg" alt="image">
												</span>
											</div>
											<div class="kt-chat__text">
												You can unwatch this repository immediately <br>by clicking here: <a href="#" class="kt-font-bold kt-link"></a>
											</div>
										</div>
										<div class="kt-chat__message kt-bg-light-success">
											<div class="kt-chat__user">
												<span class="kt-userpic kt-userpic--circle kt-userpic--sm">
													<img src="./assets/media/users/100_12.jpg" alt="image">
												</span>
												<a href="#" class="kt-chat__username">Jason Muller</span></a>
												<span class="kt-chat__datetime">30 Seconds</span>
											</div>
											<div class="kt-chat__text">
												Discover what students who viewed Learn <br>Figma - UI/UX Design Essential Training also viewed
											</div>
										</div>
										<div class="kt-chat__message kt-chat__message--right kt-bg-light-brand">
											<div class="kt-chat__user">
												<span class="kt-chat__datetime">Just Now</span>
												<a href="#" class="kt-chat__username">You</span></a>
												<span class="kt-userpic kt-userpic--circle kt-userpic--sm">
													<img src="./assets/media/users/300_21.jpg" alt="image">
												</span>
											</div>
											<div class="kt-chat__text">
												Most purchased Business courses during this sale!
											</div>
										</div>
									</div>
								</div>
							</div>
							<div class="kt-portlet__foot">
								<div class="kt-chat__input">
									<div class="kt-chat__editor">
										<textarea placeholder="Type here..." style="height: 50px"></textarea>
									</div>
									<div class="kt-chat__toolbar">
										<div class="kt_chat__tools">
											<a href="#"><i class="flaticon2-link"></i></a>
											<a href="#"><i class="flaticon2-photograph"></i></a>
											<a href="#"><i class="flaticon2-photo-camera"></i></a>
										</div>
										<div class="kt_chat__actions">
											<button type="button" class="btn btn-brand btn-md  btn-font-sm btn-upper btn-bold kt-chat__reply">reply</button>
										</div>
									</div>
								</div>
							</div>
						</div>
					</div>
				</div>
			</div>
		</div>
		<!--ENd:: Chat-->
        <!--Begin:: app.js-->
        <script src="{{mix('js/app.js')}}"></script>
        <!--End:: app.js-->
		<script>
		</script>
        @yield('extend_js')

	</body>

	<!-- end::Body -->
</html>