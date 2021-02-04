const flashData = $('.flash-data').data('flashdata');
if (flashData){
	Swal.fire({
		title: 'Berhasil',
		text: flashData,
		icon: 'success'
	});
}

//tombol-hapus
$('.tombol-hapus').on('click', function(e){
	e.preventDefault();	
	var href = $(this).find("a[href]").attr('href');
	// var obj = this;

	Swal.fire({
	  title: 'Apakah anda yakin?',
	  text: "data dan seluruh nilai akan dihapus",
	  icon: 'warning',
	  showCancelButton: true,
	  confirmButtonColor: '#3085d6',
	  cancelButtonColor: '#d33',
	  confirmButtonText: 'Ya, Hapus!'
	}).then((result) => {
	  if (result.value) {
	      document.location.href = href;
	  }

	// document.write(obj.href);  
})
});


$('.tombol-hapus-tendik').on('click', function(e){
	e.preventDefault();	
	var href2 = $(this).find("a[href]").attr('href');

	Swal.fire({
	  title: 'Apakah anda yakin?',
	  text: "data tendik akan dihapus",
	  icon: 'warning',
	  showCancelButton: true,
	  confirmButtonColor: '#3085d6',
	  cancelButtonColor: '#d33',
	  confirmButtonText: 'Ya, Hapus!'
	}).then((result) => {
	  if (result.value) {
	      document.location.href = href2;
	  }

})
});

