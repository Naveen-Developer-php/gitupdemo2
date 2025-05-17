   <!-- App js -->
    <script src="{{asset('public/assets/js/vendor.min.js')}}"></script>
    <script src="{{asset('public/assets/js/app.js')}}"></script>
      <script src="{{asset('public/assets/js/upload.js')}}"></script>

    <!-- Knob charts js -->
    <script src="{{asset('public/assets/libs/jquery-knob/jquery.knob.min.js')}}"></script>

    <!-- Sparkline Js-->
    <script src="{{asset('public/assets/libs/jquery-sparkline/jquery.sparkline.min.js')}}"></script>

    <script src="{{asset('public/assets/libs/morris.js/morris.min.js')}}"></script>

    <script src="{{asset('public/assets/libs/raphael/raphael.min.js')}}"></script>

    <!-- Dashboard init-->
    <script src="{{asset('public/assets/js/pages/dashboard.js')}}"></script>
     <!-- third party js -->
        <script src="{{asset('public/assets/libs/datatables.net/js/jquery.dataTables.min.js')}}"></script>
        <script src="{{asset('public/assets/libs/datatables.net-bs5/js/dataTables.bootstrap5.min.js')}}"></script>
        <script src="{{asset('public/assets/libs/datatables.net-responsive/js/dataTables.responsive.min.js')}}"></script>
        <script src="{{asset('public/assets/libs/datatables.net-responsive-bs5/js/responsive.bootstrap5.min.js')}}"></script>
        <script src="{{asset('public/assets/libs/datatables.net-buttons/js/dataTables.buttons.min.js')}}"></script>
        <script src="{{asset('public/assets/libs/datatables.net-buttons-bs5/js/buttons.bootstrap5.min.js')}}"></script>
        <script src="{{asset('public/assets/libs/datatables.net-buttons/js/buttons.html5.min.js')}}"></script>
        <script src="{{asset('public/assets/libs/datatables.net-buttons/js/buttons.flash.min.js')}}"></script>
       
        <script src="{{asset('public/assets/libs/datatables.net-keytable/js/dataTables.keyTable.min.js')}}"></script>
        <script src="{{asset('public/assets/libs/datatables.net-select/js/dataTables.select.min.js')}}"></script>
        <script src="{{asset('public/assets/libs/pdfmake/build/pdfmake.min.js')}}"></script>
        <script src="{{asset('public/assets/libs/pdfmake/build/vfs_fonts.js')}}"></script>
           <script src="{{asset('public/assets/libs/selectize/js/standalone/selectize.min.js')}}"></script>
        <script src="{{asset('public/assets/libs/mohithg-switchery/switchery.min.js')}}"></script>
        <script src="{{asset('public/assets/libs/multiselect/js/jquery.multi-select.js')}}"></script>
        <script src="{{asset('public/assets/libs/jquery.quicksearch/jquery.quicksearch.min.js')}}"></script>
        <script src="{{asset('public/assets/libs/select2/js/select2.min.js')}}"></script>
        <script src="{{asset('public/assets/libs/bootstrap-touchspin/jquery.bootstrap-touchspin.min.js')}}"></script>
        <script src="{{asset('public/assets/libs/bootstrap-maxlength/bootstrap-maxlength.min.js')}}"></script>
        <!-- third party js ends -->

        <!-- Datatables js -->
        <script src="{{asset('public/assets/js/pages/datatables.js')}}"></script>

        <script src="{{asset('public/assets/js/alert.js')}}"></script>
        
        <!-- Plugins js -->
        <script src="{{asset('public/assets/libs/quill/quill.min.js')}}"></script>

        <!-- Demo js-->
        <!-- <script src="{{asset('public/assets/js/pages/form-quilljs.js')}}"></script> -->
<script>
document.addEventListener("DOMContentLoaded", function () {
    @if(session('popup_error'))
        Swal.fire({
            icon: 'error',
            title: 'Oops...',
            text: "{{ session('popup_error') }}",
        });
    @endif
    @if(session('popup_success'))
        Swal.fire({
            icon: 'success',
            title: 'Success!',
            text: "{{ session('popup_success') }}",
        });
    @endif
});
</script>
<!-- popup model scripts confirmation -->
 <script>
  function confirmDelete(deleteUrl) {
      document.getElementById('confirmDeleteBtn').setAttribute('href', deleteUrl);
      var deleteModal = new bootstrap.Modal(document.getElementById('deleteConfirmationModal'));
      deleteModal.show();
  }
</script>
<script>
  function confirmDeleteAccount(url) {
    document.getElementById('confirmDeleteAccountBtn').setAttribute('href', url);
    $('#deleteAccountConfirmationModal').modal('show');
  }

  function confirmDeleteAddress(url) {
    document.getElementById('confirmDeleteAddressBtn').setAttribute('href', url);
    $('#deleteAddressConfirmationModal').modal('show');
  }
</script>

