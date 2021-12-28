

function dependent($source, targetId, url, param, prompt)
{
    $.ajax({
        url: url + "?" + $.param(param),
        type: 'GET',
        dataType: 'json',
        success: function(data) {
            var html = '<option value="">' + prompt + '</option>';
            $.each(data, function(index, item) {
                html += '<option value="' + index + '">' + item + '</option>';
            });
            $('#' + targetId).html(html);
        }
    });
}

function showform(url,text)
{
	$.ajax(
			{
				url: url+'?text='+text,
				type: 'GET',
				dateType: 'json',
				success: function(data){
					if (data.keterangan=='1'){
						document.getElementById('keterangan').style.display="block";
					}else{
						document.getElementById('keterangan').style.display="none";
					}
					if (data.jumlah=='1'){
						document.getElementById('jumlah').style.display="block";
					}else{
						document.getElementById('jumlah').style.display="none";
					}
					if (data.model_merk=='1'){
						document.getElementById('modelmerk').style.display="block";
					}else{
						document.getElementById('modelmerk').style.display="none";
					}
					if (data.no_seri=='1'){
						document.getElementById('noseri').style.display="block";
					}else{
						document.getElementById('noseri').style.display="none";
					}	
					if (data.ukuran=='1'){
						document.getElementById('ukuran').style.display="block";
					}else{
						document.getElementById('ukuran').style.display="none";
					}				
					
					if (data.tahun=='1'){
						document.getElementById('tahun').style.display="block";
					}else{
						document.getElementById('tahun').style.display="none";
					}	
					if (data.keadaan=='1'){
						document.getElementById('keadaan').style.display="block";
					}else{
						document.getElementById('keadaan').style.display="none";
					}	
					if (data.luas=='1'){
						document.getElementById('luas').style.display="block";
					}else{
						document.getElementById('luas').style.display="none";
					}
					if (data.letak_alamat=='1'){
						document.getElementById('letakalamat').style.display="block";
					}else{
						document.getElementById('letakalamat').style.display="none";
					}					
					if (data.hak=='1'){
						document.getElementById('hak').style.display="block";
					}else{
						document.getElementById('hak').style.display="none";
					}

					if (data.tgl_sertifikat=='1'){
						document.getElementById('tglsertifikat').style.display="block";
					}else{
						document.getElementById('tglsertifikat').style.display="none";
					}
					
					if (data.no_sertifikat=='1'){
						document.getElementById('nosertifikat').style.display="block";
					}else{
						document.getElementById('nosertifikat').style.display="none";
					}
					if (data.penggunaan=='1'){
						document.getElementById('penggunaan').style.display="block";
					}else{
						document.getElementById('penggunaan').style.display="none";
					}					
					if (data.asal_usul=='1'){
						document.getElementById('asalusul').style.display="block";
					}else{
						document.getElementById('asalusul').style.display="none";
					}	
					
					if (data.harga=='1'){
						document.getElementById('harga').style.display="block";
					}else{
						document.getElementById('harga').style.display="none";
					}	
					
					if (data.bahan=='1'){
						document.getElementById('bahan').style.display="block";
					}else{
						document.getElementById('bahan').style.display="none";
					}	
					
					if (data.no_pabrik=='1'){
						document.getElementById('nopabrik').style.display="block";
					}else{
						document.getElementById('nopabrik').style.display="none";
					}					
					if (data.no_rangka=='1'){
						document.getElementById('norangka').style.display="block";
					}else{
						document.getElementById('norangka').style.display="none";
					}	
					if (data.no_mesin=='1'){
						document.getElementById('nomesin').style.display="block";
					}else{
						document.getElementById('nomesin').style.display="none";
					}
					
					if (data.bpkb=='1'){
						document.getElementById('bpkb').style.display="block";
					}else{
						document.getElementById('bpkb').style.display="none";
					}
					if (data.bertingkat=='1'){
						document.getElementById('bertingkat').style.display="block";
					}else{
						document.getElementById('bertingkat').style.display="none";
					}			
					
					if (data.beton=='1'){
						document.getElementById('beton').style.display="block";
					}else{
						document.getElementById('beton').style.display="none";
					}					
					
					if (data.luas_lantai=='1'){
						document.getElementById('luaslantai').style.display="block";
					}else{
						document.getElementById('luaslantai').style.display="none";
					}			
					
					if (data.no_dokumen=='1'){
						document.getElementById('nodokumen').style.display="block";
					}else{
						document.getElementById('nodokumen').style.display="none";
					}						
					if (data.tgl_dokumen=='1'){
						document.getElementById('tgldokumen').style.display="block";
					}else{
						document.getElementById('tgldokumen').style.display="none";
					}						
					
					if (data.status=='1'){
						document.getElementById('status').style.display="block";
					}else{
						document.getElementById('status').style.display="none";
					}	
					
					if (data.kontruksi=='1'){
						document.getElementById('kontruksi').style.display="block";
					}else{
						document.getElementById('kontruksi').style.display="none";
					}						
					
					if (data.panjang=='1'){
						document.getElementById('panjang').style.display="block";
					}else{
						document.getElementById('panjang').style.display="none";
					}
					if (data.lebar=='1'){
						document.getElementById('lebar').style.display="block";
					}else{
						document.getElementById('lebar').style.display="none";
					}
					if (data.judul=='1'){
						document.getElementById('judul').style.display="block";
					}else{
						document.getElementById('judul').style.display="none";
					}
					
					if (data.spesifikasi=='1'){
						document.getElementById('spesifikasi').style.display="block";
					}else{
						document.getElementById('spesifikasi').style.display="none";
					}
					
					if (data.asal_daerah=='1'){
						document.getElementById('asaldaerah').style.display="block";
					}else{
						document.getElementById('asaldaerah').style.display="none";
					}
					if (data.pencipta=='1'){
						document.getElementById('pencipta').style.display="block";
					}else{
						document.getElementById('pencipta').style.display="none";
					}
					if (data.tanggal=='1'){
						document.getElementById('tanggal').style.display="block";
					}else{
						document.getElementById('tanggal').style.display="none";
					}
					
					if (data.nomor=='1'){
						document.getElementById('nomor').style.display="block";
					}else{
						document.getElementById('nomor').style.display="none";
					}					
					
				}
			}
	);
}


