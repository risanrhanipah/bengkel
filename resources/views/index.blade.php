<!DOCTYPE html>
<html>
<head>
	<title></title>
</head>
<style type="text/css">
	#hapus:hover{
		background-color: red;
	}	
	#edit:hover{
		background-color: blue;
	}
</style>
<body>
	@extends('layouts.app')
	<a href="/home"><input type="button" value="dashboard"></a> <br>
	<h1>BARANG</h1>
	<table border="2	">
		<tr>
			<th>barang id</th>
			<th>nama</th>
			<th>distributorid</th>
			<th>keterangan</th>
			<th colspan="2">action</th>
		</tr>
	@foreach($sql as $data)
		<tr>
			<td>{{ $data->barangID }}</td>
			<td>{{ $data->nama }}</td>	
			<td>{{ $data->distributorID }}</td>
			<td>{{ $data->keterangan }}</td>
			<td><a href="/edit/{{ $data->barangID }}"><input style="border : none;" type="button" name="edit" value="edit" id="edit"></a></td>
			<td><a href="/hapus/{{ $data->barangID }}"><input style="border : none;" type="button" name="hapus" id="hapus" value="hapus"></a></td>
		</tr>
	@endforeach
	</table>
	<br>
	<form method="post" action="/tambah">
		{{ csrf_field() }}
		<table>
			<tr>
		<td> barang id :</td><td> <input type="text" name="barangid" required="required"> </td>
			</tr>
			<tr>
		<td>nama : </td><td> <input type="text" name="nama" required="required"> </td>
			</tr>
			<tr>
		<td>distributor :</td><td> <select name="distributor" required="required">
			<option value="">--apa hayo--</option>
			@foreach($sq as $s)
				<option value="{{ $s->distributorID }}">{{ $s->distributor }}</option>
			@endforeach			
		</select> </td>
			</tr>
			<tr>
		<td>keterangan  : </td><td> <input type="text" name="keterangan" required="required"> </td>
			</tr>
			<tr>
				<td></td>
		<td><input type="submit" name="enter" value="kirim"></td>
			</tr>	 
	</table>
	</form>
	

</body>
</html>