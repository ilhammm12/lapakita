<?php include('header.php') ?>
	<section id="main-section">	
		<div class="columns is-multiline is-centered is-desktop is-tablet is-mobile search-umkm">
			<div class="column is-6-desktop is-7-tablet is-8-mobile is-10-mobile-xs">
				<div class="field has-addons">
				  	<div class="control" style="width: 100%;">
				    	<input class="input is-medium" type="text" placeholder="Cari Produk atau jasa">
				  	</div>
				  	<div class="control">
				    	<a class="button is-medium is-primary">
				      		<span class="icon is-light">
				      			<i class="fas fa-search"></i>
				      		</span>
				    	</a>
				  	</div>
				</div>
			</div>
		</div>
		<div class="filter-umkm my-5">
			<div class="columns is-multiline is-desktop is-tablet is-mobile is-centered">
				<div class="column is-10-mobile-xs is-5-mobile is-4-desktop">
					<div class="field-body">
	      				<div class="field">
							<!-- <label>Provinsi</label> -->
						  	<div class="control">
						    	<div class="select is-fullwidth">
							      	<select>
								    	<option>Terbaru</option>
								    	<option>Terpopuler</option>
								    	<option>Harta Terendah</option>
								    	<option>Harta Tertinggi</option>
							      	</select>
						    	</div>
						  	</div>
						</div>
						<div class="field">
							<!-- <label>Kota</label> -->
						  	<div class="control">
						    	<div class="select is-fullwidth">
							      	<select>
								    	<option>Kategori</option>
								    	<option>Makanan</option>
								    	<option>Minuman</option>
								    	<option>Pakaian</option>
								    	<option>Kecantikan</option>
								    	<option>Jasa Desain</option>
							      	</select>
						    	</div>
						  	</div>
						</div>
      				</div>
				</div>
				<div class="column is-10-mobile-xs is-5-mobile is-offset-3-desktop is-5-desktop" style="display: flex; align-items: center; justify-content: flex-end;">
					<div class="dropdown is-right is-fullwidth-mobile">
					  	<div class="dropdown-trigger is-fullwidth-mobile">
					    	<button class="button is-fullwidth-mobile is-primary" aria-haspopup="true" aria-controls="dropdown-menu6">
						      	<span class="icon is-small">
						        	<i class="fas fa-map-marker-alt" aria-hidden="true"></i>
						      	</span>
						      	<span>Lokasi Lapak</span>
					    	</button>
					  	</div>
					  	<div class="dropdown-menu"  style="min-width: 27rem!important;" id="dropdown-menu6" role="menu">
					    	<div class="dropdown-content">
					      		<div class="dropdown-item">
					      			<p class="is-size-6">
					        			Temukan Lokasi UMKM di daerahmu
					      			</p>
					      		</div>
					      		<div class="dropdown-item">
					      			<form action="">
					      				<div class="field-body">
						      				<div class="field">
												<label>Provinsi</label>
											  	<div class="control">
											    	<div class="select is-fullwidth">
												      	<select name="country">
													        <option>Pilih Provinsi</option>
													        <option>Kalimantan timur</option>
													        <option>Kalimantan Barat</option>
												      	</select>
											    	</div>
											  	</div>
											</div>
											<div class="field">
												<label>Kota</label>
											  	<div class="control">
											    	<div class="select is-fullwidth">
												      	<select name="country">
													        <option>Pilih Kota</option>
													        <option>Samarinda</option>
													        <option>Balikpapan</option>
												      	</select>
											    	</div>
											  	</div>
											</div>
											<div class="field">
												<label style="visibility: hidden;">tes</label>
												<div class="control">
													<button class="button is-primary" type="submit">Cari</button>
												</div>
											</div>
					      				</div>
					      			</form>
					      		</div>
					    	</div>
					  	</div>
					</div>
					<p class="is-inline-block mx-3 has-text-grey is-hidden-mobile">1 dari 10 halaman</p>
					<a href="#" class="button is-hidden-mobile">
						<span class="icon has-text-grey">
							<i class="fas fa-chevron-left"></i>
						</span>
					</a>
					<a href="#" class="button is-hidden-mobile">
						<span class="icon has-text-grey">
							<i class="fas fa-chevron-right"></i>
						</span>
					</a>
				</div>
			</div>
		</div>
		<div class="columns wrap-umkm is-multiline is-desktop is-tablet is-mobile is-centered">
			<div class="column is-3-desktop is-4-tablet is-5-mobile is-10-mobile-xs">
				<div class="card">
					<div class="card-image">
						<figure class="image is-4by3">
							<a href="detail.php">
								<img src="asset/img/jasa1.jpg" alt="Placeholder image">
							</a>
						</figure>
					</div>
					<div class="card-content px-4 py-3">
						<a href="detail.php">
							<p class="has-text-grey-dark">Servis komputer murah</p>
							<p class="has-text-grey is-size-7">Andro comp</p>
						</a>
						<hr class="divider my-4">
						<div>
							<p class="has-text-right is-size-7 has-text-grey">mulai dari</p>
							<div class="is-flex is-spaced-between">
								<p class="is-size-5 has-text-grey-dark has-text-weight-bold">Rp.</p>
								<p class="is-size-5 has-text-grey-dark has-text-weight-bold">150.000</p>
							</div>
						</div>
						<br>
						<a href="https://wasap.at/mx0DgO" class="button is-primary is-block act-button">
							<span class="icon has-text-light">
								<i class="fab fa-lg fa-whatsapp mr-2"></i>
								Pesan Sekarang
							</span>
						</a>
					</div>
				</div>
			</div>
			<div class="column is-3-desktop is-4-tablet is-5-mobile is-10-mobile-xs">
				<div class="card">
					<div class="card-image">
						<figure class="image is-4by3">
							<a href="detail.php">
								<img src="asset/img/produk2.jpg" alt="Placeholder image">
							</a>
						</figure>
					</div>
					<div class="card-content px-4 py-3">
						<a href="detail.php">
							<p class="has-text-grey-dark">Catering Makanan Sehat</p>
							<p class="has-text-grey is-size-7">Bunda Rose</p>
						</a>
						<hr class="divider my-4">
						<div>
							<p class="has-text-right is-size-7 has-text-grey">mulai dari</p>
							<div class="is-flex is-spaced-between">
								<p class="is-size-5 has-text-grey-dark has-text-weight-bold">Rp.</p>
								<p class="is-size-5 has-text-grey-dark has-text-weight-bold">100.000</p>
							</div>
						</div>
						<br>
						<a href="https://wasap.at/mx0DgO" class="button is-primary is-block act-button">
							<span class="icon has-text-light">
								<i class="fab fa-lg fa-whatsapp mr-2"></i>
								Pesan Sekarang
							</span>
						</a>
					</div>
				</div>
			</div>
			<div class="column is-3-desktop is-4-tablet is-5-mobile is-10-mobile-xs">
				<div class="card">
					<div class="card-image">
						<figure class="image is-4by3">
							<a href="detail.php">
								<img src="asset/img/produk1.jpg" alt="Placeholder image">
							</a>
						</figure>
					</div>
					<div class="card-content px-4 py-3">
						<a href="detail.php">
							<p class="has-text-grey-dark">Kaos polos</p>
							<p class="has-text-grey is-size-7">Aryga Store</p>
						</a>
						<hr class="divider my-4">
						<div>
							<p class="has-text-right is-size-7 has-text-grey">mulai dari</p>
							<div class="is-flex is-spaced-between">
								<p class="is-size-5 has-text-grey-dark has-text-weight-bold">Rp.</p>
								<p class="is-size-5 has-text-grey-dark has-text-weight-bold">50.000</p>
							</div>
						</div>
						<br>
						<a href="https://wasap.at/mx0DgO" class="button is-primary is-block act-button">
							<span class="icon has-text-light">
								<i class="fab fa-lg fa-whatsapp mr-2"></i>
								Pesan Sekarang
							</span>
						</a>
					</div>
				</div>
			</div>
			<div class="column is-3-desktop is-4-tablet is-5-mobile is-10-mobile-xs">
				<div class="card">
					<div class="card-image">
						<figure class="image is-4by3">
							<a href="detail.php">
								<img src="asset/img/jasa2.jpg" alt="Placeholder image">
							</a>
						</figure>
					</div>
					<div class="card-content px-4 py-3">
						<a href="detail.php">
							<p class="has-text-grey-dark">Service AC</p>
							<p class="has-text-grey is-size-7">Danum</p>
						</a>
						<hr class="divider my-4">
						<div>
							<p class="has-text-right is-size-7 has-text-grey">mulai dari</p>
							<div class="is-flex is-spaced-between">
								<p class="is-size-5 has-text-grey-dark has-text-weight-bold">Rp.</p>
								<p class="is-size-5 has-text-grey-dark has-text-weight-bold">75.000</p>
							</div>
						</div>
						<br>
						<a href="https://wasap.at/mx0DgO" class="button is-primary is-block act-button">
							<span class="icon has-text-light">
								<i class="fab fa-lg fa-whatsapp mr-2"></i>
								Pesan Sekarang
							</span>
						</a>
					</div>
				</div>
			</div>
		</div>
		<div class="columns is-desktop is-tablet is-mobile is-centered mt-6">
			<div class="column is-5-desktop is-7-tablet is-8-mobile is-10-mobile-xs">
				<nav class="pagination" role="navigation" aria-label="pagination">
				  	<a class="pagination-previous" title="This is the first page" disabled>Previous</a>
				  	<a class="pagination-next">Next page</a>
				  	<ul class="pagination-list">
				    	<li>
					      	<a class="pagination-link is-current" aria-label="Page 1" aria-current="page">1</a>
				    	</li>
				    	<li>
				      		<a class="pagination-link" aria-label="Goto page 2">2</a>
				    	</li>
				    	<li>
				      		<a class="pagination-link" aria-label="Goto page 3">3</a>
				    	</li>
				  	</ul>
				</nav>
			</div>
		</div>
	</section>
<?php include('footer.php') ?>
