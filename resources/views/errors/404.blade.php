@extends('errors::minimal')

@section('title', __('Not Found'))
@section('code', '404')
@section('message', __('Not Found'))
{{-- @section('message', $exception->getMessage()) --}}
