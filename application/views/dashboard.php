<div class="nk-content ">
    <div class="container-fluid">
        <div class="nk-content-inner">
            <div class="nk-content-body">
                <div class="nk-block-head nk-block-head-sm">
                    <div class="nk-block-between">
                        <div class="nk-block-head-content">
                            <h3 class="nk-block-title page-title">Dashboard <?= $setting['nama_aplikasi'] ?></h3>
                            <div class="nk-block-des text-soft">
                                <p>Welcome to <?= $setting['nama_perusahaan'] ?>.</p>
                            </div>
                        </div><!-- .nk-block-head-content -->
                        <div class="nk-block-head-content">
                            <div class="toggle-wrap nk-block-tools-toggle">
                                <a href="#" class="btn btn-icon btn-trigger toggle-expand me-n1" data-target="pageMenu"><em class="icon ni ni-more-v"></em></a>
                                <div class="toggle-expand-content" data-content="pageMenu">
                                    <ul class="nk-block-tools g-3">
                                        <li>
                                            <div class="dropdown">
                                                <a href="#" class="dropdown-toggle btn btn-white btn-dim btn-outline-light" data-bs-toggle="dropdown"><em class="d-none d-sm-inline icon ni ni-calender-date"></em><span><span class="d-none d-md-inline">Last</span> 30 Days</span><em class="dd-indc icon ni ni-chevron-right"></em></a>
                                                <div class="dropdown-menu dropdown-menu-end">
                                                    <ul class="link-list-opt no-bdr">
                                                        <li><a href="#"><span>Last 30 Days</span></a></li>
                                                        <li><a href="#"><span>Last 6 Months</span></a></li>
                                                        <li><a href="#"><span>Last 1 Years</span></a></li>
                                                    </ul>
                                                </div>
                                            </div>
                                        </li>
                                        <li class="nk-block-tools-opt"><a href="#" class="btn btn-primary"><em class="icon ni ni-reports"></em><span>Reports</span></a></li>
                                    </ul>
                                </div>
                            </div>
                        </div><!-- .nk-block-head-content -->
                    </div><!-- .nk-block-between -->
                </div><!-- .nk-block-head -->
                <div class="nk-block">
                    <div class="row g-gs">
                        <div class="col-md-4">
                            <div class="card card-bordered card-full">
                                <div class="card-inner">
                                    <div class="card-title-group align-start mb-0">
                                        <div class="card-title">
                                            <h6 class="title">Total Booking</h6>
                                        </div>
                                        <div class="card-tools">
                                            <em class="card-hint icon ni ni-help-fill" data-bs-toggle="tooltip" data-bs-placement="left" title="Total Booking"></em>
                                        </div>
                                    </div>
                                    <div class="card-amount">
                                        <span class="amount"> 11,230 </span>
                                        <span class="change down text-danger"><em class="icon ni ni-arrow-long-down"></em>1.93%</span>
                                    </div>
                                    <div class="invest-data">
                                        <div class="invest-data-amount g-2">
                                            <div class="invest-data-history">
                                                <div class="title">This Month</div>
                                                <div class="amount">1913</div>
                                            </div>
                                            <div class="invest-data-history">
                                                <div class="title">This Week</div>
                                                <div class="amount">1125</div>
                                            </div>
                                        </div>
                                        <div class="invest-data-ck">
                                            <canvas class="iv-data-chart" id="totalBooking"></canvas>
                                        </div>
                                    </div>
                                </div>
                            </div><!-- .card -->
                        </div><!-- .col -->
                        <div class="col-md-4">
                            <div class="card card-bordered card-full">
                                <div class="card-inner">
                                    <div class="card-title-group align-start mb-0">
                                        <div class="card-title">
                                            <h6 class="title">Rooms Available</h6>
                                        </div>
                                        <div class="card-tools">
                                            <em class="card-hint icon ni ni-help-fill" data-bs-toggle="tooltip" data-bs-placement="left" title="Total Room"></em>
                                        </div>
                                    </div>
                                    <div class="card-amount">
                                        <span class="amount"> 312 </span>
                                    </div>
                                    <div class="invest-data">
                                        <div class="invest-data-amount g-2">
                                            <div class="invest-data-history">
                                                <div class="title">Booked (Month)</div>
                                                <div class="amount">913</div>
                                            </div>
                                            <div class="invest-data-history">
                                                <div class="title">Booked (Week)</div>
                                                <div class="amount">125</div>
                                            </div>
                                        </div>
                                        <div class="invest-data-ck">
                                            <canvas class="iv-data-chart" id="totalRoom"></canvas>
                                        </div>
                                    </div>
                                </div>
                            </div><!-- .card -->
                        </div><!-- .col -->
                        <div class="col-md-4">
                            <div class="card card-bordered  card-full">
                                <div class="card-inner">
                                    <div class="card-title-group align-start mb-0">
                                        <div class="card-title">
                                            <h6 class="title">Expenses</h6>
                                        </div>
                                        <div class="card-tools">
                                            <em class="card-hint icon ni ni-help-fill" data-bs-toggle="tooltip" data-bs-placement="left" title="Total Expenses"></em>
                                        </div>
                                    </div>
                                    <div class="card-amount">
                                        <span class="amount"> 79,358.50 <span class="currency currency-usd">USD</span>
                                        </span>
                                    </div>
                                    <div class="invest-data">
                                        <div class="invest-data-amount g-2">
                                            <div class="invest-data-history">
                                                <div class="title">This Month</div>
                                                <div class="amount">3,540.59 <span class="currency currency-usd">USD</span></div>
                                            </div>
                                            <div class="invest-data-history">
                                                <div class="title">This Week</div>
                                                <div class="amount">1,259.28 <span class="currency currency-usd">USD</span></div>
                                            </div>
                                        </div>
                                        <div class="invest-data-ck">
                                            <canvas class="iv-data-chart" id="totalExpenses"></canvas>
                                        </div>
                                    </div>
                                </div>
                            </div><!-- .card -->
                        </div><!-- .col -->
                        <div class="col-xxl-4">
                            <div class="card card-bordered card-full">
                                <div class="card-inner d-flex flex-column h-100">
                                    <div class="card-title-group mb-3">
                                        <div class="card-title me-1">
                                            <h6 class="title">Top Selected Package</h6>
                                            <p>In last 30 days top selected package.</p>
                                        </div>
                                        <div class="card-tools mt-n1 me-n1">
                                            <div class="drodown">
                                                <a href="#" class="dropdown-toggle dropdown-indicator btn btn-sm btn-outline-light btn-white" data-bs-toggle="dropdown">30 Days</a>
                                                <div class="dropdown-menu dropdown-menu-end dropdown-menu-xs">
                                                    <ul class="link-list-opt no-bdr">
                                                        <li><a href="#"><span>7 Days</span></a></li>
                                                        <li><a href="#"><span>15 Days</span></a></li>
                                                        <li><a href="#"><span>30 Days</span></a></li>
                                                    </ul>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="progress-list gy-3">
                                        <div class="progress-wrap">
                                            <div class="progress-text">
                                                <div class="progress-label">Strater Package</div>
                                                <div class="progress-amount">58%</div>
                                            </div>
                                            <div class="progress progress-md">
                                                <div class="progress-bar" data-progress="58"></div>
                                            </div>
                                        </div>
                                        <div class="progress-wrap">
                                            <div class="progress-text">
                                                <div class="progress-label">Honeymoon Package</div>
                                                <div class="progress-amount">43%</div>
                                            </div>
                                            <div class="progress progress-md">
                                                <div class="progress-bar bg-warning" data-progress="43"></div>
                                            </div>
                                        </div>
                                        <div class="progress-wrap">
                                            <div class="progress-text">
                                                <div class="progress-label">Vacation Package</div>
                                                <div class="progress-amount">33%</div>
                                            </div>
                                            <div class="progress progress-md">
                                                <div class="progress-bar bg-azure" data-progress="33"></div>
                                            </div>
                                        </div>
                                        <div class="progress-wrap">
                                            <div class="progress-text">
                                                <div class="progress-label">Continental Package</div>
                                                <div class="progress-amount">29%</div>
                                            </div>
                                            <div class="progress progress-md">
                                                <div class="progress-bar bg-pink" data-progress="29"></div>
                                            </div>
                                        </div>
                                        <div class="progress-wrap">
                                            <div class="progress-text">
                                                <div class="progress-label">Spring Package</div>
                                                <div class="progress-amount">18.49%</div>
                                            </div>
                                            <div class="progress progress-md">
                                                <div class="progress-bar bg-orange" data-progress="18.49"></div>
                                            </div>
                                        </div>
                                        <div class="progress-wrap">
                                            <div class="progress-text">
                                                <div class="progress-label">All suite Package</div>
                                                <div class="progress-amount">16%</div>
                                            </div>
                                            <div class="progress progress-md">
                                                <div class="progress-bar bg-teal" data-progress="16"></div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div><!-- .col -->
                        <div class="col-md-6 col-xxl-5">
                            <div class="card card-bordered h-100">
                                <div class="card-inner">
                                    <div class="card-title-group align-start pb-3 g-2">
                                        <div class="card-title">
                                            <h6 class="title">Sales Revenue</h6>
                                            <p>In last 30 days revenue from rent.</p>
                                        </div>
                                        <div class="card-tools">
                                            <em class="card-hint icon ni ni-help" data-bs-toggle="tooltip" data-bs-placement="left" title="Revenue of this month"></em>
                                        </div>
                                    </div>
                                    <div class="analytic-au">
                                        <div class="analytic-data-group analytic-au-group g-3">
                                            <div class="analytic-data analytic-au-data">
                                                <div class="title">Monthly</div>
                                                <div class="amount">9.28K</div>
                                                <div class="change up"><em class="icon ni ni-arrow-long-up"></em>4.63%</div>
                                            </div>
                                            <div class="analytic-data analytic-au-data">
                                                <div class="title">Weekly</div>
                                                <div class="amount">2.69K</div>
                                                <div class="change down"><em class="icon ni ni-arrow-long-down"></em>1.92%</div>
                                            </div>
                                            <div class="analytic-data analytic-au-data">
                                                <div class="title">Daily (Avg)</div>
                                                <div class="amount">0.94K</div>
                                                <div class="change up"><em class="icon ni ni-arrow-long-up"></em>3.45%</div>
                                            </div>
                                        </div>
                                        <div class="analytic-au-ck">
                                            <canvas class="analytics-au-chart" id="analyticAuData"></canvas>
                                        </div>
                                        <div class="chart-label-group">
                                            <div class="chart-label">01 Jan, 2020</div>
                                            <div class="chart-label">30 Jan, 2020</div>
                                        </div>
                                    </div>
                                </div>
                            </div><!-- .card -->
                        </div><!-- .col -->
                        <div class="col-md-6 col-xxl-3">
                            <div class="card card-bordered h-100">
                                <div class="card-inner">
                                    <div class="card-title-group">
                                        <div class="card-title">
                                            <h6 class="title">Room Booking Chart</h6>
                                        </div>
                                        <div class="card-tools">
                                            <div class="drodown">
                                                <a href="#" class="dropdown-toggle dropdown-indicator btn btn-sm btn-outline-light btn-white" data-bs-toggle="dropdown">30 Days</a>
                                                <div class="dropdown-menu dropdown-menu-end dropdown-menu-xs">
                                                    <ul class="link-list-opt no-bdr">
                                                        <li><a href="#"><span>7 Days</span></a></li>
                                                        <li><a href="#"><span>15 Days</span></a></li>
                                                        <li><a href="#"><span>30 Days</span></a></li>
                                                    </ul>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="traffic-channel">
                                        <div class="traffic-channel-doughnut-ck">
                                            <canvas class="analytics-doughnut" id="BookingData"></canvas>
                                        </div>
                                        <div class="traffic-channel-group g-2">
                                            <div class="traffic-channel-data">
                                                <div class="title"><span class="dot dot-lg sq" data-bg="#9cabff"></span><span>Single</span></div>
                                                <div class="amount">1913 <small>58.63%</small></div>
                                            </div>
                                            <div class="traffic-channel-data">
                                                <div class="title"><span class="dot dot-lg sq" data-bg="#1ee0ac"></span><span>Double</span></div>
                                                <div class="amount">859 <small>23.94%</small></div>
                                            </div>
                                            <div class="traffic-channel-data">
                                                <div class="title"><span class="dot dot-lg sq" data-bg="#f9db7b"></span><span>Delux</span></div>
                                                <div class="amount">482 <small>12.94%</small></div>
                                            </div>
                                            <div class="traffic-channel-data">
                                                <div class="title"><span class="dot dot-lg sq" data-bg="#ffa353"></span><span>Suit</span></div>
                                                <div class="amount">138 <small>4.49%</small></div>
                                            </div>
                                        </div><!-- .traffic-channel-group -->
                                    </div><!-- .traffic-channel -->
                                </div>
                            </div><!-- .card -->
                        </div><!-- .col -->
                        <div class="col-xxl-5">
                            <div class="card card-bordered h-100">
                                <div class="card-inner">
                                    <div class="card-title-group pb-3 g-2">
                                        <div class="card-title">
                                            <h6 class="title">Income vs Expenses</h6>
                                            <p>How was your income and Expenses this month.</p>
                                        </div>
                                        <div class="card-tools shrink-0 d-none d-sm-block">
                                            <ul class="nav nav-switch-s2 nav-tabs bg-white">
                                                <li class="nav-item"><a href="#" class="nav-link">7 D</a></li>
                                                <li class="nav-item"><a href="#" class="nav-link active">1 M</a></li>
                                                <li class="nav-item"><a href="#" class="nav-link">3 M</a></li>
                                            </ul>
                                        </div>
                                    </div>
                                    <div class="analytic-ov">
                                        <div class="analytic-data-group analytic-ov-group g-3">
                                            <div class="analytic-data analytic-ov-data">
                                                <div class="title text-primary">Income</div>
                                                <div class="amount">2.57K</div>
                                                <div class="change down"><em class="icon ni ni-arrow-long-down"></em>12.37%</div>
                                            </div>
                                            <div class="analytic-data analytic-ov-data">
                                                <div class="title text-danger">Expenses</div>
                                                <div class="amount">3.5K</div>
                                                <div class="change down"><em class="icon ni ni-arrow-long-up"></em>8.37%</div>
                                            </div>
                                        </div>
                                        <div class="analytic-ov-ck">
                                            <canvas class="analytics-line-large" id="analyticOvData"></canvas>
                                        </div>
                                        <div class="chart-label-group ms-5">
                                            <div class="chart-label">01 Jan, 2020</div>
                                            <div class="chart-label d-none d-sm-block">15 Jan, 2020</div>
                                            <div class="chart-label">30 Jan, 2020</div>
                                        </div>
                                    </div>
                                </div>
                            </div><!-- .card -->
                        </div><!-- .col -->
                        <div class="col-md-6 col-xxl-3">
                            <div class="card card-bordered card-full">
                                <div class="card-inner-group">
                                    <div class="card-inner">
                                        <div class="card-title-group">
                                            <div class="card-title">
                                                <h6 class="title">New Customer</h6>
                                            </div>
                                            <div class="card-tools">
                                                <a href="html/hotel/customers.html" class="link">View All</a>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="card-inner card-inner-md">
                                        <div class="user-card">
                                            <div class="user-avatar bg-primary-dim">
                                                <span>AB</span>
                                            </div>
                                            <div class="user-info">
                                                <span class="lead-text">Abu Bin Ishtiyak</span>
                                                <span class="sub-text">info@softnio.com</span>
                                            </div>
                                            <div class="user-action">
                                                <div class="drodown">
                                                    <a href="#" class="dropdown-toggle btn btn-icon btn-trigger me-n1" data-bs-toggle="dropdown" aria-expanded="false"><em class="icon ni ni-more-h"></em></a>
                                                    <div class="dropdown-menu dropdown-menu-end">
                                                        <ul class="link-list-opt no-bdr">
                                                            <li><a href="#"><em class="icon ni ni-setting"></em><span>Action Settings</span></a></li>
                                                            <li><a href="#"><em class="icon ni ni-notify"></em><span>Push Notification</span></a></li>
                                                        </ul>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="card-inner card-inner-md">
                                        <div class="user-card">
                                            <div class="user-avatar bg-pink-dim">
                                                <span>SW</span>
                                            </div>
                                            <div class="user-info">
                                                <span class="lead-text">Sharon Walker</span>
                                                <span class="sub-text">sharon-90@example.com</span>
                                            </div>
                                            <div class="user-action">
                                                <div class="drodown">
                                                    <a href="#" class="dropdown-toggle btn btn-icon btn-trigger me-n1" data-bs-toggle="dropdown" aria-expanded="false"><em class="icon ni ni-more-h"></em></a>
                                                    <div class="dropdown-menu dropdown-menu-end">
                                                        <ul class="link-list-opt no-bdr">
                                                            <li><a href="#"><em class="icon ni ni-setting"></em><span>Action Settings</span></a></li>
                                                            <li><a href="#"><em class="icon ni ni-notify"></em><span>Push Notification</span></a></li>
                                                        </ul>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="card-inner card-inner-md">
                                        <div class="user-card">
                                            <div class="user-avatar bg-warning-dim">
                                                <span>GO</span>
                                            </div>
                                            <div class="user-info">
                                                <span class="lead-text">Gloria Oliver</span>
                                                <span class="sub-text">gloria_72@example.com</span>
                                            </div>
                                            <div class="user-action">
                                                <div class="drodown">
                                                    <a href="#" class="dropdown-toggle btn btn-icon btn-trigger me-n1" data-bs-toggle="dropdown" aria-expanded="false"><em class="icon ni ni-more-h"></em></a>
                                                    <div class="dropdown-menu dropdown-menu-end">
                                                        <ul class="link-list-opt no-bdr">
                                                            <li><a href="#"><em class="icon ni ni-setting"></em><span>Action Settings</span></a></li>
                                                            <li><a href="#"><em class="icon ni ni-notify"></em><span>Push Notification</span></a></li>
                                                        </ul>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="card-inner card-inner-md">
                                        <div class="user-card">
                                            <div class="user-avatar bg-success-dim">
                                                <span>PS</span>
                                            </div>
                                            <div class="user-info">
                                                <span class="lead-text">Phillip Sullivan</span>
                                                <span class="sub-text">phillip-85@example.com</span>
                                            </div>
                                            <div class="user-action">
                                                <div class="drodown">
                                                    <a href="#" class="dropdown-toggle btn btn-icon btn-trigger me-n1" data-bs-toggle="dropdown" aria-expanded="false"><em class="icon ni ni-more-h"></em></a>
                                                    <div class="dropdown-menu dropdown-menu-end">
                                                        <ul class="link-list-opt no-bdr">
                                                            <li><a href="#"><em class="icon ni ni-setting"></em><span>Action Settings</span></a></li>
                                                            <li><a href="#"><em class="icon ni ni-notify"></em><span>Push Notification</span></a></li>
                                                        </ul>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="card-inner card-inner-md">
                                        <div class="user-card">
                                            <div class="user-avatar bg-danger-dim">
                                                <span>TI</span>
                                            </div>
                                            <div class="user-info">
                                                <span class="lead-text">Tasnim Ifrat</span>
                                                <span class="sub-text">tasif-85@example.com</span>
                                            </div>
                                            <div class="user-action">
                                                <div class="drodown">
                                                    <a href="#" class="dropdown-toggle btn btn-icon btn-trigger me-n1" data-bs-toggle="dropdown" aria-expanded="false"><em class="icon ni ni-more-h"></em></a>
                                                    <div class="dropdown-menu dropdown-menu-end">
                                                        <ul class="link-list-opt no-bdr">
                                                            <li><a href="#"><em class="icon ni ni-setting"></em><span>Action Settings</span></a></li>
                                                            <li><a href="#"><em class="icon ni ni-notify"></em><span>Push Notification</span></a></li>
                                                        </ul>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div><!-- .card -->
                        </div><!-- .col -->
                        <div class="col-md-6 col-xxl-4">
                            <div class="card card-bordered card-full">
                                <div class="card-inner border-bottom">
                                    <div class="card-title-group">
                                        <div class="card-title">
                                            <h6 class="title">Recent Activities</h6>
                                        </div>
                                        <div class="card-tools">
                                            <ul class="card-tools-nav">
                                                <li><a href="#"><span>Cancel</span></a></li>
                                                <li class="active"><a href="#"><span>All</span></a></li>
                                            </ul>
                                        </div>
                                    </div>
                                </div>
                                <ul class="nk-activity">
                                    <li class="nk-activity-item">
                                        <div class="nk-activity-media user-avatar bg-success"><img src="./images/avatar/c-sm.jpg" alt=""></div>
                                        <div class="nk-activity-data">
                                            <div class="label">Keith Jensen requested for room.</div>
                                            <span class="time">2 hours ago</span>
                                        </div>
                                    </li>
                                    <li class="nk-activity-item">
                                        <div class="nk-activity-media user-avatar bg-warning">HS</div>
                                        <div class="nk-activity-data">
                                            <div class="label">Harry Simpson placed a Order.</div>
                                            <span class="time">2 hours ago</span>
                                        </div>
                                    </li>
                                    <li class="nk-activity-item">
                                        <div class="nk-activity-media user-avatar bg-azure">SM</div>
                                        <div class="nk-activity-data">
                                            <div class="label">Stephanie Marshall cancelled booking.</div>
                                            <span class="time">2 hours ago</span>
                                        </div>
                                    </li>
                                    <li class="nk-activity-item">
                                        <div class="nk-activity-media user-avatar bg-purple"><img src="./images/avatar/d-sm.jpg" alt=""></div>
                                        <div class="nk-activity-data">
                                            <div class="label">Nicholas Carr confirmed booking.</div>
                                            <span class="time">2 hours ago</span>
                                        </div>
                                    </li>
                                    <li class="nk-activity-item">
                                        <div class="nk-activity-media user-avatar bg-pink">TM</div>
                                        <div class="nk-activity-data">
                                            <div class="label">Timothy Moreno placed a Order.</div>
                                            <span class="time">2 hours ago</span>
                                        </div>
                                    </li>
                                </ul>
                            </div><!-- .card -->
                        </div><!-- .col -->
                    </div><!-- .row -->
                </div><!-- .nk-block -->
            </div>
        </div>
    </div>
</div>
<!-- content @e -->