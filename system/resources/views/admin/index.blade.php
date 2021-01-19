@extends('template.admin')

@section('content')
	<div class="row">
        
        <div class="col-lg-6 col-md-6 col-sm-12 col-xs-12">
            <div class="dashboard-line-chart shadow-reset mg-b-30">
                <div class="flot-chart dashboard-chart">
                    <div class="flot-chart-content" id="flot-dashboard-chart"></div>
                </div>

                <div class="row">
                   	<div class="col-lg-4 col-md-4 col-sm-4 col-xs-12">
                    	<div class="linechart-dash-rate">
                            <h2>$5,000</h2>
                            <p>Sales report</p>
                        </div>
                    </div>
                    
                    <div class="col-lg-4 col-md-4 col-sm-4 col-xs-12">
                        <div class="linechart-dash-rate">
                            <h2>$7,000</h2>
                            <p>Annual Sales</p>
                        </div>
                    </div>
                    <div class="col-lg-4 col-md-4 col-sm-4 col-xs-12">
                        <div class="linechart-dash-rate">
                            <h2>$3,000</h2>
                            <p>revenue Sales</p>
                        </div>
                    </div>
                </div>
            </div>
        </div>

         <div class="col-lg-6 col-md-6 col-sm-12 col-xs-12">
            <div class="dashboard-line-chart shadow-reset mg-b-30">
                <div class="flot-chart dashboard-chart">
                    <div class="flot-chart-content" id="flot-dashboard-chart"></div>
                </div>

                <div class="row">
                   	<div class="col-lg-4 col-md-4 col-sm-4 col-xs-12">
                    	<div class="linechart-dash-rate">
                            <h2>$5,000</h2>
                            <p>Sales report</p>
                        </div>
                    </div>
                    
                    <div class="col-lg-4 col-md-4 col-sm-4 col-xs-12">
                        <div class="linechart-dash-rate">
                            <h2>$7,000</h2>
                            <p>Annual Sales</p>
                        </div>
                    </div>
                    <div class="col-lg-4 col-md-4 col-sm-4 col-xs-12">
                        <div class="linechart-dash-rate">
                            <h2>$3,000</h2>
                            <p>revenue Sales</p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection