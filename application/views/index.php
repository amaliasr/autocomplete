<!DOCTYPE html>
<html>
<head>
    <title>Peminjaman</title>
    <!-- Bootstrap CSS -->
        <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/css/bootstrap.min.css" integrity="sha384-1q8mTJOASx8j1Au+a5WDVnPi2lkFfwwEAa8hDDdjZlpLegxhjVME1fgjWPGmkzs7" crossorigin="anonymous">
        <!-- Custom styles for this template -->
        <link href="<?=base_url()?>assets/css/style.css" rel="stylesheet">
        <link href="<?=base_url()?>assets/jquery/jquery-ui.css" rel="stylesheet">
     
        <!-- jquery -->
        <script src="<?=base_url()?>assets/jquery/jquery.min.js" type="text/javascript"></script>
        <script src="<?=base_url()?>assets/jquery/jquery-ui.js" type="text/javascript"></script>

    <!-- Memanggil file .js untuk proses autocomplete -->
    <script type='text/javascript' src='<?php echo base_url();?>assets/js/jquery-1.8.2.min.js'></script>
    <script type='text/javascript' src='<?php echo base_url();?>assets/js/jquery.autocomplete.js'></script>

    <!-- Memanggil file .css untuk style saat data dicari dalam filed -->
    <link href='<?php echo base_url();?>assets/js/jquery.autocomplete.css' rel='stylesheet' />

    <!-- Memanggil file .css autocomplete_ci/assets/css/default.css -->
    <link href='<?php echo base_url();?>assets/css/default.css' rel='stylesheet' />

    <script type='text/javascript'>
        var site = "<?php echo site_url();?>";
        $(function(){
            $('.autocomplete').autocomplete({
                // serviceUrl berisi URL ke controller/fungsi yang menangani request kita
                serviceUrl: site+'/autocomplete/search',
                // fungsi ini akan dijalankan ketika user memilih salah satu hasil request
                onSelect: function (suggestion) {
                    $('#penerbit').val(''+suggestion.penerbit); // membuat id 'v_nim' untuk ditampilkan
                }
            });
        });
    </script>


</head>
<body>


<!-- autocomplete -->
<div id="content">
<h1>Peminjaman</h1>
<form action="<?php echo site_url('admin/c_admin/add_orders'); ?>" method="post">
    <div class="wrap">
    <table>
        <tr>
            <td><small>Judul :</small><br><input type="search"  class='autocomplete judul' id="autocomplete1" name="nama_customer"/></td>
        </tr>
        <tr>
            <td><small>Penerbit :</small><br><input class="form-control" type="text" class='autocomplete' id="penerbit" name="nama_customer" readonly /></td>
        </tr>
        <tr>
          <td><br></td>
        </tr>
        <tr>
          <td><button type="submit" class="btn btn-primary">Submit</button></td>
        </tr>
    </div>
     
</form>
</div>

<!-- daftar buku -->


       

</body>
</html>