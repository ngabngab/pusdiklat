<script>
    moment().format();
</script>
<script>
var arrSplit, kurikulumname, jenisid, jenisname, mataajarid, mataajarname, mataajardesc, jamlat, sesike, harike, jamke, jammulaibiasa, jamselesaibiasa, jammulaijumat, jamselesaijumat, kurikulumdetailid, aksi, kurikulumsesiid, sesiname, metodename, i, jamlat, jam, idBefore, idNow, submataajar, kurikulumsesidesc, totaljamlat;
idBefore = '';
jammulaibiasa = '08:00:00';
jamselesaibiasa = '17:00:00';
jammulaijumat = '07:30:00';
jamselesaijumat = '17:00:00';

var idKurikulumBefore, idKurikulum;
var kurikulum = [];
idKurikulumBefore = idKurikulum = '';

var idMataAjarBefore, idMataAjar;
var mataajar = [];
idMataAjarBefore = idMataAjar = '';

<?php
if ($kurikulumid)
{
	?>
	kurikulumid = '<?php echo $kurikulumid; ?>';
	kurikulumtypeid = '<?php echo $kurikulumtypeid; ?>';
	kurikulumtypename = '<?php echo $kurikulumtypename; ?>';
	diklattypename = '<?php echo $diklattypename; ?>';
	kurikulumname = '<?php echo $kurikulumname; ?>';
	viewMataAjar('viewmataajar;'+kurikulumid+';'+kurikulumtypeid+';'+kurikulumtypename+';'+diklattypename+';'+kurikulumname);
	<?php
}
?>

function pilihKurikulum(id)
{	
	if(idKurikulumBefore == '')
	{
		document.getElementById(id).style.backgroundColor = "#42A5F5";
		idKurikulumBefore = id;
		idKurikulum = id;
	}
	else
	{
		if(document.getElementById(idKurikulumBefore) != null)
		{
			document.getElementById(idKurikulumBefore).style.backgroundColor = "#fff";
		}
		document.getElementById(id).style.backgroundColor = "#42A5F5";
		idKurikulumBefore = id;
		idKurikulum = id;
	}
	$("#btnPilihKurikulum").removeAttr("disabled");
}
function pilihKurikulumOk()
{
	arrSplit = idKurikulum.split(";");
	kurikulumjenisid = arrSplit[0];
	kurikulumname = arrSplit[1];
	jenisname = arrSplit[2];
	
	
	if(kurikulum.length == 0)
	{
		kurikulum.push({'kurikulumjenisid':kurikulumjenisid, 'kurikulumname':kurikulumname, 'jenisname':jenisname});
	}
	else
	{
		kurikulum.pop();
		kurikulum.push({'kurikulumjenisid':kurikulumjenisid, 'kurikulumname':kurikulumname, 'jenisname':jenisname});
	}
	
	document.getElementById('kurikulumName').value = kurikulum[0].kurikulumname;
	document.getElementById('jenisName').value = kurikulum[0].jenisname;
	$('#myModal5').modal('toggle');
	setTimeout(function(){
		viewKurikulumDetail();
	}, 300)
}

function viewKurikulumDetail()
{
	var uri = '<?php echo base_url(); ?>kurikulum_detail/?kurikulumjenisid='+kurikulum[0].kurikulumjenisid+'&kurikulumname='+kurikulum[0].kurikulumname+'&jenisname='+kurikulum[0].jenisname;
	refreshPage(uri);
}

function pilihMataAjar(id)
{	
	if(idMataAjarBefore == '')
	{
		document.getElementById(id).style.backgroundColor = "#42A5F5";
		idMataAjarBefore = id;
		idMataAjar = id;
	}
	else
	{
		if(document.getElementById(idMataAjarBefore) != null)
		{
			document.getElementById(idMataAjarBefore).style.backgroundColor = "#fff";
		}
		document.getElementById(id).style.backgroundColor = "#42A5F5";
		idMataAjarBefore = id;
		idMataAjar = id;
	}
	$("#btnPilihMataAjar").removeAttr("disabled");
}

function pilihMataAjarOk()
{
	var tmpjamlat;
	arrSplit = idMataAjar.split(";");
	mataajarid = arrSplit[0];
	mataajarname = arrSplit[1];
	mataajardesc = arrSplit[2];
	tmpjamlat = arrSplit[3];
	
	if(mataajar.length == 0)
	{
		mataajar.push({'mataajarid':mataajarid, 'mataajarname':mataajarname, 'mataajardesc':mataajardesc, 'jamlat':tmpjamlat});
	}
	else
	{
		mataajar.pop();
		mataajar.push({'mataajarid':mataajarid, 'mataajarname':mataajarname, 'mataajardesc':mataajardesc, 'jamlat':tmpjamlat});
	}
	document.getElementById('mataAjarName').value = mataajar[0].mataajarname;
	if(jamlat >= 10)
	{
		if(parseInt(mataajar[0].jamlat) <= 10)
		{
			document.getElementById('jam').value = mataajar[0].jamlat;	
		}
		else
		{
			document.getElementById('jam').value = '10';
		}
	}
	else
	{
		if(parseInt(mataajar[0].jamlat) <= jamlat)
		{
			document.getElementById('jam').value = mataajar[0].jamlat;
		}
		else if (parseInt(mataajar[0].jamlat) < 10)
		{
			document.getElementById('jam').value = mataajar[0].jamlat;
		}
		else if (parseInt(mataajar[0].jamlat) >= 10)
		{
			console.log('TES');
			console.log(jamlat);
			document.getElementById('jam').value = jamlat;
		}
		else
		{
			document.getElementById('jam').value = '10';
		}
	}
	document.getElementById('jamLat').value = mataajar[0].jamlat;
	totaljamlat = parseInt(mataajar[0].jamlat);
	ubahWaktu();
	$('#myModal6').modal('toggle');
}



function pad(n, width, z) {
  z = z || '0';
  n = n + '';
  return n.length >= width ? n : new Array(width - n.length + 1).join(z) + n;
}

function tambahKurikulumRinci()
{
	var tmpJam, tmpJamLat, tmp;
	
	arrID = document.getElementById('selectJenisSesi').value.split(';');
	kurikulumsesiid = arrID[0];
	kurikulumsesidesc = arrID[1];
	harike = document.getElementById('hariKe').value;
	jamke = document.getElementById('jamKe').value;
	jammulaibiasa = document.getElementById('jamMulaiBiasa').value;
	jamselesaibiasa = document.getElementById('jamSelesaiBiasa').value;
	jammulaijumat = document.getElementById('jamMulaiJumat').value;
	jamselesaijumat = document.getElementById('jamSelesaiJumat').value;
	jamlat = document.getElementById('jam').value;
	jammulaibiasa = pad(jammulaibiasa, 8);
	jamselesaibiasa = pad(jamselesaibiasa, 8);
	jammulaijumat = pad(jammulaijumat, 8);
	jamselesaijumat = pad(jamselesaijumat, 8);
	submataajar = document.getElementById('subMataAjar').value;
	totaljamlat = document.getElementById('jamLat').value;
	
	tmpJam = parseInt(jamlat);
	tmpJamLat = parseInt(totaljamlat);
	
	if(tmpJam == tmpJamLat)
	{
		if (mataajar.length == 0)
		{
			alert('anda belum mengisi mata ajar');
		}
		else
		{
			
			var uri = '<?php echo base_url(); ?>kurikulum_detail/insert/?kurikulumsesiid='+kurikulumsesiid+'&mataajarid='+mataajar[0].mataajarid+'&harike='+harike+'&jamke='+jamke+'&jammulaibiasa='+jammulaibiasa+'&jamselesaibiasa='+jamselesaibiasa+'&jammulaijumat='+jammulaijumat+'&jamselesaijumat='+jamselesaijumat+'&jamlat='+jamlat+'&submataajar='+submataajar;
			
			$.ajax({
				type: 'get',
				url: uri,
				dataType: 'json',
				success: function (data) 
				{  
				  if (data.message == 'success')
				  {
						uri = '<?php echo base_url(); ?>kurikulum_detail/?kurikulumid='+kurikulumid+'&kurikulumtypeid='+kurikulumtypeid+'&kurikulumtypename='+kurikulumtypename+'&diklattypename='+diklattypename+'&kurikulumname='+kurikulumname;
						refreshPage(uri);
				  }
				  else
				  {
					  alert('Gagal Menambahkan Data karena ' + data.message);
				  }
				  
				}
			});
		}
	}
	else
	{
		if (mataajar.length == 0)
		{
			alert('anda belum mengisi mata ajar');
		}
		else
		{
			
			var uri = '<?php echo base_url(); ?>kurikulum_detail/insertoto/?kurikulumsesiid='+kurikulumsesiid+'&mataajarid='+mataajar[0].mataajarid+'&harike='+harike+'&jamke='+jamke+'&jammulaibiasa='+jammulaibiasa+'&jamselesaibiasa='+jamselesaibiasa+'&jammulaijumat='+jammulaijumat+'&jamselesaijumat='+jamselesaijumat+'&jamlat='+jamlat+'&submataajar='+submataajar+'&kurikulumid='+kurikulumid;
			console.log(uri);
			$.ajax({
				type: 'get',
				url: uri,
				dataType: 'json',
				success: function (data) 
				{  
				  if (data.message == 'success')
				  {
						uri = '<?php echo base_url(); ?>kurikulum_detail/?kurikulumid='+kurikulumid+'&kurikulumtypeid='+kurikulumtypeid+'&kurikulumtypename='+kurikulumtypename+'&diklattypename='+diklattypename+'&kurikulumname='+kurikulumname;
						refreshPage(uri);
				  }
				  else
				  {
					  alert('Gagal Menambahkan Data karena ' + data.message);
				  }
				  
				}
			});
		}
		
	}
	
	
}


