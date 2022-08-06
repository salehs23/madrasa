@extends('layouts.master')

@section('content')
<div class="container mb-3">
    <button type="button" class="btn btn-primary" data-bs-toggle="modal" data-bs-target="#NewCustomer">Add new
        Order</button>
</div>
<!-- Add Modal -->
<div class="modal fade" id="NewCustomer" tabindex="-1" aria-labelledby="NewCustomer" aria-hidden="true">
    <div class="modal-dialog modal-xl">
        <div class="modal-content">

            
            <div class="modal-header  bg-secondary">
                <h5 class="modal-title " id="exampleModalLabel">New Order</h5>
                <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
            </div>
            <div class="modal-body">
            <label for="txt_imei_1" class="col-lg-3 control-label">Customer Information</label>
                <form class="row g-3">
                    <div class="col-10">
                        <input class="form-control" list="datalistOptions" id="exampleDataList" placeholder="Type to search...">
                                <datalist id="datalistOptions">
                                <option value="Saleh Salim - 0777 734 118">
                                <option value="Mohd Ally - 0712 123 456">
                                <option value="Omar Hussein - 0784 123 456">
                                <option value="Ahmed Yahya - 0754 123 456">
                                
                                </datalist>
                        
                        {{-- <input type="text" class="form-control" id="inputPassword2" placeholder="Search customer name, email or phone"> --}}
                    </div>
                
                    <div class="col-2">
                        <button type="" class="btn btn-success mb-3">Search Customer</button>
                    </div>
                    <div class=" row">
                        <label for="staticEmail" class="col-sm-2 col-form-label">Name:</label>
                        <div class="col-sm-10">
                            <label for="staticEmail" class="col-sm-2 col-form-label">Saleh Salim</label>
                        </div>
                      </div>
                      <div class=" row">
                        <label for="staticEmail" class="col-sm-2 col-form-label">Phone:</label>
                        <div class="col-sm-10">
                            <label for="staticEmail" class="col-sm-2 col-form-label">+255 777 734 118</label>
                            <label for="staticEmail" class="col-sm-2 col-form-label">+255 738 318 918</label>
                        </div>
                      </div>
                      <div class=" row">
                        <label for="staticEmail" class="col-sm-2 col-form-label">Address:</label>
                        <div class="col-sm-10">
                            <label for="staticEmail" class="col-sm-2 col-form-label">Mlandege</label>
                        </div>
                      </div>
                      <div class="row">
                        <label for="staticEmail" class="col-sm-2 col-form-label">Email:</label>
                        <div class="col-sm-10">
                            <label for="staticEmail" class="col-sm-2 col-form-label">saleh@gmail.com</label>
                        </div>
                      </div>
                      
                      
                </form>
                
                <br>
               
                <form class="row g-1">
                    <div class="productdiv row">
                    <hr>
                    <label for="txt_imei_1" class="col-lg-3 control-label">Order Details</label>
                    <div class="row">
                    <div class="col-3 m-2">
                        <input class="form-control" list="ordertype" id="exampleDataList" placeholder="Type of order">
                                <datalist id="ordertype">
                                <option value="Sukari guru">
                                <option value="Maziwa">
                                <option value="Zaafarani">
                                </datalist>
                        
                        {{-- <input type="text" class="form-control" id="inputPassword2" placeholder="Search customer name, email or phone"> --}}
                    </div>
                    <div class="col-3 m-2">
                        <input class="form-control" list="ordersize" id="exampleDataList" placeholder="Package size">
                                <datalist id="ordersize">
                                <option value="100 grams">
                                <option value="250 grams">
                                <option value="400 grams">
                                <option value="800 grams">
                                <option value="1200 grams">
                                <option value="2500 grams">
                                
                                </datalist>
                    </div>
                    <div class="col-2 m-2">
                        <select class="form-select" aria-label="Default select example">
                            <option selected>Payment Status</option>
                            <option value="1">Paid</option>
                            <option value="2">Partial Paid</option>
                            <option value="3">Not Paid</option>
                          </select>
                        
                    </div>
                    <div class="col-2 m-2">
                        <select class="form-select" id="discount_drop" onchange="discountStatus()"  aria-label="Default select example">
                            <option value="No" selected disabled>Order Discount</option>
                            <option value="No">No</option>
                            <option value="Yes">Yes</option>
                          </select>
                    </div>

                    <div class=" row m-2">
                        <label for="staticEmail" class="col-sm-2">Quantity:</label>
                        <div class="col-sm-10">
                            <input type="number" class="form-control col-4" id="quantity" placeholder="Quantity ">
                        </div>
                    </div>
                    <div class=" row m-2">
                        <label for="staticEmail" class="col-sm-2">Amount per product:</label>
                        <div class="col-sm-10">
                            <input type="number" class="form-control col-4" id="amount_paid" placeholder="Amount ">
                        </div>
                    </div>
                    <div class=" d-none m-2" id="discount_field">
                        <label for="staticEmail" class="col-sm-2">Product Discount:</label>
                        <div class="col-sm-10">
                            <input type="number" min="0" class="form-control col-4" value="0" id="discount_amount" placeholder="Discount ">
                        </div>
                    </div>
                    <div class=" row m-2">
                        <label for="staticEmail" class="col-sm-2">Subtotal:</label>
                        <div class="col-sm-10">
                            <input type="text" class="form-control col-4" disabled  id="total_required" placeholder="Subtotal ">
                        </div>
                    </div>
                    <button type="button" onclick="calc();" class="btn btn-secondary col-3 center">calculate</button>
                    <br>
                    </div>
                    </div>
                </form>
               
                <div id="moreproduct">

                </div>
                <br>
                <hr>
                <br>

                <div class="container">
                <div class="row justify-content-end">
                <div class=" row m-2 float-end">
                        <label for="staticEmail" class="col-sm-2">Total:</label>
                        <div class="col-sm-10">
                            <input type="text" class="form-control col-4" disabled  id="total_required" placeholder="Total ">
                        </div>
                    </div>
                    </div>
                    <div class="row justify-content-md-center">
                        <button type="button" onclick="addMoreOrder();" class="btn btn-info col-3 center mr-2">Another Order</button>
                        <button type="button" onclick="removeOrder();" class="btn btn-danger col-3 center">Remove Order</button>
                    </div>
                </div>
                    
                    

            
            


                <!-- <div class="form-floating  mb-3">
                    <select class="form-select" aria-label="Default select example">
                        <option selected>Type</option>
                        <option value="1">Sukari guru</option>
                        <option value="2">Zaafarani</option>
                        <option value="2">Maziwa</option>
                    </select>
                </div>
                <div class="form-floating  mb-3">
                    <select class="form-select" aria-label="Default select example">
                        <option selected>Size</option>
                        <option value="1">100 grms</option>
                        <option value="2">200 grms</option>
                        <option value="2">250 grms</option>
                        <option value="2">400 grms</option>
                        <option value="2">800 grms</option>
                        <option value="2">1 kg</option>
                        <option value="2">2 kg</option>
                    </select>
                </div>
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
                    <input type="date" class="form-control" id="floatingInput" placeholder="name@example.com">
                    <label for="floatingInput">Delivery Date</label>
                </div> -->

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
                <h5 class="modal-title " id="exampleModalLabel">Update Order</h5>
                <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
            </div>
            <div class="modal-body">
                <div class="form-floating  mb-3">
                    <select class="form-select" aria-label="Default select example">
                        <option selected>Type</option>
                        <option value="1">Sukari guru</option>
                        <option value="2">Zaafarani</option>
                        <option value="2">Maziwa</option>
                    </select>
                </div>
                <div class="form-floating  mb-3">
                    <select class="form-select" aria-label="Default select example">
                        <option selected>Size</option>
                        <option value="1">100 grms</option>
                        <option value="2">200 grms</option>
                        <option value="2">250 grms</option>
                        <option value="2">400 grms</option>
                        <option value="2">800 grms</option>
                        <option value="2">1 kg</option>
                        <option value="2">2 kg</option>
                    </select>
                </div>
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
                    <input type="date" class="form-control" id="floatingInput" placeholder="name@example.com">
                    <label for="floatingInput">Delivery Date</label>
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
                <h5 class="modal-title " id="exampleModalLabel">Order Details</h5>
                <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
            </div>
            <div class="modal-body">

                <section class="section profile">

                    <div class=" ">
                        <div class="row">

                            
                            {{-- <div class="col-xl-2">

                                <div class="container m-2">
                                    <button type="button" class="btn btn-primary" >Complete Payment</button>
                                </div>

                            </div>
                            <div class="col-xl-2">

                                <div class="container m-2">
                                    <button type="button" class="btn btn-primary" >Cancel Order</button>
                                </div>
                            </div>
                            <div class="col-xl-2">


                                <div class="container m-2">
                                    <button type="button" class="btn btn-primary" >Complete order</button>
                                </div>

                            </div>
                            <div class="col-xl-2">


                                <div class="container m-2">
                                    <button type="button" class="btn btn-primary" >Print Receipt</button>
                                </div>

                            </div>
                            <div class="col-xl-2">

                                <div class="container m-2">
                                    <button type="button" class="btn btn-primary" >Print Invoice</button>
                                </div>

                            </div> --}}
                        </div>
                    </div>


                    <div class="row">
                        <div class="col-sm-12">
                            <div class="card">
                                <div class="card-body pt-3">
                                    <ul class="nav nav-tabs nav-tabs-bordered">
                                        <li class="nav-item"> <button class="nav-link active" data-bs-toggle="tab"
                                                data-bs-target="#profile-overview">Order Details</button></li>
                                        
                                        <li class="nav-item"> <button class="nav-link" data-bs-toggle="tab"
                                                data-bs-target="#profile-settings">Receipts</button></li>
                                        <li class="nav-item"> <button class="nav-link" data-bs-toggle="tab"
                                                data-bs-target="#profile-change-password">Invoices</button></li>
                                    </ul>
                                    <div class="tab-content pt-2">
                                        <div class="tab-pane fade show active profile-overview" id="profile-overview">

                                        <div class="d-grid pt-4 pb-4 gap-2 d-md-flex justify-content-md-center">
                                            <button class="btn btn-primary m-2 me-md-2" type="button">Complete Payment</button>
                                            <button class="btn btn-danger m-2" type="button">Cancel Order</button>
                                            <button class="btn btn-success m-2" type="button">Complete order</button>
                                            <button class="btn btn-secondary m-2" type="button">Print Receipt</button>
                                            <button class="btn btn-info m-2" type="button">Print Invoice</button>
                                        </div>

                                            
                                        
                                            <div class="row">
                                                <div class="col-lg-3 col-md-4 label ">Product</div>
                                                <div class="col-lg-9 col-md-8">Lozi</div>
                                            </div>
                                            <div class="row">
                                                <div class="col-lg-3 col-md-4 label ">Size</div>
                                                <div class="col-lg-9 col-md-8">400 grms</div>
                                            </div>
                                            <div class="row">
                                                <div class="col-lg-3 col-md-4 label ">Quantity</div>
                                                <div class="col-lg-9 col-md-8">150</div>
                                            </div>
                                            <div class="row">
                                                <div class="col-lg-3 col-md-4 label ">Date of Delivery</div>
                                                <div class="col-lg-9 col-md-8">10 July 2022</div>
                                            </div>
                                            <div class="row">
                                                <div class="col-lg-3 col-md-4 label ">Customer</div>
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
                                            <div class="row">
                                                <div class="col-lg-3 col-md-4 label">Status</div>
                                                <div class="col-lg-9 col-md-8"><span class="badge bg-info">Pending delivery</span></div>
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
                                                            <td> </td>
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
                                                            <td>400 g</td>
                                                            <td>150</td>
                                                            <td>25242AB</td>
                                                            <td>1,200,000</td>
                                                            
                                                           
                            
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
                                                            <th>Invoice Status</th>
                                                            
                            
                                                        </tr>
                                                    </thead>
                                                    <tbody>
                                                        <tr>
                                                            <td>34JN</td>
                                                            <td>Lozi</td>
                                                            <td>400 g</td>
                                                            <td>150</td>
                                                            <td>2145INV</td>
                                                            <td>0</td>
                                                            <td>20 June 2022</td>
                                                            <td>1,200,000</td>
                                                            <td><span class="badge bg-success">Paid</span></td>
                            
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
               
            </div>
        </div>
    </div>
