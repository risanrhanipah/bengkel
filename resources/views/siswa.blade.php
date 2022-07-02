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

	<a href="/home"><input type="button" value="dashboard"></a><br>
	<h1>SISWA</h1>
	<table border="ridge">
		<tr>
			<th>nis</th>
			<th>nama</th>
			<th>rombel</th>
			<th>rayon</th>
			<th colspan="2">action</th>
		</tr>
	@foreach($sql as $data)
		<tr>
			<td>{{$data->nis}}</td>
			<td>{{$data->nama}}</td>
			<td>{{$data->rombel}}</td>
			<td>{{$data->rayon}}</td>
			<td><a href="/ubah/{{$data->nis}}"><input style="border : none;" type="button" name="edit" id="edit" value="edit"></a></td>
			<td><a href="/delete/{{$data->nis}}"><input style="border : none;" type="button" name="edit" id="hapus" value="hapus"></a></td>
		</tr>
	@endforeach
	</table>
	<br>
	
		<legend>tambah</legend>
	<form method="post" action="siswa/simpan">
		{{csrf_field()}}
	<table style="">
		<tr>
			<td>nis : </td>
			<td><input type="text" name="nis" required="required"></td>
		</tr>
		<tr>
			<td>nama : </td>
			<td><input type="text" name="nama" required="required"></td>
		</tr>
		<tr>
			<td>rombel : </td>
			<td><input type="text" name="rombel" required="required"></td>
		</tr>
		<tr>
			<td>rayon : </td>
			<td><input type="text" name="rayon" required="required"></td>
		</tr>
		<tr>
			<td></td>
			<td><input type="submit" name="simpan" value="simpan"></td>
		</tr>
	</table>
	</form>
</body>
</html>