<div class="container-fluid py-4">
    <div class="card">
        <div class="card-body pt-4 p-3">
            @if ($showSuccesNotification)
                <div wire:model="showSuccesNotification" class="mt-3 alert alert-primary alert-dismissible fade show" role="alert">
                    <span class="alert-icon text-white"><i class="ni ni-like-2"></i></span>
                    <span
                        class="alert-text text-white">{{ __('New leave type created successfuly!') }}</span>
                        <button wire:click="$set('showSuccesNotification', false)" type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close">
                    </button>
                </div>
            @endif
            <form wire:submit.prevent="save" action="#" method="POST" role="form text-left">
                <!-- Organization Details !-->
                <div class="row">
                    <div class="col-md-6">
                        <div class="form-group">
                            <label for="leave-name" class="form-control-label">{{ __('Leave type') }}</label>
                            <div class="@error('leave.name')border border-danger rounded-3 @enderror">
                                <input wire:model="leave.name" class="form-control" type="text" placeholder="Leave type" id="leave-name">
                            </div>
                            @error('leave.name') <div class="text-danger">{{ $message }}</div> @enderror
                        </div>
                    </div>
                    <div class="col-md-6">
                        <div class="form-group">
                            <label for="leave-days" class="form-control-label">{{ __('Leave days per employee') }}</label>
                            <div class="@error('leave.days')border border-danger rounded-3 @enderror">
                                <input wire:model="leave.days" class="form-control" type="text" placeholder="Leave days" id="leave-days">
                            </div>
                            @error('leave.days') <div class="text-danger">{{ $message }}</div> @enderror
                        </div>
                    </div>
                </div>

                <div class="d-flex justify-content-end">
                    <button type="submit" class="btn bg-gradient-dark btn-md mt-4 mb-4">{{ 'Save Changes' }}</button>
                </div>
            </form>

        </div>
    </div>
</div>