<footer class="section-sm bg-tertiary">
	<div class="container">
		<div class="row justify-content-between">
			<div class="col-lg-2 col-md-4 col-6 mb-4">
				<div class="footer-widget">
					<h5 class="mb-4 text-primary font-secondary">Service</h5>
					<ul class="list-unstyled">
						<li class="mb-2"><a href="service-details.html">Digital Marketing</a>
						</li>
						<li class="mb-2"><a href="service-details.html">Web Design</a>
						</li>
						<li class="mb-2"><a href="service-details.html">Logo Design</a>
						</li>
						<li class="mb-2"><a href="service-details.html">Graphic Design</a>
						</li>
						<li class="mb-2"><a href="service-details.html">SEO</a>
						</li>
					</ul>
				</div>
			</div>
			<div class="col-lg-2 col-md-4 col-6 mb-4">
				<div class="footer-widget">
					<h5 class="mb-4 text-primary font-secondary">Quick Links</h5>
					<ul class="list-unstyled">
						<li class="mb-2"><a wire:navigate href="{{ route('ShowPage',2)}}">About Us</a>
						</li>
						<li class="mb-2"><a wire:navigate href="#!">Contact Us</a>
						</li>
						<li class="mb-2"><a wire:navigate href="{{ route('articalePage') }}">Blog</a>
						</li>
						<li class="mb-2"><a wire:navigate href="{{ route('membersPage') }}">Team</a>
						</li>
					</ul>
				</div>
			</div>
			<div class="col-lg-2 col-md-4 col-6 mb-4">
				<div class="footer-widget">
					<h5 class="mb-4 text-primary font-secondary">Other Links</h5>
					<ul class="list-unstyled">
						<li class="list-inline-item me-4"><a class="text-black" href="{{ route('ShowPage',1)}}">Privacy Policy</a>
                        </li>
						<li class="list-inline-item me-4"><a class="text-black" href="{{ route('ShowPage',3)}}">Terms &amp; Conditions</a>
                        </li>
					</ul>
				</div>
			</div>			
		</div>
		
	</div>
</footer>