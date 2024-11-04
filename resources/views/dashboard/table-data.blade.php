@extends('dashboard.layout.main')
@section('main-containers')

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
                      <div class="card shadow-none m-0 border-0">
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
                      </div>
                    </div>
                  </li>
                  <li class="nav-item nav-icon dropdown">
                    <a
                      href="#"
                      class="search-toggle dropdown-toggle"
                      id="dropdownMenuButton2"
                      data-toggle="dropdown"
                      aria-haspopup="true"
                      aria-expanded="false"
                    >
                      <img
                        src="../assets/images/Flag/flag001.png"
                        class="img-fluid rounded-circle"
                        alt="user"
                        style="height: 30px; min-width: 30px; width: 30px"
                      />
                      <span class="bg-primary"></span>
                    </a>
                    <div
                      class="iq-sub-dropdown dropdown-menu"
                      aria-labelledby="dropdownMenuButton2"
                    >
                      <div class="card shadow-none m-0 border-0">
                        <div class="p-0">
                          <ul
                            class="dropdown-menu-1 list-group list-group-flush"
                          >
                            <li class="dropdown-item-1 list-group-item px-2">
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
                            </li>
                            <li class="dropdown-item-1 list-group-item px-2">
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
                            </li>
                            <li class="dropdown-item-1 list-group-item px-2">
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
                            </li>
                            <li class="dropdown-item-1 list-group-item px-2">
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
                            </li>
                            <li class="dropdown-item-1 list-group-item px-2">
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
                            </li>
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
                        src="../assets/images/user/1.jpg"
                        class="img-fluid avatar-rounded"
                        alt="user"
                      />
                      <span class="mb-0 ml-2 user-name">John Doe</span>
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
                        <a href="../app/user-profile.html">My Profile</a>
                      </li>
                      <li class="dropdown-item d-flex svg-icon">
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
                        <a href="../app/user-profile-edit.html">Edit Profile</a>
                      </li>
                      <li class="dropdown-item d-flex svg-icon">
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
                        <a href="../app/user-account-setting.html"
                          >Account Settings</a
                        >
                      </li>
                      <li class="dropdown-item d-flex svg-icon">
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
                        <a href="../app/user-privacy-setting.html"
                          >Privacy Settings</a
                        >
                      </li>
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
                        <a href="../backend/auth-sign-in.html">Logout</a>
                      </li>
                    </ul>
                  </li>
                </ul>
              </div>
            </div>
          </nav>
        </div>
      </div>
      <div class="content-page">
      <div class="container-fluid">
         <div class="row">
            <div class="col-sm-12">
               <div class="card">
                  <div class="card-header d-flex justify-content-between">
                     <div class="header-title">
                        <h4 class="card-title">Bootstrap Datatables</h4>
                     </div>
                  <div class="header-action">
                           <i data-toggle="collapse" data-target="#datatable-1" aria-expanded="false">
                              <svg width="20" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                                 <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M10 20l4-16m4 4l4 4-4 4M6 16l-4-4 4-4" />
                              </svg>
                           </i>
                        </div>
                  </div>
                  <div class="card-body">
                     <div class="collapse" id="datatable-1">
                           <div class="card"><kbd class="bg-dark"><pre id="bootstrap-datatables" class="text-white"><code>