function ubahKurikulumRinci()
{
	arrID = document.getElementById('selectJenisSesi').value.split(';');
	kurikulumsesiid = arrID[0];
	kurikulumsesidesc = arrID[1];
	harike = document.getElementById('hariKe').value;
	jamke = document.getElementById('jamKe').value;
	jammulaibiasa = document.getElementById('jamMulaiBiasa').value;
	jamselesaibiasa = document.getElementById('jamSelesaiBiasa').value;
	jammulaijumat = document.getElementById('jamMulaiJumat').value;
	jamselesaijumat = document.getElementById('jamSelesaiJumat').value;
	jamlat = document.getElementById('jam').value;
	jammulaibiasa = pad(jammulaibiasa, 8);
	jamselesaibiasa = pad(jamselesaibiasa, 8);
	jammulaijumat = pad(jammulaijumat, 8);
	jamselesaijumat = pad(jamselesaijumat, 8);
	submataajar = document.getElementById('subMataAjar').value;
	
	if (mataajar.length == 0)
	{
		alert('anda belum mengisi mata ajar');
	}
	else
	{
		var uri = '<?php echo base_url(); ?>kurikulum_detail/update/?kurikulumdetailid='+kurikulumdetailid+'&kurikulumsesiid='+kurikulumsesiid+'&mataajarid='+mataajar[0].mataajarid+'&harike='+harike+'&jamke='+jamke+'&jammulaibiasa='+jammulaibiasa+'&jamselesaibiasa='+jamselesaibiasa+'&jammulaijumat='+jammulaijumat+'&jamselesaijumat='+jamselesaijumat+'&jamlat='+jamlat+'&submataajar='+submataajar;
		
		$.ajax({
			type: 'get',
			url: uri,
			dataType: 'json',
			success: function (data) {
			  
			  
			  if (data.message == 'success')
			  {
				 
					uri = '<?php echo base_url(); ?>kurikulum_detail/?kurikulumid='+kurikulumid+'&kurikulumtypeid='+kurikulumtypeid+'&kurikulumtypename='+kurikulumtypename+'&diklattypename='+diklattypename+'&kurikulumname='+kurikulumname;
					refreshPage(uri);
			  }
			  else
			  {
				  alert('Gagal Menambahkan Data karena ' + data.message);
			  }
			  
			}
		});
		
	}
}

function hapusKurikulumRinci()
{
	arrID = document.getElementById('selectJenisSesi').value.split(';');
	kurikulumsesiid = arrID[0];
	kurikulumsesidesc = arrID[1];
	harike = document.getElementById('hariKe').value;
	jamke = document.getElementById('jamKe').value;
	jammulaibiasa = document.getElementById('jamMulaiBiasa').value;
	jamselesaibiasa = document.getElementById('jamSelesaiBiasa').value;
	jammulaijumat = document.getElementById('jamMulaiJumat').value;
	jamselesaijumat = document.getElementById('jamSelesaiJumat').value;
	submataajar = document.getElementById('subMataAjar').value;
	jammulaibiasa = pad(jammulaibiasa, 8);
	jamselesaibiasa = pad(jamselesaibiasa, 8);
	jammulaijumat = pad(jammulaijumat, 8);
	jamselesaijumat = pad(jamselesaijumat, 8);
	
	
	
		var uri = '<?php echo base_url(); ?>kurikulum_detail/delete/?kurikulumdetailid='+kurikulumdetailid+'&kurikulumsesiid='+kurikulumsesiid+'&mataajarid='+mataajar[0].mataajarid+'&harike='+harike+'&jamke='+jamke+'&jammulaibiasa='+jammulaibiasa+'&jamselesaibiasa='+jamselesaibiasa+'&jammulaijumat='+jammulaijumat+'&jamselesaijumat='+jamselesaijumat+'&jamlat='+jam+'&submataajar='+submataajar;
		
		$.ajax({
			type: 'get',
			url: uri,
			dataType: 'json',
			success: function (data) {
			  
			  
			  if (data.message == 'success')
			  {
					$('#myModal1').modal('hide');
					uri = '<?php echo base_url(); ?>kurikulum_detail/?kurikulumid='+kurikulumid+'&kurikulumtypeid='+kurikulumtypeid+'&kurikulumtypename='+kurikulumtypename+'&diklattypename='+diklattypename+'&kurikulumname='+kurikulumname;
					refreshPage(uri);
			  }
			  else
			  {
				  //alert('Gagal Menambahkan Data karena ' + data.message);
			  }
			  
			}
		});
}

