


@extends('dashboard.auth-layout.main')
@section('main-containers')
    <!-- loader Start -->
    <!-- <div id="loading">
          <div id="loading-center">
          </div>
    </div> -->
    <!-- loader END -->
    
      <div class="wrapper">
      <section class="login-content">
         <div class="container h-100">
            <div class="row align-items-center justify-content-center h-100">
               <div class="col-md-5">
                  <div class="card">
                     <div class="card-body">
                        <!-- <div class="auth-logo">
                           <img src="../assets/images/logo.png" class="img-fluid rounded-normal" alt="logo">
                        </div> -->
                        <h2 class="mb-2 text-center">Reset Password</h2>
                        <p>Enter your email address and we'll send you an email with instructions to reset your password.</p>
                        <form>
                           <div class="row">
                              <div class="col-lg-12">
                                 <div class="form-group">
                                    <label>Email</label>
                                    <input class="form-control" type="email" placeholder=" ">
                                 </div>
                              </div>
                           </div>
                           <button type="submit" class="btn btn-primary btn-block">Reset</button>
                        </form>
                     </div>
                  </div>
               </div>
            </div>
         </div>
      </section>
      </div>
    @endsection
    <!-- Backend Bundle JavaScript -->
    <script src="../assets/js/backend-bundle.min.js"></script>
    <!-- Chart Custom JavaScript -->
    <script src="../assets/js/customizer.js"></script>
    
    <script src="../assets/js/sidebar.js"></script>
    
    <!-- Flextree Javascript-->
    <script src="../assets/js/flex-tree.min.js"></script>
    <script src="../assets/js/tree.js"></script>
    
    <!-- Table Treeview JavaScript -->
    <script src="../assets/js/table-treeview.js"></script>
    
    <!-- SweetAlert JavaScript -->
    <script src="../assets/js/sweetalert.js"></script>
    
    <!-- Vectoe Map JavaScript -->
    <script src="../assets/js/vector-map-custom.js"></script>
    
    <!-- Chart Custom JavaScript -->
    <script src="../assets/js/chart-custom.js"></script>
    <script src="../assets/js/charts/01.js"></script>
    <script src="../assets/js/charts/02.js"></script>
    
    <!-- slider JavaScript -->
    <script src="../assets/js/slider.js"></script>
    
    <!-- Emoji picker -->
    <script src="../assets/vendor/emoji-picker-element/index.js" type="module"></script>
    
    
    <!-- app JavaScript -->
    <script src="../assets/js/app.js"></script>  </body>
</html>