&#x3C;table id=&#x22;datatable&#x22; class=&#x22;table data-table table-striped table-bordered&#x22; &#x3E;
   &#x3C;thead&#x3E;
      &#x3C;tr&#x3E;
         &#x3C;th&#x3E;Name&#x3C;/th&#x3E;
         &#x3C;th&#x3E;Position&#x3C;/th&#x3E;
         &#x3C;th&#x3E;Office&#x3C;/th&#x3E;
         &#x3C;th&#x3E;Age&#x3C;/th&#x3E;
         &#x3C;th&#x3E;Start date&#x3C;/th&#x3E;
         &#x3C;th&#x3E;Salary&#x3C;/th&#x3E;
      &#x3C;/tr&#x3E;
   &#x3C;/thead&#x3E;
   &#x3C;tbody&#x3E;
      &#x3C;tr&#x3E;
         &#x3C;td&#x3E;Tiger Nixon&#x3C;/td&#x3E;
         &#x3C;td&#x3E;System Architect&#x3C;/td&#x3E;
         &#x3C;td&#x3E;Edinburgh&#x3C;/td&#x3E;
         &#x3C;td&#x3E;61&#x3C;/td&#x3E;
         &#x3C;td&#x3E;2011/04/25&#x3C;/td&#x3E;
         &#x3C;td&#x3E;$320,800&#x3C;/td&#x3E;
      &#x3C;/tr&#x3E;
      &#x3C;tr&#x3E;
         &#x3C;td&#x3E;Garrett Winters&#x3C;/td&#x3E;
         &#x3C;td&#x3E;Accountant&#x3C;/td&#x3E;
         &#x3C;td&#x3E;Tokyo&#x3C;/td&#x3E;
         &#x3C;td&#x3E;63&#x3C;/td&#x3E;
         &#x3C;td&#x3E;2011/07/25&#x3C;/td&#x3E;
         &#x3C;td&#x3E;$170,750&#x3C;/td&#x3E;
      &#x3C;/tr&#x3E;
      &#x3C;tr&#x3E;
         &#x3C;td&#x3E;Ashton Cox&#x3C;/td&#x3E;
         &#x3C;td&#x3E;Junior Technical Author&#x3C;/td&#x3E;
         &#x3C;td&#x3E;San Francisco&#x3C;/td&#x3E;
         &#x3C;td&#x3E;66&#x3C;/td&#x3E;
         &#x3C;td&#x3E;2009/01/12&#x3C;/td&#x3E;
         &#x3C;td&#x3E;$86,000&#x3C;/td&#x3E;
      &#x3C;/tr&#x3E;
      &#x3C;tr&#x3E;
         &#x3C;td&#x3E;Cedric Kelly&#x3C;/td&#x3E;
         &#x3C;td&#x3E;Senior Javascript Developer&#x3C;/td&#x3E;
         &#x3C;td&#x3E;Edinburgh&#x3C;/td&#x3E;
         &#x3C;td&#x3E;22&#x3C;/td&#x3E;
         &#x3C;td&#x3E;2012/03/29&#x3C;/td&#x3E;
         &#x3C;td&#x3E;$433,060&#x3C;/td&#x3E;
      &#x3C;/tr&#x3E;
      &#x3C;tr&#x3E;
         &#x3C;td&#x3E;Airi Satou&#x3C;/td&#x3E;
         &#x3C;td&#x3E;Accountant&#x3C;/td&#x3E;
         &#x3C;td&#x3E;Tokyo&#x3C;/td&#x3E;
         &#x3C;td&#x3E;33&#x3C;/td&#x3E;
         &#x3C;td&#x3E;2008/11/28&#x3C;/td&#x3E;
         &#x3C;td&#x3E;$162,700&#x3C;/td&#x3E;
      &#x3C;/tr&#x3E;
      &#x3C;tr&#x3E;
         &#x3C;td&#x3E;Brielle Williamson&#x3C;/td&#x3E;
         &#x3C;td&#x3E;Integration Specialist&#x3C;/td&#x3E;
         &#x3C;td&#x3E;New York&#x3C;/td&#x3E;
         &#x3C;td&#x3E;61&#x3C;/td&#x3E;
         &#x3C;td&#x3E;2012/12/02&#x3C;/td&#x3E;
         &#x3C;td&#x3E;$372,000&#x3C;/td&#x3E;
      &#x3C;/tr&#x3E;
      &#x3C;tr&#x3E;
         &#x3C;td&#x3E;Herrod Chandler&#x3C;/td&#x3E;
         &#x3C;td&#x3E;Sales Assistant&#x3C;/td&#x3E;
         &#x3C;td&#x3E;San Francisco&#x3C;/td&#x3E;
         &#x3C;td&#x3E;59&#x3C;/td&#x3E;
         &#x3C;td&#x3E;2012/08/06&#x3C;/td&#x3E;
         &#x3C;td&#x3E;$137,500&#x3C;/td&#x3E;
      &#x3C;/tr&#x3E;
      &#x3C;tr&#x3E;
         &#x3C;td&#x3E;Rhona Davidson&#x3C;/td&#x3E;
         &#x3C;td&#x3E;Integration Specialist&#x3C;/td&#x3E;
         &#x3C;td&#x3E;Tokyo&#x3C;/td&#x3E;
         &#x3C;td&#x3E;55&#x3C;/td&#x3E;
         &#x3C;td&#x3E;2010/10/14&#x3C;/td&#x3E;
         &#x3C;td&#x3E;$327,900&#x3C;/td&#x3E;
      &#x3C;/tr&#x3E;
      &#x3C;tr&#x3E;
         &#x3C;td&#x3E;Colleen Hurst&#x3C;/td&#x3E;
         &#x3C;td&#x3E;Javascript Developer&#x3C;/td&#x3E;
         &#x3C;td&#x3E;San Francisco&#x3C;/td&#x3E;
         &#x3C;td&#x3E;39&#x3C;/td&#x3E;
         &#x3C;td&#x3E;2009/09/15&#x3C;/td&#x3E;
         &#x3C;td&#x3E;$205,500&#x3C;/td&#x3E;
      &#x3C;/tr&#x3E;
      &#x3C;tr&#x3E;
         &#x3C;td&#x3E;Sonya Frost&#x3C;/td&#x3E;
         &#x3C;td&#x3E;Software Engineer&#x3C;/td&#x3E;
         &#x3C;td&#x3E;Edinburgh&#x3C;/td&#x3E;
         &#x3C;td&#x3E;23&#x3C;/td&#x3E;
         &#x3C;td&#x3E;2008/12/13&#x3C;/td&#x3E;
         &#x3C;td&#x3E;$103,600&#x3C;/td&#x3E;
      &#x3C;/tr&#x3E;
      &#x3C;tr&#x3E;
         &#x3C;td&#x3E;Jena Gaines&#x3C;/td&#x3E;
         &#x3C;td&#x3E;Office Manager&#x3C;/td&#x3E;
         &#x3C;td&#x3E;London&#x3C;/td&#x3E;
         &#x3C;td&#x3E;30&#x3C;/td&#x3E;
         &#x3C;td&#x3E;2008/12/19&#x3C;/td&#x3E;
         &#x3C;td&#x3E;$90,560&#x3C;/td&#x3E;
      &#x3C;/tr&#x3E;
      &#x3C;tr&#x3E;
         &#x3C;td&#x3E;Quinn Flynn&#x3C;/td&#x3E;
         &#x3C;td&#x3E;Support Lead&#x3C;/td&#x3E;
         &#x3C;td&#x3E;Edinburgh&#x3C;/td&#x3E;
         &#x3C;td&#x3E;22&#x3C;/td&#x3E;
         &#x3C;td&#x3E;2013/03/03&#x3C;/td&#x3E;
         &#x3C;td&#x3E;$342,000&#x3C;/td&#x3E;
      &#x3C;/tr&#x3E;
      &#x3C;tr&#x3E;
         &#x3C;td&#x3E;Charde Marshall&#x3C;/td&#x3E;
         &#x3C;td&#x3E;Regional Director&#x3C;/td&#x3E;
         &#x3C;td&#x3E;San Francisco&#x3C;/td&#x3E;
         &#x3C;td&#x3E;36&#x3C;/td&#x3E;
         &#x3C;td&#x3E;2008/10/16&#x3C;/td&#x3E;
         &#x3C;td&#x3E;$470,600&#x3C;/td&#x3E;
      &#x3C;/tr&#x3E;
      &#x3C;tr&#x3E;
         &#x3C;td&#x3E;Haley Kennedy&#x3C;/td&#x3E;
         &#x3C;td&#x3E;Senior Marketing Designer&#x3C;/td&#x3E;
         &#x3C;td&#x3E;London&#x3C;/td&#x3E;
         &#x3C;td&#x3E;43&#x3C;/td&#x3E;
         &#x3C;td&#x3E;2012/12/18&#x3C;/td&#x3E;
         &#x3C;td&#x3E;$313,500&#x3C;/td&#x3E;
      &#x3C;/tr&#x3E;
      &#x3C;tr&#x3E;
         &#x3C;td&#x3E;Tatyana Fitzpatrick&#x3C;/td&#x3E;
         &#x3C;td&#x3E;Regional Director&#x3C;/td&#x3E;
         &#x3C;td&#x3E;London&#x3C;/td&#x3E;
         &#x3C;td&#x3E;19&#x3C;/td&#x3E;
         &#x3C;td&#x3E;2010/03/17&#x3C;/td&#x3E;
         &#x3C;td&#x3E;$385,750&#x3C;/td&#x3E;
      &#x3C;/tr&#x3E;
      &#x3C;tr&#x3E;
         &#x3C;td&#x3E;Michael Silva&#x3C;/td&#x3E;
         &#x3C;td&#x3E;Marketing Designer&#x3C;/td&#x3E;
         &#x3C;td&#x3E;London&#x3C;/td&#x3E;
         &#x3C;td&#x3E;66&#x3C;/td&#x3E;
         &#x3C;td&#x3E;2012/11/27&#x3C;/td&#x3E;
         &#x3C;td&#x3E;$198,500&#x3C;/td&#x3E;
      &#x3C;/tr&#x3E;
      &#x3C;tr&#x3E;
         &#x3C;td&#x3E;Paul Byrd&#x3C;/td&#x3E;
         &#x3C;td&#x3E;Chief Financial Officer (CFO)&#x3C;/td&#x3E;
         &#x3C;td&#x3E;New York&#x3C;/td&#x3E;
         &#x3C;td&#x3E;64&#x3C;/td&#x3E;
         &#x3C;td&#x3E;2010/06/09&#x3C;/td&#x3E;
         &#x3C;td&#x3E;$725,000&#x3C;/td&#x3E;
      &#x3C;/tr&#x3E;
      &#x3C;tr&#x3E;
         &#x3C;td&#x3E;Gloria Little&#x3C;/td&#x3E;
         &#x3C;td&#x3E;Systems Administrator&#x3C;/td&#x3E;
         &#x3C;td&#x3E;New York&#x3C;/td&#x3E;
         &#x3C;td&#x3E;59&#x3C;/td&#x3E;
         &#x3C;td&#x3E;2009/04/10&#x3C;/td&#x3E;
         &#x3C;td&#x3E;$237,500&#x3C;/td&#x3E;
      &#x3C;/tr&#x3E;
      &#x3C;tr&#x3E;
         &#x3C;td&#x3E;Bradley Greer&#x3C;/td&#x3E;
         &#x3C;td&#x3E;Software Engineer&#x3C;/td&#x3E;
         &#x3C;td&#x3E;London&#x3C;/td&#x3E;
         &#x3C;td&#x3E;41&#x3C;/td&#x3E;
         &#x3C;td&#x3E;2012/10/13&#x3C;/td&#x3E;
         &#x3C;td&#x3E;$132,000&#x3C;/td&#x3E;
      &#x3C;/tr&#x3E;
      &#x3C;tr&#x3E;
         &#x3C;td&#x3E;Dai Rios&#x3C;/td&#x3E;
         &#x3C;td&#x3E;Personnel Lead&#x3C;/td&#x3E;
         &#x3C;td&#x3E;Edinburgh&#x3C;/td&#x3E;
         &#x3C;td&#x3E;35&#x3C;/td&#x3E;
         &#x3C;td&#x3E;2012/09/26&#x3C;/td&#x3E;
         &#x3C;td&#x3E;$217,500&#x3C;/td&#x3E;
      &#x3C;/tr&#x3E;
