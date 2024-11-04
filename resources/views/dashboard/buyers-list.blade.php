@extends('dashboard.layout.main')
@section('main-containers')
     
      <div class="content-page">
      <div class="container-fluid">
         <div class="row">
            <div class="col-sm-12">
               <div class="card">
                  <div class="card-header d-flex justify-content-between">
                     <div class="header-title">
                        <h4 class="card-title">Buyers Table List</h4>
                     </div>
                  <div class="header-action">
                           <i data-toggle="collapse" data-target="#edit-1" aria-expanded="false">
                              <svg width="20" height="20" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                                 <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M10 20l4-16m4 4l4 4-4 4M6 16l-4-4 4-4" />
                              </svg>
                           </i>
                        </div>
                  </div>
                  <div class="card-body">
                   
                     <div class="table-editable">
                        <form action="{{url('search_buyer')}}" method="GET">
                           <div class="input-group rounded">
                              <input type="search" class="form-control rounded" name="search" placeholder="Search....." aria-label="Search" aria-describedby="search-addon" value="{{  isset($search) ? $search : ''}}"/>
                      
                              </span>
                            </div>    
                           </form> 
                        {{-- <span class="table-add float-right mb-3 mr-2">
                        
                        </span> --}}
                        <a href="{{url('buyers')}}"><div class="mb-3" style="text-align:end"><button class="btn btn-sm bg-primary mt-3"><i
                           class="ri-add-fill"><span class="pl-1" style="font-size:16px"><i class="bi bi-plus"></i> Add New</span></i>
                        </button></div></a>
                        <div class="table-responsive">
                        <table class="table table-bordered table-responsive-md table-striped text-center">
                           <thead>
                              <tr>
                                 <th>Order ID</th>
                                 <th>Buyers Name</th>
                                 <th>Buyers Product</th>
                                 <th>Buyers price</th>
                                 <th>Buyers Discount</th>
                                 <th>Buyers Quantity</th>
                                 <th>Buyers Total Price</th>
                                 <th>Buyers Payment</th>
                                 <th>Staff Name</th>
                                 <th>Download PDF</th>
                                 
                                 <th>Action</th>
                              </tr>
                           </thead>
                           <tbody>
                              @foreach ($client as $clients)
                                  
                         @if (Auth::user()->id == $clients->staff_role || Auth::user()->id == $clients->manager_role || Auth::user()->id == $clients->admin_role)
                         <tr>
                           <td contenteditable="true">{{$clients->order_id}}</td>
                           <td contenteditable="true">{{$clients->cname}}</td>
                           <td contenteditable="true">{{$clients->pname}}</td>
                           <td contenteditable="true">£{{$clients->price}}</td>
                           <td contenteditable="true">{{$clients->dicount}}%</td>
                           <td contenteditable="true">{{$clients->quantity}}</td>
                           <td contenteditable="true">£{{$clients->total_price}}</td>
                           <td contenteditable="true">{{$clients->payment}}</td>
                           <td contenteditable="true">{{$clients->userstaff->name}}</td>
                           <td  style="background-color: rgb(200,202,240)">
                                 <a href="{{url('generate-pdf/'.$clients->id)}}">Download pdf</a>
                           </td>
                           
                         
                           
                           <td style="display: flex;justify-content:center;margin-top:23px"> 
                              <a href="{{ url('buyers_show/'.$clients->id)}}"><i class="bi bi-eye-fill text-primary" style="font-size:15px"></i></a>
                              <a href="{{ url('buyers_edit/'.$clients->id)}}"><i class="bi bi-pencil-square text-success" style="font-size:15px;margin-left:6px"></i></a>
                              <a href="{{ url('buyers_delete/'.$clients->id)}}"><i class="bi bi-trash-fill text-danger" style="font-size:15px;margin-left:6px"></i></a>
                           </td>
                        </tr>
                         @else
                             
                         @endif
                              
                              @endforeach

                              
                             
                           </tbody>
                        </table>
                     </div>
                     </div>
                  </div>
            
               </div>
            </div>
         </div>
      </div>
      </div>
    </div>

    <!-- Wrapper End-->
    @endsection