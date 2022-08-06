@extends('layouts.master')

@section('content')
    <div class="row">
        <div class="col-lg-3 col-6">

            <div class="small-box bg-info">
                <div class="inner">
                    <h3>15</h3>
                    <p>Todays Orders</p>
                    <h6>This month: 79</h6>
                </div>
                <div class="icon">
                    <i class="fa-solid fa-cart-arrow-down"></i>
                </div>
                <a href="#" class="small-box-footer">More info <i class="fas fa-arrow-circle-right"></i></a>
            </div>
        </div>

        <div class="col-lg-3 col-6">

            <div class="small-box bg-success">
                <div class="inner">
                    <h3>23<sup style="font-size: 20px"></sup></h3>
                    <p>Pending Delivery</p>
                    <h6>This month: 3</h6>
                </div>
                <div class="icon">
                    <i class="fa-solid fa-chart-line"></i>
                </div>
                <a href="#" class="small-box-footer">More info <i class="fas fa-arrow-circle-right"></i></a>
            </div>
        </div>

        <div class="col-lg-3 col-6">

            <div class="small-box bg-secondary">
                <div class="inner">
                    <h3>44</h3>
                    <p>Pending Payment Orders</p>
                    <h6>Total: 5,230,000 TZS</h6>
                </div>
                <div class="icon">
                    <i class="fa-solid fa-money-bill-transfer"></i>
                </div>
                <a href="#" class="small-box-footer">More info <i class="fas fa-arrow-circle-right"></i></a>
            </div>
        </div>




        <div class="col-lg-3 col-6">

            <div class="small-box bg-cyan ">
                <div class="inner">
                    <h3>1,350,100 TZS</h3>
                    <p>Income </p>
                    <h6>Total this month: 16,750,000 TZS</h6>
                </div>
                <div class="icon">
                    <i class="fa-solid fa-circle-check"></i>
                </div>
                <a href="#" class="small-box-footer">More info <i class="fas fa-arrow-circle-right"></i></a>
            </div>
        </div>

    </div>
    </div>



    

    <div class="row">
        <!-- ============================================================== -->

        <!-- ============================================================== -->

        <!-- recent orders  -->
        <!-- ============================================================== -->
        <div class="col-xl-6 col-lg-6 col-md-6 col-sm-12 col-12">
            <div class="card">
                <h5 class="card-header text-center">Today - Total Product's Order</h5>
                <div class="card-body p-0">
                    <div class="table-responsive">
                        <table class="table">
                            <thead class="bg-light">
                                <tr class="border-0 bg-indigo">
                                    <th class="border-0">No</th>
                                    <th class="border-0">Product</th>
                                    <th class="border-0">Total Kilogram</th>
                                    <th class="border-0">Status</th>
                                </tr>
                            </thead>
                            <tbody>
                                <tr>
                                    <td>1</td>
                                    <td>Lozi </td>
                                    <td>60 kg</td>
                                    <td><span class="badge badge-success">Completed</span></td>
                                </tr>
                                <tr>
                                    <td>2</td>

                                    <td>Korosho </td>
                                    <td>80 kg</td>
                                    <td><span class="badge badge-warning mr-1">Inproduction</span> </td>
                                </tr>
                                <tr>
                                    <td>3</td>

                                    <td>Njugu </td>
                                    <td>420 kg</td>>
                                    <td><span class="badge badge-success">Completed</span></td>
                                </tr>
                                <tr>
                                    <td>4</td>


                                    <td>Ufuta </td>
                                    <td>700</td>
                                    <td><span class="badge badge-success">Completed</span></td>
                                </tr>
                            </tbody>
                        </table>
                    </div>
                </div>
            </div>
        </div>
        <!-- ============================================================== -->
        <!-- end recent orders  -->


        <!-- ============================================================== -->
        <!-- ============================================================== -->
        <!-- customer acquistion  -->
        <!-- ============================================================== -->
        <div class="col-xl-6 col-lg-6 col-md-6 col-sm-12 col-12">
            <div class="card">
                <h5 class="card-header text-center">Tomorrow's - Total Product's Order</h5>
                <div class="card-body p-0">
                    <div class="table-responsive">
                        <table class="table">
                            <thead class="bg-light">
                                <tr class="border-0 bg-blue">
                                    <th class="border-0">No</th>
                                    <th class="border-0">Product</th>
                                    <th class="border-0">Total Kilogram</th>
                                    <th class="border-0">Status</th>
                                </tr>
                            </thead>
                            <tbody>
                                <tr>
                                    <td>1</td>
                                    <td>Lozi </td>
                                    <td>200 kg</td>
                                    <td><span class="badge badge-info mr-1">Pending</span> </td>
                                </tr>
                                <tr>
                                    <td>2</td>

                                    <td>Korosho </td>
                                    <td>50 kg</td>
                                    <td><span class="badge badge-info mr-1">Pending</span> </td>
                                </tr>
                                <tr>
                                    <td>3</td>

                                    <td>Njugu </td>
                                    <td>550 kg</td>>
                                    <td><span class="badge badge-info mr-1">Pending</span> </td>
                                </tr>
                                <tr>
                                    <td>4</td>


                                    <td>Ufuta </td>
                                    <td>350</td>
                                    <td><span class="badge badge-info mr-1">Pending</span> </td>
                                </tr>
                            </tbody>
                        </table>
                    </div>
                </div>
            </div>
        </div>
        <!-- ============================================================== -->
        <!-- end customer acquistion  -->
        <!-- ============================================================== -->
    </div>


    <div class="row">
        <div class="col-12">
            <div class="card text-center">
                <div class="card-header text-center bg-teal">
                    <h3 class="card-title ">Today's Orders</h3>
                    <div class="card-tools">
                        
                    </div>
                </div>
    
                <div class="card-body table-responsive p-0">
                    <table class="table table-hover text-nowrap">
                        <thead>
                            <tr>
                                <th>Order no</th>
                                <th>Customer</th>
                                <th>Phone</th>
                                <th>Product</th>
                                <th>Size</th>
                                <th>Quantity</th>
                                <th>Pickup Time</th>
                                <th>Deliver Date</th>
                                <th>Order Status</th>
                                <th>Action</th>
    
                            </tr>
                        </thead>
                        <tbody>
                            <tr>
                                <td>34JN</td>
                                <td>Ally Omar</td>
                                <td>0777 123 654</td>
                                <td>Lozi</td>
                                <td>250 g</td>
                                <td>500</td>
                                <td>4:00 PM</td>
                                <td>3 July 2022</td>
                                <td><span class="badge bg-info">Pending Delivery</span></td>
                                <td>
                                    <i href="" class="text-primary mr-2 fa-solid fa-pen-to-square"
                                        data-bs-toggle="modal" data-bs-target="#EditCustomer"></i>
                                    <i href="" class="text-warning fa-solid fa-magnifying-glass"
                                        data-bs-toggle="modal" data-bs-target="#ViewCustomer"></i>
                                </td>
    
                            </tr>
                            <tr>
                                <td>21JN</td>
                                <td>Hassan Karim</td>
                                <td>0714 777 654</td>
                                <td>Njugu</td>
                                <td>250 g</td>
                                <td>800</td>
                                <td>2:30 PM</td>
                                <td>1 August 2022</td>
                                <td><span class="badge bg-secondary">Pending Payment</span></td>
                                <td>
                                    <i href="" class="text-primary mr-2 fa-solid fa-pen-to-square"
                                        data-bs-toggle="modal" data-bs-target="#EditCustomer"></i>
                                    <i href="" class="text-warning fa-solid fa-magnifying-glass"
                                        data-bs-toggle="modal" data-bs-target="#ViewCustomer"></i>
                                </td>
                            <tr>
                               
                            <tr>
                                <td>44NV</td>
                                <td>Ramadhan </td>
                                <td>0777 123 654</td>
                                <td>Korosho</td>
                                <td>400 g</td>
                                <td>30</td>
                                <td>11:00 AM</td>
                                <td>2 Feb 2022</td>
                                <td><span class="badge bg-success">Completed</span></td>
                                <td>
                                    <i href="" class="text-primary mr-2 fa-solid fa-pen-to-square"
                                        data-bs-toggle="modal" data-bs-target="#EditCustomer"></i>
                                    <i href="" class="text-warning fa-solid fa-magnifying-glass"
                                        data-bs-toggle="modal" data-bs-target="#ViewCustomer"></i>
                                </td>
                            
                            <tr>
                                <tr>
                                    <td>10JN</td>
                                    <td>Salim Omar</td>
                                    <td>0777 000 654</td>
                                    <td>Lozi</td>
                                    <td>100 g</td>
                                    <td>500</td>
                                    <td>6:00 PM</td>
                                    <td>3 July 2022</td>
                                    <td><span class="badge bg-info">Pending delivery</span></td>
                                    <td>
                                        <i href="" class="text-primary mr-2 fa-solid fa-pen-to-square"
                                            data-bs-toggle="modal" data-bs-target="#EditCustomer"></i>
                                        <i href="" class="text-warning fa-solid fa-magnifying-glass"
                                            data-bs-toggle="modal" data-bs-target="#ViewCustomer"></i>
                                    </td>
                                
                                <tr>
                                    <tr>
                                        <td>13MY</td>
                                        <td>Ally Saleh</td>
                                        <td>0777 989 787</td>
                                        <td>Lozi</td>
                                        <td>200 g</td>
                                        <td>150</td>
                                        <td>Malindi</td>
                                        <td>3 April 2022</td>
                                        <td><span class="badge bg-danger">Cancelled</span></td>
                                        <td>
                                            <i href="" class="text-primary mr-2 fa-solid fa-pen-to-square"
                                                data-bs-toggle="modal" data-bs-target="#EditCustomer"></i>
                                            <i href="" class="text-warning fa-solid fa-magnifying-glass"
                                                data-bs-toggle="modal" data-bs-target="#ViewCustomer"></i>
                                        </td>
                                    
                                    <tr>
                                       
                                            
                        </tbody>
                    </table>
                </div>
    
            </div>
    
        </div>
    </div>

    <div class="row">
        <div class="col-md-12">
            <div class="card">
                <div class="card-header">
                    <h5 class="card-title">Monthly Recap Report</h5>
                    <div class="card-tools">
                        <button type="button" class="btn btn-tool" data-card-widget="collapse">
                            <i class="fas fa-minus"></i>
                        </button>
                        <div class="btn-group">
                            <button type="button" class="btn btn-tool dropdown-toggle" data-toggle="dropdown">
                                <i class="fas fa-wrench"></i>
                            </button>
                            <div class="dropdown-menu dropdown-menu-right" role="menu">
                                <a href="#" class="dropdown-item">Action</a>
                                <a href="#" class="dropdown-item">Another action</a>
                                <a href="#" class="dropdown-item">Something else here</a>
                                <a class="dropdown-divider"></a>
                                <a href="#" class="dropdown-item">Separated link</a>
                            </div>
                        </div>
                        <button type="button" class="btn btn-tool" data-card-widget="remove">
                            <i class="fas fa-times"></i>
                        </button>
                    </div>
                </div>

                <div class="card-body">
                    <div class="row">
                        <div class="col-md-8">
                            <p class="text-center">
                                <strong>Sales: 1 Jan, 2010 - 30 May, 2022</strong>
                            </p>
                            <div class="chart">

                                <canvas id="salesChart" height="180" style="height: 180px;"></canvas>
                            </div>

                        </div>

                        <div class="col-md-4">
                            <p class="text-center">
                                <strong>Goal Completion</strong>
                            </p>
                            <div class="progress-group">
                                Total Orders
                                <span class="float-right"><b>160</b>/200</span>
                                <div class="progress progress-sm">
                                    <div class="progress-bar bg-primary" style="width: 80%"></div>
                                </div>
                            </div>

                            <div class="progress-group">
                                Complete Purchase
                                <span class="float-right"><b>310</b>/400</span>
                                <div class="progress progress-sm">
                                    <div class="progress-bar bg-danger" style="width: 75%"></div>
                                </div>
                            </div>

                            <div class="progress-group">
                                <span class="progress-text">Total Invoice Issues (Paid)</span>
                                <span class="float-right"><b>480</b>/800</span>
                                <div class="progress progress-sm">
                                    <div class="progress-bar bg-success" style="width: 60%"></div>
                                </div>
                            </div>

                            <div class="progress-group">
                                Send Inquiries
                                <span class="float-right"><b>250</b>/500</span>
                                <div class="progress progress-sm">
                                    <div class="progress-bar bg-warning" style="width: 50%"></div>
                                </div>
                            </div>

                        </div>

                    </div>

                </div>

                <div class="card-footer">
                    <div class="row">
                        <div class="col-sm-3 col-6">
                            <div class="description-block border-right">
                                <span class="description-percentage text-success"><i class="fas fa-caret-up"></i>
                                    17%</span>
                                <h5 class="description-header">3,500,210.43 TZS</h5>
                                <span class="description-text">TOTAL REVENUE</span>
                            </div>

                        </div>

                        <div class="col-sm-3 col-6">
                            <div class="description-block border-right">
                                <span class="description-percentage text-warning"><i class="fas fa-caret-left"></i>
                                    0%</span>
                                <h5 class="description-header">10,390,000 TZS</h5>
                                <span class="description-text">TOTAL COST</span>
                            </div>

                        </div>

                        <div class="col-sm-3 col-6">
                            <div class="description-block border-right">
                                <span class="description-percentage text-success"><i class="fas fa-caret-up"></i>
                                    20%</span>
                                <h5 class="description-header">$24,813.53</h5>
                                <span class="description-text">TOTAL PROFIT</span>
                            </div>

                        </div>

                        <div class="col-sm-3 col-6">
                            <div class="description-block">
                                <span class="description-percentage text-danger"><i class="fas fa-caret-down"></i>
                                    18%</span>
                                <h5 class="description-header">1200</h5>
                                <span class="description-text">GOAL COMPLETIONS</span>
                            </div>

                        </div>
                    </div>

                </div>

            </div>

        </div>

    </div>


    <div class="row">
        <div class="col-lg-6">
            <div class="card">
                <div class="card-header border-0">
                    <div class="d-flex justify-content-between">
                        <h3 class="card-title">Online Visitors</h3>
                        <a href="javascript:void(0);">View Report</a>
                    </div>
                </div>
                <div class="card-body">
                    <div class="d-flex">
                        <p class="d-flex flex-column">
                            <span class="text-bold text-lg">820</span>
                            <span>Visitors Over Time</span>
                        </p>
                        <p class="ml-auto d-flex flex-column text-right">
                            <span class="text-success">
                                <i class="fas fa-arrow-up"></i> 12.5%
                            </span>
                            <span class="text-muted">Since last week</span>
                        </p>
                    </div>

                    <div class="position-relative mb-4">
                        <canvas id="visitors-chart" height="200"></canvas>
                    </div>
                    <div class="d-flex flex-row justify-content-end">
                        <span class="mr-2">
                            <i class="fas fa-square text-primary"></i> This Week
                        </span>
                        <span>
                            <i class="fas fa-square text-gray"></i> Last Week
                        </span>
                    </div>
                </div>
            </div>

            <div class="card">
                <div class="card-header border-0">
                    <h3 class="card-title">Popular Products</h3>
                    <div class="card-tools">
                        <a href="#" class="btn btn-tool btn-sm">
                            <i class="fas fa-download"></i>
                        </a>
                        <a href="#" class="btn btn-tool btn-sm">
                            <i class="fas fa-bars"></i>
                        </a>
                    </div>
                </div>
                <div class="card-body table-responsive p-0">
                    <table class="table table-striped table-valign-middle">
                        <thead>
                            <tr>
                                <th>Product</th>
                                <th>Income</th>
                                <th>Sales</th>
                                <th>More</th>
                            </tr>
                        </thead>
                        <tbody>
                            <tr>
                                <td>
                                    <!-- <img src="/img/toyota_logo.png" alt="Product 1" class="img-circle img-size-32 mr-2"> -->
                                    Njugu
                                </td>
                                <td>13,000,000 TZS</td>
                                <td>
                                    <small class="text-success mr-1">
                                        <i class="fas fa-arrow-up"></i>
                                        12%
                                    </small>
                                    12 Sold
                                </td>
                                <td>
                                    <a href="#" class="text-muted">
                                        <i class="fas fa-search"></i>
                                    </a>
                                </td>
                            </tr>
                            <tr>
                                <td>
                                    <!-- <img src="/img/suzuki_logo.png" alt="Product 1" class="img-circle img-size-32 mr-2"> -->
                                    Korosho
                                </td>
                                <td>2,109,000 TZS</td>
                                <td>
                                    <small class="text-warning mr-1">
                                        <i class="fas fa-arrow-down"></i>
                                        0.5%
                                    </small>
                                    21 Sold
                                </td>
                                <td>
                                    <a href="#" class="text-muted">
                                        <i class="fas fa-search"></i>
                                    </a>
                                </td>
                            </tr>
                            <tr>
                                <td>
                                    <!-- <img src="/img/bmw_logo.png" alt="Product 1" class="img-circle img-size-32 mr-2"> -->
                                    Lozi
                                </td>
                                <td>455,000 TZS</td>
                                <td>
                                    <small class="text-danger mr-1">
                                        <i class="fas fa-arrow-up"></i>
                                        3%
                                    </small>
                                    198 Sold
                                </td>
                                <td>
                                    <a href="#" class="text-muted">
                                        <i class="fas fa-search"></i>
                                    </a>
                                </td>
                            </tr>
                            <tr>
                                <td>
                                    <!-- <img src="img/audilogo.png" alt="Product 1" class="img-circle img-size-32 mr-2"> -->
                                    Ufuta
                                    <span class="badge bg-danger">NEW</span>
                                </td>
                                <td>1,900,049 TZS</td>
                                <td>
                                    <small class="text-success mr-1">
                                        <i class="fas fa-arrow-up"></i>
                                        63%
                                    </small>
                                    87 Sold
                                </td>
                                <td>
                                    <a href="#" class="text-muted">
                                        <i class="fas fa-search"></i>
                                    </a>
                                </td>
                            </tr>
                        </tbody>
                    </table>
                </div>
            </div>

        </div>

        <div class="col-lg-6">
            <div class="card">
                <div class="card-header border-0">
                    <div class="d-flex justify-content-between">
                        <h3 class="card-title">Sales</h3>
                        <a href="javascript:void(0);">View Report</a>
                    </div>
                </div>
                <div class="card-body">
                    <div class="d-flex">
                        <p class="d-flex flex-column">
                            <span class="text-bold text-lg">1,800,230.00 TZS</span>
                            <span>Sales Over Time</span>
                        </p>
                        <p class="ml-auto d-flex flex-column text-right">
                            <span class="text-success">
                                <i class="fas fa-arrow-up"></i> 33.1%
                            </span>
                            <span class="text-muted">Since last month</span>
                        </p>
                    </div>

                    <div class="position-relative mb-4">
                        <canvas id="sales-chart" height="200"></canvas>
                    </div>
                    <div class="d-flex flex-row justify-content-end">
                        <span class="mr-2">
                            <i class="fas fa-square text-primary"></i> This year
                        </span>
                        <span>
                            <i class="fas fa-square text-gray"></i> Last year
                        </span>
                    </div>
                </div>
            </div>

            <div class="card">
                <div class="card-header border-0">
                    <h3 class="card-title">Online Store Overview</h3>
                    <div class="card-tools">
                        <a href="#" class="btn btn-sm btn-tool">
                            <i class="fas fa-download"></i>
                        </a>
                        <a href="#" class="btn btn-sm btn-tool">
                            <i class="fas fa-bars"></i>
                        </a>
                    </div>
                </div>
                <div class="card-body">
                    <div class="d-flex justify-content-between align-items-center border-bottom mb-3">
                        <p class="text-success text-xl">
                            <i class="fa-solid fa-money-bill-transfer"></i>
                        </p>
                        <p class="d-flex flex-column text-right">
                            <span class="font-weight-bold">
                                <i class="ion ion-android-arrow-up text-success"></i> 12%
                            </span>
                            <span class="text-muted">CONVERSION RATE</span>
                        </p>
                    </div>

                    <div class="d-flex justify-content-between align-items-center border-bottom mb-3">
                        <p class="text-warning text-xl">
                            <i class="fa-solid fa-cart-shopping"></i>
                        </p>
                        <p class="d-flex flex-column text-right">
                            <span class="font-weight-bold">
                                <i class="ion ion-android-arrow-up text-warning"></i> 0.8%
                            </span>
                            <span class="text-muted">SALES RATE</span>
                        </p>
                    </div>

                    <div class="d-flex justify-content-between align-items-center mb-0">
                        <p class="text-danger text-xl">
                            <i class="fa-solid fa-users-line"></i>
                        </p>
                        <p class="d-flex flex-column text-right">
                            <span class="font-weight-bold">
                                <i class="ion ion-android-arrow-down text-danger"></i> 1%
                            </span>
                            <span class="text-muted">REGISTRATION RATE</span>
                        </p>
                    </div>

                </div>
            </div>
        </div>

    </div>



    <script src="plugins/jquery/jquery.min.js"></script>

    <script src="plugins/bootstrap/js/bootstrap.bundle.min.js"></script>

    <script src="dist/js/adminlte.js?v=3.2.0"></script>

    <script src="plugins/chart.js/Chart.min.js"></script>

    <script src="dist/js/demo.js"></script>

    <script src="dist/js/pages/dashboard3.js"></script>
@endsection
