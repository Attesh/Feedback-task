<script type="text/javascript" src="https://code.jquery.com/jquery-3.6.0.js"></script>
<script src="https://cdn.datatables.net/1.13.4/js/jquery.dataTables.min.js" type="text/javascript"></script>
<script src="https://cdn.datatables.net/buttons/2.3.6/js/dataTables.buttons.min.js" type="text/javascript"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/jszip/3.1.3/jszip.min.js" type="text/javascript"></script>
  
<!-- Vendor JS Files -->

  <script src="{{asset('Backend/vendor/apexcharts/apexcharts.min.js')}}"></script>
  <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.0/dist/umd/popper.min.js" integrity="sha384-Q6E9RHvbIyZFJoft+2mJbHaEWldlvI9IOYy5n3zV9zzTtmI3UksdQRVvoxMfooAo" crossorigin="anonymous"></script> 

  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-C6RzsynM9kWDrMNeT87bh95OGNyZPhcTNXj1NW7RuBCsyN/o0jlpcV8Qyq46cDfL" crossorigin="anonymous"></script>
  

  <script src="{{asset('Backend/vendor/chart.js/chart.min.js')}}"></script>
  <script src="{{asset('Backend/vendor/echarts/echarts.min.js')}}"></script>
  <script src="{{asset('Backend/vendor/quill/quill.min.js')}}"></script>

  <script src="{{asset('Backend/vendor/tinymce/tinymce.min.js')}}"></script>
  <script src="{{asset('Backend/vendor/php-email-form/validate.js')}}"></script>

 <!-- Template Main JS File -->
  <script src="{{asset('js/main.js')}}"></script> 





<script>
$(document).ready(function() {
    $('#example').DataTable({

            "lengthMenu": [5, 10, 20, 50, 100], // Row count options
            "pageLength": 10 // Default number of rows to display
        
        });
    });
</script>



<script src="//cdn.ckeditor.com/4.14.0/standard/ckeditor.js"></script>
<script type="text/javascript">
    $(document).ready(function() {
       $('.ckeditor').ckeditor();
    });
</script>
  


  <script>
    $(document).ready(function(){
      console.log("aaaa");
        $("i.toggle-sidebar-btn").click(function(){
            $("body").toggleClass("toggle-sidebar");
        });
    });
  </script>

 
</body>

</html>