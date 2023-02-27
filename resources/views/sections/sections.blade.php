@extends('layouts.master')
@extends('layouts.cssFiles')
@section('title')
الاقسام
@stop
@section('page-header')
<!-- breadcrumb -->
<div class="breadcrumb-header justify-content-between">
	<div class="my-auto">
		<div class="d-flex">
			<h4 class="content-title mb-0 my-auto"></h4>الاعدادات</h4><span class="text-muted mt-1 tx-13 mr-2 mb-0">/ الاقسام</span>
		</div>
	</div>
	<div class="d-flex my-xl-auto right-content">


	</div>
</div>
<!-- breadcrumb -->
@endsection
@section('content')


@if ($errors->any())
<div class="alert alert-danger">
	<ul>
		@foreach ($errors->all() as $error)
		<li>{{ $error }}</li>
		@endforeach
	</ul>
</div>
@endif

@if (session()->has('Add'))
<div class="alert alert-success alert-dismissible fade show" role="alert">
	<strong>{{ session()->get('Add') }}</strong>
	<button type="button" class="close" data-dismiss="alert" aria-label="Close">
		<span aria-hidden="true">&times;</span>
	</button>
</div>
@endif

@if (session()->has('delete'))
<div class="alert alert-danger alert-dismissible fade show" role="alert">
	<strong>{{ session()->get('delete') }}</strong>
	<button type="button" class="close" data-dismiss="alert" aria-label="Close">
		<span aria-hidden="true">&times;</span>
	</button>
</div>
@endif

@if (session()->has('edit'))
<div class="alert alert-success alert-dismissible fade show" role="alert">
	<strong>{{ session()->get('edit') }}</strong>
	<button type="button" class="close" data-dismiss="alert" aria-label="Close">
		<span aria-hidden="true">&times;</span>
	</button>
</div>
@endif
<!-- row -->
<div class="row">
	<!--div-->
	<div class="col-xl-12">
		<div class="card mg-b-20">
			<div class="card-header pb-0">
				<div class="d-flex justify-content-between">
					<div class="col-sm-6 col-md-4 col-xl-3">
						<a class="modal-effect btn btn-outline-primary btn-block" data-effect="effect-scale" data-toggle="modal" href="#modaldemo8">اضافة قسم</a>
					</div>
				</div>
			</div>
			<div class="card-body">
				<div class="table-responsive">
					<table id="example1" class="table key-buttons text-md-nowrap">
						<thead>
							<tr>
								<th class="border-bottom-0">#</th>
								<th class="border-bottom-0">اسم القسم</th>
								<th class="border-bottom-0">ملاحظات</th>
								<th class="border-bottom-0">تاريخ الاضافة</th>
							</tr>
						</thead>
						<tbody>
							@foreach ($sections as $x)
							<tr>
								<td>{{ $x->id }}</td>
								<td>{{ $x->section_name }}</td>
								<td>{{ $x->description }}</td>
								<td>
									<a class="modal-effect btn btn-sm btn-info" data-effect="effect-scale" data-id="{{ $x->id }}" data-section_name="{{ $x->section_name }}" data-description="{{ $x->description }}" data-toggle="modal" href="#exampleModal2" title="تعديل"><i class="las la-pen"></i></a>
									<a class="modal-effect btn btn-sm btn-danger" data-effect="effect-scale" data-id="{{ $x->id }}" data-section_name="{{ $x->section_name }}" data-toggle="modal" href="#modaldemo9" title="حذف"><i class="las la-trash"></i></a>
									@can('تعديل قسم')
									@endcan

									@can('حذف قسم')
									@endcan
								</td>
							</tr>
							@endforeach
						</tbody>
					</table>
				</div>
			</div>
		</div>
	</div>
	<!-- Basic modal -->
	<div class="modal" id="modaldemo8">
		<div class="modal-dialog" role="document">
			<div class="modal-content modal-content-demo">
				<div class="modal-header">
					<h6 class="modal-title">اضافة قسم</h6><button aria-label="Close" class="close" data-dismiss="modal" type="button"><span aria-hidden="true">&times;</span></button>
				</div>
				<div class="modal-body">
					<form action="{{ route('sections.store') }}" method="post">
						{{ csrf_field() }}

						<div class="form-group">
							<label for="exampleInputEmail1">اسم القسم</label>
							<input type="text" class="form-control" id="section_name" name="section_name">
						</div>

						<div class="form-group">
							<label for="exampleFormControlTextarea1">ملاحظات</label>
							<textarea class="form-control" id="description" name="description" rows="3"></textarea>
						</div>

						<div class="modal-footer">
							<button type="submit" class="btn btn-success">تاكيد</button>
							<button type="button" class="btn btn-secondary" data-dismiss="modal">اغلاق</button>
						</div>
					</form>
				</div>
			</div>
		</div>
	</div>
	<!-- End Basic modal -->
	<!--/div-->
</div>
<!-- main-content closed -->
@endsection
@extends('layouts.jsFiles')
