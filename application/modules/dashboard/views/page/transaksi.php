<!-- SOON-SOON -->

<div class="page-heading">
    <div class="page-breadcrumb">
        <h1 class="page-title">Transaksi</h1>
    </div>
    <div class="subheader_daterange" id="subheader_daterange"><span class="subheader-daterange-label"><span class="subheader-daterange-title">Today:</span><span class="subheader-daterange-date">Jul 9</span></span><button class="btn btn-floating btn-sm rounded-0" type="button"><i class="ti-calendar"></i></button></div>
</div>

<div class="card">
    <div class="card-body">
        <h5 class="box-title">Latest Orders</h5>
        <div class="flexbox mb-4">
            <div class="flexbox"><label class="mb-0 mr-2">Type:</label><select class="selectpicker form-control show-tick" id="type-filter" title="Please select" data-width="150px">
                    <option value="">All</option>
                    <option>Shipped</option>
                    <option>Completed</option>
                    <option>Pending</option>
                    <option>Canceled</option>
                </select></div>
            <div class="input-group-icon input-group-icon-right mr-3"><span class="input-icon input-icon-right font-16"><i class="ti-search"></i></span><input class="form-control form-control-rounded" id="key-search" type="text" placeholder="Search ..."></div>
        </div>
        <div class="table-responsive">
            <div id="dt-filter_wrapper" class="dataTables_wrapper dt-bootstrap4 no-footer">
                <table class="table table-bordered w-100 dataTable no-footer dtr-inline" id="dt-filter" role="grid" aria-describedby="dt-filter_info" style="width: 981px;">
                    <thead class="thead-light">
                        <tr role="row">
                            <th class="sorting_asc" tabindex="0" aria-controls="dt-filter" rowspan="1" colspan="1" style="width: 31.5px;" aria-sort="ascending" aria-label="#: activate to sort column descending">#</th>
                            <th class="sorting" tabindex="0" aria-controls="dt-filter" rowspan="1" colspan="1" style="width: 94.5px;" aria-label="Order ID: activate to sort column ascending">Order ID</th>
                            <th class="sorting" tabindex="0" aria-controls="dt-filter" rowspan="1" colspan="1" style="width: 123.5px;" aria-label="Customer: activate to sort column ascending">Customer</th>
                            <th class="sorting" tabindex="0" aria-controls="dt-filter" rowspan="1" colspan="1" style="width: 116.5px;" aria-label="Total Price: activate to sort column ascending">Total Price</th>
                            <th class="sorting" tabindex="0" aria-controls="dt-filter" rowspan="1" colspan="1" style="width: 94.5px;" aria-label="Status: activate to sort column ascending">Status</th>
                            <th class="sorting" tabindex="0" aria-controls="dt-filter" rowspan="1" colspan="1" style="width: 104.5px;" aria-label="Payment: activate to sort column ascending">Payment</th>
                            <th class="sorting" tabindex="0" aria-controls="dt-filter" rowspan="1" colspan="1" style="width: 74.5px;" aria-label="Date: activate to sort column ascending">Date</th>
                            <th class="no-sort sorting_disabled" rowspan="1" colspan="1" style="width: 30px;" aria-label=""></th>
                        </tr>
                    </thead>
                    <tbody>













                        <tr role="row" class="odd">
                            <td tabindex="0" class="sorting_1">1</td>
                            <td><a href="javascript:;">#1254</a></td>
                            <td>Becky Brooks</td>
                            <td>$457</td>
                            <td><span class="badge badge-success badge-pill">Shipped</span></td>
                            <td>Paid</td>
                            <td>17.05.2018</td>
                            <td><a class="text-muted font-16" href="javascript:;"><i class="ti-trash"></i></a></td>
                        </tr>
                        <tr role="row" class="even">
                            <td tabindex="0" class="sorting_1">2</td>
                            <td><a href="javascript:;">#1253</a></td>
                            <td>Emma Johnson</td>
                            <td>$1200</td>
                            <td><span class="badge badge-success badge-pill">Shipped</span></td>
                            <td>Paid</td>
                            <td>17.05.2018</td>
                            <td><a class="text-muted font-16" href="javascript:;"><i class="ti-trash"></i></a></td>
                        </tr>
                        <tr role="row" class="odd">
                            <td tabindex="0" class="sorting_1">3</td>
                            <td><a href="javascript:;">#1252</a></td>
                            <td>Noah Williams</td>
                            <td>$780</td>
                            <td><span class="badge badge-primary badge-pill">Pending</span></td>
                            <td>Paid</td>
                            <td>16.05.2018</td>
                            <td><a class="text-muted font-16" href="javascript:;"><i class="ti-trash"></i></a></td>
                        </tr>
                        <tr role="row" class="even">
                            <td tabindex="0" class="sorting_1">4</td>
                            <td><a href="javascript:;">#1251</a></td>
                            <td>Sophia Jones</td>
                            <td>$105</td>
                            <td><span class="badge badge-success badge-pill">Completed</span></td>
                            <td>Paid</td>
                            <td>15.05.2018</td>
                            <td><a class="text-muted font-16" href="javascript:;"><i class="ti-trash"></i></a></td>
                        </tr>
                    </tbody>
                </table>
                <div class="dataTables_info" id="dt-filter_info" role="status" aria-live="polite">Showing 1 to 10 of 13 entries</div>
                <div class="dataTables_paginate paging_simple_numbers" id="dt-filter_paginate">
                    <ul class="pagination">
                        <li class="paginate_button page-item previous disabled" id="dt-filter_previous"><a href="#" aria-controls="dt-filter" data-dt-idx="0" tabindex="0" class="page-link">Previous</a></li>
                        <li class="paginate_button page-item active"><a href="#" aria-controls="dt-filter" data-dt-idx="1" tabindex="0" class="page-link">1</a></li>
                        <li class="paginate_button page-item "><a href="#" aria-controls="dt-filter" data-dt-idx="2" tabindex="0" class="page-link">2</a></li>
                        <li class="paginate_button page-item next" id="dt-filter_next"><a href="#" aria-controls="dt-filter" data-dt-idx="3" tabindex="0" class="page-link">Next</a></li>
                    </ul>
                </div>
            </div>
        </div>
    </div>
</div>