function viewMataAjar(id)
{
	var str, i, temp1, temp2, arrMataAjar, str1, str2, j, k, mataAjarTemp;
	arrID = id.split(';');
	aksi = arrID[0];
	kurikulumid = arrID[1];
	kurikulumtypeid = arrID[2];
	kurikulumtypename = arrID[3];
	diklattypename = arrID[4];
	kurikulumname = arrID[5];
	arrMataAjar = [];
	mataAjarTemp = '';
	if(idBefore == '')
	{
		idBefore = id;
		document.getElementById(id).parentElement.parentElement.style.backgroundColor = '#9E9E9E';
	}
	else
	{
		document.getElementById(idBefore).parentElement.parentElement.style.backgroundColor = '#FFFFFF';
		document.getElementById(id).parentElement.parentElement.style.backgroundColor = '#9E9E9E';
		idBefore = id;
	}
	
	
	setTimeout(function(){
		setTimeout(function(){
			setTimeout(function(){
				setTimeout(function(){
					var $target = $('html,body'); 
					$target.animate({scrollTop: $target.height()}, 1000);
					$.ajax({
						type: 'get',
						url: '<?php echo base_url(); ?>/kurikulum_detail/kurikulumsesi/'+kurikulumid,
						dataType: 'json',
						success: function (data) 
						{	
							i = 0;
							str = '';
							while (i < data.length)
							{
								str += '<option id="'+data[i].kurikulumSesiID+';'+data[i].kurikulumSesiDesc+'" value="'+data[i].kurikulumSesiID+';'+data[i].kurikulumSesiDesc+'">'+data[i].kurikulumSesiDesc+'</option>';
								if(i == 0)
								{
									rubahJenisSesi(data[i].kurikulumSesiID+';'+data[i].kurikulumSesiDesc);
								}
								i++;
								
								
							}
							document.getElementById('selectJenisSesi').innerHTML = str;
						}
					});
					
					$.ajax({
						type: 'get',
						url: '<?php echo base_url(); ?>/kurikulum_detail/ambilmataajar/'+kurikulumid,
						dataType: 'json',
						success: function (data) 
						{	
							i = 0;
							j = 0;
							k = 0;
							str1 = '';
							temp1 = '';
							str2 = '';
							temp2 = '';
							str = '';
							
							while (i < data.length)
							{
								
								
								if (i == 0)
								{
									arrMataAjar.push({'metode':data[i].metodeName, 'sesino':[]});
									arrMataAjar[j].sesino.push({'sesiNo':data[i].sesiNo, 'sesiName':data[i].sesiName, 'harike':data[i].harike, 'jamke':data[i].jamke, 'mataajar':data[i].mataAjarName, 'jamlat':data[i].jamlat, 'jam':data[i].jamMulaiBiasa.substring(0, 5)+' - '+data[i].jamSelesaiBiasa.substring(0, 5), 'idubah':'ubahmataajar;'+data[i].kurikulumDetailID+';'+data[i].kurikulumSesiID+';'+data[i].kurikulumSesiDesc+';'+data[i].mataAjarID+';'+data[i].mataAjarName+';'+data[i].mataAjarDesc+';'+data[i].harike+';'+data[i].jamke+';'+data[i].jamMulaiBiasa+';'+data[i].jamSelesaiBiasa+';'+data[i].jamMulaiJumat+';'+data[i].jamSelesaiJumat+';'+data[i].jamLat+';'+data[i].jamlat+';'+data[i].subMataAjar, 'idhapus':'hapusmataajar;'+data[i].kurikulumDetailID+';'+data[i].kurikulumSesiID+';'+data[i].kurikulumSesiDesc+';'+data[i].mataAjarID+';'+data[i].mataAjarName+';'+data[i].mataAjarDesc+';'+data[i].harike+';'+data[i].jamke+';'+data[i].jamMulaiBiasa+';'+data[i].jamSelesaiBiasa+';'+data[i].jamMulaiJumat+';'+data[i].jamSelesaiJumat+';'+data[i].jamLat+';'+data[i].jamlat+';'+data[i].subMataAjar, 'subMataAjar':data[i].subMataAjar});
								}
								else if (i != data.length - 1)
								{
									if (data[i].metodeName != data[i + 1].metodeName)
									{
										arrMataAjar[j].sesino.push({'sesiNo':data[i].sesiNo, 'sesiName':data[i].sesiName, 'harike':data[i].harike, 'jamke':data[i].jamke, 'mataajar':data[i].mataAjarName, 'jamlat':data[i].jamlat, 'jam':data[i].jamMulaiBiasa.substring(0, 5)+' - '+data[i].jamSelesaiBiasa.substring(0, 5), 'idubah':'ubahmataajar;'+data[i].kurikulumDetailID+';'+data[i].kurikulumSesiID+';'+data[i].kurikulumSesiDesc+';'+data[i].mataAjarID+';'+data[i].mataAjarName+';'+data[i].mataAjarDesc+';'+data[i].harike+';'+data[i].jamke+';'+data[i].jamMulaiBiasa+';'+data[i].jamSelesaiBiasa+';'+data[i].jamMulaiJumat+';'+data[i].jamSelesaiJumat+';'+data[i].jamLat+';'+data[i].jamlat+';'+data[i].subMataAjar, 'idhapus':'hapusmataajar;'+data[i].kurikulumDetailID+';'+data[i].kurikulumSesiID+';'+data[i].kurikulumSesiDesc+';'+data[i].mataAjarID+';'+data[i].mataAjarName+';'+data[i].mataAjarDesc+';'+data[i].harike+';'+data[i].jamke+';'+data[i].jamMulaiBiasa+';'+data[i].jamSelesaiBiasa+';'+data[i].jamMulaiJumat+';'+data[i].jamSelesaiJumat+';'+data[i].jamLat+';'+data[i].jamlat+';'+data[i].subMataAjar, 'subMataAjar':data[i].subMataAjar});
										i++;
										arrMataAjar.push({'metode':data[i].metodeName, 'sesino':[]});
										j++;
										arrMataAjar[j].sesino.push({'sesiNo':data[i].sesiNo, 'sesiName':data[i].sesiName, 'harike':data[i].harike, 'jamke':data[i].jamke, 'mataajar':data[i].mataAjarName, 'jamlat':data[i].jamlat, 'jam':data[i].jamMulaiBiasa+' - '+data[i].jamSelesaiBiasa, 'idubah':'ubahmataajar;'+data[i].kurikulumDetailID+';'+data[i].kurikulumSesiID+';'+data[i].kurikulumSesiDesc+';'+data[i].mataAjarID+';'+data[i].mataAjarName+';'+data[i].mataAjarDesc+';'+data[i].harike+';'+data[i].jamke+';'+data[i].jamMulaiBiasa+';'+data[i].jamSelesaiBiasa+';'+data[i].jamMulaiJumat+';'+data[i].jamSelesaiJumat+';'+data[i].jamLat+';'+data[i].jamlat+';'+data[i].subMataAjar, 'idhapus':'hapusmataajar;'+data[i].kurikulumDetailID+';'+data[i].kurikulumSesiID+';'+data[i].kurikulumSesiDesc+';'+data[i].mataAjarID+';'+data[i].mataAjarName+';'+data[i].mataAjarDesc+';'+data[i].harike+';'+data[i].jamke+';'+data[i].jamMulaiBiasa+';'+data[i].jamSelesaiBiasa+';'+data[i].jamMulaiJumat+';'+data[i].jamSelesaiJumat+';'+data[i].jamLat+';'+data[i].jamlat+';'+data[i].subMataAjar, 'subMataAjar':data[i].subMataAjar});
										
									}
									else
									{
										arrMataAjar[j].sesino.push({'sesiNo':data[i].sesiNo, 'sesiName':data[i].sesiName, 'harike':data[i].harike, 'jamke':data[i].jamke, 'mataajar':data[i].mataAjarName, 'jamlat':data[i].jamlat, 'jam':data[i].jamMulaiBiasa.substring(0, 5)+' - '+data[i].jamSelesaiBiasa.substring(0, 5), 'idubah':'ubahmataajar;'+data[i].kurikulumDetailID+';'+data[i].kurikulumSesiID+';'+data[i].kurikulumSesiDesc+';'+data[i].mataAjarID+';'+data[i].mataAjarName+';'+data[i].mataAjarDesc+';'+data[i].harike+';'+data[i].jamke+';'+data[i].jamMulaiBiasa+';'+data[i].jamSelesaiBiasa+';'+data[i].jamMulaiJumat+';'+data[i].jamSelesaiJumat+';'+data[i].jamLat+';'+data[i].jamlat+';'+data[i].subMataAjar, 'idhapus':'hapusmataajar;'+data[i].kurikulumDetailID+';'+data[i].kurikulumSesiID+';'+data[i].kurikulumSesiDesc+';'+data[i].mataAjarID+';'+data[i].mataAjarName+';'+data[i].mataAjarDesc+';'+data[i].harike+';'+data[i].jamke+';'+data[i].jamMulaiBiasa+';'+data[i].jamSelesaiBiasa+';'+data[i].jamMulaiJumat+';'+data[i].jamSelesaiJumat+';'+data[i].jamLat+';'+data[i].jamlat+';'+data[i].subMataAjar, 'subMataAjar':data[i].subMataAjar});
									}
								}
								else
								{
									arrMataAjar[j].sesino.push({'sesiNo':data[i].sesiNo, 'sesiName':data[i].sesiName, 'harike':data[i].harike, 'jamke':data[i].jamke, 'mataajar':data[i].mataAjarName, 'jamlat':data[i].jamlat, 'jam':data[i].jamMulaiBiasa.substring(0, 5)+' - '+data[i].jamSelesaiBiasa.substring(0, 5), 'idubah':'ubahmataajar;'+data[i].kurikulumDetailID+';'+data[i].kurikulumSesiID+';'+data[i].kurikulumSesiDesc+';'+data[i].mataAjarID+';'+data[i].mataAjarName+';'+data[i].mataAjarDesc+';'+data[i].harike+';'+data[i].jamke+';'+data[i].jamMulaiBiasa+';'+data[i].jamSelesaiBiasa+';'+data[i].jamMulaiJumat+';'+data[i].jamSelesaiJumat+';'+data[i].jamLat+';'+data[i].jamlat+';'+data[i].subMataAjar, 'idhapus':'hapusmataajar;'+data[i].kurikulumDetailID+';'+data[i].kurikulumSesiID+';'+data[i].kurikulumSesiDesc+';'+data[i].mataAjarID+';'+data[i].mataAjarName+';'+data[i].mataAjarDesc+';'+data[i].harike+';'+data[i].jamke+';'+data[i].jamMulaiBiasa+';'+data[i].jamSelesaiBiasa+';'+data[i].jamMulaiJumat+';'+data[i].jamSelesaiJumat+';'+data[i].jamLat+';'+data[i].jamlat+';'+data[i].subMataAjar, 'subMataAjar':data[i].subMataAjar});
								}
								i++;
							}
							
							i = 0;
							while (i < arrMataAjar.length)
							{
								j = 0;
								while (j < arrMataAjar[i].sesino.length)
								{
									if (arrMataAjar[i].sesino[j].subMataAjar != '')
									{
										mataAjarTemp = arrMataAjar[i].sesino[j].subMataAjar;
									}
									else
									{
										mataAjarTemp = arrMataAjar[i].sesino[j].mataajar;
									}
									
									if (j == 0)
									{
										str += '<tr><td rowspan="'+arrMataAjar[i].sesino.length+'" style="vertical-align:middle;">'+arrMataAjar[i].metode+'</td><td>'+arrMataAjar[i].sesino[j].sesiNo+'</td><td>'+arrMataAjar[i].sesino[j].sesiName+'</td><td>'+arrMataAjar[i].sesino[j].harike+'</td><td>'+arrMataAjar[i].sesino[j].jamke+'</td><td>'+mataAjarTemp+'</td><td>'+arrMataAjar[i].sesino[j].jamlat+'</td><td>'+arrMataAjar[i].sesino[j].jam+'</td><td style="display:none;">'+arrMataAjar[i].sesino[j].subMataAjar+'</td><td><button type="button" class="btn btn-warning" data-toggle="tooltip" data-placement="top" title="Ubah Data Mata Ajar" id="'+arrMataAjar[i].sesino[j].idubah+'" onclick="ubahData(this.id);"><i class="fa fa-pencil"></i></button>&nbsp&nbsp<button type="button" class="btn btn-danger" data-toggle="tooltip" data-placement="top" title="Hapus Data Mata Ajar" id="'+arrMataAjar[i].sesino[j].idhapus+'" onclick="hapusData(this.id);"><i class="fa fa-close"></i></button></td></tr>';
									}
									else
									{
										str += '<tr><td>'+arrMataAjar[i].sesino[j].sesiNo+'</td><td>'+arrMataAjar[i].sesino[j].sesiName+'</td><td>'+arrMataAjar[i].sesino[j].harike+'</td><td>'+arrMataAjar[i].sesino[j].jamke+'</td><td>'+mataAjarTemp+'</td><td>'+arrMataAjar[i].sesino[j].jamlat+'</td><td>'+arrMataAjar[i].sesino[j].jam+'</td><td style="display:none;">'+arrMataAjar[i].sesino[j].subMataAjar+'</td><td><button type="button" class="btn btn-warning" data-toggle="tooltip" data-placement="top" title="Ubah Data Mata Ajar" id="'+arrMataAjar[i].sesino[j].idubah+'" onclick="ubahData(this.id);"><i class="fa fa-pencil"></i></button>&nbsp&nbsp<button type="button" class="btn btn-danger" data-toggle="tooltip" data-placement="top" title="Hapus Data Mata Ajar" id="'+arrMataAjar[i].sesino[j].idhapus+'" onclick="hapusData(this.id);"><i class="fa fa-close"></i></button></td></tr>';
									}
									j++;
								}
								i++;
							}
							
							document.getElementById('tableMataAjar').innerHTML = str;
							
							
							$.ajax({
								type: 'get',
								url: '<?php echo base_url(); ?>/kurikulum_detail/ambiltotalhari/'+kurikulumid,
								dataType: 'json',
								success: function (data) 
								{	
									i = 0;
									str = '';
									while (i < data.length)
									{
										
										document.getElementById('totalHari').innerHTML = data[0].number;
										i++;	
									}
									
									$.ajax({
										type: 'get',
										url: '<?php echo base_url(); ?>/kurikulum_detail/ambiltotaljam/'+kurikulumid,
										dataType: 'json',
										success: function (data) 
										{	
											i = 0;
											str = '';
											while (i < data.length)
											{
												
												document.getElementById('totalJam').innerHTML = data[0].number;
												i++;	
											}
											
										}
									});
									
								}
							});
							
						}
					});
					
					document.getElementById('titleKurikulumRinci').innerHTML = 'Data Mata Ajar Kurikulum : ' + kurikulumname;
					document.getElementById('tableKurikulumRinci').style.display = 'block';
					document.getElementById('formTambahKurikulumRinci').style.display = 'none';
				}, 300);
				document.getElementById('tableKurikulumRinci').className = 'pesanmuncul';
				document.getElementById('formTambahKurikulumRinci').className = 'pesanhilang';
			}, 300);
			document.getElementById('tableKurikulumRinci').style.display = 'none';
		}, 300);
		document.getElementById('tableKurikulumRinci').className = 'pesanhilang';
	}, 300);
}

