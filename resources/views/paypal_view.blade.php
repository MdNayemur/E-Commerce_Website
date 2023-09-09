<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css">
	<script src="https://www.paypal.com/sdk/js?client-id={{env('PAYPAL_SANDBOX_CLIENT_ID')}}"></script>

</head>
<body>
@php $views=Cart::getContent();  @endphp
@php $viws=Cart::getTotal(); @endphp


          
    <form action="{{ Route('processPaypal') }}" method="post">
     @csrf
                            
    <input type="hidden" name="total" value="{{ $viws }}">
        <button type="submit" href="#" class="btn mb-20 w-100">Confirm Order</button>
     </form>

<!-- <a class="btn btn-primary" href="{{route('processPaypal')}}">Pay 100$</a> -->

@if(\Session::has('error'))
        <div class="alert alert-danger">{{ \Session::get('error') }}</div>
        {{ \Session::forget('error') }}
    @endif

    
    @if(\Session::has('success'))
        <div class="alert alert-success">{{ \Session::get('success') }}</div>
        {{ \Session::forget('success') }}
    @endif
    
</body>
</html>
