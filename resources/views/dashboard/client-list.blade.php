@extends('dashboard.layout.main')
@section('main-containers')
     
      <div class="content-page">
      <div class="container-fluid">
         <div class="row">
            <div class="col-sm-12">
               <div class="card">
                  <div class="card-header d-flex justify-content-between">
                     <div class="header-title">
                        <h4 class="card-title">Client Table List</h4>
                     </div>
   
                  </div>
                  <div class="card-body">
                     
                     <div class="table-editable">
                        <form action="{{url('search_client')}}" method="GET">
                           <div class="input-group rounded">
                              <input type="search" class="form-control rounded" name="search" placeholder="Search....." aria-label="Search" aria-describedby="search-addon" value="{{  isset($search) ? $search : ''}}"/>
                              {{-- <span class="input-group-text border-0" id="search-addon"> --}}
                                {{-- <i class="fas fa-search"></i> --}}
                              </span>
                            </div>    
                           </form>  
                        {{-- <span class="table-add float-right mb-3 mr-2">
                        
                        </span> --}}
                        <a href="{{url('client_add')}}"><div class="mb-3" style="text-align:end"><button class="btn btn-sm bg-primary"><i
                           class="ri-add-fill"><span class="pl-1" style="font-size:16px"><i class="bi bi-plus"></i> Add New</span></i>
                        </button></div></a>
                        <div class="res_table">
                           <table class="table table-bordered table-responsive-md table-striped text-center">
                              <thead>
                                 <tr>
                                    <th>Client ID</th>
                                    <th>Client Name</th>
                                    <th>Client Age</th>
                                    <th>Client Country</th>
                               @if (Auth::user()->id == 1)
                               <th>Client Email</th>
                               <th>Client Phone</th>
                               @endif
                                    <th>Client Address</th>
                                    
                                    <th>Action</th>
                                 </tr>
                              </thead>
                              <tbody>
                                 @foreach ($client as $client)
   
                                 @if (Auth::user()->id == $client->staff_role || Auth::user()->id == $client->manager_role || Auth::user()->id == $client->admin_role)
                                 <tr>
                                    <td contenteditable="true">{{$client->client_id}}</td>
                                    <td contenteditable="true">{{$client->name}}</td>
                                    <td contenteditable="true">{{$client->age}}</td>
                                    <td contenteditable="true">{{$client->country}}</td>
                                    @if (Auth::user()->id == $client->admin_role)
                                    <td contenteditable="true">{{$client->email}}</td>
                                    <td contenteditable="true">{{$client->number}}</td>
                                    @endif
                                 
                                    <td contenteditable="true">{{$client->address}}</td>
                                    
                               
                                    <td style="display: flex;justify-content:center;margin-top:23px"> 
                                       <a href="{{ url('client_edit/'.$client->id)}}"><i class="bi bi-pencil-square text-success" style="font-size:15px"></i></a>
                                       <a href="{{ url('client_delete/'.$client->id)}}"><i class="bi bi-trash-fill text-danger" style="font-size:15px;margin-left:6px"></i></a>
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