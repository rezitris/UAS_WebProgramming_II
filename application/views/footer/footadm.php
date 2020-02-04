 </div>
            </div>
          </div>
        </div>
      </div>
    </section>
  </div>

  
  <aside class="control-sidebar control-sidebar-dark">
  </aside>
</div>
<script src="<?= base_url('assets/admin/plugins/bootstrap/js/bootstrap.bundle.min.js')?>"></script>
<!-- overlayScrollbars -->
<script src="<?= base_url('assets/admin/plugins/overlayScrollbars/js/jquery.overlayScrollbars.min.js')?>"></script>
<!-- AdminLTE App -->
<script src="<?= base_url('assets/admin/js/adminlte.min.js') ?>"></script>
<!-- AdminLTE for demo purposes -->
<script src="<?= base_url('assets/admin/js/adminlte.min.js')?>"></script>
<script>
		function confirmDialog() {
		 return confirm('Apakah anda yakin menghapus data mahasiswa ini ?')
		}

		function hanyaAngka(evt) {
			  var charCode = (evt.which) ? evt.which : event.keyCode
			   if (charCode > 31 && (charCode < 48 || charCode > 57))
	 
			    return false;
			  	return true;
		}
		
	    function runPopup(){
		    window.alert('Data berhasil disimpan');
	    }  
	</script>
	<script type="text/javascript" src="<?= base_url('assets/js/jquery.js') ?>"></script>
	<script type="text/javascript" src="<?= base_url('assets/js/bootstrap.js')?>"></script>
</body>
</html>
