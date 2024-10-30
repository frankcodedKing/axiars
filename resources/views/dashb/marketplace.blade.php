@extends('dashblayout.dashlayout')
<!-- new one -->
<!-- <link rel="stylesheet" href="{{ asset('assets/css/newhomecss/min.css') }}"> -->

@section('body')



        <!-- Body Section Start-->
        <div class="container">
    <h3>Listed Recently</h3>
<br><br>
    <!-- <h5>Listed Recently</h5> -->
    
    @if($listedNFTs->isEmpty())
        <p>No NFTs listed for sale at the moment.</p>
    @else
        <div class="row">
            @foreach($listedNFTs as $nft)
                <div class="col-md-4">
                    <div class="card">
                        <img src="{{ asset('storage/' . $nft->image) }}" class="card-img-top" alt="{{ $nft->name }}">
                        <div class="card-body">
                            <h5 class="card-title">{{ $nft->name }}</h5>
                            <p class="card-text">{{ $nft->description }}</p>
                            <p><strong>Supply:</strong> {{ $nft->supply }}</p>
                            <p><strong>Price:</strong> ${{ $nft->price }}</p>
                            
                            @auth
                                <!-- Form to buy the NFT -->
                                <form action="{{ route('buyNFT', $nft->id) }}" method="POST">
                                    @csrf
                                    <button type="submit" class="btn btn-primary mt-2">Buy Now</button>
                                </form>
                            @else
                                <p>Please <a href="{{ route('login') }}">login</a> to purchase NFTs.</p>
                            @endauth
                        </div>
                    </div>
                </div>
            @endforeach
        </div>
    @endif
</div>



        

@endsection



