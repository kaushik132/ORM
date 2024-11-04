@extends('dashboard.layout.main')
@section('main-containers')




<div class="content-page">
    <div class="container-fluid">
       <div class="row">
          <div class="col-sm-12 col-lg-12 col-md-12">
             <div class="card">
                <div class="card-header d-flex justify-content-between">
                   <div class="header-title">
                      <h4 class="card-title">Staff Add</h4>
                   </div>

                </div>
                <form action="{{url('user_update/'.$user->id )}}" method="POST">
                   @csrf
                <div class="card-body">
                  
                   <div class="input-group mb-4">
                      <div class="input-group-prepend">
                         <span class="input-group-text" id="basic-addon1"><i class="bi bi-person text-warning" style="font-size:18px"></i></span>
                      </div>
                      <input type="text"  name="name" class="form-control pldr-input  @error('name')is-invalid @enderror"  value="{{$user->name}}" placeholder="Name" aria-label="Username"
                         aria-describedby="basic-addon1">
                         @error('name')
                         <span class="invalid-feedback">{{ $message }}</span>
                         @enderror
                   </div>

                   <div class="input-group mb-4">
                     <div class="input-group-prepend">
                        <span class="input-group-text" id="basic-addon1"><i class="bi bi-envelope-fill text-warning" style="font-size:18px"></i></span>
                     </div>
                     <input type="text" name="email" class="form-control pldr-input @error('name')is-invalid @enderror" value="{{$user->email}}" placeholder="Email" aria-label="Username"
                        aria-describedby="basic-addon1" >
                        @error('email')
                        <span class="invalid-feedback">{{ $message }}</span>
                        @enderror
                  </div>
                  
                   

                 <div class="input-group mb-4">
                  <div class="input-group-prepend">
                     <span class="input-group-text" id="basic-addon1"><i class="bi bi-person-arms-up text-warning" style="font-size:18px"></i></span>
                  </div>
                  <input type="text" name="age" class="form-control pldr-input @error('age')is-invalid @enderror" value="{{$user->age}}" placeholder="Age" aria-label="Username"
                     aria-describedby="basic-addon1" >
                     @error('age')
                     <span class="invalid-feedback">{{ $message }}</span>
                     @enderror
               </div>
{{-- role --}}
<div class="input-group mb-4">
   <div class="input-group-prepend">
     <span class="input-group-text" id="basic-addon1">
       <i class="bi bi-geo-alt-fill text-warning" style="font-size:18px"></i>
     </span>
   </div>
 
   <select class="form-control" name="role"  id="roleSelect" aria-label="Default select example">
    <option selected>Select Your Role</option>

    @if (Auth::user()->status == 2)
    <option value="staff">Staff</option>
    @else
    <option value="admin">Admin</option>
    <option value="manager">Manager</option>
    <option value="staff">Staff</option>
    @endif
    
  </select> 

 </div>
 
 <input type="hidden" name="status" value="{{$user->status}}" id="statusInput" class="form-control pldr-input" placeholder="MR" aria-label="Username"
        aria-describedby="basic-addon1">



               {{-- country div --}}
               <div class="input-group mb-4">
                <div class="input-group-prepend">
                   <span class="input-group-text" id="basic-addon1"><i class="bi bi-geo-alt-fill text-warning" style="font-size:18px"></i></span>
                </div>
            
                   <select class="form-control" name="country" aria-label="Default select example">
                      <option selected>Select Your Country</option>
                    
                          @foreach ($country as $countryname)
                          <option value="{{$countryname->phonecode}}">{{$countryname->phonecode}}</option> 
                              
                          @endforeach
        
                      
                    </select>
             </div>

             <div class="input-group mb-4">
                <div class="input-group-prepend">
                    <span class="input-group-text" id="basic-addon1">
                        <i class="bi bi-envelope-fill text-warning" style="font-size:18px"></i>
                    </span>
                </div>
                <input 
                    type="password" 
                    name="password" 
                    value="{{$user->password}}"
                    class="form-control pldr-input @error('password') is-invalid @enderror"  
                    placeholder="Password" 
                    aria-label="Password"
                    aria-describedby="basic-addon1"
                >
        
                @error('password')
                    <span class="invalid-feedback">{{ $message }}</span>
                @enderror
              
            </div>
            <small class="form-text text-muted">Leave blank if you do not wish to change the password.</small>
      



          

           <div class="input-group mb-4">
            <div class="input-group-prepend">
               <span class="input-group-text" id="basic-addon1"><i class="bi bi-telephone-fill text-warning" style="font-size:18px"></i></span>
            </div>
            <input type="text" name="number" maxlength="10" value="{{$user->number}}" oninput="this.value = this.value.replace(/[^0-9+.]/g, '').replace(/(\..*?)\..*/g, '$1');" class="form-control pldr-input @error('number')is-invalid @enderror" placeholder="Phone Number" aria-label="Username"
               aria-describedby="basic-addon1">
               @error('number')
               <span class="invalid-feedback">{{ $message }}</span>
               @enderror
         </div>

         {{-- address field --}}
           <div class="input-group mb-4">
            <div class="input-group-prepend">
               <span class="input-group-text"  id="basic-addon1"><i class="bi bi-house-door-fill text-warning" style="font-size:18px"></i></span>
            </div>
            <textarea name="address" id="address" cols="1050" rows="1" class="form-control">{{ $user->address }}</textarea>

         </div>
{{-- about --}}
         <div class="input-group mb-4">
            <div class="input-group-prepend">
               <span class="input-group-text" id="basic-addon1"><i class="bi bi-house-door-fill text-warning" style="font-size:18px"></i></span>
            </div>
            <textarea name="about" id="about" cols="1050" rows="1" class="form-control">{{$user->about}}</textarea>
         </div>
{{-- join date --}}
         <div class="input-group mb-4">
            <div class="input-group-prepend">
               <span class="input-group-text" id="basic-addon1"><i class="bi bi-telephone-fill text-warning" style="font-size:18px"></i></span>
            </div>
            <input type="date" name="join_date" value="{{$user->join_date}}" class="form-control pldr-input @error('join_date')is-invalid @enderror" placeholder="Join Date" aria-label="Username"
               aria-describedby="basic-addon1">
               @error('join_date')
               <span class="invalid-feedback">{{ $message }}</span>
               @enderror
         </div>
{{-- hidden role --}}
         {{-- <input type="hidden" name="manager_role" value="{{Auth::user()->id}}" class="form-control pldr-input" placeholder="MR" aria-label="Username"
               aria-describedby="basic-addon1"> --}}

      
                  
         <input class="" type="submit" value="Submit" style="background-color:white; border:solid 1.5px blue; color:blue;padding-left:30px;padding-right:30px; padding-top:6px; padding-bottom:6px;border-radius:7px;font-size:16px;font-weight:500;letter-spacing:0.75px">
                      
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
   document.getElementById("roleSelect").addEventListener("change", function() {
     // Map roles to their corresponding values
     const roleValues = {
       "admin": 1,
       "manager": 2,
       "staff": 3
     };
 
     // Get the selected role value from the select element
     var selectedRole = this.value;
 
     // Set the hidden input's value to the mapped value, or clear if no valid selection
     document.getElementById("statusInput").value = roleValues[selectedRole] || "";
   });
 </script>




@endsection