function tambahData()
{
	var str, tmpB, tmpJ, tempB, tempJ;
	tempB = 0;
	tempJ = 0;
	setTimeout(function(){
		setTimeout(function(){
			setTimeout(function(){
				setTimeout(function(){
					var $target = $('html,body'); 
					$target.animate({scrollTop: $target.height()}, 1000);
					
					document.getElementById('mataAjarName').value = '';
					document.getElementById('jamLat').value = '';
					document.getElementById('jamKe').value = '1';
					
					document.getElementById('jam').value = '1';
					document.getElementById('jamMulaiBiasa').value = jammulaibiasa;
					document.getElementById('jamSelesaiBiasa').value = jamselesaibiasa;
					document.getElementById('jamMulaiJumat').value = jammulaijumat;
					document.getElementById('jamSelesaiJumat').value = jamselesaijumat;
					document.getElementById('subMataAjar').value = '';
					if(mataajar.length > 0)
					{
						mataajar.pop();
					}
					
					document.getElementById('footerMataAjar').innerHTML = '<button type="button" class="btn btn-primary"  onclick="tambahKurikulumRinci();"><i class="fa fa-save"></i> Simpan</button>';
					document.getElementById('titleMataAjar').innerHTML = 'Tambah Data Mata Ajar : ' + kurikulumname;
					
							
					$.ajax({
						type: 'get',
						url: '<?php echo base_url(); ?>/kurikulum_detail/ambilLast/'+kurikulumid,
						dataType: 'json',
						success: function (data) 
						{	
							console.log(data);
							if(data[0].number == 0)
							{
								jamlat = 0;
								jamke = 1;
								harike = 1;
							}
							else
							{
								harike = parseInt(data[0].harike);
								jamke = parseInt(data[0].jamke);
								jamlat = parseInt(data[0].jamlat);
								jammulaibiasa = data[0].jamMulaiBiasa;
								jamselesaibiasa = data[0].jamSelesaiBiasa;
								jammulaijumat = data[0].jamMulaiJumat;
								jamselesaijumat = data[0].jamSelesaiJumat;
								kurikulumsesiid = data[0].kurikulumSesiID;
								kurikulumsesidesc = data[0].kurikulumSesiDesc;
								document.getElementById('selectJenisSesi').value = kurikulumsesiid + ';' + kurikulumsesidesc;
								var jHB = moment(jamselesaibiasa, "HH:mm:ss").hour();
								var jHJ = moment(jamselesaijumat, "HH:mm:ss").hour();
								console.log(jHB);
								if(jHB >= 17 || jHJ >= 17)
								{
									harike++;
									jamke = 1;
									
								}
								else
								{
									jamke++;
									jamlat = 10 - jamlat;
									jammulaibiasa = jamselesaibiasa;
									jammulaijumat = jamselesaijumat;
									tmpB = moment(jammulaibiasa, "HH:mm:ss");
									if(tmpB.get('hour') == 10 && tmpB.get('minute') == 15)
									{
										tempB = tempB + 15;
									}
									else if (tmpB.get('hour') == 12)
									{
										tempB = tempB + 60;
									}
									else if (tmpB.get('hour') == 15 && tmpB.get('minute') == 15)
									{
										tempB = tempB + 15;
									}
									tmpB = tmpB.add(tempB, 'm');
									jammulaibiasa = tmpB.format("HH:mm:ss");
									tmpJ = moment(jammulaijumat, "HH:mm:ss");
									if(tmpJ.get('hour') == 9 && tmpJ.get('minute') == 45)
									{
										tempJ = tempJ + 15;
									}
									else if (tmpJ.get('hour') == 11 && tmpJ.get('minute') == 30)
									{
										tempJ = tempJ + 90;
									}
									else if (tmpJ.get('hour') == 15 && tmpJ.get('minute') == 15)
									{
										tempJ = tempJ + 15;
									}
									tmpJ = tmpJ.add(tempJ, 'm');
									jammulaijumat = tmpJ.format("HH:mm:ss");
									
								}
								document.getElementById('jamKe').value = jamke;
								document.getElementById('hariKe').value = harike;
								document.getElementById('jam').value = jamlat;
								document.getElementById('jamMulaiBiasa').value = jammulaibiasa;
								document.getElementById('jamSelesaiBiasa').value = jamselesaibiasa;
								document.getElementById('jamMulaiJumat').value = jammulaijumat;
								document.getElementById('jamSelesaiJumat').value = jamselesaijumat;
								
								ubahWaktu();
							}										
						}
					});
							
						
					document.getElementById('formTambahKurikulumRinci').style.display = 'block';
				}, 300);
				document.getElementById('formTambahKurikulumRinci').className = 'pesanmuncul';
			}, 300);
			document.getElementById('formTambahKurikulumRinci').style.display = 'none';
		}, 300);
		document.getElementById('formTambahKurikulumRinci').className = 'pesanhilang';
	}, 300);
}

