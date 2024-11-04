@extends('dashboard.layout.main')
@section('main-containers')

 
      <div class="content-page">
      <div class="container-fluid">
         <div class="row">
            <div class="col-sm-12 col-lg-12 col-md-12">
               <div class="card">
                  <div class="card-header d-flex justify-content-between">
                     <div class="header-title">
                        <h4 class="card-title">Reject Product</h4>
                     </div>
                  <div class="header-action">
                           <i data-toggle="collapse" data-target="#input-group-1" aria-expanded="false">
                              <svg width="20" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                                 <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M10 20l4-16m4 4l4 4-4 4M6 16l-4-4 4-4" />
                              </svg>
                           </i>
                        </div>
                  </div>
                  <form action="{{url('reject_product_update/'.$product->id)}}" method="POST" enctype="multipart/form-data">
                     @csrf
                  <div class="card-body">
                     <div class="collapse" id="input-group-1">
                           <div class="card"><kbd class="bg-dark"><pre id="default" class="text-white"><code>
&#x3C;div class=&#x22;input-group mb-4&#x22;&#x3E;
   &#x3C;div class=&#x22;input-group-prepend&#x22;&#x3E;
      &#x3C;span class=&#x22;input-group-text&#x22; id=&#x22;basic-addon1&#x22;&#x3E;@&#x3C;/span&#x3E;
   &#x3C;/div&#x3E;
   &#x3C;input type=&#x22;text&#x22; class=&#x22;form-control&#x22; placeholder=&#x22;Username&#x22; aria-label=&#x22;Username&#x22;
      aria-describedby=&#x22;basic-addon1&#x22;&#x3E;
&#x3C;/div&#x3E;
&#x3C;div class=&#x22;input-group mb-4&#x22;&#x3E;
   &#x3C;input type=&#x22;text&#x22; class=&#x22;form-control&#x22; placeholder=&#x22;Recipient&#x27;s username&#x22;
      aria-label=&#x22;Recipient&#x27;s username&#x22; aria-describedby=&#x22;basic-addon2&#x22;&#x3E;
   &#x3C;div class=&#x22;input-group-append&#x22;&#x3E;
      &#x3C;span class=&#x22;input-group-text&#x22; id=&#x22;basic-addon2&#x22;&#x3E;@example.com&#x3C;/span&#x3E;
   &#x3C;/div&#x3E;
&#x3C;/div&#x3E;
&#x3C;label for=&#x22;basic-url&#x22;&#x3E;Your URL&#x3C;/label&#x3E;
&#x3C;div class=&#x22;input-group mb-3&#x22;&#x3E;
   &#x3C;div class=&#x22;input-group-prepend&#x22;&#x3E;
      &#x3C;span class=&#x22;input-group-text&#x22; id=&#x22;basic-addon3&#x22;&#x3E;https://example.com/users/&#x3C;/span&#x3E;
   &#x3C;/div&#x3E;
   &#x3C;input type=&#x22;text&#x22; class=&#x22;form-control&#x22; id=&#x22;basic-url&#x22; aria-describedby=&#x22;basic-addon3&#x22;&#x3E;
&#x3C;/div&#x3E;
&#x3C;div class=&#x22;input-group mb-4&#x22;&#x3E;
   &#x3C;div class=&#x22;input-group-prepend&#x22;&#x3E;
      &#x3C;span class=&#x22;input-group-text&#x22;&#x3E;$&#x3C;/span&#x3E;
   &#x3C;/div&#x3E;
   &#x3C;input type=&#x22;text&#x22; class=&#x22;form-control&#x22; aria-label=&#x22;Amount (to the nearest dollar)&#x22;&#x3E;
   &#x3C;div class=&#x22;input-group-append&#x22;&#x3E;
      &#x3C;span class=&#x22;input-group-text&#x22;&#x3E;.00&#x3C;/span&#x3E;
   &#x3C;/div&#x3E;
&#x3C;/div&#x3E;
&#x3C;div class=&#x22;input-group&#x22;&#x3E;
   &#x3C;div class=&#x22;input-group-prepend&#x22;&#x3E;
      &#x3C;span class=&#x22;input-group-text text-area&#x22;&#x3E;With textarea&#x3C;/span&#x3E;
   &#x3C;/div&#x3E;
   &#x3C;textarea class=&#x22;form-control&#x22; aria-label=&#x22;With textarea&#x22;&#x3E;&#x3C;/textarea&#x3E;
&#x3C;/div&#x3E;
</code></pre></kbd></div>
                        </div>
                     <div class="input-group mb-4">
                        <div class="input-group-prepend">
                           <span class="input-group-text" id="basic-addon1">Reject Product Name</span>
                        </div>
                        <input type="text" name="prname" class="form-control" placeholder="Name" aria-label="Username"
                         value="{{$product->prname}}"  aria-describedby="basic-addon1" required>
                     </div>

                     <div class="input-group mb-4">
                      <div class="input-group-prepend">
                         <span class="input-group-text" id="basic-addon1">Reject Product Image</span>
                      </div>
                      <input type="file" name="photo" class="form-control" placeholder="Image" aria-label="Username"
                         aria-describedby="basic-addon1" >
                   </div>

                   <div class="input-group mb-4">
                    <div class="input-group-prepend">
                       <span class="input-group-text" id="basic-addon1">Reject Product Price</span>
                    </div>
                    <input type="text" name="prprice" class="form-control" placeholder="Price" aria-label="Username"
                    value="{{$product->prprice}}"  aria-describedby="basic-addon1" required>
                 </div>

                 <div class="input-group mb-4">
                  <div class="input-group-prepend">
                     <span class="input-group-text" id="basic-addon1">Reject Product Discount</span>
                  </div>
                  <input type="text" name="prdiscount" class="form-control" placeholder="Discount" aria-label="Username"
                  value="{{$product->prdiscount}}" aria-describedby="basic-addon1" required>
               </div>

               <div class="input-group mb-4">
                <div class="input-group-prepend">
                   <span class="input-group-text" id="basic-addon1">Reject Product Reason</span>
                </div>
                <input type="text" name="prdescription" class="form-control" placeholder="Description" aria-label="Username"
                value="{{$product->prdescription}}"   aria-describedby="basic-addon1" required>
             </div>

             <input class="" type="submit" value="Submit" style="background-color:white; border:solid 1.5px blue; color:blue;padding-left:30px;padding-right:30px; padding-top:6px; padding-bottom:6px;border-radius:7px;font-size:16px;font-weight:500;letter-spacing:0.75px">
                   
                  </div>
               </form>

               </div>
            </div>
         </div>
      </div>
      </div>
    </div>
    <!-- Wrapper End-->
    @endsection