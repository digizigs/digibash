
@extends('admin.layout.admin')

@section('title','Add Impersonate')


@section('style')



@endsection


@section('content')

<div class="content-body " id="contentbody">

  <div class="card">

    <div class="d-sm-flex align-items-right justify-content-between mg-b-5 mg-lg-b-5 mg-xl-b-5">
      <div>
        <nav aria-label="breadcrumb">
          <ol class="breadcrumb breadcrumb-style1 mg-b-10">
            <li class="breadcrumb-item"><a href="{{route('app.admin.home')}}">Dashboard</a></li>
            <li class="breadcrumb-item"><a href="{{route('impersonate.index')}}">Impersonates</a></li>
            <li class="breadcrumb-item active" aria-current="page">Impersonate</li>
          </ol>
        </nav>
      </div>
    </div>

    <div class="">
      <h4>Add New Impersonate</h4>

      <div class="mg-t-50">
        <form method="post" action="{{route('impersonate.store')}}">
          @csrf

          <div class="wpinput form-group">
              <label class="d-block"><b>Example Title</b></label>
              <input type="text" class="form-control @error('name') is-invalid @enderror"  name="name" value="{{old('name')}}">
              @error('name')
                  <span class="" role="alert">
                     <strong><i>{{ $message }}</i></strong>
                  </span>
               @enderror
          </div>


          <button class="btn btn-primary btn-xs" id="btnpublish">Save</button>
          <a href="{{route('impersonate.index')}}" class="btn btn-dark btn-xs">Cancel</a>


        </form>
      </div>

    </div>

  </div>

</div>

@endsection


@section('modal')



@endsection


@section('javascript')


  	<script>

  	</script>

@endsection
