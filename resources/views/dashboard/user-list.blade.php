@extends('dashboard.layout.main')
@section('main-containers')




<div class="content-page">
    <div class="container-fluid">
       <div class="row">
          <div class="col-sm-12">
             <div class="card">
                <div class="card-header d-flex justify-content-between">
                   <div class="header-title">
                      <h4 class="card-title">Staff Table list</h4>
                   </div>
                </div>
                <div class="card-body">
                   
                      
                   <div  class="table-editable">
                     <form action="{{url('search_user')}}" method="GET">
                        <div class="input-group rounded">
                           <input type="search" class="form-control rounded" name="search" placeholder="Search....." aria-label="Search" aria-describedby="search-addon" value="{{  isset($search) ? $search : ''}}"/>
                   
                           </span>
                         </div>    
                        </form> 
             
                      <a href="{{url('user_add')}}" class="shadow-sm"><div class="mb-3 mt-2" style="text-align:end"><button class="btn btn-sm bg-primary px-4 py-2"><i
                         class="ri-add-fill"><span class="pl-1" style="font-size:16px"><i class="bi bi-plus"></i> Add New</span></i>
                      </button></div></a>
                      <table class="table table-bordered table-responsive-md table-striped text-center">
                         <thead>
                            <tr>
                               <th>Staff Name</th>
                               <th>Staff Email</th>
                               <th>Staff Age</th>
                               <th>Staff Role</th>
                               
                               
                               <th>Action</th>
                            </tr>
                         </thead>
                         <tbody>
                           
                            @foreach ($userlist as $userlists) 
                            @if (Auth::user()->id == $userlists->manager_role || Auth::user()->id == $userlists->admin_role )
                            <tr>
                                <td contenteditable="true">{{$userlists->name}}</td>
                                <td contenteditable="true">{{$userlists->email}}</td>
                                <td contenteditable="true">{{$userlists->age}}</td>
                                <td contenteditable="true">{{$userlists->role}}</td>
                              
                                
                                
                                <td style="display: flex;justify-content:center;margin-top:23px"> 
                                   <a href="{{ url('user_edit/'.$userlists->id)}}"><i class="bi bi-pencil-square text-success" style="font-size:15px"></i></a>
                                   <a href="{{ url('user_delete/'.$userlists->id)}}"><i class="bi bi-trash-fill text-danger" style="font-size:15px;margin-left:6px"></i></a>
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






@endsection