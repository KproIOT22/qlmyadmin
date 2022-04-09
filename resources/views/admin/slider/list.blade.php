<table class="table table-dark">
        <thead>
          <tr>
            <th>STT</th>
            <th>UserName</th>
            <th>Email</th>
            <th>Phone Number</th>
            <th>Action</th>
          </tr>
        </thead>
        <tbody class="table-border-bottom-0">
         @if (!empty($userList))
             @foreach ($userList as $key=>$item)
             <tr>
              <td>{{$key+1}}</td>
              <td>{{$item->fullname}}</td>
              <td>{{$item->email}}</td>
              <td>{{$item->phone_number}}</td>
              <td>
                <div class="dropdown">
                  <button type="button" class="btn p-0 dropdown-toggle hide-arrow" data-bs-toggle="dropdown">
                    <i class="bx bx-dots-vertical-rounded"></i>
                  </button>
                  <div class="dropdown-menu">
                    <a class="dropdown-item" href="javascript:void(0);">
                      <i class="fa-solid fa-eye me-1" ></i> View</a>
                    <a class="dropdown-item" href="{{route('admin/edit',['id'=>$item->id])}}"
                      ><i class="bx bx-edit-alt me-1"></i> Edit</a>
                  
                    <a onclick="return confirm('Bạn có chắc chắn muốn xóa?')" class="dropdown-item" href="{{route('admin/delete',['id'=>$item->id])}}"
                      ><i class="bx bx-trash me-1"></i> Delete</a
                    >
                  </div>
                </div></td>
            </tr>
             @endforeach
         @else
             <td colspan="4">Khong co nguoi dung</td>
         @endif
        </tbody>
      </table>