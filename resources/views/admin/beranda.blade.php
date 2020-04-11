@extends('Layout.dasboard')

@section('content')
<div class="main-content">
				<div class="container-fluid">
					<!-- OVERVIEW -->
					<div class="panel panel-headline">
						<div class="panel-heading">
							<h3 class="panel-title">Dasboard</h3>
							<p class="panel-subtitle">APRIL 2020</p>
						</div>
						<div class="panel-body">
						<div class="row">
						<div class="col-md-6">
							<!-- RECENT PURCHASES -->
							<div class="panel">
								<div class="panel-heading">
									<h3 class="panel-title">BIODATA</h3>
								</div>
								<div class="panel-body">
                                    <p>Nama : NI KOMANG MEGAWATI</p>
                                    <P>NIM : 1815051006</P>
                                    <P>Prodi : Pendidikan Teknik Informatika</P>
                                </div>
								
							</div>
							<!-- END RECENT PURCHASES -->
						</div>
						<div class="col-md-6">
							<!-- MULTI CHARTS -->
							<div class="panel">
								<div class="panel-heading">
									<h3 class="panel-title">Studi Kasus</h3>
								</div>
								<div class="panel-body">
                                    <p>Judul : Sistem Pelayanan Apotek Laksamana</p>
                                    <p>Penjelasan : Sistem apotek ini mempermudah karyawan untuk mengecek stok obat dan memudahkan pembeli dalam pembelian obat</p>
								
								</div>
							</div>
							<!-- END MULTI CHARTS -->
						</div>
						<div class="col-lg-12">
                            <button type="button", >
                                <a href="{{route('obat.create')}}">Tambah Data Obat</a>
                            </button>
						<table class="table table-bordered">
							<thead>
								<tr>
									<th>no</th>
									<th>Nama Obat</th>
									<th>Jenis Obat</th>
									<th>Harga</th>
									<th>stock</th>
									<th>kadaluarsa</th>
								</tr>
							</thead>
							<tbody>
								@foreach ($obat as $in => $val)
									<tr>
										<td>{{($in+1)}}</td>
										<td>{{$val->namaObat}}</td>
										<td>{{$val->jenisObat}}</td>
										<td>{{$val->harga}}</td>
										<td>{{$val->stock}}</td>
										<td>{{$val->kadaluarsa}}</td>
                                        <td>
                                            <button>
                                                <a href="{{route('obat.edit',$val->Id_Obat)}}">Update</a>
                                            </button>
                                            <form action="{{route('obat.destroy',$val->Id_Obat)}}" method="POST">
                                                @csrf
                                            @method('DELETE')
                                            <button type="submit">Delete</button>
                                            </form>
                                        </td>
									</tr>
								@endforeach
							</tbody>
						</table>
						{{$obat->links()}}
					</div>
					</div>
						</div>
					</div>
					<!-- END OVERVIEW -->
					
				</div>
					
				</div>
			</div>
@endsection('content')