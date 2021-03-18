
	<div id="fh5co-consult">
		<div class="video fh5co-video" style="background-image: url(././public/images/cover_bg_2.jpg);">
			<div class="overlay"></div>
		</div>
		<div class="choose animate-box">
			<h2><?php echo $langVar->contact; ?></h2>
			<?php if(isset($_SESSION['send_message'])): ?>
			<p style="color: green;"><?php echo $langVar->send_message; ?></p>
			<?php endif ?>
			<form action="aboutmecontact" method="POST">
				<div class="row form-group">
					<div class="col-md-6">
						<input type="text" name="name" id="name" class="form-control" placeholder="<?php echo $langVar->yourname?>">
					</div>
				</div>

				<div class="row form-group">
					<div class="col-md-12">
						<input type="text" name="email" id="email" class="form-control" placeholder="<?php echo $langVar->youremail; ?>">
					</div>
				</div>

				<div class="row form-group">
					<div class="col-md-12">
						<input type="text" name="title" id="subject" class="form-control" placeholder="<?php echo $langVar->sunjectofmessage; ?>">
					</div>
				</div>

				<div class="row form-group">
					<div class="col-md-12">
						<textarea name="text" id="message" cols="30" rows="10" class="form-control" placeholder="<?php echo $langVar->textofmessage; ?>"></textarea>
					</div>
				</div>
				<div class="form-group">
					<input type="submit" name="submit" value="<?php echo $langVar->sendmessagebtn; ?>" class="btn btn-primary">
				</div>

			</form>	
		</div>
	</div>