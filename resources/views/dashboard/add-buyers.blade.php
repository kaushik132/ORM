@extends('dashboard.layout.main')
@section('main-containers')
    <style>
        .pldr-input::placeholder {
            font-size: 16px;
            font-weight: 500;
            letter-spacing: 0.75px;
            color: grey;
        }
    </style>

    <div class="content-page">
        <div class="container-fluid">
            <div class="row">
                <div class="col-sm-12 col-lg-12 col-md-12">
                    <div class="card">
                        <div class="card-header d-flex justify-content-between">
                            <div class="header-title">
                                <h4 class="card-title">Orders Add</h4>
                            </div>
                        </div>
                        <form action="{{ route('buyers_adds') }}" method="POST">
                            @csrf
                            <div class="card-body">

                                <div class="input-group mb-4">
                                    <div class="input-group-prepend">
                                        <span class="input-group-text" id="basic-addon1"><i
                                                class="bi bi-person text-warning" style="font-size:18px"></i></span>
                                    </div>
                                    <select class="form-control pldr-input" name="cname" required>
                                        <option value="Default">Enter Client name</option>
                                        @foreach ($data as $data)
                                            <option value="{{ $data->name }}">{{ $data->name }}</option>
                                        @endforeach

                                    </select>
                                </div>  

                                <div class="input-group mb-4">
                                    <div class="input-group-prepend">
                                        <span class="input-group-text" id="basic-addon1"><i
                                                class="bi bi-envelope text-warning" style="font-size:18px"></i></span>
                                    </div>
                                    <input type="email" name="cemail" class="form-control"
                                       placeholder="Enter email id" aria-describedby="basic-addon1" required>
                                </div> 

                                <div class="input-group mb-4">
                                    <div class="input-group-prepend">
                                        <span class="input-group-text"  id="basic-addon1"><i
                                                class="bi bi-telephone-fill text-warning" style="font-size:18px"></i></span>
                                    </div>
                                    <input type="text" name="cphone" class="form-control" 
oninput="this.value = this.value.replace(/[^0-9+.]/g, '').replace(/(\..*?)\..*/g, '$1');" maxlength="10"
                                       placeholder="Enter phone number" aria-describedby="basic-addon1" required>
                                </div> 

                                <div class="input-group mb-4">
                                    <div class="input-group-prepend">
                                        <span class="input-group-text" id="basic-addon1"><i
                                                class="bi bi-geo-alt-fill text-warning" style="font-size:18px"></i></span>
                                    </div>
                                    <input type="text" name="caddress" class="form-control"
                                       placeholder="Enter address" aria-describedby="basic-addon1" required>
                                </div> 

                                <div class="input-group mb-4">
                                    <div class="input-group-prepend">
                                        <span class="input-group-text" id="basic-addon1"><i
                                                class="bi bi-geo-fill text-warning" style="font-size:18px"></i></span>
                                    </div>
                                    <input type="text" class="form-control" name="cpincode"
                                       placeholder="Enter zip code" aria-describedby="basic-addon1" required>
                                </div> 


                                <div class="input-group mb-4">
                                    <div class="input-group-prepend">
                                        <span class="input-group-text" id="basic-addon1">
                                            <i class="bi bi-box-fill text-warning" style="font-size:18px"></i>
                                        </span>
                                    </div>
                                    <select class="form-control pldr-input" name="pname" id="productSelect" required>
                                        <option value="">Enter Product name</option>
                                        @foreach ($product as $data)
                                            <option value="{{ $data->pname }}" data-price="{{ $data->pprice }}"
                                                data-discount="{{ $data->pdiscount }}">
                                                {{ $data->pname }}
                                            </option>
                                        @endforeach
                                    </select>
                                </div>

                                <div class="input-group mb-4">
                                    <div class="input-group-prepend">
                                        <span class="input-group-text" id="basic-addon1">
                                            <i class="bi bi-currency-pound text-warning" style="font-size:18px"></i>
                                        </span>
                                    </div>
                                    <input type="text" id="priceInput" name="price" class="form-control pldr-input"
                                        placeholder="Price" aria-label="Price" aria-describedby="basic-addon1" required
                                        readonly value="0"> <!-- Set a default price value here -->
                                </div>




                                <div class="input-group mb-4">
                                    <div class="input-group-prepend">
                                        <span class="input-group-text" id="basic-addon1">
                                            <i class="bi bi-tag text-warning" style="font-size:18px"></i>
                                        </span>
                                    </div>
                                    <input type="text" id="discountInput" name="dicount" class="form-control pldr-input"
                                        placeholder="Discount" aria-label="Discount" aria-describedby="basic-addon1"
                                        required readonly value="0"> <!-- Set a default discount value here -->
                                </div>

                                <div class="input-group mb-4">
                                    <div class="input-group-prepend">
                                        <span class="input-group-text" id="basic-addon1">
                                            <i class="bi bi-bag-plus-fill text-warning" style="font-size:18px"></i>
                                        </span>
                                    </div>
                                    <input type="number" id="quantityInput" name="quantity" class="form-control pldr-input"
                                        placeholder="Quantity" aria-label="Quantity" aria-describedby="basic-addon1"
                                        required min="1" value="0">
                                </div>

                               <!-- Total Price Field -->
