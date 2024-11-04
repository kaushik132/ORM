@extends('dashboard.layout.main')
@section('main-containers')

      <div class="content-page">
      <div class="container-fluid">
         <div class="row">
            <div class="col-lg-12">
               <div class="card">
                  <div class="card-body p-0">
                     <div class="iq-edit-list usr-edit">
                        <ul class="iq-edit-profile d-flex nav nav-pills">
                           <li class="col-md-3 p-0">
                              <a class="nav-link active" data-toggle="pill" href="#personal-information">
                              Personal Information
                              </a>
                           </li>
                           {{-- <li class="col-md-3 p-0">
                              <a class="nav-link" data-toggle="pill" href="#chang-pwd">
                              Change Password
                              </a>
                           </li>
                           <li class="col-md-3 p-0">
                              <a class="nav-link" data-toggle="pill" href="#emailandsms">
                              Email and SMS
                              </a>
                           </li>
                           <li class="col-md-3 p-0">
                              <a class="nav-link" data-toggle="pill" href="#manage-contact">
                              Manage Contact
                              </a>
                           </li> --}}
                        </ul>
                     </div>
                  </div>
               </div>
            </div>
            <div class="col-lg-12">
               <div class="iq-edit-list-data">
                  <div class="tab-content">
                     <div class="tab-pane fade active show" id="personal-information" role="tabpanel">
                        <div class="card">
                           <div class="card-header d-flex justify-content-between">
                              <div class="header-title">
                                 <h4 class="card-title">Personal Information</h4>
                              </div>
                           </div>
                           <div class="card-body">
                              <form action="{{route('user_profile_edits')}}" method="POST" enctype="multipart/form-data">
                                 @csrf 
                                 <div class="form-group row align-items-center">
                                    <div class="row">
                                       <div class="small-12 medium-2 large-2 columns">
                                         <div class="circle">
                                           <img class="profile-pic" src="https://t3.ftcdn.net/jpg/03/46/83/96/360_F_346839683_6nAPzbhpSkIpb8pmAwufkC7c5eD7wYws.jpg">
                                    
                                         </div>
                                         <div class="p-image">
                                           <i class="fa fa-camera upload-button"></i>
                                            <input name="image" type="file" accept="image/*" required/>
                                         </div>
                                      </div>
                                    </div>
                                 </div>
                                 <div class=" row align-items-center">
                                    <div class="form-group">
                                       <label for="fname">First Name:</label>
                                       <input type="text" name="fname" class="form-control" id="fname" value="Horrid">
                                    </div>
                                    <div class="form-group">
                                       <label for="lname">Last Name:</label>
                                       <input type="text" name="lname" class="form-control" id="lname" value="Henry">
                                    </div>
                                    <div class="form-group">
                                       <label for="uname">Email:</label>
                                       <input type="text" name="email" class="form-control" id="uname" value="horrid1980henry@gmail.com">
                                    </div>
                                    <div class="form-group">
                                       <label for="cname">Phone Number:</label>
                                       <input type="text" name="number" class="form-control" id="cname" value="91 1234567897">
                                    </div>
                                   
                                    <div class="form-group col-sm-12">
                                       <label for="dob">About:</label>
                                       <input type="text" name="about" class="form-control" rows="5" id="dob" value="I am a passionate and driven individual who thrives on creativity and innovation. With a background in computer science and a love for problem-solving, I have honed my skills in software development and constantly seek to stay at the forefront of emerging technologies. Beyond my technical pursuits, I am an avid adventurer, finding solace in the great outdoors and relishing the opportunity to explore new places and cultures. As a lifelong learner, I am dedicated to personal growth and am always eager to take on new challenges. Whether it's writing code, embarking on a new hiking trail, or engaging in thought-provoking conversations, I approach every endeavor with enthusiasm and a commitment to excellence.">
                                    </div>
                                    
                                    
                                    <div class="form-group">
                                       <label>Country:</label>
                                       <select name="country" class="form-control" id="exampleFormControlSelect3">
                                          <option>Caneda</option>
                                          <option>Noida</option>
                                          <option selected="">UK</option>
                                          <option>India</option>
                                          <option>Africa</option>
                                       </select>
                                    </div>
                                 <div class="form-group col-sm-12">
                                       <label>Address:</label>
                                       <textarea name="address" class="form-control" name="address" rows="5" style="line-height: 22px;">Garsdale Head, Sedbergh LA10 5PW, UK
                                       </textarea>
                                    </div> 
                                 </div>
                                 <button type="reset" class="btn btn-outline-primary mr-2">Cancel</button>
                                 <button type="submit" class="btn btn-primary">Submit</button>
                              </form>
                           </div>
                        </div>



                     </div>
                     <div class="tab-pane fade" id="chang-pwd" role="tabpanel">
                        <div class="card">
                           <div class="card-header d-flex justify-content-between">
                              <div class="header-title">
                                 <h4 class="card-title">Change Password</h4>
                              </div>
                           </div>
                           <div class="card-body">
                              <form>
                                 <div class="form-group">
                                    <label for="cpass">Current Password:</label>
                                    <a href="javascripe:void();" class="float-right">Forgot Password</a>
                                    <input type="Password" class="form-control" id="cpass" value="">
                                 </div>
                                 <div class="form-group">
                                    <label for="npass">New Password:</label>
                                    <input type="Password" class="form-control" id="npass" value="">
                                 </div>
                                 <div class="form-group">
                                    <label for="vpass">Verify Password:</label>
                                    <input type="Password" class="form-control" id="vpass" value="">
                                 </div>
                                 <button type="reset" class="btn btn-outline-primary mr-2">Cancel</button>
                                 <button type="submit" class="btn btn-primary">Submit</button>
                              </form>
                           </div>
                        </div>
                     </div>
                     <div class="tab-pane fade" id="emailandsms" role="tabpanel">
                        <div class="card">
                           <div class="card-header d-flex justify-content-between">
                              <div class="header-title">
                                 <h4 class="card-title">Email and SMS</h4>
                              </div>
                           </div>
                           <div class="card-body">
                              <form>
                                 <div class="form-group row align-items-center">
                                    <label class="col-md-3" for="emailnotification">Email Notification:</label>
                                    <div class="col-md-9 custom-control custom-switch">
                                       <input type="checkbox" class="custom-control-input" id="emailnotification" checked="">
                                       <label class="custom-control-label" for="emailnotification"></label>
                                    </div>
                                 </div>
                                 <div class="form-group row align-items-center">
                                    <label class="col-md-3" for="smsnotification">SMS Notification:</label>
                                    <div class="col-md-9 custom-control custom-switch">
                                       <input type="checkbox" class="custom-control-input" id="smsnotification" checked="">
                                       <label class="custom-control-label" for="smsnotification"></label>
                                    </div>
                                 </div>
                                 <div class="form-group row align-items-center">
                                    <label class="col-md-3" for="npass">When To Email</label>
                                    <div class="col-md-9">
                                       <div class="custom-control custom-checkbox">
                                          <input type="checkbox" class="custom-control-input" id="email01">
                                          <label class="custom-control-label" for="email01">You have new notifications.</label>
                                       </div>
                                       <div class="custom-control custom-checkbox">
                                          <input type="checkbox" class="custom-control-input" id="email02">
                                          <label class="custom-control-label" for="email02">You're sent a direct message</label>
                                       </div>
                                       <div class="custom-control custom-checkbox">
                                          <input type="checkbox" class="custom-control-input" id="email03" checked="">
                                          <label class="custom-control-label" for="email03">Someone adds you as a connection</label>
                                       </div>
                                    </div>
                                 </div>
                                 <div class="form-group row align-items-center">
                                    <label class="col-md-3" for="npass">When To Escalate Emails</label>
                                    <div class="col-md-9">
                                       <div class="custom-control custom-checkbox">
                                          <input type="checkbox" class="custom-control-input" id="email04">
                                          <label class="custom-control-label" for="email04"> Upon new order.</label>
                                       </div>
                                       <div class="custom-control custom-checkbox">
                                          <input type="checkbox" class="custom-control-input" id="email05">
                                          <label class="custom-control-label" for="email05"> New membership approval</label>
                                       </div>
                                       <div class="custom-control custom-checkbox">
                                          <input type="checkbox" class="custom-control-input" id="email06" checked="">
                                          <label class="custom-control-label" for="email06"> Member registration</label>
                                       </div>
                                    </div>
                                 </div>
                                 <button type="reset" class="btn btn-outline-primary mr-2">Cancel</button>
                                 <button type="submit" class="btn btn-primary">Submit</button>
                              </form>
                           </div>
                        </div>
                     </div>
                     <div class="tab-pane fade" id="manage-contact" role="tabpanel">
                        <div class="card">
                           <div class="card-header d-flex justify-content-between">
                              <div class="header-title">
                                 <h4 class="card-title">Manage Contact</h4>
                              </div>
                           </div>
                           <div class="card-body">
                              <form>
                                 <div class="form-group">
                                    <label for="cno">Contact Number:</label>
                                    <input type="text" class="form-control" id="cno" value="001 2536 123 458">
                                 </div>
                                 <div class="form-group">
                                    <label for="email">Email:</label>
                                    <input type="text" class="form-control" id="email" value="Barryjone@demo.com">
                                 </div>
                                 <div class="form-group">
                                    <label for="url">Url:</label>
                                    <input type="text" class="form-control" id="url" value="https://getbootstrap.com">
                                 </div>
                                 <button type="reset" class="btn btn-outline-primary mr-2">Cancel</button>
                                 <button type="submit" class="btn btn-primary">Submit</button>
                              </form>
                           </div>
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