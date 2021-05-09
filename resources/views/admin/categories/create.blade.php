@extends('admin.layout.master')

@section('content')

<div class="row">

    <div class="col-sm-12">

        <div class="box">

            <div class="box-header with-border">

                <h3 class="box-title">ایجاد دسته بندی</h3>

              </div>

                <form action="{{ route('categories.store') }}" method="post" >

                    @csrf

    <div class="mb-3">
      <label for="disabledTextInput" class="form-label"> عنوان :</label>
      <input type="text" id="disabledTextInput" name="title" class="form-control" placeholder="عنوان">
    </div>
    <div class="mb-3">
      <label for="disabledSelect" class="form-label"> دسته بندی :</label>

      <select name="category_id" id="category_id" class="form-control">

        <option value="" disabled selected>دسته والد را انتخاب کنید ..</option>

        @foreach($categories as $category)

            <option value="{{$category->id}}">{{$category->title}}</option>

        @endforeach

    </select>

    </div>

    <br/>

    <input type="submit" class="btn btn-sm btn-primary" value="ثبت">

</form>

        </div>
    </div>
</div>

@endsection