</div>



<div class="row">
    <div class="col-12">
        <div class="card">
            <div class="card-header">
                <h3 class="card-title">All Orders</h3>
                <div class="card-tools">
                    <div class="input-group input-group-sm" style="width: 150px;">
                        <input type="text" name="table_search" class="form-control float-right" placeholder="Search">
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
                            <th>Order no</th>
                            <th>Customer</th>
                            <th>Phone</th>
                            <th>Product</th>
                            <th>Size</th>
                            <th>Quantity</th>
                            <th>Address</th>
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
                            <td>Shangani</td>
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
                            <td>Mchangani</td>
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
                            <td>Kiswandui</td>
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
                                <td>Mbuyuni</td>
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
                                    <tr>
                                        <td>21AP</td>
                                        <td>Yahya Said</td>
                                        <td>0777 123 654</td>
                                        <td>Njugu</td>
                                        <td>250 g</td>
                                        <td>500</td>
                                        <td>Daajani</td>
                                        <td>3 Jan 2022</td>
                                        <td><span class="badge bg-success">Completed</span></td>
                                        <td>
                                            <i href="" class="text-primary mr-2 fa-solid fa-pen-to-square"
                                                data-bs-toggle="modal" data-bs-target="#EditCustomer"></i>
                                            <i href="" class="text-warning fa-solid fa-magnifying-glass"
                                                data-bs-toggle="modal" data-bs-target="#ViewCustomer"></i>
                                        </td>
                                    
                                    <tr>
                                        <tr>
                                            <td>77MR</td>
                                            <td>Idarous Jamil</td>
                                            <td>0777 123 000</td>
                                            <td>Lozi</td>
                                            <td>400 g</td>
                                            <td>300</td>
                                            <td>Vuga</td>
                                            <td>3 July 2022</td>
                                            <td><span class="badge bg-secondary">Pending Payment</span></td>
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

<script>

    function calc(){
        var n1 = parseInt(document.getElementById('quantity').value);
        var n2 = parseInt(document.getElementById('amount_paid').value);
        var n3 = parseInt(document.getElementById('discount_amount').value);

        document.getElementById('total_required').value = (n1 * n2) - (n3 * n1) ;
    }
    
</script>
<script>
    function discountStatus(){

        var status = document.getElementById("discount_drop");
        if (status.value == "No")
        {
            // document.getElementById("discount_field").style.visibility="hidden"
            document.getElementById("discount_field").classList.remove("row")
            document.getElementById("discount_field").classList.add("d-none")
        } else {
            // document.getElementById("discount_field").style.visibility="visible"
            document.getElementById("discount_field").classList.remove("d-none")
            document.getElementById("discount_field").classList.add("row")
        }
    }
</script>

<script type="text/javascript">
    function addMoreOrder(){
        $('.productdiv').clone().appendTo('#moreproduct')
    }

    function removeOrder(){
        $('#moreproduct .productdiv').last().remove();
    }
</script>
@endsection