function ubahData(id)
{
	arrID = id.split(';');
	aksi = arrID[0];
	kurikulumdetailid = arrID[1];
	kurikulumsesiid = arrID[2];
	kurikulumsesidesc = arrID[3];
	mataajarid = arrID[4];
	mataajarname = arrID[5];
	mataajardesc = arrID[6];
	harike = arrID[7];
	jamke = arrID[8];
	jammulaibiasa = arrID[9];
	jamselesaibiasa = arrID[10];
	jammulaijumat = arrID[11];
	jamselesaijumat = arrID[12];
	jamlat = arrID[13];
	jam = arrID[14];
	submataajar = arrID[15];
	
	var str;
	setTimeout(function(){
		setTimeout(function(){
			setTimeout(function(){
				setTimeout(function(){
					var $target = $('html,body'); 
					$target.animate({scrollTop: $target.height()}, 1000);
					if(mataajar.length > 0)
					{
						mataajar.pop();
						mataajar.push({'mataajarid':mataajarid, 'mataajarname':mataajarname, 'mataajardesc':mataajardesc, 'jamlat':jamlat});
					}
					else
					{
						mataajar.push({'mataajarid':mataajarid, 'mataajarname':mataajarname, 'mataajardesc':mataajardesc, 'jamlat':jamlat});
					}
					document.getElementById('selectJenisSesi').value = kurikulumsesiid + ';' + kurikulumsesidesc;
					document.getElementById('mataAjarName').value = mataajarname;
					document.getElementById('jamKe').value = jamke;
					document.getElementById('jamLat').value = jamlat;
					document.getElementById('hariKe').value = harike;
					document.getElementById('jamMulaiBiasa').value = jammulaibiasa;
					document.getElementById('jamSelesaiBiasa').value = jamselesaibiasa;
					document.getElementById('jamMulaiJumat').value = jammulaijumat;
					document.getElementById('jamSelesaiJumat').value = jamselesaijumat;
					document.getElementById('jam').value = jam;
					document.getElementById('subMataAjar').value = submataajar;
					document.getElementById('footerMataAjar').innerHTML = '<button type="button" class="btn btn-warning"  onclick="ubahKurikulumRinci();"><i class="fa fa-save"></i> Simpan</button>';
					document.getElementById('titleMataAjar').innerHTML = 'Ubah Data Mata Ajar : ' + kurikulumname;
					document.getElementById('formTambahKurikulumRinci').style.display = 'block';
				}, 300);
				document.getElementById('formTambahKurikulumRinci').className = 'pesanmuncul';
			}, 300);
			document.getElementById('formTambahKurikulumRinci').style.display = 'none';
		}, 300);
		document.getElementById('formTambahKurikulumRinci').className = 'pesanhilang';
	}, 300);
	
}


function hapusData(id)
{
	arrID = id.split(';');
	aksi = arrID[0];
	kurikulumdetailid = arrID[1];
	kurikulumsesiid = arrID[2];
	kurikulumsesidesc = arrID[3];
	mataajarid = arrID[4];
	mataajarname = arrID[5];
	mataajardesc = arrID[6];
	harike = arrID[7];
	jamke = arrID[8];
	jammulaibiasa = arrID[9];
	jamselesaibiasa = arrID[10];
	jammulaijumat = arrID[11];
	jamselesaijumat = arrID[12];
	jamlat = arrID[13];
	jam = arrID[14];
	submataajar = arrID[15];
	if(mataajar.length > 0)
	{
		mataajar.pop();
		mataajar.push({'mataajarid':mataajarid, 'mataajarname':mataajarname, 'mataajardesc':mataajardesc, 'jamlat':jamlat});
	}
	else
	{
		mataajar.push({'mataajarid':mataajarid, 'mataajarname':mataajarname, 'mataajardesc':mataajardesc, 'jamlat':jamlat});
	}
	$('#myModal1').modal('show');
	
}

function rubahJenisSesi(id)
{
	
	var kurikulumsesiid, lastNumber;
	var str, tmpB, tmpJ, tempB, tempJ;
	tempB = 0;
	tempJ = 0;
	arrID = id.split(';');
	kurikulumsesiid = arrID[0];
	$.ajax({
		type: 'get',
		url: '<?php echo base_url(); ?>/kurikulum_detail/ambilLastKurikulumSesi/'+kurikulumid+'/'+kurikulumsesiid,
		dataType: 'json',
		success: function (data) 
		{	
			console.log(data);
			if(data[0].number == 0)
			{
				jamlat = 10;
				jamke = 1;
				harike = 1;
				jammulaibiasa = '08:00:00';
				jammulaijumat = '07:30:00';
				jamselesaibiasa = '17:00:00';
				jamselesaijumat = '17:00:00';
			}
			else
			{
				harike = parseInt(data[0].harike);
				jamke = parseInt(data[0].jamke);
				jamlat = parseInt(data[0].jamlat);
				jammulaibiasa = data[0].jamMulaiBiasa;
				jamselesaibiasa = data[0].jamSelesaiBiasa;
				jammulaijumat = data[0].jamMulaiJumat;
				jamselesaijumat = data[0].jamSelesaiJumat;
				kurikulumsesiid = data[0].kurikulumSesiID;
				kurikulumsesidesc = data[0].kurikulumSesiDesc;
				document.getElementById('selectJenisSesi').value = kurikulumsesiid + ';' + kurikulumsesidesc;
				var jHB = moment(jamselesaibiasa, "HH:mm:ss").hour();
				var jHJ = moment(jamselesaijumat, "HH:mm:ss").hour();
				console.log(jHB);
				if(jHB >= 17 || jHJ >= 17)
				{
					harike++;
					jamke = 1;
					
				}
				else
				{
					jamke++;
					jamlat = 10 - jamlat;
					jammulaibiasa = jamselesaibiasa;
					jammulaijumat = jamselesaijumat;
					tmpB = moment(jammulaibiasa, "HH:mm:ss");
					if(tmpB.get('hour') == 10 && tmpB.get('minute') == 15)
					{
						tempB = tempB + 15;
					}
					else if (tmpB.get('hour') == 12)
					{
						tempB = tempB + 60;
					}
					else if (tmpB.get('hour') == 15 && tmpB.get('minute') == 15)
					{
						tempB = tempB + 15;
					}
					tmpB = tmpB.add(tempB, 'm');
					jammulaibiasa = tmpB.format("HH:mm:ss");
					tmpJ = moment(jammulaijumat, "HH:mm:ss");
					if(tmpJ.get('hour') == 9 && tmpJ.get('minute') == 45)
					{
						tempJ = tempJ + 15;
					}
					else if (tmpJ.get('hour') == 11 && tmpJ.get('minute') == 30)
					{
						tempJ = tempJ + 90;
					}
					else if (tmpJ.get('hour') == 15 && tmpJ.get('minute') == 15)
					{
						tempJ = tempJ + 15;
					}
					tmpJ = tmpJ.add(tempJ, 'm');
					jammulaijumat = tmpJ.format("HH:mm:ss");
					
				}
				
			}
			document.getElementById('jamKe').value = jamke;
			document.getElementById('hariKe').value = harike;
			document.getElementById('jam').value = jamlat;
			document.getElementById('jamMulaiBiasa').value = jammulaibiasa;
			document.getElementById('jamSelesaiBiasa').value = jamselesaibiasa;
			document.getElementById('jamMulaiJumat').value = jammulaijumat;
			document.getElementById('jamSelesaiJumat').value = jamselesaijumat;
			
			ubahWaktu2(jammulaibiasa, jammulaijumat, jamlat)										
		}
	});
	
	
}

