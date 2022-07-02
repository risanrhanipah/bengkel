<!DOCTYPE html>
<html>
<head>
	<title></title>
</head>
<body>
	
	@extends('layouts.app')
	<a href="/home"><input type="button" name="" value="KEMBALI"></a>
	<table border="1">
		<tr>
			<th>Distributor id</th>
			<th>Distributor</th>
			<th>action</th>
		</tr>

			@foreach($sql as $s)
		<tr>
			<td>{{$s->distributorID}}</td>
			<td>{{$s->distributor}}</td>
			<td><a href="distributor/hapus/{{ $s->distributorID }}"><input type="button" name="hapus" value="hapus"></a></td>
		</tr>
			@endforeach
	</table>
	<form action="/distributor/tambah" method="post">
	<table>
		{{ csrf_field() }}
		<tr>
			<td>distributor ID : </td>
			<td><input type="text" name="distributorID"></td>
		</tr>
		<tr>
			<td>distributor : </td>
			<td><input type="text" name="distributor"></td>
		</tr>
		<tr>
			<td><input type="submit" name="enter"></td>
		</tr>
	</table>
</body>
</html>