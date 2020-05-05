<!-- Bootstrap core JavaScript-->
<script src="{{ url('js/jquery.min.js') }}" type="text/javascript"></script>
<script src="{{ url('js/popper.min.js') }}" type="text/javascript"></script>
<script src="{{ url('js/bootstrap.min.js') }}" type="text/javascript"></script>

{{-- Validation JS --}}
<script src="{{ url('js/parsley.min.js') }}" type="text/javascript"></script>
  
<!-- simplebar js -->
<script src="{{ url('plugins/simplebar/js/simplebar.js') }}" type="text/javascript"></script>
<!-- sidebar-menu js -->
<script src="{{ url('js/sidebar-menu.js') }}" type="text/javascript"></script>

<!-- Custom scripts -->
<script src="{{ url('js/app-script.js') }}" type="text/javascript"></script>
{{-- <script src="{{ url('js/editor.js') }}" type="text/javascript"></script> --}}

<!--Bootstrap Touchspin Js-->
<script src="{{ url('plugins/bootstrap-touchspin/js/jquery.bootstrap-touchspin.js') }}" type="text/javascript"></script>
<script src="{{ url('plugins/bootstrap-touchspin/js/bootstrap-touchspin-script.js') }}" type="text/javascript"></script>
<!-- Dropzone JS  -->
<script src="{{ url('plugins/dropzone/js/dropzone.js') }}" type="text/javascript"></script>




  <script src="{{ url('plugins/summernote/dist/summernote-bs4.min.js') }}" type="text/javascript"></script>
  <script>
     $('#description').summernote({
              height: 200,
              tabsize: 2
          });
   </script>
  <!--Select Plugins Js-->
  <script src="{{ url('plugins/select2/js/select2.min.js') }}" type="text/javascript"></script>
  <!--Inputtags Js-->
  <script src="{{ url('plugins/inputtags/js/bootstrap-tagsinput.js') }}" type="text/javascript"></script>

  <!--Bootstrap Datepicker Js-->
  <script src="{{ url('plugins/bootstrap-datepicker/js/bootstrap-datepicker.min.js') }}" type="text/javascript"></script>
  <script>
    $('#default-datepicker').datepicker({
      todayHighlight: true
    });
    $('#autoclose-datepicker').datepicker({
      autoclose: true,
      todayHighlight: true
    });

    $('#inline-datepicker').datepicker({
       todayHighlight: true
    });

    $('#dateragne-picker .input-daterange').datepicker({
     });

  </script>

  <!--Multi Select Js-->
  <script src="{{ url('plugins/jquery-multi-select/jquery.multi-select.js') }}" type="text/javascript"></script>
  <script src="{{ url('plugins/jquery-multi-select/jquery.quicksearch.js') }}" type="text/javascript"></script>
  
  <script>
      $(document).ready(function() {
          $('.single-select').select2();
    
          $('.multiple-select').select2();

      //multiselect start

          $('#my_multi_select1').multiSelect();
          $('#my_multi_select2').multiSelect({
              selectableOptgroup: true
          });

          $('#my_multi_select3').multiSelect({
              selectableHeader: "<input type='text' class='form-control search-input' autocomplete='off' placeholder='search...'>",
              selectionHeader: "<input type='text' class='form-control search-input' autocomplete='off' placeholder='search...'>",
              afterInit: function (ms) {
                  var that = this,
                      $selectableSearch = that.$selectableUl.prev(),
                      $selectionSearch = that.$selectionUl.prev(),
                      selectableSearchString = '#' + that.$container.attr('id') + ' .ms-elem-selectable:not(.ms-selected)',
                      selectionSearchString = '#' + that.$container.attr('id') + ' .ms-elem-selection.ms-selected';

                  that.qs1 = $selectableSearch.quicksearch(selectableSearchString)
                      .on('keydown', function (e) {
                          if (e.which === 40) {
                              that.$selectableUl.focus();
                              return false;
                          }
                      });

                  that.qs2 = $selectionSearch.quicksearch(selectionSearchString)
                      .on('keydown', function (e) {
                          if (e.which == 40) {
                              that.$selectionUl.focus();
                              return false;
                          }
                      });
              },
              afterSelect: function () {
                  this.qs1.cache();
                  this.qs2.cache();
              },
              afterDeselect: function () {
                  this.qs1.cache();
                  this.qs2.cache();
              }
          });

       $('.custom-header').multiSelect({
            selectableHeader: "<div class='custom-header'>Selectable items</div>",
            selectionHeader: "<div class='custom-header'>Selection items</div>",
            selectableFooter: "<div class='custom-header'>Selectable footer</div>",
            selectionFooter: "<div class='custom-header'>Selection footer</div>"
          });


        });

  </script>