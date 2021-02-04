//Search
function DosenbyProdi() {
  var select, filter, table, tr, td, i;
  select = document.getElementById("dropdown");
  cari = select.options[select.selectedIndex].value;
  table = document.getElementById("listDosen");
  tr = table.getElementsByTagName("tr");
  for (i = 0; i < tr.length; i++) {
    td = tr[i].getElementsByTagName("td")[3];
    if (td) {
      if (td.innerHTML.indexOf(cari) > -1) {
        tr[i].style.display = "";
      } else {
        tr[i].style.display = "none";
      }
    }       
  }
}

function TendikbyName() {
  var input, filter, table, tr, td, i;
  input = document.getElementById("field");
  filter = input.value.toUpperCase();
  table = document.getElementById("listTendik");
  tr = table.getElementsByTagName("tr");
  for (i = 0; i < tr.length; i++) {
    td = tr[i].getElementsByTagName("td")[1];
    if (td) {
      if (td.innerHTML.toUpperCase().indexOf(filter) > -1) {
        tr[i].style.display = "";
      } else {
        tr[i].style.display = "none";
      }
    }       
  }
}


//Form AKP
$('#ceksemuadikjar').click(function () {    
    $(':checkbox.dikjar').prop('checked', this.checked);    
});
$('#ceksemuakarya_ilmiah').click(function () {    
    $(':checkbox.karya_ilmiah').prop('checked', this.checked);    
});
$('#ceksemuapkm').click(function () {    
    $(':checkbox.pkm').prop('checked', this.checked);    
});
$('#ceksemuapenunjang').click(function () {    
    $(':checkbox.penunjang').prop('checked', this.checked);    
});
$('#ceksemuapersonal').click(function () {    
    $(':checkbox.personal').prop('checked', this.checked);    
});
$('#ceksemuapersonaltendik').click(function () {    
    $(':checkbox.personaltendik').prop('checked', this.checked);    
});

$('#ceksemuatendik').click(function () {    
    $(':checkbox.id_tendik').prop('checked', this.checked);    
});