@extends('layouts.master')
@extends('layouts.cssFiles')
@section('title')
قائمة الفواتير
@stop
@section('page-header')
<!-- breadcrumb -->
<div class="breadcrumb-header justify-content-between">
	<div class="my-auto">
		<div class="d-flex">
			<h4 class="content-title mb-0 my-auto"></h4>الفواتير</h4><span class="text-muted mt-1 tx-13 mr-2 mb-0">/ قائمة الفواتير</span>
		</div>
	</div>
	<div class="d-flex my-xl-auto right-content">


	</div>
</div>
<!-- breadcrumb -->
@endsection
@section('content')
<!-- row -->
<div class="row">
	<!--div-->
	<div class="col-xl-12">
		<div class="card mg-b-20">
			<div class="card-header pb-0">
				<div class="d-flex justify-content-between">
					<h4 class="card-title mg-b-0">Bordered Table</h4>
					<i class="mdi mdi-dots-horizontal text-gray"></i>
				</div>
				<p class="tx-12 tx-gray-500 mb-2">Example of Valex Bordered Table.. <a href="">Learn more</a></p>
			</div>
			<div class="card-body">
				<div class="table-responsive">
					<table id="example1" class="table key-buttons text-md-nowrap">
						<thead>
							<tr>
								<th class="border-bottom-0">#</th>
								<th class="border-bottom-0">رقم الفاتورة</th>
								<th class="border-bottom-0">تاريخ الفاتورة</th>
								<th class="border-bottom-0">تاريخ الاستحقاق</th>
								<th class="border-bottom-0">المنتج</th>
								<th class="border-bottom-0">القسم</th>
								<th class="border-bottom-0">الخصم</th>
								<th class="border-bottom-0">نسبة الضريبة</th>
								<th class="border-bottom-0">قيمة الضريبة</th>
								<th class="border-bottom-0"> الاجمالي</th>
								<th class="border-bottom-0"> الحالة</th>
								<th class="border-bottom-0"> الملاحظات</th>
							</tr>
						</thead>
						<tbody>
							<tr>
								<td>1</td>
								<td>243423</td>
								<td>2022-09-01</td>
								<td>2022-01-12</td>
								<td>cc</td>
								<td>البنك الاهلي</td>
								<td>10%</td>
								<td>22</td>
								<td>133</td>
								<td>3299</td>
								<td>مدفوع</td>
								<td>تم التسليم باليد</td>
							</tr>
						</tbody>
					</table>
				</div>
			</div>
		</div>
	</div>
	<!--/div-->
</div>
<!-- main-content closed -->
@endsection
@extends('layouts.jsFiles')
