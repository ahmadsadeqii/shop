@extends('admin.layout.master')

@section('content')

<div class="row">

    <div class="col-sm-12">

        <div class="box">

            <div class="box-header with-border">

                <h3 class="box-title">دسته بندی</h3>

              </div>

            <div class="table-responsive">

                <table id="example5" class="table table-bordered table-striped" style="width:100%">
					<thead>
						<tr>
							<th>شناسه کاربر</th>
							<th>عنوان</th>
							<th>دسته والد</th>
							<th>ویرایش</th>
							<th>حذف</th>
						</tr>
					</thead>
					<tbody>
                        @foreach ($categories as $category)
                        <tr>
							<td>{{ $category->id }}</td>
							<td>{{ $category->title }}</td>
							<td>{{ optional($category->parent)->title }}</td>
							<td><a href="{{ route('categories.edit' , $category) }}" class="btn btn-sm btn-primary" > ویرایش </td>
							<td>

                                <form action="{{ route('categories.destroy' , $category) }}" method="POST">

                                    @csrf
                                    @method('DELETE')

                                    <input type="submit" value="حذف" class="btn btn-sm btn-danger" >

                                </form>

                            </td>
						</tr>
                        @endforeach

					</tbody>
					<tfoot>
						<tr>
							<th>شناسه کاربر</th>
                            <th>عنوان</th>
                            <th>دسته والد</th>

						</tr>
					</tfoot>
				</table>
            </div>

        </div>

    </div>

</div>


@endsection

@section('scripts')


	<!-- This is data table -->
    <script src="/admin/assets/vendor_components/datatable/datatables.min.js"></script>

	<!-- Superieur Admin for Data Table -->
	<script src="/admin/js/pages/data-table.js"></script>



@endsection
