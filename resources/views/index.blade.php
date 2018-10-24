@extends('layouts.app')

@section('content')
    <div id="content" class="pmd-content content-area dashboard">

        <div class="container-fluid">
            <div class="row" id="card-masonry">

                <!-- Today's Site Activity -->
                <div class="col-lg-9 col-md-9 col-sm-12 col-xs-12">
                    <div class="pmd-card pmd-z-depth">
                        <div class="pmd-card-title">
                            <div class="media-left">
						<span class="service-icon img-circle bg-fill-orange">
							<svg x="0px" y="0px" width="45px" height="45px" viewBox="0 0 45 45" enable-background="new 0 0 45 45" xml:space="preserve">
								<g>
									<g>
										<path fill="#FFFFFF" d="M41.097,22.499c0,4.377-1.516,8.396-4.045,11.573l2.777,2.778C43.059,32.955,45,27.954,45,22.499
											s-1.941-10.455-5.171-14.35l-2.777,2.777C39.581,14.104,41.097,18.123,41.097,22.499z"></path>
										<path fill="#FFFFFF" d="M3.904,22.499c0-4.376,1.516-8.396,4.045-11.572L5.172,8.149C1.942,12.044,0,17.044,0,22.499
											s1.942,10.456,5.171,14.352l2.778-2.778C5.419,30.896,3.904,26.876,3.904,22.499z"></path>
										<path fill="#FFFFFF" d="M34.073,37.051c-3.177,2.529-7.196,4.045-11.573,4.045c-4.376,0-8.396-1.516-11.573-4.045l-2.777,2.777
											C12.044,43.058,17.045,45,22.5,45s10.456-1.942,14.352-5.172L34.073,37.051z"></path>
										<path fill="#FFFFFF" d="M10.928,7.948c3.176-2.529,7.196-4.045,11.572-4.045c4.377,0,8.396,1.516,11.573,4.046l2.778-2.778
											C32.956,1.941,27.955,0,22.5,0C17.046,0,12.045,1.941,8.149,5.171L10.928,7.948z"></path>
									</g>
									<g>
										<path fill="#FFFFFF" d="M34.452,19.893c-1.131,0-2.119,0.751-2.401,1.785h-2.352c-0.142-1.41-0.66-2.679-1.506-3.712l1.74-1.738
											c0.939,0.425,2.071,0.281,2.823-0.517c0.99-0.987,0.99-2.584,0-3.569c-0.988-0.987-2.588-0.987-3.576,0
											c-0.752,0.75-0.938,1.878-0.519,2.818l-1.222,1.41l-0.425,0.422c-0.988-0.8-2.211-1.315-3.574-1.456v-2.444
											c0.94-0.374,1.646-1.269,1.646-2.348c0-1.41-1.128-2.536-2.542-2.536c-1.411,0-2.54,1.126-2.54,2.536
											c0,1.079,0.706,2.02,1.647,2.348v2.444c-1.317,0.141-2.54,0.705-3.577,1.456l-1.74-1.738c0.142-0.33,0.235-0.658,0.235-1.034
											c0-1.407-1.129-2.535-2.541-2.535s-2.54,1.128-2.54,2.535c0,1.41,1.128,2.539,2.54,2.539c0.376,0,0.752-0.096,1.034-0.236
											l1.74,1.737c-0.799,1.032-1.362,2.3-1.505,3.712h-2.398c-0.376-0.938-1.271-1.643-2.354-1.643c-1.41,0-2.539,1.124-2.539,2.535
											c0,1.408,1.129,2.537,2.539,2.537c1.083,0,2.024-0.706,2.354-1.646h2.446c0.188,1.268,0.706,2.443,1.457,3.429l-1.74,1.739
											c-0.328-0.14-0.658-0.235-1.034-0.235c-1.412,0-2.54,1.129-2.54,2.536c0,1.409,1.128,2.538,2.54,2.538s2.541-1.129,2.541-2.538
											c0-0.374-0.094-0.75-0.235-1.033l1.74-1.739c0.987,0.801,2.211,1.317,3.577,1.46v0.655v1.739
											c-0.941,0.375-1.647,1.269-1.647,2.346c0,1.413,1.129,2.54,2.54,2.54c1.414,0,2.542-1.127,2.542-2.54
											c0-1.077-0.706-2.019-1.646-2.346v-1.739v-0.655c1.318-0.143,2.539-0.706,3.574-1.46l1.742,1.739
											c-0.141,0.33-0.236,0.659-0.236,1.033c0,1.409,1.13,2.538,2.542,2.538c1.318-0.14,2.446-1.268,2.446-2.633
											c0-1.408-1.128-2.535-2.541-2.535c-0.376,0-0.752,0.094-1.035,0.235l-1.74-1.738c0.752-0.985,1.271-2.162,1.458-3.429h2.493
											c0.377,0.892,1.271,1.502,2.308,1.502c1.41,0,2.541-1.127,2.541-2.536C36.993,21.021,35.862,19.893,34.452,19.893z M22.499,26.933
											c-2.452,0-4.44-1.984-4.44-4.433c0-0.474,0.076-0.926,0.214-1.354c0.558-1.793,2.235-3.082,4.188-3.082
											c0.151,0,0.3,0.005,0.447,0.021c2.262,0.208,4.033,2.105,4.033,4.415C26.941,24.948,24.951,26.933,22.499,26.933z"></path>
									</g>
								</g>
							</svg>
						</span>
                            </div>
                            <div class="media-body media-middle">
                                <h2 class="pmd-card-title-text typo-fill-secondary">Recent Activities<span class="grow-up"><img src="{{asset('themes/images/grow-up-arrow')}}png" alt="grow-up"></span></h2>
                            </div>
                            <div class="media-right datetimepicker">
                                <!--calendar start-->
                                <div class="range-calendar" style=" height:40px;">
                                    <div class="form-group pmd-textfield">
                                        <div class="input-group">
                                            <input id="datepicker-default" type="text" class="form-control datepicker" placeholder="Choose date"><span class="pmd-textfield-focused"></span>
                                            <div class="input-group-addon hidden-xs">
                                                <svg x="0px" y="0px" width="24px" height="24px" viewBox="0 0 24 24" enable-background="new 0 0 24 24" xml:space="preserve">
											<g>
                                                <path fill="#010101" d="M-8.736-20.232c0,2.88-2.304,5.184-5.184,5.184s-5.184-2.304-5.184-5.184v-13.824
											c0-2.88,2.304-5.184,5.184-5.184s5.184,2.304,5.184,5.184V-20.232z M41.952-34.056c0-2.88-2.304-5.184-5.185-5.184
											c-2.879,0-5.184,2.304-5.184,5.184v13.824c0,2.88,2.305,5.184,5.184,5.184c2.881,0,5.185-2.304,5.185-5.184V-34.056z M63.84-20.923
											V58.68c0,3.111-2.534,5.645-5.76,5.645h-92.16c-3.226,0-5.76-2.533-5.76-5.645v-79.603c0-3.11,2.534-5.645,5.76-5.645h11.52v6.336
											c0,4.954,3.687,8.87,8.64,8.87s8.64-4.032,8.64-8.87v-6.336h33.408v6.336c0,4.954,3.687,8.87,8.64,8.87
											c4.954,0,8.641-4.032,8.641-8.87v-6.336h12.557C61.075-26.568,63.84-24.034,63.84-20.923z M54.624-5.192
											c0-1.152-1.036-2.189-2.304-2.189h-80.64c-1.268,0-2.304,0.921-2.304,2.189v58.227c0,1.152,1.037,2.189,2.304,2.189h80.64
											c1.268,0,2.304-0.922,2.304-2.189V-5.192z"></path>
                                            </g>
                                                    <g>
                                                        <path fill="#A5A4A4" d="M7.2,4.414C7.2,5.08,6.667,5.613,6,5.613S4.8,5.08,4.8,4.414v-3.2c0-0.667,0.534-1.2,1.2-1.2
											s1.2,0.533,1.2,1.2V4.414z M18.934,1.214c0-0.667-0.533-1.2-1.2-1.2s-1.2,0.533-1.2,1.2v3.2c0,0.666,0.533,1.199,1.2,1.199
											s1.2-0.533,1.2-1.199V1.214z M24,4.254V22.68c0,0.721-0.587,1.307-1.333,1.307H1.333C0.586,23.986,0,23.4,0,22.68V4.254
											c0-0.721,0.586-1.307,1.333-1.307H4v1.467c0,1.146,0.854,2.053,2,2.053s2-0.934,2-2.053V2.947h7.733v1.467
											c0,1.146,0.854,2.053,2,2.053s2-0.934,2-2.053V2.947h2.906C23.36,2.947,24,3.533,24,4.254z M21.867,7.896
											c0-0.268-0.24-0.507-0.534-0.507H2.667c-0.293,0-0.533,0.213-0.533,0.507v13.478c0,0.268,0.24,0.507,0.533,0.507h18.667
											c0.294,0,0.534-0.213,0.534-0.507V7.896z"></path>
                                                    </g>
										</svg>
                                            </div>
                                        </div>
                                    </div>
                                    <span class="selected-date typo-fill-secondary"></span>
                                </div><!-- calendar end-->
                            </div>
                        </div>
                        <div class="pmd-card-body">
                            <div class="total-sales">
                                <!--circle chart-->
                                <div class="chart circle-chart border-right pull-left">
                                    <div class="circle">
                                        <div id="circles-1"><div class="circles-wrp" style="position: relative; display: inline-block;"><svg xmlns="http://www.w3.org/2000/svg" width="100" height="100"><path fill="transparent" stroke="#dfe3e7" stroke-width="7" d="M 49.99052919602818 3.500000964474502 A 46.5 46.5 0 1 1 49.93541243287967 3.5000448554391212 Z" class="circles-maxValueStroke"></path><path fill="transparent" stroke="#f79332" stroke-width="7" d="M 49.99052919602818 3.500000964474502 A 46.5 46.5 0 0 1 92.05112512242934 30.151753832194853 " class="circles-valueStroke"></path></svg><div class="circles-text" style="position: absolute; top: 0px; left: 0px; text-align: center; width: 100%; font-size: 35px; height: 100px; line-height: 100px;"><span class="circles-integer">18</span></div></div></div>
                                        <div class="source-semibold text-center chart-title">Users</div>
                                    </div>
                                    <div class="circle">
                                        <div id="circles-2"><div class="circles-wrp" style="position: relative; display: inline-block;"><svg xmlns="http://www.w3.org/2000/svg" width="100" height="100"><path fill="transparent" stroke="#dfe3e7" stroke-width="7" d="M 49.99052919602818 3.500000964474502 A 46.5 46.5 0 1 1 49.93541243287967 3.5000448554391212 Z" class="circles-maxValueStroke"></path><path fill="transparent" stroke="#f79332" stroke-width="7" d="M 49.99052919602818 3.500000964474502 A 46.5 46.5 0 0 1 96.4106556254829 52.88115331296898 " class="circles-valueStroke"></path></svg><div class="circles-text" style="position: absolute; top: 0px; left: 0px; text-align: center; width: 100%; font-size: 35px; height: 100px; line-height: 100px;"><span class="circles-integer">26</span></div></div></div>
                                        <div class="source-semibold text-center chart-title">Pageviews</div>
                                    </div>
                                    <div class="circle">
                                        <div id="circles-3"><div class="circles-wrp" style="position: relative; display: inline-block;"><svg xmlns="http://www.w3.org/2000/svg" width="100" height="100"><path fill="transparent" stroke="#dfe3e7" stroke-width="7" d="M 49.99052919602818 3.500000964474502 A 46.5 46.5 0 1 1 49.93541243287967 3.5000448554391212 Z" class="circles-maxValueStroke"></path><path fill="transparent" stroke="#f79332" stroke-width="7" d="M 49.99052919602818 3.500000964474502 A 46.5 46.5 0 0 1 89.29824711429765 74.85754963272922 " class="circles-valueStroke"></path></svg><div class="circles-text" style="position: absolute; top: 0px; left: 0px; text-align: center; width: 100%; font-size: 35px; height: 100px; line-height: 100px;"><span class="circles-integer">34</span></div></div></div>
                                        <div class="source-semibold text-center chart-title">Vistiors</div>
                                    </div>
                                </div>
                                <!--circle chart end-->

                                <!-- chart start-->
                                <div class="chart total-revenue pull-left">
                                    <table align="center">
                                        <!-- progressbar-->
                                        <tbody><tr>
                                            <td class="media-left">Users</td>
                                            <td class="media-body">
                                                <div class="progress cash-progressbar">
                                                    <div class="progress-bar" style="width: 12px;"></div>
                                                </div>
                                            </td>
                                            <td class="media-right">214</td>
                                        </tr>
                                        <tr>
                                            <td class="media-left">Pageviews</td>
                                            <td class="media-body">
                                                <div class="progress card-progressbar">
                                                    <div class="progress-bar" style="width: 7.2px;"></div>
                                                </div>
                                            </td>
                                            <td class="media-right">756</td>
                                        </tr>
                                        <tr>
                                            <td class="media-left">Bounce Rates</td>
                                            <td class="media-body">
                                                <div class="progress wallet-progressbar">
                                                    <div class="progress-bar" style="width: 14.4px;"></div>
                                                </div>
                                            </td>
                                            <td class="media-right">291</td>
                                        </tr>
                                        <tr>
                                            <td class="media-left">Visits</td>
                                            <td class="media-body">
                                                <div class="progress credit-progressbar">
                                                    <div class="progress-bar" style="width: 9.6px;"></div>
                                                </div>
                                            </td>
                                            <td class="media-right">32,301</td>
                                        </tr>
                                        <tr>
                                            <td class="media-left">Pages</td>
                                            <td class="media-body">
                                                <div class="progress other-progressbar">
                                                    <div class="progress-bar" style="width: 2.4px;"></div>
                                                </div>
                                            </td>
                                            <td class="media-right">132</td>
                                        </tr>
                                        </tbody></table>
                                </div>
                                <!--total cash chart end-->
                            </div>
                        </div>
                        <span class="btn-loader loader hidden">Loading...</span>
                    </div>
                </div> <!--end Today's Site Activity -->

                <!-- Propeller Marketplace-->
                <div class="col-xs-12 col-sm-12 col-md-3 col-lg-3">
                    <div class="pmd-card pmd-z-depth advertising-info">
                        <div class="pmd-card-title">
                            <h1 class="pmd-card-title-text typo-fill-secondary propeller-title">About Propeller</h1>
                        </div>
                        <div class="pmd-card-body">
                            <p>Propeller is a front-end responsive framework based on Google's Material Design Standards &amp; Bootstrap.</p>
                            <p class="services-active">
                                <span class="pmd-display2 media-middle activated-service">25</span>
                                <span class="typo-fill-secondary source-semibold media-middle">Components Available</span>
                            </p>
                            <a href="https://propeller.in/get-started/" type="button" class="btn pmd-ripple-effect btn-services bg-fill-primary-color" title="get-started">Get Started</a>
                        </div>
                        <span class="btn-loader loader hidden">Loading...</span>
                    </div>
                </div><!-- end Propeller Marketplace -->

                <!--Statistics-->
                <div class="col-xs-12 col-sm-12 col-md-6">
                    <div class="pmd-card pmd-z-depth statistics-content">
                        <div class="pmd-card-title">
                            <div class="media-left set-svg">
						<span class="service-icon img-circle bg-fill-green">
							<svg version="1.1" id="Layer_1" x="0px" y="0px" width="36px" height="26.25px" viewBox="279.765 332.782 36 26.25" enable-background="new 279.765 332.782 36 26.25" xml:space="preserve">
								<g>
									<path fill="#FFFFFF" d="M312.318,332.782c-1.928,0-3.485,1.558-3.485,3.485c0,0.89,0.334,1.706,0.89,2.336l-6.117,8.898
										c-0.371-0.112-0.742-0.186-1.148-0.186c-0.557,0-1.077,0.111-1.521,0.334l-4.82-4.932c0.296-0.519,0.445-1.075,0.445-1.706
										c0-1.927-1.557-3.485-3.485-3.485c-1.928,0-3.485,1.558-3.485,3.485c0,0.853,0.296,1.595,0.779,2.225l-6.155,8.972
										c-0.296-0.074-0.63-0.148-0.964-0.148c-1.928,0-3.485,1.558-3.485,3.486c0,1.927,1.557,3.485,3.485,3.485
										c1.928,0,3.485-1.558,3.485-3.485c0-0.89-0.333-1.706-0.889-2.336l6.118-8.935c0.333,0.111,0.742,0.185,1.112,0.185
										c0.593,0,1.187-0.148,1.669-0.445l4.782,4.931c-0.334,0.556-0.556,1.187-0.556,1.854c0,1.927,1.556,3.485,3.485,3.485
										c1.927,0,3.484-1.558,3.484-3.485c0-0.816-0.297-1.595-0.78-2.188l6.155-9.009c0.296,0.074,0.63,0.148,0.964,0.148
										c1.93,0,3.485-1.558,3.485-3.486C315.765,334.339,314.244,332.782,312.318,332.782z"></path>
								</g>
							</svg>
						</span>
                            </div>
                            <div class="media-body media-middle">
                                <h2 class="pmd-card-title-text typo-fill-secondary">Statistics</h2>
                            </div>
                        </div>
                        <div class="pmd-card-body statistics text-center">
                            <ul class="list-group list-inline">
                                <li>
                                    <div class="statistic-img-circle">
                                        <svg version="1.1" id="Layer_1" x="0px" y="0px" width="30px" height="30px" viewBox="281.64 330.535 32 32" enable-background="new 281.64 330.535 32 32" xml:space="preserve">
									<g>
                                        <polygon fill="#40AC45" points="296.29,330.535 296.29,353.696 288.187,345.594 286.182,347.599 297.762,359.18 309.139,347.599
											307.093,345.594 299.154,353.655 299.154,330.535 	"></polygon>
                                        <polygon fill="#40AC45" points="313.64,354.72 310.776,354.72 310.776,359.589 284.504,359.589 284.504,354.72 281.64,354.72
											281.64,362.454 313.64,362.454 	"></polygon>
                                    </g>
								</svg>
                                    </div>
                                    <div class="pmd-display2">+1100</div>
                                    <div class="source-semibold typo-fill-secondary">Downloads</div>
                                </li>
                                <li>
                                    <div class="statistic-img-circle">
                                        <svg version="1.1" id="Layer_1" xmlns="http://www.w3.org/2000/svg" x="0px" y="0px" width="34px" height="17.711px" viewBox="280.699 426.316 34 17.711" enable-background="new 280.699 426.316 34 17.711" xml:space="preserve">
									<g>
                                        <path fill="#40AC45" d="M297.696,444.027c-9.155,0-16.394-7.752-16.698-8.085c-0.397-0.434-0.397-1.106,0-1.54
											c0.304-0.333,7.543-8.086,16.698-8.086c9.156,0,16.402,7.753,16.706,8.086c0.397,0.434,0.397,1.106,0,1.54
											C314.09,436.275,306.852,444.027,297.696,444.027z M283.449,435.169c2.018,1.887,7.702,6.588,14.247,6.588
											c6.559,0,12.236-4.693,14.247-6.581c-2.018-1.888-7.702-6.581-14.247-6.581C291.137,428.588,285.46,433.281,283.449,435.169z"></path>
                                        <path fill="#40AC45" d="M297.696,440.368c-2.864,0-5.2-2.336-5.2-5.199c0-2.864,2.336-5.2,5.2-5.2c0.629,0,1.135,0.506,1.135,1.136
											c0,0.629-0.506,1.135-1.135,1.135c-1.613,0-2.929,1.316-2.929,2.93c0,1.612,1.316,2.929,2.929,2.929s2.929-1.31,2.929-2.929
											c0-0.63,0.506-1.136,1.135-1.136c0.63,0,1.136,0.506,1.136,1.136C302.896,438.039,300.56,440.368,297.696,440.368z"></path>
                                        <circle fill="#40AC45" cx="297.696" cy="435.024" r="1.685"></circle>
                                    </g>
								</svg>
                                    </div>
                                    <div class="pmd-display2">+930</div>
                                    <div class="source-semibold typo-fill-secondary">Visits</div>
                                </li>
                                <li>
                                    <div class="statistic-img-circle">
                                        <svg version="1.1" id="Layer_1" xmlns="http://www.w3.org/2000/svg" x="0px" y="0px" width="32px" height="28.541px" viewBox="281.64 332.265 32 28.541" enable-background="new 281.64 332.265 32 28.541" xml:space="preserve">
									<g transform="translate(0,-952.36218)">
                                        <path fill="#40AC45" d="M297.64,1284.627c-4.044,0-7.352,3.307-7.352,7.351c0,4.045,3.307,7.352,7.352,7.352
											c4.045,0,7.352-3.307,7.352-7.352C304.991,1287.934,301.685,1284.627,297.64,1284.627z M297.64,1287.222
											c2.643,0,4.757,2.114,4.757,4.757s-2.114,4.757-4.757,4.757s-4.757-2.114-4.757-4.757S294.997,1287.222,297.64,1287.222z
											 M297.64,1300.195c-4.283,0-8.164,1.021-11.067,2.743s-4.933,4.255-4.933,7.203v1.73c0,0.716,0.581,1.297,1.297,1.297h29.406
											c0.716,0,1.297-0.581,1.297-1.297v-1.73c0-2.948-2.028-5.48-4.933-7.203C305.804,1301.215,301.923,1300.195,297.64,1300.195z
											 M297.64,1302.789c3.862,0,7.332,0.948,9.743,2.378c2.411,1.43,3.662,3.235,3.662,4.973v0.433h-26.811v-0.433
											c0-1.737,1.251-3.542,3.662-4.973C290.308,1303.737,293.778,1302.789,297.64,1302.789z"></path>
                                    </g>
								</svg>
                                    </div>
                                    <div class="pmd-display2">570</div>
                                    <div class="source-semibold typo-fill-secondary">New users</div>
                                </li>
                                <li>
                                    <div class="statistic-img-circle">
                                        <svg version="1.1" id="Layer_1" xmlns="http://www.w3.org/2000/svg" x="0px" y="0px" width="32px" height="32px" viewBox="281.64 320.756 32 32" enable-background="new 281.64 320.756 32 32" xml:space="preserve">
									<g transform="matrix( 1, 0, 0, 1, 0,0) ">
                                        <g>
                                            <g id="a">
                                                <path fill="#40AC45" d="M308.947,348.063c3.129-3.117,4.693-6.886,4.693-11.307c0-4.433-1.564-8.208-4.693-11.325
													c-3.117-3.117-6.886-4.675-11.307-4.675c-4.433,0-8.208,1.559-11.324,4.675c-1.387,1.387-2.466,2.904-3.236,4.551
													c-0.307,0.655-0.567,1.331-0.782,2.027c-0.438,1.488-0.658,3.07-0.658,4.747c0,4.42,1.559,8.19,4.676,11.307
													c0.913,0.917,1.879,1.699,2.897,2.347c2.483,1.564,5.292,2.346,8.427,2.346c3.126,0,5.923-0.782,8.391-2.346
													C307.062,349.762,308.033,348.979,308.947,348.063 M297.64,323.103c3.769,0,6.98,1.333,9.636,4c2.666,2.655,4,5.873,4,9.653
													c0,3.769-1.334,6.98-4,9.636c-2.655,2.667-5.867,4-9.636,4c-3.781,0-6.999-1.333-9.653-4c-2.667-2.655-4-5.867-4-9.636
													c0-1.696,0.267-3.278,0.8-4.747c0.257-0.702,0.571-1.377,0.942-2.027c0.605-1.024,1.358-1.984,2.258-2.88
													C290.641,324.437,293.859,323.103,297.64,323.103 M288.698,338.996c0.273,2.868,1.713,5.174,4.32,6.916
													c1.529,0.936,3.069,1.387,4.622,1.351c1.553,0.036,3.088-0.415,4.604-1.351c2.643-1.766,4.089-4.071,4.338-6.916
													c0.023-0.486-0.332-0.64-1.066-0.462l-2.524,0.498c-1.624,0.45-3.408,0.675-5.352,0.675c-1.956,0-3.745-0.226-5.369-0.675
													l-2.507-0.498C289.041,338.356,288.686,338.51,288.698,338.996 M294.724,335.138l0.64,0.925c0.355,0.438,0.533,0.213,0.533-0.676
													c0.012-1.221-0.213-2.228-0.676-3.022c-0.533-0.83-1.114-1.239-1.742-1.227h-0.018c-0.64-0.012-1.227,0.397-1.76,1.227
													c-0.462,0.794-0.688,1.801-0.676,3.022c0,0.889,0.178,1.114,0.533,0.676l0.64-0.925c0.32-0.533,0.741-0.77,1.262-0.71h0.018
													C293.99,334.368,294.405,334.605,294.724,335.138 M300.058,332.365c-0.463,0.794-0.688,1.801-0.676,3.022
													c0,0.889,0.172,1.114,0.516,0.676l0.64-0.925c0.332-0.533,0.753-0.77,1.263-0.71h0.018c0.51-0.06,0.931,0.178,1.263,0.71
													l0.622,0.925c0.355,0.438,0.533,0.213,0.533-0.676c0.012-1.221-0.214-2.228-0.676-3.022c-0.521-0.83-1.103-1.239-1.742-1.227
													H301.8C301.159,331.126,300.579,331.536,300.058,332.365z"></path>
                                            </g>
                                        </g>
                                    </g>
								</svg>
                                    </div>
                                    <div class="pmd-display2">+900</div>
                                    <div class="source-semibold typo-fill-secondary">Happy users</div>
                                </li>
                                <li>
                                    <div class="statistic-img-circle">
                                        <svg version="1.1" id="Layer_1" xmlns="http://www.w3.org/2000/svg" x="0px" y="0px" width="32px" height="28.196px" viewBox="281.64 306.578 32 28.196" enable-background="new 281.64 306.578 32 28.196" xml:space="preserve">
									<g>
                                        <path fill="#40AC45" d="M311.166,317.292c-1.711-0.186-3.422-0.297-5.059-0.409c-1.562-0.111-3.124-0.223-4.761-0.372l1.004-2.009
											l0.037-0.111c0.596-2.12,0.224-4.389-1.004-6.211l-0.483-0.744c-0.372-0.558-1.004-0.893-1.674-0.855
											c-0.669,0.037-1.265,0.409-1.599,1.041c-0.558,1.116-1.265,2.12-2.046,3.013c-0.707,0.818-1.302,1.339-2.008,1.897
											c-0.632,0.558-1.376,1.153-2.231,2.083c-1.004,1.079-1.897,2.306-2.678,3.57l-4.91,0.744c-1.153,0.186-2.008,1.19-2.008,2.343
											l0.111,8.741c0,1.264,1.079,2.306,2.343,2.306h6.844l11.679,2.455c0.446,0.111,0.93,0.148,1.376,0.148
											c2.642,0,5.096-1.525,6.212-4.017c0.595-1.302,1.153-2.715,1.674-4.166c0.706-1.971,1.302-4.017,1.711-6.1
											c0.148-0.781-0.037-1.6-0.483-2.232C312.691,317.776,311.948,317.367,311.166,317.292z M284.386,321.458l1.897-0.298l-0.297,8.555
											h-1.525L284.386,321.458z M309.492,325.847c-0.521,1.376-1.041,2.715-1.6,3.98c-0.78,1.785-2.752,2.79-4.649,2.38l-11.939-2.492
											h-2.678l0.297-8.926l1.414-0.224l0.297-0.558c0.707-1.302,1.6-2.529,2.604-3.645c0.744-0.818,1.339-1.302,2.009-1.86
											c0.707-0.595,1.45-1.19,2.269-2.194c0.67-0.781,1.302-1.637,1.822-2.529c0.67,1.116,0.855,2.455,0.559,3.72l-2.604,5.133
											l1.86,0.223c2.343,0.297,4.575,0.446,6.732,0.595c1.636,0.112,3.31,0.223,4.983,0.409c0.074,0,0.149,0.075,0.187,0.112
											s0.074,0.111,0.037,0.186C310.72,322.091,310.199,324.025,309.492,325.847z"></path>
                                    </g>
								</svg>
                                    </div>
                                    <div class="pmd-display2">10</div>
                                    <div class="source-semibold typo-fill-secondary">Improvements</div>
                                </li>
                                <li>
                                    <div class="statistic-img-circle">
                                        <svg version="1.1" id="Layer_1" xmlns="http://www.w3.org/2000/svg" x="0px" y="0px" width="33.083px" height="33.417px" viewBox="281.057 329.779 33.083 33.417" enable-background="new 281.057 329.779 33.083 33.417" xml:space="preserve">
									<g>
                                        <path fill="#40AC45" stroke="#40AC45" stroke-miterlimit="10" d="M297.411,362.596c-3.613,0-7.03-1.171-9.884-3.387
											c-2.978-2.313-5.058-5.622-5.859-9.318c-0.039-0.179-0.002-0.366,0.101-0.518c0.103-0.152,0.264-0.254,0.445-0.283l4.488-0.739
											c0.344-0.064,0.677,0.163,0.759,0.504c0.548,2.295,1.818,4.269,3.672,5.708c1.81,1.406,3.977,2.149,6.268,2.149
											c2.407,0,4.697-0.822,6.53-2.33l-2.996-2.325c-0.205-0.16-0.3-0.424-0.243-0.678c0.059-0.253,0.258-0.45,0.513-0.505l10.313-2.237
											c0.194-0.041,0.396,0.004,0.551,0.125c0.156,0.122,0.251,0.306,0.259,0.504l0.38,10.411c0.014,0.05,0.019,0.103,0.019,0.157
											c0,0.372-0.316,0.655-0.675,0.669c-0.139-0.002-0.296-0.046-0.418-0.141l-2.974-2.31
											C305.671,360.949,301.607,362.596,297.411,362.596z M283.141,350.292c0.831,3.113,2.662,5.884,5.206,7.86
											c2.617,2.032,5.751,3.106,9.064,3.106c4.035,0,7.938-1.66,10.706-4.557c0.237-0.247,0.623-0.275,0.894-0.066l2.312,1.795
											l-0.305-8.315l-8.132,1.765l2.5,1.94c0.152,0.12,0.247,0.3,0.258,0.494s-0.065,0.383-0.205,0.517
											c-2.168,2.076-5.023,3.22-8.04,3.22c-2.59,0-5.042-0.841-7.087-2.43c-1.904-1.479-3.305-3.539-3.992-5.852L283.141,350.292z"></path>
                                        <path fill="#40AC45" stroke="#40AC45" stroke-miterlimit="10" d="M308.492,346.124c-0.146,0-0.287-0.047-0.404-0.136
											c-0.146-0.112-0.24-0.278-0.26-0.461c-0.303-2.805-1.687-5.295-3.896-7.01c-1.81-1.404-3.976-2.147-6.267-2.147
											c-2.407,0-4.698,0.822-6.53,2.329l2.995,2.326c0.205,0.16,0.3,0.423,0.242,0.677c-0.058,0.252-0.257,0.45-0.511,0.505
											l-10.313,2.237c-0.193,0.042-0.396-0.004-0.552-0.125c-0.156-0.122-0.25-0.306-0.258-0.504l-0.387-10.545
											c-0.009-0.26,0.132-0.501,0.363-0.62c0.231-0.119,0.51-0.093,0.715,0.067l2.975,2.31c2.988-2.893,7.053-4.54,11.247-4.54
											c3.613,0,7.03,1.171,9.885,3.387c3.409,2.647,5.579,6.47,6.109,10.763c0.044,0.356-0.201,0.683-0.555,0.742l-4.492,0.736
											C308.565,346.121,308.53,346.124,308.492,346.124z M297.666,335.031c2.59,0,5.041,0.839,7.087,2.428
											c2.313,1.797,3.827,4.341,4.31,7.224l3.165-0.519c-0.614-3.678-2.553-6.938-5.509-9.234c-2.618-2.031-5.752-3.105-9.065-3.105
											c-4.034,0-7.936,1.66-10.706,4.557c-0.237,0.247-0.624,0.275-0.894,0.065l-2.311-1.794l0.304,8.315l8.131-1.764l-2.499-1.941
											c-0.154-0.119-0.249-0.3-0.257-0.494c-0.01-0.194,0.064-0.383,0.205-0.518C291.795,336.174,294.65,335.031,297.666,335.031z"></path>
                                    </g>
								</svg>
                                    </div>
                                    <div class="pmd-display2">2</div>
                                    <div class="source-semibold typo-fill-secondary">Update done</div>
                                </li>
                            </ul>
                        </div>
                        <span class="btn-loader loader hidden">Loading...</span>
                    </div>
                </div><!-- end statistics-->

                <!-- User details-->
                <div class="col-xs-12 col-sm-12 col-md-6">
                    <div class="pmd-card pmd-z-depth sms-details">
                        <div class="pmd-card-title">
                            <div class="media-left set-svg">
						<span class="service-icon img-circle bg-fill-red">
							<svg version="1.1" id="Layer_1" x="0px" y="0px" width="36px" height="20.564px" viewBox="272.11 405.017 36 20.564" enable-background="new 272.11 405.017 36 20.564" xml:space="preserve">
								<g>
									<g>
										<g>
											<g>
												<path fill="#FFFFFF" d="M305.769,416.267c2.792,0.82,2.314,2.847,2.306,4.206h-6.967c-0.25-0.823-0.869-1.591-2.347-2.023
													l-0.467-0.139c-1.955-0.569-3.002-0.876-3.275-1.492c-0.067-0.222-0.047-0.469,0.605-0.705c2.095-0.61,3.157-0.929,3.408-1.714
													h0.132c-0.036-0.032-0.07-0.063-0.103-0.1c-1.036-0.998-1.826-2.946-1.826-4.519c0-2.225,1.702-3.687,3.314-3.687
													c1.609,0,3.231,1.579,3.231,3.806c0,1.574-0.881,3.46-1.963,4.424C302.042,415.232,303.256,415.529,305.769,416.267z"></path>
											</g>
											<g>
												<g>
													<path fill="#FFFFFF" d="M300.958,425.581h-21.639c-0.013-0.216-0.027-0.432-0.053-0.688c-0.067-0.855-0.133-1.735,0.106-2.54
														c0.292-0.943,1.049-1.773,2.804-2.284l0.678-0.216c3.083-0.88,4.731-1.377,5.277-2.539l0.172-0.292l-0.013-0.37
														c-0.04-0.026-0.066-0.051-0.119-0.115c-0.187-0.191-0.373-0.382-0.546-0.611c-1.196-1.519-2.046-3.867-2.046-5.805
														c0-2.477,1.834-5.104,4.572-5.104c2.141,0,4.441,2.118,4.441,5.282c0,2.016-1.05,4.516-2.486,5.983
														c-0.093,0.104-0.199,0.191-0.293,0.281l-0.172,0.154l0.054,0.229c0.372,1.453,2.046,1.951,5.409,2.908l0.691,0.216
														c1.741,0.511,2.565,1.354,2.925,2.284h0.014c0.332,0.907,0.291,1.891,0.251,2.808
														C300.972,425.301,300.972,425.454,300.958,425.581z"></path>
												</g>
											</g>
											<g>
												<path fill="#FFFFFF" d="M274.452,416.267c-2.795,0.82-2.313,2.847-2.306,4.206h6.964c0.252-0.823,0.869-1.591,2.349-2.023
													l0.466-0.139c1.957-0.569,3.004-0.876,3.276-1.492c-0.074-0.245,0.061-0.612-0.606-0.705c-2.094-0.61-3.156-0.929-3.406-1.714
													h-0.131c0.035-0.032,0.071-0.063,0.102-0.1c1.036-0.998,1.827-2.946,1.827-4.519c0-2.225-1.702-3.687-3.313-3.687
													c-1.612,0-3.231,1.579-3.231,3.806c0,1.574,0.876,3.46,1.957,4.424C278.177,415.232,276.961,415.529,274.452,416.267z"></path>
											</g>
										</g>
									</g>
								</g>
							</svg>
						</span>
                            </div>
                            <div class="media-body media-middle">
                                <h2 class="pmd-card-title-text typo-fill-secondary">Users Details</h2>
                            </div>
                        </div>
                        <div class="pmd-card-body content-section">
                            <div class="users-details-info">
                                <h2 class="pmd-display2">66.5% more users</h2>
                                <p class=" source-regular">The users are measured from the time that the redesign was fully implemented and after the first e-mailing.</p>
                            </div>
                            <!--chart start-->
                            <div id="sms-chart" class="users-details-chart" data-highcharts-chart="0"><div class="highcharts-container" id="highcharts-0" style="position: relative; overflow: hidden; width: 384px; height: 200px; text-align: left; line-height: normal; z-index: 0; -webkit-tap-highlight-color: rgba(0, 0, 0, 0);"><svg version="1.1" style="" xmlns="http://www.w3.org/2000/svg" width="384" height="200"><desc>Created with Highcharts 4.2.6</desc><defs><clipPath id="highcharts-1"><rect x="0" y="0" width="239" height="79"></rect></clipPath></defs><rect x="0" y="0" width="384" height="200" fill="#FFFFFF" class=" highcharts-background"></rect><g class="highcharts-grid"></g><g class="highcharts-grid"><path fill="none" d="M 69 123.5 L 308 123.5" stroke="#D8D8D8" stroke-width="1" opacity="1"></path><path fill="none" d="M 69 84.5 L 308 84.5" stroke="#D8D8D8" stroke-width="1" opacity="1"></path><path fill="none" d="M 69 43.5 L 308 43.5" stroke="#D8D8D8" stroke-width="1" opacity="1"></path></g><g class="highcharts-grid"><path fill="none" d="M 69 123.5 L 308 123.5" stroke="#D8D8D8" stroke-width="1" opacity="1"></path><path fill="none" d="M 69 84.5 L 308 84.5" stroke="#D8D8D8" stroke-width="1" opacity="1"></path><path fill="none" d="M 69 43.5 L 308 43.5" stroke="#D8D8D8" stroke-width="1" opacity="1"></path></g><g class="highcharts-axis"><path fill="none" d="M 102.5 123 L 102.5 133" stroke="#C0D0E0" stroke-width="1" opacity="1"></path><path fill="none" d="M 136.5 123 L 136.5 133" stroke="#C0D0E0" stroke-width="1" opacity="1"></path><path fill="none" d="M 170.5 123 L 170.5 133" stroke="#C0D0E0" stroke-width="1" opacity="1"></path><path fill="none" d="M 205.5 123 L 205.5 133" stroke="#C0D0E0" stroke-width="1" opacity="1"></path><path fill="none" d="M 239.5 123 L 239.5 133" stroke="#C0D0E0" stroke-width="1" opacity="1"></path><path fill="none" d="M 273.5 123 L 273.5 133" stroke="#C0D0E0" stroke-width="1" opacity="1"></path><path fill="none" d="M 308.5 123 L 308.5 133" stroke="#C0D0E0" stroke-width="1" opacity="1"></path><path fill="none" d="M 68.5 123 L 68.5 133" stroke="#C0D0E0" stroke-width="1" opacity="1"></path><path fill="none" d="M 69 123.5 L 308 123.5" stroke="#C0D0E0" stroke-width="1"></path></g><g class="highcharts-axis"><text x="31.609375" text-anchor="middle" transform="translate(0,0) rotate(270 31.609375 83.5)" class=" highcharts-yaxis-title" style="color:#434348;fill:#434348;" y="83.5"><tspan>User Count</tspan></text></g><g class="highcharts-axis"><text x="351.578125" text-anchor="middle" transform="translate(0,0) rotate(90 351.578125 83.5)" class=" highcharts-yaxis-title" style="color:#7cb5ec;fill:#7cb5ec;" y="83.5"><tspan>Total Days</tspan></text></g><g class="highcharts-series-group"><g class="highcharts-series highcharts-series-0" transform="translate(69,44) scale(1 1)" clip-path="url(#highcharts-1)"><path fill="none" d="M 17.071428571429 59.289500000000004 C 17.071428571429 59.289500000000004 37.5571428571432 55.221 51.214285714286 50.7575 C 64.87142857142881 46.294 71.7000000000002 41.53029999999999 85.357142857143 36.971999999999994 C 99.0142857142858 32.41369999999999 105.8428571428572 30.93639999999987 119.5 27.966 C 133.157142857144 24.995599999999868 139.985714285716 25.817200000000543 153.64285714286 22.119999999999997 C 167.3 18.42280000000054 174.12857142856998 9.47999999999999 187.78571428571 9.47999999999999 C 201.44285714285397 9.47999999999999 221.92857142857 25.438000000000002 221.92857142857 25.438000000000002" stroke="#e75c5c" stroke-width="2" stroke-linejoin="round" stroke-linecap="round"></path><path fill="none" d="M 7.071428571428999 59.289500000000004 L 17.071428571429 59.289500000000004 C 17.071428571429 59.289500000000004 37.5571428571432 55.221 51.214285714286 50.7575 C 64.87142857142881 46.294 71.7000000000002 41.53029999999999 85.357142857143 36.971999999999994 C 99.0142857142858 32.41369999999999 105.8428571428572 30.93639999999987 119.5 27.966 C 133.157142857144 24.995599999999868 139.985714285716 25.817200000000543 153.64285714286 22.119999999999997 C 167.3 18.42280000000054 174.12857142856998 9.47999999999999 187.78571428571 9.47999999999999 C 201.44285714285397 9.47999999999999 221.92857142857 25.438000000000002 221.92857142857 25.438000000000002 L 231.92857142857 25.438000000000002" stroke-linejoin="round" visibility="visible" stroke="rgba(192,192,192,0.0001)" stroke-width="22" class=" highcharts-tracker" style=""></path></g><g class="highcharts-markers highcharts-series-0 highcharts-tracker" transform="translate(69,44) scale(1 1)" clip-path="url(#highcharts-2)" style=""><path fill="#e75c5c" d="M 221 21.438000000000002 C 226.328 21.438000000000002 226.328 29.438000000000002 221 29.438000000000002 C 215.672 29.438000000000002 215.672 21.438000000000002 221 21.438000000000002 Z"></path><path fill="#e75c5c" d="M 187 5.47999999999999 C 192.328 5.47999999999999 192.328 13.47999999999999 187 13.47999999999999 C 181.672 13.47999999999999 181.672 5.47999999999999 187 5.47999999999999 Z"></path><path fill="#e75c5c" d="M 153 18.119999999999997 C 158.328 18.119999999999997 158.328 26.119999999999997 153 26.119999999999997 C 147.672 26.119999999999997 147.672 18.119999999999997 153 18.119999999999997 Z"></path><path fill="#e75c5c" d="M 119 23.966 C 124.328 23.966 124.328 31.966 119 31.966 C 113.672 31.966 113.672 23.966 119 23.966 Z"></path><path fill="#e75c5c" d="M 85 32.971999999999994 C 90.328 32.971999999999994 90.328 40.971999999999994 85 40.971999999999994 C 79.672 40.971999999999994 79.672 32.971999999999994 85 32.971999999999994 Z"></path><path fill="#e75c5c" d="M 51 46.7575 C 56.328 46.7575 56.328 54.7575 51 54.7575 C 45.672 54.7575 45.672 46.7575 51 46.7575 Z"></path><path fill="#e75c5c" d="M 17 55.289500000000004 C 22.328 55.289500000000004 22.328 63.289500000000004 17 63.289500000000004 C 11.672 63.289500000000004 11.672 55.289500000000004 17 55.289500000000004 Z"></path></g><g class="highcharts-series highcharts-series-1 highcharts-tracker" transform="translate(69,44) scale(1 1)" style="" clip-path="url(#highcharts-1)"><g><path fill="none" d="M 17.5 60 L 17.5 58 M 17.5 60 L 17.5 60" stroke="#000000" stroke-width="1"></path><path fill="none" d="M 13 58.5 L 22 58.5 M 13 60.5 L 22 60.5" stroke="#000000" stroke-width="1"></path><path fill="none" d="M 0 0" stroke="#000000" stroke-width="2"></path></g><g><path fill="none" d="M 51.5 52 L 51.5 50 M 51.5 52 L 51.5 52" stroke="#000000" stroke-width="1"></path><path fill="none" d="M 47 50.5 L 56 50.5 M 47 52.5 L 56 52.5" stroke="#000000" stroke-width="1"></path><path fill="none" d="M 0 0" stroke="#000000" stroke-width="2"></path></g><g><path fill="none" d="M 85.5 42 L 85.5 35 M 85.5 42 L 85.5 42" stroke="#000000" stroke-width="1"></path><path fill="none" d="M 81 35.5 L 90 35.5 M 81 42.5 L 90 42.5" stroke="#000000" stroke-width="1"></path><path fill="none" d="M 0 0" stroke="#000000" stroke-width="2"></path></g><g><path fill="none" d="M 119.5 28 L 119.5 25 M 119.5 28 L 119.5 28" stroke="#000000" stroke-width="1"></path><path fill="none" d="M 115 25.5 L 124 25.5 M 115 28.5 L 124 28.5" stroke="#000000" stroke-width="1"></path><path fill="none" d="M 0 0" stroke="#000000" stroke-width="2"></path></g><g><path fill="none" d="M 153.5 23 L 153.5 19 M 153.5 23 L 153.5 23" stroke="#000000" stroke-width="1"></path><path fill="none" d="M 149 19.5 L 158 19.5 M 149 23.5 L 158 23.5" stroke="#000000" stroke-width="1"></path><path fill="none" d="M 0 0" stroke="#000000" stroke-width="2"></path></g><g><path fill="none" d="M 188.5 11 L 188.5 8 M 188.5 11 L 188.5 11" stroke="#000000" stroke-width="1"></path><path fill="none" d="M 184 8.5 L 193 8.5 M 184 11.5 L 193 11.5" stroke="#000000" stroke-width="1"></path><path fill="none" d="M 0 0" stroke="#000000" stroke-width="2"></path></g><g><path fill="none" d="M 222.5 25 L 222.5 22 M 222.5 25 L 222.5 25" stroke="#000000" stroke-width="1"></path><path fill="none" d="M 218 22.5 L 227 22.5 M 218 25.5 L 227 25.5" stroke="#000000" stroke-width="1"></path><path fill="none" d="M 0 0" stroke="#000000" stroke-width="2"></path></g></g><g class="highcharts-markers highcharts-series-1" transform="translate(69,44) scale(1 1)" clip-path="none"></g><g class="highcharts-series highcharts-series-2 highcharts-tracker" transform="translate(69,44) scale(1 1)" style="" clip-path="url(#highcharts-1)"><rect x="8.5" y="65.5" width="17" height="14" stroke="#FFFFFF" stroke-width="1" fill="#9159b8" rx="0" ry="0"></rect><rect x="42.5" y="65.5" width="17" height="14" stroke="#FFFFFF" stroke-width="1" fill="#9159b8" rx="0" ry="0"></rect><rect x="76.5" y="60.5" width="17" height="19" stroke="#FFFFFF" stroke-width="1" fill="#9159b8" rx="0" ry="0"></rect><rect x="110.5" y="50.5" width="17" height="29" stroke="#FFFFFF" stroke-width="1" fill="#9159b8" rx="0" ry="0"></rect><rect x="144.5" y="43.5" width="17" height="36" stroke="#FFFFFF" stroke-width="1" fill="#9159b8" rx="0" ry="0"></rect><rect x="179.5" y="37.5" width="17" height="42" stroke="#FFFFFF" stroke-width="1" fill="#9159b8" rx="0" ry="0"></rect><rect x="213.5" y="29.5" width="17" height="50" stroke="#FFFFFF" stroke-width="1" fill="#9159b8" rx="0" ry="0"></rect></g><g class="highcharts-markers highcharts-series-2" transform="translate(69,44) scale(1 1)" clip-path="none"></g><g class="highcharts-series highcharts-series-3 highcharts-tracker" transform="translate(69,44) scale(1 1)" style="" clip-path="url(#highcharts-1)"><g><path fill="none" d="M 17.5 67 L 17.5 63 M 17.5 67 L 17.5 67" stroke="#000000" stroke-width="1"></path><path fill="none" d="M 13 63.5 L 22 63.5 M 13 67.5 L 22 67.5" stroke="#000000" stroke-width="1"></path><path fill="none" d="M 0 0" stroke="#000000" stroke-width="2"></path></g><g><path fill="none" d="M 51.5 67 L 51.5 63 M 51.5 67 L 51.5 67" stroke="#000000" stroke-width="1"></path><path fill="none" d="M 47 63.5 L 56 63.5 M 47 67.5 L 56 67.5" stroke="#000000" stroke-width="1"></path><path fill="none" d="M 0 0" stroke="#000000" stroke-width="2"></path></g><g><path fill="none" d="M 85.5 60 L 85.5 58 M 85.5 60 L 85.5 60" stroke="#000000" stroke-width="1"></path><path fill="none" d="M 81 58.5 L 90 58.5 M 81 60.5 L 90 60.5" stroke="#000000" stroke-width="1"></path><path fill="none" d="M 0 0" stroke="#000000" stroke-width="2"></path></g><g><path fill="none" d="M 119.5 51 L 119.5 47 M 119.5 51 L 119.5 51" stroke="#000000" stroke-width="1"></path><path fill="none" d="M 115 47.5 L 124 47.5 M 115 51.5 L 124 51.5" stroke="#000000" stroke-width="1"></path><path fill="none" d="M 0 0" stroke="#000000" stroke-width="2"></path></g><g><path fill="none" d="M 153.5 43 L 153.5 39 M 153.5 43 L 153.5 43" stroke="#000000" stroke-width="1"></path><path fill="none" d="M 149 39.5 L 158 39.5 M 149 43.5 L 158 43.5" stroke="#000000" stroke-width="1"></path><path fill="none" d="M 0 0" stroke="#000000" stroke-width="2"></path></g><g><path fill="none" d="M 188.5 37 L 188.5 31 M 188.5 37 L 188.5 37" stroke="#000000" stroke-width="1"></path><path fill="none" d="M 184 31.5 L 193 31.5 M 184 37.5 L 193 37.5" stroke="#000000" stroke-width="1"></path><path fill="none" d="M 0 0" stroke="#000000" stroke-width="2"></path></g><g><path fill="none" d="M 222.5 33 L 222.5 29 M 222.5 33 L 222.5 33" stroke="#000000" stroke-width="1"></path><path fill="none" d="M 218 29.5 L 227 29.5 M 218 33.5 L 227 33.5" stroke="#000000" stroke-width="1"></path><path fill="none" d="M 0 0" stroke="#000000" stroke-width="2"></path></g></g><g class="highcharts-markers highcharts-series-3" transform="translate(69,44) scale(1 1)" clip-path="none"></g></g><text x="192" text-anchor="middle" class="highcharts-title" style="color:#4d575d;font-size:14px;fill:#4d575d;width:320px;" y="21"><tspan>Last 7 days comparison</tspan></text><g class="highcharts-legend" transform="translate(190,158)"><g><g><g class="highcharts-legend-item" transform="translate(8,3)"><path fill="none" d="M 0 11 L 10 11" stroke="#e75c5c" stroke-width="2"></path><path fill="#e75c5c" d="M 5 7 C 10.328 7 10.328 15 5 15 C -0.32800000000000007 15 -0.32800000000000007 7 5 7 Z"></path><text x="15" style="color:#888888;font-size:12px;font-weight:normal;cursor:pointer;fill:#888888;" text-anchor="start" y="15"><tspan>Total Days</tspan></text></g><g class="highcharts-legend-item" transform="translate(100.859375,3)"><text x="15" y="15" style="color:#888888;font-size:12px;font-weight:normal;cursor:pointer;fill:#888888;" text-anchor="start"><tspan>User Count</tspan></text><rect x="0" y="6" width="10" height="10" fill="#9159b8"></rect></g></g></g></g><g class="highcharts-axis-labels highcharts-xaxis-labels"><text x="86.07142857142857" style="color:#606060;cursor:default;font-size:11px;fill:#606060;" text-anchor="middle" transform="translate(0,0)" y="142" opacity="1">3-7</text><text x="120.21428571428571" style="color:#606060;cursor:default;font-size:11px;fill:#606060;" text-anchor="middle" transform="translate(0,0)" y="142" opacity="1">4-7</text><text x="154.35714285714286" style="color:#606060;cursor:default;font-size:11px;fill:#606060;" text-anchor="middle" transform="translate(0,0)" y="142" opacity="1">5-7</text><text x="188.5" style="color:#606060;cursor:default;font-size:11px;fill:#606060;" text-anchor="middle" transform="translate(0,0)" y="142" opacity="1">6-7</text><text x="222.64285714285717" style="color:#606060;cursor:default;font-size:11px;fill:#606060;" text-anchor="middle" transform="translate(0,0)" y="142" opacity="1">7-7</text><text x="256.78571428571433" style="color:#606060;cursor:default;font-size:11px;fill:#606060;" text-anchor="middle" transform="translate(0,0)" y="142" opacity="1">8-7</text><text x="290.92857142857144" style="color:#606060;cursor:default;font-size:11px;fill:#606060;" text-anchor="middle" transform="translate(0,0)" y="142" opacity="1">9-7</text></g><g class="highcharts-axis-labels highcharts-yaxis-labels"><text x="54" style="color:#434348;cursor:default;font-size:11px;fill:#434348;width:117px;text-overflow:clip;" text-anchor="end" transform="translate(0,0)" y="127" opacity="1"><tspan>0</tspan></text><text x="54" style="color:#434348;cursor:default;font-size:11px;fill:#434348;width:117px;text-overflow:clip;" text-anchor="end" transform="translate(0,0)" y="87" opacity="1"><tspan>20</tspan></text><text x="54" style="color:#434348;cursor:default;font-size:11px;fill:#434348;width:117px;text-overflow:clip;" text-anchor="end" transform="translate(0,0)" y="48" opacity="1"><tspan>40</tspan></text></g><g class="highcharts-axis-labels highcharts-yaxis-labels"><text x="323" style="color:#7cb5ec;cursor:default;font-size:11px;fill:#7cb5ec;width:117px;text-overflow:clip;" text-anchor="start" transform="translate(0,0)" y="127" opacity="1"><tspan>0</tspan></text><text x="323" style="color:#7cb5ec;cursor:default;font-size:11px;fill:#7cb5ec;width:117px;text-overflow:clip;" text-anchor="start" transform="translate(0,0)" y="87" opacity="1"><tspan>100</tspan></text><text x="323" style="color:#7cb5ec;cursor:default;font-size:11px;fill:#7cb5ec;width:117px;text-overflow:clip;" text-anchor="start" transform="translate(0,0)" y="48" opacity="1"><tspan>200</tspan></text></g><g class="highcharts-tooltip" style="cursor:default;padding:0;pointer-events:none;white-space:nowrap;" transform="translate(0,-9000000000)"><path fill="none" d="M 3.5 0.5 L 13.5 0.5 C 16.5 0.5 16.5 0.5 16.5 3.5 L 16.5 13.5 C 16.5 16.5 16.5 16.5 13.5 16.5 L 3.5 16.5 C 0.5 16.5 0.5 16.5 0.5 13.5 L 0.5 3.5 C 0.5 0.5 0.5 0.5 3.5 0.5" isShadow="true" stroke="black" stroke-opacity="0.049999999999999996" stroke-width="5" transform="translate(1, 1)"></path><path fill="none" d="M 3.5 0.5 L 13.5 0.5 C 16.5 0.5 16.5 0.5 16.5 3.5 L 16.5 13.5 C 16.5 16.5 16.5 16.5 13.5 16.5 L 3.5 16.5 C 0.5 16.5 0.5 16.5 0.5 13.5 L 0.5 3.5 C 0.5 0.5 0.5 0.5 3.5 0.5" isShadow="true" stroke="black" stroke-opacity="0.09999999999999999" stroke-width="3" transform="translate(1, 1)"></path><path fill="none" d="M 3.5 0.5 L 13.5 0.5 C 16.5 0.5 16.5 0.5 16.5 3.5 L 16.5 13.5 C 16.5 16.5 16.5 16.5 13.5 16.5 L 3.5 16.5 C 0.5 16.5 0.5 16.5 0.5 13.5 L 0.5 3.5 C 0.5 0.5 0.5 0.5 3.5 0.5" isShadow="true" stroke="black" stroke-opacity="0.15" stroke-width="1" transform="translate(1, 1)"></path><path fill="#ffffff" d="M 3.5 0.5 L 13.5 0.5 C 16.5 0.5 16.5 0.5 16.5 3.5 L 16.5 13.5 C 16.5 16.5 16.5 16.5 13.5 16.5 L 3.5 16.5 C 0.5 16.5 0.5 16.5 0.5 13.5 L 0.5 3.5 C 0.5 0.5 0.5 0.5 3.5 0.5"></path><text x="8" style="font-size:12px;color:#333333;fill:#333333;" y="20"></text></g></svg></div></div><!--chart end-->
                        </div>
                        <span class="btn-loader loader hidden">Loading...</span>
                    </div>
                </div><!-- end User Details-->

                <!--Todo Lists -->
                <div class="col-lg-4 col-sm-6 col-xs-12">
                    <div class="pmd-card pmd-z-depth todos">
                        <div class="pmd-card-title">
                            <div class="media-left">
						<span class="service-icon img-circle bg-fill-feedback">
							<svg version="1.1" id="Layer_1" xmlns="http://www.w3.org/2000/svg" x="0px" y="0px" width="31.999px" height="30.769px" viewBox="281.642 394.113 31.999 30.769" enable-background="new 281.642 394.113 31.999 30.769" xml:space="preserve">
								<g>
									<path fill="#FFFFFF" d="M290.526,394.574l-4.218,5.273l-2.753-1.835c-0.567-0.379-1.331-0.224-1.707,0.341
									s-0.224,1.331,0.341,1.707l3.692,2.461c0.209,0.139,0.447,0.207,0.683,0.207c0.362,0,0.72-0.16,0.961-0.462l4.923-6.154
									c0.425-0.53,0.338-1.306-0.192-1.729C291.726,393.958,290.951,394.044,290.526,394.574z"></path>
									<path fill="#FFFFFF" d="M290.526,405.651l-4.218,5.272l-2.753-1.835c-0.566-0.379-1.331-0.225-1.707,0.341
									c-0.376,0.565-0.224,1.33,0.341,1.707l3.692,2.462c0.209,0.139,0.447,0.207,0.683,0.207c0.362,0,0.72-0.16,0.961-0.461l4.923-6.154
									c0.425-0.531,0.338-1.306-0.192-1.729C291.726,405.036,290.951,405.12,290.526,405.651z"></path>
									<path fill="#FFFFFF" d="M290.526,416.729l-4.218,5.272l-2.753-1.835c-0.566-0.378-1.331-0.224-1.707,0.341
									c-0.376,0.566-0.224,1.329,0.341,1.707l3.692,2.462c0.209,0.139,0.447,0.206,0.683,0.206c0.362,0,0.72-0.159,0.961-0.461
									l4.923-6.154c0.425-0.531,0.338-1.306-0.192-1.73C291.726,416.113,290.951,416.198,290.526,416.729z"></path>
									<rect x="296.41" y="419.959" fill="#FFFFFF" width="17.23" height="2.462"></rect>
									<rect x="296.41" y="408.882" fill="#FFFFFF" width="17.23" height="2.461"></rect>
									<rect x="296.41" y="397.805" fill="#FFFFFF" width="17.23" height="2.461"></rect>
								</g>
							</svg>
						</span>
                            </div>
                            <div class="media-body media-middle">
                                <h2 class="pmd-card-title-text typo-fill-secondary">Todo Lists</h2>
                            </div>
                        </div>
                        <ul class="list-group pmd-card-list pmd-list todo-lists">
                            <li class="list-group-item">
                                <label class="pmd-checkbox checkbox-pmd-ripple-effect">
                                    <input type="checkbox" value="" checked="" class="pm-ini"><span class="pmd-checkbox-label">&nbsp;</span>
                                    <span>Release Update</span>
                                </label>
                            </li>
                            <li class="list-group-item">
                                <label class="pmd-checkbox checkbox-pmd-ripple-effect">
                                    <input type="checkbox" value="" class="pm-ini"><span class="pmd-checkbox-label">&nbsp;</span>
                                    <span>Take a backup of the files</span>
                                </label>
                            </li>
                            <li class="list-group-item">
                                <label class="pmd-checkbox checkbox-pmd-ripple-effect">
                                    <input type="checkbox" value="" class="pm-ini"><span class="pmd-checkbox-label">&nbsp;</span>
                                    <span>Resolve Issues which have been listed down</span>
                                </label>
                            </li>
                            <li class="list-group-item">
                                <label class="pmd-checkbox checkbox-pmd-ripple-effect">
                                    <input type="checkbox" value="" class="pm-ini"><span class="pmd-checkbox-label">&nbsp;</span>
                                    <span>Be sure to add FAQs and Terms &amp; Conditions page</span>
                                </label>
                            </li>
                            <li class="list-group-item">
                                <label class="pmd-checkbox checkbox-pmd-ripple-effect">
                                    <input type="checkbox" value="" checked="" class="pm-ini"><span class="pmd-checkbox-label">&nbsp;</span>
                                    <span>Code enhancement of the HTML files</span>
                                </label>
                            </li>
                            <li class="list-group-item">
                                <label class="pmd-checkbox checkbox-pmd-ripple-effect">
                                    <input type="checkbox" value="" class="pm-ini"><span class="pmd-checkbox-label">&nbsp;</span>
                                    <span>Proper monitoring to plan the next marketing attempt</span>
                                </label>
                            </li>
                        </ul>
                        <span class="btn-loader loader hidden">Loading...</span>
                    </div>
                </div><!--end Todo Lists-->



                <!--Browser Usage card-->
                <div class="col-lg-4 col-sm-6 col-xs-12 value-added-service-card">
                    <div class="pmd-card pmd-z-depth">
                        <div class="pmd-card-title">
                            <div class="media-left set-svg">
						<span class="service-icon img-circle bg-fill-violet">
							<svg x="0px" y="0px" width="32px" height="30px" viewBox="0 0 32 30" enable-background="new 0 0 32 30" xml:space="preserve">
								<g>
									<path fill="#FFFFFF" d="M16.413,3.584l2.832,6.83l0.594,1.431l1.546,0.105l7.196,0.491L23,17.036l-1.227,1.01l0.394,1.539
										l1.835,7.174l-6.187-3.846l-1.32-0.82l-1.32,0.82L8.99,26.758l1.834-7.173l0.394-1.539l-1.226-1.01l-5.579-4.595l7.194-0.491
										l1.583-0.108l0.577-1.477L16.413,3.584 M16.395-0.053c-0.708,0-1.416,0.404-1.72,1.213l-3.238,8.296l-8.902,0.607
										c-1.619,0.202-2.428,2.226-1.011,3.237l6.879,5.665l-2.225,8.701c-0.316,1.263,0.724,2.28,1.87,2.28
										c0.322,0,0.651-0.08,0.962-0.258l7.486-4.653l7.486,4.653c0.311,0.178,0.641,0.258,0.962,0.258c1.146,0,2.187-1.018,1.871-2.28
										l-2.226-8.701l6.88-5.665c1.416-1.012,0.606-3.036-1.012-3.237l-8.903-0.607l-3.439-8.296C17.811,0.352,17.103-0.053,16.395-0.053
										L16.395-0.053z"></path>
								</g>
							</svg>
						</span>
                            </div>
                            <div class="media-body media-middle">
                                <h2 class="pmd-card-title-text typo-fill-secondary">Browser Usage</h2>
                            </div>
                        </div>
                        <div class="pmd-card-body text-center value-added">
                            <div class="row">
                                <div class="col-xs-6 value-added-section">
                                    <div class="source-semibold typo-fill-secondary title">Firefox</div>
                                    <div class="pmd-display2"><a href="javascript:void(0)">25%</a></div>
                                </div>
                                <div class="col-xs-6 value-added-section">
                                    <div class="source-semibold typo-fill-secondary title">Google Chrome</div>
                                    <div class="pmd-display2"><a href="javascript:void(0)">32%</a></div>
                                </div>
                                <div class="col-xs-6 value-added-section">
                                    <div class="source-semibold typo-fill-secondary title">Safari</div>
                                    <div class="pmd-display2"><a href="javascript:void(0)">13%</a></div>
                                </div>
                                <div class="col-xs-6 value-added-section">
                                    <div class="source-semibold typo-fill-secondary title">Opera</div>
                                    <div class="pmd-display2"><a href="javascript:void(0)">7%</a></div>
                                </div>
                                <div class="col-xs-6 value-added-section">
                                    <div class="source-semibold typo-fill-secondary title">Mobile &amp; Tablet</div>
                                    <div class="pmd-display2"><a href="javascript:void(0)">4%</a></div>
                                </div>
                                <div class="col-xs-6 value-added-section">
                                    <div class="source-semibold typo-fill-secondary title">Others</div>
                                    <div class="pmd-display2"><a href="javascript:void(0)">2%</a></div>
                                </div>
                            </div>
                        </div>
                        <span class="btn-loader loader hidden">Loading...</span>
                    </div>
                </div><!--end Browser Usage card-->



                <!--Recent Posts-->
                <div class="col-lg-4 col-sm-6 col-xs-12">
                    <div class="pmd-card pmd-z-depth recent-post">
                        <div class="pmd-card-title">
                            <div class="media-left set-svg">
						<span class="service-icon img-circle bg-fill-red">
							<svg version="1.1" id="XMLID_1_" xmlns="http://www.w3.org/2000/svg" x="0px" y="0px" width="32px" height="32px" viewBox="0 0 32 32" enable-background="new 0 0 32 32" xml:space="preserve">
								<path fill="#FFFFFF" d="M10,22h6L32,6l-6-6L10,16V22z M13,17L25,5l2,2L15,19h-2V17z M22,28H4V10h8l4-4H0v26h26V16l-4,4V28z"></path>
							</svg>
						</span>
                            </div>
                            <div class="media-body media-middle">
                                <h2 class="pmd-card-title-text typo-fill-secondary">Recent Posts</h2>
                            </div>
                        </div>
                        <ul class="list-group pmd-card-list pmd-list-avatar">
                            <li class="list-group-item">
                                <div class="media-left">
                                    <a href="javascript:void(0);" class="avatar-list-img" title="profile-link">
                                        <img alt="40x40" data-src="holder.js/40x40" class="img-responsive" src="{{asset('themes/images/profile-1.png')}}" data-holder-rendered="true">
                                    </a>
                                </div>
                                <div class="media-body media-middle">
                                    <h3 class="list-group-item-heading">Christopher Columbus</h3>
                                    <span class="list-group-item-text">This theme is Awesome!!</span>
                                </div>
                                <div class="media-right post">
                                    <span class="post-time">5 mins ago</span>
                                </div>
                            </li>
                            <li class="list-group-item">
                                <div class="media-left">
                                    <a href="javascript:void(0);" class="avatar-list-img" title="profile-link">
                                        <img alt="40x40" data-src="holder.js/40x40" class="img-responsive" src="{{asset('themes/images/profile-2.png')}}" data-holder-rendered="true">
                                    </a>
                                </div>
                                <div class="media-body media-middle">
                                    <h3 class="list-group-item-heading">Sandra Smith</h3>
                                    <span class="list-group-item-text">Hey! I'm thankful to you.</span>
                                </div>
                                <div class="media-right post">
                                    <span class="post-time">6 hours ago</span>
                                </div>
                            </li>
                            <li class="list-group-item">
                                <div class="media-left">
                                    <a href="javascript:void(0);" class="avatar-list-img" title="profile-link">
                                        <img alt="40x40" data-src="holder.js/40x40" class="img-responsive" src="{{asset('themes/images/profile-3.png')}}" data-holder-rendered="true">
                                    </a>
                                </div>
                                <div class="media-body media-middle">
                                    <h3 class="list-group-item-heading">Nick Doe</h3>
                                    <span class="list-group-item-text">I've used your component.</span>
                                </div>
                                <div class="media-right post">
                                    <span class="post-time">13:40 PM</span>
                                </div>
                            </li>
                            <li class="list-group-item">
                                <div class="media-left">
                                    <a href="javascript:void(0);" class="avatar-list-img" title="profile-link">
                                        <img alt="40x40" data-src="holder.js/40x40" class="img-responsive" src="{{asset('themes/images/profile-4.png')}}" data-holder-rendered="true">
                                    </a>
                                </div>
                                <div class="media-body media-middle">
                                    <h3 class="list-group-item-heading">Paul Andrew</h3>
                                    <span class="list-group-item-text">Nice work!!</span>
                                </div>
                                <div class="media-right post">
                                    <span class="post-time">10:00 AM</span>
                                </div>
                            </li>
                            <li class="list-group-item">
                                <div class="media-left">
                                    <a href="javascript:void(0);" class="avatar-list-img" title="profile-link">
                                        <img alt="40x40" data-src="holder.js/40x40" class="img-responsive" src="{{asset('themes/images/profile-2.png')}}" data-holder-rendered="true">
                                    </a>
                                </div>
                                <div class="media-body media-middle">
                                    <h3 class="list-group-item-heading">Sandra Smith</h3>
                                    <span class="list-group-item-text">Hey! I'm thankful to you.</span>
                                </div>
                                <div class="media-right post">
                                    <span class="post-time">6 hours ago</span>
                                </div>
                            </li>
                        </ul>
                        <span class="btn-loader loader hidden">Loading...</span>
                    </div>
                </div><!-- end Recent Posts-->

                <!--project progress -->
                <div class="col-lg-4 col-sm-6 col-xs-12">
                    <div class="pmd-card pmd-z-depth project-progress">
                        <div class="pmd-card-title">
                            <div class="media-left set-svg">
						<span class="service-icon img-circle bg-fill-darkblue">
							<svg x="0px" y="0px" width="33px" height="30px" viewBox="0 0 33 30" enable-background="new 0 0 33 30" xml:space="preserve">
								<g>
									<path fill="#FFFFFF" d="M9.339,16.337L9.339,16.337L9.339,16.337z"></path>
									<rect x="1.824" y="21.777" fill="#FFFFFF" width="4.62" height="8.223"></rect>
									<rect x="8.066" y="16.332" fill="#FFFFFF" width="4.62" height="13.668"></rect>
									<rect x="14.309" y="10.891" fill="#FFFFFF" width="4.62" height="19.109"></rect>
									<rect x="20.631" y="5.445" fill="#FFFFFF" width="4.62" height="24.555"></rect>
									<rect x="26.556" fill="#FFFFFF" width="4.62" height="30"></rect>
								</g>
							</svg>
						</span>
                            </div>
                            <div class="media-body media-middle">
                                <h2 class="pmd-card-title-text typo-fill-secondary">Project Progress</h2>
                            </div>
                        </div>
                        <div class="content-section">
                            <ul class="list-group pmd-card-list pmd-list todo-lists">
                                <li class="list-group-item timeline project-info">Graphics changes. Need to change icons for few sections.
                                    <h5 class="typo-fill-secondary">Low Priority</h5>
                                </li>

                                <li class="list-group-item timeline project-notification">Clean html/css/js code. Remove commented code from all the files. Also, enhance the code.
                                    <h5 class="typo-fill-secondary">High Priority</h5>
                                </li>

                                <li class="list-group-item timeline  project-notification">Make website responsive. Need to check the website in devices like Mobile and Ipad.
                                    <h5 class="typo-fill-secondary">High Priority</h5>
                                </li>
                            </ul>
                            <div class="blank-state-section hidden">
                                <svg version="1.1" id="Layer_1" xmlns="http://www.w3.org/2000/svg" x="0px" y="0px" width="70px" height="70px" viewBox="0 0 90 90" enable-background="new 0 0 90 90" xml:space="preserve">
							<g>
                                <g>
                                    <g>
                                        <path fill="#CAC8C8" d="M61.364,73.637h-4.091H32.727h-4.091H6.982l9.381-9.381v-2.892V40.909
											c0-15.791,12.845-28.636,28.637-28.636c15.791,0,28.636,12.846,28.636,28.636v20.456v2.892l9.38,9.381H61.364z M45,85.909
											c-5.327,0-9.823-3.432-11.521-8.182h23.04C54.823,82.478,50.326,85.909,45,85.909L45,85.909z M89.404,74.234L77.729,62.563
											V40.909c0-16.613-12.551-30.408-28.638-32.441V4.09c0-2.258-1.832-4.091-4.09-4.091s-4.092,1.833-4.092,4.091v4.377
											C24.823,10.5,12.272,24.295,12.272,40.909v21.654L0.596,74.234c-0.581,0.589-0.757,1.465-0.442,2.229
											c0.315,0.767,1.064,1.265,1.89,1.265h27.168C31.041,84.772,37.382,90.001,45,90.001c7.618,0,13.958-5.229,15.788-12.273h27.168
											c0.825,0,1.575-0.498,1.89-1.265C90.161,75.699,89.985,74.823,89.404,74.234L89.404,74.234z"></path>
                                    </g>
                                </g>
                                <line fill="#CAC8C8" stroke="#CAC8C8" stroke-width="3" stroke-miterlimit="10" x1="7.854" y1="7.834" x2="86.679" y2="86.659"></line>
                            </g>
						</svg>
                                <h4>You Don't Have Any Notifications</h4>
                            </div>
                        </div>
                        <span class="btn-loader loader hidden">Loading...</span>
                </div>
                </div><!-- end project progress -->
            </div>
        </div>

    </div>
@endsection
