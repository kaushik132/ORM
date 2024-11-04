{{-- <!DOCTYPE html>
<html>
<head>
    <title>Laravel 10 Generate PDF Example - fundaofwebit.com</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-KK94CHFLLe+nY2dmCWGMq91rCGa5gtU4mk92HdvYe+M/SXH301p5ILy+dN9+nJOZ" crossorigin="anonymous">
</head>
<body>

    <style>
        table{
            width:100%
        }
    </style>

    <h1>{{ $title }}</h1>
    <p>{{ $date }}</p>
    <br/>
    <br/>
<div class="table-responsiove">
    <table class="table table-bordered">
        <thead>
            <tr>
                <th>Order ID</th>
                <th>Customer Name</th>
                <th>Product Name</th>
                <th>Product Price</th>
                <th>Product Discount</th>
                <th>Product Quantity</th>
                <th>Payment Type</th>
                <th>Total Price</th>


@if ($client->date != null)
    
             <th>EMI Starting Date</th>
                <th>EMI Total Amount</th>
                <th>EMI Transation ID</th>
                <th>EMI Installment Amount</th>
                <th>NO Installment </th>
                @endif   
           
                
            </tr>
        </thead>
        <tbody>
    
            <tr>
                <td></td>
                <td>{{ $client->cname }}</td>
                <td>{{ $client->pname }}</td>
                <td>£{{ $client->price }}</td>
                <td>{{ $client->dicount }}%</td>
                <td>{{ $client->quantity }}</td>
                <td>{{ $client->payment }}</td>
                <td>£{{ $client->total_price}}</td>
               
                @if ($client->date != null)
                <td>{{ $client->date}}</td>
                <td>£{{ $client->emi_amount}}</td>
                <td>{{ $client->transaction_id}}</td>
                <td>£{{ $client->installment_amount}}</td>
                <td>{{ $client->no_installment}}</td>
                @endif
                
                
            </tr>
         
        </tbody>
    </table>
</div>
</body>
</html> --}}


<!DOCTYPE html>
<html lang="en">
<head>
    <meta http-equiv="Content-Type" content="text/html; charset=utf-8">
    <title>Invoice #6</title>

    <style>
        html,
        body {
            margin: 10px;
            padding: 10px;
            font-family: sans-serif;
        }
        h1,h2,h3,h4,h5,h6,p,span,label {
            font-family: sans-serif;
        }
        table {
            width: 100%;
            border-collapse: collapse;
            margin-bottom: 0px !important;
        }
        table thead th {
            height: 28px;
            text-align: left;
            font-size: 16px;
            font-family: sans-serif;
        }
        table, th, td {
            border: 1px solid #ddd;
            padding: 8px;
            font-size: 14px;
        }

        .heading {
            font-size: 24px;
            margin-top: 12px;
            margin-bottom: 12px;
            font-family: sans-serif;
        }
        .small-heading {
            font-size: 18px;
            font-family: sans-serif;
        }
        .total-heading {
            font-size: 18px;
            font-weight: 700;
            font-family: sans-serif;
        }
        .order-details tbody tr td:nth-child(1) {
            width: 20%;
        }
        .order-details tbody tr td:nth-child(3) {
            width: 20%;
        }

        .text-start {
            text-align: left;
        }
        .text-end {
            text-align: right;
        }
        .text-center {
            text-align: center;
        }
        .company-data span {
            margin-bottom: 4px;
            display: inline-block;
            font-family: sans-serif;
            font-size: 14px;
            font-weight: 400;
        }
        .no-border {
            border: 1px solid #fff !important;
        }
        .bg-blue {
            background-color: #414ab1;
            color: #fff;
        }
        .barcode-img{
            width:100%;
            max-width:100px;
        }
    </style>
</head>
<body>
    @php
    // Get the current date and time
    $currentDate = \Carbon\Carbon::now()->setTimezone('Asia/Kolkata'); // e.g., 'Asia/Kolkata'

    $invoiceId = rand(1, 10000); 
@endphp
    <table class="order-details">
        <thead>
            <tr>
                <th width="50%" colspan="2">
                        <h2 class="text-start" style="color:rgb(2, 2, 160);"><b>OMS</b></h2>
                      
                </th>

                <th width="50%" colspan="2" class="text-end company-data">
                    <span>Invoice Id: #{{ $invoiceId }}</span> <br>
                    <span>Date: {{ $currentDate->format('d / m / Y') }}</span> <br>
                    <span>Zip code : 560077</span> <br>
                    <span>Address: #555, Main road, shivaji nagar, Bangalore, India</span> <br>
                </th>
            </tr>
            <tr class="bg-blue">
                <th width="50%" colspan="2">Order Details</th>
                <th width="50%" colspan="2">User Details</th>
            </tr>
        </thead>
        <tbody>
            <tr>
                <td>Order Id:</td>
                <td>{{ $client->order_id }}</td>

                <td>Full Name:</td>
                <td>{{ $client->cname }}</td>
            </tr>
            <tr>
             
                <td>Payment Mode:</td>
                <td>{{ $client->payment }}</td>

                <td>Email Id:</td>
                <td>{{ $client->cemail }}</td>
            </tr>
            <tr>
                <td>Ordered Date:</td>
                <td>{{ \Carbon\Carbon::parse($client->created_at)->format('d-m-Y h:i A') }}
                </td>

                <td>Phone:</td>
                <td>{{ $client->cphone }}</td>
             
            </tr>
            <tr>
                <td>Address:</td>
                <td>{{ $client->caddress }}</td>

                
                <td>Pin code:</td>
                <td>{{ $client->cpincode }}</td>
            </tr>
        </tbody>
    </table>

    <table>
        <thead>
            <tr>
                <th class="no-border text-start heading" colspan="5">
                    Order Items
                </th>
            </tr>
            <tr class="bg-blue">
                <th>S.No.</th>
                <th>Product Name</th>
                <th>Price</th>
                <th>Discount</th>
                <th>Quantity</th>
                <th>Total</th>
            </tr>
        </thead>
        <tbody>
            <tr>
                <td width="10%">1</td>
                <td>
                    {{ $client->pname }}
                </td>
                <td width="10%">£{{ $client->price }}</td>
                <td width="10%">{{ $client->dicount }}%</td>
                <td width="10%">{{ $client->quantity }}</td>
                <td width="15%" class="fw-bold">£{{ $client->total_price}}</td>
            </tr>
   
            <tr>
                <td colspan="5" class="total-heading">Total Amount - <small>Inc. all vat/tax</small> :</td>
                <td colspan="1" class="total-heading">£{{ $client->total_price}}</td>
            </tr>
        </tbody>
    </table>


</body>
</html>