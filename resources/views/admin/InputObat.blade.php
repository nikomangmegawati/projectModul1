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

                            <form action="{{(isset($obat))?route('obat.update',$obat->Id_Obat):route('obat.store')}}" method="POST">
                            @csrf
                            @if(isset($obat))?@method('PUT')
                            @endif
                        <div class="col-md-12">
                        <div class="form-group">
                            <label class="control-label col-lg-2">Nama Obat</label>
                            <div class="col-lg-10">
                            <input type="text" value="{{(isset($obat))?$obat->namaObat:old('namaObat')}}" name="namaObat" class="form-control">
                        @error('namaObat')<small style="color:red">{{$message}}</small>@enderror
                        </div>
                        </div>
                        <div class="form-group">
                            <label class="control-label col-lg-2">Jenis Obat</label>
                            <div class="col-lg-10">
                            <input type="text" value="{{(isset($obat))?$obat->jenisObat:old('jenisObat')}}" name="jenisObat" class="form-control">
                        @error('jenisObat')<small style="color:red">{{$message}}</small>@enderror
                        </div>
                        </div>
                        <div class="form-group">
                            <label class="control-label col-lg-2">Harga</label>
                            <div class="col-lg-10">
                            <input type="text" value="{{(isset($obat))?$obat->harga:old('harga')}}" name="harga" class="form-control">
                        @error('harga')<small style="color:red">{{$message}}</small>@enderror
                        </div>
                        </div>
                        <div class="form-group">
                             <label class="control-label col-lg-2">stock</label>
                             <div class="col-lg-10">
                            <input type="text" value="{{(isset($obat))?$obat->stock:old('stock')}}" name="stock" class="form-control">
                        @error('stock')<small style="color:red">{{$message}}</small>@enderror
                        </div>
                        </div>
                        <div class="form-group">
                             <label class="control-label col-lg-2">kadaluarsa</label>
                             <div class="col-lg-10">
                            <input type="text" value="{{(isset($obat))?$obat->kadaluarsa:old('kadaluarsa')}}" name="kadaluarsa" class="form-control">
                        @error('kadaluarsa')<small style="color:red">{{$message}}</small>@enderror
                        </div>
                        </div>
                    <div class="form-group">
                      <button type="submit">SIMPAN</button>
                    </div>
                    </div>  
                  </form>
                        </div>
                        
              </div>
                        </div>
						</div>
					</div>
						</div>
					</div>
					<!-- END OVERVIEW -->
					
					
					
				</div>
			</div>
@endsection('content')