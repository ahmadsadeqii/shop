@extends('admin.layout.master')

@section('content')

<div class="row">

    <div class="col-sm-12">

        <div class="box">

            <div class="box-header with-border">

                <h3 class="box-title">ویرایش دسته بندی</h3>

              </div>

                <form action="{{ route('categories.update' , $category) }}" method="post" >

                    @csrf
                    @method('PATCH')

    <div class="mb-3">
      <label for="disabledTextInput" class="form-label"> عنوان :</label>
      <input type="text" id="disabledTextInput" name="title" value="{{ $category->title }}" class="form-control" placeholder="عنوان">
    </div>
    <div class="mb-3">

      <label for="disabledSelect" class="form-label"> دسته بندی :</label>

      <select id="category_id" name="category_id" class="form-control">

        <option disabled selected>  ...دسته والد را انتخاب کنید </option>

        @foreach ($categories as $parent)

        <option

        @if ( $parent->id == $category->category_id )

        selected

    @endif

        value="$parent->id"> {{ $parent->title }} </option>

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
