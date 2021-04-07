<section class="home_banner_area">
    <div class="banner_inner d-flex align-items-center">
        <div class="overlay bg-parallax" data-stellar-ratio="0.9" data-stellar-vertical-offset="0" data-background=""></div>
        <div class="container">
            <div class="banner_content text-center">
                <h3>Tentang Tangan Pengharapan</h3>
                <p>Berdiri sejak tahun 2007, 
					Tangan Pengharapan lahir dari mimpi anak bangsa yang rindu untuk mengeluarkan masyarakat Indonesia dari keterpurukan dan kemiskinan serta kurang merata 
					dan mahalnya pendidikan, dengan harapan dapat membangun dan mengubah masa depan generasi bangsa Indonesia menjadi lebih baik. 
					<br><br>
					Menitikberatkan pada Pendidikan, Pemberdayaan Masyarakat, dan Kesehatan, khususnya untuk memperoleh akses kepada Pendidikan 
					dan Kesehatan secara merata untuk membangun masyarakat yang sejahtera, adil dan makmur.
				</p>
                <div class="home owl-carousel">
                    @foreach($about as $a)
                        <div class="item"><img src="{{Session('docs')}}/img/about/{{$a->img}}" alt=""></div>
                    @endforeach
                </div>
            </div>
        </div>
    </div>
</section>