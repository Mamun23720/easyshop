@extends('backend.master')



@section('content')
    <div class="main-panel">
        <div class="content-wrapper">

            <!-- Opening Row -->

            <br>
            <div class="row">
                <div class="col-md-12 grid-margin">
                    <div class="d-flex justify-content-between align-items-center">
                        <div>
                            <h4 class="font-weight-bold mb-0">My Dashboard</h4>
                        </div>
                        <div>
                            <a href="" class="btn btn-success">
                                <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor"
                                    class="bi bi-card-checklist" viewBox="0 0 16 16">
                                    <path
                                        d="M14.5 3a.5.5 0 0 1 .5.5v9a.5.5 0 0 1-.5.5h-13a.5.5 0 0 1-.5-.5v-9a.5.5 0 0 1 .5-.5zm-13-1A1.5 1.5 0 0 0 0 3.5v9A1.5 1.5 0 0 0 1.5 14h13a1.5 1.5 0 0 0 1.5-1.5v-9A1.5 1.5 0 0 0 14.5 2z" />
                                    <path
                                        d="M7 5.5a.5.5 0 0 1 .5-.5h5a.5.5 0 0 1 0 1h-5a.5.5 0 0 1-.5-.5m-1.496-.854a.5.5 0 0 1 0 .708l-1.5 1.5a.5.5 0 0 1-.708 0l-.5-.5a.5.5 0 1 1 .708-.708l.146.147 1.146-1.147a.5.5 0 0 1 .708 0M7 9.5a.5.5 0 0 1 .5-.5h5a.5.5 0 0 1 0 1h-5a.5.5 0 0 1-.5-.5m-1.496-.854a.5.5 0 0 1 0 .708l-1.5 1.5a.5.5 0 0 1-.708 0l-.5-.5a.5.5 0 0 1 .708-.708l.146.147 1.146-1.147a.5.5 0 0 1 .708 0" />
                                </svg>
                                Reports
                            </a>
                        </div>
                    </div>
                </div>
            </div>
            <br>

            <!-- 1st row -->

            <div class="row ">
                <div class=" col-md-3 grid-margin stretch-card  ">
                    <div class="card">
                        <div class="card-body bg-success text-white">
                            <p class="card-title text-md-center text-xl-left"><b>Total Sales</b></p>
                            <div
                                class="d-flex flex-wrap justify-content-between justify-content-md-center justify-content-xl-between align-items-center">
                                <h3 class="mb-0 mb-md-2 mb-xl-0 order-md-1 order-xl-0">00.00 BDT</h3>
                                <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor"
                                    class="bi bi-calendar-check" viewBox="0 0 16 16">
                                    <path
                                        d="M10.854 7.146a.5.5 0 0 1 0 .708l-3 3a.5.5 0 0 1-.708 0l-1.5-1.5a.5.5 0 1 1 .708-.708L7.5 9.793l2.646-2.647a.5.5 0 0 1 .708 0" />
                                    <path
                                        d="M3.5 0a.5.5 0 0 1 .5.5V1h8V.5a.5.5 0 0 1 1 0V1h1a2 2 0 0 1 2 2v11a2 2 0 0 1-2 2H2a2 2 0 0 1-2-2V3a2 2 0 0 1 2-2h1V.5a.5.5 0 0 1 .5-.5M1 4v10a1 1 0 0 0 1 1h12a1 1 0 0 0 1-1V4z" />
                                </svg>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-md-3 grid-margin stretch-card">
                    <div class="card">
                        <div class="card-body bg-warning text-white">
                            <p class="card-title text-md-center text-xl-left"><b>Total Orders</b></p>
                            <div
                                class="d-flex flex-wrap justify-content-between justify-content-md-center justify-content-xl-between align-items-center">
                                <h3 class="mb-0 mb-md-2 mb-xl-0 order-md-1 order-xl-0">00.00 BDT</h3>
                                <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor"
                                    class="bi bi-person-check-fill" viewBox="0 0 16 16">
                                    <path fill-rule="evenodd"
                                        d="M15.854 5.146a.5.5 0 0 1 0 .708l-3 3a.5.5 0 0 1-.708 0l-1.5-1.5a.5.5 0 0 1 .708-.708L12.5 7.793l2.646-2.647a.5.5 0 0 1 .708 0" />
                                    <path d="M1 14s-1 0-1-1 1-4 6-4 6 3 6 4-1 1-1 1zm5-6a3 3 0 1 0 0-6 3 3 0 0 0 0 6" />
                                </svg>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-md-3 grid-margin stretch-card">
                    <div class="card">
                        <div class="card-body bg-info text-white">
                            <p class="card-title text-md-center text-xl-left"><b>Total Products</b></p>
                            <div
                                class="d-flex flex-wrap justify-content-between justify-content-md-center justify-content-xl-between align-items-center">
                                <h3 class="mb-0 mb-md-2 mb-xl-0 order-md-1 order-xl-0">{{ $allProduct ? count($allProduct) : 0 }} item</h3>
                                <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor"
                                    class="bi bi-file-earmark-check" viewBox="0 0 16 16">
                                    <path
                                        d="M10.854 7.854a.5.5 0 0 0-.708-.708L7.5 9.793 6.354 8.646a.5.5 0 1 0-.708.708l1.5 1.5a.5.5 0 0 0 .708 0z" />
                                    <path
                                        d="M14 14V4.5L9.5 0H4a2 2 0 0 0-2 2v12a2 2 0 0 0 2 2h8a2 2 0 0 0 2-2M9.5 3A1.5 1.5 0 0 0 11 4.5h2V14a1 1 0 0 1-1 1H4a1 1 0 0 1-1-1V2a1 1 0 0 1 1-1h5.5z" />
                                </svg>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-md-3 grid-margin stretch-card">
                    <div class="card">
                        <div class="card-body bg-secondary text-white">
                            <p class="card-title text-md-center text-xl-left"><b>Total Customers</b></p>
                            <div
                                class="d-flex flex-wrap justify-content-between justify-content-md-center justify-content-xl-between align-items-center">
                                <h3 class="mb-0 mb-md-2 mb-xl-0 order-md-1 order-xl-0">00</h3>
                                <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor"
                                    class="bi bi-file-earmark-excel" viewBox="0 0 16 16">
                                    <path
                                        d="M5.884 6.68a.5.5 0 1 0-.768.64L7.349 10l-2.233 2.68a.5.5 0 0 0 .768.64L8 10.781l2.116 2.54a.5.5 0 0 0 .768-.641L8.651 10l2.233-2.68a.5.5 0 0 0-.768-.64L8 9.219l-2.116-2.54z" />
                                    <path
                                        d="M14 14V4.5L9.5 0H4a2 2 0 0 0-2 2v12a2 2 0 0 0 2 2h8a2 2 0 0 0 2-2M9.5 3A1.5 1.5 0 0 0 11 4.5h2V14a1 1 0 0 1-1 1H4a1 1 0 0 1-1-1V2a1 1 0 0 1 1-1h5.5z" />
                                </svg>
                            </div>
                        </div>
                    </div>
                </div>
            </div>

            <br>



            <!-- 2nd row -->

            <div class="row">
                <div class="col-md-3 grid-margin stretch-card">
                    <div class="card">
                        <div class="card-body bg-dark text-white">
                            <p class="card-title text-md-center text-xl-left"><b>Today's Orders</b></p>
                            <div
                                class="d-flex flex-wrap justify-content-between justify-content-md-center justify-content-xl-between align-items-center">
                                <h3 class="mb-0 mb-md-2 mb-xl-0 order-md-1 order-xl-0">00.00 BDT</h3>
                                <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor"
                                    class="bi bi-calendar-check" viewBox="0 0 16 16">
                                    <path
                                        d="M10.854 7.146a.5.5 0 0 1 0 .708l-3 3a.5.5 0 0 1-.708 0l-1.5-1.5a.5.5 0 1 1 .708-.708L7.5 9.793l2.646-2.647a.5.5 0 0 1 .708 0" />
                                    <path
                                        d="M3.5 0a.5.5 0 0 1 .5.5V1h8V.5a.5.5 0 0 1 1 0V1h1a2 2 0 0 1 2 2v11a2 2 0 0 1-2 2H2a2 2 0 0 1-2-2V3a2 2 0 0 1 2-2h1V.5a.5.5 0 0 1 .5-.5M1 4v10a1 1 0 0 0 1 1h12a1 1 0 0 0 1-1V4z" />
                                </svg>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-md-3 grid-margin stretch-card">
                    <div class="card">
                        <div class="card-body bg-danger text-white">
                            <p class="card-title text-md-center text-xl-left"><b>Pending Orders</b></p>
                            <div
                                class="d-flex flex-wrap justify-content-between justify-content-md-center justify-content-xl-between align-items-center">
                                <h3 class="mb-0 mb-md-2 mb-xl-0 order-md-1 order-xl-0">00.00 BDT</h3>
                                <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor"
                                    class="bi bi-person-check-fill" viewBox="0 0 16 16">
                                    <path fill-rule="evenodd"
                                        d="M15.854 5.146a.5.5 0 0 1 0 .708l-3 3a.5.5 0 0 1-.708 0l-1.5-1.5a.5.5 0 0 1 .708-.708L12.5 7.793l2.646-2.647a.5.5 0 0 1 .708 0" />
                                    <path d="M1 14s-1 0-1-1 1-4 6-4 6 3 6 4-1 1-1 1zm5-6a3 3 0 1 0 0-6 3 3 0 0 0 0 6" />
                                </svg>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <br>

            <!-- 3rd-1st row -->


            <div class="row">
                <div class="col-md-7 grid-margin stretch-card">
                    <div class="card">
                        <div class="card-body">
                            <p class="card-title mb-0"><b>Top Products</b></p>
                            <div class="table-responsive">
                                <table class="table table-hover">
                                    <thead>
                                        <tr>
                                            <th>User</th>
                                            <th>Product</th>
                                            <th>Sale</th>
                                            <th>Status</th>
                                        </tr>
                                    </thead>
                                    <tbody>
                                        <tr>
                                            <td>User Name</td>
                                            <td>Product Name</td>
                                            <td class="text-danger"> 00.00% <i class="ti-arrow-down"></i></td>
                                            <td><label class="badge badge-danger">...</label></td>
                                        </tr>
                                    </tbody>
                                </table>
                            </div>
                        </div>
                    </div>
                </div>

                <!-- 3rd-2nd row -->

                <div class="col-md-5 grid-margin stretch-card">
                    <div class="card">
                        <div class="card-body">
                            <h4 class="card-title">To Do Lists</h4>
                            <div class="list-wrapper pt-2">
                                <ul class="d-flex flex-column-reverse todo-list todo-list-custom">
                                    <li>
                                        <div class="form-check form-check-flat">
                                            <label class="form-check-label">
                                                <input class="checkbox" type="checkbox">
                                                Become A Travel Pro In One Easy Lesson
                                                <i class="input-helper"></i></label>
                                        </div>
                                        <i class="remove ti-trash"></i>
                                    </li>
                                    <li class="completed">
                                        <div class="form-check form-check-flat">
                                            <label class="form-check-label">
                                                <input class="checkbox" type="checkbox" checked="">
                                                See The Unmatched Beauty Of The Great Lakes
                                                <i class="input-helper"></i></label>
                                        </div>
                                        <i class="remove ti-trash"></i>
                                    </li>
                                    <li>
                                        <div class="form-check form-check-flat">
                                            <label class="form-check-label">
                                                <input class="checkbox" type="checkbox">
                                                Copper Canyon
                                                <i class="input-helper"></i></label>
                                        </div>
                                        <i class="remove ti-trash"></i>
                                    </li>
                                    <li class="completed">
                                        <div class="form-check form-check-flat">
                                            <label class="form-check-label">
                                                <input class="checkbox" type="checkbox" checked="">
                                                Top Things To See During A Holiday In Hong Kong
                                                <i class="input-helper"></i></label>
                                        </div>
                                        <i class="remove ti-trash"></i>
                                    </li>
                                    <li>
                                        <div class="form-check form-check-flat">
                                            <label class="form-check-label">
                                                <input class="checkbox" type="checkbox">
                                                Travelagent India
                                                <i class="input-helper"></i></label>
                                        </div>
                                        <i class="remove ti-trash"></i>
                                    </li>
                                </ul>
                            </div>
                            <div class="add-items d-flex mb-0 mt-4">
                                <input type="text" class="form-control todo-list-input me-2"
                                    placeholder="Add new task">
                                <button class="add btn btn-icon text-primary todo-list-add-btn bg-transparent"><i
                                        class="ti-location-arrow"></i></button>
                            </div>
                        </div>
                    </div>
                </div>
            </div>

            <br>
            <!-- 4th row -->


            <div class="row">
                <div class="col-md-12 grid-margin stretch-card">
                    <div class="card position-relative">
                        <div class="card-body">
                            <p class="card-title">Detailed Reports</p>
                            <div class="row">
                                <div class="col-md-12 col-xl-3 d-flex flex-column justify-content-center">
                                    <div class="ml-xl-4">
                                        <h1>00</h1>
                                        <h3 class="font-weight-light mb-xl-4">Sales</h3>
                                        <p class="text-muted mb-2 mb-xl-0">The total number of sessions within the date
                                            range. It is the period time a user is actively engaged with your website, page
                                            or app, etc</p>
                                    </div>
                                </div>
                                <div class="col-md-12 col-xl-9">
                                    <div class="row">
                                        <div class="col-md-6 mt-3 col-xl-5">
                                            <div class="chartjs-size-monitor">
                                                <div class="chartjs-size-monitor-expand">
                                                    <div class=""></div>
                                                </div>
                                                <div class="chartjs-size-monitor-shrink">
                                                    <div class=""></div>
                                                </div>
                                            </div>
                                            <canvas id="north-america-chart" width="241" height="120"
                                                style="display: block; width: 241px; height: 120px;"
                                                class="chartjs-render-monitor"></canvas>
                                            <div id="north-america-legend">
                                                <div class="report-chart">
                                                    <div class="d-flex justify-content-between mx-4 mx-xl-5 mt-3">
                                                        <div class="d-flex align-items-center">
                                                            <div class="me-3"
                                                                style="width:20px; height:20px; border-radius: 50%; background-color: #71c016">
                                                            </div>
                                                            <p class="mb-0">Offline sales</p>
                                                        </div>
                                                        <p class="mb-0">00</p>
                                                    </div>
                                                    <div class="d-flex justify-content-between mx-4 mx-xl-5 mt-3">
                                                        <div class="d-flex align-items-center">
                                                            <div class="me-3"
                                                                style="width:20px; height:20px; border-radius: 50%; background-color: #8caaff">
                                                            </div>
                                                            <p class="mb-0">Online sales</p>
                                                        </div>
                                                        <p class="mb-0">00</p>
                                                    </div>
                                                    <div class="d-flex justify-content-between mx-4 mx-xl-5 mt-3">
                                                        <div class="d-flex align-items-center">
                                                            <div class="me-3"
                                                                style="width:20px; height:20px; border-radius: 50%; background-color: #248afd">
                                                            </div>
                                                            <p class="mb-0">Returns</p>
                                                        </div>
                                                        <p class="mb-0">00</p>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="col-md-6 col-xl-7">
                                            <div class="table-responsive mb-3 mb-md-0">
                                                <table class="table table-borderless report-table">
                                                    <tbody>
                                                        <tr>
                                                            <td class="text-muted">Illinois</td>
                                                            <td class="w-100 px-0">
                                                                <div class="progress progress-md mx-4">
                                                                    <div class="progress-bar bg-primary"
                                                                        role="progressbar" style="width: 70%"
                                                                        aria-valuenow="70" aria-valuemin="0"
                                                                        aria-valuemax="100"></div>
                                                                </div>
                                                            </td>
                                                            <td>
                                                                <h5 class="font-weight-bold mb-0">00</h5>
                                                            </td>
                                                        </tr>
                                                        <tr>
                                                            <td class="text-muted">Washington</td>
                                                            <td class="w-100 px-0">
                                                                <div class="progress progress-md mx-4">
                                                                    <div class="progress-bar bg-primary"
                                                                        role="progressbar" style="width: 30%"
                                                                        aria-valuenow="30" aria-valuemin="0"
                                                                        aria-valuemax="100"></div>
                                                                </div>
                                                            </td>
                                                            <td>
                                                                <h5 class="font-weight-bold mb-0">00</h5>
                                                            </td>
                                                        </tr>
                                                        <tr>
                                                            <td class="text-muted">Mississippi</td>
                                                            <td class="w-100 px-0">
                                                                <div class="progress progress-md mx-4">
                                                                    <div class="progress-bar bg-primary"
                                                                        role="progressbar" style="width: 95%"
                                                                        aria-valuenow="95" aria-valuemin="0"
                                                                        aria-valuemax="100"></div>
                                                                </div>
                                                            </td>
                                                            <td>
                                                                <h5 class="font-weight-bold mb-0">00</h5>
                                                            </td>
                                                        </tr>
                                                        <tr>
                                                            <td class="text-muted">California</td>
                                                            <td class="w-100 px-0">
                                                                <div class="progress progress-md mx-4">
                                                                    <div class="progress-bar bg-primary"
                                                                        role="progressbar" style="width: 60%"
                                                                        aria-valuenow="60" aria-valuemin="0"
                                                                        aria-valuemax="100"></div>
                                                                </div>
                                                            </td>
                                                            <td>
                                                                <h5 class="font-weight-bold mb-0">00</h5>
                                                            </td>
                                                        </tr>
                                                        <tr>
                                                            <td class="text-muted">Maryland</td>
                                                            <td class="w-100 px-0">
                                                                <div class="progress progress-md mx-4">
                                                                    <div class="progress-bar bg-primary"
                                                                        role="progressbar" style="width: 40%"
                                                                        aria-valuenow="40" aria-valuemin="0"
                                                                        aria-valuemax="100"></div>
                                                                </div>
                                                            </td>
                                                            <td>
                                                                <h5 class="font-weight-bold mb-0">00</h5>
                                                            </td>
                                                        </tr>
                                                        <tr>
                                                            <td class="text-muted">Alaska</td>
                                                            <td class="w-100 px-0">
                                                                <div class="progress progress-md mx-4">
                                                                    <div class="progress-bar bg-primary"
                                                                        role="progressbar" style="width: 75%"
                                                                        aria-valuenow="75" aria-valuemin="0"
                                                                        aria-valuemax="100"></div>
                                                                </div>
                                                            </td>
                                                            <td>
                                                                <h5 class="font-weight-bold mb-0">00</h5>
                                                            </td>
                                                        </tr>
                                                    </tbody>
                                                </table>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>

            <br><br><br>



        </div>
        <!-- content-wrapper ends -->
        <!-- partial:partials/_footer.html -->
        <footer class="footer">
            <div class="d-sm-flex justify-content-center justify-content-sm-between">
                <span class="text-muted text-center text-sm-left d-block d-sm-inline-block">Developed by<a href=""
                        target="_blank">Sajib Vaiya</a>2024</span>
                <span class="float-none float-sm-right d-block mt-1 mt-sm-0 text-center">Only the best <a href=""
                        target="_blank"> Online Shop </a></span>
            </div>
        </footer>
        <!-- partial -->
    </div>
@endsection
