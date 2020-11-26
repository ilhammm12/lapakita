<?php include('header.php') ?>
	<section>
		<div class="columns is-multiline is-centered is-desktop is-tablet is-mobile">
			<div class="column is-6-desktop is-8-touch is-10-mobile-xs">	
				<p class="py-2" style="border-bottom: 1px solid lightgrey">Pendaftaran 1/2</p>
				<br>
				<form action="" method="" enctype="multipart/form-data">
					<div class="field mb-4">
						<label>Nama Usaha</label>
						<div class="control">
							<input class="input" type="text" placeholder="Enter full name">
						</div>
					</div>
                    <div class="field mb-4 profile-wrap">	
						<label>Foto Usaha</label>
						<div class="columns">	
							<div class="column is-narrow">
								<img id="pp-img" src="https://bulma.io/images/placeholders/1280x960.png" style="width: 120px; height: 120px; object-fit: cover;" />
							</div>
							<div class="column">
								<div class="file is-boxed has-name is-fullwidth">
								    <label class="file-label">
								      	<input class="file-input pp-input" type="file" name="foto_profil" accept="image/*">
								      	<span class="file-cta">
								        	<span class="file-icon">
								          		<i class="fas fa-camera"></i>
								        	</span>
								        	<span class="file-label has-text-centered">
								          		Choose Photo
								        	</span>
								      	</span>
							    		<span class="pp-file-name file-name">No file selected</span>
								    </label>
								</div>
							</div>	
						</div>	
					</div>
					<div class="field mb-4">
						<label>Nama Produk</label>
						<div class="control">
							<input class="input" type="text" placeholder="" required name="">
						</div>
					</div>
                    <div class="field mb-4">
						<label>Harga Produk</label>
						<div class="control">
							<input class="input" type="number" placeholder="" required name="address">
						</div>
					</div>
					<div class="field mb-4 profile-wrap">	
						<label>Foto Produk</label>
						<div class="columns">	
							<div class="column is-narrow">
								<img id="pp-img" src="https://bulma.io/images/placeholders/1280x960.png" style="width: 120px; height: 120px; object-fit: cover;" />
							</div>
							<div class="column">
								<div class="file is-boxed has-name is-fullwidth">
								    <label class="file-label">
								      	<input class="file-input pp-input" type="file" name="foto_profil" accept="image/*">
								      	<span class="file-cta">
								        	<span class="file-icon">
								          		<i class="fas fa-camera"></i>
								        	</span>
								        	<span class="file-label has-text-centered">
								          		Choose Photo
								        	</span>
								      	</span>
							    		<span class="pp-file-name file-name">No file selected</span>
								    </label>
								</div>
							</div>	
						</div>	
					</div>
					<div class="field mb-4">
					  	<label>Deskripsi Produk</label>
					  	<div class="control">
					    	<textarea class="textarea" placeholder="Textarea"></textarea>
					  	</div>
					</div>
					<div class="field-body mb-4">
						<div class="field">
							<label>Jam Buka</label>
							<div class="control is-expanded">
								<input class="input" type="time" placeholder="Enter password" required name="password">
							</div>
						</div>
						<div class="field">
							<label>Jam Tutup</label>
							<div class="control is-expanded">
								<input class="input" type="time" placeholder="Confirm" required name="password_validate">
							</div>
						</div>
					</div>
					<div class="field mb-4">
						<label>Kategori</label>
					  	<div class="control">
					    	<div class="select is-fullwidth">
						      	<select name="country">
							        <option>Pilih Kategori</option>
							        <option>Makanan</option>
							        <option>Minuman</option>
							        <option>Pakaian</option>
							        <option>Jasa</option>
							        <option>Kecantikan</option>
						      	</select>
					    	</div>
					  	</div>
					</div>
					<div class="field-body mb-4">
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
					</div>
					<br>
					<div class="field mb-4 is-grouped is-grouped-right">
					  	<p class="control">
					    	<a href="daftar2.php" class="button is-primary">
					      		Selanjutnya
					    	</a>
					  	</p><!-- 
					  	<p class="control">
					    	<a class="button is-light">
					      		Kembali
					    	</a>
					  	</p> -->
					</div>
				</form>
			</div>
		</div>
	</section>
<?php include('footer.php') ?>
