<div class="container-fluid py-4">
    <div class="row">
      <div class="col-12">
        <div class="card mb-4">
          <div class="card-body px-0 pt-0 pb-2">
            <div class="table-responsive p-0">
              <table class="table align-items-center justify-content-center mb-0">
                <thead>
                  <tr>
                    <th class="text-uppercase text-secondary text-xs font-weight-bolder opacity-7">Holiday name</th>
                    <th class="text-uppercase text-secondary text-xs font-weight-bolder opacity-7 ps-2">Holiday date</th>
                    <th></th>
                  </tr>
                </thead>
                <tbody>
                  @foreach($holidays as $holiday)
                      <tr>
                        <td>
                          <p class="ms-3">{{ $holiday->name }}</p>
                        </td>
                        <td>
                          <p>{{ $holiday->date->iso }}</p>
                        </td>
                        <td class="align-middle">
                          <a href="#" class="mx-3" data-bs-toggle="tooltip" data-bs-original-title="Edit holiday">
                              <i class="fas fa-user-edit text-secondary"></i>
                          </a>
                          <a href="#" class="mx-3" data-bs-toggle="tooltip" data-bs-original-title="Delete holiday">
                              <i class="cursor-pointer fas fa-trash text-danger"></i>
                          </a>
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
