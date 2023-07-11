@extends('layouts.layout')

@section('contents')

@verbatim
        
    <div id="app">{{ message }}</div>
    @endverbatim
@endsection
@prepend('script')
    <style>
        #wraper{
            background-color: tan;
        }
    </style>
@endprepend
@section('show')
<h5>welcome hello</h5>
<a href="{{route('game','1')}}">Show</a>
@parent
@endsection

@push('script')
    <script src="js/java.js"></script>
@endpush
@push('script')
    <script>
        <script src="https://unpkg.com/vue@3/dist/vue.global.js"></script>



            <script>
            const { createApp } = Vue

            createApp({
                data() {
                return {
                    message: 'Hello Vue!'
                }
                }
            }).mount('#app')
            </script>
    </script>
    @endpush