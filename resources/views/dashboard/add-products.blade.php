@extends('dashboard.layout.main')
@section('main-containers')


    
      <div class="content-page">
      <div class="container-fluid">
         <div class="row">
            <div class="col-sm-12">
               <div class="card">
                  <div class="card-header d-flex justify-content-between">
                     <div class="header-title">
                        <h4 class="card-title">Editable Table</h4>
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
                     <div class="collapse" id="edit-1">
                           <div class="card"><kbd class="bg-dark"><pre id="editable" class="text-white"><code>
&#x3C;div id=&#x22;table&#x22; class=&#x22;table-editable&#x22;&#x3E;
   &#x3C;span class=&#x22;table-add float-right mb-3 mr-2&#x22;&#x3E;
   &#x3C;button class=&#x22;btn btn-sm bg-primary&#x22;&#x3E;&#x3C;i
      class=&#x22;ri-add-fill&#x22;&#x3E;&#x3C;span class=&#x22;pl-1&#x22;&#x3E;Add New&#x3C;/span&#x3E;&#x3C;/i&#x3E;
   &#x3C;/button&#x3E;
   &#x3C;/span&#x3E;
   &#x3C;table class=&#x22;table table-bordered table-responsive-md table-striped text-center&#x22;&#x3E;
      &#x3C;thead&#x3E;
         &#x3C;tr&#x3E;
            &#x3C;th&#x3E;Name&#x3C;/th&#x3E;
            &#x3C;th&#x3E;Age&#x3C;/th&#x3E;
            &#x3C;th&#x3E;Company Name&#x3C;/th&#x3E;
            &#x3C;th&#x3E;Country&#x3C;/th&#x3E;
            &#x3C;th&#x3E;City&#x3C;/th&#x3E;
            &#x3C;th&#x3E;Sort&#x3C;/th&#x3E;
            &#x3C;th&#x3E;Remove&#x3C;/th&#x3E;
         &#x3C;/tr&#x3E;
      &#x3C;/thead&#x3E;
      &#x3C;tbody&#x3E;
         &#x3C;tr&#x3E;
            &#x3C;td contenteditable=&#x22;true&#x22;&#x3E;Gio Metric&#x3C;/td&#x3E;
            &#x3C;td contenteditable=&#x22;true&#x22;&#x3E;25&#x3C;/td&#x3E;
            &#x3C;td contenteditable=&#x22;true&#x22;&#x3E;Deepends&#x3C;/td&#x3E;
            &#x3C;td contenteditable=&#x22;true&#x22;&#x3E;Spain&#x3C;/td&#x3E;
            &#x3C;td contenteditable=&#x22;true&#x22;&#x3E;Madrid&#x3C;/td&#x3E;
            &#x3C;td&#x3E;
               &#x3C;span class=&#x22;table-up&#x22;&#x3E;&#x3C;a href=&#x22;#!&#x22; class=&#x22;indigo-text&#x22;&#x3E;&#x3C;i class=&#x22;fas fa-long-arrow-alt-up&#x22; aria-hidden=&#x22;true&#x22;&#x3E;&#x3C;/i&#x3E;&#x3C;/a&#x3E;&#x3C;/span&#x3E;
               &#x3C;span class=&#x22;table-down&#x22;&#x3E;&#x3C;a href=&#x22;#!&#x22; class=&#x22;indigo-text&#x22;&#x3E;&#x3C;i class=&#x22;fas fa-long-arrow-alt-down&#x22; aria-hidden=&#x22;true&#x22;&#x3E;&#x3C;/i&#x3E;&#x3C;/a&#x3E;&#x3C;/span&#x3E;
            &#x3C;/td&#x3E;
            &#x3C;td&#x3E;
               &#x3C;span class=&#x22;table-remove&#x22;&#x3E;&#x3C;button type=&#x22;button&#x22;
                  class=&#x22;btn bg-danger-light btn-rounded btn-sm my-0&#x22;&#x3E;Remove&#x3C;/button&#x3E;&#x3C;/span&#x3E;
            &#x3C;/td&#x3E;
         &#x3C;/tr&#x3E;
         &#x3C;tr&#x3E;
            &#x3C;td contenteditable=&#x22;true&#x22;&#x3E;Manny Petty&#x3C;/td&#x3E;
            &#x3C;td contenteditable=&#x22;true&#x22;&#x3E;45&#x3C;/td&#x3E;
            &#x3C;td contenteditable=&#x22;true&#x22;&#x3E;Insectus&#x3C;/td&#x3E;
            &#x3C;td contenteditable=&#x22;true&#x22;&#x3E;France&#x3C;/td&#x3E;
            &#x3C;td contenteditable=&#x22;true&#x22;&#x3E;San Francisco&#x3C;/td&#x3E;
            &#x3C;td&#x3E;
               &#x3C;span class=&#x22;table-up&#x22;&#x3E;&#x3C;a href=&#x22;#!&#x22; class=&#x22;indigo-text&#x22;&#x3E;&#x3C;i class=&#x22;fas fa-long-arrow-alt-up&#x22; aria-hidden=&#x22;true&#x22;&#x3E;&#x3C;/i&#x3E;&#x3C;/a&#x3E;&#x3C;/span&#x3E;
               &#x3C;span class=&#x22;table-down&#x22;&#x3E;&#x3C;a href=&#x22;#!&#x22; class=&#x22;indigo-text&#x22;&#x3E;&#x3C;i class=&#x22;fas fa-long-arrow-alt-down&#x22; aria-hidden=&#x22;true&#x22;&#x3E;&#x3C;/i&#x3E;&#x3C;/a&#x3E;&#x3C;/span&#x3E;
            &#x3C;/td&#x3E;
            &#x3C;td&#x3E;
               &#x3C;span class=&#x22;table-remove&#x22;&#x3E;&#x3C;button type=&#x22;button&#x22;
                  class=&#x22;btn bg-danger-light btn-rounded btn-sm my-0&#x22;&#x3E;Remove&#x3C;/button&#x3E;&#x3C;/span&#x3E;
            &#x3C;/td&#x3E;
         &#x3C;/tr&#x3E;
         &#x3C;tr&#x3E;
            &#x3C;td contenteditable=&#x22;true&#x22;&#x3E;Lucy Tania&#x3C;/td&#x3E;
            &#x3C;td contenteditable=&#x22;true&#x22;&#x3E;26&#x3C;/td&#x3E;
            &#x3C;td contenteditable=&#x22;true&#x22;&#x3E;Isotronic&#x3C;/td&#x3E;
            &#x3C;td contenteditable=&#x22;true&#x22;&#x3E;Germany&#x3C;/td&#x3E;
            &#x3C;td contenteditable=&#x22;true&#x22;&#x3E;Frankfurt am Main&#x3C;/td&#x3E;
            &#x3C;td&#x3E;
               &#x3C;span class=&#x22;table-up&#x22;&#x3E;&#x3C;a href=&#x22;#!&#x22; class=&#x22;indigo-text&#x22;&#x3E;&#x3C;i class=&#x22;fas fa-long-arrow-alt-up&#x22; aria-hidden=&#x22;true&#x22;&#x3E;&#x3C;/i&#x3E;&#x3C;/a&#x3E;&#x3C;/span&#x3E;
               &#x3C;span class=&#x22;table-down&#x22;&#x3E;&#x3C;a href=&#x22;#!&#x22; class=&#x22;indigo-text&#x22;&#x3E;&#x3C;i class=&#x22;fas fa-long-arrow-alt-down&#x22; aria-hidden=&#x22;true&#x22;&#x3E;&#x3C;/i&#x3E;&#x3C;/a&#x3E;&#x3C;/span&#x3E;
            &#x3C;/td&#x3E;
            &#x3C;td&#x3E;
               &#x3C;span class=&#x22;table-remove&#x22;&#x3E;&#x3C;button type=&#x22;button&#x22;
                  class=&#x22;btn bg-danger-light btn-rounded btn-sm my-0&#x22;&#x3E;Remove&#x3C;/button&#x3E;&#x3C;/span&#x3E;
            &#x3C;/td&#x3E;
         &#x3C;/tr&#x3E;
         &#x3C;tr class=&#x22;hide&#x22;&#x3E;
            &#x3C;td contenteditable=&#x22;true&#x22;&#x3E;Anna Mull&#x3C;/td&#x3E;
            &#x3C;td contenteditable=&#x22;true&#x22;&#x3E;35&#x3C;/td&#x3E;
            &#x3C;td contenteditable=&#x22;true&#x22;&#x3E;Portica&#x3C;/td&#x3E;
            &#x3C;td contenteditable=&#x22;true&#x22;&#x3E;USA&#x3C;/td&#x3E;
            &#x3C;td contenteditable=&#x22;true&#x22;&#x3E;Oregon&#x3C;/td&#x3E;
            &#x3C;td&#x3E;
               &#x3C;span class=&#x22;table-up&#x22;&#x3E;&#x3C;a href=&#x22;#!&#x22; class=&#x22;indigo-text&#x22;&#x3E;&#x3C;i class=&#x22;fas fa-long-arrow-alt-up&#x22; aria-hidden=&#x22;true&#x22;&#x3E;&#x3C;/i&#x3E;&#x3C;/a&#x3E;&#x3C;/span&#x3E;
               &#x3C;span class=&#x22;table-down&#x22;&#x3E;&#x3C;a href=&#x22;#!&#x22; class=&#x22;indigo-text&#x22;&#x3E;&#x3C;i class=&#x22;fas fa-long-arrow-alt-down&#x22; aria-hidden=&#x22;true&#x22;&#x3E;&#x3C;/i&#x3E;&#x3C;/a&#x3E;&#x3C;/span&#x3E;
            &#x3C;/td&#x3E;
            &#x3C;td&#x3E;
               &#x3C;span class=&#x22;table-remove&#x22;&#x3E;&#x3C;button type=&#x22;button&#x22;
                  class=&#x22;btn bg-danger-light btn-rounded btn-sm my-0&#x22;&#x3E;Remove&#x3C;/button&#x3E;&#x3C;/span&#x3E;
            &#x3C;/td&#x3E;
         &#x3C;/tr&#x3E;
      &#x3C;/tbody&#x3E;
   &#x3C;/table&#x3E;
