 <!DOCTYPE html>
<html>
<head>
	<title></title>
</head>
<body>
	@extends('layouts.app')
	<form method="post" action="/update">
		@foreach($sql as $s)
			{{ csrf_field() }}
			<table>
				<tr>
					<td>
						barang ID : 
					</td>
					<td>
						<input type="text" name="id" value="{{ $s->barangID }}" readonly="">
					</td>
				</tr>
			<tr>
				<td>
					nama :
				</td>
			<td><input type="text" name="nama" required="" value="{{$s->nama}}"> </td>
			</tr>
			<tr>	
				<td>
					distributor : 
				</td>
				<td> 
					<select name="distributorID">
						<option value="{{ $s->distributorID }}">{{ $s->distributor }}</option>
					</select>
			</tr>
			<tr>
				<td>
					keterangan : 
				</td>
			<td><input type="text" name="keterangan" required="" value="{{$s->keterangan}}"></td>
			</tr>
			<tr>
				<td></td>
			<td><input type="submit" name="enter" value="kirim"></td>
			</tr>
		</table>
		@endforeach
	</form>
</body>
</html>