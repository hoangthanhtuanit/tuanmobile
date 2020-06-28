<?php require_once 'header.php'; ?>
<div class="content-page">
	<!-- Start content -->
	<div class="content">
		<div class="container-fluid">
			<div class="row">
				<div class="col-xl-12">
					<div class="breadcrumb-holder">
						<h1 class="main-title float-left">Xin chào các bạn đến với trang quản trị</h1>
						<ol class="breadcrumb float-right">
							<li class="breadcrumb-item">Home</li>
							<li class="breadcrumb-item active">Danh mục sản phẩm</li>
						</ol>
						<div class="clearfix"></div>
					</div>
				</div>
			</div>
			<!-- end row -->
			<div class="row">
				<div class="col-xl-12">
					<div class="table-responsive">
						<div id="example1_wrapper" class="dataTables_wrapper container-fluid dt-bootstrap4 no-footer">
							<div class="row">
								<div class="col-sm-12 col-md-6">
									<div id="example1_filter" class="dataTables_filter"><label>Search:<input type="search" class="form-control form-control-sm" placeholder="" aria-controls="example1"></label></div>
								</div>
							</div>
							<div class="row">
								<div class="col-sm-12">
									<table id="example1" class="table table-bordered table-hover display dataTable no-footer" role="grid" aria-describedby="example1_info">
										<thead>
											<tr role="row">
												<th class="sorting_asc" tabindex="0" aria-controls="example1" rowspan="1" colspan="1" aria-sort="ascending" aria-label="Name: activate to sort column descending" style="width: 52px;">Name</th>
												<th class="sorting" tabindex="0" aria-controls="example1" rowspan="1" colspan="1" aria-label="Position: activate to sort column ascending" style="width: 69px;">Position</th>
												<th class="sorting" tabindex="0" aria-controls="example1" rowspan="1" colspan="1" aria-label="Office: activate to sort column ascending" style="width: 48px;">Office</th>
												<th class="sorting" tabindex="0" aria-controls="example1" rowspan="1" colspan="1" aria-label="Age: activate to sort column ascending" style="width: 27px;">Age</th>
												<th class="sorting" tabindex="0" aria-controls="example1" rowspan="1" colspan="1" aria-label="Start date: activate to sort column ascending" style="width: 55px;">Start date</th>
												<th class="sorting" tabindex="0" aria-controls="example1" rowspan="1" colspan="1" aria-label="Salary: activate to sort column ascending" style="width: 51px;">Salary</th>
											</tr>
										</thead>
										<tbody>
											<tr role="row" class="odd">
												<td class="sorting_1">Airi Satou</td>
												<td>Accountant</td>
												<td>Tokyo</td>
												<td>33</td>
												<td>2008/11/28</td>
												<td>$162,700</td>
											</tr>
											<tr role="row" class="even">
												<td class="sorting_1">Angelica Ramos</td>
												<td>Chief Executive Officer (CEO)</td>
												<td>London</td>
												<td>47</td>
												<td>2009/10/09</td>
												<td>$1,200,000</td>
											</tr>
											<tr role="row" class="odd">
												<td class="sorting_1">Ashton Cox</td>
												<td>Junior Technical Author</td>
												<td>San Francisco</td>
												<td>66</td>
												<td>2009/01/12</td>
												<td>$86,000</td>
											</tr>
											<tr role="row" class="even">
												<td class="sorting_1">Bradley Greer</td>
												<td>Software Engineer</td>
												<td>London</td>
												<td>41</td>
												<td>2012/10/13</td>
												<td>$132,000</td>
											</tr>
										</tbody>
									</table>
								</div>
							</div>
							<div class="row pull-right">
								<div class="col-sm-12 col-md-7">
									<div class="dataTables_paginate paging_simple_numbers" id="example1_paginate">
										<ul class="pagination">
											<li class="paginate_button page-item previous disabled" id="example1_previous"><a href="#" aria-controls="example1" data-dt-idx="0" tabindex="0" class="page-link">Previous</a></li>
											<li class="paginate_button page-item active"><a href="#" aria-controls="example1" data-dt-idx="1" tabindex="0" class="page-link">1</a></li>
											<li class="paginate_button page-item "><a href="#" aria-controls="example1" data-dt-idx="2" tabindex="0" class="page-link">2</a></li>
											<li class="paginate_button page-item "><a href="#" aria-controls="example1" data-dt-idx="3" tabindex="0" class="page-link">3</a></li>
											<li class="paginate_button page-item "><a href="#" aria-controls="example1" data-dt-idx="4" tabindex="0" class="page-link">4</a></li>
											<li class="paginate_button page-item "><a href="#" aria-controls="example1" data-dt-idx="5" tabindex="0" class="page-link">5</a></li>
											<li class="paginate_button page-item next" id="example1_next"><a href="#" aria-controls="example1" data-dt-idx="6" tabindex="0" class="page-link">Next</a></li>
										</ul>
									</div>
								</div>
							</div>
						</div>
					</div>
				</div>
			</div>
		</div>
		<!-- END container-fluid -->
	</div>
	<!-- END content -->
</div>
<!-- END content-page-->
<?php require_once 'footer.php'; ?>