&#x3C;/table&#x3E;
</code></pre></kbd></div>
                        </div>
                     <p>Images in Bootstrap are made responsive with <code>.img-fluid</code>. <code>max-width: 100%;</code> and <code>height: auto;</code> are applied to the image so that it scales with the parent element.</p>
                     <div class="table-responsive">
                        <table id="datatable-1" class="table data-table table-striped table-bordered" >
                           <thead>
                              <tr>
                                 <th>Name</th>
                                 <th>Position</th>
                                 <th>Office</th>
                                 <th>Age</th>
                                 <th>Start date</th>
                                 <th class="text-right">Salary</th>
                              </tr>
                           </thead>
                           <tbody>
                              <tr>
                                 <td>Tiger Nixon</td>
                                 <td>System Architect</td>
                                 <td>Edinburgh</td>
                                 <td>61</td>
                                 <td>2011/04/25</td>
                                 <td class="text-right">$320,800</td>
                              </tr>
                              <tr>
                                 <td>Garrett Winters</td>
                                 <td>Accountant</td>
                                 <td>Tokyo</td>
                                 <td>63</td>
                                 <td>2011/07/25</td>
                                 <td class="text-right">$170,750</td>
                              </tr>
                              <tr>
                                 <td>Ashton Cox</td>
                                 <td>Junior Technical Author</td>
                                 <td>San Francisco</td>
                                 <td>66</td>
                                 <td>2009/01/12</td>
                                 <td class="text-right">$86,000</td>
                              </tr>
                              <tr>
                                 <td>Cedric Kelly</td>
                                 <td>Senior Javascript Developer</td>
                                 <td>Edinburgh</td>
                                 <td>22</td>
                                 <td>2012/03/29</td>
                                 <td class="text-right">$433,060</td>
                              </tr>
                              <tr>
                                 <td>Airi Satou</td>
                                 <td>Accountant</td>
                                 <td>Tokyo</td>
                                 <td>33</td>
                                 <td>2008/11/28</td>
                                 <td class="text-right">$162,700</td>
                              </tr>
                              <tr>
                                 <td>Brielle Williamson</td>
                                 <td>Integration Specialist</td>
                                 <td>New York</td>
                                 <td>61</td>
                                 <td>2012/12/02</td>
                                 <td class="text-right">$372,000</td>
                              </tr>
                              <tr>
                                 <td>Herrod Chandler</td>
                                 <td>Sales Assistant</td>
                                 <td>San Francisco</td>
                                 <td>59</td>
                                 <td>2012/08/06</td>
                                 <td class="text-right">$137,500</td>
                              </tr>
                              <tr>
                                 <td>Rhona Davidson</td>
                                 <td>Integration Specialist</td>
                                 <td>Tokyo</td>
                                 <td>55</td>
                                 <td>2010/10/14</td>
                                 <td class="text-right">$327,900</td>
                              </tr>
                              <tr>
                                 <td>Colleen Hurst</td>
                                 <td>Javascript Developer</td>
                                 <td>San Francisco</td>
                                 <td>39</td>
                                 <td>2009/09/15</td>
                                 <td class="text-right">$205,500</td>
                              </tr>
                              <tr>
                                 <td>Sonya Frost</td>
                                 <td>Software Engineer</td>
                                 <td>Edinburgh</td>
                                 <td>23</td>
                                 <td>2008/12/13</td>
                                 <td class="text-right">$103,600</td>
                              </tr>
                              <tr>
                                 <td>Jena Gaines</td>
                                 <td>Office Manager</td>
                                 <td>London</td>
                                 <td>30</td>
                                 <td>2008/12/19</td>
                                 <td class="text-right">$90,560</td>
                              </tr>
                              <tr>
                                 <td>Quinn Flynn</td>
                                 <td>Support Lead</td>
                                 <td>Edinburgh</td>
                                 <td>22</td>
                                 <td>2013/03/03</td>
                                 <td class="text-right">$342,000</td>
                              </tr>
                              <tr>
                                 <td>Charde Marshall</td>
                                 <td>Regional Director</td>
                                 <td>San Francisco</td>
                                 <td>36</td>
                                 <td>2008/10/16</td>
                                 <td class="text-right">$470,600</td>
                              </tr>
                              <tr>
                                 <td>Haley Kennedy</td>
                                 <td>Senior Marketing Designer</td>
                                 <td>London</td>
                                 <td>43</td>
                                 <td>2012/12/18</td>
                                 <td class="text-right">$313,500</td>
                              </tr>
                              <tr>
                                 <td>Tatyana Fitzpatrick</td>
                                 <td>Regional Director</td>
                                 <td>London</td>
                                 <td>19</td>
                                 <td>2010/03/17</td>
                                 <td class="text-right">$385,750</td>
                              </tr>
                              <tr>
                                 <td>Michael Silva</td>
                                 <td>Marketing Designer</td>
                                 <td>London</td>
                                 <td>66</td>
                                 <td>2012/11/27</td>
                                 <td class="text-right">$198,500</td>
                              </tr>
                              <tr>
                                 <td>Paul Byrd</td>
                                 <td>Chief Financial Officer (CFO)</td>
                                 <td>New York</td>
                                 <td>64</td>
                                 <td>2010/06/09</td>
                                 <td class="text-right">$725,000</td>
                              </tr>
                              <tr>
                                 <td>Gloria Little</td>
                                 <td>Systems Administrator</td>
                                 <td>New York</td>
                                 <td>59</td>
                                 <td>2009/04/10</td>
                                 <td class="text-right">$237,500</td>
                              </tr>
                              <tr>
                                 <td>Bradley Greer</td>
                                 <td>Software Engineer</td>
                                 <td>London</td>
                                 <td>41</td>
                                 <td>2012/10/13</td>
                                 <td class="text-right">$132,000</td>
                              </tr>
                              <tr>
                                 <td>Dai Rios</td>
                                 <td>Personnel Lead</td>
                                 <td>Edinburgh</td>
                                 <td>35</td>
                                 <td>2012/09/26</td>
                                 <td class="text-right">$217,500</td>
                              </tr>
                              <tr>
                                 <td>Jenette Caldwell</td>
                                 <td>Development Lead</td>
                                 <td>New York</td>
                                 <td>30</td>
                                 <td>2011/09/03</td>
                                 <td class="text-right">$345,000</td>
                              </tr>
                              <tr>
                                 <td>Yuri Berry</td>
                                 <td>Chief Marketing Officer (CMO)</td>
                                 <td>New York</td>
                                 <td>40</td>
                                 <td>2009/06/25</td>
                                 <td class="text-right">$675,000</td>
                              </tr>
                              <tr>
                                 <td>Caesar Vance</td>
                                 <td>Pre-Sales Support</td>
                                 <td>New York</td>
                                 <td>21</td>
                                 <td>2011/12/12</td>
                                 <td class="text-right">$106,450</td>
                              </tr>
                              <tr>
                                 <td>Doris Wilder</td>
                                 <td>Sales Assistant</td>
                                 <td>Sydney</td>
                                 <td>23</td>
                                 <td>2010/09/20</td>
                                 <td class="text-right">$85,600</td>
                              </tr>
                              <tr>
                                 <td>Angelica Ramos</td>
                                 <td>Chief Executive Officer (CEO)</td>
                                 <td>London</td>
                                 <td>47</td>
                                 <td>2009/10/09</td>
                                 <td class="text-right">$1,200,000</td>
                              </tr>
                              <tr>
                                 <td>Gavin Joyce</td>
                                 <td>Developer</td>
                                 <td>Edinburgh</td>
                                 <td>42</td>
                                 <td>2010/12/22</td>
                                 <td class="text-right">$92,575</td>
                              </tr>
                              <tr>
                                 <td>Jennifer Chang</td>
                                 <td>Regional Director</td>
                                 <td>Singapore</td>
                                 <td>28</td>
                                 <td>2010/11/14</td>
                                 <td class="text-right">$357,650</td>
                              </tr>
                              <tr>
                                 <td>Brenden Wagner</td>
                                 <td>Software Engineer</td>
                                 <td>San Francisco</td>
                                 <td>28</td>
                                 <td>2011/06/07</td>
                                 <td class="text-right">$206,850</td>
                              </tr>
                              <tr>
                                 <td>Fiona Green</td>
                                 <td>Chief Operating Officer (COO)</td>
                                 <td>San Francisco</td>
                                 <td>48</td>
                                 <td>2010/03/11</td>
                                 <td class="text-right">$850,000</td>
                              </tr>
                              <tr>
                                 <td>Shou Itou</td>
                                 <td>Regional Marketing</td>
                                 <td>Tokyo</td>
                                 <td>20</td>
                                 <td>2011/08/14</td>
                                 <td class="text-right">$163,000</td>
                              </tr>
                              <tr>
                                 <td>Michelle House</td>
                                 <td>Integration Specialist</td>
                                 <td>Sydney</td>
                                 <td>37</td>
                                 <td>2011/06/02</td>
                                 <td class="text-right">$95,400</td>
                              </tr>
                              <tr>
                                 <td>Suki Burks</td>
                                 <td>Developer</td>
                                 <td>London</td>
                                 <td>53</td>
                                 <td>2009/10/22</td>
                                 <td class="text-right">$114,500</td>
                              </tr>
                              <tr>
                                 <td>Prescott Bartlett</td>
                                 <td>Technical Author</td>
                                 <td>London</td>
                                 <td>27</td>
                                 <td>2011/05/07</td>
                                 <td class="text-right">$145,000</td>
                              </tr>
                              <tr>
                                 <td>Gavin Cortez</td>
                                 <td>Team Leader</td>
                                 <td>San Francisco</td>
                                 <td>22</td>
                                 <td>2008/10/26</td>
                                 <td class="text-right">$235,500</td>
                              </tr>
                              <tr>
                                 <td>Martena Mccray</td>
                                 <td>Post-Sales support</td>
                                 <td>Edinburgh</td>
                                 <td>46</td>
                                 <td>2011/03/09</td>
                                 <td class="text-right">$324,050</td>
                              </tr>
                              <tr>
                                 <td>Unity Butler</td>
                                 <td>Marketing Designer</td>
                                 <td>San Francisco</td>
                                 <td>47</td>
                                 <td>2009/12/09</td>
                                 <td class="text-right">$85,675</td>
                              </tr>
                              <tr>
                                 <td>Howard Hatfield</td>
                                 <td>Office Manager</td>
                                 <td>San Francisco</td>
                                 <td>51</td>
                                 <td>2008/12/16</td>
                                 <td class="text-right">$164,500</td>
                              </tr>
                              <tr>
                                 <td>Hope Fuentes</td>
                                 <td>Secretary</td>
                                 <td>San Francisco</td>
                                 <td>41</td>
                                 <td>2010/02/12</td>
                                 <td class="text-right">$109,850</td>
                              </tr>
                              <tr>
                                 <td>Vivian Harrell</td>
                                 <td>Financial Controller</td>
                                 <td>San Francisco</td>
                                 <td>62</td>
                                 <td>2009/02/14</td>
                                 <td class="text-right">$452,500</td>
                              </tr>
                              <tr>
                                 <td>Timothy Mooney</td>
                                 <td>Office Manager</td>
                                 <td>London</td>
                                 <td>37</td>
                                 <td>2008/12/11</td>
                                 <td class="text-right">$136,200</td>
                              </tr>
                              <tr>
                                 <td>Jackson Bradshaw</td>
                                 <td>Director</td>
                                 <td>New York</td>
                                 <td>65</td>
                                 <td>2008/09/26</td>
                                 <td class="text-right">$645,750</td>
                              </tr>
                              <tr>
                                 <td>Olivia Liang</td>
                                 <td>Support Engineer</td>
                                 <td>Singapore</td>
                                 <td>64</td>
                                 <td>2011/02/03</td>
                                 <td class="text-right">$234,500</td>
                              </tr>
                              <tr>
                                 <td>Bruno Nash</td>
                                 <td>Software Engineer</td>
                                 <td>London</td>
                                 <td>38</td>
                                 <td>2011/05/03</td>
                                 <td class="text-right">$163,500</td>
                              </tr>
                              <tr>
                                 <td>Sakura Yamamoto</td>
                                 <td>Support Engineer</td>
                                 <td>Tokyo</td>
                                 <td>37</td>
                                 <td>2009/08/19</td>
                                 <td class="text-right">$139,575</td>
                              </tr>
                              <tr>
                                 <td>Thor Walton</td>
                                 <td>Developer</td>
                                 <td>New York</td>
                                 <td>61</td>
                                 <td>2013/08/11</td>
                                 <td class="text-right">$98,540</td>
                              </tr>
                              <tr>
                                 <td>Finn Camacho</td>
                                 <td>Support Engineer</td>
                                 <td>San Francisco</td>
                                 <td>47</td>
                                 <td>2009/07/07</td>
                                 <td class="text-right">$87,500</td>
                              </tr>
                              <tr>
                                 <td>Serge Baldwin</td>
                                 <td>Data Coordinator</td>
                                 <td>Singapore</td>
                                 <td>64</td>
                                 <td>2012/04/09</td>
                                 <td class="text-right">$138,575</td>
                              </tr>
                              <tr>
                                 <td>Zenaida Frank</td>
                                 <td>Software Engineer</td>
                                 <td>New York</td>
                                 <td>63</td>
                                 <td>2010/01/04</td>
                                 <td class="text-right">$125,250</td>
                              </tr>
                              <tr>
                                 <td>Zorita Serrano</td>
                                 <td>Software Engineer</td>
                                 <td>San Francisco</td>
                                 <td>56</td>
                                 <td>2012/06/01</td>
                                 <td class="text-right">$115,000</td>
                              </tr>
                              <tr>
                                 <td>Jennifer Acosta</td>
                                 <td>Junior Javascript Developer</td>
                                 <td>Edinburgh</td>
                                 <td>43</td>
                                 <td>2013/02/01</td>
                                 <td class="text-right">$75,650</td>
                              </tr>
                              <tr>
                                 <td>Cara Stevens</td>
                                 <td>Sales Assistant</td>
                                 <td>New York</td>
                                 <td>46</td>
                                 <td>2011/12/06</td>
                                 <td class="text-right">$145,600</td>
                              </tr>
                              <tr>
                                 <td>Hermione Butler</td>
                                 <td>Regional Director</td>
                                 <td>London</td>
                                 <td>47</td>
                                 <td>2011/03/21</td>
                                 <td class="text-right">$356,250</td>
                              </tr>
                              <tr>
                                 <td>Lael Greer</td>
                                 <td>Systems Administrator</td>
                                 <td>London</td>
                                 <td>21</td>
                                 <td>2009/02/27</td>
                                 <td class="text-right">$103,500</td>
                              </tr>
                              <tr>
                                 <td>Jonas Alexander</td>
                                 <td>Developer</td>
                                 <td>San Francisco</td>
                                 <td>30</td>
                                 <td>2010/07/14</td>
                                 <td class="text-right">$86,500</td>
                              </tr>
                              <tr>
                                 <td>Shad Decker</td>
                                 <td>Regional Director</td>
                                 <td>Edinburgh</td>
                                 <td>51</td>
                                 <td>2008/11/13</td>
                                 <td class="text-right">$183,000</td>
                              </tr>
                              <tr>
                                 <td>Michael Bruce</td>
                                 <td>Javascript Developer</td>
                                 <td>Singapore</td>
                                 <td>29</td>
                                 <td>2011/06/27</td>
                                 <td class="text-right">$183,000</td>
                              </tr>
                              <tr>
                                 <td>Donna Snider</td>
                                 <td>Customer Support</td>
                                 <td>New York</td>
                                 <td>27</td>
                                 <td>2011/01/25</td>
                                 <td class="text-right">$112,000</td>
                              </tr>
                           </tbody>
                           <tfoot>
                              <tr>
                                 <th>Name</th>
                                 <th>Position</th>
                                 <th>Office</th>
                                 <th>Age</th>
                                 <th>Start date</th>
                                 <th class="text-right">Salary</th>
                              </tr>
                           </tfoot>
                        </table>
                     </div>
                  </div>                  
               </div>
               <div class="card">
                  <div class="card-header d-flex justify-content-between">
                     <div class="header-title">
                        <h4 class="card-title">Bootstrap Datatables With Checkbox</h4>
                     </div>
                  <div class="header-action">
                           <i data-toggle="collapse" data-target="#datatable-2" aria-expanded="false">
                              <svg width="20" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                                 <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M10 20l4-16m4 4l4 4-4 4M6 16l-4-4 4-4" />
                              </svg>
                           </i>
                        </div>
                  </div>
                  <div class="card-body">
                     <div class="collapse" id="datatable-2">
                        <div class="card"><kbd class="bg-dark"><pre id="bootstrap-datatables-1" class="text-white"><code>
