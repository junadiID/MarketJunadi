<!-- Footer -->
                </div>
                </div>
            <footer class="footer">
                    <div class="container-fluid">
                        <div class="row">
                            <div class="col-md-6">
                               <a class="text-dark"><b><?php echo $data['short_title']; ?></b></a> &copy; Copyright 2020-2021 <strong></strong> Made with <i class="fa fa-heart text-danger"></i> By <b>junjun junaedi</b> | 
<?php
$time = microtime();
$time = explode(' ', $time);
$time = $time[1] + $time[0];
$finish = $time;
$total_time = round(($finish - $start), 4);
echo 'Load Page <font color="black">'.$total_time.'</font> s';
?>
                            </div>
                        </div>
                    </div>
                </footer>
            <!-- End Footer -->

        </div>
        <!-- end wrapper -->




        <script src="/assets/v1/vendor.min.js"></script>
        
        <script src="/assets/v1/jquery.dataTables.min.js"></script>
        <script src="/assets/v1/dataTables.bootstrap4.js"></script>
        <script src="/assets/v1/dataTables.responsive.min.js"></script>
        <script src="/assets/v1/responsive.bootstrap4.min.js"></script>
        <script src="/assets/v1/dataTables.buttons.min.js"></script>
        <script src="/assets/v1/buttons.bootstrap4.min.js"></script>
        <script src="/assets/v1/buttons.html5.min.js"></script>
        <script src="/assets/v1/buttons.flash.min.js"></script>
        <script src="/assets/v1/buttons.print.min.js"></script>
        <script src="/assets/v1/dataTables.keyTable.min.js"></script>
        <script src="/assets/v1/dataTables.select.min.js"></script>
        
        <!-- App js -->
        <script src="/assets/v1/app.min.js"></script>
    </body>
</html>