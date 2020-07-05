@extends('template_blog.content')

@section('isi')


	<!-- SECTION -->

		
					<!-- post -->
					<div class="post post-thumb">
                    <a class="post-img" href="blog-post.html"><img src="{{asset('public/frontend/img/hot-post-1.jpg')}}" alt=""></a>
						<div class="post-body">
							<div class="post-category">
								<a href="category.html">Lifestyle</a>
							</div>
							<h3 class="post-title title-lg"><a href="blog-post.html">Postea senserit id eos, vivendo periculis ei qui</a></h3>
							<ul class="post-meta">
								<li><a href="author.html">John Doe</a></li>
								<li>20 April 2018</li>
							</ul>
						</div>
					</div>
					<!-- /post -->
				</div>
				<div class="col-md-4 hot-post-right">
					<!-- post -->
					<div class="post post-thumb">
						<a class="post-img" href="blog-post.html"><img src="{{asset('public/frontend/img/hot-post-2.jpg')}}" alt=""></a>
						<div class="post-body">
							<div class="post-category">
								<a href="category.html">Lifestyle</a>
							</div>
							<h3 class="post-title"><a href="blog-post.html">Sed ut perspiciatis, unde omnis iste natus error sit</a></h3>
							<ul class="post-meta">
								<li><a href="author.html">John Doe</a></li>
								<li>20 April 2018</li>
							</ul>
						</div>
					</div>
					<!-- /post -->

					<!-- post -->
					<div class="post post-thumb">
						<a class="post-img" href="blog-post.html"><img src="{{asset('public/frontend//img/hot-post-3.jpg')}}" alt=""></a>
						<div class="post-body">
							<div class="post-category">
								<a href="category.html">Fashion</a>
								<a href="category.html">Lifestyle</a>
							</div>
							<h3 class="post-title"><a href="blog-post.html">Mel ut impetus suscipit tincidunt. Cum id ullum laboramus persequeris.</a></h3>
							<ul class="post-meta">
								<li><a href="author.html">John Doe</a></li>
								<li>20 April 2018</li>
							</ul>
						</div>
					</div>
					<!-- /post -->
				</div>
	
		<!-- /container -->
	</div>
	<!-- /SECTION -->

	<!-- SECTION -->
	<div class="section">
		<!-- container -->
		<div class="container">
			<!-- row -->
			<div class="row">
				<div class="col-md-8">
					<!-- row -->
					<div class="row">
						<div class="col-md-12">
							<div class="section-title">
								<h2 class="title">Recent posts</h2>
							</div>
						</div>
                        <!-- post -->
                        @foreach($data as $recent_posts)
						<div class="col-md-6">
							<div class="post">
                            <a class="post-img" href="{{route('magz.isi', $recent_posts->slug)}}"><img src="{{$recent_posts->gambar}}" alt=""></a>
								<div class="post-body">
									<div class="post-category">
                                    <a href="#">{{$recent_posts->category->name}}</a>
									</div>
                                <h3 class="post-title"><a href="#">{{$recent_posts->judul}}</a></h3>
									<ul class="post-meta">
                                    <li><a href="#">{{$recent_posts->users->name}}</a></li>
                                    <li>{{$recent_posts->created_at->diffForHumans()}}</li>
									</ul>
								</div>
							</div>
						</div>
                        <!-- /post -->
                        @endforeach

			
					</div>
					<!-- /row -->
			
		</div>
	</div>			
				</div>
			
			
            <!-- /row -->
            
			@endsection
	
	

	

	<!-- FOOTER -->

