<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="utf-8" />
    <meta
      name="viewport"
      content="width=device-width, initial-scale=1, shrink-to-fit=no"
    />
    <title>OMS</title>

    <!-- Favicon -->
    <!-- <link rel="shortcut icon" href="../assets/images/favicon.ico" /> -->

    <link rel="stylesheet" href="../assets/css/backend-plugin.min.css" />
    <link rel="stylesheet" href="../assets/css/backend.css?v=1.0.0" />
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.11.2/font/bootstrap-icons.min.css">
    
  </head>
<style>
  body {
  background-color: #efefef;
}

.profile-pic {
    width: 200px;
    max-height: 200px;
    display: inline-block;
}

.file-upload {
    display: none;
}
.circle {
    border-radius: 100% !important;
    overflow: hidden;
    width: 128px;
    height: 128px;
    border: 2px solid rgba(255, 255, 255, 0.2);
  
    margin-left: 50px
}
img {
    max-width: 100%;
    height: auto;
}
.p-image {
  position: absolute;
  top: 167px;
  right: 88%;
  color: #666666;
  transition: all .3s cubic-bezier(.175, .885, .32, 1.275);
}
.p-image:hover {
  transition: all .3s cubic-bezier(.175, .885, .32, 1.275);
}
.upload-button {
  font-size: 1.2em;
}