&#x3C;table id=&#x22;datatable&#x22; class=&#x22;table data-table table-striped table-bordered&#x22; &#x3E;
&#x3C;thead&#x3E;
   &#x3C;tr&#x3E;
      &#x3C;th&#x3E;Name&#x3C;/th&#x3E;
      &#x3C;th&#x3E;Position&#x3C;/th&#x3E;
      &#x3C;th&#x3E;Office&#x3C;/th&#x3E;
      &#x3C;th&#x3E;Age&#x3C;/th&#x3E;
      &#x3C;th&#x3E;Start date&#x3C;/th&#x3E;
      &#x3C;th&#x3E;Salary&#x3C;/th&#x3E;
   &#x3C;/tr&#x3E;
&#x3C;/thead&#x3E;
&#x3C;tbody&#x3E;
   &#x3C;tr&#x3E;
      &#x3C;td&#x3E;Tiger Nixon&#x3C;/td&#x3E;
      &#x3C;td&#x3E;System Architect&#x3C;/td&#x3E;
      &#x3C;td&#x3E;Edinburgh&#x3C;/td&#x3E;
      &#x3C;td&#x3E;61&#x3C;/td&#x3E;
      &#x3C;td&#x3E;2011/04/25&#x3C;/td&#x3E;
      &#x3C;td&#x3E;$320,800&#x3C;/td&#x3E;
   &#x3C;/tr&#x3E;
   &#x3C;tr&#x3E;
      &#x3C;td&#x3E;Garrett Winters&#x3C;/td&#x3E;
      &#x3C;td&#x3E;Accountant&#x3C;/td&#x3E;
      &#x3C;td&#x3E;Tokyo&#x3C;/td&#x3E;
      &#x3C;td&#x3E;63&#x3C;/td&#x3E;
      &#x3C;td&#x3E;2011/07/25&#x3C;/td&#x3E;
      &#x3C;td&#x3E;$170,750&#x3C;/td&#x3E;
   &#x3C;/tr&#x3E;
   &#x3C;tr&#x3E;
      &#x3C;td&#x3E;Ashton Cox&#x3C;/td&#x3E;
      &#x3C;td&#x3E;Junior Technical Author&#x3C;/td&#x3E;
      &#x3C;td&#x3E;San Francisco&#x3C;/td&#x3E;
      &#x3C;td&#x3E;66&#x3C;/td&#x3E;
      &#x3C;td&#x3E;2009/01/12&#x3C;/td&#x3E;
      &#x3C;td&#x3E;$86,000&#x3C;/td&#x3E;
   &#x3C;/tr&#x3E;
   &#x3C;tr&#x3E;
      &#x3C;td&#x3E;Cedric Kelly&#x3C;/td&#x3E;
      &#x3C;td&#x3E;Senior Javascript Developer&#x3C;/td&#x3E;
      &#x3C;td&#x3E;Edinburgh&#x3C;/td&#x3E;
      &#x3C;td&#x3E;22&#x3C;/td&#x3E;
      &#x3C;td&#x3E;2012/03/29&#x3C;/td&#x3E;
      &#x3C;td&#x3E;$433,060&#x3C;/td&#x3E;
   &#x3C;/tr&#x3E;
   &#x3C;tr&#x3E;
      &#x3C;td&#x3E;Airi Satou&#x3C;/td&#x3E;
      &#x3C;td&#x3E;Accountant&#x3C;/td&#x3E;
      &#x3C;td&#x3E;Tokyo&#x3C;/td&#x3E;
      &#x3C;td&#x3E;33&#x3C;/td&#x3E;
      &#x3C;td&#x3E;2008/11/28&#x3C;/td&#x3E;
      &#x3C;td&#x3E;$162,700&#x3C;/td&#x3E;
   &#x3C;/tr&#x3E;
   &#x3C;tr&#x3E;
      &#x3C;td&#x3E;Brielle Williamson&#x3C;/td&#x3E;
      &#x3C;td&#x3E;Integration Specialist&#x3C;/td&#x3E;
      &#x3C;td&#x3E;New York&#x3C;/td&#x3E;
      &#x3C;td&#x3E;61&#x3C;/td&#x3E;
      &#x3C;td&#x3E;2012/12/02&#x3C;/td&#x3E;
      &#x3C;td&#x3E;$372,000&#x3C;/td&#x3E;
   &#x3C;/tr&#x3E;
   &#x3C;tr&#x3E;
      &#x3C;td&#x3E;Herrod Chandler&#x3C;/td&#x3E;
      &#x3C;td&#x3E;Sales Assistant&#x3C;/td&#x3E;
      &#x3C;td&#x3E;San Francisco&#x3C;/td&#x3E;
      &#x3C;td&#x3E;59&#x3C;/td&#x3E;
      &#x3C;td&#x3E;2012/08/06&#x3C;/td&#x3E;
      &#x3C;td&#x3E;$137,500&#x3C;/td&#x3E;
   &#x3C;/tr&#x3E;
   &#x3C;tr&#x3E;
      &#x3C;td&#x3E;Rhona Davidson&#x3C;/td&#x3E;
      &#x3C;td&#x3E;Integration Specialist&#x3C;/td&#x3E;
      &#x3C;td&#x3E;Tokyo&#x3C;/td&#x3E;
      &#x3C;td&#x3E;55&#x3C;/td&#x3E;
      &#x3C;td&#x3E;2010/10/14&#x3C;/td&#x3E;
      &#x3C;td&#x3E;$327,900&#x3C;/td&#x3E;
   &#x3C;/tr&#x3E;
   &#x3C;tr&#x3E;
      &#x3C;td&#x3E;Colleen Hurst&#x3C;/td&#x3E;
      &#x3C;td&#x3E;Javascript Developer&#x3C;/td&#x3E;
      &#x3C;td&#x3E;San Francisco&#x3C;/td&#x3E;
      &#x3C;td&#x3E;39&#x3C;/td&#x3E;
      &#x3C;td&#x3E;2009/09/15&#x3C;/td&#x3E;
      &#x3C;td&#x3E;$205,500&#x3C;/td&#x3E;
   &#x3C;/tr&#x3E;
   &#x3C;tr&#x3E;
      &#x3C;td&#x3E;Sonya Frost&#x3C;/td&#x3E;
      &#x3C;td&#x3E;Software Engineer&#x3C;/td&#x3E;
      &#x3C;td&#x3E;Edinburgh&#x3C;/td&#x3E;
      &#x3C;td&#x3E;23&#x3C;/td&#x3E;
      &#x3C;td&#x3E;2008/12/13&#x3C;/td&#x3E;
      &#x3C;td&#x3E;$103,600&#x3C;/td&#x3E;
   &#x3C;/tr&#x3E;
   &#x3C;tr&#x3E;
      &#x3C;td&#x3E;Jena Gaines&#x3C;/td&#x3E;
      &#x3C;td&#x3E;Office Manager&#x3C;/td&#x3E;
      &#x3C;td&#x3E;London&#x3C;/td&#x3E;
      &#x3C;td&#x3E;30&#x3C;/td&#x3E;
      &#x3C;td&#x3E;2008/12/19&#x3C;/td&#x3E;
      &#x3C;td&#x3E;$90,560&#x3C;/td&#x3E;
   &#x3C;/tr&#x3E;
   &#x3C;tr&#x3E;
      &#x3C;td&#x3E;Quinn Flynn&#x3C;/td&#x3E;
      &#x3C;td&#x3E;Support Lead&#x3C;/td&#x3E;
      &#x3C;td&#x3E;Edinburgh&#x3C;/td&#x3E;
      &#x3C;td&#x3E;22&#x3C;/td&#x3E;
      &#x3C;td&#x3E;2013/03/03&#x3C;/td&#x3E;
      &#x3C;td&#x3E;$342,000&#x3C;/td&#x3E;
   &#x3C;/tr&#x3E;
   &#x3C;tr&#x3E;
      &#x3C;td&#x3E;Charde Marshall&#x3C;/td&#x3E;
      &#x3C;td&#x3E;Regional Director&#x3C;/td&#x3E;
      &#x3C;td&#x3E;San Francisco&#x3C;/td&#x3E;
      &#x3C;td&#x3E;36&#x3C;/td&#x3E;
      &#x3C;td&#x3E;2008/10/16&#x3C;/td&#x3E;
      &#x3C;td&#x3E;$470,600&#x3C;/td&#x3E;
   &#x3C;/tr&#x3E;
   &#x3C;tr&#x3E;
      &#x3C;td&#x3E;Haley Kennedy&#x3C;/td&#x3E;
      &#x3C;td&#x3E;Senior Marketing Designer&#x3C;/td&#x3E;
      &#x3C;td&#x3E;London&#x3C;/td&#x3E;
      &#x3C;td&#x3E;43&#x3C;/td&#x3E;
      &#x3C;td&#x3E;2012/12/18&#x3C;/td&#x3E;
      &#x3C;td&#x3E;$313,500&#x3C;/td&#x3E;
   &#x3C;/tr&#x3E;
   &#x3C;tr&#x3E;
      &#x3C;td&#x3E;Tatyana Fitzpatrick&#x3C;/td&#x3E;
      &#x3C;td&#x3E;Regional Director&#x3C;/td&#x3E;
      &#x3C;td&#x3E;London&#x3C;/td&#x3E;
      &#x3C;td&#x3E;19&#x3C;/td&#x3E;
      &#x3C;td&#x3E;2010/03/17&#x3C;/td&#x3E;
      &#x3C;td&#x3E;$385,750&#x3C;/td&#x3E;
   &#x3C;/tr&#x3E;
   &#x3C;tr&#x3E;
      &#x3C;td&#x3E;Michael Silva&#x3C;/td&#x3E;
      &#x3C;td&#x3E;Marketing Designer&#x3C;/td&#x3E;
      &#x3C;td&#x3E;London&#x3C;/td&#x3E;
      &#x3C;td&#x3E;66&#x3C;/td&#x3E;
      &#x3C;td&#x3E;2012/11/27&#x3C;/td&#x3E;
      &#x3C;td&#x3E;$198,500&#x3C;/td&#x3E;
   &#x3C;/tr&#x3E;
   &#x3C;tr&#x3E;
      &#x3C;td&#x3E;Paul Byrd&#x3C;/td&#x3E;
      &#x3C;td&#x3E;Chief Financial Officer (CFO)&#x3C;/td&#x3E;
      &#x3C;td&#x3E;New York&#x3C;/td&#x3E;
      &#x3C;td&#x3E;64&#x3C;/td&#x3E;
      &#x3C;td&#x3E;2010/06/09&#x3C;/td&#x3E;
      &#x3C;td&#x3E;$725,000&#x3C;/td&#x3E;
   &#x3C;/tr&#x3E;
   &#x3C;tr&#x3E;
      &#x3C;td&#x3E;Gloria Little&#x3C;/td&#x3E;
      &#x3C;td&#x3E;Systems Administrator&#x3C;/td&#x3E;
      &#x3C;td&#x3E;New York&#x3C;/td&#x3E;
      &#x3C;td&#x3E;59&#x3C;/td&#x3E;
      &#x3C;td&#x3E;2009/04/10&#x3C;/td&#x3E;
      &#x3C;td&#x3E;$237,500&#x3C;/td&#x3E;
   &#x3C;/tr&#x3E;
   &#x3C;tr&#x3E;
      &#x3C;td&#x3E;Bradley Greer&#x3C;/td&#x3E;
      &#x3C;td&#x3E;Software Engineer&#x3C;/td&#x3E;
      &#x3C;td&#x3E;London&#x3C;/td&#x3E;
      &#x3C;td&#x3E;41&#x3C;/td&#x3E;
      &#x3C;td&#x3E;2012/10/13&#x3C;/td&#x3E;
      &#x3C;td&#x3E;$132,000&#x3C;/td&#x3E;
   &#x3C;/tr&#x3E;
   &#x3C;tr&#x3E;
      &#x3C;td&#x3E;Dai Rios&#x3C;/td&#x3E;
      &#x3C;td&#x3E;Personnel Lead&#x3C;/td&#x3E;
      &#x3C;td&#x3E;Edinburgh&#x3C;/td&#x3E;
      &#x3C;td&#x3E;35&#x3C;/td&#x3E;
      &#x3C;td&#x3E;2012/09/26&#x3C;/td&#x3E;
      &#x3C;td&#x3E;$217,500&#x3C;/td&#x3E;
   &#x3C;/tr&#x3E;
