<?php 

if($_SESSION!=null) {?>
    
    <script src="<?=asset_url()?>assets/plugins/fullcalendar/js/jquery-ui-1.10.1.custom.min.js"></script>
    <script src="<?=asset_url()?>assets/plugins/bootstrap/js/bootstrap.min.js"></script>
    <script src="<?=asset_url()?>assets/plugins/waypoints/waypoints.min.js"></script>
    <script src="<?=asset_url()?>assets/plugins/nanoScroller/jquery.nanoscroller.min.js"></script>
    <script src="<?=asset_url()?>assets/js/application.js"></script>
    
    <!--Page Leve JS -->
    <script src="<?=asset_url()?>assets/plugins/fullcalendar/js/fullcalendar.min.js"></script>
    <script src="<?=asset_url()?>assets/plugins/fullcalendar/js/calendar.js"></script>
    <script src="<?=asset_url()?>assets/plugins/dataTables/js/jquery.dataTables.js"></script>
    <script src="<?=asset_url()?>assets/plugins/dataTables/js/dataTables.bootstrap.js"></script>
    <script>
        $(document).ready(function() {
            $("#change-view-week").click();
        });
    </script>

    
           
        </section>
        <!--main content end-->
       
    </section>
</body>

</html>



    
    

           
        </section>
        <!--main content end-->
       
    </section>
</body>

</html>
<?php }?>