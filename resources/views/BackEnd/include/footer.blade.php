<!--Footer-part-->

<div class="row-fluid">
        <div id="footer" class="span12"> 2013 &copy; Matrix Admin. Brought to you by <a href="http://themedesigner.in">Themedesigner.in</a> </div>
      </div>
      
      <!--end-Footer-part-->
      
      <script src="{{asset('js/backend_js/excanvas.min.js')}}"></script> 
      <script src="{{asset('js/backend_js/jquery.min.js')}}"></script> 
      <script src="{{asset('js/backend_js/jquery.ui.custom.js')}}"></script> 
      <script src="{{asset('js/backend_js/bootstrap.min.js')}}"></script> 
      <script src="{{asset('js/backend_js/jquery.flot.min.js')}}"></script> 
      <script src="{{asset('js/backend_js/jquery.flot.resize.min.js')}}"></script> 
      <script src="{{asset('js/backend_js/jquery.peity.min.js')}}"></script> 
      <script src="{{asset('js/backend_js/fullcalendar.min.js')}}"></script> 
      <script src="{{asset('js/backend_js/matrix.js')}}"></script> 
      <script src="{{asset('js/backend_js/matrix.dashboard.js')}}"></script> 
      <script src="{{asset('js/backend_js/jquery.gritter.min.js')}}"></script> 
      <script src="{{asset('js/backend_js/matrix.interface.js')}}"></script> 
      <script src="{{asset('js/backend_js/matrix.chat.js')}}"></script> 
      <script src="{{asset('js/backend_js/jquery.validate.js')}}"></script> 
      <script src="{{asset('js/backend_js/jquery.wizard.js')}}"></script> 
      <script src="{{asset('js/backend_js/jquery.uniform.js')}}"></script> 
      <script src="{{asset('js/backend_js/select2.min.js')}}"></script> 
      <script src="{{asset('js/backend_js/matrix.form_validation.js')}}"></script> 
      <script src="{{asset('js/backend_js/matrix.popover.js')}}"></script> 
      <script src="{{asset('js/backend_js/jquery.dataTables.min.js')}}"></script> 
      <script src="{{asset('js/backend_js/matrix.tables.js')}}"></script> 
      <script src="{{asset('js/backend_js/matrix.popover.js')}}"></script> 
      <script src="https://cdnjs.cloudflare.com/ajax/libs/sweetalert/1.1.3/sweetalert-dev.min.js"></script> 
      <script src="https://cdnjs.cloudflare.com/ajax/libs/sweetalert/1.1.3/sweetalert-dev.js"></script> 
      <script src="https://cdnjs.cloudflare.com/ajax/libs/sweetalert/1.1.3/sweetalert.min.js"></script> 
      <script type="text/javascript">
        // This function is called from the pop-up menus to transfer to
        // a different page. Ignore if the value returned is a null string:
        function goPage (newURL) {
      
            // if url is empty, skip the menu dividers and reset the menu selection to default
            if (newURL != "") {
            
                // if url is "-", it is this page -- reset the menu:
                if (newURL == "-" ) {
                    resetMenu();            
                } 
                // else, send page to designated URL            
                else {  
                  document.location.href = newURL;
                }
            }
        }
      
      // resets the menu selection upon entry to this page:
      function resetMenu() {
         document.gomenu.selector.selectedIndex = 2;
      }
      
      
      
      </script>
      <script>
          $(document).ready(function() {
          $('#example').DataTable( {
              "pagingType": "scrolling",
              "searching": true
          } );
      } );
      </script>
      </body>
      </html>
      