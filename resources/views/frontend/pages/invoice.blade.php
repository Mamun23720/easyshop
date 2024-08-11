@extends('frontend.master')

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
    <div class="invoice-container">
        <div class="header">
        <div><h1 class="mb-2" style="font-size: 200%; color:black;"><b>Invoice</b></h1></div>
            <p>Order Date: August 12, 2024</p>
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
                Customer Name<br>
                Customer Address<br>
                Email: Customer email<br>
                Phone: Customer mobile number
            </div>
        </div>

        <div class="order-summary">
            <h2 class="mb-2" style="font-size: 130%; color:black; text-align:center"><b>Order Summary</b></h2>
            <table class="table">
                <thead>
                    <tr>
                        <th>Item Description</th>
                        <th>Quantity</th>
                        <th>Unit Price</th>
                        <th>Total</th>
                    </tr>
                </thead>
                <tbody>
                    <tr>
                        <td>Product Name</td>
                        <td>0</td>
                        <td>00.00 BDT</td>
                        <td>00.00 BDT</td>
                    </tr>
                    
                </tbody>
                <tfoot>
                    <tr>
                        <td colspan="3" class="total">Subtotal</td>
                        <td>00.00 BDT</td>
                    </tr>
                    <tr>
                        <td colspan="3" class="total">Tax (0%)</td>
                        <td>00.00 BDT</td>
                    </tr>
                    <tr>
                        <td colspan="3" class="total">Total</td>
                        <td>00.00 BDT</td>
                    </tr>
                </tfoot>
            </table>
        </div>

        <br><br>
        <div class="footer">
            <p>Thank you for your business!</p>
            <p>If you have any questions, please contact us at sajibVaiya@gmail.com or 01627736636.</p>
        </div>
    </div>

    
    <a style="margin-left: 950px" class="btn btn-danger mt-3" href="#">Print</a>

</body>
</html>


@endsection