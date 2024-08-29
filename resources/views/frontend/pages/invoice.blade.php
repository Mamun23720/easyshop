@extends('frontend.master2')

@section('content')

<body>
<style>
        .invoice-container {
            max-width: 800px;
            margin: 0 auto;
            padding: 20px;
            border: 3px solid;
            border-radius: 5px;
            background-color: #f4f4f4;

        }
        .header, .footer {
            text-align: center;
            margin-bottom: 20px;
        }
        .header h1 {
            margin: 0;
        }
        .address, .order-summary {
            margin-bottom: 20px;
        }
        .address div, .order-summary div {
            margin-bottom: 10px;
        }
        .table {
            width: 100%;
            border-collapse: collapse;
            margin-bottom: 20px;


        }
        .table th, .table td {
            border: 1px solid #ddd;
            padding: 8px;
            text-align: left;
            border: 3px solid;
        }
        .table th {
            background-color: #f4f4f4;
            border: 3px solid;
        }
        .total {
            text-align: right;
            font-weight: bold;
            border: 3px solid;
        }
        .footer p {
            margin: 0;
            font-size: 0.9em;

        }
    </style>
<div class="container d-flex">
<a style="margin-left: 49%" class="btn btn-success mb-3 mt-3" onclick="printReport()" >Print</a>
</div>


{{-- Start Print Area --}}


<div class="invoice-container" id="printArea">
        <div class="header">
        <div><h1 class="mb-2" style="font-size: 200%; color:black;"><b>Invoice</b></h1></div>
            <p>Order Date: {{$order->created_at}}</p>
        </div>

        <div class="address">
            <div>
                <strong>Easy Shop</strong><br>
                3/D, Staff Quarter<br>
                Battery Goli Tejgaon, Dhaka<br>
                Email: sajibVaiya@gmail.com<br>
                Phone: 01627736636
            </div>
            <div>
                <strong>Bill To:</strong><br>
                Customer Name: {{$order->receiver_name}}<br>
                Customer Address: {{$order->receiver_address}}<br>
                Email: Customer email: {{$order->receiver_email}}<br>
                Phone: Customer mobile number: {{$order->receiver_mobile}}
            </div>
        </div>

        <div class="order-summary">
            <h2 class="mb-2" style="font-size: 130%; color:black; text-align:center"><b>Order Summary</b></h2>
            <table class="table">
                <thead>
                    <tr>
                        <th style=" color:black; ">Item Name</th>
                        <th style=" color:black; text-align:center" >Quantity</th>
                        <th style=" color:black; text-align:center" >Unit Price</th>
                        <th style=" color:black; text-align:center" >Subtotal</th>
                    </tr>
                </thead>
                <tbody>

                @foreach ($order->orderDetails as $item)


                    <tr>
                        <td>{{$item->product->name}}</td>
                        <td style="text-align:center" >{{$item->product_quantity}}</td>
                        <td style="text-align:center" >{{$item->product_unit_price}}.00</td>
                        <td style="text-align:right" >{{$item->subtotal}}.00</td>
                    </tr>


                @endforeach

                </tbody>
                <tfoot>
                    <tr>
                        <td colspan="3" class="total">Tax (0%)</td>
                        <td style="text-align:right" >00.00</td>
                    </tr>
                    <tr>
                        <td colspan="3" class="total">Total</td>
                        <td style="text-align:right" >{{$order->total_amount}}.00</td>
                    </tr>
                </tfoot>
            </table>
        </div>

        <br><br>
        <div class="footer">
            <p>Thank you for your interest!</p>
            <p>If you have any questions, please contact us at sajibVaiya@gmail.com or 01627736636.</p>
        </div>
    </div>


{{-- End Print Area --}}


<script type="text/javascript">
    function printReport()
    {
        var printContents = document.getElementById("printArea").innerHTML;
			var originalContents = document.body.innerHTML;

			document.body.innerHTML = printContents;

			window.print();

			document.body.innerHTML = originalContents;
    }
</script>

</body>
</html>


@endsection
