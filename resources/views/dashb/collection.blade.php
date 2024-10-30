@extends('dashblayout.dashlayout')
<!-- new one -->
<!-- <link rel="stylesheet" href="{{ asset('assets/css/newhomecss/min.css') }}"> -->

@section('body')



        <!-- Body Section Start-->
        <div class="container">
    <h3>Your NFT Collection</h3>
    
    @if($uploads->isEmpty())
        <p>No uploads found.</p>
    @else
        <div class="row">
            @foreach($uploads as $upload)
                <div class="col-md-4">
                    <div class="card">
                        <img src="{{ asset('storage/' . $upload->image) }}" class="card-img-top" alt="{{ $upload->name }}">
                        <div class="card-body">
                            <h5 class="card-title">{{ $upload->name }}</h5>
                            <p class="card-text">{{ $upload->description }}</p>
                            <p><strong>Supply:</strong> {{ $upload->supply }}</p>
                            
                            @if($upload->sale_status == 1)
                                <!-- Show if already listed -->
                                <p><strong>Listed for:</strong> ${{ $upload->price }}</p>
                            @else
                                <!-- Form to list NFT for sale if not listed yet -->
                                <form action="{{ route('listForSale', $upload->id) }}" method="POST">
                                    @csrf
                                    <div class="form-group">
                                        <label for="price">Enter Price for Listing (in USD)</label>
                                        <input type="number" name="price" class="form-control" required>
                                    </div>
                                    <button type="submit" class="btn btn-primary mt-2">List for Sale</button>
                                </form>
                            @endif
                        </div>
                    </div>
                </div>
            @endforeach
        </div>
    @endif
</div>


        

@endsection



