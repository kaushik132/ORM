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
                            <div class="header-action">
                                <i data-toggle="collapse" data-target="#input-group-1" aria-expanded="false">
                                    <svg width="20" xmlns="http://www.w3.org/2000/svg" fill="none"
                                        viewBox="0 0 24 24" stroke="currentColor">
                                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                            d="M10 20l4-16m4 4l4 4-4 4M6 16l-4-4 4-4" />
                                    </svg>
                                </i>
                            </div>
                        </div>
                        <form action="{{ route('userregister') }}" method="POST">
                            @csrf
                            <div class="card-body">
                                   <div class="row">
                                    <div class="col-md-6 mt-3">
                                       <div class="input-group">
                                          <div class="input-group-prepend">
                                              <span class="input-group-text" id="basic-addon1"><i
                                                      class="bi bi-person text-warning" style="font-size:18px"></i></span>
                                          </div>
                                          <input type="text" name="name"
                                              class="form-control pldr-input  @error('name')is-invalid @enderror"
                                              placeholder="Name" aria-label="Username" aria-describedby="basic-addon1">
                                          @error('name')
                                              <span class="invalid-feedback">{{ $message }}</span>
                                          @enderror
                                      </div>
      
                                    </div>

                                    <div class="col-md-6 mt-3">
                                       <div class="input-group">
                                          <div class="input-group-prepend">
                                              <span class="input-group-text" id="basic-addon1"><i
                                                      class="bi bi-person-arms-up text-warning" style="font-size:18px"></i></span>
                                          </div>
                                          <input type="text" name="age"
                                              class="form-control pldr-input @error('age')is-invalid @enderror" placeholder="Age"
                                              aria-label="Username" aria-describedby="basic-addon1">
                                          @error('age')
                                              <span class="invalid-feedback">{{ $message }}</span>
                                          @enderror
                                      </div>
                                    </div>
                                      <div class="col-md-12 mt-3">
                                       <div class="input-group">
                                          <div class="input-group-prepend">
                                              <span class="input-group-text" id="basic-addon1"><i
                                                      class="bi bi-envelope-fill text-warning" style="font-size:18px"></i></span>
                                          </div>
                                          <input type="text" name="email"
                                              class="form-control pldr-input @error('name')is-invalid @enderror"
                                              placeholder="Email" aria-label="Username" aria-describedby="basic-addon1">
                                          @error('email')
                                              <span class="invalid-feedback">{{ $message }}</span>
                                          @enderror
                                      </div>
                                      </div>

                                      <div class="col-md-6 mt-3">
                                       <div class="input-group">
                                          <div class="input-group-prepend">
                                              <span class="input-group-text" id="basic-addon1">
                                                  <i class="bi bi-geo-alt-fill text-warning" style="font-size:18px"></i>
                                              </span>
                                          </div>
      
                                          <select class="form-control" name="role" id="roleSelect"
                                              aria-label="Default select example">
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
                                      </div>

                                      <div class="col-md-6 mt-3">
                                       <div class="input-group mb-4">
                                          <div class="input-group-prepend">
                                              <span class="input-group-text" id="basic-addon1"><i
                                                      class="bi bi-geo-alt-fill text-warning" style="font-size:18px"></i></span>
                                          </div>
      
                                          <select class="form-control" name="country" aria-label="Default select example">
                                              <option selected>Select Your Country Code</option>
      
                                              @foreach ($country as $countryname)
                                                  <option value="{{ $countryname->phonecode }}">{{ $countryname->phonecode }}
                                                  </option>
                                              @endforeach
      
      
                                          </select>
                                      </div>
                                      </div>
                                      
                                      <div class="col-md-6 mt-3">

                                       <div class="input-group">
                                          <div class="input-group-prepend">
                                              <span class="input-group-text" id="basic-addon1"><i
                                                      class="bi bi-envelope-fill text-warning" style="font-size:18px"></i></span>
                                          </div>
                                          <input type="text" name="password"
                                              class="form-control pldr-input @error('password')is-invalid @enderror"
                                              placeholder="Password" aria-label="Username" aria-describedby="basic-addon1">
                                          @error('password')
                                              <span class="invalid-feedback">{{ $message }}</span>
                                          @enderror
                                      </div>
                                      </div>

                                      <div class="col-md-6 mt-3">

                                       <div class="input-group">
                                          <div class="input-group-prepend">
                                              <span class="input-group-text" id="basic-addon1"><i
                                                      class="bi bi-telephone-fill text-warning"
                                                      style="font-size:18px"></i></span>
                                          </div>
                                          <input type="text" name="number" maxlength="10"
                                              oninput="this.value = this.value.replace(/[^0-9+.]/g, '').replace(/(\..*?)\..*/g, '$1');"
                                              class="form-control pldr-input @error('number')is-invalid @enderror"
                                              placeholder="Phone Number" aria-label="Username" aria-describedby="basic-addon1">
                                          @error('number')
                                              <span class="invalid-feedback">{{ $message }}</span>
                                          @enderror
                                      </div>
                                      </div>

                                      <div class="col-md-6 mt-3">
                                       <div class="input-group">
                                          <div class="input-group-prepend">
                                              <span class="input-group-text" id="basic-addon1"><i
                                                      class="bi bi-house-door-fill text-warning"
                                                      style="font-size:18px"></i></span>
                                          </div>
                                          <textarea name="address" id="address" cols="1050" rows="1" class="form-control" placeholder="Address"></textarea>
                                      </div>
                                      </div>
                                      <div class="col-md-6 mt-3">
                                       <div class="input-group">
                                          <div class="input-group-prepend">
                                              <span class="input-group-text" id="basic-addon1"><i
                                                      class="bi bi-people-fill text-warning" style="font-size:18px"></i></span>
                                          </div>
                                          <textarea name="about" id="about" cols="1050" rows="1" class="form-control"
                                              placeholder="Staff Details"></textarea>
                                      </div>

                                      </div>

                                      <div class="col-md-12 mt-3">
                                       <div class="input-group">
                                          <div class="input-group-prepend">
                                              <span class="input-group-text" id="basic-addon1"><i
                                                      class="bi bi-telephone-fill text-warning"
                                                      style="font-size:18px"></i></span>
                                          </div>
                                          <input type="date" name="join_date"
                                              class="form-control pldr-input @error('join_date')is-invalid @enderror"
                                              placeholder="Join Date" aria-label="Username" aria-describedby="basic-addon1">
                                          @error('join_date')
                                              <span class="invalid-feedback">{{ $message }}</span>
                                          @enderror
                                      </div>
                                      </div>

                                      <div class="col-md-12 mt-3">
                                <input type="hidden" name="status" id="statusInput" class="form-control pldr-input"
                                placeholder="MR" aria-label="Username" aria-describedby="basic-addon1">
                                      </div>

                                     <div class="col-md-12 mt-3">
                                       <input type="hidden" name="manager_role" value="{{ Auth::user()->id }}"
                                       class="form-control pldr-input" placeholder="MR" aria-label="Username"
                                       aria-describedby="basic-addon1">
                                     </div>

                                         <div class="col-md-12 mt-3">
                                          <input class="" type="submit" value="Submit"
                                          style="background-color:white; border:solid 1.5px blue; color:blue;padding-left:30px;padding-right:30px; padding-top:6px; padding-bottom:6px;border-radius:7px;font-size:16px;font-weight:500;letter-spacing:0.75px">
                                         </div>
                                   </div>




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