$(function(){
	  $(document).on('click', '.showModalButton', function(){
	
	    if ($('#modal').hasClass('in')) {
	        $('#modal').find('#modalContent')
	                .load($(this).attr('value'));
	        document.getElementById('modalHeader').innerHTML = '<h4>' + $(this).attr('title') + '</h4>';
	    } else {
	        $('#modal').modal('show')
	                .find('#modalContent')
	                .load($(this).attr('value'));
	        document.getElementById('modalHeader').innerHTML = '<h4>' + $(this).attr('title') + '</h4>';
	    }
	});
})

$(function(){
	  $(document).on('click', '.showModalButton2', function(){
	
	    if ($('#modal2').hasClass('in')) {
	        $('#modal2').find('#modalContent2')
	                .load($(this).attr('value'));
	        document.getElementById('modalHeader2').innerHTML = '<h4>' + $(this).attr('title') + '</h4>';
	    } else {
	        $('#modal2').modal('show')
	                .find('#modalContent2')
	                .load($(this).attr('value'));
	        document.getElementById('modalHeader2').innerHTML = '<h4>' + $(this).attr('title') + '</h4>';
	    }
	});
})

$(function(){
	  $(document).on('click', '.showModalButton3', function(){
	
	    if ($('#modal3').hasClass('in')) {
	        $('#modal3').find('#modalContent3')
	                .load($(this).attr('value'));
	        document.getElementById('modalHeader3').innerHTML = '<h4>' + $(this).attr('title') + '</h4>';
	    } else {
	        $('#modal3').modal('show')
	                .find('#modalContent3')
	                .load($(this).attr('value'));
	        document.getElementById('modalHeader3').innerHTML = '<h4>' + $(this).attr('title') + '</h4>';
	    }
	});
})

