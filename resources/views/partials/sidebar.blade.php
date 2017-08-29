<div id="sidebar" class="col-lg-2 offset-lg-1 col-md-2 offset-md-1">

	<h1 class="my-4">PC SHOP</h1>

	<ul>
		@foreach($categories as $category)

			<li>

				{{ $category->name }}

				@if ($category->subcategories->count())

					<ul>

						@foreach($category->subcategories as $subcategory)

							<li>

								<a href="">{{$subcategory->name}}</a>

							</li>

					@endforeach

					</ul>

				@endif

			</li>

		@endforeach
		
	</ul>

</div>
<!-- /.col-lg-3 -->

