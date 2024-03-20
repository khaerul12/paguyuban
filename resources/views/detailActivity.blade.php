
@extends('layouts.main')
@section('content')

{{-- <img class="w-full max-h-44 object-cover"
                        src="{{ asset('storage/'. $detailActivity->image) }}"
                        alt="Sunset in the mountains"> --}}

                        {{-- {{ !! $detailActivity -> body !! }} --}}
                        
                        <div class="activity"> 
                            {!! ($detailActivity -> body) !!}
                        </div>


@endsection