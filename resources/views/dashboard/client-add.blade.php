@extends('dashboard.layout.main')
@section('main-containers')
    <style>
        .pldr-input::placeholder {
            font-size: 16px;
            font-weight: 500;
            letter-spacing: 0.75px;
            color: grey;
        }
    </style>

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
                                    <svg width="20" xmlns="http://www.w3.org/2000/svg" fill="none"
                                        viewBox="0 0 24 24" stroke="currentColor">
                                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                            d="M10 20l4-16m4 4l4 4-4 4M6 16l-4-4 4-4" />
                                    </svg>
                                </i>
                            </div>
                        </div>
                        <form action="{{ route('client_adds') }}" method="POST">
                            @csrf
                            <div class="card-body">
                              <div class="row">
                                 <div class="col-md-6 mt-3">
                                    <div class="input-group">
                                       <div class="input-group-prepend">
                                           <span class="input-group-text" id="basic-addon1"><i
                                                   class="bi bi-person text-warning" style="font-size:18px"></i></span>
                                       </div>
                                       <input type="text" name="name" class="form-control pldr-input" placeholder="Name"
                                           aria-label="Username" aria-describedby="basic-addon1" required>
                                   </div>
                                 </div>

                                 <div class="col-md-6 mt-3">
                                    <div class="input-group">
                                       <div class="input-group-prepend">
                                           <span class="input-group-text" id="basic-addon1"><i
                                                   class="bi bi-person-arms-up text-warning" style="font-size:18px"></i></span>
                                       </div>
                                       <input type="text" name="age" class="form-control pldr-input" placeholder="Age"
                                           aria-label="Username" aria-describedby="basic-addon1" required>
                                   </div>
                                 </div>

                                <div class="col-md-12 mt-3">
                                 <div class="input-group">
                                    <div class="input-group-prepend">
                                        <span class="input-group-text" id="basic-addon1"><i
                                                class="bi bi-envelope-fill text-warning" style="font-size:18px"></i></span>
                                    </div>
                                    <input type="text" name="email" class="form-control pldr-input" placeholder="Email"
                                        aria-label="Username" aria-describedby="basic-addon1" required>
                                </div>
                                </div>



                                 <div class="col-md-6 mt-3">
                                    <div class="input-group">
                                       <div class="input-group-prepend">
                                           <span class="input-group-text" id="basic-addon1"><i
                                                   class="bi bi-geo-alt-fill text-warning" style="font-size:18px"></i></span>
                                       </div>
   
                                       <select class="form-control" name="country" aria-label="Default select example">
                                           <option selected>Select Your Country Code</option>
                                           @foreach ($Country as $Countrys)
                                               <option value="{{ $Countrys->phonecode }}">{{ $Countrys->phonecode }}</option>
                                           @endforeach
   
                                       </select>
                                   </div>
   
                                 </div>

                                 <div class="col-md-6 mt-3">
                                    <div class="input-group mb-4">
                                       <div class="input-group-prepend">
                                           <span class="input-group-text" id="basic-addon1"><i
                                                   class="bi bi-telephone-fill text-warning" style="font-size:18px"></i></span>
                                       </div>
                                       <input type="text" name="number" maxlength="10"
                                           oninput="this.value = this.value.replace(/[^0-9+.]/g, '').replace(/(\..*?)\..*/g, '$1');"
                                           class="form-control pldr-input" placeholder="Phone Number" aria-label="Username"
                                           aria-describedby="basic-addon1"required>
                                   </div>
                                 </div>
 
                                 <div class="col-md-12 mt-3">
                                    <div class="input-group">
                                       <div class="input-group-prepend">
                                           <span class="input-group-text" id="basic-addon1"><i
                                                   class="bi bi-house-door-fill text-warning"
                                                   style="font-size:18px"></i></span>
                                       </div>
                                       <textarea name="address" id="address" cols="5" rows="1" class="form-control"></textarea>
                                   </div>
                                 </div>

                                 <div class="col-md-12 mt-3">
                                                                    {{-- manager_role --}}
                                <input type="hidden" name="manager_role" value="{{ Auth::user()->manager_role }}"
                                maxlength="10" class="form-control pldr-input" placeholder="MR" aria-label="Username"
                                aria-describedby="basic-addon1"required>
                            {{-- staff_role --}}
                            <input type="hidden" name="staff_role" value="{{ Auth::user()->id }}" maxlength="10"
                                class="form-control pldr-input" placeholder="SR" aria-label="Username"
                                aria-describedby="basic-addon1"required>
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
    <!-- Wrapper End-->
@endsection
