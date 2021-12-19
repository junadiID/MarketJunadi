            <!-- Footer -->
                </div>
                </div>
            <footer class="footer">
                <div class="container-fluid">
                    <div class="row">
                        <div class="col-md-6">
                            <div class="copyright pull-none">
                              <a class="text-dark"><b><?php echo $data['short_title']; ?></b></a> &copy; Copyright 2020-2021 <strong></strong> Made with <i class="fa fa-heart text-danger"></i> By <b>Junjun Junaedi</b> | 
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
                </div>
            </footer>
            <!-- End Footer -->

        </div>
        <!-- end wrapper -->




        <!-- App js -->
        <script src="<?php echo $config['web']['url'] ?>assets/js/jquery.core.js"></script>
        <script src="<?php echo $config['web']['url'] ?>assets/js/jquery.app.js"></script>
    </body>
</html>