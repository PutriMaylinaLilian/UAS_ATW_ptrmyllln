
@section('keranjang')
	@foreach($dt_keranjang as $keranjang)
		@if((Auth::user()->username) == $keranjang->username_pembeli)
			{{$data_keranjang->filter(function($a)use($keranjang){
				return $keranjang->no_hp_pembeli == $a->no_hp_pembeli;})->count('status')}}
		@endif
	@endforeach
@endsection

@section('konfir')
	@foreach($dt_konfir as $keranjang)
		@if((Auth::user()->username) == $keranjang->username_pembeli)
			{{$data_konfir->filter(function($a)use($keranjang){
				return $keranjang->no_hp_pembeli == $a->no_hp_pembeli;})->count('status')}}
		@endif
	@endforeach
@endsection