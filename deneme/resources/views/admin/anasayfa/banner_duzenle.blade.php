@extends('admin.admin_master')

@section('admin_master')
<div class="page-content">
	<div class="container-fluid">
		<div class="row">
			<div class="col-12">
				<div class="card">
					<div class="card-body">
						<h4 class="card-title">Banner Düzenle</h4>

						<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script> 

						<form method="post" action="{{ route('profile.update') }}" class="mt-6 space-y-6" enctype="multipart/form-data">
							@csrf
							@method('patch')

							<div class="row mb-3">
								<label for="example-text-input" class="col-sm-2 col-form-label">Başlık</label>
								<div class="col-sm-10">
									<input class="form-control" type="text"  id="example-text-input" value="{{$homebanner->baslik}}">
								</div>
							</div>

							<div class="row mb-3">
								<label for="example-text-input" class="col-sm-2 col-form-label">Alt Başlık</label>
								<div class="col-sm-10">
									<input class="form-control" type="text"  id="example-text-input" value="{{$homebanner->alt_baslik}}">
								</div>
							</div>

							<div class="row mb-3">
								<label for="example-text-input" class="col-sm-2 col-form-label">URL</label>
								<div class="col-sm-10">
									<input class="form-control" type="text"  id="example-text-input" value="{{$homebanner->url}}">
								</div>
							</div>

							<div class="row mb-3">
								<label for="example-text-input" class="col-sm-2 col-form-label">VİDEO URL</label>
								<div class="col-sm-10">
									<input class="form-control" type="text" id="example-text-input" value="{{$homebanner->video_url}}">
								</div>
							</div>

							<div class="row mb-3">
								<label for="example-text-input" class="col-sm-2">Resim</label>
								<div class="col-sm-10">
									<input type="file" name="resim" id="resim">
								</div>
							</div>

							<div class="row mb-3">
								<label for="example-text-input" class="col-sm-2"></label>
								<div class="col-sm-10">
									<img class="rounded avatar-lg" src="{{ (!empty($homebanner->resim)) ? url('upload/banner/'.homebanner->resim): url('upload/resim-yok.png') }}" alt="" id="resimGoster">
								</div>
							</div>

							<label for="example-text-input" class="col-sm-2"></label>
							<input type="submit" class="btn btn-info bg-dark" value="Resim Güncelle">
						</form>
						<!-- end row -->
					</div>
				</div>
			</div> <!-- end col -->
		</div>
	</div>
</div>       


<script type="text/javascript">
	$(document).ready(function(){
		$('#resim').change(function(e){
			var reader = new FileReader();
			reader.onload = function(e){
				$('#resimGoster').attr('src',e.target.result);
			}
			reader.readAsDataURL(e.target.files['0']);
		});
	});
</script>         

@section('admin_master')