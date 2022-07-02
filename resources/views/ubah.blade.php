<!DOCTYPE html>
<html>
<head>
	<title>ubah</title>
</head>
<body>
		@extends('layouts.app')
	<form method="post" action="/holdup">
		@foreach($sql as $d)
		{{ csrf_field() }}
		<table>	
			<tr>
				<td>nis :</td>
				<td><input type="text" name="nis" value="{{ $d->nis }}"></td>
			</tr>
			<tr>
				<td>nama : </td>
				<td><input type="text" name="nama" value="{{$d->nama}}"></td>
			</tr>
			<tr>
				<td>rombel : </td>
				<td><input type="text" name="rombel" value="{{$d->rombel}}"></td>
			</tr>
			<tr>
				<td>rayon : </td>
				<td><input type="text" name="rayon" value="{{$d->rayon}}"></td>
			</tr>
			<tr>
				<td><input type="submit" name="update" value="update"></td>
			</tr>
		</table>
		@endforeach
	</form>
</body>
</html>