
@extends('dashboard.layout.main')
@section('main-containers')



    
      <div class="content-page">
      <div class="container-fluid">
         <div class="row">
            <div class="col-sm-12">
               <div class="card">
                  <div class="card-header d-flex justify-content-between">
                     <div class="header-title">
                        <h4 class="card-title">Reject Product Table list</h4>
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
                     
                     <div  class="table-editable">
                        <form action="{{url('request_search')}}" method="GET">
                           <div class="input-group rounded">
                              <input type="search" class="form-control rounded" name="search" placeholder="Search....." aria-label="Search" aria-describedby="search-addon" value="{{  isset($search) ? $search : ''}}"/>
                              {{-- <span class="input-group-text border-0" id="search-addon"> --}}
                                {{-- <i class="fas fa-search"></i> --}}
                              </span>
                            </div>    
                           </form>   
                        {{-- <span class="table-add float-right mb-3 mr-2">
                        
                        </span> --}}
                        <a href="{{url('product_reject_add_category')}}"><div class="mb-3 mt-2" style="text-align:end"><button class="btn btn-sm bg-primary"><i
                           class="ri-add-fill"><span class="pl-1 " style="font-size:16px"><i class="bi bi-plus"></i> Add New</span></i>
                        </button></div></a>
                        <table class="table table-bordered table-responsive-md table-striped text-center">
                           <thead>
                              <tr>
                                 <th>Product Name</th>
                                 <th>Product image</th>
                                 <th>Product price</th>
                                 <th>Product Discount</th>
                                 <th>Product Reason</th>
                                 
                                 <th>Action</th>
                              </tr>
                           </thead>
                           <tbody>
                              @foreach ($product as $product) 
                              @if (Auth::user()->id == $product->manager_id || Auth::user()->id == $product->admin_id)
                              <tr> 
                                 <div class="color" style="color: red">
                                  <td contenteditable="true">{{$product->prname}}</td>
                                  <td><img src="{{asset ('uploads/product/'.$product->photo)}}" style="width:100px;border-radius:5px" alt="Image"></td>
                                  <td contenteditable="true">£{{$product->prprice}}</td>
                                  <td contenteditable="true">{{$product->prdiscount}}%</td>
                                  <td contenteditable="true">{{$product->prdescription}}</td>
                                 </div>
                          
                                  <td style="display: flex;justify-content:center;margin-top:23px"> 
                                     <a href="{{ url('reject_product_edit/'.$product->id)}}"><i class="bi bi-pencil-square text-success" style="font-size:15px"></i></a>
                                     <a href="{{ url('reject_product_delete/'.$product->id)}}"><i class="bi bi-trash-fill text-danger" style="font-size:15px;margin-left:6px"></i></a>
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
    <!-- Wrapper End-->
    @endsection