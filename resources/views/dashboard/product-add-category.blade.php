@extends('dashboard.layout.main')
@section('main-containers')

 
      <div class="content-page">
      <div class="container-fluid">
         <div class="row">
            <div class="col-sm-12 col-lg-12 col-md-12">
               <div class="card">
                  <div class="card-header d-flex justify-content-between">
                     <div class="header-title">
                        <h4 class="card-title">Add Product</h4>
                     </div>
                  <div class="header-action">
                           <i data-toggle="collapse" data-target="#input-group-1" aria-expanded="false">
                              <svg width="20" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                                 <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M10 20l4-16m4 4l4 4-4 4M6 16l-4-4 4-4" />
                              </svg>
                           </i>
                        </div>
                  </div>
                  <form action="{{route('product_add_categorys')}}" method="POST" enctype="multipart/form-data">
                     @csrf
                  <div class="card-body">
                    
                     <div class="input-group mb-4">
                        <div class="input-group-prepend">
                           <span class="input-group-text" id="basic-addon1">Product Name</span>
                        </div>
                        <input type="text" name="pname" class="form-control" placeholder="Name" aria-label="Username"
                           aria-describedby="basic-addon1" required>
                     </div>

                     <div class="input-group mb-4">
                      <div class="input-group-prepend">
                         <span class="input-group-text" id="basic-addon1">Product Image</span>
                      </div>
                     
                      <input type="file" name="photo" class="form-control " placeholder="Image" 
                         style="padding-bottom: 60px" required>
                        
                   </div>

                   <div class="input-group mb-4">
                    <div class="input-group-prepend">
                       <span class="input-group-text" id="basic-addon1">Product Price</span>
                    </div>
                    <input type="text" name="pprice" class="form-control" placeholder="Price" aria-label="Username"
                       aria-describedby="basic-addon1" required>
                 </div>

                 <div class="input-group mb-4">
                  <div class="input-group-prepend">
                     <span class="input-group-text" id="basic-addon1">Product Discount</span>
                  </div>
                  <input type="text" name="pdiscount" class="form-control" placeholder="Discount" aria-label="Username"
                     aria-describedby="basic-addon1" required>
               </div>

           
                
                  <input type="hidden" name="manager_id" value="{{Auth::user()->id}}" class="form-control" placeholder="Discount" aria-label="Username"
                     aria-describedby="basic-addon1" required>
       



               <div class="input-group mb-4">
                <div class="input-group-prepend">
                   <span class="input-group-text" id="basic-addon1">Product Description</span>
                </div>
                <input type="text" name="pdescription" class="form-control" placeholder="Description" aria-label="Username"
                   aria-describedby="basic-addon1" required>
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