function ubahWaktu()
{
	var i, tmpJMB, tmpJMJ, tempB, tempJ, tmpB, tmpJ;
	jamlat = parseInt(document.getElementById('jam').value);
	jammulaibiasa = document.getElementById('jamMulaiBiasa').value;
	jammulaijumat = document.getElementById('jamMulaiJumat').value;
	//tempJMB = moment(jammulaibiasa, "HH:mm:ss");
	//tempJMJ = moment(jammulaijumat, "HH:mm:ss");
	
	
	i = 1;
	tempB = 0;
	while (i <= jamlat)
	{
		tmpB = moment(jammulaibiasa, "HH:mm:ss");
		tempB = tempB + 45;
		tmpB = tmpB.add(tempB, 'm');
		if(tmpB.get('hour') == 10 && tmpB.get('minute') == 15)
		{
			tempB = tempB + 15;
		}
		else if (tmpB.get('hour') == 12)
		{
			tempB = tempB + 60;
		}
		else if (tmpB.get('hour') == 15 && tmpB.get('minute') == 15)
		{
			tempB = tempB + 15;
		}
		i++;
	}
	tempJMB = tmpB.format("HH:mm:ss");
	
	
	i = 1;
	tempJ = 0;
	while (i <= jamlat)
	{
		tmpJ = moment(jammulaijumat, "HH:mm:ss");
		tempJ = tempJ + 45;
		tmpJ = tmpJ.add(tempJ, 'm');
		if(tmpJ.get('hour') == 9 && tmpJ.get('minute') == 45)
		{
			tempJ = tempJ + 15;
		}
		else if (tmpJ.get('hour') == 11 && tmpJ.get('minute') == 30)
		{
			tempJ = tempJ + 90;
		}
		else if (tmpJ.get('hour') == 15 && tmpJ.get('minute') == 15)
		{
			tempJ = tempJ + 15;
		}
		i++;
	}
	tempJMJ = tmpJ.format("HH:mm:ss");
	//console.log(tempJMB.format("HH:mm:ss"));
	//jammulaiharibiasa = 
	jamselesaibiasa = tempJMB;
	jamselesaijumat = tempJMJ;
	document.getElementById('jamSelesaiBiasa').value = tempJMB;
	document.getElementById('jamSelesaiJumat').value = tempJMJ;
}

function ubahWaktu2(jamMulaiBiasa, jamMulaiJumat, Jam)
{
	var i, tmpJMB, tmpJMJ, tempB, tempJ, tmpB, tmpJ;
	jamlat = parseInt(Jam);
	jammulaibiasa = jamMulaiBiasa;
	jammulaijumat = jamMulaiJumat;
	//tempJMB = moment(jammulaibiasa, "HH:mm:ss");
	//tempJMJ = moment(jammulaijumat, "HH:mm:ss");
	
	
	i = 1;
	tempB = 0;
	while (i <= jamlat)
	{
		tmpB = moment(jammulaibiasa, "HH:mm:ss");
		tempB = tempB + 45;
		tmpB = tmpB.add(tempB, 'm');
		if(tmpB.get('hour') == 10 && tmpB.get('minute') == 15)
		{
			tempB = tempB + 15;
		}
		else if (tmpB.get('hour') == 12)
		{
			tempB = tempB + 60;
		}
		else if (tmpB.get('hour') == 15 && tmpB.get('minute') == 15)
		{
			tempB = tempB + 15;
		}
		i++;
	}
	tempJMB = tmpB.format("HH:mm:ss");
	
	
	i = 1;
	tempJ = 0;
	while (i <= jamlat)
	{
		tmpJ = moment(jammulaijumat, "HH:mm:ss");
		tempJ = tempJ + 45;
		tmpJ = tmpJ.add(tempJ, 'm');
		if(tmpJ.get('hour') == 9 && tmpJ.get('minute') == 45)
		{
			tempJ = tempJ + 15;
		}
		else if (tmpJ.get('hour') == 11 && tmpJ.get('minute') == 30)
		{
			tempJ = tempJ + 90;
		}
		else if (tmpJ.get('hour') == 15 && tmpJ.get('minute') == 15)
		{
			tempJ = tempJ + 15;
		}
		i++;
	}
	tempJMJ = tmpJ.format("HH:mm:ss");
	//console.log(tempJMB.format("HH:mm:ss"));
	//jammulaiharibiasa = 
	jamselesaibiasa = tempJMB;
	jamselesaijumat = tempJMJ;
	
}

function newTab(url)
{
	var win = window.open(url, '_blank');
	win.focus();
}

function cetakKurikulum(id)
{
	arrSplit = id.split(';');
	kurikulumid = arrSplit['1'];
	var uri = '<?php echo base_url() ?>cetakkurikulum/?kurikulumid='+kurikulumid;
	newTab(uri);
}
</script>

<div class="modal fade" id="myModal1" tabindex="-1" role="dialog" aria-labelledby="myModalLabel">
	<div class="modal-dialog" role="document">
		<div class="modal-content">
			<div class="modal-header">
				<button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
				<h4 class="modal-title" id="myModalLabel">Konfirmasi Hapus Data</h4>
			</div>
			<div class="modal-body">
				Apakah Anda Yakin Akan Menghapus Data ?					
			</div>
			<div class="modal-footer">
				<button type="button" class="btn btn-danger" onclick="hapusKurikulumRinci();"><i class="fa fa-close"></i> Hapus</button>
				<button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
				</div>
		</div>
	</div>
</div>


<div class="modal fade" id="myModal6" tabindex="-1" role="dialog" aria-labelledby="myModalLabel">
	<div class="modal-dialog" role="document">
		<div class="modal-content">
			<div class="modal-header">
				<button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
				<h4 class="modal-title" id="myModalLabel">List Mata Ajar</h4>
			</div>
			<div class="modal-body">
				<table id="example8" class="table table-bordered table-hover">
					<thead>
					<tr>
						<th>Nama Mata AJar</th>
						<th>Deskripsi</th>
						<th>Total Jam Lat</th>
					</tr>
						
					</thead>
					<tbody>
						<?php
						
							foreach ($mata_ajars as $mata_ajar)
							{
								?>
								<tr id="<?php echo $mata_ajar->mataAjarID; ?>;<?php echo $mata_ajar->mataAjarName; ?>;<?php echo $mata_ajar->mataAjarDesc; ?>;<?php echo $mata_ajar->jamLat; ?>" style="cursor:pointer" onclick="pilihMataAjar(this.id)">
									<td><?php echo $mata_ajar->mataAjarName; ?></td>
									<td><?php echo $mata_ajar->mataAjarDesc; ?></td>
									<td><?php echo $mata_ajar->jamLat; ?></td>
								</tr>
								<?php
							}
					
						?>
					</tbody>
					<tfoot>
					<tr>
					  
					</tr>
					</tfoot>
					</table>						
			</div>
			<div class="modal-footer">
				<button type="button" class="btn btn-primary" disabled id="btnPilihMataAjar" onclick="pilihMataAjarOk();">Pilih</button>
				<button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
				</div>
		</div>
	</div>
</div>

