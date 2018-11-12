<!--Example 4-10. Extending a Blade Layout -->
<!-- resources/views/dashboard.blade.php -->
@extends('layouts.master')
Template inheritance | 57
@section('title', 'Dashboard')
@section('content')
Welcome to your application dashboard!
@endsection
@section('footerScripts')
@parent
<script src="dashboard.js">
@endsection