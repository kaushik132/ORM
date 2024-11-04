@extends('dashboard.layout.main')
@section('main-containers')

     
      <div class="content-page">
      <div class="container-fluid">
         <div class="row">
            <div class="col-sm-12 col-lg-12 col-md-12">
               <div class="card">
                  <div class="card-header d-flex justify-content-between">
                     <div class="header-title">
                        <h4 class="card-title">Client Add</h4>
                     </div>
                  <div class="header-action">
                           <i data-toggle="collapse" data-target="#input-group-1" aria-expanded="false">
                              <svg width="20" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                                 <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M10 20l4-16m4 4l4 4-4 4M6 16l-4-4 4-4" />
                              </svg>
                           </i>
                        </div>
                  </div>
                  <form action="{{url('buyers_update/'.$client->id )}}" method="POST">
                     @csrf
                  <div class="card-body">
               
                     <div class="input-group mb-4">
                        <div class="input-group-prepend">
                           <span class="input-group-text" id="basic-addon1">Client Name</span>
                        </div>
                        <input type="text" name="cname" class="form-control" placeholder="Name" aria-label="Username"
                          value="{{$client->cname}}" aria-describedby="basic-addon1" required>
                     </div>
                     <div class="input-group mb-4">
                        <div class="input-group-prepend">
                           <span class="input-group-text" id="basic-addon1">Email ID</span>
                        </div>
                        <input type="email" name="cemail" value="{{$client->cemail}}" class="form-control" placeholder="Email Id" aria-label=""
                           aria-describedby="basic-addon1" required>
                     </div>
                     <div class="input-group mb-4">
                        <div class="input-group-prepend">
                           <span class="input-group-text" id="basic-addon1">Phone Number</span>
                        </div>
                        <input type="text" name="cphone" maxlength="10" value="{{$client->cphone}}"
                        oninput="this.value = this.value.replace(/[^0-9+.]/g, '').replace(/(\..*?)\..*/g, '$1');" class="form-control" placeholder="Phone number" aria-label=""
                           aria-describedby="basic-addon1" required>
                     </div>
                     <div class="input-group mb-4">
                        <div class="input-group-prepend">
                           <span class="input-group-text" id="basic-addon1">Address</span>
                        </div>
                        <input type="text" name="caddress" value="{{$client->caddress}}" class="form-control" placeholder="Address" aria-label=""
                           aria-describedby="basic-addon1" required>
                     </div>
                     <div class="input-group mb-4">
                        <div class="input-group-prepend">
                           <span class="input-group-text" id="basic-addon1">Zip code</span>
                        </div>
                        <input type="text" name="cpincode" value="{{$client->cpincode}}" class="form-control" placeholder="Zip code" aria-label=""
                           aria-describedby="basic-addon1" required>
                     </div>

                   <div class="input-group mb-4">
                    <div class="input-group-prepend">
                       <span class="input-group-text" id="basic-addon1">Buyers Product</span>
                    </div>
                    <input type="text" name="pname" class="form-control" placeholder="Age" aria-label="Username"
                    value="{{$client->pname}}"  aria-describedby="basic-addon1" required>
                 </div>

                 <div class="input-group mb-4">
                  <div class="input-group-prepend">
                     <span class="input-group-text" id="basic-addon1">Price</span>
                  </div>
                  <input type="text" name="price" class="form-control" placeholder="price" aria-label="Username"
                  value="{{$client->price}}" aria-describedby="basic-addon1" required>
               </div>

               <div class="input-group mb-4">
                <div class="input-group-prepend">
                   <span class="input-group-text" id="basic-addon1">Dicount</span>
                </div>
                <input type="text" name="dicount" class="form-control" placeholder="dicount" aria-label="Username"
                value="{{$client->dicount}}"  aria-describedby="basic-addon1" required>
             </div>

             <div class="input-group mb-4">
              <div class="input-group-prepend">
                 <span class="input-group-text" id="basic-addon1">Quantity</span>
              </div>
              <input type="text" name="quantity" class="form-control" placeholder="Phone quantity" aria-label="Username"
              value="{{$client->quantity}}" aria-describedby="basic-addon1"required>
           </div>

           <div class="input-group mb-4">
            <div class="input-group-prepend">
               <span class="input-group-text" id="basic-addon1">Payment</span>
            </div>
            <input type="text" name="payment" class="form-control" placeholder="Phone payment" aria-label="Username"
            value="{{$client->payment}}" aria-describedby="basic-addon1"required>
         </div>


         


         @if ($client->transaction_id != null)

         {{--EMI section Start  --}}
         <div class="input-group mb-4">
            <div class="input-group-prepend">
               <span class="input-group-text" id="basic-addon1">EMI Starting Date:</span>
            </div>
            <input type="text" name="date" class="form-control" placeholder="EMI Starting Date" aria-label="Username"
            value="{{$client->date}}" aria-describedby="basic-addon1">
         </div> 

         <div class="input-group mb-4">
            <div class="input-group-prepend">
               <span class="input-group-text" id="basic-addon1">EMI Amount:</span>
            </div>
            <input type="text" id="emi_amount" name="emi_amount" class="form-control" placeholder="EMI Amount"
               value="{{$client->emi_amount}}" aria-describedby="basic-addon1" readonly>
         </div>

           <div class="input-group mb-4">
            <div class="input-group-prepend">
               <span class="input-group-text" id="basic-addon1">Transaction ID:</span>
            </div>
            <input type="text" name="transaction_id" class="form-control" placeholder="Transaction ID" aria-label="Username"
            value="{{$client->transaction_id}}" aria-describedby="basic-addon1">
         </div>

         <div class="input-group mb-4">
            <div class="input-group-prepend">
               <span class="input-group-text" id="basic-addon1">No. of Installments:</span>
            </div>
            <input type="number" id="no_installments" name="no_installments" class="form-control" 
                   placeholder="No. of Installments:" value="{{$client->no_installments}}" aria-describedby="basic-addon1">
        </div>


         <div class="input-group mb-4">
            <div class="input-group-prepend">
               <span class="input-group-text" id="basic-addon1">Installment Amount:</span>
            </div>
            <input type="text" value="{{$client->installment_amount}}" name="installment_amount" class="form-control" placeholder="Installment Amount"
            {{-- id="installment_amount" --}}
              aria-describedby="basic-addon1">
         </div>


       <!-- Assuming $client->installments is an array of selected installment numbers -->
