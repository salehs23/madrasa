@extends('layouts.master')

@section('content')
    <div class="container mb-3">
        <button type="button" class="btn btn-success" data-bs-toggle="modal" data-bs-target="#NewCustomer">Add new
            Customer</button>
    </div>



    <!-- Add Modal -->
    <div class="modal fade" id="NewCustomer" tabindex="-1" aria-labelledby="NewCustomer" aria-hidden="true">
        <div class="modal-dialog modal-xl">
            <div class="modal-content">
                <div class="modal-header  bg-info">
                    <h5 class="modal-title " id="exampleModalLabel">New Customer</h5>
                    <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                </div>
               
                <div class="modal-body m-3">


                    <div class="mb-3 row">
                        <label for="staticEmail" class="col-sm-2 col-form-label">Name</label>
                        <div class="col-sm-10">
                          <input type="text"  class="form-control" id="staticEmail" placeholder="" value="">
                        </div>
                    </div>
                    <div class="mb-3 row">
                        <label for="staticEmail" class="col-sm-2 col-form-label">Address</label>
                        <div class="col-sm-10">
                          <input type="text"  class="form-control" id="staticEmail" value="">
                        </div>
                    </div>
                    <div class="mb-3 row">
                        <label for="staticEmail" class="col-sm-2 col-form-label">Phone 1</label>
                        <div class="col-sm-10">
                          <input type="text"  class="form-control" id="staticEmail" value="+255">
                        </div>
                    </div>
                    <div class="mb-3 row">
                        <label for="staticEmail" class="col-sm-2 col-form-label">Phone 2 (optional)</label>
                        <div class="col-sm-10">
                          <input type="text"  class="form-control" id="staticEmail" value="+255">
                        </div>
                    </div>
                    <div class="mb-3 row">
                        <label for="staticEmail" class="col-sm-2 col-form-label">Email</label>
                        <div class="col-sm-10">
                          <input type="text"  class="form-control" id="staticEmail" value="">
                        </div>
                    </div>
                    <div class="mb-3 row">
                        <label for="staticEmail" class="col-sm-2 col-form-label">Nickname</label>
                        <div class="col-sm-10">
                          <input type="text"  class="form-control" id="staticEmail" value="">
                        </div>
                    </div>
                    <div class="mb-3 row">
                        <label for="staticEmail" class="col-sm-2 col-form-label">Comments</label>
                        <div class="col-sm-10">
                            <textarea class="form-control" id="exampleFormControlTextarea1" rows="3"></textarea>
                        </div>
                    </div>
                    
                    <div class="mb-3">
                        <label for="exampleFormControlInput1" class="form-label">Email address</label>
                        <input type="email" class="form-control" id="exampleFormControlInput1" placeholder="name@example.com">
                      </div>
                      <div class="mb-3">
                        <label for="exampleFormControlTextarea1" class="form-label">Example textarea</label>
                        <textarea class="form-control" id="exampleFormControlTextarea1" rows="3"></textarea>
                      </div>
                    
                </div>
                <div class="modal-footer">
                    <button type="button" class="btn btn-danger" data-bs-dismiss="modal">Close</button>
                    <button type="button" class="btn btn-primary">Save </button>
                </div>
            </div>
        </div>
    </div>


    <!-- Edit Modal -->
    <div class="modal fade" id="EditCustomer" tabindex="-1" aria-labelledby="EditCustomer" aria-hidden="true">
        <div class="modal-dialog modal-lg">
            <div class="modal-content">
                <div class="modal-header  bg-info">
                    <h5 class="modal-title " id="exampleModalLabel">New Customer</h5>
                    <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                </div>
                <div class="modal-body">
                    <div class="form-floating mb-3">
                        <input type="text" class="form-control" id="floatingInput" placeholder="Name">
                        <label for="floatingInput">Customer Name</label>
                    </div>
                    <div class="form-floating mb-3">
                        <input type="Phone" class="form-control" id="floatingInput" placeholder="Number">
                        <label for="floatingInput">Phone</label>
                    </div>
                    <div class="form-floating mb-3">
                        <input type="text" class="form-control" id="floatingInput" placeholder="Address">
                        <label for="floatingInput">Address</label>
                    </div>
                    <div class="form-floating mb-3">
                        <input type="email" class="form-control" id="floatingInput" placeholder="name@example.com">
                        <label for="floatingInput">Email address</label>
                    </div>

                    <div class="form-floating">
                        <select class="form-select" aria-label="Default select example">
                            <option selected>Customer Type</option>
                            <option value="1">Type One</option>
                            <option value="2">Type Two</option>

                        </select>
                    </div>


                </div>
                <div class="modal-footer">
                    <button type="button" class="btn btn-danger" data-bs-dismiss="modal">Close</button>
                    <button type="button" class="btn btn-primary">Save </button>
                </div>
            </div>
        </div>
    </div>

    <!-- Profile Modal -->
    <div class="modal fade" id="ViewCustomer" tabindex="-1" aria-labelledby="ViewCustomer" aria-hidden="true">
        <div class="modal-dialog modal-xl">
            <div class="modal-content">
                <div class="modal-header  bg-info">
                    <h5 class="modal-title " id="exampleModalLabel">Customer Profile</h5>
                    <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                </div>
                <div class="modal-body">

                    <section class="section profile">

                        <!-- <div class="card p-2">
                            <div class="row">
                                <div class="col-xl-4">

                                    <div class="info-box mb-1 bg-success">
                                        <span class="info-box-icon"><i class="fas fa-tag"></i></span>
                                        <div class="info-box-content">
                                            <span class="info-box-text">Total Orders</span>
                                            <span class="info-box-number">24</span>
                                        </div>

                                    </div>

                                </div>
                                <div class="col-xl-4">

                                    <div class="info-box mb-1 bg-warning">
                                        <span class="info-box-icon"><i class="fa-solid fa-hourglass"></i></span>
                                        <div class="info-box-content">
                                            <span class="info-box-text">Pending Order</span>
                                            <span class="info-box-number">2</span>
                                        </div>

                                    </div>
                                </div>
                                <div class="col-xl-4">


                                    <div class="info-box mb-1 bg-danger">
                                        <span class="info-box-icon"><i class="fas fa-file-invoice-dollar"></i></span>
                                        <div class="info-box-content">
                                            <span class="info-box-text">Unpaid Invoice</span>
                                            <span class="info-box-number">11</span>
                                        </div>

                                    </div>

                                </div>
                            </div>
                        </div> -->


                        <div class="row">
                            <div class="col-sm-12">
                                <div class="card">
                                    <div class="card-body pt-3">
                                        <ul class="nav nav-tabs nav-tabs-bordered">
                                            <li class="nav-item"> <button class="nav-link active" data-bs-toggle="tab"
                                                    data-bs-target="#profile-overview">Customer Information</button></li>
                                            <li class="nav-item"> <button class="nav-link" data-bs-toggle="tab"
                                                    data-bs-target="#profile-edit">Orders</button></li>
                                            <li class="nav-item"> <button class="nav-link" data-bs-toggle="tab"
                                                    data-bs-target="#profile-settings">Receipts</button></li>
                                            <li class="nav-item"> <button class="nav-link" data-bs-toggle="tab"
                                                    data-bs-target="#profile-change-password">Invoices</button></li>
                                        </ul>
                                        <div class="tab-content pt-2">
                                            <div class="tab-pane fade show active profile-overview" id="profile-overview">
                                            <div class="pt-4 pb-4">
                            <div class="row">
                                <div class="col-xl-4">

                                    <div class="info-box mb-1 bg-success">
                                        <span class="info-box-icon"><i class="fas fa-tag"></i></span>
                                        <div class="info-box-content">
                                            <span class="info-box-text">Total Orders</span>
                                            <span class="info-box-number">24</span>
                                        </div>

                                    </div>

                                </div>
                                <div class="col-xl-4">

                                    <div class="info-box mb-1 bg-warning">
                                        <span class="info-box-icon"><i class="fa-solid fa-hourglass"></i></span>
                                        <div class="info-box-content">
                                            <span class="info-box-text">Pending Order</span>
                                            <span class="info-box-number">2</span>
                                        </div>

                                    </div>
                                </div>
                                <div class="col-xl-4">


                                    <div class="info-box mb-1 bg-danger">
                                        <span class="info-box-icon"><i class="fas fa-file-invoice-dollar"></i></span>
                                        <div class="info-box-content">
                                            <span class="info-box-text">Unpaid Invoice</span>
                                            <span class="info-box-number">11</span>
                                        </div>

                                    </div>

                                </div>
                            </div>
                        </div>

                                                <div class="row">
                                                    <div class="col-lg-3 col-md-4 label ">Name</div>
                                                    <div class="col-lg-9 col-md-8">Saleh Salim</div>
                                                </div>
                                                <div class="row">
                                                    <div class="col-lg-3 col-md-4 label">Address</div>
                                                    <div class="col-lg-9 col-md-8">Malindi, Zanzibar</div>
                                                </div>
                                                <div class="row">
                                                    <div class="col-lg-3 col-md-4 label">Phone</div>
                                                    <div class="col-lg-9 col-md-8">+255 777 734 118</div>
                                                </div>
                                                <div class="row">
                                                    <div class="col-lg-3 col-md-4 label">Email</div>
                                                    <div class="col-lg-9 col-md-8">saleh@gmail.com</div>
                                                </div>
                                                <div class="row">
                                                    <div class="col-lg-3 col-md-4 label">Type</div>
                                                    <div class="col-lg-9 col-md-8">Type 1</div>
                                                </div>

                                            </div>
                                            <div class="tab-pane fade profile-edit pt-3" id="profile-edit">
                                                <div class="card-body table-responsive p-0">
                                                    <table class="table table-hover text-nowrap">
                                                        <thead>
                                                            <tr>
                                                                <th>Order no</th>
                                                                <th>Product</th>
                                                                <th>Size</th>
                                                                <th>Quantity</th>
                                                                <th>Added Date</th>
                                                                <th>Deliver Date</th>
                                                                <th>Status</th>
                                                                <th>Action</th>
                                
                                                            </tr>
                                                        </thead>
                                                        <tbody>
                                                            <tr>
                                                                <td>34JN</td>
                                                                <td>Lozi</td>
                                                                <td>250 g</td>
                                                                <td>500</td>
                                                                <td>20 June 2022</td>
                                                                <td>3 July 2022</td>
                                                                <td><span class="badge bg-info">Pending delivery</span></td>
                                                                <td>
                                                                    <i href="" class="text-primary mr-2 fa-solid fa-check"
                                                                        data-bs-toggle="modal" data-bs-target="#EditCustomer"></i>
                                                                </td>
                                
                                                            </tr>
                                                            <tr>
                                                                <tr>
                                                                    <td>12MY</td>
                                                                    <td>Njugu</td>
                                                                    <td>150 g</td>
                                                                    <td>1000</td>
                                                                    <td>6 May 2022</td>
                                                                    <td>7 May 2022</td>
                                                                    <td><span class="badge bg-success">Completed</span></td>
                                                                    <td>
                                                                        <i href="" class="text-success mr-2 fa-solid fa-print"
                                                                            data-bs-toggle="modal" data-bs-target="#EditCustomer"></i>
                                                                    </td>
                                    
                                                                </tr>
                                                            <tr>
                                                                <tr>
                                                                    <td>77FB</td>
                                                                    <td>Korosho</td>
                                                                    <td>400 g</td>
                                                                    <td>30</td>
                                                                    <td>10 Feb 2022</td>
                                                                    <td>13 Feb 2022</td>
                                                                    <td><span class="badge bg-danger">Pending Payment</span></td>
                                                                    <td>
                                                                        <i href="" class="text-danger mr-2 fa-solid fa-sack-dollar"
                                                                            data-bs-toggle="modal" data-bs-target="#EditCustomer"></i>
                                                                    </td>
                                    
                                                                </tr>
                                                            <tr>
                                                            
                                                            
                                                            <tr>
                                                        </tbody>
                                                    </table>
                                                </div>
                                            </div>
                                            <div class="tab-pane fade pt-3" id="profile-settings">
                                                
                                                
                                                <div class="card-body table-responsive p-0">
                                                    <table class="table table-hover text-nowrap">
                                                        <thead>
                                                            <tr>
                                                                <th>Order no</th>
                                                                <th>Product</th>
                                                                <th>Size</th>
                                                                <th>Quantity</th>
                                                                <th>Receipt number</th>
                                                                <th>Amount</th>
                                                                
                                
                                                            </tr>
                                                        </thead>
                                                        <tbody>
                                                            <tr>
                                                                <td>34JN</td>
                                                                <td>Lozi</td>
                                                                <td>250 g</td>
                                                                <td>500</td>
                                                                <td>25242AB</td>
                                                                <td>1,200,000</td>
                                                                
                                                               
                                
                                                            </tr>
                                                            <tr>
                                                                <tr>
                                                                    <td>12MY</td>
                                                                    <td>Njugu</td>
                                                                    <td>150 g</td>
                                                                    <td>1000</td>
                                                                    <td>11784DT</td>
                                                                    <td>2,350,000</td>
                                    
                                                                </tr>
                                                            <tr>
                                                                <tr>
                                                                    <td>30JN</td>
                                                                    <td>Ufuta</td>
                                                                    <td>150 g</td>
                                                                    <td>800</td>
                                                                    <td>89441HJ</td>
                                                                    <td>450,000</td>
                                    
                                                                </tr>
                                                            <tr>
                                                            
                                                            
                                                            <tr>
                                                        </tbody>
                                                    </table>
                                                </div>


                                            </div>
                                            <div class="tab-pane fade pt-3" id="profile-change-password">
                                                
                                                
                                                <div class="card-body table-responsive p-0">
                                                    <table class="table table-hover text-nowrap">
                                                        <thead>
                                                            <tr>
                                                                <th>Order no</th>
                                                                <th>Product</th>
                                                                <th>Size</th>
                                                                <th>Quantity</th>
                                                                <th>Invoice number</th>
                                                                <th>Discount </th>
                                                                <th>Invoice date</th>
                                                                <th>Amount</th>
                                                                
                                
                                                            </tr>
                                                        </thead>
                                                        <tbody>
                                                            <tr>
                                                                <td>34JN</td>
                                                                <td>Lozi</td>
                                                                <td>250 g</td>
                                                                <td>500</td>
                                                                <td>2145INV</td>
                                                                <td>0</td>
                                                                <td>20 June 2022</td>
                                                                <td>2,100,000</td>
                                                                
                                                               
                                
                                                            </tr>
                                                            <tr>
                                                                <tr>
                                                                    <td>12MY</td>
                                                                    <td>Njugu</td>
                                                                    <td>150 g</td>
                                                                    <td>1000</td>
                                                                    <td>3657INV</td>
                                                                    <td>50,000</td>
                                                                    <td>15 May 2022</td>
                                                                    <td>1,550,000</td>
                                    
                                                                </tr>
                                                            <tr>
                                                                <tr>
                                                                    <td>30JN</td>
                                                                    <td>Ufuta</td>
                                                                    <td>150 g</td>
                                                                    <td>800</td>
                                                                    <td>89441HJ</td>
                                                                    <td>200,000</td>
                                                                    <td>4 March 2022</td>
                                                                    <td>1,850,000</td>
                                    
                                                                </tr>
                                                            <tr>
                                                            
                                                            
                                                            <tr>
                                                        </tbody>
                                                    </table>
                                                </div>




                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </section>


                </div>
                <div class="modal-footer">
                    <button type="button" class="btn btn-danger" data-bs-dismiss="modal">Close</button>
                    <button type="button" class="btn btn-primary">Save </button>
                </div>
            </div>
        </div>
    </div>

    <div class="row">
        <div class="col-12">
            <div class="card">
                <div class="card-header">
                    <h3 class="card-title">All Customers</h3>
                    <div class="card-tools">
                        <div class="input-group input-group-sm" style="width: 150px;">
                            <input type="text" name="table_search" class="form-control float-right"
                                placeholder="Search">
                            <div class="input-group-append">
                                <button type="submit" class="btn btn-default">
                                    <i class="fas fa-search"></i>
                                </button>
                            </div>
                        </div>
                    </div>
                </div>

                <div class="card-body table-responsive p-0">
                    <table class="table table-hover text-nowrap">
                        <thead>
                            <tr>

                                <th>Name</th>
                                <th>Location</th>
                                <th>Phone 1</th>
                                <th>Phone 2</th>
                                <th>Email</th>
                                <th>Status</th>
                                <th>Action</th>

                            </tr>
                        </thead>
                        <tbody>
                            <tr>
                                <td>Saleh Salim</td>
                                <td>Mchangani</td>
                                <td>0777 734 118</td>
                                <td>0652 734 118</td>
                                <td>saleh@gmail.com</td>
                                <td><span class="badge bg-success">Active</span></td>
                                <td>
                                    <i href="" class="text-primary mr-2 fa-solid fa-pen-to-square"
                                        data-bs-toggle="modal" data-bs-target="#EditCustomer"></i>
                                    <i href="" class="text-warning fa-solid fa-magnifying-glass"
                                        data-bs-toggle="modal" data-bs-target="#ViewCustomer"></i>
                                </td>

                            </tr>
                            <tr>
                            <tr>
                                <td>Osama Farid</td>
                                <td>Dar es salaam</td>
                                <td>0784 112 332</td>
                                <td>0623 112 332</td>
                                <td>osama@yahoo.com</td>
                                <td><span class="badge bg-success">Active</span></td>
                                <td>
                                    <i href="" class="text-primary mr-2 fa-solid fa-pen-to-square"
                                        data-bs-toggle="modal" data-bs-target="#EditCustomer"></i>
                                    <i href="" class="text-warning fa-solid fa-magnifying-glass"
                                        data-bs-toggle="modal" data-bs-target="#ViewCustomer"></i>

                                </td>
                            </tr>
                            <tr>
                            <tr>
                                <td>Hamid Yahya</td>
                                <td>Mombasa</td>
                                <td>0714 444 456</td>
                                <td>0744 444 456</td>
                                <td>hamid@yahoo.com/td>
                                <td><span class="badge bg-success">Active</span></td>
                                <td>
                                    <i href="" class="text-primary mr-2 fa-solid fa-pen-to-square"
                                        data-bs-toggle="modal" data-bs-target="#EditCustomer"></i>
                                    <i href="" class="text-warning fa-solid fa-magnifying-glass"
                                        data-bs-toggle="modal" data-bs-target="#ViewCustomer"></i>

                                </td>
                            </tr>
                            <tr>
                            <tr>
                                <td>Maryam Abdallah</td>
                                <td>Fumba</td>
                                <td>0784 123456</td>
                                <td>0655 123456</td>
                                <td>maryam@gmail.com</td>
                                <td><span class="badge bg-danger">Inactive</span></td>
                                <td>
                                    <i href="" class="text-primary mr-2 fa-solid fa-pen-to-square"
                                        data-bs-toggle="modal" data-bs-target="#EditCustomer"></i>
                                    <i href="" class="text-warning fa-solid fa-magnifying-glass"
                                        data-bs-toggle="modal" data-bs-target="#ViewCustomer"></i>

                                </td>
                            </tr>
                            <tr>
                            
                            <tr>
                        </tbody>
                    </table>
                </div>

            </div>

        </div>
    </div>
@endsection
