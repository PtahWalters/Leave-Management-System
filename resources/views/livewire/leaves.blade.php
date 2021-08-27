<div class="container-fluid py-4">
    <div class="row">
      <div class="col-12">
        <div class="card mb-4">
          <div class="card-body px-0 pt-0 pb-2">
            <div class="table-responsive p-0">
              <table class="table align-items-center justify-content-center mb-0">
                <thead>
                  <tr>
                    <th class="text-uppercase text-secondary text-xs font-weight-bolder opacity-7">Leave type</th>
                    <th class="text-uppercase text-secondary text-xs font-weight-bolder opacity-7 ps-2">Number of days</th>
                    <th></th>
                  </tr>
                </thead>
                <tbody>
                  @foreach($leave_types as $leave)
                      <tr>
                        <td>
                          <p class="ms-3">{{ $leave->name }}</p>
                        </td>
                        <td>
                          <p>{{ $leave->days }}</p>
                        </td>
                        <td class="align-middle">
                          <a class="btn btn-link text-secondary pe-3 ps-0 mb-0 ms-auto" wire:click="edit({{ $leave->id }})">Edit</a>
                          <a class="btn btn-link pe-3 ps-0 mb-0 ms-auto" wire:click="delete({{ $leave->id }})">Delete</a>
                        </td>
                      </tr>
                  @endforeach
                </tbody>
              </table>
            </div>
          </div>
        </div>
      </div>
    </div>
  </div>
</main>
