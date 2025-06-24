@extends('layouts.app')

@section('content')
<div class="row">
    <div class="col s12 m8 l8">
        <div id="revenue-chart" class="card animate fadeUp">
            <div class="card-content">
                <h4 class="header mt-0">
                    REVENUE FOR 2020
                    <span class="purple-text small text-darken-1 ml-1">
                        <i class="material-icons">keyboard_arrow_up</i> 15.58 %</span>
                    <a class="waves-effect waves-light btn gradient-45deg-purple-deep-orange gradient-shadow right">Details</a>
                </h4>
                <div class="row">
                    <div class="col s12">
                        <div class="yearly-revenue-chart"><div class="chartjs-size-monitor"><div class="chartjs-size-monitor-expand"><div class=""></div></div><div class="chartjs-size-monitor-shrink"><div class=""></div></div></div><div class="chartjs-size-monitor"><div class="chartjs-size-monitor-expand"><div class=""></div></div><div class="chartjs-size-monitor-shrink"><div class=""></div></div></div>
                            <canvas id="thisYearRevenue" class="firstShadow chartjs-render-monitor" height="350" width="634" style="display: block; width: 634px; height: 350px;"></canvas>
                            <canvas id="lastYearRevenue" height="350" width="634" style="display: block; width: 634px; height: 350px;" class="chartjs-render-monitor"></canvas>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <div class="col s12 m4 l4">
        <div id="weekly-earning" class="card animate fadeUp">
            <div class="card-content"><div class="chartjs-size-monitor"><div class="chartjs-size-monitor-expand"><div class=""></div></div><div class="chartjs-size-monitor-shrink"><div class=""></div></div></div>
                <h4 class="header m-0">Earning <i class="material-icons right grey-text lighten-3">more_vert</i></h4>
                <p class="no-margin grey-text lighten-3 medium-small">Mon 15 - Sun 21</p>
                <h3 class="header">$899.39 <i class="material-icons deep-orange-text text-accent-2">arrow_upward</i>
                </h3>
                <canvas id="monthlyEarning" class="chartjs-render-monitor" height="150" width="281" style="display: block;"></canvas>
                <div class="center-align">
                    <p class="lighten-3">Total Weekly Earning</p>
                    <a class="waves-effect waves-light btn gradient-45deg-purple-deep-orange gradient-shadow">View
                        Full</a>
                </div>
            </div>
        </div>
    </div>
</div>

    <div class="row">
      <div class="col s12">
        <ul class="tabs">
          <li class="tab col m3"><a href="#test1">Test 1</a></li>
          <li class="tab col m3"><a class="active" href="#test2">Test 2</a></li>
          <li class="tab col sm disabled"><a href="#test3">Disabled Tab</a></li>
          <li class="tab col m3"><a href="#test4">Test 4</a></li>
        </ul>
      </div>
      <div id="test1" class="col s12">Test 1</div>
      <div id="test2" class="col s12">Test 2</div>
      <div id="test3" class="col s12">Test 3</div>
      <div id="test4" class="col s12">Test 4</div>
    </div>
       
@endsection