&#x3C;/table&#x3E;
                           </code></pre></kbd>
                        </div>
                     </div>
                     <p>Images in Bootstrap are made responsive with <code>.img-fluid</code>. <code>max-width: 100%;</code> and <code>height: auto;</code> are applied to the image so that it scales with the parent element.</p>
                     <div class="table-responsive">
                        <table id="datatable" class="table data-table table-striped table-bordered" >
                           <thead>
                              <tr>
                                 <th class="pr-0">
                                    <div class="d-flex justify-content-start align-items-end mb-1 ">
                                       <div class="custom-control custom-checkbox custom-control-inline">
                                          <input type="checkbox" class="custom-control-input m-0" id="customCheck1">
                                          <label class="custom-control-label" for="customCheck1"></label>
                                       </div>
                                    </div>
                                 </th>
                                 <th>Name</th>
                                 <th>Position</th>
                                 <th>Office</th>
                                 <th>Age</th>
                                 <th>Start date</th>
                                 <th class="text-right">Salary</th>
                              </tr>
                           </thead>
                           <tbody>
                              <tr>
                                 <td class="pr-0">
                                    <div class="d-flex justify-content-start align-items-end mb-1 ">
                                       <div class="custom-control custom-checkbox custom-control-inline">
                                          <input type="checkbox" class="custom-control-input m-0" id="customCheck">
                                          <label class="custom-control-label" for="customCheck"></label>
                                       </div>
                                    </div>
                                 </td>
                                 <td>Tiger Nixon</td>
                                 <td>System Architect</td>
                                 <td>Edinburgh</td>
                                 <td>61</td>
                                 <td>2011/04/25</td>
                                 <td class="text-right">$320,800</td>
                              </tr>
                              <tr>
                                 <td class="pr-0">
                                    <div class="d-flex justify-content-start align-items-end mb-1 ">
                                       <div class="custom-control custom-checkbox custom-control-inline">
                                          <input type="checkbox" class="custom-control-input m-0" id="customCheck2">
                                          <label class="custom-control-label" for="customCheck2"></label>
                                       </div>
                                    </div>
                                 </td>
                                 <td>Garrett Winters</td>
                                 <td>Accountant</td>
                                 <td>Tokyo</td>
                                 <td>63</td>
                                 <td>2011/07/25</td>
                                 <td class="text-right">$170,750</td>
                              </tr>
                              <tr>
                                 <td class="pr-0">
                                    <div class="d-flex justify-content-start align-items-end mb-1 ">
                                       <div class="custom-control custom-checkbox custom-control-inline">
                                          <input type="checkbox" class="custom-control-input m-0" id="customCheck3">
                                          <label class="custom-control-label" for="customCheck3"></label>
                                       </div>
                                    </div>
                                 </td>
                                 <td>Herrod Chandler</td>
                                 <td>Sales Assistant</td>
                                 <td>San Francisco</td>
                                 <td>59</td>
                                 <td>2012/08/06</td>
                                 <td class="text-right">$137,500</td>
                              </tr>
                              <tr>
                                 <td class="pr-0">
                                    <div class="d-flex justify-content-start align-items-end mb-1 ">
                                       <div class="custom-control custom-checkbox custom-control-inline">
                                          <input type="checkbox" class="custom-control-input m-0" id="customCheck4">
                                          <label class="custom-control-label" for="customCheck4"></label>
                                       </div>
                                    </div>
                                 </td>
                                 <td>Rhona Davidson</td>
                                 <td>Integration Specialist</td>
                                 <td>Tokyo</td>
                                 <td>55</td>
                                 <td>2010/10/14</td>
                                 <td class="text-right">$327,900</td>
                              </tr>
                              <tr>
                                 <td class="pr-0">
                                    <div class="d-flex justify-content-start align-items-end mb-1 ">
                                       <div class="custom-control custom-checkbox custom-control-inline">
                                          <input type="checkbox" class="custom-control-input m-0" id="customCheck5">
                                          <label class="custom-control-label" for="customCheck5"></label>
                                       </div>
                                    </div>
                                 </td>
                                 <td>Colleen Hurst</td>
                                 <td>Javascript Developer</td>
                                 <td>San Francisco</td>
                                 <td>39</td>
                                 <td>2009/09/15</td>
                                 <td class="text-right">$205,500</td>
                              </tr>
                              <tr>
                                 <td class="pr-0">
                                    <div class="d-flex justify-content-start align-items-end mb-1 ">
                                       <div class="custom-control custom-checkbox custom-control-inline">
                                          <input type="checkbox" class="custom-control-input m-0" id="customCheck6">
                                          <label class="custom-control-label" for="customCheck6"></label>
                                       </div>
                                    </div>
                                 </td>
                                 <td>Sonya Frost</td>
                                 <td>Software Engineer</td>
                                 <td>Edinburgh</td>
                                 <td>23</td>
                                 <td>2008/12/13</td>
                                 <td class="text-right">$103,600</td>
                              </tr>
                              <tr>
                                 <td class="pr-0">
                                    <div class="d-flex justify-content-start align-items-end mb-1 ">
                                       <div class="custom-control custom-checkbox custom-control-inline">
                                          <input type="checkbox" class="custom-control-input m-0" id="customCheck11">
                                          <label class="custom-control-label" for="customCheck11"></label>
                                       </div>
                                    </div>
                                 </td>
                                 <td>Jena Gaines</td>
                                 <td>Office Manager</td>
                                 <td>London</td>
                                 <td>30</td>
                                 <td>2008/12/19</td>
                                 <td class="text-right">$90,560</td>
                              </tr>
                              <tr>
                                 <td class="pr-0">
                                    <div class="d-flex justify-content-start align-items-end mb-1 ">
                                       <div class="custom-control custom-checkbox custom-control-inline">
                                          <input type="checkbox" class="custom-control-input m-0" id="customCheck7">
                                          <label class="custom-control-label" for="customCheck7"></label>
                                       </div>
                                    </div>
                                 </td>
                                 <td>Quinn Flynn</td>
                                 <td>Support Lead</td>
                                 <td>Edinburgh</td>
                                 <td>22</td>
                                 <td>2013/03/03</td>
                                 <td class="text-right">$342,000</td>
                              </tr>
                              <tr>
                                 <td class="pr-0">
                                    <div class="d-flex justify-content-start align-items-end mb-1 ">
                                       <div class="custom-control custom-checkbox custom-control-inline">
                                          <input type="checkbox" class="custom-control-input m-0" id="customCheck8">
                                          <label class="custom-control-label" for="customCheck8"></label>
                                       </div>
                                    </div>
                                 </td>
                                 <td>Charde Marshall</td>
                                 <td>Regional Director</td>
                                 <td>San Francisco</td>
                                 <td>36</td>
                                 <td>2008/10/16</td>
                                 <td class="text-right">$470,600</td>
                              </tr>
                              <tr>
                                 <td class="pr-0">
                                    <div class="d-flex justify-content-start align-items-end mb-1 ">
                                       <div class="custom-control custom-checkbox custom-control-inline">
                                          <input type="checkbox" class="custom-control-input m-0" id="customCheck9">
                                          <label class="custom-control-label" for="customCheck9"></label>
                                       </div>
                                    </div>
                                 </td>
                                 <td>Haley Kennedy</td>
                                 <td>Senior Marketing Designer</td>
                                 <td>London</td>
                                 <td>43</td>
                                 <td>2012/12/18</td>
                                 <td class="text-right">$313,500</td>
                              </tr>
                              <tr>
                                 <td class="pr-0">
                                    <div class="d-flex justify-content-start align-items-end mb-1 ">
                                       <div class="custom-control custom-checkbox custom-control-inline">
                                          <input type="checkbox" class="custom-control-input m-0" id="customCheck10">
                                          <label class="custom-control-label" for="customCheck10"></label>
                                       </div>
                                    </div>
                                 </td>
                                 <td>Tatyana Fitzpatrick</td>
                                 <td>Regional Director</td>
                                 <td>London</td>
                                 <td>19</td>
                                 <td>2010/03/17</td>
                                 <td class="text-right">$385,750</td>
                              </tr>
                           </tbody>
                           <tfoot>
                              <tr>
                                 <td class="pr-0">
                                    <div class="d-flex justify-content-start align-items-end mb-1 ">
                                       <div class="custom-control custom-checkbox custom-control-inline">
                                          <input type="checkbox" class="custom-control-input m-0" id="customCheck100">
                                          <label class="custom-control-label" for="customCheck100"></label>
                                       </div>
                                    </div>
                                 </td>
                                 <th>Name</th>
                                 <th>Position</th>
                                 <th>Office</th>
                                 <th>Age</th>
                                 <th>Start date</th>
                                 <th class="text-right">Salary</th>
                              </tr>
                           </tfoot>
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