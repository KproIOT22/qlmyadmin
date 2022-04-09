@extends('admin.main')
@section('content')
@if (session('msg'))
<div class="alert alert-primary alert-dismissible" role="alert">
  {{session('msg')}}
  <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
</div>
@endif


@if ($errors->any())
<div class="alert alert-warning" role="alert">Dữ liệu không hợp lệ, vui lòng kiểm tra lại</div>
@endif


<div class="card">
    <div class="table-responsive text-nowrap" >
      <h5 class="card-header" style="display: inline-block;margin-right:60%">Thêm người dùng</h5>
      
    </div>
    <div class="table-responsive text-nowrap">
        <div class="card-body">
            <form method="POST">
              <div class="mb-3">
                <label class="form-label" for="basic-icon-default-fullname">Full Name</label>
                <div class="input-group input-group-merge">
                  <span id="basic-icon-default-fullname2" class="input-group-text"
                    ><i class="bx bx-user"></i
                  ></span>
                  <input
                    type="text"
                    name="fullname"
                    value="{{old('fullname')}}"
                    class="form-control"
                    id="basic-icon-default-fullname"
                    placeholder="John Doe"
                    aria-label="John Doe"
                    aria-describedby="basic-icon-default-fullname2"
                  />
                </div>
                @error('fullname')
                    <span style="color:red;">{{$message}}</span>
                @enderror
              </div>
              <div class="mb-3">
                <label class="form-label" for="basic-icon-default-email">Email</label>
                <div class="input-group input-group-merge">
                  <span class="input-group-text"><i class="bx bx-envelope"></i></span>
                  <input
                    type="text"
                    name="email"
                    value="{{old('fullname')}}"
                    id="basic-icon-default-email"
                    class="form-control"
                    placeholder="john.doe"
                    aria-label="john.doe"
                    aria-describedby="basic-icon-default-email2"
                  />
                 
                </div>
                @error('email')
                <span style="color:red;">{{$message}}</span>
            @enderror
              </div>
              <div class="mb-3">
                <label class="form-label" for="basic-icon-default-phone">Phone Number</label>
                <div class="input-group input-group-merge">
                  <span id="basic-icon-default-phone2" class="input-group-text"
                    ><i class="bx bx-phone"></i
                  ></span>
                  <input
                    type="text"
                    name="phone_number"
                    value="{{{old('phone_number')}}}"
                    id="basic-icon-default-phone"
                    class="form-control phone-mask"
                    placeholder="658 799 8941"
                    aria-label="658 799 8941"
                    aria-describedby="basic-icon-default-phone2"
                  />
                </div>
                @error('phone_number')
                <span style="color:red;">{{$message}}</span>
                @enderror
              </div>
              
              <button type="submit" class="btn btn-primary">Send</button>
              <a href="{{route('admin')}}" class="btn btn-warning">Back</a>
              @csrf
            </form>
          </div>
    </div>
  </div>

@endsection