<div class="input-group mb-4">
    <div class="input-group-prepend">
        <span class="input-group-text" id="basic-addon1">
            <i class="bi bi-currency-pound text-warning" style="font-size:18px"></i>
        </span>
    </div>
    <input type="text" id="totalPriceInput" name="total_price" class="form-control pldr-input" placeholder="Total Price"
        aria-label="Total Price" aria-describedby="basic-addon1" required readonly>
</div>



                                {{-- manager_role --}}
                                <input type="hidden" name="manager_role" value="{{ Auth::user()->manager_role }}"
                                    class="form-control pldr-input" placeholder="MR" aria-label="Username"
                                    aria-describedby="basic-addon1"required>

                                {{-- staff_role --}}
                                <input type="hidden" name="staff_role" value="{{ Auth::user()->id }}"
                                    class="form-control pldr-input" placeholder="SR" aria-label="Username"
                                    aria-describedby="basic-addon1"required>



                                    <div class="input-group mb-4">
                                        <div class="input-group-prepend">
                                            <span class="input-group-text" id="basic-addon1">
                                                <i class="bi bi-wallet2 text-warning" style="font-size:18px"></i>
                                            </span>
                                        </div>
                                        <select class="form-control pldr-input" name="payment" id="payment-method">
                                            <option value="Prepaid">Prepaid</option>
                                            <option value="COD">COD (cash on delivery)</option>
                                            <option value="EMI">EMI</option>
                                        </select>
                                    </div>


                                    <!-- Additional fields for EMI option -->
<div id="emi-fields" style="display: none;">
    <div class="mb-3">
        <label class="form-label">EMI Starting Date:</label>
        <input type="date" class="form-control" name="date" />
    </div>

 <!-- EMI Amount Field -->
<div  class="mb-3">
    <label class="form-label">EMI Amount:</label>
    <input type="text"  class="form-control" name="emi_amount" placeholder="EMI Amount" >
</div>


    <div class="mb-3">
        <label class="form-label">Transaction ID:</label>
        <input type="text" class="form-control" name="transaction_id" placeholder="Enter Transaction ID" />
    </div>
   <!-- Number of Installments Field  -->
<div id="installment-field" class="mb-3" >
    <label class="form-label">No. of Installments:</label>
    <input type="number" id="noOfInstallmentsInput" class="form-control" name="no_installments"
        placeholder="Enter Number of Installments" />
</div>
</div>

                                <input class="" type="submit" value="Submit"
                                    style="background-color:white; border:solid 1.5px blue; color:blue;padding-left:30px;padding-right:30px; padding-top:6px; padding-bottom:6px;border-radius:7px;font-size:16px;font-weight:500;letter-spacing:0.75px">

                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
    </div>
    </div>


    <script>
        document.getElementById('productSelect').addEventListener('change', function() {
            var selectedOption = this.options[this.selectedIndex];
            var price = selectedOption.getAttribute('data-price');
            var discount = selectedOption.getAttribute('data-discount');

            document.getElementById('priceInput').value = price ? price : '';
            document.getElementById('discountInput').value = discount ? discount : '';
        });
    </script>


    <script>
        // Function to calculate total price
        function calculateTotalPrice() {
            const price = parseFloat(document.getElementById('priceInput').value) || 0;
            const discount = parseFloat(document.getElementById('discountInput').value) || 0;
            const quantity = parseInt(document.getElementById('quantityInput').value) || 1;

            // Calculate discounted price per item
            const discountedPrice = price - discount;

            // Calculate total price
            const totalPrice = discountedPrice * quantity;

            // Update total price field
            document.getElementById('totalPriceInput').value = totalPrice.toFixed(2);
        }

        // Event listener for quantity change
        document.getElementById('quantityInput').addEventListener('input', calculateTotalPrice);

        // Initial calculation
        calculateTotalPrice();
    </script>

<script>
    // Listen for changes in the payment select field
    document.getElementById('payment-method').addEventListener('change', function () {
        var emiFields = document.getElementById('emi-fields');
        
        if (this.value === 'EMI') {
            emiFields.style.display = 'block'; // Show EMI fields
        } else {
            emiFields.style.display = 'none'; // Hide EMI fields
        }
    });
</script>



    <!-- Wrapper End-->
@endsection
