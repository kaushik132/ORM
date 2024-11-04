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
                  </div>
                  <form action="{{url('client_update/'.$client->id )}}" method="POST">
                     @csrf
                  <div class="card-body">
                   
                     <div class="input-group mb-4">
                        <div class="input-group-prepend">
                           <span class="input-group-text" id="basic-addon1">Client Name</span>
                        </div>
                        <input type="text" name="name" class="form-control" placeholder="Name" aria-label="Username"
                          value="{{$client->name}}" aria-describedby="basic-addon1" required>
                     </div>
                    
                     

                   <div class="input-group mb-4">
                    <div class="input-group-prepend">
                       <span class="input-group-text" id="basic-addon1">Client Age</span>
                    </div>
                    <input type="text" name="age" class="form-control" placeholder="Age" aria-label="Username"
                    value="{{$client->age}}"  aria-describedby="basic-addon1" required>
                 </div>

                 <div class="input-group mb-4">
                  <div class="input-group-prepend">
                     <span class="input-group-text" id="basic-addon1">Client Country</span>
                  </div>
                  <input type="text" name="country" class="form-control" placeholder="Country" aria-label="Username"
                  value="{{$client->country}}" aria-describedby="basic-addon1" required>
               </div>

               <div class="input-group mb-4">
                <div class="input-group-prepend">
                   <span class="input-group-text" id="basic-addon1">Client Email</span>
                </div>
                <input type="text" name="email" class="form-control" placeholder="Email" aria-label="Username"
                value="{{$client->email}}"  aria-describedby="basic-addon1" required>
             </div>

             <div class="input-group mb-4">
              <div class="input-group-prepend">
                 <span class="input-group-text" id="basic-addon1">Client Phone Number</span>
              </div>
              <input type="text" name="number" class="form-control" placeholder="Phone Number" aria-label="Username"
              value="{{$client->number}}" aria-describedby="basic-addon1"required>
           </div>

             <div class="input-group mb-4">
              <div class="input-group-prepend">
                 <span class="input-group-text" id="basic-addon1">Client Address</span>
              </div>
              <input type="text" name="address" class="form-control" placeholder="Address" aria-label="Username"
              value="{{$client->address}}" aria-describedby="basic-addon1"required>
           </div>
                    
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
    <!-- Wrapper End-->
    @endsection