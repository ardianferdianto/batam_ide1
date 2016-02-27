@extends('layouts.master')

@section('title')
	Complaint Management &raquo; Complaints
@stop

@section('content')
	<!--breadcrumbs start-->
	<div id="breadcrumbs-wrapper" class=" grey lighten-3">
		<div class="container">
			<div class="row">
				<div class="col s12 m12 l12">
					<h5 class="breadcrumbs-title">Complaint management page</h5>
					<ol class="breadcrumb">
                        <li>Complaint Management</li>
						<li class="active">Complaints</li>
					</ol>
				</div>
			</div>
		</div>
	</div>
	<!--breadcrumbs end-->

	<!--start container-->
	<div class="container">
		<div class="section">
			<p class="caption">Here will be our complaints page. I'm working on it.</p>
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
                                <label for="task1">Complaint list fragment (for displaying data-table).</label>
                                <span class="task-cat green">Fragment</span>
                            </li>
                            <li class="collection-item dismissable">
                                <input type="checkbox" id="task2" />
                                <label for="task2">Complaint single-post fragment (for displaying detailed information of a complaint).</label>
                                <span class="task-cat green">Fragment</span>
                            </li>
                            <li class="collection-item dismissable">
                                <input type="checkbox" id="task3" />
                                <label for="task3">Complaint list data-table, complete with sort, filter, pagination and export functionality.</label>
                                <span class="task-cat teal">Widget</span>
                            </li>
                            <li class="collection-item dismissable">
                                <input type="checkbox" id="task4" />
                                <label for="task4">Complaint location displayed by Google Map widget, on top of the single-post fragment.</label>
                                <span class="task-cat teal">Widget</span>
                            </li>
                            <li class="collection-item dismissable">
                                <input type="checkbox" id="task5" />
                                <label for="task5">Complaint detailed information.</label>
                                <span class="task-cat teal">Widget</span>
                            </li>
                            <li class="collection-item dismissable">
                                <input type="checkbox" id="task6" />
                                <label for="task6">RESTful API on laravel.</label>
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