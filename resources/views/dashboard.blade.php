@extends('layouts.main', [
    'title' => 'Dashboard',
    'add' => 0
])

@section('content')

<div class="row gutter">
    <div class="col-lg-8 col-md-8 col-sm-12 col-xs-12">
        <div class="row gutter">
            <div class="col-lg-3 col-md-3 col-sm-3 col-xs-6">
                <a href="#" class="block-60 blue-bg">
                    <i class="icon-laptop_mac text-white"></i>
                    <h5>First macbook</h5>
                </a>
                <a href="#" class="block-60 blue-bg">
                    <i class="icon-line-graph"></i>
                    <h5>#15<br>Experience</h5>
                </a>
            </div>
            <div class="col-lg-3 col-md-3 col-sm-3 col-xs-6">
                <a href="#" class="block-60 blue-bg">
                    <i class="icon-laptop_mac text-white"></i>
                    <h5>First macbook</h5>
                </a>
                <a href="#" class="block-60 blue-bg">
                    <i class="icon-line-graph"></i>
                    <h5>#15<br>Experience</h5>
                </a>
            </div>
            <div class="col-lg-3 col-md-3 col-sm-3 col-xs-6">
                <a href="#" class="block-60 blue-bg">
                    <i class="icon-restaurant_menu"></i>
                    <h5>#978 cups</h5>
                </a>
                <a href="#" class="block-60 blue-bg">
                    <i class="icon-pets text-white"></i>
                    <h5>First pet</h5>
                </a>
            </div>
            <div class="col-lg-3 col-md-3 col-sm-3 col-xs-6">
                <a href="tasks.html" class="block-60 blue-bg">
                    <i class="icon-weekend"></i>
                    <h5>#218 projects completed</h5>
                </a>
                <a href="#" class="block-60 blue-bg">
                    <i class="icon-medal"></i>
                    <h5>#38<br>Awards</h5>
                </a>
            </div>
            <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
                <div class="panel">
                    <div class="panel-heading" style="background: #ffb400;">
                        <h4>Order Management</h4>
                        <div class="actions hidden-xs">
                            <a href="javascript:void(0)" class="label-light label label-danger">20 New Orders</a>
                            <a href="javascript:void(0)" class="label-light label label-info">10 In-process Orders</a>
                            <a href="javascript:void(0)" class="label-light label label-success">15 Pending Orders</a>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12 hidden-lg hidden-md hidden-sm">
                <div class="panel">
                    <div class="panel-heading" style="background: #ffb400;">
                        <a href="javascript:void(0)" class="label-light label label-danger">20 New Orders</a>
                        <a href="javascript:void(0)" class="label-light label label-info">10 In-process Orders</a>
                        <a href="javascript:void(0)" class="label-light label label-success">15 Pending Orders</a>
                    </div>
                </div>
            </div>
            <div class="col-lg-6 col-md-6 col-sm-6 col-xs-12">
                <div class="panel">
                    <div class="panel-heading">
                        <h4>Estimated Inventory</h4>
                    </div>
                    <div class="panel-body">
                        <ul class="top-clients">
                            <li>
                                <div class="avatar">
                                    <img src="img/user3.png" alt="Mustang Admin">
                                </div>
                                <div class="biz">
                                    <p class="biz-name">Purchase Value</p>
                                </div>
                                <div class="value">Rs 34,098</div>
                                <div class="progress no-margin">
                                    <div class="progress-bar progress-bar-danger" role="progressbar" aria-valuenow="86" aria-valuemin="0" aria-valuemax="100" style="width: 86%">
                                    </div>
                                </div>
                            </li>
                            <li>
                                <div class="avatar">
                                    <img src="img/user7.png" alt="Mustang Admin">
                                </div>
                                <div class="biz">
                                    <p class="biz-name">Sale Value</p>
                                </div>
                                <div class="value">Rs 21,660</div>
                                <div class="progress no-margin">
                                    <div class="progress-bar progress-bar-info" role="progressbar" aria-valuenow="65" aria-valuemin="0" aria-valuemax="100" style="width: 65%">
                                    </div>
                                </div>
                            </li>
                        </ul>
                    </div>
                </div>
            </div>
            <div class="col-lg-6 col-md-6 col-sm-6 col-xs-12">
                <div class="panel">
                    <div class="panel-heading">
                        <h4>Tutorials</h4>
                    </div>
                    <div class="panel-body">
                        <ul class="articles">
                            <li>
                                <a href="#">
                                    <span class="label-bullet">&nbsp;</span>
                                    Video Link 1
                                </a>
                            </li>
                            <li>
                                <a href="#" class="no-border overflow-text" data-original-title="" title="">
                                    <span class="label-bullet">&nbsp;</span>
                                    Video Link 2
                                </a>
                            </li>
                            <li>
                                <a href="#" class="no-border overflow-text" data-original-title="" title="">
                                    <span class="label-bullet">&nbsp;</span>
                                    Video Link 3
                                </a>
                            </li>
                            <li>
                                <a href="#" class="no-border overflow-text" data-original-title="" title="">
                                    <span class="label-bullet">&nbsp;</span>
                                    Video Link 4
                                </a>
                            </li>
                        </ul>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <div class="col-lg-4 col-md-4 col-sm-12 col-xs-12">
        <div class="row gutter">
            <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
                <div class="panel">
                    <div class="panel-heading">
                        <h4>GST Graph</h4>
                    </div>
                    <div class="panel-body" style="height: 430px;">
                        <div id="barGraphOne" class="chart-height1"></div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>

<div class="row gutter">
    
    <div class="col-lg-4 col-md-4 col-sm-12 col-xs-12">
        
    </div>
</div>

@endsection