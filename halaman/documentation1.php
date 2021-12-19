<div class="row">
	<div class="col-lg-12">
		<div class="card"><div class="card-body">
			<h4 class="mt-0 mb-3 header-title"><i class="mdi mdi-book fa-fw"></i> Dokumentasi API</h4>
			<div class="table-responsive">
				<table class="table table-bordered">
					<tr>
						<th width="50%">METODE HTTP</th>
						<td>POST</td>
					</tr>
					<tr>
						<th>API URL</th>
						<td><?= base_url('api/') ?></td>
					</tr>
					<tr>
						<th>API ID</th>
						<td><?= user() ?></td>
					</tr>
					<tr>
						<th>API KEY</th>
						<td>
							<div class="input-group">
								<span class="form-control"><?= user('api_key') ?></span>
								<div class="input-group-append">
									<a href="<?= base_url('api/regenerate') ?>" class="btn btn-primary">Buat Ulang</a>
								</div>
							</div>
						</td>
					</tr>
					<tr>
						<th>FORMAT RESPON</th>
						
						<td>JSON</td>
					</tr>
					<tr>
						<th>CONTOH <i>CLASS</i></th>
						<td><a href="<?= base_url('api.example.txt') ?>" target="_new" class="btn btn-sm btn-custom">PHP</a></td>
					</tr>
				</table>
			</div>
			<ul class="nav nav-tabs">
				<li class="nav-item">
					<a href="#profile" data-toggle="tab" aria-expanded="true" class="nav-link active">
						<i class="fa fa-user fa-fw"></i> Profil
					</a>
				</li>
				<li class="nav-item">
					<a href="#service" data-toggle="tab" aria-expanded="false" class="nav-link">
						<i class="fa fa-tags fa-fw"></i> Layanan
					</a>
				</li>
				<li class="nav-item">
					<a href="#order" data-toggle="tab" aria-expanded="false" class="nav-link">
						<i class="fa fa-shopping-cart fa-fw"></i> Pemesanan
					</a>
				</li>
				<li class="nav-item">
					<a href="#status" data-toggle="tab" aria-expanded="false" class="nav-link">
						<i class="fa fa-search fa-fw"></i> Status Pesanan
					</a>
				</li>
			</ul>
			<div class="tab-content">
				<div class="tab-pane show active" id="profile">
					<b>URL Permintaan</b>
					<div class="alert alert-secondary" style="margin: 10px 0; color: #000;">
						<?= base_url('api/profile') ?>
					</div>
					<b>Parameter</b>
					<div class="table-responsive">
						<table class="table table-bordered">
							<tr>
								<th>Parameter</th>
								<th>Deskripsi</th>
							</tr>
							<tr>
								<td>api_id</td>
								<td>API ID Anda.</td>
							</tr>
							<tr>
								<td>api_key</td>
								<td>API KEY Anda.</td>
							</tr>
						</table>
					</div>
					<b>Contoh Respon</b>
					<div class="alert alert-secondary" style="margin: 10px 0; color: #000;">
						<b>Sukses</b>
						<pre>
							{
								"status": true,
								"data": {
								"username": "smm",
								"full_name": "SMM PANEL",
								"balance": 100900
							}
						}
					</pre>
					<b>Gagal</b>
					<pre>
						{
							"status": false,
							"data": "API Key salah"
						}
					</pre>
				</div>
			</div>
			<div class="tab-pane" id="service">
				<b>URL Permintaan</b>
				<div class="alert alert-secondary" style="margin: 10px 0; color: #000;">
					<?= base_url('api/services') ?>
				</div>
				<b>Parameter</b>
				<div class="table-responsive">
					<table class="table table-bordered">
						<tr>
							<th>Parameter</th>
							<th>Deskripsi</th>
						</tr>
						<tr>
							<td>api_id</td>
							<td>API ID Anda.</td>
						</tr>
						<tr>
							<td>api_key</td>
							<td>API KEY Anda.</td>
						</tr>
					</table>
				</div>
				<b>Contoh Respon</b>
				<div class="alert alert-secondary" style="margin: 10px 0; color: #000;">
					<b>Sukses</b>
					<pre>
						{
							"status": true,
							"data": [
							{
								"id": "1",
								"category": "Instagram Followers",
								"name": "Instagram Followers S1",
								"price": "10000",
								"min": "100",
								"max": "10000",
								"description": "Super Fast, Input Username"
							},
							{
								"id": "2",
								"category": "Instagram Likes",
								"name": "Instagram Likes S1",
								"price": "5000",
								"min": "100",
								"max": "10000",
								"description": "Super Fast, Input Post Url"
							},
							]
						}
					</pre>
					<b>Gagal</b>
					<pre>
						{
							"status": false,
							"data": "API Key salah"
						}
					</pre>
				</div>
			</div>
			<div class="tab-pane" id="order">
				<b>URL Permintaan</b>
				<div class="alert alert-secondary" style="margin: 10px 0; color: #000;">
					<?= base_url('api/order') ?>
				</div>
				<b>Parameter</b>
				<div class="table-responsive">
					<table class="table table-bordered">
						<tr>
							<th>Parameter</th>
							<th>Deskripsi</th>
						</tr>
						<tr>
							<td>api_id</td>
							<td>API ID Anda.</td>
						</tr>
						<tr>
							<td>api_key</td>
							<td>API KEY Anda.</td>
						</tr>
						<tr>
							<td>service</td>
							<td>ID Layanan, lihat di <a href="<?= base_url('page/price_list') ?>">Daftar Layanan</a>.</td>
						</tr>
						<tr>
							<td>target</td>
							<td>Target pesanan sesuai kebutuhan (username/url/id).</td>
						</tr>
						<tr>
							<td>quantity</td>
							<td>Jumlah pesan.</td>
						</tr>
						<tr>
							<td>custom_comments</td>
							<td>Komentar, kosongkan jika tidak diperlukan.</td>
						</tr>
						<tr>
							<td>custom_link</td>
							<td>Link, kosongkan jika tidak diperlukan.</td>
						</tr>
					</table>
				</div>
				<!-- batas -->
				<b>Contoh Respon</b>
				<div class="alert alert-secondary" style="margin: 10px 0; color: #000;">
					<b>Sukses</b>
					<pre>
						{
							"status": true,
							"data": {
							"id": 1107,
							"price": 10900
						}
					}
				</pre>
				<b>Gagal</b>
				<pre>
					{
						"status": false,
						"data": "API Key salah"
					}
				</pre>
			</div>
		</div>
		<div class="tab-pane" id="status">
			<b>URL Permintaan</b>
			<div class="alert alert-secondary" style="margin: 10px 0; color: #000;">
				<?= base_url('api/status') ?>
			</div>
			<b>Parameter</b>
			<div class="table-responsive">
				<table class="table table-bordered">
					<tr>
						<th>Parameter</th>
						<th>Deskripsi</th>
					</tr>
					<tr>
						<td>api_id</td>
						<td>API ID Anda.</td>
					</tr>
					<tr>
						<td>api_key</td>
						<td>API KEY Anda.</td>
					</tr>
					<tr>
						<td>id</td>
						<td>ID Pesanan.</td>
					</tr>
				</table>
			</div>
			<b>Status</b>
			<div class="table-responsive">
				<table class="table table-bordered">
					<tr>
						<th>Status</th>
						<th>Deskripsi</th>
					</tr>
					<tr>
						<td>Pending</td>
						<td>Pesanan dalam antrian.</td>
					</tr>
					<tr>
						<td>Processing</td>
						<td>Pesanan sedang diproses.</td>
					</tr>
					<tr>
						<td>Partial</td>
						<td>Pesanan selesai diproses tetapi tidak sesuai jumlah pesan.</td>
					</tr>
					<tr>
						<td>Error</td>
						<td>Pesanan gagal diproses.</td>
					</tr>
					<tr>
						<td>Success</td>
						<td>Pesanan selesai dan berhasil.</td>
					</tr>
				</table>
			</div>
			<b>Contoh Respon</b>
			<div class="alert alert-info" style="color: #000;">
				<b>Sukses</b>
				<pre>
					{
						"status": true,
						"data": {
						"status": "Success",
						"start_count": 10900,
						"remains": 0
					}
				}
			</pre>
			<b>Gagal</b>
			<pre>
				{
					"status": false,
					"data": "API Key salah"
				}
			</pre>
		</div>
	</div>
</div>
</div></div>
</div>
</div>