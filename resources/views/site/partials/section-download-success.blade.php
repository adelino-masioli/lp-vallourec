<div id="lk_section_two"></div>
<div class="form-show-1 fh5co-section-two" id="fh5co-section-one">
    <div class="container fh5co-section-two-content">
			<div class="row animate-box">
				<div class="col-xs-12 col-md-6 text-center">
                    <img src="{{asset('site/images/capa_ebook.jpg')}}" class="img-responsive img-ebook" alt="Vallourec E-book">
                </div>
                <div class="col-xs-12 col-md-6 section-two-col-right">
                        
                        <h1 class="download">E-book baixado com sucesso.</h1>
                                
                        <a href="{{route('download-e-book-pdf')}}" onclick="conversionSuccess();" class="btn btn-blue" id="download-ebook-vallourec">Clique aqui para baixar novamente</a>
                        <br/><br/>

                        <a class="btn-back" href="{{url('/')}}">Voltar</a>
                        
                        @push('scripts')
                        <script>
                            $(document).ready(function(){
                                setTimeout(function(){
                                        window.location = "{{route('download-e-book-pdf')}}";
                                        conversionSuccess();
                                }, 1000);
                            });

                            function conversionSuccess(){
                                gtag('event', 'conversion', {'send_to': 'AW-792215321/Nu1WCMmIjJYBEJn-4PkC'});
                            }
                        </script>
                        @endpush

                </div>        
            </div>
    </div>
</div>