@extends('layouts.master')

@section('title')
	Reports
@stop

@section('content')
	<!--breadcrumbs start-->
	<div id="breadcrumbs-wrapper" class=" grey lighten-3">
		<div class="container">
			<div class="row">
				<div class="col s12 m12 l12">
					<h5 class="breadcrumbs-title">Report management page</h5>
					<ol class="breadcrumb">
						<li class="active">Reports</li>
					</ol>
				</div>
			</div>
		</div>
	</div>
	<!--breadcrumbs end-->

	<!--start container-->
	<div class="container">
		<div class="section">
			<p class="caption">Here will be our reports page. I'm working on it.</p>
			<div class="divider"></div>
			<!--card widgets start-->
            <div id="card-widgets">
                <div class="row">
                    <div class="col s12 m12 l12">
                        <ul id="task-card" class="collection with-header">
                            <li class="collection-header cyan">
                                <h4 class="task-card-title">Page feature</h4>
                                <p class="task-card-date">@Created on February 24, 2016</p>
                            </li>
                            <li class="collection-item dismissable">
                                <input type="checkbox" id="task1" />
                                <label for="task1">Tabbed component for displaying various type of chart (eg: line, bar, donut, etc.) of complaints.<br>Can be filtered by locations and complaints category (departments only for 'ide 1 & 3').</label>
                                <span class="task-cat green">Widget</span>
                            </li>
                            <li class="collection-item dismissable">
                                <input type="checkbox" id="task2" />
                                <label for="task2">Big fat button for exporting complaints, followed by modal pop-up to choose type of export.<br>Can be filtered by locations and complaints category (departments only for 'ide 1 & 3').</label>
                                <span class="task-cat green">Widget</span>
                            </li>
                            <li class="collection-item dismissable">
                                <input type="checkbox" id="task3" />
                                <label for="task3">RESTful API on laravel.</label>
                                <span class="task-cat red">Web-service</span>
                            </li>
                        </ul>
                    </div>
                </div>
            </div>
		</div>
	</div>
	<!--end container-->
@stop