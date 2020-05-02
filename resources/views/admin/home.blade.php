@extends('admin.layouts.app')

@section('content')
    <section class="content">
        <div class="row">

            <div class="col-lg-3 col-xs-6">
                <div class="small-box bg-aqua">
                    <div class="inner">
                        <h3>{{ optional(\Fomvasss\Variable\Models\Variable::where('key', 'call_counter')->first())->value }}</h3>
                        <p>Кількість дзвінків</p>
                    </div>
                </div>
            </div>
        </div>
    </section>
@endsection

@push('scripts')
    <script>
        {{--var chartOrders = @json($chartData)--}}
    </script>
@endpush