<div class="content-wrapper">
<!-- Main content -->
    <section class="content">
      <!-- Small boxes (Stat box) -->
		<h3>
			Kurikulum Detail
			<small>&nbsp</small>
		</h3>
		<ol class="breadcrumb">
			<li><a href="<?php echo base_url(); ?>"><i class="fa fa-home"></i> Home</a></li>
			<li><a href="<?php echo base_url(); ?>"><i class="fa fa-dashboard"></i> Dashboard</a></li>
			<li class="active"><a onclick="refreshPage('<?php echo base_url(); ?>kurikulum_detail');" style="cursor:pointer;"><i class="fa fa-tasks"></i> Kurikulum Detail</a></li>
		</ol>
      <!-- /.row -->
      <!-- Main row -->
      <div class="row">
		<div class="col-xs-12">
			<div class="box box-primary">
            <div class="box-header">
              <i class="ion ion-clipboard"></i>

              <h3 class="box-title">Data Kurikulum Detail</h3>

              <div class="box-tools pull-right">
				<button type="button" class="btn btn-primary btn-sm pull-right" data-widget="collapse" data-toggle="tooltip" title="Collapse" style="margin-right: 5px;">
                  <i class="fa fa-minus"></i></button>
              </div>
            </div>
            
            <div class="box-body">
				<div class="col-xs-12" style="overflow:scroll;margin:0!important;">
					<table id="example10" class="table table-bordered" cellspacing="0" style="table-layout: fixed;">
						<thead>
							<tr>
								<td style="width:10px!important;">NO</td>
								<td style="width:70px!important;">Tipe Diklat</td>
								<td style="width:100px!important;">Jenis Kurikulum</td>
								<td style="width:100px!important;">Nama Kurikulum</td>
								<td style="width:30px!important;">Lihat Mata Ajar</td>
								<td style="width:30px!important;">Cetak Kurikulum</td>
							</tr>
									</thead>
									<tbody>
										<?php
										if($kurikulums)
										{
											$i = 1;
											foreach ($kurikulums as $kurikulum)
											{
												
												?>
												<tr>
													<td><?php echo $i;?></td>
													<td><?php echo $kurikulum->diklatTypeName; ?></td>
													<td><?php echo $kurikulum->kurikulumTypeName; ?></td>
													<td><?php echo $kurikulum->kurikulumName; ?></td>
													<td>
													<?php
														if (intval($kurikulum->jmlMataAjar) > 0)
														{
															?>
															<button type="button" class="btn btn-primary" data-toggle="tooltip" data-placement="top" title="Memiliki <?php echo $kurikulum->jmlMataAjar;?> Mata Ajar" id="viewmataajar;<?php echo $kurikulum->kurikulumID; ?>;<?php echo $kurikulum->kurikulumTypeID; ?>;<?php echo $kurikulum->kurikulumTypeName; ?>;<?php echo $kurikulum->diklatTypeName; ?>;<?php echo $kurikulum->kurikulumName; ?>" onclick="viewMataAjar(this.id)"><i class="fa fa-table"></i></button>
															<?php
														}
														else
														
														{
															?>
															<button type="button" class="btn btn-warning" data-toggle="tooltip" data-placement="top" title="Belum Memiliki Mata Ajar" id="viewmataajar;<?php echo $kurikulum->kurikulumID; ?>;<?php echo $kurikulum->kurikulumTypeID; ?>;<?php echo $kurikulum->kurikulumTypeName; ?>;<?php echo $kurikulum->diklatTypeName; ?>;<?php echo $kurikulum->kurikulumName; ?>" onclick="viewMataAjar(this.id)"><i class="fa fa-table"></i></button>
															<?php
														}
													?>
													
													
													</td>
													<td><button type="button" class="btn btn-primary" title="Belum Memiliki Mata Ajar" id="cetakkurikulum;<?php echo $kurikulum->kurikulumID; ?>" onclick="cetakKurikulum(this.id)"><i class="fa fa-print"></i></button></td>
												</tr>
												<?php
												$i++;
											}
										}
										?>
									</tbody>
									<tfoot>
									
									</tfoot>
									</table>
									</div>	
            </div>
            
            <!--<div class="box-footer clearfix no-border">
              <button type="button" class="btn btn-primary"  onclick="viewKurikulumRinci();" id="btnKurikulumRinci"><i class="fa fa-plus"></i> Tampilkan Kurikulum Rinci</button>&nbsp&nbsp
            </div>-->
          </div>
		  </div>
	  </div>
	 
	  
	  <div class="row">
		
		  
		  
		  <div class="col-xs-12"></div>
		  
		  <div id="tableKurikulumRinci" style="display:none;">
		  <div class="col-xs-12">
			<div class="box box-primary">
            <div class="box-header">
              <i class="ion ion-clipboard"></i>

              <h3 class="box-title" id="titleKurikulumRinci"></h3>

              <div class="box-tools pull-right">
				<button type="button" class="btn btn-primary btn-sm pull-right" data-widget="collapse" data-toggle="tooltip" title="Collapse" style="margin-right: 5px;">
                  <i class="fa fa-minus"></i></button>
				  <button type="button" class="btn btn-primary btn-sm pull-right" style="margin-right: 5px;" onclick="tambahData();"><i class="fa fa-plus" ></i> Tambah Mata Ajar</button> 
              </div>
            </div>
            
            <div class="box-body">
				<div class="col-xs-12" style="overflow:scroll;">
				<table id="example11" class="table table-bordered">
					<thead>
					<tr>
					  <td>Metode</td>
					  <td>Sesi Ke</td>
					  <td>Jenis Sesi</td>
					  <td>Hari Ke</td>
					  <td>Jam Ke</td>
					  <td>Nama Mata Ajar</td>
					  <td>Jam Lat</td>
					  <td>Jam Ajar</td>
					  <td style="display:none;">Sub Mata Ajar</td>
					  <td>Ubah / Hapus</td>
					</tr>
					</thead>
					<tbody id="tableMataAjar">
						
					</tbody>
					<tfoot>
					  <td colspan="3" align="right">Total Hari Diklat</td>
					  <td id="totalHari">&nbsp</td>
					  <td colspan="2" align="right">Total Jamlat</td>
					  <td id="totalJam">&nbsp</td>
					  <td>&nbsp</td>
					  
					  <td>&nbsp</td>
					  <td>&nbsp</td>
					</tfoot>
					</table>
				</div>
				</div>
            <div class="box-footer clearfix no-border">
              
            </div>
          </div>
		  </div>
		  </div>
		  
		  
		  <div id="formTambahKurikulumRinci" style="display:none;">
		<div class="col-xs-12">
			<div class="box box-primary">
            <div class="box-header">
              <i class="ion ion-clipboard"></i>

              <h3 class="box-title" id="titleMataAjar"></h3>

              <div class="box-tools pull-right">
				<button type="button" class="btn btn-primary btn-sm pull-right" data-widget="collapse" data-toggle="tooltip" title="Collapse" style="margin-right: 5px;">
                  <i class="fa fa-minus"></i></button>
              </div>
            </div>
            
            <div class="box-body">
				
				<div class="form-group">
				<label>Jenis Sesi Pertemuan</label>&nbsp&nbsp<i class="fa fa-star text-red"></i>
					<select class="form-control" id="selectJenisSesi" onchange="rubahJenisSesi(this.value);">
						
					</select>
				</div>
				
				
				<label>Nama Mata Ajar</label>&nbsp&nbsp<i class="fa fa-star text-red"></i>
				<div class="form-group input-group">
					<input class="form-control" type="text" name="mataAjarName" id="mataAjarName" readonly="true">
					<span class="input-group-btn"><button class="btn btn-primary"  type="button" data-toggle="modal" data-target="#myModal6"><i class="fa fa-search"></i></button></span>
                </div>
				
				<label>Total Jam Lat</label>&nbsp&nbsp<i class="fa fa-star text-red"></i>
				<div class="form-group">
					<input class="form-control" type="text" name="jamLat" id="jamLat" readonly="true" style="width:100px!important;">
                </div>
				
				<label>Jam Lat</label>&nbsp&nbsp<i class="fa fa-star text-red"></i>
				<div class="form-group">
					<input class="form-control" type="number" name="jam" placeholder="1" id="jam" min="1" value = "1" style="width: 100px;" step="0.1" onchange="ubahWaktu()"> 
                </div>
				
				<div class="form-group">
                    <label>Hari Ke</label>&nbsp&nbsp<i class="fa fa-star text-red"></i>
                    <input class="form-control" type="number" name="hariKe" placeholder="1" id="hariKe" min="1" value = "1" style="width: 100px;"> 
                </div>
				
				
				<div class="form-group">
                    <label>Jam Ke</label>&nbsp&nbsp<i class="fa fa-star text-red"></i>
                    <input class="form-control" type="number" name="jamKe" placeholder="1" id="jamKe" min="1" value = "1" style="width: 100px;"> 
                </div>
				
				<label>Sub Mata Ajar</label>
				<div class="form-group">
					<input class="form-control" type="text" name="subMataAjar" id="subMataAjar">
                </div>
				
				<div class="bootstrap-timepicker mulai-hari-biasa">
					<div class="form-group">
					  <label>Jam Mulai Hari Biasa : </label>&nbsp&nbsp<i class="fa fa-star text-red"></i>
					  <div class="input-group" style="width:200px!important;">
						<input type="text" class="form-control timepicker" id="jamMulaiBiasa">
						<div class="input-group-addon">
						  <i class="fa fa-clock-o"></i>
						</div>
					  </div>
					</div>
				</div>
				
				
				<div class="bootstrap-timepicker selesai-hari-biasa">
					<div class="form-group">
					  <label>Jam Selesai Hari Biasa : </label>&nbsp&nbsp<i class="fa fa-star text-red"></i>
					  <div class="input-group" style="width:200px!important;">
						<input type="text" class="form-control timepicker" id="jamSelesaiBiasa">
						<div class="input-group-addon">
						  <i class="fa fa-clock-o"></i>
						</div>
					  </div>
					</div>
				</div>
				
				<div class="bootstrap-timepicker mulai-hari-jumat">
					<div class="form-group">
					  <label>Jam Mulai Hari Jumat : </label>&nbsp&nbsp<i class="fa fa-star text-red"></i>
					  <div class="input-group" style="width:200px!important;">
						<input type="text" class="form-control timepicker" id="jamMulaiJumat">
						<div class="input-group-addon">
						  <i class="fa fa-clock-o"></i>
						</div>
					  </div>
					</div>
				</div>
				
				
				<div class="bootstrap-timepicker selesai-hari-jumat">
					<div class="form-group">
					  <label>Jam Selesai Hari Jumat : </label>&nbsp&nbsp<i class="fa fa-star text-red"></i>
					  <div class="input-group" style="width:200px!important;">
						<input type="text" class="form-control timepicker" id="jamSelesaiJumat">
						<div class="input-group-addon">
						  <i class="fa fa-clock-o"></i>
						</div>
					  </div>
					</div>
				</div>
				
            </div>
            
            <div class="box-footer clearfix no-border" id="footerMataAjar">
				
            </div>
          </div>
		  </div>
		  </div>
	  </div>
	  
    </section>
    
  </div>
  <script>
	
	
	$('#example7').dataTable({
      "paging": false,
      "lengthChange": false,
      "searching": true,
      "ordering": false,
      "info": false,
      "autoWidth": true
    });
	
	$('#example11').dataTable({
		"paging": false,
		"lengthChange": false,
		"searching": false,
		"ordering": false,
		"info": false,
		"autoWidth": true
	});
	
	$('#example10').dataTable({
      "paging":true,
      "lengthChange": false,
      "searching": true,
      "ordering": false,
      "info": true,
      "autoWidth": true
    });
	
	$('#example6').dataTable({
      "paging": true,
      "lengthChange": false,
      "searching": true,
      "ordering": false,
      "info": false,
      "autoWidth": true,
	  "preDrawCallback": function( settings ) 
	  {
        if(idKurikulumBefore != '')
		{
			if(document.getElementById(idKurikulumBefore) != null)
			{
				document.getElementById(idKurikulumBefore).style.backgroundColor = "#fff";
			}
		}
	  }
    });
	
	$('#example8').dataTable({
      "paging": true,
      "lengthChange": false,
      "searching": true,
      "ordering": false,
      "info": false,
      "autoWidth": true,
	  "preDrawCallback": function( settings ) 
	  {
        if(idMataAjarBefore != '')
		{
			if(document.getElementById(idMataAjarBefore) != null)
			{
				document.getElementById(idMataAjarBefore).style.backgroundColor = "#fff";
			}
		}
	  }
    });
	
	$(function () {
		$("#jamMulaiBiasa").timepicker({
		  showSeconds : true,
		  showMeridian : false,
		  defaultTime: jammulaibiasa,
		  minuteStep: 5,
		  secondStep: 1,
		  showInputs: true
		}).on('show.timepicker', function(e) {
			setTimeout(function() {
				$('.bootstrap-timepicker-hour').val(jammulaibiasa.substr(0, 2));
				$('.bootstrap-timepicker-minute').val(jammulaibiasa.substr(3, 2));
				$('.bootstrap-timepicker-second').val(jammulaibiasa.substr(6, 2));
				$('.bootstrap-timepicker-widget').removeClass('timepicker-orient-bottom');
				$('.bootstrap-timepicker-widget').addClass('timepicker-orient-top');
				var temp = $("#jamMulaiBiasa").offset().top + 25;
				$('.bootstrap-timepicker-widget').css({top: temp+'px'});
			}, 1);
		});
		
		$("#jamSelesaiBiasa").timepicker({
		  showSeconds : true,
		  showMeridian : false,
		  defaultTime: jamselesaibiasa,
		  minuteStep: 5,
		  secondStep: 1,
		  showInputs: true
		}).on('show.timepicker', function(e) {
			setTimeout(function() {
				$('.bootstrap-timepicker-hour').val(jamselesaibiasa.substr(0, 2));
				$('.bootstrap-timepicker-minute').val(jamselesaibiasa.substr(3, 2));
				$('.bootstrap-timepicker-second').val(jamselesaibiasa.substr(6, 2));
				$('.bootstrap-timepicker-widget').removeClass('timepicker-orient-bottom');
				$('.bootstrap-timepicker-widget').addClass('timepicker-orient-top');
				var temp = $("#jamSelesaiBiasa").offset().top + 25;
				$('.bootstrap-timepicker-widget').css({top: temp+'px'});
			}, 1);
		});
		
		$("#jamMulaiJumat").timepicker({
		  showSeconds : true,
		  showMeridian : false,
		  defaultTime: jammulaijumat,
		  minuteStep: 5,
		  secondStep: 1,
		  showInputs: true
		}).on('show.timepicker', function(e) {
			setTimeout(function() {
				$('.bootstrap-timepicker-hour').val(jammulaijumat.substr(0, 2));
				$('.bootstrap-timepicker-minute').val(jammulaijumat.substr(3, 2));
				$('.bootstrap-timepicker-second').val(jammulaijumat.substr(6, 2));
				$('.bootstrap-timepicker-widget').removeClass('timepicker-orient-bottom');
				$('.bootstrap-timepicker-widget').addClass('timepicker-orient-top');
				var temp = $("#jamMulaiJumat").offset().top + 25;
				$('.bootstrap-timepicker-widget').css({top: temp+'px'});
			}, 1);
		});
		
		$("#jamSelesaiJumat").timepicker({
		  showSeconds : true,
		  showMeridian : false,
		  defaultTime: jamselesaijumat,
		  minuteStep: 5,
		  secondStep: 1,
		  showInputs: true
		}).on('show.timepicker', function(e) {
			setTimeout(function() {
				$('.bootstrap-timepicker-hour').val(jamselesaijumat.substr(0, 2));
				$('.bootstrap-timepicker-minute').val(jamselesaijumat.substr(3, 2));
				$('.bootstrap-timepicker-second').val(jamselesaijumat.substr(6, 2));
				$('.bootstrap-timepicker-widget').removeClass('timepicker-orient-bottom');
				$('.bootstrap-timepicker-widget').addClass('timepicker-orient-top');
				var temp = $("#jamSelesaiJumat").offset().top + 25;
				$('.bootstrap-timepicker-widget').css({top: temp+'px'});
			}, 1);
		});
	});
	
	
  </script>