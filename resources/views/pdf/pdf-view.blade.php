<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Print</title>
    <meta http-equiv="Content-Type" content="text/html; charset=utf-8"/>
	<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/css/bootstrap.min.css">
    
	<style>
	table{
		border-collapse: collapse;
		}
	.{
		font-size:11;
	}
	</style>
	
</head>
<body>
 
	<center>
 
		<h3>LAPORAN KINERJA HARIAN</h3>
		<h4>Sasaran Kinerja Pegawai {{$tahun}}</h4>
		<h4>Bulan : {{$bulan}}</h4>
 
	</center>
 
	<table  style="width: 100%" align="center">
	
		<tr align="center" style="border:1px solid #000000">
			<th width="2%" align="center" style="border:1px solid #000000"> No</th>
			<th width="48%" align="center" style="border:1px solid #000000"> Pejabat Penilai</th>
			<th width="2%" align="center" style="border:1px solid #000000"> No</th>
			<th width="48%" align="center" style="border:1px solid #000000"> Pegawai Non PNS yang Dinilai</th>
		</tr>
	</table>
	<table  style="width: 100%" align="center">

		@php
		$no = 1;
		@endphp
		@foreach($karyawan as $k)

		<tr style="border:1px solid #000000">
			<td width="3%" align="center" style="border:1px solid #000000">1</td>
			<td width="20%" style="border:1px solid #000000"> Nama </td>
			<td width="28%" style="border:1px solid #000000"> Khanifudin Malik, S. Si., M. A.</td>
			<td width="3%" align="center" style="border:1px solid #000000">1</td>
			<td width="20%" style="border:1px solid #000000"> Nama </td>
			<td width="26%" style="border:1px solid #000000"> {{ $k->name }}</td>
		</tr>
		
		<tr style="border:1px solid #000000">
			<td width="3%" align="center" style="border:1px solid #000000">2</td>
			<td width="20%" style="border:1px solid #000000"> NIP </td>
			<td width="28%" style="border:1px solid #000000"> 198101212009121001</td>
			<td width="3%" align="center" style="border:1px solid #000000">2</td>
			<td width="20%" style="border:1px solid #000000"> NIP </td>
			<td width="26%" style="border:1px solid #000000"> -</td>
		</tr>
		
		<tr style="border:1px solid #000000">
			<td width="3%" align="center" style="border:1px solid #000000">3</td>
			<td width="20%" style="border:1px solid #000000"> Pangkat/Gol. Ruang </td>
			<td width="28%" style="border:1px solid #000000"> IV/a</td>
			<td width="3%" align="center" style="border:1px solid #000000">3</td>
			<td width="20%" style="border:1px solid #000000"> Pangkat/Gol. Ruang </td>
			<td width="26%" style="border:1px solid #000000"> -</td>
		</tr>
		
		<tr style="border:1px solid #000000">
			<td width="3%" align="center" style="border:1px solid #000000">4</td>
			<td width="20%" style="border:1px solid #000000"> Jabatan </td>
			<td width="28%" style="border:1px solid #000000"> Kasubag Tata Usaha</td>
			<td width="3%" align="center" style="border:1px solid #000000">4</td>
			<td width="20%" style="border:1px solid #000000"> Jabatan </td>
			<td width="26%" style="border:1px solid #000000"> {{ $k->position }}</td>
		</tr>
		
		<tr>
			<td width="3%" align="center" style="border:1px solid #000000">5</td>
			<td width="20%" style="border:1px solid #000000"> Unit Kerja </td>
			<td width="28%" style="border:1px solid #000000"> Balai Konservasi Borobudur</td>
			<td width="3%" align="center" style="border:1px solid #000000">5</td>
			<td width="20%" style="border:1px solid #000000"> Unit Kerja </td>
			<td width="26%" style="border:1px solid #000000"> {{ $k->unit }}</td>
		</tr>
		@endforeach
	</table><br><br>
	
	<table  style="width: 100%" align="center" >
		<tr style="border:1px solid #000000">
			<th  align="center" style="border:1px solid #000000"> No</th>
			<th  align="center" style="border:1px solid #000000"> Tanggal</th>
			<th  align="center" style="border:1px solid #000000"> Uraian Kegiatan</th>
			<th  align="center" style="border:1px solid #000000"> Jumlah</th>
			<th  align="center" style="border:1px solid #000000"> Jenis</th>
		</tr>

		@php
		$no = 1;
		@endphp
		@foreach($logharian as $lh)

		<tr style="border:1px solid #000000">
			<td align="center" style="border:1px solid #000000">{{ $no++ }}</td>
			<td style="border:1px solid #000000"> {{ $lh->date }}</td>
			<td style="border:1px solid #000000"> {!! nl2br ($lh->uraian) !!}</td>
			<td align="center" style="border:1px solid #000000">{{ $lh->jumlah }}</td>
			<td style="border:1px solid #000000">{{ $lh->jenis }}</td>
		</tr>
		@endforeach
	</table><br><br>
	
	
			
			<table style="width: 100%" align="center" style="border:0px">
				<tr>
					<td> Pejabat Penilai,</td>
					<td>&nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; Borobudur, {{$tanggal}} </td>
				</tr>

				<tr>
					<td> Kasubag Tata Usaha </td>
					<td> </td>
				</tr>

				<tr>
					<td> <br> </td>
					<td> <br> </td>
				</tr>
				<tr>
					<td> <br> </td>
					<td> <br> </td>
				</tr>
				<tr>
					<td> <br> </td>
					<td> <br> </td>
				</tr>
				<tr>
					<td> <br> </td>
					<td> <br> </td>
				</tr>
				

				@foreach($karyawan as $k)
				<tr>
					<td><u>Khanifudin Malik, S. Si., M. A.</u></td>
					
					<td>&nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; {{$k->name}}</td>
					
				</tr>
				@endforeach

				<tr>
				<td>NIP 198101212009121001</td>
				<td> </td>
				</tr>
			</table>
			
			
			<!-- <div class="col-md-6">
				<br>
				<p>Borobudur, Date() <br>
				<br><br><br><br>
				@foreach($karyawan as $k)
				{{$k->name}}
				@endforeach
				</p>
			</div> -->
		
 
</body>
</html>
