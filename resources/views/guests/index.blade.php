@extends('layouts.master')

@section('title', '| Guest Index')

@section('content')

<div class="container-fluid">
	<div class="row">
		<div class="col-md-8 col-sm-offset-2">
			<div class="card border-dark">
				<div class="card-header border-dark text-center">
					Posts
				</div>

				<div class="card-body">
					<div class="form-row">
						<div class="col-md-6">
							<h4 class="card-title">List</h4>
						</div>
					</div>

					<p class="card-text">
						<div class="form-group">
							{{ Form::label('category', 'Category:') }}
							{{ Form::select('category', $categories->pluck('category_name', 'id'), null, [
									'class' => 'form-control',
									'id' => 'category',
									'placeholder' => '',
								])
							}}
						</div>

						<div class="form-group">
							{{ Form::label('subcategory', 'Subcategory:') }}
							{{ Form::select('subcategory', ['' => ''], null, [
									'class' => 'form-control',
									'id' => 'subcategory',
								])
							}}
						</div>
					</p>
				</div>

				<!-- <div class="card-footer border-dark bg-transparent mb-0 mt-0 pb-0 pt-0"> -->
					<!--  -->
				<!-- </div> -->
			</div>
		</div>
	</div>
	<hr class="border-dark" />
</div>

@endsection