<?php include('header.php') ?>
	<section>
		<div class="columns is-multiline is-centered is-desktop is-tablet is-mobile">
			<div class="column is-6-desktop is-8-touch is-10-mobile-xs">	
				<p class="py-2" style="border-bottom: 1px solid lightgrey">Pendaftaran 2/2</p>
				<br>
				<form action="" method="" enctype="multipart/form-data">
					<div class="field mb-4">
						<label>Nama Pemilik Usaha</label>
						<div class="control">
							<input class="input" type="text" placeholder="Enter full name">
						</div>
					</div>
                    <div class="field mb-4 profile-wrap">	
						<label>Foto Pemilik dengan KTP</label>
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
                    <label>Nomor Whatsapp</label>
					<div class="field-body mb-4">
						<div class="field has-addons">
							<div class="control">
								<a class="button is-static">
									+62
								</a>
							</div>
							<div class="control is-expanded">
								<input class="input" type="tel" placeholder="Your phone number" required name="nomor_telepon">
							</div>
						</div>
					</div>

					<div class="field mb-4">
                    	<label>Metode Pembayaran</label>
					  	<div class="control">
					   		<label class="radio">
					      		<input type="radio" name="question">
					      		Digital Wallet
					    	</label>
					    	<label class="radio">
					      		<input type="radio" name="question">
					      		Transfer
					    	</label>
					    	<label class="radio">
					      		<input type="radio" name="question">
					      		COD
					    	</label>
					    	<label class="radio">
					      		<input type="radio" name="question">
					      		Lainnya
					    	</label>
					  	</div>
					</div>

					<div class="field mb-4">
                    	<label>Metode Pengantaran</label>
					  	<div class="control">
					   		<label class="radio">
					      		<input type="radio" name="question">
					      		Drive Send
					    	</label>
					    	<label class="radio">
					      		<input type="radio" name="question">
					      		Drive Food
					    	</label>
					    	<label class="radio">
					      		<input type="radio" name="question">
					      		Diantar/Dijemput
					    	</label>
					    	<label class="radio">
					      		<input type="radio" name="question">
					      		Lainnya
					    	</label>
					  	</div>
					</div>
					<div class="field mb-4">
						<div class="control">
					    	<label class="checkbox">
					      		<input type="checkbox">
					      		Telah mengisi data dengan sebenar-benarnya</a>
					    	</label>
					  	</div>
					</div>

					<br>
					<div class="field is-grouped is-grouped-right">
					  	<p class="control">
					    	<a href="daftar.php" class="button is-grey">
					      		Kembali
					    	</a>
					  	</p>
					  	<p class="control">
					    	<a class="button is-primary">
					      		Selanjutnya
					    	</a>
					  	</p>
					</div>
				</form>
			</div>
		</div>
	</section>
<?php include('footer.php') ?>
