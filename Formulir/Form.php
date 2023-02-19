<?php
	function hasil(){
		$nopes = $_POST['nopes'];
		$namleng = $_POST['namleng'];
		$asalsklh = $_POST['asalsklh'];
		$jnsklmn = $_POST['jnsklmn'];
		$tmpttglhr = $_POST['tmpttglhr'];
		$almtrmh = $_POST['almtrmh'];
		$rtrw = $_POST['rtrw'];
		$rtrw2 = $_POST['rtrw2'];
		$klrhn = $_POST['klrhn'];
		$kcmtn = $_POST['kcmtn'];
		$kota = $_POST['kota'];
		$prov = $_POST['prov'];
		$nohp = $_POST['nohp'];
		error_reporting();

		//output + pemanggilan array
		foreach ($nopes as $key => $val){
			?>
			<center>
			<table border="0" width="500" cellpadding="1" cellspacing="1">
				<tr>
					<td><?php echo '&nbsp Nomor Peserta';?></td>
					<td><?php echo '&nbsp : ';?></td>
					<td><?php echo '&nbsp'.$nopes[$key];?></td>
				</tr>
				<tr>
					<td><?php echo '&nbsp Nama Lengkap';?></td>
					<td><?php echo '&nbsp : ';?></td>
					<td><?php echo '&nbsp'.$namleng[$key];?></td>
				</tr>
				<tr>
					<td><?php echo '&nbsp Asal Sekolah';?></td>
					<td><?php echo '&nbsp : ';?></td>
					<td><?php echo '&nbsp'.$asalsklh;?></td>
				</tr>
				<tr>
					<td><?php echo '&nbsp Jenis Kelamin';?></td>
					<td><?php echo '&nbsp : ';?></td>
					<td><?php echo '&nbsp'.$jnsklmn;?></td>
				</tr>
				<tr>
					<td><?php echo '&nbsp Tempat Tanggal Lahir';?></td>
					<td><?php echo '&nbsp : ';?></td>
					<td><?php echo '&nbsp'.$tmpttglhr;?></td>
				</tr>
				<tr>
					<td><?php echo '&nbsp Alamat Rumah';?></td>
					<td><?php echo '&nbsp : ';?></td>
					<td><?php echo '&nbsp'.$almtrmh;?></td>
				</tr>
				<tr>
					<td><?php echo '&nbsp RT/RW';?></td>
					<td><?php echo '&nbsp : ';?></td>
					<td><?php echo '&nbsp'.$rtrw, '/' .$rtrw2 ?></td>
				</tr>
				<tr>
					<td><?php echo '&nbsp Kelurahan';?></td>
					<td><?php echo '&nbsp : ';?></td>
					<td><?php echo '&nbsp'.$klrhn;?></td>
				</tr>
				<tr>
					<td><?php echo '&nbsp Kecamatan';?></td>
					<td><?php echo '&nbsp : ';?></td>
					<td><?php echo '&nbsp'.$kcmtn;?></td>
				</tr>
				<tr>
					<td><?php echo '&nbsp Kota';?></td>
					<td><?php echo '&nbsp : ';?></td>
					<td><?php echo '&nbsp'.$kota;?></td>
				</tr>
				<tr>
					<td><?php echo '&nbsp Provinsi';?></td>
					<td><?php echo '&nbsp : ';?></td>
					<td><?php echo '&nbsp'.$prov;?></td>
				</tr>
				<tr>
					<td><?php echo '&nbsp Nomor Hp';?></td>
					<td><?php echo '&nbsp : ';?></td>
					<td><?php echo '&nbsp'.$nohp;?></td>
				</tr>
			</table>
			</center>
		<?php } ?>
	<?php } ?>

<!-- tampilan awal -->

	<html>
		<center>
	<form method="POST" name="frmpost" action="">
		<table width="600" border="1" cellspacing="0" cellpadding="0">
			<tr>
				<th><h2>Formulir Pendaftaran</h2></th>
			</tr>
			<tr>
				<td>
					<table width="800" border="0" cellpadding="6" cellspacing="6">
						<tr height="40">
							<td width="200" valign="center">Nomor Peserta</td>
							<td width="10" valign="center"> : </td>
							<td><input type="text" name="nopes[]" size="30"></td>
						</tr>
						<tr>
							<td width="200" valign="center">Nama Lengkap</td>
							<td width="10" valign="center"> : </td>
							<td><input type="text" name="namleng[]" size="30"></td>
						</tr>
						<tr>
							<td width="200" valign="center">Asal Sekolah</td>
							<td width="10" valign="center"> : </td>
							<td><input type="text" name="asalsklh" size="30"></td>
						</tr>
						<tr>
							<td width="200" valign="center">Jenis Kelamin</td>
							<td width="10" valign="center"> : </td>
							<td>
								<select name="jnsklmn">
									<option hidden>-</option>
									<option>Laki-Laki</option>
									<option>Perempuan</option>
								</select>
							</td>
						</tr>
						<tr>
							<td width="200" valign="center">Tempat/Tanggal Lahir</td>
							<td width="10" valign="center"> : </td>
							<td><input type="text" name="tmpttglhr" size="20"> / <input type="date" name="tmpttglhr"></td>
						</tr>
						<tr>
							<td width="200" valign="center">Alamat Rumah</td>
							<td width="10" valign="center"> : </td>
							<td><input type="text" name="almtrmh" size="50"></td>
						</tr>
						<tr>
							<td width="200" valign="center">RT/RW</td>
							<td width="10" valign="center"> : </td>
							<td><input type="text" name="rtrw" size="1"> / <input type="text" name="rtrw2" size="1"></td>
						</tr>
						<tr>
							<td width="200" valign="center">Kelurahan</td>
							<td width="10" valign="center"> : </td>
							<td><input type="text" name="klrhn" size="20"></td>
						</tr>
						<tr>
						<td width="200" valign="center">Kecamatan</td>
						<td width="10" valign="center"> : </td>
						<td><input type="text" name="kcmtn" size="20"></td>
						</tr>
						<tr>
							<td width="200" valign="center">Kota</td>
							<td width="10" valign="center"> : </td>
							<td><input type="text" name="kota" size="20"></td>
						</tr>
						<tr>
							<td width="200" valign="center">Provinsi</td>
							<td width="10" valign="center"> : </td>
							<td><input type="text" name="prov" size="20"></td>
						</tr>
						<tr>
							<td width="200" valign="center">Nomor HP</td>
							<td width="10" valign="center"> : </td>
							<td><input type="text" name="nohp" size="20"></td>
						</tr>
						<tr>
							<td align="right" colspan="2"><input type="submit" name="btnOk" value="Simpan" /></td>
							<td><input type="reset" name="btnCancel" value="Cancel" /></td>
						</tr>
					</table>
				</td>
			</tr>
		</table>

		<br>
		<br>
		<br>

		<tr>
			<td>
				<?php
				hasil();
				?>
			</td>
		</tr>
		</center>
	</form>
	</html>