&#x3C;/div&#x3E;
</code></pre></kbd></div>
                        </div>
                     <div id="table" class="table-editable">
                        <span class="table-add float-right mb-3 mr-2">
                        <button class="btn btn-sm bg-primary"><i
                           class="ri-add-fill"><span class="pl-1">Add New</span></i>
                        </button>
                        </span>
                        <table class="table table-bordered table-responsive-md table-striped text-center">
                           <thead>
                              <tr>
                                 <th>Name</th>
                                 <th>Age</th>
                                 <th>Company Name</th>
                                 <th>Country</th>
                                 <th>City</th>
                                 <th>Sort</th>
                                 <th>Remove</th>
                              </tr>
                           </thead>
                           <tbody>
                              <tr>
                                 <td contenteditable="true">Gio Metric</td>
                                 <td contenteditable="true">25</td>
                                 <td contenteditable="true">Deepends</td>
                                 <td contenteditable="true">Spain</td>
                                 <td contenteditable="true">Madrid</td>
                                 <td>
                                    <span class="table-up"><a href="#!" class="indigo-text"><svg xmlns="http://www.w3.org/2000/svg" width="20px" height="20px" viewBox="0 0 20 20" fill="blue">
                                    <path fill-rule="evenodd" d="M5.293 7.707a1 1 0 010-1.414l4-4a1 1 0 011.414 0l4 4a1 1 0 01-1.414 1.414L11 5.414V17a1 1 0 11-2 0V5.414L6.707 7.707a1 1 0 01-1.414 0z" clip-rule="evenodd" />
                                    </svg></a></span>
                                    <span class="table-down"><a href="#!" class="indigo-text"><svg xmlns="http://www.w3.org/2000/svg" width="20px" height="20px" viewBox="0 0 20 20" fill="blue">
                                    <path fill-rule="evenodd" d="M14.707 12.293a1 1 0 010 1.414l-4 4a1 1 0 01-1.414 0l-4-4a1 1 0 111.414-1.414L9 14.586V3a1 1 0 012 0v11.586l2.293-2.293a1 1 0 011.414 0z" clip-rule="evenodd" />
                                    </svg></a></span>
                                 </td>
                                 <td>
                                    <span class="table-remove"><button type="button"
                                        class="btn bg-danger-light btn-rounded btn-sm my-0">Remove</button></span>
                                        <span class="table-remove"><button type="button"
                                         class="btn bg-success-light btn-rounded btn-sm my-0">Edit</button></span>
                                 </td>
                              </tr>
                              <tr>
                                 <td contenteditable="true">Manny Petty</td>
                                 <td contenteditable="true">45</td>
                                 <td contenteditable="true">Insectus</td>
                                 <td contenteditable="true">France</td>
                                 <td contenteditable="true">San Francisco</td>
                                 <td>
                                    <span class="table-up"><a href="#!" class="indigo-text"><svg xmlns="http://www.w3.org/2000/svg" width="20px" height="20px" viewBox="0 0 20 20" fill="blue">
                                    <path fill-rule="evenodd" d="M5.293 7.707a1 1 0 010-1.414l4-4a1 1 0 011.414 0l4 4a1 1 0 01-1.414 1.414L11 5.414V17a1 1 0 11-2 0V5.414L6.707 7.707a1 1 0 01-1.414 0z" clip-rule="evenodd" />
                                    </svg></a></span>
                                    <span class="table-down"><a href="#!" class="indigo-text"><svg xmlns="http://www.w3.org/2000/svg" width="20px" height="20px" viewBox="0 0 20 20" fill="blue">
                                    <path fill-rule="evenodd" d="M14.707 12.293a1 1 0 010 1.414l-4 4a1 1 0 01-1.414 0l-4-4a1 1 0 111.414-1.414L9 14.586V3a1 1 0 012 0v11.586l2.293-2.293a1 1 0 011.414 0z" clip-rule="evenodd" />
                                    </svg></a></span>
                                 </td>
                                 <td>
                                    <span class="table-remove"><button type="button"
                                        class="btn bg-danger-light btn-rounded btn-sm my-0">Remove</button></span>
                                        <span class="table-remove"><button type="button"
                                         class="btn bg-success-light btn-rounded btn-sm my-0">Edit</button></span>
                                 </td>
                              </tr>
                              <tr>
                                 <td contenteditable="true">Lucy Tania</td>
                                 <td contenteditable="true">26</td>
                                 <td contenteditable="true">Isotronic</td>
                                 <td contenteditable="true">Germany</td>
                                 <td contenteditable="true">Frankfurt am Main</td>
                                 <td>
                                    <span class="table-up"><a href="#!" class="indigo-text"><svg xmlns="http://www.w3.org/2000/svg" width="20px" height="20px" viewBox="0 0 20 20" fill="blue">
                                    <path fill-rule="evenodd" d="M5.293 7.707a1 1 0 010-1.414l4-4a1 1 0 011.414 0l4 4a1 1 0 01-1.414 1.414L11 5.414V17a1 1 0 11-2 0V5.414L6.707 7.707a1 1 0 01-1.414 0z" clip-rule="evenodd" />
                                    </svg></a></span>
                                    <span class="table-down"><a href="#!" class="indigo-text"><svg xmlns="http://www.w3.org/2000/svg" width="20px" height="20px" viewBox="0 0 20 20" fill="blue">
                                    <path fill-rule="evenodd" d="M14.707 12.293a1 1 0 010 1.414l-4 4a1 1 0 01-1.414 0l-4-4a1 1 0 111.414-1.414L9 14.586V3a1 1 0 012 0v11.586l2.293-2.293a1 1 0 011.414 0z" clip-rule="evenodd" />
                                    </svg></a></span>
                                 </td>
                                 <td>
                                    <span class="table-remove"><button type="button"
                                        class="btn bg-danger-light btn-rounded btn-sm my-0">Remove</button></span>
                                        <span class="table-remove"><button type="button"
                                         class="btn bg-success-light btn-rounded btn-sm my-0">Edit</button></span>
                                 </td>
                              </tr>
                              <tr class="hide">
                                 <td contenteditable="true">Anna Mull</td>
                                 <td contenteditable="true">35</td>
                                 <td contenteditable="true">Portica</td>
                                 <td contenteditable="true">USA</td>
                                 <td contenteditable="true">Oregon</td>
                                 <td>
                                    <span class="table-up"><a href="#!" class="indigo-text"><svg xmlns="http://www.w3.org/2000/svg" width="20px" height="20px" viewBox="0 0 20 20" fill="blue">
                                    <path fill-rule="evenodd" d="M5.293 7.707a1 1 0 010-1.414l4-4a1 1 0 011.414 0l4 4a1 1 0 01-1.414 1.414L11 5.414V17a1 1 0 11-2 0V5.414L6.707 7.707a1 1 0 01-1.414 0z" clip-rule="evenodd" />
                                    </svg></a></span>
                                    <span class="table-down"><a href="#!" class="indigo-text"><svg xmlns="http://www.w3.org/2000/svg" width="20px" height="20px" viewBox="0 0 20 20" fill="blue">
                                    <path fill-rule="evenodd" d="M14.707 12.293a1 1 0 010 1.414l-4 4a1 1 0 01-1.414 0l-4-4a1 1 0 111.414-1.414L9 14.586V3a1 1 0 012 0v11.586l2.293-2.293a1 1 0 011.414 0z" clip-rule="evenodd" />
                                    </svg></a></span>
                                 </td>
                                 <td>
                                    <span class="table-remove"><button type="button"
                                       class="btn bg-danger-light btn-rounded btn-sm my-0">Remove</button></span>
                                       <span class="table-remove"><button type="button"
                                        class="btn bg-success-light btn-rounded btn-sm my-0">Edit</button></span>
                                 </td>
                              </tr>
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