<?php


$tgl=date('Y-m-d H:m:s');

?>

<script type="text/javascript">
        function klikPublishing(pilihPublishing) {
            var tampilPublishing = document.getElementById("tampilPublishing");
            tampilPublishing.hidden = pilihPublishing.checked ? false : true;
            if (!tampilPublishing.hidden) {
                tampilPublishing.focus();
            }
        }
    </script>

<script type="text/javascript">
        function klikBranding(pilihBranding) {
            var tampilPublishing = document.getElementById("tampilBranding");
            tampilBranding.hidden = pilihBranding.checked ? false : true;
            if (!tampilBranding.hidden) {
                tampilBranding.focus();
            }
        }
    </script>

<script type="text/javascript">
        function klikNetwork(pilihNetwork) {
            var tampilNetwork = document.getElementById("tampilNetwork");
            tampilNetwork.hidden = pilihNetwork.checked ? false : true;
            if (!tampilNetwork.hidden) {
                tampilNetwork.focus();
            }
        }
    </script>

<script type="text/javascript">
        function klikFile(pilihFile) {
            var tampilFile = document.getElementById("tampilFile");
            tampilFile.hidden = pilihFile.checked ? false : true;
            if (!tampilFile.hidden) {
                tampilFile.focus();
            }
        }
    </script>

<script type="text/javascript">
        function klikAccounting(pilihAccounting) {
            var tampilAccounting = document.getElementById("tampilAccounting");
            tampilAccounting.hidden = pilihAccounting.checked ? false : true;
            if (!tampilAccounting.hidden) {
                tampilAccounting.focus();
            }
        }
    </script>

<script type="text/javascript">
        function klikReportSystem(pilihReportSystem) {
            var tampilReportSystem = document.getElementById("tampilReportSystem");
            tampilReportSystem.hidden = pilihReportSystem.checked ? false : true;
            if (!tampilReportSystem.hidden) {
                tampilReportSystem.focus();
            }
        }
    </script>

<script type="text/javascript">
        function klikInteraktif(pilihInteraktif) {
            var tampilInteraktif = document.getElementById("tampilInteraktif");
            tampilInteraktif.hidden = pilihInteraktif.checked ? false : true;
            if (!tampilInteraktif.hidden) {
                tampilInteraktif.focus();
            }
        }
    </script>

<!-- begin #content -->
        <div id="content" class="content">
		
		<!-- START include fitur user -->
			<?php include "moduling/flash_fitur_user.php"; ?>
		<!-- END include fitur user -->
		
		<!-- START include data karyawan -->
			<?php include "moduling/flash_data_karyawan.php"; ?>
		<!-- END include data karyawan -->
		
		<!-- START include rekrutmen -->
			<?php include "moduling/flash_rekrutmen.php"; ?>
		<!-- END include rekrutmen -->
			  
			  