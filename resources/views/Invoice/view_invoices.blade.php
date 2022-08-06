@extends('layouts.master')

@section('content')


<section class="content-header">
    <div class="container-fluid">
        <div class="row mb-2">
            <div class="col-sm-6">
                <h1>Invoice</h1>
            </div>
        </div>
    </div>
</section>
<section class="content">
    <div class="container-fluid">
        <div class="row">
            <div class="col-12">
                
                <div class="invoice p-3 mb-3">

                    <div class="row">
                        <div class="col-12">
                            <h4>
                                <i class="fas fa-globe"></i>Al Qudaymy Halwa
                                <small class="float-right">Date: 1/1/2022</small>
                            </h4>
                        </div>

                    </div>

                    <div class="row invoice-info">
                        <div class="col-sm-4 invoice-col">
                            From
                            <address>
                                <strong>Al Qudaymy Halwa</strong><br>
                                Malindi, Funguni<br>
                                Zanzibar, 94107<br>
                                Phone: +255 777 412 431<br>
                                Email: gm@qudaymy.co.tz.com
                            </address>
                        </div>

                        <div class="col-sm-4 invoice-col">
                            To
                            <address>
                                <strong>Ally Omar</strong><br>
                                Mombasa, Fumba Rd<br>
                                Zanzibar, 94107<br>
                                Phone: +255 777 412 431<br>
                                Email: gm@qudaymy.co.tz.com
                            </address>
                        </div>

                        <div class="col-sm-4 invoice-col">
                            <b>Invoice #007612</b><br>
                            <br>
                            <b>Order ID:</b> 4F3S8J<br>
                            <b>Payment Due:</b> 07/07/2022<br>
                            <b>Account:</b> 968-34567
                            <b>Bank:</b> PBZ
                        </div>

                    </div>


                    <div class="row">
                        <div class="col-12 table-responsive">
                            <table class="table table-striped">
                                <thead>
                                <tr>
                                    <th>Serial #</th>
                                    <th>Product</th>
                                    <th>Size</th>
                                    <th>Quantity</th>
                                    <th>Kombe</th>
                                    <th>Subtotal</th>
                                </tr>
                                </thead>
                                <tbody>
                                
                                <tr>
                                    <td>247-925-726</td>
                                    <td>Korosho</td>
                                    <td>400 grms</td>
                                    <td>1500</td>
                                    <td> NO</td>
                                    <td> 3,000,000.00 TZS</td>
                                </tr>
                            
                                
                                </tbody>
                            </table>
                        </div>

                    </div>

                    <div class="row">

                        <div class="col-6">
                            <p class="lead">Payment Methods:</p>
                            <img src=" /img/visa.png" alt="Visa">
                            <img src=" /img/mastercard.png" alt="Mastercard">
                            <img src=" /img/american-express.png" alt="American Express">
                            <img src=" /img/paypal2.png" alt="Paypal">
                            <p class="text-muted well well-sm shadow-none" style="margin-top: 10px;">
                               
                            </p>
                        </div>

                        <div class="col-6">
                            <p class="lead">Amount Due 7/22/2022</p>
                            <div class="table-responsive">
                                <table class="table">
                                    <tbody><tr>
                                        <th style="width:50%">Subtotal:</th>
                                        <td>3,000,000.00 TZS</td>
                                    </tr>
                                    <tr>
                                        <th>Tax (9.3%)</th>
                                        <td>270,000.00 TZS</td>
                                    </tr>
                                    <tr>
                                        <th>Transportation:</th>
                                        <td>50,000.00 TZS</td>
                                    </tr>
                                    <tr>
                                        <th>Total:</th>
                                        <td>3,320,000.00 TZS</td>
                                    </tr>
                                    </tbody></table>
                            </div>
                        </div>

                    </div>


                    <div class="row no-print">
                        <div class="col-12">
                            <a href="invoice-print.html" rel="noopener" target="_blank" class="btn btn-default"><i class="fas fa-print"></i> Print</a>
                            <button type="button" class="btn btn-success float-right"><i class="far fa-credit-card"></i> Submit
                                Payment
                            </button>
                            <button type="button" class="btn btn-primary float-right" style="margin-right: 5px;">
                                <i class="fas fa-download"></i> Generate PDF
                            </button>
                        </div>
                    </div>
                </div>

            </div>
        </div>
    </div>
</section>




@endsection
