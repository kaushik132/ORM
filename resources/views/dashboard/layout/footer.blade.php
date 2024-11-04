<footer class="iq-footer">
    <div class="container-fluid">
        <div class="row">
            <div class="col-lg-6">
                <ul class="list-inline mb-0">
                    <li class="list-inline-item">
                        <a href="../backend/privacy-policy.html">Privacy Policy</a>
                    </li>
                    <li class="list-inline-item">
                        <a href="../backend/terms-of-service.html">Terms of Use</a>
                    </li>
                </ul>
            </div>
            <div class="col-lg-6 text-right">
                <span class="mr-1">
                    Copyright
                    <script>
                        document.write(new Date().getFullYear());
                    </script>
                    | All Rights Reserved.
                </span>
            </div>
        </div>
    </div>
</footer>
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

<script>
    $(document).ready(function() {


        var readURL = function(input) {
            if (input.files && input.files[0]) {
                var reader = new FileReader();

                reader.onload = function(e) {
                    $('.profile-pic').attr('src', e.target.result);
                }

                reader.readAsDataURL(input.files[0]);
            }
        }


        $(".file-upload").on('change', function() {
            readURL(this);
        });

        $(".upload-button").on('click', function() {
            $(".file-upload").click();
        });
    });
</script>
<!-- app JavaScript -->
<script src="../assets/js/app.js"></script>
</body>

</html>
