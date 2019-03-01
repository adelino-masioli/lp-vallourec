<div id="lk_section_two"></div>
<div class="form-show-1 fh5co-section-two" id="fh5co-section-one">
    <div class="container fh5co-section-two-content">
			<div class="row animate-box">
				<div class="col-xs-12 col-md-6 text-center">
                    <img src="{{asset('site/images/capa_ebook.jpg')}}" class="img-responsive img-ebook" alt="Vallourec E-book">
                </div>
                <div class="col-xs-12 col-md-6 section-two-col-right">
                    
                        <h1 class="download">Antes de baixar, um simples cadastro.</h1>

                            <form id="form-download-ebook" method="POST" action="{{route('download-e-book-save')}}">
                                {{ csrf_field() }}
                                <input type="hidden" name="times" value="1">
                                <input type="hidden" name="ip" value="{{\Request::ip()}}">
                                <input type="hidden" name="download_url" value="{{\Request::route()->getName()}}">
                                <div class="form-group">
                                    <input type="text" class="form-control" name="full_name" placeholder="Nome completo:" required>
                                </div>
                                <div class="form-group">
                                    <input type="text" class="form-control" name="company" placeholder="Empresa:" required>
                                </div>
                                <div class="form-group">
                                    <input type="text" class="form-control" name="phone" placeholder="Telefone:" required>
                                </div>
                                <div class="form-group">
                                    <input type="email" class="form-control" name="email" placeholder="E-mail:" required>
                                </div>

                                <button type="submit" class="btn btn-download-e-book" onclick="conversionDownload();">Baixar agora</button>
                            </form>

                </div>        
            </div>
    </div>
</div>

@push('scripts')
<script>
    function conversionDownload(){
        gtag('event', 'conversion', {'send_to': 'AW-792215321/tHU_CNqalJYBEJn-4PkC'});
    }
</script>
@endpush