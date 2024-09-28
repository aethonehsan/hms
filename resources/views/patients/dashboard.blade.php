@extends('layouts.app')
@section('title')
    {{ __('messages.dashboard.dashboard') }}
@endsection
@section('content')
    <?php
    $currencySymbol = getCurrencySymbol();
    ?>

@endsection