.upload-button:hover {
  transition: all .3s cubic-bezier(.175, .885, .32, 1.275);
  color: #999;
}
</style>
  <body>
    <div class="wrapper">
      <div class="iq-sidebar sidebar-default">
        <div
          class="iq-sidebar-logo d-flex align-items-end justify-content-between"
        >
          <div class="side-menu-bt-sidebar-1">
            <svg
              xmlns="http://www.w3.org/2000/svg"
              class="text-light wrapper-menu"
              width="30"
              fill="none"
              viewBox="0 0 24 24"
              stroke="currentColor"
            >
              <path
                stroke-linecap="round"
                stroke-linejoin="round"
                stroke-width="2"
                d="M6 18L18 6M6 6l12 12"
              />
            </svg>
          </div>
        </div>
        <div class="data-scrollbar" data-scroll="1">
          <nav class="iq-sidebar-menu">
            <ul id="iq-sidebar-toggle" class="side-menu">
              <li class="active sidebar-layout">
                <a href="{{url('dashboard')}}" class="svg-icon">
                  <i class="">
                    <svg
                      xmlns="http://www.w3.org/2000/svg"
                      width="18"
                      fill="none"
                      viewBox="0 0 24 24"
                      stroke="currentColor"
                    >
                      <path
                        stroke-linecap="round"
                        stroke-linejoin="round"
                        stroke-width="2"
                        d="M3 12l2-2m0 0l7-7 7 7M5 10v10a1 1 0 001 1h3m10-11l2 2m-2-2v10a1 1 0 01-1 1h-3m-6 0a1 1 0 001-1v-4a1 1 0 011-1h2a1 1 0 011 1v4a1 1 0 001 1m-6 0h6"
                      />
                    </svg>
                  </i>
                  <span class="ml-2">Dashboard</span>
                  <p class="mb-0 w-10 badge badge-pill badge-primary">6</p>
                </a>
              </li>
              <li class="px-3 pt-3 pb-2">
                <span class="text-uppercase small font-weight-bold">Pages</span>
              </li>
              <li class="sidebar-layout">
                <a href="{{url('user_profile')}}" class="svg-icon">
                  <i class="">
                    <svg
                      class="svg-icon"
                      id="iq-user-1-1"
                      xmlns="http://www.w3.org/2000/svg"
                      fill="none"
                      viewBox="0 0 24 24"
                      stroke="currentColor"
                    >
                      <path
                        stroke-linecap="round"
                        stroke-linejoin="round"
                        stroke-width="2"
                        d="M5.121 17.804A13.937 13.937 0 0112 16c2.5 0 4.847.655 6.879 1.804M15 10a3 3 0 11-6 0 3 3 0 016 0zm6 2a9 9 0 11-18 0 9 9 0 0118 0z"
                      />
                    </svg> </i
                  ><span class="ml-2">User Profile</span>
                </a>
              </li>
              {{-- <li class="sidebar-layout">
                <a
                  href="#app1"
                  class="collapsed svg-icon"
                  data-toggle="collapse"
                  aria-expanded="false"
                >
                  <i>
                    <svg
                      xmlns="http://www.w3.org/2000/svg"
                      width="18"
                      fill="none"
                      viewBox="0 0 24 24"
                      stroke="currentColor"
                    >
                      <path
                        stroke-linecap="round"
                        stroke-linejoin="round"
                        stroke-width="2"
                        d="M12 15v2m-6 4h12a2 2 0 002-2v-6a2 2 0 00-2-2H6a2 2 0 00-2 2v6a2 2 0 002 2zm10-10V7a4 4 0 00-8 0v4h8z"
                      />
                    </svg>
                  </i> --}}
                  {{-- <span class="ml-2">Authentication</span>
                  <svg
                    xmlns="http://www.w3.org/2000/svg"
                    class="svg-icon iq-arrow-right arrow-active"
                    width="15"
                    fill="none"
                    viewBox="0 0 24 24"
                    stroke="currentColor"
                  >
                    <path
                      stroke-linecap="round"
                      stroke-linejoin="round"
                      stroke-width="2"
                      d="M9 5l7 7-7 7"
                    />
                  </svg>
                </a>
                <ul
                  id="app1"
                  class="submenu collapse"
                  data-parent="#iq-sidebar-toggle"
                >
                  <li class="sidebar-layout">
                    <a href="{{url('auth_login')}}" class="svg-icon">
                      <i class=""
                        ><svg
                          xmlns="http://www.w3.org/2000/svg"
                          width="18"
                          fill="none"
                          viewBox="0 0 24 24"
                          stroke="currentColor"
                        >
                          <path
                            stroke-linecap="round"
                            stroke-linejoin="round"
                            stroke-width="2"
                            d="M12 11c0 3.517-1.009 6.799-2.753 9.571m-3.44-2.04l.054-.09A13.916 13.916 0 008 11a4 4 0 118 0c0 1.017-.07 2.019-.203 3m-2.118 6.844A21.88 21.88 0 0015.171 17m3.839 1.132c.645-2.266.99-4.659.99-7.132A8 8 0 008 4.07M3 15.364c.64-1.319 1-2.8 1-4.364 0-1.457.39-2.823 1.07-4"
                          />
                        </svg> </i
                      ><span class="">Login</span>
                    </a>
                  </li>
                  <li class="sidebar-layout">
                    <a href="{{url('auth_sign_up')}}" class="svg-icon">
                      <i class="">
                        <svg
                          xmlns="http://www.w3.org/2000/svg"
                          width="18"
                          fill="none"
                          viewBox="0 0 24 24"
                          stroke="currentColor"
                        >
                          <path
                            stroke-linecap="round"
                            stroke-linejoin="round"
                            stroke-width="2"
                            d="M9 5H7a2 2 0 00-2 2v12a2 2 0 002 2h10a2 2 0 002-2V7a2 2 0 00-2-2h-2M9 5a2 2 0 002 2h2a2 2 0 002-2M9 5a2 2 0 012-2h2a2 2 0 012 2m-6 9l2 2 4-4"
                          />
                        </svg> </i
                      ><span class="">Register</span>
                    </a>
                  </li>
                  <li class="sidebar-layout">
                    <a href="{{url('auth_recover_pwd')}}" class="svg-icon">
                      <i class="">
                        <svg
                          xmlns="http://www.w3.org/2000/svg"
                          width="18"
                          fill="none"
                          viewBox="0 0 24 24"
                          stroke="currentColor"
                        >
                          <path
                            stroke-linecap="round"
                            stroke-linejoin="round"
                            stroke-width="2"
                            d="M15.232 5.232l3.536 3.536m-2.036-5.036a2.5 2.5 0 113.536 3.536L6.5 21.036H3v-3.572L16.732 3.732z"
                          />
                        </svg> </i
                      ><span class="">Reset Password</span>
                    </a>
                  </li>
                  <li class="sidebar-layout">
                    <a
                      href="{{url('auth_confirm_mail')}}"
                      class="svg-icon"
                    >
                      <i class="">
                        <svg
                          xmlns="http://www.w3.org/2000/svg"
                          width="18"
                          fill="none"
                          viewBox="0 0 24 24"
                          stroke="currentColor"
                        >
                          <path
                            stroke-linecap="round"
                            stroke-linejoin="round"
                            stroke-width="2"
                            d="M9 12l2 2 4-4m6 2a9 9 0 11-18 0 9 9 0 0118 0z"
                          />
                        </svg> </i
                      ><span class="">Confirm Mail</span>
                    </a>
                  </li>
                  <li class="sidebar-layout">
                    <a href="{{url('auth_lock_screen')}}" class="svg-icon">
                      <i class="">
                        <svg
                          xmlns="http://www.w3.org/2000/svg"
                          width="18"
                          fill="none"
                          viewBox="0 0 24 24"
                          stroke="currentColor"
                        >
                          <path
                            stroke-linecap="round"
                            stroke-linejoin="round"
                            stroke-width="2"
                            d="M9.75 17L9 20l-1 1h8l-1-1-.75-3M3 13h18M5 17h14a2 2 0 002-2V5a2 2 0 00-2-2H5a2 2 0 00-2 2v10a2 2 0 002 2z"
                          />
                        </svg> </i
                      ><span class="">Lock Screen</span>
                    </a>
                  </li>
                </ul>
              </li> --}}
              <li class="sidebar-layout">
                <a
                  href="#app6"
                  class="collapsed svg-icon"
                  data-toggle="collapse"
                  aria-expanded="false"
                >
                  <i class="">
                    <svg
                      class="svg-icon"
                      width="18"
                      id="iq-user-1"
                      xmlns="http://www.w3.org/2000/svg"
                      fill="none"
                      viewBox="0 0 24 24"
                      stroke="currentColor"
                    >
                      <path
                        stroke-linecap="round"
                        stroke-linejoin="round"
                        stroke-width="2"
                        d="M16 7a4 4 0 11-8 0 4 4 0 018 0zM12 14a7 7 0 00-7 7h14a7 7 0 00-7-7z"
                      />
                    </svg>
                  </i>
                  <span class="ml-2">Clients</span>
                  <svg
                    xmlns="http://www.w3.org/2000/svg"
                    class="svg-icon iq-arrow-right arrow-active"
                    width="15"
                    fill="none"
                    viewBox="0 0 24 24"
                    stroke="currentColor"
                  >
                    <path
                      stroke-linecap="round"
                      stroke-linejoin="round"
                      stroke-width="2"
                      d="M9 5l7 7-7 7"
                    />
                  </svg>
                </a>
                <ul
                  id="app6"
                  class="submenu collapse"
                  data-parent="#iq-sidebar-toggle"
                >
                  <li class="sidebar-layout">
                    <a href="{{url('client_add')}}" class="svg-icon">
                      <i class="">
                        <svg
                          class="svg-icon"
                          width="18"
                          id="iq-user-1"
                          xmlns="http://www.w3.org/2000/svg"
                          fill="none"
                          viewBox="0 0 24 24"
                          stroke="currentColor"
                        >
                          <path
                            stroke-linecap="round"
                            stroke-linejoin="round"
                            stroke-width="2"
                            d="M16 7a4 4 0 11-8 0 4 4 0 018 0zM12 14a7 7 0 00-7 7h14a7 7 0 00-7-7z"
                          />
                        </svg>
                      </i>
                      <span class="ml-2">Add Clients</span>
                    </a>
                  </li>
                  <li class="sidebar-layout">
                    <a href="{{url('client_list')}}" class="svg-icon">
                      <i class="">
                        <svg
                          class="svg-icon"
                          width="18"
                          id="iq-user-1"
                          xmlns="http://www.w3.org/2000/svg"
                          fill="none"
                          viewBox="0 0 24 24"
                          stroke="currentColor"
                        >
                          <path
                            stroke-linecap="round"
                            stroke-linejoin="round"
                            stroke-width="2"
                            d="M16 7a4 4 0 11-8 0 4 4 0 018 0zM12 14a7 7 0 00-7 7h14a7 7 0 00-7-7z"
                          />
                        </svg>
                      </i>
                      <span class="ml-2">Clients List</span>
                    </a>
                  </li>
                </ul>
              </li>

              <li class="sidebar-layout">
                <a
                  href="#app15"
                  class="collapsed svg-icon"
                  data-toggle="collapse"
                  aria-expanded="false"
                >
                  <i class="">
                    <svg
                      xmlns="http://www.w3.org/2000/svg"
                      width="18"
                      fill="none"
                      viewBox="0 0 24 24"
                      stroke="currentColor"
                    >
                      <path
                        stroke-linecap="round"
                        stroke-linejoin="round"
                        stroke-width="2"
                        d="M10 6H5a2 2 0 00-2 2v9a2 2 0 002 2h14a2 2 0 002-2V8a2 2 0 00-2-2h-5m-4 0V5a2 2 0 114 0v1m-4 0a2 2 0 104 0m-5 8a2 2 0 100-4 2 2 0 000 4zm0 0c1.306 0 2.417.835 2.83 2M9 14a3.001 3.001 0 00-2.83 2M15 11h3m-3 4h2"
                      />
                    </svg>
                  </i>
                  <span class="ml-2">Products</span>
                  <svg
                    xmlns="http://www.w3.org/2000/svg"
                    class="svg-icon iq-arrow-right arrow-active"
                    width="15"
                    fill="none"
                    viewBox="0 0 24 24"
                    stroke="currentColor"
                  >
                    <path
                      stroke-linecap="round"
                      stroke-linejoin="round"
                      stroke-width="2"
                      d="M9 5l7 7-7 7"
                    />
                  </svg>
                </a>
                <ul
                  id="app15"
                  class="submenu collapse"
                  data-parent="#iq-sidebar-toggle"
                >
                  {{-- <li class="sidebar-layout">
                    <a href="{{url('product_add_category')}}" class="svg-icon">
                      <i class="">
                        <svg
                          xmlns="http://www.w3.org/2000/svg"
                          width="18"
                          fill="none"
                          viewBox="0 0 24 24"
                          stroke="currentColor"
                        >
                          <path
                            stroke-linecap="round"
                            stroke-linejoin="round"
                            stroke-width="2"
                            d="M10 6H5a2 2 0 00-2 2v9a2 2 0 002 2h14a2 2 0 002-2V8a2 2 0 00-2-2h-5m-4 0V5a2 2 0 114 0v1m-4 0a2 2 0 104 0m-5 8a2 2 0 100-4 2 2 0 000 4zm0 0c1.306 0 2.417.835 2.83 2M9 14a3.001 3.001 0 00-2.83 2M15 11h3m-3 4h2"
                          />
                        </svg>
                      </i>
                      <span class="ml-2">Add Categorry</span>
                    </a>
                  </li> --}}
                  <li class="sidebar-layout">
                    <a href="{{url('product_add_category')}}" class="svg-icon">
                      <i class="">
                        <svg
                          xmlns="http://www.w3.org/2000/svg"
                          width="18"
                          fill="none"
                          viewBox="0 0 24 24"
                          stroke="currentColor"
                        >
                          <path
                            stroke-linecap="round"
                            stroke-linejoin="round"
                            stroke-width="2"
                            d="M10 6H5a2 2 0 00-2 2v9a2 2 0 002 2h14a2 2 0 002-2V8a2 2 0 00-2-2h-5m-4 0V5a2 2 0 114 0v1m-4 0a2 2 0 104 0m-5 8a2 2 0 100-4 2 2 0 000 4zm0 0c1.306 0 2.417.835 2.83 2M9 14a3.001 3.001 0 00-2.83 2M15 11h3m-3 4h2"
                          />
                        </svg>
                      </i>
                      <span class="ml-2">Add Products</span>
                    </a>
                  </li>



                  <li class="sidebar-layout">
                    <a href="{{url('/product_reject_add_category')}}" class="svg-icon">
                      <i class="">
                        <svg
                          xmlns="http://www.w3.org/2000/svg"
                          width="18"
                          fill="none"
                          viewBox="0 0 24 24"
                          stroke="currentColor"
                        >
                          <path
                            stroke-linecap="round"
                            stroke-linejoin="round"
                            stroke-width="2"
                            d="M10 6H5a2 2 0 00-2 2v9a2 2 0 002 2h14a2 2 0 002-2V8a2 2 0 00-2-2h-5m-4 0V5a2 2 0 114 0v1m-4 0a2 2 0 104 0m-5 8a2 2 0 100-4 2 2 0 000 4zm0 0c1.306 0 2.417.835 2.83 2M9 14a3.001 3.001 0 00-2.83 2M15 11h3m-3 4h2"
                          />
                        </svg>
                      </i>
                      <span class="ml-2">Add Rejected Products</span>
                    </a>
                  </li>

                  

                  <li class="sidebar-layout">
                    <a href="{{url('product_list')}}" class="svg-icon">
                      <i class="">
                        <svg
                          xmlns="http://www.w3.org/2000/svg"
                          width="18"
                          fill="none"
                          viewBox="0 0 24 24"
                          stroke="currentColor"
                        >
                          <path
                            stroke-linecap="round"
                            stroke-linejoin="round"
                            stroke-width="2"
                            d="M10 6H5a2 2 0 00-2 2v9a2 2 0 002 2h14a2 2 0 002-2V8a2 2 0 00-2-2h-5m-4 0V5a2 2 0 114 0v1m-4 0a2 2 0 104 0m-5 8a2 2 0 100-4 2 2 0 000 4zm0 0c1.306 0 2.417.835 2.83 2M9 14a3.001 3.001 0 00-2.83 2M15 11h3m-3 4h2"
                          />
                        </svg>
                      </i>
                      <span class="ml-2">Products list</span>
                    </a>
                  </li>


                  <li class="sidebar-layout">
                    <a href="{{url('/reject_product_list')}}" class="svg-icon">
                      <i class="">
                        <svg
                          xmlns="http://www.w3.org/2000/svg"
                          width="18"
                          fill="none"
                          viewBox="0 0 24 24"
                          stroke="currentColor"
                        >
                          <path
                            stroke-linecap="round"
                            stroke-linejoin="round"
                            stroke-width="2"
                            d="M10 6H5a2 2 0 00-2 2v9a2 2 0 002 2h14a2 2 0 002-2V8a2 2 0 00-2-2h-5m-4 0V5a2 2 0 114 0v1m-4 0a2 2 0 104 0m-5 8a2 2 0 100-4 2 2 0 000 4zm0 0c1.306 0 2.417.835 2.83 2M9 14a3.001 3.001 0 00-2.83 2M15 11h3m-3 4h2"
                          />
                        </svg>
                      </i>
                      <span class="ml-2">Rejected Products list</span>
                    </a>
                  </li>
                </ul>
              </li>



              <li class="sidebar-layout">
                <a
                  href="#app7"
                  class="collapsed svg-icon"
                  data-toggle="collapse"
                  aria-expanded="false"
                >
                  <i class="">
                    <svg
                      class="svg-icon"
                      width="18"
                      id="iq-user-1"
                      xmlns="http://www.w3.org/2000/svg"
                      fill="none"
                      viewBox="0 0 24 24"
                      stroke="currentColor"
                    >
                      <path
                        stroke-linecap="round"
                        stroke-linejoin="round"
                        stroke-width="2"
                        d="M16 7a4 4 0 11-8 0 4 4 0 018 0zM12 14a7 7 0 00-7 7h14a7 7 0 00-7-7z"
                      />
                    </svg>
                  </i>
                  <span class="ml-2">Orders</span>
                  <svg
                    xmlns="http://www.w3.org/2000/svg"
                    class="svg-icon iq-arrow-right arrow-active"
                    width="15"
                    fill="none"
                    viewBox="0 0 24 24"
                    stroke="currentColor"
                  >
                    <path
                      stroke-linecap="round"
                      stroke-linejoin="round"
                      stroke-width="2"
                      d="M9 5l7 7-7 7"
                    />
                  </svg>
                </a>
                <ul
                  id="app7"
                  class="submenu collapse"
                  data-parent="#iq-sidebar-toggle"
                >
                  <li class="sidebar-layout">
                    <a href="{{url('buyers')}}" class="svg-icon">
                      <i class="">
                        <svg
                          class="svg-icon"
                          width="18"
                          id="iq-user-1"
                          xmlns="http://www.w3.org/2000/svg"
                          fill="none"
                          viewBox="0 0 24 24"
                          stroke="currentColor"
                        >
                          <path
                            stroke-linecap="round"
                            stroke-linejoin="round"
                            stroke-width="2"
                            d="M16 7a4 4 0 11-8 0 4 4 0 018 0zM12 14a7 7 0 00-7 7h14a7 7 0 00-7-7z"
                          />
                        </svg>
                      </i>
                      <span class="ml-2">Add Order</span>
                    </a>
                  </li>
                  <li class="sidebar-layout">
                    <a href="{{url('buyers_list')}}" class="svg-icon">
                      <i class="">
                        <svg
                          class="svg-icon"
                          width="18"
                          id="iq-user-1"
                          xmlns="http://www.w3.org/2000/svg"
                          fill="none"
                          viewBox="0 0 24 24"
                          stroke="currentColor"
                        >
                          <path
                            stroke-linecap="round"
                            stroke-linejoin="round"
                            stroke-width="2"
                            d="M16 7a4 4 0 11-8 0 4 4 0 018 0zM12 14a7 7 0 00-7 7h14a7 7 0 00-7-7z"
                          />
                        </svg>
                      </i>
                      <span class="ml-2">Orders List</span>
                    </a>
                  </li>
                </ul>
              </li>
              


              

          

                  {{-- role start --}}

                  @if (Auth::user()->status == 1 || Auth::user()->status == 2 )

                  <li class="sidebar-layout">
                    <a
                      href="#app5"
                      class="collapsed svg-icon"
                      data-toggle="collapse"
                      aria-expanded="false"
                    >
                      <i class="">
                        <svg
                          class="svg-icon"
                          width="18"
                          id="iq-user-1"
                          xmlns="http://www.w3.org/2000/svg"
                          fill="none"
                          viewBox="0 0 24 24"
                          stroke="currentColor"
                        >
                          <path
                            stroke-linecap="round"
                            stroke-linejoin="round"
                            stroke-width="2"
                            d="M16 7a4 4 0 11-8 0 4 4 0 018 0zM12 14a7 7 0 00-7 7h14a7 7 0 00-7-7z"
                          />
                        </svg>
                      </i>
                      <span class="ml-2">Staff</span>
                      <svg
                        xmlns="http://www.w3.org/2000/svg"
                        class="svg-icon iq-arrow-right arrow-active"
                        width="15"
                        fill="none"
                        viewBox="0 0 24 24"
                        stroke="currentColor"
                      >
                        <path
                          stroke-linecap="round"
                          stroke-linejoin="round"
                          stroke-width="2"
                          d="M9 5l7 7-7 7"
                        />
                      </svg>
                    </a>
                    <ul
                      id="app5"
                      class="submenu collapse"
                      data-parent="#iq-sidebar-toggle"
                    >
                      <li class="sidebar-layout">
                        <a href="{{url('user_add')}}" class="svg-icon">
                          <i class="">
                            <svg
                              class="svg-icon"
                              width="18"
                              id="iq-user-1"
                              xmlns="http://www.w3.org/2000/svg"
                              fill="none"
                              viewBox="0 0 24 24"
                              stroke="currentColor"
                            >
                              <path
                                stroke-linecap="round"
                                stroke-linejoin="round"
                                stroke-width="2"
                                d="M16 7a4 4 0 11-8 0 4 4 0 018 0zM12 14a7 7 0 00-7 7h14a7 7 0 00-7-7z"
                              />
                            </svg>
                          </i>
                          <span class="ml-2">Add Staff</span>
                        </a>
                      </li>
                      <li class="sidebar-layout">
                        <a href="{{url('user_list')}}" class="svg-icon">
                          <i class="">
                            <svg
                              class="svg-icon"
                              width="18"
                              id="iq-user-1"
                              xmlns="http://www.w3.org/2000/svg"
                              fill="none"
                              viewBox="0 0 24 24"
                              stroke="currentColor"
                            >
                              <path
                                stroke-linecap="round"
                                stroke-linejoin="round"
                                stroke-width="2"
                                d="M16 7a4 4 0 11-8 0 4 4 0 018 0zM12 14a7 7 0 00-7 7h14a7 7 0 00-7-7z"
                              />
                            </svg>
                          </i>
                          <span class="ml-2">Staff List</span>
                        </a>
                      </li>
                    </ul>
                  </li>
                  @endif
                  
              {{-- end role --}}



              {{-- <li class="sidebar-layout">
                <a
                  href="#app5"
                  class="collapsed svg-icon"
                  data-toggle="collapse"
                  aria-expanded="false"
                >
                  <i>
                    <svg
                      xmlns="http://www.w3.org/2000/svg"
                      width="18"
                      fill="none"
                      viewBox="0 0 24 24"
                      stroke="currentColor"
                    >
                      <path
                        stroke-linecap="round"
                        stroke-linejoin="round"
                        stroke-width="2"
                        d="M3 10h18M3 14h18m-9-4v8m-7 0h14a2 2 0 002-2V8a2 2 0 00-2-2H5a2 2 0 00-2 2v8a2 2 0 002 2z"
                      />
                    </svg>
                  </i> --}}
                  {{-- <span class="ml-2">Table</span> --}}
                  {{-- <svg
                    xmlns="http://www.w3.org/2000/svg"
                    class="svg-icon iq-arrow-right arrow-active"
                    width="15"
                    fill="none"
                    viewBox="0 0 24 24"
                    stroke="currentColor"
                  >
                    <path
                      stroke-linecap="round"
                      stroke-linejoin="round"
                      stroke-width="2"
                      d="M9 5l7 7-7 7"
                    />
                  </svg> --}}
                {{-- </a> --}}
                {{-- <ul
                  id="app5"
                  class="submenu collapse"
                  data-parent="#iq-sidebar-toggle"
                >
                  <li class="sidebar-layout">
                    <a href="{{url('table_data')}}" class="svg-icon">
                      <i class="">
                        <svg
                          xmlns="http://www.w3.org/2000/svg"
                          width="18"
                          fill="none"
                          viewBox="0 0 24 24"
                          stroke="currentColor"
                        >
                          <path
                            stroke-linecap="round"
                            stroke-linejoin="round"
                            stroke-width="2"
                            d="M4 7v10c0 2.21 3.582 4 8 4s8-1.79 8-4V7M4 7c0 2.21 3.582 4 8 4s8-1.79 8-4M4 7c0-2.21 3.582-4 8-4s8 1.79 8 4m0 5c0 2.21-3.582 4-8 4s-8-1.79-8-4"
                          />
                        </svg>
                      </i>
                      <span class="ml-2">Data Table</span>
                    </a>
                  </li> --}}
                  {{-- <li class="sidebar-layout">
                    <a href="{{url('table_editable')}}" class="svg-icon">
                      <i class="">
                        <svg
                          xmlns="http://www.w3.org/2000/svg"
                          width="18"
                          fill="none"
                          viewBox="0 0 24 24"
                          stroke="currentColor"
                        >
                          <path
                            stroke-linecap="round"
                            stroke-linejoin="round"
                            stroke-width="2"
                            d="M8 7v8a2 2 0 002 2h6M8 7V5a2 2 0 012-2h4.586a1 1 0 01.707.293l4.414 4.414a1 1 0 01.293.707V15a2 2 0 01-2 2h-2M8 7H6a2 2 0 00-2 2v10a2 2 0 002 2h8a2 2 0 002-2v-2"
                          />
                        </svg>
                      </i>
                      <span class="ml-2">Editable Table</span>
                    </a>
                  </li> --}}
                </ul>
              </li>
            </ul>
          </nav>
          <div class="pt-5 pb-5"></div>
        </div>
      </div>
      <div class="iq-top-navbar">
        <div class="iq-navbar-custom">
          <nav class="navbar navbar-expand-lg navbar-light p-0">
            <div class="side-menu-bt-sidebar">
              <svg
                xmlns="http://www.w3.org/2000/svg"
                class="text-secondary wrapper-menu"
                width="30"
                fill="none"
                viewBox="0 0 24 24"
                stroke="currentColor"
              >
                <path
                  stroke-linecap="round"
                  stroke-linejoin="round"
                  stroke-width="2"
                  d="M4 6h16M4 12h16M4 18h16"
                />
              </svg>
            </div>
            <div class="d-flex align-items-center">
              <button
                class="navbar-toggler"
                type="button"
                data-toggle="collapse"
                data-target="#navbarSupportedContent"
                aria-controls="navbarSupportedContent"
                aria-label="Toggle navigation"
              >
                <svg
                  xmlns="http://www.w3.org/2000/svg"
                  class="text-secondary"
                  width="30"
                  fill="none"
                  viewBox="0 0 24 24"
                  stroke="currentColor"
                >
                  <path
                    stroke-linecap="round"
                    stroke-linejoin="round"
                    stroke-width="2"
                    d="M4 6h16M4 12h16m-7 6h7"
                  />
                </svg>
              </button>
              <div class="collapse navbar-collapse" id="navbarSupportedContent">
                <ul class="navbar-nav ml-auto navbar-list align-items-center">
                  <li class="nav-item nav-icon dropdown">
                    <a
                      href="#"
                      class="search-toggle dropdown-toggle"
                      id="notification-dropdown"
                      data-toggle="dropdown"
                      aria-haspopup="true"
                      aria-expanded="false"
                    >
                      <svg
                        xmlns="http://www.w3.org/2000/svg"
                        width="25"
                        height="25"
                        class="h-6 w-6 text-secondary"
                        fill="none"
                        viewBox="0 0 24 24"
                        stroke="currentColor"
                      >
                        <path
                          stroke-linecap="round"
                          stroke-linejoin="round"
                          stroke-width="2"
                          d="M15 17h5l-1.405-1.405A2.032 2.032 0 0118 14.158V11a6.002 6.002 0 00-4-5.659V5a2 2 0 10-4 0v.341C7.67 6.165 6 8.388 6 11v3.159c0 .538-.214 1.055-.595 1.436L4 17h5m6 0v1a3 3 0 11-6 0v-1m6 0H9"
                        />
                      </svg>
                      <span class="bg-primary"></span>
                    </a>
                    <div
                      class="iq-sub-dropdown dropdown-menu"
                      aria-labelledby="notification-dropdown"
                    >
                      {{-- <div class="card shadow-none m-0 border-0">
                        <div class="p-3 card-header-border">
                          <h6 class="text-center">Notifications</h6>
                        </div>
                        <div
                          class="card-body overflow-auto card-header-border p-0 card-body-list"
                          style="max-height: 500px"
                        >
                          <ul
                            class="dropdown-menu-1 overflow-auto list-style-1 mb-0"
                          >
                            <li class="dropdown-item-1 float-none p-3">
                              <div
                                class="list-item d-flex justify-content-start align-items-start"
                              >
                                <div class="avatar">
                                  <div
                                    class="avatar-img avatar-danger avatar-20"
                                  >
                                    <span>
                                      <svg
                                        class="icon line"
                                        width="30"
                                        height="30"
                                        id="cart-alt1"
                                        stroke="white"
                                        xmlns="http://www.w3.org/2000/svg"
                                        viewBox="0 0 24 24"
                                      >
                                        <path
                                          d="M3,3H5.32a1,1,0,0,1,.93.63L10,13,8.72,15.55A1,1,0,0,0,9.62,17H19"
                                          style="
                                            fill: none;
                                            stroke-linecap: round;
                                            stroke-linejoin: round;
                                            stroke-width: 2;
                                          "
                                        ></path>
                                        <polyline
                                          points="10 13 18.2 13 21 6"
                                          style="
                                            fill: none;
                                            stroke-linecap: round;
                                            stroke-linejoin: round;
                                            stroke-width: 2;
                                          "
                                        ></polyline>
                                        <line
                                          x1="20.8"
                                          y1="6"
                                          x2="7.2"
                                          y2="6"
                                          style="
                                            fill: none;
                                            stroke-linecap: round;
                                            stroke-linejoin: round;
                                            stroke-width: 2;
                                          "
                                        ></line>
                                        <circle
                                          cx="10.5"
                                          cy="20.5"
                                          r="0.5"
                                          style="
                                            fill: none;
                                            stroke-miterlimit: 10;
                                            stroke-width: 2;
                                          "
                                        ></circle>
                                        <circle
                                          cx="16.5"
                                          cy="20.5"
                                          r="0.5"
                                          style="
                                            fill: none;
                                            stroke-miterlimit: 10;
                                            stroke-width: 2;
                                          "
                                        ></circle>
                                      </svg>
                                    </span>
                                  </div>
                                </div>
                                <div class="list-style-detail ml-2 mr-2">
                                  <h6 class="font-weight-bold">
                                    Your order is placed
                                  </h6>
                                  <p class="m-0">
                                    <small class="text-secondary"
                                      >If several languages coalesce</small
                                    >
                                  </p>
                                  <p class="m-0">
                                    <small class="text-secondary">
                                      <svg
                                        xmlns="http://www.w3.org/2000/svg"
                                        class="text-secondary mr-1"
                                        width="15"
                                        fill="none"
                                        viewBox="0 0 24 24"
                                        stroke="currentColor"
                                      >
                                        <path
                                          stroke-linecap="round"
                                          stroke-linejoin="round"
                                          stroke-width="2"
                                          d="M12 8v4l3 3m6-3a9 9 0 11-18 0 9 9 0 0118 0z"
                                        />
                                      </svg>
                                      3 hours ago</small
                                    >
                                  </p>
                                </div>
                              </div>
                            </li>
                            <li class="dropdown-item-1 float-none p-3">
                              <div
                                class="list-item d-flex justify-content-start align-items-start"
                              >
                                <div class="avatar">
                                  <div
                                    class="avatar-img avatar-success avatar-20"
                                  >
                                    <span
                                      ><img
                                        class="avatar is-squared rounded-circle"
                                        src="../assets/images/user/2.jpg"
                                        alt="2.jpg"
                                    /></span>
                                  </div>
                                </div>
                                <div class="list-style-detail ml-2 mr-2">
                                  <h6 class="font-weight-bold">
                                    New message form cate
                                  </h6>
                                  <p class="m-0">
                                    <small class="text-secondary"
                                      >You have 3 unreded messages</small
                                    >
                                  </p>
                                  <p class="m-0">
                                    <small class="text-secondary">
                                      <svg
                                        xmlns="http://www.w3.org/2000/svg"
                                        class="text-secondary mr-1"
                                        width="15"
                                        fill="none"
                                        viewBox="0 0 24 24"
                                        stroke="currentColor"
                                      >
                                        <path
                                          stroke-linecap="round"
                                          stroke-linejoin="round"
                                          stroke-width="2"
                                          d="M12 8v4l3 3m6-3a9 9 0 11-18 0 9 9 0 0118 0z"
                                        />
                                      </svg>
                                      5 hours ago</small
                                    >
                                  </p>
                                </div>
                              </div>
                            </li>
                            <li class="dropdown-item-1 float-none p-3">
                              <div
                                class="list-item d-flex justify-content-start align-items-start"
                              >
                                <div class="avatar">
                                  <div
                                    class="avatar-img avatar-warning avatar-20"
                                  >
                                    <span>
                                      <svg
                                        xmlns="http://www.w3.org/2000/svg"
                                        xmlns:xlink="http://www.w3.org/1999/xlink"
                                        version="1.1"
                                        width="30"
                                        height="30"
                                        stroke="white"
                                        id="Capa_1"
                                        x="0px"
                                        y="0px"
                                        viewBox="0 0 512 512"
                                        style="
                                          enable-background: new 0 0 512 512;
                                        "
                                        xml:space="preserve"
                                      >
                                        <g>
                                          <g>
                                            <path
                                              d="M386.689,304.403c-35.587,0-64.538,28.951-64.538,64.538s28.951,64.538,64.538,64.538    c35.593,0,64.538-28.951,64.538-64.538S422.276,304.403,386.689,304.403z M386.689,401.21c-17.796,0-32.269-14.473-32.269-32.269    c0-17.796,14.473-32.269,32.269-32.269c17.796,0,32.269,14.473,32.269,32.269C418.958,386.738,404.485,401.21,386.689,401.21z"
                                            />
                                          </g>
                                        </g>
                                        <g>
                                          <g>
                                            <path
                                              d="M166.185,304.403c-35.587,0-64.538,28.951-64.538,64.538s28.951,64.538,64.538,64.538s64.538-28.951,64.538-64.538    S201.772,304.403,166.185,304.403z M166.185,401.21c-17.796,0-32.269-14.473-32.269-32.269c0-17.796,14.473-32.269,32.269-32.269    c17.791,0,32.269,14.473,32.269,32.269C198.454,386.738,183.981,401.21,166.185,401.21z"
                                            />
                                          </g>
                                        </g>
                                        <g>
                                          <g>
                                            <path
                                              d="M430.15,119.675c-2.743-5.448-8.32-8.885-14.419-8.885h-84.975v32.269h75.025l43.934,87.384l28.838-14.5L430.15,119.675z"
                                            />
                                          </g>
                                        </g>
                                        <g>
                                          <g>
                                            <rect
                                              x="216.202"
                                              y="353.345"
                                              width="122.084"
                                              height="32.269"
                                            />
                                          </g>
                                        </g>
                                        <g>
                                          <g>
                                            <path
                                              d="M117.781,353.345H61.849c-8.912,0-16.134,7.223-16.134,16.134c0,8.912,7.223,16.134,16.134,16.134h55.933    c8.912,0,16.134-7.223,16.134-16.134C133.916,360.567,126.693,353.345,117.781,353.345z"
                                            />
                                          </g>
                                        </g>
                                        <g>
                                          <g>
                                            <path
                                              d="M508.612,254.709l-31.736-40.874c-3.049-3.937-7.755-6.239-12.741-6.239H346.891V94.655    c0-8.912-7.223-16.134-16.134-16.134H61.849c-8.912,0-16.134,7.223-16.134,16.134s7.223,16.134,16.134,16.134h252.773v112.941    c0,8.912,7.223,16.134,16.134,16.134h125.478l23.497,30.268v83.211h-44.639c-8.912,0-16.134,7.223-16.134,16.134    c0,8.912,7.223,16.134,16.134,16.134h60.773c8.912,0,16.134-7.223,16.135-16.134V264.605    C512,261.023,510.806,257.538,508.612,254.709z"
                                            />
                                          </g>
                                        </g>
                                        <g>
                                          <g>
                                            <path
                                              d="M116.706,271.597H42.487c-8.912,0-16.134,7.223-16.134,16.134c0,8.912,7.223,16.134,16.134,16.134h74.218    c8.912,0,16.134-7.223,16.134-16.134C132.84,278.82,125.617,271.597,116.706,271.597z"
                                            />
                                          </g>
                                        </g>
                                        <g>
                                          <g>
                                            <path
                                              d="M153.815,208.134H16.134C7.223,208.134,0,215.357,0,224.269s7.223,16.134,16.134,16.134h137.681    c8.912,0,16.134-7.223,16.134-16.134S162.727,208.134,153.815,208.134z"
                                            />
                                          </g>
                                        </g>
                                        <g>
                                          <g>
                                            <path
                                              d="M180.168,144.672H42.487c-8.912,0-16.134,7.223-16.134,16.134c0,8.912,7.223,16.134,16.134,16.134h137.681    c8.912,0,16.134-7.223,16.134-16.134C196.303,151.895,189.08,144.672,180.168,144.672z"
                                            />
                                          </g>
                                        </g>
                                        <g></g>
                                        <g></g>
                                        <g></g>
                                        <g></g>
                                        <g></g>
                                        <g></g>
                                        <g></g>
                                        <g></g>
                                        <g></g>
                                        <g></g>
                                        <g></g>
                                        <g></g>
                                        <g></g>
                                        <g></g>
                                        <g></g>
                                      </svg>
                                    </span>
                                  </div>
                                </div>
                                <div class="list-style-detail ml-2 mr-2">
                                  <h6 class="font-weight-bold">
                                    Your item is shipped
                                  </h6>
                                  <p class="m-0">
                                    <small class="text-secondary"
                                      >You got new order of goods</small
                                    >
                                  </p>
                                  <p class="m-0">
                                    <small class="text-secondary">
                                      <svg
                                        xmlns="http://www.w3.org/2000/svg"
                                        class="text-secondary mr-1"
                                        width="15"
                                        fill="none"
                                        viewBox="0 0 24 24"
                                        stroke="currentColor"
                                      >
                                        <path
                                          stroke-linecap="round"
                                          stroke-linejoin="round"
                                          stroke-width="2"
                                          d="M12 8v4l3 3m6-3a9 9 0 11-18 0 9 9 0 0118 0z"
                                        />
                                      </svg>
                                      5 hours ago</small
                                    >
                                  </p>
                                </div>
                              </div>
                            </li>
                          </ul>
                        </div>
                        <div class="card-footer text-muted p-3">
                          <p
                            class="mb-0 text-primary text-center font-weight-bold"
                          >
                            Show all notifications
                          </p>
                        </div>
                      </div> --}}
                    </div>
                  </li>
                  <li class="nav-item nav-icon dropdown">
                    {{-- <a
                      href="#"
                      class="search-toggle dropdown-toggle"
                      id="dropdownMenuButton2"
                      data-toggle="dropdown"
                      aria-haspopup="true"
                      aria-expanded="false"
                    >
                      <img
                        src="{{url('Flag\union-jack-26119_1280.png')}}"
                        class="img-fluid rounded-circle"
                        alt="user"
                        style="height: 30px; min-width: 30px; width: 30px"
                      />
                      <span class="bg-primary"></span>
                    </a> --}}
                    <div
                      class="iq-sub-dropdown dropdown-menu"
                      aria-labelledby="dropdownMenuButton2"
                    >
                      <div class="card shadow-none m-0 border-0">
                        <div class="p-0">
                          <ul
                            class="dropdown-menu-1 list-group list-group-flush"
                          >
                            {{-- <li class="dropdown-item-1 list-group-item px-2">
                              <a class="p-0" href="#"
                                ><img
                                  src="../assets/images/Flag/flag-03.png"
                                  alt="img-flaf"
                                  class="img-fluid mr-2"
                                  style="
                                    width: 15px;
                                    height: 15px;
                                    min-width: 15px;
                                  "
                                />Spanish</a
                              >
                            </li> --}}
                            {{-- <li class="dropdown-item-1 list-group-item px-2">
                              <a class="p-0" href="#"
                                ><img
                                  src="../assets/images/Flag/flag-04.png"
                                  alt="img-flaf"
                                  class="img-fluid mr-2"
                                  style="
                                    width: 15px;
                                    height: 15px;
                                    min-width: 15px;
                                  "
                                />Italian</a
                              >
                            </li> --}}
                            {{-- <li class="dropdown-item-1 list-group-item px-2">
                              <a class="p-0" href="#"
                                ><img
                                  src="../assets/images/Flag/flag-02.png"
                                  alt="img-flaf"
                                  class="img-fluid mr-2"
                                  style="
                                    width: 15px;
                                    height: 15px;
                                    min-width: 15px;
                                  "
                                />French</a
                              >
                            </li> --}}
                            {{-- <li class="dropdown-item-1 list-group-item px-2">
                              <a class="p-0" href="#"
                                ><img
                                  src="../assets/images/Flag/flag-05.png"
                                  alt="img-flaf"
                                  class="img-fluid mr-2"
                                  style="
                                    width: 15px;
                                    height: 15px;
                                    min-width: 15px;
                                  "
                                />German</a
                              >
                            </li> --}}
                            {{-- <li class="dropdown-item-1 list-group-item px-2">
                              <a class="p-0" href="#"
                                ><img
                                  src="../assets/images/Flag/flag-06.png"
                                  alt="img-flaf"
                                  class="img-fluid mr-2"
                                  style="
                                    width: 15px;
                                    height: 15px;
                                    min-width: 15px;
                                  "
                                />Japanese</a
                              >
                            </li> --}}
                          </ul>
                        </div>
                      </div>
                    </div>
                  </li>
                  <li class="nav-item nav-icon search-content">
                    <a
                      href="#"
                      class="search-toggle rounded"
                      id="dropdownSearch"
                      data-toggle="dropdown"
                      aria-haspopup="true"
                      aria-expanded="false"
                    >
                      <svg
                        class="svg-icon text-secondary"
                        id="h-suns"
                        height="25"
                        width="25"
                        xmlns="http://www.w3.org/2000/svg"
                        fill="none"
                        viewBox="0 0 24 24"
                        stroke="currentColor"
                      >
                        <path
                          stroke-linecap="round"
                          stroke-linejoin="round"
                          stroke-width="2"
                          d="M21 21l-6-6m2-5a7 7 0 11-14 0 7 7 0 0114 0z"
                        />
                      </svg>
                    </a>
                    <div
                      class="iq-search-bar iq-sub-dropdown dropdown-menu"
                      aria-labelledby="dropdownSearch"
                    >
                      <form action="#" class="searchbox p-2">
                        <div class="form-group mb-0 position-relative">
                          <input
                            type="text"
                            class="text search-input font-size-12"
                            placeholder="type here to search..."
                          />
                          <a href="#" class="search-link">
                            <svg
                              xmlns="http://www.w3.org/2000/svg"
                              class=""
                              width="20"
                              fill="none"
                              viewBox="0 0 24 24"
                              stroke="currentColor"
                            >
                              <path
                                stroke-linecap="round"
                                stroke-linejoin="round"
                                stroke-width="2"
                                d="M21 21l-6-6m2-5a7 7 0 11-14 0 7 7 0 0114 0z"
                              />
                            </svg>
                          </a>
                        </div>
                      </form>
                    </div>
                  </li>
                  <li class="nav-item nav-icon dropdown">
                    <a
                      href="#"
                      class="nav-item nav-icon dropdown-toggle pr-0 search-toggle"
                      id="dropdownMenuButton"
                      data-toggle="dropdown"
                      aria-haspopup="true"
                      aria-expanded="false"
                    >
                      <img
                        src="http://127.0.0.1:8000/uploads/product/userpro.avif"
                        class="img-fluid avatar-rounded"
                        alt="user"
                      />

                      <span class="mb-0 ml-2 user-name">   {{ Auth::user()->name }}</span>
                    </a>
                    <ul
                      class="dropdown-menu dropdown-menu-right"
                      aria-labelledby="dropdownMenuButton"
                    >
                      <li class="dropdown-item d-flex svg-icon">
                        <svg
                          class="svg-icon mr-0 text-secondary"
                          id="h-01-p"
                          width="20"
                          xmlns="http://www.w3.org/2000/svg"
                          fill="none"
                          viewBox="0 0 24 24"
                          stroke="currentColor"
                        >
                          <path
                            stroke-linecap="round"
                            stroke-linejoin="round"
                            stroke-width="2"
                            d="M5.121 17.804A13.937 13.937 0 0112 16c2.5 0 4.847.655 6.879 1.804M15 10a3 3 0 11-6 0 3 3 0 016 0zm6 2a9 9 0 11-18 0 9 9 0 0118 0z"
                          />
                        </svg>
                        <a href="{{url('user_profile')}}">My Profile</a>
                      </li>
                      {{-- <li class="dropdown-item d-flex svg-icon">
                        <svg
                          class="svg-icon mr-0 text-secondary"
                          id="h-02-p"
                          width="20"
                          xmlns="http://www.w3.org/2000/svg"
                          fill="none"
                          viewBox="0 0 24 24"
                          stroke="currentColor"
                        >
                          <path
                            stroke-linecap="round"
                            stroke-linejoin="round"
                            stroke-width="2"
                            d="M11 5H6a2 2 0 00-2 2v11a2 2 0 002 2h11a2 2 0 002-2v-5m-1.414-9.414a2 2 0 112.828 2.828L11.828 15H9v-2.828l8.586-8.586z"
                          />
                        </svg>
                        {{-- <a href="{{url('user_profile_edit')}}">Edit Profile</a>
                      </li> --}}
                     {{--  <li class="dropdown-item d-flex svg-icon">
                        <svg
                          class="svg-icon mr-0 text-secondary"
                          id="h-03-p"
                          width="20"
                          xmlns="http://www.w3.org/2000/svg"
                          fill="none"
                          viewBox="0 0 24 24"
                          stroke="currentColor"
                        >
                          <path
                            stroke-linecap="round"
                            stroke-linejoin="round"
                            stroke-width="2"
                            d="M10.325 4.317c.426-1.756 2.924-1.756 3.35 0a1.724 1.724 0 002.573 1.066c1.543-.94 3.31.826 2.37 2.37a1.724 1.724 0 001.065 2.572c1.756.426 1.756 2.924 0 3.35a1.724 1.724 0 00-1.066 2.573c.94 1.543-.826 3.31-2.37 2.37a1.724 1.724 0 00-2.572 1.065c-.426 1.756-2.924 1.756-3.35 0a1.724 1.724 0 00-2.573-1.066c-1.543.94-3.31-.826-2.37-2.37a1.724 1.724 0 00-1.065-2.572c-1.756-.426-1.756-2.924 0-3.35a1.724 1.724 0 001.066-2.573c-.94-1.543.826-3.31 2.37-2.37.996.608 2.296.07 2.572-1.065z"
                          />
                          <path
                            stroke-linecap="round"
                            stroke-linejoin="round"
                            stroke-width="2"
                            d="M15 12a3 3 0 11-6 0 3 3 0 016 0z"
                          />
                        </svg>
                        <a href="{{url('user_account_setting')}}"
                          >Account Settings</a
                        > --}}
                      {{-- </li> --}}
                      {{-- <li class="dropdown-item d-flex svg-icon">
                        <svg
                          class="svg-icon mr-0 text-secondary"
                          id="h-04-p"
                          width="20"
                          xmlns="http://www.w3.org/2000/svg"
                          fill="none"
                          viewBox="0 0 24 24"
                          stroke="currentColor"
                        >
                          <path
                            stroke-linecap="round"
                            stroke-linejoin="round"
                            stroke-width="2"
                            d="M9 12l2 2 4-4m5.618-4.016A11.955 11.955 0 0112 2.944a11.955 11.955 0 01-8.618 3.04A12.02 12.02 0 003 9c0 5.591 3.824 10.29 9 11.622 5.176-1.332 9-6.03 9-11.622 0-1.042-.133-2.052-.382-3.016z"
                          />
                        </svg>
                        <a href="{{url('user_privacy_setting')}}"
                          >Privacy Settings</a
                        >
                      </li> --}}
                      <li class="dropdown-item d-flex svg-icon border-top">
                        <svg
                          class="svg-icon mr-0 text-secondary"
                          id="h-05-p"
                          width="20"
                          xmlns="http://www.w3.org/2000/svg"
                          fill="none"
                          viewBox="0 0 24 24"
                          stroke="currentColor"
                        >
                          <path
                            stroke-linecap="round"
                            stroke-linejoin="round"
                            stroke-width="2"
                            d="M17 16l4-4m0 0l-4-4m4 4H7m6 4v1a3 3 0 01-3 3H6a3 3 0 01-3-3V7a3 3 0 013-3h4a3 3 0 013 3v1"
                          />
                        </svg>
                        <form action="{{ route('logout') }}" method="POST" class="d-flex" role="search">
                          @csrf
                          @method('DELETE')
                          <button class="btn btn-danger" type="submit">Logout</button>
                      </form>
                      </li>
                    </ul>
                  </li>
                </ul>
              </div>
            </div>
          </nav>
        </div>
      </div>