<input type="hidden" id="existing_installments" value='@json($client->installments)'>

         
         <div  id="checkbox-container" class="mt-3"></div>

         {{-- end emi section  --}}
             
         @else
             
         @endif
        

  

      
                    
           <input class="btn btn-primary" type="submit" value="Submit">
                        
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
      // Fixed total EMI Amount
      const totalEmiAmount = 840;
   
      // Function to update installment amount based on no_installments
      const updateInstallmentAmount = () => {
         const noInstallments = parseInt(document.getElementById('no_installments').value);
         if (noInstallments > 0) {
            const installmentAmount = (totalEmiAmount / noInstallments).toFixed(2);
            document.getElementById('installment_amount').value = installmentAmount; // Update installment amount
         } else {
            document.getElementById('installment_amount').value = ''; // Clear installment amount if invalid input
         }
      };
   
      // Initial calculation based on initial no_installments value
      updateInstallmentAmount();
   
      document.getElementById('no_installments').addEventListener('input', updateInstallmentAmount);
      
      
      
      
         </script>

<script>
   document.getElementById('no_installments').addEventListener('input', function() {
       const container = document.getElementById('checkbox-container');
       container.innerHTML = ''; // Clear previous checkboxes
       
       const noInstallments = parseInt(this.value) || 0; // Get the entered number of installments
       const existingInstallments = JSON.parse(document.getElementById('existing_installments').value || "[]");

       for (let i = 1; i <= noInstallments; i++) {
           // Create checkbox
           const checkbox = document.createElement('input');
           checkbox.type = 'checkbox';
           checkbox.id = `installment_${i}`;
           checkbox.name = 'installments[]';
           checkbox.value = i;

           // Check if this checkbox value is in the existing installments and mark it as checked
           if (existingInstallments.includes(i)) {
               checkbox.checked = true;
           }

           // Create label
           const label = document.createElement('label');
           label.htmlFor = `installment_${i}`;
           label.innerText = ` Installment ${i} `;

           // Append checkbox and label to container
           container.appendChild(checkbox);
           container.appendChild(label);
           label.style.marginRight = '30px'; 

           
       }
   });

   // Trigger the input event on page load to display old values
   document.getElementById('no_installments').dispatchEvent(new Event('input'));
</script>

    
  
    @endsection

    